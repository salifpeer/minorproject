 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	
 		 $qD= "UPDATE `doctors` SET `request` = '1' WHERE `request` = 0";
    
   		  mysqli_query($con,$qD); 

       header('location:requestPanel.php');

  ?>
