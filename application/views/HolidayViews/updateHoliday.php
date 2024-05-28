<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Update Holiday</title>
		
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
		
	
    </head>
    <body>
		
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
								<a>View all Notifications <?php ?></a>
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
								<h3 class="page-title">Update Holiday</h3>
								<ul class="breadcrumb">
								<li><a href="Holiday">Holiday</a></li>
									<li class=""><a href="GetHolidaysList">/ Holidays List</a></li>
									<li class="breadcrumb-item active">/ Update Holiday</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card">
								<div class="card-body">
									<form action="UpdatedHolidayPost" method="post" id="UpdateHolidayForm">
										<div class="row">
											<div class="col-12">
												<h5 class="form-title"><span>Holiday Details</span></h5>
											</div>
											<div class="col-12 col-sm-4 d-none">  
												<div class="form-group local-forms">
													<label>Holiday ID <span class="login-danger">*</span></label>
													<input type="text" name="id" class="form-control" value="<?php echo $Holiday->id;?>">
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label>Holiday Name <span class="login-danger">*</span></label>
													<input type="text" name="holidayname" id="holidayname" class="form-control" placeholder="name" value="<?php echo $Holiday->holidayname;?>" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '');checkdeptname();">
													<p id="deptexisterror" class="text-danger" style="display:none;font-size:0.7rem" >Holiday With same name already exists</p>
													<div class="invalid-feedback" style="display:none;"
                                                    id="holidayname_errormessage">
                                                    Holiday Name is Required.
                                                </div>
												</div>
											</div>
											<div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label>Holiday Date <span class="login-danger">*</span></label>
													<input type="date" name="date" id="date" class="form-control" value="<?php echo $Holiday->date;?>" placeholder="dd-mm-yyyy"  onchange="checkdate();checkSunday();">
													<p id="datetexisterror" class="text-danger" style="display:none;font-size:0.7rem">Holiday already exists on that date</p>
													<div class="invalid-feedback" style="display:none;"
                                                    id="date_errormessage">
                                                    Holiday Date is Required.
                                                </div>
												</div>
											</div>
											<!-- <div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label>Head of Department <span class="login-danger">*</span></label>
													<input type="text" class="form-control">
												</div>
											</div> -->
											<!-- <div class="col-12 col-sm-4">  
												<div class="form-group local-forms calendar-icon">
													<label>Department Start Date <span class="login-danger">*</span></label>
													<input class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY" >
												</div>
											</div> -->
											<!-- <div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label>No of Students <span class="login-danger">*</span></label>
													<input type="text" class="form-control" >
												</div>
											</div> -->
											<div class="col-12">
												<div class="student-submit">
													<button type="submit" class="btn btn-primary" id="UpdateHolidayButton">Update Holiday</button>
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
        <script src="<?php echo base_url()?>assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="<?php echo base_url()?>assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="<?php echo base_url()?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datepicker Core JS -->
		<script src="<?php echo base_url()?>assets/plugins/moment/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
		<script>
			    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('UpdateHolidayForm').addEventListener('submit', function(event) {
            var fieldIds = ['holidayname', 'date'];
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

   

	// function checkdeptname()
	// {
	// 	let HolidayName=document.getElementById("departmentname").value.trim();	
	// 	fetch("checkdeptnamevalidity?deptname="+deptname)
	// 	.then(response =>{
	// 		if(!response.ok)
	// 		{
	// 			return;
	// 		}
	// 		return response.json();
	// 	}).then(data =>{
	// 		if(data.message=="Dept Found")
	// 		{
	// 			document.getElementById("deptexisterror").style.display="block";
	// 			document.getElementById("AddDepartmentButton").disabled=true;
	// 		}
	// 		else{
	// 			document.getElementById("deptexisterror").style.display="none";
	// 			document.getElementById("AddDepartmentButton").disabled=false;
	// 		}
	// 	}).catch(error =>{
	// 		console.log(error);
	// 	});
	// }
let predate=document.getElementById("date").value;
	function checkdate()
	{
		let date=document.getElementById("date").value.trim();	

		if(predate===date)
		{
			document.getElementById("datetexisterror").style.display="none";
				document.getElementById("UpdateHolidayButton").disabled=false;
				return;
		}
		else{
			fetch("checkdatevalidity?date="+date)
		.then(response =>{
			if(!response.ok)
			{
				return;
			}
			return response.json();
		}).then(data =>{
			if(data.message=="Holiday on that date Exists")
			{
				document.getElementById("datetexisterror").style.display="block";
				document.getElementById("UpdateHolidayButton").disabled=true;
			}
			else{
				document.getElementById("datetexisterror").style.display="none";
				document.getElementById("UpdateHolidayButton").disabled=false;
			}
		}).catch(error =>{
			console.log(error);
		});
		}
		
	}
	function checkSunday() {
    const dateInput = document.getElementById('date').value;
    const date = new Date(dateInput);
    if (isNaN(date.getTime())) {
        console.log('Invalid Date');
        return false;
    }
    const dayOfWeek = date.getDay();
    if (dayOfWeek === 0) {
		document.getElementById("sundaydate").style.display="block";
		document.getElementById("UpdateHolidayButton").disabled=true;
        return true;
    } else {
       document.getElementById("sundaydate").style.display="none";
	   document.getElementById("UpdateHolidayButton").disabled=false;
        return false;
    }
}

		</script>
    </body>

</html>