<?php  
    require 'dashboard.php';
?>
<?php 

  $q="select * from patients WHERE request = '1' order by id desc";


 if(isset($_POST['searchBtn']))
 {
      $search=$_POST['search'];

      $q ="SELECT * FROM `patients` WHERE (`firstName` like '$search%' || `lastName` like '$search%' || id like '$search%') && request='1'" ;
 }
 ?>

 <?php 

 if(isset($_POST['filter']))
 {
      $filters=$_POST['filters'];

      $q ="SELECT * FROM `patients` WHERE request = '1' ORDER BY `patients`.$filters ";
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | patients</title>
</head>
<body>

<div id="cover">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">View Patients</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Add New</a>
  </li>
</ul>


<div class="tab-content" id="pills-tabContent">
<!-- .......................View patients............................. -->

  <div class="tab-pane fade show active viewDoc" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div id="outer"><br><br>
       
<h1 class="text-center view"><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbspPati<span>ents</span> </h1><br>

<form method="POST">

    <div class="searchFilter">
     <i style='position: relative; left: 45px;' class="fa fa-search" aria-hidden="true"></i><input type="text" class="form-control bar" name="search" placeholder="search">
     <input type="submit" class="btn btn-warning searchBtn" name="searchBtn" value="Search">
    </div>

 <div class="searchFilter">   

 <select class='form-control filters bar' name='filters'>
 	<option value="id desc">-Sort By-</option>
 	<option value="id Asc">ID Asc</option>
 	<option value="id Desc">ID Desc</option>
 	<option value="dateOfJoining Asc">Date of join Asc</option>
 	<option value="dateOfJoining desc">Date of join Desc</option>
 	<option value="firstName Asc">First Name Asc</option>
 	<option value="firstName desc">First Name desc</option>
 </select>  

     <input type="submit" class="btn btn-warning searchBtn" name="filter" value="Sort">
</div>

     </form>

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
              <th>Status</th>
              <th>change status</th>
              <th>Update</th>
              <th>Delete</th> 
              <th>View History</th> 
            </tr>
<?php 

         $con=mysqli_connect("localhost","root","","d-care");

        //  mysqli_select_db($con,'patients');


          $query=mysqli_query($con,$q);

           $total= mysqli_num_rows($query);

           echo $total;

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

               <td><?php echo ($res['status']==0) ? "<label style='color:red;'>"."Disabled"."</label>" : "<label style='color:lightgreen;'>"."Active"."</label>"?></td>
               
              <td> 
            <button class="btn-secondary btn"> <a  href="changeStatusPatient.php?id=<?php echo $res['id']; ?> & status=<?php echo $res['status'];?>" class=" text-white" >
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

              <td><button class="btn-primary btn"><a href="updatePatient.php?id=<?php echo $res['id']; ?>" class="text-white"> Update</a></button> </td>
              <td><button class="btn-danger btn"><a href="deletePatient.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button> </td>
              <td><button class="btn btn-info historyBtn"><a href="patientHistory.php?id=<?php echo $res['id']; ?>" class="text-white"> View History</a></button> </td>

           </tr>

      <?php 
    }
       ?>       
       


     </table>
     

</div>
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

  .filters
  {
    text-transform: capitalize;
    box-shadow: 3px 3px 15px #575c69 inset;
  }
	.bar
  {
    display: inline-block;
    width: 400px;
    vertical-align: top;
    text-indent: 20px;
    text-transform: capitalize;
  }

  .searchFilter
  {
    width: 700px;
    display: inline-block;
    padding: 20px;
    vertical-align: top;
  }

  .searchBtn
{
		width: 100px;
		height: 40px;
		margin-left: 5px;
		border-radius: 5px;
		border:none;
		text-indent:initial;
		display: inline-block;
		font-size: initial;
		outline: none;
		transition: initial;
		transition-property: initial;
		box-shadow: initial;
		border: initial;
		marg
}
</style>


  </div>

<!-- .......................View Patients............................. -->

<!-- .......................Add Patients............................. -->


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  	<div id="inner">
	 				
	 				<h1 id="addPatient"><i style="font-size: 50px;margin-right: 5px;" class="fa fa-wheelchair" aria-hidden="true"></i>
Add <span>Patient</span></h1><br>

		<form id="addInfo" method="POST">
     		
     		  
 <i style="position: relative;left: 47px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="Username" onkeypress="valUsername()" id="valusername" required="" autocomplete="off" ><br>
 <small id="userSmall" style="color: #223;font-size: 10px;">.</small><br><br>


 <i style="position: relative;left: 47px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" placeholder="Email" required="" id="email" onkeypress="validationEmail()" autocomplete="off">
 <small style="position: relative;bottom: 10px;left: 20px;color: red;"></small><br><br>

  
  <button type="submit" name="next" class="btn btn-warning text-white nextBtn" onclick="return validate()" >Next</button>
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

  	$checkUsername="select * from patients where username='$username'";

 	        $dataUsername=mysqli_query($con,$checkUsername);

            $totalUsername= mysqli_num_rows($dataUsername);

    $checkEmail="select * from patients where email='$email'";

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

  		$q="INSERT INTO `patients`(`username`,`email`) VALUES ('$username','$email')";

  		$qExecute=mysqli_query($con,$q);

  			session_start();
					
					$_SESSION['Add-username-patient'] = $username;

      				$_SESSION['Add-email-patient'] = $email;

        			header('location:addPatient.php');
  	}

  	}	

  ?>


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
		box-shadow: 0px 0px 15px rgba(255,193,7,.7);
		transition: .5s;
		overflow-x: hidden;
	}

	#addPatient
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
		color: white;
	}
	#addPatient>span
	{
		color: #ee6e73;
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
	
   		border: 1.5px solid #ee6e73;
	}

	.small
	{
		width:44.8%;
		margin-left: 26px;
		font-size: 16px;
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1px solid whitesmoke;

	}

	.small:focus
	{
		border: 1.5px solid #ee6e73;
	}

	.dob
	{
		width: 250px;
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
		border: 1.5px solid #ee6e73;
    
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

	

	.addBtn
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
</style>

<!-- .......................Add Patients............................. -->

</div>

</div>
</body>
</html>

<style type="text/css">
	
	#cover
	{
		margin-left: 55px;
		margin-top: 50px;
		width: 96%;
		padding: 30px;
		margin-bottom: 5px;
		border-radius: 20px;
		transition: .5s;
	}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #ee6e73;
    font-weight: 600;
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

			storeRight[0].style="margin-left:91px;";
			storeRight[1].style="margin-left: 117px;";
			storeRight[2].style="margin-left: 87px;";
			storeRight[3].style="margin-left: 77px;";
			storeRight[4].style="margin-left: 47px;";
			storeRight[5].style="margin-left: 32px;";
			storeRight[6].style="margin-left: 74px;";
			storeRight[7].style="margin-left: 104px;";


			temp=0;
		}	

	}
</script>



<style type="text/css">
	#outer 
	{
		background-color: pink !important;
	}
</style>