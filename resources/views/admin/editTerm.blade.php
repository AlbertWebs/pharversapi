@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/terms" class="hover:text-primary-600">Terms and Conditions</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Edit Terms</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Edit Terms and Conditions</h2>
        <p class="text-gray-600 mt-1">Editing <strong>{{$Terms->title}}</strong></p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/edit_term/{{$Terms->id}}" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label">Title <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{$Terms->title}}"
                       required
                       class="admin-input"
                       placeholder="Enter terms and conditions title">
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label for="article-ckeditor" class="admin-label">Content <span class="text-red-500">*</span></label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:500px !important"
                          placeholder="Enter terms and conditions content...">{{$Terms->content}}</textarea>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{url('/')}}/admin/terms" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
