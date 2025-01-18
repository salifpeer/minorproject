<?php

session_start();
$userprofile=$_SESSION['username'];

$id=$_SESSION['id'];

$con=mysqli_connect("localhost","root","","d-care");

// mysqli_select_db($con,'d-care');

$display="select * FROM `admin` WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$res=mysqli_fetch_array($query1);

  	echo $res['firstName'];

  	echo $res['profileImage'];

if($userprofile==true)
{

}
else
{
	header('location:login.php');
}

?>