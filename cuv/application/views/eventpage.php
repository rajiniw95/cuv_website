<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|Event</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>
  <!--google font taken-->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Lobster');
  </style>

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



      <!--main content start-->
      <section id="main-content_nosidebar">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-calendar" aria-hidden="true"></i> EVENT</h3>

                </div>
            </div>

              <div class="row">
                <!-- profile-widget -->

                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h1>
                              <?php foreach ($EVENT as $value) 
                              {
                                echo $value->EventTitle;
                              }?>
                              </h1>
                            </div>


              <div class="col-lg-6"> </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                              <i class="fa fa-check" aria-hidden="true" style="font-size:48px"> </i><br>

                                                                              <button onclick="location.href='http://localhost/cuv_website/cuv/eventpage_controller/going'"type="button" class="btn btn-success btn-lg" href="" title="Bootstrap 3 themes generator" 
                                                                              <?php if ($GOING=1){ ?> disabled <?php   } ?> 
                                                                              >  
                                                                              &emsp;GOING&emsp;</button>
                                          </li>

                                      </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                            <i class="fa fa-times" aria-hidden="true" style="font-size:48px"> </i><br>

                                                    <button onclick="location.href='http://localhost/cuv_website/cuv/eventpage_controller/notgoing'" type="button" class="btn btn-danger btn-lg" href="" title="Bootstrap 3 themes generator"<?php if ($GOING=0){ 
                                                      ?> disabled 
                                                    <?php  } ?>
                                                    >
                                                    NOT GOING</button>

                                          </li>

                                      </ul>
                            </div>
                          </div>
                 </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  

                              </ul>
                          </header>


                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                      <section class="panel">
                                      <div class="bio-graph-heading">
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->Description;
                                                  }?>
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>
                                            EVENT DETAILS
                                          </h1>
                                          <div class="row">

                                              <div class="bio-row1">
                                                  <p><span>Date </span>: 
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->Date;
                                                  }?></p>
                                              </div>
                                              <div class="bio-row1">
                                                  <p><span>Time </span>: 
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->Time;
                                                  }?></p>
                                              </div>
                                              <div class="bio-row1" font size="16">
                                                  <p><span>Venue </span>: 
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->Venue;
                                                  }?></p>
                                              </div>
                                              </div>

                                              <div class="row" >


                                              <div class="bio-row">
                                                  <p><span>Organized by </span>: 
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->OrganizerName;
                                                  }?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Organizer Mobile No</span>: 
                                                  <?php foreach ($EVENT as $value) 
                                                  {
                                                    echo $value->OrganizerMobile;
                                                  }?></p>
                                              </div>
                                              

                                          </div>


                                      <div class="panel-body bio-graph-info">
                                          <h1> Confrimed Participants </h1>
                                  <table class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($PARTICIPANTS as $value){?>
                                    <tr>
                                      <td><?=$value->FirstName;?></td>
                                      <td><?=$value->LastName;?></td>
                                      <td><?=$value->username;?></td>
                                    </tr>
                                  <?php }?>
                                
                                </tbody>
                            </table>
                                          </div>
                                      </div>
                                      <section>
                                          <div class="row">
                                          </div>
                                      </section>

                                      </div>




                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                
                
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>

