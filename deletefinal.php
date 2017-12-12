<?php
  session_start();
  /*Deletes the user and its data from the "userinfo" table*/
  $conn = new mysqli("127.0.0.1","root","","booking_system");
  $sql = "SELECT * FROM userInfo WHERE $_SESSION[id] = id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  $userid = $row["id"];
  $firstname = $row["firstname"];
  $lastname = $row["lastname"]; 
  $username = $row["username"];
  $password = $row["password"];
  $email = $row["email"];
  $address = $row["address"];
  $gender = $row["gender"];
  $age = $row["age"];
  $birthmonth = $row["birthmonth"];
  $birthday = $row["birthday"];
  $birthyear = $row["birthyear"];
  $booking = $row["booking"];

  mysqli_free_result($result);
  mysqli_close($conn);

  /*Selects the booking that belongs to the user logged in*/
  $conn = new mysqli("127.0.0.1","root","","booking_system");
  $sql = "SELECT * FROM bookings WHERE $_SESSION[id] = userid";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0 && $_SESSION["booking"] > 0){  
     /*Only the bookings that is booked by the user will be transferred to the "deletedbookings" table*/
     while($row = $result->fetch_assoc()){
         if($row["userid"] == $_SESSION["id"]){
            $bookingid = $row['id'];
            $user_id = $row['userid'];
            $location = $row['location'];
            $type = $row['type'];
            $bookingmonth = $row['bookingmonth'];
            $bookingday = $row['bookingday'];
            $bookingyear = $row['bookingyear'];
            $reservedate = $row['reservedate'];

            $conn2 = new mysqli("127.0.0.1","root","","booking_system");
            $sql2 = "INSERT INTO deletedbookings(bookingid,userid,location,type,bookingmonth,bookingday,bookingyear,reservedate)
                     VALUES('$bookingid','$user_id','$location','$type','$bookingmonth','$bookingday','$bookingyear','$reservedate')";
            if($conn2->query($sql2) === TRUE){
                                   
            }else{
              echo "<p> Error transferring bookings: ".$conn2->error."</p>";
            }
            mysqli_close($conn2);

            /*Deletes the booking from the "bookings" table*/
            $conn2 = new mysqli("127.0.0.1","root","","booking_system");
            $sql2 = "DELETE FROM bookings WHERE $bookingid=id";
            if($conn2->query($sql2) === TRUE){
                                   
            }else{
              echo "<p> Error deleting booking: ".$conn2->error."</p>";
            }
            mysqli_close($conn2);
          }
      }
  }
  mysqli_close($conn);         

  /*Transfers the account information to a separate table named "deletedusers" before deleting it*/
  $conn = new mysqli("127.0.0.1","root","","booking_system");
  $sql = "INSERT INTO deletedusers(userid,firstname,lastname,username,password,email,address,gender,age,birthmonth,birthday,birthyear,booking)
          VALUES('$userid','$firstname','$lastname','$username','$password','$email','$address','$gender','$age','$birthmonth','$birthday','$birthyear','$booking')";
  if($conn->query($sql) === TRUE){
                         
  }else{
    echo "<p> Error transferring your account: ".$conn->error."</p>";
  }
  $conn->close();         

  /*Deletes the account from the eye of the user*/
  $conn = new mysqli("127.0.0.1","root","","booking_system");  
  $sql = "DELETE FROM userinfo WHERE $_SESSION[id] = id";
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <style>
        .menu{
          margin-top: -30px;
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
                <li class="active"><a href="login.php">My Profile</a></li>
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
            <h2 class="heading"> DELETE ACCOUNT </h2>
            <div class="row">
              <div  class="col-md-6">
                <div class="menu">
                  <h5 style="font-size: 15px"> <a href="login.php">About</a> &nbsp/&nbsp
                    <a href="login.php">Bookings</a> &nbsp/&nbsp
                    <a href="login.php">Feedback</a> &nbsp/&nbsp
                    <a href="login.php">Edit</a> &nbsp/&nbsp
                  <a style="text-decoration: underline; font-weight: bold; color: black">Delete</a> </h5> 
                </div>
                <hr>
                <p style="letter-spacing: 0.5px; word-spacing: 3px">
                  <?php
                    if($conn->query($sql) === TRUE){
                    /*Deletes all the data in the session variables and disconnects the session*/                    
                      session_unset();
                      session_destroy();
                      echo "<p> Your account has been successfully deleted. </p>";
                    }else{
                      echo "<p> Error deleting account: ".$con->error."</p>";
                    }
                    $conn->close();                
                  ?>                
                </p>
                <a href="login.php" style="font-family:Montserrat; letter-spacing: 0.5px; font-size: 12px;"><input type="submit" value="OK" id="loginbutton" style="width:70px" class="btn btn-primary btn-block"></a>           
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