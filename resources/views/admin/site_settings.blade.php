@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">System Settings</li>
        </ol>
    </nav>
    
    @foreach ($SiteSettings as $Setting)
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">System Settings</h2>
        <p class="text-gray-600 mt-1">System defaults for various operations</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" id="saveSettings" action="#" enctype="multipart/form-data">
            @csrf
            
            <!-- Website & Sitename -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="url" class="admin-label">Website URL</label>
                    <input type="url" 
                           id="url" 
                           name="url" 
                           value="{{$Setting->url}}" 
                           class="admin-input"
                           placeholder="https://...">
                </div>
                <div>
                    <label for="sitename" class="admin-label">Site Name</label>
                    <input type="text" 
                           id="sitename" 
                           name="sitename" 
                           value="{{$Setting->sitename}}" 
                           class="admin-input"
                           placeholder="Site Name">
                </div>
            </div>
            
            <!-- Tagline -->
            <div class="mb-6">
                <label for="tagline" class="admin-label">Tagline</label>
                <input type="text" 
                       id="tagline" 
                       name="tagline" 
                       value="{{$Setting->tagline}}" 
                       class="admin-input"
                       placeholder="Site tagline">
            </div>
            
            <!-- Mobile & Phone -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="mobile_one" class="admin-label">Mobile</label>
                    <input type="text" 
                           id="mobile_one" 
                           name="mobile_one" 
                           value="{{$Setting->mobile_one}}" 
                           class="admin-input"
                           placeholder="+1234567890">
                </div>
                <div>
                    <label for="mobile_two" class="admin-label">Phone</label>
                    <input type="text" 
                           id="mobile_two" 
                           name="mobile_two" 
                           value="{{$Setting->mobile_two}}" 
                           class="admin-input"
                           placeholder="+1234567890">
                </div>
            </div>
            
            <!-- Emails -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="email_one" class="admin-label">Email</label>
                    <input type="email" 
                           id="email_one" 
                           name="email_one" 
                           value="{{$Setting->email_one}}" 
                           class="admin-input"
                           placeholder="email@example.com">
                </div>
                <div>
                    <label for="email" class="admin-label">Alternate Email</label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{$Setting->email}}" 
                           class="admin-input"
                           placeholder="alternate@example.com">
                </div>
            </div>
            
            <!-- Payment Methods -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="mpesa" class="admin-label">M-PESA TILL/PAYBILL</label>
                    <input type="text" 
                           id="mpesa" 
                           name="mpesa" 
                           value="{{$Setting->mpesa}}" 
                           class="admin-input"
                           placeholder="M-PESA details">
                </div>
                <div>
                    <label for="paypal" class="admin-label">PayPal</label>
                    <input type="text" 
                           id="paypal" 
                           name="paypal" 
                           value="{{$Setting->paypal}}" 
                           class="admin-input"
                           placeholder="PayPal email">
                </div>
            </div>
            
            <!-- Location & Address -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="location" class="admin-label">Location</label>
                    <input type="text" 
                           id="location" 
                           name="location" 
                           value="{{$Setting->location}}" 
                           class="admin-input"
                           placeholder="City, Country">
                </div>
                <div>
                    <label for="address" class="admin-label">Address</label>
                    <input type="text" 
                           id="address" 
                           name="address" 
                           value="{{$Setting->address}}" 
                           class="admin-input"
                           placeholder="Street address">
                </div>
            </div>
            
            <!-- Widget Status Toggles -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="admin-card bg-gray-50">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Live Chat Status</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" 
                               name="tawkToStatus" 
                               class="sr-only peer" 
                               {{$Setting->tawkToStatus == 1 ? 'checked' : ''}}>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700">
                            {{$Setting->tawkToStatus == 1 ? 'Enabled' : 'Disabled'}}
                        </span>
                    </label>
                </div>
                <div class="admin-card bg-gray-50">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">WhatsApp Widget Status</h4>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" 
                               name="whatsAppStatus" 
                               class="sr-only peer" 
                               {{$Setting->whatsAppStatus == 1 ? 'checked' : ''}}>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700">
                            {{$Setting->whatsAppStatus == 1 ? 'Enabled' : 'Disabled'}}
                        </span>
                    </label>
                </div>
            </div>
            
            <!-- Tawk To Script -->
            <div class="mb-6">
                <label for="tawkTo" class="admin-label">Tawk To Script</label>
                <textarea id="tawkTo" 
                          name="tawkTo" 
                          rows="4"
                          class="admin-input font-mono text-sm"
                          placeholder="Paste Tawk To script here...">{{$Setting->tawkTo}}</textarea>
            </div>
            
            <!-- Map Embed -->
            <div class="mb-6">
                <label for="map" class="admin-label">Google Map Embed Code</label>
                <textarea id="map" 
                          name="map" 
                          rows="4"
                          class="admin-input font-mono text-sm"
                          placeholder="Paste Google Map embed code here...">{{$Setting->map}}</textarea>
            </div>
            
            <!-- Welcome Message -->
            <div class="mb-6">
                <label class="admin-label">Welcome Message</label>
                <textarea id="article-ckeditor" 
                          name="welcome" 
                          class="admin-input"
                          style="min-height:300px !important"
                          placeholder="Welcome message content...">{{$Setting->welcome}}</textarea>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </form>
    </div>
    @endforeach
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
                    height: 300
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
                var welcomeContent = '';
                if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances['article-ckeditor']) {
                    welcomeContent = CKEDITOR.instances['article-ckeditor'].getData();
                } else {
                    welcomeContent = $('#article-ckeditor').val();
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
                
                // Update welcome field with CKEditor content
                if (welcomeContent !== undefined) {
                    formDataObj['welcome'] = welcomeContent;
                }
                
                // Convert to URL-encoded string
                var formData = $.param(formDataObj);
                
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Once submitted, you cannot revert back to the previous state",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0ea5e9',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Yes, save changes!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Get CSRF token
                        var token = $('meta[name="csrf-token"]').attr('content');
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': token
                            }
                        });
                        
                        $.ajax({
                            url: "{{url('/')}}/admin/updateSiteSettingsAjax",
                            type: "PUT",
                            dataType: "json",
                            data: formData,
                            success: function(response) {
                                Swal.fire('Saved!', 'Your changes have been updated successfully.', 'success');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 2000);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                                console.error('Response:', xhr.responseText);
                                var errorMsg = 'Something went wrong. Please try again.';
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMsg = xhr.responseJSON.message;
                                }
                                Swal.fire('Error!', errorMsg, 'error');
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
