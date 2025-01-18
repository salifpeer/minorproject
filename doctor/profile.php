<?php 
	require "dashboard.php"
?>

<?php    
if(isset($_POST['updateDp']))
  {
  	$id=$res['id'];

  	 $sourceProfile=$_FILES['profilePic']['tmp_name'];

  	 $nameProfile=$_FILES['profilePic']['nameProfile'];

  	 $destinationProfile='profilePic/'.rand().time().$nameProfile;

  	 move_uploaded_file($sourceProfile, $destinationProfile);


  	$queryDp="update doctors set profilePic ='$destinationProfile' where id=$id"; 

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


  	$q="update doctors set coverPic='$destinationCover' where id=$id"; 

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
   				 	   color: #08f;
   				 	   border: 1px solid #08f;
				}

				#changeCoverBtn:hover
				{
					
					color: #eee;
   				 	border: 1px solid #eee;
   				 	background: #08f;
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
    					background: #08f;
    					padding: 0;
    					outline: none;
    					border: none;
				}

				#changeDpBtn:hover
				{
    					background: #eee;
    					color: #08f;
				}

				#changeCoverBtn:focus,#changeDpBtn:focus
				{
					/*outline: 3px solid rgba(189,0,255,.8);*/
				}
	 		</style>
	 	</div>

		 </div>
	 		<h1 id="name1"><?php echo $res['firstName']; ?> <span><?php echo $res['lastName']; ?></span></h1>

	 		<h3 id="post"><?php echo $res['speciality']; ?></h3>

	 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home"role="tabpanel" aria-labelledby="nav-home-tab">
  		<div id="attributes">
			
				<h5><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp Registration ID</h5>
				<h5><i class="fa fa-user-circle" aria-hidden="true"></i>&nbspUsername</h5>
				<h5><i class="fa fa fa-phone" aria-hidden="true"></i>&nbsp Phone Number</h5>
				<h5 class="email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbspEmail Id</h5>
			</div>

			<div id="attributesDefine">
				
				
				<h5><?php echo $res['id']; ?></h5>
				<h5><?php echo $res['username']; ?></h5>
				<h5><?php echo $res['mobileNumber']; ?></h5>
				<h5 class="email"><?php echo $res['email']; ?></h5>

			</div>
				
		</div>
  

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  		<div id="addInfo">
			
				<h5><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp Speciality</h5>
				<h5><i class="fa fa-superpowers" aria-hidden="true"></i>&nbspSpecialized IN</h5>
				<h5><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp Licesne Id</h5>
				<h5><i class="fa fa-calendar" aria-hidden="true"></i>&nbspDate of issuance of License</h5>
				<h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp Educational Training From</h5>
				<h5><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp Work Experience</h5>
				
				<h5><i class="fa fa-building" aria-hidden="true"></i>&nbsp Any Private Clinic</h5>
			</div>

			<?php 
			$doctorsId=$res['id'];

			error_reporting(0);

			$q="SELECT * FROM doctors JOIN doctorsprofiledetails on doctors.id = doctorsprofiledetails.doctorsId where doctorsId ='$doctorsId'";

			$queryProfile=mysqli_query($con,$q);

  			$profile=mysqli_fetch_array($queryProfile);


			 ?>
			<div id="addInfoDefine">

				<h5 ><?php echo $res['speciality']; ?></h5>
				<h5><?php echo $profile['specializedIn']; ?></h5>
				<h5><?php echo $profile['licenseId']; ?></h5>
				<h5><?php echo $profile['dateOfIssueOfLicense']; ?></h5>
				<h5><?php echo $profile['educationTrainingFrom']; ?></h5>
				<h5><?php echo $profile['workExperience']; ?></h5>
				<h5><?php echo $profile['anyPrivateClinic']; ?></h5>
			</div>

			<br><br>
			<a href="profileDetails.php"><input type="submit" name="" class="btn btn-primary addInfo"  href='editProfile.php' value="Add Info" ></a>
		</div>


  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  		<div id="contactInfo">

  			<?php 
			$doctorsId=$res['id'];

			// error_reporting(0);

			$q2="SELECT * FROM doctors JOIN doctorcontactdetails on doctors.id = doctorcontactdetails.doctorsId where doctorsId ='$doctorsId'";

			$queryContact=mysqli_query($con,$q2);

  			$contact=mysqli_fetch_array($queryContact);



			 ?>
			
				<h5><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp Permenant Adress</h5>
				<h5><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp Clinic Adress (if any)</h5>
				<h5><i class="fa fa-phone" aria-hidden="true"></i>&nbsp phone Number</h5>
				<h5><i class="fa fa-mobile" aria-hidden="true"></i>&nbspAlternate number</h5>
				<h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp email id</h5>
				<h5><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp visiting hours</h5>
				<h5><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp working days</h5>

			</div>

			<div id="contactDefine">

				<h5 ><?php echo $contact['permanentAddress']; ?> </h5>
				<h5><?php echo $contact['clinicAddress']; ?></h5>
				<h5><?php echo $contact['phoneNumber']; ?></h5>
				<h5><?php echo $contact['alternatePhoneNumber']; ?></h5>
				<h5><?php echo $contact['clinicEmail']; ?></h5>
				<h5><?php echo $contact['visitingHours']; ?></h5>
				<h5><?php echo $contact['workingDays']; ?></h5>

			</div>
			<br><br>
			<a href="contactDetails.php"><input type="submit" name="" class="btn btn-primary addInfo"  href='editProfile.php' value="Add info" ></a>
  </div>
</div>

</body>
</html>


<style type="text/css">

	



	#addinfo
	{
		display: inline-block;
	}

	#addinfoDefine
	{
		display: inline-block;
	}

	#top
	{
		width: 100%;
		height: 168px;
		background: url(<?php echo $res['coverPic'] ?>);
		background-position: center;
		background-size: cover;
	}
	
	#profile
	{	
	margin-top: 70px;
    margin-left: 51px;
    width: 96.2%;
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
		margin-top: 75px;
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
		color: #08f;
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
		border-bottom: 2px solid #08f;
		margin-top: 20px;
	}

	.nav>li
	{
		color: #223;
		transition: .5s;
		font-weight: 600;
	
	}
	.nav>a
	{
		cursor: pointer;
		color: black;
	}

	.active
	{
		font-weight: 500;

	}

	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active
	{
		background: #08f;
		border: 1px solid #08f;
		color:white;
	}

	.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover
	{
		border: 1px solid #08f;
		border-bottom: none;
	}	

	#attributes,#addInfo,#contactInfo
	{
		display: inline-block;
		margin-left: 50px;
		color: #08f;
	}

	#attributesDefine,#addInfoDefine,#contactDefine
	{
		display: inline-block;
		margin-left: 120px;
		vertical-align: top;
	}
	#addInfoDefine
	{
		margin-left:60px; 
	}


	#attributes,#attributesDefine,#addInfoDefine,#addInfo
	{
		font-family: roboto;
	}

	#addInfoDefine>h5,#addInfo>h5,#contactInfo>h5,#contactDefine>h5,#attributes>h5,#attributesDefine>h5
{
	font-size: 20px;
	margin-top: 25px;
	text-transform: capitalize;
	margin-bottom: 25px;
}

#editProfile
{

	width: 80px;
	height: 35px;
	margin-left: 600px;
}

.addInfo
{
	width: 120px;
	height: 40px;
	margin-left: 550px;
}
.email
{
	text-transform: inherit;
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
			document.getElementById('profile').style="margin-left:251px;";

			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";
			document.getElementById('profile').style="margin-left:51px;";


			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				
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
        background: grey;
        outline: none;
        border: none;
        float: right;
      }
      .close:focus
      {
        outline: none;
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
        color: #08f;
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