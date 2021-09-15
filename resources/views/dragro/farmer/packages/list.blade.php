@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-package">
        <div class="container">
            <div class="association-content">
                <div class="row">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right price-blocks">
                            <div class="block-shadow">
                                <div class="block-list flex-wrap">
                                    <div class="block {{ $user->package == 2 ? "active" : "" }}">
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
                                    <div class="block {{ $user->package == 3 ? "active" : "" }}">
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
                                    <div class="block" {{ $user->package == 4 ? "active" : "" }}>
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
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
@endsection
