<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            Log::warning('UserAccess middleware: User not authenticated', [
                'route' => $request->route()->getName(),
                'url' => $request->url(),
                'expected_type' => $userType,
            ]);
            return redirect()->route('login');
        }

        $user = Auth::user();
        // Get raw type value for faster comparison (avoid accessor overhead)
        $userTypeRaw = $user->getRawOriginal('type') ?? $user->getAttributes()['type'] ?? 0;
        
        // Map integer types to string types for comparison
        $typeMap = [0 => 'user', 1 => 'admin', 2 => 'manager'];
        $userTypeAccessor = $typeMap[$userTypeRaw] ?? 'user';
        
        // Only log if there's a mismatch (reduces logging overhead)
        if($userTypeAccessor != $userType){
            Log::info('UserAccess middleware check', [
                'user_id' => $user->id,
                'user_type_accessor' => $userTypeAccessor,
                'expected_type' => $userType,
                'route' => $request->route()?->getName(),
                'url' => $request->url(),
            ]);
        }

        // Check if user type matches the required type
        if($userTypeAccessor == $userType){
            return $next($request);
        }

        // Redirect based on actual user type (no logging for performance)
        if ($userTypeAccessor == 'admin') {
            return redirect()->route('admin.home');
        }else if ($userTypeAccessor == 'manager') {
            return redirect()->route('manager.home');
        }else{
            // Regular user - redirect to dashboard
            return redirect()->route('dashboard');
        }

        return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}
