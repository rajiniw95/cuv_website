<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|Register</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-imgbubbles-body">

    <div class="container">
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

    <!--for checking validation errors-->
    <?php echo validation_errors(); ?>
 
      <form class="reg-form" action="<?php echo base_url('registerpage_controller/register_user');?>" method="post">   
        
        <div class="reg-wrap">

            <div class="input-group">
             <span class="input-group-addon"><i class="icon_profile"></i></span>
             <input type="text" name="fname" id ="fname" class="form-control" placeholder="First Name" autofocus>
           </div>


           <div class="input-group">
             <span class="input-group-addon"><i class="icon_profile"></i></span>
             <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" autofocus>
           </div>


           <div class="input-group">
             <span class="input-group-addon"><i class="icon_id"></i></span>
             <input type="text" id="nic" name="nic" class="form-control" placeholder="NIC Number" autofocus>
           </div>


            <div class="input-group">
                                      <label class="control-label col-lg-4" for="inputSuccess">Gender</label>
                                      <div class="col-lg-8">
                                          <label class="radio-inline">
                                             <input type="radio" name= "Gender" id="Radio1" value="Male"><font size="10"> <i class="fa fa-male" aria-hidden="true"></i></font>
                                         </label>
                                         <label class="radio-inline">
                                             <input type="radio" name="Gender" id="Radio2" value="Female"><font size="10"> <i class="fa fa-female" aria-hidden="true"></i></font>
                                         </label>
                                         </div> </div>
               
          

            <div class="input-group">
              <span class="input-group-addon"><i class="icon_house_alt"></i></span>
              <input type="text" name="address" id="address" class="form-control" placeholder="Address" autofocus >
            </div>


            <div class="input-group">
              <span class="input-group-addon"><i class="icon_phone"></i></span>
              <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" autofocus >
            </div>


            <div class="input-group">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="text" name="email" id="email" class="form-control" placeholder="E-mail Address" autofocus>
            </div> <br>


            <div class="input-group">
              <span class="input-group-addon"><i class="  icon_pens"></i></span>
              <input type="text" name="faculty" id="faculty" class="form-control" placeholder="Faculty" autofocus >
            </div>


            <div class="input-group">
              <span class="input-group-addon"><i class="icon_genius"></i></span>
              <input type="text" name="position" id="position" class="form-control" placeholder="Position" autofocus >
            </div>


            <div class="input-group">
              <span class="input-group-addon"><i class="icon_genius"></i></span>
              <input type="text" name="username" id="username" class="form-control" placeholder="Select a Username" autofocus >
            </div>


            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Create Password">
            </div>
            
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="conf_pwd" id="conf_pwd" class="form-control" placeholder="Re-enter Password">
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Let's Register!</font>
            
            
        </div>
        
      </form>


    <div class="text-right">
            
        </div>
    </div>


  </body>
</html>

<!--Registration Form Styling created in CSS as reg-form-->
