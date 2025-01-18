<?php 
require'dashboard.php';

$con=mysqli_connect("localhost","root","","d-care");

	  $doctorId=$_GET['id'];

    $display1="select * FROM `doctors` WHERE id = $doctorId";

  	$query1=mysqli_query($con,$display1);

  	$result1=mysqli_fetch_array($query1);

  	
  	$display2="select * FROM `doctorsprofiledetails` WHERE doctorsId='$doctorId'";

  	$query2=mysqli_query($con,$display2);

  	$result2=mysqli_fetch_array($query2);


  	$display3="select * FROM `doctorcontactdetails` WHERE doctorsId='$doctorId'";

  	$query3=mysqli_query($con,$display3);

  	$result3=mysqli_fetch_array($query3);


    $ppic='../admin/';
    $ppic.='../doctor/'.$result1['profilePic'] ;

    error_reporting(0);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="doctorMoreInfoOuter text-white">
		<h1 class="text-center text-capitalize">Pofile Details <span class="text-primary"><?php echo $result1['firstName'].' '.$result1['lastName']; ?></span></h1><br><br>
    <div class="doctorDetails1">
      
      <br>
      <div class="dp"></div>
      <span>Name : </span>  <span><?php echo $result1['firstName'].' '.$result1['lastName']; ?></span><br><br>

      <span>Gender : </span>  <span><?php echo $result1['gender']; ?></span><br><br>

      <span>Date Of Birth : </span>  <span><?php echo $result1['dob']; ?></span><br><br>

      <span>Mobile Number : </span>  <span><?php echo $result1['mobileNumber']; ?></span><br><br>

      <span>Phone Number : </span>  <span><?php echo $result1['phoneNumber']; ?></span><br><br>

      <span>Date Of Joining d-care : </span>  <span><?php echo $result1['DateOFJoin']; ?></span><br><br>

      <span>Speciality : </span>  <span><?php echo $result1['speciality']; ?></span><br><br>

      <span>Email id : </span>  <span><?php echo $result1['email']; ?></span><br><br>

      <span>Status : </span>  <span><?php echo ($result1['status']==0) ? "<label style='color:red;'>"."Disabled"."</label>" : "<label style='color:lightgreen;'>"."Active"."</label>"; ?></span>

    </div><br><br>

    <h1 class="subtitle">Details</h1><br><br>

    <div class="patientdetails2">
      <div class="details1">
        
      <span class='attributes'>Specialized :</span> <span class='attributesDefine'><?php echo $result2['specializedIn']; ?></span><br><br>

      <span class='attributes'>License Id :</span> <span class='attributesDefine'><?php echo $result2['licenseId']; ?></span><br><br>

      <span class='attributes'>Date Of Issuance of license :</span> <span class='attributesDefine'><?php echo $result2['dateOfIssueOfLicense']; ?></span><br><br>

      <span class='attributes'>education Training From :</span> <span class='attributesDefine'><?php echo $result2['educationTrainingFrom']; ?></span><br><br>
        
      <span class='attributes'>work Experience :</span> <span class='attributesDefine'><?php echo $result2['workExperience']; ?></span><br><br>

      <span class='attributes'>any Private Clinic :</span> <span class='attributesDefine'><?php echo $result2['anyPrivateClinic']; ?></span><br><br><br>

      </div>

      <div class="details2">
      <span class='attributes'>permanent address :</span> <span class='attributesDefine'><?php echo $result3['permanentAddress']; ?></span><br><br>

      <span class='attributes'>clinic Address :</span> <span class='attributesDefine'><?php echo $result3['clinicAddress']; ?></span><br><br>

      <span class='attributes'>Clinic phone Number :</span> <span class='attributesDefine'><?php echo $result3['phoneNumber']; ?></span><br><br>

      <span class='attributes'>alternate Phone Number :</span> <span class='attributesDefine'><?php echo $result3['alternatePhoneNumber']; ?></span><br><br>

      <span class='attributes'>clinicEmail :</span> <span class='attributesDefine'><?php echo $result3['clinicEmail']; ?></span><br><br>
        
      <span class='attributes'>visiting Hours :</span> <span class='attributesDefine'><?php echo $result3['visitingHours']; ?></span><br><br>

      <span class='attributes'>any Private Clinic :</span> <span class='attributesDefine'><?php echo $result3['workingDays']; ?></span><br><br><br>
      </div>

     </div>

</div>

</body>
</html>

<style type="text/css">
	.doctorMoreInfoOuter
	{
    margin-left: 250px;
	/*margin-left: 100px;*/
    margin-top: 100px;
    margin-right: 50px;
    background: #22242a;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 50px;
    padding-bottom: 50px;
    transition: .5s;
	}

	.doctorDetails1>span
  {
    font-size: 20px;
    font-family: roboto;
    text-transform: capitalize;
  }

  .doctorDetails1>span:nth-child(odd)
  {
    color: #08f;
    margin-left: 50px;
  }

  .doctorDetails1>span:nth-child(even)
  {
    margin-left: 15px;
  }

  .dp
{
  width: 300px;
  height: 300px;
  background: url(<?php echo $ppic; ?>);
  float: right;
  margin-right: 100px;
  margin-top: 30px;
  border-radius: 50%;
  background-size: cover;
  background-position: center;
}

.details1,.details2
{
  width: 470px;
  display: inline-block;
  margin-left: 70px;
  vertical-align: top;
}

.details2
{
  margin-left: 120px;
}

.details1>span,.details2>span
{
  font-size: 20px;
  text-transform: capitalize;
  font-family: roboto;
}

.attributes
{
  color: #08f;
}

.attributesDefine
{
  margin-left: 15px;
}
.subtitle
{
  text-align: center;
  color: #08f;
}
</style>

<script type="text/javascript">
  
  temp = 0;

  storeRight=document.getElementsByClassName('right');

  storeLeft=document.getElementsByClassName('left');

  doctorOuter=document.getElementsByClassName('doctorMoreInfoOuter');


  function toggle()
  {
    if (temp==0) 
    { 
      temp=1;

      document.getElementById('sidemenu').style="left:0px;overflow: scroll;";

      doctorOuter[0].style="margin-left:300px;";


      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";

       doctorOuter[0].style="margin-left:100px;";


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