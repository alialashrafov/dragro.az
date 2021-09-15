@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin admin-plant">
    <div class="container">
        <div class="association-content">
            <div class="row relative">
                @include('dragro.dragro.navbar')
                <div class="col-md-9 col-xs-12">
                    <div class="block-right">
                        <div class="block-shadow">
                            <div class="flex heading-top">
                                <h3 class="m-0">
                                    <a href="/{{$lang}}/dragro/plants"> <i class="far fa-arrow-left"></i></a>
                                    @lang('vendor.plants')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/dragro/plants/{{$Plant->id}}" method="post" enctype="multipart/form-data" class="m-0">
                                    <input name="_method" type="hidden" value="PUT">
                                    <div class="form-list">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <select class="selectpicker form-control " name="type_id" aria-label="lang" >
                                                        @foreach($Types as $item)
                                                            <option value="{{$item->id}}" @if($Plant->id == $item->id) selected @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input name="price" value="{{$Plant->price}}" placeholder="@lang('vendor.price')" class="form-control">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input name="name" value="{{$Plant->name}}" placeholder="@lang('vendor.name')"  class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="text" name="yield" value="{{$Plant->yield}}" placeholder="@lang('vendor.yield')"  class="form-control">
                                                </label>
                                            </div>

                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="number" name="sales_price" value="{{$Plant->sales_price}}" placeholder="@lang('vendor.sales_price')"  class="form-control">
                                                </label>
                                            </div>

                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="file" name="file" class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="number" name="one_time_subsidy" value="{{ $Plant->one_time_subsidy }}" placeholder="@lang('vendor.one_time_subsidy')'" class="form-control">
                                                </label>
                                            </div>

                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="number" name="subsidy" value="{{ $Plant->subsidy }}" placeholder="@lang('vendor.one_time_subsidy')'" class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="addition">
                                            @foreach($expenses as $k => $expense)
                                                @if($k != 0)
                                                <div class="add-part">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-12">
                                                            <input type="hidden" name="id{{$k}}" value="{{$expense->id}}">
                                                            <label>
                                                                <input name="named{{$k}}" value="{{ $expense->named }}" placeholder="@lang('vendor.name')" class="form-control">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12">
                                                            <label>
                                                                <select class="selectpicker form-control " name="type_expense{{$k}}" aria-label="lang" >
                                                                    @foreach($types_expenses as $item)
                                                                        <option value="{{$item->id}}" {{$item->id == $expense->type_expense ? 'selected' : ''}} >{{$item->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12">
                                                            <label>
                                                                <input name="quantity{{$k}}" value="{{ $expense->quantity }}" placeholder="@lang('vendor.quantity')" class="form-control">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12">
                                                            <label>
                                                                <select class="selectpicker form-control " name="quantity_type{{$k}}" aria-label="lang" >
                                                                    <option value="1" {{$expense->quantity_type == 1 ? 'selected' : ''}}>kq</option>
                                                                    <option value="2" {{$expense->quantity_type == 2 ? 'selected' : ''}}>ton</option>
                                                                    <option value="3" {{$expense->quantity_type == 3 ? 'selected' : ''}}>ha</option>
                                                                    <option value="4" {{$expense->quantity_type == 4 ? 'selected' : ''}}>litr</option>
                                                                    <option value="5" {{$expense->quantity_type == 5 ? 'selected' : ''}}>ədəd</option>
                                                                    <option value="6" {{$expense->quantity_type == 6 ? 'selected' : ''}}>Dəfə</option>

                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12">
                                                            <label>
                                                                <input name="pricing{{$k}}" value="{{ $expense->pricing }}" placeholder="@lang('vendor.price')" class="form-control">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-block">
                                                        <button class="btn-remove btn-transparent" type="button">
                                                            <i class="fal fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                @else
                                                        <div class="add-part">
                                                            <div class="row">
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="hidden" name="id" value="{{$expense->id}}">
                                                                    <label>
                                                                        <input name="named" value="{{ $expense->named }}" placeholder="@lang('vendor.name')" class="form-control">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <label>
                                                                        <select class="selectpicker form-control " name="type_expense" aria-label="lang" >
                                                                            @foreach($types_expenses as $item)
                                                                                <option value="{{$item->id}}" {{$item->id == $expense->type_expense ? 'selected' : ''}}>{{$item->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-xs-12">
                                                                    <label>
                                                                        <input name="quantity" value="{{ $expense->quantity }}" placeholder="@lang('vendor.quantity')" class="form-control">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-xs-12">
                                                                    <label>
                                                                        <select class="selectpicker form-control " name="quantity_type" aria-label="lang" >
                                                                            <option value="1" {{$expense->quantity_type == 1 ? 'selected' : ''}}>kq</option>
                                                                            <option value="2" {{$expense->quantity_type == 2 ? 'selected' : ''}}>ton</option>
                                                                            <option value="3" {{$expense->quantity_type == 3 ? 'selected' : ''}}>ha</option>
                                                                            <option value="4" {{$expense->quantity_type == 4 ? 'selected' : ''}}>litr</option>
                                                                            <option value="5" {{$expense->quantity_type == 5 ? 'selected' : ''}}>ədəd</option>
                                                                            <option value="6" {{$expense->quantity_type == 6 ? 'selected' : ''}}>Dəfə</option>

                                                                        </select>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-xs-12">
                                                                    <label>
                                                                        <input name="pricing" value="{{ $expense->pricing }}" placeholder="@lang('vendor.price')" class="form-control">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="btn-block">
                                                                <button class="btn-add btn-transparent" type="button">
                                                                    <i class="fal fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <input type="hidden" value="{!! $k !!}" name="forback" id="forback" class="forback">
                                        {!! csrf_field() !!}
                                        <div class="btn-block flex-center">
                                            <button type="submit" class="btn-effect">@lang('vendor.save')</button>
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
</section>
<script>
        let number = 1;
        let k = {!! $k !!};
        if (k > 0) {
            number += k;
        }
</script>
@endsection
