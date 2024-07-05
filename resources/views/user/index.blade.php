@extends('user.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
       <div class="page-header">
          <div class="row">
             <div class="col-sm-12">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Dashboard </a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item active">Subscriber Dashboard</li>
                </ul>
             </div>
          </div>
       </div>
       <div class="good-morning-blk">
          <div class="row">
             <div class="col-md-6">
                <div class="morning-user">
                   <h2>Good Day!, <span>{{Auth::User()->title}} {{Auth::User()->name}}</span>
                        <?php $theID = Auth::User()->id; ?> @if($theID < 1000)
                        <sup data-bs-toggle="modal" data-bs-target="#full-width-modal">
                            <img style="width:30px;" src="{{url('/')}}/uploads/Golden_Badge_Transparent_PNG_Image.webp" alt="">
                        </sup> @endif
                    </h2>
                   <p>{{Auth::User()->content}}</p>
                </div>
             </div>
             <div class="col-md-6 position-blk">
                <div class="morning-img">
                   {{-- <img style="position: absolute; bottom:2px; right:2px;" src="{{url('/')}}/uploads/Golden_Badge_Transparent_PNG_Image.webp" alt> --}}
                </div>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-12 col-md-6 col-xl-6 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Organization</h4>
                   </div>
                   <div class="dash-content">
                      <h5>{{Auth::User()->organization}}</h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Address</h4>
                   </div>
                   <div class="dash-content">
                      <h5>{{Auth::User()->address}}</h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Submited Email</h4>
                   </div>
                   <div class="dash-content">
                      <h5>{{Auth::User()->address}}</h5>
                   </div>
                </div>
             </div>
          </div>

       </div>

    </div>
    <div class="notification-box">
       <div class="msg-sidebar notifications msg-noti">
          <div class="topnav-dropdown-header">
             <span>Messages</span>
          </div>
          <div class="drop-scroll msg-list-scroll" id="msg_list">
             <ul class="list-box">
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">R</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Richard Miles </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item new-message">
                         <div class="list-left">
                            <span class="avatar">J</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">John Doe</span>
                            <span class="message-time">1 Aug</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">T</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Tarah Shropshire </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">M</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Mike Litorus</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">C</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Catherine Manseau </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">D</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Domenic Houston </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">B</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Buster Wigton </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">R</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Rolland Webber </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">C</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Claire Mapes </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">M</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Melita Faucher</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">J</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Jeffery Lalor</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">L</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Loren Gatlin</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">T</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Tarah Shropshire</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
             </ul>
          </div>
          <div class="topnav-dropdown-footer">
             <a href="chat.html">See all messages</a>
          </div>
       </div>
    </div>
 </div>


 <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="fullWidthModalLabel">You are a Gold Subscriber!</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <p>Why?<br> By being among our first 1000 subscribers.</p>
             <p>For believing in us you get:</p>
             <hr>

             <p>
                Access to premium content only exclusive to gold members.<br>
                A 10% discount on your first conference showing.<br>
                Priority in invite-only industry round table meetings to discuss key issues.<br>
                Priority in exclusive webinars<br>
             </p>
             <hr>
             <p>Thank you for believing in us!</p>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
             {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
       </div>
    </div>
 </div>

@endsection
