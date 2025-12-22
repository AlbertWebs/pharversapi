@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Companies</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Company Management</h2>
            <p class="text-gray-600 mt-1">Manage all registered companies</p>
        </div>
        <a href="{{url('/')}}/admin/addCompany" class="admin-btn admin-btn-primary">
            <i class="fas fa-plus mr-2"></i>Add New Company
        </a>
    </div>
    
    <!-- Success/Error Messages -->
    @if(Session::has('message'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-center">
            <i class="fas fa-check-circle text-green-600 mr-3"></i>
            <span class="text-green-800">{{ Session::get('message') }}</span>
        </div>
    @endif

    @if(Session::has('messageError'))
        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-center">
            <i class="fas fa-exclamation-circle text-red-600 mr-3"></i>
            <span class="text-red-800">{{ Session::get('messageError') }}</span>
        </div>
    @endif
    
    <!-- Companies Table -->
    <div class="admin-card-modern animate-fade-in">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Company Name</th>
                        <th>Tagline</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($Companies as $Company)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$Company->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($Company->logo)
                                <img src="{{(substr($Company->logo, 0, 4) === 'http') ? $Company->logo : url('/') . '/uploads/companies/' . basename($Company->logo)}}" 
                                     alt="{{$Company->title}}" 
                                     class="w-16 h-16 object-cover rounded-lg border border-gray-200">
                            @else
                                <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-building text-gray-400"></i>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{$Company->title}}</div>
                            @if($Company->slung)
                                <a href="{{url('/')}}/companies/featured-companies/{{$Company->slung}}" target="_blank" class="text-xs text-primary-600 hover:text-primary-700">
                                    <i class="fas fa-external-link-alt mr-1"></i>View Page
                                </a>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{$Company->tagline ?? '—'}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-600">{{$Company->email ?? '—'}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($Company->website)
                                <a href="{{$Company->website}}" target="_blank" class="text-sm text-primary-600 hover:text-primary-700">
                                    <i class="fas fa-link mr-1"></i>Visit
                                </a>
                            @else
                                <span class="text-sm text-gray-400">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-2">
                                <a href="{{url('/')}}/admin/editCompany/{{$Company->id}}" 
                                   class="text-primary-600 hover:text-primary-700 transition-colors" 
                                   title="Edit Company">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{url('/')}}/admin/edit-company-logo/{{$Company->id}}" 
                                   class="text-blue-600 hover:text-blue-700 transition-colors" 
                                   title="Edit Logo">
                                    <i class="fas fa-image"></i>
                                </a>
                                <a href="{{url('/')}}/admin/deleteCompany/{{$Company->id}}" 
                                   onclick="return confirm('Are you sure you want to delete this company? This action cannot be undone.');"
                                   class="text-red-600 hover:text-red-700 transition-colors" 
                                   title="Delete Company">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-building text-6xl text-gray-300 mb-4"></i>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">No Companies Found</h3>
                                <p class="text-gray-600 mb-4">Get started by adding your first company.</p>
                                <a href="{{url('/')}}/admin/addCompany" class="admin-btn admin-btn-primary">
                                    <i class="fas fa-plus mr-2"></i>Add Company
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

