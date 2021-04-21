<?php
// Database Connection file
include('connect.php');
?>
<table border="1">
<thead>
<tr>
<th>Sr.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Phone Number</th>
</tr>
</thead>
<?php
// File name
$filename="EmpData";
// Fetching data from data base
$query=mysqli_query($conn,"select * from user_reg ");
$cnt=1;
while ($row=mysqli_fetch_array($query)) {
?>
            <tr>
                <td><?php echo $cnt;  ?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['lname'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['mobile'];?></td>
            </tr>
<?php
$cnt++;
// Genrating Execel  filess
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
header("Pragma: no-cache");
header("Expires: 0");
} ?>
</table>