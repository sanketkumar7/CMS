<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Students</title>
		
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
		document.addEventListener('DOMContentLoaded', function() {
			var StudentAlotSuccess = document.getElementById('toast-container');
			if (StudentAlotSuccess) {
				StudentAlotSuccess.style.display = 'block';
				setTimeout(function() {
					StudentAlotSuccess.style.display = 'none';
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
	$StudentAlotSuccess = $this->session->flashdata('StudentAlotSuccess');
	$AlotRemoveSuccess = $this->session->flashdata('AlotRemoveSuccess');
	$AlotUpdateSuccess = $this->session->flashdata('AlotUpdateSuccess');
	?>
	<?php if (isset($StudentAlotSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Added Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($AlotRemoveSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($AlotUpdateSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Student Updated Successfully</div>
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
							<div class="col">
								<h3 class="page-title">Students</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="Transport">Transport </a></li>
									<li class="active">/ Students</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="student-group-form mb-3">
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
						<!-- <div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Course">
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Route">
							</div>
						</div> -->
						<!-- <div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Stop">
							</div>
						</div> -->
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Department">
							</div>
						</div>
						<!-- <div class="col-lg-2 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Year">
							</div>
						</div> -->
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search by Status">
							</div>
						</div>
						<div class="col-lg-3 col-md-6 d-none">
							<div class="form-group">
							<select class="form-select" id="feesstatus" style="height:45px;font-size:15px !important;">
													<option value="complete">Complete</option>
													<option value="incomplete">Incomplete</option>
												</select>
							</div>
						</div>

						<div class="col-lg-2">
							<div class="search-student-btn">
								<button type="btn" class="btn btn-primary">Search</button>
							</div>
						</div>
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
											<h3 class="page-title">Students</h3>
										</div>
										<div class="col-auto text-end float-end ms-auto download-grp">
												<a href="AllotStudent" class="btn btn-primary"><i class="fas fa-plus"></i></a>
											</div>
									</div>
								</div>
								<!-- /Page Header -->
								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th>Sr No.</th>
												<th>Student Name</th>
												<th>Student Reg No.</th>
												<th>Course</th>
												<th>Department</th>
												<th>Year</th>
												<th>Route</th>
												<th>Stop</th>
												<th>Total Bus Fees</th>
												<th>Remaining fees</th>
												<th>Fees Status</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
											foreach ($allotedstudents as $allotedstudent) {
												?>
												<tr>
													<td><?php echo ++$i; ?></td>
													<td><?php echo $allotedstudent->studentname; ?></td>
													<td><?php echo $allotedstudent->studentregnumber; ?></td>
													<td><?php echo $allotedstudent->course; ?></td>
													<td><?php echo $allotedstudent->studentdepartment; ?></td>
													<td><?php echo $allotedstudent->year; ?></td>
													<td><?php echo $allotedstudent->routename; ?></td>
													<td><?php echo $allotedstudent->stopname; ?></td>
													<td><?php echo $allotedstudent->totalbusfees; ?></td>
													<td><?php echo $allotedstudent->reamainingbusfees; ?></td>
													<td><?php echo $allotedstudent->feesstatus; ?></td>
													<td>
														<div>
															<a href="ShowTransportServiceData?id=<?php echo $allotedstudent->id; ?>" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															<a href="EditAllotData?id=<?php echo $allotedstudent->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<button onclick="deleteModal('<?php echo $allotedstudent->id; ?>')" class="btn btn-sm bg-danger-light deleteButton">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[placeholder^="Search by"]').on('input', function() {
            var studentRegNumber = $('input[placeholder="Search by Student Regsiter Number"]').val().trim().toLowerCase();
            var studentName = $('input[placeholder="Search by Student Name"]').val().trim().toLowerCase();
            // var course = $('input[placeholder="Search by Course"]').val().trim().toLowerCase();
            // var route = $('input[placeholder="Search by Route"]').val().trim().toLowerCase();
            // var stop = $('input[placeholder="Search by Stop"]').val().trim().toLowerCase();
            var department = $('input[placeholder="Search by Department"]').val().trim().toLowerCase();
            // var year = $('input[placeholder="Search by Year"]').val().trim().toLowerCase();
            var status = $('input[placeholder="Search by Status"]').val().trim().toLowerCase();
            $('tbody tr').each(function() {
                var regNumber = $(this).find('td:nth-child(3)').text().trim().toLowerCase();
                var name = $(this).find('td:nth-child(2)').text().trim().toLowerCase();
                // var courseValue = $(this).find('td:nth-child(4)').text().trim().toLowerCase();
                // var routeValue = $(this).find('td:nth-child(7)').text().trim().toLowerCase();
                // var stopValue = $(this).find('td:nth-child(8)').text().trim().toLowerCase();
                var departmentValue = $(this).find('td:nth-child(5)').text().trim().toLowerCase();
                // var yearValue = $(this).find('td:nth-child(6)').text().trim().toLowerCase();
                var statusValue = $(this).find('td:nth-child(11)').text().trim().toLowerCase();
                if ((studentRegNumber === '' || regNumber.includes(studentRegNumber)) &&
                    (studentName === '' || name.includes(studentName)) &&
                    // (course === '' || courseValue.includes(course)) &&
                    // (route === '' || routeValue.includes(route)) &&
                    // (stop === '' || stopValue.includes(stop)) &&
                    (department === '' || departmentValue.includes(department)) &&
                    // (year === '' || yearValue.includes(year)) &&
                    (status === '' || statusValue==status || statusValue.includes(status))) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });

	function deleteModal(id) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteTransportServiceWithid?id=' + id;
    $('#deleteModal').modal('show');
}
</script>

    </body>

</html>