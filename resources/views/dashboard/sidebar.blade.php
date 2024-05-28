<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<div class="sb2-1">
   <!--== USER INFO ==-->

   <!--== LEFT MENU ==-->
   <div class="sb2-13">
      <ul class="collapsible" data-collapsible="accordion">
         <li><a href="{{url('/')}}/dashboard/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
         </li>
         <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit My Page</a>
         </li>

            <li>
                <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> News, Interviews & Articles</a>
                <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{url('/')}}/dashboard/blog">All Blogs</a>
                    </li>
                    <li><a href="{{url('/')}}/dashboard/addBlog">Add Blog</a>
                    </li>
                </ul>
                </div>
            </li>

         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-podcast" aria-hidden="true"></i> Podcasts </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/dashboard/podcasts">All Podcasts</a>
                  </li>
                  <li><a href="{{url('/')}}/dashboard/addPodcast">Add Podcast</a>
                  </li>
               </ul>
            </div>
         </li>
         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-video-camera" aria-hidden="true"></i> Videos </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/dashboard/videos">All Videos</a>
                  </li>
                  <li><a href="{{url('/')}}/dashboard/addVideo">Add Video</a>
                  </li>
               </ul>
            </div>
         </li>


         <li><a href="{{url('/')}}/dashboard/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
         </li>
         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/dashboard/SiteSettings">Systems Settings </a>
                  </li>
                  <li><a href="{{url('/')}}/dashboard/mailerSettings">Mailer Settings </a>
                  </li>
                  <li><a href="{{url('/')}}/dashboard/credentials">Systems Credentials </a>
                  </li>
               </ul>
            </div>
         </li>
         <li><a href="{{url('/')}}/dashboard/SocialMediaSettings"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
         </li>
         <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
         </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </ul>
   </div>
</div>
@endforeach
