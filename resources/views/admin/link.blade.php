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
        <p class="text-gray-600 mt-1">Manage the newsletter promo link and image shown on the website</p>
    </div>
    
    @php
        $link = $Link->first();
        $currentImage = $link?->image ?: ($NewsletterAd?->image ?? '');
    @endphp

    <!-- Form Card -->
    <div class="admin-card-modern animate-fade-in">
        <div class="mb-6 pb-4 border-b border-gray-200">
            <h4 class="text-xl font-semibold text-gray-900">Update Newsletter Link</h4>
        </div>
        
        <div class="pt-2">
            <form method="POST" action="{{url('/')}}/admin/newsletter-link-post" enctype="multipart/form-data">
                @csrf
                
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="admin-label">Title <span class="text-red-500">*</span></label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $link?->title ?? '') }}"
                           required
                           class="admin-input"
                           placeholder="Enter newsletter title">
                </div>
                
                <!-- Link -->
                <div class="mb-6">
                    <label for="link" class="admin-label">Link <span class="text-red-500">*</span></label>
                    <input type="url" 
                           id="link" 
                           name="link" 
                           value="{{ old('link', $link?->link ?? '') }}"
                           required
                           class="admin-input"
                           placeholder="https://subscribers.africanpharmaceuticalreview.com/">
                    <p class="text-sm text-gray-500 mt-2">This URL is used for the newsletter image and “Get Free Copy” button on the site.</p>
                </div>

                <!-- Image -->
                <div class="mb-6">
                    <label class="admin-label">Newsletter Image</label>
                    <input type="hidden" name="image_cheat" value="{{ $currentImage }}">
                    <div class="mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img id="img-upload" 
                                     src="{{ $currentImage }}" 
                                     alt="Newsletter image" 
                                     class="h-40 w-auto object-cover rounded-lg border-2 border-gray-200 bg-gray-50 {{ empty($currentImage) ? 'hidden' : '' }}">
                                <div id="img-placeholder" class="h-40 w-32 flex items-center justify-center rounded-lg border-2 border-dashed border-gray-300 text-gray-400 text-sm {{ empty($currentImage) ? '' : 'hidden' }}">
                                    No image
                                </div>
                            </div>
                            <div class="flex-1">
                                <label for="imgInp" class="admin-btn admin-btn-secondary cursor-pointer inline-block">
                                    <i class="fas fa-upload mr-2"></i>Browse...
                                </label>
                                <input type="file" 
                                       id="imgInp" 
                                       name="image" 
                                       accept="image/*"
                                       class="hidden"
                                       onchange="previewNewsletterImage(this)">
                                <p class="text-sm text-gray-500 mt-2">Upload a new cover/image for the newsletter promo on the homepage and article pages.</p>
                            </div>
                        </div>
                    </div>
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
</div>
@endsection

@section('scripts')
<script>
function previewNewsletterImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.getElementById('img-upload');
            var placeholder = document.getElementById('img-placeholder');
            img.src = e.target.result;
            img.classList.remove('hidden');
            if (placeholder) {
                placeholder.classList.add('hidden');
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
