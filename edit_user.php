<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit User | Clear Admin Template </title>
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
    <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" type="text/css" rel="stylesheet">
    <link href="vendors/select2/css/select2.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/select2/css/select2-bootstrap.css" type="text/css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" type="text/css" rel="stylesheet">
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link href="css/custom_css/wizard.css" type="text/css" rel="stylesheet">
    <!--end of page level css -->

</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img">
        <img src="img/loader.gif" alt="loading..." height="64" width="64">
    </div>
</div>

<?php include 'header.php' ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
   <?php include 'sidebar.php' ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User
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
                    Edit User
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff"
                                   data-loop="true"></i> Edit User
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!-- errors -->
                            <!--main content-->
                            <form id="adduser_form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token"/>
                                <div id="pager_wizard">
                                    <ul>
                                        <li>
                                            <a href="#tab1" data-toggle="tab">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">Profile Picture</a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">Bank Detail</a>
                                        </li>
										<!--
                                        <li>
                                            <a href="#tab4" data-toggle="tab">User Group</a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1">
                                            <h2 class="hidden">&nbsp;</h2>
											 <div class="form-group">
                                                <label for="first_name" class="col-sm-2 control-label">User Name
                                                    </label>
                                                <div class="col-sm-10">
                                                    <input id="user_name" name="user_name" type="text"
                                                           placeholder="User Name" class="form-control required"
                                                           value="Addison" readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="first_name" class="col-sm-2 control-label">First Name
                                                    *</label>
                                                <div class="col-sm-10">
                                                    <input id="first_name" name="first_name" type="text"
                                                           placeholder="First Name" class="form-control required"
                                                           value="Addison"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name" class="col-sm-2 control-label">Last Name
                                                    *</label>
                                                <div class="col-sm-10">
                                                    <input id="last_name" name="last_name" type="text"
                                                           placeholder="Last Name" class="form-control required"
                                                           value="Schmeler"/>
                                                </div>
                                            </div>
											 <div class="form-group">
                                                <label for="gender" class="col-sm-2 control-label">Gender *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select21" id="gender"
                                                            title="Select Gender..." name="gender">
                                                        <option disabled>Select Gender</option>
                                                        <option value="male">MALE</option>
                                                        <option value="female">FEMALE</option>
                                                    </select>
                                                </div>
                                            </div>
											 <div class="form-group">
                                                <label for="gender" class="col-sm-2 control-label">Resident State *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select21" id="gender"
                                                            title="Select Gender..." name="gender">
                                                        <option disabled>Select </option>
                                                        <option value="Abia">Abia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                                <div class="col-sm-10">
                                                    <input id="email" name="email" placeholder="E-mail" type="text"
                                                           class="form-control required email"
                                                           value="Addisone@sf.com"/>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Phone *</label>
                                                <div class="col-sm-10">
                                                    <input id="phone" name="phone" placeholder="Phone" type="text"
                                                           class="form-control required"
                                                           value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-2 control-label">Password *</label>
                                                <div class="col-sm-10">
                                                    <input id="password" name="password" type="password"
                                                           placeholder="Password" class="form-control required"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirm" class="col-sm-2 control-label">Confirm
                                                    Password*</label>
                                                <div class="col-sm-10">
                                                    <input id="password_confirm" name="password_confirm" type="password"
                                                           placeholder="Confirm Password "
                                                           class="form-control required"/>
                                                </div>
                                            </div>

										<div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">My upline</label>
                                                <div class="col-sm-10">
                                                    <input id="phone" name="upline" placeholder="My upline" type="text"
                                                           class="form-control" value="" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h2 class="hidden">&nbsp;</h2>

                                            <div class="form-group">
                                                <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 200px;">
                                                            <img src="img/authors/avatar1.jpg" alt="profile pic"
                                                                 class="profile_pic">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                             style="max-width: 200px; max-height: 200px;"></div>
                                                        <div>
                                                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input id="pic" name="pic_file" type="file"
                                                                       class="form-control"/>
                                                                </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                               data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="tab3">
										 <div class="form-group ">
                                                <label for="acc_name" class="col-sm-2 control-label">Account Name *</label>
                                                <div class="col-sm-10">
                                                    <input id="acc_name" name="acc_name" type="text" class="form-control"/>
                                                </div>
                                          </div>
										  <div class="form-group ">
                                                <label for="acc_num" class="col-sm-2 control-label">Account Number *</label>
                                                <div class="col-sm-10">
                                                    <input id="acc_num" name="acc_num" type="text" class="form-control"/>
                                                </div>
                                          </div>
                                            <div class="form-group">
                                                <label for="bank_name" class="col-sm-2 control-label">Bank Name *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select21" id="bank_name"
                                                            title="" name="bank_name">
                                                        <option disabled>Select bank</option>
                                                        <option value="Access Bank">Access Bank</option>
                                                    </select>
                                                </div>
                                            </div>
										 <div class="form-group">
                                                <label for="bank_name" class="col-sm-2 control-label">Account Type *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select21" id="acc_type"
                                                            title="" name="acc_type">
                                                        <option disabled>Select type</option>
                                                        <option value="Savings">Savings</option>
														<option value="Current">Current</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                <!--        <div class="tab-pane" id="tab4">
                                            <p class="text-danger"><strong>Be careful with group selection, if you give
                                                admin access.. they can access admin section</strong></p>
                                            <div class="form-group required">
                                                <label for="group" class="col-sm-2 control-label">Group *</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control required select21"
                                                            title="Select group..." name="group" id="group">
                                                        <option value="">Select</option>
                                                        <option value="admin" selected="selected">admin</option>
                                                        <option value="user">user</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="activate" class="col-sm-2 control-label"> Activate
                                                    User</label>
                                                <div class="col-sm-10">
                                                    <input id="activate" name="activate" type="checkbox" checked
                                                           class="pos-rel p-l-30 custom-checkbox" value="1">
                                                    <span>If user is not activated, mail will be sent to user with activation link</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <ul class="pager wizard">
                                            <li class="previous">
                                                <a href="#">Previous</a>
                                            </li>
                                            <li class="next">
                                                <a href="#">Next</a>
                                            </li>
                                            <li class="next finish" style="display:none;">
                                                <a href="javascript:;">Finish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">User Edit</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Account Edited Successfully.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--row end-->
            <!--rightside bar -->
            <div class="background-overlay"></div>
        </section>
    </aside>
</div>
<!--wrapper ends-->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="vendors/moment/js/moment.min.js"></script>
<script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
<script src="vendors/select2/js/select2.js" type="text/javascript"></script>
<script src="vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
<script src="js/custom_js/adduser.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
