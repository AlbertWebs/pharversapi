@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/manager/dashboard/podcasts" class="hover:text-primary-600">Podcasts</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add Podcast</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add New Podcast</h2>
        <p class="text-gray-600 mt-1">Add a new podcast post</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/manager/dashboard/add_Podcast" enctype="multipart/form-data">
            <input type="hidden" name="company_id" value="{{Auth::User()->company_id}}">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label admin-label-required">Title</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       required
                       class="admin-input"
                       placeholder="Enter podcast title">
            </div>
            
            <!-- Audio URL -->
            <div class="mb-6">
                <label for="file" class="admin-label admin-label-required">Audio URL</label>
                <input type="text" 
                       id="file" 
                       name="file" 
                       required
                       class="admin-input"
                       placeholder="https://...">
                <p class="text-sm text-gray-500 mt-1">Enter the URL to the audio file</p>
            </div>
            
            <!-- Category -->
            <div class="mb-6">
                <label for="category" class="admin-label admin-label-required">Category</label>
                <select id="category" name="category" required class="admin-input">
                    <option value="" disabled selected>Choose your Category</option>
                    @foreach ($Category as $Categories)
                        <option value="{{$Categories->id}}">{{$Categories->title}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Meta Description -->
            <div class="mb-6">
                <label for="meta" class="admin-label admin-label-required">Meta Description</label>
                <textarea id="meta" 
                          name="meta" 
                          required
                          rows="3"
                          class="admin-input"
                          placeholder="Enter meta description for SEO"></textarea>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label class="admin-label admin-label-required">Content</label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:500px !important"
                          placeholder="Write your content here..."></textarea>
            </div>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <label for="image" class="admin-label admin-label-required">Featured Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                    <div class="space-y-1 text-center">
                        <img id="img-upload" src="" alt="" class="hidden mx-auto h-32 w-auto mb-2 rounded-lg">
                        <i class="fas fa-image text-3xl text-gray-400"></i>
                        <div class="flex text-sm text-gray-600">
                            <label for="imgInp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                <span>Upload an image</span>
                                <input id="imgInp" name="image" type="file" accept="image/*" required class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>
            
            <!-- Author -->
            <div class="mb-6">
                <label for="author" class="admin-label admin-label-required">Author</label>
                <input type="text" 
                       id="author" 
                       name="author" 
                       value="{{Auth::user()->name}}"
                       required
                       readonly
                       class="admin-input bg-gray-50">
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/manager/dashboard/podcasts" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Create Podcast
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
            imgPreview.src = e.target.result;
            imgPreview.classList.remove('hidden');
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
</script>
@endsection
