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
    <title>ADMIN | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                     
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                       
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u1.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u2.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u3.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="./assets/img/users/u4.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
						<?php echo "Welcome, Admin"  ?>
                            <img src="./assets/img/admin-avatar.png" />
                            <span></span><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="pass.php"><i class="fa fa-user"></i>Password</a>
                    
                           
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">WELCOME
					
					
					
					
</div><small>ADMIN</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href=""><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Profile</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                           
                            <li>
                                <a href="pass.php">Change Password</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Manage</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="addjobseeker.php">Add Jobseekers</a>
                            </li>
                           <li>
                                <a href="addcompany.php">Add Company</a>
                            </li>
							<li>
                                <a href="manage_jobseeker.php">Manage Jobseekers</a>
                            </li>
                           <li>
                                <a href="manage_company.php">Manage Company</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">User Details</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            
                            <li>
                                <a href="datatables.php">View Candidates</a>
                            </li>
							<li>
                                <a href="company.php">View Company</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Manage Materials</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            
                            <li>
                                <a href="materials.php">Add Materials</a>
                            </li>
							<li>
                                <a href="material.php">View Materials</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Mail</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                           
                            <li>
                                <a href="mail_compose.php">Compose mail</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bell"></i>
                            <span class="nav-label">Notifications</span></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="sendnotify.php">Send Notifications</a>
                            </li>
                            <li>
                                <a href="viewnotify.php">View Notifications</a>
                            </li>
							</ul>
							</li>
							 
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-book"></i>
                            <span class="nav-label">Mock Test</span></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="addtest.php">Add Test</a>
                            </li>
                            <li>
                                <a href="managetest.php">Mange Test</a>
                            </li>
                          </ul>
							</li>
                        
                     <li>
                        <a href="logout.php"><i class="sidebar-item-icon fa fa-power-off"></i>
                            <span class="nav-label">Logout</span>
                        </a>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-8">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
							
                                <h2 class="m-b-5 font-strong"><?php $sql = "SELECT * FROM user_reg where Status=1";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
				   $i++;
				   
                   
					}}
					echo $i;
					?></h2>
                                <div class="m-b-5">TOTAL CANDIDATES</div><i class="ti-user widget-stat-icon"></i>
										
               
					
				
					
					
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php $sql = "SELECT * FROM job_post ";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
				  ++$i;
				   
                   
					}}
					echo $i;
					?></h2>
                                <div class="m-b-5">TOTAL JOBS</div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php $sql = "SELECT * FROM company_reg where Status=1";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
				   $i++;
				   
                   
					}}
					echo $i;
					?>
					</h2>
                                <div class="m-b-5">TOTAL COMPANIES</div><i class="fa fa-money widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">TOTAL PLACEMENTS</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div>
                                        <h3 class="m-0"></h3>
                                        <div></div>
                                    </div>
                                    <div class="d-inline-flex">
                                        <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                            
                                        </div>
                                        <div class="px-3">
                                            <div class="text-muted"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <canvas  style="height:450px; background-image:url(images/jobs.jpg);background-repeat:no-repeat; background-size:cover"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox">
                         
                            <div class="ibox-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <canvas style="height:427px; width:300px; background-image:url(images/companys.jpg);background-repeat:no-repeat; background-size:cover""></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div>
                                        <h3 class="m-0"></h3>
                                        <div></div>
                                    </div>
                                    <div class="d-inline-flex">
                                        <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                            
                                        </div>
                                        <div class="px-3">
                                            <div class="text-muted"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <canvas  style="height:500px; background-image:url(images/company.jpg);background-repeat:no-repeat; background-size:cover"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                
    <!-- BEGIN THEME CONFIG PANEL-->
    
                
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
    <script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

</html>