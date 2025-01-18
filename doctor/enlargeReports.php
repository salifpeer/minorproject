<?php 
	$con=mysqli_connect("localhost","root","","d-care");

	session_start();
	
	$id=$_SESSION['reportId'];

	$queryReports="SELECT * FROM `reports` WHERE id=$id";

  	$queryReportsExecute=mysqli_query($con,$queryReports);

  	$resReports =mysqli_fetch_array($queryReportsExecute);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="enlarge"></div>

 <h1><?php echo $resReports['patientName']; ?></h1>
 </body>
 </html>

 <style type="text/css">
 	
 	.enlarge
 	{
 		background: url(<?php echo $resReports['path']; ?>);
 		width:700px;
 		height: 700px; 
 	}

 </style>