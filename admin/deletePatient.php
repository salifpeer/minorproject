 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");
 	//  mysqli_select_db($con,'patients');

   $id=$_GET['id'];

   $q= "DELETE FROM `patients` WHERE id = $id";
    
   mysqli_query($con,$q); 

   header('location:patients.php');

   echo $q;

  ?>
