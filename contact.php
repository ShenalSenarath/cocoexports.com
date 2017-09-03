<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$field_name = $_POST['textfield'];
$field_namelast = $_POST['textfield2'];
$field_phone = $_POST['textfield3'];
$field_email = $_POST['textfield4'];
$field_message = $_POST['textarea'];

$mail_to = 'info@cocoexports.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'last name: '.$field_namelast."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
 alert('Thank you for the message. We will contact you shortly.');
 window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
 alert('Message failed. Please, send an email to info@cocoexports.com');
 window.location = 'index.html';
 </script>
<?php
}
?>
</body>
</html>
