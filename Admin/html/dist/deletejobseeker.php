<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
         
	$uid = mysqli_real_escape_string($conn, $_POST['userid']);

	$sql = "UPDATE user_reg SET Status=0 WHERE user_id='$uid'";
	if($conn->query($sql) === TRUE) 
{
		echo '<script type="text/javascript">alert("Deleted Successfully");window.location=\'manage_jobseeker.php\';</script>';

		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	echo '<script type="text/javascript">alert("Try Again");window.location=\'manage_jobseeker.php\';</script>';

	exit();
}
?>