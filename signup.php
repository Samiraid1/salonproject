

  <?php
  require "header.php"
  ?>


    <div class=" card" >
      <h3>Sign up form</h3>
    </div>
    <div class="card" >
<p>
Signup now and Book your Appointmant .
</p>
<?php
// Here we create an error message if the user made an error trying to sign up.
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyfields") {
    echo '<p class="signuperror">Fill in all fields!</p>';
  }
  else if ($_GET["error"] == "invaliduidmail") {
    echo '<p class="signuperror">Invalid username and e-mail!</p>';
  }
  else if ($_GET["error"] == "invaliduid") {
    echo '<p class="signuperror">Invalid username!</p>';
  }
  else if ($_GET["error"] == "invalidmail") {
    echo '<p class="signuperror">Invalid e-mail!</p>';
  }
  else if ($_GET["error"] == "passwordcheck") {
    echo '<p class="signuperror">Your passwords do not match!</p>';
  }
  else if ($_GET["error"] == "usertaken") {
    echo '<p class="signuperror">Username is already taken!</p>';
  }
}
// Here we create a success message if the new user was created.
else if (isset($_GET["signup"])) {
  echo "<script>alert('sign up sucessful!');</script>";
  header('Location:log.php');
}
?>


      <form  action="includes/signup.inc.php" method="post">
        <?php
        // Here we check if the user already tried submitting data.

        // We check username.
        if (!empty($_GET["uid"])) {
          echo '<label>
						   <input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'"></label><br><br>';
        }
        else {
          echo '<label>
						 <input type="text" name="uid" placeholder="Username"></label><br><br>';
        }

        // We check e-mail.
        if (!empty($_GET["mail"])) {
          echo '<label>
						  <input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">
          </label><br><br>';
        }
        else {
          echo '<label>
						  <input type="text" name="mail" placeholder="E-mail">
          </label><br><br>';
        }
        ?>

        <label>
            <input  type="password" name="pwd" placeholder="password"></label><br><br>
           <label>
                <input  type="password" name="pwd-repeat" placeholder="Repeat password"></label><br><br>
<button class="button1"  type="submit" name="signup-submit">Signup</button>
      </form>
    </div>


  <?php
  require "footer.php"
  ?>
