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
                    <h3 class="page-header"><i class="fa fa-calendar" aria-hidden="true"></i> UPCOMING EVENTS</h3>

                </div>
            </div>

              
              
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    
                          
                                  <div class="col-md-12 portlets">
         
                          
                                 
              <div class="panel panel-default">
                <div class="panel-heading">
                  
                  
                  <div class="clearfix"></div>
                </div>
                
                 
                      
                      <div class="panel-body bio-graph-info">
                                          
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
                                    
                                    <td><button onclick="location.href='http://localhost/cuv_website/cuv/eventspage_controller/<?php echo $value->EventID ?>'" type="button" class="btn btn-success btn-lg" href="" title="Bootstrap 3 themes generator"> View Details</button></td>
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

