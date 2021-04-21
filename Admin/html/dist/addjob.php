<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
	$jobtitle = mysqli_real_escape_string($conn, $_POST['job']);
	$category =  $_POST['category'];
	$status="1";
	$salary = mysqli_real_escape_string($conn, $_POST['salary']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$email=$_SESSION['Company'];
	$sqli = "SELECT reg_id FROM company_reg where email='$email' ";
                 $result1 = $conn->query($sqli);
	if($result1->num_rows > 0)
	 {
     while($row = $result1->fetch_assoc())
	  {
	 $cid= $row['reg_id']; 
	 }
	 }
	$query="SELECT category_id from category where name='$category'";	
	$result2 = $conn->query($query);
	if($result2->num_rows > 0)
	 {
     while($row = $result2->fetch_assoc())
	  {
	 $category= $row['category_id']; 
	 }
	 }	
	 
	$sql = "INSERT INTO job_post(reg_id,category_id, job_title, salary, last_date,Status) VALUES ('$cid','$category', '$jobtitle', '$salary', '$date','$status')";
	if($conn->query($sql)===TRUE) {
		$_SESSION['jobPostSuccess'] = true;
		header("Location:index.php");
		exit();
	} else {
		echo "Error " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
} else {
	header("Location:addjobs.php");
	exit();
}
?>