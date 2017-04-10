<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>View User | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/animate/animate.min.css" type="text/css"/>
    <link href="css/custom_css/user_profile.css" type="text/css" rel="stylesheet">
    <!--end of page level css-->
</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->

<?php include 'header.php' ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
	 <?php include 'sidebar.php' ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View User
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Users</a>
                </li>
                <li class="active">
                    View User
                </li>
            </ol>
    </section>

        <!-- Main content -->
        <section class="content">
<?php include 'profile.php' ?>

            <!--rightside bar -->

            <div class="background-overlay"></div>
        </section>
    </aside>
</div>
<!--wrapper ends-->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
</body>

</html>
