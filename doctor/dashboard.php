<?php
ob_start();

session_start();
$userprofile=$_SESSION['username'];

$id=$_SESSION['doctor-id'];

$con=mysqli_connect("localhost","root","","d-care");

// mysqli_select_db($con,'d-care');

$display="select * FROM doctors WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$res=mysqli_fetch_array($query1);

if($userprofile==true)
{

}
else
{
	header('location:login.php');
}

if (!(isset($_SESSION['doctor-id']))) 
{
		header('location:login.php');
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

	<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</head>
<body onload="toggle()">

	<!-- ................................nav bar starts from here............................... -->


	<nav id="nav">
		
		

		<!-- <button id="toggle" onclick="toggle()" type="button" ><i class="fa fa-bars" aria-hidden="true"></i></button> -->

		<h1  id="title">D-care</h1>	<span id="" style="color: white">Doctor Dashboard</span>

		<a href="logout.php"><input id="btn" class="btn btn-primary "  type="submit" name="" value="Log Out"></a>

		<h4 id="dashinfo"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span>&nbsp</h4>

		
	</nav>

	<style type="text/css">
	
	body
{
	margin: 0;
	background-color: whitesmoke;
}

#nav
{
	width: 100%;
	background-color: #22242A;
	height: 70px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1;
}

#logo
{
	width: 60px;
	height: 60px;
	display: inline-block;
	position: absolute;
	    top: 3px;
    left: 72px;
}
#title
{
	display: inline-block;
	color: white;
	margin: 0;
	margin-left: 81px;
	margin-top: 14px;
	font-family: Arial;
	font-size: 32px;
}

#moto
{
	position: absolute;
	top: 46px;
    left: 195px;
	color: #08f;
	font-family: lucida handwriting;
	font-size: 12px;
	font-weight: 550;
	background-image: linear-gradient(to right, violet, #9f5db6, #3f9b4c, #08f, yellow, #ff8f00, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
}

#dashinfo
{
	display: inline-block;
	color: white;
	font-family: lucida fax;
	float: right;
	text-transform: capitalize;
	margin-top: 20px;
	margin-right: 50px;
}
#dashinfo>span
{
	color: #08f;
}

#btn
{
	margin-top: 1.3%;
	margin-right: 2%; 
	outline: 0;
	transition: .15s;
	border: none;
	width: 80px;
	height: 35px;
	vertical-align: middle;
	color: black;
	float: right;
}

.fa-bars 
{
	margin: 0;
	padding: 0;
	border: none;
	font-size: 20px;
}

#toggle
{
	background-color: #22242A;
	border: none;
	outline: none;
	margin-left: 15px;
	color: white;
	transition: .5s;
	transition-property: color;
}

.fa-bars:hover
{
	color: #08f;
	transform: scale(1.08);

}
.fa-bars:active
{
	color: #08f;
	transform: scale(1);

}

</style>
			<!-- ................................nav bar ends here............................... -->

    		<!-- ................................side menu starts from here............................... -->

	<div id="sidemenu">
		<img id="dp" src="<?php echo $res['profilePic'] ?>">
		<h6 id="name"><?php echo $res['firstName']." ".$res['lastName']; ?></h6>

		<ul id="function">
			<a href="welcome.php"><li><i style="visibility: hidden;" class="fa fa-gg-circle left" id="left8"  aria-hidden="true"></i>&nbsp Dashboard
				 <i style="margin-left: 97px;" class="fa fa-gg-circle right" id="right8"  aria-hidden="true"></i></li></a>

			<a href="profile.php"><li> <i style="visibility: hidden;" class="fa fa-user left " id="left1" aria-hidden="true"></i> 
				&nbsp profile info 
				<i style="margin-left: 96px" class="fa fa-user right " id="right1" aria-hidden="true"></i></li></a>

			<a href="myHistory.php"><li><i style="visibility: hidden;" class="fa  fa-history left" id="left8"  aria-hidden="true"></i>&nbsp My History
				 <i style="margin-left: 95px;" class="fa  fa-history right" id="right8"  aria-hidden="true"></i></li></a>		

			<a href="patients.php"><li><i style="visibility: hidden;" class="fa fa-wheelchair left " id="left5"  aria-hidden="true"></i>&nbsp Patients
				 <i style="margin-left: 118px;" class="fa fa-wheelchair right " id="right5"  aria-hidden="true"></i></li></a>
				  <a href="review.php"><li><i style="visibility: hidden;" class="fa fa-pencil left " id="left5"  aria-hidden="true"></i>&nbsp  Review
				 <i style="margin-left: 118px;" class="fa fa-pencil right " id="right5"  aria-hidden="true"></i></li></a>

			<a href="requestPanel.php"><li><i style="visibility: hidden;" class="fa fa-bell left" id="left8"  aria-hidden="true"></i>&nbsp Request Panel
				 <i style="margin-left: 75px;" class="fa fa-bell right" id="right8"  aria-hidden="true"></i></li></a>

			<a href="changePassword.php"><li><i style="visibility: hidden;" class="fa fa-unlock-alt left" id="left8"  aria-hidden="true"></i>&nbsp Change Password
				 <i style="margin-left: 60px;" class="fa fa-unlock-alt right" id="right8"  aria-hidden="true"></i></li></a>
				 		 	  
		</ul>


	</div>

	<style type="text/css">
		
		#sidemenu
		{
			background: #22242A;
			width: 250px;
			height: 100%;
			display: inline-block;
			transition: ease .5s; 
			position: fixed;
			top: 70px;
			0px
			z-index: 1;
		}

		#dash
		{
			display: inline-block;
			margin: 0;
			color: white;
			font-size: 28px;
			text-transform: uppercase;
			border-bottom: 2px solid white;
			padding-right: 35px;
			padding-left: 35px;
			box-sizing: border-box;
		}

		#dp
		{
			width: 100px;
			height: 100px;
			margin-top: 10px;
			margin-left: 80px;
			border-radius: 100px;
			border: 3px solid #08f;
		}

		#name
		{
			text-align: center;
			color: white;
			text-transform: capitalize;
			text-align: center;
			margin-top: 10px;
		}

		#function
		{
			margin: 0;
			padding: 0;
			margin-top: 10px;
		}

		#function>a>li
		{
			padding-top: 10px;
			border-bottom: 2px solid rgba(255,255,255,.1);
			padding-bottom: 10px;
			text-transform: capitalize;
			transition: .5s;
			transition-property: padding;
			margin: 0;
			padding-left: 20px;
		}

		#function>a:first-child>li
		{
			border-top: 2px solid rgba(255,255,255,.1);
		}

		#function>a>li:-child
		{
			padding-left: 20px;
		}


		#function>a>li:hover
		{
			font-weight: 600;
			cursor: pointer;
			padding-left: 25px;
			color: #08f;

		}

		#function>a>li:active
		{
			transform: scale(.98);
			font-weight: 600;
			cursor: pointer;
			padding-left: 30px;
			color: #08f;
		}


		#function>a
		{
			text-decoration: none;
			color: white;
			font-family: 'Roboto Slab', serif;
		}



	</style>

			<!-- ................................side menu ends here............................... -->

</body>
</html>

<script type="text/javascript">
	
	temp = 0;

	storeRight=document.getElementsByClassName('right');

	storeLeft=document.getElementsByClassName('left');
	console.log("1");


	function toggle()
	{
		if (temp==0) 
		{	
			temp=1;

			document.getElementById('sidemenu').style="left:0px;";

	console.log("2");


			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
	console.log("3");

			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";



	console.log("4");


			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				console.log("5");

				
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


