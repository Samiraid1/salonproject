<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>

  <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="app.css">
      <title>Website</title>
  </head>

<body>


  <div class="header "style="padding-bottom:50px">
    <h1><span>B</span>ella <span>D</span>onna</h1>
    <p>All what a women wants for her beauty.</p>
  </div>
  <div class="hum">
    <button class="burger"><i class="fas fa-bars"></i></button>
  </div>

  <nav class="topnav">
    <a href="index.php">HOME</a>
    <a href="offers.php">NEW OFFERS</a>
    <a href="contact.php">countact us</a>
    <a href="booking.php">BOOK Appoinment</a>
    <a href="gallery.php">Gallery</a>
    <a href="aboutus.php">about us</a>

    <?php   if (!isset($_SESSION['id'])){
      echo '<a href="signup.php" style="margin-left:auto;">signup <i class="fas fa-user-plus"></i></a>
      <a href="log.php">Login <i class="fas fa-sign-in-alt"></i></a>' ;
    }else {
      echo '
      <a style="margin-left:auto;" href="profile.php">Profile <i class="fas fa-user"></i></a>
      <a href="includes/logout.inc.php" >logout <i class="fas fa-sign-out-alt"></i></a>' ;
    }
     ?>
   </nav>
<main>
