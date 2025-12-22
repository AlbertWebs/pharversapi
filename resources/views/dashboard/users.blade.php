@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Users</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/manager/dashboard/addUser" class="admin-btn admin-btn-primary">
                    <i class="fas fa-user-plus mr-2"></i>Add New User
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Company Users</h2>
        <p class="text-gray-600 mt-1">Manage users in your company</p>
    </div>
    
    <!-- Users Table -->
    <div class="admin-card-modern animate-fade-in">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Name</th>
                        <th>Mandate</th>
                        <th>Contacts</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                    $Users = App\Models\User::where('company_id', Auth::User()->company_id)->get();
                    @endphp
                    @foreach ($Users as $item)
                    <tr>
                        <td>
                            <img src="{{$item->avatarUrl}}" 
                                 alt="{{$item->name}}" 
                                 class="w-10 h-10 rounded-full object-cover">
                        </td>
                        <td>
                            <a href="{{url('/')}}/manager/dashboard/editUser/{{$item->id}}" class="hover:text-primary-600">
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
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/manager/dashboard/editUser/{{$item->id}}" 
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
        
        @if(count($Users) == 0)
        <div class="text-center py-12">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gray-100 flex items-center justify-center">
                <i class="fas fa-users text-gray-400 text-2xl"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Users</h4>
            <p class="text-sm text-gray-500 mb-4">Get started by adding your first user.</p>
            <a href="{{url('/')}}/manager/dashboard/addUser" class="admin-btn admin-btn-primary">
                <i class="fas fa-user-plus mr-2"></i>Add User
            </a>
        </div>
        @endif
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
                url: "{{url('/')}}/manager/dashboard/deleteUserAjax",
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
