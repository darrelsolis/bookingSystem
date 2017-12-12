<!DOCTYPE html>
<html class="no-js">
  <head>
    <style>
        #radio{
          width: 30px;
        }
        #month,#age{
          width: 130px;
        }

        #day{
          width: 60px;
        }

        #year{
          width: 80px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> C&J IMAGES</title>
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
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="register.php">Register</a></li>
                <li ><a href="login.php">Log in</a></li>  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
        <!-- text page end-->
    <section style="background-color: #fff;" class="text-page"> 
      <div class="register">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading"> Register </h2>
            <div class="row">
              <div class="col-md-6">
                <form id="contact-form" method="post" action="regProcess.php" class="contact-form">
                  <div class="controls">
                          <div class="form-group">
                          <label for="name"> Firstname: </label>
                          <input type="text" name="firstname" placeholder="Enter your firstname" required="required" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="surname">Lastname: </label>
                            <input type="text" name="lastname" placeholder="Enter your lastname" required="required" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="password">Username: </label>
                            <input type="text" name="username" placeholder="Enter your username" required="required" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" name="password" placeholder="Enter your password" required="required" class="form-control">
                          </div>   

                          <div class="form-group">
                            <label for="password">Confirm Password: </label>
                            <input type="password" name="confirm" placeholder="Confirm your password" required="required" class="form-control">
                          </div>                       

                          <div class="form-group">
                          <label for="email">E-mail: </label>
                          <input type="email" name="email" placeholder="Enter your e-mail" required="required" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="address">Address: </label>
                            <input type="text" name="address" placeholder="Enter your address" required="required" class="form-control">
                          </div>

                          <div class="form-group">
                          <label> Age: </label><br>
                          <input type="number" name="age" id="age" class="form-control" value="<?php echo $_SESSION['age']; ?>">
                          </div>
                            
                          <div class="form-group">
                          <label>Gender:</label><br>
                          <input type="radio" name="gender" value="Male" required="required">&nbsp&nbspMale&nbsp&nbsp&nbsp
                          <input type="radio" name="gender" value="Female" required="required">&nbsp&nbspFemale
                          </div>
                          
                          
                          <div class="form-group">
                          <label>Birthday: </label><br>
                          <select name="month" value='' id="month">
                          <option value="January"> Month </option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                          </select>

                          <?php
                            echo "<select name=day id=day>";
                            echo "<option value=''> Day </option>";
                            for($day=1;$day<=31;$day++){
                            echo "<option value='$day'>$day</option>";
                            }
                            echo "</select>";
                          ?>

                          <?php
                            echo "<select name=year id=year>";
                              echo "<option value=''> Year </option>";
                              for($i=0;$i<=80;$i++){
                              $year=date('Y',strtotime("-$i year"));
                              echo "<option name='$year'>$year</option>";
                              }
                              echo "</select>";
                          ?>
                          </div>           
                  </div>
                  <div class="text-center"><br>
                    <input type="submit" name="name" value="Register" class="btn btn-primary btn-block">
                  </div>
                </form>  
                
              </div>
            </div>
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