<?php 
    require 'dashboard.php';
	  $con=mysqli_connect("localhost","root","","d-care");

	  $patientId=$_GET['id'];

    $display1="select * FROM `patients` WHERE id = $patientId";

  	$query1=mysqli_query($con,$display1);

  	$result1=mysqli_fetch_array($query1);

  	
  	$display2="select * FROM `patientdetails` WHERE patientId='$patientId'";

  	$query2=mysqli_query($con,$display2);

  	$result2=mysqli_fetch_array($query2);

    $ppic='../admin/';
    $ppic.='../patient/'.$result1['profilePic'] ;

    error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div id="cover">



  <ul class="nav nav-pills mb-3 navHead" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Patient Details</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Prescreptions</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Test Reports</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-appointment" role="tab" aria-controls="pills-contact" aria-selected="false">Appointments</a>
  </li>
  
</ul>


<div class="tab-content" id="pills-tabContent">

  <!-- ...........................Patient Details.................................... -->
  <div class="tab-pane fade show active internal" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="patientdetails1">
      
      <br>
      <div class="dp"></div>
      <span>Name : </span>  <span><?php echo $result1['firstName'].' '.$result1['lastName']; ?></span><br><br>

      <span>Gender : </span>  <span><?php echo $result1['gender']; ?></span><br><br>

      <span>Date Of Birth : </span>  <span><?php echo $result1['dob']; ?></span><br><br>

      <span>Mobile Number : </span>  <span><?php echo $result1['mobileNumber']; ?></span><br><br>

      <span>Phone Number : </span>  <span><?php echo $result1['phoneNumber']; ?></span><br><br>

      <span>Date Of Joining d-care : </span>  <span><?php echo $result1['dateOfJoining']; ?></span><br><br>

      <span>Email id : </span>  <span><?php echo $result1['email']; ?></span><br><br>

      <span>Status : </span>  <span><?php echo ($result1['status']==0) ? "<label style='color:red;'>"."Disabled"."</label>" : "<label style='color:lightgreen;'>"."Active"."</label>"; ?></span>

    </div><br><br>

    <h1 class="subtitle">Details</h1>

    `<div class="patientdetails2">
      <div class="details1">
      <?php $bloodPressure = explode('-',$result2['bloodPressure']); ?>
        
      <span class='attributes'>Blood Pressure :</span> <span class='attributesDefine'><?php echo $bloodPressure[0]; ?></span><br><br>
      <span class='attributes'>Blood Pressure details :</span> <span class='attributesDefine'><?php echo $bloodPressure[1]; ?></span><br><br><br>


      <?php $thyroid = explode('-',$result2['thyroid']); ?>

      <span class='attributes'>Thyroid :</span> <span class='attributesDefine'><?php echo $thyroid[0]; ?></span><br><br>
      <span class='attributes'>Thyroid details :</span> <span class='attributesDefine'><?php echo $thyroid[1]; ?></span><br><br><br>


      <?php $anyPreviousSurgey = explode('-',$result2['anyPreviousSurgey']); ?>
        
      <span class='attributes'>Any Previous Surgey :</span> <span class='attributesDefine'><?php echo $anyPreviousSurgey[0]; ?></span><br><br>
      <span class='attributes'>Any Previous Surgey Details :</span> <span class='attributesDefine'><?php echo $anyPreviousSurgey[1]; ?></span><br><br><br>

      <?php $underAnyMedication = explode('-',$result2['underAnyMedication']); ?>
        
      <span class='attributes'>under Any Medication :</span> <span class='attributesDefine'><?php echo $underAnyMedication[0]; ?></span><br><br>
      <span class='attributes'>under Any Medication Details :</span> <span class='attributesDefine'><?php echo $underAnyMedication[1]; ?></span><br><br><br>

      <?php $anySeriousInjury = explode('-',$result2['anySeriousInjury']); ?>
        
      <span class='attributes'>any Serious Injury :</span> <span class='attributesDefine'><?php echo $anySeriousInjury[0]; ?></span><br><br>
      <span class='attributes'>any Serious Injury Details :</span> <span class='attributesDefine'><?php echo $anySeriousInjury[1]; ?></span><br><br><br>

      <span class='attributes'>Height :</span> <span class='attributesDefine'><?php echo $result2['height']; ?></span><br><br><br>

      <span class='attributes'>Blood Group :</span> <span class='attributesDefine'><?php echo $result2['bloodGroup']; ?></span>


      </div>

      <div class="details2">
      <?php $diabities = explode('-',$result2['diabities']); ?>

      <span class='attributes'>Diabities :</span> <span class='attributesDefine'><?php echo $diabities[0]; ?></span><br><br>
      <span class='attributes'>Diabities details :</span> <span class='attributesDefine'><?php echo $diabities[1]; ?></span><br><br><br>

      <?php $heartDisease = explode('-',$result2['heartDisease']); ?>
        
      <span class='attributes'>Heart Disease :</span> <span class='attributesDefine'><?php echo $heartDisease[0]; ?></span><br><br>
      <span class='attributes'>Heart Disease details :</span> <span class='attributesDefine'><?php echo $heartDisease[1]; ?></span><br><br><br>

      <?php $allergy = explode('-',$result2['allergy']); ?>
        
      <span class='attributes'>allergy :</span> <span class='attributesDefine'><?php echo $allergy[0]; ?></span><br><br>
      <span class='attributes'>allergy details :</span> <span class='attributesDefine'><?php echo $allergy[1]; ?></span><br><br><br>


      <?php $asthamatic = explode('-',$result2['asthamatic']); ?>
        
      <span class='attributes'>asthamatic :</span> <span class='attributesDefine'><?php echo $asthamatic[0]; ?></span><br><br>
      <span class='attributes'>asthamatic details :</span> <span class='attributesDefine'><?php echo $asthamatic[1]; ?></span><br><br><br>

      <?php $otherProblems = explode('-',$result2['otherProblems']); ?>
        
      <span class='attributes'>other Problems :</span> <span class='attributesDefine'><?php echo $otherProblems[0]; ?></span><br><br>
      <span class='attributes'>other Problems details :</span> <span class='attributesDefine'><?php echo $otherProblems[1]; ?></span><br><br><br>

      <span class='attributes'>weight :</span> <span class='attributesDefine'><?php echo $result2['weight']; ?></span><br><br>


      </div>

     </div>


  </div>

  <!-- ...........................Patient Details.................................... -->


  <!-- ...........................Prescription.................................... -->


  <div class="tab-pane fade internal prescriptionOuter" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

    <div class="prescription"><br><br>
       
     <h1 style="color: #ee6e73;" class="text-center view"><i  class="fa fa-wheelchair" aria-hidden="true"></i>&nbspPres<span style="color: white;">cription</span> </h1><br>

     <table class="table table-hover table-dark">
            <tr class="bg-dark text-white text-center" >
              <th>Prescription Id</th>
              <th>Date</th>
              <th>Patient Id</th>
              <th>Patient Name</th>
              <th>Suffering</th>
              <th>Medicines</th>
              <th>Report Details</th>
              <th>Advice</th>
              <th>Doctor Id</th>
              <th>Doctor Name</th>
              <th>Doctor Contact</th> 
              <th>Doctor Email</th> 
            </tr>
<?php 

         $con=mysqli_connect("localhost","root","","d-care");

        //  mysqli_select_db($con,'patients');

          $query="SELECT * FROM `prescription` WHERE patientId = '$patientId' ORDER BY `prescription`.`dated` DESC" ;

          $queryExecute=mysqli_query($con,$query);

           // $total= mysqli_num_rows($queryExecute);

          while($prescription =mysqli_fetch_array($queryExecute))
          {
  
?>
           <tr class="text-center">
              <td><?php echo $prescription['id'] ?></td>
              <td><?php echo $prescription['dated'] ?></td>
              <td><?php echo $prescription['patientId'] ?></td>
              <td><?php echo $prescription['PatientName'] ?></td>
              <td><?php echo $prescription['suffering']?></td>
              <td><?php echo $prescription['medicines']?></td>
              <td><?php echo $prescription['reportDetails']?></td>
              <td><?php echo $prescription['Advice']?></td>
              <td><?php echo $prescription['doctorID']?></td>
              <td><?php echo $prescription['doctorName']?></td>
              <td><?php echo $prescription['doctorContact']?></td>
              <td><?php echo $prescription['doctorEmail']?></td>           

      <?php 
    }
       ?>       


     </table>

     </div>

  </div>

  <!-- ...........................Prescription.................................... -->

  <!-- ..................................reports................................... -->

  <div class="tab-pane fade internal" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <a href="addPatientReports.php?id=<?php echo $patientId;?>"><input type="submit" class="btn btn-danger text-white float-right" name="" value="Add New report"></a><br><br>

<?php 

  $queryReports="SELECT * FROM `reports` WHERE patientId=$patientId";

  $queryReportsExecute=mysqli_query($con,$queryReports);
  
      $i=0;

  while($resReports =mysqli_fetch_array($queryReportsExecute))
          {
            $rep='../admin/';
            $rep.=$resReports['path'] ;
            
 ?>
 
<div class="reports">
 <!-- onclick="reveal(<?php echo $i; ?>) -->
  
    <div onmouseover='reveal(<?php echo $i; ?>)' onmouseleave="hide(<?php echo $i; ?>)"  class="reports1" style="background: url(<?php echo $rep ?>);background-position: cover;background-size: 200px 300px;">

    <div class="reports2">
    <h6 class="reportDetails">Report ID : </h6><h6><?php echo $resReports['id']; ?></h6>

    <h6 class="reportDetails">Test Type : </h6><h6><?php echo $resReports['testTypes']; ?></h6>

    <h6 class="reportDetails">Upload Date : </h6><h6><?php echo $resReports['date'];  ?></h6>
  
    <input onclick="enlarge(<?php echo $i; ?>)" type="button" class="btn btn-secondary btn-sm view" name="view" value="View">   
    </div>
      
    </div>
<!-- ..........................enlarge report................................. -->
       <div class="enlargeReport">
        <img class="enlargeImage"  style="background-position: cover;background-size: 500px 590px;" src="<?php echo $rep ?>">
         <div class="enlargeDetails">

          <button onclick="closeEnlarge(<?php echo $i; ?>)" class="btn btn-dark close"><i class="fa fa-times" aria-hidden="true"></i></button>
          
          <h6 class="reportDetails enlarge">Report ID : </h6><h6><?php echo $resReports['id']; ?></h6><br>

          <h6 class="reportDetails enlarge">Test Type : </h6><h6><?php echo $resReports['testTypes']; ?></h6><br>

          <h6 class="reportDetails enlarge">Upload Date : </h6><h6><?php echo $resReports['date'];  ?></h6><br>

          <h6 class="reportDetails enlarge">Uploaded By : </h6><h6><?php echo $resReports['uploadedBy'];  ?></h6>

        </div>

        </div>
<!-- ..........................enlarge report................................. -->

     <style type="text/css">
       
       

     </style>  

</div>

  <?php 
   $i++; }
 ?>

</div>

  <!-- ..................................reports................................... -->


  <!-- ................................Appointments................................. -->
<div class="tab-pane fade internal" id="pills-appointment" role="tabpanel" aria-labelledby="pills-contact-tab">
<div id="outer"><br><br>
       
     <h1 style="color: #ee6e73;" class="text-center view"><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbspAppoint<span style="color: white;">ments</span> </h1><br>

     <table class="table table-hover table-dark">
            <tr class="bg-dark text-white text-center" >
              <th>Request</th>
              <th>Appointment Id</th>
              <th>Doctor Id</th>
              <th>Doctor Name</th>
              <th>Doctor Speciality</th>
              <th>Doctor Contact</th>
              <th>Patient Id</th>
              <th>Patient Name</th>
              <th>Patient Contact</th>
              <th>Booking Date</th>
            </tr>
<?php 

         $con=mysqli_connect("localhost","root","","d-care");


          $qAppointment="SELECT * FROM `appointments` WHERE `patientId`= $patientId  ORDER BY `appointments`.`doctorSpeciality` DESC" ;

          $queryAppointment=mysqli_query($con,$qAppointment);

          while($resAppointment =mysqli_fetch_array($queryAppointment))
          {
          $request=0;

            if ($resAppointment['request']==0) 
            {
              $request='<label style="color:yellow;">Waiting</label>';
            }
            else if ($resAppointment['request']==1)
            {
              $request='<label style="color:lightgreen;">Accepted</label>';
            }
            else
            {
              $request='<label style="color:red;">Rejected</label>';
            }
?>
           <tr class="text-center">
              <td><?php echo $request; ?></td>
              <td><?php echo $resAppointment['id'] ;?></td>
              <td><?php echo $resAppointment['doctorId']; ?></td>
              <td><?php echo $resAppointment['doctorName']; ?></td>
              <td><?php echo $resAppointment['doctorSpeciality']; ?></td>
              <td><?php echo $resAppointment['doctorContact'];?></td>
              <td><?php echo $resAppointment['patientId'];?></td>
              <td><?php echo $resAppointment['patientName'];?></td>
              <td><?php echo $resAppointment['patientContact'];?></td>
              <td><?php echo $resAppointment['dateOFBooking'];?></td>
           </tr>

     <?php

        }
     ?>          


     </table>

     </div>
</div>


  <!-- ................................Appointments................................. -->


</body>
</html>

<style type="text/css">
  
  #cover
  {
    margin-left: 100px;
    margin-top: 100px;
    margin-right: 50px;
    background: #22242a;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 50px;
    padding-bottom: 50px;
    transition: .5s;
  }

  .navHead>li>a
  {
    color: white;
  }

  .internal
  {
    color: white;
  }

  .patientdetails1>span
  {
    font-size: 20px;
    font-family: roboto;
    text-transform: capitalize;
  }

  .patientdetails1>span:nth-child(odd)
  {
    color: #ee6e73;
    margin-left: 50px;
  }

  .patientdetails1>span:nth-child(even)
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
  /*background: red;*/
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
  color: #ee6e73;
}

.attributesDefine
{
  margin-left: 15px;
}
.subtitle
{
  text-align: center;
  color: #ee6e73;
}
/*........................prescription..........................................*/
.prescription
  {
    margin-left: -20px;
    background-color: #22242A;
    width: 100%;
    height: auto;
  }

  .prescriptionOuter
  {
    /*overflow-x: scroll;*/
  }

  .reports2>span
  {
    font-size: 16px;
    font-family: gill sans mt;
    text-transform: capitalize;
    text-align: center;
  }

  .over
  {
    position: absolute;
    visibility: hidden;
  }

  .reports
  {
    margin-top: 30px;
    display: inline-block;
    margin-left: 15px;
    vertical-align: top;
  }

  .reports1
  { 
    border-radius: 10px;
    width: 200px;
    height: 300px;
    margin-left: 40px;
    margin-top: 0;
    border: 1px solid #ee6e73;
    box-shadow: -7px -7px 15px #888888;
  }

  .reports2
  {
    background: rgba(129,129,129,.9);
    border-radius: 10px;
    visibility: hidden; 
    padding: 10px;
    transition: .15s;
  }
  .reportDetails
  {
    color: #ee6e73;
  }
  .view
  {
    margin-left: 55px;
  }
  .enlargeReport
       {
        width: 800px;
        visibility: hidden;
        position: fixed;
        top: 10px;
        left: 300px;
        z-index: 1;
        background: rgba(78,78,78,.9);
        padding: 10px;
        border-radius: 10px;
        transition: .15s;
       }
       .enlargeImage
       {
        width: 500px;
        height: 590px;
        border-radius: 10px;
        border: 2px solid #ee6e73;
       }

       .enlargeDetails
       {
        float: right;
        margin-top: 30px;
        margin-right: 10px;
        width: 230px;
       }
       .close
       {
        float: right;
        margin-top: -35px;
        margin-right: -5px;
       }
       .enlargeDetails>h6
       {
        font-size: 20px;
       }
       .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #ee6e73;
}
</style>

<script type="text/javascript">
  
function reveal(i)
{
    reports  = document.getElementsByClassName('reports2');
    reports[i].style='visibility:visible;';
}

function hide(i)
{ 
  reports = document.getElementsByClassName('reports2');
  reports[i].style='visibility:hidden;';
}

function enlarge(i)
{ 
  
  reports = document.getElementsByClassName('enlargeReport');
  reports[i].style='visibility:visible;';
}

function closeEnlarge(i)
{
  reports = document.getElementsByClassName('enlargeReport');
  reports[i].style='visibility:hidden;';

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

      document.getElementById('sidemenu').style="left:0px;";

      document.getElementById('cover').style="margin-left:300px;";


      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";

        document.getElementById('cover').style="margin-left:100px;";


      console.log('we are here by JS second');

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