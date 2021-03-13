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
	    <?php if($this->session->flashdata('success_review')){ ?>
                        <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> Review approved successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } else if($this->session->flashdata('review_disapprove')) {?>  
                    <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> Review rejected successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <?php } ?>

		<div class="gigs_dashboard_wrapper">
			<!-- sidebar End -->
				<?php include('sidebar.php'); ?>
			<!-- sidebar End -->
			<!-- contents Start -->
			<div class="dash_content_cover">
				<div class="dash_content_area">
					<div class="tab_content active" id="g_review">
					    <?php  if($mygigs->num_rows()>0){
					          $mygigs=$mygigs->result();
					      foreach ($mygigs as $g){?>
						<div class="dashboard_form buyer_dashboard_form">
							<div class="form_heading">
								<h4>Submit Review</h4>
							</div>
							<form action="<?=base_url()?>buyer/updateReviewContent" method="POST">
								<div class="row">
									<div class="col-md-6 col-12">
										<div class="form_group">
											<label class="input_label">Review link</label>
											<div class="input_group">
											  <input type="url" name="review_link" class="input" placeholder="Enter link" value="<?=$g->review_link?>">
											   <input type="hidden" name="bg_id" value="<?=$g->id?>">
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form_group">
											<label class="input_label">Select Country(optional)</label>
											<div class="input_group">
										    <select name="country[]" id="country" class="input selectpicker" multiple>
                                            <option value="0">Select country</option>
                                            <?php   
                                            $ccode = explode(", ",$g->country);
                                            $sql ="SELECT * FROM countries";
                                            $query = $this->db->query($sql);
                                            if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) {?>
                                            <option value="<?php echo $row->countries_iso_code;?>" <?php if(in_array($row->countries_iso_code,$ccode)) echo 'selected';
                                            ?>><?php echo $row->countries_name;?></option>
                                            <?php }
                                            }
                                            ?>
                                            </select>
											</div>
										</div>
									</div>
									
								</div>
							   <?php
                                $array2=array('bg_id'=>$g->id);
                                $mygigsContent=$this->Common_model->fetch_multiple_row_bywhere($array2,'buyer_review_content','id','ASC');
                                  foreach ($mygigsContent as $gc){
                                ?>

								<div class="row">
								    
									<div class="col-md-6 col-12">
										<div class="form_group">
											<label class="input_label">Review content</label>
											<div class="input_group">
											  <textarea name="content[]" class="input" placeholder="Enter content"><?=$gc->content?></textarea>
											    <input type="hidden" name="rc_id[]" class="input" value="<?=$gc->id?>">
											</div>
										</div>
									</div>
									<?php if($gc->review_status==1){?>
									<div class="col-md-6 col-12 reviewr_divs">
										<div class="divs_1">
											<div class="form_group">
												<label class="input_label">Reviewer Name</label>
												<div class="input_group">
												  <input type="text" name="review_name" class="input" placeholder="Enter Reviewer Name" value="<?=$gc->reviewer_name?>">
												</div>
											</div>
										</div>
									
										<div class="divs_2">
											<div class="form_group">
												<label class="input_label">screenshot</label>
												<div class="input_group">
												  <a href="#" class="r_screenshot" data-toggle="modal" data-target="#review_modal"><img src="<?=base_url()?>uploads/review_screenshot/<?=$gc->screenshot?>"></a>
												</div>
											</div>
										</div>
										<?php if($gc->payment_status==0){?>
										<div class="divs_3">
											<div class="form_group">
												<label class="input_label">Status</label>
												<div class="usr_status_radion">
												  <label>
													<a href="<?=base_url()?>buyer/approveReview/<?=$gc->id?>">
													<span class="text"><i class="fas fa-check"></i></span></a>
												  </label>
												  <label>
													<a href="<?=base_url()?>buyer/disapproveReview/<?=$gc->id?>">
													<span class="text"><i class="fas fa-times"></i></span></a>
												  </label>
												</div>
											</div>
										</div>
										
										<?php } else if($gc->payment_status==1){ ?>
									   <div class="divs_3">
									     <label class="input_label"></label>

									       <span style="color:green;">Approved</span>
                                       </div>
                                       <?php } else if($gc->payment_status==2){ ?>
									   <div class="divs_3">
									       <label class="input_label"></label>

									       <span style="color:red;">Dispproved</span>
                                       </div><?php } ?>
									</div>
									<?php } ?>
								</div>
								<?php } ?>
								<?php if($g->review_link=="" || $g->review_link==NULL){?>
								<div class="button_group">
									<input type="submit" class="submit_btn green_button" name="submit">
								</div>
								<?php } ?>
							</form>
						</div>
						<?php }} ?>
					</div>
				</div>
			</div>
			<!-- contents End -->
		</div>
	</div>
</div>
<!-- Login Section End -->
<div class="clearfix"></div>
<!-- Modal -->
<div class="modal fade review_modal" id="review_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Screenshot title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="review_modal_ful_img">
			  <div class="r_ful_img">
				<img src="<?=base_url()?>assets/front/images/screenshot/s_1.jpg">
			  </div>
		  </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->