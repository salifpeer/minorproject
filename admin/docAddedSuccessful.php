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
	
	<h1 >Doctor Added successfully</h1><br><br>

	<label>Click <a onclick="goback()" href="#" class="text-info stretched-link">here</a> to return</label>


</div>

<style type="text/css">
	
	.message
	{
		position: fixed;
		top: 200px;
		left: 370px;
		height: auto;
		padding: 20px;
		width: 600px;
		background: #22242a;
		border-radius: 15px;
		box-shadow: -2px -2px 25px #bd00ff;
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
		margin-left: 210px;
		text-transform: capitalize;
	}
 </style>
 </body>
 </html>



<script type="text/javascript">
	
	setTimeout(goback,5000);

	function goback()
	{
		window.location = "doctor.php";	
	}

</script>  