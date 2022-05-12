<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";
// Create connection
$connect = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="card">
      <h1>Shopping cart</h1>
      <?php
$query ="SELECT *FROM tblproduct ORDER BY id ASC";
$result =mysqli_query($connect,$query);
if (mysqli_num_rows($result)>0) {
  while ($row= mysqli_fetch_array($result)) {
    // code...
  }
}
       ?>
      <div class="card">
<form  action="index.php?action=add&id="<?php echo $row["id"]; ?> method="post">
  <div >
    <?php
if ($row[name] == "shampo") {
  echo '<img src="img\s.jpg">' ;

}

      ?>

    <h4><?php echo $row[name]; ?></h4>
    <h4>$ <?php echo $row[price]; ?></h4>
    <input type="text" name="quantity" value="1">
    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
    <input type="submit" name="add_to_cart" value="Add to cart ">

  </div>
</form>
      </div>
    </div>

  </body>
</html>
