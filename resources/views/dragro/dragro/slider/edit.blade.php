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
                                    <a href="/{{$lang}}/dragro/slider"> <i class="far fa-arrow-left"></i></a>
                                    @lang('vendor.edit_slider_item')
                                </h3>
                            </div>
                            <div class="add-new-blog">
                                <form action="/{{$lang}}/dragro/slider/{{$Slider->id}}" method="post" enctype="multipart/form-data" class="m-0">
                                    <input name="_method" type="hidden" value="PUT">
                                    <div class="form-list">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12">
                                                <label for="file">
                                                    <input type="file"  class="form-control" name="file" id="file">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            @foreach(config('app.languages') as $language)
                                                <div class="row">
                                                    <div class="col-md-10 col-xs-12">
                                                        <label for="sliderName" class="blog-title">
                                                            <?php $col = 'text_'.$language; ?>
                                                            <input placeholder="text {{$language}}" name="text_{{$language}}" value="{{$Slider->$col }}" class="form-control" id="sliderName">
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
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
