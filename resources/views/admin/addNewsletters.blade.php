@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/newsletters" class="hover:text-primary-600">Newsletters</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add New Newsletter</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add New Newsletter</h2>
        <p class="text-gray-600 mt-1">Create a new newsletter issue</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_Newsletter" enctype="multipart/form-data">
            @csrf
            
            <!-- Newsletter Title -->
            <div class="mb-6">
                <label for="title" class="admin-label admin-label-required">Newsletter Title</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       required
                       class="admin-input"
                       placeholder="Enter newsletter title">
            </div>
            
            <!-- Content -->
            <div class="mb-6">
                <label for="article-ckeditor" class="admin-label admin-label-required">Content</label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input min-h-[300px]"
                          placeholder="Enter newsletter content"></textarea>
            </div>
            
            <!-- Image Upload -->
            <div class="mb-6">
                <label for="imgInp" class="admin-label admin-label-required">Featured Image</label>
                <div class="mt-2">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img id="img-upload" 
                                 src="https://via.placeholder.com/800x600?text=No+Image" 
                                 alt="Newsletter image preview" 
                                 class="h-48 w-auto object-cover rounded-lg border-2 border-gray-200 bg-gray-100">
                        </div>
                        <div class="flex-1">
                            <label for="imgInp" class="admin-btn admin-btn-secondary cursor-pointer inline-block">
                                <i class="fas fa-upload mr-2"></i>Browse...
                            </label>
                            <input type="file" 
                                   id="imgInp" 
                                   name="image" 
                                   accept="image/*"
                                   required
                                   class="hidden"
                                   onchange="readURL(this)">
                            <p class="text-sm text-gray-500 mt-2">Select a featured image for the newsletter</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{url('/')}}/admin/newsletters" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Add Newsletter
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('img-upload').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
