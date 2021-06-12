<?php
// Database Connection file
include('connect.php');
?>

<?php

// Genrating Execel  filess
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-Report.csv");
header("Pragma: no-cache");
header("Expires: 0");
} ?>
