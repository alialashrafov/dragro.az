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
                                    <h3 class="m-0">@lang('vendor.users')</h3>
                                    <a href="/{{$lang}}/dragro/users/create"  class="btn-border">
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
                                        @lang('vendor.add_new_user')
                                    </a>
                                </div>
                                <div class="blog-list">
                                    <table class="table table-list">
                                        <thead>
                                            <tr>
                                                <th>
                                                    @lang('vendor.name')
                                                </th>
                                                <th>
                                                    @lang('vendor.email')
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Users as $item)
                                                <tr>
                                                    <td>
                                                        {{$item->name}}
                                                    </td>
                                                    <td>
                                                        <div class="flex">
                                                            {{$item->email}}
                                                            <div class="block-btn">
                                                                <a href="/{{$lang}}/dragro/users/{{$item->id}}/delete" class="btn-delete btn-transparent">
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
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
