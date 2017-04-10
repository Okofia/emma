<!DOCTYPE html>
<html>
<head>
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="vendors/themify/css/themify-icons.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
    <!--end page level css-->
</head>
<style>
	#loading {
	display: none;
	}
</style>
<body id="sign-in">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-form">
            <div class="panel-header">
                <h2 class="text-center">
                    <img src="img/pages/clear_black.png" alt="Logo">
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="index.php" id="authentication" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only"> Username</label>
                                <input type="text" class="form-control  form-control-lg" id="username" name="username"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="password" placeholder="Password">
                            </div>
                            <input type="hidden"  id="loginUser" name="loginUser">
                            <div class="form-group">
                                <input type="submit" value="Sign In" class="btn btn-primary btn-block"/>
								<div id='loading'>
							      <img src="img/loader.gif" alt="loading..." height="24" width="24" />&nbsp;&nbsp; Please wait..
							     </div>
								 <div id="message"></div>
                            </div>
                            <a href="forgot_password.php" id="forgot" class="forgot"> Forgot Password ? </a>

                            <span class="pull-right sign-up">New ? <a href="register.php">Sign Up</a></span>
                        </form>
                    </div>
                </div>
                <div class="row text-center social">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-lg btn-facebook">
                                    <i class="ti-facebook"></i>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-lg btn-twitter">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-lg btn-google">
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
<!-- page level js -->
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom_js/login.js"></script>
<!-- end of page level js -->
</body>
</html>
<script>
jQuery(document).ready(function(){
		$("#authentication").on('submit',(function(e) {
			e.preventDefault();
		    $("#message").empty();
			$('#loading').show();
			$.ajax({
		           url: "process.php",
				   type: "POST",
				   data: new FormData($(this)[0]),
				   contentType: false,
				   cache: false,
				   processData:false,
				   success: function(data){
				   $('#loading').hide();
				   $("#message").html(data);
					}
					});
		}));
	});
</script>
