<?php
session_start();
if(!isset($_SESSION['username']))
{
 header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clear Admin Template | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="css/app.css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    <link href="vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendors/lcswitch/css/lc_switch.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link href="css/custom_css/dashboard1.css" rel="stylesheet" type="text/css"/>
    <link href="css/custom_css/dashboard1_timeline.css" rel="stylesheet"/>



	<link rel="stylesheet" type="text/css" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/animate/animate.min.css" type="text/css"/>
    <link href="css/custom_css/user_profile.css" type="text/css" rel="stylesheet">

    <!--end of page level css-->
</head>
<body class="skin-default">
<div class="preloader">
    <div class="loader_img">loading <img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<?php include 'header.php' ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
   <?php include 'sidebar.php' ?>

    <aside class="right-side">
        <section class="content-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-8">
                    <div class="header-element">
                        <h3>De-Globe/
                            <small>Dashboard</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-7 col-xs-4">
                    <div class="header-object">
                        <span class="option-search pull-right hidden-xs">
                            <span class="search-wrapper">
                                <input type="text" placeholder="Search here"><i class="ti-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
			   <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-eye text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3><b id="widget_count3">Join Package</b></h3>
                                <p>6hrs payment</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                               <span id="loadspark-chart"></span>
								10k, 20k, 50k and 100k packages
                                <hr>
                                <p>Continue</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-shopping-cart text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3><b id="widget_count3">Get Help</b></h3>
                                <p>14days payback</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span class="linechart" id="salesspark-chart"></span>
								10k:20k, 20k:40K, 50k:100K and 100k:200K
                                <hr>
                                <p>Continue</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-thumb-up text-danger"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>1532</b></h3>
                                <p>Hits</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="visitsspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-user text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>1252</b></h3>
                                <p>All Members</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="subscribers-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
		<?php include 'profile.php' ?>
            <div class="row">
                <div class="col-lg-8 col-xs-12">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="panel main-chart">
                                <div class="panel-heading panel-tabs">
                                    <ul class="nav nav-tabs nav-float" role="tablist">
                                        <li class="active text-center">
                                            <a href="#home" role="tab" data-toggle="tab">Live Feeds</a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#profile" role="tab" data-toggle="tab"><span class="hidden-xs">Annual</span>
                                                Revenue</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="form-group">
                                                <input type="checkbox" id="toggle_real" name="my-checkbox"
                                                       data-size="small" checked>
                                            </div>
                                            <div id="live-chart" class="livechart-tab1 m-t-10"></div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="chart-container">
                                                <span class="">
                                                    <i class="ti-reload redraw-cart pull-right set-animate"></i>
                                                </span>
                                                <canvas id="dashboard-chart1" width="800" height="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-sm-5">
                            <div class="panel">
                                <div class="swiper-container swiper_news">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide slide-1 gradient-color">
                                            <div class="slider-content">
                                                <div class="news-head">
                                                    <h3>The Need For Inc. in Energy Infrastructure</h3>
                                                    <span class="pull-right">Yesterday</span>
                                                    <hr>
                                                </div>
                                                <div class="news-cont">
                                                    <h4>The strategy of adjusting and optimizing energy, using systems
                                                        and
                                                        procedures so as to reduce energy requirements per unit of
                                                        output
                                                        while holding ...</h4>
                                                    <p class="text-right read-more"><a class="read-more"
                                                                                       href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide slide-2 gradient-color">
                                            <div class="slider-content">
                                                <div class="news-head">
                                                    <h3>What to expect in the final race..</h3>
                                                    <span class="pull-right">5min ago</span>
                                                    <hr>
                                                </div>
                                                <div class="news-cont">
                                                    <h4>The strategy of adjusting and optimizing energy, using systems
                                                        and
                                                        procedures so as to reduce energy per unit of output
                                                        while holding ...</h4>
                                                    <p class="text-right read-more"><a class="read-more"
                                                                                       href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide slide-3 gradient-color">
                                            <div class="slider-content">
                                                <div class="news-head">
                                                    <h3>First ever Largest open Air Purifier</h3>
                                                    <span class="pull-right">On 28th Oct</span>
                                                    <hr>
                                                </div>
                                                <div class="news-cont">
                                                    <h4>The strategy of adjusting and optimizing energy, using systems
                                                        and
                                                        procedures so as to reduce energy requirements per unit of
                                                        output
                                                        while holding ...</h4>
                                                    <p class="text-right read-more"><a class="read-more"
                                                                                       href="javascript:void(0)">Read
                                                        more <i class="ti-angle-double-right"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">



                                <div class="panel-body">

                                    <div id="realtime-views" class="real-chart"></div>
                                    <hr>

                                </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4  col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Letter of happiness </h3>
                                </div>
                                <div class="panel-body">
                                    <div>
                                        <ul class="timeline timeline-update">
                                            <li>
                                                <div class="timeline-badge primary wow lightSpeedIn center">
                                                    <img src="img/authors/avatar1.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-panel wow slideInLeft"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Jade Project's Status </h4>
                                                        <p>
                                                            <small class="text-primary">11 hours ago</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Jade Project team has completed their first phase.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="timeline-badge info wow lightSpeedIn center">
                                                    <img src="img/authors/avatar.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-panel wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Tinder Project</h4>
                                                        <p>
                                                            <small class="text-primary">Sept 10, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Tinder Project's Final review has completed.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge default wow lightSpeedIn center">
                                                    <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-panel wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">A new branch in Virginia.</h4>
                                                        <p>
                                                            <small class="text-primary">Jan 02, 2017</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Planning to have a branch in virginia in the coming year.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge primary wow lightSpeedIn center">
                                                    <img src="img/authors/avatar3.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">

                                                </div>
                                                <div class="timeline-panel wow slideInLeft"
                                                     style="display:inline-block;">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Daily Status </h4>
                                                        <p>
                                                            <small class="text-primary">2days ago</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Manager schedules to keep a daily project status track.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="timeline-badge info wow lightSpeedIn center">
                                                    <img src="img/authors/avatar4.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">

                                                </div>
                                                <div class="timeline-panel wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Performance report</h4>
                                                        <p>
                                                            <small class="text-primary">Aug 10, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Richard, updated his Team over view Performance report.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-badge default wow lightSpeedIn center">
                                                    <img src="img/authors/avatar2.jpg" height="36" width="36"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                </div>
                                                <div class="timeline-panel wow slideInLeft">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">Project Evaluation</h4>
                                                        <p>
                                                            <small class="text-primary">Oct 05, 2016</small>
                                                        </p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>
                                                            Variations Project Evaluation is going on to highlight
                                                            project.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--rightside bar -->

            <!-- /#right -->
            <div class="background-overlay"></div>
        </section>
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->

<!-- begining of page level js -->
<!--Sparkline Chart-->
<script type="text/javascript" src="js/custom_js/sparkline/jquery.flot.spline.js"></script>
<!-- flip --->
<script type="text/javascript" src="vendors/flip/js/jquery.flip.min.js"></script>
<script type="text/javascript" src="vendors/lcswitch/js/lc_switch.min.js"></script>
<!--flot chart-->
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.js"></script>
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="vendors/flot.tooltip/js/jquery.flot.tooltip.js"></script>
<!--swiper-->
<script type="text/javascript" src="vendors/swiper/js/swiper.min.js"></script>
<!--chartjs-->
<script src="vendors/chartjs/js/Chart.js"></script>
<!--nvd3 chart-->
<script type="text/javascript" src="js/nvd3/d3.v3.min.js"></script>
<script type="text/javascript" src="vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/advanced_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="js/dashboard1.js"></script>
<!-- end of page level js -->

</body>

</html>
