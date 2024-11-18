<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<div class="sb2-1">
   <!--== USER INFO ==-->
   <div class="sb2-12">
      <ul>
         <li><img src="{{url('/')}}/uploads/users/{{Auth::user()->image }}" alt="">
         </li>
         <li>
            <h5>{{Auth::user()->name}}<span>{{Auth::user()->address }}</span></h5>
         </li>
         <li></li>
      </ul>
   </div>
   <!--== LEFT MENU ==-->
   @if(Auth::User()->is_admin == "1")
   <div class="sb2-13">
      <ul class="collapsible" data-collapsible="accordion">
         <li><a href="{{url('/')}}/admin/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
         </li>
         <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit Website</a>
         </li>
              {{--  --}}
              <li>
                <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Topics </a>
                <div class="collapsible-body left-sub-menu">
                   <ul>
                      <li><a href="{{url('/')}}/admin/categories">All Topics </a>
                      </li>
                      <li><a href="{{url('/')}}/admin/addCategory">Add Topics</a>
                      </li>
                   </ul>
                </div>
             </li>
             {{--  --}}
            <li>
                <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i>Manage Posts</a>
                <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{url('/')}}/admin/blog">All Posts</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/addBlog">Add Posts</a>
                    </li>
                </ul>
                </div>
            </li>



         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Manage Ads  </a>
            <div class="collapsible-body left-sub-menu">
               <ul>

                  <li>
                    <a href="{{url('/')}}/admin/advertisements">All Ads</a>
                  </li>
               </ul>
            </div>
         </li>



         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partners </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li>
                     <a href="{{url('/')}}/admin/partners">All Partners </a>
                  </li>

               </ul>
            </div>
         </li>
         {{--  --}}

         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>System Users</a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/admin/users">Manage Users</a>
                  </li>
                  <li><a href="{{url('/')}}/admin/addUser">Add User</a>
                  </li>
                  <li><a href="{{url('/')}}/admin/admins">Manage Admins</a>
                  </li>
               </ul>
            </div>
         </li>


         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-envelope" aria-hidden="true"></i>News Letters(Issue #)</a>
            <div class="collapsible-body left-sub-menu">
            <ul>
                <li><a href="{{url('/')}}/admin/newsletters">All Issues</a>
                </li>
                <li><a href="{{url('/')}}/admin/addNewsletter">Add Issue</a>
                </li>
            </ul>
            </div>
        </li>

        <li>
            <a href="{{url('/')}}/admin/newsletter-link" class="collapsible-header"><i class="fa fa-link" aria-hidden="true"></i>Newsletter Link</a>
        </li>

         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-gavel" aria-hidden="true"></i>Legal Pages</a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  {{-- <li><a href="{{url('/')}}/admin/editAbout">About Us</a>
                  </li> --}}
                  <li><a href="{{url('/')}}/admin/privacy">Privacy Policy</a>
                  </li>
                  <li><a href="{{url('/')}}/admin/terms">Terms and Conditions</a>
                  </li>
                  <li><a href="{{url('/')}}/admin/editCopyright"> Copyright Statement</a>
                  </li>
               </ul>
            </div>
         </li>
         <li><a href="{{url('/')}}/admin/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
         </li>
         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/admin/SiteSettings">Systems Settings </a>
                  </li>
               </ul>
            </div>
         </li>
         {{--  --}}
         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Metrics </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/admin/downloads">All Downloads </a>
                  </li>
                  <li><a href="{{url('/')}}/admin/leads">Ad Leads </a>
                  </li>

               </ul>
            </div>
         </li>
         {{--  --}}
         <li><a href="{{url('/')}}/admin/SocialMediaSettings"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
         </li>
         <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
         </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
      </ul>
   </div>
   @else
   <div class="sb2-13">
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <a href="{{url('/')}}/admin/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
        </li>
        <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit Website</a>
        </li>
        <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i>Manage Posts</a>
            <div class="collapsible-body left-sub-menu">
            <ul>
                <li><a href="{{url('/')}}/admin/blog">All Posts</a>
                </li>
                <li><a href="{{url('/')}}/admin/addBlog">Add Posts</a>
                </li>
            </ul>
            </div>
        </li>
        <li>
          <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Manage Ads  </a>
          <div class="collapsible-body left-sub-menu">
             <ul>
                <li>
                  <a href="{{url('/')}}/admin/advertisements">All Ads</a>
                </li>
             </ul>
          </div>
        </li>
        <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partners </a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li>
                    <a href="{{url('/')}}/admin/partners">All Partners </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-envelope" aria-hidden="true"></i>News Letters(Issue #)</a>
            <div class="collapsible-body left-sub-menu">
            <ul>
                <li><a href="{{url('/')}}/admin/newsletters">All Issues</a>
                </li>
                <li><a href="{{url('/')}}/admin/addNewsletter">Add Issue</a>
                </li>
            </ul>
            </div>
        </li>
        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
        </li>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form>
    </ul>
   </div>
   @endif
</div>
@endforeach
