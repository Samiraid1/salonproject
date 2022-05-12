<?php
 require "header.php";
   if (!isset($_SESSION['id'])){
  header("Location: log.php");
}else {

  $email =$_SESSION["email"];

  $get_name = " SELECT * FROM users WHERE emailUsers = '".$_SESSION["email"]."'  ";
 				 $result = mysqli_query($conn,$get_name);
 				$qu = mysqli_num_rows($result);

}
 ?>


 <?php
  if (!isset($_SESSION['id'])) {
    echo '<div class="card">
            <h1>SEE OUR NEW OFFERS</h1>
            <a class="button1" href="offers.php">press here</a>
            <h1>IF you want to Book Appointment ,Please log in first<h1>
            <a class="button1" href="log.php">press here</a>
          </div>';
  }

  else if (isset($_SESSION['id'])) {
    while($row=mysqli_fetch_array($result)){
      echo '<div class="card">';
      echo $name= "<h3 >hi ".$row['uidUsers']."</h3>";

      echo ' <h3>welcome to our website ,you can :</h3>
      <h1>SEE OUR NEW OFFERS </h1> <br> <a class="button1" href="offers.php">press here</a>
      <h1 >IF you want to Book Appointment</h1>
      <a class="button1" href="booking.php">press here</a>
      </div>';
  }
}

  require "footer.php";
  ?>
  

