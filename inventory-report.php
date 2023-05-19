<?php
// Get input values
$monitorQuantity = $_POST["monitor_quantity"];
$monitorFunctioning = $_POST["monitor_functioning"];
$monitorDefective = $_POST["monitor_defective"];
$mouseQuantity = $_POST["mouse_quantity"];
$mouseFunctioning = $_POST["mouse_functioning"];
$mouseDefective = $_POST["mouse_defective"];
$keyboardQuantity = $_POST["keyboard_quantity"];
$keyboardFunctioning = $_POST["keyboard_functioning"];
$keyboardDefective = $_POST["keyboard_defective"];
$speakerQuantity = $_POST["speaker_quantity"];
$speakerFunctioning = $_POST["speaker_functioning"];
$speakerDefective = $_POST["speaker_defective"];
$hddQuantity = $_POST["hdd_quantity"];
$hddFunctioning = $_POST["hdd_functioning"];
$hddDefective = $_POST["hdd_defective"];
$ssdQuantity = $_POST["ssd_quantity"];
$ssdFunctioning = $_POST["ssd_functioning"];
$ssdDefective = $_POST["ssd_defective"];
$cpuQuantity = $_POST["cpu_quantity"];
$cpuFunctioning = $_POST["cpu_functioning"];
$cpuDefective = $_POST["cpu_defective"];
$gpuQuantity = $_POST["gpu_quantity"];
$gpuFunctioning = $_POST["gpu_functioning"];
$gpuDefective = $_POST["gpu_defective"];
$ramQuantity = $_POST["ram_quantity"];
$ramFunctioning = $_POST["ram_functioning"];
$ramDefective = $_POST["ram_defective"];
$moboQuantity = $_POST["mobo_quantity"];
$moboFunctioning = $_POST["mobo_functioning"];
$moboDefective = $_POST["mobo_defective"];
$psuQuantity = $_POST["psu_quantity"];
$psuFunctioning = $_POST["psu_functioning"];
$psuDefective = $_POST["psu_defective"];
$avrQuantity = $_POST["avr_quantity"];
$avrFunctioning = $_POST["avr_functioning"];
$avrDefective = $_POST["avr_defective"];
$pcQuantity = $_POST["pc_quantity"];
$pcFunctioning = $_POST["pc_functioning"];
$pcDefective = $_POST["pc_defective"];
$testerQuantity = $_POST["tester_quantity"];
$testerFunctioning = $_POST["tester_functioning"];
$testerDefective = $_POST["tester_defective"];
$rj45Quantity = $_POST["rj45_quantity"];
$rj45Functioning = $_POST["rj45_functioning"];
$rj45Defective = $_POST["rj45_defective"];
$crimperQuantity = $_POST["crimper_quantity"];
$crimperFunctioning = $_POST["crimper_functioning"];
$crimperDefective = $_POST["crimper_defective"];


// Add more variables for other items

// Get current date and time
$currentDate = date("Y-m-d_H-i-s"); // Update date format for filename

// Create text file content with date and time
$reportContent = "Inventory Report\n";
$reportContent .= "Date and Time: " . $currentDate . "\n";
$reportContent .= "Item\t\tTotal\t\tFunctioning\t\tDefective\n";
$reportContent .= "Monitor\t\t" . $monitorQuantity . "\t\t" . $monitorFunctioning . "\t\t" . $monitorDefective . "\n";
$reportContent .= "Mouse\t\t" . $mouseQuantity . "\t\t" . $mouseFunctioning . "\t\t" . $mouseDefective . "\n";
$reportContent .= "Keyboard\t" . $keyboardQuantity . "\t\t" . $keyboardFunctioning . "\t\t" . $keyboardDefective . "\n";
$reportContent .= "Speaker\t\t" . $speakerQuantity . "\t\t" . $speakerFunctioning . "\t\t" . $speakerDefective . "\n";
$reportContent .= "HDD\t\t" . $hddQuantity . "\t\t" . $hddFunctioning . "\t\t" . $hddDefective . "\n";
$reportContent .= "SSD\t\t" . $ssdQuantity . "\t\t" . $ssdFunctioning . "\t\t" . $ssdDefective . "\n";
$reportContent .= "CPU\t\t" . $cpuQuantity . "\t\t" . $cpuFunctioning . "\t\t" . $cpuDefective . "\n";
$reportContent .= "GPU\t\t" . $gpuQuantity . "\t\t" . $gpuFunctioning . "\t\t" . $gpuDefective . "\n";
$reportContent .= "RAM\t\t" . $ramQuantity . "\t\t" . $ramFunctioning . "\t\t" . $ramDefective . "\n";
$reportContent .= "Motherboard\t" . $moboQuantity . "\t\t" . $moboFunctioning . "\t\t" . $moboDefective . "\n";
$reportContent .= "PSU\t\t" . $psuQuantity . "\t\t" . $psuFunctioning . "\t\t" . $psuDefective . "\n";
$reportContent .= "AVR\t\t" . $avrQuantity . "\t\t" . $avrFunctioning . "\t\t" . $avrDefective . "\n";
$reportContent .= "System Unit\t" . $pcQuantity . "\t\t" . $pcFunctioning . "\t\t" . $pcDefective . "\n";
$reportContent .= "LAN Tester\t" . $testerQuantity . "\t\t" . $testerFunctioning . "\t\t" . $testerDefective . "\n";
$reportContent .= "RJ45\t\t" . $rj45Quantity . "\t\t" . $rj45Functioning . "\t\t" . $rj45Defective . "\n";
$reportContent .= "Crimper\t\t" . $crimperQuantity . "\t\t" . $crimperFunctioning . "\t\t" . $crimperDefective . "\n";

// Add more rows for other items
// Example row
// $reportContent .= "Item Name\t" . $itemQuantity . "\t" . $itemFunctioning . "\t" . $itemDefective . "\n";

// Set directory path
$directory = "inventory_reports/";

// Create directory if not exists
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

// Save report content to a text file with date and time in the filename
$filename = $directory . "inventory_report_" . $currentDate . ".txt"; // Include date and time in the filename
$file = fopen($filename, "w");
fwrite($file, $reportContent);
fclose($file);

// Redirect back to inventory-check.php
header("Location: inventory-check.php");
exit();
?>
