<?php
date_default_timezone_set("UTC"); // 5 hours ahead of CST

$email = $_POST['demo_email_input'];
$fp = fopen("requestDemo.txt", "a");
$savestring = $email . " " . date("l jS \of F Y h:i:s A") . "\n";
fwrite($fp, $savestring);
fclose($fp);
header("location: https://demo.coilapp.com");
?>