 <?php 

  	$con=mysqli_connect("localhost","root","","d-care");

 	
 		 $qD= "UPDATE `patients` SET `request` = '2' WHERE `request` = 0";
    
   		  mysqli_query($con,$qD); 

       header('location:requestPanel.php');

  ?>