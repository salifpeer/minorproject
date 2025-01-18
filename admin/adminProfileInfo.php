<?php
	require 'dashboard.php';
	error_reporting(0);
?>
 <?php 

$adminId=$res['id'];

$checkQuery="SELECT * FROM `adminprofileinfo` where adminID='$adminId'";

  	        $data=mysqli_query($con,$checkQuery);

  	        $profile=mysqli_fetch_array($data);

  	if(isset($_POST['addInfo']))
  {
  	$adminId=$res['id'];
  	$specializedIn=$_POST['specializedIn'];
  	$address=$_POST['address'];
  	$designation=$_POST['designation'];

			$checkQuery="SELECT * FROM `adminprofileinfo` where adminID='$adminId'";

  	        $data=mysqli_query($con,$checkQuery);

            $total= mysqli_num_rows($data);

  	if ($total==1) 
  	{
  	
  	$updateQuery="UPDATE `adminprofileinfo` SET `adminID`='$adminId',`address`='$address',`specializedIn`='$specializedIn',`designation`='$designation'  WHERE adminID='$adminId'";

  		$queryUpdate=mysqli_query($con,$updateQuery);

  		header('location:profile.php');
  		// echo "<textarea>".$updateQuery."</textarea>";

  	}

  	else
  	{	
  		$insertQuery="INSERT INTO `adminprofileinfo`(`adminID`, `address`, `specializedIn`,`designation`) VALUES ('$adminId','$address','$specializedIn','$designation')"; 

  		// echo "<textarea>".$insertQuery."</textarea>";

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
	 				
	 				<h1 id="update"><i class="fa fa-bullseye" aria-hidden="true"></i> Add Info <span><?php echo $res['firstName']; ?></span></h1><br>

		<form method="POST">
     		
     		<i style="position: relative;left: 50px; color:#424652;" class="fa fa-gavel" aria-hidden="true"></i>
     		<input autocomplete="off" type="text" name="specializedIn"  placeholder="specialized IN" value="<?php echo $profile['specializedIn']; ?>"><br><br>

     		<i style="position: relative;left: 50px; color:#424652;" class="fa fa-user-plus" aria-hidden="true"></i>
     		<input autocomplete="off" type="text" name="designation"  placeholder="Designation" value="<?php echo $profile['designation']; ?>"><br><br>

     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-address-card" aria-hidden="true"></i>
     		<input autocomplete="off" type="text" name="address"  placeholder="Address" value="<?php echo $profile['address']; ?>"><br><br>

     		

			<input id="addInfo" type="submit" name="addInfo" value="Add Info">


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

			document.getElementById('sidemenu').style="left:0px;overflow: scroll;";
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

				document.getElementById('inner').style="margin-left:18%;";


			console.log('we are here by JS second');

			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				
			}

				storeRight[0].style="margin-left:97px;";
			storeRight[1].style="margin-left: 96px;";
			storeRight[2].style="margin-left: 121px;";
			storeRight[3].style="margin-left: 118px;";
			storeRight[4].style="margin-left: 60px;";
			storeRight[5].style="margin-left: 77px;";
			storeRight[6].style="margin-left: 117px;";
			storeRight[7].style="margin-left: 75px;";
			storeRight[8].style="margin-left: 60px;";

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

	
	#inner
	{
		width: 70%;
		height: auto;
		margin-left: 18%;
		background: #22242A;
		margin-top: 150px;
		padding: 20px;
		padding-left: 0;
		border-radius: 30px;
		color: white;
		margin-bottom: 20px;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px #bd00ff;
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
		color: #bd00ff;
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
	
   		border: 1.5px solid #bd00ff;
	}

	form .btn
	{
		width: 33%;
		text-align: center;
		margin-left: 35%;
		padding-right: 5%;
		box-shadow: none;
	}
#addInfo
{
	background: #bd00ff; 
	outline: 0;
	transition: .15s;
	transition-property: color;
	border: none;
	border-radius: 5px;
	border: 2px solid  #bd00ff;
	vertical-align: middle;
	color: white;
	width: 33%;
		text-align: center;
		margin-left: 35%;
		padding-right: 5%;
		box-shadow: none;
}

#addInfo:hover
{
	background: #7900a3;
	border: 2px solid  #7900a3;
}

#addInfo:active
{
	border: 2px solid #640086;
	box-shadow: 0px 0px 5px #640086;
}

</style>

