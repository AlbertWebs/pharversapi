<!DOCTYPE html>
<html lang="en">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<head>
    <title>{{$SiteSettings->sitename}} - Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-50">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden" x-data="{ sidebarCollapsed: localStorage.getItem('sidebarCollapsed') === 'true' }" x-init="$watch('sidebarCollapsed', value => { const sidebar = document.getElementById('sidebar'); if (sidebar) { sidebar.__x.$data.collapsed = value; } })">
        <!-- Sidebar -->
        @include('admin.sidebar')
        
        <!-- Main Content Area -->
        <div :class="sidebarCollapsed ? 'lg:ml-20' : 'lg:ml-64'"
             class="flex-1 flex flex-col overflow-hidden ml-0 transition-all duration-300">
            <!-- Top Navigation Bar -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="lg:hidden text-gray-600 hover:text-gray-900">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <!-- Search Bar -->
                    <div class="hidden md:flex flex-1 max-w-xl mx-4">
                        <div class="relative w-full">
                            <input type="text" placeholder="Search..." 
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <!-- Right Side Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <div class="relative">
                            <button class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">
                                <i class="fas fa-bell text-xl"></i>
                                <?php $Message = App\Models\Message::all() ?>
                                <?php $User = App\Models\User::all() ?>
                                <?php $Posts = App\Models\Blog::all() ?>
                                <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                            </button>
                        </div>
                        
                        <!-- User Dropdown -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                <img src="{{ Auth::user()->avatarUrl }}" 
                                     alt="{{ Auth::user()->name }}" 
                                     class="w-10 h-10 rounded-full object-cover">
                                <div class="hidden md:block text-left">
                                    <p class="text-sm font-medium text-gray-900">{{Auth::user()->name}}</p>
                                    <p class="text-xs text-gray-500">{{Auth::user()->address ?? 'Administrator'}}</p>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 hidden md:block"></i>
                            </button>
                            
                            <!-- Dropdown Menu -->
                            <div x-show="open" 
                                 @click.away="open = false"
                                 x-transition
                                 class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50">
                                <a href="{{url('/')}}/admin/editUser/{{Auth::user()->id}}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user-edit w-5"></i>
                                    <span>My Profile</span>
                                </a>
                                @if(Auth::User()->is_admin == "1")
                                <div class="border-t border-gray-200 my-2"></div>
                                <a href="{{url('/')}}/admin/SiteSettings" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-cog w-5"></i>
                                    <span>Site Settings</span>
                                </a>
                                <a href="{{url('/')}}/admin/users" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-users w-5"></i>
                                    <span>Manage Users</span>
                                </a>
                                <a href="{{url('/')}}/admin/admins" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user-shield w-5"></i>
                                    <span>Manage Admins</span>
                                </a>
                                <a href="{{url('/')}}/admin/addUser" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user-plus w-5"></i>
                                    <span>Add New User</span>
                                </a>
                                @endif
                                <div class="border-t border-gray-200 my-2"></div>
                                <a href="{{url('/')}}/logout" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    <i class="fas fa-sign-out-alt w-5"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <!-- Flash Messages -->
                @if(Session::has('message'))
                    <div class="mx-6 mt-4 animate-slide-in">
                        <div class="admin-alert admin-alert-success">
                            <i class="fas fa-check-circle text-xl flex-shrink-0"></i>
                            <span class="font-medium">{{ Session::get('message') }}</span>
                        </div>
                    </div>
                @endif
                
                @if(Session::has('messageError'))
                    <div class="mx-6 mt-4 animate-slide-in">
                        <div class="admin-alert admin-alert-error">
                            <i class="fas fa-exclamation-circle text-xl flex-shrink-0"></i>
                            <span class="font-medium">{{ Session::get('messageError') }}</span>
                        </div>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- CKEditor Configuration -->
    <script>
        // Initialize CKEditor for all textareas with class 'ckeditor'
        document.addEventListener('DOMContentLoaded', function() {
            // Replace all textareas with id 'article-ckeditor' or class 'ckeditor'
            if (document.getElementById('article-ckeditor')) {
                CKEDITOR.replace('article-ckeditor', {
                    filebrowserUploadUrl: "{{ route('admin.product.uploadMedia', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            }
            
            // Replace all textareas with name 'ckeditor'
            var ckeditorTextareas = document.querySelectorAll('textarea[name="ckeditor"]');
            ckeditorTextareas.forEach(function(textarea) {
                if (!textarea.id) {
                    textarea.id = 'ckeditor-' + Math.random().toString(36).substr(2, 9);
                }
                CKEDITOR.replace(textarea.id, {
                    filebrowserUploadUrl: "{{ route('admin.product.uploadMedia', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            });
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });
        
        // Image preview functionality
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var imgPreview = document.getElementById('img-upload');
                    if (imgPreview) {
                        imgPreview.src = e.target.result;
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        // File input change handler
        document.addEventListener('change', function(e) {
            if (e.target.type === 'file' && e.target.id === 'imgInp') {
                readURL(e.target);
            }
        });
    </script>
    
    @yield('scripts')
</body>
@endforeach
</html>
