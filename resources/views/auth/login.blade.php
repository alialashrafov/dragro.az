@extends('layouts.main')

@section('content')
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="main-heading text-center">
                        @lang('vendor.we_are_glad')
                    </div>
                    <div class="block-shadow">
                        <h4 class="text-center">@lang('vendor.log_in')</h4>
                        {!! $errors->first() !!}
                        <form action="/{{$lang}}/login" method="post" class="m-0">
                            <div class="form-list">
                                <label for="email">
                                    <span class="input-title">@lang('vendor.email')</span>
                                    <input type="text" class="form-control" name="email" id="email">
                                </label>
                                <label for="password">
                                    <span class="input-title">@lang('vendor.password')</span>
                                    <input type="password" name="password" class="form-control" id="password">
                                </label>
                                {!! csrf_field() !!}
                                <div class="text-center">
                                    <a href="" class="forget-password">@lang('vendor.forgot_password')</a>
                                    <button type="submit" class="btn-effect">@lang('vendor.log_in')</button>
                                    <div class="have-account">
                                        @lang('vendor.not_have_account')
                                        <a href="/{{$lang}}/register"> @lang('vendor.sign_up_now')</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
