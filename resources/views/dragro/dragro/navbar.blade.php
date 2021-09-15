<div class="col-md-3 col-xs-12">
    <div class="block-left">
        <div class="block-shadow ">
            {{--<div class="block-top">
                <div class="img-block">
                    <img src="img/5b8d2fbd88642_thumb900@2x.png" alt="associations" class="img-responsive">
                </div>
            </div>--}}
            <div class="block-bottom">
                <ul class="list-unstyled nav-list">
                    <li @if(Request::is('*/blog*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/blog">
                            <span class="icon-menu">
                                <i class="fal fa-file-invoice"></i>
                            </span>
                            <span class="menu-item"> @lang('vendor.blog')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/about*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/about">
                            <span class="icon-menu">
                                <i class="fal fa-file-invoice"></i>
                            </span>
                            <span class="menu-item"> @lang('vendor.about_us')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/farmers*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/farmers">
                            <span class="icon-menu">
                                <i class="fal fa-tractor"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.farmer')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/products*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/products">
                            <span class="icon-menu">
                                 <i class="fal fa-box-full"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.products')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/services*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/services">
                            <span class="icon-menu">
                                <i class="fal fa-money-bill-wave"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.services')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/slider*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/slider">
                            <span class="icon-menu">
                                <i class="fal fa-sliders-v"></i>
                            </span>
                            <span class="menu-item">Slider</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/messages*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/messages">
                            <span class="icon-menu">
                                <i class="fal fa-comment">
                                        @if($readed != 1)
                                            1
                                        @endif
                                </i>
                            </span>
                            <span class="menu-item">@lang('vendor.message')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/notification*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/notification">
                            <span class="icon-menu">
                                <i class="fal fa-bell"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.notification')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/settings*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/settings">
                            <span class="icon-menu">
                                <i class="fal fa-cog"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.setting')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/plantTypes*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/plantTypes">
                            <span class="icon-menu">
                               <i class="fal fa-hand-holding-seedling"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.plant_types')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/plants*')) class="active" @endif>
                        <a href="/{{$lang}}/dragro/plants">
                            <span class="icon-menu">
                                <i class="fal fa-seedling"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.plants')</span>
                        </a>
                    </li>
                    <li>
                        <a href="/{{$lang}}/logout">
                            <span class="icon-menu">
                                <i class="fal fa-sign-out"></i>
                            </span>
                            <span class="menu-item"> @lang('vendor.logout')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
