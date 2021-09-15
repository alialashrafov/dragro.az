@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
    <div class="add-tender add-vendor">
        <div class="main-header">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <div class="left-head">
                        <ul class="list-unstyled flex-start">
                            <li class="main-title">
                                <p>Add new tender</p>
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
                    <li><a href="/tender">Tenders</a></li>
                    <li class="active">Add tender</li>
                </ol>
                <div class="block">
                    <div class="stage-block flex-center">
                        <div class="stage-title">
                            Request for quotation
                        </div>
                        <ul class="list-unstyled flex">
                            <li class="active">
                                <span class="btn btn-green">1</span>
                                <p>Vendor form</p>
                            </li>
                            <li class="active">
                                <span class="btn btn-green">2</span>
                                <p>Send to companies</p>
                            </li>
                            <li>
                                <span class="btn btn-green">3</span>
                                <p>Success</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tender-detail-block">
                        <form action="/tender/vendors/{{$tender->id}}" method="post">
                            <div class="form-list">
                                <div class="flex-center detail-text-block">
                                    <p class="tender-title">Send created tender to the companies</p>
                                    <span>You can choose more than one company</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="input-group">
                                            <select name="vendors[]" multiple class="selectpicker form-control">
                                                @foreach($vendors as $vendor)
                                                    <option selected value="{{$vendor->id}}">{{$vendor->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btns">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-green">
                                        Save & Continue
                                    </button>
                                    <a href="/tender" type="button" class="btn btn-cancel">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection