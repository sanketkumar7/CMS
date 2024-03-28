<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Edit vehicle Data</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/feather/feather.css">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icons/flags/flags.css">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

    <!-- Select CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/twitter-bootstrap-wizard/form-wizard.css">

</head>

<body>
<?php
	$student_count = $this->session->userdata('student_count');
	?>

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
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>

                            <ul>
                                <li><a href="AddStudentPage">Student Add</a></li>
                                <li><a href="ShowStudents">Student List</a></li>
                                <li><a href="ShowHalfFilledFormList">Incomplete Forms</a></li>
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
                        </li>
                        <li class="submenu">
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
                        <a href="<?php echo base_url()?>StaffController/AdminDashboard"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
							</li>
						<li class="active">  
								<a href="<?php echo base_url()?>TransportController/index"><i class="fas fa-bus"></i> <span>Transport</span></a>
							</li>
							<li class="">
                            <a href="<?php echo base_url()?>StaffController/AdminStaffDashboard"><i class="fa-solid fa-chalkboard-user"></i></i> <span>Staff</span></a>
                        </li>
                        <li class="">
                        <a href="<?php echo base_url()?>StaffController/Logout"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title" id="title">Edit Vehicle</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Transport">Transport </a></li>
                                    <li class=""><a href="VehicleList">/Vehicle</a></li>
                                    <li class="active">/Edit Vehicle</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane active" id="VehicleDetails">
                                            <div class="mb-4">
                                                <h5>Vehicle Details</h5>
                                            </div>
                                            <form action="UpdateVehicle" method="post" enctype="multipart/form-data" id="UpdateVehicleForm">
                                                <div class="row">
                                                    <input class="d-none" name="id" value="<?php echo $vehicle->id; ?>" >
                                                    <?php if (isset($student_count)) : ?>
                                                        <input class="d-none" id="studentscount" value="<?php echo count($count); ?>">
	
	<?php endif; ?>
                                                    <input type="text" name="availablecapacity" id="availablecapacity" class="d-none" value="<?php echo $vehicle->availablecapacity; ?>">
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Serial No.<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control" id="vehicleserialnumber" name="vehicleserialnumber" value="<?php echo $vehicle->vehicleserialnumber; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4" style="visibility:hidden;">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Serial No.<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4" style="visibility:hidden;">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Serial No.<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Reg. No.<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Vehicle Reg No." id="vehicleregnumber" name="vehicleregnumber" value="<?php echo $vehicle->vehicleregnumber; ?>">
                                                            <div class="invalid-feedback" style="display:none;" id="vehicleregnumber_errormessage">
                                                                Vehicle Registered Number is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Name<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Vehicle Name" id="vehiclename" name="vehiclename" value="<?php echo $vehicle->vehiclename; ?>">
                                                            <div class="invalid-feedback" style="display:none;" id="vehiclename_errormessage">
                                                                Vehicle Name is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Vehicle Company<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Vehicle company Name" id="vehiclecompany" name="vehiclecompany" value="<?php echo $vehicle->vehiclecompany; ?>">
                                                            <div class="invalid-feedback" style="display:none;" id="vehiclecompany_errormessage">
                                                                Vehicle Company is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Select Vehicle Type <span class="login-danger">*</span></label>
                                                            <select class="form-select" name="vehicletype" id="vehicletype" style="height:45px;font-size:15px !important;">
                                                                <option value="NA">Please Vehicle Type </option>
                                                                <option <?php echo ($vehicle->vehicletype == 'Bus') ? 'selected' : ''; ?>>Bus</option>
                                                                <option <?php echo ($vehicle->vehicletype == 'Mini Bus') ? 'selected' : ''; ?>>Mini Bus</option>
                                                                <option <?php echo ($vehicle->vehicletype == 'Van') ? 'selected' : ''; ?>>Van</option>
                                                            </select>
                                                            <div class="invalid-feedback" style="display:none;" id="vehicletype_errormessage">
                                                                Vehicle Type is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Seating Capacity<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Total Seating Capacity" id="totalseatingcapacity" name="totalseatingcapacity" value="<?php echo $vehicle->totalseatingcapacity; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '');checkcapacity();">
                                                            <div class="invalid-feedback" style="display:none;" id="totalseatingcapacity_errormessage">
                                                                Vehicle Capacity is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Select Fuel Type<span class="login-danger">*</span></label>
                                                            <select class="form-select" name="fueltype" id="fueltype" style="height:45px;font-size:15px !important;">
                                                                <option value="NA">Please Fuel Type </option>
                                                                <option <?php echo ($vehicle->fueltype == 'Petrol') ? 'selected' : ''; ?>>Petrol</option>
                                                                <option <?php echo ($vehicle->fueltype == 'Oil') ? 'selected' : ''; ?>>Oil</option>
                                                                <option <?php echo ($vehicle->fueltype == 'CNG') ? 'selected' : ''; ?>>CNG</option>
                                                            </select>
                                                            <div class="invalid-feedback" style="display:none;" id="fueltype_errormessage">
                                                                Vehicle Fuel Type is Required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-5">
                                                    <div class="form-group students-up-files">
                                                        <label>Vehicle Image</label><span class="login-danger">*</span><span class="fw-bold" style="font-size:0.8rem;"> (File name should not contain any special characters)</span>
                                                        <p class="text-danger" style="display:none;font-size:0.75rem;" id="specialcharactermessage">File Name Contains Special Chracters</p>

                                                        <div class="uplod">
                                                            <label class="file-upload image-upbtn mb-0">
                                                                Update image <input type="file" accept=".jpeg, .jpg, .png" name="busimages" id="busimages" />

                                                            </label>
                                                            <span><?php echo $vehicle->busimages; ?></span>
                                                        </div>
                                                        <div class="invalid-feedback" style="display:none;" id="busimages_errormessage">
                                                            Vehicle image is Required.
                                                        </div>
                                                        <img src="<?php echo base_url() . 'uploads/' . $vehicle->busimages; ?>" width="150" height="150" readonly>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="mt-5">  <button type="submit" class="btn btn-primary" id="updatebutton">Update <i class="fa-solid fa-bus"></i></button>
                                                    
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>

    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/twitter-bootstrap-wizard/prettify.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/twitter-bootstrap-wizard/form-wizard.js"></script>
    <script>
          document.getElementById('busimages').addEventListener('change', function() {
        var filename = this.value.split('\\').pop(); 
        if (/[^a-zA-Z0-9\s.()]/.test(filename)) {
            document.getElementById('updatebutton').disabled = true; 
            document.getElementById('specialcharactermessage').style.display='block';
        } else {
            document.getElementById('updatebutton').disabled = false; 
			document.getElementById('specialcharactermessage').style.display='none';
        }
    });
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('UpdateVehicleForm').addEventListener('submit', function(event) {
                var fieldIds = ['vehicleregnumber', 'vehiclename', 'vehiclecompany', 'vehicletype', 'fueltype', 'totalseatingcapacity'];

                // Loop through each field ID
                for (var i = 0; i < fieldIds.length; i++) {
                    validateField(fieldIds[i], event);
                }
            });
        });

        function validateField(fieldId, event) {
            var field = document.getElementById(fieldId);
            if (fieldId == 'insuranceexpirydate') {
                console.log('treu');
                field.classList.add('is-invalid');
                document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
                document.getElementById(fieldId + '_errormessage').style.display = 'block';
                event.preventDefault();
            }
            if (field.tagName.toLowerCase() === 'select') {
                validateSelect(field, event);
            } else {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    document.getElementById(fieldId + '_errormessage').style.display = 'block';
                    event.preventDefault();
                }
            }
        }

        function validateSelect(selectField, event) {
            // Check if the selected value contains "Please Select"
            if (selectField.value == "NA") {
                selectField.classList.remove('select');
                selectField.classList.add('is-invalid'); // Add 'is-invalid' class
                document.getElementById(selectField.id + '_errormessage').style.display = 'block';
                event.preventDefault();
            } else {
                selectField.classList.remove('is-invalid'); // Remove 'is-invalid' class
                document.getElementById(selectField.id + '_errormessage').style.display = 'none';
            }
        }
        function checkcapacity()
        {
            var totalcapacity=document.getElementById('totalseatingcapacity').value;
            var minimumcapacity=document.getElementById('studentscount').value;
            if(minimumcapacity)
            {
   
                if(totalcapacity<minimumcapacity)
            {
                document.getElementById('totalseatingcapacity').value=minimumcapacity;
            }

            }
            else{
                return;
            }
        
        }
    </script>
</body>

</html>