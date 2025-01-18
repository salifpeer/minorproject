<html>
    <head>
            <?php  include('indexheader.php'); ?>
      
           
	

</head>

     <body>
     	<div id="m1"></div>
		     	<div class="note">
		     			
		     			<h1> Right there with you</h1>
		     			We at Dcare are always fully focused on helping you.</div>

		     

     	<div id="m2">
     		About Us
     		<div class="inabout">Why to login with us?</div>
     		<div class="inabout2">
     			-Easy to maintain all the reports.<br><br>
     			-Easy to carry all the reports.<br><br>
     			-Hassle free access<br><br>
     			
     		</div>
     		<div class="margin"></div>	
     	</div>

        <div class="doctors">" WE Care "
             <div class="scrolltext">
     			<marquee behaviuor="scroll" direction="up" scrollamount="3" width="200" height="200">
     				HOW FLU SPREADS? <br><br>
     				Flu virus spread mainly by tiny droplets,made when people with flu cough ,sneeze or talk and
     				the droplets land in the mouths or noses of people who are nearly.<br><br>
     				Less often,a person might also get flu by touching a surface or object that has flu virus on it
     				 and the touching their own mouth,nose,ot possibly their eyes.
     				</marquee></div>
     	</div>

        <div id="m3">
	       <div class="mission">MISSION
			   <div class="marginline"></div>
			   <div class="inmission">
					Dcare is committed to maintain the highest standard of care and
					resopnd to the needs of the community in a compassionate manner.<br>
					We manages all the information about the patient like medical reports,
					allergies , blood group etc.
				</div>
				<div class="missionpic"></div>
	        </div>
       </div>

	   <div class="video">
	   		  
	   	 <div class="text"> Here! We have some health care tips for you!</div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/30RsTK9EeoQ"></iframe>
	
	   </div>
 
	  
	 
       <div id="m4">  
		<h1 style="padding-top:10px">Contact Us</h1>
		<div class="con">
		<div class="phone">
			<img src=".//images/b.jpg"height="50px"width="50px"/>
			<p>9682523186</p>
			<p>7006055485</p>
		</div>
		
		
		<div class="email">
			<img src=".//images/a.png" height="50px"width="50px"/>
			<h4>DCARE@gmail.com</h4>
			</div>
			<div class="face">
			<img src=".//images/c.png"height="50px"width="50px"/>

		</div>

	</div>

	</div>



	<?php include('indexfooter.php');?>

	</body>
</html>

<style type="text/css">
	body
	 {
		margin: 0;
		height: 2000px;
	 }


	#m1
	{background-image: url(images/12.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			height: 500px;
			padding: 10px;
			top: 0;
			left: 0;
			right: 0;
			text-align: center;
			margin-top: 20px;
				
	}
	.note
{
			background-color: black;
			width:600px;
			height:300px;
			opacity: .5;
		    padding: 20px; 
		    color: white;
		    margin-top: -450px;
		    margin-left: 100px;

		   
		    z-index: -1000px;

}
.note h1{
	font-size: 35px;
}


.video{
	display:grid;
	grid-template-rows:.4fr 1fr;
gap:8px;
	height: 450px;
	justify-content:center;
	background-color: whitesmoke;
	margin-top: 40px;

}
iframe{
	
}

.text{
	font-size: 20px;
	padding-left:40px;
	padding-top:20px;




}
	#m2 
	{

			  background-color: black;
			  height: 490px;
			  width:500px;
			  padding: 10px;
			  top: 0;
			  left: 0;
			  right: 0;
			  text-align: center;
			  margin-top: 120px;
			  color: white;
			  opacity: .5;
				
	  }

	#m3
	 {
			 background-color: whitesmoke;
			 height: 500px;
			 padding: 10px;
			 top: 0;
			 left: 0;
			 right: 0;
			 text-align: center;
			 margin-top: 45px;
				
	 }

	#m4
	 {
			  background-color: whitesmoke;
			  display:grid;
			  grid-template-rows=.2fr 1fr;
			  gap:2vh;
			  justify-content:center;
			  align-content:center;
			  height: 300px;
			  padding: 10px;
			  top: 0;
			  left: 0;
			  right: 0;
			  text-align: center;
			  margin-top: 45px;			
	}
	.con{

display:flex;
gap:20vh;
	}

	

	.scrolltext
	{
		 height:200px;
		 width:200px;
		 color: black ;
		 font-size: 18px;
		 font-family: 'Dancing Script', cursive;


	}


	.mission
	{
		color: black;
		margin-top: 100px;
		margin-left: 300px;
	}

	.marginline
	{
		border-left: 3px solid #378f7b ;
	    margin-left: 450px;
	    margin-top: -24px;
	    height:30px;
	}


	.inmission
	{
		color: black;
		margin-top: 30px;
		margin-left: 440px;
		width: 500px;
	}

	.missionpic
	{
		background-image: url(images/m1.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		margin-top: -100px;
		margin-left: -200px;
		width: 300px;
		height: 200px;
	}

	.doctors
	 {

			background-image: url(images/d5.jpg);
			animation: slide 50s infinite;
		    background-size: cover;
			background-repeat: no-repeat;
			height: 490px;
			width:1000px;
			padding: 10px;
			top: 0;
			left: 0;
			right: 0;
			text-align: center;
			margin-top: -510px;
			margin-left:520px;
			font-weight: bold;
			font-size: 25px;
				
	}

	@keyframes slide
	{
		10%
		{
					background-image: url(images/d6.jpg);
		}
		20%
		{
					background-image: url(images/d7.jpg);
		}
		30%
		{
					background-image: url(images/d8.jpg);
		}
		40%
		{
					background-image: url(images/d9.jpg);
		}
		50%
		{
					background-image: url(images/d10.jpg);
		}
		60%
		{
					background-image: url(images/d11.jpg);
		}
		70%
		{
					background-image: url(images/d12.jpg);
		}
		80%
		{
					background-image: url(images/d14.jpg);
		}
		100%
		{
					background-image: url(images/d15.jpg);
		}
	}
	
	
.inabout
	 {

				background-color: black;
				height: 50px;
				width:300px;
				padding: 10px;
				padding-left: 85px;
				top: 0;
				left: 0;
				right: 0;
				text-align: center;
				margin-top: 60px;
				color: #378f7b;
				font-weight: bold;
				font-size: 30px;
				z-index: -1000px;		
	}

.margin
	{
			border-bottom: 3px solid #378f7b ;
			margin-top: 200px;
			width:300px;
	}

.inabout2
	 {
				background-color: black;
				height: 50px;
				width:300px;
				padding: 10px;
				padding-left: 85px;
				top: 0;
				left: 0;
				right: 0;
				text-align: center;
				margin-top: 10px;
				color: white;
				font-size: 15px;
				z-index:-1000px; 
				
	}


