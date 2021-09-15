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
                            <div class="flex">
                                <h3 class="m-0">@lang('vendor.profile')</h3>
                            </div>
                            <div class="form-list">
                                <form action="/{{$lang}}/farmer/profile" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="setting-bottom">
                                        @if(session()->has('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-8 col-xs-12">
                                                <label for="url">
                                                    <span class="input-title">@lang('vendor.name')</span>
                                                    <input type="text" name="name" value="{{$farmer->name}}" class="form-control input-bg" id="url">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label for="mobile">
                                                    <span class="input-title">@lang('vendor.email')</span>
                                                    <input type="text" name="email" value="{{$farmer->email}}" class="form-control input-bg" id="mobile">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label for="phone">
                                                    <span class="input-title">@lang('vendor.phone')</span>
                                                    <input type="text" name="phone" value="{{$farmer->phone}}" class="form-control input-bg" id="phone">
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
<script>
    document.getElementById("upload").onchange = function() {
        document.getElementById("imageForm").submit();
    };
</script>
@endsection
