<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-holiday.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:37:18 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Leave</title>

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

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

<body>

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
							<a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
						</li>

						<li class="menu-title">
							<span>Others</span>
						</li>

						<li>
							<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
						</li>
						<li>
							<a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
						</li> -->
						<li class="">
							<a href="<?php echo base_url() ?>StaffController/StaffDashboard"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
						</li>
						<li class="active">
							<a href="<?php echo base_url() ?>StaffController/StaffLeaveDashboard"><i class="fa-solid fa-suitcase"></i> <span>Leave</span></a>
						</li>
						<li class="">
							<a href="<?php echo base_url() ?>StaffController/Logout"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
						</li>
						<!-- <li class="active">
                            <a href="<?php echo base_url() ?>StaffController/index"><i class="fa-solid fa-chalkboard-user"></i></i> <span>Staff</span></a>
                        </li> -->
						<!-- <li class="menu-title">
							<span>UI Interface</span>
						</li>
						<li class="submenu">
							<a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="alerts.html">Alerts</a></li>
								<li><a href="accordions.html">Accordions</a></li>
								<li><a href="avatar.html">Avatar</a></li>
								<li><a href="badges.html">Badges</a></li>
								<li><a href="buttons.html">Buttons</a></li>
								<li><a href="buttongroup.html">Button Group</a></li>
								<li><a href="breadcrumbs.html">Breadcrumb</a></li>
								<li><a href="cards.html">Cards</a></li>
								<li><a href="carousel.html">Carousel</a></li>
								<li><a href="dropdowns.html">Dropdowns</a></li>
								<li><a href="grid.html">Grid</a></li>
								<li><a href="images.html">Images</a></li>
								<li><a href="lightbox.html">Lightbox</a></li>
								<li><a href="media.html">Media</a></li>
								<li><a href="modal.html">Modals</a></li>
								<li><a href="offcanvas.html">Offcanvas</a></li>
								<li><a href="pagination.html">Pagination</a></li>
								<li><a href="popover.html">Popover</a></li>
								<li><a href="progress.html">Progress Bars</a></li>
								<li><a href="placeholders.html">Placeholders</a></li>
								<li><a href="rangeslider.html">Range Slider</a></li>
								<li><a href="spinners.html">Spinner</a></li>
								<li><a href="sweetalerts.html">Sweet Alerts</a></li>
								<li><a href="tab.html">Tabs</a></li>
								<li><a href="toastr.html">Toasts</a></li>
								<li><a href="tooltip.html">Tooltip</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="video.html">Video</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="ribbon.html">Ribbon</a></li>
								<li><a href="clipboard.html">Clipboard</a></li>
								<li><a href="drag-drop.html">Drag & Drop</a></li>
								<li><a href="rating.html">Rating</a></li>
								<li><a href="text-editor.html">Text Editor</a></li>
								<li><a href="counter.html">Counter</a></li>
								<li><a href="scrollbar.html">Scrollbar</a></li>
								<li><a href="notification.html">Notification</a></li>
								<li><a href="stickynote.html">Sticky Note</a></li>
								<li><a href="timeline.html">Timeline</a></li>
								<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="chart-apex.html">Apex Charts</a></li>
								<li><a href="chart-js.html">Chart Js</a></li>
								<li><a href="chart-morris.html">Morris Charts</a></li>
								<li><a href="chart-flot.html">Flot Charts</a></li>
								<li><a href="chart-peity.html">Peity Charts</a></li>
								<li><a href="chart-c3.html">C3 Charts</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
								<li><a href="icon-feather.html">Feather Icons</a></li>
								<li><a href="icon-ionic.html">Ionic Icons</a></li>
								<li><a href="icon-material.html">Material Icons</a></li>
								<li><a href="icon-pe7.html">Pe7 Icons</a></li>
								<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
								<li><a href="icon-themify.html">Themify Icons</a></li>
								<li><a href="icon-weather.html">Weather Icons</a></li>
								<li><a href="icon-typicon.html">Typicon Icons</a></li>
								<li><a href="icon-flag.html">Flag Icons</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
								<li><a href="form-input-groups.html">Input Groups </a></li>
								<li><a href="form-horizontal.html">Horizontal Form </a></li>
								<li><a href="form-vertical.html"> Vertical Form </a></li>
								<li><a href="form-mask.html"> Form Mask </a></li>
								<li><a href="form-validation.html"> Form Validation </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="tables-basic.html">Basic Tables </a></li>
								<li><a href="data-tables.html">Data Table </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 3</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);"> <span>Level 1</span></a>
								</li>
							</ul>
						</li> -->
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
						<div class="col">
							<h3 class="page-title">Apply For Leave</h3>
							<ul class="breadcrumb">
								<li class=""><a href="StaffLeaveDashboard">Leave</a></li>
								<li class="breadcrumb-item active"> /Apply Leave</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">

						<div class="card">
							<div class="card-body">
								<form action="ApplyleavePost" method="post" id="StaffLeaveForm">
									<?php if ($data != null) : ?>
										<input class="d-none" name="remainingleavecount" id="reaminingleavecount" value="<?php echo $data['remainingleavecount']; ?>">
									<?php else : ?>
										<input class="d-none" name="remainingleavecount" id="reaminingleavecount" value="15">
									<?php endif ?>

									<input name="staffid" type="text" class="d-none">
									<input name="status" type="text" class="d-none">
									<div class="row">
										<div class="col">
											<h3 class="page-title">Leave Information</h3>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
											<button class="btn btn-sm btn-primary" onclick="stopsubmit(event)">Total Leaves: 15</button>
											<?php if ($data != null) : ?>
												<button class="btn btn-sm btn-primary" onclick="stopsubmit(event)">Remaining Leaves: <?php echo $data['remainingleavecount']; ?></button>
											<?php else : ?>
												<button class="btn btn-sm btn-primary" onclick="stopsubmit(event)">Remaining Leaves: 15</button>
											<?php endif ?>
										</div>
										<div class="col-12" style="visibility:hidden;">
											<h5 class="form-title"><span>Leave Information</span></h5>
										</div>
										<div class="col-12 col-sm-6">
											<div class="form-group local-forms">
												<label>Leave Type<span class="text-danger">*</span></label>
												<select class="form-control select" id="LeaveType" onchange="toggleleavespan();togglesubmitbutton();" name="leavetype">
													<option value="NA">Select</option>
													<option>Casual Leave</option>
													<option>Sick Leave</option>
													<option>Half Day</option>
												</select>
											</div>
										</div>
										<div class="col-12 col-sm-6" id="leavetypecontainer" style="display:none;">
											<div class="form-group local-forms">
												<label>Leave Span<span class="text-danger">*</span></label>
												<select class="form-control select" id="LeaveSpan" onchange="toggleDays();" name="leavespan">
													<option value="NA">Select</option>
													<option>One Day</option>
													<option>Multiple Days</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="LeaveSpan_errormessage">
													Leave Span is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6" id="LeaveDateContainer" style="display:none;">
											<div class="form-group local-forms">
												<label>Leave Date<span class="text-danger">*</span></label>
												<input type="date" class="form-control " id="LeaveDate" placeholder="dd-mm-yyyy" name="leavedate" onchange="checkifleavealreadytakenforthatday();checkdatevalidity();">
												<p id="daterromessage" class="text-danger" style="font-size:0.7rem;display:none">Already Taken Leave on this Date</p>
												<p id="leavedatevalidityrromessage" class="text-danger" style="font-size:0.7rem;display:none">Please Select Valid Date</p>
												<p id="daysunday" class="text-danger" style="font-size: 0.7rem;display:none;">Cant apply for leave on Sunday</p>
												<div class="invalid-feedback" style="display:none;" id="LeaveDate_errormessage">
													Leave Date is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6" id="fromdateContainer" style="display:none;">
											<div class="form-group local-forms">
												<label>From Date<span class="text-danger">*</span></label>
												<input type="date" class="form-control " id="fromdate" placeholder="dd-mm-yyyy" name="fromdate" onchange="calculateDays();checkifleavealreadytakenfortodateandfromdate();checkdatevalidity();">
												<p id="Fromdatevalidityrromessage" class="text-danger" style="font-size:0.7rem;display:none;">Please Select Valid Date</p>
												<div class="invalid-feedback" style="display:none;" id="fromdate_errormessage">
													From Date is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6" id="todateContainer" style="display:none;">
											<div class="form-group local-forms">
												<label>To Date<span class="text-danger">*</span></label>
												<input type="date" class="form-control " id="todate" placeholder="dd-mm-yyyy" name="todate" onchange="calculateDays();checkifleavealreadytakenfortodateandfromdate();checkdatevalidity();">
												<p id="datepverlaprromessage" class="text-danger" style="font-size:0.7rem;display:none;">Dates overlap with previous taken leaves.Please Edit Previous leave before Approval</p>
												<p id="Todatevalidityrromessage" class="text-danger" style="font-size:0.7rem;display:none;">Please Select Valid Date</p>
												<div class="invalid-feedback" style="display:none;" id="todate_errormessage">
													To Date is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6" id="numberofdaysContainer" style="display:none;">
											<div class="form-group local-forms">
												<label>No. of Days</label>
												<input type="text" class="form-control" id="numberofdays" placeholder="No. of Days" name="totaldays">
											</div>
										</div>
										<div class="col-lg-6" id="Leavedescriptioncontainer" style="display:none;">
											<div class="faq-tab">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingThree">
														<p class="panel-title">
															<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																<i class="fas fa-plus-circle me-1"></i> Add Description
															</a>
														</p>
													</div>
													<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion">
														<div class="panel-body">
															<textarea class="form-control" name="leavedescription"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 mt-3">
											<button type="submit" class="btn btn-primary" id="submitbutton" disabled onclick="preventsubmit(event);showhello();">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

	<script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/script.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('StaffLeaveForm').addEventListener('submit', function(event) {
				var fieldIds = ['LeaveSpan', 'LeaveDate', 'fromdate', 'todate'];
				for (var i = 0; i < fieldIds.length; i++) {
					validateField(fieldIds[i], event);
				}
			});
		});

		function validateField(fieldId, event) {
			var field = document.getElementById(fieldId);
			if (fieldId == 'LeaveDate' && !field.value.trim()) {
				if (document.getElementById('LeaveDateContainer').style.display == "block") {
					field.classList.add('is-invalid');
					event.preventDefault();
				}
				// document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
				document.getElementById(fieldId + '_errormessage').style.display = 'block';

			}
			if (fieldId == 'fromdate' && !field.value.trim()) {
				if (document.getElementById('fromdateContainer').style.display === "block") {
					field.classList.add('is-invalid');
					event.preventDefault();
				}
				// document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
				document.getElementById(fieldId + '_errormessage').style.display = 'block';
			}
			if (fieldId == 'todate' && !field.value.trim()) {
				if (document.getElementById('todateContainer').style.display == "block") {
					field.classList.add('is-invalid');
					event.preventDefault();
				}
				// document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
				document.getElementById(fieldId + '_errormessage').style.display = 'block';
			}
			if (field.tagName.toLowerCase() === 'select') {
				if (document.getElementById('leavetypecontainer').style.display == "block") {
					validateSelect(field, event);
				}
			} else {
				if (field.style.display == 'block' && !field.value.trim()) {
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

		function calculateDays() {
			var fromDateInput = document.getElementById("fromdate").value;
			var toDateInput = document.getElementById("todate").value;
			var numberOfDaysInput = document.getElementById("numberofdays");
			var sundaycount = 0;

			if (fromDateInput && toDateInput) {
				var fromDate = new Date(fromDateInput);
				var toDate = new Date(toDateInput);
				for (let currentDate = new Date(fromDate); currentDate <= toDate; currentDate.setDate(currentDate.getDate() + 1)) {
				if (currentDate.getDay() === 0) {
					sundaycount++;
					console.log(sundaycount);
				}
			}
				if (!isNaN(fromDate) && !isNaN(toDate)) {
					var diffInMilliseconds = toDate - fromDate;
					var diffInDays = diffInMilliseconds / (1000 * 60 * 60 * 24);
					numberOfDaysInput.value = Math.abs(Math.round(diffInDays)+1-sundaycount);
					if (numberOfDaysInput.value > parseInt(document.getElementById('reaminingleavecount').value)) {
						document.getElementById('submitbutton').setAttribute('disabled', 'true');
					} else {
						document.getElementById('submitbutton').removeAttribute('disabled');
					}
				} else {
					numberOfDaysInput.value = '';
				}
			} else {
				numberOfDaysInput.value = '';
			}
		}

		function togglesubmitbutton() {
			let leavetype = document.getElementById('LeaveType').value;
			let count = document.getElementById('reaminingleavecount').value;
			if (count == 0 && leavetype != "Half Day") {
				document.getElementById('submitbutton').setAttribute('disabled', 'true');
			} else {
				document.getElementById('submitbutton').removeAttribute('disabled');
			}
		}

		function toggleleavespan() {
			Type = document.getElementById('LeaveType').value;
			if (Type == "Casual Leave" || Type == "Sick Leave") {
				document.getElementById("leavetypecontainer").style.display = "block";
				document.getElementById("LeaveDateContainer").style.display = "none";
				document.getElementById("Leavedescriptioncontainer").style.display = "none";
				document.getElementById("numberofdaysContainer").style.display = "none";
				document.getElementById('LeaveDate').value = "";
				document.getElementById('daterromessage').style.display = 'none';
				document.getElementById('fromdateContainer').style.display = 'none';
				document.getElementById('todateContainer').style.display = 'none';
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';

			} else if (Type == "Half Day") {
				document.getElementById("leavetypecontainer").style.display = "none";
				document.getElementById("LeaveDateContainer").style.display = "block";
				document.getElementById("numberofdaysContainer").style.display = "none";
				document.getElementById("numberofdays").value = "NA";
				document.getElementById("fromdateContainer").style.display = "none";
				document.getElementById("todateContainer").style.display = "none";
				document.getElementById("Leavedescriptioncontainer").style.display = "block";
				document.getElementById('fromdate').value = "";
				document.getElementById('todate').value = "";
				document.getElementById('LeaveDate').value = "";
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';

			} else {
				document.getElementById("leavetypecontainer").style.display = "none";
				document.getElementById("LeaveDateContainer").style.display = "none";
				document.getElementById("Leavedescriptioncontainer").style.display = "none";
				document.getElementById("fromdateContainer").style.display = "none";
				document.getElementById("todateContainer").style.display = "none";
				document.getElementById("numberofdaysContainer").style.display = "none";
				document.getElementById('fromdate').value = "";
				document.getElementById('todate').value = "";
				document.getElementById('LeaveDate').value = "";
				document.getElementById('daterromessage').style.display = 'none';
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';
			}
		}

		function toggleDays() {
			days = document.getElementById('LeaveSpan').value;
			if (days == "One Day") {
				document.getElementById("LeaveDateContainer").style.display = "block";
				document.getElementById("fromdateContainer").style.display = "none";
				document.getElementById("todateContainer").style.display = "none";
				document.getElementById("numberofdaysContainer").style.display = "block";
				document.getElementById("numberofdays").readOnly = true;
				document.getElementById("numberofdays").value = 1;
				document.getElementById("Leavedescriptioncontainer").style.display = "block";
				document.getElementById('fromdate').value = "";
				document.getElementById('todate').value = "";
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';

			} else if (days == "Multiple Days") {
				document.getElementById("LeaveDateContainer").style.display = "none";
				document.getElementById("fromdateContainer").style.display = "block";
				document.getElementById("todateContainer").style.display = "block";
				document.getElementById("numberofdaysContainer").style.display = "block";
				document.getElementById('LeaveDate').value = "";
				document.getElementById("numberofdays").readOnly = true;
				document.getElementById("numberofdays").value = "";
				document.getElementById("Leavedescriptioncontainer").style.display = "block";
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';

			} else {
				document.getElementById("LeaveDateContainer").style.display = "none";
				document.getElementById("Leavedescriptioncontainer").style.display = "none";
				document.getElementById("fromdateContainer").style.display = "none";
				document.getElementById("todateContainer").style.display = "none";
				document.getElementById("numberofdaysContainer").style.display = "none";
				document.getElementById('fromdate').value = "";
				document.getElementById('todate').value = "";
				document.getElementById('LeaveDate').value = "";
				document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				document.getElementById('Todatevalidityrromessage').style.display = 'none';
				document.getElementById('leavedatevalidityrromessage').style.display = 'none';
			}
		}
		$(document).ready(function() {
			$('.datetimepicker').on('keydown', function(e) {
				e.preventDefault();
			});
			$('.datetimepicker').datetimepicker();
		});

		function stopsubmit() {
			event.preventDefault();
		}

		function checkifleavealreadytakenforthatday() {
			datevalue = document.getElementById('LeaveDate').value;
			leavetype = document.getElementById('LeaveType').value;
			let selectedDate = new Date(datevalue);
			if (selectedDate.getDay() === 0) {
				document.getElementById('daysunday').style.display = 'block';
				document.getElementById('submitbutton').disabled = true;
			} else {
				document.getElementById('daysunday').style.display = 'none';
				fetch(`CheckLeaveOnDate?date=${datevalue} && LeaveType=${leavetype}`)
					.then(response => {
						if (!response.ok) {
							throw new Error('Network response was not ok');
						}
						return response.json();
					})
					.then(response => {
						if (response.message == "Taken") {
							document.getElementById('daterromessage').style.display = "block";
							document.getElementById('submitbutton').setAttribute('disabled', true);
						} else {
							document.getElementById('daterromessage').style.display = 'none';
						}
					})
			}

		}

		
		function checkifleavealreadytakenfortodateandfromdate() {
			fromdate = document.getElementById('fromdate').value;
			todate = document.getElementById('todate').value;
			leavetype = document.getElementById('LeaveType').value;
			if (todate.trim() != "" && fromdate.trim() != '') {
				fetch(`checkLeaveonDates?fromdate=${fromdate} && todate=${todate}`)
					.then(response => {
						if (!response.ok) {
							throw new Error('Network response was not ok');
						}
						return response.json();
					})
					.then(response => {
						if (response.message == "Taken") {
							console.log("Taken");
							document.getElementById('datepverlaprromessage').style.display = "block";
							document.getElementById('submitbutton').setAttribute('disabled', true);
						} else {
							document.getElementById('datepverlaprromessage').style.display = 'none';
						}
					})
			} else {
				document.getElementById('datepverlaprromessage').style.display = 'none';
				return;
			}
		}
		function checkdatevalidity() {
			if (document.getElementById('LeaveDateContainer').style.display != 'none') {
				let leavedate = new Date(document.getElementById('LeaveDate').value);
				let todaydate = new Date();
				if (leavedate < todaydate) {
					document.getElementById('leavedatevalidityrromessage').style.display = 'block';
					document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
					document.getElementById('Todatevalidityrromessage').style.display = 'none';
					document.getElementById('submitbutton').disabled = true;
				} else {
					document.getElementById('leavedatevalidityrromessage').style.display = 'none';
					document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
					document.getElementById('Todatevalidityrromessage').style.display = 'none';
					document.getElementById('submitbutton').disabled = false;
				}
			} else {
				let fromdate = new Date(document.getElementById('fromdate').value);
				let todate = new Date(document.getElementById('todate').value);
				let todaydate = new Date();
				if (fromdate < todaydate && todate < todaydate) {
					document.getElementById('Fromdatevalidityrromessage').style.display = 'block';
					document.getElementById('Todatevalidityrromessage').style.display = 'block';
					document.getElementById('submitbutton').disabled = true;
					document.getElementById('leavedatevalidityrromessage').style.display = 'none';
				} else if (todate < todaydate || todate<fromdate) {
					document.getElementById('Todatevalidityrromessage').style.display = 'block';
					document.getElementById('submitbutton').disabled = true;
					document.getElementById('leavedatevalidityrromessage').style.display = 'none';
					document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
				} else if (fromdate < todaydate || fromdate>todate) {
					document.getElementById('Fromdatevalidityrromessage').style.display = 'block';
					document.getElementById('submitbutton').disabled = true;
					document.getElementById('leavedatevalidityrromessage').style.display = 'none';
					document.getElementById('Todatevalidityrromessage').style.display = 'none';
				} else {
					document.getElementById('Fromdatevalidityrromessage').style.display = 'none';
					document.getElementById('Todatevalidityrromessage').style.display = 'none';
					document.getElementById('leavedatevalidityrromessage').style.display = 'none';
					document.getElementById('submitbutton').disabled = false;
				}
			}
		}
	</script>
	</script>
</body>

</html>