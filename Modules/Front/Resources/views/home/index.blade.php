@extends('front.layouts.master')

@section('title', 'Home')
@section('active_status_home', 'active')

@section('breadcrumb')
    <section class="breadcrumbs-custom-svg text-center">
        <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-main" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-slide-bg="">
                    <div class="swiper-slide-caption">
                        <div class="container-wide swiper-main-section">
                            <div class="row justify-content-sm-center">
                                <div class="col-md-10 col-xl-10">
                                    <p class="heading-1 breadcrumbs-custom-title" data-caption-animate="blurIn" data-caption-delay="50">
                                        {{ $banner->title ?? 'Site Title Here' }}
                                    </p>
                                    <p class="heading-2" data-caption-animate="fxRotateInDown" data-caption-delay="550">
                                        {{ $banner->tag_line ?? '' }}
                                    </p>
                                    <div class="group-md button-group">
                                        <a class="button button-secondary button-nina button-lg" href="" data-custom-scroll-to="#start" data-caption-animate="fxRotateInDown" data-caption-delay="550">{!! 'Start A Journey' !!}</a>
                                        <a class="button button-default-outline button-nina button-lg" href="{{ route('front.plan.index') }}" data-caption-animate="fxRotateInDown" data-caption-delay="550">{!! 'View Our Plan' !!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

        <script>
            const user_id = false;
        </script>
        <main>
            @if(isset($translateList))
                <div class="container">
                    <div class="translate-menu-area" style="margin-top: 40px">
                        <ul class="nav nav-pills nav-fill">
                            @foreach($translateList as $index => $list)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.translate.index', ['slug' => $list->slug]) }}">{{ $list->title }}</a>
                                </li>
                            @endforeach
                            {{--<li>
                                <a class="nav-link" href="javascript:void(0)">---</a>
                            </li>--}}
                        </ul>
                    </div>
                </div>
            @endif
            <div class="container" style="margin-top: 20px">
                <div class="machineTranslationOuter">
                    <div class="machineTranslation">
                        <div class="machineTranslationBlock">
                            <div class="translator" data-element="translator" data-order-url="">

                                <div class="translator__side translator__from">
                                    <div class="translator__reverse" data-element="reverse">
                                        <div class="loader__inner"></div>
                                    </div>
                                    <div class="translator__language" data-language="source">
                                        <div class="translator__language__variants" data-element="source_language_list" style="display: none">
                                            <span class="translator__language__variants__close" data-element="close_language_list" data-target="source_language"></span>
                                            <div class="translator__language__variants__header">
                                                Select source language </div>
                                            <div class="translator__language__variants__list" data-element="source_lang">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="translator__language__selector-">
                                            <span data-element="source_language" id="source_language_list">
                                            </span>
                                        </div>
                                    </div>
                                    <textarea class="translator__field" data-gramm="false" placeholder="Type or paste text here to translate" autocomplete="off" data-element="source_text" name="text_from_lang"></textarea>
                                    <ul class="translator__features">

                                    </ul>
                                    <div class="translator__detected" id="translator__detected" data-element="detected_lang">
                                    </div>
                                </div>

                                <div class="translator__side translator__to">
                                    <div class="translator__language" data-language="target">
                                        <div class="translator__language__variants" data-element="target_language_list" style="display: none">
                                            <span class="translator__language__variants__close" data-element="close_language_list" data-target="target_language"></span>
                                            <div class="translator__language__variants__header">
                                                Select target language </div>
                                            <div class="translator__language__variants__list" data-element="translated_lang">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="translator__language__selector-">
                                            <span data-element="target_language">
                                            </span>
                                        </div>
                                    </div>
                                    <textarea class="translator__field" id="translated_text" data-element="translated_text" readonly></textarea>
                                    {{--
                                    <ul class="translator__features">
                                        <li class="icon icon__copy" data-action="copy" data-after-copy-text="Copied" data-clipboard-target="#translated_text">
                                        </li>
                                        <li class="icon icon__share" data-action="share_link">
                                        </li>
                                    </ul>
                                    <div class="translator__features  translator__features--play">
                                        <div class="icon icon__audio icon__play" data-element="play_audio">
                                            play
                                        </div>
                                        <div class="icon icon__audio icon__stop hidden" data-element="stop_audio">
                                            stop
                                        </div>
                                    </div>
                                    --}}
                                    <ul class="translator__features">
                                        <li class="icon icon__copy" data-action="copy" data-after-copy-text="Copied" data-clipboard-target="#translated_text">
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </section>
@stop

@section('style')
@stop

@section('script')
    <script src="{{ asset('/front/js/languages.js') }}"></script>
    <script src="{{ asset('/front/js/translate_request.js') }}"></script>
@stop