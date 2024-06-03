@extends('dashboard.master')

@section('content')
<div class="container-fluid sb2">
    <div class="row">
        @include('dashboard.sidebar')

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif
                </center>
                <ul>
                    <li><a href="{{url('/')}}/admin/home/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Dashboard</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/manager/dashboard/SiteSettings"><i class="fa fa-forward" aria-hidden="true"></i>Go To Site Settings</a>
                    </li>
                </ul>
            </div>







        </div>

    </div>
</div>
@endsection
