<!-- Login section End -->
<div class="sc_wrapper sc_login_sign_section pad_top_bottom_40"> 
	<div class="container">
		<div class="row h_center">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="login_form_cover shadow_box">
					<div class="form_heading">
						<h1 class="heading">Login to Gigs</h1>
					</div>
					<?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger" role="alert">
                        <strong>failed!</strong> Invalid Credentials
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>    
					<div class="login_form">
						<form action="<?=base_url()?>login" method="POST" name="login">
							<div class="form_group">
								<label class="input_label">Email</label>
								<input type="email" name="email" class="input" placeholder="Enter Your Email">
							</div>
							<div class="form_group">
								<label class="input_label">Password</label>
								<input type="password" name="password" class="input" placeholder="Enter Your Password">
							</div>
							<div class="form_group remember_row">
								<!--<div class="check_box">-->
								<!--  <label>-->
								<!--	<input type="checkbox" name="remember">-->
								<!--	<span class="c_box"></span>-->
								<!--	<span class="c_text">Remember</span>-->
								<!--  </label>-->
								<!--</div>-->
								<a href="#" class="forget_lnk">Forget My Password</a>
							</div>
							<div class="button_group">
								<input type="submit" class="login_btn green_button" name="submit" value="Login">
							</div>
							<!--<div class="other_login">-->
							<!--	<span class="o_texts">or login with</span>-->
							<!--	<a href="#" class="icons f_login">-->
							<!--	   <i class="fab fa-facebook-f"></i>-->
							<!--	</a>-->
							<!--	<a href="#" class="icons t_login">-->
							<!--	   <i class="fab fa-twitter"></i>-->
							<!--	</a>-->
							<!--	<a href="#" class="icons g_login">-->
							<!--	   <i class="fab fa-google"></i>-->
							<!--    </a>-->
							<!--</div>-->
							<div class="form_text_group">
								You Don't have an account please <a href="<?=base_url()?>signup">Register</a> Now
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Section End -->
<div class="clearfix"></div>