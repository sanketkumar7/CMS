<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Edit Transport Data</title>

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



    <script>
        var RouteCard = document.getElementById('RouteCard');

        function Redirecttoroutespage() {
            window.location.href = "RoutesList";
        }

        function RedirecttoStopaPage() {
            window.location.href = "StopsList";
        }
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
                        <h3 class="page-title">Edit Assigned Route,Vehicle & Drivers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Transport">Transport </a></li>
                                <li class="active">/Edit Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="student-group-form">
                    <form action="UpdateTransport" method="post" id="UpdateTransportForm">
						<input type="text" name="routeid" id="routeid" value="<?php echo $transport->routeid?>" class="d-none">
						<input type="text" name="vehicleid" id="vehicleid" value="<?php echo $transport->vehicleid;?>"  class="d-none">
						<input type="text" name="driverid" id="driverid" value="<?php echo $transport->driverid;?>"  class="d-none">
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-6 mb-4">
                            <label>Transport Id<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" id="transportid" name="transportid" value="<?php echo $transport->transportid; ?>"readonly>
                            </div>
                            <div class="col-lg-5 col-md-6" style="visibility:hidden;">
                            <label>Transport Id<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6" style="visibility:hidden;">
                            <label>Transport Id<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $transport->id; ?>"readonly>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <label>Route<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" id="routename" name="routename" value="<?php echo $transport->routename; ?>" readonly>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Select Bus<span class="login-danger">*</span></label>
                                    <select class="form-select" name="vehiclenumber" id="vehiclenumber" style="height:45px;font-size:15px !important;">
                                        <option value="NA">Select Bus</option>
                                        <?php foreach ($vehicles as $vehicle) { ?>
                                            <option value="<?php echo $vehicle->vehicleregnumber; ?>" <?php echo ($vehicle->vehicleregnumber == $transport->vehiclenumber) ? 'selected' : ''; ?>><?php echo $vehicle->vehicleregnumber; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $transport->vehiclenumber; ?>" selected><?php echo $transport->vehiclenumber; ?></option>
                                    </select>
                                    <div class="invalid-feedback" style="display:none;" id="vehiclenumber_errormessage">
                                                                Vehicle Number is Required.
                                                            </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Select Driver<span class="login-danger">*</span></label>
                                    <select class="form-select" name="drivername" id="drivername" style="height:45px;font-size:15px !important;">
                                        <option value="NA">Select Driver</option>
                                        <?php foreach ($drivers as $driver) { ?>
                                            <option value="<?php echo $driver->driverid;?>" <?php echo ($driver->firstname." ".$driver->lastname == $transport->drivername) ? 'selected' : ''; ?>><?php echo $driver->firstname." ".$driver->lastname; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $transport->driverid;?>" selected><?php echo $transport->drivername; ?></option>
                                    </select>
                                    <div class="invalid-feedback" style="display:none;" id="drivername_errormessage">
                                                                Driver Name is Required.
                                                            </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
							<div class="form-group">
							<div class="search-student-btn ">
							<label class="d-block" style="visibility:hidden;">Select Driver<span class="login-danger">*</span></label>
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
								</div>
								
							</div>
                         
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

            <!-- Footer -->
            <footer>
                <p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
            </footer>
            <!-- /Footer -->

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
    <script>
		document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('UpdateTransportForm').addEventListener('submit', function(event) {
					var fieldIds = ['routename','vehiclenumber','drivername',];

					// Loop through each field ID
					for (var i = 0; i < fieldIds.length; i++) {
						validateField(fieldIds[i], event);
					}
			});
		});
        function validateField(fieldId, event) {
			var field = document.getElementById(fieldId);

			if (field.tagName.toLowerCase() === 'select') {
				validateSelect(field, event);
			} else {
				if (!field.value.trim()) {
					field.classList.add('is-invalid');
					document.getElementById(fieldId + '_errormessage').style.display = 'block';
					event.preventDefault();
				}
			}
		}
		function validateSelect(selectField, event) {
			// Check if the selected value contains "Please Select"
			if (selectField.value=="NA") {
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
</body>

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:41 GMT -->

</html>