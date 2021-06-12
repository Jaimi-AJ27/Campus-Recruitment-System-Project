<?php
include 'connect.php';
	if($_POST)
	{
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$duration = mysqli_real_escape_string($conn, $_POST['duration']);
	$total = mysqli_real_escape_string($conn, $_POST['total']);
	$marks= mysqli_real_escape_string($conn, $_POST['marks']);

	$status ='1';
	
	
	
	$sql = "INSERT INTO tbl_exam (title, duration,total,marks,status) VALUES ('$title','$duration', '$total', '$marks', '$status')";
	
    $result1 = $conn->query($sql);

     echo '<script type="text/javascript">alert("Added Successfully");window.location=\'addtest.php\';</script>';

	}

	
?>