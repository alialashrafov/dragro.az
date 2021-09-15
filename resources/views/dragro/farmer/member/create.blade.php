@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin admin-blog">
    <div class="container">
        <div class="association-content">
            <div class="row relative">
                @include('dragro.association.navbar')
                <div class="col-md-9 col-xs-12">
                    <div class="block-right">
                        <div class="block-shadow">
                            <div class="flex heading-top">
                                <h3 class="m-0">
                                    <a href="/{{$lang}}/association/members"> <i class="far fa-arrow-left"></i></a>
                                    @lang('vendor.new_member')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/association/members" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="form-list">
                                        <div class="blog-content">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="memberName">
                                                        <span class="input-title">@lang('vendor.name')</span>
                                                        <input name="name" class="form-control" id="memberName">
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="memberSurname">
                                                        <span class="input-title">@lang('vendor.surname')</span>
                                                        <input name="surname" class="form-control" id="memberSurname">
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="email">
                                                        <span class="input-title">@lang('vendor.email')</span>
                                                        <input name="email" class="form-control" id="email">
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="address">
                                                        <span class="input-title">@lang('vendor.address')</span>
                                                        <input name="address" class="form-control" id="address">
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="profession">
                                                        <span class="input-title">@lang('vendor.profession')</span>
                                                        <input type="text" class="form-control" name="profession" id="profession">
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <label for="file">
                                                        <span class="input-title">@lang('vendor.image')</span>
                                                        <input type="file" class="form-control" name="file" id="file">
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
