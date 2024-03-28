<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mark Attendance</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/feather/feather.css">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icons/flags/flags.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome/css/all.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/datatables.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">


  
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
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.html">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.html">Student List</a></li>
                                <li><a href="student-details.html">Student View</a></li>
                                <li><a href="add-student.html">Student Add</a></li>
                                <li><a href="edit-student.html">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments.html">Department List</a></li>
                                <li><a href="add-department.html">Department Add</a></li>
                                <li><a href="edit-department.html">Department Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.html">Subject List</a></li>
                                <li><a href="add-subject.html">Subject Add</a></li>
                                <li><a href="edit-subject.html">Subject Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.html">Invoices List</a></li>
                                <li><a href="invoice-grid.html">Invoices Grid</a></li>
                                <li><a href="add-invoice.html">Add Invoices</a></li>
                                <li><a href="edit-invoice.html">Edit Invoices</a></li>
                                <li><a href="view-invoice.html">Invoices Details</a></li>
                                <li><a href="invoices-settings.html">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections.html">Fees Collection</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="salary.html">Salary</a></li>
                                <li><a href="add-fees-collection.html">Add Fees</a></li>
                                <li><a href="add-expenses.html">Add Expenses</a></li>
                                <li><a href="add-salary.html">Add Salary</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                        </li>
                        <li>
                            <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog.html">All Blogs</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="error-404.html">Error Page</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                        </li>
                        <li>
                            <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                        </li> -->
                        <li class=""> 
							<a href="<?php echo base_url()?>index.php/StaffController/AdminDashboard"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
							</li>
						<li class="">  
								<a href="<?php echo base_url()?>index.php/TransportController/index"><i class="fas fa-bus"></i> <span>Transport</span></a>
							</li>
							<li class="active">
                            <a href="<?php echo base_url()?>index.php/StaffController/AdminStaffDashboard"><i class="fa-solid fa-chalkboard-user"></i></i> <span>Staff</span></a>
                        </li>
						<li class="">
						<a href="<?php echo base_url()?>index.php/StaffController/Logout"><i class="fa-solid fa-power-off"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Mark Checkin-checkout</h3>
                            <ul class="breadcrumb">
								<li><a href="AdminStaffDashboard">Staff</a></li>
								<li><a href="checkincheckoutdata">/ Checkin-checkout</a></li>
								<li class="breadcrumb-item active">/ Mark Checkin-checkout Data</li>
							</ul>
                        </div>
                    </div>
                </div>
                <div class="student-group-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Staff ID" id="staffidinput" oninput="Getstaffdata()">
                                <p id="nostafffounderrormessage" class="text-danger mt-2" style="display:none;font-size:0.7rem;">Enter Valid Staff Id</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" style="visibility:hidden;">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Staff ID" >
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-success" id="Intimemarkbutton" onclick="markintime()">Mark In Time <i class="fa-solid fa-circle-check"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-danger" id="Outtimemarkbutton" onclick="MarkOutTime()">Mark out Time <i class="fa-solid fa-circle-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <form class="border-0" action="MarkAttendancePost" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <!-- Page Header -->
                                    <div class="page-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="page-title mx-auto">Staff Data</h3><span id="attendancedate" class="fw-bold"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Page Header -->
                                    <div class="table-responsive" id="nodatafoundtable" style="display:block;">
                                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                            <thead class="student-thread">
                                                <tr>
                                                    <th class="text-center">Staff Name</th>
                                                    <!-- <th class="text-center">Contact Number</th> -->
                                                    <th class="text-center">Check In Time</th>
                                                    <th class="text-center">Check Out Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td class="text-center"><input type="text" class="border-0 text-center" style="background-color:inherit;" id="name" readonly></td>
                                                        <!-- <td class="text-center"><input type="text" class="border-0 text-center" style="background-color:inherit;"  id="contactnumber" readonly></td>  -->
                                                        <td class="text-center"><input type="text" class="border-0 text-center d-none" name="intime" id="intime" readonly></td>
                                                        <td class="text-center"><input type="text" class="border-0 text-center d-none" name="outtime" id="outtime" readonly></td>
                                                    </tr>
                                                    <h5 class="text-danger" id="nodataheading">No Data!</h5>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
         document.getElementById('Intimemarkbutton').disabled=true;
         document.getElementById('Outtimemarkbutton').disabled=true;
        function Getstaffdata()
        {
            staffid=document.getElementById('staffidinput').value.trim();
            if(staffid.length>4)
            {
                fetch('GetStaffData?staffid=' + staffid)
                .then(response =>{
                    if(!response.ok)
                    {
                        console.log("Response was Not Ok");
                    }
                    return response.json();
                })
                .then(data=>{
                    if (data .message=="Data Found") {
                        document.getElementById('nostafffounderrormessage').style.display='none';
                    document.getElementById('nodatafoundtable').style.display = 'block';
                    document.getElementById('nodataheading').style.display='none';
                    var tbody = document.querySelector('#nodatafoundtable tbody');
                    tbody.innerHTML = '';
                    data.attendancedatatoday.forEach(item => {
                        var row = tbody.insertRow();
                        var cellName = row.insertCell();
                        cellName.classList.add('text-center');
                        cellName.textContent = item.name;
                        var cellIntime = row.insertCell();
                        cellIntime.classList.add('text-center');
                        if(item.intime)
                        {
                            cellIntime.textContent = item.intime;
                        }
                        else{
                            cellIntime.textContent = "_ _";
                        }
                        var cellOuttime = row.insertCell();
                        cellOuttime.classList.add('text-center');
                        if(item.outtime)
                        {
                            cellOuttime.textContent = item.outtime;
                        }
                        else{
                            cellOuttime.textContent ="_ _";  
                        }
                        
                        
                    });

                    if(data.laststatus=="Check Out")
                    {
                        document.getElementById('Intimemarkbutton').removeAttribute("disabled");
                        document.getElementById('Outtimemarkbutton').disabled=true;
                    }
                    else{
                        document.getElementById('Intimemarkbutton').disabled=true;
                        document.getElementById('Outtimemarkbutton').removeAttribute("disabled");
                    }
                }
                else if(data.message=="No Data Found")
                {
                    document.getElementById('Intimemarkbutton').removeAttribute("disabled");
                    document.getElementById('Outtimemarkbutton').disabled=true;
                    var tbody = document.querySelector('#nodatafoundtable tbody');
                    tbody.innerHTML = '';
                    document.getElementById('nodataheading').style.display='block';
                    document.getElementById('nostafffounderrormessage').style.display='none';
                }
                    else{
                        document.getElementById('Intimemarkbutton').disabled=true;
                        document.getElementById('Outtimemarkbutton').disabled=true;
                       document.getElementById('nostafffounderrormessage').style.display='block';
                    }
                })
                .catch(error=>{
                    console.log(error);
                })
            }
            else{
                document.getElementById('Intimemarkbutton').disabled=true;
                document.getElementById('Outtimemarkbutton').disabled=true;
                document.getElementById('nostafffounderrormessage').style.display='none';
                var tbody = document.querySelector('#nodatafoundtable tbody');
                    tbody.innerHTML = '';
                    document.getElementById('nodataheading').style.display='block';
            }
        }
        function markintime()
        {
            staffid=document.getElementById("staffidinput").value.trim();
            fetch('MarkInTime?staffid='+ staffid)
            .then(response=>{
                if(!response.ok)
                {
                    console.log("Response was not ok");
                    return;
                }
                window.location.href="markInTimeRedirect";
                return response.json(); 
            })
            .catch(error=>{
                console.log(error);
            })
        }

        function MarkOutTime()
        {
            staffid=document.getElementById("staffidinput").value.trim();
            console.log(staffid);
            fetch('MarkOutTime?staffid='+ staffid)
            .then(response=>{
                if(!response.ok)
                {
                    console.log("Response was not ok");
                    return;
                }
                window.location.href="markOuttimeRedirect";
                return response.json();
            })
            .then(data=>{

            })
            .catch(error=>{
                console.log(error);
            })
        }

    </script>
   
</body>

</html>