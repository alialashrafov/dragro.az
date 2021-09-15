@extends('layouts.main')

@section('content')
<section class="associations-inner association-admin admin-blog">
    <div class="container">
        <div class="association-content">
            <div class="row relative">
                @include('dragro.association.navbar')
                <div class="col-md-9 col-xs-12">
                    <div class="block-right">
                        <div class="block-shadow">
                            <div class="flex heading-top">
                                <h3 class="m-0">
                                    <a href="/{{$lang}}/association/blog"> <i class="far fa-arrow-left"></i></a>
                                    @lang('vendor.new_blog')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/association/blog" method="post" enctype="multipart/form-data" class="m-0">
                                    <div class="form-list">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <label class="datepicker">
                                                    <span class="date"></span>
                                                    <input name="created_at" type="text"  class="form-control" id="date" placeholder=" ">
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <select class="selectpicker form-control " name="language" aria-label="lang" title="@lang('vendor.choose_language')">
                                                    @foreach(config('app.languages') as $language)
                                                    <option value="{{$language}}" @if($language == $lang) selected @endif>{{ucfirst($language)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="row">
                                                <div class="col-md-10 col-xs-12">
                                                    <label for="blogName" class="blog-title">
                                                        <input placeholder="@lang('vendor.add_blog_title')" name="title" class="form-control" id="blogName">
                                                    </label>
                                                </div>
                                                <div class="col-md-11 col-xs-12">
                                                    <label for="blog-text" class="blog-text">
                                                        <textarea  class="form-control" id="blog-text" name="content" placeholder="@lang('vendor.write_your_blog')"></textarea>
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
@endsection
