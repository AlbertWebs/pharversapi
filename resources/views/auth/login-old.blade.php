<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - African Pharmaceutical Review</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS (for grid system) -->
    <link href="{{asset('subscribers/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Original Subscribers CSS -->
    <link href="{{asset('subscribers/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('subscribers/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('subscribers/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('subscribers/css/custom.css')}}" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    
    <div class="container-fluid full-height">
        <div class="row row-height">
            <!-- Left Side - Content Left -->
            <div class="col-lg-6 content-left">
                <div class="content-left-wrapper">
                    <a href="{{url('/')}}" id="logo">
                        <img src="{{asset('subscribers/img/aprlogo.png')}}" alt="African Pharmaceutical Review" width="250">
                    </a>
                    
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#0"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <figure>
                            <img src="{{asset('subscribers/img/info_graphic_1.svg')}}" alt="" class="img-fluid">
                        </figure>
                        <h2>Dashboard Login</h2>
                        <p>
                            Stay informed with the latest news, publications, and updates from the world of pharmaceuticals by subscribing to African Pharmaceutical Review. Join our community to receive exclusive newsletters and stay up-to-date with cutting-edge research and developments in the field.
                        </p>
                        <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                    </div>
                    
                    <div class="copy">© {{date('Y')}} African Pharmaceutical Review</div>
                </div>
            </div>
            
            <!-- Right Side - Content Right / Login Form -->
            <div class="col-lg-6 content-right" id="start">
                <div id="wizard_container" class="my-auto">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    
                    <!-- Error Messages -->
                    @if(session('error') || $errors->any())
                        <div class="login-error-alert" role="alert" style="display: block !important; visibility: visible !important; opacity: 1 !important;">
                            <div class="error-alert-content">
                                <i class="fas fa-exclamation-circle error-icon"></i>
                                <div class="error-message">
                                    <strong class="error-title">Login Error</strong>
                                    @if(session('error'))
                                        <p class="error-text">{{ session('error') }}</p>
                                    @endif
                                    @if($errors->any())
                                        <ul class="error-list">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <button type="button" class="error-close" onclick="this.parentElement.parentElement.style.display='none'">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                    
                    <form id="wrappeda" action="{{ route('login') }}" method="POST">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        
                        <div id="middle-wizard">
                            <div class="step">
                                <h3 class="main_question">Please fill with your details</h3>
                                
                                <div class="form-group">
                                    <label for="email" class="form-label">
                                        <i class="fas fa-envelope"></i> Email Address
                                    </label>
                                    <div class="input-wrapper">
                                        <i class="input-icon fas fa-envelope"></i>
                                        <input type="email" 
                                               id="email"
                                               name="email" 
                                               value="{{ old('email') }}"
                                               class="form-control required @error('email') is-invalid @enderror" 
                                               placeholder="Enter your email address"
                                               required
                                               autofocus>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="form-label">
                                         Password
                                    </label>
                                    <div class="input-wrapper password-wrapper">
                                        <i class="input-icon fas fa-lock"></i>
                                        <input type="password" 
                                               id="password"
                                               name="password" 
                                               class="form-control required @error('password') is-invalid @enderror" 
                                               placeholder="Enter your password"
                                               required>
                                        <button type="button" class="password-toggle" aria-label="Toggle password visibility">
                                            <i class="fas fa-eye"></i>
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <span style="color: red;" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input value="Proceed" type="submit" class="login-btns" />
                                </div>
                                
                                @if (Route::has('password.request'))
                                    <div class="form-group text-center mt-4">
                                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                                            <i class="fas fa-key"></i>
                                            <span>{{ __('Forgot Your Password?') }}</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COMMON SCRIPTS -->
    <script src="{{asset('subscribers/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('subscribers/js/common_scripts.min.js')}}"></script>
    <script src="{{asset('subscribers/js/velocity.min.js')}}"></script>
    <script src="{{asset('subscribers/js/functions.js')}}"></script>
    
    <!-- Wizard script -->
    <script src="{{asset('subscribers/js/survey_func.js')}}"></script>
    
    <script>
        // Form submission handler
        document.getElementById('wrappeda').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.login-btns');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.value = 'Signing in...';
                submitBtn.style.opacity = '0.7';
                submitBtn.style.cursor = 'not-allowed';
            }
        });

        // Password toggle functionality
        (function() {
            function initPasswordToggle() {
                const passwordToggle = document.querySelector('#middle-wizard .password-toggle');
                const passwordInput = document.getElementById('password');
                
                if (passwordToggle && passwordInput) {
                    // Remove any existing listeners by cloning
                    const newToggle = passwordToggle.cloneNode(true);
                    passwordToggle.parentNode.replaceChild(newToggle, passwordToggle);
                    
                    newToggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        const currentType = passwordInput.type;
                        passwordInput.type = currentType === 'password' ? 'text' : 'password';
                        newToggle.classList.toggle('active');
                        return false;
                    });
                    
                    newToggle.addEventListener('mousedown', function(e) {
                        e.preventDefault();
                        return false;
                    });
                }
            }
            
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initPasswordToggle);
            } else {
                initPasswordToggle();
            }
        })();
    </script>
</body>
</html>
