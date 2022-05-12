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




				

	<!-- 	booking info-->
		<div  style="text-align:center">
		<h3 class="text-center card" style="background-color:#272327;color: #fff;">Book Appoinment <i class="fas fa-book"></i></h3>
			<div class=" card" >
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">

<?php
if (!isset($_SESSION['id'])){

}else {
while($row=mysqli_fetch_array($result)){
echo $name= "<h2>hi ".$row['uidUsers']."</h2>";
 $email= "".$row['emailUsers']."";
 $name= "".$row['uidUsers']."";
}
}

?>
<br><br>
                    <label>
						 program: <select name="pro" required>
										<option value="">-select-</option>
										<option value="Haircut">Haircut</option>
										<option value="Dye">Dye</option>
										<option value="nails">Nails</option>
										<option value="">dye</option>
									</select>
					</label><br><br>

 					<label>
						 Phone number: <input type="text" name="pcontact" value=""required pattern="[0-9]{10,11}">
					</label><br><br>


					<label>
						 Date(YYYY.MM.DD): <input type="date" name="dates" value=""required>
					</label><br><br>
					<label>
						 Time: <select name="tyme" required>
							 <option value="">-select-</option>
               <option value='01.00pm'>01.00pm</option>
               <option value='01.00pm'>02.00pm</option>
							 <option value='01.00pm'>03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment" required>
										<option value="">-select-</option>
										<option value="cash">cash</option>
										<option value="card">card</option>
									</select>
					</label><br><br>
					
					<label for="vehicle1"> I agree</label>

					<input type="checkbox" id="check" name="check" value="agree" required>
                    

					<button class="button2" name="submit" type="submit">Confirm</button>
					


				</form> <br><br>

			</div>


		</div>
				<!-- 	booking info-->

			<!-- confirming booking -->
					<?php



						if(isset($_POST['submit'])){

							if (!isset($_SESSION['id'])){ 
						 echo "<script>alert('Please log first');</script>" ;
					 }else {
					 
						 $sql = " INSERT INTO booking(name,email,tyme,pro,phone,payment,dates)
							 VALUES ('$name','$email','" . $_POST["tyme"] . "','" . $_POST["pro"] . "','" . $_POST["pcontact"] . "','" . $_POST["payment"] . "' ,'" . $_POST["dates"] . "')";

							 if (mysqli_query($conn,$sql) === TRUE) {
									 $_SESSION['booked'] = TRUE;
									 header('Location:index.php');

							 } else {
									 echo "<script>alert('There was an Error')<script>";
							 }

							 $conn->close();
						 }

					 }


					?>

				



	<?php
	require "footer.php";
	?>






