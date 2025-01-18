
<?php
ob_start();
session_start();
$userprofile=$_SESSION['username'];

$id=$_SESSION['admin-id'];

$con=mysqli_connect("localhost","root","","d-care");

// mysqli_select_db($con,'d-care');

$display="select * FROM admin WHERE id=$id";

  	$query1=mysqli_query($con,$display);

  	$res=mysqli_fetch_array($query1);


if (!(isset($_SESSION['admin-id']))) 
{
		header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
    <link rel="stylesheet"  href="../font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet"  href="../bootstrap-4.5.2-dist/css/bootstrap.css">

    <script type="text/javascript" src="../bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>

	<!-- ................................nav bar starts from here............................... -->


	<nav id="nav">
		
		<a href="welcome.php"></a>

		<!-- <button id="toggle" onclick="toggle()" type="button" ><i class="fa fa-bars" aria-hidden="true"></i></button> -->

		<a href="welcome.php"><h1  id="title">d-care</h1>	<span id="moto"></span></a>

		<a href="logout.php"><input class="" id="logout" type="submit" name="" value="Log Out"></a>
		<h4 id="dashinfo"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span>&nbsp</h4>
	</nav>

	<style type="text/css">
	
	body
{
	margin: 0;
	background: url(1.jpg);
}

#nav
{
	width: 100%;
	background-color: tomato;
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
	color: #bd00ff;
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
	color: #bd00ff;
}

#logout
{
	margin-top: 1.3%;
	margin-right: 2%;
	background: #bd00ff; 
	outline: 0;
	transition: .15s;
	transition-property: color;
	border: none;
	width: 80px;
	height: 35px;
	border-radius: 5px;
	border: 2px solid  #bd00ff;
	vertical-align: middle;
	color: white;
	float: right;
}

#logout:hover
{
	background: #7900a3;
	border: 2px solid  #7900a3;
}

#logout:active
{
	border: 2px solid #640086;
	box-shadow: 0px 0px 5px #640086;
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
	color: #bd00ff;
	transform: scale(1.08);

}
.fa-bars:active
{
	color: #bd00ff;
	transform: scale(1);

}

</style>
			<!-- ................................nav bar ends here............................... -->

    		<!-- ................................side menu starts from here............................... -->

	<div id="sidemenu">
		<div id="dp"></div>
		<h6 id="name"><?php echo $res['firstName']." ".$res['lastName']; ?></h6>

		<ul id="function">

			<a href="welcome.php"><li><i style="visibility: hidden;" class="fa fa-gg-circle left" id="left8"  aria-hidden="true"></i>&nbsp Dashboard
				 <i style="margin-left: 97px;" class="fa fa-gg-circle right" id="right8"  aria-hidden="true"></i></li></a>
	 
			<a href="profile.php"><li> <i style="visibility: hidden;" class="fa fa-user left " id="left1" aria-hidden="true"></i> 
				&nbsp profile info 
				<i style="margin-left: 96px" class="fa fa-user right " id="right1" aria-hidden="true"></i></li></a>

			<a href="doctor.php"><li><i style="visibility: hidden;" class="fa fa-user-md left" id="left3"  aria-hidden="true"></i>&nbsp Doctors
				 <i style="margin-left: 121px;" class="fa fa-user-md right" id="right3"  aria-hidden="true"></i></li></a>	

			<a href="patients.php"><li><i style="visibility: hidden;" class="fa fa-wheelchair left " id="left5"  aria-hidden="true"></i>&nbsp Patients
				 <i style="margin-left: 118px;" class="fa fa-wheelchair right " id="right5"  aria-hidden="true"></i></li></a>

			<a href="assignDoctor.php"><li><i style="visibility: hidden;" class="fa fa-handshake-o left" id="left8"  aria-hidden="true"></i>&nbsp Assign Doctors
				 <i style="margin-left: 60px;" class="fa fa-handshake-o right" id="right8"  aria-hidden="true"></i></li></a>	 


			<a href="requestPanel.php"><li><i style="visibility: hidden;" class="fa fa-bell left" id="left8"  aria-hidden="true"></i>&nbsp Request Panel
				 <i style="margin-left: 75px;" class="fa fa-bell right" id="right8"  aria-hidden="true"></i></li></a>
	 

			<a href="changePassword.php"><li><i style="visibility: hidden;" class="fa fa-unlock-alt left" id="left8"  aria-hidden="true"></i>&nbsp Change Password
				 <i style="margin-left: 60px;" class="fa fa-unlock-alt right" id="right8"  aria-hidden="true"></i></li></a>
			
				 	 
				  
		</ul>

	</div>

	<style type="text/css">
		
		#sidemenu
		{
			background: #222;
			width: 250px;
			height: 100%;
			display: inline-block;
			transition: ease .5s; 
			position: fixed;
			top: 70px;
		
			z-index: 1;
			padding-bottom: 100px;
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
			background: url("<?php echo $res['profilePic'] ?>");
			width: 100px;
			height: 100px;
			margin-top: 10px;
			margin-left: 75px;
			border-radius: 100px;
			border: 2px solid #bd00ff;
			background-size: cover;
		background-position: center;
		}

		#name
		{
			/*display: inline-block;
			margin: 0;
			margin-left: 25%;*/
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
			color: #bd00ff;

		}

		#function>a>li:active
		{
			transform: scale(.98);
			font-weight: 600;
			cursor: pointer;
			padding-left: 30px;
			color: #bd00ff;
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


	function toggle()
	{
		if (temp==0) 
		{	
			temp=1;

			document.getElementById('sidemenu').style="left:0px;overflow: scroll;";


			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				
				
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

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



