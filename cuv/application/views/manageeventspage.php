<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|ManageEvents</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

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
                    <h3 class="page-header"><i class="fa fa-calendar" aria-hidden="true"></i> MANAGE EVENTS</h3>

                </div>
            </div>

              
              
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          
                                  <div class="col-md-12 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Create Event</div>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">

                      <!--for checking validation errors-->
                      

                                      <form class="form-horizontal" method="post" action="<?php echo base_url('manageeventspage_controller/insert_event');?>">
                                
                                          <?php echo form_error('title'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Event Title</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                          </div>

                                        
                                          <?php echo form_error('date'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="date">Date</label>
                                            <div class="col-lg-10">
                                              <input type="date" class="form-control" id="date" name="date">
                                            </div>
                                          </div>

                                          <?php echo form_error('time'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="time">Time</label>
                                            <div class="col-lg-10">
                                              <input type="time" class="form-control" id="time" name="time">
                                            </div>
                                          </div>

                                          <?php echo form_error('venue'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="venue">Venue</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="venue" name="venue">
                                            </div>
                                          </div>

                                          <?php echo form_error('org_name'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="org_name">Organizer Name</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="org_name" name="org_name">
                                            </div>
                                          </div>


                                          <?php echo form_error('org_mob'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="org_mob">Organizer Mobile Number</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="org_mob" name="org_mob">
                                            </div>
                                          </div>

                                          <?php echo form_error('description'); ?>
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="description">Event Description</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" name="description" id="description"></textarea>
                                            </div>
                                          </div>

                                          <button class="btn btn-primary btn-lg btn-block" type="submit" >Create Event </button>


                                      </form>
                                    </div> </div></div></div></div></section></div>

                                    
                 <div class="col-lg-12">
                    <section class="panel">
                          
                                 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Delete Event</div>
                  
                  <div class="clearfix"></div>
                </div>
                
                 
                      
                      <div class="panel-body bio-graph-info">
                                          <h1> Upcoming Events </h1>
                                  <table class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th>Event Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Venue</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($EVENTS as $value){?>
                                 <tr>
                                    <td><?=$value->EventTitle;?></td>
                                    <td><?=$value->Date;?></td>
                                    <td><?=$value->Time;?></td>
                                    <td><?=$value->Venue;?></td>
                                    
                                    <td><button onclick="location.href='http://localhost/cuv_website/cuv/manageeventspage_controller/deleteEvent/<?php echo $value->EventID ?>'" type="button" class="btn btn-danger btn-lg" href="" title="Bootstrap 3 themes generator"> Delete</button></td>
                                  </tr>
                                    <?php }?>

                                  
                                
                                </tbody>
                            </table>
                                          </div>
                                    </div> </div></div>

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

