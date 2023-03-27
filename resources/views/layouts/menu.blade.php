<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/image/flow.png') }}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/educate-custon-icon.css')}}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/style/style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
        @yield('customcss')
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>    
</head>

<body>
    <!-- sidebar -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ URL('/admin') }}"><img class="main-logo" src="{{ asset('assets/image/logo.svg') }}" width="200px" height="60px" alt="" /></a>
                <strong><a href="{{ URL('/admin') }}"><img src="{{ asset('assets/image/flow.png')}}" width="200px" height="60px" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Landing Page" href="{{ URL('/admin') }}" aria-expanded="false"><span class="fa fa-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Home</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-users icon-wrap"></span> <span class="mini-click-non">Kasir</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{ URL('/kasir') }}"><span class="mini-sub-pro">Semua Kasir</span></a></li>
                                <li><a title="Add Courses" href="{{ URL('/kasir/add') }}"><span class="mini-sub-pro">Tambah Kasir</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-dropbox icon-wrap"></span> <span class="mini-click-non">Barang</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ URL('/barang') }}"><span class="mini-sub-pro">Semua Barang</span></a></li>
                                <li><a title="Add Students" href="{{ URL('/barang/tambah-barang') }}"><span class="mini-sub-pro">Tambah Barang</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-truck icon-wrap"></span> <span class="mini-click-non">Vendors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="/vendors"><span class="mini-sub-pro">Semua Vendors</span></a></li>
                                <li><a title="Add Library" href="/vendors/add"><span class="mini-sub-pro">Tambah Vendors</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="fa fa-credit-card icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="/history-transaksi"><span class="mini-sub-pro">History Transaksi</span></a></li>
                                <li><a title="View Mail" href="/laporan-transaksi"><span class="mini-sub-pro">Laporan Transaksi</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- sidebar end -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="/admin"><img class="main-logo"height="60px" width="200px" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{ URL('/admin') }}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="/logout" class="nav-link">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name">Admin</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="/logout"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#democrou" href="/kasir">Kasir <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="/kasir">Semua Kasir</a>
                                                </li>
                                                <li><a href="/kasir/add">Tambah Kasir</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="/barang">Barang <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="/barang">Semua Barang</a>
                                                </li>
                                                <li><a href="/barang/tambah-barang">Tambah Barang</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="/vendors">Vendors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="/vendor">Semua vendor</a>
                                                </li>
                                                <li><a href="/vendor/add">Tambah vendor</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="/kasir">Transaksi <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="/history-transaksi">Histori Transaksi</a>
                                                </li>
                                                <li><a href="/laporan-transaksi">Laporan Kasir</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{ URL('/admin') }}">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">@yield('page')</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('main')
        <!-- footer -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2023. All rights reserved. By M Rafli Abdillah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="all-content-wrapper">
        
        <!-- jquery
		============================================ -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('assets/js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/js/counterup/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/counterup/counterup-active.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('assets/js/morrisjs/raphael-min.js')}}"></script>
        <script src="{{ asset('assets/js/morrisjs/morris.js')}}"></script>
        <script src="{{ asset('assets/js/morrisjs/home3-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <script src="{{ asset('assets/js/sparkline/sparkline-active.js')}}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('assets/js/calendar/moment.min.js')}}"></script>
        <script src="{{ asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('assets/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        @yield('customscript')
</body>

</html>