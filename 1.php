<?php

$mailFrom = $_POST['email'];
$mailTo = $_POST["archi_tronics@yahoo.com"];
$subject = $_POST['subject'];
$mobile = $_POST['mobile'];
$message =$_POST['message'];
$msg= .$message "& the mobile phone is:" .$mobile;
$headers = "Mail sent from: " .$mailFrom;
mail($mailTo, $subject, $msg, $headers);

?>