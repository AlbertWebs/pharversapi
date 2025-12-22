<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

/**
 * Modern Authentication Controller
 * 
 * Handles all authentication operations including:
 * - Login with rate limiting
 * - Registration
 * - Logout
 * - Password reset
 * - Session management
 */
class AuthController extends Controller
{
    /**
     * Maximum login attempts per minute
     */
    const MAX_LOGIN_ATTEMPTS = 5;
    
    /**
     * Lockout duration in seconds (15 minutes)
     */
    const LOCKOUT_DURATION = 900;

    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        // Redirect if already authenticated
        if (Auth::check()) {
            return $this->redirectToDashboard();
        }
        
        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request): RedirectResponse
    {
        // Rate limiting check
        $this->checkRateLimit($request);

        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
        ]);

        $email = $credentials['email'];
        $remember = $request->filled('remember');

        // Attempt authentication
        // Note: Auth::attempt() automatically regenerates session for security
        if (Auth::attempt($credentials, $remember)) {
            // Clear rate limiter on successful login
            RateLimiter::clear($this->throttleKey($request));
            
            $user = Auth::user();

            // Check if account is active
            if ($user->status != 1) {
                Auth::logout();
                
                Log::warning('Login attempt with inactive account', [
                    'user_id' => $user->id,
                    'email' => $email,
                    'ip' => $request->ip(),
                ]);

                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => 'Your account has been deactivated. Please contact administrator.']);
            }

            // Log successful login (minimal logging for performance)
            Log::info('User logged in successfully', [
                'user_id' => $user->id,
                'email' => $email,
                'ip' => $request->ip(),
            ]);

            // Get redirect response - session is already set by Auth::attempt()
            $redirectResponse = $this->redirectToDashboard();
            
            // Ensure session is saved with the response
            // This ensures the session cookie is sent with the redirect
            $request->session()->save();
            
            return $redirectResponse;
        }

        // Increment rate limiter on failed attempt
        RateLimiter::hit($this->throttleKey($request), self::LOCKOUT_DURATION);

        // Log failed login attempt
        Log::warning('Failed login attempt', [
            'email' => $email,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'attempts' => RateLimiter::attempts($this->throttleKey($request)),
        ]);

        // Return error
        throw ValidationException::withMessages([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Show registration form
     */
    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return $this->redirectToDashboard();
        }
        
        return view('auth.register');
    }

    /**
     * Handle registration request
     */
    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);

        // Create user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'type' => 0, // Regular user
            'status' => 1, // Active
        ]);

        // Log user in
        Auth::login($user);
        $request->session()->regenerate();

        Log::info('New user registered', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip(),
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Registration successful! Welcome to African Pharmaceutical Review.');
    }

    /**
     * Handle logout request
     */
    public function logout(Request $request): RedirectResponse
    {
        $user = Auth::user();
        
        if ($user) {
            Log::info('User logged out', [
                'user_id' => $user->id,
                'email' => $user->email,
                'ip' => $request->ip(),
            ]);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
    }

    /**
     * Show password reset request form
     */
    public function showPasswordResetRequestForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle password reset request
     */
    public function sendPasswordResetLink(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.exists' => 'We could not find a user with that email address.',
        ]);

        // Generate reset token
        $user = User::where('email', $request->email)->first();
        $token = Str::random(64);
        
        // Store token in password_reset_tokens table
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $user->email],
            [
                'token' => Hash::make($token),
                'created_at' => now(),
            ]
        );

        // In a real application, send email here
        // For now, we'll log it
        Log::info('Password reset requested', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip(),
        ]);

        return back()->with('success', 'Password reset link has been sent to your email address.');
    }

    /**
     * Show password reset form
     */
    public function showPasswordResetForm(Request $request, $token)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    /**
     * Handle password reset
     */
    public function resetPassword(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
        ]);

        // Verify token
        $resetRecord = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if (!$resetRecord || !Hash::check($request->token, $resetRecord->token)) {
            return back()->withErrors(['email' => 'Invalid or expired reset token.']);
        }

        // Check if token is expired (60 minutes)
        if (now()->diffInMinutes($resetRecord->created_at) > 60) {
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            return back()->withErrors(['email' => 'Reset token has expired. Please request a new one.']);
        }

        // Update password
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete reset token
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        Log::info('Password reset successful', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip(),
        ]);

        return redirect()->route('login')
            ->with('success', 'Your password has been reset successfully. Please login with your new password.');
    }

    /**
     * Redirect user to appropriate dashboard based on role
     * Optimized for performance - minimal logging and direct redirects
     */
    protected function redirectToDashboard(): RedirectResponse
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Authentication failed. Please try again.');
        }
        
        // Get user type efficiently - use direct attribute access for speed
        $userType = $user->getRawOriginal('type') ?? $user->getAttributes()['type'] ?? 0;

        // Direct redirects without extra logging for better performance
        if ($userType == 1) {
            return redirect()->route('admin.home')->with('success', 'Welcome back!');
        } elseif ($userType == 2) {
            return redirect()->route('manager.home')->with('success', 'Welcome back!');
        } else {
            return redirect()->route('dashboard')->with('success', 'Welcome back!');
        }
    }

    /**
     * Check rate limit for login attempts
     */
    protected function checkRateLimit(Request $request): void
    {
        $key = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($key, self::MAX_LOGIN_ATTEMPTS)) {
            $seconds = RateLimiter::availableIn($key);
            
            Log::warning('Login rate limit exceeded', [
                'email' => $request->email,
                'ip' => $request->ip(),
                'seconds_remaining' => $seconds,
            ]);

            throw ValidationException::withMessages([
                'email' => "Too many login attempts. Please try again in " . ceil($seconds / 60) . " minutes.",
            ]);
        }
    }

    /**
     * Get the throttle key for rate limiting
     */
    protected function throttleKey(Request $request): string
    {
        return Str::lower($request->input('email')) . '|' . $request->ip();
    }
}

