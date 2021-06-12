<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
	$jobid = mysqli_real_escape_string($conn, $_POST['jobid']);

	$status="1";
	$msg = mysqli_real_escape_string($conn, $_POST['msg']);
	$date = date('d-m-y h:i:s');
	
	 
	$sql = "INSERT INTO notification_master(job_id, notification,date,status) VALUES ('$jobid','$msg', '$date','$status')";
	if($conn->query($sql)===TRUE) {
	
		echo '<script type="text/javascript">alert("Notification Added");window.location=\'index.php\';</script>';

		exit();
	} else {
		echo "Error " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
} else {
	echo '<script type="text/javascript">alert("Try again");window.location=\'sendnotify.php\';</script>';
	exit();
}
?>