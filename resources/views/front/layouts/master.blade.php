<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{ $global_site->name ?? 'Site Title' }} | @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="keywords" content="{{ $global_seo->meta_tags ?? '' }}">
    <meta name="description" content="{{ $global_seo->meta_description ?? '' }}">
    <link rel="icon" href="{{ $global_site->favicon->file_url ?? config('core.image.default.favicon') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/translator.css') }}">
    @yield('style')
</head>

<body id="index">
<div class="page">
    <header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2">
        <div class="rd-navbar-wrap rd-navbar-default">
            <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxxl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxxl-device-layout="rd-navbar-static" data-stick-up-offset="1px" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-xxx-lstick-up-offset="1px" data-stick-up="true">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="rd-navbar-brand">
                            <a class="brand-name" href="{{ route('front.home.index') }}">
                                <img class="" src="{{ $global_site->logo->file_url ?? config('core.image.default.logo') }}" alt="" style="height: 55px"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item @yield('active_status_home')">
                                    <a class="rd-nav-link" href="{{ route('front.home.index') }}">Home</a>
                                </li>
                                <li class="rd-nav-item @yield('active_status_about')">
                                    <a class="rd-nav-link" href="{{ route('front.about.index') }}">About Us</a>
                                </li>
                                <li class="rd-nav-item @yield('active_status_contact')">
                                    <a class="rd-nav-link" href="{{ route('front.contact.index') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        {{--
                        <div class="rd-navbar-aside-right-inner">
                            <div class="rd-navbar-search">
                                <a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        --}}
                    </div>
                </div>
            </nav>
        </div>
        @yield('breadcrumb')
    </header>
    @yield('content')

    <footer class="section novi-bg novi-bg-img page-footer page-footer-default text-left bg-gray-darker">
        <div class="container-wide">
            <div class="row row-50 justify-content-sm-center">
                <div class="col-md-4 col-12">
                    <div class="inset-xxl">
                        <h6>About us</h6>
                        <p class="text-spacing-sm" style="text-align: justify; padding-right: 30px">
                            {{ $global_about->details ?? 'About Here' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="quick-link">
                        <h6>Contact Us</h6>
                        <ul class="list-xs list-darker">
                            @if(isset($global_contact->address))
                                <li class="box-inline">
                                    <span class="icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                                    <div style="color: white">{{ $global_contact->address }}</div>
                                </li>
                            @endif
                            @if(isset($global_contact->phone_1))
                                <li class="box-inline">
                                    <span class="icon-md-smaller icon-primary mdi mdi-phone"></span>
                                    <a href="tel: {{ $global_contact->phone_1 }}">{{ $global_contact->phone_1 }}</a>
                                </li>
                            @endif
                            @if(isset($global_contact->email_1))
                                <li class="box-inline">
                                    <span class="icon-md-smaller icon-primary mdi mdi-email-open"></span>
                                    <a href="mailto: {{ $global_contact->email_1 }}">{{ $global_contact->email_1 }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <ul class="group-xs group-middle social-icons-list">
                        @if(isset($global_contact->facebook_link))
                            <li><a class="icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-facebook" href="{{ $global_contact->facebook_link }}"></a></li>
                        @endif
                        @if(isset($global_contact->twitter_link))
                            <li><a class="icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-twitter" href="{{ $global_contact->twitter_link }}"></a></li>
                        @endif
                        @if(isset($global_contact->instagram_link))
                            <li><a class="icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-instagram" href="{{ $global_contact->instagram_link }}"></a></li>
                        @endif
                        @if(isset($global_contact->youtube_link))
                            <li><a class="icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-youtube-play" href="{{ $global_contact->youtube_link }}"></a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <div class="quick-link">
                        <h6>Quick links</h6>
                        <ul class="list-marked list-marked-primary">
                            <li><a href="{{ route('front.about.index') }}">About Us</a></li>
                            <li><a href="{{ route('front.contact.index') }}">Contact Us</a></li>
                            <li><a href="{{ route('front.plan.index') }}">Our Plan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="rights"><span>&copy; 2020 - {{ date('Y') }}&nbsp;<a href="{{ route('front.home.index') }}">{{ $global_site->name ?? '' }}</a> | All Right Reserved</span></p>
        </div>
    </footer>
</div>

<script src="{{ asset('/front/js/core.min.js') }}"></script>
<script src="{{ asset('/front/js/script.js') }}"></script>
@yield('script')

</body>
</html>