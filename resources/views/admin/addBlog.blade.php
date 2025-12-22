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
            <li class="text-gray-900 font-medium">Create Post</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Create Post</h2>
        <p class="text-gray-600 mt-1">Add a new blog post or article</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_Blog" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="admin-label admin-label-required">Title</label>
                <input type="text" 
                       id="title" 
                       name="title" 
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
                           class="admin-input"
                           placeholder="https://...">
                </div>
                <div>
                    <label for="podcast_url" class="admin-label">Podcast URL</label>
                    <input type="text" 
                           id="podcast_url" 
                           name="podcast_url" 
                           class="admin-input"
                           placeholder="https://...">
                </div>
            </div>
            
            <!-- Author, Category, Type -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="author" class="admin-label">Author <span class="text-red-500">*</span></label>
                    <select id="author" name="author" required class="admin-input">
                        <?php $User = \App\Models\User::get(); ?>
                        <option value="{{Auth::User()->id}}" selected>{{Auth::User()->name}}</option>
                        @foreach ($User as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="category" class="admin-label">Topic <span class="text-red-500">*</span></label>
                    <select id="category" name="category" required class="admin-input">
                        <option value="" disabled selected>Choose Topic</option>
                        @foreach ($Category as $Categories)
                            <option value="{{$Categories->id}}">{{$Categories->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="type" class="admin-label">Content Type <span class="text-red-500">*</span></label>
                    <select id="type" name="type" required class="admin-input" onchange="toggleWhitepaperFields(this.value)">
                        <option value="" disabled selected>Choose Content Type</option>
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
            </div>
            
            <!-- Whitepaper Fields (Hidden by default) -->
            <div id="whitepaper_fields" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="whitepaper_file" class="admin-label">Whitepaper File</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="whitepaper_file" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                    <span>Upload a file</span>
                                    <input id="whitepaper_file" name="whitepaper_file" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">PDF, DOC, DOCX up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="whitepaper_link" class="admin-label">Whitepaper Link</label>
                    <input type="text" 
                           id="whitepaper_link" 
                           name="whitepaper_link" 
                           class="admin-input"
                           placeholder="https://...">
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
                          placeholder="Enter meta description for SEO"></textarea>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <label class="admin-label">Content <span class="text-red-500">*</span></label>
                <textarea id="article-ckeditor" 
                          name="ckeditor" 
                          required
                          class="admin-input"
                          style="min-height:500px !important"
                          placeholder="Write your content here..."></textarea>
            </div>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <label for="image_one" class="admin-label">Featured Image <span class="text-red-500">*</span></label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                    <div class="space-y-1 text-center">
                        <img id="img-upload" src="" alt="" class="hidden mx-auto h-32 w-auto mb-2 rounded-lg">
                        <i class="fas fa-image text-3xl text-gray-400"></i>
                        <div class="flex text-sm text-gray-600">
                            <label for="imgInp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                <span>Upload an image</span>
                                <input id="imgInp" name="image_one" type="file" accept="image/*" required class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>
            
            <!-- Image Credit -->
            <div class="mb-6">
                <label for="image_credit" class="admin-label">Image Credit</label>
                <input type="text" 
                       id="image_credit" 
                       name="image_credit" 
                       class="admin-input"
                       placeholder="Photo by...">
            </div>
            
            <!-- Audio File -->
            <div class="mb-6">
                <label for="audio" class="admin-label">Audio File</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                    <div class="space-y-1 text-center">
                        <i class="fas fa-music text-3xl text-gray-400"></i>
                        <div class="flex text-sm text-gray-600">
                            <label for="audio" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                <span>Upload audio</span>
                                <input id="audio" name="audio" type="file" accept="audio/*" class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">MP3, WAV up to 50MB</p>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/admin/blog" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Create Post
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
            imgPreview.classList.remove('hidden');
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
</script>
@endsection
