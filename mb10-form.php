<?php
$email_szkolki = "dsplipno@wp.pl";
$name = $_POST['name'];
$childname = $_POST['childname'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$agegroup = $_POST['agegroup'];
$subject = "[Szkółka] - wiadomość od: " . htmlspecialchars($name);
$msg .= "<h3>Treść wiadomości</h3>";
$msg .= htmlspecialchars($message) . "<br><br>";
$msg .= "<b>Imię dziecka:</b> " . htmlspecialchars($childname) . "<br>";
$msg .= "<b>Telefon:</b> " . htmlspecialchars($phone) . "<br>";
$msg .= "<b>Email:</b> " . htmlspecialchars($email) . "<br>";
$msg .= "<b>Grupa wiekowa:</b> " . $agegroup . "<br>";
$headers = 'From:' . $email . "\r\n";
$headers .= 'Cc:' . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$msg = wordwrap($msg, 70);
mail($email_szkolki, $subject, $msg, $headers);
include("_thanks.html");
?>