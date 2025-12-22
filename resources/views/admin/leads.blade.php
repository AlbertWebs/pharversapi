@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Leads</li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    <!-- Leads Table -->
    <div class="admin-card-modern mt-6 animate-fade-in">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">All Leads</h3>
                <p class="text-sm text-gray-500 mt-1">Track and manage lead generation data</p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Location Information</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Advertisement as $item)
                    @php
                        $userData = json_decode($item->user);
                    @endphp
                    <tr>
                        <td class="text-gray-600 font-medium">{{$item->id}}</td>
                        <td>
                            <div class="font-medium text-gray-900">{{$item->title ?? 'N/A'}}</div>
                        </td>
                        <td>
                            @if($item->link)
                                <a href="{{$item->link}}" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    <span class="max-w-xs truncate">{{$item->link}}</span>
                                </a>
                            @else
                                <span class="text-gray-400">No link</span>
                            @endif
                        </td>
                        <td>
                            @if($userData)
                                <div class="space-y-1">
                                    @if(isset($userData->ip))
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-network-wired w-4 text-gray-400 mr-2"></i>
                                            <span class="text-gray-900 font-medium">{{$userData->ip}}</span>
                                        </div>
                                    @endif
                                    @if(isset($userData->countryName))
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-globe w-4 text-gray-400 mr-2"></i>
                                            <span class="text-gray-600">{{$userData->countryName}}</span>
                                        </div>
                                    @endif
                                    @if(isset($userData->regionName))
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-map-marker-alt w-4 text-gray-400 mr-2"></i>
                                            <span class="text-gray-600">{{$userData->regionName}}</span>
                                        </div>
                                    @endif
                                    @if(isset($userData->cityName))
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-city w-4 text-gray-400 mr-2"></i>
                                            <span class="text-gray-600">{{$userData->cityName}}</span>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <span class="text-gray-400">No location data</span>
                            @endif
                        </td>
                        <td class="text-gray-600">
                            @if($item->created_at)
                                <?php
                                    $RawDate = $item->created_at;
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M', $FormatDate);
                                    $Date = date('D', $FormatDate);
                                    $day = date('d', $FormatDate);
                                    $Year = date('Y', $FormatDate);
                                ?>
                                <div class="text-sm">
                                    <div class="font-medium">{{$Date}}, {{$day}} {{$Month}}, {{$Year}}</div>
                                    <div class="text-xs text-gray-500">{{date('h:i A', $FormatDate)}}</div>
                                </div>
                            @else
                                <span class="text-gray-400">N/A</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        @if(count($Advertisement) == 0)
        <div class="text-center py-12">
            <i class="fas fa-user-friends text-4xl text-gray-300 mb-4"></i>
            <p class="text-gray-500 text-lg">No leads found</p>
            <p class="text-gray-400 text-sm mt-2">Lead data will appear here when users interact with your content.</p>
        </div>
        @endif
    </div>
</div>
@endsection
