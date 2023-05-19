<?php
// connect to the database
$db = new SQLite3('users.db');

// get the entered username and password
$username = $_POST['username'];
$password = $_POST['password'];

// insert the new user into the database
$stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
$stmt->bindValue(':username', $username, SQLITE3_TEXT);
$stmt->bindValue(':password', $password, SQLITE3_TEXT);
$result = $stmt->execute();

// redirect back to the login page with a success message
header("Location: register-success.html");
exit();
?>