@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-member">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.association.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.member')</h3>
                                    <a href="/{{$lang}}/association/members/create"  class="btn-border">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                            <defs>
                                                <style>.d{fill:#fff;}.d,.e{stroke:#01B140;stroke-linecap:round;stroke-linejoin:round;}.e{fill:none;}</style>
                                            </defs>
                                            <g transform="translate(-1.5 -1.901)">
                                                <circle class="d" cx="8" cy="8" r="8" transform="translate(2 2.401)"/>
                                                <line class="e" y2="6" transform="translate(10 7.401)"/>
                                                <line class="e" x2="6" transform="translate(7 10.401)"/>
                                            </g>
                                        </svg>
                                        @lang('vendor.add_new_member')
                                    </a>
                                </div>
                                <div class="blog-list">
                                    @foreach($Members as $item)
                                    <div class="blog-item flex-vertical-center">
                                        <div class="img-block">
                                            <img src="{{$item->image}}" alt="news" class="img-responsive">
                                        </div>
                                        <div class="block-details flex member-details">
                                            <div class="block-left-details">
                                                <div class="member-top">
                                                    <p>{{$item->name}} {{$item->surname}}</p>
                                                    <span>{{$item->profession}}</span>
                                                </div>
                                                <div class="member-bottom">
                                                    <ul class="list-unstyled m-0">
                                                        <li>
                                                            <a href="" class="flex-vertical-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.394" height="12.287" viewBox="0 0 15.394 12.287"><defs><style>.b{fill:none;stroke:#7e9ca7;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g class="a" transform="translate(-1.303 -3.5)"><path class="b" d="M3.4,4H14.6A1.41,1.41,0,0,1,16,5.411v8.465a1.41,1.41,0,0,1-1.4,1.411H3.4A1.41,1.41,0,0,1,2,13.876V5.411A1.41,1.41,0,0,1,3.4,4Z" transform="translate(0)"/><path class="b" d="M16,6,9,10.938,2,6" transform="translate(0 -0.589)"/></g></svg>
                                                                <span>{{$item->email}}</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="flex-vertical-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18.186" viewBox="0 0 15 18.186"><defs><style>.a{opacity:0.5;}.b{fill:none;stroke:#7e9ca7;stroke-linecap:round;stroke-linejoin:round;}</style></defs><g class="a" transform="translate(-2.5 -0.5)"><path class="b" d="M17,8.031c0,5.468-7,10.155-7,10.155S3,13.5,3,8.031a7,7,0,1,1,14,0Z" transform="translate(0 0)"/><circle class="b" cx="2.64" cy="2.64" r="2.64" transform="translate(7.33 5.364)"/></g></svg>
                                                                <span>{{$item->address}}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="block-right-details">
                                                <div class="block-btn">
                                                    <a href="/{{$lang}}/association/members/{{$item->id}}/edit" class="btn-edit btn-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.189" height="22" viewBox="0 0 22.189 22">
                                                            <defs><style>.l{fill:none;stroke:#f29603;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                            </defs>
                                                            <g transform="translate(-1 -0.879)">
                                                                <path class="l" d="M10.939,4H3.987A1.987,1.987,0,0,0,2,5.987V19.892a1.987,1.987,0,0,0,1.987,1.987H17.892a1.987,1.987,0,0,0,1.987-1.987V12.939"/>
                                                                <path class="l" d="M18.5,2.5a2.121,2.121,0,0,1,3,3L12,15,8,16l1-4Z" transform="translate(-0.121)"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="/{{$lang}}/association/members/{{$item->id}}/delete" class="btn-delete btn-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22">
                                                            <defs>
                                                                <style>.l{fill:none;stroke:#7e9ca7;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                            </defs>
                                                            <g transform="translate(-2 -1)">
                                                                <path class="l" d="M3,6H21"/>
                                                                <path class="l" d="M19,6V20a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6M8,6V4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2V6"/>
                                                                <line class="l" y2="6" transform="translate(10 11)"/>
                                                                <line class="l" y2="6" transform="translate(14 11)"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
