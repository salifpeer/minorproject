<?php 

	ob_start();
	

    $con=mysqli_connect("localhost","root","","d-care");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


 </head>
 <body>

 	<div id="cover" class="text-white">

 		<!-- ....................................head division............................... -->
	 				<div id="head">
	 					
	 				
	 				<h4 id="signup">Patient's <span>Sign Up</span></h4>

	 				</div><br>
	 				<!-- ....................................head division............................... -->
 		
 <form method="POST">

  
 <i style="position: relative;left: 27px; color:#424652;" class="fa fa-user-circle" aria-hidden="true"></i></i><input type="text" name="username" placeholder="Username" onkeypress="valUsername()" id="valusername" required="" autocomplete="off" >
 <small id="userSmall" style="color: #223;font-size: 10px;">.</small><br>


 <i style="position: relative;left: 27px; color:#424652;" class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" placeholder="Email" required="" id="email" onkeypress="validationEmail()" autocomplete="off">
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
			document.getElementById('userSmall').style="position: relative;bottom: 14px;left: 20px;color: red;font-size:12px;";
		}
		else
		{
			document.getElementById('userSmall').innerText='.';
			document.getElementById('userSmall').style="position: relative;bottom: 10px;left: 20px;color: #223;";

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
  		echo "<label style='margin-top:10px;margin-left:185px;' class='text-danger'>Username Already exists</label>";       
  	}
  	else if($totalEmail>0)
  	{	

  		echo "<label style='margin-top:10px;margin-left:200px;' class='text-danger'>Email Already exists</label>"; 
  	}

  	else
  	{

  		$q="INSERT INTO `patients`(`username`,`email`) VALUES ('$username','$email')";

  		$qExecute=mysqli_query($con,$q);

  			session_start();
					
					$_SESSION['username-patient'] = $username;

      				$_SESSION['email-patient'] = $email;

        			header('location:signup.php');
  	}

  	}	

  ?>

<br>
		<h6 class="text-center">Already have an Account <a class="text-warning" href="login.php">Click Here</a></h6>
	 	</div>

 	</div>
 
 </body>
 </html>




 <style type="text/css">

 	body
 	{
 		margin: 0;
 		background: url(3.jpg);
 		overflow: hidden;
 		background-size: cover;
 	}

 	#title
	{
		margin-left: 38%;
		font-family: arial;
		color: white;
		font-size: 40px; 
	}
	
	#logo
	{
		    width: 70px;
    height: 70px;
    position: absolute;
    top: 127px;
    left: 550px;
	}

	#moto
	{
		position: absolute;
    top: 180px;
    left: 715px;

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
		color: #f8c107;
	}

	.speciality
	{
		width: 60%;
		margin-top: 15px;
		margin-left: 20px;
	}
 	
 	#cover
 	{
 		width: 600px;
 		margin: 90px auto;
 		background: #22242a;
 		padding: 50px;
 		border-radius: 30px;
 		box-shadow: 0px 0px 15px #f8c107;
 		padding-right: 30px;
 		padding-left: 30px;
		
 	}

 	

 	form input
 	{
 		width: 96%;
 		text-indent: 20px;
 		height: 40px;
 		outline: none;
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
		margin-bottom: 10px;
 	}

 	form input:focus
	{
	
   		border: 1.5px solid #f8c107
	}

	.nextBtn
 	{
 		margin-left: 170px;
 		width: 200px;
 	}
 </style>