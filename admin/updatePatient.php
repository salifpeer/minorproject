 	<?php
	require 'dashboard.php';
	 ?>


	<?php 

  	$con=mysqli_connect("localhost","root","","d-care");
  	// mysqli_select_db($con,'patients');

  	$id=$_GET['id'];

 	 $display="select * FROM `patients` WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$res=mysqli_fetch_array($query1);


 
   if(isset($_POST['update']))
  {

  	$id=$_GET['id'];

  	$firstName=$_POST['firstName'];
  	$lastName=$_POST['lastName'];
  	$username=$_POST['username'];
  	$gender=$_POST['gender'];
  	$dob=$_POST['dob'];
  	$mobileNumber=$_POST['mobileNumber'];
  	$phoneNumber=$_POST['phoneNumber'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];

  	$q="update patients set id=$id,firstName='$firstName',lastName='$lastName',username='$username',gender='$gender',dob='$dob',mobileNumber='$mobileNumber',phoneNumber='$phoneNumber',email='$email',password='$password' where id=$id"; 

  	$query=mysqli_query($con,$q);

  	header('location:patients.php');

  }

 ?>  

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>


	 			<div id="inner">
	 					 
	 				<h1 id="update"><i style="font-size: 50px;margin-right: 5px;" class="fa fa-wheelchair" aria-hidden="true"></i>
Update <span><?php echo $res['firstName']; ?></span></h1><br>

		<form method="POST" >
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="firstName" class="small name" placeholder="First Name" value="<?php echo $res['firstName']; ?>" >
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="lastName" class="small name" placeholder="Last Name" value="<?php echo $res['lastName']; ?>"><br><br>

     		<i style="position: relative;left: 45px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="UserName" value="<?php echo $res['username']; ?>"><br><br>

     		<label>Gender <i style="position: relative;left: 30px; color:#424652;" class="fa fa-transgender-alt" aria-hidden="true"></i><select class="gender" name="gender" value="<?php echo $res['gender']; ?>">
  								<option  ><?php echo $res['gender']; ?></option>
     			
  								<option>Select Option</option>
  								<option>Male</option>
  								<option>Female</option>
  								<option>Transgender</option>
						  </select>
			</label>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob" value="<?php echo $res['dob']; ?>"></label><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="number" class="small phone" name="mobileNumber" placeholder="Mobile Number" value="<?php echo $res['mobileNumber']; ?>">

			<i style="position: relative;left: 48px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="number" class="small phone" name="phoneNumber" placeholder="Phone Number" value="<?php echo $res['phoneNumber']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" placeholder="Email" value="<?php echo $res['email']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="password" placeholder="Password" value="<?php echo $res['password']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="" placeholder="Confirm password" value="<?php echo $res['password']; ?>"><br><br>

			<input class="btn btn-danger text-white" type="submit" name="update" value="Update">


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
		background: url(5.jpg);
		background-size: 100%;
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
		box-shadow: 0px 0px 15px rgba(255,193,7,.7);
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
		color: #ee6e73;
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
	
   		border: 1.5px solid #ee6e73;
	}

	.small
	{
		width:44.8%;
		margin-left: 26px;
		font-size: 16px;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
		text-transform: capitalize;
		background: white;
	}

	.small:focus
	{
		border: 1.5px solid #ee6e73;
	}

	.dob
	{
		width: 250px;
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
		border: 1.5px solid #ee6e73;
    
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
		width: 44.7%;

	}

</style>

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

				document.getElementById('inner').style="margin-left:15%;";


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