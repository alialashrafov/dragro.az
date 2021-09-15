@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-message">
        <div class="container">
            <div class="association-content">
                <div class="row">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">@lang('vendor.messages')</h3>
                                </div>
                                <div class="blog-list">
                                    @foreach($messages as $item)
                                    <div class="blog-item">
                                        <div class="block-details flex-column">
                                            <div class="blog-details-top flex w-100">
                                                <div class="item name">
                                                    {{$item->name}}
                                                </div>
                                                {{--<div class="item date">
                                                    02.02.2020
                                                </div>--}}
                                                <div class="item">
                                                    <a href="/{{$lang}}/dragro/messages/{{$item->id}}" class="see-comments"> <i class="fal fa-comments-alt"></i></a>
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
            </div>
    </section>
@endsection
