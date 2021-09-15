@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin notification">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.notification')</h3>
                                    <a href="/{{$lang}}/dragro/notification/create"  class="btn-border">
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
                                        Add new
{{--
                                        @lang('vendor.add_new_blog')
--}}
                                    </a>
                                </div>
                                <div class="blog-list">
                                    @foreach($notifications as $item)
                                    <div class="blog-item flex-vertical-center">
                                        <div class="block-details flex">
                                            <div class="block-left-details">
                                                <div class="block-text">
                                                    {{$item->title}}
                                                </div>
                                                <div class="block-title m-0">
{{--                                                    <span class="date">02.02.2020</span>--}}
                                                    <span>{{$regions[$item->region]}}</span>
                                                </div>
                                            </div>
                                            <div class="block-right-details">
                                                <a href="/{{$lang}}/dragro/notification/{{$item->id}}/edit" class="btn-edit btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.189" height="22" viewBox="0 0 22.189 22">
                                                        <defs><style>.l{fill:none;stroke:#f29603;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                        </defs>
                                                        <g transform="translate(-1 -0.879)">
                                                            <path class="l" d="M10.939,4H3.987A1.987,1.987,0,0,0,2,5.987V19.892a1.987,1.987,0,0,0,1.987,1.987H17.892a1.987,1.987,0,0,0,1.987-1.987V12.939"/>
                                                            <path class="l" d="M18.5,2.5a2.121,2.121,0,0,1,3,3L12,15,8,16l1-4Z" transform="translate(-0.121)"/>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a href="/{{$lang}}/dragro/notification/{{$item->id}}/delete" class="btn-delete btn-transparent">
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel">Lorem ipsum</h4>
                </div>
                <div class="modal-body">
                    Try utilizing single input type="file" element having multiple attribute set, loop through selected files object , append img element for each file within user selected files object
                </div>
            </div>
        </div>
    </div>
@endsection
