<?php

session_start();
// session_unset();
unset($_SESSION['admin-id']);
header('location:login.php');

?>