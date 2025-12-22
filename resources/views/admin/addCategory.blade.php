@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/categories" class="hover:text-primary-600">Topics</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add New Topic</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add New Topic</h2>
        <p class="text-gray-600 mt-1">Categories are used in both blogs and general content classification</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_Category" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label">Category Title</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       class="admin-input"
                       placeholder="Enter category title">
            </div>
            
            <!-- Meta -->
            <div class="mb-6">
                <label for="meta" class="admin-label">Meta Description <span class="text-red-500">*</span></label>
                <textarea id="meta" 
                          name="meta" 
                          required
                          rows="3"
                          class="admin-input"
                          placeholder="Enter meta description for SEO"></textarea>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label class="admin-label">Content <span class="text-red-500">*</span></label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:400px !important"
                          placeholder="Write category content here..."></textarea>
            </div>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <label class="admin-label">Category Featured Image</label>
                <div class="mt-1">
                    <div class="mb-4 hidden" id="image-preview-container">
                        <p class="text-sm text-gray-600 mb-2">Preview:</p>
                        <img id="img-upload" 
                             src="" 
                             alt="Image preview" 
                             class="max-w-md h-auto rounded-lg shadow-md">
                    </div>
                    <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-image text-3xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="imgInp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                    <span>Upload image</span>
                                    <input id="imgInp" name="image" type="file" accept="image/*" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/admin/categories" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Add Category
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Image preview
document.getElementById('imgInp')?.addEventListener('change', function(e) {
    if (e.target.files && e.target.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const imgPreview = document.getElementById('img-upload');
            const container = document.getElementById('image-preview-container');
            imgPreview.src = e.target.result;
            container.classList.remove('hidden');
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
</script>
@endsection
