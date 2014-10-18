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
    <link href="/css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body style="background-color:#2c4762;text-transform:none;">
    <div class="container" style="margin-top:100px;">
        <form method="POST" class='form-signin'  >
            <h1 class="form-signin-heading" style="color:white">Reset Password</h1>
                    	<input type="password"  class="form-control " placeholder="New Password" required autofocus id="password" name="password"/>
                        <input type="password" class="form-control" placeholder="Confirm Password" id="c_password" required name="c_password"/>
                    	<input class="btn btn-lg  col-md-6 btn-primary btn-block" type="submit" value="Reset Password" />
                </form>
    </div>

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
</body>
</html>
