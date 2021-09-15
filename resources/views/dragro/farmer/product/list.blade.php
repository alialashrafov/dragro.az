@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-product">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.products')</h3>
                                </div>
                                <div class="blog-list">
                                    <ul class="list-unstyled tab-list">
                                        <li @if(!Request::is('*/my*'))class="active" @endif>
                                            <a href="/{{$lang}}/farmer/products">
                                                @lang('vendor.products')
                                            </a>
                                        </li>
                                        <li @if(Request::is('*/my*')) class="active" @endif>
                                            <a href="/{{$lang}}/farmer/products/my">
                                                @lang('vendor.my_products')
                                            </a>
                                        </li>
                                    </ul>
                                    @foreach($Products as $item)
                                    <div class="blog-item flex-vertical-center">
                                        <div class="img-block">
                                            <img src="{{$item->image}}" alt="news" class="img-responsive">
                                        </div>
                                        <div class="block-details flex">
                                            <div class="block-left-details">
                                                <div class="block-text">
                                                    {{$item->title}}
                                                </div>
                                                <div class="block-title m-0">
                                                    <div class="flex-center">
                                                        <span class="gray">@lang('vendor.price') :</span>
                                                        <span>{{$item->price}}
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10"  viewBox="0 0 189.46 155.202">
                                                              <path id="azn_symbol_wiki" d="M112.619,26.009l-.4-17.876L99.635,14.525l-.363,11.559C50.247,30.846,11.588,84.822,11.588,150.75q0,6.371.478,12.585H29.234c-.161-3.03-.267-6.084-.267-9.173,0-59.8,30.7-108.881,69.87-114.133l-3.508,112.32,19.92-9.588-2.316-102.71c39.087,5.373,69.7,54.4,69.7,114.113,0,3.089-.105,6.143-.267,9.173h18.207q.472-6.208.476-12.585C201.047,84.488,162,30.292,112.619,26.009Z" transform="translate(-11.587 -8.133)"/>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($buy)
                                                <div class="block-right-details">
                                                    <div class="block-btn buy-product">
                                                        <a href="/{{$lang}}/farmer/blog/{{$item->id}}/edit" class="btn-transparent">
                                                            <i class="fal fa-shopping-cart"></i>
                                                            @lang('vendor.buy')
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav aria-label="Page navigation" class="flex-center">
                                            @if($buy == true)
                                            {{$Products->links()}}
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
