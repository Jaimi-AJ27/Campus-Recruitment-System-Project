<?php
  session_start();
  
  require_once("connect.php");
  $jobid=$_POST['jid'];
  if(empty($_SESSION['Company'])) {
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
    <title>Company | Update Job</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<?php

include 'header.php';
?>
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
           
            <div class="page-content fade-in-up">
           
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Job</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
					  <?php 
		$sql="SELECT * FROM job_post where job_id='$jobid'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>

                    <div class="ibox-body">
                        <form class="form-horizontal" id="form-sample-1" method="post" novalidate="novalidate" action="update.php">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Job Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="job" value="<?php echo $row['job_title']; ?> ">
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Salary</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="salary" value="<?php echo $row['salary']; ?> ">
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text" name="description" value="<?php echo $row['description']; ?> "><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>
							                                    <input class="form-control" type="hidden" name="jobid" value="<?php echo $row['job_id']; ?> ">
                                
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="date" value="<?php echo $row['last_date']; ?> ">
                                </div>
                            </div>
                           
                           <?php
						   }}
						   ?>
                           
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               
            <!-- END PAGE CONTENT-->
           
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
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $("#form-sample-1").validate({
            rules: {
                job: {
                    minlength: 2,
                    required: !0
                },
                salary: {
                    required: !0,
                   
                },
                date: {
                    required: !0,
                    
                },
                number: {
                    required: !0,
                    number: !0
                },
                head: {
                    required: !0,
                    minlength: 3
                },
                max: {
                    required: !0,
                    maxlength: 4
                },
                password: {
                    required: !0
                },
                password_confirmation: {
                    required: !0,
                    equalTo: "#password"
                }
            },
            errorClass: "help-block error",
            highlight: function(e) {
                $(e).closest(".form-group.row").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group.row").removeClass("has-error")
            },
        });
    </script>
</body>

</html>