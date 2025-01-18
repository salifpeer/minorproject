<?php  

	ob_start();
	
    require 'dashboard.php';

$username=$_SESSION['Add-username-patient'];

$email=$_SESSION['Add-email-patient'];


if (!(isset($_SESSION['Add-username-patient'])&& ($_SESSION['Add-email-patient']))) 
{
		header('location:patients.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="C:\xampp\htdocs\d-care\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="admin.js"></script>
</head>
<body>

	 			<div id="inner">

	 				<!-- ....................................head division............................... -->
	 				<div id="head">
	 					
	 				<h1 id="signup"><i class="fa fa-wheelchair img" aria-hidden="true"></i> Add <span>Patient</span></h1>

	 				</div><br>
	 				<!-- ....................................head division............................... -->

		<form method="POST">
     		
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="firstName" class="small name" placeholder="First Name" id='firstName' required="" onkeypress="validationtext()" autocomplete="off">
     		<i style="position: relative;left: 48px; color:#424652;" class="fa fa-user" aria-hidden="true"></i><input type="text" name="lastName" class="small name" placeholder="Last Name" id="lastName" required="" onkeypress="validationtext()" autocomplete="off"><br><br>

     		<label>Gender <i style="position: relative;left: 30px; color:#424652;" class="fa fa-transgender-alt" aria-hidden="true"></i><select class="gender" name="gender" required="" id="gender">
  								<option>Select Option</option>
  								<option>Male</option>
  								<option>Female</option>
  								<option>Transgender</option>
						  </select>
			</label>

			<label id="doblabel">Date Of Birth<input class="dob" type="date" name="dob" required="" id="dob"></label><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-mobile" aria-hidden="true"></i><input type="text" class="small phone" name="mobileNumber" placeholder="Mobile Number" required="" id="mobileNumber" onkeypress="validationnumber()" autocomplete="off">

			<i style="position: relative;left: 48px; color:#424652;" class="fa fa-phone" aria-hidden="true"></i><input type="text" class="small phone" name="phoneNumber" placeholder="Phone Number" required="" id="phoneNumber" onkeypress="validationnumber()" autocomplete="off"><br><br>


			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="password" placeholder="Password"required="" id="password1" onkeypress="passwordCheckTime()"><i id="showpass" style="position: absolute; right: 352px; top: 400px; color: black;" class="fa fa-eye-slash" aria-hidden="true" onclick="showpass()"></i><br>
			<small id="passSmall" style="position: relative;bottom: 5px;left: 48px;color: #223;font-size:12px;">.</small><br>

			<i style="position: relative;left: 45px; color:#424652;" class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" name="" placeholder="Confirm password" required="" id="password2" onkeyup="passmatchTime()" ><br>
			<small id="cpassSmall" style="position: relative;bottom: 5px;left: 48px;color: #223;font-size:12px;">.</small><br><br>

			<input class="btn btn-danger text-white" type="submit" name="submit" value="Add Patient" onclick="return validate()">


		</form>		
<br>

	 	</div>


</body>
</html>

<?php
	 if(isset($_POST['submit']))
  {
  	$con=mysqli_connect("localhost","root","","d-care");

  mysqli_query($con,"insert into patients(firstName,lastName,gender,dob,mobileNumber,phoneNumber,password) values (,,)");

  	$q="UPDATE `patients` SET `firstName`='".$_POST['firstName']."',`lastName`='".$_POST['lastName']."',`gender`='".$_POST['gender']."',`dob`='".$_POST['dob']."',`mobileNumber`='".$_POST['mobileNumber']."',`phoneNumber`='".$_POST['phoneNumber']."',`password`='".$_POST['password']."',`request`='0'  WHERE  username='$username' && email ='$email' ;";

  	mysqli_query($con,$q);

  	unset($_SESSION['Add-username-patients']);
  	unset($_SESSION['Add-email-patients']);

	header('location:addPatientSuccessful.php');


  }

?>

<style type="text/css">

	.img
	{
		color: white;
		font-size: 50px;
	}

	body
	{
		background: url(5.jpg);
		overflow: hidden;
		background-size: cover;
	}
	
	#inner
	{
		width: 55%;
		height: auto;
		margin:80px auto;
		background: #22242A;
		padding: 20px;
		padding-left: 0;
		padding-right: 30px;
		border-radius: 30px;
		color: white;
		padding-bottom: 20px;
		box-shadow: 0px 0px 15px rgba(255,193,7,.7);
       margin-bottom: 40px;
       transition: .5s;
	}



	form input
	{
		width: 94.5%;
		height: 35px;
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
		height: 30px;
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

	

	form .btn
	{
		width: 25%;
		text-align: center;
		margin-left: 39%;
		padding-right: 5%;
		padding-top: 2px;
		box-shadow: none;
		vertical-align: middle;
		color: white;
		font-weight: 500;
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


	#signup
	{
		text-align: center;
		margin-bottom: 20px;
		margin-top: 20px;

	}

	#signup>span
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

			document.getElementById('inner').style="margin-left:455px;";



			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

			document.getElementById('inner').style="margin-left:275px;";

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

<script type="text/javascript">

	
	
	function validate()
	{	
		console.log('inside function validate');
		let temp=true;

		let firstName= document.getElementById("firstName").value;
		let lastName= document.getElementById("lastName").value;
		let gender= document.getElementById("gender").value;
		let dob= document.getElementById("dob").value;
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

	temp=0;

	function showpass()
	{
		console.log('inside function showpass');

		if (temp==0) 
		{

		temp=1;

		document.getElementById('password1').type='text';
		document.getElementById('password2').type='text';

		document.getElementById('showpass').className="fa fa-eye";
		document.getElementById('showpass').style="position: absolute; right: 352px; top: 400px; color: #08f;";
		}

		else

		{


			document.getElementById('password1').type='password';
			document.getElementById('password2').type='password';

			document.getElementById('showpass').className="fa fa-eye-slash";
		    document.getElementById('showpass').style="position: absolute; right: 352px; top: 400px; color: black;";


			temp=0;
		}	

	}
	function passwordCheckTime()
	{
		setInterval(passwordCheck,2000);
	}
	

	function passwordCheck()
	{		
		console.log('inside function passwordCheck');

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
		console.log('inside function passwordMatch');

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

	function validationtext(){
	  	a=event.keyCode;
		console.log('inside function validationtext');
		

	  	if(a>=65 && a<=90 || a>=97 && a<=122 || a==32)
	  	{
	  		event.returnValue= true;
	  	} else {
	  		event.returnValue= false;
	  	}
	  }
</script>