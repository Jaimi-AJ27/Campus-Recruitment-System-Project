<body class="fixed-navbar" >
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
                    <li>                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 New</strong> Messages</span>
                                    <a class="pull-right" href="mailbox.html">view all</a>
                                </div>
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
						 <span>Welcome, <?php
						
						$company=$_SESSION['Company'];
						
						$sql="select * from company_reg where email='$company'";
						$result = $conn->query($sql);
                if($result->num_rows > 0) {
                  
                  while($row = $result->fetch_assoc()) {
                    $com=$row['company_name'];
					$regid=$row['reg_id'];
					
					echo "$com";
					
					}}
					?> &nbsp;</span>
                            <img src="./assets/img/com-avatar.png" />
                           <i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
						
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i>Profile</a>
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
                        <img src="./assets/img/com-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"><?php
						
						$company=$_SESSION['Company'];
						
						$sql="select * from company_reg where email='$company'";
						$result = $conn->query($sql);
                if($result->num_rows > 0) {
                  
                  while($row = $result->fetch_assoc()) {
                    $com=$row['company_name'];
					$regid=$row['reg_id'];
					$email=$row['email'];
					$website=$row['website'];
					$mobile=$row['mobile'];
					$state=$row['state'];
					$head=$row['address'];
					
					echo "$com";
					
					}}
					?>
					
					
					
					
</div><small>Company</small></div>
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
                                <a href="profile.php">View Profile</a>
                            </li>
                            <li>
                                <a href="updatepro.php">Update Profile</a>
                            </li>
                            <li>
                                <a href="pass.php">Change Password</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Jobs</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="addjobs.php">Add Jobs</a>
                            </li>
                            <li>
                                <a href="manage_jobs.php">Manage Jobs</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Candidates</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            
                            <li>
                                <a href="datatables.php">View Candidates</a>
                            </li>
							<li>
                                <a href="appl.php">View Job Applications</a>
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
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Notifications</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="sendnotify.php">Send Notifications</a>
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

