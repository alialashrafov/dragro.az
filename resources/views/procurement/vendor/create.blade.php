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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Company</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Individual</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="/vendor" method="post">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Description of vendor</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Vendor name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[name]" class="form-control input-border" placeholder="Enter vendor name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Type of business</p>
                                                                <div class="input-group">
                                                                    <input type="hidden" name="vendor[type]" value="1" />
                                                                    <select name="vendor[business_type]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="product">Product</option>
                                                                        <option value="service">Service</option>
                                                                        <option value="both">Both</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[tax_id]" class="form-control input-border" placeholder="Enter tax ID" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="input-title">Main activities</p>
                                                                <div class="input-group">
                                                                    <textarea class="form-control input-border" name="vendor[main_activities]"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 category-area">
                                                                <p class="input-title">Category</p>
                                                                <div class="input-group category-list">
                                                                    <select name="category[]" class="selectpicker form-control" title="Choose type">
                                                                        @foreach($vendorCategories as $item)
                                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="flex-start">
                                                        <button type="button" class="btn-transparent add-btn addCategory">
                                                            Add more categories
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-list-part">
                                                    <h4>Salesperson</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[responsible_name]" class="form-control input-border" placeholder="Enter person name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Surname</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[responsible_surname]" class="form-control input-border" placeholder="Enter surname" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Position</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[responsible_position]" class="form-control input-border" placeholder="Enter position" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Phone</p>
                                                                <div class="input-group">
                                                                    <input type="number" name="vendor[responsible_phone]" class="form-control input-border" placeholder="Enter phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Email</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[responsible_email]" class="form-control input-border" placeholder="Enter email" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-list-part">
                                                    <h4>Director</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[director]" class="form-control input-border" placeholder="Enter director name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Phone</p>
                                                                <div class="input-group">
                                                                    <input type="number" name="vendor[director_phone]" class="form-control input-border" placeholder="Enter phone" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Email</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[director_email]" class="form-control input-border" placeholder="Enter email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Contract person</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[contract_person]" class="form-control input-border" placeholder="Enter contract person">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @include('procurement.vendor.address-form', ['address' => null])
                                                <div class="form-list-part">
                                                    <h4>Bank account details</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[name]" class="form-control input-border" placeholder="Enter bank name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[tax_id]" class="form-control input-border" placeholder="Enter tax id" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank account</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[account]" class="form-control input-border" placeholder="Enter bank account" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Currency</p>
                                                                <div class="input-group">
                                                                    <select name="bank[currnecy]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="AZN">AZN</option>
                                                                        <option value="USD">USD</option>
                                                                        <option value="EUR">EUR</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">SWIFT</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[swift]" class="form-control input-border" placeholder="Enter swift" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank code</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[bank_code]" class="form-control input-border" placeholder="Enter bank code" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank CA</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[bank_ca]" class="form-control input-border" placeholder="Enter bank ca" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[accountant_name]" class="form-control input-border" placeholder="Enter accountant name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant phone</p>
                                                                <div class="input-group">
                                                                    <input type="number" name="bank[accountant_phone]" class="form-control input-border" placeholder="Enter accountant phone" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant email</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[accountant_email]" class="form-control input-border" placeholder="Enter accountant email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax regime</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[tax_regime]" class="form-control input-border" placeholder="Enter tax regime" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-btns">
                                                {!! csrf_field() !!}
                                                <button type="submit" class="btn btn-green">Submit</button>
                                                <a href="/vendor">
                                                    <button type="button" class="btn btn-cancel">Cancel</button>
                                                </a>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <form action="/vendor" method="post">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Description of vendor</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[name]" class="form-control input-border" placeholder="Enter person name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Surname</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[surname]" class="form-control input-border" placeholder="Enter surname" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Position</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[responsible_position]" class="form-control input-border" placeholder="Enter position" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Type of business</p>
                                                                <div class="input-group">
                                                                    <select name="vendor[business_type]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="product">Product</option>
                                                                        <option value="service">Service</option>
                                                                        <option value="both">Both</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[tax_id]" class="form-control input-border" placeholder="Enter tax ID" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="input-title">Main activities</p>
                                                                <div class="input-group">
                                                                    <textarea class="form-control input-border" name="vendor[main_activities]"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 category-area">
                                                                <p class="input-title">Category</p>
                                                                <div class="input-group category-list">
                                                                    <select name="category[]" class="selectpicker form-control" title="Choose type">
                                                                        @foreach($vendorCategories as $item)
                                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-start">
                                                        <button type="button" class="btn-transparent add-btn addCategory">
                                                            Add more categories
                                                        </button>
                                                    </div>
                                                </div>
                                                @include('procurement.vendor.address-form', ['address' => null])
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