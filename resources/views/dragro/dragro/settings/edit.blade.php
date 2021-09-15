@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin">
    <div class="container">
        <div class="association-content setting">
            <div class="row relative">
                @include('dragro.dragro.navbar')
                <div class="col-md-9 col-xs-12">
                    <div class="block-right">
                        <div class="block-shadow">
                            <h3 class="m-0">@lang('vendor.setting')</h3>
                            <form action="/{{$lang}}/dragro/settings" method="post" enctype="multipart/form-data" class="m-0">
                                <div class="form-list">
                                    <div class="setting-top">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <label for="address">
                                                    <span class="input-title">@lang('vendor.address')</span>
                                                    <input type="text" name="address" value="{{$settings->address}}" class="form-control input-bg" id="address">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-bottom">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <label for="email">
                                                    <span class="input-title">@lang('vendor.email')</span>
                                                    <input type="text" name="email" value="{{$settings->email}}" class="form-control input-bg" id="email">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="phone">
                                                    <span class="input-title">@lang('vendor.phone')</span>
                                                    <input type="text" name="phones" value="{{$settings->phones}}" class="form-control input-bg" id="phone">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Terms & Conditions</span>
                                                    <input type="text" name="terms" value="{{$settings->terms}}" class="form-control input-bg" id="terms">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="privacy">
                                                    <span class="input-title">privacy</span>
                                                    <input type="text" name="privacy" value="{{$settings->privacy}}" class="form-control input-bg" id="privacy">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">@lang('vendor.add_blog_title')</span>
                                                    <input type="text" name="title" value="{{$settings->title}}" class="form-control input-bg" id="title">
                                                </label>
                                            </div>
{{--                                                sonradan elave olundu--}}
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">@lang('vendor.write_your_blog')</span>
                                                    <input type="text" name="content" value="{{$settings->content}}" class="form-control input-bg" id="content">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Facebook</span>
                                                    <input type="text" name="facebook" value="{{$settings->facebook}}" class="form-control input-bg" id="facebook">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Instagram</span>
                                                    <input type="text" name="instagram" value="{{$settings->instagram}}" class="form-control input-bg" id="instagram">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Youtube</span>
                                                    <input type="text" name="youtube" value="{{$settings->youtube}}" class="form-control input-bg" id="youtube">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Twitter</span>
                                                    <input type="text" name="twitter" value="{{$settings->twitter}}" class="form-control input-bg" id="twitter">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="terms">
                                                    <span class="input-title">Ana Səhifə Video Hissə</span>
                                                    <textarea name="youtube_index" class="form-control" cols="30" rows="10">{{$settings->youtube_index}}</textarea>
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
</section>
@endsection
