<?php 

 require 'dashboard.php';
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="message">
	
	<h1 ><i class="fa fa-wheelchair text-warning" aria-hidden="true"></i>&nbsp <span class="text-warning">Patient</span> Added Successfully</h1><br><br>

	<label>Click <a onclick="goback()" href="#" class="text-warning stretched-link">here</a> to Go Back</label>


</div>
 </body>
 </html>

 <style type="text/css">

 	body
 	{
 		margin: 0;
 		background: url(5.jpg);
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
		box-shadow: -2px -2px 25px #ee6e73;
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
		window.location = "welcome.php";	
	}

</script>