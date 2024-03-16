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
                    <li class="active-bre"><a href="#"> Edit Section</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/sections"><i class="fa fa-backward" aria-hidden="true"></i> All Sections</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Edit Sections</h2>
                <p>Homepage Sections and the hero images sliding on the landing page</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Section/{{$Section->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="name" type="text"  value="{{$Section->name}}"  class="validate">
                            <label for="list-title">Name</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content">{!! html_entity_decode($Section->content, ENT_QUOTES, 'UTF-8') !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="action_name" type="text"  value="{{$Section->action_name}}"  class="validate">
                            <label for="list-title">Action Name</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="action" type="url"  value="{{$Section->action}}"  class="validate">
                            <label for="list-title">Action</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="page" type="text"  value="{{$Section->page}}"  class="validate">
                            <label for="list-title">Page</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="position" type="text"  value="{{$Section->position}}"  class="validate">
                            <label for="list-title">Position</label>
                        </div>
                    </div>





                <br>
                     {{-- Images --}}
                                 {{-- Preview --}}
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
                                            <label>Section Image(456 by 200)</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/sections/{{$Section->image}}" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                            <input type="hidden" name="image_cheat" value="{{$Section->image}}">


                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>


@endsection
