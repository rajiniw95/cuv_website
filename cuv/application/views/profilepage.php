
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|MyProfile</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />


    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <link href="css/profile_css.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/profilepage.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" class="">

      <header class="header dark-bg">


            <a href="index.html" class="logo">Colombo University<span class="lite">Volunteers</span></a>


            <div class="nav search-row" id="top_menu">

            </div>

            <div class="top-nav notification-row">

            </div>
      </header>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
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
          </div>
      </aside>

      <section id="main-content">
          <section class="wrapper">

              <div class="container">

        <div class="row">






































          <div class="container">
          <div class="row">
                <div class="col-md-12 text-center ">
                  <div class="panel panel-default">
                    <div class="userprofile social ">
                      <div class="userpic"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="userpicimg"> </div>
                      <h3 class="username"><?php echo $this->session->userdata('FirstName')." ". $this->session->userdata('LastName'); ?></h3>
                      <p class="username"><?php echo $this->session->userdata('Faculty'); ?></p>

                    </div>

                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 pull-right">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1 class="page-header small">Personal Details</h1>
                    <a  <button type="button" class="btn btn-info" href="<?php echo base_url('updateprofile_controller/index');?>">Update Profile</button>></a>

                    </div>
                    <div class="col-md-12">
                      <ul class="list-group">
                        <li class="list-group-item"><span class="fa fa-user"></span> <?php echo "  ".$this->session->userdata('username'); ?></li>
                        <li class="list-group-item"><span class="fa fa-envelope-o fa-fw"></span> <?php echo "  ".$this->session->userdata('email'); ?></li>
                        <li class="list-group-item"><span class="fa fa-male"></span><?php echo "  ".$this->session->userdata('Gender'); ?></li>

                        <li class="list-group-item"><span class="fa fa-credit-card"></span><?php echo "  ".$this->session->userdata('NIC'); ?></li>
                        <li class="list-group-item"><span class="fa fa-phone">   </span><?php echo"  ". $this->session->userdata('ContactNo'); ?></li>

                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                </div>

              </div>
          </div>
          </div>

















        </div>
      </div>

            </section>

    <script src="js/profile.js"></script>




    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->

    <script  type="text/javascript" src="js/scripts.js"></script>


  </body>
</html>
