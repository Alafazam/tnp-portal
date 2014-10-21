<?php if (!isset($message)) {
$message = $this->session->flashdata('message');
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">
    <title>Portal for Training and Placement Department</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.form-validator.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<style type="text/css">a:hover{color:white;text-decoration:none;}a{color: #FFFFFF;}</style>

    <link href="/css/signin.css" rel="stylesheet">
<body style="background-color:#2c4762;text-transform:none;" >

    <div class="container" style="margin-top:100px;">

        <form class="form-signin"  role="form" role="form" action="/login/password" method="post" accept-charset="utf-8">
            <h1 class="form-signin-heading" style="color:white">Forgot Password</h1>
            <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
            <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-lg  btn-primary btn-block" href="#" style="margin-top:10px;"><a style="" href="/login">Cancel</a></button>
                </div>
                <div class="col-md-8">
                    <button class="btn btn-lg  btn-primary btn-block" type="submit" style="margin-top:10px;">Submit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">            
                    <a href="/login" class="forgot">Login</a>
                </div>
            </div>
        </form>

    </div>
    <!-- /container -->

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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

<?php  

    if ($message) {
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>
