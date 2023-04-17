<?php
include("login.php");
// Start session
session_start();

// Unset session variable
unset($_SESSION['email']);

// Destroy session
session_destroy();

// Redirect to login page
header('Location: login.php');
exit();
?>
