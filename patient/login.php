<?php 
	ob_start();
	 
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <?php require_once('../captcha_addition.php'); ?>

</head>
<body onload="Captcha()">



	<div class="outer">
		

		<h1 id="title">D-CARE</h1>
		

		<h4 id="info">Patient's <span>Log In</span></h4>


	<form method="POST" onsubmit="return ValidCaptcha()">
  		<div class="form-group"><?php
       
       $con=mysqli_connect("localhost","root","","d-care");

         	// mysqli_select_db($con,'patients');


if(isset($_POST['login'])) 
        {	
       		
            $username=$_POST['username'];
            $password=$_POST['password'];
     
            $query="select * from patients where (username='$username' || email='$username') && password='$password'";

  	        $data=mysqli_query($con,$query);


            $total= mysqli_num_rows($data); 

            $res=mysqli_fetch_array($data);

            if($total==1)
            	{
   					
   					 if($res['request']==1)

   					 	{
   					 	  if ($res['status']==1) 
           				 	{
            				session_start();
					
							$_SESSION['username'] = $username;

            				$_SESSION['patient-id'] = $res['id'];

            				header('location:welcome.php');

           				 	}

           			 	else
             			   {
            				echo " <label style='color: red; text-transform: capitalize; position:absolute;left:500px;'>"."Your Account has been disabled kindly contact admin!"."</label>";
             			   }

             			}

             		else if ($res['request']==0)
						{
							echo " <label style='color: red; text-transform: capitalize; position:absolute;left:535px;'>"."Your Request has not been accepted yet!"."</label>";
						}
					else
					{
						echo " <label style='color: red; text-transform: capitalize; position:absolute;left:425px;top:236px;'>"."Your Request has been Rejected By some reason please contact admin!"."</label>";
					}		 	 

            	}

            else
             {
            	echo " <label style='color: red; position:absolute;left: 585px;'>"."invalid username/password"."</label>";
             }

           

            

        }   
  ?>
    		<br><label for="exampleInputEmail1"><i style="color: ;#08f" class="fa fa-user" aria-hidden="true"></i>&nbspUsername</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
  		</div>
  			<div class="form-group">
    		<label for="exampleInputPassword1"><i style="color:; #08f" class="fa fa-key" aria-hidden="true"></i>&nbspPassword</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" name="password">
    		
  		</div>
  			

  		<div id="wrapper-cap">
                  <label id='mainCaptcha'></label> 
                  <input required type="text" name=""  id='txtInput'> 
                  <button type="button" id="refresh"  onclick="Captcha();" >
                    <i class="fa fa-sync-alt"></i>
                  </button>
                  <div id='cap' class=""> Invalid capcta</div>        
               </div><br>
  		<input type="submit" class="btn btn-warning text-white" name="login" value="Log In">
		</form>
		<br>

	</div>

</body>
</html>

<script type="text/javascript">

  	
  </script>

<style type="text/css">

	body
	{
		margin: 0;
		background-image: url(3.jpg);
		background-size: 100%;
		background-repeat: no-repeat;
		overflow: hidden;
	}
	
	.outer
	{
		width: 600px;
		/*height: 480px;*/
		background-color: #22242A;
		color:white;
		margin: 6.5% auto;
		padding: 50px;
		border-radius: 20px;
		padding-top: 30px;
		padding-bottom: 30px;
		box-shadow: 0px 0px 15px rgba(255,193,7,.7) ;
	}

	#logo
	{
	width: 85px;
    height: 85px;
    position: absolute;
    top: 106px;
    left: 540px;
	}

	#moto
	{
		position: absolute;
    	top: 164px;
    	left: 732px;
    	 background-image: linear-gradient(to right, violet, #9f5db6, #3f9b4c, #08f, yellow, #ff8f00, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
    	font-family: lucida handwriting;
    }

	#title
	{
	/*	margin-left: 185px;*/
		margin-top: 3px;
		margin-bottom: 0;
		font-size: 25px;
		font-family: Arial;
		text-align: center;
	}

	.btn-warning
	{
		margin-left: 34%;
		width: 35%;
	}

	#info
	{
		text-align: center;
		margin-top: 30px;
		font-family: lucida fax;
	}
	#info>span
	{
		color: #ee6e73;
	}

	label>span
	{
		color: #08f;
	}

	.form-control
	{
		box-shadow: 2px 2px 10px #5a5f6f inset;
	}

	.form-control:focus
	{
		box-shadow: 2px 2px 10px #5a5f6f inset;
		border: 1.5px solid #ee6e73;
	}
	#noAccount
	{
			margin-left: 28%;
	}
	#noAccount>a
	{
		text-decoration: none;
		color: #ee6e73;
	}

	#noAccount>a:hover
	{
		text-decoration: none;
		color: #ee6e73;
		text-decoration: underline;
	}
</style>