<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | All Classes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/animate.min.css') }}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bakend/css/bootstrap5.min.css') }}">
    {{-- select2 css --}}
    {{-- <link rel="stylesheet" href="{{ asset('bakend/css/select2.min.css') }}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('bakend/css/style.css') }}">
    <!-- Modernize js -->
    <script src="{{ asset('bakend/css/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="all-class.html#" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">{{ Auth::user()->name }}</h5>
                                
                                <span>{{ Auth::user()->roles->first()->name }}</span>
                               
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="
                                {{ Auth::user()->roles->first()->name }}
                                ">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="all-class.html#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="all-class.html#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="all-class.html#"><i
                                                class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a>
                                    </li>
                                    <li><a href="all-class.html#"><i class="flaticon-gear-loading"></i>Account
                                            Settings</a></li>
                                    <li>
                                        <a class="dropdown-item" href="
                                        @if (Auth::guard('student'))
                                            {{ route('student.logout') }}
                                            @else
                                            {{ route('logout') }}
                                        @endif
                                        
                                        "
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                       
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="all-class.html#" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="all-class.html#">
                                                <span class="item-name">Maria Zaman</span>
                                                <span class="item-time">18:30</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="all-class.html#">
                                                <span class="item-name">Benny Roy</span>
                                                <span class="item-time">10:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="all-class.html#">
                                                <span class="item-name">Steven</span>
                                                <span class="item-time">02:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="all-class.html#">
                                                <span class="item-name">Joshep Joe</span>
                                                <span class="item-time">12:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="all-class.html#" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="all-class.html#" role="button"
                            data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="all-class.html#">English</a>
                            <a class="dropdown-item" href="all-class.html#">Spanish</a>
                            <a class="dropdown-item" href="all-class.html#">Franchis</a>
                            <a class="dropdown-item" href="all-class.html#">Chiness</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>{{ Auth::user()->roles->first()->name }}</a>
                                </li>
                                @role('principle')
                                
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>User</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('role.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Add Role</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('permission.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Permission</a>
                                </li>
                               @endrole
                            </ul>
                        </li>
                        @role('cleark')
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Student Add</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             Add Student
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             Edit Student
                                        </a>
                                </li>
                                
                            </ul>
                        </li>
                        @endrole
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('class.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             Add Class
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('class.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             All Class
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Subject</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('subject.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             Add Subject
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('subject.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             All Subject
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Student</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('subject.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             Add Subject
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('subject.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             All Subject
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-dashboard"></i><span>Teacher</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('teacher.index') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>
                                             All Teacher
                                        </a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <div class="dashboard-content-one">



                    @yield('content')
                  
                    <!-- Footer Area Start Here -->
                    <footer class="footer-wrap-layout1">
                        <div class="copyright">© Copyrights <a href="index.html#">akkhor</a> 2019. All rights reserved. Designed by <a
                                href="index.html#">PsdBosS</a></div>
                    </footer>
                    <!-- Footer Area End Here -->
                </div>
            </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
   
    <script src="{{ asset('bakend/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('bakend/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('bakend/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('bakend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bakend/js/bootstrap5.bundle.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('bakend/js/jquery.scrollUp.min.js') }}"></script>
    {{-- counter up js --}}
    <script src="{{ asset('bakend/js/jquery.counterup.min.js') }}"></script>
    {{-- momoent up js --}}
    <script src="{{ asset('bakend/js/moment.min.js') }}"></script>
    {{-- waypoints up js --}}
    <script src="{{ asset('bakend/js/jquery.waypoints.min.js') }}"></script>
    {{-- full calander up js --}}
    <script src="{{ asset('bakend/js/fullcalendar.min.js') }}"></script>
    {{-- chart up js --}}
    <script src="{{ asset('bakend/js/Chart.min.js') }}"></script>
    <!-- Data Table Js -->
    <script src="{{ asset('bakend/js/jquery.dataTables.min.js') }}"></script>
     {{-- select2 js  --}}

     <script src="{{ asset('bakend/js/select2.min.js') }}"></script>
     
    <!-- Custom Js -->
    <script src="{{ asset('bakend/js/main.js') }}"></script>

   

    @yield('js')
</body>

    

</html>
