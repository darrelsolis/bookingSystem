<?php
  session_start();
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <style>
        .menu{
          margin-top: -30px;
        }

        .recentbookings,{
          max-width: 2000px;
          margin-top: -10px;
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
                <li><a href="index2.php">Home</a></li>
                <li class="active"><a href="profile.php">My Profile</a></li>
                <li><a href="login.php">Log Out</a></li> 
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
            <h2 class="heading"> MY PROFILE </h2>
            <div class="row">
              <div  class="col-md-6">
                <div class="menu">
                  <h5 style="font-size: 15px"> <a style="text-decoration: underline; font-weight: bold; color: black">About</a> &nbsp/&nbsp
                    <a href="bookings.php">Bookings</a> &nbsp/&nbsp
                    <a href="feedback.php">Feedback</a> &nbsp/&nbsp
                    <a href="edit.php">Edit</a> &nbsp/&nbsp
                  <a href="deleteinitial.php">Delete</a> </h5> 
                </div>
                <hr>
                <i style="font-size:16px; letter-spacing: 0.5px; word-spacing: 3px">
                  <!--Displays user data from the "userinfo" table-->
                  <p> Firstname: <?php echo " $_SESSION[firstname]"; ?> </p>
                  <p> Lastname: <?php echo " $_SESSION[lastname]"; ?> </p>
                  <p> Username: <?php echo " $_SESSION[username]"; ?> </p>
                  <p> E-mail: <?php echo " $_SESSION[email] "; ?> </p>
                  <p> Address: <?php echo " $_SESSION[address] "; ?> </p>
                  <p> Gender: <?php echo " $_SESSION[gender] "; ?> </p>
                  <p> Age: <?php echo " $_SESSION[age] "; ?> </p>
                  <p> Birthday: <?php echo " $_SESSION[fullbirthday] "; ?> </p>
                  <p> Number of Bookings: <?php echo " $_SESSION[booking]"; ?> </p>
                  <p> 
                    <?php
                      $conn = new mysqli("127.0.0.1","root","","booking_system");
                      $sql = "SELECT * FROM bookings";  
                      $result = $conn->query($sql);

                      /*Recent bookings will only display if "bookings" table has a data AND 
                      the user's number of bookings is greater than 0*/
                      if($result->num_rows > 0 && $_SESSION["booking"] > 0){
                          echo "Recent Bookings:";
                          echo "<div class='recentbookings'>";
                          echo "<table border='1'>";                          
                          echo "
                                    <tr>
                                      <th nowrap style='text-align: center'> &nbspDate Reserved&nbsp </th>
                                      <th nowrap style='text-align: center'> &nbspDate of Event&nbsp </th>
                                      <th nowrap style='text-align: center';> &nbspType of Shoot&nbsp  </th>
                                      <th nowrap style='text-align: center';> &nbspLocation&nbsp  </th>
                                      <th nowrap style='text-align: center'> &nbsp&nbsp </th>
                                      <th nowrap style='text-align: center'> &nbsp&nbsp </th>
                                    </tr>";

                          /*Only the bookings that is booked by the user that is currently logged in
                          will be displayed*/
                          while($row = $result->fetch_assoc()){
                              if($row["userid"] == $_SESSION["id"]){
                                echo "
                                    <tr>
                                    <td nworap style='text-align: center' style='text-align: center' style='text-align: center'> &nbsp$row[reservedate]&nbsp </td>
                                    <td nworap style='text-align: center' style='text-align: center' style='text-align: center'> &nbsp$row[bookingmonth] $row[bookingday], $row[bookingyear]&nbsp </td>
                                    <td nowrap style='text-align: center' style='text-align: center'> &nbsp$row[type]&nbsp </td>
                                    <td nowrap style='text-align: center'> &nbsp$row[location]&nbsp</td>
                                    <td nowrap style='text-align: center'> &nbsp<a href='editbooking.php?id=".$row['id']."' >Edit</a>&nbsp</td>
                                    <td nowrap style='text-align: center'> &nbsp<a href='cancelbookinginitial.php?id=".$row['id']."' >Cancel</a>&nbsp</td>
                                    </tr>
                                ";
                              }                              
                          }
                          echo "</table>";    
                          echo "</div>";
                      }
                      $conn->close();
                    ?>
                  </p>
                </i>
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