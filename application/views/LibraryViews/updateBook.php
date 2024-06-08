<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Edit Book</title>

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
                            <a>View all Notifications <?php ?></a>
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
                            <h3 class="page-title">Edit Book</h3>
                            <ul class="breadcrumb">
                                <li><a href="LibraryDashboard">Library</a></li>
                                <li class=""><a href="AllBooks">/ Books</a></li>
                                <li class="breadcrumb-item active">/ Edit Book</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-body">
                                <form action="updatePost" method="post" id="updateBookForm">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Book Details</span></h5>
                                        </div>
                                        <input class="d-none" name="id" value="<?php echo $book->id; ?>">
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Book ID <span class="login-danger">*</span></label>
                                                <input type="text" name="bookid" class="form-control" id="bookid" placeholder="Book Id" oninput="checkbookid();" value="<?php echo $book->bookid; ?>">
                                                <p id="bookidexisterror" class="text-danger" style="display:none;font-size:0.7rem">Book With same ID already exists</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Book Title <span class="login-danger">*</span></label>
                                                <input type="text" name="booktitle" id="booktitle" placeholder="Mechanics" class="form-control" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '');checkbookname();" value="<?php echo $book->booktitle; ?>">
                                                <p id="booknameexisterror" class="text-danger" style="display:none;font-size:0.7rem">Book With same name already exists</p>
                                                <div class="invalid-feedback" style="display:none;" id="booktitle_errormessage">
                                                    Book Title is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Authors <span class="login-danger">*</span><span>(Enter Author names Separated by Commas)</span></label>
                                                <input type="text" name="authors" id="authors" placeholder="Mechanics" class="form-control" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '');" value="<?php echo $book->authors; ?>">
                                                <div class="invalid-feedback" style="display:none;" id="authors_errormessage">
                                                    Authors is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Publisher <span class="login-danger">*</span></label>
                                                <input type="text" name="publisher" id="publisher" placeholder="Technical Publications" class="form-control" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '');" value="<?php echo $book->publisher; ?>">
                                                <div class="invalid-feedback" style="display:none;" id="publisher_errormessage">
                                                    Publisher is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Edition <span class="login-danger">*</span></label>
                                                <input type="text" name="edition" id="edition" placeholder="first" class="form-control" value="<?php echo $book->edition; ?>">
                                                <p id="bookexisterror" class="text-danger" style="display:none;font-size:0.7rem">Book With same name already exists</p>
                                                <div class="invalid-feedback" style="display:none;" id="edition_errormessage">
                                                    Edition is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Year of Publication <span class="login-danger">*</span></label>
                                                <input type="text" name="yearofpublication" id="yearofpublication" placeholder="2024" class="form-control" value="<?php echo $book->yearofpublication; ?>">
                                                <p id="bookexisterror" class="text-danger" style="display:none;font-size:0.7rem">Book With same name already exists</p>
                                                <div class="invalid-feedback" style="display:none;" id="yearofpublication_errormessage">
                                                    Year of Publication is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Language <span class="login-danger">*</span></label>
                                                <input type="text" name="language" id="language" placeholder="English" class="form-control" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '');" value="<?php echo $book->language; ?>">
                                                <p id="bookexisterror" class="text-danger" style="display:none;font-size:0.7rem">Book With same name already exists</p>
                                                <div class="invalid-feedback" style="display:none;" id="booktitle_errormessage">
                                                    Language is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Select Course <span class="login-danger">*</span></label>
                                                <select name="course" id="course" class="form-control" name="course" id="course" onchange="appendyearoptions();getDepartments();">
                                                    <option value="NA">Select</option>
                                                    <option value="BE" <?php if ($book->course == "BE") echo "selected"; ?>>BE</option>
                                                    <option value="ME" <?php if ($book->course == "ME") echo "selected"; ?>>ME</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;" id="course_errormessage">
                                                    Course is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Select Year <span class="login-danger">*</span></label>
                                                <select class="form-control" name="year" id="year">
                                                    <option value="NA">Select</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;" id="course_errormessage">
                                                    Course is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Select Department <span class="login-danger">*</span></label>
                                                <select class="form-control" name="department" id="department">
                                                    <option>Select</option>
                                                </select>
                                                <div class="invalid-feedback" style="display:none;" id="department_errormessage">
                                                    Department is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>No. of pages<span class="login-danger">*</span></label>
                                                <input type="text" name="noofpages" id="noofpages" placeholder="300" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" value="<?php echo $book->noofpages; ?>">
                                                <div class="invalid-feedback" style="display:none;" id="noofpages_errormessage">
                                                    Number of Pages is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Book Count <span class="login-danger">*</span></label>
                                                <input type="text" name="count" id="count" placeholder="5" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" value="<?php echo $book->count; ?>">
                                                <div class="invalid-feedback" style="display:none;" id="count_errormessage">
                                                    Book Count is Required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Shelf Number<span class="login-danger">*</span></label>
                                                <input type="text" name="shelflocation" id="shelflocation" placeholder="10" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" value="<?php echo $book->shelflocation; ?>">
                                                <div class="invalid-feedback" style="display:none;" id="shelflocation_errormessage">
                                                    Shelf Number is Required.
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
                                            <div>
                                                <button class="btn btn-primary" id="updateButton">Update</button>
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
    <script src="<?php echo base_url() ?>assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="<?php echo base_url() ?>assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="<?php echo base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script>
        function appendyearoptions() {
            let course = document.getElementById("course").value;
            let year = document.getElementById("year");
            if (course == "BE") {
                document.getElementById("year").innerHTML = "";
                for (let i = 1; i <= 4; i++) {
                    const option = document.createElement("option");
                    option.value = i;
                    option.text = `${i}`;
                    year.appendChild(option);
                }
            } else if (course == "ME") {
                document.getElementById("year").innerHTML = "";

                for (let i = 1; i <= 2; i++) {
                    const option = document.createElement("option");
                    option.value = i;
                    option.text = `${i}`;
                    year.appendChild(option);
                }
            } else {
                document.getElementById("year").innerHTML = "";
                const option = document.createElement("option");
                option.value = "";
                option.text = "Select";
                option.selected = true;
                year.appendChild(option);
            }
        }

        function getDepartments() {
            let course = document.getElementById("course").value;
            fetch("getDepartments?course=" + course)
                .then((response) => {
                    if (!response.ok) {
                        return;
                    }
                    return response.json();
                })
                .then((data) => {
                    if (data.message == "Departments Found") {
                        department = document.getElementById("department");
                        department.innerHTML = "";
                        for (let i = 0; i <= data.data.length; i++) {
                            const option = document.createElement("option");
                            option.value = data.data[i].departmentname;
                            option.text = data.data[i].departmentname;
                            department.appendChild(option);
                        }
                    } else {
                        document.getElementById("department").innerHTML = "";
                        department = document.getElementById("department");
                        const option = document.createElement("option");
                        option.value = "";
                        option.text = "Select";
                        option.selected = true;
                        department.appendChild(option);
                    }
                })
                .catch((error) => {
                    console.log(error);
                })
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("course").value;
            updateYearOptions();
            updateDepartmentOptions();
        })

        const selectedYear = "<?php echo $book->year; ?>";

function updateYearOptions() {
    const course = document.getElementById("course").value;
    const yearSelect = document.getElementById("year");
    yearSelect.innerHTML = "";
    let maxYears;
    if (course === "BE") {
        maxYears = 4;
    } else if (course === "ME") {
        maxYears = 2;
    } else {
        return;
    }

    for (let i = 1; i <= maxYears; i++) {
        const option = document.createElement("option");
        option.value = i;
        option.text = i;
        if (i == selectedYear) {
            option.selected = true;
        }
        yearSelect.appendChild(option);
    }
}



function updateDepartmentOptions()
{
    const selecteddept="<?php echo $book->department;?>";
    let course=document.getElementById("course").value;
    fetch("getDepartments?course=" + course)
                .then((response) => {
                    if (!response.ok) {
                        return;
                    }
                    return response.json();
                })
                .then((data) => {
                    if (data.message == "Departments Found") {
                        department = document.getElementById("department");
                        department.innerHTML = "";
                        for (let i = 0; i < data.data.length; i++) {
                            const option = document.createElement("option");
                            option.value = data.data[i].departmentname;
                            if(data.data[i].departmentname==selecteddept)
                            {
                                option.selected=true;
                            }
                            option.text = data.data[i].departmentname;
                            department.appendChild(option);
                        }
                    } else {
                        document.getElementById("department").innerHTML = "";
                        department = document.getElementById("department");
                        const option = document.createElement("option");
                        option.value = "";
                        option.text = "Select";
                        option.selected = true;
                        department.appendChild(option);
                    }
                })
                .catch((error) => {
                    console.log(error);
                })
}

    </script>
</body>

</html>