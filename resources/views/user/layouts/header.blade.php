<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>@yield('title', $settings->company_name)</title>

    <meta name="keywords" content="@yield('meta_keywords', $settings[" seo_keywords_". app()->getLocale()])" />
    <meta name="description" content="@yield('meta_description', $settings[" seo_description_". app()->getLocale()])" />

    <meta name="author" content="merlynshoe.com/tr">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta property="og:title" content="@yield('og-title', $settings->company_name)" />
    <meta property="og:description" content="@yield('og-description', $settings[" seo_description_". app()->getLocale()])" />

    <meta property="og:image" content="@yield('og-image', asset('uploads/') . '/' . $settings->logo)" />
    <meta property="og:image:width" content="@yield('og-image-w', getLogoDimensions()["width"])">
    <meta property="og:image:height" content="@yield('og-image-h', getLogoDimensions()["height"])">


    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{$settings->company_name}}" />
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{url()->current()}}" />

    <!-- favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/merlyn-logos/png/favicon-beyaz.png')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/animate.css') }}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/themify-icons.css') }}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick.css') }}">

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/revolution/css/settings.css') }}">

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}" />

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/megamenu.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/main.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/responsive.css') }}" />
</head>

<body>

    <!--page start-->
    <div class="page">
        @php
        $query = request()->query();
        @endphp

        <header id="masthead" class="header ttm-header-style-03 clearfix">
            <div class="header_main">
                <!-- site-header-menu -->
                <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white clearfix">
                    <div class="site-header-menu-inner stickable-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-3 order-1">
                                    <!-- site-branding -->
                                    <div class="site-branding">
                                        <a class="home-link" href="{{route('index')}}" title="{{$settings->company_name}}" rel="home">
                                            <img class="logo-img" src="{{asset('uploads')}}/{{ $settings->logo }}" alt="{{$settings->company_name}}">
                                        </a>
                                    </div><!-- site-branding end -->
                                </div>
                                <div class="col-lg-6 col-12 order-lg-2 order-3">
                                    <div class="main_nav_content">
                                        <!--site-navigation -->
                                        <div id="site-navigation" class="site-navigation">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="menu menu-mobile" id="menu">
                                                <ul class="nav" data-in="fadeInDown" data-out="fadeOutUp">
                                                    <li><a href="{{route('index')}}">{{__('Home')}}</a></li>
                                                    <li><a href="{{route('products')}}">{{__('Products')}}</a></li>
                                                    <li><a href="{{route('aboutUs')}}">{{__('About Us')}}</a></li>
                                                    <li><a href="{{route('contactUs')}}">{{__('Contact Us')}}</a></li>
                                                </ul>
                                            </nav>
                                        </div><!-- site-navigation end-->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                                    <!-- header_extra -->

                                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                        <div class="top_bar_content ml-auto">
                                            <div class="top_bar_user">
                                                <div class="top_bar_menu">
                                                    <ul class="top_bar_dropdown">
                                                        <li><a href="#" data-toggle="dropdown"><span class="mr-2"><img class="lang-img-size" src="{{asset('uploads/languages/' . app()->getLocale() .'.svg')}}" alt="img"></span>{{__('Language')}}</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route(Route::current()->getName(), array_merge(['locale' => 'en'], $query)) }}">
                                                                        <span class="mr-2">
                                                                            <img class="lang-img-size" src="{{ asset('uploads/languages/en.svg') }}" alt="en">
                                                                        </span>{{ __('English') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route(Route::current()->getName(), array_merge(['locale' => 'tr'], $query)) }}">
                                                                        <span class="mr-2">
                                                                            <img class="lang-img-size" src="{{ asset('uploads/languages/tr.svg') }}" alt="tr">
                                                                        </span>{{ __('Turkish') }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- header_extra end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- haeder-main end -->
            <!-- site-content-menu -->

        </header>
        <!--header end-->
