@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Create Post</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/blog"><i class="fa fa-backward" aria-hidden="true"></i> All Posts</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Create Post</h4>
                        {{-- <p> Create Blog Posts </p> --}}
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif

                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/add_Blog" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Title</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input autocomplete="off" name="video_url" id="list-title" type="text" class="validate" >
                                    <label for="list-title">Video Uri</label>
                                </div>
                                <div class="input-field col s6">
                                    <input autocomplete="off" name="podcast_url" id="list-title" type="text" class="validate" >
                                    <label for="list-title">Podcats Uri</label>
                                </div>
                            </div>

                            {{--  --}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <select required name="category" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose Topic</option>
                                        @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <label>Choose Category</label> --}}
                                </div>
                                <div class="input-field col s6">
                                    <select required name="type" class="icons" onchange="showDiv('hidden_div', this)">
                                        <option value="" disabled selected>Choose Content Type</option>
                                        <option value="News"  class="circle">News</option>
                                        <option value="Articles"  class="circle">Articles</option>
                                        <option value="Interviews"  class="circle">Interviews</option>
                                        <option value="Videos"  class="circle">Videos</option>
                                        <option value="Webinars"  class="circle">Webinars</option>
                                        <option value="Publications"  class="circle">Publications</option>
                                        <option value="Whitepapers/Application Notes"  class="circle">Whitepapers/Application Notes</option>
                                        <option value="Events"  class="circle">Events</option>
                                        <option value="Podcasts"  class="circle">Podcasts</option>
                                    </select>
                                    {{-- <label>Choose Content Type</label> --}}
                                </div>
                            </div>
                            {{--  --}}
                            {{-- Show Dynamics --}}
                            <div class="row">
                                <div class="input-field col s12" id="hidden_div">
                                    <div class="file-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input  name="whitepaper_file" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input  class="file-path validate" type="text" placeholder="Whitepaper File">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Show Dynamics --}}
                            <script>
                                function showDiv(divId, element)
                                {
                                    document.getElementById(divId).style.display = element.value == "Whitepapers/Application Notes" ? 'block' : 'none';
                                }
                            </script>
                            <div class="section-space col s12"></div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required name="meta" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Meta Descriptions:</label>
                                </div>
                            </div>
                            <div class="section-space col s12"></div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  required id="article-ckeditor" name="ckeditor" class="materialilze-textarea" placeholder="content" style="min-height:500px !important"></textarea>
                                </div>
                            </div>
                            <br><br>
                            <div class="section-space col s12"></div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input required name="image_one" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input  class="file-path validate" type="text" placeholder="Featured Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="image_credit" id="list-title" type="text" class="validate" >
                                    <label for="list-title">Image Credit</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <div class="btn">
                                            <span>Audio</span>
                                            <input name="audio" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input  class="file-path validate" type="text" placeholder="Featured Audio">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

{{--  --}}
<div id="ex1" class="modal">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add New Category</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" id="categoryAddForm">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="CategoryTitle" type="text" class="validate">
                                    <label for="CategoryName">Category Name</label>
                                </div>
                            </div>
                            <div class="row" id="submitButton">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>

                            <div class="tab-inn" id="loading-bar">
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
{{-- <a href="#" rel="modal:close">Close</a> --}}
<script type="text/javascript">
        // A $( document ).ready() block.
    $( document ).ready(function() {
        $('#loading-bar').hide();
    });

    $('#categoryAddForm').on('submit',function(event){
        event.preventDefault();
        $('#loading-bar').show();


        let title = $('#CategoryTitle').val();


        $.ajax({
          url: "{{url('/')}}/admin/addCategoryAjaxRequest",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            title:title,
          },
          success:function(response){
            $('#loading-bar').hide();
            $('#submitButton').html('<center><span class="alert-success text-center">Category Added Successfully</span></center>').delay(3000);
            $('#categoryAddForm')[0].reset();
            setTimeout(function() {
                location.reload();
            }, 5000);
          },
         });
        });
      </script>
</div>
{{--  --}}
@endsection
