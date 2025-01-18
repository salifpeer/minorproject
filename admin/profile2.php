<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

	<?php 
	require "dashboard.php"
	 ?>

	

	 <div id="profile">

	 	 <div id="top" >
	 	

	 	<div id="dpinside" ></div>

		 </div>
	 		<h1 id="name1"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>

	 		<h3 id="post">Adminis<span>trator</span></h3>

	 		<div id="detailed">
	 			
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item " role="presentation" onclick="overview()">
    <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">Overview</a>
  </li>
  <li class="nav-item" role="presentation" onclick="addinfo()">
    <a class="nav-link" id="profile-tab" data-toggle="tab"  role="tab" aria-controls="profile" aria-selected="false">Additional Info</a>
  </li>
  <li class="nav-item" role="presentation" onclick="expertise()">
    <a class="nav-link" id="contact-tab" data-toggle="tab"  role="tab" aria-controls="contact" aria-selected="false">expertise</a>
  </li>
</ul>
<!-- <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
				<h5><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp Registration ID</h5><br>
				<h5><i class="fa fa-user-circle" aria-hidden="true"></i>&nbspUsername</h5><br>
				<h5><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp Phone Number</h5><br>
				<h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbspEmail Id</h5><br></div>



  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div> -->
</div>
		

		<div class="tabs" id="overview">
			

			<div id="attributes">
				<br>
				<h5><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp Registration ID</h5><br>
				<h5><i class="fa fa-user-circle" aria-hidden="true"></i>&nbspUsername</h5><br>
				<h5><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp Phone Number</h5><br>
				<h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbspEmail Id</h5><br>
			</div>

			<div id="attributesDefine">
				
				<br>
				<h5><?php echo $res['id']; ?></h5><br>
				<h5><?php echo $res['username']; ?></h5><br>
				<h5><?php echo $res['mobileNumber']; ?></h5><br>
				<h5><?php echo $res['email']; ?></h5>

				<input type="submit" name="" id="editProfile" href='editProfile.php' value="Edit" >

			</div>

		</div>

		<div class="tabs" id="addinfo">

			<h1>my name is mannan</h1>
	 		

	 	</div>


		<div class="tabs" id="expertise">

	 	</div>

	 	</div>



</body>
</html>

<script type="text/javascript">

	store=document.getElementsByClassName('nav-link');

	tabs=document.getElementsByClassName('tabs');

	function overview()
	{
		tabs[0].style="visibility:visible;";
		tabs[1].style="position:absolute;visibility:hidden;";
		tabs[2].style="position:absolute;visibility:hidden;";

		store[0].className="nav-link active";
		store[1].className="nav-link";
		store[2].className="nav-link";
	}

	function addinfo()
	{
		tabs[1].style="visibility:visible;";
		tabs[0].style="position:absolute;visibility:hidden;";
		tabs[2].style="position:absolute;visibility:hidden;";
		
		store[1].className="nav-link active";
		store[0].className="nav-link";
		store[2].className="nav-link";
		
	}

	function expertise()
	{	
		tabs[2].style="visibility:visible;";
		tabs[0].style="position:absolute;visibility:hidden;";
		tabs[1].style="position:absolute;visibility:hidden;";
		
		store[2].className="nav-link active";
		store[1].className="nav-link";
		store[0].className="nav-link";
	
	}
	


</script>

<style type="text/css">

	

	#overview
	{
		width: 95%;
		visibility: visible;
		color: #22242a;
	}

	#addinfo
	{
		visibility: hidden;
		width: 1307px;

	}

	#expertise
	{
		visibility: hidden;
		width: 1307px;

	}


	#top
	{
		width: 100%;
		height: 150px;
		background: url(backgrounds/test8.jpg);
		background-position: center;
		background-size: cover;
	}
	
	#profile
	{	
	margin-top: 48px;
    margin-left: 52px;
    width: 96%;
    height: auto;
    background: #eee;
    transition: .5s;
	}

	#dpinside
	{	
		background: url(<?php echo $res['profileImage']; ?>);
		width: 150px;
		height: 150px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 90px;
		display: inline-block;
		background-size: cover;
		background-position: center;
	}

	#name1
	{	
		margin: 0;
		color: #22242a;
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

	#detailed
	{
		width: 1307px;
	}

	.nav
	{
		border-bottom: 2px solid #bd00ff;
		margin-top: 20px;
	}

	.nav>li
	{
		color: #223;
		transition: .5s;
		font-weight: 600;
	
	}
	.nav>li>a
	{
		cursor: pointer;

	}

	.active
	{
		font-weight: 500;

	}

	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active
	{
		background: #bd00ff;
		border: 1px solid #bd00ff;
		color:white;
	}

	.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover
	{
		border: 1px solid #bd00ff;
		border-bottom: none;
	}	

	#attributes
	{
		display: inline-block;
		margin-left: 50px;

	}

	#attributesDefine
	{
		display: inline-block;
		margin-left: 120px;
	}

	#attributes,#attributesDefine
	{
		font-family: roboto;
	}

	#attributes>h5
	{
		color: #bd00ff;
	}

#editProfile
{
	background: #bd00ff; 
	outline: 0;
	transition: .15s;
	transition-property: color;
	border: none;
	width: 80px;
	height: 35px;
	border-radius: 5px;
	border: 2px solid  #bd00ff;
	position: relative;
	top: -30px;
	left: 800px;
	color: white;
}

#editProfile:hover
{
	background: #7900a3;
	border: 2px solid  #7900a3;
}

#editProfile:active
{
	border: 2px solid #640086;
	box-shadow: 0px 0px 5px #640086;
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

			document.getElementById('profile').style="margin-left:252px;";

			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";

			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

			document.getElementById('profile').style="margin-left:52px;";

			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";	
			}

			storeRight[0].style="margin-left:91px;";
			storeRight[1].style="margin-left: 87px;";
			storeRight[2].style="margin-left: 87px;";
			storeRight[3].style="margin-left: 87px;";
			storeRight[4].style="margin-left: 77px;";
			storeRight[5].style="margin-left: 47px;";
			storeRight[6].style="margin-left: 32px;";
			storeRight[7].style="margin-left: 74px;";
			storeRight[8].style="margin-left: 104px;";

			temp=0;
		}	

	}
</script>