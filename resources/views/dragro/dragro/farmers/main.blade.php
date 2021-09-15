<div class="block-right">
    <div class="block-shadow">

        <div class="blog-list">
            <div class="table-list-heading">
                <ul class="list-unstyled flex table-list m-0">
                    <li>@lang('vendor.regions')</li>
                    <li>@lang('vendor.crops')</li>
                    <li>@lang('vendor.plantation_types')</li>
                </ul>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($data as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <ul class="list-unstyled flex table-list m-0">
                                <li>{{$item -> region}}</li>
                                <li>{{$item -> crop}}</li>
                                <li>
                                    <div class="flex">
                                        {{$item -> plantation_type}}
                                        <a role="button" data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                                        <td>{{$item -> city }}</td>
                                        <td>{{$item -> address}}</td>
                                        <td>{{$item -> size }}</td>
                                        <td>{{$item -> irrigation_type}}</td>
                                        <td>{{$item -> soil_type }}</td>
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

