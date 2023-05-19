<?php
// Start a session
session_start();

// Check if the user is not logged in as an admin, redirect to login page
if (!isset($_SESSION['username']) || !$_SESSION['is_admin']) {
    header("Location: login.html"); // Change this to the login page URL
    exit();
}
?>

<!-- Your admin-only page HTML code here -->


<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Administrator Controls</title>
</head>
<body>
    <form action="" class="login-form">
        <div
            div style='text-align:center'>
        <h>LOS AMIGOS NATIONAL HIGH SCHOOL</h>
        <h1>Welcome Admin!</h1>
        <div class="time" id="time-display"></div>
        </div>

        <div class="buttonDiv">
            <button type="submit" formaction="registered-users.php">List Registered Users</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="attendance-log.php">Attendance Check</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="logbook-log-page.php">Logbook Check</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="register.html">Register New Users</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="reset-password.html">Change User Password</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="inventory-check.php">Inventory</button>
        </div>
        <p>   </p>
        <div class="buttonDiv">
            <button type="submit" formaction="logout.php">Log Out</button>
        </div>

        <hr>
    </form>
    <div class="login-form-bg">
    </div>
</body>
</html>