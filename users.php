<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users List | Clear Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">

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
            <h1>Users List</h1>
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
                    Users List
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content p-l-r-15">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="ti-user"></i> Users List
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                    <tr class="filters">
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User E-mail</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Crawford</td>
                                        <td>Ondricka</td>
                                        <td>Crawford_Ondricka@yahoo.com</td>
                                        <td>Activated</td>
                                        <td>19 weeks ago</td>
                                        <td><a href="edit_user.php"><i
                                                class="fa fa-fw ti-pencil text-primary actions_icon"
                                                title="Edit User"></i></a><a
                                                href="#"
                                                data-toggle="modal"
                                                data-target="#delete"><i
                                                class="fa fa-fw ti-close text-danger actions_icon"
                                                title="Delete User"></i>
                                        </a><a
                                                href="user_profile.php"><i
                                                class="fa fa-fw ti-star text-success actions_icon"
                                                title="View User"></i></a></td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="Heading"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h4 class="modal-title custom_align" id="Heading">Delete User</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-warning">
                                        <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to
                                        delete this Account?
                                    </div>
                                </div>
                                <div class="modal-footer ">
                                    <a href="deleted_users.html" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-ok-sign"></span> Yes
                                    </a>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> No
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <!-- row-->
            <!--rightside bar -->
			
			

            <div class="background-overlay"></div>
        </section>
    </aside>
</div>
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="js/custom_js/users_custom.js"></script>
<!-- end of page level js -->
</body>

</html>
