<!-- Login section End -->
<div class="sc_wrapper sc_login_sign_section pad_top_bottom_40"> 
	<div class="container">
		<div class="row h_center">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="login_form_cover shadow_box">
					<div class="form_heading">
						<h1 class="heading">Create an account</h1>
						<p>join to our account and get letest updates and get our services</p>
					</div>
					<div class="login_form">
						<form action="<?=base_url()?>front/register" method="POST" name="register">
							<div class="register_title">Register as a</div>
							<div class="register_radio_box">
								<label>
									<input type="radio" name="user_type" value="1" checked>
									<span class="rg_text">Freelancer</span>
								</label>
								<label>
									<input type="radio" name="user_type" value="2">
									<span class="rg_text">Customer</span>
								</label>
							</div>
							<div class="row">
								<div class="col-md-6 col-12">
									<div class="form_group">
										<input type="text" name="fname" placeholder="First Name">
										<input type="hidden" value="<?php echo $referral_user?>" name="referral_user" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="form_group">
										<input type="text" name="lname" placeholder="Last Name">
									</div>
								</div>
							</div>
							<div class="form_group">
								<input type="email" name="email" placeholder="Enter Your Email" id="regemail" class="regemail" autocomplete="off">
								<span id="emailerr" style="color:red;"></span>
							</div>
						
							<div class="form_group">
								
								<input type="password" name="password" class="input" placeholder="Enter Your Password">
							</div>
							
							<div class="form_group">
								<select name="country" id="country" class="input">
                                            <option value="">Select country</option>
                                            <?php   $sql ="SELECT * FROM countries";
                                            $query = $this->db->query($sql);
                                            if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) {?>
                                            <option value="<?php echo $row->countries_name;?>"><?php echo $row->countries_name;?></option>
                                            <?php }
                                            }
                                            ?>
                                            </select>
								<!--<input type="text" name="country" class="input" placeholder="Enter Your Country">-->
							</div>
							<div class="form_group">
								<div class="radio_box">
								  <label>
									<input type="radio" name="gender" value="Male" checked>
									<span class="r_check"></span>
									<span class="r_text">Male</span>
								  </label>
								  <label>
									<input type="radio" name="gender" value="Female">
									<span class="r_check"></span>
									<span class="r_text">Female</span>
								  </label>
								</div>
							</div>
							<div class="form_group remember_row">
								<div class="check_box">
								  <label>
									<input type="checkbox" name="accept" required="required" checked="checked">
									<span class="c_box"></span>
									<span class="c_text">I accept the <a href="#">Terms &amp; Conditions</a> of the website</span>
								  </label>
								</div>
							</div>
							<div class="button_group">
								<input type="submit" class="login_btn green_button" name="submit" value="Registration" id="submitform">
							</div>
							<div class="form_text_group">
								If you are already registered please <a href="<?=base_url()?>login">Login</a> Now
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