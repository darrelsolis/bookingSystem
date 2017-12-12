<!--HOMEPAGE: If the user is logged in-->
<?php
  session_start();
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <style>
      #booking,#feedback{
        margin-top: -20px;
      }

      #contacticon{
        margin-top: -15px;
      }
      img:hover{
        opacity: 0.8;
      }
      i:hover{
        opacity: 0.5;
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
    <!-- intro-->
    <section id="intro" style="background-image: url('img/background.jpg');" class="intro">      
      <div class="overlay"></div>
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <h1 style="text-align: center"> WELCOME </h1>
              <p class="italic" style="text-align: center"> C & J Images is a joint venture catering to a wide variety of photography services. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- intro end-->
    <!-- navbar-->
    <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-btn btn-sm navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#text">Bookings</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.navbar-->
    <!-- about-->
    <section id="about" class="text">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="heading">About Us</h2>
            <p class="lead"> C & J Images was founded by Von Beltran on March 28, 2013.  </p>
            <p> In partnership with his colleague they came up the business. At first, we used photo booth box within the first year in the industry. After a year, Von invested in equipment and bought three photo booth set-ups. Later on came up with a package deal of photography services.  </p> 
          </div>
          <div class="col-md-5 col-md-offset-1">
            <p>
              <a href="img/logo.png" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="C & J IMAGES LOGO"  ><img src="img/logo.png" alt="" class="img-responsive"></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- about end-->
    <!-- Services-->
    <section id="services" style="background-color: #eee">
      <div class="container">
        <div class="row services">
          <div class="col-md-12">
            <h2 class="heading">Services</h2>
            <div class="row">
              <div class="col-sm-4">
                <div class="box">
                  <div class="icon"><i class="fa fa-desktop"></i></div>
                  <h4> RESERVATIONS </h4>
                  <p> We offer first-come first-serve basis. </p>
                </div>  
              </div>

              <div class="col-sm-4">
                <div class="box">
                  <div class="icon"><i class="fa fa-print"></i></div>
                  <h4> PRINTING </h4>
                  <p> C&J Images give you the best quality of pictures in hardcopy. </p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="box">
                  <div class="icon"><i class="fa fa-globe"></i></div>
                  <h4> GLOBAL </h4>
                  <p> Our services can be reached all throughout the world. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services end-->
    
    <!-- Portfolio / gallery-->
    <section id="portfolio" class="gallery">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <h2 class="heading">Portfolio</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="img/1.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="DEBUT PHOTO 1"  ><img src="img/1.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="img/2.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="DEBUT PHOTO 2"  ><img src="img/2.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="img/3.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="DEBUT PHOTO 3"  ><img src="img/3.jpg" alt="" class="img-responsive"></a></div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="img/4.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="DEBUT PHOTO 4"  ><img src="img/4.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="img/5.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="DEBUT PHOTO 5" ><img src="img/5.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="img/6.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="WEDDING PHOTO 1" ><img src="img/6.jpg" alt="" class="img-responsive"></a></div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="img/7.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="WEDDING PHOTO 2" ><img src="img/7.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
              <div class="col-sm-4">
                <div class="box"><a href="img/8.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="WEDDING PHOTO 3" ><img src="img/8.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
              <div class="col-sm-4">
                <div class="box"><a href="img/9.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="WEDDING PHOTO 4" ><img src="img/9.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio / gallery end-->
    <!-- text page-->
    <section id="text" style="background-color: #333;" class="text-page section-inverse">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Bookings</h2>
            <div class="row" >
               <div class="col-sm-6" id="booking">
                <?php
                    /*Displays the firstname of the user with a link to his or her profile*/                  
                    echo "<i><p style='font-size: 18px'> Hi, <a href='profile.php' style='color:white'>$_SESSION[firstname]</a>! </p></i>";
                    echo "<a href=bookings.php> <input value='BOOK AN EVENT' class='btn btn-primary btn-block'> </a><br>";
                    echo "<a href=login.php> <input value='LOG OUT' class='btn btn-primary btn-block'> </a><br>";
                ?> 
               </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- text page end-->
    <!-- contact-->
    <section id="contact" style="background-color: #fff;" class="text-page"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Contact Us</h2>
            <div class="row">
              <div class="col-md-6">
                <form id="contact-form" method="get" action="feedback.php" class="contact-form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-6">
                        <i><p style="font-size: 18px"> E-mail: cj_images@yahoo.com </p></i>
                        <i><p style="font-size: 18px"> Mobile No: 0998 982 7802 </p></i>
                        <i><p style="font-size: 18px"> Connect with us through: <p class="social"><a href="https://www.facebook.com/CandJImages/?fref=ts" title="" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/" title="" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/collections/featured" title="" class="gplus" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.instagram.com/" title="" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://sg.yahoo.com/?p=us" title="" class="email" target="_blank"><i class="fa fa-envelope"></i></a></p></p></i><br><br>
                      </div>
                    </div>
                  </div> 
                </form>
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
                
                
               