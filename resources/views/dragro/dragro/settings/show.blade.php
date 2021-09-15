@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin">
    <div class="container">
        <div class="association-content">
            <div class="row relative">
                @include('dragro.dragro.navbar')
                <div class="col-md-9">
                    <div class="block-right">
                        <div class="block-shadow">
                            <h3 class="m-0">Settings</h3>
                            <form action="/{{$lang}}/dragro/settings" method="post" enctype="multipart/form-data" class="m-0">
                                <div class="form-list">
                                    <div class="setting-top">

                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="as-name">
                                                    <span class="input-title">Address</span>
                                                    <input type="text" name="name" value="{{$settings->address}}" class="form-control input-bg" id="as-name">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-bottom">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="url">
                                                    <span class="input-title">Phone</span>
                                                    <input type="text" name="web_site" value="{{$settings->phone}}" class="form-control input-bg" id="url">
                                                </label>
                                            </div>
                                        </div>


                                        {!! csrf_field() !!}
                                        <div class="flex-center">
                                            <button type="submit" class="btn-effect">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
