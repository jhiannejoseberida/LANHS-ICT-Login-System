<?php
// Start a session
session_start();

// Set the timezone to "Asia/Hong_Kong"
date_default_timezone_set('Asia/Hong_Kong');

// connect to the users database
$db_users = new SQLite3('users.db');

// connect to the logs database
$db_logs = new SQLite3('user_logs.db');

// get the entered username and password
$username = $_POST['username'];
$password = $_POST['password'];

// check if the entered username and password match the ones stored in the database
$stmt = $db_users->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
$stmt->bindValue(':username', $username, SQLITE3_TEXT);
$stmt->bindValue(':password', $password, SQLITE3_TEXT);
$result = $stmt->execute();

// if the login is successful, log the user in and redirect to the success page
if ($result->fetchArray()) {
    // Check if the logged-in user is an admin
    if ($username === 'admin' && $password === 'password') {
        // Set session variables for admin user
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = true;
        // Redirect to the admin page
        header("Location: admin-page.php");
        exit();
    } else if ($username === 'registeredusers' && $password === 'admin') {
        // Set session variables for registered users
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = false;
        // Redirect to the registered users page
        header("Location: registered-users.php");
        exit();
    } else {
        // Set session variables for normal users
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = false;
        // Insert the log entry into the logs table
        $login_date = date('Y-m-d');
        $login_time = date('H:i:s');
        $stmt = $db_logs->prepare('INSERT INTO logs (username, login_date, login_time) VALUES (:username, :login_date, :login_time)');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':login_date', $login_date, SQLITE3_TEXT);
        $stmt->bindValue(':login_time', $login_time, SQLITE3_TEXT);
        $stmt->execute();
        // Redirect to the success page
        header("Location: success.html");
        exit();
    }
} else {
    // if the login fails, redirect back to the login page with an error message
    header("Location: user-not-found.html");
    exit();
}
?>
