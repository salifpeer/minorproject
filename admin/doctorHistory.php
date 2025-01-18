<?php 
	require "dashboard.php";
  $docotrId=$_GET['id'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<div id="cover">
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Prescribed Patients</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Appointments</a>
  </li>
</ul>

<!-- ............................My Patient................................. -->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
    <div class="prescription"><br><br>
       
     <h1 style="color: #08f;" class="text-center view"><i  class="fa fa-wheelchair" aria-hidden="true"></i>&nbspPres<span style="color: white;">cribed</span> </h1><br>

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
            </tr>
<?php 
  
         $con=mysqli_connect("localhost","root","","d-care");

        $doctorId=$_GET['id'];


          $query="SELECT * FROM `prescription` WHERE doctorID = '$doctorId' ORDER BY `prescription`.`dated` DESC" ;

          $queryExecute=mysqli_query($con,$query);

          while($prescription =mysqli_fetch_array($queryExecute))
          {
  
?>
           <tr class="text-center">
              <td><?php echo $prescription['id'] ?></td>
              <td><?php echo $prescription['dated'] ?></td>
              <td><?php echo $prescription['patientId'] ?></td>
              <td><?php echo $prescription['patientName'] ?></td>
              <td><?php echo $prescription['suffering']?></td>
              <td><?php echo $prescription['medicines']?></td>
              <td><?php echo $prescription['reportDetails']?></td>
              <td><?php echo $prescription['Advice']?></td>          
      <?php 
    }
       ?>       


     </table>

     </div>

  </div>
<!-- ............................My Patient................................. -->

<!-- .......................Appointments..................................... -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div id="outer"><br><br>
       
     <h1 style="color: #08f;" class="text-center view"><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbspCurent<span style="color: white;">&nbspAppointments</span> </h1><br>

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
              <th>View History</th> 
              
            </tr>

<?php 

         $con=mysqli_connect("localhost","root","","d-care");

          $doctorId=$_GET['id'];

          $qAppointment="SELECT * FROM `appointments` WHERE `doctorId`= '$doctorId'  ORDER BY `appointments`.`dateOFBooking` DESC" ;

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
              <td><button class="btn btn-info historyBtn"><a href="patientHistory.php?id=<?php echo $resAppointment['patientId']; ?>" class="text-white"> View History</a></button> </td>

           </tr>

     <?php

        }
     ?>          


     </table>

     </div>
  </div>
 <!-- .......................Appointments........................................ -->
 	</div>
 
 </body>
 </html>

 <style type="text/css">
 	
 	#cover
 	{
 		width: 95%;
    background:#22242a;
    /*margin-left: 59px;*/
    margin-left: 250px;
    
    margin-top: 100px;
    padding: 30px;
    border-radius: 20px;
    color: white;
    margin-bottom: 50px;
    margin-right: 50px;
    transition: .5s;
 	}

 	ul>li>a
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

      document.getElementById('sidemenu').style="left:0px;overflow: scroll;";

      document.getElementById('cover').style="margin-left:19%;";


      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";

        document.getElementById('cover').style="margin-left:59px;";


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