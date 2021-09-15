<div class="block-right">
    <div class="block-shadow">
        <div class="flex heading-top">
            <h3 class="m-0">@lang('vendor.product')</h3>
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
                                <span class="gray">Price :</span>
                                <span>{{$item->price}}</span>
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
                    {{$Products->links()}}
                </nav>
            </div>
        </div>
    </div>
</div>
