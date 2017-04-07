<!DOCTYPE html>
<html>

<head>
    <title>::Admin Register::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- global css -->
    <link href="css/app.css" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/themify/css/themify-icons.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-up">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 login-form">
            <div class="panel-header">
                <h2 class="text-center">
                    <img src="img/pages/clear_black.png" alt="Logo">
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="login.php" id="authentication" method="post" class="signup_validator">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first" class="sr-only">First Name</label>
                                <input type="text" class="form-control  form-control-lg" id="first" name="first_name"
                                       placeholder="First name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last" class="sr-only">Last Name</label>
                                <input type="text" class="form-control  form-control-lg" id="last" name="last_name"
                                       placeholder="Last name">
                            </div>
                        </div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label for="phone" class="sr-only">Phone</label>
                                <input type="text" class="form-control  form-control-lg" id="phone" name="phone"
                                       placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <input type="text" class="form-control  form-control-lg" id="email" name="email"
                                       placeholder="E-mail">
                            </div>
                        </div>
						<div class="col-md-12">
                            <div class="form-group">
                                <label for="username" class="sr-only"> User Name</label>
                                <input type="text" class="form-control  form-control-lg" id="username" name="user_name"
                                       placeholder="User Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="confirm-password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="confirm-password"
                                       name="password_confirm" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group checkbox">
                                <label for="terms">
                                    <input type="checkbox" name="terms" id="terms">&nbsp; I accept the <a href="javascript:void(0)"
									title="terms and condition coming soon">terms &amp; Conditions</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-block"/>
                            </div>
                            <span class="sign-in">Already a member? <a href="login.html">Sign In</a></span>
                        </div>
                    </form>
                </div>
                <div class="row text-center social">
                    <div class="col-xs-12">
                        <p class="alter">Sign Up with</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="col-xs-4">
                                <a href="javascript:void(0)" class="btn btn-lg btn-facebook">
                                    <i class="ti-facebook"></i>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="javascript:void(0)" class="btn btn-lg btn-twitter">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="javascript:void(0)" class="btn btn-lg btn-google">
                                    <i class="ti-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="vendors/moment/js/moment.min.js"></script>
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/select2/js/select2.js"></script>
<script src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="js/custom_js/register.js"></script>
<!-- end of page level js -->
</body>

</html>
