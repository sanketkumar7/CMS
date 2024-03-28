<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Transport</title>
		
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
			var TransportSuccess = document.getElementById('toast-container');
			if (TransportSuccess) {
				TransportSuccess.style.display = 'block';
				setTimeout(function() {
					TransportSuccess.style.display = 'none';
				}, 3000);
			} 
		});
	</script>
		<script>
		
			var RouteCard=document.getElementById('RouteCard');
			function Redirecttoroutespage()
			{
				window.location.href="RoutesList";
			}
			
			function RedirecttoStopaPage()
			{
				window.location.href="StopsList";
			}

			function RedirecttoVehiclespage()
			{
				window.location.href="VehicleList";
			}

			function RedirecttoDriverspage()
			{
				window.location.href="DriverList";
			}

			function RedirecttoTransportspage()
			{
				window.location.href="Transport";
			}

			function RedirecttoAllotstudentspage()
			{
				window.location.href="ShowAllotedStudentslist";
			}

			function RedirectttoAttendancepage()
			{
				window.location.href="Attendance";
			}
			function RedirectttoSalarypage()
			{
				window.location.href="DriverSalary";
			}
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
	$TransportAddSuccess = $this->session->flashdata('TransportAddSuccess');
	$TransportUpdateSuccess = $this->session->flashdata('TransportUpdateSuccess');
	$TransportDeleteSuccess = $this->session->flashdata('TransportDeleteSuccess');
	$TransporteditFail=$this->session->flashdata("TransporteditFail");
	$TransportdeleteFail=$this->session->flashdata("TransportdeleteFail");
	?>
	<?php if (isset($TransportAddSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Transport Added Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($TransportUpdateSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Transport Updated Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($TransportDeleteSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Transport Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($TransporteditFail)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-error" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Transport Caannot be edited as students are associated</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($TransportdeleteFail)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-error" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Transport Caannot be Deleted as students are associated</div>
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
					<li  class="nav-item dropdown language-drop me-2">
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
					<li  class="nav-item zoom-screen me-2">
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
			<!-- /Sidebar -->
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
						<h3 class="fw-bold text-secondary">Transport</h3>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoVehiclespage();">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="text-secondary text-center">Vehicles</h3>
											<!-- <h3 class="text-center text-white">50055</h3> -->
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/bsremovebg.png" width="75" height="75" alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoDriverspage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Drivers</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/dr.png" width="45" height="45" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 d-flex" id="RouteCard" onclick="Redirecttoroutespage();">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="fw-bold text-center text-secondary mx-auto">Routes</h3>
										</div>		
										<div class="db-icon bg-light">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/rtt.jpg" width="55" height="55"  alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoStopaPage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="fw-bold text-center text-secondary mx-auto">Stops</h3>
										</div>
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/btop.jpg" width="55" height="55"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoAllotstudentspage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Students</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/students.avif" width="55" height="55" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirectttoAttendancepage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Attendance</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/Atten.png" width="55" height="55" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirectttoSalarypage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Salary</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/TransportModelImages/Salary.jpg" width="60" height="60" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-sm-12">

						<div class="card card-table">
							<div class="card-body">
								<!-- Page Header -->
								<div class="page-header">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="page-title">Routes,Vehicles & Drivers</h3>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
												<a href="AddTransportpage" class="btn btn-primary"><i class="fas fa-plus"></i></a>
											</div>
									</div>
								</div>
								<!-- /Page Header -->
								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th>Sr No.</th>
												<th>Transport Id</th>
												<th>Route Name</th>
												<th>Vehicle Reg Number</th>
												<th>Vehicle Type</th>
												<th>Total Capacity</th>
												<th>Available Capacity</th>
												<th>Driver Name</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
											foreach ($transports as $transport) {
												?>
												<tr>
													<td><?php echo ++$i; ?></td>
													<td><?php echo $transport->transportid; ?></td>
													<td><?php echo $transport->routename; ?></td>
													<td><?php echo $transport->vehiclenumber; ?></td>
													<td><?php echo $transport->vehicletype; ?></td>
													<td><?php echo $transport->totalcapacity; ?></td>
													<td><?php echo $transport->availablecapacity; ?></td>
													<td><?php echo $transport->drivername; ?></td>
													<td class="text-center">
														<div>
															<a href="ShowTransportData?id=<?php echo $transport->id; ?>" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															<a href="EditTransportData?id=<?php echo $transport->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<button onclick="deleteModal('<?php echo $transport->id; ?>')"  class="btn btn-sm bg-danger-light deleteButton">
																<i class="feather-trash-2"></i>
															</button>
														</div>
													</td>
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

				<!-- Footer -->
				
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		<footer>
					<p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>					
				</footer>
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

		<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
    </body>
	<script>
    // Get all elements with the class 'deleteButton'
	function deleteModal(transportid) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteTransportWithid?id=' + transportid;
    $('#deleteModal').modal('show');
}
</script>
<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:41 GMT -->
</html>