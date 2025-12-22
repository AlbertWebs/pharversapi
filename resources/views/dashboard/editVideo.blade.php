@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/manager/dashboard/videos" class="hover:text-primary-600">Videos</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Edit Video</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Edit Video</h2>
        <p class="text-gray-600 mt-1">Editing <strong>{{$Video->title}}</strong></p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/manager/dashboard/edit_Video/{{$Video->id}}" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label admin-label-required">Title</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{$Video->title}}"
                       required
                       class="admin-input"
                       placeholder="Enter video title">
            </div>
            
            <!-- Video ID -->
            <div class="mb-6">
                <label for="file" class="admin-label admin-label-required">YouTube Video ID</label>
                <input type="text" 
                       id="file" 
                       name="file" 
                       value="{{$Video->file}}"
                       required
                       class="admin-input"
                       placeholder="NSmevXhc6IA">
                <p class="text-sm text-gray-500 mt-1">Enter the YouTube video ID (e.g., NSmevXhc6IA)</p>
            </div>
            
            <!-- Category -->
            <div class="mb-6">
                <label for="category" class="admin-label admin-label-required">Category</label>
                <select id="category" name="category" required class="admin-input">
                    <?php $CategorySelected = DB::table('categories')->where('id',$Video->category)->get() ?>
                    @foreach ($CategorySelected as $CatSel)
                        <option value="{{$CatSel->id}}" selected>{{$CatSel->title}}</option>
                    @endforeach
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
                          placeholder="Enter meta description for SEO">{{$Video->meta}}</textarea>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label class="admin-label admin-label-required">Content</label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:500px !important"
                          placeholder="Write your content here...">{{$Video->content}}</textarea>
            </div>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <label class="admin-label">Change Featured Image</label>
                <div class="mt-1">
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Current Image:</p>
                        <img src="{{$Video->image}}" 
                             alt="Current featured image" 
                             id="img-upload"
                             class="max-w-md h-auto rounded-lg shadow-md">
                    </div>
                    <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-image text-3xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="imgInp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                    <span>Upload new image</span>
                                    <input id="imgInp" name="image" type="file" accept="image/*" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
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
            
            <!-- Hidden Fields -->
            <input type="hidden" name="image_cheat" value="{{$Video->image}}">
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/manager/dashboard/videos" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Changes
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
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
</script>
@endsection
