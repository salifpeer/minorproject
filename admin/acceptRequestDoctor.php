 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	// mysqli_select_db($con,'doctors');

   $id=$_GET['id'];


 	
 		 $q= "UPDATE `doctors` SET `request` = '1' WHERE `id` = $id";
    
   		  mysqli_query($con,$q); 

       header('location:requestPanel.php');

  ?>
