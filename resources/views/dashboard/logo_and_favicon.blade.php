@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Logo & Favicon</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Logo & Favicon Settings</h2>
        <p class="text-gray-600 mt-1">Manage your company's identity media</p>
    </div>
    
    @if($SiteSettings->isEmpty())
        <!-- No Company Data Message -->
        <div class="admin-card-modern animate-fade-in">
            <div class="text-center py-12">
                <i class="fas fa-image text-6xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Company Found</h3>
                <p class="text-gray-600 mb-6">Please set up your company profile first.</p>
                <a href="{{url('/')}}/manager/dashboard/SiteSettings" class="admin-btn admin-btn-primary">
                    <i class="fas fa-cog mr-2"></i>Go to Company Settings
                </a>
            </div>
        </div>
    @else
        @foreach ($SiteSettings as $Setting)
        <!-- Form -->
        <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/manager/dashboard/logo-and-favicon-update" enctype="multipart/form-data">
            @csrf
            
            <!-- Image Uploads Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Logo -->
                <div>
                    <label class="admin-label">Logo <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Logo:</p>
                            @if($Setting->logo)
                                <img src="{{(substr($Setting->logo, 0, 4) === 'http') ? $Setting->logo : url('/') . '/uploads/companies/' . $Setting->logo}}" 
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
                    <input type="hidden" name="logo_cheat" value="{{$Setting->logo ?? ''}}">
                </div>
                
                <!-- Favicon -->
                <div>
                    <label class="admin-label">Favicon</label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Favicon:</p>
                            @if($Setting->favicon)
                                <img src="{{(substr($Setting->favicon, 0, 4) === 'http') ? $Setting->favicon : url('/') . '/uploads/companies/' . $Setting->favicon}}" 
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
                    <input type="hidden" name="favicon_cheat" value="{{$Setting->favicon ?? ''}}">
                </div>
                
                <!-- Banner Image -->
                <div>
                    <label class="admin-label">Banner Image</label>
                    <div class="mt-2">
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Current Banner:</p>
                            @if($Setting->image)
                                <img src="{{(substr($Setting->image, 0, 4) === 'http') ? $Setting->image : url('/') . '/uploads/companies/' . $Setting->image}}" 
                                     alt="Current banner" 
                                     id="banner-preview"
                                     class="max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm">
                            @else
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <span class="text-gray-400 text-sm">No banner uploaded</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-image text-3xl text-gray-400"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="banner-input" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Upload Banner</span>
                                        <input id="banner-input" name="banner" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'banner-preview')">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="banner_cheat" value="{{$Setting->image ?? ''}}">
                </div>
            </div>
            
            <!-- Success/Error Messages -->
            @if(Session::has('message'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-center">
                    <i class="fas fa-check-circle text-green-600 mr-3"></i>
                    <span class="text-green-800">{{ Session::get('message') }}</span>
                </div>
            @endif

            @if(Session::has('messageError'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-center">
                    <i class="fas fa-exclamation-circle text-red-600 mr-3"></i>
                    <span class="text-red-800">{{ Session::get('messageError') }}</span>
                </div>
            @endif
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{url('/')}}/manager/dashboard/home" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </form>
    </div>
    @endforeach
    @endif
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

