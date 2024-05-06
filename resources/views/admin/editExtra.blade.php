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
                    <li class="active-bre"><a href="#"> Edit {{$Extra->title}}</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/categories"><i class="fa fa-backward" aria-hidden="true"></i> All Categories</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Edit {{$Extra->title}}</h2>
                <p>Categories Are Used In Both Blogs And General Content Classification</p>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Extra/{{$Extra->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="title" type="text" value="{{$Extra->title}}" class="validate">
                            <label for="list-title">Edit Extra Title</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s12">
                            <label for="textarea1">Descriptions:</label>
                            <br>
                            <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content">{{$Extra->content}}</textarea>


                        </div>
                    </div><br><br>

                    <div class="row">

                        {{--  --}}
                        <div class="input-field col s12">
                            <select required name="category" class="icons" id="mydiv">
                                <?php $CategorySelected = DB::table('categories')->where('id',$Extra->category_id)->get() ?>
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
                    <br><br>

                    <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace( 'article_ckeditor' );
                    </script>
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
                                            <label>Add Extra Featured Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Size: 440 by 550 Browse… <input name="image" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/extras/{{$Extra->image}}" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                            <input type="hidden" name="image_cheat" value="{{$Extra->image}}">
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