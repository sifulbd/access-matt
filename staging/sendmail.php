<?php
$subject = 'Test';
echo $message = 'Test';
//echo $message;
$headers = 'From: noreply@kingtree.ie' . "\r\n" .
    'Reply-To: noreply@kingtree.ie' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail('manishd84@gmail.com', $subject, $message, $headers);
//header("Location: thank-you.html");
?>