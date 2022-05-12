<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.

?>
<!DOCTYPE html>
<html >
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app.css">
    <meta charset="utf-8">
    <title>Login</title>
    <style >
      *{
        box-sizing: border-box;
        font-family: 'Rajdhani', sans-serif;
      }
    </style>
  </head>
  <div class="card2" style="width:100%">


    <div >
      <div class=" card" >
        <h3>Sign in</h3>
      </div>
      <?php
        if (!isset($_SESSION['id'])) {


          echo '<div class="card">

          <form action="includes/login.inc.php" method="post">
          <input  type="text" name="mailuid" placeholder="Your Username" required> <br>
          <input  type="password" name="pwd" placeholder="Your Password" required> <br>

          <button class="button1" type="submit" name="login-submit">Login</button>
          <br><a href="signup.php">Sign Up</a>
          </form>
          </div>';
        }
        else if (isset($_SESSION['id'])) {
          echo '';
        }
        ?>

    </div>
  </div>
  <div class="card4" style="height:150px;padding:0;margin:0">

  </div>
</html>
