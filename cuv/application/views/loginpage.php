<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>CUV|login</title>

    <script src="js/jquery-1.8.3.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet">

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

      <form class="login-form" action="http://localhost/cuv_website/cuv/homepage">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" id="username" name="name" placeholder="Username" autofocus>
            </div>
            <div class="username-notify" id="username-notify"><p class="text-invalid">Invalid Username</p></div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
            </div>
            <div class="password-notify" id="password-notify"><p class="text-invalid"> Invalid Password </p></div>

            <button class="btn btn-primary btn-lg btn-block" id="loginButton" type="submit">Login</button>

        </div>
      </form>
    <div class="text-right">

        </div>
    </div>

    <script src="js/login.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
  </body>
</html>
