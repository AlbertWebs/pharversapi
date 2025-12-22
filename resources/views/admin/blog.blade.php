@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Blog Posts</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/addBlog" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add Blog Post
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">All Blog Posts</h2>
        <p class="text-gray-600 mt-1">Manage your blog posts and articles</p>
    </div>
    
    <!-- Blog Posts Table -->
    <div class="admin-card-modern animate-fade-in">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Active</th>
                        <th>Featured</th>
                        <th>Type</th>
                        <th>Topic</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Blog as $item)
                    <tr>
                        <td class="font-medium">{{$item->id}}</td>
                        <td>
                            <div class="font-medium text-gray-900">{{Str::limit($item->title, 40)}}</div>
                        </td>
                        <td>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="switchers sr-only peer" 
                                       id="active-{{$item->id}}"
                                       {{$item->active == 1 ? 'checked' : ''}}
                                       data-id="{{$item->id}}">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                            </label>
                        </td>
                        <td>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="switcher sr-only peer" 
                                       id="featured-{{$item->id}}"
                                       {{$item->featured == 1 ? 'checked' : ''}}
                                       data-id="{{$item->id}}">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                            </label>
                        </td>
                        <td>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{$item->type}}
                            </span>
                        </td>
                        <td>
                            <?php $Category = DB::table('categories')->where('id',$item->category)->get(); ?>
                            @foreach ($Category as $cat)
                                <span class="text-gray-600">{{$cat->title}}</span>
                            @endforeach
                        </td>
                        <td class="text-gray-600">
                            <?php
                                $RawDate = $item->created_at;
                                $FormatDate = strtotime($RawDate);
                                $Month = date('M',$FormatDate);
                                $Date = date('D',$FormatDate);
                                $date = date('d',$FormatDate);
                                $Year = date('Y',$FormatDate);
                            ?>
                            {{$Date}}, {{$date}} {{$Month}}, {{$Year}}
                        </td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editBlog/{{$item->id}}" 
                                   class="text-primary-600 hover:text-primary-700 p-2 hover:bg-primary-50 rounded-lg transition-colors"
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteBlog({{$item->id}})" 
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
// Active toggle
$(document).on('change', '.switchers', function() {
    var id = $(this).data('id');
    var isChecked = $(this).is(':checked');
    
    $.ajax({
        type: "POST",
        url: '{{url('/')}}/admin/switchActiveAjaxRequest',
        data: {
            TheId: id,
            "_token": "{{ csrf_token() }}"
        },
        success: function(data) {
            // Success feedback can be added here
        }
    });
});

// Featured toggle
$(document).on('change', '.switcher', function() {
    var id = $(this).data('id');
    var isChecked = $(this).is(':checked');
    
    $.ajax({
        type: "POST",
        url: '{{url('/')}}/admin/switchFeatredAjaxRequest',
        data: {
            TheId: id,
            "_token": "{{ csrf_token() }}"
        },
        success: function(data) {
            // Success feedback can be added here
        }
    });
});

function deleteBlog(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this post!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/admin/deleteBlogAjax",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: {id: id},
                success: function() {
                    Swal.fire('Deleted!', 'Blog post has been deleted successfully.', 'success');
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
