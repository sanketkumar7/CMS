<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Pay Salary</title>

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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toatr.css">

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

    <?php
    $Nodriverfound = $this->session->flashdata('Nodriverfound');
    ?>
    <?php if (isset($Nodriverfound)) : ?>
        <div id="Nodriverfound" class="alert alert-danger text-center alert-fixed" role="alert">
            <strong><?php echo $Nodriverfound; ?></strong>
        </div>
    <?php endif; ?>
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
                            <h3 class="page-title">Pay Salary</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Transport">Transport </a></li>
                                <li class=""><a href="DriverSalary">/Salary Data</a></li>
                                <li class="active">/Pay Salary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="student-group-form">
                    <form action="paysalary" method="post">
                        <div class="row">
                            <input class="d-none" name="status">
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="driverid" id="driverid" placeholder="Enter Driver Id" oninput="fetchdriverdata()">
                                    <p id="errormessage" class="text-danger mt-1 text-center" style="display:none; font-size:0.75rem;"></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="drivername" placeholder="Enter Driver Name" id="drivername" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="month" id="month" placeholder="Month eg. January">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 d-none">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="date" placeholder="Enter Month ">
                                </div>
                            </div>
                            <div class="col-lg-3 text-end">
                                <div class="search-student-btn">
                                    <button type="btn" class="btn btn-primary" id="CalculateSalarybutton">Calculate <i class="fa-solid fa-indian-rupee-sign"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" readonly>
                                    <p id="paidmessage" class="text-danger text-center mt-1" style="display:none;font-size:0.75rem;">Already Paid</p>
                                    <p id="nodatafoundmessaeg" class="text-danger text-center mt-1" style="display:none;font-size:0.75rem;">No Data Found</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary" id="paybutton">Pay </button>
                                    <button class="btn btn-primary" id="Clearbutton" onclick="cleardata(event)">Clear </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /Page Header -->



            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery --> <!-- Footer -->

    <script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       
        function fetchdriverdata() {
            document.getElementById('paybutton').disabled = true;
            var driverid = document.getElementById('driverid').value.trim();
            if (driverid.length >= 3) {
                fetch('FetchDriverWithId?driverid=' + driverid)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.message == "No Driver Found") {
                            document.getElementById('errormessage').style.display = 'block';
                            document.getElementById('errormessage').innerText = "No driver found";
                        } else {
                            document.getElementById('errormessage').style.display = 'none';
                            document.getElementById('drivername').value = data.drivername;
                        }
                    })
                    .catch(error => {
                        console.error('Fetch error:', error);
                    });
            }
            else{
                document.getElementById('paybutton').disabled=true;
            }
        }

        function calculatesalary() {
            var driverid = document.getElementById('driverid').value;
            var month = document.getElementById('month').value;
            const url = `CalculateSalary?driverid=${driverid}&month=${month}`;
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse response JSON
                })
                .then(data => {
                    if (data.message == "Salary Already Paid For the Month") {
                       document.getElementById('paidmessage').style.display='block';
                       document.getElementById('nodatafoundmessaeg').style.display='none';

                    } else {
                        if (data.count != 0) {
                            var salary = 800 * data.count;
                            document.getElementById('salary').value = salary;
                            document.getElementById('paybutton').disabled = false;
                            document.getElementById('month').setAttribute('readonly',true);
                            document.getElementById('nodatafoundmessaeg').style.display='none';
                        } else {
                            document.getElementById('salary').value = 0;
                            document.getElementById('nodatafoundmessaeg').style.display='block';
                            document.getElementById('paidmessage').style.display='none';
                            document.getElementById('paybutton').disabled=true;

                        }
                    }

                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
        function cleardata(event)
        {
            event.preventDefault();
            document.getElementById('driverid').value='';
            document.getElementById('drivername').value='';
            document.getElementById('month').value='';
            document.getElementById('salary').value='';
            document.getElementById('errormessage').style.display='none';
            document.getElementById('paidmessage').style.display='none'
            document.getElementById('paybutton').disabled=true;
            document.getElementById('month').removeAttribute('readonly');
            document.getElementById('nodatafoundmessaeg').style.display='none';
        }
        document.getElementById('CalculateSalarybutton').addEventListener('click', function(event) {
            event.preventDefault(); 
            calculatesalary(); 
        });
    </script>

</body>

</html>