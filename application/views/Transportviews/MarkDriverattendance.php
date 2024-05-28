<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mark Attendance</title>

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




  <script>  function showElement() {
            var element = document.getElementById("sidebar");
			console.log(document.getElementById("sidebar"));
            element.style.display = "block";
        }
        setTimeout(showElement, 10);</script>
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
                            <h3 class="page-title">Mark Attendance</h3>
                            <ul class="breadcrumb">
                                <li class=""><a href="Transport">Transport/ </a></li>
                                <li class="breadcrumb-item"><a href="Attendance">Attendance </a></li>
                                <li class="active">/ Mark Attendance</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by ID">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Phone ...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <form class="border-0" action="MarkAttendance" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="card card-table">
                                <div class="card-body">
                                    <!-- Page Header -->
                                    <div class="page-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="page-title mx-auto">Mark Attendance</h3><span id="attendancedate" class="fw-bold"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Page Header -->
                                    <div class="table-responsive">
                                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                            <thead class="student-thread">
                                                <tr>
                                                    <th class="text-center">Sr No.</th>
                                                    <th class="text-center">Driver Id</th>
                                                    <th class="text-center">Driver Name</th>
                                                    <th class="text-center">Contact Number</th>
                                                    <th class="text-center">Mark Attendance</th>
                                                    <th class="text-center d-none">Mark Attendance</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0;
                                                foreach ($drivers as $driver) { ?>
                                                    <tr>
                                                        <td class="text-center sr-no"><input type="text" class="border-0 text-center" style="background-color:inherit;" value="<?php echo ++$i; ?>" readonly></td>
                                                        <td class="text-center"><input type="text" class="border-0 text-center" style="background-color:inherit;" name="driverid[]" value="<?php echo $driver->driverid; ?>" readonly></td>
                                                        <td class="text-center"><input type="text" class="border-0 text-center" style="background-color:inherit;" name="drivername[]" value="<?php echo $driver->firstname . " " . $driver->lastname; ?>" readonly></td>
                                                        <td class="text-center"><input type="text" class="border-0 text-center" style="background-color:inherit;" value="<?php echo $driver->contactnumber; ?>" readonly></td>
                                                        <td class="text-center">
                                                            <input type="checkbox" class="attendance-checkbox" name="attendance[]" value="<?php echo $driver->driverid; ?>" data-driver-name="<?php echo htmlspecialchars($driver->firstname . " " . $driver->lastname, ENT_QUOTES, 'UTF-8'); ?>" onchange="handleCheckboxChange(this)" readonly>
                                                        </td>
                                                        <td class="text-center"><input type="text" class="border-0 text-center d-none" name="attendancedate[]" id="attendancedateinpuvalue" onload="setCurrentDate()" readonly></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5" id="replicatedTable" style="display: none;">
                        <div class="col-sm-12">

                            <div class="card card-table">
                                <div class="card-body">
                                    <h3 class="page-title mx-auto mb-4 text-center">Marked Attendances</h3>
                                    <div class="table-responsive">
                                        <table id="replicatedTableContent" class="table border-0 table-hover table-center mb-0 star-student table-striped">
                                            <thead class="student-thread">
                                                <tr>
                                                    <th class="text-center sr-no">Sr No.</th>
                                                    <th class="text-center">Driver Id</th>
                                                    <th class="text-center">Driver Name</th>
                                                    <th class="text-center">Contact Number</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" id="MarkAttendance" type="submit">Mark Attendance</button>
                            </div>

                        </div>
                    </div>
                </form>
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

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to handle checkbox change event
        var date = new Date();
        var attendancedate = formatDate(date);
        var i = 0;

        function handleCheckboxChange(checkbox) {
            var isChecked = checkbox.checked;
            var driverId = checkbox.value;
            var driverName = checkbox.getAttribute('data-driver-name');
            var contactNumber = checkbox.closest('tr').querySelector('td:nth-child(4) input').value;

            if (isChecked) {
                // Add the driver to the replicated table with attendance as Present
                i++;
                addDriverToReplicatedTable(driverId, driverName, contactNumber, i, true);
            } else {
                // Remove the driver from the replicated table or update attendance to Absent
                removeDriverFromReplicatedTable(driverId);
                i--;
            }
        }
        // Function to add a driver to the replicated table
        function addDriverToReplicatedTable(driverId, driverName, contactNumber, srno, isChecked) {
            // Check if the driver is already in the replicated table
            if (!document.querySelector('#replicatedTableContent tr[data-driver-id="' + driverId + '"]')) {
                var newRow = document.createElement('tr');

                newRow.setAttribute('data-driver-id', driverId);
                newRow.innerHTML =
                    '<td class="text-center">' + srno + '</td>' +
                    '<td class="text-center">' + driverId + '</td>' +
                    '<td class="text-center">' + driverName + '</td>' +
                    '<td class="text-center">' + contactNumber + '</td>';
                document.querySelector('#replicatedTableContent tbody').appendChild(newRow);
                document.getElementById('replicatedTable').style.display = 'block';
            }
        }

        // Function to remove a driver from the replicated table
        function removeDriverFromReplicatedTable(driverId) {
            var rowToRemove = document.querySelector('#replicatedTableContent tr[data-driver-id="' + driverId + '"]');
            if (rowToRemove) {
                rowToRemove.remove();
                // Update serial numbers of remaining rows
                updateSerialNumbers();
            }

            // Hide the replicated table if it's empty
            if (document.querySelectorAll('#replicatedTableContent tbody tr').length === 0) {
                document.getElementById('replicatedTable').style.display = 'none';
            }
        }

        // Function to update serial numbers
        function updateSerialNumbers() {
            var rows = document.querySelectorAll('#replicatedTableContent tbody tr');
            rows.forEach(function(row, index) {
                row.querySelector('.text-center').textContent = index + 1;
            });
        }

        var attendanceDateSpan = document.getElementById('attendancedate');

        // Function to format the date as dd-mm-yyyy
        function formatDate(date) {
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            date = day + '-' + month + '-' + year;
            return day + '-' + month + '-' + year;
        }

        // Function to set the content of the span to the current date
        function setCurrentDate() {
            var currentDate = new Date();
            var formattedDate = formatDate(currentDate);
            attendanceDateSpan.textContent = '(' + formattedDate + ')';
            document.getElementById('attendancedateinpuvalue').value = formattedDate; // Changed ID to 'attendancedateinpuvalue'
        }
        window.addEventListener('load', setCurrentDate);       
    </script>
   
   
</body>

</html>