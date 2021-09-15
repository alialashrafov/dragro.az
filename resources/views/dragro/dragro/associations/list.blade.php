@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-blog">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.associations')</h3>
                                </div>
                                <div class="blog-list">
                                    @foreach($Associations as $item)
                                    <div class="blog-item flex-vertical-center">
                                        <div class="img-block">
                                            <img src="{{$item->image}}" alt="news" class="img-responsive">
                                        </div>
                                        <div class="block-details flex">
                                            <div class="block-left-details">
                                                <div class="block-text">
                                                    {{$item->association_name}}
                                                </div>
                                                <div class="block-title m-0">
                                                    <span class="date">{{$item->created_at}}</span>
                                                </div>
                                            </div>
                                            <div class="block-right-details">
                                                <div class="block-btn">
                                                    <a href="/{{$lang}}/dragro/associations/{{$item->id}}/delete" class="btn-delete btn-transparent">
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
