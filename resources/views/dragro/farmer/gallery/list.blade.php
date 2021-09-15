@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-gallery">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.association.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="gallery-content">
                                    <div class="flex heading-top">
                                        <h3 class="m-0">
                                            Gallery
                                        </h3>
                                    </div>
                                    <div class="gallery-add-block">
                                        <div class="flex-center">
                                            <form action="/{{$lang}}/association/gallery" id="galleryForm" method="post" enctype="multipart/form-data">
                                                <div class="upload-files relative flex-center">
                                                    <input type="file" name="image" id="upload" upload-url="/association/gallery">
                                                    <div class="upload-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="28" viewBox="0 0 32 28">
                                                            <defs>
                                                                <style>.t{fill:#d0dadc;}.z{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;}</style>
                                                            </defs>
                                                            <g transform="translate(-1 -3)">
                                                                <path class="t" d="M33,27.889A3.015,3.015,0,0,1,30.091,31H3.909A3.015,3.015,0,0,1,1,27.889V10.778A3.015,3.015,0,0,1,3.909,7.667H9.727L12.636,3h8.727l2.909,4.667h5.818A3.015,3.015,0,0,1,33,10.778Z" transform="translate(0 0)"/>
                                                                <circle class="z" cx="6.41" cy="6.41" r="6.41" transform="translate(10.569 12.581)"/>
                                                            </g>
                                                        </svg>
                                                        @lang('vendor.drag_drop_image')
                                                        <span class="or">@lang('vendor.or')</span>
                                                        <span class="browse"> @lang('vendor.browse')</span>
                                                        {!! csrf_field() !!}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="block-list flex-wrap">
                                        @foreach($gallery as $item)
                                        <div class="block">
                                            <a href="{{$item->source}}" data-fancybox data-caption="Caption for single image">
                                                <div class="img-block relative">
                                                    <img src="{{$item->source}}" alt="news" class="img-responsive">
                                                    <a href="/{{$lang}}/association/gallery/{{$item->id}}/delete" class="btn-transparent"><i class="fal fa-times"></i></a>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                        {{--<div class="block">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=YzH9-glqEMo&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
                                                <div class="img-block">
                                                    <div class="video-content relative h-100">
                                                        <img src="https://img.youtube.com/vi/YzH9-glqEMo/sddefault.jpg" alt="" class="img-responsive">
                                                        <div class="overlay flex-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48.001" height="48.001" viewBox="0 0 48.001 48.001">
                                                                <defs><style>.e{fill:#fff;}</style></defs>
                                                                <path class="e" d="M-14692,48a23.845,23.845,0,0,1-9.342-1.886,23.923,23.923,0,0,1-7.63-5.144,23.915,23.915,0,0,1-5.144-7.629A23.845,23.845,0,0,1-14716,24a23.841,23.841,0,0,1,1.887-9.342,23.909,23.909,0,0,1,5.144-7.628,23.922,23.922,0,0,1,7.63-5.143A23.851,23.851,0,0,1-14692,0a23.851,23.851,0,0,1,9.342,1.886,23.915,23.915,0,0,1,7.629,5.143,23.944,23.944,0,0,1,5.143,7.628A23.862,23.862,0,0,1-14668,24a23.866,23.866,0,0,1-1.886,9.342,23.95,23.95,0,0,1-5.143,7.629,23.915,23.915,0,0,1-7.629,5.144A23.845,23.845,0,0,1-14692,48Zm-3-30.181a1,1,0,0,0-1,1V29.177a1,1,0,0,0,1,1,1,1,0,0,0,.536-.159l8.136-5.178a1,1,0,0,0,.463-.847.993.993,0,0,0-.463-.84l-8.136-5.178A1,1,0,0,0-14695,17.82Z" transform="translate(14716.001)"/></svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>--}}
                                    </div>
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
            document.getElementById("galleryForm").submit();
        };
    </script>
@endsection
