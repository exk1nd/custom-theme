<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_message = $_POST['message'];

$mail_to = 'admin@paydaysay.com';
$subject = 'Message from a paydaysay contact-us visitor ' . $field_name;

$body_message = 'From: ' . $field_name . "\n";
$body_message .= 'E-mail: ' . $field_email . "\n";
$body_message .= 'Website: ' . $field_phone . "\n";
$body_message .= 'Message: ' . $field_message;

$headers = 'From: ' . $field_email . "\r\n";
$headers .= 'Reply-To: ' . $field_email . "\r\n";

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = '/contact-us.php';
    </script>
    <?php
} else { ?>
    <script language="javascript" type="text/javascript">
        alert('Failed to send your message. Please try later or contact the administrator by email admin@paydaysay.com.');
        window.location = '/contact-us.php';
    </script>
    <?php
}
?>