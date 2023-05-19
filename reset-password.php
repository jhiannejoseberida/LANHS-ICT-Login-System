<?php
// Retrieve form data
$username = $_POST['username'];
$newPassword = $_POST['new_password'];

// Connect to the database (assuming SQLite)
$db = new SQLite3('users.db');

// Update the password in the database
$query = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
$result = $db->query($query);

// Close the database connection
$db->close();

// Display a success message
echo "Password reset successfully.";

// Redirect to login page after 1 second
header("refresh:1;url=login.html");
exit;
?>
