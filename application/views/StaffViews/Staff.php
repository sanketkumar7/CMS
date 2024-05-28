<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:09 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>All Staff</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.png">
	
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
			
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
		
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
	
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toatr.css">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/datatables.min.css">
		
	
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			var StaffSuccess = document.getElementById('toast-container');
			if (StaffSuccess) {
				StaffSuccess.style.display = 'block';
				setTimeout(function() {
					StaffSuccess.style.display = 'none';
				}, 3000);
			} 
		});
		function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
	</script>
    </head>
    <body>
	<?php
	$StaffAddSuccess = $this->session->flashdata('StaffAddSuccess');
	$StaffUpdateSuccess = $this->session->flashdata('StaffUpdateSuccess');
	$StaffDeleteSuccess = $this->session->flashdata('StaffDeleteSuccess');
	?>
	<?php if (isset($StaffAddSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Staff Added Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($StaffUpdateSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Staff Updated Successfully</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($StaffDeleteSuccess)) : ?>
		<div id="toast-container" class="toast-container toast-top-right">
			<div class="toast toast-success" aria-live="polite" style="display: block;">
				<div class="toast-title text-center">Staff Deleted Successfully</div>
			</div>
		</div>
	<?php endif; ?>
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
						<img src="<?php echo base_url()?>assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="<?php echo base_url()?>assets/img/logo-small.png" alt="Logo" width="30" height="30">
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
							<img src="<?php echo base_url()?>assets/img/icons/header-icon-01.svg" alt="">
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
							<img src="<?php echo base_url()?>assets/img/icons/header-icon-05.svg" alt="">
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
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url()?>assets/img/profiles/avatar-02.jpg">
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
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url()?>assets/img/profiles/avatar-11.jpg">
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
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url()?>assets/img/profiles/avatar-17.jpg">
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
													<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url()?>assets/img/profiles/avatar-13.jpg">
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
							<img src="<?php echo base_url()?>assets/img/icons/header-icon-04.svg" alt="">
						</a>
					</li>
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow new-user-menus">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<div class="user-img">
								<img class="rounded-circle" src="<?php echo base_url()?>assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="<?php echo base_url()?>assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
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
								<h3 class="page-title">Staff</h3>
								<ul class="breadcrumb">
									<li><a href="AdminStaffDashboard">Staff</a></li>
									<li class="active">/Staff List</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="student-group-form">
						<div class="row">
							<div class="col-lg-3 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by ID ..." id="idsearch">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by Name ..." id="namesearch">
								</div>
							</div>
							<div class="col-lg-4 col-md-6">  
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search by Phone ..." id="contactnumber">
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
												<h3 class="page-title">Staff</h3>
											</div>
											<div class="col-auto text-end float-end ms-auto download-grp">
												
												<a href="AddStaff" class="btn btn-primary"><i class="fas fa-plus"></i></a>
											</div>
										</div>
									</div>
									<!-- /Page Header -->
									
									<div class="table-responsive">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
											<thead class="student-thread">
												<tr>
													<th>SR NO.</th>
													<th>ID</th>
													<th>Name</th>
													<!-- <th>Class</th> -->
													<th>Gender</th>
													<!-- <th>Subject</th> -->
													<!-- <th>Section</th> -->
													<th>Mobile Number</th>
													<!-- <th>Address</th> -->
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=0; foreach($data as $data){?>
													<?php if($data->loginemail!="admin@gmail.com") :?>
												<tr>
													<td><?php echo ++$i;?></td>
													<td><?php echo $data->staffid;?></td>
													<td><?php echo $data->firstname." ".$data->lastname;?></td>
													<td><?php echo $data->gender;?></td>
													<td><?php echo $data->contactnumber;?></td>
													<!-- <td></td>
													<td></td>
													<td></td>
													<td></td> -->
													<td class="text-center">
														<div>
															<a href="ShowStaffData?id=<?php echo $data->id; ?>" class="btn btn-sm bg-success-light me-2">
																<i class="feather-eye"></i>
															</a>
															<a href="EditStaff?id=<?php echo $data->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<button  class="btn btn-sm bg-danger-light" onclick="deleteModal(<?php echo $data->id?>);">
																<i class="feather-trash-2"></i>
															</button>
														</div>
													</td>
												</tr>
												<?php endif?>
												<?php }?>
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
        <script src="<?php echo base_url()?>assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="<?php echo base_url()?>assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="<?php echo base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<!-- Datatables JS -->
		<script src="<?php echo base_url()?>assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
	<script>
		 function deleteModal(stopid) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteStaff?id=' + stopid;
    	$('#deleteModal').modal('show');
		}

		document.addEventListener('DOMContentLoaded', function() {
        var searchByIdInput = document.querySelector('#idsearch');
        var searchByNameInput = document.querySelector('#namesearch');
        var searchBycontactnumberInput = document.querySelector('#contactnumber');
        function filterTable() {
            var staffId = searchByIdInput.value.trim().toLowerCase();
            var staffName = searchByNameInput.value.trim().toLowerCase();
            var staffNumber = searchBycontactnumberInput.value.trim().toLowerCase();
            var tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(function(row) {
                var id = row.querySelector('td:nth-child(2)').textContent.trim().toLowerCase();
                var name = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase();
                var number = row.querySelector('td:nth-child(5)').textContent.trim().toLowerCase();
				
                if ((staffId === '' || id.includes(staffId)) &&
                    (staffName === '' || name.includes(staffName))&&
                    (staffNumber === '' || number.includes(staffNumber))
					) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        searchByIdInput.addEventListener('input', filterTable);
        searchByNameInput.addEventListener('input', filterTable);
        searchBycontactnumberInput.addEventListener('input', filterTable);
    });
	</script>
    </body>

</html>