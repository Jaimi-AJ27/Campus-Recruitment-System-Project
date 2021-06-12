<?php
  session_start();
  
  require_once("connect.php");
  
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
    <title>Company | Update Profile</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head><?php

include 'header.php';
?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
           
            <div class="page-content fade-in-up">
           
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Profile</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
					  <?php 
		$sql="SELECT * FROM company_reg INNER JOIN tbl_login ON company_reg.login_id=tbl_login.login_id WHERE tbl_login.username ='$_SESSION[Company]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>

                    <div class="ibox-body">
                        <form class="form-horizontal" id="form-sample-1" method="post" novalidate="novalidate" action="updateprofile.php">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" value="<?php echo $row['company_name']; ?> ">
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Head Quarters</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="head" value="<?php echo $row['address']; ?> ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?> ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="url" value=" <?php echo $row['website']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mobile Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="number" value=" <?php echo $row['mobile']; ?>" >
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
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $("#form-sample-1").validate({
            rules: {
                name: {
                    minlength: 2,
                    required: !0
                },
                email: {
                    required: !0,
                   
                },
                url: {
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