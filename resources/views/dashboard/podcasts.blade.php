@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Podcasts</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/manager/dashboard/addPodcast" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add Podcast Post
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">All Podcast Posts</h2>
        <p class="text-gray-600 mt-1">Manage your podcast content</p>
    </div>
    
    <!-- Podcasts Table -->
    <div class="admin-card-modern animate-fade-in">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Audio</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Podcast as $item)
                    <tr>
                        <td class="font-medium">{{$item->id}}</td>
                        <td class="font-medium text-gray-900">{{Str::limit($item->title, 40)}}</td>
                        <td>
                            <?php $Category = DB::table('categories')->where('id',$item->category)->get(); ?>
                            @foreach ($Category as $cat)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{$cat->title}}
                                </span>
                            @endforeach
                        </td>
                        <td>
                            <audio preload="auto" controls class="w-full max-w-xs">
                                <source src="{{$item->file}}" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <button onclick="deletePodcast({{$item->id}})" 
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
        
        @if(count($Podcast) == 0)
        <div class="text-center py-12">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gray-100 flex items-center justify-center">
                <i class="fas fa-podcast text-gray-400 text-2xl"></i>
            </div>
            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Podcasts</h4>
            <p class="text-sm text-gray-500 mb-4">Get started by adding your first podcast.</p>
            <a href="{{url('/')}}/manager/dashboard/addPodcast" class="admin-btn admin-btn-primary">
                <i class="fas fa-plus mr-2"></i>Add Podcast
            </a>
        </div>
        @endif
    </div>
</div>

<script>
function deletePodcast(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this podcast!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/manager/dashboard/deletePodcastAjax",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: {id: id},
                success: function() {
                    Swal.fire('Deleted!', 'Podcast has been deleted successfully.', 'success');
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
