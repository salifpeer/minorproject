<?php
	require 'dashboard.php';
?>
<?php    
if(isset($_POST['update']))
  {
  	$id=$res['id'];

  	$username=$_POST['username'];
  	$dob=$_POST['dob'];
  	$mobileNumber=$_POST['mobileNumber'];
  	$email=$_POST['email'];

  	 $sourceProfile=$_FILES['profilePic']['tmp_name'];

  	 $nameProfile=$_FILES['profilePic']['nameProfile'];

  	 $destinationProfile='profilePic/'.rand().time().$nameProfile;

  	 move_uploaded_file($sourceProfile, $destinationProfile);


  	 $sourceDisplay=$_FILES['displayPic']['tmp_name'];

  	 $nameDisplay=$_FILES['displayPic']['nameDisplay'];

  	 $destinationDisplay='displayPic/'.rand().time().$nameDisplay;

  	 move_uploaded_file($sourceDisplay, $destinationDisplay);


  	$q="update doctors set username='$username',dob='$dob',mobileNumber='$mobileNumber',email='$email',profilePic='$destinationProfile',displayPic='$destinationDisplay' where id=$id"; 

  	$query=mysqli_query($con,$q);

   header('location:profile.php');

  } 
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="C:\xampp\htdocs\d-care\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	
</head>
<body>

	
	 			<div id="inner">
	 				
	 				<h1 id="edit"><i class="fa fa-user-md img" aria-hidden="true"></i> edit <span><?php echo $res['firstName']; ?></span></h1><br>

		<form method="POST" enctype="multipart/form-data">
     		
 		<div class="inputs">
 			<label>Choose Profile Picture</label>
 			<input class="fields " type="file" name="profilePic">
 		</div>

 		<div class="inputs">
 			<label>Choose cover Picture</label>
 			<input class="fields " type="file" name="displayPic" >
 		</div>
<style type="text/css">
	
	.inputs
	{
		display: inline-block;
		width:433px;
		margin-left: 20px;

	}

	.fields
	{
		margin-left: 20px;
		cursor: pointer;
	}

	.inputs>label
	{
		margin-left: 20px;
	}

</style>

<br><br>


     		<i style="position: relative;left: 45px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="Username" value="<?php echo $res['username']; ?>"><br><br>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob" value="<?php echo $res['dob']; ?>"></label>

			

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="number" class="small phone" name="mobileNumber" placeholder="Mobile Number" value="<?php echo $res['mobileNumber']; ?>">
			<br><br>
			

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input style="text-transform: none;" type="email" name="email" placeholder="Email" value="<?php echo $res['email']; ?>"><br><br>

			<input class="btn btn-primary" type="submit" name="update" value="update">


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

			storeRight[0].style="margin-left:91px;";
			storeRight[1].style="margin-left: 87px;";
			storeRight[2].style="margin-left: 77px;";
			storeRight[3].style="margin-left: 32px;";
			storeRight[4].style="margin-left: 74px;";
			

			temp=0;
		}	

	}
</script>


<style type="text/css">

	.img
	{
		color: white;
		font-size: 50px;
	}

	body
	{
		background: url(0.jpg);
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

	#edit
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
		color: white;
		text-transform: capitalize;
	}
	#edit>span
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

	.small
	{	
		width: 51%;
		margin-left: 26px;
		font-size: 16px;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
		text-transform: capitalize;
	}

	.small:focus
	{
		border: 1.5px solid #08f
	}

	.dob
	{
		width: 250px;
		margin-left:;
	}

	#doblabel
	{
	margin-left: 40px;
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

