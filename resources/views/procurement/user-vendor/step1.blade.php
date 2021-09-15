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
                                        <li>
                                            <span class="btn btn-green">2</span>
                                            <p>Bank account</p>
                                        </li>
                                        <li>
                                            <span class="btn btn-green">3</span>
                                            <p>Salesperson</p>
                                        </li>
                                        <li>
                                            <span class="btn btn-green">4</span>
                                            <p>Attachments</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tender-detail-block">
                                    <form action="/site/vendor/create" method="post">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Description of vendor</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Company type </p>
                                                                <div class="input-group">
                                                                    <select name="vendor[type]" class="selectpicker form-control" title="Choose company type">
                                                                        <option value="1">Legal Entity</option>
                                                                        <option value="0">Physical  Entity</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Vendor name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[name]" class="form-control input-border" placeholder="Enter vendor name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Type of business</p>
                                                                <div class="input-group">
                                                                    <input type="hidden" name="vendor[type]" value="1" />
                                                                    <select name="vendor[business_type]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="product">Product</option>
                                                                        <option value="service">Service</option>
                                                                        <option value="both">Both</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[tax_id]" class="form-control input-border" placeholder="Enter tax ID" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <p class="input-title">Main activities</p>
                                                                <div class="input-group">
                                                                    <textarea class="form-control input-border" name="vendor[main_activities]"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-list-part">
                                                    <h4>Director</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[director]" class="form-control input-border" placeholder="Enter director name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Phone</p>
                                                                <div class="input-group">
                                                                    <input type="number" name="vendor[director_phone]" class="form-control input-border" placeholder="Enter phone" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Email</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[director_email]" class="form-control input-border" placeholder="Enter email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="input-title">Contract person</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="vendor[contract_person]" class="form-control input-border" placeholder="Enter contract person">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @include('procurement.vendor.address-form', ['address' => null])
                                            </div>
                                            <div class="submit-btns">
                                                {!! csrf_field() !!}
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

