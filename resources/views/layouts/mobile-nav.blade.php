 <!-- Main Header Nav For Mobile -->
 <div id="page" class="stylehome1 h0">
     <div class="mobile-menu">
         <div class="header stylehome1">
             <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="{{ asset('images/header-logo.svg') }}" alt="header-logo.svg"> <span class="mt15">Zelawson Homes</span> </div>
             <ul class="menu_bar_home2">
                 <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
                 @if(Auth::check())
                 <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#mobileNavModal"><span class="flaticon-dashboard"></span></a></li>
                 @else
                 <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
                 @endif
                 <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
             </ul>
         </div>
     </div>
     <!-- /.mobile-menu -->
     <nav id="menu" class="stylehome1">
         <ul>
             <li> <a href="{{ route('home') }}"><span>Home</span></a></li>
             <li> <a href="{{ route('property.buy') }}"><span>Buy</span></a></li>
             <li> <a href="{{ route('property.rent') }}"><span>Rent</span></a></li>
             <li> <a href="{{ route('property.sell') }}"><span>Sell</span></a></li>
             <li> <a href="#"><span>Find Realtor</span></a></li>
             @if(Auth::check())
             <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="{{ route('dashboard') }}"><span class="flaticon-user"></span> My Dashboard</a></li>
             @else
             <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="{{ route('signup') }}"><span class="icon flaticon-button mr5"></span> Sign Up</a></li>
             @endif
         </ul>
     </nav>
 </div>