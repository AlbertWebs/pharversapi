@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Newsletter Link</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Update Newsletter Link</h2>
        <p class="text-gray-600 mt-1">Manage newsletter subscription links</p>
    </div>
    
    @foreach ($Link as $link)
    <!-- Form Card -->
    <div class="admin-card-modern animate-fade-in">
        <!-- Card Title Section -->
        <div class="mb-6 pb-4 border-b border-gray-200">
            <h4 class="text-xl font-semibold text-gray-900">Update Newsletter Link</h4>
        </div>
        
        <!-- Form Content -->
        <div class="pt-2">
            <form method="POST" action="{{url('/')}}/admin/newsletter-link-post" enctype="multipart/form-data">
                @csrf
                
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="admin-label">Title <span class="text-red-500">*</span></label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           value="{{$link->title}}"
                           required
                           class="admin-input"
                           placeholder="Enter newsletter title">
                </div>
                
                <!-- Link -->
                <div class="mb-6">
                    <label for="link" class="admin-label">Link <span class="text-red-500">*</span></label>
                    <textarea id="link" 
                              name="link" 
                              required
                              rows="4"
                              class="admin-input"
                              placeholder="Enter newsletter link">{{$link->link}}</textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                    <a href="{{url('/')}}/admin/home" class="admin-btn admin-btn-secondary">
                        <i class="fas fa-times mr-2"></i>Cancel
                    </a>
                    <button type="submit" class="admin-btn admin-btn-primary">
                        <i class="fas fa-save mr-2"></i>Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
