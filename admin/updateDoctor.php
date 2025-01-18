<?php
	require 'dashboard.php';
?>

<?php 


  	$id=$_GET['id'];

 	$display="select * FROM `doctors` WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$result=mysqli_fetch_array($query1);


 
   if(isset($_POST['update']))
  {
  	$id=$_GET['id'];

  	$firstName=$_POST['firstName'];
  	$lastName=$_POST['lastName'];
  	$username=$_POST['username'];
  	$gender=$_POST['gender'];
  	$dob=$_POST['dob'];
  	$speciality=$_POST['speciality'];
  	$mobileNumber=$_POST['mobileNumber'];
  	$phoneNumber=$_POST['phoneNumber'];
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  	$lastUpdated='admin'.$res['firstName']." ".$res['lastName'].' And id= '.$res['id'];

  	$q="update doctors set firstName='$firstName',lastName='$lastName',username='$username',gender='$gender',dob='$dob',speciality='$speciality',mobileNumber='$mobileNumber',phoneNumber='$phoneNumber',email='$email',password='$password',lastUpdated='$lastUpdated' where id=$id"; 

 		echo '<textarea>'.$q.'</textarea><br><br><br>';
  	

  	$query=mysqli_query($con,$q);


   header('location:doctor.php');


  }


 ?>  

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	
	 			<div id="inner">
	 				
	 				<h1 id="update"><i class="fa fa-user-md img" aria-hidden="true"></i> Update <span><?php echo $result['firstName']; ?></span></h1><br>

		<form class="add" method="POST">
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="firstName" class="small  name" placeholder="First Name" value="<?php echo $result['firstName'] ?>">
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="lastName" class="small name" placeholder="Last Name" value="<?php echo $result['lastName'] ?>"><br><br>

     		<i style="position: relative;left: 45px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="UserName" value="<?php echo $result['username'] ?>" ><br><br>

     		<label>Gender <i style="position: relative;left: 30px; color:#424652;" class="fa fa-transgender-alt" aria-hidden="true"></i><select name="gender" class="gender"value="<?php echo $result['gender']; ?>">
  								<option  ><?php echo $result['gender']; ?></option>
  								<option value="male">Male</option>
  								<option value="Female">Female</option>
  								<option value="transgender">Transgender</option>
						  </select>
			</label>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob" value="<?php echo $result['dob']; ?>"></label><br>
<label class="specialityLabel"> Speciality

 </label>
 <?php 
$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality`";

$filterQueryExecute=mysqli_query($con,$filterQuery);
echo "<select class='gender speciality' name='speciality' >";
echo "<option  >".$result['speciality']."</option>";

    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
   

       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
 		

</select>
     <br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="number" class="small phone" name="mobileNumber" placeholder="Mobile Number" value="<?php echo $result['mobileNumber']; ?>">

			<i style="position: relative;left: 50px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="number" class="small phone" name="phoneNumber" placeholder="Phone Number" value="<?php echo $result['phoneNumber']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" placeholder="Email" value="<?php echo $result['email']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="password" placeholder="Password" required="" value="<?php echo $result['password']; ?>"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="" placeholder="Confirm password" value="<?php echo $result['password']; ?>"><br><br>

			<input class="btn btn-primary Add" type="submit" name="update" value="Update">


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


<style type="text/css">

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
		margin-left:15%;
		margin-top: 100px;
		background: #22242A;
		padding: 20px;
		padding-left: 0;
		border-radius: 30px;
		color: white;
		margin-bottom: 10px;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px rgba(0,136,255,.7);
		transition: .5s;
		overflow-x: hidden;
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
	margin-left: 100px;
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

	

	form .submit
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

	.speciality
	{
		width: 60%;
		margin-top: 15px;
		margin-left: 20px;
	}
	.specialityLabel
	{
		margin-left: 100px;
	}

	.Add
	{
		width: 20%;
		margin-left: 40%;
		box-shadow: none;
		text-indent: 10px;		
	}
</style>

