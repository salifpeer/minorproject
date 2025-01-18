<?php 
    require 'dashboard.php';

    $speciality=0;

    error_reporting(0);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<!-- ..................................speciality block.......................................... -->
<div id="outer">
  <h1 class="title">Assign <span>Doctor</span> To <span>Patient</span></h1>
<div class="blockSpeciality">
	
<form method="POST">
<?php 

$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality`";

$filterQueryExecute=mysqli_query($con,$filterQuery);
// echo '<label>Select doctor speciality &nbsp</label>';
$check= mysqli_num_rows($filterQueryExecute);
echo "<select name='speciality' class='speciality'>";
echo'<option>-Select Speciality-</option>';

    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
   

       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
 		

</select>

<input type="submit" name="getList" value="Get List" class="purpleButton"><br><br>
<?php 
if (isset($_POST['getList'])) 
{
	$check=$_POST['speciality'];

  if ($check=='-Select Speciality-') 
  {
    echo "<h6 style='color:red;margin-left:200px;'>Please select a speciality first</h6>";
  }

  else
  {
    $speciality=$_POST['speciality'];
  }
}
 ?>
</form>
</div>

<!-- ...................................doctor block............................................... -->
<div  class="blockDoctor">

<form method="POST">

<?php 

$con=mysqli_connect("localhost","root","","d-care");

$doctorQuery = "SELECT * FROM `doctors` WHERE `speciality` = '$speciality' && status=1 && request=1;";

$doctorQueryExecute=mysqli_query($con,$doctorQuery);

echo "<select class='optionDoctor' name='infoDoc' >";

echo'<option>-Select Doctor-</option>';


    while($resDoctor = mysqli_fetch_array($doctorQueryExecute))

          {

 ?>
       <option  value="<?php echo $resDoctor['id']?>" ><?php echo $resDoctor['firstName']." ".$resDoctor['lastName']; $doctorid[]=$resDoctor['id'] ?> </option>
        
   <?php 
   }
   
    ?> 
 

<?php


if (isset($_POST['getInfo'])) 
{	
	$idDoc = $_POST['infoDoc'];

	$getInfoDoc = "SELECT * FROM `doctors` WHERE `id` = '$idDoc';";

	$getInfoDocExecute=mysqli_query($con,$getInfoDoc);

	$infoDoctor = mysqli_fetch_array($getInfoDocExecute);

  $totalDoctor= mysqli_num_rows($getInfoDocExecute);

}

 ?>
&nbsp&nbsp <input type="submit" name="getInfo" value="Get Info" class="purpleButton get" >&nbsp&nbsp



 </div>

<!-- ..................................patient block.......................................... -->

<div class="blockPatient">

<?php 

$patientQuery = "SELECT * FROM `patients` WHERE status=1 && request=1";

$patientQueryExecute=mysqli_query($con,$patientQuery);

echo "<select  name='infoPatient' class='optionPatient' >";

echo'<option>-Select Patient-</option>';


    while($resPatient = mysqli_fetch_array($patientQueryExecute))

          {

 ?>
   
       <option value="<?php echo $resPatient['id'];?>" ><?php echo $resPatient['firstName'].' '.$resPatient['lastName']; ?> </option>
        
   <?php 
   }
   
    ?>
</select>
 
 </form>

</div>

<div class="info">
  
<?php

if (isset($_POST['getInfo'])) 

{ 
  $idPatient = $_POST['infoPatient'];

  $getInfoPatient = "SELECT * FROM `patients` WHERE `id` = '$idPatient' ;";

  $getInfoPatientExecute=mysqli_query($con,$getInfoPatient);

  $infoPatient = mysqli_fetch_array($getInfoPatientExecute);

  $totalPatient= mysqli_num_rows($getInfoPatientExecute);

  if ($totalPatient==1 &&  $totalDoctor==1) {
    echo '<div class="attributeDoctor">

<span>Doctor`s Id :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['id'].'</span><br><br>

<span>Name  :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['firstName'].' '.$infoDoctor['lastName'].'</span><br><br>

<span>Speciality :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['speciality'].'</span><br><br>

<span>Mobile Number :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['mobileNumber'].'</span><br><br>

<span>Phone Number :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['phoneNumber'].'</span><br><br>

<span>Email Id :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['email'].'</span><br><br>
</div>';

echo '<div class="attributepatient" >
  
<span>Patient`s Id :</span>&nbsp&nbsp&nbsp<span>'.$infoPatient['id'].'</span><br><br>

<span>Name  :</span>&nbsp&nbsp&nbsp<span>'.$infoPatient['firstName'].' '.$infoPatient['lastName'].'</span><br><br>

<span>Mobile Number :</span>&nbsp&nbsp&nbsp<span>'.$infoPatient['mobileNumber'].'</span><br><br>

<span>Phone Number :</span>&nbsp&nbsp&nbsp<span>'.$infoPatient['phoneNumber'].'</span><br><br>

<span>Email Id :</span>&nbsp&nbsp&nbsp<span>'.$infoPatient['email'].'</span><br><br>
</div>';

echo '<button class="purpleButton bookAppointment"><a href="bookAppointment.php?patientId= '.$infoPatient['id'].' & doctorId= '.$infoDoctor['id'].' " class="text-white">book Appointment</a></button>';
  }

else
{
  echo '<h6 class="alert">Please Select a Doctor and a patient First </h6>';
}
  

}

 ?> 

</div>

</div>


<?php 
if (isset($_POST['bookAppointment'])) 
    {	
    	 
    	$con=mysqli_connect("localhost","root","","d-care");

     	$appointmentQuery="INSERT INTO `appointments`(`doctorId`, `doctorName`, `doctorSpeciality`, `doctorContact`, `patientId`, `patientName`, `patientContact`, `dateOFBooking`) VALUES ('$docId','$docName','$docSpec','$docCon','$patId','$patName','$patCon')";
     	
      $appointmentQueryExecute=mysqli_query($con,$appointmentQuery);
 
    } 
 ?>
</div>
 </body>
 </html>

 <style type="text/css">

  #outer
  {
    width: 1220px;
    height: auto;
    background:#22242a;
    margin-left: 250px;
    margin-top: 100px;
    margin-bottom: 30px;
    padding: 20px;
    padding-bottom: 40px;
    text-transform: capitalize;
    border-radius: 20px;
    transition: .5s;
  }
  .title
  {
    color: white;
    text-align: center;
  }
  .title>span:first-child
  {
    color:#08f; 
  }

  .title>span:nth-child(2)
  {
    color:#ee6e73; 
  }
 	.blockSpeciality
 	{
 		margin-left: 210px;
    margin-top: 50px;
    color: white;
 	}
  .speciality,.optionDoctor,.optionPatient
  {
    width: 600px;
    height: 40px;
    border-radius: 5px;
    outline: none;
    border: none;
    text-indent: 35%;
     border: 2px solid  white;
  transition: .35s;

  }

  .speciality>option
  {
    text-indent: 35%;
  }

 .speciality:focus,.optionDoctor:focus,.optionPatient:focus
{
  border: 2px solid #640086;
  box-shadow: 0px 0px 5px #640086;
}

 	.blockDoctor
 	{
 		
 		display: inline-block;
    margin-left: 20px;
    margin-top: 30px;
 	}
 	.blockPatient
 	{
 		display: inline-block;

 	}

 	.optionDoctor,.optionPatient
 	{
 		text-transform: capitalize;
    width: 500px;
 	}

  .purpleButton
{
  margin-top: -.5%;
  background: #bd00ff; 
  outline: 0;
  transition: .15s;
  transition-property: color;
  border: none;
  width: 100px;
  height: 40px;
  border-radius: 5px;
  border: 2px solid  #bd00ff;
  vertical-align: middle;
  color: white;
  margin-left: 15px;
}

.purpleButton:hover
{
  background: #7900a3;
  border: 2px solid  #7900a3;
}

.purpleButton:active
{
  border: 2px solid #640086;
  box-shadow: 0px 0px 5px #640086;
}

.bookAppointment
{
width: 200px;
text-transform: capitalize;
margin-left: 500px;
margin-top: 30px;
}

.attributeDoctor
{
  display: inline-block;
  color: white;
  margin-top: 40px;
  margin-left: 120px;
  font-size: 18px;
  text-align: justify;
  font-family: roboto;
} 

.attributeDoctor>span:nth-child(odd)
{
  color: #da76fd;
  

} 

.attributepatient
{
  display: inline-block;
  color: white;
  margin-top: 10px;
  margin-left: 400px;
  font-size: 18px;
  text-align: justify;
  font-family: roboto;
}

.attributepatient>span:nth-child(odd)
{
  color: #da76fd;
} 

.alert
{
  color: red;
  /*text-align: center;*/
  margin-top: 20px;
  text-transform: capitalize;
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
      document.getElementById('outer').style="margin-left:300px;";

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

        document.getElementById('outer').style="margin-left:100px;";


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

