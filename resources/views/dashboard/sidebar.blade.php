<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<div class="sb2-1">
   <!--== USER INFO ==-->

   <!--== LEFT MENU ==-->
   <div class="sb2-13">
      <ul class="collapsible" data-collapsible="accordion">
         <li><a href="{{url('/')}}/manager/dashboard/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
         </li>
         {{-- get company slung --}}
         <?php
             $CompanySlung  = DB::table('companies')->where('id', Auth::User()->company_id)->get();
         ?>
         @foreach($CompanySlung as $companyslung)
         <li><a target="_blank" href="{{url('/')}}/companies/featured-companies/{{$companyslung->slung}}" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit My Page</a>
         </li>
         @endforeach

            <li>
                <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> News, Interviews & Articles</a>
                <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{url('/')}}/manager/dashboard/blog">My Blogs</a>
                    </li>
                    <li><a href="{{url('/')}}/manager/dashboard/addBlog">Add My Blog</a>
                    </li>
                </ul>
                </div>
            </li>



         <li><a href="{{url('/')}}/manager/dashboard/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
         </li>
         <li>
            <a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
            <div class="collapsible-body left-sub-menu">
               <ul>
                  <li><a href="{{url('/')}}/manager/dashboard/SiteSettings">Systems Settings </a>
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
</div>
@endforeach
