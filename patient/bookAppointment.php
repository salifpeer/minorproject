<?php 
    require 'dashboard.php';
    $speciality=0;
    // error_reporting(0);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>
<!-- ..................................speciality block.......................................... -->
<div id="outer">
  <h1 class="title"><i class="fa fa-user-md "aria-hidden="true"></i> Take <span>Appointment</span></h1>
<div class="blockSpeciality">
  
<form method="POST">
<?php 

$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality` ORDER BY `speciality`.`speciality` ASC";

$filterQueryExecute=mysqli_query($con,$filterQuery);

$check= mysqli_num_rows($filterQueryExecute);
echo "<select name='speciality' class='speciality'>";

    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
   
       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
    

</select>

&nbsp&nbsp<input type="submit" name="getList" value="Get List" class="btn btn-warning get"><br><br>
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

$doctorQuery = "SELECT * FROM `doctors` WHERE `speciality` = '$speciality' && status=1 && request=1 ORDER BY `firstName` ASC;";

$doctorQueryExecute=mysqli_query($con,$doctorQuery);

echo "<select class='optionDoctor' name='infoDoc' >";

echo'<option>-Select Doctor-</option>';


    while($resDoctor = mysqli_fetch_array($doctorQueryExecute))

          {

 ?>
       <option  value="<?php echo $resDoctor['id']?>" ><?php echo $resDoctor['firstName']." ".$resDoctor['lastName']; $doctorid=$resDoctor['id'] ?> </option>
        
   <?php 
   }
   
    ?> 
 
</select>



&nbsp <input type="submit" name="getInfo" value="Get Info" class="btn btn-warning get" >&nbsp&nbsp

<?php


if (isset($_POST['getInfo'])) 
{ 
  $idDoc = $_POST['infoDoc'];

  $getInfoDoc = "SELECT * FROM `doctors` WHERE `id` = '$idDoc';";

  $getInfoDocExecute=mysqli_query($con,$getInfoDoc);

  $infoDoctor = mysqli_fetch_array($getInfoDocExecute);

  $totalDoctor= mysqli_num_rows($getInfoDocExecute);

  $getDocContact="SELECT * FROM `doctorcontactdetails` WHERE `doctorsId` = '$idDoc';";

  $getDocContactExecute=mysqli_query($con,$getDocContact);

  $contactDoctor = mysqli_fetch_array($getDocContactExecute);

   $totalDoctorContact= mysqli_num_rows($getDocContactExecute);

  if ($totalDoctor==1) {
    echo '<div class="attributeDoctor">

<span>Doctor`s Id :</span>&nbsp&nbsp&nbsp<span>'.$_POST['infoDoc'].'</span><br><br>

<span>Name  :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['firstName'].' '.$infoDoctor['lastName'].'</span><br><br>

<span>Speciality :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['speciality'].'</span><br><br>

<span>Mobile Number :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['mobileNumber'].'</span><br><br>

<span>Phone Number :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['phoneNumber'].'</span><br><br>

<span>Email Id :</span>&nbsp&nbsp&nbsp<span>'.$infoDoctor['email'].'</span><br>';

if ($totalDoctorContact==1) 
{

echo '<br><span>Visiting Hours :</span>&nbsp&nbsp&nbsp<span>'.$contactDoctor['visitingHours'].'</span><br><br>

<span>Clinic Address  :</span>&nbsp&nbsp&nbsp<span>'.$contactDoctor['clinicAddress'].'</span><br><br>

<span>Working Days :</span>&nbsp&nbsp&nbsp<span>'.$contactDoctor['workingDays'].'</span>';
} 
else

{
  echo '<p class="alert2">please contact on above given number for details about appointment date, place and time</p>';
}

echo '</div><br>';



echo '<button class="btn btn-warning bookAppointment"><a href="setAppointment.php?patientId= '.$res['id'].' & doctorId= '.$infoDoctor['id'].' " class="text-white">Book Appointment</a></button>';
  }

else
{
  echo '<h6 class="alert">Please Select a Doctor First </h6>';
}



}

 ?>


 </div>
</div>

</div>

 </body>
 </html>

 <style type="text/css">

  #outer
  {
    width: 1220px;
    height: auto;
    background:#22242a;
    margin-left: 100px;
    margin-top: 100px;
    margin-bottom: 30px;
    padding: 20px;
    padding-bottom: 40px;
    text-transform: capitalize;
    border-radius: 20px;
    transition-property: margin;
      transition: .5s;
  }

  .title
  {
    color: white;
    text-align: center;
  }

  .title>span
  {
    color:#ee6e73; 
  }

  .blockSpeciality,.blockDoctor
  {
    margin-left: 230px;
    margin-top: 50px;
    color: white;
  }
  .speciality,.optionDoctor
  {
    width: 600px;
    height: 40px;
    border-radius: 5px;
    outline: none;
    border: none;
    text-indent: 45%;
     border: 2px solid  white;
    transition: .35s;
  }

  .speciality>option
  {
    text-indent: 40%;
  }

 .speciality:focus,.optionDoctor:focus
{
  border: 2px solid #640086;
  box-shadow: 0px 0px 5px #640086;
}

 
.bookAppointment
{
width: 200px;
text-transform: capitalize;
margin-left: 240px;
margin-top: 30px;
}

.attributeDoctor
{
  display: inline-block;
  color: white;
  margin-top: 40px;
  margin-left: 220px;
  font-size: 18px;
  text-align: justify;
  font-family: roboto;
  width: 450px;
} 

.attributeDoctor>span:nth-child(odd)
{
  color: #ee6e73;
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
  margin-left: 220px;
  margin-top: 20px;
  text-transform: capitalize;
}

.alert2
{
  color: red;
  text-transform: capitalize;
  text-align: justify-all;
  margin-top: 20px;
}


.optionDoctor,.speciality
{
    outline: none;
    transition: .15s;
    transition-property: border;
    box-shadow: 2px 2px 10px #5a5f6f inset;
    border: 1px solid whitesmoke;
}

.optionDoctor:focus,.speciality:focus
{
  border: 2px solid #ee6e73;
}

.get
{
  color: white;
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