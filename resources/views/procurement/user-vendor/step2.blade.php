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
                                    <form action="/site/vendor/bank/create" method="post">
                                        <div class="form-list">
                                            <div class="form-list-content">
                                                <div class="form-list-part">
                                                    <h4>Bank account details</h4>
                                                    <div class="additional-block">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[name]" class="form-control input-border" placeholder="Enter bank name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax ID</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[tax_id]" class="form-control input-border" placeholder="Enter tax id" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank account</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[account]" class="form-control input-border" placeholder="Enter bank account" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Currency</p>
                                                                <div class="input-group">
                                                                    <select name="bank[currnecy]" class="selectpicker form-control" title="Choose type">
                                                                        <option value="AZN">AZN</option>
                                                                        <option value="USD">USD</option>
                                                                        <option value="EUR">EUR</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">SWIFT</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[swift]" class="form-control input-border" placeholder="Enter swift" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank code</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[bank_code]" class="form-control input-border" placeholder="Enter bank code" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Bank CA</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[bank_ca]" class="form-control input-border" placeholder="Enter bank ca" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant name</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[accountant_name]" class="form-control input-border" placeholder="Enter accountant name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant phone</p>
                                                                <div class="input-group">
                                                                    <input type="number" name="bank[accountant_phone]" class="form-control input-border" placeholder="Enter accountant phone" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Accountant email</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[accountant_email]" class="form-control input-border" placeholder="Enter accountant email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="input-title">Tax regime</p>
                                                                <div class="input-group">
                                                                    <input type="text" name="bank[tax_regime]" class="form-control input-border" placeholder="Enter tax regime" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-btns">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="bank[vendor_id]" value="{{$vendor_id}}">
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

