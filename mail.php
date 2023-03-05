<?php
$to_email="19121a05t7@gmail.com";
$subject = "New Student";
$body="hello";
$headers = "From:visweswar8790@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Applied Successfully ";
} else {
    echo "Email sending failed...";
}
?>