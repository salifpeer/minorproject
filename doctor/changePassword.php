<?php 
require'dashboard.php'
 ?>



<html>
<head>
	<title></title>
</head>
<body>
  <div id="changePassword">
    
	<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Previous Password</label>
    <input type="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="currentPassword">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">New Password</label>
    <input type="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="newPassword">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword">
  </div>
  <input type="submit" class="btn btn-primary changeBtn" name="changePassword" value="Change Password">
</form>


    <?php
$con=mysqli_connect("localhost","root","","d-care");

     $oldPassword=$res['password'];

     $id=$res['id'];

     if(isset($_POST['changePassword']))
       {
        $currentPassword=$_POST['currentPassword'];
        $newPassword=$_POST['newPassword'];
        $confirmPassword=$_POST['confirmPassword'];

        $validatePassword= preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,60}$/', $newPassword);

         if($currentPassword == $oldPassword)
          { 
             if($validatePassword==1) 
             {
                 if($newPassword == $confirmPassword)
                    {
                      $update="update doctors set password='$newPassword' where id=$id";
                      $query1=mysqli_query($con,$update);
                        if($query1)
                          {

                            echo '<h6 style="color: lightgreen; text-align:center;">'.'Password Changed Successfully'.'</h6>';
                          }
                        else
                          {
                            echo '<h6 style="color: red; text-align:center;">'.'error'.'</h6>';
                          }
                    }
                 else
                  {
                    echo '<h6 style="color: orange; text-align:center;">'.'your password do not match'.'</h6>';
                    
                  }
              }
            else
              {
                echo '<h6 style="color: red; text-align:center;">'.'Your password should contain atleat one number and one letter and should be 8-60 digits long'.'</h6>';
                
              }  
           
          }

         else
         {
          echo '<h6 style="color: red; text-align:center; ">'.'Your Previous Password is Incorrect'.'</h6>';
         }

       }
?>
  </div>

  <style type="text/css">
    
    #changePassword
    {
      background: #22242a;
      margin-left:300px;
      margin-top: 80px;
      width: 800px;
      color: white;
      padding: 40px;
      border-radius: 20px;
      transition-property: margin;
      transition: .5s;
    }

    .changeBtn
    {
      margin-left: 290px;
      margin-top: 20px;

    }

  </style>
</body>
</html>

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
      document.getElementById('changePassword').style="margin-left:400px;";



      for(i=0;i<storeLeft.length;i++)
      {
        storeLeft[i].style="visibility:visible;";
        storeRight[i].style="visibility:hidden;";
        
        console.log('we are here by JS first');
      }

    }

    else

    {
      
      document.getElementById('sidemenu').style="left:-200px;";
      document.getElementById('changePassword').style="margin-left:300px;";


      console.log('we are here by JS second');

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