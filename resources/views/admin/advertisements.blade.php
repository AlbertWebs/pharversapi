@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Advertisement</li>
            <!-- <li class="ml-auto">
                <a href="{{url('/')}}/admin/addAdvertisement" class="admin-btn admin-btn-primary">
                    <i class="fas fa-plus mr-2"></i>Add Advertisement
                </a>
            </li> -->
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">All Advertisement</h2>
        <p class="text-gray-600 mt-1">Manage your advertisements</p>
    </div>
    
    <!-- Advertisements Table -->
    <div class="admin-card">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Dimensions</th>
                        <th>Page</th>
                        <th>Placement</th>
                        <th>Active</th>
                        <th>Stop Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($Advertisement as $item)
                    <tr>
                        <td class="font-medium">{{$item->id}}</td>
                        <td class="font-medium text-gray-900">{{$item->title}}</td>
                        <td>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{$item->dimension}}
                            </span>
                        </td>
                        <td class="text-gray-600">{{$item->page}}</td>
                        <td class="text-gray-600">{{$item->placement}}</td>
                        <td>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="switcher sr-only peer" 
                                       id="ad-{{$item->id}}"
                                       data-id="{{$item->id}}"
                                       {{$item->active == 1 ? 'checked' : ''}}>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                            </label>
                        </td>
                        <td class="text-gray-600">{{$item->date}}</td>
                        <td>
                            <a href="{{url('/')}}/admin/editAdvertisement/{{$item->id}}" 
                               class="text-primary-600 hover:text-primary-700 p-2 hover:bg-primary-50 rounded-lg transition-colors"
                               title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Active toggle for ads
$(document).on('change', '.switcher', function() {
    var id = $(this).data('id');
    
    $.ajax({
        type: "POST",
        url: '{{url('/')}}/admin/switchAdsAjaxRequest',
        data: {
            TheId: id,
            "_token": "{{ csrf_token() }}"
        },
        success: function(data) {
            // Success feedback can be added here
        }
    });
});
</script>
@endsection
