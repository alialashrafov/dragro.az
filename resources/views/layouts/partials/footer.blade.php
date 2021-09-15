<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <a class="logo flex-start" href="/{{$lang}}">
                        <img src="{{asset('/assets/img/logo-white.svg')}}" alt="logo" class="img-responsive">
                    </a>
                    <p class="logo-addition">{{ $settings->privacy }}</p>

                    <ul class="list-inline flex-start socials m-0">
                        <li>
                            <a href="{{ $settings->facebook }}" target="_blank" class="facebook"></a>
                        </li>
                        <li>
                            <a href="{{ $settings->instagram }}" target="_blank" class="instagram"></a>
                        </li>
                        <li>
                            <a href="{{ $settings->twitter }}" target="_blank" class="twitter"></a>
                        </li>
                        <li>
                            <a href="{{ $settings->youtube }}" target="_blank" class="youtube"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <p class="footer-list-head">@lang('vendor.useful_links')</p>
                    <ul class="footer-list list-unstyled divide-items">
                        <li>
                            <a href="/{{$lang}}">
                                <span>@lang('vendor.home')</span>
                            </a>
                        </li>
                        <li>
                            <a href="/{{$lang}}/faq">
                                <span>FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="/{{$lang}}/news">
                                <span>@lang('vendor.news')</span>
                            </a>
                        </li>
                        <li>
                            <a href="/{{$lang}}/about-us">
                                <span>@lang('vendor.about_us')</span>
                            </a>
                        </li>
                        <li>
                            <a href="/{{$lang}}/contact">
                                <span>@lang('vendor.contact')</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-list">
                        <p class="footer-list-head">@lang('vendor.contact_us')</p>
                        <div class="address">
                            <ul class="list-unstyled ">
                                <li>
                                    <div class="address-item mail-icon ">
                                        <a href="mailto:info@agriculture.com">
                                            <span>{{$settings->email}}</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-item phone-icon flex-column">
                                        <?php $phones = explode(',', $settings->phones); ?>
                                        @foreach($phones as $phone)
                                                <a href="tel:{{$phone}}">
                                                    <span>{{$phone}}</span>
                                                </a>
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <div class="address-item address-icon">
                                        <a href="">
                                            <span>{{$settings->address}}</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row flex">
                <div class="col-sm-7 col-sm-offset-5 col-xs-12">
                    <div class="flex">
                        <p class="copyright m-0 float-r"> <span class="relative"> DrAgro {{date('Y')}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="{{asset('/assets/js/main.js?v=').time()}}"></script>
</body>
</html>
