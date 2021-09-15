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
                                    <form action="/{{$lang}}/dragro/notification" method="post" enctype="multipart/form-data" class="m-0">
                                        <div class="form-list">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">Region</span>
                                                        <select class="selectpicker form-control" name="region" aria-label="lang" title="">
                                                            @foreach($regions as $key=>$val)
                                                                <option value="{{$key}}" >{{$val}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.plantation_types')</span>
                                                        <select class="selectpicker form-control " name="plantation_type" id="cropTypeCalcDragro" aria-label="lang" title="@lang('vendor.plantation_types')">
                                                            @foreach($types as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.plantation_name')</span>
                                                        <select class="selectpicker form-control " name="plantation_id" id="crops" aria-label="lang" title="@lang('vendor.plantation_name')">
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="row">
                                                    <div class="col-md-3 col-xs-12">
                                                        <label for="blogName" class="blog-title">
                                                            <input placeholder="@lang('vendor.title')" name="title" class="form-control" id="blogName">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12">
                                                        <label for="blog-text" class="blog-text">
                                                            <textarea class="form-control" id="blog-text" name="text" placeholder="@lang('vendor.description')"></textarea>
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
