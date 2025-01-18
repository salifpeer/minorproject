<?php 
require"dashboard.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>


	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="addPatient.php" role="tab" aria-controls="pills-home" aria-selected="true">Add Patients</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="viewPatient.php" role="tab" aria-controls="pills-profile" aria-selected="false"> View Patients</a>
  </li>
</ul>
</div>



</body>
</html>

<style type="text/css">
	
	.nav
	{
		margin-top: 70px;
		margin-left: 50px;
		background: grey;
		color: white;
		border-radius: 5px;
	}

	.nav>li>a
	{
		color: white;
	}

	.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #bd00ff;
}
</style>