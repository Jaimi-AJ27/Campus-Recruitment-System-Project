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
$course=$worksheet->getCellByColumnAndRow(6,$row)->getValue();
$percent=$worksheet->getCellByColumnAndRow(7,$row)->getValue();
$passout=$worksheet->getCellByColumnAndRow(8,$row)->getValue();
$plustwo=$worksheet->getCellByColumnAndRow(9,$row)->getValue();
$pass=$worksheet->getCellByColumnAndRow(10,$row)->getValue();
$school=$worksheet->getCellByColumnAndRow(11,$row)->getValue();
$tenth=$worksheet->getCellByColumnAndRow(12,$row)->getValue();
$passs=$worksheet->getCellByColumnAndRow(13,$row)->getValue();
$schl=$worksheet->getCellByColumnAndRow(14,$row)->getValue();
$college=$worksheet->getCellByColumnAndRow(15,$row)->getValue();
$project=$worksheet->getCellByColumnAndRow(16,$row)->getValue();
$address=$worksheet->getCellByColumnAndRow(17,$row)->getValue();
$city=$worksheet->getCellByColumnAndRow(18,$row)->getValue();
$password  = $fname;
$pass=md5($password);
$sqli = "INSERT INTO tbl_login(username, password,role,Status) VALUES ('$email', '$pass','$role','$status')";
	mysqli_query($conn, $sqli);
	$n = mysqli_insert_id($conn);

	 $sql = "INSERT INTO user_reg(fname,lname,gender,dob,mobile,login_id,Status) VALUES ('$fname','$lname','$gender','$dob','$mobile','$n','$status')";
	mysqli_query($conn,$sql);
	$user = mysqli_insert_id($conn);
	 
	 $sq = "INSERT INTO tbl_address(user_id,address,city,Status) VALUES ('$user','$address','$city','$status')";
	 mysqli_query($conn,$sq);
	  
	 $s = "INSERT INTO tbl_project(user_id,project) VALUES ('$user','$project')";
	 mysqli_query($conn,$s);
	 
	 $sa = "INSERT INTO tbl_education(user_id,course,percent,passout,plustwo,pass,school,tenth,passs,schl,college) VALUES ('$user','$course','$percent','$passout','$plustwo','$pass','$school','$tenth','$passs','$schl','$college')";
	 mysqli_query($conn,$sa);
}
}
	echo '<script type="text/javascript">alert("User Added Successfully");window.location=\'index.php\';</script>';

	?>