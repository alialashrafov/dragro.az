<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Procurement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/asswts/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/fonts.css">
  <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
        <div class="login-content text-center">
          <div class="logo flex">
            <a href="">
              <img src="/assets/img/logo.png" alt="logo" class="img-responsive">
            </a>
          </div>
          <h4>Log in to Dashboard</h4>
          <p>Enter your details to login to your account</p>
          <form action="/{{$lang}}/login" method="post">
            <div class="form-list">
              <div class="form-list-inner">
                <div class="input-group">
                  <input type="text" class="form-control" name="email" placeholder="Email" >
                </div>

                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <div class="forget-password-block flex">
                  <label class="checkbox-label relative">Remember me
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <a href="" class="forget-password">Forgot password?</a>
                </div>
              </div>
              {!! csrf_field() !!}
              <div class="btn-block">
                <button class="btn btn-effect" type="submit">Log in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-select.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
