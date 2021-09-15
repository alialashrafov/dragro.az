@extends('layouts.main')

@section('content')
    <section class="login sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="main-heading text-center">
                        @lang('vendor.welcome_to')
                    </div>
                    <div class="block-shadow">
                        <h4 class="text-center">@lang('vendor.sign_up')</h4>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/{{$lang}}/register" method="post" class="m-0">
                            <div class="form-list">
                                <label for="name">
                                    <span class="input-title">@lang('vendor.name')</span>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="@lang('vendor.name')">
                                </label>
                                <label for="surname">
                                    <span class="input-title">@lang('vendor.surname')</span>
                                    <input type="text" class="form-control" name="surname" id="surname" placeholder="@lang('vendor.surname')">
                                </label>
                                <label for="email">
                                    <span class="input-title">@lang('vendor.email')</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="sample@mail.com">
                                </label>
                                {!! csrf_field() !!}
                                <label for="password">
                                    <span class="input-title">@lang('vendor.password')</span>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Create password">
                                    {{--<button class="show-password btn-transparent" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"><defs><style>.a{fill:none;stroke:#779499;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g transform="translate(-0.5 -3.5)"><path class="a" d="M1,10S3.909,4,9,4s8,6,8,6-2.909,6-8,6S1,10,1,10Z"/><circle class="a" cx="2" cy="2" r="2" transform="translate(7.022 8.173)"/></g></svg>
                                    </button>--}}
                                </label>
                                <label for="password">
                                    <span class="input-title">@lang('vendor.password_again')</span>
                                    <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Create password">
                                    {{--<button class="show-password btn-transparent" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13"><defs><style>.a{fill:none;stroke:#779499;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g transform="translate(-0.5 -3.5)"><path class="a" d="M1,10S3.909,4,9,4s8,6,8,6-2.909,6-8,6S1,10,1,10Z"/><circle class="a" cx="2" cy="2" r="2" transform="translate(7.022 8.173)"/></g></svg>
                                    </button>--}}
                                </label>
                                <label for="terms">
                                    <input type="checkbox" /> <a href="/{{$lang}}/terms">Terms & Conditions</a>
                                </label>
                                <div class="text-center">
                                    <button type="submit" class="btn-effect">@lang('vendor.sign_up')</button>
                                    <div class="have-account">
                                        @lang('vendor.have_an_account')
                                        <a href="/{{$lang}}/login">@lang('vendor.log_in_now')</a>
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
