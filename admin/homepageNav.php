<?php 
  ob_start();
   
    require $_SERVER['DOCUMENT_ROOT'].'\d-care\Homepage\homepageNav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top navbar-default bg-dark ">
  <a class="navbar-brand text-white heading" href="\..\d-care\Homepage\homepage.php">
    <img src="logo.png" width="40" height="40" class="d-inline-block align-center" alt="" loading="lazy">
    d-care
  </a>
  <div id=navDiv>
  <ul id="liList">
               
          <li ><a href="\..\d-care\Homepage\homepage.php"><i class="fa fa-home" aria-hidden="true" id="icon" ></i> Home</a></li>
              
          <li ><a href=""><i class="fa fa-info-circle" aria-hidden="true" id="icon"></i>About us</a></li>
              
          <li ><a href="/../d-care/Homepage/contactUs/contactUs.php"><i class="fa fa-volume-control-phone" aria-hidden="true" id="icon"></i>Contact us</a></li>
           
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > <i class="fa fa-sign-in" aria-hidden="true" id="icon"></i>Login</a>
                   
            <div class="dropdown-menu" id="dropList" class="dropbtn"> 
                        
              <a class="dropdown-item" id="listItem" href="\..\d-care\admin\login.php">Admin</a>
              <a class="dropdown-item" id="listItem" href="\..\d-care\doctor\login.php">Doctor</a>
              <a class="dropdown-item" id="listItem" href="\..\d-care\patient\login.php">Patient</a>
            </div>
         </li>
         <li class="nav-item dropdown">
                  
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-plus" aria-hidden="true" id="icon"> </i>Sign-up
            </a>
                   
            <div class="dropdown-menu" id="dropList" class="dropbtn">
                  
              <a class="dropdown-item" id="listItem" href="\..\d-care\doctor\Signup.php">Doctor</a>
                 
              <a class="dropdown-item" id="listItem" href="\..\d-care\patient\signup.php">Patient</a>
                  
              <a class="dropdown-item" id="listItem" href="\..\d-care\MedicalShop\signup.php">Medical Shop</a>
            </div>
         </li>
                
       </ul>
      </div>
</nav>
</body>
</html>
<script>
 $(window).scroll(function(){
 $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
 });
</script>

<style type="text/css">
	
	.navbar
  {
    height: 60px;
  }

  #navDiv
  {
    margin-left:430px;
    margin-top: 10px;
  }
	
	.heading
	{
		font-family: roboto;
    color: black;
	}

  body
{
  margin: 0;
  background: whitesmoke;
}

#liList>li
{
  color:white;
  text-decoration: none;
  list-style: none;
  display: inline-block;
  margin-left: 15px;
  cursor: pointer;
  padding-right: 10px;
  border-bottom: 3px solid transparent;
  transition: .2s;

}
#liList>li>a
{
  color: white;
  text-decoration: none;
}

#liList>li:hover
{
  
  border-bottom: 3px solid white;
  border-radius: 2px;

}


#icon
{
  padding: 10px;
}


#dropList
{
 background-color: #22242a;
 list-style: none;
 border-radius: 5px;
 padding: 0;
}

#listItem
{
  color:white;
  transition: .4s ;
  transition-property: padding-left;
  border-bottom: 1px solid grey;

}

#listItem:first-child
{
  padding-top:7px;
}
#listItem:last-child
{
  padding-bottom: 7px;
  border-bottom: none;
}

#listItem:hover
{
    background-color: #1d1d1d;
    padding-left: 30px;
    font-weight: 600;
    color: whitesmoke;
}

.bg-dark
  {
    transition: 2s ease;
    background: rgb(192,192,192);
background: linear-gradient(302deg, rgba(192,192,192,1) 0%, rgba(71,71,71,1) 0%, rgba(37,37,37,1) 0%, rgba(21,21,21,1) 0%, rgba(49,49,49,1) 52%, rgba(0,0,0,1) 100%)!important;
  }

.bg-dark.scrolled
{
  
 background: rgb(192,192,192);
background: linear-gradient(302deg, rgba(192,192,192,.5) 0%, rgba(71,71,71,.5) 0%, rgba(37,37,37,.5) 0%, rgba(21,21,21,.5) 0%, rgba(49,49,49,.5) 52%, rgba(0,0,0,.5) 100%) !important;
}


</style>