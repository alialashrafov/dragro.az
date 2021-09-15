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
                                    <a href="/{{$lang}}/dragro/users"> <i class="far fa-arrow-left"></i></a>
                                     @lang('vendor.users')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/dragro/users" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="form-list">
                                        <div class="blog-content">
                                            <div class="row flex-column">
                                                <div class="col-md-7 col-xs-12">
                                                    <label for="name">
                                                        <span class="input-title">@lang('vendor.name')</span>
                                                        <input type="text" name="name" class="form-control" id="name">
                                                    </label>
                                                </div>
                                                <div class="col-md-7 col-xs-12">
                                                    <label for="email">
                                                        <span class="input-title">@lang('vendor.email')</span>
                                                        <input type="text" name="email" class="form-control" id="email">
                                                    </label>
                                                </div>
                                                <div class="col-md-7 col-xs-12">
                                                    <label for="password">
                                                        <span class="input-title">@lang('vendor.password')</span>
                                                        <input type="password" name="password" class="form-control" id="password">
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
