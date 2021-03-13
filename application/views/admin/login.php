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
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/fonts.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/my_style.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/responsive.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/validation.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- Custom styles for this page -->
  <!-- favicon icon -->
<link rel="shortcut icon" type="image/icon" href="<?= base_url('assets/img/favicon.png');?>">
</head>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body">
				<div class="l_account_form Login_form_wrap">
					<!-- Nested Row within Card Body -->
					<div class="text-center">
					  <h1 class="h4 text-gray-900 mb-4">Welcome To ADMIN!</h1>
					</div>
					<form action="<?= base_url('admin');?>" method="post" name="login_form">
						<div class="form-group">
						  <input type="text" class="form-control" name="email" placeholder="Enter Email">
						</div>
						<div class="form-group">
						  <input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<!--<div class="form-group">-->
						<!--  <div class="custom-control custom-checkbox small">-->
						<!--	<input type="checkbox" class="custom-control-input" id="customCheck">-->
						<!--	<label class="custom-control-label" for="customCheck">Remember Me</label>-->
						<!--  </div>-->
						<!--</div>-->
						<div>
						<input type="submit" class="admin_btn btn-block" value="Login">
						</div>
						
					</form>
					<hr>
					<!--<div class="text-center forget_link">-->
					<!--  <a class="form_bottom_txt" href="<?=base_url('admin/forget-password');?>">Forgot Password?</a>-->
					<!--</div>-->
				</div>
			</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/js/validation.js');?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    
    <?php if($this->session->flashdata('success')){ ?>

    toastr.success("<?php echo $this->session->flashdata('success'); ?>");

    <?php }else if($this->session->flashdata('error')){  ?>
    
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    
    <?php }else if($this->session->flashdata('warning')){  ?>
    
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    
    <?php }else if($this->session->flashdata('info')){  ?>
    
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    
    <?php } ?>
    </script>
</body>

</html>
