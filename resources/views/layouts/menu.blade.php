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
                                <li><a title="All Library" href="library-assets.html"><span class="mini-sub-pro">Semua Vendors</span></a></li>
                                <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Tambah Vendors</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-inbox icon-wrap"></span> <span class="mini-click-non">Kategori</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Semua Kategori</span></a></li>
                                <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Tambah Kategori</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="fa fa-credit-card icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">History Transaksi</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">Laporan Transaksi</span></a></li>
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
                        <a href="index.html"><img class="main-logo" src="" height="60px" width="200px" alt="" /></a>
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
															<span class="admin-name">Prof.Anderson</span>
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
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="/barang">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
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
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{ asset('assets/js/tawk-chat.js')}}"></script>
        @yield('customscript')
</body>

</html>