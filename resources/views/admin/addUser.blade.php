@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/users" class="hover:text-primary-600">Users</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add New User</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add New User</h2>
        <p class="text-gray-600 mt-1">Create a new user account</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_User" enctype="multipart/form-data">
            @csrf
            
            <!-- Name -->
            <div class="mb-6">
                <label for="name" class="admin-label">User Name <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       required
                       class="admin-input"
                       placeholder="Enter user name">
            </div>
            
            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="admin-label">User Email <span class="text-red-500">*</span></label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       required
                       class="admin-input"
                       placeholder="user@example.com">
            </div>
            
            <!-- Mobile -->
            <div class="mb-6">
                <label for="mobile" class="admin-label">User Mobile Number <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="mobile" 
                       name="mobile" 
                       required
                       class="admin-input"
                       placeholder="+1234567890">
                <p class="text-sm text-gray-500 mt-1">Also used as password</p>
            </div>
            
            <!-- Country -->
            <div class="mb-6">
                <label for="country" class="admin-label">User Country <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="country" 
                       name="country" 
                       required
                       class="admin-input"
                       placeholder="Enter country">
            </div>
            
            <!-- Address -->
            <div class="mb-6">
                <label for="address" class="admin-label">User Address <span class="text-red-500">*</span></label>
                <input type="text" 
                       id="address" 
                       name="address" 
                       required
                       class="admin-input"
                       placeholder="Enter address">
            </div>
            
            <!-- User Image -->
            <div class="mb-6">
                <label class="admin-label">User Image <span class="text-red-500">*</span></label>
                <div class="mt-1">
                    <div class="mb-4 hidden" id="image-preview-container">
                        <p class="text-sm text-gray-600 mb-2">Preview:</p>
                        <img id="img-upload" 
                             src="" 
                             alt="Image preview" 
                             class="w-32 h-32 rounded-full object-cover shadow-md">
                    </div>
                    <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-user-circle text-3xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="imgInp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                    <span>Upload image</span>
                                    <input id="imgInp" name="image" type="file" accept="image/*" required class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Role -->
            <div class="mb-6">
                <label for="is_admin" class="admin-label">User Role <span class="text-red-500">*</span></label>
                <select id="is_admin" name="is_admin" required class="admin-input">
                    <option value="0">Normal Admin</option>
                    <option value="1">Super Admin</option>
                </select>
            </div>
            
            <!-- Hidden Field -->
            <input type="hidden" value="1" name="type">
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/admin/users" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Create User
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
            const container = document.getElementById('image-preview-container');
            imgPreview.src = e.target.result;
            container.classList.remove('hidden');
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
</script>
@endsection
