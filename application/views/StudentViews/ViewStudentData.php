<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:09 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Students</title>
		
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
		
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/all.min.css">

		<!-- Select CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/select2/css/select2.min.css">
		
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

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Student Data</h3>
									<ul class="breadcrumb">
								<li><a href="AdminStudentDashboard">Students</a></li>
									<li class=""><a href="ShowStudents">/ Manage Students</a></li>
									<li class="breadcrumb-item active">/ Student Data</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card comman-shadow">
								<div class="card-body">
								<form action="AddStudent" method="post">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title student-info">Student Information <span></span></h5>
											</div>
											<div class="col-12 col-sm-4 d-none">  
												<div class="form-group local-forms">
                                                <label >Id<span class="login-danger">*</span></label>
													<input class="form-control" type="text" name="student_id"  value="<?php echo $student->id;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
                                                <label >Student Id<span class="login-danger">*</span></label>
													<input class="form-control" type="text" name="student_id"  value="<?php echo $student->student_id;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4" style="visibility:hidden;">  
												<div class="form-group local-forms">
													<input class="form-control" type="text" name="student_id">
												</div>
											</div>
											<div class="col-12 col-sm-4" style="visibility:hidden;">  
												<div class="form-group local-forms">
													<input class="form-control" type="text" name="student_id">
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label >Student First Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="student_first_name" value="<?php echo $student->student_first_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Student Midlle Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student Middle Name"  name="student_middle_name" value="<?php echo $student->student_middle_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Student Last Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student Last Name"  name="student_last_name" value="<?php echo $student->student_last_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label >Father First Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Father First Name"  name="father_first_name" value="<?php echo $student->father_first_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Father Midlle Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Father Middle Name"  name="father_middle_name" value="<?php echo $student->father_middle_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Father Last Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Father Last Name"  name="father_last_name" value="<?php echo $student->father_last_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label >Mother First Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Mother First Name"  name="mother_first_name"  value="<?php echo $student->mother_first_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Mother Midlle Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Mother Middle Name"  name="mother_middle_name" value="<?php echo $student->mother_middle_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Mother Last Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Mother Last Name"  name="mother_last_name" value="<?php echo $student->mother_last_name;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms calendar-icon">
													<label >Student Date Of Birth  <span class="login-danger">*</span></label>
													<input class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY"  name="student_date_of_birth" value="<?php echo $student->student_date_of_birth;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Gender <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="gender" value="<?php echo $student->gender;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Nationality<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="nationality" value="<?php echo $student->nationality;?>" readonly>
												</div>
											</div>
											
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Student Phone No.</label>
													<input class="form-control" type="text" placeholder="Enter Phone Number"  name="student_phone_number" value="<?php echo $student->student_phone_number;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Parent Phone No.</label>
													<input class="form-control" type="text" placeholder="Enter Phone Number"  name="parent_phone_number" value="<?php echo $student->parent_phone_number;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >E-Mail <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter Email Address"  name="email" value="<?php echo $student->email;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Blood Group <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="blood_group" value="<?php echo $student->blood_group;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Religion <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="religion" value="<?php echo $student->religion;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Category<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="category" value="<?php echo $student->category;?>" readonly>

												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Course<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="course" value="<?php echo $student->course;?>" readonly>

												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Course Type<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="type" value="<?php echo $student->type;?>" readonly>

												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label>Department<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="type" value="<?php echo $student->department;?>" readonly>

												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Year<span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Student First Name"  name="year" value="<?php echo $student->year;?>" readonly>

												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms calendar-icon">
													<label >Admission Date<span class="login-danger">*</span></label>
													<input class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY"  name="admission_date" value="<?php echo $student->admission_date;?>" readonly>
												</div>
											</div>
											<div class="col-12 col-sm-4" style="visibility:hidden;">
												<div class="form-group local-forms calendar-icon">
													<label >Admission Date<span class="login-danger">*</span></label>
													<input class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY"  value="<?php echo $student->admission_date;?>" readonly>
												</div>
											</div>
										
											<div class="col-12 col-sm-5 mb-5 mt-2">
                                            <div class="form-group students-up-files">
                                                <p>Student Photo</p><span class="fw-bold"
                                                    style="font-size:0.8rem;"></span>
                                                <!-- <p class="text-danger" style="display:none;font-size:0.75rem;" id="specialcharactermessage">File Name Contains Special Chracters</p> -->
                                                <!-- <div class="uplod mb-3">
													<label class="file-upload image-upbtn mb-0">
														Update image <input type="file" accept=".jpeg, .jpg, .png" name="profilephoto" id="profilephoto" />
													</label>
												</div> -->
                                                <img src="<?php echo base_url() . 'uploads/' . $student->studentphoto; ?>"
                                                    width="125" height="125">
                                            </div>
                                        </div>
										<div class="col-12 col-sm-5 mb-5 mt-2">
                                            <div class="form-group students-up-files">
                                                <p>Student Sign</p><span class="fw-bold"
                                                    style="font-size:0.8rem;"></span>
                                                <!-- <p class="text-danger" style="display:none;font-size:0.75rem;" id="specialcharactermessage">File Name Contains Special Chracters</p> -->
                                                <!-- <div class="uplod mb-3">
													<label class="file-upload image-upbtn mb-0">
														Update image <input type="file" accept=".jpeg, .jpg, .png" name="profilephoto" id="profilephoto" />
													</label>
												</div> -->
                                                <img src="<?php echo base_url() . 'uploads/' . $student->studentsign; ?>"
                                                    width="125" height="125">
                                            </div>
                                        </div>
											<h5 class="card-title">Address</h5>
								
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control"  placeholder="Enter Address" name="address" value="<?php echo $student->address;?>" readonly>
												</div>
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control" placeholder="Enter State" name="city" value="<?php echo $student->city;?>" readonly>
												</div>
												<!-- <div class="form-group">
													<label>Pin Code</label>
													<input type="text" class="form-control" placeholder="Enter Pincode">
												</div> -->
											</div>
											<div class="col-md-6">
											<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control" placeholder="Enter City" name="state" value="<?php echo $student->state;?>" readonly>
												</div>
											<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control" placeholder="Enter Country" name="country" value="<?php echo $student->country;?>" readonly>
												</div>
											</div>
										</div>
										</div>
										<a href="EditStudent?id=<?php echo $student->id;?>" class="btn btn-primary">Edit</a>
										<button  class="btn btn-danger" onclick="deleteModal(<?php echo $student->id?>);">
Delete															</button>
										<!-- <a href="DeleteStudent?id=<?php echo $student->id;?>" class="btn btn-danger">Delete</a> -->
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
        <script src="<?php echo base_url()?>assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="<?php echo base_url()?>assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?php echo base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<!-- Select2 JS -->
		<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Datepicker Core JS -->
		<script src="<?php echo base_url()?>assets/plugins/moment/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
		<script>
			function deleteModal(studentid) {
				event.preventDefault();
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteStudent?id=' + studentid;
    	$('#deleteModal').modal('show');
		}
		</script>
    </body>

<!-- Mirrored from preschool.dreamstechnologies.com/template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:09 GMT -->
</html>