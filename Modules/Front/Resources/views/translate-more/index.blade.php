@extends('front.layouts.master')

@section('title')
    Translate | {{ 'More Languages' }}
@stop

@section('breadcrumb')
    <section class="breadcrumbs-custom breadcrumbs-custom-svg">
        <div class="container">
            <p class="breadcrumbs-custom-subtitle">Find Your Language</p>
            <p class="heading-1 breadcrumbs-custom-title">More Translate</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('front.home.index') }}">Home</a></li>
                <li class="active">More Translate</li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section section-variant-1 bg-gray-lighter text-left" id="start">
        <div class="section-wave">
            <svg x="0px" y="0px" width="1920px" height="46px" viewbox="0 0 1920 46" preserveAspectRatio="none">
                <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
            </svg>
        </div>
        <main>
            <div class="container">
                <div class="translate-menu-area">
                    <ul class="nav nav-pills nav-fill">
                        {{--@foreach($translateList as $index => $list)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.translate.index', ['slug' => $list->slug]) }}">{{ $list->title }}</a>
                            </li>
                        @endforeach--}}
                        <div class="row">
                            @foreach(config('core.selected_translate') as $index => $translate)
                                <div class="col-md-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('front.translate.index', ['slug' => $translate['slug']]) }}" target="_blank">
                                            {{ $translate['title'] }}
                                        </a>
                                    </li>
                                </div>
                            @endforeach
                        </div>

                    </ul>
                </div>
            </div>
        </main>
    </section>
@stop

@section('style')
@stop

@section('script')
@stop