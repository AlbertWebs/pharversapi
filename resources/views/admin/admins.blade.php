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
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">System Users</h2>
        <p class="text-gray-600 mt-1">Registered Users</p>
    </div>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    <!-- Users Table -->
    <div class="admin-card-modern animate-fade-in">
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
                                 class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                        </td>
                        <td>
                            <a href="{{url('/')}}/admin/editUser/{{$item->id}}" class="hover:text-primary-600">
                                <div class="font-medium text-gray-900">{{$item->name}}</div>
                                <div class="text-sm text-gray-500">{{$item->address ?? 'N/A'}}</div>
                            </a>
                        </td>
                        <td>
                            <div class="text-sm text-gray-600">
                                @if($item->mobile)
                                    <div class="flex items-center mb-1">
                                        <i class="fas fa-phone text-gray-400 mr-2 w-4"></i>
                                        <span>{{$item->mobile}}</span>
                                    </div>
                                @endif
                                @if($item->email)
                                    <div class="flex items-center">
                                        <i class="fas fa-envelope text-gray-400 mr-2 w-4"></i>
                                        <span>{{$item->email}}</span>
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="text-gray-600">{{$item->country ?? 'N/A'}}</td>
                        <td>
                            @if($item->status == 1)
                                <span class="admin-badge admin-badge-success">
                                    <i class="fas fa-check-circle mr-1"></i>Active
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchStatus/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700 flex items-center">
                                        <i class="fas fa-exchange-alt mr-1"></i>Switch To Inactive
                                    </a>
                                </div>
                            @else
                                <span class="admin-badge admin-badge-danger">
                                    <i class="fas fa-times-circle mr-1"></i>Inactive
                                </span>
                                <div class="mt-2">
                                    <a href="{{url('/')}}/admin/switchStatus/{{$item->id}}" 
                                       class="text-xs text-primary-600 hover:text-primary-700 flex items-center">
                                        <i class="fas fa-exchange-alt mr-1"></i>Switch To Active
                                    </a>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editUser/{{$item->id}}" 
                                   class="text-primary-600 hover:text-primary-700 p-2 hover:bg-primary-50 rounded-lg transition-colors"
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteUser({{$item->id}})" 
                                        class="text-red-600 hover:text-red-700 p-2 hover:bg-red-50 rounded-lg transition-colors"
                                        title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
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
