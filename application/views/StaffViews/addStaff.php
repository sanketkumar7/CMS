<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Add Staff</title>

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
    	function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);
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
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
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
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
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
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
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
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
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
                            <h3 class="page-title">Add Staff</h3>
                            <ul class="breadcrumb">
                                <li><a href="AdminStaffDashboard">Staff</a></li>
                                <li><a href="ShowStaff">/ Staff List</a></li>
                                <li class="active">/ Add Staff</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-body">
                                <form action="AddStaffPost" id="AddStaffForm" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Personal Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4 d-none">
                                            <div class="form-group local-forms">
                                                <label>Teacher ID <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Teacher ID" name="staffid">
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>First Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" id="firstname" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                                <div class="invalid-feedback" style="display:none;" id="firstname_errormessage">
                                                    First Name is Required.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Middle Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name" id="middlename" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                                <div class="invalid-feedback" style="display:none;" id="middlename_errormessage">
                                                    Middle Name is Required.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Last Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" id="lastname" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                                <div class="invalid-feedback" style="display:none;" id="lastname_errormessage">
                                                    Last Name is Required.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select class="form-control" name="gender" id="gender">
                                                    <option value="NA">Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;" id="gender_errormessage">
                                                    Gender is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon" id="dobcalendericon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="dateofbirth" id="dateofbirth" min="31-12-1980" max="31-12-1998">
                                                <div class="invalid-feedback" style="display:none;" id="dateofbirth_errormessage">
                                                    Date of birth is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mobile <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Phone" name="contactnumber" id="contactnumber" oninput="this.value = this.value.replace(/[^0-9]/g, '')" minlength="10" maxlength="10">
                                                <p class="text-danger" style="display:none;font-size:0.8rem;" id="contactdigitmessage">contact number should be 10 digits long</p>
                                                <div class="invalid-feedback" style="display:none;" id="contactnumber_errormessage">
                                                    Mobile Number is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Adhar No. <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Aadhar" name="aadhar" id="aadhar" oninput="this.value = this.value.replace(/[^0-9]/g, '')" minlength="14" maxlength="14" oninput="checkadhar();">
                                                <p id="addharerrormessage" class="text-danger" style="display:none;font-size:o.75rem;">Aadhar Already Registered</p>
                                                <p class="text-danger" style="display:none;font-size:0.8rem;" id="contactdigitmessage">Adhar number should be 14 digits long</p>
                                                <div class="invalid-feedback" style="display:none;" id="contactnumber_errormessage">
                                                    Adhar Number is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Department<span class="login-danger">*</span></label>
                                                <select class="form-control" name="designation" id="designation">
                                                    <option value="NA">Select</option>
                                                    <option>Assistant Professor</option>
                                                    <option>Professor</option>
                                                    <option>HOD</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;"
                                                    id="gender_errormessage">
                                                    Gender is Required.
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Designation<span class="login-danger">*</span></label>
                                                <select class="form-control" name="designation" id="designation" onchange="getsalary();">
                                                    <option value="NA">Select</option>
                                                    <option>Assistant Professor</option>
                                                    <option>Professor</option>
                                                    <option>HOD</option>
                                                    <option>Librarian</option>
                                                    <option>Library Assistant</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;" id="gender_errormessage">
                                                    Gender is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Salary <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="0" name="salary" id="salary" readonly>
                                                <div class="invalid-feedback" style="display:none;" id="email_errormessage">
                                                    Salary is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email">
                                                <div class="invalid-feedback" style="display:none;" id="email_errormessage">
                                                    Email is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon" id="joiningcalendericon">
                                                <label>Joining Date <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="joiningdate" id="joiningdate">
                                                <div class="invalid-feedback" style="display:none;" id="joiningdate_errormessage">
                                                    Joining Date is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label>Experience <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter Experience">
												</div>
											</div> -->
                                        <div class="col-12 col-sm-5 mb-5">
                                            <div class="form-group students-up-files">
                                                <label>Profile Photo</label><span class="login-danger">*</span><span class="fw-bold" style="font-size:0.8rem;"> (File name should not
                                                    contain any special characters)</span>
                                                <p class="text-danger" style="display:none;font-size:0.75rem;" id="specialcharactermessage">File Name Contains Special Chracters
                                                </p>
                                              
                                                <div class="uplod">
                                                    <label class="file-upload image-upbtn mb-0">
                                                        Choose image <input type="file" accept=".jpeg, .jpg, .png" name="profilephoto" id="profilephoto" onchange="showphotoname()"/>
                                                    </label>
                                                    <p id="photoname" style="display:none;font-size:1rem;"></p>
                                                </div>
                                                
                                                <div class="invalid-feedback" style="display:none;" id="profilephoto_errormessage">
                                                    Image image is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Login Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Email ID <span class="login-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Enter Mail Id" name="loginemail" id="loginemail" oninput="checkemail()" minlenght="10">
                                                <p class="text-danger" style="display:none;" id="emailregisteredmessage" style="font-size:0.75rem;">Email Already Registered</p>
                                                <div class="invalid-feedback" style="display:none;" id="loginemail_errormessage">
                                                    Email Id is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Password <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Password" name="password" id="password">
                                                <div class="invalid-feedback" style="display:none;" id="password_errormessage">
                                                    Password is Required.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Address</span></h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group local-forms">
                                                <label>Address <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter address" name="address" id="address">
                                                <div class="invalid-feedback" style="display:none;" id="address_errormessage">
                                                    Address is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>City <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter City" name="city" id="city" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                                <div class="invalid-feedback" style="display:none;" id="city_errormessage">
                                                    City is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>State <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter State" name="state" id="state" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                                <div class="invalid-feedback" style="display:none;" id="state_errormessage">
                                                    State is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Country <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Country" name="country" id="country">
                                                <div class="invalid-feedback" style="display:none;" id="country_errormessage">
                                                    Country is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4" style="visibility:hidden;">
                                            <div class="form-group local-forms">
                                                <label>Country <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Country" oninput="this.value=this.value.replace(/[^A-Za-z]/g, '')">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary" id="AddStaffButton">Add
                                                Staff</button>
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

    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('AddStaffForm').addEventListener('submit', function(event) {
                var fieldIds = ['firstname', 'middlename', 'lastname', 'gender', 'dateofbirth',
                    'contactnumber', 'email', 'joiningdate', 'profilephoto', 'loginemail', 'password',
                    'address', 'city', 'state', 'country'
                ];
                for (var i = 0; i < fieldIds.length; i++) {
                    validateField(fieldIds[i], event);
                }

            });
        });

        function validateField(fieldId, event) {
            var field = document.getElementById(fieldId);
            if (field.tagName.toLowerCase() === 'select') {
                validateSelect(field, event);
            }
            if (fieldId == 'contactnumber') {
                if (document.getElementById('contactnumber').value.length < 10) {
                    document.getElementById('contactdigitmessage').style.display = 'block';
                    event.preventDefault();
                }
            } else {
                if (!field.value.trim()) {
                    if (fieldId === 'dateofbirth') {
                        document.getElementById('dobcalendericon').classList.remove('calendar-icon');
                    }
                    if (fieldId === 'joiningdate') {
                        document.getElementById('joiningcalendericon').classList.remove('calendar-icon');
                    }
                    field.classList.add('is-invalid');
                    document.getElementById(fieldId + '_errormessage').style.display = 'block';
                    event.preventDefault();
                }
            }
        }

        function validateSelect(selectField, event) {
            if (selectField.value == "NA") {
                selectField.classList.remove('select');
                selectField.classList.add('is-invalid');
                document.getElementById(selectField.id + '_errormessage').style.display = 'block';
                event.preventDefault();
            } else {
                selectField.classList.remove('is-invalid');
                document.getElementById(selectField.id + '_errormessage').style.display = 'none';
            }
        }

        function checkemail() {
            var email = document.getElementById('loginemail').value.trim();
            // console.log(email);
            // document.getElementById('emailregisteredmessage').style.display='none';

            if (email.length >= 10) {
                fetch("checkemailavailability?email=" + email)
                    .then(response => {
                        if (!response.ok) {
                            console.log("Response Was Not Ok")
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.message == "Email Already Registered") {
                            document.getElementById('emailregisteredmessage').style.display = 'block';
                            document.getElementById('AddStaffButton').setAttribute("disabled", "true");
                        } else {
                            document.getElementById('emailregisteredmessage').style.display = 'none';
                            document.getElementById('AddStaffButton').disabled = false;
                        }
                    })
            } else {
                document.getElementById('emailregisteredmessage').style.display = 'none';
                document.getElementById('AddStaffButton').disabled = false;
            }

        }

        document.getElementById('profilephoto').addEventListener('change', function() {
            var filename = this.value.split('\\').pop();
            if (/[^a-zA-Z0-9\s.()]/.test(filename)) {
                document.getElementById('AddStaffButton').disabled = true;
                document.getElementById('specialcharactermessage').style.display = 'block';
            } else {
                document.getElementById('AddStaffButton').disabled = false;
                document.getElementById('specialcharactermessage').style.display = 'none';

            }
        });

        function checkadhar() {
            aadhar = document.getElementById("aadhar").value();
            if (aadhar.length == 12) {
                fetch("checkaadharavailability?aadhar=" + aadhar)
                    .then(response => {
                        if (!response.ok) {
                            return;
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.message == "aadhar Already Registered") {
                            document.getElementById("addharerrormessage").style.display = "block";
                            document.getElementById("AddStaffButton").disabled = true;
                        } else {
                            document.getElementById("addharerrormessage").style.display = "none";
                            document.getElementById("AddStaffButton").disabled = false;
                        }
                    })
                    .catch(error => {
                        return error;
                    });
            }
        }

        function showphotoname() {
            var filename = document.getElementById("profilephoto").value.split('\\').pop();
            document.getElementById("photoname").style.display = "block";
            document.getElementById("photoname").innerText = filename;
        }

        function getsalary()
        {
            let designation=document.getElementById("designation").value;
            if(designation=="NA")
            {return;}
            fetch("slaryfordesignation?designation="+designation)
            .then(response=>{
                if(!response.ok)
                {
                    return;
                }
                return response.json();
            })
            .then(data=>{
                document.getElementById("salary").value=data.salary;
            })
            .catch(error=>{
                return error;
            });
        }
    </script>
</body>

</html>