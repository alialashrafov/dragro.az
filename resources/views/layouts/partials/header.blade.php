<header>
    <nav class="navbar">
        <div class="container">
            <div class="row flex">
                <div class="col-md-8  col-xs-12">
                    <div class="nav-left flex-vertical-center">
                        <div class="navbar-header flex">
                            <a class="navbar-brand flex-center" href="/{{$lang}}">
                                <img src="{{asset('/assets/img/logo.svg')}}" alt="logo" class="img-responsive">
                            </a>
                            <button type="button" class="navbar-toggle collapsed m-0 p-0 w-100 text-right"  aria-expanded="false">
                                <span><i class="fal fa-bars"></i></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse web w-100">
                            <ul class="nav navbar-nav w-100">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/{{$lang}}">@lang('vendor.home')</a>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="" class="dropdown-toggle nav-link" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        @lang('vendor.features')
                                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="color">
                                            <path d="M9.36088 0.000203133H10.2315C10.3204 0.000203133 10.4005 0.0541987 10.4335 0.136682C10.4441 0.163026 10.4492 0.190657 10.4492 0.217858C10.4492 0.276098 10.4258 0.333073 10.382 0.375151L5.37567 5.16387C5.29149 5.24421 5.15885 5.24421 5.07467 5.16387L0.0683031 0.375151C0.00410461 0.313503 -0.0167303 0.219123 0.0168591 0.136641C0.0498152 0.0541577 0.129951 0.000162601 0.218801 0.000162601H1.08948C1.14517 0.000162601 1.19874 0.0214257 1.23912 0.0596881L5.22517 3.83618L9.21122 0.0597086C9.25161 0.0214462 9.30517 0.000203133 9.36088 0.000203133Z" fill="#5E7A84"></path>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">@lang('vendor.products')</a></li>
                                        <li><a href="#">@lang('vendor.services')</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/{{$lang}}/news">@lang('vendor.blog')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/{{$lang}}/about-us">@lang('vendor.about_us')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/{{$lang}}/contact">@lang('vendor.contact')</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="navbar-right m-0 flex">
                        <div class="lang">
                            <select class="selectpicker form-control" aria-label="lang" id="lang" onChange="changeLanguage()">
                                @foreach(config('app.languages') as $language)
                                <option @if($lang == $language) selected @endif >{{ucfirst($language)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <ul class="flex btn-block list-unstyled m-0">
                            @if(!Auth::check())
                                <li>
                                    <a href="/{{$lang}}/login" class="btn-border">@lang('vendor.log_in')</a>
                                </li>
                                <li>
                                    <a href="/{{$lang}}/register" class="btn-effect">@lang('vendor.sign_up')</a>
                                </li>
                            @else
                                <li>
                                    <a @if(Auth::user()->type == 'Farmer') href="/{{$lang}}/farmer/crops" @else href="/{{$lang}}/dragro/blog"  @endif class="btn-border">@lang('vendor.my_profile')</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="collapse-menu mobile">
        <div class="collapse-block">
            <div class="collapse-top">
                <ul class="btn-block list-unstyled m-0 flex-center">
                    @if(!Auth::check())
                    <li>
                        <a href="/{{$lang}}/login" class="btn-border">@lang('vendor.log_in')</a>
                    </li>
                    <li>
                        <a href="/{{$lang}}/register" class="btn-effect">@lang('vendor.sign_up')</a>
                    </li>
                    @else
                        <li>
                            <a @if(Auth::user()->type == 'Farmer') href="/{{$lang}}/farmer/crops" @else href="/{{$lang}}/dragro/blog"  @endif class="btn-border">@lang('vendor.my_profile')</a>
                        </li>
                    @endif
                </ul>
                <div class="nav-content">
                    <ul class="nav navbar-nav text-center m-0 flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="/{{$lang}}">@lang('vendor.home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$lang}}/associations">@lang('vendor.products')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$lang}}/associations">@lang('vendor.services')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$lang}}/news">@lang('vendor.blog')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$lang}}/about-us">@lang('vendor.about_us')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$lang}}/contact">@lang('vendor.contact')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse-bottom">
                <ul class="lang list-inline m-0 text-center">
                    <li>
                        <a href="">Az</a>
                    </li>
                    <li>
                        <a href="">En</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<script>
    function changeLanguage(){
        let lang = document.getElementById("lang").value;
        let path = location.pathname
        let arr = path.split('/');
        arr[1] = lang.toLowerCase();
        window.location.href = arr.join('/');
        //window.location.href = '/'+lang.toLowerCase();
    }
</script>
