@include("layouts.head")
@include("layouts.nav")
@include("layouts.modal")
@include("layouts.mobile-nav")
<!-- Our Dashbord -->
<div class="extra-dashboard-menu dn-lg">
    <div class="ed_menu_list">
        <ul>
            <li><a href="{{ route('user.dashboard') }}"><span class="flaticon-dashboard"></span> Dashboard</a></li>
            <li><a href="{{ route('user.profile') }}"><span class="flaticon-user"></span> Profile</a></li>
            <li><a href="{{ route('user.purchases') }}"><span class="flaticon-house"></span> Purchases</a></li>
            <li><a href="{{ route('user.chats') }}"><span class="flaticon-mail-inbox-app"></span> Chats</a></li>
            <li><a href="{{ route('user.favorites') }}"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
            <li><a href="{{ route('user.viewed') }}"><span class="flaticon-view"></span> Recent Views</a></li>
            <li><a href="{{ route('user.searched') }}"><span class="flaticon-magnifiying-glass"></span> Saved Search</a></li>
            <li><a href="{{ route('user.logout') }}"><span class="flaticon-logout"></span> Logout</a></li>
        </ul>
    </div>
</div>
<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-alice-blue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 dn-lg pl0"></div>
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-lg mt50">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Menu</button>
                                <ul id="myDropdown" class="dropdown-content">
                                    <li><a href="{{ route('user.dashboard') }}"><span class="flaticon-dashboard"></span> Dashboard</a></li>
                                    <li><a href="{{ route('user.profile') }}"><span class="flaticon-user"></span> Profile</a></li>
                                    <li><a href="{{ route('user.purchases') }}"><span class="flaticon-house"></span> Purchases</a></li>
                                    <li><a href="{{ route('user.chats') }}"><span class="flaticon-mail-inbox-app"></span> Chats</a></li>
                                    <li><a href="{{ route('user.favorites') }}"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
                                    <li><a href="{{ route('user.viewed') }}"><span class="flaticon-view"></span> Recent Views</a></li>
                                    <li><a href="{{ route('user.searched') }}"><span class="flaticon-magnifiying-glass"></span> Saved Search</a></li>
                                    <li><a href="{{ route('user.logout') }}"><span class="flaticon-logout"></span> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb50">
                        <div class="breadcrumb_content">
                            <h2 class="breadcrumb_title">Hello, Cameron!</h2>
                            <p>Ready to jump back in!</p>
                        </div>
                    </div>
                </div>
                @yield('content')
                <div class="row mt50">
                    <div class="col-lg-12 text-center">
                        <p class="mb0">Copyright © 2022 Zelawson Homes. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include("layouts.foot")