<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Routes</title>

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
		  function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
	</script>
</head>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		var RouteAddSuccess = document.getElementById('toast-container');
		var RouteDeleteSuccess = document.getElementById('RouteDeleteSuccess');
		var RouteUpdateSuccess = document.getElementById('RouteUpdateSuccess');
		if (RouteAddSuccess) {
			RouteAddSuccess.style.display = 'block';
			setTimeout(function() {
				RouteAddSuccess.style.display = 'none';
			}, 3000);
		} else if (RouteDeleteSuccess) {
			RouteDeleteSuccess.style.display = 'block';
			setTimeout(function() {
				RouteDeleteSuccess.style.display = 'none';
			}, 3000);
		} else if (RouteUpdateSuccess) {
			RouteUpdateSuccess.style.display = 'block';
			setTimeout(function() {
				RouteUpdateSuccess.style.display = 'none';
			}, 3000);
		}
	});
</script>

<!-- <div id="toast-container" class="toast-container toast-top-right">
	<div class="toast toast-success" aria-live="polite" style="display: block;"><button type="button" class="toast-close-button" role="button" fdprocessedid="tjl6p8">×</button>
		<div class="toast-title">Miracle Max Says</div>
		<div class="toast-message">Have fun storming the castle!</div>
	</div>
</div> -->

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
	$RouteAddSuccess = $this->session->flashdata('RouteAddSuccess');
	$RouteUpdateSuccess = $this->session->flashdata('RouteUpdateSuccess');
	$RouteDeleteSuccess = $this->session->flashdata('RouteDeleteSuccess');
	$RouteDeleteFailure=$this->session->flashdata('RouteDeleteFailure');
	?>
	<?php if (isset($RouteAddSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Route Added Successfully</div>
			</div>
		</div>

	<?php endif; ?>
	<?php if (isset($RouteUpdateSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Route Updated Successfully</div>
			</div>
		</div>

	<?php endif; ?>
	<?php if (isset($RouteDeleteSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Route Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($RouteDeleteFailure)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-error" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Route Cannot be Deleted as it is associated with a transport!</div>
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
	
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title">Routes</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="Transport">Transport </a></li>
								<li class="active">/ Routes</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="student-group-form">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Route Serial Number">
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Route Name">
							</div>
						</div>
						<div class="col-lg-2">
							<div class="search-student-btn">
								<button type="btn" class="btn btn-primary">Search</button>
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
											<h3 class="page-title">Routes</h3>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
											<!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
											<a href="addRoute" class="btn btn-primary"><i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
								<!-- /Page Header -->
								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th class="text-center">Sr no.</th>
												<th class="text-center">Route Serial Number</th>
												<th class="text-center">Route Name</th>
												<th class="text-center">Start Point</th>
												<th class="text-center">End Point</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
											foreach ($routes as $route) { ?>
												<tr>
													<td class="text-center"><?php $i++;
																			echo $i; ?></td>
													<td class="text-center"><?php echo $route->serialnumber; ?></td>
													<td class="text-center"><?php echo $route->routename; ?></td>

													<td class="text-center"><?php echo $route->routestartpoint; ?></td>
													<td class="text-center"><?php echo $route->routeendpoint; ?></td>
													<td class="text-center">
														<div>
															<a href="ViewRouteData?id=<?php echo $route->id; ?>" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															<a href="EditRoute?id=<?php echo $route->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<button class="btn btn-sm bg-danger-light deleteButton" onclick="deleteModal('<?php echo $route->id; ?>')" data-routeid="<?php echo $route->id; ?>">
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
	<script>
		// Get all elements with the class 'deleteButton'
		// var deleteButtons = document.querySelectorAll('.deleteButton');

		// // Loop through each delete button
		// deleteButtons.forEach(function(deleteButton) {
		// 	// Add click event listener to each delete button
		// 	deleteButton.addEventListener('click', function(event) {
		// 		var userConfirmation = confirm("Are you sure you want to Delete?");
		// 		if (!userConfirmation) {
		// 			event.preventDefault(); // Prevent default action (e.g., form submission)
		// 		}
		// 	});
		// });
		function deleteModal(routeid) {
			const modalYesButton = document.getElementById('cancelsubjectbutton');
			modalYesButton.href = 'DeleteRoute?id=' + routeid;
			$('#deleteModal').modal('show');
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('input[placeholder="Search by Route Serial Number"], input[placeholder="Search by Route Name"]').on('input', function() {
				var routeSerialNumber = $('input[placeholder="Search by Route Serial Number"]').val().trim().toLowerCase();
				var routeName = $('input[placeholder="Search by Route Name"]').val().trim().toLowerCase();

				$('tbody tr').each(function() {
					var serialNumber = $(this).find('td:nth-child(2)').text().trim().toLowerCase();
					var name = $(this).find('td:nth-child(3)').text().trim().toLowerCase();

					if ((routeSerialNumber === '' || serialNumber.includes(routeSerialNumber)) &&
						(routeName === '' || name.includes(routeName))) {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			});
		});
	</script>
</body>
<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:41 GMT -->

</html>