<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:01 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Preskool - Students</title>

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
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toatr.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.css">


	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
	<style>
		.alert-fixed {
			padding: 5px;
			position: fixed;
			top: 60px !important;
			left: 60%;
			transform: translateX(-50%);
			z-index: 1300;
			width: 86%;
			margin: 0;
			height: 33px;
		}
	</style>

	<script>
		function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
		document.addEventListener('DOMContentLoaded', function() {
			var StudentAddSuccess = document.getElementById('toast-container');
			if (StudentAddSuccess) {
				StudentAddSuccess.style.display = 'block';
				setTimeout(function() {
					StudentAddSuccess.style.display = 'none';
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
	$StudentAddSuccess = $this->session->flashdata('StudentAddSuccess');
	$StudentDeleteSuccess = $this->session->flashdata('StudentDeleteSuccess');
	$StudentUpdateSuccess = $this->session->flashdata('StudentUpdateSuccess');
	$StudentDeleteError = $this->session->flashdata('StudentDeleteError');
	?>
	<?php if (isset($StudentAddSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Added Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($StudentDeleteSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($StudentUpdateSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Updated Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($StudentDeleteError)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-error" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Cannot Be Deleted as Bus Fees are Incomplete</div>
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
					<div class="row">
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title">Students</h3>
								<ul class="breadcrumb">
								<li><a href="AdminStudentDashboard">Students</a></li>
									<li class="">/ Manage Students</li>
									<!-- <li class="breadcrumb-item active">/ Add Students</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="student-group-form">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Student Regsiter Number">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Student Name">
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Phone">
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

						<div class="card card-table comman-shadow">
							<div class="card-body">

								<!-- Page Header -->
								<div class="page-header">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="page-title">Students</h3>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
								
											<a href="AddStudentPage" class="btn btn-outline-primary me-2"><i class="fas fa-plus"></i> </a>
										</div>
									</div>
								</div>
								<!-- /Page Header -->

								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th>
													Sr no.
												</th>
												<th>Student ID</th>
												<th class="text-center">Name</th>
												<th>Course</th>
												<th>DOB</th>
												<th>Gender</th>
												<th>Mobile Number</th>
												<th class="text-center">Address</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
											foreach ($students as $student) {
											?>
												<tr>
													<td><?php $i++;
														echo $i; ?></td>
													<td><?php echo $student->student_id; ?></td>
													<td>
														<h2 class="table-avatar">
															<!-- <img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="<?php echo base_url(); ?>assets/img/profiles/avatar-10.jpg" alt="User Image"> -->
															<?php echo $student->student_first_name . " " . $student->student_last_name; ?>
														</h2>
													</td>
													<td><?php echo $student->type; ?></td>
													<td><?php echo $student->student_date_of_birth; ?></td>
													<td><?php echo $student->gender; ?></td>
													<td><?php echo $student->student_phone_number; ?></td>
													<td><?php echo $student->address; ?></td>
													<td class="text-end">
														<div class="actions">
															<a href="ShowStudentData?id=<?php echo $student->id; ?>" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															<a href="EditStudent?id=<?php echo $student->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<button  class="btn btn-sm bg-danger-light" onclick="deleteModal(<?php echo $student->id?>);">
																<i class="feather-trash-2"></i>
															</button>
															<!-- <a href="DeleteStudent?id=<?php echo $student->id; ?>" class="btn btn-sm bg-danger-light deleteButton">
																<i class="feather-trash-2"></i>
															</a> -->
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

	<!-- Feather Icon JS -->
	<script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="<?php echo base_url() ?>assets/js/script.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

	<!-- Sweetalert 2 -->

	<!-- Include SweetAlert2 CSS and JS -->


	<!-- <div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto; display: none;" id="sweetalertthingforstudentAdd">
    <div class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
            <h4 class="swal2-title text-success" style="display: flex;">Student Added Successfully ..!</h4>
        </div>
        <div class="swal2-content">
            <div id="swal2-content" class="swal2-html-container" style="display: block;"></div>
        </div>
        <div class="swal2-actions">
            <button type="button" class="swal2-confirm btn btn-primary" aria-label="" fdprocessedid="zh06c" style="display: inline-block;" id="okbutton">OK</button>
        </div>
    </div>
</div> -->

	<!-- // 		 const swalWithBootstrapButtons = Swal.mixin({
//         customClass: {
//             confirmButton: "btn btn-success",
//             cancelButton: "btn btn-danger"
//         },
//         buttonsStyling: false
//     });

//     // Assuming you have a button with the id 'DeleteButton'
//     var deleteButton = document.getElementById('Deletebutton');
//     // Add a click event listener to the button
//     deleteButton.addEventListener('click', function (event) {
// 		event.preventDefault();
// 		Swal.fire({
//   title: "Are you sure?",
//   text: "You won't be able to revert this!",
//   icon: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#3085d6",
//   cancelButtonColor: "#d33",
//   confirmButtonText: "Yes, delete it!"
// }).then((result) => {
//   if (result.isConfirmed) {
   
//   }
//   else{
// 	return;
//   }
// });
//     }); -->
<script>
    // Get all elements with the class 'deleteButton'
    var deleteButtons = document.querySelectorAll('.deleteButton');

    // Loop through each delete button
    deleteButtons.forEach(function(deleteButton) {
        // Add click event listener to each delete button
        deleteButton.addEventListener('click', function(event) {
            var userConfirmation = confirm("Are you sure you want to Delete?");
            if (!userConfirmation) {
                event.preventDefault(); // Prevent default action (e.g., form submission)
            }
        });
    });
	function deleteModal(studentid) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteStudent?id=' + studentid;
    	$('#deleteModal').modal('show');
		}
</script>
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
	<footer>
		<p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
	</footer>

	<script>
		    $(document).ready(function() {
        $('input[placeholder^="Search by"]').on('input', function() {
            var studentRegNumber = $('input[placeholder="Search by Student Regsiter Number"]').val().trim().toLowerCase();
            var studentName = $('input[placeholder="Search by Student Name"]').val().trim().toLowerCase();
            // var course = $('input[placeholder="Search by Course"]').val().trim().toLowerCase();
            // var route = $('input[placeholder="Search by Route"]').val().trim().toLowerCase();
            // var stop = $('input[placeholder="Search by Stop"]').val().trim().toLowerCase();
            var department = $('input[placeholder="Search by Phone"]').val().trim().toLowerCase();
            // var year = $('input[placeholder="Search by Year"]').val().trim().toLowerCase();
            $('tbody tr').each(function() {
                var regNumber = $(this).find('td:nth-child(2)').text().trim().toLowerCase();
                var name = $(this).find('td:nth-child(3)').text().trim().toLowerCase();
                // var courseValue = $(this).find('td:nth-child(4)').text().trim().toLowerCase();
                // var routeValue = $(this).find('td:nth-child(7)').text().trim().toLowerCase();
                // var stopValue = $(this).find('td:nth-child(8)').text().trim().toLowerCase();
                var departmentValue = $(this).find('td:nth-child(7)').text().trim().toLowerCase();
                // var yearValue = $(this).find('td:nth-child(6)').text().trim().toLowerCase();
                if ((studentRegNumber === '' || regNumber.includes(studentRegNumber)) &&
                    (studentName === '' || name.includes(studentName)) &&
                    // (course === '' || courseValue.includes(course)) &&
                    // (route === '' || routeValue.includes(route)) &&
                    // (stop === '' || stopValue.includes(stop)) &&
                    (department === '' || departmentValue.includes(department))) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
	</script>
</body>

</html>