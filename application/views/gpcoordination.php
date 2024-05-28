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
            var SubjectDeleteSuccess = document.getElementById('toast-container');

            if (SubjectDeleteSuccess) {
                SubjectDeleteSuccess.style.display = 'block';
                setTimeout(function() {
                    SubjectDeleteSuccess.style.display = 'none';
                }, 2000);
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
    $SubjectDeleteSuccess = $this->session->flashdata('SubjectDeleteSuccess');
    $SubjectDeleteRequestSuccess = $this->session->flashdata('SubjectDeleteRequestSuccess');
    $LockSuccess=$this->session->flashdata("LockSuccess");
    $DocumentApproveSuccess=$this->session->flashdata("DocumentApproveSuccess");
    $DocumentRejectSuccess=$this->session->flashdata("DocumentRejectSuccess");
    ?>
    <?php if (isset($SubjectDeleteSuccess)) : ?>
        <div id="toast-container" class="toast-container toast-top-right">
            <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-title text-center">Subject Cancelled Successfully</div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($SubjectDeleteRequestSuccess)) : ?>
        <div id="toast-container" class="toast-container toast-top-right">
            <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-title text-center">Request Submitted Successfully</div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($LockSuccess)) : ?>
        <div id="toast-container" class="toast-container toast-top-right">
            <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-title text-center">Subject Locked Successfully</div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($DocumentApproveSuccess)) : ?>
        <div id="toast-container" class="toast-container toast-top-right">
            <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-title text-center">Document Approved Successfully</div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($DocumentRejectSuccess)) : ?>
        <div id="toast-container" class="toast-container toast-top-right">
            <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-title text-center">Document Rejected</div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Main Wrapper -->
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
        <div class="col-lg-4">
            <button class="btn btn-primary">Search</button>
        </div>
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">General Proficiency</h3>
                        </div>
                    </div>
                </div>
                <!-- <div class="student-group-form" style="visibility:hidden;">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by ID">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Name">
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Phone ...">
							</div>
						</div>
						<div class="col-lg-2">
							<div class="search-student-btn">
								<button type="btn" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</div> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card bg-white pt-4">
                                    <div class="card-body">
                                        <div class="row mb-5">
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>UUID<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="Enter UUID" id="uuid">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label class="ms-2">Select Status<span class="login-danger">*</span></label>

                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="status">
                                                        <option value="NA">Select Status</option>
                                                        <option>All</option>
                                                        <option>Pending</option>
                                                        <option>Cancelled</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms" id="DOB_calendar-icon">
                                                    <label>From Date <span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="DD-MM-YYYY" id="fromdate">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="form-group local-forms" id="DOB_calendar-icon">
                                                    <label>To Date<span class="login-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="DD-MM-YYYY" id="todate">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Select Course type<span class="login-danger">*</span></label>

                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="coursetype">
                                                        <option value="NA">Select Course Type</option>
                                                        <option>Online Proficiency Courses</option>
                                                        <option>Proficiency Courses Under DSW</option>
                                                        <option>Certification Course on Social and Emotional Learning by UNESCO MGIEP and Life University</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
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

                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Select Document Status<span class="login-danger">*</span></label>

                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="DocumentStatus">
                                                        <option value="NA">Select Document Status</option>
                                                        <option>Approved</option>
                                                        <option>Rejected</option>
                                                        <option>Pending</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Select Division<span class="login-danger">*</span></label>

                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="Division">
                                                        <option value="NA">Select Division</option>
                                                        <option>All</option>
                                                        <option>Pending</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group local-forms">
                                                    <label>Select Program<span class="login-danger">*</span></label>

                                                    <select class="form-select" style="height:45px;font-size:15px !important;" id="Program">
                                                        <option value="NA">Select Program</option>
                                                        <option>All</option>
                                                        <option>Pending</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group local-forms">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <button class="btn btn-primary" id="searchButton">Search</button>
                                                            <button class="btn btn-primary ms-2" id="clearFilterButton" onclick="clearfilters()">Clear</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="table-responsive mt-4">

                                            <table class="table border-1 star-student table-hover table-center mb-0 datatable table-striped" id="tabledata">

                                                <thead class="student-thread">
                                                    <tr>
                                                        <th class="text-center border-1">Select</th>
                                                        <th class="text-center border-1">Ticket No.</th>
                                                        <th class="text-center border-1">UUID</th>
                                                        <th class="text-center border-1">Student Name</th>
                                                        <th class="text-center border-1">Course type</th>
                                                        <th class="text-center border-1">Course Name</th>
                                                        <th class="text-center border-1">Status</th>
                                                        <th class="text-center border-1">Request Date</th>
                                                        <th class="text-center border-1">Document Status</th>
                                                        <th class="text-center border-1">Document Verification Status</th>
                                                        <th class="text-center border-1">Verification action</th>
                                                        <th class="text-center border-1">Cancel Status</th>
                                                        <th class="text-center border-1">View Details</th>
                                                        <th class="text-center border-1">View Document</th>
                                                        <th class="text-center border-1">Cancel</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $data) { ?>
                                                        <tr class="border-1">
                                                            <?php if ($data->status == "Cancelled" || $data->preferencelockedstatus == "Locked") : ?>
                                                                <td class="text-center">
                                                                    <input type="checkbox" disabled>

                                                                </td>
                                                            <?php else : ?>
                                                                <td class="text-center">
                                                                    <input type="checkbox" class="attendance-checkbox" name="attendance[]" value="<?php echo $data->studentid; ?>" data-Student-name="<?php echo htmlspecialchars($data->studentname, ENT_QUOTES, 'UTF-8'); ?>" onchange="handleCheckboxChange(this)" readonly>
                                                                </td>
                                                            <?php endif; ?>
                                                            <td class="text-center border-1 ticketNo"><?php echo $data->requestid; ?></td>
                                                            <td class="text-center border-1 UUID"><?php echo $data->studentid; ?></td>
                                                            <td class="text-center border-1"><?php echo $data->studentname; ?></td>
                                                            <td class="text-center border-1"><?php echo $data->gpcoursetype; ?></td>
                                                            <td class="text-center border-1"><?php echo $data->gpcourse; ?></td>
                                                            <td class="text-center border-1 fw-bold <?php echo ($data->status == 'Submitted') ? 'text-success' : 'text-danger'; ?>"><?php echo $data->status; ?></td>
                                                            <td class="text-center border-1"><?php echo $data->requestdate; ?></td>
                                                            <td class="text-center border-1 fw-bold <?php echo ($data->documentuploadstatus == 'Uploaded') ? 'text-success' : 'text-danger'; ?>"><?php echo $data->documentuploadstatus; ?></td>
                                                            <td class="text-center border-1 fw-bold <?php echo ($data->documentverificationstatus == 'Approved') ? 'text-success' : 'text-danger'; ?>"><?php echo $data->documentverificationstatus; ?></td>
                                                            <?php if ($data->documentuploadstatus == "Uploaded") : ?>
                                                                <td class="text-center">
                                                                    <!-- <select class="form-select" style="background-color:inherit;" onchange="changedocumentverificationstatus()">
    <option value="" disabled selected>Action</option>
    <option value="approve"><a href="ChangeDocumentVerificationStatus?studentid=<?php echo $data->studentid; ?>">Approve</a></option>
    <option value="reject"><a href="ChangeDocumentVerificationStatus?studentid=<?php echo $data->studentid; ?>">Reject</a></option>
</select> -->
                                                                    <div class="dropdown-center">
                                                                        <p class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            Action
                                                                        </p>
                                                                        <ul class="dropdown-menu" style="width: 50px;">
                                                                            <li><a class="dropdown-item" href="ChangeDocumentVerificationStatus?studentid=<?php echo $data->studentid; ?>&action=Approve">Approve</a></li>
                                                                            <li><a class="dropdown-item" href="ChangeDocumentVerificationStatus?studentid=<?php echo $data->studentid; ?>&action=Reject">Reject</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            <?php else : ?>
                                                                <td class="text-center">
                                                                    <div class="dropdown-center w-100">
                                                                        <p class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            Action
                                                                        </p>

                                                                    </div>
                                                                </td>
                                                            <?php endif; ?>
                                                            <td class="text-center border-1 fw-bold <?php echo ($data->cancelstatus == 'Active') ? 'text-success' : 'text-danger'; ?>"><?php echo $data->cancelstatus; ?></td>
                                                            <td class="text-center border-1"><button class="btn btn-sm btn-primary" onclick="fetchstudentdetails('<?php echo $data->studentid; ?>'); previewDetail();">View</button></td>
                                                            <?php if ($data->documentuploadstatus == "Uploaded") : ?>
                                                                <td class="text-center">
                                                                    <button class="btn btn-sm btn-primary" onclick="previewDocument('<?php echo base_url() ?>uploads/<?php echo $data->document; ?>')">View</button>
                                                                </td>
                                                            <?php else : ?>
                                                                <td class="text-center">
                                                                    <button class="btn btn-sm btn-primary" disabled>View</button>
                                                                </td>
                                                            <?php endif; ?> 
                                                            <?php if ($data->cancelrequest == "NA" || $data->cancelrequest == "Pending" || $data->status=="pending") { ?>
                                                                <td class="text-center"><button class="btn btn-sm btn-primary" onclick="deleteModal('<?php echo $data->studentid; ?>')" data-studentid="<?php echo $data->studentid; ?>">Cancel</button>
                                                                    <!-- <a href="#" class="text-danger"><i class="feather-trash-2 me-1"></i> Delete</a> -->
                                                                </td>
                                                            <?php } ?>

                                                            <?php if ($data->cancelrequest == "Cancelled") { ?>
                                                                <td class="text-center"><button class="btn btn-sm btn-primary text-white" disabled>cancelled</button></td>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <form id="replicatedTable" style="display:none;" action="LockSubject" method="post">
                            <div class="row pb-5">
                                <div class="col-sm-12">
                                    <div class="card card-table">
                                        <div class="card-body">
                                            <h3 class="page-title mx-auto mb-4 text-center">Students</h3>
                                            <div class="table-responsive">
                                                <table id="replicatedTableContent" class="table border-0 table-hover table-center  mb-0 star-student table-striped">
                                                    <thead class="student-thread">
                                                        <tr>
                                                            <th class="text-center">Ticket No.</th>
                                                            <th class="text-center">UUID</th>
                                                            <th class="text-center">Student Name</th>
                                                            <th class="text-center">Course Type</th>
                                                            <th class="text-center">Course Name</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-1">
                                        <button class="btn btn-primary" id="locksubject" type="submit">Lock</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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




    
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="documentModalLabel">Student Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="student-personals-grp">
                    <div class="card">
                        <div class="card-body">
                            <div class="heading-detail">
                                <h4>Personal Details :</h4>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-user"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Name</h4>
                                    <h5 id="name"></h5>
                                </div>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <img src="assets/img/icons/buliding-icon.svg" alt>
                                </div>
                                <div class="views-personal">
                                    <h4>Course</h4>
                                    <h5 id="course"></h5>
                                </div>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-phone-call"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Type</h4>
                                    <h5 id="type"></h5>
                                </div>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Branch</h4>
                                    <h5 id="branch">
                                    </h5>
                                </div>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-user"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Year</h4>
                                    <h5 id="year"></h5>
                                </div>
                            </div>
                            <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-calendar"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Semester</h4>
                                    <h5 id="semester"></h5>
                                </div>
                            </div>
                            <!-- <div class="personal-activity">
                                <div class="personal-icons">
                                    <i class="feather-italic"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Language</h4>
                                    <h5 id="">English, French, Bangla</h5>
                                </div>
                            </div>
                            <div class="personal-activity mb-0">
                                <div class="personal-icons">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <div class="views-personal">
                                    <h4>Address</h4>
                                    <h5 id="">480, Estern Avenue, New York</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- Footer -->
    <!-- <footer>
        <p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
    </footer> -->
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

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <!-- Mask JS -->
    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>

    <script>
        function previewDocument(documentPath) {
            // Set the src attribute of the iframe dynamically
            var iframeSrc = documentPath;

            // Set the src attribute of the iframe within the modal
            document.getElementById('documentPreviewModalBody').innerHTML = '<iframe src="' + iframeSrc + '" width="100%" height="500px" frameborder="0"></iframe>';

            // Show the modal
            $('#documentModal').modal('show');
        }

        function previewDetail() {
            $('#detailModal').modal('show');
        }
        function deleteModal(studentId) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'MakeCancelRequest?studentid=' + studentId;
    $('#deleteModal').modal('show');
}
        //     const checkboxes = document.querySelectorAll('.attendance-checkbox');
        // // Get the submit button
        // const submitButton = document.getElementById('lockbutton');

        // // Add change event listener to each checkbox
        // checkboxes.forEach(checkbox => {
        //     checkbox.addEventListener('change', function() {
        //         // Check if any checkbox is checked
        //         const anyChecked = [...checkboxes].some(checkbox => checkbox.checked);
        //         // Show or hide the submit button based on checkbox status
        //         submitButton.style.display = anyChecked ? 'block' : 'none';
        //     });
        // });
        function handleCheckboxChange(checkbox) {
            var isChecked = checkbox.checked;
            var studentid = checkbox.value;
            var studentName = checkbox.getAttribute('data-Student-name'); // Corrected variable name
            var TicketNo = checkbox.closest('tr').querySelector('td:nth-child(2)').textContent; // Corrected variable name
            var UUID = checkbox.closest('tr').querySelector('td:nth-child(3)').textContent; // Corrected variable name
            var StudentName = checkbox.closest('tr').querySelector('td:nth-child(4)').textContent; // Corrected variable name
            var CourseType = checkbox.closest('tr').querySelector('td:nth-child(5)').textContent; // Corrected variable name
            var CourseName = checkbox.closest('tr').querySelector('td:nth-child(6)').textContent; // Corrected variable name
            var Status = checkbox.closest('tr').querySelector('td:nth-child(7)').textContent; // Corrected variable name

            if (isChecked) {
                // Add the student to the replicated table
                addStudentToReplicatedTable(studentid, TicketNo, UUID, studentName, CourseType, CourseName, Status);
            } else {
                // Remove the student from the replicated table
                removeStudentFromReplicatedTable(studentid);
            }
        }

        // Function to add a student to the replicated table
        function addStudentToReplicatedTable(studentid, TicketNo, UUID, StudentName, CourseType, CourseName, Status) {
            // Check if the student is already in the replicated table
            if (!document.querySelector('#replicatedTableContent tr[data-student-id="' + studentid + '"]')) {
                // Create a new row for the replicated table
                var newRow = document.createElement('tr');
                newRow.setAttribute('data-student-id', studentid);

                // Populate the new row with data
                newRow.innerHTML =
                    '<td class="text-center">' + TicketNo + '</td>' +
                    '<td class="text-center"><input class="border-0 text-center" style="background-color:inherit;" type="text" name="studentid[]" value="' + UUID + '" name="uuids[]" readonly/></td>' +
                    '<td class="text-center">' + StudentName + '</td>' +
                    '<td class="text-center">' + CourseType + '</td>' +
                    '<td class="text-center">' + CourseName + '</td>' +
                    '<td class="text-center">' + Status + '</td>';

                // Append the new row to the replicated table
                document.querySelector('#replicatedTableContent tbody').appendChild(newRow);
                document.getElementById('replicatedTable').style.display = 'block';
            }
        }

        function removeStudentFromReplicatedTable(studentid) {
            var rowToRemove = document.querySelector('#replicatedTableContent tr[data-student-id="' + studentid + '"]');
            if (rowToRemove) {
                rowToRemove.remove();
            }
            if (document.querySelectorAll('#replicatedTableContent tbody tr').length === 0) {
                document.getElementById('replicatedTable').style.display = 'none';
            }
        }

        function changedocumentverificationstatus() {
            var options = {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                }
            };

            fetch()

                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    console.log('Fetch request successful', data);
                })
                .catch(function(error) {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        function fetchstudentdetails(studentid) {
            fetch('GetStudentData?studentid=' + studentid)

                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    document.getElementById('name').innerText = data.name;
                    document.getElementById('course').innerText = data.course;
                    document.getElementById('type').innerText = data.type;
                    document.getElementById('branch').innerText = data.branch;
                    document.getElementById('year').innerText = data.year;
                    document.getElementById('semester').innerText = data.semester;
                })
                .catch(function(error) {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
        function clearfilters() {
            document.querySelector("#uuid").value = "";
            document.querySelector("#fromdate").value = "";
            document.querySelector("#todate").value = "";
            document.querySelector("#status").selectedIndex = 0;
            document.querySelector("#coursetype").selectedIndex = 0;
            document.getElementById('nocoursetypeselect').style.display = 'block';
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'none';
                document.getElementById('DSWCoursesselect').style.display = 'none';
                document.getElementById('DSWCoursesselect').selectedIndex=0;
                document.getElementById('OnlinePeoficiencyCoursesSelect').selectedIndex=0;
            document.querySelector("#DocumentStatus").selectedIndex = 0;
            document.querySelector("#Division").selectedIndex = 0;
            document.querySelector("#Program").selectedIndex = 0;
        }
        document.addEventListener("DOMContentLoaded", function() {
            const searchButton = document.querySelector("#searchButton");

            searchButton.addEventListener("click", function() {
                const uuid = document.querySelector("#uuid").value.trim();
                const status = document.querySelector("#status").value.trim();
                const fromDate = document.querySelector("#fromdate").value.trim();
                var toDate = document.querySelector("#todate").value.trim();
                if(fromDate==toDate)
                {
                    toDate="";
                }
                const courseType = document.querySelector("#coursetype").value.trim();
                let course = "NA";
                if (courseType == 'Online Proficiency Courses') {
                    course = document.querySelector("#OnlinePeoficiencyCoursesSelect").value.trim();
                } else if (courseType == 'Proficiency Courses Under DSW') {
                    course = document.querySelector("#DSWCoursesselect").value.trim();                }
                // else{
                //     const course = document.querySelector("#OnlinePeoficiencyCoursesSelect").value.trim();
                // }
                const documentStatus = document.querySelector("#DocumentStatus").value.trim();
                // const division = document.querySelector("#Division").value.trim();
                // const program = document.querySelector("#Program").value.trim();
                // // console.log("This is from date", course);
                // Get reference to the table body
                const tableBody = document.querySelector("#tabledata tbody");

                // Get all table rows
                const rows = tableBody.querySelectorAll("tr");

                // Loop through each row and check if it should be displayed or not
                rows.forEach(function(row) {
                    // Get cells of the row
                    const cells = row.querySelectorAll("td");
                    // Get cell values
                    const rowUuid = cells[2].textContent.trim();
                    const rowStatus = cells[6].textContent.trim();
                    const coursetye = cells[4].textContent.trim();
                    const coursename = cells[5].textContent.trim();
                    const documentstatus = cells[9].textContent.trim();
                    const rowDate = cells[7].textContent.trim();
                    console.log(rowDate<=todate);
                    const showRow = (
                        (uuid === "" || rowUuid === uuid)&&
                        (status === "NA" || status === "All" || rowStatus === status) &&
                        (courseType === "NA" || coursetye === courseType) &&
                        (course=="NA" || coursename === course) && 
                        (documentStatus === "NA" || documentstatus === documentStatus) &&
                        (fromDate==="" || rowDate >= fromDate) &&
                        (toDate==="" || rowDate <= toDate)
                    );
                    row.style.display = showRow ? "" : "none";
                });
            });
        });

        document.getElementById('coursetype').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue === 'Online Proficiency Courses') {
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'block';
                document.getElementById('DSWCoursesselect').style.display = 'none';
                document.getElementById('nocoursetypeselect').style.display = 'none';
            } else if (selectedValue === 'Proficiency Courses Under DSW') {
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'none';
                document.getElementById('DSWCoursesselect').style.display = 'block';
                document.getElementById('nocoursetypeselect').style.display = 'none';
            } else {
                document.getElementById('nocoursetypeselect').style.display = 'block';
                document.getElementById('OnlinePeoficiencyCoursesSelect').style.display = 'none';
                document.getElementById('DSWCoursesselect').style.display = 'none';
            }
        });
    </script>
</body>

</html>