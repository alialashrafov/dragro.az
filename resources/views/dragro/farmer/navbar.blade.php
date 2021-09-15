<div class="col-md-3 col-xs-12">
    <div class="block-left">
        <div class="block-shadow ">
            <div class="block-top">
                <div class="balance">
                    @lang('vendor.balance') :
                    <span class="price">{{ $user_balance->balance }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 189.46 155.202">
                            <path id="azn_symbol_wiki" fill="#264C5B" d="M112.619,26.009l-.4-17.876L99.635,14.525l-.363,11.559C50.247,30.846,11.588,84.822,11.588,150.75q0,6.371.478,12.585H29.234c-.161-3.03-.267-6.084-.267-9.173,0-59.8,30.7-108.881,69.87-114.133l-3.508,112.32,19.92-9.588-2.316-102.71c39.087,5.373,69.7,54.4,69.7,114.113,0,3.089-.105,6.143-.267,9.173h18.207q.472-6.208.476-12.585C201.047,84.488,162,30.292,112.619,26.009Z" transform="translate(-11.587 -8.133)"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="block-bottom">
                <ul class="list-unstyled nav-list">
                    <li @if(Request::is('*/crops*') && !Request::is('*/calculate*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/crops">
                            <span class="icon-menu">
                                <i class="fal fa-seedling"></i>
                            </span>
                            <span class="menu-item"> @lang('vendor.crops')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/notification*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/notification">
                            <span class="icon-menu">
                                <i class="fal fa-bell">
                                    @if($notRead == 1)
                                        1
                                    @endif
                                </i>
                            </span>
                            <span class="menu-item">@lang('vendor.notification')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/messages*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/messages">
                            <span class="icon-menu">
                                <i class="fal fa-comment">
                                    @if($userMessage != null)
                                    @if($userMessage->read == 0)
                                        1
                                    @endif
                                        @endif
                                </i>
                            </span>
                            <span class="menu-item">@lang('vendor.messages')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/products*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/products">
                            <span class="icon-menu">
                                 <i class="fal fa-box-full"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.products')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/packages*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/packages">
                            <span class="icon-menu">
                                 <i class="fal fa-box-full"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.package')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/services*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/services">
                            <span class="icon-menu">
                                <i class="fal fa-boxes"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.services')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/calculate*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/crops/calculate">
                            <span class="icon-menu">
                                <i class="fal fa-money-bill-wave"></i>
                            </span>
                            <span class="menu-item">@lang('vendor.budget_calculator')</span>
                        </a>
                    </li>
                    <li @if(Request::is('*/profile*')) class="active" @endif>
                        <a href="/{{$lang}}/farmer/profile">
                            <span class="icon-menu">
                                <i class="fal fa-user-circle"></i>
                            </span>
                            <span class="menu-item"> @lang('vendor.profile')</span>
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
