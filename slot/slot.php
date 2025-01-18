<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<?php      

$con = mysqli_connect("localhost", "root", "", "d-care");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `weekdays`"; // Use backticks for the table name
$q = mysqli_query($con, $query);

if (!$q) {
    die("Query failed: " . mysqli_error($con)); // Check if query failed
}

// Fetch all rows into an array
$weekdays = [];
while ($row = mysqli_fetch_assoc($q)) {
    $weekdays[] = $row; // Add each row to the $weekdays array
}

?>

</head>
<body>
    <form action="slot.php" method="post">
        <input type="text" placeholder="doctorname" name="un">
        <input type="text" placeholder="enter start time" name="st">
        <input type="text" placeholder="enter end time" name="et">
        
        <!-- Dropdown for weekdays -->
        <select name="weekday[]">
            <?php foreach ($weekdays as $weekday) { ?>
                <option value="<?php echo $weekday['id']; ?>">
                    <?php echo $weekday['weekday']; ?>
                </option>
            <?php } ?>
        </select>
        
        <input type="text" placeholder="enter slot duration" name="du">
        <input type="submit" value="Submit Query">
    </form>
</body>
</html>
