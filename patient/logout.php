<?php

session_start();
unset($_SESSION['patient-id']);
header('location:login.php');

?>


<!-- INSERT INTO `reporttypes` (`id`, `reportTypes`) VALUES
(1, '-select-'),
(3, 'MRI'),
(4, 'X-ray'),
(5, 'USG'),
(6, 'CT scan'),
(7, 'lipid profile'); -->