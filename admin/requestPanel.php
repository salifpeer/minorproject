<?php  
    require 'dashboard.php';
?>

<?php 

  $qDoc="select * from doctors where request = 0 ";
  $queryDoc=mysqli_query($con,$qDoc);
  $totalDoc = mysqli_num_rows($queryDoc);


  $qPatient="select * from patients where request = 0 ";
  $queryPatient=mysqli_query($con,$qPatient);
  $totalPatient = mysqli_num_rows($queryPatient);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Request Panel</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://localhost/minorProject/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/minorProject/bootstrap-4.5.2-dist/css/bootstrap.css">
<script src="http://localhost/minorProject/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
  
  <div id="outer"><br><br>
    <h1 class="text-center view"><i class="fa fa-user-md img" aria-hidden="true"></i>&nbspRequest<span>&nbspPanel</span></h1><br><br>

    <?php 
      if ($totalDoc > 0 || $totalPatient > 0) {
        echo '<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-left:300px">';

        if ($totalDoc > 0) {
          echo '<li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Doctor</a>
                </li>';
        }

        if ($totalPatient > 0) {
          echo '<li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-patient-tab" data-bs-toggle="pill" href="#pills-patient" role="tab" aria-controls="pills-patient" aria-selected="false">Patients</a>
                </li>';
        }

        echo '</ul>';
      } else {
        echo '<h1 class="text-center" style="color:red;">No New Notifications!</h1>';
      }
    ?>

    <div class="tab-content" id="pills-tabContent">
      <?php 
        if ($totalDoc > 0 || $totalPatient > 0 ) {
          echo '<a href="deleteAllRequest.php"><button class="btn btn-danger float-right">Reject All</button></a>';
          echo '<a href="confirmAllRequest.php"><button class="btn btn-success float-right" style="margin-right: 1%;">Accept All</button></a><br><br>';   
        }
      ?>  

      <!-- Doctors Tab -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
        <table class="table table-hover table-dark" style="margin-left:300px">
          <?php 
            if ($totalDoc > 0) {
              echo '<tr>
                      <td><h1><i class="fa fa-user-md text-primary" aria-hidden="true"></i></h1></td>
                      <td><h1 class="text-primary">Doctor</h1></td>
                      <td colspan="6"></td>
                      <td><a href="confirmAllDoc.php"><button class="btn btn-success">Accept All</button></a></td>
                      <td><a href="deleteAllDoc.php"><button class="btn btn-danger">Reject All</button></a></td>
                    </tr>';  
            }

            while ($resDoc = mysqli_fetch_array($queryDoc)) {
              echo '<tr class="text-center">
                      <td class="text-primary"><i class="fa fa-user-md" aria-hidden="true"></i> Doctor</td>
                      <td>' . $resDoc['id'] . '</td>
                      <td>' . $resDoc['firstName'] . '</td>
                      <td>' . $resDoc['lastName'] . '</td>
                      <td>' . $resDoc['speciality'] . '</td>
                      <td>' . $resDoc['email'] . '</td>
                      <td>' . $resDoc['DateOFJoin'] . '</td>
                      <td><button class="btn btn-success"><a href="acceptRequestDoctor.php?id=' . $resDoc['id'] . '" class="text-white">Accept</a></button></td>
                      <td><button class="btn btn-danger"><a href="deleteRequestDoctor.php?id=' . $resDoc['id'] . '" class="text-white">Reject</a></button></td>
                    </tr>';
            }
          ?> 
        </table>
      </div>
      
      <!-- Patients Tab -->
      <div class="tab-pane fade" id="pills-patient" role="tabpanel" aria-labelledby="pills-patient-tab">
        <table class="table table-hover table-dark" style="margin-left:300px">
          <?php 
            if ($totalPatient > 0) {
              echo '<tr>
                      <td><h1><i class="fa fa-wheelchair text-warning" aria-hidden="true"></i></h1></td>
                      <td class="text-warning"><h1>Patients</h1></td>
                      <td colspan="6"></td>
                      <td><a href="confirmAllPatient.php"><button class="btn btn-success">Accept All</button></a></td>
                      <td><a href="deleteAllPatient.php"><button class="btn btn-danger">Reject All</button></a></td>
                    </tr>';  
            }

            while ($resPatient = mysqli_fetch_array($queryPatient)) {
              echo '<tr class="text-center">
                      <td class="text-warning"><i class="fa fa-wheelchair" aria-hidden="true"></i> Patient</td>
                      <td>' . $resPatient['id'] . '</td>
                      <td>' . $resPatient['firstName'] . '</td>
                      <td>' . $resPatient['lastName'] . '</td>
                      <td>' . $resPatient['dateOfJoining'] . '</td>
                      <td>' . $resPatient['email'] . '</td>
                      <td>' . $resPatient['dateOfJoining'] . '</td>
                      <td><button class="btn btn-success"><a href="acceptRequestPatients.php?id=' . $resPatient['id'] . '" class="text-white">Accept</a></button></td>
                      <td><button class="btn btn-danger"><a href="deleteRequestPatients.php?id=' . $resPatient['id'] . '" class="text-white">Reject</a></button></td>
                    </tr>';
            }
          ?> 
        </table>
      </div>

    </div>
  </div>
</body>
</html>

<style type="text/css">
  body {
    margin: 0;
  }
  
  #outer {
    z-index: -1;
    margin: 0;
    margin-top: 100px;
    margin-left: 240px;
    background-color: #22242A;
    border-radius: 30px;
    height: auto;
    padding: 10px 20px;
    transition: .5s;
    margin-bottom: 70px;
  }

  th {
    background-color: #22242A;
    text-transform: capitalize;
  }

  table {
    width: 100%;
  }

  td {
    text-transform: capitalize;
  }

  .view {
    color: white;
  }

  .view > span {
    color: #bd00ff;
  }

  .btn-secondary {
    width: 150px;
    height: 40px;
  }

  .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #bd00ff;
  }

  .nav-link {
    color: white;
  }

  .nav-link:hover {
    color: #bd00ff;
  }
</style>

<script type="text/javascript">
  temp = 0;
  storeRight = document.getElementsByClassName('right');
  storeLeft = document.getElementsByClassName('left');

  function toggle() {
    if (temp == 0) { 
      temp = 1;
      document.getElementById('sidemenu').style = "left:0px;overflow: scroll;";
      document.getElementById('outer').style = "margin-left:300px;";

      for (i = 0; i < storeLeft.length; i++) {
        storeLeft[i].style = "visibility:visible;";
        storeRight[i].style = "visibility:hidden;";
      }

    } else {
      document.getElementById('sidemenu').style = "left:-200px;";
      document.getElementById('outer').style = "margin-left:7%;";

      for (i = 0; i < storeLeft.length; i++) {
        storeLeft[i].style = "visibility:hidden;";
        storeRight[i].style = "visibility:visible;";
      }

      storeRight[0].style = "margin-left:97px;";
      storeRight[1].style = "margin-left: 96px;";
      storeRight[2].style = "margin-left: 121px;";
      storeRight[3].style = "margin-left: 118px;";
      storeRight[4].style = "margin-left: 60px;";
      storeRight[5].style = "margin-left: 77px;";
      storeRight[6].style = "margin-left: 117px;";
      storeRight[7].style = "margin-left: 75px;";
      storeRight[8].style = "margin-left: 60px;";

      temp = 0;
    } 
  }
</script>