 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");
 	//  mysqli_select_db($con,'doctors');

   $id=$_GET['id'];

   $q= "DELETE FROM `doctors` WHERE id = $id";
    
   mysqli_query($con,$q); 

   header('location:Doctor.php');

  ?>
