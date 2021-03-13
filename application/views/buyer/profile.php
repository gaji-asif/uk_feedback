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
							<h4>Update Your Profile</h4>
						</div>
						<form action="<?=base_url()?>buyer/profile" method="POST">
							<div class="userprofile_div">
								<div class="userprof_avatar">
								    <?php if($p->profile_pic==NULL && $p->gender=="Male"){?>
									<img src="<?=base_url()?>images/avtar/male.jpg" alt="avatar" class="prev_img img-fluid" />
									<?php }  elseif($p->profile_pic==NULL && $p->gender=="Female"){?>
									<img src="<?=base_url()?>images/avtar/female.png" alt="avatar" class="prev_img img-fluid" />
									<?php } else {?>
									<img src="<?=base_url()?>uploads/user/<?=$p->profile_pic?>" alt="avatar" class="prev_img img-fluid" />
									<?php } ?>


									<div class="file_upload_divs">	
										<label class="file_upload_button">
											<input type="file" class="prev_img_input" name="profile_pic">
											<span><i class="fas fa-images"></i>Change Photo</span>
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-12 col-12">
									<div class="form_group">
										<input type="text" name="lname" value="<?=$p->name?>">
									</div>
								</div>
							</div>
							<!--<div class="form_group">-->
							<!--	<input type="email" name="email" value="<?=$p->email?>">-->
							<!--</div>-->
							<div class="form_group">
											<div class="input_group">
										    <select name="country" id="country" class="input selectpicker">
                                            <option value="0">Select country</option>
                                            <?php   
                                            
                                            $sql ="SELECT * FROM countries";
                                            $query = $this->db->query($sql);
                                            if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) {?>
                                            <option value="<?php echo $row->countries_iso_code;?>" <?php if($row->countries_iso_code==$p->country) echo 'selected';
                                            ?>><?php echo $row->countries_name;?></option>
                                            <?php }
                                            }
                                            ?>
                                            </select>						
                            </div>
							<div class="form_group">
								<div class="radio_box">
								  <label>
									<input type="radio" name="gender" value="Male" <?php if($p->gender=="Male") echo 'checked'; ?>>
									<span class="r_check"></span>
									<span class="r_text">Male</span>
								  </label>
								  <label>
									<input type="radio" name="gender" value="Female" <?php if($p->gender=="Female") echo 'checked'; ?>>
									<span class="r_check"></span>
									<span class="r_text">Female</span>
								  </label>
								</div>
							</div>
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