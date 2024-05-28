<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamstechnologies.com/template/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:34:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Allot Student</title>

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
        var RouteCard = document.getElementById('RouteCard');

        function Redirecttoroutespage() {
            window.location.href = "RoutesList";
        }

        function RedirecttoStopaPage() {
            window.location.href = "StopsList";
        }
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
                            <h3 class="page-title">Add Student</h3>
                            <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Transport">Transport </a></li>
                                    <li class=""><a href="ShowAllotedStudentslist">/Students</a></li>
                                    <li class="active">/Allot Transport</li>
                                </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="student-group-form bg-white p-5">
                    <form action="AllotStudentPost" method="post" id="AllotStudentForm">
                    <input type="text" class="form-control d-none" placeholder="Enter Student Reg No." id="stopid" name="stopid">
                        <div class="row">
                        <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Student Reg No.<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Student Reg No." id="studentregnumber" name="studentregnumber">
                                    <span class="text-danger" id="errormessage" style="font-size:0.7rem;"></span>
                                    <div class="invalid-feedback" style="display:none;" id="studentregnumber_errormessage">
													Student Registeration Number is Required.
												</div>
                                </div>
                              
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Student Name<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Student full name" id="studentname" name="studentname">
                                    <div class="invalid-feedback" style="display:none;" id="studentname_errormessage">
													Student Name is Required.
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
                                    <input type="text" class="form-control" placeholder="Course" id="course" name="course" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="course_errormessage">
                                    course is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Branch<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Branch" id="studentdepartment" name="studentdepartment" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="studentdepartment_errormessage">
                                    Student Department is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Year<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Year" id="year" name="year" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="year_errormessage">
                                    Year is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Select Transport<span class="login-danger">*</span></label>
                                    <select class="form-select" name="transportid" id="transportid" style="height:45px;font-size:15px !important;" onchange="checkcapacity()">
                                        <option value="NA">Select Transport</option>
                                        <?php foreach ($transports as $transport) { ?>
                                            <option value="<?php echo $transport->transportid; ?>" data-route="<?php echo $transport->routename; ?>" data-routeid="<?php echo $transport->routeid; ?>"><?php echo $transport->transportid; ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-danger" id="capacityerrormessage" style="font-size:0.7rem;"></span>
                                    <div class="invalid-feedback" style="display:none;" id="transportid_errormessage">
                                    Transport is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Route<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="routename" id="routename" readonly>
                                    <input type="text" class="form-control d-none" placeholder="routename" id="routenameid" name="routename" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="routename_errormessage">
                                    Route is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Select Stop<span class="login-danger">*</span></label>
                                    <select class="form-select" name="stopname" id="stopname" style="height:45px;font-size:15px !important;">
                                    <option value="NA">Select Stop</option>
                                  
                                    </select>
                                    <div class="invalid-feedback" style="display:none;" id="stopname_errormessage">
                                    Stop Name is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Total Fees<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Total Bus Fees" id="totalbusfees"  name="totalbusfees" readonly>
                                    <div class="invalid-feedback" style="display:none;" id="totalbusfees_errormessage">
                                    Total Fees is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Paid Amount<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Paid amount" id="paidbusfees" name="paidbusfees" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    <div class="invalid-feedback" style="display:none;" id="paidbusfees_errormessage">
                                    Paid Fees is Required.
												</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group local-forms">
                                    <label>Remaining amount<span class="login-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Remaining amount" id="reamainingbusfees" name="reamainingbusfees" readonly>
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
                        <div class="col-lg-3">
                            <div class="form-group">
                                <div class="search-student-btn ">
                                    <label class="d-block" style="visibility:hidden;">Submit Button<span class="login-danger">*</span></label>
                                    <button id="submitbutton" type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              
            </div>

        </div>

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
    document.getElementById("transportid").addEventListener("change", function() {
        var selectedOption = this.options[this.selectedIndex];
        var routeName = selectedOption.getAttribute("data-route");
        var routeid = selectedOption.getAttribute("data-routeid");
        document.getElementById("routename").value = routeName;
        document.getElementById("routenameid").value = routeid;
        console.log(routeid);
        populateStops(routeid);
    });

    function checkcapacity() {
        var transportSelect = document.getElementById("transportid");
        var transportId = transportSelect.value;

        fetch("FetchCapacityOfBus?transportId=" + transportId)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.availablecapacity=="0") {
                    document.getElementById('submitbutton').disabled=true;
                    document.getElementById("capacityerrormessage").innerText = "Capacity is full for this route.";
                } else {
                    document.getElementById("capacityerrormessage").innerText = "";
                }
            })
            .catch(error => {
                
                console.error('Error:', error);
            });
}

    function populateStops(routeid) {
        // Fetch stops for the selected route using the fetch API
        fetch("FetchAssociatedStopsWithroute?routeid=" + routeid)
            .then(response => response.json())
            .then(stops => {
                console.log(stops)
                // Get the select element for stops
                var stopsSelect = document.getElementById("stopname");

                // Clear existing options
                stopsSelect.innerHTML = "";

                // Add a default option
                var defaultOption = document.createElement("option");
                defaultOption.value = "NA";
                defaultOption.text = "Select Stop";
                stopsSelect.appendChild(defaultOption);

                // Add options for each stop associated with the selected route
                stops.forEach(stop => {
                    var option = document.createElement("option");
                    option.value = stop.stopserialnumber;
                    option.text = stop.stopname;
                    stopsSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    document.getElementById("stopname").addEventListener("change", function() {
    var selectedStop = this.value;
  
    // Fetch fees associated with the selected stop
    fetch("FetchFeesForStop?stopName=" + selectedStop)
        .then(response => response.json())
        .then(fees => {
            document.getElementById("paidbusfees").value=0;
            document.getElementById("totalbusfees").value = fees.total;
            document.getElementById("reamainingbusfees").value = fees.total;
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
document.getElementById('submitbutton').disabled = true;
document.getElementById("studentregnumber").addEventListener("input", function() {
    const inputField = document.getElementById('studentregnumber');
    const inputValue = inputField.value.trim();
    const fieldsToDisable = ['course', 'year', 'studentdepartment','studentname','transportid','routename','stopname','totalbusfees','paidbusfees','reamainingbusfees'];
    const fieldslist=['course','year','studentdepartment','studentname','transportid','routename','stopname'];
    if (inputValue.length >= 4) {
        // Make a fetch request to the server
        fetch("Fetchstudentwithregnumber?studentregnumber=" + inputValue)
        .then(response => response.json())
        .then(data => {
            if(data.message=="Student Already registered" || data.message=="No student Found") {
                console.log("Inside");
                document.getElementById('errormessage').classList.remove('d-none');
                document.getElementById('errormessage').innerText=data.message;
                document.getElementById('course').value='';
                document.getElementById('studentdepartment').value='';
                document.getElementById('year').value='';
                document.getElementById('submitbutton').disabled=true;
                for (const field of fieldsToDisable) {
                    document.getElementById(field).readonly = true;
                }
            } else {
                document.getElementById('submitbutton').disabled=false;
                document.getElementById('errormessage').classList.add('d-none');
                document.getElementById('course').value=data.Course;
                document.getElementById('year').value=data.Year;
                document.getElementById('studentname').value=data.studentname;
                document.getElementById('studentdepartment').value=data.Branch;
                for (const field of fieldslist) {
                        document.getElementById(field).readonly = false;                   
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        document.getElementById('errormessage').classList.add('d-none');
        document.getElementById('submitbutton').disabled = true;
        for (const field of fieldsToDisable) {
            document.getElementById(field).readOnly = true;
        }
    }
});

document.getElementById("paidbusfees").addEventListener("input", function() {
    var totalFees = parseFloat(document.getElementById("totalbusfees").value);
    var paidFees = parseFloat(this.value);
    var remainingFees = totalFees - paidFees;
    remainingFees = Math.max(0, remainingFees);
    if(paidFees > totalFees) {
        paidFees = totalFees;
        this.value = paidFees;
    }
    console.log(remainingFees);
    if (!isNaN(remainingFees)) {
        document.getElementById("reamainingbusfees").value = remainingFees; 
    } else {
        document.getElementById("reamainingbusfees").value = "";
    }
});
document.addEventListener('DOMContentLoaded', function() {
			document.getElementById('AllotStudentForm').addEventListener('submit', function(event) {
					var fieldIds = ['studentname','studentregnumber','course','studentdepartment','year','transportid','routename','stopname','totalbusfees','paidbusfees'];
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
			if (selectField.value=="NA") {
				selectField.classList.remove('select');
				selectField.classList.add('is-invalid'); 
				document.getElementById(selectField.id + '_errormessage').style.display = 'block';
				event.preventDefault();
			} else {
				selectField.classList.remove('is-invalid'); 
				document.getElementById(selectField.id + '_errormessage').style.display = 'none';
			}
		}
</script>
</body>
</html>