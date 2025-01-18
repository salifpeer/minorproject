<?php
	require 'dashboard.php';
	$doctorsId=$res['id'];

  	$checkQuery="select * from doctorcontactdetails where doctorsId='$doctorsId'";

  	        $data=mysqli_query($con,$checkQuery);

  			$result=mysqli_fetch_array($data);

  			error_reporting(0);
?>
 <?php 

   if(isset($_POST['addInfo']))
  {

  	$doctorsId=$res['id'];
  	$permanentAddress=$_POST['permanentAddress'];
  	$clinicAddress=$_POST['clinicAddress'];
  	$emailId=$_POST['emailId'];
  	$phoneNumber=$_POST['phoneNumber'];
  	$alternatePhoneNumber=$_POST['alternatePhoneNumber'];
  	$visitingHours=$_POST['visitingHours'];
  	$workingDays=$_POST['workingDays'];


		$checkQuery="select * from doctorcontactdetails where doctorsId='$doctorsId'";

  	        $data=mysqli_query($con,$checkQuery);

            $total= mysqli_num_rows($data);

  	if ($total==1) 
  	{
  		$updateQuery="UPDATE `doctorcontactdetails` SET `permanentAddress`='$permanentAddress',`clinicAddress`='$clinicAddress',`clinicEmail`='$emailId',`phoneNumber`='$phoneNumber',`alternatePhoneNumber`='$alternatePhoneNumber',`visitingHours`='$visitingHours',`workingDays`='$workingDays' WHERE doctorsId='$doctorsId'";

  		$queryUpdate=mysqli_query($con,$updateQuery);

  		header('location:profile.php');
  	}


  	else
  	{
  		$insertQuery="INSERT INTO `doctorcontactdetails`(`doctorsId`, `permanentAddress`, `clinicAddress`, `clinicEmail`, `phoneNumber`, `alternatePhoneNumber`, `visitingHours`, `workingDays`) VALUES ('$doctorsId','$permanentAddress','$clinicAddress','$emailId','$phoneNumber','$alternatePhoneNumber','$visitingHours','$workingDays')"; 

  		$queryInsert=mysqli_query($con,$insertQuery);
  		
  		header('location:profile.php');

  	}

  }


 ?>  


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
    <link rel="stylesheet"  href="/../d-care/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet"  href="/../d-care/bootstrap-4.5.2-dist/css/bootstrap.css">

    <script type="text/javascript" src="/../d-care/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>

	
	 			<div id="inner">
	 				
	 				<h1 id="update"><i class="fa fa-user-md img" aria-hidden="true"></i> Add Info <span></span></h1><br>

		<form method="POST">
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-address-card" aria-hidden="true"></i><input type="text" name="permanentAddress"  placeholder="permanent Address" value="<?php echo $result['permanentAddress'] ?>" ><br><br>
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-address-card-o" aria-hidden="true"></i><input type="text" name="clinicAddress"  placeholder="Clinic Address" value="<?php echo $result['clinicAddress'] ?>"><br><br>

     		<i style="position: relative;left: 45px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i></i><input type="email" name="emailId" placeholder="Clinic email Id" value="<?php echo $result['clinicEmail'] ?>" ><br><br>


			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="text" name="phoneNumber" placeholder="Clinic phone Number" value="<?php echo $result['phoneNumber'] ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="text"  name="alternatePhoneNumber" placeholder="alternate Phone Number"  value="<?php echo $result['alternatePhoneNumber'] ?>"><br><br>

			<i style="position: relative;left: 48px; color:#424652;" class="fa fa-clock-o" aria-hidden="true"></i><input type="text"  name="visitingHours" placeholder="visiting Hours" value="<?php echo $result['visitingHours'] ?>"><br><br>

			<i style="position: relative;left: 48px; color:#424652;" class="fa fa-calendar-check-o" aria-hidden="true"></i><input type="text"  name="workingDays" placeholder="working Days" value="<?php echo $result['workingDays'] ?>"><br><br>

			<input class="btn btn-primary" type="submit" name="addInfo" value="Add Info">


		</form>		


	 	</div>


</body>
</html>

<script type="text/javascript">
	
	temp = 0;

	storeRight=document.getElementsByClassName('right');

	storeLeft=document.getElementsByClassName('left');


	function toggle()
	{
		if (temp==0) 
		{	
			temp=1;

			document.getElementById('sidemenu').style="left:0px;";
			document.getElementById('inner').style="margin-left:25%;";

			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				
				console.log('we are here by JS first');
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

				document.getElementById('inner').style="margin-left:15%;";


			console.log('we are here by JS second');

			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				
			}

			storeRight[0].style="margin-left: 97px;";
			storeRight[1].style="margin-left: 96px;";
			storeRight[2].style="margin-left: 95px;";
			storeRight[3].style="margin-left: 118px;";
			storeRight[4].style="margin-left: 77px;";
			storeRight[5].style="margin-left: 75px;";
			storeRight[6].style="margin-left: 60px;";
			temp=0;
		}	

	}
</script>


<style type="text/css">
	.fa
	{
		z-index: 0;
	}

	.img
	{
		color: white;
		font-size: 50px;
	}

	body
	{
		background: url(4.jpg);
	}
	
	#inner
	{
		width: 70%;
		height: auto;
		margin-left: 15%;
		background: #22242A;
		margin-top: 90px;
		padding: 20px;
		padding-left: 0;
		border-radius: 30px;
		color: white;
		margin-bottom: 20px;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px rgba(0,136,255,.7);
		transition: .5s;
	}

	#update
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
		color: white;
		text-transform: capitalize;
	}
	#update>span
	{
		color: #08f;
	}

	form input
	{
		width: 94.5%;
		height: 40px;
		margin-left: 20px;
		border-radius: 5px;
		border:none;
		text-indent:30px;
		font-size: 16px;
		outline: none;
		transition: .15s;
		transition-property: border;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
		text-transform: capitalize;
	}

	form input:focus
	{
	
   		border: 1.5px solid #08f
	}



	.dob
	{
		width: 600px;
		margin-left:20px;
	}

	#doblabel
	{
	margin-left: 50px;
	}

	form label
	{
		margin-left: 5%;
	}

	.gender
	{
		width: 250px;
		height: 40px;
		border-radius: 5px;
		outline: none;
		text-indent: 30px;
		transition: .15s;
		transition-property: border;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
	}

	.gender:focus
	{
		border: 1.5px solid #08f
    
	}

	.gender>option
	{
		outline: none;
		border: none;
	}

	.gender>option:hover
	{
		border: 3px solid #08f;
	}

	

	form .btn
	{
		width: 33%;
		text-align: center;
		margin-left: 35%;
		padding-right: 5%;
		box-shadow: none;
	}

</style>

