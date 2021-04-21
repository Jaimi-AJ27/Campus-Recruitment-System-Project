<?php
include 'connect.php';
$uploadfile=$_POST['uploadfile'];
$status=1;
$role="jobseeker";
require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{

$highestrow=$worksheet->getHighestRow();
for($row=1;$row<=$highestrow;$row++)
{

 $fname=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
$lname=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
 $gender=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
 
$dob=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
$email= $worksheet->getCellByColumnAndRow(4,$row)->getValue();
$mobile=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
$password  = $fname;
$pass=md5($password);
$sqli = "INSERT INTO tbl_login(username, password,role,Status) VALUES ('$email', '$pass','$role','$status')";
	mysqli_query($conn, $sqli);
	$n = mysqli_insert_id($conn);

	 $sql = "INSERT INTO user_reg(fname,lname,gender,dob,mobile,login_id,Status) VALUES ('$fname','$lname','$gender','$dob','$mobile','$n','$status')";
	 $insert=mysqli_query($conn,$sql);
}
}
	echo '<script type="text/javascript">alert("User Added Successfully");window.location=\'index.php\';</script>';

	?>