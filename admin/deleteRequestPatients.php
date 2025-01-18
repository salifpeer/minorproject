<?php 


  	$con=mysqli_connect("localhost","root","","d-care");

 	// mysqli_select_db($con,'patients');

   $id=$_GET['id'];


 	
 		 $q= "UPDATE `patients` SET `request` = '2' WHERE `id` = $id";
 		
    
   		  mysqli_query($con,$q); 

       header('location:requestPanel.php');

  ?>
