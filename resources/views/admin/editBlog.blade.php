@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/blog" class="hover:text-primary-600">Blog Posts</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Edit Post</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Edit Blog Post</h2>
        <p class="text-gray-600 mt-1">Editing <strong>{{$Blog->title}}</strong></p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/edit_Blog/{{$Blog->id}}" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label">Post Title <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{$Blog->title}}"
                       required
                       class="admin-input"
                       placeholder="Enter post title">
            </div>
            
            <!-- Video URL & Podcast URL -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="video_url" class="admin-label">Video URL</label>
                    <input type="text" 
                           id="video_url" 
                           name="video_url" 
                           value="{{$Blog->video_url}}"
                           class="admin-input"
                           placeholder="https://...">
                </div>
                <div>
                    <label for="podcast_url" class="admin-label">Podcast URL</label>
                    <input type="text" 
                           id="podcast_url" 
                           name="podcast_url" 
                           value="{{$Blog->podcast_url}}"
                           class="admin-input"
                           placeholder="https://...">
                </div>
            </div>
            
            <!-- Type & Category -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="type" class="admin-label">Content Type <span class="text-red-500">*</span></label>
                    <select id="type" name="type" required class="admin-input" onchange="toggleWhitepaperFields(this.value)">
                        <option value="{{$Blog->type}}" selected>{{$Blog->type}}</option>
                        <option value="News">News</option>
                        <option value="Articles">Articles</option>
                        <option value="Interviews">Interviews</option>
                        <option value="Videos">Videos</option>
                        <option value="Webinars">Webinars</option>
                        <option value="Publications">Publications</option>
                        <option value="Whitepapers/Application Notes">Whitepapers/Application Notes</option>
                        <option value="Events">Events</option>
                        <option value="Podcasts">Podcasts</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="admin-label">Topic <span class="text-red-500">*</span></label>
                    <select id="category" name="category" required class="admin-input">
                        <?php $CategorySelected = DB::table('categories')->where('id',$Blog->category)->get() ?>
                        @foreach ($CategorySelected as $CatSel)
                            <option value="{{$CatSel->id}}" selected>{{$CatSel->title}}</option>
                        @endforeach
                        @foreach ($Category as $Categories)
                            <option value="{{$Categories->id}}">{{$Categories->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <!-- Whitepaper Fields -->
            <div id="whitepaper_fields" class="{{$Blog->type == 'Whitepapers/Application Notes' ? '' : 'hidden'}} grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="whitepaper_file" class="admin-label">Upload New Whitepaper File</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="whitepaper_file" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                    <span>Upload file</span>
                                    <input id="whitepaper_file" name="whitepaper_file" type="file" class="sr-only">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="whitepaper_link" class="admin-label">Whitepaper External Link</label>
                    <input type="text" 
                           id="whitepaper_link" 
                           name="whitepaper_link" 
                           value="{{$Blog->whitepaper_link}}"
                           class="admin-input"
                           placeholder="https://...">
                </div>
                <div>
                    <label class="admin-label">Current Whitepaper File</label>
                    <input type="text" 
                           value="{{$Blog->whitepaper_file}}" 
                           class="admin-input bg-gray-50"
                           readonly
                           placeholder="No file uploaded">
                </div>
            </div>
            
            <!-- Meta Description -->
            <div class="mb-6">
                <label for="meta" class="admin-label">Meta Description <span class="text-red-500">*</span></label>
                <textarea id="meta" 
                          name="meta" 
                          required
                          rows="3"
                          class="admin-input"
                          placeholder="Enter meta description for SEO">{{$Blog->meta}}</textarea>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label class="admin-label">Content <span class="text-red-500">*</span></label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:500px !important"
                          placeholder="Write your content here...">{{$Blog->content}}</textarea>
            </div>
            
            <!-- Author Name -->
            <div class="mb-6">
                <label for="author" class="admin-label">Author Name <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="author" 
                       name="author" 
                       value="{{Auth::user()->name}}"
                       required
                       class="admin-input"
                       placeholder="Author name">
            </div>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <label class="admin-label">Change Featured Image</label>
                <div class="mt-1">
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Current Image:</p>
                        <img src="{{$Blog->image_one}}" 
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
                                    <input id="imgInp" name="image_one" type="file" accept="image/*" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hidden Fields -->
            <input type="hidden" name="image_one_cheat" value="{{$Blog->image_one}}">
            <input type="hidden" name="whitepaper_file_cheat" value="{{$Blog->whitepaper_file}}">
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/admin/blog" class="admin-btn admin-btn-secondary">
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
function toggleWhitepaperFields(value) {
    const fields = document.getElementById('whitepaper_fields');
    if (value === 'Whitepapers/Application Notes') {
        fields.classList.remove('hidden');
    } else {
        fields.classList.add('hidden');
    }
}

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
