@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
        <div class="main-header">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <div class="left-head">
                        <ul class="list-unstyled flex-start">
                            <li class="main-title">
                                <p>Vendors</p>
                            </li>
                            <li>
                                <p class="total-vendors-count">Total {{$Vendors->total()}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-head">
                        <div class="right-head-content flex-end">
                            <div class="filter">
                                <button class="btn-transparent">Filter vendors</button>
                            </div>
                           {{-- <div class="add-btn">
                                <a href="/vendor/import" class="btn btn-green"> <i class="fal fa-plus"></i> Import </a>
                            </div>--}}
                            <div class="add-btn">
                                <a href="/vendor/create" class="btn btn-green"> <i class="fal fa-plus"></i> Add vendor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-inner">
                <div class="block">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type of business</th>
                            <th>Registration</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Vendors as $key=>$item)
                            <?php $colors = array('#9022c3','#f2a845', '#F64468', '#072F5E'); ?>
                        <tr>
                            <td>
                                <a href="/vendor/{{$item->id}}">
                                    <div class="vendor-detail-content flex-start">
                                        <div class="img-circle" style="background-color: {{$colors[$key % count($colors)]}}">
                                            <span>{{strtoupper(substr($item->name, 0, 1))}}</span>
                                        </div>
                                        <div class="vendor-detail">
                                            <p class="name">{{$item->name}}</p>
                                            <p>Tax ID: <span> {{$item->tax_id}}</span></p>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <span class="type-of-business">{{$item->business_type}}</span>
                            </td>
                            <td>
                                <div class="flex">
                                    @if($item->type == '1') Company @else Individual @endif
                                    <div class="btns">
                                        <a href="/vendor/{{$item->id}}/edit" class="btn btn-edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.998" viewBox="0 0 12 11.998">
                                                <path id="pencil-outline" fill="#b5b5c3" d="M10.372 7l.628.626-6.054 6.039h-.613v-.613L10.372 7m2.4-4a.667.667 0 0 0-.467.193l-1.22 1.22 2.5 2.5 1.22-1.22a.664.664 0 0 0 0-.94l-1.56-1.56A.655.655 0 0 0 12.772 3m-2.4 2.126L3 12.5V15h2.5l7.372-7.372z" transform="translate(-3 -3)"/>
                                            </svg>
                                        </a>
                                        <form method="POST" action="/vendor/{{$item->id}}" accept-charset="UTF-8" style="display:inline">
                                            <input name="_method" type="hidden" value="DELETE">
                                            {!! csrf_field() !!}
                                            <button type="submit" class="btn btn-delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9.333" height="12" viewBox="0 0 9.333 12">
                                                    <path id="delete-outline" fill="#b5b5c3" d="M5.667 13.667A1.333 1.333 0 0 0 7 15h5.333a1.333 1.333 0 0 0 1.333-1.333v-8h-8v8M7 7h5.333v6.667H7V7m5-3.333L11.333 3H8l-.667.667H5V5h9.333V3.667z" transform="translate(-5 -3)"/>
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-block flex-end">
                        {{$Vendors->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection