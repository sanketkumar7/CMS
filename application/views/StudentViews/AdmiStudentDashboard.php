<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:06 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Add Student</title>

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


	<style>
		.alert-fixed {
			position: fixed;
			top: 0;
			left: 50%;
			transform: translateX(-50%);
			z-index: 1300;
			width: 100%;
			margin: 0;
		}

		.is-invalid {
			background-size: inherit;
		}

		#addformicon:hover {
			transition: height 0.3s, width 0.3s;
			height: 45px;
			width: 45px;
			cursor: pointer;
		}

		#editformicon:hover {
			transition: height 0.3s, width 0.3s;
			height: 50px;
			width: 60px;
			cursor: pointer;
		}
		
		.loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loader {
    border: 8px solid #f3f3f3;
    border-radius: 50%;
    border-top: 8px solid #3498db;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


	</style>
	
	<script>
		function showElement() {
            var element = document.getElementById("sidebar");
            element.style.display = "block";
        }
        setTimeout(showElement, 1000);

			function RedirecttoManagementStudents()
			{
				window.location.href="ShowStudents";
			}
		document.addEventListener('DOMContentLoaded', function() {
			var UserLoginerror = document.getElementById('UserLoginerror');
			var RegisterationSuccess = document.getElementById('RegisterationSuccess');
			var UserLogoutSuccess = document.getElementById('UserLogoutSuccess');

			if (UserLoginerror) {
				UserLoginerror.style.display = 'block';
				setTimeout(function() {
					UserLoginerror.style.display = 'none';
				}, 4000);
			} else if (RegisterationSuccess) {
				RegisterationSuccess.style.display = 'block';
				setTimeout(function() {
					RegisterationSuccess.style.display = 'none';
				}, 2000);
			} else if (UserLogoutSuccess) {
				UserLogoutSuccess.style.display = 'block';
				setTimeout(function() {
					UserLogoutSuccess.style.display = 'none';
				}, 2000);
			}
		});


	</script>
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
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('addStudentForm').addEventListener('submit', function(event) {
				if (event.submitter && event.submitter.id === 'addStudentButton') {
					document.getElementById('formstatus').value = "Filled";
					var fieldIds = ['student_first_name', 'student_middle_name', 'student_last_name', 'father_first_name', 'father_middle_name', 'father_last_name', 'mother_first_name', 'mother_middle_name', 'mother_last_name', 'student_date_of_birth', 'gender', 'nationality', 'email', 'parent_phone_number', 'student_phone_number', 'blood_group', 'religion', 'category', 'course', 'type', 'branch', 'year', 'admission_date', 'address', 'city', 'studentphoto', 'studentsign', 'state', 'country'];

					// Loop through each field ID
					for (var i = 0; i < fieldIds.length; i++) {
						validateField(fieldIds[i], event);
					}
				}
			});
		});

		function validateField(fieldId, event) {
			var field = document.getElementById(fieldId);

			if (field.tagName.toLowerCase() === 'select') {
				validateSelect(field, event);
			} else {
				if (!field.value.trim()) {
					if (fieldId === 'admission_date') {
						document.getElementById('admission_calendar-icon').classList.remove('calendar-icon');
					}

					if (fieldId === 'student_date_of_birth') {
						document.getElementById('DOB_calendar-icon').classList.remove('calendar-icon');
					}

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

		function showaddstudentform() {
			document.getElementById('studentformcard').style.display = 'block';
			document.getElementById('Cardsblock').style.display = 'none';
			document.getElementById('editpreviousformbutton').style.display = 'none';
			document.getElementById('footer').style.display = 'none';
		}

		function showHalfFilledFormList() {
			document.getElementById('HalffilledFormList').style.display = 'block';
			document.getElementById('Cardsblock').style.display = 'none';
			document.getElementById('editpreviousformbutton').style.display = 'none';
			document.getElementById('title').innerText = "Students";
			document.getElementById('footer').style.display = 'none';
		}
	</script>

</head>

<body>

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
							<!-- <div class="page-sub-header">
								<h3 class="page-title" id="title">Add Students</h3>
							</div> -->
						</div>
					</div>
				</div>
				<div class="row" id="Cardsblock">
					<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="RedirecttoManagementStudents();">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h3 class="text-secondary text-center">Manage Students</h3>
										<!-- <h3 class="text-center text-white">50055</h3> -->
									</div>
									<div class="db-icon">
										<img src="<?php echo base_url(); ?>assets/img/StudentImages/students.png" width="65" height="60" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="showaddstudentform()"  id="editpreviousformbutton">
							<div class="card bg-comman w-100 bg-primary">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h6 class="text-white">Students</h6>
											<h5 class="text-white">Create New form</h5>
										</div>		
										<div class="db-icon rounded-circle bg-light">
											<img  src="<?php echo base_url(); ?>assets/img/StudentImages/newform.png" width="40" height="40"  alt="Dashboard Icon" style="margin-left:1.5px;" id="addformicon">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 d-flex" onclick="showHalfFilledFormList()"  id="createnewformbutton">
							<div class="card bg-comman w-100" style="background-color: #8e65da !important;">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
										<h6 class="text-white">Students</h6>
											<h5 class="text-white">Edit Previous form</h5>
											
										</div>	
										<div class="db-icon rounded-circle bg-light">
											<img src="<?php echo base_url(); ?>assets/img/StudentImages/editform.png" width="50" height="45"  alt="Dashboard Icon" style="border-radius:50% !important;margin-left:7px;" id="editformicon">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- /Page Header -->
	
				
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

			function updateYearOptions() {
				var typeSelect = document.getElementById('type');
				var yearSelect = document.getElementById('year');
				var selectedType = typeSelect.value;

				// Clear existing options
				yearSelect.innerHTML = '<option>Please Select Year</option>';

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
		</script>
</body>

</html>