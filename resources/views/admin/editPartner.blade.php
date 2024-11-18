@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                    <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Edit Partners </a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/Partner"><i class="fa fa-backward" aria-hidden="true"></i> All Partners</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Company Settings</h4>
                                <p></p>
                            </div>
                            <div class="tab-inn">
                                <form method="PUT" id="saveSettings" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$Setting->id}}" name="company_id">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input autocomplete="off" type="url" name="website" value="{{$Setting->website}}" class="validate">
                                            <label for="website">Website</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input autocomplete="off" type="text" value="{{$Setting->title}}" name="title" class="validate">
                                            <label>Sitename</label>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="input-field col s12">
                                            <input autocomplete="off" type="text" value="{{$Setting->tagline}}" name="tagline"  class="validate">
                                            <label>Tagline</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input autocomplete="off" id="phone" value="{{$Setting->mobile}}" type="text" name="mobile" class="validate">
                                            <label for="phone">Mobile</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input autocomplete="off" value="{{$Setting->email}}" id="email" name="email" type="email"  class="validate">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input autocomplete="off" value="{{$Setting->address}}" id="email1" name="address" type="text" class="validate">
                                            <label for="email1">Address</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input autocomplete="off" value="{{$Setting->facebook}}" id="email1" name="facebook" type="text" class="validate">
                                            <label for="email1">Facebook</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input autocomplete="off" value="{{$Setting->instagram}}" id="email1" name="instagram" type="text" class="validate">
                                            <label for="email1">Instagram</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input autocomplete="off" value="{{$Setting->twitter}}" id="email1" name="twitter" type="text" class="validate">
                                            <label for="email1">Twitter</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input autocomplete="off" value="{{$Setting->linkedin}}" id="email1" name="linkedin" type="text" class="validate">
                                            <label for="email1">Linkedin</label>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea required id="article-ckeditor" name="ckeditor" class="materialilze-textarea" placeholder="content">{{$Setting->content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit"  value="Save Changes" class="waves-effect waves-light btn-large">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

    $("#saveSettings").on('submit',function(event)
        {
            event.preventDefault(); // prevent form submit
            swal({
                title: "Are you sure you want to make this changes?",
                text: "Once submited You cannot revert back to the previous state",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    //do the ajax stuff.
                    $.ajax({
                        url: "{{url('/')}}/admin/CompanySiteSettingsAjax",
                        type: "PUT",
                        dataType: "html",
                        data: $(this).serialize(),
                        success: function ()
                        {
                            swal("Done!","Your Changes Have Been Updated");
                            setTimeout(function() {
                                window.location.reload();
                            }, 3000);
                        }
                    });
                    //

                }
            });
        });
</script>

@endsection
