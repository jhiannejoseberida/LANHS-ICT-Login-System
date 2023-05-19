<?php
// Start a session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: home.html"); // Change this to the login page URL
exit();
?>
