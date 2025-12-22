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
            <a href="{{url('/')}}/admin/home" 
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
                    <p class="text-xs text-gray-400 mt-0.5">{{Auth::user()->address ?? 'Administrator'}}</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="flex-1 overflow-y-auto px-3 py-4 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-transparent">
            <ul class="space-y-1.5">
                <!-- Dashboard -->
                <li>
                    <a href="{{url('/')}}/admin/home" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('admin/home') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('admin/home') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-home w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Dashboard</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Dashboard</span>
                    </a>
                </li>
                
                <!-- Visit Website -->
                <li>
                    <a href="{{url('/')}}/" target="_blank" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full opacity-0 group-hover:opacity-50 transition-opacity duration-200"></div>
                        <i class="fas fa-globe w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Visit Website</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Visit Website</span>
                    </a>
                </li>
                
                @if(Auth::User()->is_admin == "1")
                <!-- Topics -->
                <li x-data="{ open: {{ request()->is('admin/categories') || request()->is('admin/addCategory') || request()->is('admin/editCategories/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-folder w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Topics</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/categories" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/categories') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/categories') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Topics</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addCategory" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/addCategory') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/addCategory') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add Topics</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Manage Posts -->
                <li x-data="{ open: {{ request()->is('admin/blog') || request()->is('admin/addBlog') || request()->is('admin/editBlog/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-rss w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Manage Posts</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/blog" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/blog') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/blog') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addBlog" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/addBlog') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/addBlog') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add Posts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Manage Ads -->
                <li x-data="{ open: {{ request()->is('admin/advertisements') || request()->is('admin/addAdvertisement') || request()->is('admin/editAdvertisement/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-bar-chart w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Manage Ads</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/advertisements" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/advertisements') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/advertisements') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Ads</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Companies -->
                <li x-data="{ open: {{ request()->is('admin/companies') || request()->is('admin/addCompany') || request()->is('admin/editCompany/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-building w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Companies</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/companies" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/companies') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/companies') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Companies</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addCompany" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/addCompany') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/addCompany') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add Company</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Partners -->
                <li x-data="{ open: {{ request()->is('admin/partners') || request()->is('admin/addPartner') || request()->is('admin/editPartners/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-handshake w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Partners</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/partners" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/partners') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/partners') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Partners</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- System Users -->
                <li x-data="{ open: {{ request()->is('admin/users') || request()->is('admin/addUser') || request()->is('admin/editUser/*') || request()->is('admin/admins') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-user w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">System Users</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/users" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/users') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/users') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-user-friends w-4 flex-shrink-0"></i>
                                <span class="ml-3">Manage Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addUser" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/addUser') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/addUser') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-user-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add User</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/admins" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/admins') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/admins') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-user-shield w-4 flex-shrink-0"></i>
                                <span class="ml-3">Manage Admins</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Newsletters -->
                <li x-data="{ open: {{ request()->is('admin/newsletters') || request()->is('admin/addNewsletter') || request()->is('admin/editNewsletters/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-envelope w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">News Letters(Issue #)</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/newsletters" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/newsletters') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/newsletters') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-list w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Issues</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addNewsletter" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/addNewsletter') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/addNewsletter') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-plus w-4 flex-shrink-0"></i>
                                <span class="ml-3">Add Issue</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Newsletter Link -->
                <li>
                    <a href="{{url('/')}}/admin/newsletter-link" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('admin/newsletter-link') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('admin/newsletter-link') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-link w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Newsletter Link</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Newsletter Link</span>
                    </a>
                </li>
                
                <!-- Legal Pages -->
                <li x-data="{ open: {{ request()->is('admin/privacy') || request()->is('admin/terms') || request()->is('admin/editCopyright') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-gavel w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Legal Pages</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/privacy" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/privacy') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/privacy') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-shield-alt w-4 flex-shrink-0"></i>
                                <span class="ml-3">Privacy Policy</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/terms" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/terms') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/terms') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-file-contract w-4 flex-shrink-0"></i>
                                <span class="ml-3">Terms and Conditions</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/editCopyright" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/editCopyright') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/editCopyright') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-copyright w-4 flex-shrink-0"></i>
                                <span class="ml-3">Copyright Statement</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Logo & Favicon -->
                <li>
                    <a href="{{url('/')}}/admin/logo-and-favicon" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('admin/logo-and-favicon') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('admin/logo-and-favicon') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-info w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Logo & Favicon</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Logo & Favicon</span>
                    </a>
                </li>
                
                <!-- Site Settings -->
                <li x-data="{ open: {{ request()->is('admin/SiteSettings') || request()->is('admin/SocialMediaSettings') || request()->is('admin/credentials') ? 'true' : 'false' }} }">
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
                            <a href="{{url('/')}}/admin/SiteSettings" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/SiteSettings') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/SiteSettings') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-sliders-h w-4 flex-shrink-0"></i>
                                <span class="ml-3">Systems Settings</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Metrics -->
                <li x-data="{ open: {{ request()->is('admin/downloads') || request()->is('admin/leads') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="group relative flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 text-gray-300 hover:bg-gray-800/50 hover:text-white">
                        <div class="flex items-center">
                            <i class="fas fa-bar-chart w-5 flex-shrink-0"></i>
                            <span :class="collapsed ? 'hidden' : 'ml-3'">Metrics</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300 flex-shrink-0" :class="{'rotate-180': open, 'hidden': collapsed}"></i>
                    </button>
                    <ul x-show="open && !collapsed" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="ml-4 mt-1.5 space-y-1 border-l-2 border-gray-700/30 pl-3">
                        <li>
                            <a href="{{url('/')}}/admin/downloads" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/downloads') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/downloads') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-download w-4 flex-shrink-0"></i>
                                <span class="ml-3">All Downloads</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/leads" 
                               class="group relative flex items-center px-3 py-2 text-sm rounded-lg transition-all duration-200 {{ request()->is('admin/leads') ? 'bg-primary-600/20 text-primary-300' : 'text-gray-400 hover:bg-gray-800/30 hover:text-gray-200' }}">
                                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-primary-500 rounded-r-full {{ request()->is('admin/leads') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                                <i class="fas fa-bullhorn w-4 flex-shrink-0"></i>
                                <span class="ml-3">Ad Leads</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Social Media -->
                <li>
                    <a href="{{url('/')}}/admin/SocialMediaSettings" 
                       class="group relative flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition-all duration-200 {{ request()->is('admin/SocialMediaSettings') ? 'bg-primary-600 text-white shadow-lg shadow-primary-600/20' : 'text-gray-300 hover:bg-gray-800/50 hover:text-white' }}">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-500 rounded-r-full {{ request()->is('admin/SocialMediaSettings') ? 'opacity-100' : 'opacity-0 group-hover:opacity-50' }} transition-opacity duration-200"></div>
                        <i class="fas fa-plus-square w-5 flex-shrink-0"></i>
                        <span :class="collapsed ? 'hidden' : 'ml-3'">Social Media</span>
                        <span :class="collapsed ? 'absolute left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap pointer-events-none transition-opacity duration-200 z-50' : 'hidden'">Social Media</span>
                    </a>
                </li>
                @else
                <!-- Non-admin menu items -->
                <li x-data="{ open: {{ request()->is('admin/blog') || request()->is('admin/addBlog') || request()->is('admin/editBlog/*') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="admin-sidebar-link w-full flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-rss w-5"></i>
                            <span>Manage Posts</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform" :class="{'rotate-180': open}"></i>
                    </button>
                    <ul x-show="open" 
                        x-transition
                        class="ml-4 mt-1 space-y-1">
                        <li>
                            <a href="{{url('/')}}/admin/blog" 
                               class="admin-sidebar-link {{ request()->is('admin/blog') ? 'active' : '' }}">
                                <i class="fas fa-list w-4"></i>
                                <span>All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addBlog" 
                               class="admin-sidebar-link {{ request()->is('admin/addBlog') ? 'active' : '' }}">
                                <i class="fas fa-plus w-4"></i>
                                <span>Add Posts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li x-data="{ open: {{ request()->is('admin/advertisements') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="admin-sidebar-link w-full flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-ad w-5"></i>
                            <span>Manage Ads</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform" :class="{'rotate-180': open}"></i>
                    </button>
                    <ul x-show="open" 
                        x-transition
                        class="ml-4 mt-1 space-y-1">
                        <li>
                            <a href="{{url('/')}}/admin/advertisements" 
                               class="admin-sidebar-link {{ request()->is('admin/advertisements') ? 'active' : '' }}">
                                <i class="fas fa-list w-4"></i>
                                <span>All Ads</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li x-data="{ open: {{ request()->is('admin/partners') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="admin-sidebar-link w-full flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-handshake w-5"></i>
                            <span>Partners</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform" :class="{'rotate-180': open}"></i>
                    </button>
                    <ul x-show="open" 
                        x-transition
                        class="ml-4 mt-1 space-y-1">
                        <li>
                            <a href="{{url('/')}}/admin/partners" 
                               class="admin-sidebar-link {{ request()->is('admin/partners') ? 'active' : '' }}">
                                <i class="fas fa-list w-4"></i>
                                <span>All Partners</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li x-data="{ open: {{ request()->is('admin/newsletters') || request()->is('admin/addNewsletter') ? 'true' : 'false' }} }">
                    <button @click="open = !open" 
                            class="admin-sidebar-link w-full flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-envelope w-5"></i>
                            <span>Newsletters</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs transition-transform" :class="{'rotate-180': open}"></i>
                    </button>
                    <ul x-show="open" 
                        x-transition
                        class="ml-4 mt-1 space-y-1">
                        <li>
                            <a href="{{url('/')}}/admin/newsletters" 
                               class="admin-sidebar-link {{ request()->is('admin/newsletters') ? 'active' : '' }}">
                                <i class="fas fa-list w-4"></i>
                                <span>All Issues</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/admin/addNewsletter" 
                               class="admin-sidebar-link {{ request()->is('admin/addNewsletter') ? 'active' : '' }}">
                                <i class="fas fa-plus w-4"></i>
                                <span>Add Issue</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                
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
