@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Dashboard</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/manager/dashboard/SiteSettings" class="text-primary-600 hover:text-primary-700">
                    <i class="fas fa-cog mr-1"></i>Go To Site Settings
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <?php 
        $companyId = Auth::User()->company_id;
        $Blogs = DB::table('blogs')->where('company_id', $companyId)->get();
        $Videos = DB::table('videos')->where('company_id', $companyId)->get();
        $Podcasts = DB::table('podcasts')->where('company_id', $companyId)->get();
        ?>
        
        <!-- Articles Card -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 via-green-600 to-green-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
            <div class="relative p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-green-100 text-sm font-semibold uppercase tracking-wide mb-2">My Articles</p>
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
        
        <!-- Videos Card -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-red-500 via-red-600 to-red-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
            <div class="relative p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-red-100 text-sm font-semibold uppercase tracking-wide mb-2">My Videos</p>
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
        
        <!-- Podcasts Card -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 via-purple-600 to-purple-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
            <div class="relative p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-purple-100 text-sm font-semibold uppercase tracking-wide mb-2">My Podcasts</p>
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
        
        <!-- Quick Actions Card -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
            <div class="relative p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-blue-100 text-sm font-semibold uppercase tracking-wide mb-2">Quick Actions</p>
                        <h3 class="text-4xl font-bold mb-1">3</h3>
                        <p class="text-blue-100 text-xs flex items-center">
                            <i class="fas fa-bolt mr-1.5"></i>Available actions
                        </p>
                    </div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-bolt text-2xl"></i>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/30"></div>
            </div>
        </div>
    </div>
    
    <!-- Activity Logs -->
    @if(isset($ActivityLog) && count($ActivityLog) > 0)
    <div class="admin-card-modern mb-6 animate-fade-in">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-1">My Activity Logs</h3>
                <p class="text-sm text-gray-500">Your recent activities</p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($ActivityLog as $item)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="font-medium text-gray-500">{{$item->id}}</td>
                        <td>
                            <div class="flex items-center">
                                <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-green-50 text-green-700 border border-green-200">
                                    <i class="fas fa-check-circle mr-2"></i>{{$item->description}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="text-sm text-gray-600">
                                <?php
                                    $RawDate = $item->created_at;
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M', $FormatDate);
                                    $Day = date('d', $FormatDate);
                                    $Year = date('Y', $FormatDate);
                                    $Time = date('h:i A', $FormatDate);
                                ?>
                                <div class="font-medium">{{$Day}} {{$Month}}, {{$Year}}</div>
                                <div class="text-xs text-gray-500">{{$Time}}</div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    
    <!-- Latest Messages -->
    @if(isset($Message) && count($Message) > 0)
    <div class="admin-card-modern mb-6 animate-fade-in">
        <div class="mb-6 pb-4 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900 mb-1">Latest Messages</h3>
            <p class="text-sm text-gray-500">Latest Messages & Enquiries</p>
        </div>
        
        <div class="space-y-4">
            @foreach ($Message as $item)
            <div class="border-l-4 border-primary-500 pl-4 py-2 bg-gray-50 rounded-r-lg">
                <div class="flex items-center justify-between mb-2">
                    <h4 class="font-medium text-gray-900">{{$item->subject ?? 'No Subject'}}</h4>
                    <span class="text-xs text-gray-500">
                        <?php
                            $RawDate = $item->created_at;
                            $FormatDate = strtotime($RawDate);
                            $Month = date('M',$FormatDate);
                            $Date = date('D',$FormatDate);
                            $date = date('d',$FormatDate);
                            $Year = date('Y',$FormatDate);
                        ?>
                        <i class="far fa-clock mr-1"></i>{{$Date}}, {{$date}} {{$Month}}, {{$Year}}
                    </span>
                </div>
                <p class="text-sm text-gray-600">{{Str::limit($item->content ?? '', 150)}}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    
    <!-- Google Map -->
    @if(isset($SiteSettings))
    @foreach ($SiteSettings as $Set)
    @if($Set->map)
    <div class="admin-card-modern animate-fade-in">
        <div class="mb-6 pb-4 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900">Our Location On Google Map</h3>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200">
            <iframe src="{{$Set->map}}" 
                    class="w-full h-96 border-0" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection
