<?php 

 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
 <div class="message">
	
	<h1 ><i class="fa fa-wheelchair " style="color: #fb962a;" aria-hidden="true"></i>&nbsp <span style="color: #fb962a;">Signed</span>Up Successfully</h1><br><br>

	<label>Click <a onclick="goback()" href="#" class="stretched-link text-warning">here</a> to LogIn</label>


</div>
 </body>
 </html>

 <style type="text/css">

 	body
 	{
 		margin: 0;
 		background: url(6.jpg);
 		background-size: cover;
 	}
	
	.message
	{
		position: fixed;
		top: 200px;
		left: 290px;
		height: auto;
		padding: 20px;
		width: 800px;
		background: #22242a;
		border-radius: 15px;
		box-shadow: -2px -2px 25px #f8c107;
	}

	.message>h1
	{
		text-align: center;
		margin-top: 60px;
		color: whitesmoke;
	}	

	.message>label
	{
		color: whitesmoke;
		margin-left: 300px;
		text-transform: capitalize;
	}
 </style>

 <script type="text/javascript">
	
	setTimeout(goback,3000);

	function goback()
	{
		window.location = "login.php";	
	}

</script>