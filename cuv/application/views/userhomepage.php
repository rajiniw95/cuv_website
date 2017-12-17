<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|Homepage</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pdapHxIh7EYuwy6K7iE41uXVxGCXY0sAjBzaElYGJUrzwodck3Lx6IE2lA0rFREo" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>css/landpage.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/widgets.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />

     <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">


    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />

    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">

  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/landpage.css" /> -->

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">





      <!--header start-->

      <header class="header dark-bg">





            <a href="index.html" class="logo">Colombo University<span class="lite">Volunteers</span></a>

            <a class="logout" href="http://localhost/cuv_website/cuv">Log Out</a>
            <a class="logout" href="http://localhost/cuv_website/cuv"><?php echo $this->session->userdata('FirstName'); ?></a>



              <div class="nav search-row" id="top_menu">

              </div>

              <div class="top-nav notification-row">

              </div>
      </header>


      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="http://localhost/cuv_website/cuv/profile">

                        <span>MY PROFILE</span>
                    </a>
                </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/about">

                          <span>ABOUT CUV</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/gallery">

                          <span>GALLERY</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/upcomingevents">

                          <span>UPCOMING EVENTS</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/reviews">

                          <span>REVIEWS</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/committee">

                          <span>COMMITTEE</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="http://localhost/cuv_website/cuv/contactus">

                          <span>CONTACT US</span>
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
        <div class="row">

      </div><!--/.row-->


           <div class="row">

        </div>
              <div class="col-md-3">
              <!-- List starts -->
        <ul class="today-datas">
                <!-- List #1 -->

              </ul>
              </div>


           </div>


      <!-- Today status end -->



      <div class="row">

        <div class="col-lg-9 col-md-12">


          </div>

        </div><!--/col-->
        <div class="col-md-3">



        </div><!--/col-->

              </div>



                <!-- statics end -->




              <!-- project team & activity start -->
          <div class="row">
          <div class="col-md-8 portlets"> </div>
          <div class="col-lg-8">
                      <!--Project Activity start-->
                      <section class="panel">
                          
                          
                      </section>
                      <!--Project Activity end-->
                  </div>
            <div class="col-md-4 portlets">
              <!-- Widget -->
              <div class="panel panel-default">
        

                


              </div>
            </div>


              </div><br><br>

    <div class="row">


         <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Write Review</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Title</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                          </div>
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Write your Review...</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content"></textarea>
                                            </div>
                                          </div>
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Satisfaction Level</label>
                                            <div class="col-lg-10">
                                                <select class="form-control">
                                                  <option value="">- Choose Option -</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select>
                                            </div>
                                          </div>


                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                       <div class="col-lg-offset-2 col-lg-9">
                        <button type="submit" class="btn btn-primary">Publish</button>

                        <button type="reset" class="btn btn-default">Reset</button>
                       </div>
                                          </div>
                                      </form>
                                    </div>


                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>

            </div>

          </div>
              <!-- project team & activity end -->

          </section>
          <div class="text-right">
          <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->

            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha384-pPttEvTHTuUJ9L2kCoMnNqCRcaMPMVMsWVO+RLaaaYDmfSP5//dP6eKRusbPcqhZ" crossorigin="anonymous"></script>
<!--    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>



    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    <!-- custom script for this page-->
<!--    <script src="js/sparkline-chart.js"></script>
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
  <script src="js/jquery.slimscroll.min.js"></script> -->
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  </script>

  </body>
</html>
