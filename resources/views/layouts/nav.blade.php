<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one style2 dashbord menu-fixed main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{ asset('images/header-logo.svg') }}" alt="header-logo.svg') }}">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ route('home') }}" class="navbar_brand float-left dn-md">
                <img class="logo1 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo.svg">
                <img class="logo2 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo2.svg">
                <span>Zelawson Homes</span>
            </a>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                
            <li> <a href="{{ route('home') }}"><span class="title">Home</span></a></li>
                <li> <a href="{{ route('property.buy') }}"><span class="title">Buy</span></a></li>
                <li> <a href="{{ route('property.rent') }}"><span class="title">Rent</span></a></li>
                <li> <a href="{{ route('property.sell') }}"><span class="title">Sell</span></a></li>
                <li> <a href="{{ route('home') }}"><span class="title">Find Realtor</span></a></li>
                @if(Auth::check())
                <li class="user_setting">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown">
                            <img class="rounded-circle" src="{{ asset('images/team/e1.png') }}" alt="e1.png">
                            <span class="dn-1366"> Darrell Steward <span class="fa fa-angle-down ml5"></span></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img class="float-left" src="{{ asset('images/team/e1.png') }}" alt="e1.png">
                                <p>Darrell Steward <br><span class="address">alitufan@gmail.com</span></p>
                            </div>
                            <div class="user_setting_content">
                                <a class="dropdown-item active" href="{{ route('profile') }}">My Profile</a>
                                <a class="dropdown-item" href="{{ route('chats') }}">Messages</a>
                                <a class="dropdown-item" href="{{ route('purchases') }}">Purchase history</a>
                                <a class="dropdown-item" href="{{ route('contact') }}">Help</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item add_listing"><a href="{{ route('home') }}"><span class="icon flaticon-button"></span><span class="dn-lg"> Create Listing</span></a></li>
                @else
                <ul id="respMenu2" class="ace-responsive-menu float-right wa" data-menu-style="horizontal">
                    <li class="list-inline-item list_s"><a href="#" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span> &nbsp;Login</a></li>
                    <li class="list-inline-item add_listing"><a href="{{ route('signup') }}"><span class="icon flaticon-button vam mr3"></span><span class="dn-lg"> Sign Up</span></a></li>
                </ul>
                @endif
            </ul>
        </nav>
    </div>
</header>

