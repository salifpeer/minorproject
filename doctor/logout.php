<?php

session_start();

unset($_SESSION['doctor-id']);
header('location:login.php');

?>