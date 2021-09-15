@extends('layouts.main')

@section('content')
    <section class="associations-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center web">
                    <ol class="breadcrumb">
                        <li><a href="/">@lang('vendor.home')</a></li>
                        <li><a href="/associations">@lang('vendor.associations')</a></li>
                        <li class="active">{{$association->association_name}}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-heading text-center">
                        {{$association->association_name}}
                    </div>
                </div>
            </div>
            <div class="association-content">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="block-shadow">
                            <div class="block-top">
                                <div class="img-block">
                                    <img @if(!$association->image || strlen($association->image) < 5) src="/assets/img/empty.jpg" @else src="{{$association->image}}" @endif alt="associations" class="img-responsive">
                                </div>
                                <div class="block-details">
                                    <div class="block-text text-center">
                                        {{$association->association_name}}
                                    </div>
                                </div>
                            </div>
                            <div class="block-bottom">
                                <div class="association-list-details">
                                    <div class="association-list-details-item">
                                        <p>@lang('vendor.website'):</p>
                                        <ul class="list-unstyled association-list-details">
                                            <li>
                                                <a href="http://{{$association->web_site}}"><span>{{$association->web_site}}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="association-list-details-item">
                                        <p>@lang('vendor.contact'):</p>
                                        <ul class="list-unstyled association-list-details">
                                            <li>
                                                <a href=""><span>{{$association->email}}</span></a>
                                            </li>
                                            <li>
                                                <a href=""><span>{{$association->phones}}</span></a>
                                            </li>
                                            <li>
                                                <a href=""><span>{{$association->address}}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="nav-list">
                            <ul class="nav nav-tabs flex-start">
                                <li @if($page == 'news') class="active" @endif>
                                    <a href="/{{$lang}}/association/{{$association->id}}">@lang('vendor.blog')</a>
                                </li>
                                <li @if($page == 'gallery') class="active" @endif>
                                    <a href="/{{$lang}}/association/{{$association->id}}/gallery">@lang('vendor.gallery')</a>
                                </li>
                                <li @if($page == 'members') class="active" @endif>
                                    <a href="/{{$lang}}/association/{{$association->id}}/members">@lang('vendor.member_list')</a>
                                </li>
                                <li @if($page == 'contact') class="active" @endif>
                                    <a href="/{{$lang}}/association/{{$association->id}}/contact">@lang('vendor.contact')</a>
                                </li>
                            </ul>
                        </div>
                        @if($page == 'news')
                            @include('dragro.association-news')
                        @elseif($page == 'gallery')
                            @include('dragro.association-gallery')
                        @elseif($page == 'contact')
                            @include('dragro.association-contact')
                        @else
                            @include('dragro.association-members')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
