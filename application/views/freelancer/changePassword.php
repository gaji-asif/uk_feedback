<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>User Dashboard</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
						<li>User Dashboard</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Login section End -->
<div class="sc_wrapper user_dashboard_page bg_gray pad_top_bottom_40"> 
	<div class="container">
		<div class="gigs_dashboard_wrapper">
			<!-- sidebar End -->
				<?php include('sidebar.php'); ?>
			<!-- sidebar End -->
			<!-- content start -->
			<div class="dash_content_cover">
				<div class="dash_content_area">
					<div class="dashboard_form">
						<div class="form_heading">
							<h4>Change password</h4>
						</div>
							<?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success" role="alert">
                        <strong>Success!</strong>your password changed successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>
						<form action="<?=base_url()?>freelancer/changePassword" method="POST" enctype="multipart/form-data" name="change_password">
						
							<div class="row">
								
								<div class="col-md-12 col-12">
									<div class="form_group">
										<input type="text" name="old_password" value="" placeholder="Old password">
											<?php if($this->session->flashdata('pwderror')){ ?>
                                             <label style="color:red;">old password not correct</label>
                                  <?php } ?>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-12 col-12">
									<div class="form_group">
										<input type="text" name="new_password" value="" placeholder="New password" id="new_password">
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-12 col-12">
									<div class="form_group">
										<input type="text" name="c_password" value="" placeholder="Confirm Password">
									</div>
								</div>
							</div>
							<!--<div class="form_group">-->
							<!--	<input type="email" name="email" value="<?=$p->email?>">-->
							<!--</div>-->
							
							
							<div class="button_group">
								<input type="submit" class="submit_btn green_button" name="submit" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- content End -->
		</div>
	</div>
</div>