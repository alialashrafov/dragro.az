@extends('layouts.app')

@section('content')
    <div class="col-lg-10 no-padding pull-right">
        <div class="tenders">
            <div class="main-header">
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <div class="left-head">
                            <ul class="list-unstyled flex-start">
                                <li class="main-title">
                                    <p>Tenders</p>
                                </li>
                                <li>
                                    <p class="total-vendors-count">Total {{$tenders->total()}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-head">
                            <div class="right-head-content flex-end">
                                <div class="filter">
                                    <a href="/tender" class="btn btn-transparent">All tenders</a>
                                </div>
                                <form action="/tender/uploadExcel" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <label class="upload-file"> Excel
                                        <i class="far fa-upload"></i>
                                        <input class="btn" type="file" onchange="this.form.submit()" name="excel" />
                                    </label>
                                </form>

                                <div class="dropdown">
                                    <button class="btn btn-green dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Create tender
                                        <span class="far fa-angle-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="/tender/create?type=rfq">RFQ</a></li>
                                        <li><a href="/tender/create?type=rfp">RFP</a></li> 
                                    </ul>
                                </div>
                                <!--<div class="add-btn">
                                    <button class="btn btn-green"> <i class="fal fa-plus"></i> Add vendor</button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content-inner">
                    <div class="filter-list flex">
                        <a href="?status=1" class="filter-list-block flex">
                            <div class="filter-left flex-center">
                                <span class="filter-img flex-center"></span>
                                <p>Draft</p>
                            </div>
                            <span class="count">{{$statusesCount['draft']}}</span>
                        </a>
                        <a href="?status=3" class="filter-list-block flex">
                            <div class="filter-left flex-center">
                                <span class="filter-img flex-center approved"></span>
                                <p>Approved</p>
                            </div>
                            <span class="count">{{$statusesCount['approved']}}</span>
                        </a>
                        <a href="?status=2" class="filter-list-block flex">
                            <div class="filter-left flex-center">
                                <span class="filter-img flex-center progress-icon"></span>
                                <p>In Progress</p>
                            </div>
                            <span class="count">{{$statusesCount['progress']}}</span>
                        </a>
                        <a href="?status=4" class="filter-list-block flex">
                            <div class="filter-left flex-center">
                                <span class="filter-img flex-center cancelled"></span>
                                <p>Cancelled</p>
                            </div>
                            <span class="count">{{$statusesCount['cancelled']}}</span>
                        </a>
                        <a href="?status=5" class="filter-list-block flex">
                            <div class="filter-left flex-center">
                                <span class="filter-img flex-center closed"></span>
                                <p>Closed</p>
                            </div>
                            <span class="count">{{$statusesCount['closed']}}</span>
                        </a>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>TYPE</th>
                            <th>NUMBER</th>
                            <th>companies</th>
                            <th>STATUS</th>
                            <th>Deadline</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tenders as $tender)
                        <tr>
                            <td>
                                <p class="medium">@if($tender->type==0) rfq @else rfp @endif</p>
                            </td>
                            <td>
                                <p>{{$tender->id + 10000}}</p>
                            </td>
                            <td>
                                <p class="medium"> @if($tender->total_categories) {{$tender->total_categories}} @else 0 @endif</p>
                            </td>
                            <td>
                                <p class="{{$tender->status}}-text medium">{{$tender->status}}</p>
                            </td>
                            <td>
                                <div class="flex">
                                    <p>{{$tender->deadline}}</p>
                                    <a href="/tender/{{$tender->id}}" class="btn btn-details">
                                        Details
                                    </a>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="far fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <form method="POST" action="/tender/{{$tender->id}}" accept-charset="UTF-8">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {!! csrf_field() !!}
                                                    <button type="submit" class="btn-transparent dropdown-item">
                                                        Delete
                                                    </button>
                                                </form>
                                            </li>
                                           {{-- <li>
                                                <a class="dropdown-item" href="#">Edit</a>

                                            </li>--}}
                                            <li>
                                                <form method="POST" action="/tender/changeStatus/{{$tender->id}}" accept-charset="UTF-8">
                                                    <input type="hidden" name="status" value="4">
                                                    {!! csrf_field() !!}
                                                    <button type="submit" class="btn-transparent dropdown-item">
                                                        Cancel
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-block flex-end">
                        {{$tenders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection