<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inventory_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Inventory Check</title>
</head>
<body>
    <form method="post" action="inventory-report.php" class="login-form">
        <div style='text-align:center'>
            <h1>Inventory Check</h1>
            <p>Fill in the boxes with the number of items. Do this once or twice a week.</p>
        </div>
        <table>
            <tr>
                <th>Item</th>
                <th>Total Quantity</th>
                <th>Functioning</th>
                <th>Defective</th>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><input type="number" name="monitor_quantity"></td>
                <td><input type="number" name="monitor_functioning"></td>
                <td><input type="number" name="monitor_defective"></td>
            </tr>
            <tr>
                <td>Mouse</td>
                <td><input type="number" name="mouse_quantity"></td>
                <td><input type="number" name="mouse_functioning"></td>
                <td><input type="number" name="mouse_defective"></td>
            </tr>
            <tr>
                <td>Keyboard</td>
                <td><input type="number" name="keyboard_quantity"></td>
                <td><input type="number" name="keyboard_functioning"></td>
                <td><input type="number" name="keyboard_defective"></td>
            </tr>
            <tr>
                <td>Speaker</td>
                <td><input type="number" name="speaker_quantity"></td>
                <td><input type="number" name="speaker_functioning"></td>
                <td><input type="number" name="speaker_defective"></td>
            </tr>
            <tr>
                <td>HDD</td>
                <td><input type="number" name="hdd_quantity"></td>
                <td><input type="number" name="hdd_functioning"></td>
                <td><input type="number" name="hdd_defective"></td>
            </tr>
            <tr>
                <td>SSD</td>
                <td><input type="number" name="ssd_quantity"></td>
                <td><input type="number" name="ssd_functioning"></td>
                <td><input type="number" name="ssd_defective"></td>
            </tr>
            <tr>
                <td>CPU</td>
                <td><input type="number" name="cpu_quantity"></td>
                <td><input type="number" name="cpu_functioning"></td>
                <td><input type="number" name="cpu_defective"></td>
            </tr>
            <tr>
                <td>GPU</td>
                <td><input type="number" name="gpu_quantity"></td>
                <td><input type="number" name="gpu_functioning"></td>
                <td><input type="number" name="gpu_defective"></td>
            </tr>
            <tr>
                <td>RAM</td>
                <td><input type="number" name="ram_quantity"></td>
                <td><input type="number" name="ram_functioning"></td>
                <td><input type="number" name="ram_defective"></td>
            </tr>
            <tr>
                <td>Motherboard</td>
                <td><input type="number" name="mobo_quantity"></td>
                <td><input type="number" name="mobo_functioning"></td>
                <td><input type="number" name="mobo_defective"></td>
            </tr>
            <tr>
                <td>PSU</td>
                <td><input type="number" name="psu_quantity"></td>
                <td><input type="number" name="psu_functioning"></td>
                <td><input type="number" name="psu_defective"></td>
            </tr>
            <tr>
                <td>AVR</td>
                <td><input type="number" name="avr_quantity"></td>
                <td><input type="number" name="avr_functioning"></td>
                <td><input type="number" name="avr_defective"></td>
            </tr>
            <tr>
                <td>PC Unit</td>
                <td><input type="number" name="pc_quantity"></td>
                <td><input type="number" name="pc_functioning"></td>
                <td><input type="number" name="pc_defective"></td>
            </tr>
            <tr>
                <td>LAN Tester</td>
                <td><input type="number" name="tester_quantity"></td>
                <td><input type="number" name="tester_functioning"></td>
                <td><input type="number" name="tester_defective"></td>
            </tr>
            <tr>
                <td>RJ45</td>
                <td><input type="number" name="rj45_quantity"></td>
                <td><input type="number" name="rj45_functioning"></td>
                <td><input type="number" name="rj45_defective"></td>
            </tr>
            <tr>
                <td>Crimper</td>
                <td><input type="number" name="crimper_quantity"></td>
                <td><input type="number" name="crimper_functioning"></td>
                <td><input type="number" name="crimper_defective"></td>
            </tr>
            <!-- Add more rows for other items -->
            <!-- Example row -->
            <!-- <tr>
                <td>Item Name</td>
                <td><input type="number" name="item_quantity"></td>
                <td><input type="number" name="item_functioning"></td>
                <td><input type="number" name="item_defective"></td>
            </tr> -->
        </table>
        <div class="buttonDiv">
            <button type="submit">Generate Report</button>
        </div>
  
    <p></p>
    <div class="buttonDiv">
        <button type="button" onclick="location.href='inventory_reports'">Check Previous Reports</button>
    </div>
    <p></p>
    <div class="buttonDiv">
        <button type="button" onclick="location.href='admin-page.php'">Back</button>
    </div>
    <hr>
    </form>
    <div class="login-form-bg">
    </div>
</div>
</body>
</html>
