<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:06 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Route Data</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
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

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">

<script>
	  function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
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


		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title" id="title">Routes</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="Transport">Transport </a></li>
									<li class=""><a href="RoutesList">/Routes</a></li>
									<li class="active">/Route Data</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row" id="studentformcard">
					<div class="col-sm-12">

						<div class="card comman-shadow">
							<div class="card-body">

								<div class="row">
									<div class="col-12">
										<h5 class="form-title student-info">Route Information <span><a href="javascript:;"></a></span></h5>
									</div>
									<div class="col-12 col-sm-4 d-none">
										<div class="form-group local-forms">
											<label>Route Serial No.<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter Route No." name="id" value="<?php echo $route->id; ?>" readonly>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="form-group local-forms">
											<label>Route Serial No.<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter Route No." name="serialnumber" value="<?php echo $route->serialnumber; ?>" readonly>
										</div>
									</div>
									<div class="col-12 col-sm-4" style="visibility:hidden;">
										<div class="form-group local-forms">
											<label>Route Serial No.<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter Route No.">
										</div>
									</div>
									<div class="col-12 col-sm-4" style="visibility:hidden;">
										<div class="form-group local-forms">
											<label>Route Serial No.<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter Route No.">
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="form-group local-forms">
											<label>Route Name <span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Enter Route Name" name="routename" value="<?php echo $route->routename; ?>" readonly>
											<div class="invalid-feedback" style="display:none;" id="routename_errormessage">
												Route is Required.
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="form-group local-forms">
											<label>Start Point<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Route Start Point" name="routestartpoint" value="<?php echo $route->routestartpoint; ?>" readonly>
											<div class="invalid-feedback" style="display:none;" id="routestartpoint_errormessage">
												Route Start Point is Required.
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="form-group local-forms">
											<label>End Point<span class="login-danger">*</span></label>
											<input type="text" class="form-control" placeholder="Route End Point" name="routeendpoint" value="<?php echo $route->routeendpoint; ?>" readonly>
											<div class="invalid-feedback" style="display:none;" id="routeendpoint_errormessage">
												Route Endpoint is Required.
											</div>
										</div>
									</div>
									<div>
										<a href="EditRoute?id=<?php echo $route->id; ?>" class="btn btn-primary">Edit</a>
										<button onclick="deleteModal('<?php echo $route->id; ?>')" data-routeid="<?php echo $route->id; ?>" class="btn btn-danger">Delete</button>
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
	<footer class="mt-5" id="footer">
		<p>COPYRIGHT © 2024 Manasvi Tech Solutions Pvt Ltd.</p>
	</footer>
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
		// 	 function toggleOtherReligionInput() {
		//     var religionSelect = document.getElementById('religion');
		//     var otherReligionInput = document.getElementById('other_religion_input');

		//     // If "Others" is selected, show the additional input field; otherwise, hide it
		//     otherReligionInput.style.display = religionSelect.value === 'Others' ? 'block' : 'none';
		// }

		// // Attach the function to the change event of the religion select
		// document.getElementById('religion').addEventListener('change', toggleOtherReligionInput);

		// 	function toggleOtherBloodGroupInput() {
		// 		var bloodGroupSelect = document.getElementById('blood_group');
		// 		var otherBloodGroupInput = document.getElementById('other_blood_group_input');

		// 		// If "Others" is selected, show the additional input field; otherwise, hide it
		// 		otherBloodGroupInput.style.display = bloodGroupSelect.value === 'Others' ? 'block' : 'none';
		// 	}

		// Attach the function to the change event of the blood group select
		// document.getElementById('blood_group').addEventListener('change', toggleOtherBloodGroupInput);
		function deleteModal(routeid) {
			const modalYesButton = document.getElementById('cancelsubjectbutton');
			modalYesButton.href = 'DeleteRoute?id=' + routeid;
			$('#deleteModal').modal('show');
		}
	</script>
</body>

</html>