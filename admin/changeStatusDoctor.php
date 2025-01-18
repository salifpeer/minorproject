 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	// mysqli_select_db($con,'doctors');

   $id=$_GET['id'];

   $status=$_GET['status'];

 	
 	if($status==0)
 	{
 		 $q= "UPDATE `doctors` SET `status` = '1' WHERE `doctors`.`id` = $id";
    
   		  mysqli_query($con,$q); 
 	}

 	else if ($status==1) 
 	{
 		$q= "UPDATE `doctors` SET `status` = '0' WHERE `doctors`.`id` = $id";
    
   		  mysqli_query($con,$q);
 	}

  

   header('location:Doctor.php');

  ?>
