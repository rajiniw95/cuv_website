<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|MyProfile</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <link href="css/profile_css.css" rel="stylesheet">
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <!--header start-->
      <header class="header dark-bg">


            <!--logo start-->
            <a href="index.html" class="logo">Colombo University<span class="lite">Volunteers</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">

            </div>

            <div class="top-nav notification-row">

            </div>
      </header>
      <!--header end-->


      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="index.html">

                          <span>ABOUT CUV</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>GALLERY</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>UPCOMING EVENTS</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>REVIEWS</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>COMMITTEE</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>CONTACT US</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="index.html">

                          <span>LOGOUT</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
              <div class="container" style="padding-top: 60px;">
        <h1 class="page-header">Edit Profile</h1>
        <div class="row">
          <!-- left column -->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
              <img src="img/committee/K.G.K.Anuradha.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
              <h6>Upload a different photo...</h6>
              <input type="file" class="text-center center-block well well-sm">
            </div>
          </div>
          <!-- edit form column -->
          <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-coffee"></i>
              This is an <strong>.alert</strong>. Your profile examing by CUV admin.
            </div>
            <h3>Personal info</h3>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-lg-3 control-label">First name:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="anush" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Last name:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="Silva" type="text">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="anush@gmail.com" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Faculty</label>
                <div class="col-lg-8">
                  <div class="ui-select">
                    <select id="user_time_zone" class="form-control">
                      <option value="ucsc"selected="selected">University Of Colombo School Of Computing</option>
                      <option value="medical">Medical Faculty</option>
                      <option value="science">Science Faculty</option>
                      <option value="management">Management Faculty</option>
                      <option value="law">Law faculty</option>
                      <option value="art" >Art Faculty</option>
                      <option value="sriPalee">Sri Palee Campus</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Username:</label>
                <div class="col-md-8">
                  <input class="form-control" value="anush99" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-md-8">
                  <input class="form-control" value="11111122333" type="password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Confirm password:</label>
                <div class="col-md-8">
                  <input class="form-control" value="11111122333" type="password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input class="btn btn-primary" value="Save Changes" type="button">
                  <span></span>
                  <input class="btn btn-default" value="Cancel" type="reset">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--main content end-->
            </section>
  <!-- container section start -->

    <!-- javascripts -->

    <script src="js/profile.js"></script>


    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>


  </body>
</html>
