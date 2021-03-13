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
				<?php //include('sidebar.php'); ?>
			<!-- sidebar End -->
			<!-- contents Start -->
			<div class="dash_content_cover">
				<div class="dash_content_area">
					<div class="dashboard_tabss">
						<ul class="tabs_menu">
						  <li class="active" data-tab="g_review">Google review</li>
						  <li data-tab="app_review">app review</li>
						  <li data-tab="fb_review">facebook review</li>
						  <li data-tab="trust_review">trustpilot review</li>
						  <li data-tab="yelp_review">yelp review</li>
						  <li data-tab="trip_review">tripadvisor review</li>
						  <li data-tab="yell_review">yell review</li>
						</ul>
					</div>
					<div class="tab_content active" id="g_review">
						<div class="form_heading">
							<h4>Google Review</h4>
						</div>
						<div class="google_tabs">
					        <ul class="g_tabs">
					            <li class="active" data-tab="map">Map</li>
					            <li data-tab="list">List</li>
					        </ul>
						    <div class="g_tab_content active" id="map">
                                <?php  if($google->num_rows()>0){
                                $google=$google->result();
                                foreach ($google as $g){?>
						        <div class="dashboard_form google_r_form">
									<div class="tab_body">
										<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$g->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$g->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$g->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$g->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="google">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>
									</div>
						        </div>
						        <?php }} else { ?>
										<div class="no_review_msg">no review content yet</div>
										<?php } ?>
						    </div>
						    <div class="g_tab_content" id="list">
						        <?php  if($google->num_rows()>0){
                                $google=$google->result();
                                foreach ($google as $g){?>
								<div class="tab_body">
									 <div class="dashboard_form google_r_form">
                                     	<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$g->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$g->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$g->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$g->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="google">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>
									</div>
								</div>
						    </div>
						</div>
						<?php }} else { ?>
										<div class="no_review_msg">no review content yet</div>
										<?php } ?>
					</div>
					<div class="tab_content" id="app_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>App Review</h4>
							</div>
							<?php  if($app->num_rows()>0){
                                $app=$app->result();
                                foreach ($app as $a){?>
							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$a->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$a->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$a->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$a->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="app">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php } } else { ?>
										<div>no review content yet</div>
										<?php } ?>
						</div>
					</div>
					<div class="tab_content" id="fb_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>Facebook Review</h4>
							</div>
							<?php  if($facebook->num_rows()>0){
                                $facebook=$facebook->result();
                                foreach ($facebook as $f){?>
							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$f->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$f->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$f->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$f->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="facebook">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php } } else { ?>
										<div>no review content yet</div>
										<?php } ?>
						</div>
					</div>
					<!--fb content end-->
					<div class="tab_content" id="trust_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>Trust Review</h4>
							</div>
							<?php  if($trust->num_rows()>0){
                                $trust=$trust->result();
                                foreach ($trust as $tr){?>

							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$tr->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$tr->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$tr->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$tr->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="trustpilot">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php } } else { ?>
										<div>no review content yet</div>
										<?php } ?>
						</div>
					</div>
					<!--trustpilot-->
					<div class="tab_content" id="yelp_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>Yelp Review</h4>
							</div>
							<?php  if($yelp->num_rows()>0){
                                $yelp=$yelp->result();
                                foreach ($yelp as $yl){?>
							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$yl->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$yl->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$yl->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$yl->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="yelp">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php }} else { ?>
										<div>no review content yet</div>
										<?php } ?>
						</div>
					</div>
					<!--yelp-->	
					
					<div class="tab_content" id="trip_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>Trip advisor Review</h4>
							</div>
							<?php  if($trip->num_rows()>0){
                                $trip=$trip->result();
                                foreach ($trip as $tri){?>
							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$tri->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$tri->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$tri->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$tri->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="tripadvisor">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php } } else { ?>
										<div>no review content yet</div>
										<?php } ?>
						</div>
					</div>
					<!--trip-->	

					<div class="tab_content" id="yell_review">
						<div class="dashboard_form">
							<div class="form_heading">
								<h4>Yell Review</h4>
							</div>
							<?php  if($yell->num_rows()>0){
                                $yell=$yell->result();
                                foreach ($yell as $ye){?>
							<form action="<?=base_url()?>freelancer/submitReview" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12 col-12">
													<div class="form_group">
													<label class="input_label">link</label>
													<div class="af_link_box">
														<div class="input_box">
															<input type="text" class="affl_input" id="mapinput" value="<?=$ye->link?>" name="link">

															<span class="copy_btn" onclick="mapcopy()">Copy</span>
														</div>
													</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="form_group">
														<label class="input_label">Description</label>
														<div class="input_group">
														  <textarea name="content" placeholder="Enter Description"><?=$ye->content?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">
													<div class="screenshot_dv">
														<label class="file_upload_button">
															<input type="file" class="prev_img_input" name="screenshot">
															<span><i class="fas fa-images"></i>Browse Photo</span>
														</label>
														<div class="img_dv">
														 <img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="avatar" class="prev_img img-fluid">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-12">	
													<div class="form_group">
														<label class="input_label">Reviewer Name</label>
														<div class="input_group">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$ye->id?>" name="id">
                                                            <input type="hidden" class="affl_input" id="mapinput" value="<?=$ye->user_id?>" name="freelancer_id">
                                                            <input type="hidden" name="review_type" value="yell">

															<input type="text" name="reviewer_name" placeholder="Enter Name">
														</div>
													</div>
												</div>
											</div>
											<div class="button_group">
												<input type="submit" class="submit_btn green_button" name="submit">
											</div>
										</form>	
										<?php } } else { ?>
										<div>no review content yet</div>
										<?php } ?>

						</div>
					</div>
					<!--yelp-->	

				</div>
			</div>
			<!-- contents End -->
		</div>
	</div>
</div>
<!-- Login Section End -->
<div class="clearfix"></div>