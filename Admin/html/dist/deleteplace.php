<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
         
	$delid = mysqli_real_escape_string($conn, $_POST['delid']);

	$sql = "UPDATE placement SET status=0 WHERE id='$delid'";
	if($conn->query($sql) === TRUE) 
{
		header("Location:material.php");
		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	header("Location:material.php");
	exit();
}
?>