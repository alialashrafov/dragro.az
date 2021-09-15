@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
        <div class="vendor-details">
            <div class="main-header">
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <div class="left-head">
                            <ul class="list-unstyled flex-start">
                                <li class="main-title">
                                    <p>Vendor</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-head">
                            <div class="right-head-content flex-end">
                                <div class="add-btn">
                                    <a href="/vendor/create" class="btn btn-disabled"> <i class="fal fa-plus"></i> Add vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content-inner with-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/vendor">Vendors</a></li>
                        <li class="active">{{ $vendor->name }}</li>
                    </ol>
                    <div class="block">
                        <div class="vendor-details">
                            <div class="vendor-detail-top flex">
                                <div class="vendor-detail-content flex-start">
                                    <div class="img-circle">
                                        <span>{{strtoupper(substr($vendor->name, 0, 1))}}</span>
                                    </div>
                                    <div class="vendor-detail">
                                        <p class="name">{{ $vendor->name }}</p>
                                        <p>Tax ID: <span> {{ $vendor->tax_id }}</span></p>
                                    </div>
                                </div>
                                <div class="detail-btns flex">
                                    <span class="type-of-business">@if($vendor->type == '1') Company @else Individual @endif</span>
                                    <a href="/vendor/{{$vendor->id}}/edit" class="btn btn-transparent">
                                            <span class="btn btn-edit btn-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.998" viewBox="0 0 12 11.998">
                                                    <path id="pencil-outline" fill="#b5b5c3" d="M10.372 7l.628.626-6.054 6.039h-.613v-.613L10.372 7m2.4-4a.667.667 0 0 0-.467.193l-1.22 1.22 2.5 2.5 1.22-1.22a.664.664 0 0 0 0-.94l-1.56-1.56A.655.655 0 0 0 12.772 3m-2.4 2.126L3 12.5V15h2.5l7.372-7.372z" transform="translate(-3 -3)"/>
                                                </svg>
                                            </span>
                                        Edit
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-detail-list">
                                <div class="detail-list-block">
                                    <h4 class="detail-heading">Activities</h4>
                                    <div class="detail-category-block">
                                            {{--<span class="count-category">

                                            </span>--}}
                                        <ul class="list-unstyled detail-title-list">
                                            <li class="detail-title">
                                                Type of business:
                                            </li>
                                            <li class="detail-title">
                                                Main activities:
                                            </li>
                                            <li class="detail-title">
                                                Categories:
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled detail-text-list">
                                            <li class="detail-text">
                                                {{$vendor->business_type}}
                                            </li>
                                            <li class="detail-text">
                                                {{$vendor->main_activities}}
                                            </li>
                                            @foreach($vendorCategories as $cat)
                                                <li class="detail-text">
                                                    {{$cat->name}}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="detail-list-block">
                                    <h4 class="detail-heading">Responsible person</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Name:</span>
                                                <p class="detail-text">{{$vendor->responsible_name}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Surname:</span>
                                                <p class="detail-text">{{$vendor->responsible_surname}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Position:</span>
                                                <p class="detail-text">{{$vendor->responsible_position}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Phone:</span>
                                                <p class="detail-text">{{$vendor->responsible_phone}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Email:</span>
                                                <p class="detail-text">{{$vendor->responsible_email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($address)
                                <div class="detail-list-block">
                                    <h4 class="detail-heading">Addresses</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Country:</span>
                                                <p class="detail-text">{{$address->country}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">City:</span>
                                                <p class="detail-text">{{$address->city}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Street:</span>
                                                <p class="detail-text">{{$address->street}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Phone:</span>
                                                <p class="detail-text">{{$address->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Email:</span>
                                                <p class="detail-text">{{$address->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                {{--<div class="detail-list-block">
                                    <h4 class="detail-heading">Bank details</h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Bank name:</span>
                                                <p class="detail-text">Bank of America</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Bank code:</span>
                                                <p class="detail-text">03478434</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Account number:</span>
                                                <p class="detail-text">2738476289347629834</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">Routing number:</span>
                                                <p class="detail-text">4093834</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="detail-inner">
                                                <span class="detail-title">SWIFT:</span>
                                                <p class="detail-text">982347</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection