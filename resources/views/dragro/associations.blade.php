@extends('layouts.main')

@section('content')
    <section class="associations">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center web">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">@lang('vendor.associations')</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-heading text-center">
                        @lang('vendor.associations')
                    </div>
                </div>
            </div>
            <div class="association-content">
                <div class="block-list flex-wrap">
                    @foreach($associations as $association)
                    <div class="block">
                        <a href="/{{$lang}}/association/{{$association->id}}">
                            <div class="img-block">

                                <img @if(!$association->image || strlen($association->image) < 5) src="/assets/img/empty.jpg" @else src="{{$association->image}}" @endif alt="associations" class="img-responsive">
                            </div>
                            <div class="block-details">
                                <div class="block-text">
                                    {{$association->association_name}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <nav aria-label="Page navigation" class="flex-center">
                        {{$associations->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
