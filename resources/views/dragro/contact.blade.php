@extends('layouts.main')

@section('content')
    <section class="contact">
        <div class="container">
            <div class="row web">
                <div class="col-xs-12 text-center">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">@lang('vendor.contact')</li>
                    </ol>
                </div>
            </div>
            <div class="contact-content">
                <div class="main-heading text-center">
                    @lang('vendor.contact')
                </div>
                <div class="row relative">
                    <div class="col-md-4 col-xs-12 change-position">
                        <div class="address-block">
                            <div class="block-shadow">
                                <div class="address">
                                    <ul class="list-unstyled m-0">
                                        <li>
                                            <p class="address-title">@lang('vendor.address')</p>
                                            <div class="address-item address-icon">
                                                <a href="https://www.google.com/maps/place/AMAY+Shopping+Center/@40.379914,49.8786968,15z/data=!4m5!3m4!1s0x0:0x6f2eb5b63b2f56d1!8m2!3d40.379914!4d49.8786968" target="_blank">
                                                    <span>{{$settings->address}}</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="address-title">@lang('vendor.email')</p>
                                            <div class="address-item flex-column">
                                                <a href="mailto:{{$settings->email}}">
                                                    <span>{{$settings->email}}</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="address-title">@lang('vendor.contact')</p>
                                            <div class="address-item flex-column phone-icon">
                                                <?php $phones = explode(',', $settings->phones); ?>
                                                @foreach($phones as $phone)
                                                    <a href="tel:{{$phone}}">
                                                        <span>{{$phone}}</span>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="socials list-unstyled flex-start">
                                        <li>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21"><defs><style>.a{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M18,2H15a5,5,0,0,0-5,5v3H7v4h3v8h4V14h3l1-4H14V7a1,1,0,0,1,1-1h3Z" transform="translate(-6.5 -1.5)"/></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.a{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g transform="translate(-1.5 -1.5)"><rect class="a" width="20" height="20" rx="5" transform="translate(2 2)"/><path class="a" d="M16,11.37A4,4,0,1,1,12.63,8,4,4,0,0,1,16,11.37Z"/><line class="a" x2="0.01" transform="translate(17.5 6.5)"/></g></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23.001" height="16.46" viewBox="0 0 23.001 16.46"><defs><style>.a{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g transform="translate(-0.499 -3.5)"><path class="a" d="M22.54,6.42a2.78,2.78,0,0,0-1.94-2C18.88,4,12,4,12,4s-6.88,0-8.6.46a2.78,2.78,0,0,0-1.94,2A29,29,0,0,0,1,11.75a29,29,0,0,0,.46,5.33A2.78,2.78,0,0,0,3.4,19c1.72.46,8.6.46,8.6.46s6.88,0,8.6-.46a2.78,2.78,0,0,0,1.94-2A29,29,0,0,0,23,11.75a29,29,0,0,0-.46-5.33Z"/><path class="a" d="M9.75,15.02l5.75-3.27L9.75,8.48Z"/></g></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="19.13" viewBox="0 0 23 19.13"><defs><style>.a{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M23,3a10.9,10.9,0,0,1-3.14,1.53,4.48,4.48,0,0,0-7.86,3v1A10.66,10.66,0,0,1,3,4s-4,9,5,13a11.64,11.64,0,0,1-7,2c9,5,20,0,20-11.5a4.5,4.5,0,0,0-.08-.83A7.72,7.72,0,0,0,23,3Z" transform="translate(-0.5 -2.419)"/></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12 float-r">
                        <div class="block-shadow">
                            <h4>@lang('vendor.get_in_touch')</h4>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/{{$lang}}/association/contact/0" method="post" class="m-0">
                                <div class="form-list">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="name">
                                                <span class="input-title">@lang('vendor.name')</span>
                                                <input type="text" class="form-control" id="name">
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="surname">
                                                <span class="input-title">@lang('vendor.surname')</span>
                                                <input type="text" class="form-control" id="surname">
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="email">
                                                <span class="input-title">@lang('vendor.email')</span>
                                                <input type="text" class="form-control" id="email">
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label for="phone">
                                                <span class="input-title">@lang('vendor.phone')</span>
                                                <input type="text" class="form-control" id="phone">
                                                <p class="phone-exp">+994</p>
                                            </label>
                                        </div>
                                        <div class="col-xs-12">
                                            <label for="message">
                                                <span class="input-title">@lang('vendor.message')</span>
                                                <textarea class="form-control" id="message"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex-center">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn-effect flex-center">@lang('vendor.send')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="map relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12157.223313290244!2d49.8786968!3d40.379914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f2eb5b63b2f56d1!2sAMAY%20Shopping%20Center!5e0!3m2!1sen!2s!4v1615287946463!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
@endsection
