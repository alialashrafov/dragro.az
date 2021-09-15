@extends('layouts.main')

@section('content')
<section class="main">
    <div class="main-slider h-100">
        <div class="owl-carousel owl-theme h-100">
           @foreach($Slider as $item)
                <div class="item h-100">
                    <div class="img-block relative">
                        <img src="{{$item->image}}" alt="main" class="img-responsive">
                        <div class="container">
                            <div class="img-over flex-center">
                                <div class="main-heading white">
                                    {{$item->text}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="price-blocks">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <div class="advantages flex-center">
                   <div class="main-heading">
                       {{$settings->title}}
                   </div>
                   <div class="advantage-content">
                       {{$settings->content}}
                   </div>
               </div>
                <div class="block-list flex-wrap">
                    <div class="block bg-blue">
                        <div class="block-heading flex-center">Dr. Agro Start</div>
                        <div class="block-body">
                            <div class="block-top">
                                <div class="flex-center count-part">
                                    <div class="main-count">
                                        0
                                        <div class="right-count text-left">
                                            <sup class="azn">M</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="price-details">
                                                Büdcə hesablama
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Əkin sahəsi yaratma
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Əkin planlama
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Bildirişlər
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-bottom flex-center">
                                <a href="/{{$lang}}/register" class="btn-effect">Başla</a>
                            </div>
                        </div>
                    </div>
                    <div class="block bg-blue">
                        <div class="block-heading flex-center">Dr. Agro</div>
                        <div class="block-body">
                            <div class="block-top">
                                <div class="flex-center count-part">
                                    <div class="main-count">
                                        49.9
                                        <div class="right-count text-left">
                                            <sup class="azn">M</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="price-details">
                                                Aqronom dəstəyi - Aqronoma yaz (İstifadə müddəti - 3 ay )
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Torpaq analizi
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Əkin sahəsi yaratma - (3 bitki)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Büdcə hesablama - (3 bitki)
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-bottom flex-center">
                                <a href="#" class="btn-effect">Sifariş et</a>
                            </div>
                        </div>
                    </div>
                    <div class="block bg-blue">
                        <div class="block-heading flex-center">Dr. Agro +</div>
                        <div class="block-body">
                            <div class="block-top">
                                <div class="flex-center count-part">
                                    <div class="main-count">
                                        79.9
                                        <div class="right-count text-left">
                                            <sup class="azn">M</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="price-details">
                                                Aqronom dəstəyi - Aqronoma yaz (İstifadə müddəti - 6 ay )
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Torpaq analizi
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Fərdi gübrələmə planı
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Sahənin NDVI görüntüsü
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Əkin sahəsi yaratma - (5 bitki)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Büdcə hesablama - (5 bitki)
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-bottom flex-center">
                                <a href="#" class="btn-effect">Sifariş et</a>
                            </div>
                        </div>
                    </div>
                    <div class="block bg-blue">
                        <div class="block-heading flex-center">Dr. Agro Premium</div>
                        <div class="block-body">
                            <div class="block-top">
                                <div class="flex-center count-part">
                                    <div class="main-count">
                                        119.9
                                        <div class="right-count text-left">
                                            <sup class="azn">M</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="price-details">
                                                Aqronom dəstəyi - Aqronoma yaz (İstifadə müddəti - 12 ay )
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Torpaq analizi
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Su analizi
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Fərdi gübrələmə planı
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Fərdi dərmanlama planı
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Sahənin NDVI görüntüsü
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Əkin sahəsi yaratma - (7 bitki)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="price-details">
                                                Büdcə hesablama - (7 bitki)
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block-bottom flex-center">
                                <a href="#" class="btn-effect">Sifariş et</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- <div class="col-sm-10  col-sm-offset-1 col-xs-12">
                <div class="video-play">
                    <div class="video-content">
                        {!! $settings->youtube_index  !!}
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</section>
<section class="plantation">
    <div class="block-list">
        <div class="block-item">
            <div class="text-block flex">
                <h3>Məhsuldarlığınızı bizimlə artırın</h3>
                <p class="text-right">Dr Agro platformasından faydalanın: yeni əkinlər üçün büdcə hesablamaq, əkin sahəsi yaratma və planlama, torpaq analizi, aqronom dəstəyi, fərdi gübrələmə və dərmanlama planları, biznes planlar və sahədə görüləcək işlər üzrə bildiriş və xəbərdarlıqlar.</p>
                <div class="btn-block flex-end">
                    @if(!Auth::check())
                    <a href="/{{$lang}}/login" class="btn-effect"> Başla!</a>
                    @else
                    <a @if(Auth::user()->type == 'Farmer') href="/{{$lang}}/farmer/crops" @else href="/{{$lang}}/dragro/blog"  @endif class="btn-effect"> Başla!</a>
                    @endif
                </div>
            </div>
            <div class="img-block">
                <img src="{{asset('/assets/img/dayi slider.jpg')}}" alt="photo" class="img-responsive">
            </div>
        </div>
        <div class="block-item">
            <div class="img-block">
                <img src="{{asset('/assets/img/dr.agro sahada.JPG')}}" alt="photo" class="img-responsive">
            </div>
            <div class="text-block flex">
                <h3>Dr Agro platformasına qoşulun</h3>
                <p class="text-left">Azərbaycanda fermerlər üçün ən böyük platforma olan Dr Agroda kənd təsərrüfatı mütəxəssislərindən məsləhət alın</p>
                <div class="btn-block flex-start">
                    @if(!Auth::check())
                        <a href="/{{$lang}}/login" class="btn-effect"> Başla!</a>
                    @else
                        <a @if(Auth::user()->type == 'Farmer') href="/{{$lang}}/farmer/crops" @else href="/{{$lang}}/dragro/blog"  @endif class="btn-effect"> Başla!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="main-heading text-center">
                    @lang('vendor.blog')
                </div>
            </div>
        </div>
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
        <div class="all-news flex-center">
            <a href="/{{$lang}}/news">See all blogs <i class="far fa-angle-right"></i></a>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="social-media list-unstyled flex">
                    <li>
                        <a href="">
                            <img src="{{asset('/assets/img/app-store.png')}}" alt="photo" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{asset('/assets/img/google-play.png')}}" alt="photo" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
