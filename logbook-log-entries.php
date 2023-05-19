<?php
$fullname = $_POST['fullname'];
$section = $_POST['section'];
$purpose = $_POST['purpose'];

// Set the timezone to "Asia/Hong_Kong"
date_default_timezone_set('Asia/Hong_Kong');

// Separate date and time
$log_date = date('Y-m-d');
$log_time = date('H:i:s');

// Insert the log entry into the database
$db = new SQLite3('logbook.db');
$stmt = $db->prepare('INSERT INTO log_entries (fullname, section, purpose, entry_date, entry_time) VALUES (:fullname, :section, :purpose, :entry_date, :entry_time)');
$stmt->bindValue(':fullname', $fullname, SQLITE3_TEXT);
$stmt->bindValue(':section', $section, SQLITE3_TEXT);
$stmt->bindValue(':purpose', $purpose, SQLITE3_TEXT);
$stmt->bindValue(':entry_date', $log_date, SQLITE3_TEXT);
$stmt->bindValue(':entry_time', $log_time, SQLITE3_TEXT);
$stmt->execute();

header("Location: success.html");
exit();
?>
