<?php
$msg='';

	 if(isset($_POST['upload']))
	 	
  {

  	$con=mysqli_connect("localhost","root","","d-care");

  	$image =$_FILES['image']['name'];

  	$text=$_POST['text'];

  	$target= "images/".basename($_FILES['image']['name']);

  	$sql="insert into images(images,text) values ('$image','$text')";

  	echo $sql;

  	mysqli_query($con,$sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
  	{
  		$msg='image uploaded succesfully';
  		echo $msg;
  	}
  	else
  	{
  		$msg="there was a problem";
  		echo $msg;
  	}
  }
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<form method="POST" action="test.php" enctype="multipart/form-data">

		<input type="hidden" name="size" value="1000000">

	<input type="file" name="image" id="image">
	
	<textarea name="text" cols="40" rows="4" placeholder="enter anything"></textarea>

	<br><br>

	

	<input type="submit" name="upload">

	</form>

	<!-- <input type="submit" name="" onclick="display()" value="display"> -->

</body>
</html>


<!-- <script type="text/javascript">
	
	function display() 
	{

		store=document.getElementById('image').value;
		alert(store);
	}

</script> -->