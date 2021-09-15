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
                                                    <input type="file" name="image" id="upload" upload-url="/{{$lang}}/association/gallery">
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
                                                        Drag drop image and <br>video here
                                                        <span class="or">or</span>
                                                        <span class="browse"> Browse</span>
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
                                                <div class="img-block">
                                                    <img src="{{$item->source}}" alt="news" class="img-responsive">
                                                </div>
                                            </a>
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
    <script>
        document.getElementById("upload").onchange = function() {
            document.getElementById("galleryForm").submit();
        };
    </script>
@endsection
