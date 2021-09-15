@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-farmer">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="nav-list">
                            <ul class="nav nav-tabs flex-start">
                                <li @if($page == 'products') class="active" @endif>
                                    <a href="/{{$lang}}/dragro/farmers/{{$Farmer->user_id}}?page=products">
                                        <span>@lang('vendor.products')</span>
                                    </a>
                                </li>
                                <li @if($page == 'services') class="active" @endif>
                                    <a href="/{{$lang}}/dragro/farmers/{{$Farmer->user_id}}?page=services">
                                        <span>@lang('vendor.services')</span>
                                    </a>
                                </li>
                                <li @if($page == 'crops') class="active" @endif>
                                    <a href="/{{$lang}}/dragro/farmers/{{$Farmer->user_id}}?page=crops">
                                        <span>@lang('vendor.crops')</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @if($page == 'products')
                            @include('dragro.dragro.farmers.products')
                        @elseif($page == 'services')
                            @include('dragro.dragro.farmers.services')
                        @else
                            @include('dragro.dragro.farmers.crops')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
