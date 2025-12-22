@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Dashboard</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/SiteSettings" class="text-primary-600 hover:text-primary-700">
                    <i class="fas fa-cog mr-1"></i>Go To Site Settings
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    @if(Auth::User()->is_admin == "1")
    <!-- Activity Logs -->
    <div class="admin-card-modern mb-6 animate-fade-in">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-1">Activity Logs</h3>
                <p class="text-sm text-gray-500">Registers all important activities by all users</p>
            </div>
            <a href="{{url('/')}}/admin/activitylogs" class="admin-btn admin-btn-secondary">
                <i class="fas fa-list mr-2"></i>View All
            </a>
        </div>
        
        @if(count($ActivityLog) > 0)
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($ActivityLog as $item)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="font-medium text-gray-500">{{$item->id}}</td>
                        <td>
                            @php
                            $UserName = App\Models\User::find($item->causer_id);
                            @endphp
                            @if($UserName)
                                <div class="flex items-center">
                                    <img src="{{$UserName->avatarUrl}}" 
                                         alt="{{$UserName->name}}" 
                                         class="w-10 h-10 rounded-full object-cover border-2 border-gray-200 mr-3">
                                    <div>
                                        <div class="font-medium text-gray-900">{{$UserName->name}}</div>
                                        @if($UserName->email)
                                            <div class="text-xs text-gray-500">{{$UserName->email}}</div>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <span class="text-gray-500 italic">Unknown User</span>
                                </div>
                            @endif
                        </td>
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
        @else
        <div class="text-center py-12">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gray-100 flex items-center justify-center">
                <i class="fas fa-history text-gray-400 text-2xl"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Activity Logs</h4>
            <p class="text-sm text-gray-500">Activity logs will appear here as users perform actions in the system.</p>
        </div>
        @endif
    </div>
    
    <!-- System Users -->
    <div class="admin-card-modern mb-6 animate-fade-in">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-1">System Users</h3>
                <p class="text-sm text-gray-500">Registered Users</p>
            </div>
            <div class="flex items-center space-x-2">
                <a href="{{url('/')}}/admin/addUser" class="admin-btn admin-btn-primary">
                    <i class="fas fa-user-plus mr-2"></i>Add New User
                </a>
            </div>
        </div>
        
        @php
        $Users = App\Models\User::limit(10)->get();
        @endphp
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Name</th>
                        <th>Contacts</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Users as $item)
                    <tr>
                        <td>
                            <img src="{{$item->avatarUrl}}" 
                                 alt="{{$item->name}}" 
                                 class="w-10 h-10 rounded-full object-cover">
                        </td>
                        <td>
                            <a href="{{url('/')}}/admin/editUser/{{$item->id}}" class="hover:text-primary-600">
                                <div class="font-medium text-gray-900">{{$item->name}}</div>
                                <div class="text-sm text-gray-500">
                                    @if($item->is_admin == 1) 
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
                                            <i class="fas fa-shield-alt mr-1"></i>Administrator
                                        </span>
                                    @else 
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                            Normal User
                                        </span>
                                    @endif
                                </div>
                            </a>
                        </td>
                        <td>
                            <div class="text-sm text-gray-600">
                                @if($item->mobile)<div><i class="fas fa-phone mr-1"></i>{{$item->mobile}}</div>@endif
                                @if($item->email)<div><i class="fas fa-envelope mr-1"></i>{{$item->email}}</div>@endif
                                @if($item->address)<div><i class="fas fa-map-marker-alt mr-1"></i>{{$item->address}}</div>@endif
                            </div>
                        </td>
                        <td class="text-gray-600">{{$item->country ?? 'N/A'}}</td>
                        <td>
                            @if($item->status == 1)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>Active
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchStatus/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700">
                                        <i class="fas fa-exchange-alt mr-1"></i>Switch To Inactive
                                    </a>
                                </div>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    <i class="fas fa-times-circle mr-1"></i>Inactive
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchStatus/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700">
                                        <i class="fas fa-exchange-alt mr-1"></i>Switch To Active
                                    </a>
                                </div>
                            @endif
                        </td>
                        <td>
                            <button onclick="deleteUser({{$item->id}})" 
                                    class="text-red-600 hover:text-red-700 p-2 hover:bg-red-50 rounded-lg transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Latest Messages -->
    <div class="admin-card-modern mb-6 animate-fade-in">
        <div class="mb-6 pb-4 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900 mb-1">Latest Messages</h3>
            <p class="text-sm text-gray-500">Latest Messages & Enquiries</p>
        </div>
        
        <div class="space-y-4">
            @foreach ($Message as $item)
            <div class="border-l-4 border-primary-500 pl-4 py-2 bg-gray-50 rounded-r-lg">
                <div class="flex items-center justify-between mb-2">
                    <h4 class="font-medium text-gray-900">{{$item->subject}}</h4>
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
                <p class="text-sm text-gray-600">{{Str::limit($item->content, 150)}}</p>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Google Map -->
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

<script>
function deleteUser(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/admin/deleteUserAjax",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: {id: id},
                success: function() {
                    Swal.fire('Deleted!', 'User has been deleted successfully.', 'success');
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function() {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                }
            });
        }
    });
}
</script>
@endsection
