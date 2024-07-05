<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <a href="" class="logo">
                    <img src="/assets/images/logo-sm.png" alt="" height="26" class="logo-small">
                    <img src="/assets/images/logo.png" alt="" height="24" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>


                    <li class="dropdown notification-list">
                        
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                  
                        <div class="dropdown-menu dropdown-menu-center profile-dropdown ">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ti-user m-r-5"></i> Profile
                            </a>

                            <!-- item-->
                            <a href="" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="ti-power-off m-r-5"></i> Sign Out
                            </a>
                            <form action="" id="logout-form" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-cart"></i> <span> Barang </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Satuan </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Klasifikasi </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Rak </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Gudang </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Barang Masuk </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> Barang Keluar </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href=""><i class="mdi mdi-account-card-details"></i> <span> History </span> </a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->



</header>
<!-- End Navigation Bar-->