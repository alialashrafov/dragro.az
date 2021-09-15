<div class="members">
    <div class="block-list flex-wrap">
        @foreach($members as $item)
            <div class="block">
                <div class="img-circle">
                    <img src="{{$item->image}}" alt="members" class="img-responsive">
                </div>
                <div class="block-details">
                    <div class="member-details text-center">
                        <div class="member-top">
                            <p>{{$item->name}} {{$item->surname}}</p>
                            <span>{{$item->profession}}</span>
                        </div>
                        <div class="member-bottom">
                            <ul class="list-unstyled m-0">
                                <li>
                                    <a href="" class="flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.394" height="12.287" viewBox="0 0 15.394 12.287"><defs><style>.b{fill:none;stroke:#7e9ca7;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g class="a" transform="translate(-1.303 -3.5)"><path class="b" d="M3.4,4H14.6A1.41,1.41,0,0,1,16,5.411v8.465a1.41,1.41,0,0,1-1.4,1.411H3.4A1.41,1.41,0,0,1,2,13.876V5.411A1.41,1.41,0,0,1,3.4,4Z" transform="translate(0)"/><path class="b" d="M16,6,9,10.938,2,6" transform="translate(0 -0.589)"/></g></svg>
                                        <span>{{$item->email}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18.186" viewBox="0 0 15 18.186"><defs><style>.a{opacity:0.5;}.b{fill:none;stroke:#7e9ca7;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g class="a" transform="translate(-2.5 -0.5)"><path class="b" d="M17,8.031c0,5.468-7,10.155-7,10.155S3,13.5,3,8.031a7,7,0,1,1,14,0Z" transform="translate(0 0)"/><circle class="b" cx="2.64" cy="2.64" r="2.64" transform="translate(7.33 5.364)"/></g></svg>
                                        <span>{{$item->address}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-xs-12">
            <nav aria-label="Page navigation" class="flex-center">
                {{$members->links()}}
            </nav>
        </div>
    </div>
</div>
