<?php
require 'dashboard.php';

  $con=mysqli_connect("localhost","root","","d-care");

//   mysqli_select_db($con,'reports');

  		$id=$_GET['id'];
  		
  		$query="SELECT * FROM patients JOIN reports on patients.id = reports.patientId where patientId = '$id'";

  		$queryExecute= mysqli_query($con,$query);

  		$display = mysqli_fetch_array($queryExecute);



              
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="background">
	


</div>

<style type="text/css">
	

.background
{
	background: url(<?php echo $display['path']; ?>);   
	width:300px;
	height: 300px;
	margin-left: 100px;
	margin-top: 100px;
	border-radius: 50px;
	border:3px solid purple;
	background-size: cover;
	background-position: center;
}

</style>


</body>
</html>