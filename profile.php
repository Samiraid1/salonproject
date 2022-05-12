
    <?php
 include('header.php');
 $email =$_SESSION["email"];

 $get_name = " SELECT * FROM users WHERE emailUsers = '".$_SESSION["email"]."'  ";
         $result = mysqli_query($conn,$get_name);
        $qu = mysqli_num_rows($result);

        while($row=mysqli_fetch_array($result)){
          
           $email= "".$row['emailUsers']."";
           $name= "".$row['uidUsers']."";
          }
   if (!isset($_SESSION['id'])){
  header("Location: log.php");
}else {
     $email =$_SESSION["email"];

     $sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
    				 $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);
            
            
}


     if($count>=1){
      echo '<div class="card">
      <div class ="center-text"><h1 style="font-size:100px" ><i class="far fa-user-circle"></i></h1>';
      echo '<h2>'.$name.'</h2><br>';
      echo '<h4>'.$email.'</h4>';
      echo'</div>';
           echo "<table  border='1' align='center' cellpadding='32'>
             <tr>
              
               <th>Appoinment Date</th>
               <th>Time</th>
             </tr>";
           while($row=mysqli_fetch_array($result)){
               echo "<tr>";
              
               echo "<td>".$row['dates']."</td>";
               echo "<td>".$row['tyme']."</td>";

               echo "</tr>";
           }
           echo "</table>";
           echo '</div>';
         }
         else{     

          echo '<div class="card">
       <div class ="center-text"><h1 style="font-size:100px" ><i class="far fa-user-circle"></i></h1>';
       echo '<h2>'.$name.'</h2><br>';
       echo '<h4>'.$email.'</h4>';
       echo'</div>';
       
           echo "<table  border='1' align='center' cellpadding='32'>
             <tr>
               
               <th>Appointment</th>
             </tr>";
          
               echo "<tr>";
             
               echo "<td>No Appointment yet.</td>";
               echo "</tr>";
           
           echo "</table>";
           echo '</div>';
         }

         ?>

        


     <?php
             
           require "footer.php";
         ?>


