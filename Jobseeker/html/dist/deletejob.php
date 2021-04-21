<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
         
	$jobid = mysqli_real_escape_string($conn, $_POST['jobid']);

	$sql = "UPDATE job_post SET Status=0 WHERE job_id='$jobid'";
	if($conn->query($sql) === TRUE) 
{
		header("Location:index.php");
		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	header("Location:manage_jobs.php");
	exit();
}
?>