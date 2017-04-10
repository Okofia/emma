<!DOCTYPE html>
<html>

<head>
    <title>404 error| Clear Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="css/404.css" rel="stylesheet">
    <!-- end of page level styles-->
    <style>

    </style>
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="text-center">
                <div>

                    <div class="error_img">
                        <img src="img/pages/404.gif" alt="404 error image">
					<label style="color:red;font-size:15px"><strong><?php echo $output ?></strong></label>
                    </div>
                    <hr class="seperator">
                    <a href="index.php" class="btn btn-primary link-home">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- end of global js -->
<script type="text/javascript">
    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
</script>
</body>

</html>
