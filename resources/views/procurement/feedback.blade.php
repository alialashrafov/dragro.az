<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Procurement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<section class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 no-padding pull-right">
                <div class="tender-details vendor-details">
                    <div class="content">
                        <div class="content-inner with-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Tenders</a></li>
                                <li class="active">{{$vendor->name}}</li>
                            </ol>
                            <div class="block customer-rfq">
                                <div class="vendor-details">
                                    <div class="vendor-detail-top flex">
                                        <div class="vendor-detail-content flex-start">
                                            <h4>Request for @if($tender->type == 1) proposal @else quotation @endif</h4>
                                        </div>
                                    </div>
                                    <div class="vendor-detail-list">
                                        <div class="detail-list-block">
                                            <h4 class="detail-heading">Details</h4>
                                            <div class="detail-category-block">
                                            <span class="count-category">
                                                #1
                                            </span>
                                                <ul class="list-unstyled detail-title-list">
                                                    <li class="detail-title">
                                                        @if($tender->type == 1) RFP @else RFQ @endif number:
                                                    </li>
                                                    <li class="detail-title">
                                                        Description:
                                                    </li>
                                                    <li class="detail-title">
                                                        Category:
                                                    </li>
                                                    <li class="detail-title">
                                                        PR number:
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled detail-text-list">
                                                    <li class="detail-text">
                                                        {{$tender->id + 10000}}
                                                    </li>
                                                    <li class="detail-text">
                                                        {{$tender->description}}
                                                    </li>
                                                    <li class="detail-text">
                                                        {{$tender->category_name}}
                                                    </li>
                                                    <li class="detail-text">
                                                        {{$tender->po_number}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="detail-list-block">
                                            <h4 class="detail-heading">Products & Services</h4>
                                            <form action="/feedback/{{$vendor->id}}/{{$tender->id}}" method="post">
                                                <div class="form-list">
                                                    @if($tender->type == 1)
                                                        @include('procurement.rfp-feedback')
                                                    @else
                                                        @include('procurement.frq-feedback')
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="detail-inner">
                                                                <span class="detail-title">Deadline:</span>
                                                                <p class="detail-text">{{$tender->deadline}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="detail-inner">
                                                                <span class="detail-title">
                                                                    Which is important for you?
                                                                </span>
                                                                <p class="detail-text">{{$tender->important}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <!--  <div class="comment-block flex-start">
                                                                  <div class="img-block">
                                                                      <img src="" alt="" class="img-responsive">
                                                                  </div>
                                                                  <div class="input-group">
                                                                      <textarea class="form-control input-border" placeholder="Write a comment"></textarea>
                                                                  </div>
                                                              </div>-->
                                                            @if($ranking)
                                                                <div class="ranking-block text-center">
                                                                    <p>Your ranking : <span>#{{$rank}}</span></p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="submit-btns">
                                                        {!! csrf_field() !!}
                                                        <button type="submit" class="btn btn-green">
                                                            Submit
                                                        </button>
                                                        {{--<button type="button" class="btn btn-cancel">
                                                            Reject
                                                        </button>--}}
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
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-select.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>