<?php
include 'connect.php';
$uploadfile=$_POST['uploadfile'];
$status=1;
$role="Company";
require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{

$highestrow=$worksheet->getHighestRow();
for($row=1;$row<=$highestrow;$row++)
{


$cname=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
$head=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
 $state=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
$website=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
$email=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
$mobile=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
$password  =$cname;
$pass=md5($password);

$sqli = "INSERT INTO tbl_login(username, password,role,Status) VALUES ('$email', '$pass','$role','$status')";
	mysqli_query($conn, $sqli);
	$n = mysqli_insert_id($conn);

	 $sql = "INSERT INTO company_reg(company_name,address,state,website,mobile,email,Status,login_id) VALUES ('$cname','$head','$state','$website','$mobile','$email','$status','$n')";
	 mysqli_query($conn,$sql);
}
}
	echo '<script type="text/javascript">alert("Company Added Successfully");window.location=\'index.php\';</script>';


	?>