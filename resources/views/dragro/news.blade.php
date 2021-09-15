@extends('layouts.main')

@section('content')
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center web">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">@lang('vendor.blog')</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-heading text-center">
                        @lang('vendor.blog')
                    </div>
                </div>
            </div>
            <div class="block-list flex-wrap">
            @foreach($news as $item)
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
            <div class="row">
                <div class="col-xs-12">
                    <nav aria-label="Page navigation" class="flex-center">
                        {{$news->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
