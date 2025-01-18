 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	// mysqli_select_db($con,'patients');

   $id=$_GET['id'];

   $status=$_GET['status'];

 	
 	if($status==0)
 	{
 		 $q= "UPDATE `patients` SET `status` = '1' WHERE `patients`.`id` = $id";
    
   		  mysqli_query($con,$q); 
 	}

 	else if ($status==1) 
 	{
 		$q= "UPDATE `patients` SET `status` = '0' WHERE `patients`.`id` = $id";
    
   		  mysqli_query($con,$q);
 	}

  

   header('location:patients.php');

  ?>
