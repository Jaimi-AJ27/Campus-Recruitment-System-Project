<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {

$sql="SELECT * FROM user_reg INNER JOIN tbl_login ON user_reg.login_id=tbl_login.login_id WHERE tbl_login.username ='$_SESSION[User]'";
 $result = $conn->query($sql);
 if($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$uid=$row['login_id'];
  }}           
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);

	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	
	$mobile = mysqli_real_escape_string($conn, $_POST['gender']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	

	$sql = "UPDATE user_reg SET fname='$fname', lname='$lname', mobile='$mobile', gender='$gender' , dob='$dob' WHERE login_id='$uid'";
	if($conn->query($sql) === TRUE) {
		header("Location:index.php");
		exit();
	} else {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	header("Location:updatepro.php");
	exit();
}