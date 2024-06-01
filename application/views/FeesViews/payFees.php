<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:11 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Pay Fees</title>

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
							<a>View all Notifications </a>
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
							<h3 class="page-title">Pay Fees</h3>
							<ul class="breadcrumb">
								<li><a href="FeesDashboard">Fees</a></li>
								<!-- <li class=""><a href="ManageDepartment">/ Manage Department</a></li> -->
								<li class="breadcrumb-item active">/ Pay Fees</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="student-group-form">
					<form method="post" action="payfees" id="PayFeesForm">
					<div class="row">
						
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
								<label for="Studentid" style="font-size:0.9rem">Student ID</label>
								<input type="text" class="form-control" name="studentid" placeholder="Student ID ..." id="Studentid" oninput="getFeesHistory();">
								<p id="sterror" class="text-danger" style="display:none;font-size:0.7rem;">Enter Valid Id</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
							<label for="Studentid" style="font-size:0.9rem">Total Fees</label>
								<input type="text" class="form-control" name="totalfees"
								 placeholder="Total Fees" id="TotalFees" readonly>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
							<label for="Studentid" style="font-size:0.9rem">Total Fees Paid</label>
								<input type="text" class="form-control" name="totalfeespaid"
								 placeholder="Total Fees Paid" id="TotalFeesPaid" readonly>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="form-group">
							<label for="Studentid" style="font-size:0.9rem">Remaining Fees</label>
								<input type="text" class="form-control" name="remainingfees"
								 placeholder="Remaining Fees" id="RemainingFees" readonly>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="form-group">
							<label for="Studentid" style="font-size:0.9rem">Current Payment</label>
								<input type="text" class="form-control" name="currentpayment"
								 placeholder="Current Payment" id="currentpayment" onchange="checkcurrentpayvalue();" oninput="checkcurrentpayvalue();">
								 <p id="currentpayment_errormessage" class="text-danger" style="display:none;font-size:0.8rem;">Current Pament is Required</p>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="search-student-btn">
							<label for="Studentid" style="visibility:hidden">Remaining Fees</label>
								<button id="paybtn" type="btn" class="btn btn-primary">Pay</button>
							</div>
						</div>
					</div>
					</form>
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
		document.getElementById("paybtn").disabled=true;
   document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('PayFeesForm').addEventListener('submit', function(event) {
            var fieldIds = ['currentpayment'];
            for (var i = 0; i < fieldIds.length; i++) {
                validateField(fieldIds[i], event);
            }
        });
    });
	function validateField(fieldId, event) {
        var field = document.getElementById(fieldId);
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                document.getElementById(fieldId + '_errormessage').style.display = 'block';
                event.preventDefault();
            }
    }
	function checkcurrentpayvalue() {
    let currentpayment = parseInt(document.getElementById("currentpayment").value.trim(), 10);
    let totalfees = parseInt(document.getElementById("TotalFees").value, 10);
    let totalfeespaid = parseInt(document.getElementById("TotalFeesPaid").value, 10);
    let remainingfees = parseInt(document.getElementById("RemainingFees").value, 10);
	
    if (isNaN(currentpayment)) currentpayment = 0;
    if (isNaN(totalfees)) totalfees = 0;
    if (isNaN(totalfeespaid)) totalfeespaid = 0;

    if ((totalfeespaid + currentpayment) > totalfees) {
        console.log("true");
        document.getElementById("currentpayment").value = totalfees - totalfeespaid;
    }
}

	function getFeesHistory()
	{
		let id=document.getElementById("Studentid").value.trim();
		if(id.length>=5)
		{
			fetch("<?php echo base_url()."index.php/StudentController/"?>getstudentfees?id="+id)
		.then((response)=>{
			if(!response.ok)
			{
				return;
			}
			return response.json();
		})
		.then((data)=>{
			if(data.message=="Student Found")
			{
				document.getElementById("TotalFees").value=data.data.totalfees;
				document.getElementById("TotalFeesPaid").value=data.data.totalfeespaid;
				document.getElementById("RemainingFees").value=data.data.remainingfees;
				if(data.data.remainingfees==0)
				{
					document.getElementById("paybtn").disabled=true;
					document.getElementById("currentpayment").setAttribute("readOnly","true");
					return;
				}
				else{
					document.getElementById("paybtn").disabled=false;

				}
				document.getElementById("sterror").style.display='none';
			}
			else{
				document.getElementById("sterror").style.display='block';
			}
		})
		.catch((error)=>{
			console.log(error);
		})
		}
		else{
			document.getElementById("sterror").style.display='none';
			document.getElementById("TotalFees").value="";
			document.getElementById("TotalFeesPaid").value="";
			document.getElementById("RemainingFees").value="";
			document.getElementById("paybtn").disabled=true;
		}
	
	}
	</script>

</body>

</html>