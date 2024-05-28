<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Holiday </title>
		
				
		
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">
	
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
			<!-- Main CSS -->
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
	
		
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
			// function RedirecttoDepartmentList()
			// {
			// 	window.location.href="ShowStaff";
			// }
			
			function RedirecttoHolidaysList()
			{
				window.location.href="GetHolidaysList";
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
        
			<!-- /Sidebar -->
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
						<h3 class="fw-bold text-secondary">Holiday</h3>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoHolidaysList();">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="text-secondary text-center">Manage Holidays</h3>
											<!-- <h3 class="text-center text-white">50055</h3> -->
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/HolidayImages/holiday.png" width="65" height="65" alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="Redirecttocheckincheckoutpage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Check in/out</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/StaffModelImages/chk.png" width="65" height="45" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex" id="RouteCard" onclick="RedirecttoSalarypage();">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="fw-bold text-center text-secondary mx-auto">Salary</h3>
										</div>		
										<div class="db-icon bg-light">
											<img  src="<?php echo base_url(); ?>assets/img/StaffModelImages/money.png" width="55" height="55"  alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoLeavePage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h3 class="fw-bold text-center text-secondary mx-auto">Leave</h3>
										</div>
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/StaffModelImages/leave.png" width="60" height="60"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoAttendncepage()">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h3 class="fw-bold text-center text-secondary mx-auto">Attendance</h3>
										</div>	
										<div class="db-icon">
											<img  src="<?php echo base_url(); ?>assets/img/StaffModelImages/attend.png" width="60" height="60" alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div> -->
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