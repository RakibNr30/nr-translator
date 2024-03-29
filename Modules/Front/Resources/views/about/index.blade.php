@extends('front.layouts.master')

@section('title', 'About Us')
@section('active_status_about', 'active')

@section('breadcrumb')
    <section class="breadcrumbs-custom breadcrumbs-custom-svg">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle">Who We Are</p>
            <p class="heading-1 breadcrumbs-custom-title">About Us</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('front.home.index') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section section-lg bg-default">
        <div class="section-wave">
            <svg x="0px" y="0px" width="1920px" height="46px" viewbox="0 0 1920 46" preserveAspectRatio="none">
                <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
            </svg>
        </div>
        <div class="container container-bigger">
            <div class="row">
                <div class="col-md-9 col-12">
                    <h3>{{ $about->title ?? 'About Title Here' }}</h3>
                    <div class="divider divider-default"></div>
                    <p class="heading-5 text-align-justify">
                        {{ $about->subtitle ?? '' }}
                    </p>
                    <p class="text-spacing-sm  text-align-justify">
                        {{ $about->details ?? 'About Details Here' }}
                    </p>
                    @if(isset($about->link))
                        <a class="button button-default-outline button-nina" target="_blank" href="{{ $about->link }}">learn more</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Our history-->
    <section class="section section-lg bg-accent-accent bg-gradient">
        <div class="container container-bigger">
            <div class="row row-ten row-50 justify-content-sm-center justify-content-xl-between">
                <div class="col-md-9 col-12">
                    <h3>{{ $history->title ?? 'Our History Title Here' }}</h3>
                    <div class="divider divider-default"></div>
                    <p class="heading-5 text-align-justify">
                        {{ $history->subtitle ?? '' }}
                    </p>
                    <p class="text-gray-light text-align-justify">
                        {{ $history->details ?? 'Our History Details Here' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop

@section('style')
@stop

@section('script')
@stop