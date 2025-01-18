     

<?php
require 'dashboard.php';

  $con=mysqli_connect("localhost","root","","d-care");

  // mysqli_select_db($con,'reports');

   if(isset($_POST['update']))
  	{
  		$id=$res['id'];

      $display="select * FROM `patients` WHERE id=$id";

      $queryPatient=mysqli_query($con,$display);

      $resPatient=mysqli_fetch_array($queryPatient);

      $patientName = $resPatient['firstName'].' '.$resPatient['lastName'];

      $testTypes=$_POST['testTypes'];

  		$uploadBy='Patient '.$res['firstName']." ".$res['lastName'].' And id = '.$res['id'];

  		$sourceReport=$_FILES['report']['tmp_name'];

  	 	$nameReport=$_FILES['report']['nameReport'];

  	 	$destinationReport='../patient/reports/'.rand().time().$nameReport;

  	 	move_uploaded_file($sourceReport, $destinationReport);

  		$query="INSERT INTO `reports`(`patientId`,`patientName`, `uploadedBy`, `path`, `testTypes`) VALUES ('$id','$patientName','$uploadBy','$destinationReport','$testTypes')";


  		$queryExecute= mysqli_query($con,$query);

  		header('location:reportAddedSuccessfull.php');

 	} 

              
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id='reportOuter' >

		<h1 class="text-white text-center">Upload <span class='text-warning'>Reports</span></h1><br>
      <form method="POST" enctype="multipart/form-data">

  <div class="input-group mb-3 fileReport">
     <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile02" name="report">
        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
    </div>
    
  </div><br>

  <div class="input-group-append reportTypeOuter">
  
     <?php

$con=mysqli_connect("localhost","root","","d-care");

$reportType = "SELECT * FROM `reporttypes` ORDER BY `reporttypes`.`reportTypes` ASC";

$reportTypeExecute=mysqli_query($con,$reportType);

echo "<select name='testTypes' class='form-control' id='testTypes'>";

    while($resReport = mysqli_fetch_array($reportTypeExecute))

          {

 ?>
       <option><?php echo $resReport['reportTypes']; ?> </option>
        
   <?php 
   }
   
    ?>  
</select>
</div>


			<br><input type="submit" name="update" class="btn btn-warning btnAdd text-white" value="Add Report">
      </form>
  </div>
</body>
</html>
<style type="text/css">
	#reportOuter{
		width: 850px;
		margin-left:280px;
		margin-top: 150px;
		padding: 50px;
		border-radius: 10px;
    transition-property: margin;
    transition: .5s;
    background: #22242a;
	}

	.btnAdd
	{
		width: 300px;
		margin-left: 210px;
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

      document.getElementById('reportOuter').style="margin-left:380px;";


      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";

        document.getElementById('reportOuter').style="margin-left:280px;";


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