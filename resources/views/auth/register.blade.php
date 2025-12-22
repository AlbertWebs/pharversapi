<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - African Pharmaceutical Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1e40af;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-900: #111827;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .auth-left {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .auth-left h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .auth-left p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .auth-right {
            padding: 60px 50px;
        }

        .auth-header {
            margin-bottom: 2rem;
        }

        .auth-header h2 {
            font-size: 2rem;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .auth-header p {
            color: var(--gray-600);
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--gray-700);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-600);
            z-index: 10;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid var(--gray-200);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-control.is-invalid {
            border-color: var(--danger-color);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-600);
            cursor: pointer;
            padding: 5px;
            z-index: 10;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .invalid-feedback {
            display: block;
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .form-check {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
            margin-top: 0.25rem;
            cursor: pointer;
        }

        .form-check-label {
            color: var(--gray-700);
            font-size: 0.9rem;
            cursor: pointer;
            line-height: 1.5;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .login-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid;
        }

        .alert-danger {
            background: #fee2e2;
            border-color: var(--danger-color);
            color: #991b1b;
        }

        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
            }

            .auth-left {
                display: none;
            }

            .auth-right {
                padding: 40px 30px;
            }
        }

        .loading {
            display: none;
        }

        .loading.active {
            display: inline-block;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-left">
            <h1><i class="fas fa-pills"></i> African Pharmaceutical Review</h1>
            <p>Join our community to receive exclusive newsletters and stay up-to-date with cutting-edge research.</p>
        </div>

        <div class="auth-right">
            <div class="auth-header">
                <h2>Create Account</h2>
                <p>Sign up to get started</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    <ul class="mb-0" style="padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" id="registerForm" novalidate>
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">
                        <i class="fas fa-user"></i> Full Name
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            required
                            autocomplete="name"
                            autofocus
                        >
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope"></i> Email Address
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                            autocomplete="email"
                        >
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock"></i> Password
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            placeholder="Enter your password (min. 8 characters)"
                            required
                            autocomplete="new-password"
                        >
                        <button type="button" class="password-toggle" onclick="togglePassword('password')">
                            <i class="fas fa-eye" id="toggleIconPassword"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">
                        <i class="fas fa-lock"></i> Confirm Password
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="form-control" 
                            placeholder="Confirm your password"
                            required
                            autocomplete="new-password"
                        >
                        <button type="button" class="password-toggle" onclick="togglePassword('password_confirmation')">
                            <i class="fas fa-eye" id="toggleIconPasswordConfirmation"></i>
                        </button>
                    </div>
                </div>

                <div class="form-check">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms" 
                        class="form-check-input @error('terms') is-invalid @enderror"
                        required
                    >
                    <label for="terms" class="form-check-label">
                        I agree to the <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a>
                    </label>
                </div>
                @error('terms')
                    <div class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror

                <button type="submit" class="btn-primary" id="submitBtn">
                    <span class="loading" id="loadingSpinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    Create Account
                </button>
            </form>

            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Sign in here</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById('toggleIcon' + (fieldId === 'password' ? 'Password' : 'PasswordConfirmation'));
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        const form = document.getElementById('registerForm');
        const submitBtn = document.getElementById('submitBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');

        form.addEventListener('submit', function(e) {
            let isValid = true;

            // Reset errors
            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

            // Name validation
            const nameInput = document.getElementById('name');
            if (!nameInput.value.trim()) {
                showError(nameInput, 'Name is required');
                isValid = false;
            }

            // Email validation
            const emailInput = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim()) {
                showError(emailInput, 'Email is required');
                isValid = false;
            } else if (!emailRegex.test(emailInput.value)) {
                showError(emailInput, 'Please enter a valid email address');
                isValid = false;
            }

            // Password validation
            const passwordInput = document.getElementById('password');
            if (!passwordInput.value.trim()) {
                showError(passwordInput, 'Password is required');
                isValid = false;
            } else if (passwordInput.value.length < 8) {
                showError(passwordInput, 'Password must be at least 8 characters');
                isValid = false;
            }

            // Password confirmation
            const passwordConfirmationInput = document.getElementById('password_confirmation');
            if (passwordInput.value !== passwordConfirmationInput.value) {
                showError(passwordConfirmationInput, 'Passwords do not match');
                isValid = false;
            }

            // Terms validation
            const termsInput = document.getElementById('terms');
            if (!termsInput.checked) {
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                return false;
            }

            submitBtn.disabled = true;
            loadingSpinner.classList.add('active');
            submitBtn.innerHTML = '<span class="loading active"><i class="fas fa-spinner fa-spin"></i></span> Creating account...';
        });

        function showError(input, message) {
            input.classList.add('is-invalid');
            let errorDiv = input.parentElement.nextElementSibling;
            if (!errorDiv || !errorDiv.classList.contains('invalid-feedback')) {
                errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.setAttribute('role', 'alert');
                input.parentElement.parentElement.appendChild(errorDiv);
            }
            errorDiv.innerHTML = '<strong>' + message + '</strong>';
        }
    </script>
</body>
</html>
