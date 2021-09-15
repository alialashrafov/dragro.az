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
            <div class="content create-rfq">
                <div class="content-inner with-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/tender">Tenders</a></li>
                        <li class="active">Add tender</li>
                    </ol>
                    <div class="block">
                        <div class="stage-block flex-center">
                            <div class="stage-title">
                                Request for {{$type}}
                            </div>
                            <ul class="list-unstyled flex">
                                <li class="active">
                                    <span class="btn btn-green">1</span>
                                    <p>Vendor form</p>
                                </li>
                                <li>
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
                            <form action="/tender" method="post">
                                <div class="form-list">
                                    <p class="tender-title">Description</p>
                                    <div class="input-group">
                                        <textarea name="description" class="form-control input-border" rows="3"></textarea>
                                    </div>
                                    @include('procurement.tender.'.$type.'-form')
                                    <div class="flex-start">
                                        <button class="btn-transparent add-btn" type="button" id="addProductRow">
                                            <i class="fal fa-plus"></i>
                                            Add new one
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="input-title">Deadline</p>
                                            <div class="input-group">
                                                <input type="text" name="deadline" placeholder="mm.dd.yyyy" class="form-control input-border" id="datetimepicker1">
                                                <span class="calendar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15.556" viewBox="0 0 14 15.556">
                                                                <path id="calendar-range-outline" fill="#3f4254" d="M6.111 9.778h1.556v1.556H6.111V9.778M17 5.111V16a1.556 1.556 0 0 1-1.556 1.556H4.556A1.555 1.555 0 0 1 3 16V5.111a1.556 1.556 0 0 1 1.556-1.555h.778V2h1.555v1.556h6.222V2h1.556v1.556h.778A1.556 1.556 0 0 1 17 5.111M4.556 6.667h10.888V5.111H4.556v1.556M15.444 16V8.222H4.556V16h10.888m-3.111-4.667h1.556V9.778h-1.556v1.556m-3.111 0h1.556V9.778H9.222z" transform="translate(-3 -2)"/>
                                                            </svg>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="input-title">Confirmative person</p>
                                            <div class="input-group">
                                                <select class="selectpicker form-control" title="Choose person">
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="input-title">Which is important for you?</p>
                                            <div class="radio-check-list flex">
                                                <label class="radio-check">Price
                                                    <input type="radio" checked="checked" name="important" value="price">
                                                    <span class="radiomark flex-center"></span>
                                                </label>
                                                <label class="radio-check">Delivery
                                                    <input type="radio"  name="important" value="delivery">
                                                    <span class="radiomark flex-center"></span>
                                                </label>
                                                <label class="radio-check">Both
                                                    <input type="radio"  name="radio" value="both">
                                                    <span class="radiomark flex-center"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-btns">
                                        <input type="hidden" name="type" value="{{$type_id}}">
                                        {!! csrf_field() !!}
                                        <button type="submit" name="status" value="2" class="btn btn-green">
                                            Save & Continue
                                        </button>
                                        <button type="button" name="status" value="1" class="btn btn-green">
                                            Save as a draft
                                        </button>
                                        <a href="/tender" class="btn btn-cancel">
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