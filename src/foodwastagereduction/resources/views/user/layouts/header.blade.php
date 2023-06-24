<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Food Wastage Reduction | Laravel Web Application</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('user/assets/img/favicon.ico')}}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{url('user/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/bootstrap-icons/bootstrap-icons.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{url('user/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/"><img src="{{url('user/assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">  
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About</a></li>
                                                <li><a href="/donate"> Donate </a></li>
                                                @if(Auth::guard('web')->check())
                                                <li><a href="/donations"> My Donations </a></li>
                                                @endif
                                                <!-- <li><a href="/blog">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="/blog">Blog</a></li>
                                                        <li><a href="/blog_details">Blog Details</a></li>
                                                        <li><a href="/elements">Element</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            @if(Auth::guard('web')->check())
                                            <a href="#" class="btn header-btn p-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill" style="font-size:18px"></i> {{ Auth::user()->name }}</a>
                                            <div class="dropdown-menu">
                                            <a style="font-size:16px" class="dropdown-item" href="/updateprofile"><i class="bi bi-person-fill"></i> Profile</a>
                                            <a style="font-size:16px" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-power"></i> 
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        </div>
                                        @else
                                        <a href="#" class="btn header-btn p-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill" style="font-size:18px"></i></a>
                                            <div class="dropdown-menu">
                                            <a style="font-size:16px" class="dropdown-item" href="/login"><i class="bi bi-person-fill"></i> Login</a>
                                            <a style="font-size:16px" class="dropdown-item" href="/register"><i class="bi bi-person-fill"></i> Register</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->