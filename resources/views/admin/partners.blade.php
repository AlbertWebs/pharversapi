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
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> All Partner</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/addPartner"><i class="fa fa-pencil" aria-hidden="true"></i> Add Partner</a>
                    </li>
                </ul>
            </div>
            <div class="sb2-2-1">
                <h2>All Partners</h2>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>

                            <th>image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        @foreach ($Partner as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><a target="new" href="{{url('/')}}/companies/featured-companies/{{$item->slung}}">{{$item->title}}</td>

                            <td>
                                <a target="new" href="{{url('/')}}/admin/edit-company-logo/{{$item->id}}"><img width="150" src="{{$item->logo}}" alt="{{$item->title}}"></a>
                            </td>
                            <td><a href="{{url('/')}}/admin/editPartners/{{$item->id}}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td><a onclick="archiveFunction{{$item->id}}()" href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <script>
                            function archiveFunction{{$item->id}}()
                                {
                                    event.preventDefault(); // prevent form submit
                                    swal({
                                        title: "Are you sure?",
                                        text: "Once deleted, you will not be able to recover this imaginary file!",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                        })
                                        .then((willDelete) => {
                                        if (willDelete) {
                                            //do the ajax stuff.
                                            $.ajax({
                                                url: "{{url('/')}}/admin/deletePartnerAjax",
                                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                type: "POST",
                                                data: {id: {{$item->id}}},
                                                dataType: "html",
                                                success: function ()
                                                {
                                                    swal("Done!","It was succesfully deleted!","success");
                                                    setTimeout(function() {
                                                        window.location.reload();
                                                    }, 3000);

                                                }
                                            });
                                            //

                                        } else {
                                            swal("Your imaginary file is safe!");
                                        }
                                    });
                                }
                        </script>
                        @endforeach
                    </tbody>
                </table>
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
