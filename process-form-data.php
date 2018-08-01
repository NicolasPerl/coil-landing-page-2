<?php
$name = $_POST['name'];
$email = $_POST['email'];
$fp = fopen("requestDemo.txt", "a");
$savestring = $name . "," . $email . "\n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>Thank you for reaching out! We'll be in touch shortly</h1>";
?>