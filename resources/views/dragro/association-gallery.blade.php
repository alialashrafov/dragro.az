<div class="block-list flex-wrap">
    @foreach($gallery as $item)
    <div class="block">
        <a href="{{$item->source}}" data-fancybox data-caption="Caption for single image">
            <div class="img-block">
                <img src="{{$item->source}}" alt="news" class="img-responsive">
            </div>
        </a>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-xs-12">
        <nav aria-label="Page navigation" class="flex-center">
            {{$gallery->links()}}
        </nav>
    </div>
</div>
