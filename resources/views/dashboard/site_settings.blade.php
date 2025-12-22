@extends('dashboard.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/manager/dashboard/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Company Settings</li>
        </ol>
    </nav>
    
    @if($SiteSettings->isEmpty())
        <!-- No Company Data Message -->
        <div class="admin-card-modern animate-fade-in">
            <div class="text-center py-12">
                <i class="fas fa-building text-6xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Company Settings Found</h3>
                <p class="text-gray-600 mb-6">Please contact your administrator to set up your company profile.</p>
                <a href="{{url('/')}}/manager/dashboard/home" class="admin-btn admin-btn-primary">
                    <i class="fas fa-arrow-left mr-2"></i>Return to Dashboard
                </a>
            </div>
        </div>
    @else
        @foreach ($SiteSettings as $Setting)
        <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Company Settings</h2>
        <p class="text-gray-600 mt-1">Manage all your company information and settings</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" id="saveSettings" action="#" enctype="multipart/form-data" onsubmit="return false;">
            @csrf
            
            <!-- Basic Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-200">
                    <i class="fas fa-building mr-2 text-primary-600"></i>Basic Information
                </h3>
                
                <!-- Company Title & Tagline -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="title" class="admin-label">Company Title</label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{$Setting->title ?? ''}}" 
                               class="admin-input"
                               placeholder="Company Name">
                    </div>
                    <div>
                        <label for="tagline" class="admin-label">Tagline</label>
                        <input type="text" 
                               id="tagline" 
                               name="tagline" 
                               value="{{$Setting->tagline ?? ''}}" 
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
                           value="{{$Setting->website ?? ''}}" 
                           class="admin-input"
                           placeholder="https://www.example.com">
                    <p class="text-sm text-gray-500 mt-1">Your company's main website URL</p>
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
                               value="{{$Setting->mobile ?? ''}}" 
                               class="admin-input"
                               placeholder="+1234567890">
                    </div>
                    <div>
                        <label for="email" class="admin-label">Email Address</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{$Setting->email ?? ''}}" 
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
                           value="{{$Setting->address ?? ''}}" 
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
                               value="{{$Setting->facebook ?? ''}}" 
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
                               value="{{$Setting->instagram ?? ''}}" 
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
                               value="{{$Setting->twitter ?? ''}}" 
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
                               value="{{$Setting->linkedin ?? ''}}" 
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
                    <label class="admin-label">About Your Company</label>
                    <textarea id="article-ckeditor" 
                              name="ckeditor" 
                              class="admin-input"
                              style="min-height:400px !important"
                              placeholder="Write a detailed description about your company, its mission, values, and what you do...">{{$Setting->content ?? ''}}</textarea>
                    <p class="text-sm text-gray-500 mt-1">This content will be displayed on your company page</p>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{url('/')}}/manager/dashboard/home" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Save All Changes
                </button>
            </div>
        </form>
    </div>
    @endforeach
    @endif
</div>

<script>
// Ensure jQuery is loaded and script runs
(function() {
    function initFormHandler() {
        if (typeof jQuery === 'undefined') {
            console.error('jQuery is not loaded!');
            setTimeout(initFormHandler, 100);
            return;
        }
        
        jQuery(document).ready(function($) {
            // Initialize CKEditor if it exists
            if (typeof CKEDITOR !== 'undefined' && $('#article-ckeditor').length) {
                CKEDITOR.replace('article-ckeditor', {
                    height: 400,
                    toolbar: [
                        { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'] },
                        { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                        { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
                        { name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'] },
                        '/',
                        { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
                        { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                        { name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'] },
                        '/',
                        { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                        { name: 'colors', items: ['TextColor', 'BGColor'] },
                        { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
                    ]
                });
            }
            
            // Handle form submission
            function handleFormSubmit(event) {
                if (event) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                var form = $("#saveSettings");
                
                // Get CKEditor content if it exists
                var ckeditorContent = '';
                if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances['article-ckeditor']) {
                    ckeditorContent = CKEDITOR.instances['article-ckeditor'].getData();
                } else {
                    ckeditorContent = $('#article-ckeditor').val();
                }
                
                // Build form data object
                var formDataObj = {};
                
                // Get all form inputs
                form.find('input, textarea, select').each(function() {
                    var $field = $(this);
                    var name = $field.attr('name');
                    var type = $field.attr('type');
                    
                    if (!name) return;
                    
                    if (type === 'checkbox') {
                        formDataObj[name] = $field.is(':checked') ? 'on' : '';
                    } else if (type === 'radio') {
                        if ($field.is(':checked')) {
                            formDataObj[name] = $field.val();
                        }
                    } else {
                        formDataObj[name] = $field.val() || '';
                    }
                });
                
                // Update ckeditor field with CKEditor content
                if (ckeditorContent !== undefined) {
                    formDataObj['ckeditor'] = ckeditorContent;
                }
                
                // Convert to URL-encoded string
                var formData = $.param(formDataObj);
                
                Swal.fire({
                    title: 'Save Changes?',
                    text: "Are you sure you want to save all company settings?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#0ea5e9',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Yes, save all changes!',
                    cancelButtonText: 'Cancel'
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
                        
                        // Get CSRF token
                        var token = $('meta[name="csrf-token"]').attr('content');
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': token
                            }
                        });
                        
                        $.ajax({
                            url: "{{url('/')}}/manager/dashboard/updateSiteSettingsAjax",
                            type: "PUT",
                            dataType: "json",
                            data: formData,
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Saved!',
                                    text: 'Your company settings have been updated successfully.',
                                    timer: 2000,
                                    showConfirmButton: false
                                }).then(() => {
                                    window.location.reload();
                                });
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                                console.error('Response:', xhr.responseText);
                                var errorMsg = 'Something went wrong. Please try again.';
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMsg = xhr.responseJSON.message;
                                }
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: errorMsg
                                });
                            }
                        });
                    }
                });
                
                return false;
            }
            
            // Attach submit handler
            $("#saveSettings").on('submit', handleFormSubmit);
            
            // Also attach click handler to button as backup
            $("#saveSettings button[type='submit']").on('click', function(e) {
                e.preventDefault();
                handleFormSubmit(e);
            });
        });
    }
    
    // Start initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFormHandler);
    } else {
        initFormHandler();
    }
})();
</script>
@endsection
