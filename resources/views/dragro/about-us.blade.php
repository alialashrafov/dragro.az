@extends('layouts.main')

@section('content')
    <section class="about">
        <div class="container">
            <div class="row web">
                <div class="col-xs-12 text-center">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">@lang('vendor.about_us')</li>
                    </ol>
                </div>
            </div>
            <div class="about-content">
                <div class="about-us">
                    <div class="main-heading text-center">
                        @lang('vendor.about_us')
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="img-block">
                                <img src="{{ $aboutus->image }}" alt="about" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="our-vision">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="block-shadow text-center">
                                <div class="main-heading">
                                    {{ $aboutus->title }}
                                </div>
                                <div class="about-text">
                                    {!! $aboutus->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
