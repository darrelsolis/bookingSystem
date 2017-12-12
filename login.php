<?php
  session_start();
  /*Everytime the user goes to the login page, all session variables are deleted and the current session is disconnected*/
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>

    <style>
      #logo{
        margin-top: -50px;
        text-align: right;
      }
      #loginbutton{
        width: 500px;
      }

      #form{
        width: 500px;
      }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> C&J IMAGES  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- ekko lightbox-->
    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="icon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>

  <body data-spy="scroll" data-target="#navigation" data-offset="120">
     <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-btn btn-sm navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li class="active"><a href="#login">Log in</a></li>  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- contact-->
    <section id="login" style="background-color: #fff;" class="text-page"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading"> LOG IN </h2>
              <div class="col-md-6">
                <form method="post" action="loginProcess.php" class="contact-form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label> Username: </label>
                          <input type="text" name="username" placeholder="Enter your username" required="required" id="form" class="form-control">
                          <br>
                          <label > Password: </label>
                          <input type="password" name="password" placeholder="Enter your password" required="required" id="form" class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="text-center">
                      <input type="submit" name="name" value="LOG IN" class="btn btn-primary btn-block" id="loginbutton">
                    </div>
                </form>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <footer style="background-color: #111;" class="section-inverse">
      <div class="container"> 
        <div class="row copyright">
          <div class="col-md-6">
            <p>&copy;2016 C & J Images</p>
          </div>
          <div class="col-md-6">
            <p class="credit">Template by <a href="http://bootstrapious.com/landing-pages">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us. It is part of the licence conditions. Thanks for understanding :)
            -->
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <!-- Bootstrap CDN-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery Cookie - For Demo Purpose-->
    <script src="js/jquery.cookie.js"></script>
    <!-- Lightbox-->
    <script src="js/ekko-lightbox.js"> </script>
    <!-- Sticky + Scroll To scripts for navbar-->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <!-- google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
    <script src="js/gmaps.js"></script>
    <!-- main script-->
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>