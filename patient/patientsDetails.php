<?php
	require 'dashboard.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	
	<form method="POST">
	<div id="outer">

    <h1 class="heading"> <i class="fa fa-wheelchair right " aria-hidden="true"></i> Patient <span>Details</span></h1>
      <?php 
        $patientId= $res['id'];


     $checkQuery="select * from patientdetails where patientId='$patientId'";

            $data=mysqli_query($con,$checkQuery);

            $total= mysqli_num_rows($data);

            if ($total==1) 
            {
              echo "<h5 class='text-warning text-center'>You have already added details any thing you add will update all previous details!</h5><br>";
            }
            else
            {
              echo "<h4 class='text-success text-center'>Add Details!</h4><br>";

            }
       ?>
    <div class="leftDiv">

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Blood Pressure &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="bloodPressure" id="gridRadios1" value="1" onclick="show(0)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="bloodPressure" id="gridRadios2" value="0" onclick="show(1)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Blood Pressure Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="bloodPressureDetails"></textarea>
  </div>
 </fieldset>


  <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Diabeties &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="diabeties" id="gridRadios1" value="1" onclick="show(3)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="diabeties" id="gridRadios2" value="0" onclick="show(4)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Diabeties Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="diabetiesDetails"></textarea>
  </div>
 </fieldset>



 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Thyroid &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input  class="form-check-input radioYes" type="radio" name="thyroid" id="gridRadios1" value="1" onclick="show(5)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="thyroid" id="gridRadios2" value="0" onclick="show(6)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Thyroid Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="thyroidDetails"></textarea>
  </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Heart disease &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="heartDisease" id="gridRadios1" value="1" onclick="show(7)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="heartDisease" id="gridRadios2" value="0" onclick="show(8)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Heart disease Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="heartDiseaseDetails"></textarea>
  </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Any Previous Surgey &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="anyPreviousSurgey" id="gridRadios1" value="1" onclick="show(9)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="anyPreviousSurgey" id="gridRadios2" value="0" onclick="show(10)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Surgery Details&nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="surgeryDetails"></textarea>
  </div>
 </fieldset>

 </div>

 <div class="rightDiv">

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Allergies&nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="allergy"id="gridRadios1" value="1" onclick="show(11)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="allergy" id="gridRadios2" value="0" onclick="show(12)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Allergy Details&nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="allergyDetails"></textarea>
  </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Under Any Medication &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="medication"id="gridRadios1" value="1" onclick="show(13)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="medication" id="gridRadios2" value="0" onclick="show(14)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Medication Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="medicationDetails"></textarea>
  </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Asthamatic &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="asthama"id="gridRadios1" value="1" onclick="show(15)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="asthama" id="gridRadios2" value="0" onclick="show(16)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Asthamatic Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="asthamaDetails"></textarea>
  </div>
 </fieldset>

<fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Any Serious Injury &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="seriousInjury"id="gridRadios1" value="1" onclick="show(17)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="seriousInjury" id="gridRadios2" value="0" onclick="show(18)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Injury Details &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="seriousInjuryDetails"></textarea>
  </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="row">
      <h4  class="col-form-label col-sm-2 pt-0 option">Other Problems &nbsp</h4 >
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input radioYes" type="radio" name="otherProblems"id="gridRadios1" value="1" onclick="show(19)" required="">
          <label class="form-check-label" for="gridRadios1">
           YES
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input radioNo" type="radio" name="otherProblems" id="gridRadios2" value="0" onclick="show(20)" required="">
          <label class="form-check-label" for="gridRadios2">
            NO
          </label>
        </div>
      </div>
    </div><br>

    <div class="form-group details" >
    <label for="exampleFormControlTextarea1">Please Specify &nbsp</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="40" name="otherproblemDetails"></textarea>
  </div>
 </fieldset>

 </div>

<div class="height">

  <label>Height</label>
<div class="input-group mb-3 heigthFt">
  <select class="custom-select inputHeight" id="inputGroupSelect03" aria-label="Example select with button addon" name="heigthFt" required>
    <option value="" selected>Choose...</option>
    <option value="1ft" >1ft</option>
    <option value="2ft" >2ft</option>
    <option value="3ft" >3ft</option>
    <option value="4ft" >4ft</option>
    <option value="5ft" >5ft</option>
    <option value="6ft" >6ft</option>
    <option value="7ft" >7ft</option>
    <option value="8ft" >8ft</option>
  </select>
</div>
<div class="input-group mb-3 heigthIn">
  <select class="custom-select inputHeight" id="inputGroupSelect03" aria-label="Example select with button addon" name="heigthIn" required>
    <option value="" selected>Choose...</option>
    <option value="1 In" >1 In</option>
    <option value="2 In" >2 In</option>
    <option value="3 In" >3 In</option>
    <option value="4 In" >4 In</option>
    <option value="5 In" >5 In</option>
    <option value="6 In" >6 In</option>
    <option value="7 In" >7 In</option>
    <option value="8 In" >8 In</option>
    <option value="9 In" >9 In</option>
    <option value="10 In" >10 In</option>
    <option value="11 In" >11 In</option>
  </select>
</div>

</div>


<div class="weight">
  <label>Weight (in Kg)</label>

  <input type="text" name="weight" placeholder="" class="form-control weightInput" onkeypress="return validationnumber()" required="" maxlength="3" minlength="1">

</div><br>

<div class="bloodGroup">
  <label>Blood Group</label>
<div class="input-group mb-3 ">
  <select class="custom-select bloodGroupInput" id="inputGroupSelect03" aria-label="Example select with button addon" name="bloodGroup" required>
    <option value="" selected>Choose...</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B+">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="Rh Null">Rh Null</option>
  </select>
</div>
</div>

<br>


    <input class="btn btn-warning addDetails" type="submit" name="submit" value="Add Details"><br><br>
<?php 

	$con=mysqli_connect("localhost","root","","d-care");

  	// mysqli_select_db($con,'patientdetails');
  
    
if (isset($_POST['submit'])) 
{	
	$patientId= $res['id'];

	$bloodPressureDetails= ($_POST['bloodPressure']==1) ? $_POST['bloodPressureDetails'] : 'no details';

	$bloodPressure= ($_POST['bloodPressure']==1) ? 'Yes'.'-'.$bloodPressureDetails : 'No-Not defined' ;

 
    $diabetiesDetails= ($_POST['diabeties']==1) ? $_POST['diabetiesDetails'] : 'no details';

	$diabeties= ($_POST['diabeties']==1) ? 'Yes'.'-'.$diabetiesDetails : 'No-Not defined' ;


	$thyroidDetails= ($_POST['thyroid']==1) ? $_POST['thyroidDetails'] : 'no details';

	$thyroid= ($_POST['thyroid']==1) ? 'Yes'.'-'.$thyroidDetails : 'No-Not defined' ;


  $heartDiseaseDetails= ($_POST['heartDisease']==1) ? $_POST['heartDiseaseDetails'] : 'no details';

  $heartDisease= ($_POST['heartDisease']==1) ? 'Yes'.'-'.$heartDiseaseDetails : 'No-Not defined' ;


  $surgeryDetails= ($_POST['anyPreviousSurgey']==1) ? $_POST['surgeryDetails'] : 'No details';

  $anyPreviousSurgey= ($_POST['anyPreviousSurgey']==1) ? 'Yes'.'-'.$surgeryDetails : 'No-Not defined' ;


  $allergyDetails= ($_POST['allergy']==1) ? $_POST['allergyDetails'] : 'no details';

  $allergy= ($_POST['allergy']==1) ? 'Yes'.'-'.$allergyDetails : 'No-Not defined' ;


  $medicationDetails= ($_POST['medication']==1) ? $_POST['medicationDetails'] : 'no details';

  $medication= ($_POST['medication']==1) ? 'Yes'.'-'.$medicationDetails : 'No-Not defined' ;


  $asthamaDetails= ($_POST['asthama']==1) ? $_POST['asthamaDetails'] : 'no details';

  $asthama= ($_POST['asthama']==1) ? 'Yes'.'-'.$asthamaDetails : 'No-Not defined' ;
  

  $seriousInjuryDetails= ($_POST['seriousInjury']==1) ? $_POST['seriousInjuryDetails'] : 'no details';

  $seriousInjury= ($_POST['seriousInjury']==1) ? 'Yes'.'-'.$seriousInjuryDetails : 'No-Not defined' ;

  $otherProblemDetails= ($_POST['otherProblems']==1) ? $_POST['otherProblemDetails'] : 'no details';

  $otherProblems= ($_POST['otherProblems']==1) ? 'Yes'.'-'.$otherProblemDetails : 'No-Not defined' ;

  $height=$_POST['heigthFt'].' '.$_POST['heigthIn'];

  $weight=$_POST['weight'].'Kg';

  $bloodGroup=$_POST['bloodGroup'];

  $checkQuery="select * from patientdetails where patientId='$patientId'";

            $data=mysqli_query($con,$checkQuery);

            $total= mysqli_num_rows($data);
 

    if ($total==1) 
    {
      $updateQuery="UPDATE `patientdetails` SET `bloodPressure`='$bloodPressure',`diabities`='$diabeties',`thyroid`='$thyroid',`heartDisease`='$heartDisease',`anyPreviousSurgey`='$anyPreviousSurgey',`allergy`='$allergy',`underAnyMedication`='$medication',`asthamatic`='$asthama',`anySeriousInjury`='$seriousInjury',`otherProblems`='$otherProblems',`height`='$height',`weight`='$weight',`bloodGroup`='$bloodGroup' WHERE patientId='$patientId'";

      $queryUpdate=mysqli_query($con,$updateQuery);

      echo "<script>alert('Details Updated Successfully!');window.location = 'patientsDetails.php';</script>";
    }

    else
    {
      
      $queryDetails="INSERT INTO `patientdetails`(`patientId`, `bloodPressure`, `diabities`, `thyroid`, `heartDisease`, `anyPreviousSurgey`, `allergy`, `underAnyMedication`, `asthamatic`, `anySeriousInjury`,`otherProblems`, `height`, `weight`, `bloodGroup`) VALUES ('$patientId','$bloodPressure','$diabeties','$thyroid','$heartDisease','$anyPreviousSurgey','$allergy','$medication','$asthama','$seriousInjury','$otherProblems','$height','$weight','$bloodGroup')";


      $queryExecute=mysqli_query($con,$queryDetails);

      echo "<script>alert('Details Added Successfully!');window.location = 'patientsDetails.php';</script>";

    }
	
	
}
  	
?>

	</div>
	</form>
</body>
</html>

<style type=>
	
#outer
{
background: #22242a;
margin-top: 100px;
margin-left: 150px;
margin-bottom: 50px;
padding: 50px;
width: 1000px;
z-index: -1;
transition-property: margin;
transition: .5s;
}

.details
{
	visibility: hidden;
	position: absolute;
  vertical-align: top;
}


.heigthFt,.heigthIn
{
 width: 44.43%;
 display: inline-block;
 margin-left: 21px;
/* margin-top: 20px;
*/
}

.input-group>.custom-select
{
  width: 100%;
}

.leftDiv,.rightDiv
{
  display: inline-block;
  width: 40%;
  /*background: red;*/
  vertical-align: top;
}

.leftDiv
{
  margin-left: 100px;
}

.rightDiv
{
  margin-left: 70px;
}

.radioYes,.radioNo
{
  margin-left: 90px;
  color: white;

}

.form-check-label
{

  margin-left: 50px;
  font-size: 16px;
  font-weight: 600;
  color: white;
}

.option 
{
  font-size: 18px;
  color: white;
}

label
{
  color: white;
  font-size: 16px;
  font-weight: 550;
}

.heading
{
  color: white;
  text-align: center;
  margin-bottom: 50px;
}

.heading>span
{
  color: #ee6e73;
}

.addDetails
{
  margin-left: 320px;
  width: 260px;
  color: white;
  font-weight: 600;
}

.inputHeight,.weightInput,.bloodGroupInput
{
    outline: none;
    transition: .15s;
    transition-property: border;
    box-shadow: 2px 2px 10px #5a5f6f inset;
    border: 1px solid whitesmoke;
}

.inputHeight:focus,.weightInput:focus,.bloodGroupInput:focus
  {
  
      border: 2px solid #ee6e73;
  }

</style>

<script type="text/javascript">
	
 details= document.getElementsByClassName('details');

 function show(x) 
 {
 	switch(x)
 	{
 		case 0:
 			details[0].style="visibility:visible;position: relative";
 			break;

 		case 1:
 			details[0].style="visibility:hidden;position: absolute";
 			break;
 		case 3:
 			details[1].style="visibility:visible;position: relative";
 			break;

 		case 4:
 			details[1].style="visibility:hidden;position: absolute";
 			break;
 		case 5:
 			details[2].style="visibility:visible;position: relative";
 			break;

 		case 6:
 			details[2].style="visibility:hidden;position: absolute";
 			break;

    case 7:
      details[3].style="visibility:visible;position: relative";
      break;

    case 8:
      details[3].style="visibility:hidden;position: absolute";
      break;

    case 9:
      details[4].style="visibility:visible;position: relative";
      break;

    case 10:
      details[4].style="visibility:hidden;position: absolute";
      break;

    case 11:
      details[5].style="visibility:visible;position: relative";
      break;

    case 12:
      details[5].style="visibility:hidden;position: absolute";
      break; 

    case 13:
      details[6].style="visibility:visible;position: relative";
      break;

    case 14:
      details[6].style="visibility:hidden;position: absolute";
      break;

    case 15:
      details[7].style="visibility:visible;position: relative";
      break;

    case 16:
      details[7].style="visibility:hidden;position: absolute";
      break; 

    case 17:
      details[8].style="visibility:visible;position: relative";
      break;

    case 18:
      details[8].style="visibility:hidden;position: absolute";
      break; 

    case 19:
      details[9].style="visibility:visible;position: relative";
      break;

    case 20:
      details[9].style="visibility:hidden;position: absolute";
      break;    
           
 	}	
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

      document.getElementById('outer').style="margin-left:300px;";


      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";

        document.getElementById('outer').style="margin-left:150px;";


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
<script type="text/javascript">
  function validationnumber() 
   {
    console.log('inside function validationnumber');

        a=event.keyCode;

          if(a>=48 && a<=57){
            event.returnValue= true
          }
          else {
            event.returnValue= false
          }

    }

</script>