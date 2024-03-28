<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
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
            var UserLoginerror = document.getElementById('UserLoginerror');
            var RegisterationSuccess = document.getElementById('RegisterationSuccess');
            var UserLogoutSuccess = document.getElementById('UserLogoutSuccess');

            if (UserLoginerror) {
                UserLoginerror.style.display = 'block';
                setTimeout(function() {
                    UserLoginerror.style.display = 'none';
                }, 4000);
            }
            else if (RegisterationSuccess) {
                RegisterationSuccess.style.display = 'block';
                setTimeout(function() {
                    RegisterationSuccess.style.display = 'none';
                }, 2000);
            }
            else if (UserLogoutSuccess) {
                UserLogoutSuccess.style.display = 'block';
                setTimeout(function() {
                    UserLogoutSuccess.style.display = 'none';
                }, 2000);
            }
        });
    </script>
    <body>
	<?php
    $UserLoginerror = $this->session->flashdata('UserLoginerror');
	$RegisterationSuccess=$this->session->flashdata('RegisterationSuccess');
	$UserLogoutSuccess= $this->session->flashdata('UserLogoutSuccess');
    ?>
    <?php if (isset($UserLoginerror)) : ?>
        <div id="UserLoginerror" class="alert alert-danger text-center alert-fixed" role="alert">
            <strong><?php echo $UserLoginerror; ?></strong>
        </div>
    <?php endif; ?>
    <?php if (isset($RegisterationSuccess)) : ?>
        <div id="RegisterationSuccess" class="alert alert-success text-center alert-fixed"  role="alert">
            <strong><?php echo $RegisterationSuccess; ?></strong>
        </div>
    <?php endif; ?>
    <?php if (isset($UserLogoutSuccess)) : ?>
        <div id="UserLogoutSuccess" class="alert alert-success text-center alert-fixed"  role="alert">
            <strong><?php echo $UserLogoutSuccess; ?></strong>
        </div>
    <?php endif; ?>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="<?php echo base_url()?>assets/img/login.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<!-- <h1>Welcome to Preskool</h1>
								<p class="account-subtitle">Need an account?  <a href="register.html">Sign Up</a></p> -->
								<h2>Sign in</h2>
								<!-- Form -->
								<form action="Loginvalidation" method="post">
									<div class="form-group">
										<label>Email<span class="login-danger">*</span></label>
										<input class="form-control" type="text" name="email" id="email">
										<span class="profile-views"><i class="fas fa-user-circle"></i></span>
									</div>
									<div class="form-group">
										<label >Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" type="text" name="password" id="password">
										<span class="profile-views feather-eye toggle-password"></span>
									</div>
									<!-- <div class="forgotpass">
										<div class="remember-me">
											<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
											<input type="checkbox" name="radio">
											<span class="checkmark"></span>
											</label>
										</div>
										<a href="forgot-password.html">Forgot Password?</a>
									</div> -->
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<!-- <div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div> -->
								  
								<!-- Social Login -->
								<!-- <div class="social-login">
									<a href="#" ><i class="fab fa-google-plus-g"></i></a>
									<a href="#" ><i class="fab fa-facebook-f"></i></a>
									<a href="#" ><i class="fab fa-twitter"></i></a>
									<a href="#" ><i class="fab fa-linkedin-in"></i></a>
								</div> -->
								<!-- /Social Login -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url()?>assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="<?php echo base_url()?>assets/js/feather.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
    </body>

</html>