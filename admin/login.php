<?php 
	ob_start();
	
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

	<div class="outer">


		<h1 id="title">D-Care</h1>
		

		<h2 id="admin">Ad<span>min</span></h2>
	<form method="POST">
  		<div class="form-group"><?php
       
       $con=mysqli_connect("localhost","root","","d-care");
         	// mysqli_select_db($con,'d-care');



        if(isset($_POST['login'])) 
        {	
        
			session_start(); 

            $username=$_POST['username'];
            $password=$_POST['password'];
     
            $query="select * from admin where (username='$username' || email='$username') && password='$password'";

  	        $data=mysqli_query($con,$query);

			$res=mysqli_fetch_array($data);

            $total= mysqli_num_rows($data); //count the rows
            // echo $total;
            if($total==1)
            {
   
				
            	$_SESSION['username']= $username;
            	$_SESSION['admin-id']=$res['id'];

            	header('location:welcome.php');

            }
            else
            {
            	echo " <label style='color: red; position:absolute;left: 585px;'>"."invalid username/password"."</label>";
            }


        }   
  ?><br>
    		<label for="exampleInputEmail1"><i style="color: ;#08f" class="fa fa-user" aria-hidden="true"></i>&nbspUsername or Email</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
  		</div>
  			<div class="form-group">
    		<label for="exampleInputPassword1"><i style="color:; #08f" class="fa fa-key" aria-hidden="true"></i>&nbspPassword</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" name="password">
    		<i id="showpass" style="position: absolute; right: 442px; top: 417px; color: black;" class="fa fa-eye-slash" aria-hidden="true" onclick="showpass()"></i>
  		</div>
  		
  		<input type="submit" class="login" name="login" value="Log In">
		</form>

	</div>

</body>
</html>

  <script type="text/javascript">

  	
  </script>
   

<style type="text/css">

	body
	{
		margin: 0;
		background: url(m1.jpg);
		background-size: 100%;
		background-repeat: no-repeat;
		overflow: hidden;
	}
	
	.outer
	{
		width: 600px;
		height: 470px;
		background-color: #222;
		color:white;
		margin: 8% auto;
		padding: 50px;
		border-radius: 20px;
		padding-top: 30px;
		
	}

	#logo
	{
	width: 85px;
    height: 85px;
    position: absolute;
    top: 125px;
    left: 537px;
	}

	#moto
	{
		position: absolute;
    	top: 184px;
    	left: 732px;
    	 background-image: linear-gradient(to right,#9f5db6, #3f9b4c);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
    	font-family: lucida handwriting;
    }

	#title
	{
		margin-left: 185px;
		margin-top: 3px;
		margin-bottom: 0;
		font-size: 46px;
		font-family: Arial;
	}

	.btn-primary
	{
		margin-left: 32%;
		width: 35%;
	}

	#admin
	{
		text-align: center;
		margin-top: 20px;
		font-family: lucida fax;
	}
	#admin>span
	{
		color: #bd00ff;
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
		border: 2px solid #7900a3;
	}

.login
{
	background: #bd00ff; 
	transition: .15s;
	transition-property: color;
	width: 179px;
	height: 42px;
	border-radius: 5px;
	border: 2px solid  #22242a;
	margin-left: 32%;]
	outline: none;
	font-weight: 600;
	color: white;
}

.login:hover
{
	background: #9309c4;
	border: 2px solid  #22242a;
	outline: none;

}

.login:active
{
	border: 3px solid #640086;
	box-shadow: 0px 0px 5px #640086;
	outline: none;
}

.login:focus
{
	border: 3px solid #640086;
	box-shadow: 0px 0px 5px #640086;
	outline: none;
}

</style>
