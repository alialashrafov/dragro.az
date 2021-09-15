<div class="block-right">
    <div class="block-shadow">
        <div class="flex heading-top">
            <h3 class="m-0">@lang('vendor.services')</h3>
        </div>
        <div class="blog-list">
            @foreach($data as $item)
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
                                <span class="date">{{$item->created_at}}</span>
                                <div>
                                    <span class="gray">Price :</span>
                                    <span>{{$item->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
