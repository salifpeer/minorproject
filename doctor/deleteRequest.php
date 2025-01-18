<?php 


  	$con=mysqli_connect("localhost","root","","d-care");


    $id=$_GET['id'];

  
 	$q= "UPDATE `appointments` SET `request` = '2' WHERE `id` = $id";
    
   	mysqli_query($con,$q); 
 	
	header('location:requestPanel.php');

  ?>
