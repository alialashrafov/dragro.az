@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin">
    <div class="container">
        <div class="association-content">
            <div class="row relative">
                @include('dragro.association.navbar')

                <div class="col-md-9 col-xs-12">
                    <div class="block-right">
                        <div class="block-shadow">
                            <h3 class="m-0">@lang('vendor.settings')</h3>
                            <div class="form-list">
                                <div class="setting-top">
                                    <form action="/{{$lang}}/association/addLogo" method="post" enctype="multipart/form-data" id="imageForm">
                                        <div class="flex-vertical-center">
                                            {{--<div class="img-circle"></div>--}}
                                            <img src="{{$association->image}}" class="img-circle" />
                                            <div class="block-btn flex-start">
                                                <label for="upload" class="btn-effect img-upload">
                                                    <input type="file" name="image" id="upload">
                                                    <span>@lang('vendor.add_logo')</span>
                                                </label>
                                                {{--<button class="btn-border">
                                                    Delete logo
                                                </button>--}}
                                            </div>
                                        </div>
                                        {!! csrf_field() !!}
                                    </form>
                                </div>
                                <form action="/{{$lang}}/association/settings/{{$association->id}}" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="setting-top-form">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-12">
                                                <label for="as-name">
                                                    <span class="input-title">@lang('vendor.association_name')</span>
                                                    <input type="text" name="name" value="{{$association->association_name}}" class="form-control input-bg" id="as-name">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-bottom">
                                    <div class="row">
                                        <div class="col-md-8 col-xs-12">
                                            <label for="url">
                                                <span class="input-title">@lang('vendor.web_site_url')</span>
                                                <input type="text" name="web_site" value="{{$association->web_site}}" class="form-control input-bg" id="url">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <label for="phone">
                                                <span class="input-title">@lang('vendor.phone')</span>
                                                <input type="text" name="phone" value="{{$association->phone}}" class="form-control input-bg" id="phone">
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="mobile">
                                                <span class="input-title">@lang('vendor.mobile')</span>
                                                <input type="text" name="mobile" value="{{$association->mobile}}" class="form-control input-bg" id="mobile">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-xs-12">
                                            <label for="address">
                                                <span class="input-title">@lang('vendor.address')</span>
                                                <input type="text" name="address" value="{{$association->address}}" class="form-control input-bg" id="address">
                                            </label>
                                        </div>
                                    </div>
                                    {!! csrf_field() !!}
                                    <div class="flex-center">
                                        <button type="submit" class="btn-effect">@lang('vendor.save')</button>
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
<script>
    document.getElementById("upload").onchange = function() {
        document.getElementById("imageForm").submit();
    };
</script>
@endsection
