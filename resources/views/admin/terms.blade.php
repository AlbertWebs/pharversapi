@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Terms and Conditions</li>
            <li class="ml-auto">
                <a href="{{url('/')}}/admin/addTerms" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add Terms and Conditions
                </a>
            </li>
        </ol>
    </nav>
    
    <!-- Dashboard Stats -->
    @include('admin.dashboard')
    
    <!-- Terms Table -->
    <div class="admin-card-modern mt-6 animate-fade-in">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-xl font-semibold text-gray-900">Terms and Conditions</h3>
                <p class="text-sm text-gray-500 mt-1">Manage terms and conditions content</p>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Terms as $item)
                    <tr>
                        <td class="text-gray-600 font-medium">{{$item->id}}</td>
                        <td>
                            <div class="font-medium text-gray-900">{{$item->title}}</div>
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
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editTerm/{{$item->id}}" 
                                   class="text-blue-600 hover:text-blue-700 p-2 hover:bg-blue-50 rounded-lg transition-colors"
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteTerm({{$item->id}})" 
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
function deleteTerm(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Once deleted, you will not be able to recover this term!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{url('/')}}/admin/deleteTermsAjax",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: {id: id},
                success: function() {
                    Swal.fire('Deleted!', 'Term has been deleted successfully.', 'success');
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
