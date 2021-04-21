<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
   
          
	$uid = mysqli_real_escape_string($conn, $_POST['userid']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);

	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$gender= mysqli_real_escape_string($conn, $_POST['gender']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$mobile= mysqli_real_escape_string($conn, $_POST['mobile']);

	$sql = "UPDATE user_reg SET fname='$fname', lname='$lname', gender='$gender', dob='$dob',mobile='$mobile' WHERE user_id='$uid'";
	
	if($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">alert("Updated Successfully");window.location=\'manage_jobseeker.php\';</script>';

		
		exit();
	} 
	else
	 {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	echo '<script type="text/javascript">alert("Try Again");window.location=\'manage_jobseeker.php\';</script>';

	exit();
	
}
?>