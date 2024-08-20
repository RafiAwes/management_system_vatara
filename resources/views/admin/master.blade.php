<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        <link rel="icon" href="{{ url('/') }}/frontend_admin_assets/images/fevicon.png" type="image/png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/bootstrap.min.css" />
        <!-- site css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/responsive.css" />
        <!-- color css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/colors.css" />
        <!-- select bootstrap -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/bootstrap-select.css" />
        <!-- scrollbar css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/perfect-scrollbar.css" />
        <!-- custom css -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend_admin_assets/css/custom.css" />
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="dashboard dashboard_1">
        <div class="full_container">
            <div class="inner_container">
                <!-- Sidebar  -->
                <nav id="sidebar">
                    <div class="sidebar_blog_1">
                        <div class="sidebar-header">
                            <div class="logo_section">
                                <a href="index.html"><img class="logo_icon img-responsive" src="{{ url('/') }}/frontend_admin_assets/images/logo/logo_icon.png" alt="#" /></a>
                            </div>
                        </div>
                        <div class="sidebar_user_info">
                            <div class="icon_setting"></div>
                            <div class="user_profle_side">
                                <div class="user_img"><img class="img-responsive" src="{{ url('/') }}/frontend_admin_assets/images/layout_img/user_img.jpg" alt="#" /></div>
                                <div class="user_info">
                                    <h6>{{Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : $admin_name->name}}</h6>
                                    <p><span class="online_animation"></span> Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_blog_2">
                        <h4>General</h4>
                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                                <ul class="collapse list-unstyled" id="dashboard">
                                    <li><a href="dashboard.html">> <span>Default Dashboard</span></a></li>
                                    {{-- <li><a href="dashboard_2.html">> <span>Dashboard style 2</span></a></li> --}}
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#registration" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-wpforms yellow_color"></i> <span>Registration</span></a>
                                <ul class="collapse list-unstyled" id="registration">
                                    <li>
                                        @if (Route::has('student.register'))
                                            <a href="{{ route('student.register') }}">> <span>Student Registration</span></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if (Route::has('register'))
                                            <a href="{{ route('trainer.register') }}">> <span>Trainer Registration</span></a>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                            <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                            <li>
                                <a href="#list" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>People List</span></a>
                                <ul class="collapse list-unstyled" id="list">
                                    <li><a href="#"> <span>Candidate List</span></a></li>
                                    <li><a href="media_gallery.html"> <span>Voter List</span></a></li>

                                </ul>
                            </li>
                            <li><a href="widgets.html"><i class="fa fa-tasks orange_color"></i> <span>Widgets</span></a></li>
                            <li>
                                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                                <ul class="collapse list-unstyled" id="element">
                                    <li><a href="general_elements.html"> <span>General Elements</span></a></li>
                                    <li><a href="media_gallery.html"> <span>Media Gallery</span></a></li>
                                    <li><a href="icons.html"> <span>Icons</span></a></li>
                                    <li><a href="invoice.html"> <span>Invoice</span></a></li>
                                </ul>
                            </li>
                            <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                            <li>
                                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                                <ul class="collapse list-unstyled" id="apps">
                                    <li><a href="email.html">> <span>Email</span></a></li>
                                    <li><a href="calendar.html">> <span>Calendar</span></a></li>
                                    <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                                </ul>
                            </li>
                            <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                            <li><a href="contact.html"><i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a></li>
                            <li class="active">
                                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                                <ul class="collapse list-unstyled" id="additional_page">
                                    <li><a href="profile.html">> <span>Profile</span></a></li>
                                    <li><a href="project.html">> <span>Projects</span></a></li>
                                    <li><a href="login.html">> <span>Login</span></a></li>
                                    <li><a href="404_error.html">> <span>404 Error</span></a></li>
                                </ul>
                            </li>
                            <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                            <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                            <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- end sidebar -->
                <!-- right content -->
                <div id="content">
                    <!-- topbar -->
                    <div class="topbar">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="full">
                                <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                                <div class="logo_section">
                                    <a href="index.html"><img class="img-responsive" src="{{ url('/') }}/frontend_admin_assets/images/logo/logo.png" alt="#" /></a>
                                </div>
                                <div class="right_topbar">
                                    <div class="icon_info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                            <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                        </ul>
                                        <ul class="user_profile_dd">
                                            <li>
                                                <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">{{Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : $admin_name->name}}</span></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                                    <a class="dropdown-item" href="settings.html">Settings</a>
                                                    <a class="dropdown-item" href="help.html">Help</a>
                                                    <form method="POST" action="{{ route('admin.logout') }}">
                                                        @csrf
                                                        <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); this.closest('form').submit()"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- end topbar -->
                    <!--content-->
                    @yield('admin-content')
                    <!-- end content -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/popper.min.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/animate.js"></script>
        <!-- select country -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/owl.carousel.js"></script>
        <!-- chart js -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/Chart.min.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/Chart.bundle.min.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/utils.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- custom js -->
        <script src="{{ url('/') }}/frontend_admin_assets/js/chart_custom_style1.js"></script>
        <script src="{{ url('/') }}/frontend_admin_assets/js/custom.js"></script>
    </body>
</html>
