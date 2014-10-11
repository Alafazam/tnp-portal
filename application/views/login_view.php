<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Login page for NIT Srinagar Training And Placement Cell">
  <meta name="author" content="Alafazam">
  <link rel="icon" href="ico/favicon.ico">

  <title>Signin</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
            <style type="text/css">a:hover{color:white;}a{color: #FFFFFF;}</style>

    </head>

    <body style="background-color:#110022;">
     <div class="container" style="margin-top:100px;">
      <form class="form-signin" role="form" action="login/verify" method="post" accept-charset="utf-8">
        <h2 style="color: #FFF;" class="form-signin-heading">Please sign in</h2>
        <input type="text" style="text-transform:none;" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" style="text-transform:none;margin-top:10px;" name="password" id="password" class="form-control" placeholder="Password" required>
        <label class="checkbox" style="color: #FFF;">
          <input type="checkbox" name="remember" id="remember" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="row">
                <div class="col-md-6">            
                    <h5><a href="/login/password" class="forgot">Forgot Password?</a></h5>
                </div>
                <div class="" style="float:right;padding-right:20px">
                    <h5><a href="/recruiter_login" class="forgot">Not a Student</a></h5>
                </div>
        </div>
      </form>

    </div> <!-- /container -->
  </body>
  </html>
