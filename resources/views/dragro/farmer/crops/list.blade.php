@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-crop">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.crops')</h3>
                                    @if($canAddNewCrop)
                                        <a href="/{{$lang}}/farmer/crops/create" class="btn-border">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                             viewBox="0 0 17 17">
                                            <defs>
                                                <style>.d {
                                                        fill: #fff;
                                                    }

                                                    .d, .e {
                                                        stroke: #01B140;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                    }

                                                    .e {
                                                        fill: none;
                                                    }</style>
                                            </defs>
                                            <g transform="translate(-1.5 -1.901)">
                                                <circle class="d" cx="8" cy="8" r="8" transform="translate(2 2.401)"/>
                                                <line class="e" y2="6" transform="translate(10 7.401)"/>
                                                <line class="e" x2="6" transform="translate(7 10.401)"/>
                                            </g>
                                        </svg>
                                        @lang('vendor.add_new')
                                    </a>
                                    @else
                                        <span class="limit-notification">
                                            Əkin əlavə etmə limitiniz dolub
                                        </span>
                                    @endif
                                </div>
                                <div class="blog-list">
                                    <div class="table-list-heading">
                                        <ul class="list-unstyled flex table-list m-0">
                                            <li>@lang('vendor.regions')</li>
                                            <li>@lang('vendor.crops')</li>
                                            <li>@lang('vendor.plan')</li>
                                            <li>@lang('vendor.plantation_types')</li>
                                        </ul>
                                    </div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        @foreach($plantations as $item)
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading-{{$item->id}}">
                                                    <ul class="list-unstyled flex table-list m-0">
                                                        <li>{{$regions[$item->region]}}</li>
                                                        <li>{{$item->crop_name}}</li>
                                                        <li>
                                                            <a href="{{$item->plan_doc}}" class="download-icon">
                                                                <i class="fal fa-download"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="flex">
                                                                {{$types[$item->type_id - 1]->name}}
                                                                <a role="button" data-toggle="collapse"
                                                                   class="collapsed collapse-icon" data-parent="#accordion"
                                                                   href="#collapse-{{$item->id}}" aria-expanded="true"
                                                                   aria-controls="collapse-{{$item->id}}"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="collapse-{{$item->id}}" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="heading-{{$item->id}}">
                                                    <div class="panel-body">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>@lang('vendor.city')</th>
                                                                <th>@lang('vendor.address')</th>
                                                                <th>@lang('vendor.plantation_size')</th>
                                                                <th>@lang('vendor.irrigation_types')</th>
                                                                <th>@lang('vendor.soil_types')</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>{{$item->city }}</td>
                                                                <td>{{$item->address}}</td>
                                                                <td>{{$item->size }} ha</td>
                                                                <td>{{$typesOfIrrigations[$item->irrigation_type]}}</td>
                                                                <td>{{$structureOfSoil[$item->soil_type] }}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
