<?php
  /*Variables get data from login form*/
	$username = $_POST['username'];
	$password = $_POST['password'];

  /*A variable to determine if login is successful*/
	$loginSuccess = 0;
	$conn = new mysqli("127.0.0.1","root","","booking_system");
	$sql = "SELECT id, username, password FROM userInfo";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {    
	    while($row = $result->fetch_assoc()) {      
          /*If username and password match, user id is passed to $id and $loginSucess is incremented*/
          if($row["username"] == $username && $row["password"] == $password){
            $loginSuccess++;
            $id = $row["id"];
          }
	    }	    
	}
?>
  
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
          width: 45px;
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
                <li><a href="index2.php">Home</a></li>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="login.php">Log Out</a></li>  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
        <!-- text page end-->
    <section style="background-color: #fff;" class="text-page"> 
      <div class="login">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading"> Log in </h2>
            	<?php
                /*If $loginSucess is equal to 1, a session will start and all
                the data from the row will be assigned to a session variable
                that will be used in crossing multiple pages on the website*/
                if($loginSuccess == 1){
                  session_start();
                  $sql = "SELECT * FROM userInfo WHERE $id = id";
                  $result = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($result);

                  $_SESSION["id"] = $row["id"];
                  $_SESSION["firstname"] = $row["firstname"];
                  $_SESSION["lastname"] = $row["lastname"]; 
                  $_SESSION["username"] = $row["username"];
                  $_SESSION["password"] = $row["password"];
                  $_SESSION["email"] = $row["email"];
                  $_SESSION["address"] = $row["address"];
                  $_SESSION["gender"] = $row["gender"];
                  $_SESSION["age"] = $row["age"];
                  $_SESSION["birthmonth"] = $row["birthmonth"];
                  $_SESSION["birthday"] = $row["birthday"];
                  $_SESSION["birthyear"] = $row["birthyear"];
                  $_SESSION["fullbirthday"] = "$row[birthmonth] ". "$row[birthday], ". "$row[birthyear]";
                  $_SESSION["booking"] = $row["booking"];
                  
                  echo "<p style=font-style: italic> Welcome, <i> <a href='profile.php'>$_SESSION[firstname]</a> </i> </p>";
  								echo "<p> You have successfully logged in. </p>";
							  }else{
  								echo "Username and password do not match. Please try again.<br><br>";
  								echo "<input style='width:70px' type=submit value='BACK' class='btn btn-primary btn-block' id='loginbutton' onclick=goBack()>";
							  }
                echo"<script>
                        function goBack() {
                            window.history.back();
                        }
                      </script>";
                mysqli_free_result($result);
                mysqli_close($conn);		
              ?> 
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


