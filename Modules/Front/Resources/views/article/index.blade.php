@extends('front.layouts.master')

@section('title', 'Articles')
@section('active_status_article', 'active')

@section('breadcrumb')
    <section class="breadcrumbs-custom breadcrumbs-custom-svg">
        <div class="container">
            <p class="heading-1 breadcrumbs-custom-title">Articles</p>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('front.home.index') }}">Home</a></li>
                <li class="active">Articles</li>
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
        @if(count($articleList))
            <div class="container container-bigger">
                <div class="row">
                    @foreach($articleList as $article)
                        <div class=" col-12">
                            <div class="single-article custom-bg-shadow">
                                <p class="heading-5 text-align-justify">
                                    <a href="{{ route('front.article.show', ['slug' => $article->slug]) }}">
                                        {{ $article->title }}
                                    </a>
                                </p>
                                <p class="post-date">
                                    <i class="fa fa-clock-o"></i>
                                    {{ $article->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {!! $articleList->links('pagination::bootstrap-4') !!}
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
            margin-top: 10px;
            border-radius: 5px;
        }
        .article .single-article p.post-date {
            color: #1a202c;
        }
        .article .single-article p.post-date i {
            font-style: normal;
        }
        .paginate {
            margin-top: 40px;
            margin-bottom: 10px;
        }
    </style>
@stop

@section('script')
@stop