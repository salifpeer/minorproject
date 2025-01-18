<?php  
	ob_start();
	
    

session_start();

$username=$_SESSION['username-doctor'];

$email=$_SESSION['email-doctor'];


if (!(isset($_SESSION['username-doctor'])&& ($_SESSION['email-doctor']))) 
{
		header('location:preSignUp.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="admin.js"></script>
</head>
<body>

	 			<div id="inner">

	 				<!-- ....................................head division............................... -->
	 				<div id="head">
	 					
	 				
	 				<h4 id="signup">Doctor's <span>Sign Up</span> Details</h4>

	 				</div>
	 				<!-- ....................................head division............................... -->
		<form method="POST" enctype="multipart/form-data">
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="firstName" class="small  name" placeholder="First Name" id='firstName' required="" onkeypress="validationtext()" autocomplete="off">
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="lastName" class="small name" placeholder="Last Name" id="lastName" required="" onkeypress="validationtext()" autocomplete="off"><br><br>

     		<label>Gender <i style="position: relative;left: 27px; color:#424652;" class="fa fa-transgender-alt" aria-hidden="true"></i><select name="gender" class="gender" required="" id="gender">
  								<option >Select Option</option>
  								<option>Male</option>
  								<option>Female</option>
  								<option>Transgender</option>
						  </select>
			</label>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob" required="" id="dob"></label><br>
<label class="specialityLabel"> Speciality

 </label>
 <?php 
$con=mysqli_connect("localhost","root","","d-care");

$filterQuery = "SELECT * FROM `speciality`";

$filterQueryExecute=mysqli_query($con,$filterQuery);
echo "<select class='gender speciality' name='speciality' id='speciality' required=''>";
    while($resFilter = mysqli_fetch_array($filterQueryExecute))

          {

 ?>
   

       <option><?php echo $resFilter['speciality']; ?> </option>
        
   <?php 
   }
   
    ?>  
 		

</select>
     <br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="text" class="small phone" name="mobileNumber" placeholder="Mobile Number" required="" id="mobileNumber" onkeypress="validationnumber()" autocomplete="off">

			<i style="position: relative;left: 50px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="text" class="small phone" name="phoneNumber" placeholder="Phone Number" required="" id="phoneNumber" onkeypress="validationnumber()" autocomplete="off"><br><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="password" placeholder="Password" required="" id="password1" onkeypress="passwordCheckTime()"><br>
			<small id="passSmall" style="position: relative;bottom: 5px;left: 48px;color: #223;font-size:12px;">.</small><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="" placeholder="Confirm password" required="" id="password2" onkeyup="passmatchTime()" ><br>
			<small id="cpassSmall" style="position: relative;bottom: 5px;left: 48px;color: #223;font-size:12px;">.</small><br><br>

         <label>Please Upload Your profile picture</label>
	     <input type="file" name="file"  required ><br>
		<br>



		<label>Please Upload Your Degree Certificate</label>
	     <input type="file" name="file"  required ><br>
		<br>
			<input class="btn btn-danger text-white" type="submit" name="submit" value="Sign Up" onclick="return validate()">


		</form>		
		
	 	</div>


</body>
</html>





<style type="text/css">

	.img
	{
		color: white;
		font-size: 50px;
	}

	body
	{
		background: url(sl1.png);
		/*overflow: hidden;*/
	}
	
	#inner
	{
		width: 55%;
		height: auto;
		margin:50px auto;
		background: #22242A;
		padding: 20px;
		padding-left: 0;
		padding-right: 30px;
		border-radius: 30px;
		color: white;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px rgba(0,136,255,.7);
		margin-bottom: 50px;
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
		padding-top: 5px;
		padding-bottom: 5px;

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

	}

	.small:focus
	{
		border: 1.5px solid #08f
	}

	.dob
	{
		width: 190px;
		margin-bottom:12px;
		text-indent: 20px;
	}

	#doblabel
	{
	margin-left: 110px;
	}

	form label
	{
		margin-left: 5%;
	}

	.gender
	{
		width: 180px;
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

	

	form .btn
	{
		width: 25%;
		text-align: center;
		margin-left: 39%;
		padding-right: 5%;
		padding-top: 2px;
		box-shadow: none;
		vertical-align: middle;
	}
	.name
	{
		margin-left: 24px;
		width: 44%;

	}

	.phone
	{
		margin-left: 26px;
		width: 44%;

	}
		/*......................................header work..........................................*/

	#title
	{
		margin-left: 41%;
		font-family: arial;
		color: white;
		font-size: 40px; 
	}
	
	#logo
	{
		    width: 70px;
    height: 70px;
    position: absolute;
    top: 82px;
    left: 530px;
	}

	#moto
	{
		position: absolute;
    top: 135px;
    left: 690px;

    font-family: lucida handwriting;
    font-size: 15px;

    background-image: linear-gradient(to right, violet, #9f5db6, #3f9b4c, #08f, yellow, #ff8f00, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
	}

	#signup
	{
		text-align: center;
		margin-bottom: 20px;
		margin-top: 20px;
	}

	#signup>span
	{
		color: #08f;
	}

	.speciality
	{
		width: 60%;
		margin-top: 15px;
		margin-left: 20px;
	}
	.specialityLabel
	{
		margin-left: 80px;
	}

</style>
 <?php

	 if(isset($_POST['submit']))
  {
  	$con=mysqli_connect("localhost","root","","d-care");

  	  // $n=$_FILES['file']['name'];
  	  // $destination='certificate/'.rand().$n;
  	  // $source= $_FILES['name']['tmp_name'];
  	  // move_uploaded_file($source, $destination);
           $name= $_FILES['file']['name'];
  	   $destination = 'certificate/'.rand(). $name;
                    $source= $_FILES['file']['tmp_name']; 
                   move_uploaded_file($source, $destination);

  	$q="UPDATE `doctors` SET `firstName`='".$_POST['firstName']."',`lastName`='".$_POST['lastName']."',`gender`='".$_POST['gender']."',`dob`='".$_POST['dob']."',`speciality`='".$_POST['speciality']."',`mobileNumber`='".$_POST['mobileNumber']."',`phoneNumber`='".$_POST['phoneNumber']."',`password`='".$_POST['password']."',`request`='0' ,`profilePic`='$destination' WHERE  username='$username' && email = '$email'";

  	mysqli_query($con,$q);

  	unset($_SESSION['username-doctor']);
  	unset($_SESSION['email-doctor']);

	header('location:signUpSuccessful.php');

  }

?> 

<script type="text/javascript">

	
	
	function validate()
	{	
		let temp=true;
		let firstName= document.getElementById("firstName").value;
		let lastName= document.getElementById("lastName").value;
		let gender= document.getElementById("gender").value;
		let dob= document.getElementById("dob").value;
		let speciality= document.getElementById("speciality").value;
		let mobileNumber= document.getElementById("mobileNumber").value;
		let phoneNumber= document.getElementById("phoneNumber").value;
		let password1= document.getElementById("password1").value;
		let password2= document.getElementById("password2").value;

		let passchk1=document.getElementById('password1').value;

		let len=passchk1.length;


		let pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		let letters = /^[A-Za-z]+$/;
		let contact = /^[0-9]+$/;
		let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


		if(firstName=='')
		{	
			temp=false;
			alert('Please enter your First Name');
		}
		else if(!letters.test(firstName))
		{	
			temp=false;
			alert('Name field required only alphabet characters');
		}
		else if (lastName=='')
		{	
			temp=false;
			alert('Please enter your Last Name');

		}
		else if(!letters.test(lastName))
		{	
			temp=false;
			alert('Name field required only alphabet characters');
		}
		else if (gender=='Select Option') 
		{	
			temp=false;
			alert('Please select a gender');

		}
		else if (dob=='') 
		{	
			temp=false;
			alert('Please select date of birth');

		}
		else if (speciality=='-Select Speciality-') 
		{	
			temp=false;
			alert('Please select a Speciality');

		}
		else if (mobileNumber=='')
		{	
			temp=false;
			alert('Please enter your mobile number');

		}
		else if(!contact.test(mobileNumber))
		{	
			temp=false;
			alert('Mobile number field required only numeric characters');
		}
		else if (phoneNumber=='')
		{	
			temp=false;
			alert('Please enter your mobile number');

		}
		else if(!contact.test(phoneNumber))
		{	
			temp=false;
			alert('Phone number field required only numeric characters');
		}
		else if(password1=='')
		{	
			temp=false;
			alert('Please enter Password');
		}
		else if(password2=='')
		{	
			temp=false;
			alert('Enter Confirm Password');
		}
		else if(!pwd_expression.test(password1))
		{	
			temp=false;
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(password1 != password2)
		{	
			temp=false;
			alert ('Password not Matched');
		}
		else if(len>=0 && len<7)
		{	
			temp=false;
			alert ('password should be 7 - 20 charcters');
		}
		else if(document.getElementById("password2").value.length > 20)
		{	
			temp=false;
			alert ('Password max length is 20');
		}
		else
		{				                            
    		temp=true;
		}

		return temp;

	}

</script>

<script type="text/javascript">
	 function validationnumber() 
	 {
        a=event.keyCode;

          if(a>=48 && a<=57)
          {
          	event.returnValue= true;
          }
          else 
          {
          	event.returnValue= false;
          }

	  }

	temp=0;
	function showpass()
	{

		if (temp==0) 
		{

		temp=1;

		document.getElementById('password1').type='text';
		document.getElementById('password2').type='text';

		document.getElementById('showpass').className="fa fa-eye";
		document.getElementById('showpass').style="position: absolute; right: 352px; top: 491px; color: #08f;";
		}

		else

		{


			document.getElementById('password1').type='password';
			document.getElementById('password2').type='password';

			document.getElementById('showpass').className="fa fa-eye-slash";
		    document.getElementById('showpass').style="position: absolute; right: 352px; top: 491px; color: black;";


			temp=0;
		}	

	}
	function passwordCheckTime()
	{
		setInterval(passwordCheck,2000);
	}
	

	function passwordCheck()
	{		

		passchk1=document.getElementById('password1').value;

		    len=passchk1.length;

			if (len>=0 && len<7)
			{
				document.getElementById("passSmall").innerText="Upper case, Lower case, Special character and Numeric letter & should be 7 - 20 charcters ";

				document.getElementById('passSmall').style="position: relative;bottom: 5px;left: 48px;color: red;font-size:12px;"

			}

			else
			{
				document.getElementById('passSmall').innerText='.';
			document.getElementById('passSmall').style="position: relative;bottom: 10px;left: 20px;color: #223;"

			}	
	}

	function passmatchTime()
	{
		setInterval(passwordMatch,1000);
	}
	function passwordMatch()
	{
			passchk1=document.getElementById('password1').value;
			passchk2=document.getElementById('password2').value;


		
			if(passchk1===passchk2)
			{
				document.getElementById("cpassSmall").innerText="Password Matches";

				document.getElementById('cpassSmall').style="position: relative;bottom: 5px;left: 48px;color: lightgreen;font-size:12px;"
			}	
			else
			{
				document.getElementById("cpassSmall").innerText="Password does not Matches";

				document.getElementById('cpassSmall').style="position: relative;bottom: 5px;left: 48px;color: red;font-size:12px;"

			}

	}

	function validationtext()
	{
	  	a=event.keyCode;
	

	  	if(a>=65 && a<=90 || a>=97 && a<=122 || a==32)
	  	{
	  		event.returnValue= true;
	  	} else {
	  		event.returnValue= false;
	  	}
	  }
</script>
