<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:09 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Edit Student Data</title>

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

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">


	<script>
		// document.addEventListener('DOMContentLoaded', function() {
		// document.getElementById('addStudentForm').addEventListener('submit', function(event) {
		// 	var fieldIds = ['student_first_name', 'student_middle_name', 'student_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'mother_first_name', 'mother_middle_name', 'mother_last_name', 'student_date_of_birth', 'gender', 'nationality', 'email', 'blood_group', 'religion', 'category', 'course', 'type', 'year', 'admission_date', 'address', 'city', 'state', 'country'];

		//     // var student_first_name = document.getElementById('student_first_name');
		//     // var student_middle_name = document.getElementById('student_middle_name');
		//     // var student_last_name = document.getElementById('student_last_name');
		//     // var father_first_name = document.getElementById('father_first_name');
		//     // var father_middle_name = document.getElementById('father_middle_name');
		//     // var father_last_name = document.getElementById('father_last_name');
		//     // var mother_first_name = document.getElementById('mother_first_name');
		//     // var mother_middle_name = document.getElementById('mother_middle_name');
		//     // var mother_last_name = document.getElementById('mother_last_name');
		//     // var student_date_of_birth = document.getElementById('student_date_of_birth');
		//     // var gender = document.getElementById('gender');
		//     // var nationality = document.getElementById('nationality');
		//     // var email = document.getElementById('email');
		//     // var blood_group = document.getElementById('blood_group');
		//     // var religion = document.getElementById('religion');
		//     // var category = document.getElementById('category');
		//     // var course = document.getElementById('course');
		//     // var type = document.getElementById('type');
		//     // var year = document.getElementById('year');
		//     // var admission_date = document.getElementById('admission_date');
		//     // var address = document.getElementById('address');
		//     // var city = document.getElementById('city');
		//     // var state = document.getElementById('state');
		//     // var country = document.getElementById('country');

		//     if (!student_first_name.value.trim()) {
		//         student_first_name.classList.add('is-invalid');
		// 		document.getElementById('student_first_name_errormessage').style.display = 'block';
		// 		event.preventDefault();
		//     }

		// });
		function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('UpdateStudentDataform').addEventListener('submit', function(event) {
				// Array of input field IDs
				var fieldIds = ['student_first_name', 'student_middle_name', 'student_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'mother_first_name', 'mother_middle_name', 'mother_last_name', 'student_date_of_birth', 'gender', 'nationality', 'email', 'parent_phone_number', 'student_phone_number', 'blood_group', 'religion', 'category', 'course', 'type', 'branch', 'year', 'admission_date', 'address', 'city', 'state', 'country'];
				// Loop through each field ID
				for (var i = 0; i < fieldIds.length; i++) {
					validateField(fieldIds[i], event);
					console.log(fieldIds[i]);
				}
			});
		});

		function validateField(fieldId, event) {
			var field = document.getElementById(fieldId);

			if (field.tagName.toLowerCase() === 'select') {
				validateSelect(field, event);
			} else {
				if (fieldId === 'student_date_of_birth') {
						document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
					}
					if(fieldId=='student_phone_number')
					{
					if(document.getElementById('student_phone_number').value.length<10 &&field.value.trim()!="")
					{
						document.getElementById('student_phone_numbermessage').style.display='block';
						event.preventDefault();
					}
				}
				if(fieldId=='parent_phone_number')
				{
					if(document.getElementById('parent_phone_number').value.length<10 && field.value.trim()!="")
					{
						document.getElementById('parent_phone_numbermessage').style.display='block';
						event.preventDefault();
					}
				}
				if (!field.value.trim()) {
					if (fieldId === 'admission_date') {
						document.getElementById('admission_calendar-icon').classList.remove('calendar-icon');
					}	
				}
				
				if (!field.value.trim())
				{
					field.classList.add('is-invalid');
					document.getElementById(fieldId + '_errormessage').style.display = 'block';
					event.preventDefault();
				}
				}
		}

		function validateSelect(selectField, event) {
			// Check if the selected value contains "Please Select"
			if (selectField.value == "NA") {
				selectField.classList.remove('select');
				selectField.classList.add('is-invalid'); // Add 'is-invalid' class
				document.getElementById(selectField.id + '_errormessage').style.display = 'block';
				event.preventDefault();
			} else {
				selectField.classList.remove('is-invalid'); // Remove 'is-invalid' class
				document.getElementById(selectField.id + '_errormessage').style.display = 'none';
			}
		}
	</script>
	<style>
		 .spinner {
            display: block;
        }
		.body{
			display: none;
		}
		#sidebar{
			display: none;
		}
	</style>
	 <script>
        setTimeout(function() {
            document.querySelector('.spinner').style.display = 'none';
            document.querySelector('.body').style.display = 'block';
            document.querySelector('#body').style.display = 'block';
        }, 400); 
    </script>
</head>
<div class="spinner">
        <!-- Add your spinner here -->
        <p>Loading...</p>
    </div>
<body class="">


	<!-- Main Wrapper -->
	<div class="main-wrapper body" >

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
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title">Update Student Data</h3>
								<ul class="breadcrumb">
								<li><a href="AdminStudentDashboard">Students</a></li>
									<li class=""><a href="ShowStudents">/ Manage Students</a></li>
									<li class="breadcrumb-item active">/ Edit Student</li>
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
								<form action="UpdateStudentData" method="post" id="UpdateStudentDataform" enctype="multipart/form-data">
									<div class="row">
										<div class="col-12">
											<h5 class="form-title student-info">Student Information</h5>
										</div>
										<div class="col-12 col-sm-4" style="display:none;">
											<div class="form-group local-forms">
												<input class="form-control" type="text" name="id" value="<?php echo $student->id; ?>">
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Student Id<span class="login-danger">*</span></label>
												<input class="form-control" type="text" name="student_id" value="<?php echo $student->student_id; ?>" readonly>
											</div>
										</div>
										<div class="col-12 col-sm-4" style="visibility:hidden;">
											<div class="form-group local-forms">
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-12 col-sm-4" style="visibility:hidden;">
											<div class="form-group local-forms">
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Student First Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Student First Name" name="student_first_name" id="student_first_name" value="<?php echo $student->student_first_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="student_first_name_errormessage">
													Student First Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Student Midlle Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Student Middle Name" name="student_middle_name" id="student_middle_name" value="<?php echo $student->student_middle_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="student_middle_name_errormessage">
													Student Midlle Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Student Last Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Student Last Name" name="student_last_name" id="student_last_name" value="<?php echo $student->student_last_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="student_last_name_errormessage">
													Student Last Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Father's First Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Father's First Name" name="father_first_name" id="father_first_name" value="<?php echo $student->father_first_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="father_first_name_errormessage">
													Father First Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Father's Midlle Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Father's Middle Name" name="father_middle_name" id="father_middle_name" value="<?php echo $student->father_middle_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="father_middle_name_errormessage">
													Father Midlle Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Father's Last Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Father's Last Name" name="father_last_name" id="father_last_name" value="<?php echo $student->father_last_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="father_last_name_errormessage">
													Father Last Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Mother's First Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Mother's First Name" name="mother_first_name" id="mother_first_name" value="<?php echo $student->mother_first_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="mother_first_name_errormessage">
													Mother First Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Mother's Midlle Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Mother's Middle Name" name="mother_middle_name" id="mother_middle_name" value="<?php echo $student->mother_middle_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="mother_middle_name_errormessage">
													Mother Midlle Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Mother's Last Name <span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Mother's Last Name" name="mother_last_name" id="mother_last_name" value="<?php echo $student->mother_last_name; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												<div class="invalid-feedback" style="display:none;" id="mother_last_name_errormessage">
													Mother Last Name is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms" id="DOB_calendar-icon">
												<label>Student Date Of Birth <span class="login-danger">*</span></label>
												<input class="form-control" type="date" placeholder="DD-MM-YYYY" name="student_date_of_birth" id="student_date_of_birth" value="<?php echo $student->student_date_of_birth; ?>" onchange="checkdob();" min="2000-01-01" max="2004-12-01">
												<p id="InvalidDob" class="text-danger" style="display:none;font-size:0.7rem;">Invalid Date</p>
												<div class="invalid-feedback" style="display:none;" id="student_date_of_birth_errormessage">
													Student Date Of Birth is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Gender <span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="gender" id="gender">
													<option>Please Select Gender</option>
													<option <?php echo ($student->gender == 'Female') ? 'selected' : ''; ?>>Female</option>
													<option <?php echo ($student->gender == 'Male') ? 'selected' : ''; ?>>Male</option>
													<option <?php echo ($student->gender == 'Other') ? 'selected' : ''; ?>>Other</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="gender_errormessage">
													Gender is Required.
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Nationality<span class="login-danger">*</span></label>
												<input class="form-control" type="email" value="INDIAN" name="nationality" id="nationality" readonly>
												<div class="invalid-feedback" style="display:none;" id="nationality_errormessage">
													Nationality is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Student Phone No.<span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Enter Phone Number" name="student_phone_number" id="student_phone_number" value="<?php echo $student->student_phone_number; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" minlenght="10">
												<p id="student_phone_numbermessage" class="text-danger" style="display:none;font-size:0.8rem;">Phone number should be 10 digits longs</p>
												<div class="invalid-feedback" style="display:none;" id="student_phone_number_errormessage">
													Student Phone No. is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Parent Phone No.<span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="Enter Phone Number" name="parent_phone_number" id="parent_phone_number" value="<?php echo $student->parent_phone_number; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" minlenght="10">
												<p id="parent_phone_numbermessage" class="text-danger" style="display:none;font-size:0.8rem;">Phone number should be 10 digits longs</p>
												<div class="invalid-feedback" style="display:none;" id="parent_phone_number_errormessage">
													Parent Phone No. is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>E-Mail <span class="login-danger">*</span></label>
												<input class="form-control" type="email" placeholder="Enter Email Address" name="email" id="email" value="<?php echo $student->email; ?>" oninput="checkdotinemail();">
												<p id="nodot" class="text-danger" style="display:none;font-size:0.75rem;">Required "."</p>
												<div class="invalid-feedback" style="display:none;" id="email_errormessage">
													E-Mail is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Blood Group <span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="blood_group" id="blood_group">
													<option value="NA">Please Select Group </option>
													<option <?php echo ($student->blood_group == 'A+') ? 'selected' : ''; ?>>A-</option>
													<option <?php echo ($student->blood_group == 'B+') ? 'selected' : ''; ?>>B+</option>
													<option <?php echo ($student->blood_group == 'A-') ? 'selected' : ''; ?>>A-</option>
													<option <?php echo ($student->blood_group == 'B-') ? 'selected' : ''; ?>>B-</option>
													<option <?php echo ($student->blood_group == 'O-') ? 'selected' : ''; ?>>O-</option>
													<option <?php echo ($student->blood_group == 'AB-') ? 'selected' : ''; ?>>AB-</option>
													<option <?php echo ($student->blood_group == 'AB+') ? 'selected' : ''; ?>>AB+</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="blood_group_errormessage">
													Blood Group is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Religion <span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="religion" id="religion">
													<option value="NA">Please Select Religion </option>
													<option <?php echo ($student->religion == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
													<option <?php echo ($student->religion == 'Christian') ? 'selected' : ''; ?>>Christian</option>
													<option <?php echo ($student->religion == 'Others') ? 'selected' : ''; ?>>Others</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="religion_errormessage">
													Religion is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Category<span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="category" id="category">
													<option value="NA">Please Select Category</option>
													<option <?php echo ($student->category == 'General') ? 'selected' : ''; ?>>General</option>
													<option <?php echo ($student->category == 'Obc') ? 'selected' : ''; ?>>Obc</option>
													<option <?php echo ($student->category == 'SC') ? 'selected' : ''; ?>>SC</option>
													<option <?php echo ($student->category == 'ST') ? 'selected' : ''; ?>>ST</option>
												</select>
											
												<div class="invalid-feedback" style="display:none;" id="category_errormessage">
													Category is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Course<span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="course" id="course" onchange="updatecoursetypeOptions()">
													<option>Please Select Course</option>
													<option <?php echo ($student->course == 'Engineering') ? 'selected' : ''; ?>>Engineering</option>
													
												</select>
												<div class="invalid-feedback" style="display:none;" id="course_errormessage">
													Course is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Course Type<span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="type" id="type" onchange="updateYearOptions();updateBranch();">
													<option>Please Select Type</option>
													<option <?php echo ($student->type == 'BE') ? 'selected' : ''; ?>>BE</option>
													<option <?php echo ($student->type == 'ME') ? 'selected' : ''; ?>>ME</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="type_errormessage">
													Course Type is Required.
												</div>
											</div>
										</div>
									
											<div class="col-12 col-sm-4" style="display:none;" id="branch1container">
												<div class="form-group local-forms">
													<label>Department<span class="login-danger">*</span></label>
													<select class="form-select" style="height:45px;font-size:15px !important;">
														<option value="NA">Please Select Department</option>
														<?php foreach($departments as $dept){?>
															<?php if($dept->course=="BE" || $dept->course=="Both"){?>
															<option value="<?php echo $dept->departmentid;?>" <?php echo ($student->departmentid == $dept->departmentid) ? "selected" : ""; ?>><?php echo $dept->departmentname;?></option>
															<?php }?>
															<?php }?>
													</select>
													<p class="invalid-feedback" style="display:none;">
													Department is Required.
													</p>
												</div>
											</div>
											<div class="col-12 col-sm-4" style="display: none;" id="branch2container">
												<div class="form-group local-forms">
													<label>Department<span class="login-danger">*</span></label>
													<select class="form-select" style="height:45px;font-size:15px !important;">
														<option value="NA">Please Select Department</option>
														<?php foreach($departments as $dept ){?>
															<?php if($dept->course=="ME" || $dept->course=="Both"){?>
															<option value="<?php echo $dept->departmentid;?>" <?php echo ($student->departmentid == $dept->departmentid) ? "selected" : ""; ?>><?php echo $dept->departmentname;?></option>
															<?php }?>															
															<?php }?>
													</select>
													<p class="invalid-feedback" style="display:none;">
													Department is Required.
													</p>
												</div>
											</div>
											<div class="col-12 col-sm-4 d-none">
												<div class="form-group local-forms">
													<label><span class="login-danger">*</span></label>
													<input class="form-control" type="text" name="department" value="<?php echo $dept->department;?>">
												</div>
											</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Year<span class="login-danger">*</span></label>
												<select class="form-select" style="height:45px;font-size:15px !important;" name="year" id="year">
													<option value="NA">Please Select Year</option>
													<option <?php echo ($student->year == '1') ? 'selected' : ''; ?>>1</option>
													<option <?php echo ($student->year == '2') ? 'selected' : ''; ?>>2</option>
													<option <?php echo ($student->year == '3') ? 'selected' : ''; ?>>3</option>
													<option <?php echo ($student->year == '4') ? 'selected' : ''; ?>>4</option>
												</select>
												<div class="invalid-feedback" style="display:none;" id="year_errormessage">
													Year is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms" id="admission_calendar-icon">
												<label>Admission Date<span class="login-danger">*</span></label>
												<input class="form-control" type="date" placeholder="DD-MM-YYYY" name="admission_date" id="admission_date" value="<?php echo $student->admission_date; ?>" onchange="checkAdmissionDate();"  min="2024-01-01" max="2024-05-01">
												<p id="InvalidAdmissionDate" class="text-danger" style="display:none;font-size:0.7rem;">Invalid Date</p>
												<div class="invalid-feedback" style="display:none;" id="admission_date_errormessage">
													Admission Date is Required.
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-4">
											<div class="form-group local-forms">
												<label>Fees<span class="login-danger">*</span></label>
												<input class="form-control" type="text" placeholder="eg. 70000" name="collegefees" id="collegefees" value="<?php echo $student->collegefees; ?>">
												<div class="invalid-feedback" style="display:none;" id="collegefees_errormessage">
													fees is Required.
												</div>
											</div>
										</div>
										<h5 class="card-title">Address</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address</label><span class="login-danger">*</span>
													<input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" value="<?php echo $student->address; ?>">
													<div class="invalid-feedback" style="display:none;" id="address_errormessage">
														Address is Required.
													</div>
												</div>
													<div class="col-lg-12 col-sm-4">
													<div class="form-group">
														<label>State <span class="login-danger">*</span></label>
														<select class="form-select" style="height:45px;font-size:15px !important;" name="state" id="state" onchange="adddisableopt();">
            <option value="NA">Please Select State</option>
            <option <?php echo ($student->state == "ANDHRA PRADESH") ? 'selected' : ''; ?>>ANDHRA PRADESH</option>
            <option <?php echo ($student->state == "ARUNACHAL PRADESH") ? 'selected' : ''; ?>>ARUNACHAL PRADESH</option>
            <option <?php echo ($student->state == "ASSAM") ? 'selected' : ''; ?>>ASSAM</option>
            <option <?php echo ($student->state == "BIHAR") ? 'selected' : ''; ?>>BIHAR</option>
            <option <?php echo ($student->state == "CHHATTISGARH") ? 'selected' : ''; ?>>CHHATTISGARH</option>
            <option <?php echo ($student->state == "GOA") ? 'selected' : ''; ?>>GOA</option>
            <option <?php echo ($student->state == "GUJARAT") ? 'selected' : ''; ?>>GUJARAT</option>
            <option <?php echo ($student->state == "HARYANA") ? 'selected' : ''; ?>>HARYANA</option>
            <option <?php echo ($student->state == "HIMACHAL PRADESH") ? 'selected' : ''; ?>>HIMACHAL PRADESH</option>
            <option <?php echo ($student->state == "JAMMU AND KASHMIR") ? 'selected' : ''; ?>>JAMMU AND KASHMIR</option>
            <option <?php echo ($student->state == "JHARKHAND") ? 'selected' : ''; ?>>JHARKHAND</option>
            <option <?php echo ($student->state == "KARNATAKA") ? 'selected' : ''; ?>>KARNATAKA</option>
            <option <?php echo ($student->state == "KERALA") ? 'selected' : ''; ?>>KERALA</option>
            <option <?php echo ($student->state == "MADHYA PRADESH") ? 'selected' : ''; ?>>MADHYA PRADESH</option>
            <option <?php echo ($student->state == "MAHARASHTRA") ? 'selected' : ''; ?>>MAHARASHTRA</option>
            <option <?php echo ($student->state == "MANIPUR") ? 'selected' : ''; ?>>MANIPUR</option>
            <option <?php echo ($student->state == "MEGHALAYA") ? 'selected' : ''; ?>>MEGHALAYA</option>
            <option <?php echo ($student->state == "MIZORAM") ? 'selected' : ''; ?>>MIZORAM</option>
            <option <?php echo ($student->state == "NAGALAND") ? 'selected' : ''; ?>>NAGALAND</option>
            <option <?php echo ($student->state == "ODISHA") ? 'selected' : ''; ?>>ODISHA</option>
            <option <?php echo ($student->state == "PUNJAB") ? 'selected' : ''; ?>>PUNJAB</option>
            <option <?php echo ($student->state == "RAJASTHAN") ? 'selected' : ''; ?>>RAJASTHAN</option>
            <option <?php echo ($student->state == "SIKKIM") ? 'selected' : ''; ?>>SIKKIM</option>
            <option <?php echo ($student->state == "TAMIL NADU") ? 'selected' : ''; ?>>TAMIL NADU</option>
            <option <?php echo ($student->state == "TELANGANA") ? 'selected' : ''; ?>>TELANGANA</option>
            <option <?php echo ($student->state == "TRIPURA") ? 'selected' : ''; ?>>TRIPURA</option>
            <option <?php echo ($student->state == "UTTARAKHAND") ? 'selected' : ''; ?>>UTTARAKHAND</option>
            <option <?php echo ($student->state == "UTTAR PRADESH") ? 'selected' : ''; ?>>UTTAR PRADESH</option>
            <option <?php echo ($student->state == "WEST BENGAL") ? 'selected' : ''; ?>>WEST BENGAL</option>
            <option <?php echo ($student->state == "ANDAMAN AND NICOBAR ISLANDS") ? 'selected' : ''; ?>>ANDAMAN AND NICOBAR ISLANDS</option>
            <option <?php echo ($student->state == "CHANDIGARH") ? 'selected' : ''; ?>>CHANDIGARH</option>
            <option <?php echo ($student->state == "DADRA AND NAGAR HAVELI") ? 'selected' : ''; ?>>DADRA AND NAGAR HAVELI</option>
            <option <?php echo ($student->state == "DAMAN AND DIU") ? 'selected' : ''; ?>>DAMAN AND DIU</option>
            <option <?php echo ($student->state == "DELHI") ? 'selected' : ''; ?>>DELHI</option>
            <option <?php echo ($student->state == "LAKSHADWEEP") ? 'selected' : ''; ?>>LAKSHADWEEP</option>
            <option <?php echo ($student->state == "PUDUCHERRY") ? 'selected' : ''; ?>>PUDUCHERRY</option>
        </select>
														<div class="invalid-feedback" style="display:none;" id="state_errormessage">
															State is Required.
														</div>
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
												<div class="form-group students-up-files mt-5">
													<label>Upload Student Photo(File name Should Not contain Special Characters)</label><span class="login-danger">*</span>
													<div class="uplod">
														<label class="file-upload image-upbtn mb-0">
															Choose File <input type="file" accept=".jpeg, .jpg, .png" name="studentphoto" id="studentphoto" onchange="showphotoname()"/>
														</label>
														<span id="photoname" style="display:none;font-size:1rem;"></span>
													</div>
													<p class="text-danger" style="display:none;font-size:0.75rem;"
                                                    id="specialcharactermessage">File Name Contains Special Characters
                                                </p>
													<div class="invalid-feedback" style="display:none;" id="studentphoto_errormessage">
														Student Photo is Required.
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label><span class="login-danger">*</span>
													<input type="text" class="form-control" placeholder="Enter City" name="city" id="city" value="<?php echo $student->city; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
													<div class="invalid-feedback" style="display:none;" id="city_errormessage">
														City is Required.
													</div>
												</div>
												<div class="form-group">
													<label>Country</label><span class="login-danger">*</span>
													<input type="text" class="form-control" placeholder="Enter Country" name="country" id="country" value="India" readonly>
													<div class="invalid-feedback" style="display:none;" id="country_errormessage">
														Country is Required.
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
												<div class="form-group students-up-files mt-5">
													<label>update Student Signature(File name Should Not contain Special Characters)</label><span class="login-danger">*</span>
													<div class="uplod">
														<label class="file-upload image-upbtn mb-0">
															Choose File <input type="file" accept=".jpeg, .jpg, .png" name="studentsign" id="studentsign" onchange="showsignname()">
														</label>
														<span id="signame" style="display:none;font-size:1rem;"></span>

													</div>
													<p class="text-danger" style="display:none;font-size:0.75rem;"
                                                    id="specialcharactermessagesign">File Name Contains Special Characters
                                                </p>
													<div class="invalid-feedback" style="display:none;" id="studentsign_errormessage">
														Student Signature is Required.
													</div>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="">
												<button type="submit" class="btn btn-primary" id="updateButton"><i class="fa-solid fa-rotate-left"></i> Update</button>
											</div>
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

		let course=document.getElementById("type").value;
		if(course=="BE")
		{
				document.getElementById("branch1container").style.display="block";
				document.querySelector("#branch1container select").setAttribute("name", "departmentid");
				document.querySelector("#branch1container select").setAttribute("id", "branch");
				document.querySelector("#branch1container p").setAttribute("id", "branch_errormessage");
		}
		if(course=="ME")
		{
			document.getElementById("branch2container").style.display="block";
			document.querySelector("#branch2container select").setAttribute("name","departmentid");
			document.querySelector("#branch2container p").setAttribute("id", "branch_errormessage");
			document.querySelector("#branch1container select").setAttribute("id", "branch");
		}

		function updateYearOptions() {
			var typeSelect = document.getElementById('type');
			var yearSelect = document.getElementById('year');
			var selectedType = typeSelect.value;

			// Clear existing options
			yearSelect.innerHTML = '<option value="NA">Please Select Year</option>';

			// Populate options based on the selected type
			if (selectedType === 'BE') {
				addOption(yearSelect, '1');
				addOption(yearSelect, '2');
				addOption(yearSelect, '3');
				addOption(yearSelect, '4');
			} else if (selectedType === 'ME') {
				addOption(yearSelect, '1');
				addOption(yearSelect, '2');
			}
		}

		function addOption(selectElement, value) {
			var option = document.createElement('option');
			option.value = value;
			option.text = value;
			selectElement.add(option);
		}

		// function updatecoursetypeOptions() {
		// 	var courseDropdown = document.getElementById('course');
		// 	var courseTypeDropdown = document.getElementById('type');

		// 	var selectedCourse = courseDropdown.value;

		// 	courseTypeDropdown.innerHTML = '<option>Please Select Type</option>';

		// 	if (selectedCourse === 'Engineering') {
		// 		document.getElementById('Branchcontainer').style.display = 'block';
		// 		courseTypeDropdown.innerHTML += '<option>BE</option>';
		// 		courseTypeDropdown.innerHTML += '<option>ME</option>';
		// 	} else if (selectedCourse === 'Pharmacy') {
		// 		document.getElementById('Branchcontainer').style.display = 'none';
		// 		document.getElementById('branch').removeAttribute('required');
		// 		courseTypeDropdown.innerHTML += '<option>B.Pharm</option>';
		// 		courseTypeDropdown.innerHTML += '<option>M.Pharm</option>';
		// 	}

		// 	courseTypeDropdown.dispatchEvent(new Event('change'));
		// }
		
		function updateBranch()
			{
				
				var typeSelect = document.getElementById('type');
				var selectedType = typeSelect.value;
				console.log(selectedType);
				if (selectedType =='BE') {
					document.getElementById("branch1container").style.display = "block";
				document.querySelector("#branch1container select").setAttribute("name", "departmentid");
				document.querySelector("#branch1container select").setAttribute("id", "branch");
				document.querySelector("#branch1container p").setAttribute("id", "branch_errormessage");
				document.getElementById("branch2container").style.display = "none";
				document.querySelector("#branch2container select").removeAttribute("name");
				document.querySelector("#branch2container select").removeAttribute("id");
				document.querySelector("#branch2container p").removeAttribute("id");
				} else if (selectedType == 'ME') {
					document.getElementById("branch2container").style.display = "block";
				document.querySelector("#branch2container select").setAttribute("name", "departmentid");
				document.querySelector("#branch2container select").setAttribute("id", "branch");
				document.querySelector("#branch2container p").setAttribute("id", "branch_errormessage");
				document.getElementById("branch1container").style.display = "none";
				document.querySelector("#branch1container select").removeAttribute("name");
				document.querySelector("#branch1container select").removeAttribute("id");
				document.querySelector("#branch1container p").removeAttribute("id");
				}
			}

			document.getElementById('studentphoto').addEventListener('change', function() {
        var filename = this.value.split('\\').pop(); 
        if (/[^a-zA-Z0-9\s.()]/.test(filename)) {
            document.getElementById('updateButton').disabled = true; 
            document.getElementById('specialcharactermessage').style.display='block';
        } else {
            document.getElementById('updateButton').style.display='none';

        }
    });
	
    document.getElementById('studentsign').addEventListener('change', function() {
        var filename = this.value.split('\\').pop(); 
        if (/[^a-zA-Z0-9\s.()]/.test(filename)) {
            document.getElementById('updateButton').disabled = true; 
            document.getElementById('specialcharactermessagesign').style.display='block';
        } else {
            document.getElementById('updateButton').disabled = false; 
			document.getElementById('specialcharactermessagesign').style.display='none';

        }
    });

	function checkdob()
	{
		let dob=document.getElementById("student_date_of_birth").value;
		date=new Date(dob);
		console.log(date);
		if(date>new Date()){
			document.getElementById("InvalidDob").style.display="block";
			document.getElementById("updateButton").disabled=true;
		}
		else{
			
			document.getElementById("InvalidDob").style.display="none";
			document.getElementById("updateButton").disabled=false;
		}
	}
	function checkAdmissionDate()
	{
		let dob=document.getElementById("admission_date").value;
		date=new Date(dob);
		console.log(date);
		if(date>new Date())
		{
			document.getElementById("InvalidAdmissionDate").style.display="block";
			document.getElementById("updateButton").disabled=true;
		}
		else{
			document.getElementById("InvalidAdmissionDate").style.display="none";
			document.getElementById("updateButton").disabled=false;
		}
	}

	function showphotoname() {
			var filename = document.getElementById("studentphoto").value.split('\\').pop();
			document.getElementById("photoname").style.display = "block";
			document.getElementById("photoname").innerText = filename;
		}

		function showsignname() {
			var filename = document.getElementById("studentsign").value.split('\\').pop();
			document.getElementById("signame").style.display ="block";
			document.getElementById("signame").innerText = filename;
		}
		function checkdotinemail() {
    let email = document.getElementById("email").value;
	if(email.length=="")
	{
		document.getElementById("nodot").style.display = "none";
		return;
	}
    if (!email.includes(".")) {
        document.getElementById("nodot").style.display = "block";
        document.getElementById("updateButton").disabled = true;
    } else {
        document.getElementById("nodot").style.display = "none";
        document.getElementById("updateButton").disabled = false;
    }
}

function adddisableopt()
		{
			document.getElementById("state").firstElementChild.disabled=true;
		}
	</script>
</body>


</html>