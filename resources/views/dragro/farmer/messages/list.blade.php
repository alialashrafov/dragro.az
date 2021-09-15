@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-blog">
        <div class="container">
            <div class="association-content">
                <div class="row">
                    @include('dragro.farmer.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="messaging">
                                    <div class="inbox_msg">
                                        <div class="mesgs">
                                            <div class="msg_history">
                                                @foreach($messages as $msg)
                                                    @if($msg->user_id == auth()->id())
                                                        <div class="incoming_msg">
                                                            <div class="received_msg">
                                                                <div class="received_withd_msg">
                                                                    <h3>{{ $msg->name }}</h3>
                                                                    @if($msg->file_exist == 0)
                                                                        <p>{{$msg->message}}</p>
                                                                    @else
                                                                        <a href="{{$msg->message}}">File</a>
                                                                    @endif
                                                                    <span class="time_date"> {{$msg->created_at}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="outgoing_msg">
                                                            <div class="sent_msg">
                                                                <h3>Admin</h3>
                                                                <div class="sent-message-inn">
                                                                    @if($msg->file_exist == 0)
                                                                        <p>{{$msg->message}}</p>
                                                                    @else
                                                                        <a href="{{$msg->message}}">File</a>
                                                                    @endif
                                                                </div>
                                                                <span class="time_date"> {{$msg->created_at}}</span>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="type_msg">
                                                <form action="/{{$lang}}/farmer/messages" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="input_msg_write">
                                                        <input type="text" name="message" class="write_msg" placeholder="Type a message" />
                                                        <div class="send-block">
                                                            <div class="upload relative">
                                                                <input type="file" name="file" id="upload">
                                                                <input type="hidden" name="file_exist" value="0" id="file_exist">
                                                                <i class="fal fa-paperclip"></i>
                                                            </div>
                                                            <button type="submit" class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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
                </div>
            </div>
            </div>
{{--
            <div class="association-content feedbacks">
                <div class="row relative">
                    @include('cnfa.association.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.messages')</h3>
                                </div>
                                <div class="blog-list">
                                    @foreach($Messages as $item)
                                        <div class="blog-item">
                                            <div class="block-details flex-column">
                                                <div class="blog-details-top flex w-100">
                                                    <div class="item">
                                                        <p>@lang('vendor.full_name'):</p>
                                                        {{$item->name}} {{$item->surname}}
                                                    </div>
                                                    <div class="item">
                                                        <p>@lang('vendor.email'):</p>
                                                        {{$item->email}}
                                                    </div>
                                                    <div class="item">
                                                        <p>@lang('vendor.phone'):</p>
                                                        {{$item->phone}}
                                                    </div>
                                                </div>
                                                <div class="blog-details-bottom">
                                                    <div class="item">
                                                        <p>@lang('vendor.message'):</p>
                                                        {{$item->message}}
                                                    </div>
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
--}}
    </section>
@endsection
