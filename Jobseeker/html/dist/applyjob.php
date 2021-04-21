<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
	$jobid = mysqli_real_escape_string($conn, $_POST['jid']);
	$status="1";
	$email=$_SESSION['User'];
	$sqli = "SELECT user_id FROM user_reg inner join tbl_login on tbl_login.login_id=user_reg.login_id where tbl_login.username='$email' ";
                 $result1 = $conn->query($sqli);
	if($result1->num_rows > 0)
	 {
     while($row = $result1->fetch_assoc())
	  {
	 $uid= $row['user_id']; 
	 }
	 }

	 
	$sql = "INSERT INTO applied_jobs(user_id, job_id,Status) VALUES ('$uid','$jobid','$status')";
	if($conn->query($sql)===TRUE) {
		$_SESSION['jobPostSuccess'] = true;
		header("Location:index.php");
		exit();
	} else {
		echo "Error " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
} else {
	header("Location:viewjobs.php");
	exit();
}
?>