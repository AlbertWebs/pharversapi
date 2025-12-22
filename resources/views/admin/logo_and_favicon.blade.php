@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Logo & Favicon</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Logo & Favicon Settings</h2>
        <p class="text-gray-600 mt-1">Manage your site's identity media</p>
    </div>
    
    @foreach ($SiteSettings as $SiteSettings)
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/logo-and-favicon-update" enctype="multipart/form-data">
            @csrf
            
            <!-- Image Uploads Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Logo One -->
                <div>
                    <label class="admin-label">Logo One <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Logo:</p>
                            @if($SiteSettings->logo)
                                <img src="{{url('/')}}/uploads/logo/{{$SiteSettings->logo}}" 
                                     alt="Current logo" 
                                     id="logo-preview"
                                     class="max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm">
                            @else
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <span class="text-gray-400 text-sm">No logo uploaded</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-image text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="logo-input" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Upload Logo</span>
                                        <input id="logo-input" name="logo" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'logo-preview')">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, SVG up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="logo_cheat" value="{{$SiteSettings->logo}}">
                </div>
                
                <!-- Footer Logo -->
                <div>
                    <label class="admin-label">Footer Logo</label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Footer Logo:</p>
                            @if($SiteSettings->logo_footer)
                                <img src="{{url('/')}}/uploads/logo/{{$SiteSettings->logo_footer}}" 
                                     alt="Current footer logo" 
                                     id="logo-footer-preview"
                                     class="max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm">
                            @else
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <span class="text-gray-400 text-sm">No footer logo uploaded</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-image text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="logo-footer-input" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Upload Footer Logo</span>
                                        <input id="logo-footer-input" name="logo_footer" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'logo-footer-preview')">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, SVG up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="logo_footer_cheat" value="{{$SiteSettings->logo_footer}}">
                </div>
                
                <!-- Logo Two -->
                <div>
                    <label class="admin-label">Logo Two</label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Logo Two:</p>
                            @if($SiteSettings->logo_two)
                                <img src="{{url('/')}}/uploads/logo/{{$SiteSettings->logo_two}}" 
                                     alt="Current logo two" 
                                     id="logo-two-preview"
                                     class="max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm">
                            @else
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <span class="text-gray-400 text-sm">No logo two uploaded</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-image text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="logo-two-input" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Upload Logo Two</span>
                                        <input id="logo-two-input" name="logo_two" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'logo-two-preview')">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, SVG up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="logo_two_cheat" value="{{$SiteSettings->logo_two}}">
                </div>
                
                <!-- Favicon -->
                <div>
                    <label class="admin-label">Favicon</label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Favicon:</p>
                            @if($SiteSettings->favicon)
                                <img src="{{url('/')}}/uploads/logo/{{$SiteSettings->favicon}}" 
                                     alt="Current favicon" 
                                     id="favicon-preview"
                                     class="w-16 h-16 object-contain rounded-lg border border-gray-200 shadow-sm">
                            @else
                                <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <i class="fas fa-star text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-star text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="favicon-input" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Upload Favicon</span>
                                        <input id="favicon-input" name="favicon" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'favicon-preview')">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">ICO, PNG up to 1MB (16x16 or 32x32)</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="favicon_cheat" value="{{$SiteSettings->favicon}}">
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
    @endforeach
</div>

<script>
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var preview = document.getElementById(previewId);
            if (preview) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                // If it's a placeholder div, replace it with img
                if (preview.tagName !== 'IMG') {
                    var img = document.createElement('img');
                    img.id = previewId;
                    img.src = e.target.result;
                    img.className = previewId === 'favicon-preview' 
                        ? 'w-16 h-16 object-contain rounded-lg border border-gray-200 shadow-sm'
                        : 'max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm';
                    preview.parentNode.replaceChild(img, preview);
                }
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
