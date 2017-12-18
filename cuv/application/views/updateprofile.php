<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|MyProfile</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pdapHxIh7EYuwy6K7iE41uXVxGCXY0sAjBzaElYGJUrzwodck3Lx6IE2lA0rFREo" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>css/landpage.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/profile_css.css" rel="stylesheet">


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

              <div class="container" style="padding-top: 10px;">
        <h1 class="page-header">Edit Profile</h1>
        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
              <img src="<?php echo base_url(); ?>img/<?php echo $this->session->userdata('url'); ?>" class="avatar img-circle img-thumbnail" alt="avatar">
              <h6>Upload a different photo...</h6>

            <!--  <form id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left" action="<?php echo base_url() ?>upload/do_upload" method="POST"> -->
               <?=form_open_multipart('gallery/update')?>

                  <input type="file" name="userfile" size="20" class="text-center center-block well well-sm" />



                  <input type="submit" value="upload" />

                  </form>



            </div>
          </div>

          <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-coffee"></i>
              This is an <strong>.alert</strong>. Your profile examing by CUV admin.
            </div>
            <h3>Personal info</h3>

              <form class="form-horizontal" role="form"action="<?php echo base_url('updateprofile_controller/register_user');?>" method="post">
              <div class="form-group">
                <label class="col-lg-3 control-label">First name:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('FirstName'); ?>" type="text" name="fname">
                  <?php echo form_error('fname'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Last name:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('LastName'); ?>" type="text" name="lname">
                  <?php echo form_error('lname'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">National Id:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('NIC'); ?>" type="text" name="nic">
                  <?php echo form_error('nic'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Address:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('Address'); ?>" type="text" name="address">
                  <?php echo form_error('address'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Contact No:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('ContactNo'); ?>" type="text" name="mobile">
                  <?php echo form_error('mobile'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" value="<?php echo $this->session->userdata('email'); ?>" type="text" name="email">
                  <?php echo form_error('email'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-md-8">
                  <input class="form-control"  type="password" name="pwd">
                  <?php echo form_error('pwd'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Confirm password:</label>
                <div class="col-md-8">
                  <input class="form-control"  type="password" name="conf_pwd">
                  <?php echo form_error('conf_pwd'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input class="btn btn-primary" value="Save Changes" type="submit">
                  <span></span>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

            </section>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha384-pPttEvTHTuUJ9L2kCoMnNqCRcaMPMVMsWVO+RLaaaYDmfSP5//dP6eKRusbPcqhZ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>js/profile.js"></script>





  </body>
</html>
