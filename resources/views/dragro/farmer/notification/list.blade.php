@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin notification">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.notification')</h3>
                                </div>
                                <div class="blog-list">
{{--                                    {{ dd($notifications) }}--}}
                                    @foreach($notifications as $notification)
                                        <div class="blog-item flex-vertical-center">
                                            <div class="block-details flex">
                                                <div class="block-left-details">
                                                    <div class="block-text">
                                                        {{$notification->title}}
                                                    </div>
                                                    {{--<div class="block-title m-0">
                                                        <span class="date">02.02.2020</span>
                                                    </div>--}}
                                                </div>
                                                <div class="block-right-details flex-vertical-center">
                                                    <div class="notification-text">
                                                        {{$notification->text}}
                                                    </div>
                                                    <input type="hidden" id="{{ $notification->id }}" ttl="{{$notification->title}}" txt="{{$notification->text}}">
                                                    <button type="button" class="btn-transparent" data-toggle="modal" data-target="#myModal" onclick="modal({{$notification->id}})">
                                                        <i class="fal fa-eye"></i>
                                                    </button>
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
    </section>

    <div class="modal fade modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body" id="myModalBody">
                </div>
            </div>
        </div>
    </div>
    <script>
        function modal(id) {
            $('#myModalLabel').html($("input[id="+id+"]").attr('ttl'));
            $('#myModalBody').html($("input[id="+id+"]").attr('txt'));
            $.get('/az/farmer/notification/readNotification/' + id);
        }
    </script>
@endsection
