<?php
// Set the timezone to "Asia/Hong_Kong"
date_default_timezone_set('Asia/Hong_Kong');

// connect to the database
$db = new SQLite3('user_logs.db');

// execute a query to fetch all distinct entry_date values
$date_query = $db->query('SELECT DISTINCT login_date FROM logs');
$dates = array();
while ($date = $date_query->fetchArray(SQLITE3_ASSOC)) {
    $dates[] = $date['login_date'];
}

// close the database connection
$db->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inventory_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Logged In Users</title>
    <style>
        /* Center the table content */
        table {
            margin: 0 auto;
            text-align: center;
        }

        table th, table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="" class="login-form">
    <div style='text-align:center'>
    <h1 style="text-align: center;">Attendance</h1></div>

    <div style="text-align:center">
        <label for="date-select">Select a date:</label>
        <select name="date-select" id="date-select">
            <?php foreach ($dates as $date): ?>
                <option value="<?php echo $date; ?>"><?php echo $date; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="submit-date">Submit</button>
    </div>

    <?php 
    if (isset($_POST['submit-date'])) {
        $selected_date = $_POST['date-select'];
        // execute a query to fetch all rows with the selected date from the log_entries table
        $db = new SQLite3('user_logs.db');
        $stmt = $db->prepare('SELECT * FROM logs WHERE login_date = :login_date');
        $stmt->bindValue(':login_date', $selected_date, SQLITE3_TEXT);
        $result = $stmt->execute();
        $rows = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }
        $db->close();
    }
    ?>

    <?php if (isset($rows) && !empty($rows)): ?>
        <table>
            <tr>
                <th>Username</th>
                <th>Login Date</th>
                <th>Login Time</th>
                <!-- Add other column headers as needed -->
            </tr>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['login_date']; ?></td>
                    <td><?php echo $row['login_time']; ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">No logged in users found.</p>
    <?php endif; ?>
    <p></p>
    </div><!-- End of #users-table -->
    <div class="buttonDiv">
        <button type="button" onclick="location.href='admin-page.php'">Back</button>
    </div>
    <hr>
    </form>
    <div class="login-form-bg"></div>
</body>
</html>
            