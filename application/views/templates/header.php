<?php $data= $this->session->userdata('logged_in'); $username=$data['username']; $fname=$data['fname']; ?>


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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body style="text-transform: capitalize;">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="text-transform: capitalize;" href="#">
                    <?php if(isset($fname)){echo ''.$fname; } ?>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a>
                    </li>
                    <li><a href="#">Settings</a>
                    </li>
                    <li><a href="/profile">My Profile</a>
                    </li>
                    <li>
                        <a <?php if(isset($username)) { echo ' href="/home/logout">Logout'; } else { echo ' href="/login">Login'; } ?></a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav  nav-sidebar">
                    <li class="active"><a href="/">Overview</a>
                    </li>
                    <li><a href="#">Reports</a>
                    </li>
                    <li><a href="#">Analytics </a>
                    </li>
                    <li><a href="#">Export</a>
                    </li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="/profile">Complete Profile</a>
                    </li>
                    <li><a href="/personal">Personal Profile</a>
                    </li>
                    <li><a href="/educational">Educational Profile</a>
                    </li>
                    <li><a href="/academic">Academic Profile</a>
                    </li>
                    <li><a href="/aboutme">About Me</a>
                    </li>

                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#">Companies List</a>
                    </li>
                    <li><a href="#">Companies i have applied for</a>
                    </li>
                    <li><a href="#">Wishlist to apply</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
