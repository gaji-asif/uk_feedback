<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Panel</title>
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
            <!-- Nested Row within Card Body -->
				<div class="l_account_form forget_form_wrap">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and well send you a link to reset your password!</p>
                  </div>
                  <form class="user" name="forget_pass" method="post" action="<?= base_url('admin/forget-password');?>">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Submit
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="form_bottom_txt" href="<?= base_url('admin');?>">Back to login</a>
                  </div>
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
