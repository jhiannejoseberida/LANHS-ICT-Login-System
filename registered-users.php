<?php
// Set the timezone to "Asia/Hong_Kong"
date_default_timezone_set('Asia/Hong_Kong');

// connect to the database
$db = new SQLite3('users.db');

// execute a query to fetch all rows from the users table
$stmt = $db->query('SELECT * FROM users');
$rows = array();
while ($row = $stmt->fetchArray(SQLITE3_ASSOC)) {
    $rows[] = $row;
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
    <title>Registered Users</title>
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
    <h1 style="text-align: center;">Registered Users</h1></div>
    <?php if (!empty($rows)): ?>
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <!-- Add other column headers as needed -->
            </tr>
            <?php foreach ($rows as $row): ?>
                <?php if ($row['username'] !== 'admin'): ?> <!-- Check if the username is not 'admin' -->
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <!-- Display other user information as needed -->
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">No registered users found.</p>
    <?php endif; ?>
    <p></p>
    <div class="buttonDiv">
        <button type="button" onclick="location.href='register.html'">Register New User</button>
    </div>
    <p></p>
    <div class="buttonDiv">
        <button type="button" onclick="location.href='reset-password.html'">Change User Password</button>
    </div>
    <p></p>
    <div class="buttonDiv">
        <button type="button" onclick="location.href='admin-page.php'">Back</button>
    </div>
    <hr>
    </form>
    <div class="login-form-bg">
    </div>
</body>
</html>
