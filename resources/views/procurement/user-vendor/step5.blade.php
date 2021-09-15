<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Procurement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<section class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 no-padding pull-right">
                <div class="add-tender add-vendor">
                    <div class="content create-rfq">
                        <div class="content-inner">
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
                                                </ul>
                                                <ul class="list-unstyled detail-text-list">
                                                    <li class="detail-text">
                                                        {{$vendor->business_type}}
                                                    </li>
                                                    <li class="detail-text">
                                                        {{$vendor->main_activities}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="detail-list-block">
                                            <h4 class="detail-heading">Director</h4>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Name:</span>
                                                        <p class="detail-text">{{$vendor->director}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Phone:</span>
                                                        <p class="detail-text">{{$vendor->director_phone}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Email:</span>
                                                        <p class="detail-text">{{$vendor->director_email}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Contract person:</span>
                                                        <p class="detail-text">{{$vendor->contract_person}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if($address)
                                            <div class="detail-list-block">
                                                <h4 class="detail-heading">Addresses</h4>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="detail-inner">
                                                            <span class="detail-title">Country:</span>
                                                            <p class="detail-text">{{$address->country}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="detail-inner">
                                                            <span class="detail-title">City:</span>
                                                            <p class="detail-text">{{$address->city}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="detail-inner">
                                                            <span class="detail-title">Street:</span>
                                                            <p class="detail-text">{{$address->street}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="detail-inner">
                                                            <span class="detail-title">Phone:</span>
                                                            <p class="detail-text">{{$address->phone}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="detail-inner">
                                                            <span class="detail-title">Email:</span>
                                                            <p class="detail-text">{{$address->email}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="detail-list-block">
                                            <h4 class="detail-heading">Salesperson</h4>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Name:</span>
                                                        <p class="detail-text">{{$vendor->responsible_name}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Surname:</span>
                                                        <p class="detail-text">{{$vendor->responsible_surname}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Position:</span>
                                                        <p class="detail-text">{{$vendor->responsible_position}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Phone:</span>
                                                        <p class="detail-text">{{$vendor->responsible_phone}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Email:</span>
                                                        <p class="detail-text">{{$vendor->responsible_email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-list-block">
                                            <h4 class="detail-heading">Bank account details</h4>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Bank name:</span>
                                                        <p class="detail-text">{{$bank->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Tax ID:</span>
                                                        <p class="detail-text">{{$bank->tax_id}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Bank account:</span>
                                                        <p class="detail-text">{{$bank->account}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Currency:</span>
                                                        <p class="detail-text">{{$bank->currnecy}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">SWIFT:</span>
                                                        <p class="detail-text">{{$bank->swift}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Bank code:</span>
                                                        <p class="detail-text">{{$bank->bank_code}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Bank CA:</span>
                                                        <p class="detail-text">{{$bank->bank_ca}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Accountant name:</span>
                                                        <p class="detail-text">{{$bank->accountant_name}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Accountant phone:</span>
                                                        <p class="detail-text">{{$bank->accountant_phone}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="detail-inner">
                                                        <span class="detail-title">Accountant email:</span>
                                                        <p class="detail-text">{{$bank->accountant_email}}</p>
                                                    </div>
                                                </div>
                                                <div class="detail-inner">
                                                    <span class="detail-title">Tax regime:</span>
                                                    <p class="detail-text">{{$bank->tax_regime}}</p>
                                                </div>
                                            </div>
                                        </div>
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
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-select.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>

