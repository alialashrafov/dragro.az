@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-product">
        <div class="container">
            <div class="association-content admin-calculate">
                <div class="row relative">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="heading-top">
                                    <h3 class="m-0">@lang('vendor.budget_calculator_ha')</h3>
                                </div>
                                <div class="form-list">
                                    <div class="setting-top">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <label>
                                                    <span class="input-title">@lang('vendor.plantation_types')</span>
                                                    <select class="selectpicker form-control " name="crop_type"
                                                            id="cropTypeCalc" aria-label="lang"
                                                            title="@lang('vendor.plantation_types')">
                                                        @foreach($types as $type)
                                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label>
                                                    <span class="input-title">@lang('vendor.plantation_name')</span>
                                                    <select class="selectpicker form-control " name="crop" id="crops"
                                                            aria-label="lang" title="@lang('vendor.plantation_name')">
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="block-inn">
                                            <h4>@lang('vendor.material_expense')</h4>
                                            <div id="materialExpenses" class="addition">

                                            </div>
                                        </div>
                                        <div class="block-inn">
                                            <h4>@lang('vendor.technic_expense')</h4>
                                            <div id="technicalExpenses" class="addition">

                                            </div>
                                        </div>
                                        <div class="block-inn">
                                            <h4>@lang('vendor.employee_expense')</h4>
                                            <div id="workerExpenses" class="addition">

                                            </div>
                                        </div>
                                        <div class="block-inn">
                                            <h4>@lang('vendor.other_expenses')</h4>
                                            <div id="otherExpenses" class="addition">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-12">
                                                <div class="block-inn">
                                                    <h4>@lang('vendor.subsidy')</h4>
                                                    <div class="addition">
                                                        <div class="one_time_subsidy">
                                                            <label>
                                                                <input type="number" id="subsidy"
                                                                       class="form-control input-bg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="block-inn">
                                                    <h4>Məhsuldarlıq (TON)</h4>
                                                    <div class="addition">
                                                        <div class="guess_yield">
                                                            <label>
                                                                <input type="number" id="guess_yield"
                                                                       class="form-control input-bg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="block-inn">
                                                    <h4>Satış (AZN)</h4>
                                                    <div class="addition">
                                                        <div class="guess_price">
                                                            <label>
                                                                <input type="number" id="guess_price"
                                                                       class="form-control input-bg">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div class="block-inn">
                                                    <h4>Satışdan gəlir</h4>
                                                    <div class="addition">
                                                        <label>
                                                            <input type="number" id="income"
                                                                   class="form-control input-bg">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total-calculate">
                                            <div class="btn-block flex-center ">
                                                <button type="button" class="btn-effect">@lang('vendor.calculate')</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-bottom">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="note">
                                                    <span id="qeyd">Qeyd: </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="total-block hidden-xs">
                                                    <div class="total-calculate">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>@lang('vendor.sales_earning') </th>
                                                                <th>@lang('vendor.subsidy_earning') </th>
                                                                <th>@lang('vendor.expenses') </th>
                                                                <th>@lang('vendor.total_sum') </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span id="sales_earning"></span>
                                                                </td>
                                                                <td>
                                                                    <span id="subsidy_earning"></span>
                                                                </td>
                                                                <td>
                                                                    <span id="expenses"></span>
                                                                </td>
                                                                <td>
                                                                    <span id="total_sum"></span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="total-block hidden-sm hidden-md hidden-lg">
                                                    <div class="total-calculate">
                                                        <div class="card-block">
                                                            <ul class="list-unstyled card-title">
                                                                <li>
                                                                    @lang('vendor.sales_earning')
                                                                </li>
                                                                <li>
                                                                    @lang('vendor.subsidy_earning')
                                                                </li>
                                                                <li>
                                                                    @lang('vendor.expenses')
                                                                </li>
                                                                <li>
                                                                    @lang('vendor.total_sum')
                                                                </li>
                                                            </ul>
                                                            <ul class="list-unstyled card-text">
                                                                <li>
                                                                    <span id="sales_earning"></span>
                                                                </li>
                                                                <li>
                                                                    <span id="subsidy_earning"></span>
                                                                </li>
                                                                <li>
                                                                    <span id="expenses"></span>
                                                                </li>
                                                                <li>
                                                                    <span id="total_sum"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
@endsection
