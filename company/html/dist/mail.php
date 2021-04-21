<?php

$sub = $_POST['subject'];

$msg = $_POST['message'];

$rec = $_POST['to'];

if(mail($rec,$sub,$msg))
{
	
echo '<script type="text/javascript">alert("Mail Sent Succesfully");window.location=\'index.php\';</script>';

	
}
else
{
	
echo '<script type="text/javascript">alert("Mail Sending failed");window.location=\'mail_compose.php\';</script>';	
}
?>