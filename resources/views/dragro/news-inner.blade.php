@extends('layouts.main')

@section('content')
    <section class="news-inner">
        <div class="container">
            <div class="row web">
                <div class="col-xs-12 text-center">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">@lang('vendor.news')</li>
                    </ol>
                </div>
            </div>
            <div class="news-inner-content">
                <div class="news-inner-heading flex-center">
                    <p class="m-0">{{$news->title}}</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 mobile-p-0">
                        <div class="img-block">
                            <img src="{{$news->image}}" alt="news" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="news-inner-text">
                    <div class="block-details">
                        <div class="block-title">
                            <span class="date">{{$news->created_at}}</span>
                        </div>
                    </div>
                    <p>
                        {{$news->content}}
                    </p>
                </div>
            </div>
            <div class="similar-blocks">
                <div class="main-heading text-center">
                    Other news
                </div>
                <div class="block-list flex-wrap">
                    @foreach($otherNews as $item)
                        <div class="block">
                            <a href="/{{$lang}}/news/{{$item->id}}">
                                <div class="img-block">
                                    <img src="{{$item->image}}" alt="news" class="img-responsive">
                                </div>
                                <div class="block-details">
                                    <div class="block-title">
                                        <span class="date">{{$item->created_at}}</span>
                                    </div>
                                    <div class="block-text">
                                        {{$item->title}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="all-news flex-center">
                    <a href="/{{$lang}}/news">See all news <i class="far fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
