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
                                <form action="/{{$lang}}/dragro/plants" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="form-list">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <select class="selectpicker form-control " name="type_id" aria-label="lang" >
                                                        @foreach($Types as $item)
                                                            <option value="{{$item->id}}" >{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input name="price" placeholder="@lang('vendor.price')" class="form-control">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="text" name="yield" placeholder="@lang('vendor.yield')" class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input name="name" placeholder="@lang('vendor.name')"  class="form-control">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="file" name="file" class="form-control">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="number" name="sales_price" placeholder="@lang('vendor.sales_price')" class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input type="number" name="one_time_subsidy" placeholder="@lang('vendor.one_time_subsidy')" class="form-control">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label>
                                                    <input name="subsidy" placeholder="@lang('vendor.subsidy')" class="form-control">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="addition">
                                            <h5>Xərclər barədə məlumat</h5>
                                            <div class="add-part">
                                                <div class="row">
                                                    <div class="col-md-3 col-xs-12">
                                                        <label>
                                                            <input name="named" placeholder="@lang('vendor.name')" class="form-control">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12">
                                                        <label>
                                                            <select class="selectpicker form-control " name="type_expense" aria-label="lang" >
                                                                @foreach($types_expenses as $item)
                                                                    <option value="{{$item->id}}" >{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 col-xs-12">
                                                        <label>
                                                            <input name="quantity" placeholder="@lang('vendor.quantity')" class="form-control">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 col-xs-12">
                                                        <label>
                                                            <select class="selectpicker form-control " name="quantity_type" aria-label="lang">
                                                                <option value="1">kg</option>
                                                                <option value="2">ton</option>
                                                                <option value="3">ha</option>
                                                                <option value="4">litr</option>
                                                                <option value="5">ədəd</option>
                                                                <option value="6">Dəfə</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 col-xs-12">
                                                        <label>
                                                            <input name="pricing" placeholder="@lang('vendor.price')" class="form-control">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="btn-block">
                                                    <button class="btn-add btn-transparent" type="button">
                                                        <i class="fal fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        {!! csrf_field() !!}
                                        <input type="hidden" value="" name="forback" class="forback">
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
    let number = 0;
</script>
@endsection
