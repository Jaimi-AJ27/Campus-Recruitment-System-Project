<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
         
	$regid = mysqli_real_escape_string($conn, $_POST['regid']);

	$sql = "UPDATE company_reg SET Status=0 WHERE reg_id='$regid'";
	if($conn->query($sql) === TRUE) 
{
		echo '<script type="text/javascript">alert("Deleted Successfully");window.location=\'manage_company.php\';</script>';

		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	echo '<script type="text/javascript">alert("Try Again");window.location=\'manage_company.php\';</script>';

	exit();
}
?>