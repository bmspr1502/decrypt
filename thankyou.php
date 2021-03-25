<?php
//echo "THANK YOU";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thank you</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
      /*body{
        background-image: url('images/thankyouimg.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
      }*/
      #myVideo {
      position: fixed;
      background-repeat: no-repeat;
      /*background-size: cover;*/
    }
      .dabba{
        margin-left: 25em;
        /*margin-top: 12em*/
        margin-right: 25em;
          margin-bottom: 10em;
        background-color: black;
        padding: 5%;
        color: white;
        opacity: 0.8;
      }
      h1, h4{
        text-align: center;
        color: white;
      }
      .social{
        text-align: center;
      }
      .fa{
        font-size: 25px;

      }
      ul li{
        display: inline;
      }
      .fa{
        padding: 20px;
      }
      .fa {
        background: black;
        color: white;
      }

    </style>
  </head>
  <body>
  <video autoplay muted loop id="myVideo">
        <source src="images/image4.mp4" type="video/mp4">
    </video>
    <!--
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand">
            <img src="images/logo.png" height="50" alt="Robotics">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
            <p class="nav-item text-white">DECRYPTIT</button>
            </div>
        </div>
    </nav>
    <div class="bg">
    -->
    <div class="dabba">
      <h1>Thank you for participating</h1>
      <h4>Results will be mailed to your registered mail id </h4>
      <h4>For more updates follow us on</h4>
      <div class="social">
      <ul>
      <li><a href= '#' class="fa fa-facebook"></a></li>
      <li><a href="#" class="fa fa-instagram"></a></li>
      <li><a href="#" class="fa fa-twitter"></a></li>
      <li><a href="#" class="fa fa-linkedin"></a></li>
    </ul>
    <a href="index.php">Go back to home page</a>
      </div>


    </div>
  </body>
</html>
