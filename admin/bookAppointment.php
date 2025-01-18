<?php 

    require 'dashboard.php';
    error_reporting(0);

	$con=mysqli_connect("localhost","root","","d-care");

 	// mysqli_select_db($con,'appointments');

   		
   		$doctorId=$_GET['doctorId'];

   		$getInfoDoc = "SELECT * FROM `doctors` WHERE `id` = '$doctorId';";

		$getInfoDocExecute=mysqli_query($con,$getInfoDoc);

		$infoDoctor = mysqli_fetch_array($getInfoDocExecute);

		$patientId=$_GET['patientId'];

		$getInfoPatient = "SELECT * FROM `patients` WHERE `id` = '$patientId';";

		$getInfoPatientExecute=mysqli_query($con,$getInfoPatient);

		$infoPatient = mysqli_fetch_array($getInfoPatientExecute);

		$doctorId=$infoDoctor['id'];

		$doctorName=$infoDoctor['firstName'].' '.$infoDoctor['lastName'];

		$doctorSpeciality=$infoDoctor['speciality'];


		$doctorContact=$infoDoctor['mobileNumber'];

		$patientId=$infoPatient['id'];

		$patientName=$infoPatient['firstName'].' '.$infoPatient['lastName'];

		$patientContact=$infoPatient['mobileNumber'];

		$appointmentQuery="INSERT INTO `appointments`(`doctorId`, `doctorName`, `doctorSpeciality`, `doctorContact`, `patientId`, `patientName`, `patientContact`) VALUES ('$doctorId','$doctorName','$doctorSpeciality','$doctorContact','$patientId','$patientName','$patientContact')";

     	$QueryExecute = mysqli_query($con,$appointmentQuery);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="message">
	
	<h1 ><i class="fa fa-user-md text-primary" aria-hidden="true"></i>&nbsp <span class="text-primary">Doctor</span>  Assigned successfully</h1><br><br>

	<label>Click <a onclick="goback()" href="#" class="text-info stretched-link">here</a> to return</label>


</div>
 </body>
 </html>

 <style type="text/css">

 	body
 	{
 		margin: 0;
 		background: url(1.jpg);
 	}
	
	.message
	{
		position: fixed;
		top: 200px;
		left: 290px;
		height: auto;
		padding: 20px;
		width: 800px;
		background: #22242a;
		border-radius: 15px;
		box-shadow: -2px -2px 25px #bd00ff;
	}

	.message>h1
	{
		text-align: center;
		margin-top: 60px;
		color: whitesmoke;
	}	

	.message>label
	{
		color: whitesmoke;
		margin-left: 300px;
		text-transform: capitalize;
	}
 </style>

 <script type="text/javascript">
	
	setTimeout(goback,2000);

	function goback()
	{
		window.location = "assignDoctor.php";	
	}

</script> 