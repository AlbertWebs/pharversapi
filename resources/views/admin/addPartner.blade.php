@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/partners" class="hover:text-primary-600">Partners</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Add New Partner</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Add Partner</h2>
        <p class="text-gray-600 mt-1">Create a new partner entry</p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/add_Partner" enctype="multipart/form-data">
            @csrf
            
            <!-- Partner Name -->
            <div class="mb-6">
                <label for="title" class="admin-label admin-label-required">Partner Name</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       required
                       class="admin-input"
                       placeholder="Enter partner name">
            </div>
            
            <!-- Image Upload -->
            <div class="mb-6">
                <label for="image_one" class="admin-label admin-label-required">Partner Image</label>
                <div class="mt-2">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img id="img-upload" 
                                 src="https://via.placeholder.com/390x480?text=No+Image" 
                                 alt="Partner image preview" 
                                 class="h-48 w-auto object-cover rounded-lg border-2 border-gray-200 bg-gray-100">
                        </div>
                        <div class="flex-1">
                            <label for="image_one" class="admin-btn admin-btn-secondary cursor-pointer inline-block">
                                <i class="fas fa-upload mr-2"></i>Browse...
                            </label>
                            <input type="file" 
                                   id="image_one" 
                                   name="image_one" 
                                   accept="image/*"
                                   required
                                   class="hidden"
                                   onchange="readURL(this)">
                            <p class="text-sm text-gray-500 mt-2">Recommended size: 390px by 480px</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{url('/')}}/admin/partners" class="admin-btn admin-btn-secondary">
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button type="submit" class="admin-btn admin-btn-primary">
                    <i class="fas fa-save mr-2"></i>Submit
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('img-upload').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
