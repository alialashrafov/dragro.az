@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-farmer">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.farmer') ({{$Farmers->count()}})</h3>
                                </div>
                                <form action="/{{$lang}}/dragro/farmers/search" method="post" enctype="multipart/form-data">
                                    <div class="filter-block">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <label for="blogName" class="blog-title">
                                                    <input name="name" placeholder="Ad Soyad" class="form-control" id="farmName">
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="flex">
                                                    <label for="package" class="blog-title">
                                                        <select class="selectpicker form-control " name="package" aria-label="lang" >
                                                            <option value="1">Start</option>
                                                            <option value="2">Dr.Agro</option>
                                                            <option value="3">Dr.Agro +</option>
                                                            <option value="4">Dr.Agro Premium</option>
                                                        </select>
                                                    </label>
                                                    {{ csrf_field() }}
                                                    <button type="submit" name="submit" class="btn-effect">
                                                        <i class="fal fa-search"></i>
                                                        Axtar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                </form>--}}
                                    <div class="blog-list">
                                        @foreach($Farmers as $item)
                                            <div class="blog-item flex-vertical-center">
                                                {{--<div class="img-block">
                                                    <img src="{{$item->image}}" alt="news" class="img-responsive">
                                                </div>--}}
                                                <div class="block-details flex">
                                                    <div class="block-left-details">
                                                        <div class="block-text">
                                                            <a class="farmSearch" href="/{{$lang}}/dragro/farmers/{{$item->id}}/?page=crops">
                                                                {{$item->name}}
                                                            </a>
                                                        </div>
                                                        <div class="block-title m-0">
                                                            <span class="date">{{$item->created_at}}</span>
                                                            <p class="m-0"> <span class="gray">Paket :</span>
                                                                @if($item->package == 1)
                                                                    "Dr.Agro"
                                                                @elseif($item->package == 2)
                                                                    "Dr.Agro +"
                                                                @elseif($item->package == 3)
                                                                    "Dr.Agro Premium"
                                                                @else
                                                                    "Start"
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="block-right-details">
                                                        <div class="block-btn">
                                                            <a href="/{{$lang}}/dragro/farmers/{{$item->id}}/delete" class="btn-delete btn-transparent">
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
