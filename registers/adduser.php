<?php
require_once("connect.php");
if(isset($_POST))
 {
    $fname =  mysqli_real_escape_string($conn, $_POST['fname']);
	$lname=  mysqli_real_escape_string ($conn,$_POST['lname']);
	$gender =mysqli_real_escape_string ($conn,$_POST['gender']);
	$role="jobseeker";
	$status="1";
	$date =   mysqli_real_escape_string ($conn,$_POST['dob']);
	$contactno = mysqli_real_escape_string ($conn, $_POST['mobno']);
	$email     = mysqli_real_escape_string ($conn, $_POST['email']);
	$password  = mysqli_real_escape_string ($conn, $_POST['password']);
	$pass=md5($password);
	$sql_u = "SELECT * FROM tbl_login WHERE username='$email'";
	$res_u = mysqli_query($conn, $sql_u);
	if (mysqli_num_rows($res_u) > 0) {
	
	
  echo '<script type="text/javascript">alert("Email is already taken");window.location:\'register.php\';</script>';

  	}
	else
	{
	$sqli = "INSERT INTO tbl_login(username, password,role) VALUES ('$email', '$pass','$role')";
	mysqli_query($conn, $sqli);
	$n = mysqli_insert_id($conn);
	 $sql = "INSERT INTO user_reg(fname,lname,gender,dob,mobile,login_id,Status) VALUES ('$fname','$lname','$gender','$date','$contactno','$n','$status')";
   
		if($conn->query($sql)===TRUE)
		{
			$_SESSION['registerCompleted'] = true;
			header("Location:education.php");
			exit();
		} 
		else 
		{
			echo "Error ".$sql."<br>".$conn->error;
		}
	  } }
	else {
		$_SESSION['registerError'] = true;
		header("Location:user-register.php");
		exit();
	}

	$conn->close();
	?>