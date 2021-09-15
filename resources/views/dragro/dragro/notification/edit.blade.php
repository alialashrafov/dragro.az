@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-blog">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">
                                        <a href="/{{$lang}}/dragro/notification"> <i class="far fa-arrow-left"></i></a>
                                        @lang('vendor.new_notification')
                                    </h3>
                                </div>
                                <div class="add-new-blog">
                                    <form action="/{{$lang}}/dragro/notification/{{$Notification->id}}" method="post" enctype="multipart/form-data" class="m-0">
                                        <input name="_method" type="hidden" value="PUT">
                                        <div class="form-list">
                                            <div class="row">
                                                <div class="col-md-5 col-xs-12">
                                                    <select class="selectpicker form-control" name="region" aria-label="lang" title="">
                                                        @foreach($regions as $key=>$val)
                                                            <option @if($Notification->region == $key) selected @endif value="{{$key}}" >{{$val}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="row">
                                                    <div class="col-md-10 col-xs-12">
                                                        <label for="blogName" class="blog-title">
                                                            <input placeholder="@lang('vendor.title')" value="{{$Notification->title}}" name="title" class="form-control" id="blogName">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-11 col-xs-12">
                                                        <label for="blog-text" class="blog-text">
                                                            <textarea  class="form-control" id="blog-text" name="text" placeholder="@lang('vendor.description')">{{$Notification->text}}</textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                                {!! csrf_field() !!}
                                                <div class="flex-center">
                                                    <button type="submit" class="btn-effect">@lang('vendor.save')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
