<!-- Dashboard Stats -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <?php $Users = App\Models\User::all() ?>
    <?php $Podcasts = App\Models\Podcast::all() ?>
    <?php $Videos = App\Models\Video::all() ?>
    <?php $Blogs = App\Models\Blog::all() ?>
    
    <!-- Users Card -->
    <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
        <div class="relative p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-1">
                    <p class="text-blue-100 text-sm font-semibold uppercase tracking-wide mb-2">Total Users</p>
                    <h3 class="text-4xl font-bold mb-1">{{count($Users)}}</h3>
                    <p class="text-blue-100 text-xs flex items-center">
                        <i class="fas fa-users mr-1.5"></i>Registered users
                    </p>
                </div>
                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-2xl"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/30"></div>
        </div>
    </div>
    
    <!-- Podcasts Card -->
    <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 via-purple-600 to-purple-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
        <div class="relative p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-1">
                    <p class="text-purple-100 text-sm font-semibold uppercase tracking-wide mb-2">Podcasts</p>
                    <h3 class="text-4xl font-bold mb-1">{{count($Podcasts)}}</h3>
                    <p class="text-purple-100 text-xs flex items-center">
                        <i class="fas fa-podcast mr-1.5"></i>Total podcasts
                    </p>
                </div>
                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-podcast text-2xl"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/30"></div>
        </div>
    </div>
    
    <!-- Videos Card -->
    <div class="group relative overflow-hidden bg-gradient-to-br from-red-500 via-red-600 to-red-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
        <div class="relative p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-1">
                    <p class="text-red-100 text-sm font-semibold uppercase tracking-wide mb-2">Videos</p>
                    <h3 class="text-4xl font-bold mb-1">{{count($Videos)}}</h3>
                    <p class="text-red-100 text-xs flex items-center">
                        <i class="fas fa-video mr-1.5"></i>Total videos
                    </p>
                </div>
                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-video text-2xl"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/30"></div>
        </div>
    </div>
    
    <!-- Articles Card -->
    <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 via-green-600 to-green-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
        <div class="relative p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-1">
                    <p class="text-green-100 text-sm font-semibold uppercase tracking-wide mb-2">Articles</p>
                    <h3 class="text-4xl font-bold mb-1">{{count($Blogs)}}</h3>
                    <p class="text-green-100 text-xs flex items-center">
                        <i class="fas fa-newspaper mr-1.5"></i>Total articles
                    </p>
                </div>
                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-newspaper text-2xl"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/30"></div>
        </div>
    </div>
</div>
