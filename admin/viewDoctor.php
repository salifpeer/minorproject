<?php  
    require 'dashboard.php';
?>

<?php 

  $q="select * from doctors order by id desc";


 if(isset($_POST['searchBtn']))
 {
      $search=$_POST['search'];

      $q ="SELECT * FROM `doctors` WHERE `firstName` like '$search%' || `lastName` like '$search%' || id like '$search%'" ;
 }
 ?>

 <?php 

 if(isset($_POST['filter']))
 {
      $filters=$_POST['filters'];

      $q ="SELECT * FROM `doctors` WHERE `speciality` = '$filters'";
 }
 ?>

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
       
     <h1 class="text-center view"><i class="fa fa-user-md img" aria-hidden="true"></i>&nbspDoc<span>tors</span> </h1> 
     <form method="POST">

    <div class="searchFilter">
     <input type="text" class="form-control bar" name="search" placeholder="search">
     <input type="submit" class="btn btn-primary" name="searchBtn" value="Search">
    </div>

 <div class="searchFilter">   

  <?php

$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality` ORDER BY `speciality`.`speciality` ASC";

$filterQueryExecute=mysqli_query($con,$filterQuery);

echo "<select name='filters' class='form-control filters bar'>";

    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
</select>

     <input type="submit" class="btn btn-primary" name="filter" value="filter">
</div>

     </form>
     <table class="table table-hover table-dark ">
            <tr class="bg-dark text-white text-center table-bordered" >
              <th>Profile Pic</th>
              <th>Id</th>
              <th>first Name</th>
              <th>last Name</th>
              <th>Username</th>
              <th>Gender</th>
              <th>Date Of Birth</th>
              <th>speciality</th>
              <th>Mobile Number</th>
              <th>Phone Number</th>
              <th>Email id</th>
              <th>Date of Join</th>
              <th>Status</th>
              <th>change status</th>
              <th>Update</th>
              <th>Delete</th>
               
            </tr>
<?php 

         $con=mysqli_connect("localhost","root","","d-care");

        //  mysqli_select_db($con,'doctors');

          $query=mysqli_query($con,$q);

          while($res =mysqli_fetch_array($query))
          {
            $rep='../admin/';
            $rep.='../doctor/'.$res['profilePic'] ;
?>
           <tr class="text-center">
             <td><img src="<?php echo $rep; ?>" style="width: 70px;height: 70px;border-radius: 100%;"></td>    
              <td><?php echo $res['id'] ?></td>
              <td><?php echo $res['firstName'] ?></td>
              <td><?php echo $res['lastName'] ?></td>
              <td><?php echo $res['username'] ?></td>
              <td><?php echo $res['gender']?></td>
              <td><?php echo $res['dob']?></td>
              <td><?php echo $res['speciality']?></td>
              <td><?php echo $res['mobileNumber']?></td>
              <td><?php echo $res['phoneNumber']?></td>
              <td><?php echo $res['email']?></td>
              <td><?php echo $res['DateOFJoin']?></td>
               <td><?php echo ($res['status']==0) ? "<label style='color:red;'>"."Disabled"."</label>" : "<label style='color:lightgreen;'>"."Active"."</label>"?></td>
               
              <td> 
            <button class="btn-secondary btn"> <a href="changeStatus.php?id=<?php echo $res['id']; ?> & status=<?php echo $res['status'];?>" class="text-white" >
              <?php

                 if($res['status']==1) 
                  {
                     echo "<p style=:'color:lightgreen;'>"."Block"."</p>";
                  }
                 else
                  {
                    echo"<label style=:'color:Red;'>"."Unblock"."</label>";
                  }


                 ?>
                 </a>
              </button>   
          </td>

              <td><button class="btn-primary btn"><a href="updateDoctor.php?id=<?php echo $res['id']; ?>" class="text-white"> Update</a></button> </td>
              <td><button class="btn-danger btn"><a href="deleteDoctor.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button> </td>
             



             <!--  <td><button class="btn-secondary btn"><a href="changeStatus.php?id=<?php echo $res['id']; ?>" class="text-white"> change status</a></button> </td> -->

           </tr>

     <?php

        }
     ?>          


     </table>

     </div>
   

</body>
</html>

<style type="text/css">

  .bar
  {
    display: inline-block;
    width: 300px;
    vertical-align: top;
    /*height: 30px;*/
  }

  .searchFilter
  {
    width: 450px;
    display: inline-block;
    padding: 20px;
    vertical-align: top;
    /*float: right;*/
  }

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
    /*margin-left:5%;*/
    margin-left: 250px;
    
    background-color: #22242A;
    width: 120%;
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

  .filters
  {
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