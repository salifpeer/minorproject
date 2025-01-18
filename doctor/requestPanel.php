<?php  
    require 'dashboard.php';
?>

<?php 

  $doctorId=$res['id'];

  $q="select * from appointments where `doctorId`= '$doctorId' && `request`= 0;";

 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  

     <div id="outer"><br><br>
       
     <h1 class="text-center view"><i class="fa fa-user-md img" aria-hidden="true"></i>&nbspRequest<span>&nbspPanel</span> </h1> 

     <form method="POST">
     <?php
      $sql="SELECT COUNT(request) AS total FROM appointments WHERE request='0' && doctorId='$doctorId'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $num_rows=$values['total'];
      if ($num_rows>0) 
      {
                 echo '<button class="btn btn-danger float-right" name="rejectAll" >'.'Reject All'.'</button>';
                 echo "&nbsp";
              echo '<button class="btn btn-success float-right" name="confirmAll" style="margin-right:20px;">'.'Confirm All'.'</button>';
          
      }
      else
      {
         echo '<br><br><h2 class="text-light text-center">'.'No Pending Requests !'.'<h2>';
      }

      ?>
</form>
     
     <?php 

     if (isset($_POST['confirmAll'])) 
     {
       $con=mysqli_connect("localhost","root","","d-care");

        $q= "UPDATE `appointments` SET `request` = '1' where doctorId='$doctorId' && request='0'";
    
        mysqli_query($con,$q);

        header('location:requestPanel.php');

     }

     if (isset($_POST['rejectAll'])) 
     {
       $con=mysqli_connect("localhost","root","","d-care");

        $q= "UPDATE `appointments` SET `request` = '2' where doctorId='$doctorId' && request='0'";
    
        mysqli_query($con,$q);

        header('location:requestPanel.php');

     }

      ?>

     <br><br>
     

     <table class="table table-hover table-dark ">
           
<?php 

         $con=mysqli_connect("localhost","root","","d-care");

          $query=mysqli_query($con,$q);

          while($resAppointments =mysqli_fetch_array($query))
          {
  
?>
           <tr class="text-center">
              <td><?php echo 'Appointment Request Id #'.$resAppointments['id'] ?></td>
              <td><?php echo 'Patient Id: '.$resAppointments['patientId'] ?></td>
              <td><?php echo $resAppointments['patientName'] ?></td>
              <td><?php echo 'Contact: '.$resAppointments['patientContact'] ?></td>
              <td><?php echo $resAppointments['dateOFBooking']?></td>
          
              
               
              <td> 
            <button class="btn btn-success"><a href="acceptRequest.php?id=<?php echo $resAppointments['id']; ?>" class="text-white" >Confirm </a>
              </button>   
          </td>

          <td> 
            <button class="btn btn-danger"><a href="deleteRequest.php?id=<?php echo $resAppointments['id']; ?>" class="text-white" >Reject </a>
              </button>   
          </td>
           </tr>

     <?php

        }
     ?>          


     </table>

     </div>
   

</body>
</html>

<style type="text/css">

  body
  {
    margin: 0;
    background: url(4.jpg);
  }
  
  #outer
  {
    z-index: -1;
    margin: 0;
    margin-top: 100px;
    margin-left:10%;
    background-color: #22242A;
    width: 82%;
    margin-right: 5%;
    border-radius: 30px;
    height: auto;
    padding: 10px;
    padding-left:20px;
    padding-right:20px;
    transition: .5s;
  }

  th
  {

    background-color: #22242A;
    text-transform: capitalize;
  }
  table
  {
    width: 90%;
  }

  td
  {
    text-transform: capitalize;
  }

  .view
  {
    color: white;
  }

  .view>span
  {
    color: #08f;
  }

  .btn-secondary
  {
    width: 150px;
    height: 40px;
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
      document.getElementById('outer').style="margin-left:20%;";



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
      document.getElementById('outer').style="margin-left:10%;";


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