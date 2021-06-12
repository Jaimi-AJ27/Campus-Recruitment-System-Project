
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
					<?php echo "Welcome, Admin" ?>
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
