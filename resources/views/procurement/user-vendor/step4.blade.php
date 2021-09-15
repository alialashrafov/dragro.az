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
                <div class="add-tender add-vendor">
                    <div class="content create-rfq">
                        <div class="content-inner">
                            <div class="block">
                                <div class="stage-block flex-center">
                                    <div class="stage-title">
                                        Request for Company
                                    </div>
                                    <ul class="list-unstyled flex">
                                        <li class="active">
                                            <span class="btn btn-green">1</span>
                                            <p>Vendor form</p>
                                        </li>
                                        <li class="active">
                                            <span class="btn btn-green">2</span>
                                            <p>Bank account</p>
                                        </li>
                                        <li class="active">
                                            <span class="btn btn-green">3</span>
                                            <p>Salesperson</p>
                                        </li>
                                        <li class="active">
                                            <span class="btn btn-green">4</span>
                                            <p>Attachments</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tender-detail-block">
                                    <form action="/site/vendor/attachment/create" method="post" enctype="multipart/form-data">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Attachments</h4>
                                                    <div class="attachment-block">
                                                        <div class="additional-block" no="0">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <p class="input-title">Description </p>
                                                                    <div class="input-group">
                                                                        <input type="text" name="attachment[0][description]" class="form-control input-border" placeholder="Add description" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="input-title">File </p>
                                                                    <div class="input-group add-file">
                                                                        <input type="file" name="attachment[0][file]" multiple class="file form-control input-border">
                                                                        {{--<div  class="custom-file-upload">
                                                                            <i class="fal fa-paperclip"></i>
                                                                            <span class="filename">Add file</span>
                                                                        </div>--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-start">
                                                        <button type="button" class="btn-transparent add-btn addAttachment">
                                                            Add more attachments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-btns">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="vendor_id" value="{{$vendor_id}}">
                                                <button type="submit" class="btn btn-green">Next</button>
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
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-select.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>

