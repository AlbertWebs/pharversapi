<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<!-- Sidebar -->
<aside id="sidebar" 
      x-data="{ collapsed: localStorage.getItem('sidebarCollapsed') === 'true' }"
      x-init="$watch('collapsed', value => localStorage.setItem('sidebarCollapsed', value))"
      :class="collapsed ? 'w-20' : 'w-64'"
      class="fixed inset-y-0 left-0 z-50 bg-gradient-to-b from-gray-900 via-gray-900 to-gray-800 text-white transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out shadow-2xl border-r border-gray-700/50">
    <div class="flex flex-col h-full">
        <!-- Logo & Toggle -->
        <div class="flex items-center justify-between px-4 py-5 border-b border-gray-700/50">
            <a href="{{url('/')}}/manager/dashboard/home" 
               class="flex items-center space-x-3 transition-opacity duration-200"
               :class="collapsed ? 'opacity-0 w-0 overflow-hidden' : 'opacity-100'">
                <img src="{{url('/')}}/uploads/logo/{{$SiteSettings->favicon ?? $SiteSettings->logo}}" 
                     alt="{{$SiteSettings->sitename}}" 
                     class="h-8 w-auto">
            </a>
            <div class="flex items-center space-x-2">
                <button @click="collapsed = !collapsed" 
                        class="hidden lg:flex items-center justify-center w-8 h-8 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200"
                        title="Toggle Sidebar">
                    <i class="fas fa-chevron-left text-sm transition-transform duration-300" :class="collapsed ? 'rotate-180' : ''"></i>
                </button>
                <button id="close-sidebar" class="lg:hidden text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg p-1.5 transition-all duration-200">
                    <i class="fas fa-times text-sm"></i>
                </button>
            </div>
        </div>
        
        <!-- User Info -->
        <div class="px-4 py-4 border-b border-gray-700/50">
            <div class="flex items-center space-x-3" :class="collapsed ? 'justify-center' : ''">
                <img src="{{ Auth::user()->avatarUrl }}" 
                     alt="{{ Auth::user()->name }}" 
                     class="w-10 h-10 rounded-full object-cover border-2 border-gray-600 shadow-lg flex-shrink-0">
                <div :class="collapsed ? 'hidden' : 'block'">
                    <p class="font-semibold text-white text-sm">{{Auth::user()->name}}</p>
                    <p class="text-xs text-gray-400 mt-0.5">{{Auth::user()->address ?? 'Manager'}}</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="flex-1 overflow-y-auto px-3 py-4 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-transparent">
            <ul class="space-y-1.5">
                <!-- Dashboard -->
                <li>
                    <a href="{{url('/')}}/manager/dashboard/home" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/home') || request()->is('manager/dashboard') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/home') || request()->is('manager/dashboard') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-home w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Dashboard</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Dashboard</span>
                    </a>
                </li>
                
                <!-- Main Website -->
                <li>
                    <a href="{{url('/')}}" target="_blank" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full opacity-0 group-hover:opacity-50 transition-opacity duration-200"></div>
                        <i class="fas fa-globe w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Main Website</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Main Website</span>
                    </a>
                </li>
                
                <!-- Visit My Page -->
                <?php
                    $CompanySlung = DB::table('companies')->where('id', Auth::User()->company_id)->first();
                ?>
                @if($CompanySlung)
                <li>
                    <a href="{{url('/')}}/companies/featured-companies/{{$CompanySlung->slung}}" target="_blank" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full opacity-0 group-hover:opacity-50 transition-opacity duration-200"></div>
                        <i class="fas fa-building w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Visit My Page</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Visit My Page</span>
                    </a>
                </li>
                @endif
                
                <!-- Posts -->
                <li x-data="{ open: {{ request()->is('manager/dashboard/blog') || request()->is('manager/dashboard/addBlog') || request()->is('manager/dashboard/editBlog/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-rss w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Posts</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/manager/dashboard/blog" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/blog') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/blog') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">My Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/manager/dashboard/addBlog" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/addBlog') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/addBlog') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add Post</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Logo & Favicon -->
                <li>
                    <a href="{{url('/')}}/manager/dashboard/logo-and-favicon" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/logo-and-favicon') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/logo-and-favicon') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-info w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Logo & Favicon</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Logo & Favicon</span>
                    </a>
                </li>
                
                <!-- Users -->
                <li>
                    <a href="{{url('/')}}/manager/dashboard/users" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/users') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/users') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-user w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Users</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Users</span>
                    </a>
                </li>
                
                <!-- SiteSettings -->
                <li x-data="{ open: {{ request()->is('manager/dashboard/SiteSettings') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-cog w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">SiteSettings</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/manager/dashboard/SiteSettings" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('manager/dashboard/SiteSettings') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('manager/dashboard/SiteSettings') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-sliders-h w-4 flex-shrink-0"></i>
                                <span class="ml-3">Systems Settings</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Logout -->
                <li class="pt-4 border-t border-gray-700/50">
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-red-400 hover:text-red-300 hover:bg-red-900/20">
                        <i class="fas fa-sign-out-alt w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Logout</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    
    <!-- Mobile Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>
</aside>

<!-- Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<script>
    // Mobile sidebar toggle
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });
    
    document.getElementById('close-sidebar')?.addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
    
    document.getElementById('sidebar-overlay')?.addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>
@endforeach
