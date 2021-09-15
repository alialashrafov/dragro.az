@extends('layouts.main')

@section('content')
    <section class="associations-inner association-admin admin-blog">
        <div class="container">
            <div class="association-content">
                <div class="row relative">
                    @include('dragro.dragro.navbar')
                    <div class="col-md-9 col-xs-12">
                        <div class="block-right">
                            <div class="block-shadow">
                                <div class="flex heading-top">
                                    <h3 class="m-0">
                                        <a href="/{{$lang}}/dragro/about"> <i class="far fa-arrow-left"></i></a>
                                        @lang('vendor.about')
                                    </h3>
                                </div>
                                <div class="add-new-blog">
                                    <form action="/{{$lang}}/dragro/about/{{$About->id}}" method="post" enctype="multipart/form-data" class="m-0">
                                        <div class="form-list">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12">
                                                    <input type="file"  class="form-control" name="file">
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="lang">
                                                        <select class="selectpicker form-control" aria-label="lang" id="langu" onChange="changeLanguage()">
                                                            @foreach(config('app.languages') as $language)
                                                                <option @if($lang == $language) selected @endif >{{ucfirst($language)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <div class="row">
                                                    <div class="col-md-10 col-xs-12">
                                                        <label for="blogName" class="blog-title">
                                                            <input placeholder="@lang('vendor.add_blog_title')" value="{{$About->title}}" name="title" class="form-control" id="blogName">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-11 col-xs-12">
                                                        <label for="blog-text" class="blog-text">
                                                            <textarea  class="form-control" id="blog-text" name="content" placeholder="@lang('vendor.write_your_blog')">{{$About->content}}</textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                                {!! csrf_field() !!}
                                                <div class="flex-center">
                                                    <button type="submit" class="btn-effect">@lang('vendor.save')</button>
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
        </div>
    </section>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
    <script>
        function changeLanguage(){
            let lang = document.getElementById("langu").value;
            let path = location.pathname
            let arr = path.split('/');
            arr[1] = lang.toLowerCase();
            window.location.href = arr.join('/');
            //window.location.href = '/'+lang.toLowerCase();
        }
    </script>
@endsection
