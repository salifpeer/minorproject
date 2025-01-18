<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="C:\xampp\htdocs\d-care\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="admin.js"></script>
</head>
<body>

	<?php
	require 'dashboard.php';
	 ?>
	 			<div id="inner">
	 				
	 				<h1 id="update"><i class="fa fa-user-md img" aria-hidden="true"></i> Update <span><?php echo $res[1]; ?></span></h1><br>

		<form method="POST">
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="firstName" class="small  name" placeholder="First Name" value="<?php echo $res['firstName']; ?>">
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="lastName" class="small name" placeholder="Last Name"value="<?php echo $res['lastName']; ?>"><br><br>

     		<i style="position: relative;left: 45px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="UserName"value="<?php echo $res['username']; ?>"><br><br>

     		<label>Gender <i style="position: relative;left: 30px; color:#424652;" class="fa fa-transgender-alt" aria-hidden="true"></i><select name="gender" class="gender"value="<?php echo $res['gender']; ?>">
  								<option >Select Option</option>
  								<option>Male</option>
  								<option>Female</option>
  								<option>Transgender</option>
						  </select>
			</label>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob"value="<?php echo $res['dob']; ?>"></label><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-id-card" aria-hidden="true"></i><input type="text" name="licenseId" placeholder="License id" value="<?php echo $res['licenseId']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="number" class="small phone" name="mobileNumber" placeholder="Mobile Number" value="<?php echo $res[7]; ?>">

			<i style="position: relative;left: 48px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="number" class="small phone" name="phoneNumber" placeholder="Phone Number" value="<?php echo $res[8]; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input type="email" id='email' name="email" placeholder="Email" value="<?php echo $res['email']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="password" placeholder="Password" value="<?php echo $res['password']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="" placeholder="Confirm password"><br><br>

			<input class="btn btn-primary" type="submit" name="update" value="update">


		</form>		


	 	</div>


</body>
</html>


<style type="text/css">

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
	}

	form input:focus
	{
	
   		border: 1.5px solid #08f
	}

	.small
	{
		width:44.8%;
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
	margin-left: 140px;
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

	.name
	{
		margin-left: 24px;
	}

	.phone
	{
		margin-left: 26px;
		width: 44.7;

	}
</style>

<!-- 
<style type="text/css">

	#addDoc
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
		color: white;
	}
	#addDoc>span
	{
		color: #08f;
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
		width: 55%;
		height: auto;
		margin:80px auto;
		background: #22242A;
		padding: 20px;
		padding-left: 0;
		padding-right: 30px;
		border-radius: 30px;
		color: white;
		padding-bottom: 20px;
		box-shadow: 0px 0px 15px rgba(0,136,255,.7);
		margin-bottom: 20px;
	}



	form input
	{
		width: 94.5%;
		height: 30px;
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
		padding-top: 5px;
		padding-bottom: 5px;

	}

	form input:focus
	{
	
   		border: 1.5px solid #08f
	}

	.small
	{
		width:44.8%;
		margin-left: 26px;
		font-size: 16px;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;

	}

	.small:focus
	{
		border: 1.5px solid #08f
	}

	.dob
	{
		width: 190px;
		margin-bottom:12px;
		text-indent: 20px;
	}

	#doblabel
	{
	margin-left: 110px;
	}

	form label
	{
		margin-left: 5%;
	}

	.gender
	{
		width: 180px;
		height: 30px;
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
		width: 25%;
		text-align: center;
		margin-left: 40%;
		padding-right: 5%;
		padding-top: 2px;
		box-shadow: none;
		vertical-align: middle;
	}
	.name
	{
		margin-left: 24px;
		width: 44%;

	}

	.phone
	{
		margin-left: 26px;
		width: 44%;

	}
</style>

 -->