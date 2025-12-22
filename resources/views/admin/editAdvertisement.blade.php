@extends('admin.master')
@section('content')
<div class="p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{url('/')}}/admin/home" class="hover:text-primary-600"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li><a href="{{url('/')}}/admin/advertisements" class="hover:text-primary-600">Advertisements</a></li>
            <li><i class="fas fa-chevron-right text-gray-400"></i></li>
            <li class="text-gray-900 font-medium">Edit Advertisement</li>
        </ol>
    </nav>
    
    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Edit Advertisement</h2>
        <p class="text-gray-600 mt-1">Editing <strong>{{$Advertisement->title}}</strong></p>
    </div>
    
    <!-- Form -->
    <div class="admin-card-modern animate-fade-in">
        <form method="POST" action="{{url('/')}}/admin/edit_Advertisement/{{$Advertisement->id}}" enctype="multipart/form-data">
            @csrf
            
            <!-- Ad Type -->
            <div class="mb-6">
                <label for="title" class="admin-label">Ad Type</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{$Advertisement->title}}"
                       readonly
                       required
                       class="admin-input bg-gray-50 cursor-not-allowed">
            </div>
            
            <!-- Ad URI -->
            <div class="mb-6">
                <label for="url" class="admin-label">Ad URI</label>
                <input type="url" 
                       id="url" 
                       name="url" 
                       value="{{$Advertisement->url}}"
                       required
                       class="admin-input"
                       placeholder="https://...">
            </div>
            
            <!-- Date -->
            <div class="mb-6">
                <label for="date" class="admin-label">Date</label>
                <input type="date" 
                       id="date" 
                       name="date" 
                       value="{{$Advertisement->date}}"
                       required
                       class="admin-input">
            </div>
            
            <!-- Hidden Fields -->
            <input type="hidden" name="dimension" value="{{$Advertisement->dimension}}">
            <input type="hidden" name="placement" value="{{$Advertisement->placement}}">
            <input type="hidden" name="page" value="{{$Advertisement->page}}">
            <input type="hidden" name="author" value="{{Auth::user()->name}}">
            <input type="hidden" name="image_cheat" value="{{$Advertisement->image}}">
            
            <!-- Image Upload -->
            <div class="mb-6">
                <label class="admin-label">Change Image</label>
                <div class="mt-2">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img id="img-upload" 
                                 src="{{$Advertisement->image}}" 
                                 alt="Advertisement image" 
                                 class="h-32 w-auto object-cover rounded-lg border-2 border-gray-200">
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
                                   onchange="readURL(this)">
                            <p class="text-sm text-gray-500 mt-2">Select a new image to replace the current one</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{url('/')}}/admin/advertisements" class="admin-btn admin-btn-secondary">
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
