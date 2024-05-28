<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 08:14:17 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>GP Coordinator Dashboard</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

	<!-- Fontfamily -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/feather/feather.css">

	<!-- Pe7 CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icons/flags/flags.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Calendar CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/simple-calendar/simple-calendar.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
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

        .tablehover tbody tr:hover {
            background-color: #f7fafa !important;
        }
    </style>
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            var userRole = document.getElementById('userRole');
           

            if (userRole) {
                userRole.style.display = 'block';
                setTimeout(function() {
                    userRole.style.display = 'none';
                }, 4000);
            }
           
        });
    </script>
<body>
<?php if (isset($userRole)) : ?>
        <div id="userRole" class="alert alert-danger text-center alert-fixed" role="alert">
            <strong><?php echo $userRole; ?></strong>
        </div>
    <?php endif; ?>
	<div class="main-wrapper">

		<div class="header">

			<div class="header-left">
				<a href="index.html" class="logo">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo">
				</a>
				<a href="index.html" class="logo logo-small">
					<img src="<?php echo base_url(); ?>assets/img/logo-small.png" alt="Logo" width="30" height="30">
				</a>
			</div>

			<div class="menu-toggle">
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-bars"></i>
				</a>
			</div>

			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>


			<a class="mobile_btn" id="mobile_btn">
				<i class="fas fa-bars"></i>
			</a>


			<ul class="nav user-menu">
				<li class="nav-item dropdown language-drop me-2">
					<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/img/icons/header-icon-01.svg" alt>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
						<a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
						<a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
					</div>
				</li>

				<li class="nav-item dropdown noti-dropdown me-2">
					<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/img/icons/header-icon-05.svg" alt>
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
												<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>assets/img/profiles/avatar-02.jpg">
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
												<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>assets/img/profiles/avatar-11.jpg">
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
												<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>assets/img/profiles/avatar-17.jpg">
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
												<img class="avatar-img rounded-circle" alt="User Image" src="<?php echo base_url(); ?>assets/img/profiles/avatar-13.jpg">
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

				<li class="nav-item zoom-screen me-2">
					<a href="#" class="nav-link header-nav-list">
						<img src="<?php echo base_url(); ?>assets/img/icons/header-icon-04.svg" alt>
					</a>
				</li>

				<li class="nav-item dropdown has-arrow new-user-menus">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<div class="user-img">
							<img class="rounded-circle" src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
							<div class="user-text">
								<h6>Ryan Taylor</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
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

			</ul>

		</div>


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<span>Main Menu</span>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-newspaper"></i> <span>General Proficiency</span>
								<span class="menu-arrow"></span>
							</a>
						
								<ul>
									<li><a href="GpCoordinator" style="font-size:0.9rem;">General Proficiency Choice</a></li>
								</ul>
					
						</li>
					
						
					</ul>
				</div>
			</div>
		</div>


		<div class="page-wrapper">
			<div class="content container-fluid">

				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-sub-header">
								<h3 class="page-title">General Proficiency</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active">Student</li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>All Courses</h6>
										<h3>04/06</h3>
									</div>
									<div class="db-icon">
										<img src="<?php echo base_url(); ?>assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>All Projects</h6>
										<h3>40/60</h3>
									</div>
									<div class="db-icon">
										<img src="<?php echo base_url(); ?>assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Test Attended</h6>
										<h3>30/50</h3>
									</div>
									<div class="db-icon">
										<img src="<?php echo base_url(); ?>assets/img/icons/student-icon-01.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-comman w-100">
							<div class="card-body">
								<div class="db-widgets d-flex justify-content-between align-items-center">
									<div class="db-info">
										<h6>Test Passed</h6>
										<h3>15/20</h3>
									</div>
									<div class="db-icon">
										<img src="<?php echo base_url(); ?>assets/img/icons/student-icon-02.svg" alt="Dashboard Icon">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-12 col-lg-12 col-xl-8">
						<div class="card flex-fill comman-shadow">
							<div class="card-header">
								<div class="row align-items-center">
									<div class="col-6">
										<h5 class="card-title">Today’s Lesson</h5>
									</div>
									<div class="col-6">
										<ul class="chart-list-out">
											<li><span class="circle-blue"></span><span class="circle-gray"></span><span class="circle-gray"></span></li>
											<li class="lesson-view-all"><a href="#">View All</a></li>
											<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="dash-circle">
								<div class="row">
									<div class="col-lg-3 col-md-3 dash-widget1">
										<div class="circle-bar circle-bar2">
											<div class="circle-graph2" data-percent="80">
												<b>80%</b>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3">
										<div class="dash-details">
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-01.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Class</h5>
													<h4>Electrical Engg</h4>
												</div>
											</div>
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-02.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Lessons</h5>
													<h4>5 Lessons</h4>
												</div>
											</div>
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-03.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Time</h5>
													<h4>Lessons</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3">
										<div class="dash-details">
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-04.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Asignment</h5>
													<h4>5 Asignment</h4>
												</div>
											</div>
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-05.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Staff</h5>
													<h4>John Doe</h4>
												</div>
											</div>
											<div class="lesson-activity">
												<div class="lesson-imgs">
													<img src="<?php echo base_url(); ?>assets/img/icons/lesson-icon-06.svg" alt>
												</div>
												<div class="views-lesson">
													<h5>Lesson Learned</h5>
													<h4>10/50</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
										<div class="skip-group">
											<button type="submit" class="btn btn-info skip-btn">skip</button>
											<button type="submit" class="btn btn-info continue-btn">Continue</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-lg-12 col-xl-12 d-flex">
								<div class="card flex-fill comman-shadow">
									<div class="card-header">
										<div class="row align-items-center">
											<div class="col-6">
												<h5 class="card-title">Learning Activity</h5>
											</div>
											<div class="col-6">
												<ul class="chart-list-out">
													<li><span class="circle-blue"></span>Teacher</li>
													<li><span class="circle-green"></span>Student</li>
													<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="apexcharts-area"></div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12 col-xl-12 d-flex">
								<div class="card flex-fill comman-shadow">
									<div class="card-header d-flex align-items-center">
										<h5 class="card-title">Teaching History</h5>
										<ul class="chart-list-out student-ellips">
											<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
										</ul>
									</div>
									<div class="card-body">
										<div class="teaching-card">
											<ul class="steps-history">
												<li>Sep22</li>
												<li>Sep23</li>
												<li>Sep24</li>
											</ul>
											<ul class="activity-feed">
												<li class="feed-item d-flex align-items-center">
													<div class="dolor-activity">
														<span class="feed-text1"><a>Mathematics</a></span>
														<ul class="teacher-date-list">
															<li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
															<li>|</li>
															<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
														</ul>
													</div>
													<div class="activity-btns ms-auto">
														<button type="submit" class="btn btn-info">In Progress</button>
													</div>
												</li>
												<li class="feed-item d-flex align-items-center">
													<div class="dolor-activity">
														<span class="feed-text1"><a>Geography </a></span>
														<ul class="teacher-date-list">
															<li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
															<li>|</li>
															<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
														</ul>
													</div>
													<div class="activity-btns complete ms-auto">
														<button type="submit" class="btn btn-info">Completed</button>
													</div>
												</li>
												<li class="feed-item d-flex align-items-center">
													<div class="dolor-activity">
														<span class="feed-text1"><a>Botony</a></span>
														<ul class="teacher-date-list">
															<li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
															<li>|</li>
															<li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
														</ul>
													</div>
													<div class="activity-btns ms-auto">
														<button type="submit" class="btn btn-info">In Progress</button>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-12 col-xl-4 d-flex">
						<div class="card flex-fill comman-shadow">
							<div class="card-body">
								<div id="calendar-doctor" class="calendar-container"></div>
								<div class="calendar-info calendar-info1">
									<div class="up-come-header">
										<h2>Upcoming Events</h2>
										<span><a href="javascript:;"><i class="feather-plus"></i></a></span>
									</div>
									<div class="upcome-event-date">
										<h3>10 Jan</h3>
										<span><i class="fas fa-ellipsis-h"></i></span>
									</div>
									<div class="calendar-details">
										<p>08:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>Botony</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>08:00 - 09:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>09:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>Botony</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>09:00 - 10:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>10:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>Botony</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>10:00 - 11:00 am</span>
										</div>
									</div>
									<div class="upcome-event-date">
										<h3>10 Jan</h3>
										<span><i class="fas fa-ellipsis-h"></i></span>
									</div>
									<div class="calendar-details">
										<p>08:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>English</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>08:00 - 09:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>09:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>Mathematics </h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>09:00 - 10:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>10:00 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>History</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>10:00 - 11:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>11:00 am</p>
										<div class="calendar-box break-bg">
											<div class="calandar-event-name">
												<h4>Break</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>11:00 - 12:00 am</span>
										</div>
									</div>
									<div class="calendar-details">
										<p>11:30 am</p>
										<div class="calendar-box normal-bg">
											<div class="calandar-event-name">
												<h4>History</h4>
												<h5>Lorem ipsum sit amet</h5>
											</div>
											<span>11:30 - 12:00 am</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<footer>
		<p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
	</footer>
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.7.1.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/js/feather.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/apexcharts.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/chart-data.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/simple-calendar/jquery.simple-calendar.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/calander.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/js/circle-progress.min.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>

	<script src="<?php echo base_url(); ?>assets/js/script.js" type="2a7458580bc72a3976636ad5-text/javascript"></script>
	<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2a7458580bc72a3976636ad5-|49" defer></script>
</body>

<!-- Mirrored from preschool.dreamstechnologies.com/template/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 08:14:19 GMT -->

</html>


<!-- <li class="submenu">
							<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Academics</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										 <li class="submenu">
											<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 3</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li> -->
<!-- <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
									</ul>
								</li>

							</ul>
						</li> -->