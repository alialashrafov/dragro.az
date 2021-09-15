<div class="block-list flex-wrap">
    @foreach($news as $item)
    <div class="block">
        <a href="/{{$lang}}/news/{{$item->id}}">
            <div class="img-block">
                <img src="{{$item->image}}" alt="news" class="img-responsive">
            </div>
            <div class="block-details">
                <div class="block-title">
                    <span class="date">{{$item->created_at}}</span>
                </div>
                <div class="block-text">
                    {{$item->title}}
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-xs-12">
        <nav aria-label="Page navigation" class="flex-center">
            {{$news->links()}}
        </nav>
    </div>
</div>
