<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="GET" action="slots.php">
   <input type="text" placeholder="doctorname" name="un">
        <input type="text" placeholder="enter start time" name="st">
        <input type="text" placeholder="enter end time" name="et">
        
        <!-- Dropdown for weekdays -->
        <select>
            <?php for($w=1;$w<8;$w++) { ?>
                <option value="<?php $w ?>" name="wd">
                    <?php echo $w; ?>
                </option>
            <?php } ?>
        </select>
        
        <input type="text" placeholder="enter slot duration" name="du">
        <input type="submit" value="Submit Query">
            </form> 
</body>
</html>