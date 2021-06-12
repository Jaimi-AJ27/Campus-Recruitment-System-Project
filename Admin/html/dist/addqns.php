<?php
include 'connect.php';
	if($_POST)
	{
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	
 $select = "SELECT id FROM `tbl_exam` where title='$title' ";
$result = $conn->query($select);
if($result->num_rows > 0) {
while($row = $result->fetch_assoc())
 {
 $id=$row['id'];
	}}
	$qn = mysqli_real_escape_string($conn, $_POST['qn']);
	$op1 = mysqli_real_escape_string($conn, $_POST['op1']);
	$op2= mysqli_real_escape_string($conn, $_POST['op2']);
	$op3 = mysqli_real_escape_string($conn, $_POST['op3']);
	$op4 = mysqli_real_escape_string($conn, $_POST['op4']);
	$ans= mysqli_real_escape_string($conn, $_POST['ans']);

	$status ='1';
	
	
	
	$sql = "INSERT INTO tbl_ques (id,qn,op1,op2,op3,op4,ans,status) VALUES ('$id','$qn', '$op1', '$op2','$op3', '$op4','$ans', '$status')";
	
    $result1 = $conn->query($sql);

     echo '<script type="text/javascript">alert("Added Successfully");window.location=\'managetest.php\';</script>';

	}

	
?>