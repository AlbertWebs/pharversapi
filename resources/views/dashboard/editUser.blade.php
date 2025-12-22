@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/manager/dashboard/users" class="hover:text-primary-600">Users</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Edit User</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Edit User</h2>
        <p class="text-gray-600 mt-1">Update user information and profile details</p>
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
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/manager/dashboard/edit_User/{{$User->id}}" enctype="multipart/form-data" id="editUserForm">
            @csrf
            
            <!-- User Profile Image Section -->
            <div class="mb-8 pb-8 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    <i class="fas fa-user-circle mr-2 text-primary-600"></i>Profile Picture
                </h3>
                
                <div class="flex flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-6">
                    <!-- Current Image Preview -->
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img src="{{$User->image ? ((substr($User->image, 0, 4) === 'http') ? $User->image : url('/') . '/uploads/users/' . $User->image) : 'https://ui-avatars.com/api/?name=' . urlencode($User->name) . '&size=200&background=0ea5e9&color=fff'}}" 
                                 alt="{{$User->name}}" 
                                 id="img-upload"
                                 class="w-32 h-32 rounded-full object-cover border-4 border-gray-200 shadow-lg">
                            <div class="absolute inset-0 rounded-full bg-black bg-opacity-0 hover:bg-opacity-20 transition-all duration-200 flex items-center justify-center">
                                <i class="fas fa-camera text-white opacity-0 hover:opacity-100 transition-opacity"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button -->
                    <div class="flex-1">
                        <label for="imgInp" class="admin-label mb-2">Change Profile Picture</label>
                        <div class="flex items-center space-x-4">
                            <label for="imgInp" class="admin-btn admin-btn-secondary cursor-pointer">
                                <i class="fas fa-upload mr-2"></i>Choose Image
                                <input id="imgInp" name="image" type="file" accept="image/*" class="hidden" onchange="previewImage(this)">
                            </label>
                            <span class="text-sm text-gray-500" id="fileName">No file chosen</span>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">Recommended: Square image, at least 400x400px. Max file size: 10MB</p>
                    </div>
                </div>
            </div>
            
            <!-- Basic Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-info-circle mr-2 text-primary-600"></i>Basic Information
                </h3>
                
                <!-- Name & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="admin-label">User Name <span class="text-red-500">*</span></label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               value="{{$User->name}}"
                               required
                               class="admin-input"
                               placeholder="Enter user name">
                    </div>
                    <div>
                        <label for="email" class="admin-label">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{$User->email}}"
                               required
                               class="admin-input"
                               placeholder="user@example.com">
                    </div>
                </div>
                
                <!-- Mobile & Country -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="mobile" class="admin-label">Mobile Number <span class="text-red-500">*</span></label>
                        <input type="text" 
                               id="mobile" 
                               name="mobile" 
                               value="{{$User->mobile}}"
                               required
                               class="admin-input"
                               placeholder="+1234567890">
                    </div>
                    <div>
                        <label for="country" class="admin-label">Country <span class="text-red-500">*</span></label>
                        <input type="text" 
                               id="country" 
                               name="country" 
                               value="{{$User->country}}"
                               required
                               class="admin-input"
                               placeholder="Enter country">
                    </div>
                </div>
                
                <!-- Address -->
                <div class="mb-6">
                    <label for="address" class="admin-label">Address <span class="text-red-500">*</span></label>
                    <input type="text" 
                           id="address" 
                           name="address" 
                           value="{{$User->address}}"
                           required
                           class="admin-input"
                           placeholder="Street address, City, State">
                </div>
            </div>
            
            <!-- Bio Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-file-alt mr-2 text-primary-600"></i>User Bio
                </h3>
                
                <div class="mb-6">
                    <label for="content" class="admin-label">{{$User->name}}'s Bio</label>
                    <textarea id="content" 
                              name="content" 
                              rows="6"
                              class="admin-input"
                              placeholder="Enter a brief bio about the user...">{{$User->content ?? ''}}</textarea>
                    <p class="text-sm text-gray-500 mt-1">A brief description about the user (optional)</p>
                </div>
            </div>
            
            <!-- Author Section -->
            <div class="mb-8 pb-8 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    <i class="fas fa-user-edit mr-2 text-primary-600"></i>Last Modified By
                </h3>
                
                <div>
                    <label for="author" class="admin-label">Author</label>
                    <input type="text" 
                           id="author" 
                           name="author" 
                           value="{{Auth::user()->name}}"
                           readonly
                           class="admin-input bg-gray-50 cursor-not-allowed">
                    <p class="text-sm text-gray-500 mt-1">This field shows who is making the changes</p>
                </div>
            </div>
            
            <!-- Hidden Field -->
            <input type="hidden" name="image_cheat" value="{{$User->image}}">
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6">
                <a href="{{url('/')}}/manager/dashboard/users" class="admin-btn admin-btn-secondary">
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
// Image preview functionality
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        const fileName = input.files[0].name;
        
        reader.onload = function(e) {
            const imgPreview = document.getElementById('img-upload');
            imgPreview.src = e.target.result;
            
            // Update file name display
            const fileNameDisplay = document.getElementById('fileName');
            if (fileNameDisplay) {
                fileNameDisplay.textContent = fileName;
                fileNameDisplay.classList.remove('text-gray-500');
                fileNameDisplay.classList.add('text-green-600');
            }
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

// Initialize file input change handler
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('imgInp');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            previewImage(this);
        });
    }
    
    // Form validation
    const form = document.getElementById('editUserForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Basic validation is handled by HTML5 required attributes
            // Add any additional custom validation here if needed
        });
    }
});
</script>
@endsection
