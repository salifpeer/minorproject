
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
  <?php  
    require 'dashboard.php';
  ?>

     <div id="outer"><br><br>
       
     <h1 class="text-center view"><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbspPati<span>ents</span> </h1><br>

     <table class="table table-hover table-dark">
            <tr class="bg-dark text-white text-center" >
              <th>Id</th>
              <th>first Name</th>
              <th>last Name</th>
              <th>Username</th>
              <th>Gender</th>
              <th>Date Of Birth</th>
              <th>Date of Join</th>
              <th>Mobile Number</th>
              <th>Phone Number</th>
              <th>Email id</th>
              <th>Update</th>
              <th>Delete</th>  
              <th>Add Reports</th>
              <th>View Reports</th>
            </tr>
<?php 

         $con=mysqli_connect("localhost","root","","d-care");

        //  mysqli_select_db($con,'patients');

          $q="select * from patients order by id desc" ;

          $query=mysqli_query($con,$q);

          while($res =mysqli_fetch_array($query))
          {
  
?>
           <tr class="text-center">
              <td><?php echo $res['id'] ?></td>
              <td><?php echo $res['firstName'] ?></td>
              <td><?php echo $res['lastName'] ?></td>
              <td><?php echo $res['username'] ?></td>
              <td><?php echo $res['gender']?></td>
              <td><?php echo $res['dob']?></td>
              <td><?php echo $res['dateOfJoining']?></td>
              <td><?php echo $res['mobileNumber']?></td>
              <td><?php echo $res['phoneNumber']?></td>
              <td><?php echo $res['email']?></td>

              <td><button class="btn-primary btn"><a href="updatePatient.php?id=<?php echo $res['id']; ?>" class="text-white"> Update</a></button> </td>
              <td><button class="btn-danger btn"><a href="deletePatient.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button> </td>
              <td><button class="btn-secondary btn"><a href="addPatientPrescreption.php?id=<?php echo $res['id']; ?>" class="text-white"> Add Reports</a></button> </td>

              <td><button class="btn-secondary btn"><a href="viewPatientPrescription.php?id=<?php echo $res['id']; ?>" class="text-white"> View Reports</a></button> </td>

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
    background: url(5.jpg);
  }
  
  #outer
  {
    z-index: -1;
    margin: 0;
    margin-top: 7%;
    /*margin-left:5%;*/
    margin-left: 250px;
    
    background-color: #22242A;
    width: 100%;
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
  }
  table
  {
    width: 90%;
  }

  .view
  {
    color: white;
  }

  .view>span
  {
    color: #ee6e73;
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
      document.getElementById('outer').style="margin-left:5%;";


      console.log('we are here by JS second');

      for(i=0;i<storeLeft.length;i++)
      
      {
        storeLeft[i].style="visibility:hidden;";

        storeRight[i].style="visibility:visible;";

        
      }

      storeRight[0].style="margin-left:91px;";
      storeRight[1].style="margin-left: 87px;";
      storeRight[2].style="margin-left: 87px;";
      storeRight[3].style="margin-left: 87px;";
      storeRight[4].style="margin-left: 77px;";
      storeRight[5].style="margin-left: 47px;";
      storeRight[6].style="margin-left: 32px;";
      storeRight[7].style="margin-left: 74px;";

      temp=0;
    } 

  }
</script>