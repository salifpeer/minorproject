<?php 
require'dashboard.php';
    
    $con=mysqli_connect("localhost","root","","d-care");

    $patientId=$_GET['id'];

    $display="select * FROM `patients` WHERE id=$patientId";

    $query=mysqli_query($con,$display);

    $result=mysqli_fetch_array($query);

    $patientName = $result['firstName'].' '.$result['lastName'];

    $patientGender = $result['gender'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
   <form method="post">
   <div class="card">
            <h1><i style="color: #08f;" class="fa fa-file " aria-hidden="true"></i> Prescription</h1><br>

            <div class="info">
                <span>Patient Id : </span><span><?php echo $patientId; ?></span>

                <span >Name : </span><span><?php echo $patientName; ?></span>

                 <span>Gender : </span><span><?php echo $result['gender'] ?></span>

                <span>Date of birth : </span><span><?php echo $result['dob'] ?></span>

                 <br><br>

                <span>Mobile Number : </span><span><?php echo $result['mobileNumber'] ?></span>


                <span>Phone number : </span><span><?php echo $result['phoneNumber'] ?></span>

                <span>email : </span><span><?php echo $result['email'] ?></span><br><br>
            </div>
        
         <div>
        	<label>Patient suffering from:</label>
        	<textarea class="form-control " id="validationTextarea" placeholder="patient suffering from" rows="10" name="suffering" required></textarea>
        </div><br><br>

        <div>
        	<label>Prescribe Medicines:</label>
        	<textarea class="form-control " id="validationTextarea" placeholder="prescribe medicines here"  rows="10" name="medicines" required></textarea>
        </div><br><br>

         <div>
        	<label>Test Report Details:</label>
        	<textarea class="form-control " id="validationTextarea" placeholder="Doctor's Advice here"  rows="10" name="ReportDetails"></textarea>
        </div><br><br>

        <div>
        	<label>Advice:</label>
        	<textarea class="form-control " id="validationTextarea" placeholder="Doctor's Advice here"   rows="10" name="Advice" required></textarea>
        </div><br><br>

        <input type="submit" name="submit" value="Prescribe" class="btn btn-primary"><br><br>
        <?php
if (isset($_POST['submit']))
{   

    $dob=$result['dob'];

    $doctorName=$res['firstName'].' '.$res['lastName'];

    $query2="INSERT INTO `prescription`(`patientId`, `patientName`, `gender`, `dob`, `suffering`, `medicines`, `reportDetails`, `Advice`, `doctorId`, `doctorName`, `doctorContact`, `doctorEmail`) VALUES ('$patientId','$patientName','$patientGender','$dob','".$_POST['suffering']."','".$_POST['medicines']."','".$_POST['ReportDetails']."','".$_POST['Advice']."','".$res['id']."','$doctorName','".$res['mobileNumber']."','".$res['email']."');";


   mysqli_query($con,$query2);
}
?>
   </div>
   </form>

</body>
</html>

<style type="text/css">
	*
    {
 	   margin:0;
 	   padding:0;
 	}

    h1
    {
        text-align: center;
    }

    label
    {
        font-size: 18px;
    }

    .card
    {
        width: 1200px;
        margin: 100px auto;
        /*z-index: -1;*/
        padding: 50px;
        background: #22242a;
        color: white;
        border-radius: 20px;
    }

    .card>label
    {
        font-size: 18px;
    }

    .info>span:nth-child(odd)
    {
        color: #08f;
        margin-left: 50px;
        text-align: center;
    }

     .info>span
     {
        font-size: 20px;
        text-transform: capitalize;
        font-family: bahnschrift
     }
     .info
     {
        margin:0 auto;
     }
     textarea
     {
        text-transform: capitalize;
     }

</style>


