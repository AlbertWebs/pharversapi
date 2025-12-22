@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Available Issues</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/addNewsletter" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add Newsletter
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">All Issues</h2>
        <p class="text-gray-600 mt-1">Manage your newsletter issues</p>
    </div>
    
    <!-- Newsletters Table -->
    <div class="admin-card">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Newsletters as $item)
                    <tr>
                        <td class="font-medium">{{$item->id}}</td>
                        <td>
                            <div class="font-medium text-gray-900 max-w-xs">{{Str::limit($item->title, 50)}}</div>
                        </td>
                        <td>
                            <img src="{{$item->image}}" 
                                 alt="Newsletter image" 
                                 class="w-32 h-auto object-cover rounded-lg max-h-32">
                        </td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editNewsletters/{{$item->id}}" 
                                   class="text-primary-600 hover:text-primary-700 p-2 hover:bg-primary-50 rounded-lg transition-colors"
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteNewsletter({{$item->id}})" 
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
function deleteNewsletter(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this newsletter!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/admin/deleteNewsletter/" + id,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "GET",
                success: function() {
                    Swal.fire('Deleted!', 'Newsletter has been deleted successfully.', 'success');
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
