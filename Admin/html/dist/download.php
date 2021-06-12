<?php
include 'connect.php';
$id=$_POST['id'];
$select = "SELECT * FROM `placement` WHERE id='$id'";
$result = $conn->query($select);
if($result->num_rows > 0) {
while($row = $result->fetch_assoc())
 {
$pdf=  $row['paper'];   


 }}
 $path="uploads/$pdf";


?>

<iframe src="<?php echo $path; ?>" width="100%" height="700px">


</iframe>