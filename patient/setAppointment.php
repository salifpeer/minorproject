<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
// require 'dashboard.php';
$con = mysqli_connect("localhost", "root", "", "d-care");

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

// mysqli_select_db($con, 'appointments');

$doctorId = $_GET['doctorId'];
$patientId = $_GET['patientId'];

// Fetch doctor info
$getInfoDoc = "SELECT * FROM doctors WHERE id = '$doctorId'";
$getInfoDocExecute = mysqli_query($con, $getInfoDoc);

if (!$getInfoDocExecute) {
	die("Error fetching doctor info: " . mysqli_error($con));
}

$infoDoctor = mysqli_fetch_array($getInfoDocExecute);

// Fetch patient info
$getInfoPatient = "SELECT * FROM patients WHERE id = '$patientId'";
$getInfoPatientExecute = mysqli_query($con, $getInfoPatient);

if (!$getInfoPatientExecute) {
	die("Error fetching patient info: " . mysqli_error($con));
}

$infoPatient = mysqli_fetch_array($getInfoPatientExecute);

$doctorId = $infoDoctor['id'];
$doctorName = $infoDoctor['firstName'] . ' ' . $infoDoctor['lastName'];
$doctorSpeciality = $infoDoctor['speciality'];
$doctorContact = $infoDoctor['mobileNumber'];
$patientId = $infoPatient['id'];
$patientName = $infoPatient['firstName'] . ' ' . $infoPatient['lastName'];
$patientContact = $infoPatient['mobileNumber'];

if (isset($_POST['btn'])) {
	
	$appointmentQuery = "INSERT INTO appointments (doctorId, doctorName, doctorSpeciality, doctorContact, patientId, patientName, patientContact, dateOFBooking) 
                     VALUES ('$doctorId', '$doctorName', '$doctorSpeciality', '$doctorContact', '$patientId', '$patientName', '$patientContact', '{$_POST['appt_date_time']}')";


	$QueryExecute = mysqli_query($con, $appointmentQuery);

	if ($QueryExecute) {
		header('location:payment.php');
	} else {
		die("Error inserting appointment: " . mysqli_error($con));
	}
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div style="    width: 100%;
    background-image: linear-gradient(to right, #642b73,#c6426e);
    height: 70px;
    font-size: 30px;
    padding: 20px;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;">Dcare</div>
 <div class="message">

     <h1 class="text-left">Dcare</h1>
 	  <form method="post">
 	  	<div class="input-group">
 	  		<label>Please Chose the date/time of Appointment</label>
 	  	  <input type="datetime-local" name="appt_date_time" class="form-control">

 	  </div>	
 	   <div>
 	  	  <input type="submit" name="btn" class=" btn btn-primary">
        </div>
 	  </form>
	
	<!-- <h1 ><span class="text-warning">Appointment</span>  Booked successfully</h1><br><br> -->

	<!--<label>Click <a onclick="goback()" href="welcome.php" class="text-info stretched-link">here</a> to return</label>-->


</div>
 </body>
 </html>

 <style type="text/css">

 	body
 	{
 		margin: 0;
 		background: url(6.jpg);
 	}
	
	.message
	{
		margin-top: 100px;
		margin-left: 200px;
		/*position: fixed;
		top: 200px;
		left: 290px;
		bottom: 0;
		height: auto;
		padding: 20px;
		width: 800px;
		background: #22242a;
		border-radius: 15px;
		box-shadow: -2px -2px 25px #bd00ff;
*/	}

	/*.message>h1
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
*/ </style>

 <script type="text/javascript">
	
	// setTimeout(goback,2000);

	// function goback()
	// {
	// 	window.location = "bookAppointment.php";	
	// }

</script> 

<style type="text/css">
	body 
	{
		background-color: whitesmoke;
	}
</style>