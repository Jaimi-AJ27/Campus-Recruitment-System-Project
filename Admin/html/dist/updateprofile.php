<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {

$sql="SELECT * FROM company_reg INNER JOIN tbl_login ON company_reg.login_id=tbl_login.login_id WHERE tbl_login.username ='$_SESSION[Company]'";
 $result = $conn->query($sql);
 if($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$uid=$row['login_id'];
  }}           
	$company = mysqli_real_escape_string($conn, $_POST['name']);
	$head = mysqli_real_escape_string($conn, $_POST['head']);

	$mobile = mysqli_real_escape_string($conn, $_POST['number']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);
$website= mysqli_real_escape_string($conn, $_POST['url']);
	$sql = "UPDATE company_reg SET company_name='$company', address='$head', mobile='$mobile', email='$email' , website='$website' WHERE login_id='$uid'";
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