@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Topics</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/addCategory" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add New Topic
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">All Topics</h2>
        <p class="text-gray-600 mt-1">Manage your content topics and categories</p>
    </div>
    
    <!-- Categories Table -->
    <div class="admin-card-modern animate-fade-in">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Meta</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Category as $item)
                    <tr>
                        <td class="font-medium">{{$item->id}}</td>
                        <td>
                            <div class="font-medium text-gray-900 max-w-xs">{{$item->title}}</div>
                        </td>
                        <td>
                            <div class="text-sm text-gray-600 max-w-md">{{Str::limit($item->meta, 100)}}</div>
                        </td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editCategories/{{$item->id}}" 
                                   class="text-primary-600 hover:text-primary-700 p-2 hover:bg-primary-50 rounded-lg transition-colors"
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteCategory({{$item->id}})" 
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
function deleteCategory(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this topic!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/admin/deleteCategoryAjax",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: {id: id},
                success: function() {
                    Swal.fire('Deleted!', 'Topic has been deleted successfully.', 'success');
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
