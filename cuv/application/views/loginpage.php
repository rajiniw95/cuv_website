<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>CUV|login</title>

  <!--  <script src="js/jquery-1.8.3.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pdapHxIh7EYuwy6K7iE41uXVxGCXY0sAjBzaElYGJUrzwodck3Lx6IE2lA0rFREo" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet">

</head>

  <body class="login-imgbubbles-body">

    <div class="container">
    <header class="header dark-bg">

            <a href="index.html" class="logo">Colombo University<span class="lite">Volunteers</span></a>

            <div class="nav search-row" id="top_menu">

            </div>

            <div class="top-nav notification-row">

            </div>
      </header>




      <form class="login-form" action="<?php echo base_url('Login/LoginUser');?>" method="post">





        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <?php if ($this -> session -> flashdata('errmsg')) {
             echo " <h3>".$this->session->flashdata('errmsg')."</h3>";
           }
           ?>




            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus>
            </div>
            <?php echo form_error('username'); ?>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
            </div>
            <?php echo form_error('pwd'); ?>


            <button class="btn btn-primary btn-lg btn-block" id="loginButton" type="submit">Login</button>

        </div>
      </form>

    <div class="text-right">

        </div>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
  </body>
</html>
