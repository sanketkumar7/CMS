<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Pay Salary</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/feather/feather.css">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icons/flags/flags.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toatr.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>

    <?php
    $Nodriverfound = $this->session->flashdata('Nodriverfound');
    ?>
    <?php if (isset($Nodriverfound)) : ?>
        <div id="Nodriverfound" class="alert alert-danger text-center alert-fixed" role="alert">
            <strong><?php echo $Nodriverfound; ?></strong>
        </div>
    <?php endif; ?>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="<?php echo base_url() ?>assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <!-- Search Bar -->
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <!-- /Search Bar -->

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">
                <li class="nav-item dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url() ?>assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                    </div>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url() ?>assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url() ?>assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url() ?>assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url() ?>assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url() ?>assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="<?php echo base_url() ?>assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <div class="user-img">
                            <img class="rounded-circle" src="<?php echo base_url() ?>assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?php echo base_url() ?>assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="inbox.html">Inbox</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.html">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.html">Student List</a></li>
                                <li><a href="student-details.html">Student View</a></li>
                                <li><a href="add-student.html">Student Add</a></li>
                                <li><a href="edit-student.html">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.html">Teacher List</a></li>
                                <li><a href="teacher-details.html">Teacher View</a></li>
                                <li><a href="add-teacher.html">Teacher Add</a></li>
                                <li><a href="edit-teacher.html">Teacher Edit</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments.html">Department List</a></li>
                                <li><a href="add-department.html">Department Add</a></li>
                                <li><a href="edit-department.html">Department Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.html">Subject List</a></li>
                                <li><a href="add-subject.html">Subject Add</a></li>
                                <li><a href="edit-subject.html">Subject Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.html">Invoices List</a></li>
                                <li><a href="invoice-grid.html">Invoices Grid</a></li>
                                <li><a href="add-invoice.html">Add Invoices</a></li>
                                <li><a href="edit-invoice.html">Edit Invoices</a></li>
                                <li><a href="view-invoice.html">Invoices Details</a></li>
                                <li><a href="invoices-settings.html">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections.html">Fees Collection</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="salary.html">Salary</a></li>
                                <li><a href="add-fees-collection.html">Add Fees</a></li>
                                <li><a href="add-expenses.html">Add Expenses</a></li>
                                <li><a href="add-salary.html">Add Salary</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                        </li>
                        <li>
                            <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog.html">All Blogs</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="error-404.html">Error Page</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                        </li>
                        <li>
                            <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                        </li> -->
                        <li class=""> 
							<a href="<?php echo base_url()?>index.php/StaffController/AdminDashboard"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
							</li>
						<li class="">  
								<a href="<?php echo base_url()?>index.php/TransportController/index"><i class="fas fa-bus"></i> <span>Transport</span></a>
							</li>
							<li class="active">
                            <a href="<?php echo base_url()?>index.php/StaffController/AdminStaffDashboard"><i class="fa-solid fa-chalkboard-user"></i></i> <span>Staff</span></a>
                        </li>
						<li class="">
						<a href="<?php echo base_url()?>index.php/StaffController/Logout"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Salary</h3>
								<ul class="breadcrumb">
									<li><a href="AdminStaffDashboard">Staff</a></li>
									<li><a href="AdminSalaryDashboard">/ Salary</a></li>
									<li class="active">/ Pay Salary</li>
								</ul>
							</div>
						</div>
					</div>
                <div class="student-group-form">
                    <form action="PayStaffSalary" method="post">
                        <div class="row">
                            <input class="d-none" name="status">
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="staffid" id="staffid" placeholder="Enter Staff Id" oninput="fetchstaffdata()">
                                    <p id="errormessage" class="text-danger mt-1 text-center" style="display:none; font-size:0.75rem;"></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="staffname" placeholder="Staff Name" id="staffname" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="month" id="month" placeholder="Month eg. January">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 d-none">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="date" placeholder="Enter Month ">
                                </div>
                            </div>
                            <div class="col-lg-3 text-end">
                                <div class="search-student-btn">
                                    <button type="btn" class="btn btn-primary" id="CalculateSalarybutton">Calculate <i class="fa-solid fa-indian-rupee-sign"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" readonly>
                                    <p id="paidmessage" class="text-danger text-center mt-1" style="display:none;font-size:0.75rem;">Already Paid</p>
                                    <p id="nodatafoundmessaeg" class="text-danger text-center mt-1" style="display:none;font-size:0.75rem;">No Data Found</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary" id="paybutton">Pay </button>
                                    <button class="btn btn-primary" id="Clearbutton" onclick="cleardata(event)">Clear </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /Page Header -->
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery --> <!-- Footer -->

    <script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
         document.getElementById('paybutton').disabled = true;
        function fetchstaffdata() {
            document.getElementById('paybutton').disabled = true;
            var staffid = document.getElementById('staffid').value.trim();
            if (staffid.length >= 5) {
                fetch('FetchStaffWithId?staffid=' + staffid)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.message == "No Staff Found") {
                            document.getElementById('errormessage').style.display = 'block';
                            document.getElementById('errormessage').innerText = "No Staff found";
                            document.getElementById('staffname').value="";
                            document.getElementById('month').setAttribute('readonly',true);
                            document.getElementById('CalculateSalarybutton').setAttribute('disabled',true);
                        } else {
                            document.getElementById('errormessage').style.display = 'none';
                            document.getElementById('staffname').value = data.staffname;
                            document.getElementById('salary').value="";
                            document.getElementById('paidmessage').style.display="none";
                            document.getElementById('nodatafoundmessaeg').style.display="none";
                            document.getElementById('CalculateSalarybutton').removeAttribute('disabled');
                            document.getElementById('month').removeAttribute('readonly');
                        }
                    })
                    .catch(error => {
                        console.error('Fetch error:', error);
                    });
            }
            else if(staffid=="")
            {
                document.getElementById('errormessage').style.display='none';
                document.getElementById('staffname').value="";
            }
            else{
                document.getElementById('paybutton').disabled=true;
                document.getElementById('staffname').value="";

            }
        }

        function calculatesalary() {
            var staffid = document.getElementById('staffid').value;
            var month = document.getElementById('month').value;
            const url = `CalculateStaffSalary?staffid=${staffid}&month=${month}`;
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.message == "Salary Already Paid For the Month") {
                       document.getElementById('paidmessage').style.display='block';
                       document.getElementById('nodatafoundmessaeg').style.display='none';

                    } else {
                        if (data.count != 0) {
                            var salary = 800 * data.count;
                            document.getElementById('salary').value = salary;
                            document.getElementById('paybutton').disabled = false;
                            document.getElementById('month').setAttribute('readonly',true);
                            document.getElementById('nodatafoundmessaeg').style.display='none';
                        } else {
                            document.getElementById('salary').value = 0;
                            document.getElementById('nodatafoundmessaeg').style.display='block';
                            document.getElementById('paidmessage').style.display='none';
                            document.getElementById('paybutton').disabled=true;
                        }
                    }

                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
        function cleardata(event)
        {
            event.preventDefault();
            document.getElementById('staffid').value='';
            document.getElementById('staffname').value='';
            document.getElementById('month').value='';
            document.getElementById('salary').value='';
            document.getElementById('errormessage').style.display='none';
            document.getElementById('paidmessage').style.display='none'
            document.getElementById('paybutton').disabled=true;
            document.getElementById('month').removeAttribute('readonly');
            document.getElementById('nodatafoundmessaeg').style.display='none';
        }
        document.getElementById('CalculateSalarybutton').addEventListener('click', function(event) {
            event.preventDefault(); 
            calculatesalary(); 
        });
    </script>

</body>

</html>