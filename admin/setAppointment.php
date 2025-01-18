<?php 
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

     	echo "<h1>"."Your appointment has been successfully set"."</h1>";

 ?>