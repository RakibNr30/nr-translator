@extends('front.layouts.master')

@section('title')
    {{ $article->title }}
@stop
@section('active_status_article', 'active')

@section('breadcrumb')
    <section class="breadcrumbs-custom breadcrumbs-custom-svg">
        <div class="container">
            <p class="heading-1 breadcrumbs-custom-title">Read Article</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('front.home.index') }}">Home</a></li>
                <li><a href="{{ route('front.article.index') }}">Articles</a></li>
                <li class="active">Read Article</li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section article section-lg bg-default">
        <div class="section-wave">
            <svg x="0px" y="0px" width="1920px" height="46px" viewbox="0 0 1920 46" preserveAspectRatio="none">
                <path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z"></path>
            </svg>
        </div>
        @if(isset($article))
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-article">
                            <h3>{{ $article->title }}</h3>
                            <div class="divider divider-default"></div>
                            <p class="post-date">
                                <i class="fa fa-clock-o"></i>
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                            <div class="divider divider-default"></div>
                            @if(isset($article->image))
                                <div class="feature-image" style="background-image: url({{ $article->image->file_url }})">
                                </div>
                            @endif
                            <p class="details-text text-spacing-md text-align-justify">
                                {!! $article->details !!}
                            </p>
                            @if(isset($article->external_link))
                                <a class="button button-default-outline" target="_blank" href="{{ $article->external_link }}">External Link</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@stop

@section('style')
    <style>
        .article .single-article {
            background: #f0f0f0;
            padding: 20px 20px;
            border-radius: 10px;
        }
        .article .single-article .feature-image {
            margin-top: 20px;
            width: 100%;
            height: 300px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .article .single-article p.details-text {
            font-size: 18px;
            color: #000;
        }
        .article .single-article p.post-date {
            color: #1a202c;
            margin-top: 10px;
        }
        .article .single-article p.post-date i {
            font-style: normal;
        }
        .button.button-default-outline {
            background: #6d0eb1;
            color: #fff;
            border: solid 2px #6d0eb1;
        }
        .button.button-default-outline:hover {
            background: transparent;
            color: #6d0eb1;
        }
        .article .single-article span {
            font-size: unset !important;
        }
        .article .single-article ul li {
            font-style: unset !important;
            list-style-type: disc !important;
        }
        .article .single-article ol li {
            font-style: unset !important;
            list-style-type: decimal !important;
        }
        .article .single-article ul, ol, dl {
            padding-left: 30px !important;
        }
        .article .single-article ul li, ol li {
             display: list-item !important;
        }
    </style>
@stop

@section('script')
@stop