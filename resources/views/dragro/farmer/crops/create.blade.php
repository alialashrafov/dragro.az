@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin profile-admin">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.farmer.navbar')

                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <h3 class="m-0">@lang('vendor.crops')</h3>
                                <div class="form-list">
                                    <form action="/{{$lang}}/farmer/crops" method="post" enctype="multipart/form-data" class="m-0">
                                        <div class="setting-bottom">
                                            @if(session()->has('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('message') }}
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.regions')</span>
                                                        <select class="selectpicker form-control " name="region" aria-label="lang" title="@lang('vendor.regions')">
                                                            @foreach($regions as $key => $val)
                                                                <option value="{{$key}}">{{$val}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.city')</span>
                                                        <input type="text" name="city" class="form-control input-bg" id="mobile">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.address')</span>
                                                        <input type="text" name="address"  class="form-control input-bg">
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.plant_types')</span>
                                                        <select class="selectpicker form-control " name="crop_type" id="cropType" aria-label="lang" title="@lang('vendor.plant_types')">
                                                            @foreach($types as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.plantation_name')</span>
                                                        <select class="selectpicker form-control " name="crop" id="crops" aria-label="lang" title="@lang('vendor.plantation_name')">

                                                        </select>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.crop_type')</span>
                                                        <select class="selectpicker form-control " name="plantation_type" aria-label="lang" title="@lang('vendor.crop_type')">
                                                            @foreach($plantationTypes as $key => $val)
                                                                <option value="{{$key}}">{{$val}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>

                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.irrigation_types')</span>
                                                        <select class="selectpicker form-control " name="irrigation_type" aria-label="lang" title="@lang('vendor.irrigation_types')">
                                                            @foreach($typesOfIrrigations as $key => $val)
                                                                <option value="{{$key}}">{{$val}}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                             <div class="row">
                                                 <div class="col-md-4 col-xs-12">
                                                     <label>
                                                         <span class="input-title">@lang('vendor.soil_types')</span>
                                                         <select class="selectpicker form-control " name="soil_type" aria-label="lang" title="@lang('vendor.soil_types')">
                                                             @foreach($structureOfSoil as $key => $val)
                                                                 <option value="{{$key}}">{{$val}}</option>
                                                             @endforeach
                                                         </select>
                                                     </label>
                                                 </div>
                                                 <div class="col-md-4 col-xs-12">
                                                     <label>
                                                         <span class="input-title">@lang('vendor.plantation_size')</span>
                                                         <input type="number" step="0.01" name="size"  class="form-control input-bg">
                                                     </label>
                                                 </div>
                                             </div>
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <label>
                                                        <span class="input-title">@lang('vendor.soil_analysis')</span>
                                                        <input type="file" name="soil_analyses"  class="form-control input-bg">
                                                    </label>
                                                </div>
                                            </div>
                                            {!! csrf_field() !!}
                                            <div class="flex-center">
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
    {{--<script>
        document.getElementById("upload").onchange = function() {
            document.getElementById("imageForm").submit();
        };
    </script>--}}
@endsection
