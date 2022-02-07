<!-- Main Header Nav -->
<header class="header-nav menu_style_home_five navbar-scrolltofixed stricky main-menu">
    <div class="container">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{ asset('images/header-logo.svg') }}" alt="header-logo.svg">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu float-left wa" data-menu-style="horizontal">
                <li> <a href="#"><span class="title">Home</span></a></li>
                <li> <a href="#"><span class="title">Buy</span></a></li>
                <li> <a href="#"><span class="title">Rent</span></a></li>
                <li> <a href="#"><span class="title">Buy</span></a></li>
                <li> <a href="#"><span class="title">Find Realtor</span></a></li>
            </ul>
            <a href="index-2.html" class="navbar_brand dn-md">
                <img class="logo1 img-fluid" src="{{ asset('images/header-logo3.svg') }}" alt="header-logo3.svg">
                <img class="logo2 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo2.svg">
                <span>Zelawson Homes</span>
            </a>
            <ul id="respMenu2" class="ace-responsive-menu float-right wa" data-menu-style="horizontal">
                <li class="list-inline-item list_s"><a href="#" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span> &nbsp;Login</a></li>
                <li class="list-inline-item add_listing"><a href="page-dashboard-new-property.html"><span class="icon flaticon-button vam mr3"></span><span class="dn-lg"> Sign Up</span></a></li>
            </ul>
        </nav>
    </div>
</header>