 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	
 		 $qD= "UPDATE `doctors` SET `request` = '1' WHERE `request` = 0";
    
   		  mysqli_query($con,$qD); 

   		  $qP= "UPDATE `patients` SET `request` = '1' WHERE `request` = 0 ";
    
   		  mysqli_query($con,$qP);

       header('location:requestPanel.php');

  ?>
