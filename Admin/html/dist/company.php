<?php
  session_start();
  
  require_once("connect.php");
  
  if(empty($_SESSION['Adminuser'])) {
    header("Location: ../index.html");
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>View Company</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head><?php

include 'header.php';
?>

        <!-- END SIDEBAR-->
        
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title"></h1>
               
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Registered Companies</div>
							<form action="page-login.php" method="POST">
						<button class="btn btn-primary">Generate Report</button>
						</form>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
								<th>Sl.No</th>
                                    <th>Company Name</th>
                                    <th>Head Quarters</th>
                                    <th>State</th>
                                    <th>Website</th>
                                    <th>Email</th>
                                     <th>Mobile</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <tr>
                                   <?php

include 'connect.php';

?>						
              <?php
                $sql = "SELECT * FROM company_reg where Status=1";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
                    ?>
        <td><?php echo ++$i; ?> </td>
	  <td> <?php echo $row['company_name']; ?> </td>
	   <td> <?php echo $row['address'];?> </td>
       <td>  <?php echo $row['state']; ?></td>
	  
	  <td> <?php echo $row['website']; ?> </td>
	<td> <?php echo $row['email']; ?> </td>
	   <td> <?php echo $row['mobile']; ?> </td>

	   
	  

            
	    </tr>
              
			   <?php
		  
		  }}                     
       ?>                       
                            </tbody>
                        </table>
                    </div>
                </div>
                
            <!-- END PAGE CONTENT-->
           
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>