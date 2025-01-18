	<?php 

  	$con=mysqli_connect("localhost","root","","d-care");
  	// mysqli_select_db($con,'patients');

  	$id=$_GET['id'];

 	 $display="select * FROM `patients` WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$res=mysqli_fetch_array($query1);


  	$id=$_GET['id'];

  	$firstName=$_POST['firstName'];
  	$lastName=$_POST['lastName'];
  	$username=$_POST['username'];
  	$gender=$_POST['gender'];
  	$dob=$_POST['dob'];
  	$mobileNumber=$_POST['mobileNumber'];
  	$phoneNumber=$_POST['phoneNumber'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];

  	$q="update patients set id=$id,firstName='$firstName',lastName='$lastName',username='$username',gender='$gender',dob='$dob',mobileNumber='$mobileNumber',phoneNumber='$phoneNumber',email='$email',password='$password' where id=$id"; 



  	$query=mysqli_query($con,$q);

  	header('location:patients.php');


 ?>  