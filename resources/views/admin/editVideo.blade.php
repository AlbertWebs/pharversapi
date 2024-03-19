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
                    <li class="active-bre"><a href="#"> Edit New Video</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/videos"><i class="fa fa-backward" aria-hidden="true"></i> All Videos</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit New Video</h4>
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
                        <form method="POST" action="{{url('/')}}/admin/edit_Video/{{$Video->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="list-title" type="text" class="validate" value="{{$Video->title}}" required>
                                    <label for="list-title">Title</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="file" id="list-title" type="text" placeholder="NSmevXhc6IA" class="validate" value="{{$Video->file}}" required>
                                    <label for="list-title">Video ID</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <select required name="category" class="icons" id="mydiv">
                                        <?php $CategorySelected = DB::table('categories')->where('id',$Video->category)->get() ?>
                                        @foreach ($CategorySelected as $CatSel)
                                        <option value="{{$CatSel->id}}" selected>{{$CatSel->title}}</option>
                                        @endforeach
                                        @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}" data-icon="{{url('/')}}/uploads/categories/{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Category</label>
                                </div>
                                <div class="section-space col s12"></div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required name="meta" class="materialize-textarea">{{$Video->meta}}</textarea>
                                    <label for="textarea1">Meta Descriptions:</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  required id="article-ckeditor" name="ckeditor" class="materialilze-textarea" placeholder="content" style="min-height:500px !important">
                                        {{$Video->content}}
                                    </textarea>
                                </div>
                            </div>
                            <br><br>
                            {{-- Style --}}
                            <style>
                               .btn-file {
                                   position: relative;
                                   overflow: hidden;
                               }
                               .btn-file input[type=file] {
                                   position: absolute;
                                   top: 0;
                                   right: 0;
                                   min-width: 100%;
                                   min-height: 100%;
                                   font-size: 100px;
                                   text-align: right;
                                   filter: alpha(opacity=0);
                                   opacity: 0;
                                   outline: none;
                                   background: white;
                                   cursor: inherit;
                                   display: block;
                               }

                               #img-upload{
                                   width: 100%;
                               }
                           </style>
                           {{-- Style --}}
                           <div class="row">
                               <div class="">
                                   <div class="input-field col s12">
                                       <div class="form-group">
                                           <label> Featured Image</label>
                                           <div class="input-group">
                                               <span class="input-group-btn">
                                                   <span class="btn btn-default btn-file">
                                                       Size: 440 by 550 Browse… <input name="image" type="file" id="imgInp">
                                                   </span>
                                               </span>
                                               <input type="text" class="form-control" readonly>
                                           </div>
                                           <img class="image-preview" style="width:auto;" src="{{$Video->image}}" id='img-upload'/>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           {{-- Preview --}}
                           <br><br>
                            <div class="section-space col s12"></div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input readonly required autocomplete="off" value="{{Auth::user()->name }}" id="post-auth" name="author" type="text" class="validate">
                                    <label for="post-auth">Author</label>
                                </div>
                            </div>
                            <input type="hidden" name="image_cheat" value="{{$Video->image}}">

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
                        <h4>Edit New Category</h4>
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
