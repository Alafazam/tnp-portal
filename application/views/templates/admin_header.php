<?php $data= $this->session->userdata('logged_in'); ?>


<?php 

if (!isset($message)) {
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

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="text-transform: capitalize;color:#4A89DC;font-size: 30px" href="#">
                    Welcome Sir
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/change_pwd">Change Password</a>
                    </li>
                    <li>
                        <a <?php if($this->session->userdata('logged_in')) { echo ' href="/admin/logout">Logout'; } ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid hidden-print">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav  nav-sidebar">
                    <li class="active"><a href="/">Announcemnets</a>
                    </li>
                </ul>
                <ul class="nav nav-sidebar ">
                    <li><a href="/admin_feeds">New Announcement</a>
                    </li>
                    <li><a href="/admin_create_a_login">Create a login</a>
                    </li>
                    <li><a href="/admin_view_list">View lists</a>
                    </li>
                    <li><a href="/admin_jobs">Available Jobs</a>
                    </li>
                    <li><a href="/admin_edit_details">Edit Details</a>
                    </li>

                </ul>
                
            </div>
        </div>
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


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
