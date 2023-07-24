<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://careerlinkrecruitment.com" />

    @yield('seo')

    <link rel="shortcut icon" type="image/x-icon" href="{{ (@$setting_data->favicon) ? asset('/images/settings/'.@$setting_data->favicon):asset('assets/backend/images/canosoft-favicon.png') }}">

    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/rsmenu-main.css') }}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/inc/custom-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/inc/custom-slider/css/preview.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')
    @stack('styles')
</head>

<body>

<body class="defult-home">

<div class="offwrap"></div>

<!--Preloader start here-->
<div id="pre-load">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class='loader-icon'><img class="lazy" data-src="{{ (@$setting_data->favicon) ? asset('/images/settings/'.@$setting_data->favicon):asset('assets/backend/images/canosoft-favicon.png') }}" alt="Careerlink"></div>
        </div>
    </div>
</div>
<!--Preloader area end here-->

<!-- Main content Start -->
<div class="main-content">


    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header style2 header-transparent">
            <!-- Topbar Area Start -->
            <div class="topbar-area style1 style3">
                <div class="container custom">
                    <div class="row y-middle">
                        <div class="col-lg-7">
                            <div class="topbar-contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:{{@$setting_data->email ?? ''}}" target="_blank">{{@$setting_data->email ?? ''}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" target="_blank"> {{@$setting_data->phone ?? $setting_data->mobile  ?? ''}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        {{@$setting_data->address ?? ''}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right">
                            <div class="toolbar-sl-share">
                                <ul>
                                    @if(@$setting_data->facebook)
                                        <li>
                                            <a href="{{@$setting_data->facebook}}" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(@$setting_data->youtube)
                                        <li>
                                            <a href="{{@$setting_data->youtube}}" target="_blank">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(@$setting_data->instagram)
                                        <li><a href="{{@$setting_data->instagram}}" target="_blank">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a></li>
                                    @endif
                                    @if(@$setting_data->linkedin)
                                        <li><a href="{{@$setting_data->linkedin}}" target="_blank">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(!empty(@$setting_data->ticktock))
                                        <li>
                                            <a href="{{@$setting_data->ticktock}}" target="_blank">
                                                <i class="fa-brands fa-tiktok"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container custom">
                    <div class="row-table">
                        <div class="col-cell header-logo">
                            <div class="logo-area">
                                <a href="/">
                                    <img class="lazy" data-src="{{$setting_data->logo ? asset('/images/settings/'.@$setting_data->logo):''}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-cell">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <nav class="rs-menu hidden-md">
                                        <ul class="nav-menu">
                                            <li class="current-menu-item">
                                                <a href="/">Home</a>
                                            </li>
                                            @if(!empty($top_nav_data))
                                                @foreach($top_nav_data as $nav)
                                                    @if(!empty($nav->children[0]))
                                                        <li class="menu-item-has-children">
                                                            <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                                            <ul class="sub-menu">
                                                                @foreach($nav->children[0] as $childNav)
                                                                    <li class="{{!empty($childNav->children[0]) ? 'last-item menu-item-has-children':''}}">
                                                                        <a href="{{get_menu_url($childNav->type, $childNav)}}">{{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                                        @if(!empty($childNav->children[0]))
                                                                            <ul class="sub-menu">
                                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                                    <li>
                                                                                        <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                                            {{ @$lastchild->name ?? @$lastchild->title ?? ''}}
                                                                                        </a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a class="nav-item" href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                                {{ @$nav->name ?? @$nav->title ??''}}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-cell">
                            <div class="expand-btn-inner">
                                <ul>
                                    <li class="search-parent">
                                        <a class="hidden-xs rs-search" data-bs-toggle="modal"
                                           data-bs-target="#searchModal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li class="humburger">
                                        <a id="nav-expander" class="nav-expander bar" href="#">
                                            <div class="bar">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                                <span class="dot4"></span>
                                                <span class="dot5"></span>
                                                <span class="dot6"></span>
                                                <span class="dot7"></span>
                                                <span class="dot8"></span>
                                                <span class="dot9"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <a id="nav-close" class="nav-close">
                        <div class="line">
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                    </a>
                </div>
                <div class="canvas-logo">
                    <a href="/"><img class="lazy" data-src="{{$setting_data->logo ? asset('/images/settings/'.@$setting_data->logo):''}}" alt="logo"></a>
                </div>
                <div class="offcanvas-text text-justify">
                    <p>{!! $setting_data->website_description ?? '' !!}</p>
                </div>
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>{{@$setting_data->address ?? ''}}</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:{{@$setting_data->email ?? ''}}" target="_blank">{{@$setting_data->email ?? ''}}</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em>{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</em>
                            </div>
                        </div>
                    </div>
                    <ul class="social">
                        @if(@$setting_data->facebook)
                            <a href="{{@$setting_data->facebook}}" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        @endif
                        @if(@$setting_data->youtube)
                            <a href="{{@$setting_data->youtube}}" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        @endif
                        @if(@$setting_data->instagram)
                            <a href="{{@$setting_data->instagram}}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        @endif
                        @if(@$setting_data->linkedin)
                            <a href="{{@$setting_data->linkedin}}" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                            <a href="{{@$setting_data->ticktock}}" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->

            <!-- Canvas Mobile Menu start -->
            <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                <div class="close-btn">
                    <a id="nav-close2" class="nav-close">
                        <div class="line">
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                    </a>
                </div>
                <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    @if(!empty($top_nav_data))
                        @foreach($top_nav_data as $nav)
                            @if(!empty($nav->children[0]))
                                <li class="menu-item-has-children">
                                    <a href="#">{{ @$nav->name ?? @$nav->title }}</a>
                                    <ul class="sub-menu">
                                        @foreach($nav->children[0] as $childNav)
                                            <li class="{{!empty($childNav->children[0]) ? 'last-item menu-item-has-children':''}}">
                                                <a href="{{get_menu_url($childNav->type, $childNav)}}">{{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                @if(!empty($childNav->children[0]))
                                                    <ul class="sub-menu">
                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                            <li>
                                                                <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                    {{ @$lastchild->name ?? @$lastchild->title ?? ''}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a class="nav-item" href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                        {{ @$nav->name ?? @$nav->title ??''}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul> <!-- //.nav-menu -->
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>{{@$setting_data->address ?? ''}}</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:{{@$setting_data->email ?? ''}}" target="_blank">{{@$setting_data->email ?? ''}}</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em>{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</em>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->
