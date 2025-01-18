<?php 
	require "dashboard.php";
	error_reporting(0);
?>

<?php    
if(isset($_POST['updateDp']))
  {
  	$id=$res['id'];

  	 $sourceProfile=$_FILES['profilePic']['tmp_name'];

  	 $nameProfile=$_FILES['profilePic']['nameProfile'];

  	 $destinationProfile='profilePic/'.rand().time().$nameProfile;

  	 move_uploaded_file($sourceProfile, $destinationProfile);


  	$queryDp="update patients set profilePic ='$destinationProfile' where id=$id"; 

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


  	$q="update patients set coverPic='$destinationCover' where id=$id"; 

  	$query=mysqli_query($con,$q);

   header('location:profile.php');

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

<div id="changeCoverPanel">
	<form method="POST" enctype="multipart/form-data">

		<h3 class="uploadMsgCover text-center">Choose Cover photo...</h3><button class="close" onclick="closeCover()"><i class="fa fa-window-close" aria-hidden="true"></i></button>

   		<div class="input-group mb-3 dpDiv">
  			<div class="custom-file">
    			<input type="file" class="custom-file-input" id="inputGroupFile02" name="coverPic">
    			<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose Cover</label>
  			</div>
  		<div class="input-group-append">
    	<input type="submit" class="input-group-text" id="inputGroupFileAddon02" name="updateCover" value="Change">
  		</div>
	    </div>
	</form>	
</div>

<!-- .................................................................................................. -->		


	 <div id="profile">

	 	 <div id="top" >
	 	 	<button class="btn btn-outline-dark" id="changeCoverBtn" onclick="showCover()"><i class="fa fa-camera" aria-hidden="true"></i></button>
			<style type="text/css">
	 			#changeCoverBtn 
	 			{
   				 	   margin-left: 1185px;
   				 	   font-size: 12px;
   				 	   float: right;
   				 	   margin-right: 10px;
   				 	   margin-top: 10px;
   				 	   color: #ee6e73;
   				 	   border: 1px solid #ee6e73;
				}

				#changeCoverBtn:hover
				{
					
					color: #eee;
   				 	border: 1px solid #eee;
   				 	background: #ee6e73;
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
    					background: #ee6e73;
    					padding: 0;
    					outline: none;
    					border: none;
				}

				#changeDpBtn:hover
				{
    					background: #eee;
    					color: #ee6e73;
				}

				#changeCoverBtn:focus,#changeDpBtn:focus
				{
					/*outline: 3px solid rgba(189,0,255,.8);*/
				}
	 		</style>
	 	</div>

		 </div>
	 		<h1 id="name1"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>

	 		<br><br>

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
				<h5><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Phone Number</h5><br>
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
  		$patientId=$res['id'];

  		$checkQuery="SELECT * FROM `patientprofileinfo` where patientId='$patientId'";

  	    $data=mysqli_query($con,$checkQuery);

  	    $addInfo=mysqli_fetch_array($data);
  	 ?>
  	
  	<div id="profileInfo">
		<span><i class="fa fa-address-card" aria-hidden="true"></i> Address : </span><span><?php echo $addInfo['address']; ?></span> <br><br> 		
		<span><i class="fa fa-exclamation" aria-hidden="true"></i> Emergency Contact : </span><span><?php echo $addInfo['emergencyContact']; ?></span> <br><br>
		<span><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Number : </span><span><?php echo $res['mobileNumber']; ?></span> <br><br>
		
		<span><i class="fa fa-calendar" aria-hidden="true"></i> Date Of Join : </span><span><?php echo $res['dateOfJoining']; ?></span> <br><br>

  	</div>

  	<button id="addInfo" class="btn btn-warning"><a href="patientProfileInfo.php" class="text-white"> Add Info</a></button>

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
  		color: #ee6e73;
  	}

  	#addInfo
{
	
	width: 25%;
	margin-left: 35%;
	height: 40px;
	margin-bottom: 20px;
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
	margin-top: 71px;
    margin-left: 51px;
    width: 96%;
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
		color: #ee6e73;
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
		border-bottom: 2px solid #ee6e73;
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
		background: #ee6e73;
		border: 1px solid #ee6e73;
		color:white;
	}

	.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover
	{
		border: 1px solid #ee6e73;
		border-bottom: none;
	}	

	#attributes
	{
		display: inline-block;
		margin-left: 50px;
		padding: 6px;
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
		color: #ee6e73;
	}

#editProfile
{
	background: #ee6e73; 
	outline: 0;
	transition: .15s;
	transition-property: color;
	border: none;
	width: 80px;
	height: 35px;
	border-radius: 5px;
	border: 2px solid  #ee6e73;
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

			document.getElementById('sidemenu').style="left:0px;";

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
			storeRight[2].style="margin-left: 95px;";
			storeRight[3].style="margin-left: 75px;";
			storeRight[4].style="margin-left: 71px;";
			storeRight[5].style="margin-left: 90px;";
			storeRight[6].style="margin-left: 75px;";
			storeRight[7].style="margin-left: 60px;";

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
        color: #ee6e73;
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
        color: #ee6e73;
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