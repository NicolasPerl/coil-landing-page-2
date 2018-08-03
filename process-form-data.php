<?php
$email = $_POST['demo_email_input'];
$fp = fopen("requestDemo.txt", "a");
$savestring = $email . "\n";
fwrite($fp, $savestring);
fclose($fp);
header("location: https://demo.coilapp.com");
// echo "<h1>Thank you for reaching out! We'll be in touch shortly</h1>";
?>