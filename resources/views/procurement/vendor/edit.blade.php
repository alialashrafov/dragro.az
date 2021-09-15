@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
        <div class="add-vendor">
            <div class="main-header">
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <div class="left-head">
                            <ul class="list-unstyled flex-start">
                                <li class="main-title">
                                    <p>Add new vendor</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-head">
                            <div class="right-head-content flex-end">
                                <div class="add-btn">
                                    <button class="btn btn-disabled"> <i class="fal fa-plus"></i> Add vendor</button>
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
                        <li class="active">Add vendor</li>
                    </ol>
                    <div class="block">
                        <div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="/vendor/{{$vendor->id}}" method="post">
                                        <input name="_method" type="hidden" value="PUT">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Description of vendor</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[name]" value="{{$vendor->name}}" class="form-control input-border" placeholder="Enter vendor name" >
                                                                </div>
                                                            </div>
                                                            @if($vendor->type == 0)
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Surname</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[surname]" value="{{$vendor->surname}}" class="form-control input-border" placeholder="Enter vendor name" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Position</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[responsible_position]" value="{{$vendor->responsible_position}}"  class="form-control input-border" placeholder="Enter position" >
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Type of business</p>
                                                                <div class="input-group">
                                                                    <select name="vendor[business_type]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="product" @if($vendor->business_type == 'product') selected @endif >Product</option>
                                                                        <option value="service" @if($vendor->business_type == 'service') selected @endif>Service</option>
                                                                        <option value="both" @if($vendor->business_type == 'both') selected @endif>Both</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[tax_id]" value="{{$vendor->tax_id}}"  class="form-control input-border" placeholder="Enter tax ID" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="input-title">Main activities</p>
                                                                <div class="input-group">
                                                                    <textarea class="form-control input-border" name="vendor[main_activities]">{{$vendor->main_activities}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 category-area">
                                                                <p class="input-title">Category</p>
                                                                @foreach($vendorsCategories as $key=>$cat)
                                                                <div class="input-group category-list">
                                                                    <select name="category[]" class="selectpicker form-control" title="Choose type">
                                                                        @foreach($vendorCategories as $item)
                                                                            <option value="{{$item->id}}" @if($cat->vendor_category_id == $item->id) selected @endif>{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if($key != 0 )
                                                                        <button type="button" class="btn btn-red">Sil</button>
                                                                    @endif
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-start">
                                                        <button type="button" class="btn-transparent add-btn addCategory">
                                                            Add more categories
                                                        </button>
                                                    </div>
                                                </div>
                                                @if($vendor->type == 1)
                                                    <div class="form-list-part">
                                                        <h4>Responsible person</h4>
                                                        <div class="additional-block">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Name</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[responsible_name]" value="{{$vendor->responsible_name}}"  class="form-control input-border" placeholder="Enter person name" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Surname</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[responsible_surname]" value="{{$vendor->responsible_surname}}" class="form-control input-border" placeholder="Enter surname" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Position</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[responsible_position]" value="{{$vendor->responsible_position}}"  class="form-control input-border" placeholder="Enter position" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Phone</p>
                                                                    <div class="input-group half-radius">
                                                                        <div class="input-group-btn">
                                                                            <select name="vendor[responsible_phone1]" class="selectpicker form-control">
                                                                                <option data-icon="">
                                                                                    +41
                                                                                </option>
                                                                                <option>Ketchup</option>
                                                                                <option>Barbecue</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" name="vendor[responsible_phone]" value="{{$vendor->responsible_phone}}" class="form-control input-border" placeholder="Enter phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="input-title">Email</p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="vendor[responsible_email]" value="{{$vendor->responsible_email}}" class="form-control input-border" placeholder="Enter email" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @include('procurement.vendor.address-form', ['address' =>$address])
                                            </div>
                                            <div class="submit-btns">
                                                {!! csrf_field() !!}
                                                <button type="submit" class="btn btn-green">Submit</button>
                                                <button type="button" class="btn btn-cancel">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection