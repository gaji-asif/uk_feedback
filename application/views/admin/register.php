<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin panel Login</title>
  <!-- Custom fonts for this template -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="assets/css/fonts.css" rel="stylesheet">
  <link href="assets/css/sb-admin-2.css" rel="stylesheet">
  <link href="assets/css/my_style.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">
  <!-- Custom styles for this page -->
</head>

<body class="bg-gradient-primary">
  <div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-6 col-lg-7 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
			  <div class="card-body">
				<!-- Nested Row within Card Body -->
				<div class="l_account_form register_form_wrap">
				  <div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
				  </div>
				  <form>
					<div class="form-group row">
					  <div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control" placeholder="First Name">
					  </div>
					  <div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Last Name">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control"  placeholder="User Name">
					  </div>
					  <div class="col-sm-6">
						<input type="email" class="form-control" placeholder="Email Id">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-sm-6 mb-3 mb-sm-0">
						<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
					  </div>
					  <div class="col-sm-6">
						<input type="password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
					  </div>
					</div>
					<div class="form-group register_check">
						<h6>Send OTP to registered Email:</h6>
						<div class="custom-control custom-checkbox small">
							<input type="checkbox" name="email_otp" value="1" class="custom-control-input" id="mail_check">
							<label class="custom-control-label" for="mail_check">demoxxxx@gmail.com</label>
						</div>	
						<div class="custom-control custom-checkbox small">
							<input type="checkbox" name="email_otp" value="2" class="custom-control-input" id="mail_check2">
							<label class="custom-control-label" for="mail_check2">demoxxxx@gmail.com</label>
						</div>
					</div>
					<a href="login.html" class="btn btn-primary btn-user btn-block">
					  Register Account
					</a>
				  </form>
				  <hr>
				  <div class="text-center forget_link">
					<a class="form_bottom_txt" href="forgot-password.html">Forgot Password?</a>
				  </div>
				  <div class="text-center">
					<a class="form_bottom_txt" href="login.html">Already have an account? Login!</a>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>
  <script>
	//Dropdown js
	$(".dropdown_head").on('click', function(){
		$(this).next(".dropdown_list").slideToggle(300);
	});
  </script>
</body>

</html>
