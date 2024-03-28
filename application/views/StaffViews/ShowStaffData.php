<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:11 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Staff Data</title>

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
						<h2>Are you Sure you want to Delete</h2>
						<div class="submit-section">
							<a href="" class="btn btn-success me-2" id="cancelsubjectbutton">Yes</a>
							<a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
							<h3 class="page-title">Edit Staff Information</h3>
							<ul class="breadcrumb">
									<li><a href="AdminStaffDashboard">Staff</a></li>
									<li><a href="ShowStaff">/ Staff List</a></li>
									<li class="active">/ Staff Data</li>
								</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">

						<div class="card">
							<div class="card-body">
								<form action="UpdateStaffPost" id="UpdateStaffForm" enctype="multipart/form-data" method="post">
									<input class="d-none" type="text" name="id" value="<?php echo $data->id; ?>">
									<div class="row">
										<div class="col-12">
											<h5 class="form-title"><span>Personal Details</span></h5>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Teacher ID <span class="login-danger">*</span></label>
												<input type="text" class="form-control" name="staffid" value="<?php echo $data->staffid; ?>" placeholder="Teacher ID" readonly>
											</div>
										</div>
										<div class="col-12 col-sm-4" style="visibility:hidden;">
											<div class="form-group local-forms">
												<label>Teacher ID <span class="login-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Teacher ID">
											</div>
										</div>
										<div class="col-12 col-sm-4" style="visibility:hidden;">
											<div class="form-group local-forms">
												<label>Teacher ID <span class="login-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Teacher ID">
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>First Name <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->firstname; ?>" name="firstname" placeholder="Enter First Name" id="firstname" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')" readonly>
												<div class="invalid-feedback" style="display:none;" id="firstname_errormessage">
													First Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Middle Name <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->middlename; ?>" name="middlename" placeholder="Enter Middle Name" id="middlename" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')" readonly>
												<div class="invalid-feedback" style="display:none;" id="middlename_errormessage">
													Middle Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Last Name <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->lastname; ?>" name="lastname" placeholder="Enter Last Name" id="lastname" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')" readonly>
												<div class="invalid-feedback" style="display:none;" id="lastname_errormessage">
													Last Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Gender <span class="login-danger">*</span></label>
												<select class="form-control" name="gender" id="gender">
													<option value="NA">Select Gender</option>
													<option <?php echo ($data->gender == "Male") ? 'selected' : ''; ?>>Male</option>
													<option <?php echo ($data->gender == "Female") ? 'selected' : ''; ?>>Female</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="gender_errormessage">
													Gender is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms calendar-icon" id="dobcalendericon">
												<label>Date Of Birth <span class="login-danger">*</span></label>
												<input class="form-control datetimepicker" value="<?php echo $data->dateofbirth; ?>" type="text" placeholder="DD-MM-YYYY" name="dateofbirth" id="dateofbirth" readonly>
												<div class="invalid-feedback" style="display:none;" id="dateofbirth_errormessage">
													Date of birth is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Mobile <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->contactnumber; ?>" placeholder="Enter Phone" name="contactnumber" id="contactnumber" oninput="this.value = this.value.replace(/[^0-9]/g, '')" minlength="10" maxlength="10" readonly>
												<div class="invalid-feedback" style="display:none;" id="contactnumber_errormessage">
													Mobile Number is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Email <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->email; ?>" placeholder="Enter Email" name="email" id="email" readonly>
												<div class="invalid-feedback" style="display:none;" id="email_errormessage">
													Email is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms calendar-icon" id="joiningcalendericon">
												<label>Joining Date <span class="login-danger">*</span></label>
												<input class="form-control datetimepicker" type="text" value="<?php echo $data->joiningdate; ?>" placeholder="DD-MM-YYYY" name="joiningdate" id="joiningdate" readonly>
												<div class="invalid-feedback" style="display:none;" id="joiningdate_errormessage">
													Joining Date is Required.
												</div>
											</div>
										</div>

										<!-- <div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label>Experience <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter Experience">
												</div>
											</div> -->
										<div class="col-12 col-sm-5 mb-5">
											<div class="form-group students-up-files">
												<label>Profile Photo</label><span class="login-danger">*</span><span class="fw-bold" style="font-size:0.8rem;"> (File name should not contain any special characters)</span>
												<p class="text-danger" style="display:none;font-size:0.75rem;" id="specialcharactermessage">File Name Contains Special Chracters</p>
												<div class="uplod mb-3">
													<label class="file-upload image-upbtn mb-0">
														Update image <input type="file" accept=".jpeg, .jpg, .png" name="profilephoto" id="profilephoto" />
													</label>
												</div>
												<img src="<?php echo base_url() . 'uploads/Staffuploads/' . $data->profilephoto; ?>" width="125" height="125">
											</div>
										</div>
										<div class="col-12">
											<h5 class="form-title"><span>Login Details</span></h5>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Email ID <span class="login-danger">*</span></label>
												<input type="email" class="form-control" value="<?php echo $data->loginemail; ?>" name="loginemail" placeholder="Enter Mail Id" id="loginemail" readonly>
												<div class="invalid-feedback" style="display:none;" id="loginemail_errormessage">
													Email Id is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Password <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->password; ?>" name="password" placeholder="Enter Password" id="password" readonly>
												<div class="invalid-feedback" style="display:none;" id="password_errormessage">
													Password is Required.
												</div>
											</div>
										</div>

										<div class="col-12">
											<h5 class="form-title"><span>Address</span></h5>
										</div>
										<div class="col-12">
											<div class="form-group local-forms">
												<label>Address <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->address; ?>" name="address" placeholder="Enter address" id="address" readonly>
												<div class="invalid-feedback" style="display:none;" id="address_errormessage">
													Address is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>City <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->city; ?>" name="city" placeholder="Enter City" id="city" readonly>
												<div class="invalid-feedback" style="display:none;" id="city_errormessage">
													City is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>State <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->state; ?>" name="state" placeholder="Enter State" id="state" readonly>
												<div class="invalid-feedback" style="display:none;" id="state_errormessage">
													State is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Country <span class="login-danger">*</span></label>
												<input type="text" class="form-control" value="<?php echo $data->country; ?>" name="country" placeholder="Enter Country" id="country" readonly>
												<div class="invalid-feedback" style="display:none;" id="country_errormessage">
													Country is Required.
												</div>
											</div>
										</div>
										<div class="col-12">
										<a href="EditStaff?id=<?php echo $data->id; ?>" class="btn btn-primary">
																Edit
															</a>
															<button  class="btn btn-danger" onclick="deleteModal(<?php echo $data->id?>);">
																Delete
															</button>
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
	<script>
		function deleteModal(stopid) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteStaff?id=' + stopid;
    	$('#deleteModal').modal('show');
		}
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('UpdateStaffForm').addEventListener('submit', function(event) {
				var fieldIds = ['firstname', 'middlename', 'lastname', 'gender', 'dateofbirth', 'contactnumber', 'email', 'joiningdate', 'loginemail', 'password', 'address', 'city', 'state', 'country'];
				for (var i = 0; i < fieldIds.length; i++) {
					console.log(fieldIds[i]);
					validateField(fieldIds[i], event);
				}

			});
		});

		function validateField(fieldId, event) {
			var field = document.getElementById(fieldId);
			if (field.tagName.toLowerCase() === 'select') {
				validateSelect(field, event);
			} else {
				if (!field.value.trim()) {
					if (fieldId === 'dateofbirth') {
						document.getElementById('dobcalendericon').classList.remove('calendar-icon');
					}
					if (fieldId === 'joiningdate') {
						document.getElementById('joiningcalendericon').classList.remove('calendar-icon');
					}

					field.classList.add('is-invalid');
					document.getElementById(fieldId + '_errormessage').style.display = 'block';
					event.preventDefault();
				}
			}
		}

		function validateSelect(selectField, event) {
			if (selectField.value == "NA") {
				selectField.classList.remove('select');
				selectField.classList.add('is-invalid');
				document.getElementById(selectField.id + '_errormessage').style.display = 'block';
				event.preventDefault();
			} else {
				selectField.classList.remove('is-invalid');
				document.getElementById(selectField.id + '_errormessage').style.display = 'none';
			}
		}

		
	</script>
</body>

</html>