@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Social Media Settings</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Social Media Settings</h2>
        <p class="text-gray-600 mt-1">Manage your social media profile links</p>
    </div>
    
    @foreach ($SiteSettings as $Setting)
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form id="saveSettings" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Social Media Links Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Facebook -->
                <div>
                    <label for="facebook" class="admin-label">
                        <i class="fab fa-facebook-f text-blue-600 mr-2"></i>Facebook
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="facebook" 
                               name="facebook" 
                               value="{{$Setting->facebook ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://facebook.com/yourpage">
                    </div>
                </div>
                
                <!-- Twitter -->
                <div>
                    <label for="twitter" class="admin-label">
                        <i class="fab fa-twitter text-blue-400 mr-2"></i>Twitter
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="twitter" 
                               name="twitter" 
                               value="{{$Setting->twitter ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://twitter.com/yourhandle">
                    </div>
                </div>
                
                <!-- Instagram -->
                <div>
                    <label for="instagram" class="admin-label">
                        <i class="fab fa-instagram text-pink-600 mr-2"></i>Instagram
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="instagram" 
                               name="instagram" 
                               value="{{$Setting->instagram ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://instagram.com/yourprofile">
                    </div>
                </div>
                
                <!-- LinkedIn -->
                <div>
                    <label for="linkedin" class="admin-label">
                        <i class="fab fa-linkedin-in text-blue-700 mr-2"></i>LinkedIn
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="linkedin" 
                               name="linkedin" 
                               value="{{$Setting->linkedin ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://linkedin.com/company/yourcompany">
                    </div>
                </div>
                
                <!-- YouTube -->
                <div>
                    <label for="youtube" class="admin-label">
                        <i class="fab fa-youtube text-red-600 mr-2"></i>YouTube
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="youtube" 
                               name="youtube" 
                               value="{{$Setting->youtube ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://youtube.com/channel/yourchannel">
                    </div>
                </div>
                
                <!-- Google -->
                <div>
                    <label for="google" class="admin-label">
                        <i class="fab fa-google text-red-500 mr-2"></i>Google
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-link text-gray-400"></i>
                        </div>
                        <input type="url" 
                               id="google" 
                               name="google" 
                               value="{{$Setting->google ?? ''}}"
                               class="admin-input pl-10"
                               placeholder="https://plus.google.com/yourpage">
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
    @endforeach
</div>

<script>
$(document).ready(function() {
    $("#saveSettings").on('submit', function(event) {
        event.preventDefault();
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to update social media settings?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#2563eb',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Yes, save changes!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Show loading
                Swal.fire({
                    title: 'Saving...',
                    text: 'Please wait while we save your changes',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                
                var form = $(this);
                var formData = form.serialize();
                
                $.ajax({
                    url: "{{url('/')}}/admin/updateSiteSocialMediaAjax",
                    type: "PUT",
                    dataType: "json",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Social media settings have been updated successfully.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong. Please try again.',
                        });
                    }
                });
            }
        });
    });
});
</script>
@endsection
