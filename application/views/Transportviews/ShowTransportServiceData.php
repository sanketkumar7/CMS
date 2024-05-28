<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Transport Service Data</title>

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
                            <h3 class="page-title">Student Data</h3>
                            <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Transport">Transport </a></li>
                                    <li class=""><a href="ShowAllotedStudentslist">/Students</a></li>
                                    <li class="active">/Student Data</li>
                                </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="student-group-form bg-white p-5">
                    <form action="AllotStudentPost" method="post" id="AllotStudentForm">
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Student Name<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Student full name" id="studentname" name="studentname"value="<?php echo $data->studentname;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="studentname_errormessage">
													Student Name is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Student Reg No.<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Student Reg No." id="studentregnumber" name="studentregnumber" value="<?php echo $data->studentregnumber;?>" readonly>
                                    <span class="text-danger" id="errormessage" style="font-size:0.7rem;"></span>
                                    <div class="invalid-feedback" style="display:none;" id="studentregnumber_errormessage">
													Student Registeration Number is Required.
												</div>
                                </div>
                              
                            </div>
                            <div class="col-lg-3 col-md-6 d-none">
                                <div class="form-group local-forms">
                                    <label>Student Reg No.<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Student Reg No." id="studentid" name="studentid">
                                </div>
                               
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Course<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Course" id="course" name="course"  value="<?php echo $data->course;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="course_errormessage">
                                    course is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Branch<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Branch" id="studentdepartment" name="studentdepartment" value="<?php echo $data->studentdepartment;?>"  readonly>
                                    <div class="invalid-feedback" style="display:none;" id="studentdepartment_errormessage">
                                    Student Department is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Year<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Year" id="year" name="year" value="<?php echo $data->year;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="year_errormessage">
                                    Year is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Transport<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Year" id="year" name="year" value="<?php echo $data->transportid;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="year_errormessage">
                                    Year is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Route<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="routename" id="routename" name="routename" value="<?php echo $data->routename;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="routename_errormessage">
                                    Route is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Stop Name<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="routename" id="routename" name="routename" value="<?php echo $data->stopname;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="routename_errormessage">
                                    Route is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Total Fees<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Total Bus Fees" id="totalbusfees" name="totalbusfees" value="<?php echo $data->totalbusfees;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="totalbusfees_errormessage">
                                    Total Fees is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Paid Amount<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Paid amount" id="paidbusfees" name="paidbusfees" value="<?php echo $data->paidbusfees;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="paidbusfees_errormessage">
                                    Paid Fees is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Remaining amount<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Remaining amount" id="reamainingbusfees" name="reamainingbusfees" value="<?php echo $data->reamainingbusfees;?>" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="reamainingbusfees_errormessage">
                                    Remaining Fees is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 d-none">
                                <div class="form-group local-forms">
                                    <label>Fees Status<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control"  id="feesstatus" name="feesstatus" readonly>
                        
                                </div>
                            </div>

                        </div>
                        <a href="EditAllotData?id=<?php echo $data->id; ?>" class="btn btn-primary">Edit</a>
										<a class="btn btn-danger" onclick="deleteModal('<?php echo $data->id; ?>')">Delete</a>
                        <!-- <div class="col-lg-3">
                            <div class="form-group">
                                <div class="search-student-btn ">
                                    <label class="d-block" style="visibility:hidden;">Submit Button<span class="login-danger">*</span></label>
                                    <button id="submitbutton" type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
                <!-- /Page Header -->
                <!-- <div class="row">
					<div class="col-sm-12">

						<div class="card card-table">
							<div class="card-body">
					
								<div class="page-header">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="page-title">Transports</h3>
										</div>
										
									</div>
								</div>
						
								<div class="table-responsive">
									<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
										<thead class="student-thread">
											<tr>
												<th>Sr No.</th>
												<th>Transport Id</th>
												<th>Route Name</th>
												<th>Vehicle Reg Number</th>
												<th>Vehicle Type</th>
												<th>Total Capacity</th>
												<th>Available Capacity</th>
												<th>Driver Name</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0;
                                            foreach ($transports as $transport) {
                                            ?>
												<tr>
													<td><?php echo ++$i; ?></td>
													<td><?php echo $transport->transportid; ?></td>
													<td><?php echo $transport->routename; ?></td>
													<td><?php echo $transport->vehiclenumber; ?></td>
													<td><?php echo $transport->vehicletype; ?></td>
													<td><?php echo $transport->totalcapacity; ?></td>
													<td><?php echo $transport->availablecapacity; ?></td>
													<td><?php echo $transport->drivername; ?></td>
													<td>
														<div class="actions">
															<a href="ShowTransportData?id=<?php echo $transport->id; ?>" class="btn btn-sm bg-success-light me-2 ">
																<i class="feather-eye"></i>
															</a>
															<a href="EditTransportData?id=<?php echo $transport->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-edit"></i>
															</a>
															<a id="Deletebutton" href="DeleteTransportWithid?id=<?php echo $transport->id; ?>" class="btn btn-sm bg-danger-light">
																<i class="feather-trash-2"></i>
															</a>
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
				</div> -->
            </div>

            <!-- Footer -->

            <!-- /Footer -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <footer>
        <p>COPYRIGHT © 2023 DREAMSTECHNOLOGIES.</p>
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

    <!-- Datatables JS -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script>
        	function deleteModal(id) {
            const modalYesButton = document.getElementById('cancelsubjectbutton');
                modalYesButton.href = 'DeleteTransportServiceWithid?id=' + id;
    $('#deleteModal').modal('show');
}
    </script>
</body>

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:41 GMT -->

</html>