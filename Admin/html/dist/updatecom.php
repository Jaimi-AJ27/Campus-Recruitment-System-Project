<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
   
          
	$regid = mysqli_real_escape_string($conn, $_POST['regid']);
	$cname = mysqli_real_escape_string($conn, $_POST['cname']);

	$head = mysqli_real_escape_string($conn, $_POST['head']);
	$website= mysqli_real_escape_string($conn, $_POST['website']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile= mysqli_real_escape_string($conn, $_POST['mobile']);

	$sql = "UPDATE company_reg SET company_name='$cname', address='$head', website='$website',email='$email',mobile='$mobile' WHERE reg_id='$regid'";
	
	if($conn->query($sql) === TRUE) {
		echo '<script type="text/javascript">alert("Updated Successfully");window.location=\'manage_company.php\';</script>';

		exit();
	} 
	else
	 {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	echo '<script type="text/javascript">alert("Try Again");window.location=\'manage_company.php\';</script>';

	exit();
	
}
?>