<?php 
	require "dashboard.php";
	// error_reporting(0);
?>

<?php    
if(isset($_POST['updateDp']))
  {
  	$id=$res['id'];

  	 $sourceProfile=$_FILES['profilePic']['tmp_name'];

  	 $nameProfile=$_FILES['profilePic']['nameProfile'];

  	 $destinationProfile='profilePic/'.rand().time().$nameProfile;

  	 move_uploaded_file($sourceProfile, $destinationProfile);


  	$queryDp="update admin set profilePic ='$destinationProfile' where id=$id"; 

  	$queryDpExecute=mysqli_query($con,$queryDp);

   header('location:profile.php');

  } 
  ?>


<?php    
if(isset($_POST['updateCover']))
  {
  	$id=$res['id'];

  	 $sourceCover=$_FILES['coverPic']['tmp_name'];

  	 $nameCover=$_FILES['coverPic']['nameCover'];

  	 $destinationCover='coverPic/'.rand().time().$nameCover;

  	 move_uploaded_file($sourceCover, $destinationCover);


  	$q="update admin set coverPic='$destinationCover' where id=$id"; 

  	$query=mysqli_query($con,$q);

   header('location:profile.php');

  } 
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


<div id="changeDpPanel">
	<form method="POST" enctype="multipart/form-data">

		<h3 class="uploadMsg text-center">Choose profile photo...</h3><button class="close" onclick="closeDp()"><i class="fa fa-window-close" aria-hidden="true"></i></button>

   		<div class="input-group mb-3 dpDiv">
  			<div class="custom-file">
    			<input type="file" class="custom-file-input" id="inputGroupFile02" name="profilePic">
    			<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose Profile Photo</label>
  			</div>
  		<div class="input-group-append">
    	<input type="submit" class="input-group-text" id="inputGroupFileAddon02 logout" name="updateDp" value="Change">
  		</div>
	    </div>
	</form>	
</div>

		<!-- ............................................................................. -->


<!-- .................................................................................................. -->		


	 <div id="profile">

	 	 <div id="top" >
	 	 	
			<style type="text/css">
	 			#changeCoverBtn 
	 			{
   				 	   margin-left: 1185px;
   				 	   font-size: 12px;
   				 	   float: right;
   				 	   margin-right: 10px;
   				 	   margin-top: 10px;
   				 	   color: #bd00ff;
   				 	   border: 1px solid #bd00ff;
				}

				#changeCoverBtn:hover
				{
					
					color: #eee;
   				 	border: 1px solid #eee;
   				 	background: #bd00ff;
				}
	 		</style>
	 	

	 	<div id="dpinside" >
	 		<button id="changeDpBtn" class="btn btn-secondary" onclick="showDp()"><i class="fa fa-camera" aria-hidden="true"></i></button>
	 		<style type="text/css">
	 			#changeDpBtn 
	 			{
   				 	    margin-top: 93px;
    					margin-left: 105px;
    					border-radius: 50%;
    					width: 40px;
    					height: 40px;
    					outline: none;
    					font-size: 24px;
    					font-family: arial;
    					text-transform: capitalize;
    					background: #bd00ff;
    					padding: 0;
    					outline: none;
    					border: none;
				}

				#changeDpBtn:hover
				{
    					background: #eee;
    					color: #bd00ff;
				}

				#changeCoverBtn:focus,#changeDpBtn:focus
				{
					/*outline: 3px solid rgba(189,0,255,.8);*/
				}
	 		</style>
	 	</div>

		 </div>
	 		<h1 id="name1"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>

	 		<h3 id="post">Adminis<span>trator</span></h3>

<div id="detailed">

 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link text-dark active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
    <a class="nav-link text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>

  </div>
</nav>

<!-- ..............................1st Tab................................ -->
<div class="tab-content" id="nav-tabContent">

  		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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


			</div>
	</div>
<!-- ..............................1st Tab................................ -->

<!-- ...............................2nd Tab.................................. -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

  	<?php 
  		$adminId=$res['id'];

  		$checkQuery="SELECT * FROM `adminprofileinfo` where adminID='$adminId'";

  	    $data=mysqli_query($con,$checkQuery);

  	    $addInfo=mysqli_fetch_array($data);
  	 ?>
  	
  	<div id="profileInfo">
		<span><i class="fa fa-user-plus" aria-hidden="true"></i> Designation : </span><span><?php echo $addInfo['designation']; ?></span> <br><br> 		
		<span><i class="fa fa-gavel" aria-hidden="true"></i> Specialized In : </span><span><?php echo $addInfo['specializedIn']; ?></span> <br><br>
		<span><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Number : </span><span><?php echo $res['mobileNumber']; ?></span> <br><br>
		<span><i class="fa fa-address-card" aria-hidden="true"></i> Adress :</span><span><?php echo $addInfo['address']; ?></span> <br><br>

		<span><i class="fa fa-calendar" aria-hidden="true"></i> Date Of Join : </span><span><?php echo $res['dateOfJoining']; ?></span> <br><br>

  	</div>

  	<button id="addInfo"><a href="adminProfileInfo.php" class="text-white"> Add Info</a></button>

  </div>

<!-- ...............................2nd Tab.................................. -->
		
</div>


</body>
</html>

<style type="text/css">

	#profileInfo
  	{
  		margin-left: 30px;
  		margin-top: 20px;
  	}

  	#profileInfo>span
  	{
  		font-size: 20px;
  		text-align: justify;
  		\font-family: arial;
  		text-transform: capitalize;
  	}
  	#profileInfo>span:nth-child(even)
  	{
  		margin-left: 20px;
  	}

  	#profileInfo>span:nth-child(odd)
  	{
  		color: #bd00ff;
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
	width: 25%;
		text-align: center;
		margin-left: 35%;
		box-shadow: none;
		height: 40px;
		margin-bottom: 20px;
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
		height: 135px;
		background: url(<?php echo $res['coverPic'] ?>);
		background-position: center;
		background-size: cover;
	}
	
	#profile
	{	
	margin-top: 73px;
    margin-left: 250px;
    /*width: 96%;*/
    height: auto;
    background: #eee;
    transition: .5s;
	}

	#dpinside
	{	
		background: url(<?php echo $res['profilePic']; ?>);
		width: 150px;
		height: 150px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 50px;
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
		vertical-align: top;
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
body
{
	overflow-x: hidden;
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

			document.getElementById('profile').style="margin-left:253px;";

			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";

			}
			console.log('temp=1');
		}

		else

		{
			

			
			document.getElementById('sidemenu').style="left:-200px;";

			document.getElementById('profile').style="margin-left:53px;";


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

   <!-- .............................pop ups for dp and cover change........................ -->


<style type="text/css">
      #changeDpPanel
      {
        width: 400px;
        height: auto;
        background:grey;
        position: fixed;
        top: 200px;
        left: 520px;
        padding: 30px;
        border-radius: 7px;
        visibility: hidden;
        transition: .15s;
        z-index: 1;
      }
      .dpDiv
      {
        margin-top: 35px;
      }

      .uploadMsg
      {
        color: #fff;
        font-family: arial;
        display: inline-block;
        font-size: 24px;
        text-transform: capitalize;
        text-align: center;
      }

      .close
      {
        /*background: grey;*/
        outline: none;
        border: none;
        float: right;
        margin-right: -20px;
        margin-top: -25px;
        color: #bd00ff;
      }
      .close:focus
      {
        outline: none;
      }
      .close:hover
      {
        color: #8900b9;
      }


      </style>

    <script type="text/javascript">
      
      function showDp()
      {
        document.getElementById('changeDpPanel').style='visibility:visible;transition:.15s';
        document.getElementById('profile').style='filter:blur(7px);transition:.15s';

      }
      function closeDp()
      {
        document.getElementById('changeDpPanel').style='visibility:hidden;';
        document.getElementById('profile').style='filter:blur(0px);transition:.5s;';

      }
    </script>

 


    <style type="text/css">
      #changeCoverPanel
      {
        width: 400px;
        height: auto;
        background:grey;
        position: fixed;
        top: 200px;
        left: 520px;
        padding: 30px;
        border-radius: 7px;
        visibility: hidden;
        transition: .15s;
        z-index: 1;
      }
      .coverDiv
      {
        margin-top: 35px;
      }

      .uploadMsgCover
      {
        color: #fff;
        font-family: arial;
        display: inline-block;
        font-size: 24px;
        text-transform: capitalize;
        text-align: center;
      }

      .closeCover
      {
        outline: none;
        border: none;
        float: right;
        margin-right: -20px;
        margin-top: -25px;
        color: #bd00ff;
      }
      .closeCover:focus
      {
        outline: none;
      }
      .closeCover:hover
      {
        color: #8900b9;
      }

      
      </style>

</form>
<script type="text/javascript">
  
      function showCover()
      {
        document.getElementById('changeCoverPanel').style='visibility:visible;';
        document.getElementById('profile').style='filter:blur(7px);transition:.15s';

      }
      function closeCover()
      {
        document.getElementById('changeCoverPanel').style='visibility:hidden;';
        document.getElementById('profile').style='filter:blur(0px);transition:.15s;';

      }

</script>