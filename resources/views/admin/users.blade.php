@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">System Users</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/addUser" class="admin-btn admin-btn-primary">
                    <i class="fas fa-user-plus mr-2"></i>Add New User
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    <!-- Users Table -->
    <div class="admin-card-modern mt-6 animate-fade-in">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">System Users</h3>
                <p class="text-sm text-gray-500 mt-1">Registered Users</p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Name</th>
                        <th>Mandate</th>
                        <th>Contacts</th>
                        <th>Country</th>
                        <th>Admin</th>
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
                            </a>
                        </td>
                        <td>
                            @if($item->type == 1)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    <i class="fas fa-shield-alt mr-1"></i>System Admin
                                </span>
                            @elseif($item->type == 2)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Manager
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Subscriber
                                </span>
                            @endif
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
                            @if($item->is_admin == 1)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    <i class="fas fa-user-shield mr-1"></i>Admin
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchRole/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700">
                                        <i class="fas fa-exchange-alt mr-1"></i>Remove Admin
                                    </a>
                                </div>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <i class="fas fa-user mr-1"></i>User
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchRole/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700">
                                        <i class="fas fa-exchange-alt mr-1"></i>Make Admin
                                    </a>
                                </div>
                            @endif
                        </td>
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
</div>

<script>
function deleteUser(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this user!",
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
