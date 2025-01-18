<?php  
    require 'dashboard.php';
?>

<?php 

  $q="select * from doctors WHERE request = '1' order by id desc";


 if(isset($_POST['searchBtn']))
 {
      $search=$_POST['search'];

      $q ="SELECT * FROM `doctors` WHERE (`firstName` like '$search%' || `lastName` like '$search%' || id like '$search%') && request = '1'" ;
 }
 ?>

 <?php 

 if(isset($_POST['filter']))
 {
      $filters=$_POST['filters'];

      $q ="SELECT * FROM `doctors` WHERE `speciality` = '$filters' && request = '1'";
 }
 ?>

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Doctors</title>
</head>
<body>

<div id="cover">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">View Doctors</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add New</a>
  </li>
</ul>


<div class="tab-content" id="pills-tabContent">
<!-- .......................View Doctors............................. -->

  <div class="tab-pane fade show active viewDoc" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div id="outer"><br><br>
       
     <h1 class="text-center view"><i class="fa fa-user-md img" aria-hidden="true"></i>&nbspDoc<span>tors</span> </h1> 
     <form method="POST">

    <div class="searchFilter">
     <i style='position: relative; left: 45px;' class="fa fa-search" aria-hidden="true"></i><input type="text" class="form-control bar" name="search" placeholder="search">
     <input type="submit" class="btn btn-primary searchBtn" name="searchBtn" value="Search">
    </div>

 <div class="searchFilter">   

  <?php

$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality` ORDER BY `speciality`.`speciality` ASC";

$filterQueryExecute=mysqli_query($con,$filterQuery);

echo "<i style='position: relative; left: 30px;' class='fa fa-filter' aria-hidden='true'></i><select name='filters' class='form-control filters bar'>";

    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
</select>

     <input type="submit" class="btn btn-primary searchBtn" name="filter" value="filter">
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
              <th>History</th>
              <th>Additional Info</th>
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
            <button class="btn-secondary btn"> <a  href="changeStatusDoctor.php?id=<?php echo $res['id']; ?> & status=<?php echo $res['status'];?>" class=" text-white" >
              <?php

                 if($res['status']==1) 
                  {
                     echo "<label style=:'color:lightgreen;'>"."Block"."</label>";
                  }
                 else
                  {
                    echo"<label style=:'color:Red;cursor:'>"."Unblock"."</label>";
                  }


                 ?>
                 </a>
              </button>   
          </td>

              <td><button class="btn-primary btn"><a href="updateDoctor.php?id=<?php echo $res['id']; ?>" class="text-white"> Update</a></button> </td>

              <td><button class="btn-danger btn"><a href="deleteDoctor.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button> </td>

              <td><button class="btn-secondary btn"><a href="doctorHistory.php?id=<?php echo $res['id']; ?>" class="text-white">View History</a></button> </td>

              <td><button class="btn-info btn"><a href="doctorMoreInfo.php?id=<?php echo $res['id']; ?>" class="text-white">More Info</a></button> </td>
           </tr>

     <?php

        }
     ?>          


     </table>

     </div>
<style type="text/css">

  .bar
  {
    display: inline-block;
    width: 300px;
    vertical-align: top;
    text-indent: 20px;
    text-transform: capitalize;
  }

  .searchFilter
  {
    width: 470px;
    display: inline-block;
    padding: 20px;
    vertical-align: top;
    /*float: right;*/
  }

  body
  {
    margin: 0;
    /*background: url(4.jpg);*/
  }
  
  #outer
  {
    z-index: -1;
    margin: 0;
    /*margin-top: 100px;*/
    /*margin-left:5%;*/
    background-color: #22242A;
    width: 135%;
    border-radius: 30px;
    height: auto;
    transition: .5s;
    padding: 30px;
  }

  th
  {

    background-color: #22242A;
    text-transform: capitalize;
  }
  table
  {
    width: 50%;
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
    box-shadow: 3px 3px 15px #575c69 inset;
  }

</style>


  </div>

<!-- .......................View Doctors............................. -->

<!-- .......................Add Doctors............................. -->


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  	<div id="inner">
	 				
	 				<h1 id="addDoc"><i class="fa fa-user-md img" aria-hidden="true"></i> Add <span>Doctor</span></h1><br>

		<form method="POST">

  
 <i  style="position: relative;left: 47px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i>
 <input type="text" name="username" placeholder="Username" onkeypress="valUsername()" id="valusername" required="" autocomplete="off"  ><br>
 <small id="userSmall" style="color: #223;font-size: 10px;">.</small><br><br>


 <i  style="position: relative;left: 47px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i>
 <input type="email" name="email" placeholder="Email" required="" id="email" onkeypress="validationEmail()" autocomplete="off">
 <small style="position: relative;bottom: 10px;left: 20px;color: red;"></small><br><br>
  
  <button type="submit" name="next" class="btn btn-primary nextBtn" onclick="return validate()">Next</button>

</form>
<script type="text/javascript">

	function valUsername()

	{
		
		let user=document.getElementById('valusername').value;

		let lengthUser=user.length;

		if (lengthUser>=0 && lengthUser<6) 
		{
			document.getElementById('userSmall').innerText='username should be 6-20 characters and only alpha numeric and _ . are allowed';
			document.getElementById('userSmall').style="position: relative;bottom: 6px;left: 50px;color: red;font-size:12px;";
		}
		else
		{
			document.getElementById('userSmall').innerText='.';
			document.getElementById('userSmall').style="position: relative;bottom: 10px;left: 50px;color: #223;";

		}
		
		if(lengthUser>=20)
		{
			event.returnValue= false
		}

		a=event.keyCode;

          if(a>=48 && a<=57 || a>=65 && a<=90 || a>=97 && a<=122  || a==95 || a==46 || a==45)
          {
          	event.returnValue= true;
          }
          else 
          {
          	event.returnValue= false;
          }

		
	}

	function validate()
	{	
		temp=true;
		let user=document.getElementById('valusername').value;

		let lengthUser=user.length;
		let email= document.getElementById("email").value;
		let uname= document.getElementById("valusername").value;
		let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		unameLenght=uname.length;

		if(uname=='')
		{
			temp=false;
			alert('Please enter the username ');
		}

		else if (lengthUser>=0 && lengthUser<6) 
		{
			temp=false;
			alert('username should be greater than 5 characters ');
		}
		
		else if(email=='')
		{
			temp=false;
			alert('Please enter your email id');

		}
		else if (!filter.test(email))
		{
			temp=false;
			alert('Invalid email');

		}
		else
		{
			temp=true;
		
		}

		  return temp;

	}

</script>
 <?php 
	
 if(isset($_POST['next']))
  {
  	$username=$_POST['username'];
  	$email=$_POST['email'];

  	$checkUsername="select * from doctors where username='$username'";

 	        $dataUsername=mysqli_query($con,$checkUsername);

            $totalUsername= mysqli_num_rows($dataUsername);

    $checkEmail="select * from doctors where email='$email'";

 	        $dataEmail=mysqli_query($con,$checkEmail);

            $totalEmail= mysqli_num_rows($dataEmail);

     if ($totalUsername>0) 
  	{
  		echo "<label style='margin-top:10px;margin-left:355px;' class='text-danger'>Username Already exists</label>";       
  	}
  	else if($totalEmail>0)
  	{	

  		echo "<label style='margin-top:10px;margin-left:375px;' class='text-danger'>Email Already exists</label>"; 
  	}

  	else
  	{

  		$q="INSERT INTO `doctors`(`username`,`email`,`request`) VALUES ('$username','$email','3')";

  		$qExecute=mysqli_query($con,$q);

  			
					
					$_SESSION['Add-username-doctor'] = $username;

      				$_SESSION['Add-email-doctor'] = $email;

        			header('location:addDoctor.php');
  	}

  	}	

  ?>

<br>


</style>

  </div>



<style type="text/css">

	.nextBtn
 	{
 		margin-left: 340px;
 		width: 200px;
 	}

	.img
	{
		color: white;
		font-size: 50px;
	}

	body
	{
		/*background: url(4.jpg);*/
	}
	
	#inner
	{
		width: 70%;
		height: auto;
		margin-left: 12.5%;
		background: #22242A;
		padding: 20px;
		padding-left: 0;
		border-radius: 30px;
		color: white;
		margin-bottom: 10px;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px rgba(0,136,255,.7);
		transition: .5s;
		overflow-x: hidden;
	}

	#addDoc
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
		color: white;
	}
	#addDoc>span
	{
		color: #08f;
	}

	form input
	{
		width: 94.5%;
		height: 40px;
		margin-left: 20px;
		border-radius: 5px;
		border:none;
		text-indent:30px;
		font-size: 16px;
		outline: none;
		transition: .15s;
		transition-property: border;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
	}

	form input:focus
	{
	
   		border: 1.5px solid #08f
	}

	.small
	{
		width:44.8%;
		margin-left: 26px;
		font-size: 16px;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
		text-transform: capitalize;
	}

	.small:focus
	{
		border: 1.5px solid #08f
	}

	.dob
	{
		width: 250px;
		margin-left:;
	}

	#doblabel
	{
	margin-left: 100px;
	}

	form label
	{
		margin-left: 5%;
	}

	.gender
	{
		width: 250px;
		height: 40px;
		border-radius: 5px;
		outline: none;
		text-indent: 30px;
		transition: .15s;
		transition-property: border;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;
	}


	.gender:focus
	{
		border: 1.5px solid #08f
    
	}

	.gender>option
	{
		outline: none;
		border: none;
	}

	.gender>option:hover
	{
		border: 3px solid #08f;
	}

	

	form .submit
	{
		width: 33%;
		text-align: center;
		margin-left: 35%;
		padding-right: 5%;
		box-shadow: none;
	}

	.name
	{
		margin-left: 24px;
	}

	.phone
	{
		margin-left: 26px;
		width: 44.7;

	}

	.speciality
	{
		width: 60%;
		margin-top: 15px;
		margin-left: 20px;
	}
	.specialityLabel
	{
		margin-left: 100px;
	}

	.Add
	{
		width: 20%;
		margin-left: 40%;
		box-shadow: none;
		text-indent: 10px;		
	}
</style>

<!-- .......................Add Doctors............................. -->

</div>

</div>
</body>
</html>

<style type="text/css">
	
	#cover
	{
		margin-left: 250px;
		margin-top: 50px;
		
		padding: 30px;
		margin-bottom: 5px;
		border-radius: 20px;
		transition: .5s;
	}

.searchBtn
{
		width: initial;
		height: 40px;
		margin-left: 5px;
		border-radius: 5px;
		border:none;
		text-indent:initial;
		font-size: initial;
		outline: none;
		transition: initial;
		transition-property: initial;
		box-shadow: initial;
		border: initial;
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

			document.getElementById('cover').style="margin-left:255px;";



			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

			document.getElementById('cover').style="margin-left:55px;";

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



