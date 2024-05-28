<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>General Proficiency</title>

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


    <script>
	document.addEventListener('DOMContentLoaded', function() {
		var SubjectSubmitSuccess = document.getElementById('toast-container');
		
		if (SubjectSubmitSuccess) {
			SubjectSubmitSuccess.style.display = 'block';
			setTimeout(function() {
				SubjectSubmitSuccess.style.display = 'none';
			}, 3000);
		} 
		else if (SubjectDeleteSuccess) {
			SubjectDeleteSuccess.style.display = 'block';
			setTimeout(function() {
				SubjectDeleteSuccess.style.display = 'none';
			}, 3000);
		} 
	});
</script>

</head>

<body>
    <div class="modal fade contentmodal show" id="deleteModal" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="delete-wrap text-center">
                        <div class="del-icon"><i class="feather-x-circle"></i></div>
                        <h2>Sure you want to Cancel</h2>
                        <div class="submit-section">
                            <a href="" class="btn btn-success me-2" id="cancelsubjectbutton">Yes</a>
                            <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php
            $SubjectSubmitSuccess = $this->session->flashdata('SubjectSubmitSuccess');
            $SubjectDeleteSuccess = $this->session->flashdata('SubjectDeleteSuccess');
            $UploadSuccess = $this->session->flashdata('UploadSuccess');
            ?>
	<?php if (isset($SubjectSubmitSuccess)) : ?> 
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Subject Submitted Successfully</div>
			</div>
		</div>
    <?php endif; ?>
	<?php if (isset($SubjectDeleteSuccess)) : ?> 
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Subject Cancelled Successfully</div>
			</div>
		</div>
    <?php endif; ?>
	<?php if (isset($UploadSuccess)) : ?> 
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Subject Cancelled Successfully</div>
			</div>
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
                        <li class="menu-title">
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
                        </li>
                        <li class="active">
                            <a href="Transport"><i class="fas fa-bus"></i> <span>Transport</span></a>
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
                            <h3 class="page-title text-center">General Proficiency</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                            <li class="nav-item border-5"><a class="nav-link active" href="#solid-justified-tab1" data-bs-toggle="tab">Student General Proficiency Course Entry</a></li>
                                            <li class="nav-item border-5"><a class="nav-link" href="#solid-justified-tab2" data-bs-toggle="tab">Student General Proficiency Courses History</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-justified-tab1">
                                                <form action="subjectselectrequest" method="post" enctype="multipart/form-data">
                                                    <input type="text" class="d-none" name="studentid">
                                                    <input type="text" class="d-none" name="semester">
                                                    <input type="text" class="d-none" name="status">
                                                    <input type="text" class="d-none" name="requestdate">
                                                    <input type="text" class="d-none" name="studentname">
                                                    <input type="text" class="d-none" name="requestid">
                                                    <div class="row mt-5">
                                                        <div class="col-sm-6">
                                                            <div class="form-group local-forms">
                                                                <label>Select Course Type<span class="login-danger">*</span></label>
                                                                <select class="form-select" style="height:45px;font-size:15px !important;" name="gpcoursetype" id="gpcoursetype">
                                                                    <option value="NA">Select Course Type</option>
                                                                    <option>Online Proficiency Courses</option>
                                                                    <option>Proficiency Courses Under DSW</option>
                                                                    <option>Certification Course on Social and Emotional Learning by UNESCO MGIEP and Life University</option>
                                                                </select>
                                                                <div class="invalid-feedback" style="display:none;" id="nationality_errormessage">
                                                                    Course Type is Required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group local-forms">
                                                                <label>Select Course<span class="login-danger">*</span></label>
                                                                <select class="form-select" style="height:45px;font-size:15px !important;display:none;" id="OnlinePeoficiencyCoursesSelect">
                                                                    <option value="NA">Please Select Course</option>
                                                                    <option>21GPB002-Preparing and Delivering Presentations</option>
                                                                    <option>21GPB003-Foundations of Human Communication</option>
                                                                    <option>21GPB004-Interpersonal Communication</option>
                                                                    <option>21GPB005-Time and Stress Management</option>
                                                                    <option>21GPB006-Crisis Communication</option>
                                                                    <option>21GPB007-Public Speaking for Sales</option>
                                                                    <option>21GPB008-Writing Grant Proposals</option>
                                                                    <option>21GPB009-Bitcoin for Everybody</option>
                                                                    <option>21GPB010-Organizational Culture, Diversity, and Ethics</option>
                                                                </select>
                                                                <select class="form-select" style="height:45px;font-size:15px !important;display:none;" id="DSWCoursesselect">
                                                                    <option value="NA">Please Select Course</option>
                                                                    <option>21GPC Yoga & Meditation-II</option>
                                                                    <option>21GPC Bhangra-I
                                                                    </option>
                                                                    <option>21GPC Classical Dance-I
                                                                    </option>
                                                                </select>
                                                                <select class="form-select" style="height:45px;font-size:15px !important;display:block;" id="nocoursetypeselect">
                                                                    <option value="NA">Please Select Course</option>

                                                                </select>
                                                                <div class="invalid-feedback" style="display:none;" id="nationality_errormessage">
                                                                    Course is Required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if ($coursestatus != null || !empty($coursestatus)) : ?>
                                                            <div class="col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <!-- <label>Select Course<span class="login-danger">*</span></label> -->
                                                                    <button class="btn btn-primary" disabled>Submit</button>
                                                                </div>
                                                            </div>

                                                        <?php else : ?>
                                                            <div class="col-sm-6">
                                                                <div class="form-group local-forms">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <button class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="solid-justified-tab2">
                                                <div class="row mt-5">
                                                    <div class="col-sm-12 mx-auto">
                                                        <div class="form-group local-forms">
                                                            <label class="ms-2">Select Status<span class="login-danger">*</span></label>
                                                            <div class="row mx-auto">
                                                                <div class="col-lg-4">
                                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="status" onchange="filterTable()">
                                                                        <option value="NA">Select Status</option>
                                                                        <option>All</option>
                                                                        <option>Complete</option>
                                                                        <option>Pending</option>
                                                                        <option>Cancelled</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <button class="btn btn-primary">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                                        <thead class="student-thread">
                                                            <tr>
                                                                <th class="text-center">Request No.</th>
                                                                <th class="text-center">Student Name</th>
                                                                <th class="text-center">Semester</th>
                                                                <th class="text-center">Course type</th>
                                                                <th class="text-center">Course Name</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Request Date</th>
                                                                <th class="text-center">Document Update</th>
                                                                <th class="text-center">Submit Document</th>
                                                                <th class="text-center">Document View</th>
                                                                <th class="text-center">Cancel Request</th>
                                                                <th class="text-center">Cancel Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tableBody">
                                                            <?php $i = 0;foreach ($gpcoursehistory as $data) { ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo ++$i; ?></td>
                                                                    <td class="text-center"><?php echo $data->studentname; ?></td>
                                                                    <td class="text-center"><?php echo $data->semester; ?></td>
                                                                    <td class="text-center"><?php echo $data->gpcoursetype; ?></td>
                                                                    <td class="text-center"><?php echo $data->gpcourse; ?></td>
                                                                    <td class="text-center status"><?php echo $data->status; ?></td>
                                                                    <td class="text-center"><?php echo $data->requestdate; ?></td>
                                                                    <form action="SaveUploadedCertificate" method="post" enctype="multipart/form-data">
                                                                        <?php if ($data->preferencelockedstatus == "Locked" && $data->documentuploadstatus == "Not Uploaded" && $data->status != "Cancelled" && $data->cancelrequest != "Pending") : ?>
                                                                            <td class="text-center">
                                                                                <div class="form-group students-up-files">
                                                                                    <label style="visibility:hidden;"></label>
                                                                                    <div class="uplod">
                                                                                        <label class="file-upload image-upbtn mb-0 bg-primary border-0">
                                                                                            Choose File <input type="file" name="document" id="document" onchange="uploadFile(this.files[0])">
                                                                                        </label>
                                                                                        <p id="filename" style="display:none;"></p>
                                                                                        <?php if ($data->documentverificationstatus == "Rejected") { ?>
                                                                                            <p id="uploadagain" class="text-danger">! Please upload again</p>
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                        <?php else : ?>
                                                                            <td class="text-center">
                                                                                <button class="btn btn-sm btn-primary" disabled>Upload Document</button>
                                                                            </td>
                                                                        <?php endif; ?>
                                                                        <td class="text-center"><button type="submit" class="rounded-1" disabled id="uploadcertificatebutton">Submit</button></td>
                                                                    </form>
                                                                    <?php if ($data->document != "NA" || $data->documentuploadstatus = "Uploaded" && $data->documentuploadstatus!="Not Uploaded") : ?>
                                                                        <td class="text-center">
                                                                            <button class="btn btn-sm btn-primary" onclick="previewDocument('<?php echo base_url() ?>uploads/<?php echo $data->document; ?>')">View</button>
                                                                        </td>
                                                                    <?php else : ?>
                                                                        <td class="text-center">
                                                                            <button class="btn btn-sm btn-primary" disabled>View</button>
                                                                        </td>
                                                                    <?php endif; ?>
                                                                    <?php if ($data->cancelrequest == "NA" || $data->cancelrequest == "" && $data->documentverificationstatus != "Approved") : ?>
                                                                        <td class="text-center"><button href="MakeCancelRequest?studentid=<?php echo $data->studentid; ?>" class="btn btn-sm btn-primary text-white" onclick="deleteModal('<?php echo $data->studentid; ?>')" data-studentid="<?php echo $data->studentid; ?>">cancel</button></td>
                                                                    <?php elseif ($data->cancelrequest == "Pending") : ?>
                                                                        <td class="text-center"><button class="btn btn-sm btn-primary text-white">Pending</button></td>
                                                                    <?php elseif ($data->cancelrequest == "Cancelled" && $data->documentverificationstatus != "Approved") : ?>
                                                                        <td class="text-center"><button class="btn btn-sm btn-primary text-white" disabled>cancelled</button></td>
                                                                    <?php elseif ($data->documentverificationstatus == "Approved") : ?>
                                                                        <td class="text-center"><button class="btn btn-sm btn-primary text-white" disabled>cancel</button></td>
                                                                    <?php endif; ?>
                                                                    <td class="text-center"><?php echo $data->canceldate; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="documentModalLabel">Document Preview</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="documentPreviewModalBody"></div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- Footer -->
    <footer>
        <p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
    </footer>
    <!-- /Footer -->

    <!-- jQuery -->
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
    <script>
        function deleteModal(studentId) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
            modalYesButton.href = 'MakeCancelRequest?studentid=' + studentId;
            $('#deleteModal').modal('show');
        }
        document.getElementById('gpcoursetype').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue === 'Online Proficiency Courses') {
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'block';
                document.getElementById('OnlinePeoficiencyCoursesSelect').setAttribute('name', 'gpcourse');
                document.getElementById('DSWCoursesselect').style.display = 'none';
                document.getElementById('DSWCoursesselect').removeAttribute('name');
                document.getElementById('nocoursetypeselect').style.display = 'none';
                document.getElementById('nocoursetypeselect').removeAttribute('name');
            } else if (selectedValue === 'Proficiency Courses Under DSW') {
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'none';
                document.getElementById('DSWCoursesselect').style.display = 'block';
                document.getElementById('DSWCoursesselect').setAttribute('name', 'gpcourse');
                document.getElementById('nocoursetypeselect').style.display = 'none';
                document.getElementById('OnlinePeoficiencyCoursesSelect').removeAttribute('name');
                document.getElementById('nocoursetypeselect').removeAttribute('name');
            } else {
                document.getElementById('nocoursetypeselect').style.display = 'block';
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'none';
                document.getElementById('DSWCoursesselect').style.display = 'none';
                document.getElementById('OnlinePeoficiencyCoursesSelect').removeAttribute('name');
                document.getElementById('DSWCoursesselect').removeAttribute('name');
            }
        });

        function uploadFile(file) {
            if (file) {
                document.getElementById('filename').style.display = 'block';
                document.getElementById('filename').innerText = file.name;
                document.getElementById('uploadcertificatebutton').removeAttribute('disabled');
                document.getElementById('uploadagain').style.display = 'none';
            }
        }

        function previewDocument(documentPath) {
            // Set the src attribute of the iframe dynamically
            var iframeSrc = documentPath;

            // Set the src attribute of the iframe within the modal
            document.getElementById('documentPreviewModalBody').innerHTML = '<iframe src="' + iframeSrc + '" width="100%" height="500px" frameborder="0"></iframe>';

            // Show the modal
            $('#documentModal').modal('show');
        }

        function filterTable() {
            var status = document.getElementById('status').value;
            var rows = document.querySelectorAll('#tableBody tr');

            rows.forEach(function(row) {
                var rowStatus = row.cells[5].textContent.trim(); // Assuming status is the sixth column (index 5)
                if (status === 'All' || rowStatus === status || status == "NA") {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            });
        }
    </script>
</body>

</html>