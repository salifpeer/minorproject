<?php 
	require "dashboard.php";
$con=mysqli_connect("localhost","root","","d-care");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

	<div id="welcome">
		
		<div id="dpWelcome" ></div>

		<button onclick="hide()" class="btn btn-outline-dark text-white" ><i class="fa fa-times" aria-hidden="true"></i></button>

		<div class="welcomeDetails">
			
		<h1>Welcome</h1>
		<h1 ><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>
		<h1>Admin <span>#<?php echo $res['id']; ?></span></h1>
		</div>
	</div>

	
	 <div id="profile">

	 	 <div id="top" >
	 	

	 	<div id="dpinside" ></div>

		 </div>
	 		<h1 id="name1"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>

	 		<h3 id="post">Adminis<span>trator</span></h3><br><br>

	 		<h6 id="dash"><i class="fa fa-home dashsign" aria-hidden="true"></i> Dashboard</h6>
	 		<h5 id="overview">Overview </h5><br><br>

	 		<div class="info doctors"><h4>Total Doctors</h4> <i class="fa fa-user-md" aria-hidden="true"></i><br>

	 			 <?php
    				$sql="select count(id) as total from doctors where request =1";
    				$result=mysqli_query($con,$sql);
    				$values=mysqli_fetch_assoc($result);
    				$num_rows=$values['total'];
    				echo '<h4>'.$num_rows.'<h4>';

					?>
 		</div>

	 		<div class="info patients"><h4>Total Patients</h4> <i class="fa fa-wheelchair" aria-hidden="true"></i><br>
	 			<?php

    			$sql="select count(id) as total from patients where request =1";
    			$result=mysqli_query($con,$sql);
    			$values=mysqli_fetch_assoc($result);
    			$num_rows=$values['total'];
    			echo '<h4>'.$num_rows.'<h4>';
				?>
			</div><br><br>
	 </div>		


<style type="text/css">
	.tabs
	{
		width: 45%;
background: rgb(192,192,192);
background: linear-gradient(297deg, rgba(192,192,192,1) 0%, rgba(168,165,165,0.9715260709269663) 100%);
		display: inline-block;
		margin-left: 35px;
		padding: 20px;
		vertical-align: top;
		border-radius: 10px;
		color: #eeeeee;
		box-shadow: 5px 5px 15px #a8a5a5;
		margin-top: 30px;

	}
	.tabs>h5
	{
		text-align: center;
		font-family: arial;
	}
	.tabs>table{
		text-align: center;
		color: #eeeeee; 
		font-size: 18px;

	}

	.doctors
	{
background: rgb(0,136,255);
background-color: black;
	
	}

	.patients
	{
background: rgb(254,193,9);
background-color: tomato;



	}

	.medShops
	{
background: rgb(40,167,69);
background-color: orange;

	

	}

	.hospitals
	{
		background: rgb(255,147,32);
background-color: red;

	

	}
	
	.info
	{
		display: inline-block;
		width: 21%;
		margin-left: 40px;
		margin-top: 30px;
		vertical-align: top;
		border-radius: 10px;
		padding: 40px;
	}
	.info>h4
	{
		display: inline-block;
		color: #eeeeee;
		font-family: cambria math;
	}
	.info>i
	{
		font-size: 22px;
		float: right;
		/*margin-top: 5px;*/
		/*margin-right: 10px;*/
		color: #eeeeee;
	}

	#dash
	{
		margin-left: 10px;
		display: inline-block;
		color: #22242a;
		font-size: 20px;
		border:none;

	}
	.dashsign
	{
background-color:black;		padding: 10px;
		vertical-align: middle;
		border-radius: 5px;
		box-shadow: 1px 1px 10px #bd00ff;
		color: #eeeeee;
	}

	#overview
	{
		display: inline-block;
		float: right;
		margin-right: 40px;

	}
	#welcome
	{
		position: fixed;
		top: 135px;
		left: 298px;
		bottom: 0;
		width: 800px;
		height:800px;
		background: #22242a;
		z-index: 1;
		border-radius: 20px;
		transition:2s ease-in-out;
		visibility: hidden;
	}

	#dpWelcome
	{
		width: 250px;
		height: 250px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 80px;
		display: inline-block;
		background-size: cover;
		background-position: center;
		vertical-align: top;
	}
	
	.welcomeDetails
	{		
		color: white;
		display: inline-block;
		margin-left: 60px;
		margin-top: 90px;
	}

	.welcomeDetails>h1
	{
		color: white;
		text-align: center;
		font-size: 55px;
		font-family: century schoolbook;

	}

	.welcomeDetails>h1>span
	{
		color: #bd00ff;
	}

	#welcome>button
	{
		float: right;
		margin-top: 20px;
		margin-right: 20px;
	}



	#top
	{
		width: 100%;
		height: 150px;
		
		background-position: center;
		background-size: cover;
	}
	
	#profile
	{	
	margin-top: 70px;
    margin-left: 220px;
   
    height: auto;
    background: #eee;
    transition: .5s;
    padding-bottom: 15px;
	}

	#dpinside
	{	
		
		width: 150px;
		height: 150px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 120px;
		display: inline-block;
		background-size: cover;
		background-position: center;
	}

	#name1
	{	
		margin: 0;
		color: #858585;
		display: inline-block;
		margin-left: 300px;
		margin-top: 10px;
		font-family: arial;
		font-size: 50px;
		text-transform: capitalize;
	}

	#name1>span
	{
		color: #bd00ff;
	}

	#post
	{
		margin-left: 300px;
		color: #22242a;
	}


.contactus
{
	margin: 40px auto;
	display: block;
}

</style>
<script type="text/javascript">

	setTimeout(hide,2000);

	function hide()
	{
		document.getElementById('welcome').style='visibility:hidden;transition:.15s ease-in-out;'
	}


</script>

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
			document.getElementById('profile').style="margin-left:250px;";



			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				
				// console.log('we are here by JS first');
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";
document.getElementById('profile').style="margin-left:50px;";


			// console.log('we are here by JS second');

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



