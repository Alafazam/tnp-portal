<?php $message = $this->session->flashdata('message');
 ?>
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
      <form class="form-signin" role="form" action="/recruiter_login/verify" method="post" accept-charset="utf-8">
        <h2 style="color: #FFF;" class="form-signin-heading">Recruiter Login</h2>
        <input type="text" style="text-transform:none;" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" style="text-transform:none;margin-top:10px" name="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <!-- <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-lg  btn-primary btn-block"  style="margin-top:10px;"><a style="" href="/login">Not a Recruiter</a></button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-lg  btn-primary btn-block" type="submit" style="margin-top:10px;">Sign in</button>
                </div>
        </div> -->
        <div class="row">
                <div class="col-md-6">            
                    <h5><a href="#" class="forgot">Forgot Password?</a></h5>
                </div>
                <div class="" style="float:right;padding-right:20px">
                    <h5><a href="/login" class="forgot">Not a Recruiter</a></h5>
                </div>
        </div>
        
      </form>

    </div> <!-- /container -->
<?php  

    if ($message) {
      echo '    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title text-center" id="mySmallModalLabel" >Message</h4>
                      </div>
                      <div class="modal-body text-center">
                      </div>
                    </div>
                </div>
              </div>
';
        echo "
        <script>
        $( document ).ready(function() {
        $('#myModal').modal('show');
        $('.modal-body').text('".$message."');
        });
        </script>
        ";
    }
 ?>

  </body>
  </html>
