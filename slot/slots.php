<?php  

     

$con = mysqli_connect("localhost", "root", "", "d-care");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo $_GET['st'];


/*$Query="INSERT INTO 'slots'('wid', 'did', 'startt', 'endt', 'duration') VALUES ('$_GET['wd']','104','$_GET['st']','$_GET['et']','$_GET['du'])'";

     	$q = mysqli_query($con,$Query);
        

         if (!$q) {
             die("Query failed: " . mysqli_error($con)); // Check if query failed
         }
         

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label>Click <a onclick="goback()" href="slo.php" class="text-info stretched-link">here</a> to enter slots for another day</label>

</body>
</html>