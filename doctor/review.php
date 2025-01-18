<?php 
	require "dashboard.php";
$con=mysqli_connect("localhost","root","","d-care");

$id=$res['id'];

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

	
	<div style=" margin-left: 500px; margin-top: 200px;margin-right: 100px;">
     <?php
      $con=mysqli_connect("localhost","root","","d-care");
              $res=mysqli_query($con, "select * from d_reviews where user_id ='".$_SESSION['doctor-id']."'");
             $r= mysqli_num_rows($res);
             if($r==1)
             {

                echo "<div class='alert alert-success'> Review Already Submitted </div>";
             }
             else {
        ?>      


       <h1>Write review</h1>
       <form method="post">
       	<div class="form-group">
       		<label>Rating</label>
       		<select class="form-control" name="rating">
       			<option>1</option>
       			<option>2</option>
       			<option>3</option>
       			<option>4</option>
       			<option>5</option>
       		</select>
       		
       	</div>

       	<div class="form-group">
       		<label>Review</label>
       		<textarea class="form-control" name="review"></textarea>
       		
       		
       	</div>
       	<div class="form-group">
       		<input type="submit" name="btn" class="btn btn-info">
       	</div>
       	
       </form>   

       <?php

           if(isset($_POST['btn']))
           {
           	

              $con=mysqli_connect("localhost","root","","d-care");
              mysqli_query($con, "insert into d_reviews (rating,review,user_id) values ('".$_POST['rating']."', '".$_POST['review']."', '".$_SESSION['doctor-id']."')");
              echo "<div class='alert alert-success'> Review saved </div>"; 

           }

       }

       ?>	

   </div>		


<style type="text/css">
	.tabs
	{
		width: 61%;
background: rgb(192,192,192);
background: linear-gradient(297deg, rgba(192,192,192,1) 0%, rgba(168,165,165,0.9715260709269663) 100%);
		display: inline-block;
		margin-left: 35px;
		padding: 20px;
		vertical-align: top;
		border-radius: 10px;
		color: #eeeeee;
		box-shadow: 5px 5px 15px #a8a5a5;
		margin-top: 30px;
	}
	.tabs>h3
	{
		text-align: center;
	}
	.tabs>table{
		text-align: center;
		color: #eeeeee; 
		font-size: 18px;

	}



	.patients
	{
background: rgb(254,193,9);
background: linear-gradient(323deg, rgba(254,193,9,1) 0%, rgba(211,158,0,0.5024249473314606) 100%);

	box-shadow: 5px 5px 10px #ee6e73;

	}

	
	
	.info
	{
		display: inline-block;
		width: 30%;
		margin-left: 40px;
		margin-top: 30px;
		vertical-align: top;
		border-radius: 10px;
		padding: 35px;
	}
	.info>h4
	{
		display: inline-block;
		color: #eeeeee;
		font-family: cambria math;
	}
	.info>i
	{
		font-size: 22px;
		float: right;
		/*margin-top: 5px;*/
		/*margin-right: 10px;*/
		color: #eeeeee;
	}

	#dash
	{
		margin-left: 10px;
		display: inline-block;
		color: #22242a;
		font-size: 20px;
		border:none;

	}
	.dashsign
	{
background-color:black;		padding: 10px;
		vertical-align: middle;
		border-radius: 5px;
		box-shadow: 1px 1px 10px #bd00ff;
		color: #eeeeee;
	}

	#overview
	{
		display: inline-block;
		float: right;
		margin-right: 40px;

	}
	#welcome
	{
		position: fixed;
		top: 135px;
		left: 298px;
		width: 800px;
		height:400px;
		background: #22242a;
		z-index: 1;
		border-radius: 20px;
		transition:2s ease-in-out;
		visibility: hidden;
	}

	#dpWelcome
	{
		background: url(<?php echo $res['profileImage']; ?>);
		width: 250px;
		height: 250px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 80px;
		display: inline-block;
		background-size: cover;
		background-position: center;
		vertical-align: top;
	}
	
	.welcomeDetails
	{
		
		color: white;
		display: inline-block;
		margin-left: 60px;
		margin-top: 90px;
	}

	.welcomeDetails>h1
	{
		color: white;
		text-align: center;
		font-size: 55px;
		font-family: century schoolbook;

	}

	.welcomeDetails>h1>span
	{
		color: #08f;
	}

	#welcome>button
	{
		float: right;
		margin-top: 20px;
		margin-right: 20px;
	}



	#top
	{
		width: 100%;
		height: 150px;
		background-position: center;
		background-size: cover;
	}
	
	#profile
	{	
	margin-top: 70px;
    margin-left: 50px;
    width: 96.3%;
    height: auto;
    background: #eee;
    transition: .5s;
    padding-bottom: 50px;
	}

	#dpinside
	{	
		background: url(<?php echo $res['profilePic']; ?>);
		width: 150px;
		height: 150px;
		border: 3px solid #eee;
		border-radius: 100%;
		margin-left: 70px;
		margin-top: 120px;
		display: inline-block;
		background-size: cover;
		background-position: center;
	}

	#name1
	{	
		margin: 0;
		color: #858585;
		display: inline-block;
		margin-left: 300px;
		margin-top: 10px;
		font-family: arial;
		font-size: 50px;
		text-transform: capitalize;
	}

	#name1>span
	{
		color: #08f;
	}

	#post
	{
		margin-left: 300px;
		color: #22242a;
	}

	
</style>
<script type="text/javascript">




</script>

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
			document.getElementById('profile').style="margin-left:250px;";



			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				
				// console.log('we are here by JS first');
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";
document.getElementById('profile').style="margin-left:50px;";


			// console.log('we are here by JS second');

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



