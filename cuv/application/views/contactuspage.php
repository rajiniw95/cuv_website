<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CUV|Donate</title>

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

      <form class="donate-form" action="<?php echo base_url('contactuspage_controller/contact_record');?>" method="post">        
        <div class="donate-wrap">

            <p><font color="black">
            <h3 align="center">Let's get in touch!</h3>
 </font></p>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name" autofocus>
            </div>

            <div class="input-group">
              <span class="input-group-addon"><i class="icon_phone"></i></span>
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" autofocus>
            </div>

            <div class="input-group">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="text" class="form-control" name="email" id="email" placeholder="E-mail Address" autofocus>
            </div> <br>

            <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-12">Leave a message...</label>
                                          <div class="col-lg-12">
                                              <textarea class="form-control " id="comment" name="comment" required></textarea>
                                          </div>
                                      </div> <br>

            <div class="input-group">
                                      <label class="control-label col-lg-12" for="inputSuccess"><font color="black">KEEPING IN TOUCH<br> CUV would like to contact you regarding this form. How should we get in touch?</font></label>
                                     
                                    
                                          <label class="checkbox">
                                              <input type="checkbox" id="Checkbox1" name="Checkbox1" value="phone"> <font color="black">Yes. I'd like to hear from you by phone</font>
                                          </label>

                                          <label class="checkbox">
                                              <input type="checkbox" id="Checkbox2" name="Checkbox2" value="email"><font color="black">Yes. I'd like to hear from you by email</font>
                                          </label>
                                          
                                      </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit" >Submit </button>
            
        </div>
      </form>
    <div class="text-right">
            
        </div>
    </div>


  </body>
</html>
 
<!--Donation Form Styling created in CSS as donate-form-->
