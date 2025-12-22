@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/companies" class="hover:text-primary-600">Companies</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add Company</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add New Company</h2>
        <p class="text-gray-600 mt-1">Create a new company profile</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_Company" enctype="multipart/form-data">
            @csrf
            
            <!-- Basic Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-building mr-2 text-primary-600"></i>Basic Information
                </h3>
                
                <!-- Company Title & Tagline -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="title" class="admin-label">Company Title <span class="text-red-500">*</span></label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{old('title')}}" 
                               required
                               class="admin-input"
                               placeholder="Company Name">
                    </div>
                    <div>
                        <label for="tagline" class="admin-label">Tagline</label>
                        <input type="text" 
                               id="tagline" 
                               name="tagline" 
                               value="{{old('tagline')}}" 
                               class="admin-input"
                               placeholder="Company tagline or slogan">
                    </div>
                </div>
                
                <!-- Website URL -->
                <div class="mb-6">
                    <label for="website" class="admin-label">Website URL</label>
                    <input type="url" 
                           id="website" 
                           name="website" 
                           value="{{old('website')}}" 
                           class="admin-input"
                           placeholder="https://www.example.com">
                </div>
            </div>
            
            <!-- Contact Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-address-card mr-2 text-primary-600"></i>Contact Information
                </h3>
                
                <!-- Mobile & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="mobile" class="admin-label">Mobile Number</label>
                        <input type="text" 
                               id="mobile" 
                               name="mobile" 
                               value="{{old('mobile')}}" 
                               class="admin-input"
                               placeholder="+1234567890">
                    </div>
                    <div>
                        <label for="email" class="admin-label">Email Address</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{old('email')}}" 
                               class="admin-input"
                               placeholder="contact@example.com">
                    </div>
                </div>
                
                <!-- Address -->
                <div class="mb-6">
                    <label for="address" class="admin-label">Physical Address</label>
                    <input type="text" 
                           id="address" 
                           name="address" 
                           value="{{old('address')}}" 
                           class="admin-input"
                           placeholder="Street address, City, Country">
                </div>
            </div>
            
            <!-- Social Media Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-share-alt mr-2 text-primary-600"></i>Social Media Links
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="facebook" class="admin-label">
                            <i class="fab fa-facebook text-blue-600 mr-2"></i>Facebook
                        </label>
                        <input type="url" 
                               id="facebook" 
                               name="facebook" 
                               value="{{old('facebook')}}" 
                               class="admin-input"
                               placeholder="https://facebook.com/yourpage">
                    </div>
                    <div>
                        <label for="instagram" class="admin-label">
                            <i class="fab fa-instagram text-pink-600 mr-2"></i>Instagram
                        </label>
                        <input type="url" 
                               id="instagram" 
                               name="instagram" 
                               value="{{old('instagram')}}" 
                               class="admin-input"
                               placeholder="https://instagram.com/yourpage">
                    </div>
                    <div>
                        <label for="twitter" class="admin-label">
                            <i class="fab fa-twitter text-blue-400 mr-2"></i>Twitter
                        </label>
                        <input type="url" 
                               id="twitter" 
                               name="twitter" 
                               value="{{old('twitter')}}" 
                               class="admin-input"
                               placeholder="https://twitter.com/yourhandle">
                    </div>
                    <div>
                        <label for="linkedin" class="admin-label">
                            <i class="fab fa-linkedin text-blue-700 mr-2"></i>LinkedIn
                        </label>
                        <input type="url" 
                               id="linkedin" 
                               name="linkedin" 
                               value="{{old('linkedin')}}" 
                               class="admin-input"
                               placeholder="https://linkedin.com/company/yourcompany">
                    </div>
                </div>
            </div>
            
            <!-- Company Description Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-file-alt mr-2 text-primary-600"></i>Company Description
                </h3>
                
                <div class="mb-6">
                    <label class="admin-label">About The Company</label>
                    <textarea id="article-ckeditor" 
                              name="ckeditor" 
                              class="admin-input"
                              style="min-height:400px !important"
                              placeholder="Write a detailed description about the company...">{{old('ckeditor')}}</textarea>
                </div>
            </div>
            
            <!-- Images Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-images mr-2 text-primary-600"></i>Company Images
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Logo -->
                    <div>
                        <label class="admin-label">Company Logo</label>
                        <div class="mt-2">
                            <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                                <div class="space-y-1 text-center">
                                    <i class="fas fa-image text-3xl text-gray-400"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="logo" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500">
                                            <span>Upload Logo</span>
                                            <input id="logo" name="logo" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'logo-preview')">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, SVG</p>
                                </div>
                            </div>
                            <img id="logo-preview" src="" alt="" class="hidden max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm mt-4">
                        </div>
                    </div>
                    
                    <!-- Favicon -->
                    <div>
                        <label class="admin-label">Favicon</label>
                        <div class="mt-2">
                            <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                                <div class="space-y-1 text-center">
                                    <i class="fas fa-star text-3xl text-gray-400"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="favicon" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500">
                                            <span>Upload Favicon</span>
                                            <input id="favicon" name="favicon" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'favicon-preview')">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">ICO, PNG (16x16)</p>
                                </div>
                            </div>
                            <img id="favicon-preview" src="" alt="" class="hidden w-16 h-16 object-contain rounded-lg border border-gray-200 shadow-sm mt-4">
                        </div>
                    </div>
                    
                    <!-- Banner -->
                    <div>
                        <label class="admin-label">Banner Image</label>
                        <div class="mt-2">
                            <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                                <div class="space-y-1 text-center">
                                    <i class="fas fa-image text-3xl text-gray-400"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500">
                                            <span>Upload Banner</span>
                                            <input id="image" name="image" type="file" accept="image/*" class="sr-only" onchange="previewImage(this, 'banner-preview')">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG</p>
                                </div>
                            </div>
                            <img id="banner-preview" src="" alt="" class="hidden max-w-full h-auto max-h-32 object-contain rounded-lg border border-gray-200 shadow-sm mt-4">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/admin/companies" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Create Company
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
// Initialize CKEditor
if (typeof CKEDITOR !== 'undefined') {
    CKEDITOR.replace('article-ckeditor', {
        height: 400
    });
}

// Image preview
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById(previewId);
            preview.src = e.target.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection

