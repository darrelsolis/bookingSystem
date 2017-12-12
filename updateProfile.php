<?php
  session_start();

  /*Variable to know if the the username and email are taken*/
  $userDup = 0;
  $emailDup = 0;
  
  $username = $_POST['username'];
  $password = $_POST['newpassword'];
  $confirm = $_POST['confirm'];
  $email = $_POST['email'];

  $conn = new mysqli("127.0.0.1","root","","booking_system"); 
  $sql = "SELECT id, username, email FROM userInfo";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {    
    while($row = $result->fetch_assoc()) {
      if($row["id"] == $_SESSION['id']){

      }else{
        if($row["username"] == $username){
          $userDup++;
        }

        if($row["email"] == $email){
          $emailDup++;
        }
      }  
    }     
  }
  $conn->close();
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
            <h2 class="heading"> Edit Profile </h2>
            <div class="row">
              <div  class="col-md-6">
                <div class="menu">
                  <h5 style="font-size: 15px"> <a href="login.php">About</a> &nbsp/&nbsp
                    <a href="bookings.php">Bookings</a> &nbsp/&nbsp
                    <a href="feedback.php">Feedback</a> &nbsp/&nbsp
                    <a style="text-decoration: underline; font-weight: bold; color: black">Edit</a> &nbsp/&nbsp
                  <a href="deleteinitial.php">Delete</a> </h5> 
                </div>
                <hr>
                <p style="letter-spacing: 0.5px; word-spacing: 3px">
                        <?php
                            $conn = new mysqli("127.0.0.1","root","","booking_system");

                            /*Data would not be updated to the database if username, email, or both username and email are taken*/
                            if($userDup > 0 && $emailDup > 0){
                              echo "<p> Sorry, your username and e-mail are already taken. </p>";
                              echo "<input type=submit value=BACK class='btn btn-primary btn-block' id='loginbutton' style='width:80px' onclick=goBack()>";
                            }else if($userDup > 0){
                              echo "<p> Sorry, your username is already taken. </p>";
                              echo "<input type=submit value=BACK class='btn btn-primary btn-block' id='loginbutton' style='width:80px' onclick=goBack()>";
                            }else if($emailDup > 0){
                              echo "<p> Sorry, your e-mail is already taken. </p>";
                              echo "<input type=submit value=BACK class='btn btn-primary btn-block' id='loginbutton' style='width:80px' onclick=goBack()>";
                            }

                            /*Data would not be updated to the database if password and confirm password do not match*/
                            if($password != $confirm){
                              echo "<p> Password and confirm password do not match. </p>";
                              echo "<input type=submit value=BACK class='btn btn-primary btn-block' id='loginbutton' style='width:80px' onclick=goBack()>";
                            }

                            /*If username and email are both available, and password and confirm password match, 
                            all the data in the form will be assigned each to a session variable. This session
                            variables will be used to update the table in the database*/
                            if($userDup == 0 && $emailDup == 0 && $password == $confirm){
                              $_SESSION['firstname'] = $_POST['firstname'];
                              $_SESSION['lastname'] = $_POST['lastname'];
                              $_SESSION['username'] = $_POST['username'];
                              $_SESSION['password'] = $_POST['newpassword'];    
                              $_SESSION['email'] = $_POST['email'];
                              $_SESSION['address'] = $_POST['address'];
                              $_SESSION['gender'] = $_POST['gender'];
                              $_SESSION['age'] = $_POST['age'];
                              $_SESSION['birthmonth'] = $_POST['month'];
                              $_SESSION['birthday'] = $_POST['day'];
                              $_SESSION['birthyear'] = $_POST['year'];
                              $_SESSION['fullbirthday'] = "$_POST[month] ". "$_POST[day], ". "$_POST[year]";

                              $sql = "UPDATE userinfo SET firstname='$_SESSION[firstname]', lastname='$_SESSION[lastname]', username='$_SESSION[username]', password='$_SESSION[password]', email='$_SESSION[email]', address='$_SESSION[address]', gender='$_SESSION[gender]', age='$_SESSION[age]', birthmonth='$_SESSION[birthmonth]' ,birthday='$_SESSION[birthday]', birthyear='$_SESSION[birthyear]' WHERE id=$_SESSION[id]";
                              
                              if($conn->query($sql) === TRUE){
                              echo "<p> Your profile has been updated. </p>";
                              echo "<a href=profile.php> <input type=submit value='GO TO YOUR PROFILE' class='btn btn-primary btn-block' id='loginbutton' style='width:200px'> </a>";
                              }
                            }
                              echo "<script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                    </script>";
                            $conn->close();     
                        ?>       
                </p>
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







