@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
        <div class="main-header">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <div class="left-head">
                        <ul class="list-unstyled flex-start">
                            <li class="main-title">
                                <p>Tender</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-head">
                        <div class="right-head-content flex-end">
                            <div class="dropdown">
                                <button class="btn btn-disabled dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Create tender
                                    <span class="far fa-angle-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-inner with-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="/tender">Tenders</a></li>
                    <li class="active"></li>
                </ol>
                <div class="block">
                    <div class="vendor-details">
                        <div class="vendor-detail-top flex">
                            <div class="vendor-detail-content flex-start">
                                <h4>Request for quotation</h4>
                            </div>
                            <div class="detail-btns flex">
                                <span class="colored {{$tender->status_name}}-text {{$tender->status_name}}-icon">{{$tender->status_name}}</span>
                            </div>
                        </div>
                        <div class="vendor-detail-list">
                            <div class="detail-list-block">
                                <h4 class="detail-heading">Categories</h4>
                                <div class="detail-category-block">
                                    <span class="count-category">
                                        #1
                                    </span>
                                    <ul class="list-unstyled detail-title-list">
                                        <li class="detail-title">
                                            Code:
                                        </li>
                                        <li class="detail-title">
                                            Description:
                                        </li>
                                        <li class="detail-title">
                                            Category:
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled detail-text-list">
                                        <li class="detail-text">
                                            {{$tender->id + 10000}}
                                        </li>
                                        <li class="detail-text">
                                            @if($tender->description == '') Empty @else {{$tender->description}} @endif
                                        </li>
                                        <li class="detail-text">
                                            {{$tender->category_name}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{--<div class="detail-list-block">
                                <h4 class="detail-heading">Products</h4>
                                <table class="table products-table">
                                    <thead>
                                        <tr>
                                            <th class="th-count">Rank</th>
                                            <th>Product name</th>
                                            <th>Material code</th>
                                            <th>Part number</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($tenderProducts as $key=>$item)
                                        <tr>
                                            <td>#{{$key +1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->material_code}}</td>
                                            <td>{{$item->part_number}}</td>
                                            <td>{{$item->quantity}} {{$item->om}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="detail-inner">
                                            <span class="detail-title">Deadline:</span>
                                            <p class="detail-text">{{$tender->deadline}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="detail-inner">
                                            <span class="detail-title">
                                                Confirmative person:
                                            </span>
                                            <p class="detail-text">{{$tender->approval}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="detail-inner">
                                            <span class="detail-title">
                                                Which is important for you?
                                            </span>
                                            <p class="detail-text">{{$tender->important}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="detail-list-block">
                                <h4 class="detail-heading">Returning companies</h4>
                                @if($tender->type == 0)
                                <table class="table nested-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Product name</th>
                                            <th>Pr number</th>
                                            <th>Manufacturer</th>
                                            <th>Part number</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($productArr as $key=>$product)
                                        <tr>
                                            <td>
                                                {{$product[0]->material_code}}
                                            </td>
                                            <td>{{$product[0]->name}}</td>
                                            <td>{{$product[0]->pr_number}}</td>
                                            <td>{{$product[0]->manufacturer}}</td>
                                            <td>{{$product[0]->part_number}}</td>
                                            <td>
                                                <div class="flex">
                                                    <span class="cancelled-text"> {{$product[0]->quantity}} </span>
                                                    <a class="toggle-btn flex-center" role="button" data-toggle="collapse"  href="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapseOne"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="collapse-{{$key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <td colspan="6">
                                                <table class="table nested-inner-table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Vendor</th>
                                                            <th>Tax id</th>
                                                            <th>Price</th>
                                                            <th>Delivery days</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $index = 0; ?>
                                                        @foreach($product as $answer)
                                                            <?php $index++; ?>
                                                        <tr>
                                                            <td>#{{$index}}</td>
                                                            <td>{{$answer->vendor_name}}</td>
                                                            <td>{{$answer->vendor_tax_id}}</td>
                                                            <td>{{$answer->price}}</td>
                                                            <td>
                                                                <div class="flex">
                                                                    <span> {{$answer->delivery_days}}</span>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="far fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">Accept</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">Reject</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr class="separator"></tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                @else
                                    <table class="table nested-table">
                                        <thead>
                                        <tr>
                                            <th>Product description</th>
                                            <th>Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($productArr as $key=>$product)
                                            <tr>
                                                <td>
                                                    {{$product[0]->description}}
                                                </td>
                                                <td>
                                                    <div class="flex">
                                                        <span class="cancelled-text"> {{$product[0]->quantity}} </span>
                                                        <a class="toggle-btn flex-center" role="button" data-toggle="collapse"  href="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapseOne"></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="collapse-{{$key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <td colspan="6">
                                                    <table class="table nested-inner-table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Vendor</th>
                                                            <th>Tax id</th>
                                                            <th>Price</th>
                                                            <th>Delivery days</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $index = 0; ?>
                                                        @foreach($product as $answer)
                                                            <?php $index++; ?>
                                                            <tr>
                                                                <td>#{{$index}}</td>
                                                                <td>{{$answer->vendor_name}}</td>
                                                                <td>{{$answer->vendor_tax_id}}</td>
                                                                <td>{{$answer->price}}</td>
                                                                <td>
                                                                    <div class="flex">
                                                                        <span> {{$answer->delivery_days}}</span>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="far fa-ellipsis-v"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr class="separator"></tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection