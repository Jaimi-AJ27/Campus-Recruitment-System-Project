<?php
session_start();
require_once("connect.php");


if(isset($_POST)) {

	// Escaoe special characters in string first.
	$companyname = mysqli_real_escape_string($conn, $_POST['cname']);
	$role="Company";
	$status="1";
	$headofficecity = mysqli_real_escape_string($conn, $_POST['address']);
		$state = mysqli_real_escape_string($conn, $_POST['state']);
	$website = mysqli_real_escape_string($conn, $_POST['website']);
	$contactno = mysqli_real_escape_string($conn, $_POST['mobno']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uname=$email;
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$pass = md5($password); 
	$sql_u = "SELECT * FROM tbl_login WHERE username='$email'";
	$res_u = mysqli_query($conn, $sql_u);
	if (mysqli_num_rows($res_u) > 0) {
  	echo '<script type="text/javascript">alert("Email id is already taken");window.location=\'company-register.php\';</script>';

  	}
	else
	{

	
	$sqli = "INSERT INTO tbl_login(username, password,role) VALUES ('$email', '$pass','$role')";
	mysqli_query($conn, $sqli);
	$n = mysqli_insert_id($conn);
    $sql = "INSERT INTO company_reg(login_id,company_name, address,state,website, mobile,email,Status) VALUES ('$n','$companyname', '$headofficecity','$state','$website', '$contactno','$email','$status')";

		if($conn->query($sql)===TRUE)
		{
		     $_SESSION['registerCompleted'] = true;
			header("Location:../index.html");
			exit();
		} 
		else 
		{
			echo "Error ".$sql."<br>".$conn->error;
		}
	} }
	else {
		$_SESSION['registerError'] = true;
		header("Location: register.php");
		exit();
	}

	$conn->close();
	?>