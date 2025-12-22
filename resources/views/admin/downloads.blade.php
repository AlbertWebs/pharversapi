@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Downloads</li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    <!-- Downloads Table -->
    <div class="admin-card-modern mt-6 animate-fade-in">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">All Downloads</h3>
                <p class="text-sm text-gray-500 mt-1">Track and manage download requests</p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Download Link</th>
                        <th>User</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Downloads as $item)
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
                            @php
                                $User = App\Models\User::find($item->user);
                            @endphp
                            @if($User)
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full object-cover" 
                                             src="{{$User->avatarUrl}}" 
                                             alt="{{$User->name}}">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">{{$User->name}}</div>
                                        <div class="text-xs text-gray-500">{{$User->email}}</div>
                                    </div>
                                </div>
                            @else
                                <span class="text-gray-400">Unknown User</span>
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
        
        @if(count($Downloads) == 0)
        <div class="text-center py-12">
            <i class="fas fa-download text-4xl text-gray-300 mb-4"></i>
            <p class="text-gray-500 text-lg">No downloads found</p>
            <p class="text-gray-400 text-sm mt-2">Download requests will appear here when users request files.</p>
        </div>
        @endif
    </div>
</div>
@endsection
