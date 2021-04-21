<?php
session_start();
require_once("connect.php");
if(isset($_POST)) {
   
          
	$jobid = mysqli_real_escape_string($conn, $_POST['jobid']);
	$job = mysqli_real_escape_string($conn, $_POST['job']);

	$salary = mysqli_real_escape_string($conn, $_POST['salary']);
	$date= mysqli_real_escape_string($conn, $_POST['date']);
	
	echo "$jobid". "$job". "$salary". "$date";
	$sql = "UPDATE job_post SET job_title='$job', salary='$salary', last_date='$date' WHERE job_id='$jobid'";
	
	if($conn->query($sql) === TRUE) {
		header("Location:index.php");
		exit();
	} 
	else
	 {
		echo "Error ".$sql."<br>".$conn->error;
	}

	$conn->close();

} else {
	header("Location:updatejob.php");
	exit();
	
}
?>