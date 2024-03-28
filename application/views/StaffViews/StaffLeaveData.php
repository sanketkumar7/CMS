<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Leave Data</title>

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

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toatr.css">


	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var ApprovedSuccess = document.getElementById('toast-container');
			if (ApprovedSuccess) {
				ApprovedSuccess.style.display = 'block';
				setTimeout(function() {
					ApprovedSuccess.style.display = 'none';
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
	<?php
	$ApprovedSuccess = $this->session->flashdata('ApprovedSuccess');
	$RejectSuccess = $this->session->flashdata('RejectSuccess');
	// $DriverUpdateSuccess = $this->session->flashdata('DriverUpdateSuccess');
	// $DrverdeleteFail = $this->session->flashdata('DrverdeleteFail');
	?>
	<?php if (isset($ApprovedSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Leave Request Approved</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($RejectSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Leave Request Rejected</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- <?php if (isset($DriverDeleteSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Driver Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($DrverdeleteFail)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-error" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Driver Cannot be Deleted as it is associated with a vehicle</div>
			</div>
		</div>
	<?php endif; ?> -->
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
							<h3 class="page-title">Leave Requests</h3>
							<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="AdminStaffDashboard">Staff</a></li>
									<li class="active">/ Leave Data</li>
								</ul>
						</div>
					</div>
				</div>
				<div class="student-group-form">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by ID" id="Staffid" oninput="search('Staffid')">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Status" id="status" oninput="search('status')">
							</div>
						</div>
						<!--
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Phone ...">
							</div>
						</div>
						<div class="col-lg-2">
							<div class="search-student-btn">
								<button type="btn" class="btn btn-primary">Search</button>
							</div>
						</div> -->
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body">
								<!-- Page Header -->
								<div class="page-header">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="page-title">Leave Requests</h3>
										</div>
										<!-- <div class="col-auto text-end float-end ms-auto download-grp">
											<a href="AddDriverPage" class="btn btn-primary"><i class="fas fa-plus"></i></a>
										</div> -->
									</div>
								</div>
								<!-- /Page Header -->
								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th class="text-center">Sr No.</th>
												<th class="text-center">Staff Id</th>
												<th class="text-center">Leave Type</th>
												<th>Leave Span</th>
												<th class="text-center">Leave Date</th>
												<th class="text-center">From Date</th>
												<th class="text-center">To Date</th>
												<th class="text-center">Approval Status</th>
												<th class="text-center">Action</th>
												<th class="text-center">View</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
											foreach ($data as $data) { ?>
												<tr>
													<td class="text-center"><?php echo ++$i; ?></td>
													<td class="text-center"><?php echo $data->staffid; ?></td>
													<td class="text-center"><?php echo $data->leavetype; ?></td>
													<?php if($data->totaldays==0):?>
													<td class="text-center">NA</td>
													<?php else:?>
														<td class="text-center"><?php echo $data->totaldays; ?></td>
														<?php endif?>
													<?php if($data->leavedate==""):?>
													<td class="text-center">NA</td>
													<?php else:?>
														<td class="text-center"><?php echo $data->leavedate; ?></td>
														<?php endif?>
														<?php if($data->fromdate==""):?>
													<td class="text-center">NA</td>
													<?php else:?>
														<td class="text-center"><?php echo $data->fromdate; ?></td>
													<?php endif?>
													<?php if($data->todate==""):?>
													<td class="text-center">NA</td>
													<?php else:?>
														<td class="text-center"><?php echo $data->todate; ?></td>
														<?php endif?>
														
													<?php if ($data->status == "Pending") : ?>
														<td class="text-center"><button class="btn btn-sm btn-warning text-white"><?php echo $data->status; ?></button></td>
													<?php elseif ($data->status == "Rejected") : ?>
														<td class="text-center"><button class="btn btn-sm btn-danger"><?php echo $data->status; ?></button></td>
													<?php else : ?>
														<td class="text-center"><button class="btn btn-sm btn-success"><?php echo $data->status; ?></button></td>
													<?php endif; ?>
													<td>
											
														<div class="dropdown-center">
															<p class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																Action
															</p>
															<ul class="dropdown-menu" style="width: 30px;">
																<li><a class="dropdown-item" href="ChangeLeaveStatus?id=<?php echo $data->id; ?>&status=Approve">Approve</a></li>
																
																<li><a class="dropdown-item" href="ChangeLeaveStatus?id=<?php echo $data->id; ?>&status=Reject">Reject</a></li>
															</ul>		
														</div>
					
													</td>
													<td><button class="btn" onclick="fetchstaffdetails('<?php echo $data->staffid; ?>'); previewDetail();"><i class="feather-eye"></i></button></td>
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
			<!-- /Footer -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="documentModalLabel">Staff Details</h4>
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
                                    <h4>Staff Id</h4>
                                    <h5 id="staffidi"></h5>
                                </div>
                              
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
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
	<script>
		function deleteModal(driverid) {
			console.log(driverid);
			const modalYesButton = document.getElementById('cancelsubjectbutton');
			modalYesButton.href = 'DeleteDriverWithid?id=' + driverid;
			$('#deleteModal').modal('show');
		}
		// Get all elements with the class 'deleteButton'
		// var deleteButtons = document.querySelectorAll('.deleteButton');

		// // Loop through each delete button
		// deleteButtons.forEach(function(deleteButton) {
		//     // Add click event listener to each delete button
		//     deleteButton.addEventListener('click', function(event) {
		//         var userConfirmation = confirm("Are you sure you want to Delete?");
		//         if (!userConfirmation) {
		//             event.preventDefault(); // Prevent default action (e.g., form submission)
		//         }
		//     });
		// });
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('input[placeholder="Search by ID"], input[placeholder="Search by Name"], input[placeholder="Search by Phone ..."]').on('input', function() {
				var driverId = $('input[placeholder="Search by ID"]').val().trim().toLowerCase();
				var driverName = $('input[placeholder="Search by Name"]').val().trim().toLowerCase();
				var driverPhone = $('input[placeholder="Search by Phone ..."]').val().trim().toLowerCase();
				console
				$('tbody tr').each(function() {
					var id = $(this).find('td:nth-child(2)').text().trim().toLowerCase();
					var name = $(this).find('td:nth-child(3)').text().trim().toLowerCase();
					var phone = $(this).find('td:nth-child(4)').text().trim().toLowerCase();

					if ((driverId === '' || id.includes(driverId)) &&
						(driverName === '' || name.includes(driverName)) &&
						(driverPhone === '' || phone.includes(driverPhone))) {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			});
		});

		function fetchstaffdetails(staffid) {
            fetch('GetStaffData?staffid=' + staffid)

                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    document.getElementById('staffidi').innerText = data.staffid;
                    document.getElementById('name').innerText = data.name;
                    document.getElementById('course').innerText = data.contactnumber;
                    document.getElementById('type').innerText = data.email;
                    // document.getElementById('branch').innerText = data.branch;
                    // document.getElementById('year').innerText = data.year;
                    // document.getElementById('semester').innerText = data.semester;
                })
                .catch(function(error) {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

		function previewDetail() {
            $('#detailModal').modal('show');
        }

		function search() {
    var inputID = document.getElementById("Staffid").value.trim().toUpperCase();
    var inputStatus = document.getElementById("status").value.trim().toUpperCase();
    var table = document.getElementsByClassName("datatable")[0]; // Assuming only one table with class "datatable"
    var tr = table.getElementsByTagName("tr");
    for (var i = 0; i < tr.length; i++) {
        var tdID = tr[i].getElementsByTagName("td")[1]; // Assuming staff ID is in the second column
        var tdStatus = tr[i].getElementsByTagName("td")[7]; // Assuming status is in the eighth column
        if (tdID && tdStatus) {
            var txtValueID = tdID.textContent || tdID.innerText;
            var txtValueStatus = tdStatus.textContent || tdStatus.innerText;
            var matchID = txtValueID.toUpperCase().indexOf(inputID) > -1;
            var matchStatus = txtValueStatus.toUpperCase().indexOf(inputStatus) > -1;
            if (matchID && matchStatus) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

	</script>
</body>

</html>