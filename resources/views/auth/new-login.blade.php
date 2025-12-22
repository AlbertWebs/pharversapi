<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - African Pharmaceutical Review</title>
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
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
            cursor: pointer;
        }

        .form-check-label {
            color: var(--gray-700);
            font-size: 0.9rem;
            cursor: pointer;
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

        .btn-link {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid;
        }

        .alert-success {
            background: #d1fae5;
            border-color: var(--success-color);
            color: #065f46;
        }

        .alert-danger {
            background: #fee2e2;
            border-color: var(--danger-color);
            color: #991b1b;
        }

        .alert-info {
            background: #dbeafe;
            border-color: var(--primary-color);
            color: #1e40af;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            color: var(--gray-600);
            font-size: 0.9rem;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background: var(--gray-200);
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        .register-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
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
            <p>Stay informed with the latest news, publications, and updates from the world of pharmaceuticals.</p>
        </div>

        <div class="auth-right">
            <div class="auth-header">
                <h2>Welcome Back</h2>
                <p>Sign in to your account to continue</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif

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

            <form method="POST" action="{{ route('login') }}" id="loginForm" novalidate>
                @csrf

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
                            autofocus
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
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                        >
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember" 
                        class="form-check-input"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <label for="remember" class="form-check-label">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn-primary" id="submitBtn">
                    <span class="loading" id="loadingSpinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    Sign In
                </button>

                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}" class="btn-link">
                        <i class="fas fa-key"></i> Forgot your password?
                    </a>
                </div>
            </form>

            <div class="register-link">
                Don't have an account? <a href="{{ route('register') }}">Sign up here</a>
            </div>
        </div>
    </div>

    <script>
        // Password toggle
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
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

        // Form validation
        const form = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const submitBtn = document.getElementById('submitBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');

        form.addEventListener('submit', function(e) {
            let isValid = true;

            // Reset previous errors
            emailInput.classList.remove('is-invalid');
            passwordInput.classList.remove('is-invalid');

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim()) {
                showError(emailInput, 'Email is required');
                isValid = false;
            } else if (!emailRegex.test(emailInput.value)) {
                showError(emailInput, 'Please enter a valid email address');
                isValid = false;
            }

            // Password validation
            if (!passwordInput.value.trim()) {
                showError(passwordInput, 'Password is required');
                isValid = false;
            } else if (passwordInput.value.length < 6) {
                showError(passwordInput, 'Password must be at least 6 characters');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                return false;
            }

            // Show loading state
            submitBtn.disabled = true;
            loadingSpinner.classList.add('active');
            submitBtn.innerHTML = '<span class="loading active"><i class="fas fa-spinner fa-spin"></i></span> Signing in...';
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

        // Real-time validation
        emailInput.addEventListener('blur', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value && !emailRegex.test(this.value)) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });

        passwordInput.addEventListener('blur', function() {
            if (this.value && this.value.length < 6) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
    </script>
</body>
</html>

