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
                                    <a href="/{{$lang}}/dragro/services"> <i class="far fa-arrow-left"></i></a>
                                    @lang('vendor.service')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/dragro/services/{{ $Service->id }}" method="post" enctype="multipart/form-data" class="m-0">
                                    <input name="_method" type="hidden" value="PUT">
                                    <div class="form-list">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="text" class="form-control" value="{{$Service->price}}" placeholder="@lang('vendor.price')" name="price">
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="row">
                                                <div class="col-md-10 col-xs-12">
                                                    <label for="blogName" class="blog-title">
                                                        <input placeholder="@lang('vendor.title')"  value="{{$Service->title}}" name="title" class="form-control" id="blogName">
                                                    </label>
                                                </div>
                                                <div class="col-md-11 col-xs-12">
                                                    <label for="blog-text" class="blog-text">
                                                        <textarea  class="form-control" id="blog-text"   value="{{$Service->description}}" name="description" placeholder="@lang('vendor.description')">{{$Service->description}}</textarea>
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
