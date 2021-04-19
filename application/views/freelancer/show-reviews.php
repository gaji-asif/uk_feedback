<!-- breadcrumb section start -->
<style>
	.tabs_menu>li {
		margin-right: 10px;
	}

	.btn-style-active {
		background-color: var(--primary_color);
		color: #fff;
	}

	.btn-style:hover {
		color: white;
	}

	.btn-style {
		background-color: var(--black_color);
		color: #fff;
	}

	.form_heading {
		padding: 8px 0px 8px 0px;
	}

	.action_btn .a_icons {
		display: inline-block;
		width: 25px;
		height: 25px;
		line-height: 23px;
		border: 1px solid #999;
		color: #999;
		border-radius: 3px;
		text-align: center;
		text-decoration: none;
		font-size: 13px;
	}

	.action_btn .a_icons:hover {
		border-color: #f5a91f;
		background-color: #f5a91f;
		color: #ffffff;
	}

	.admin_btn {
		color: #fff;
		background-color: #f5a91f;
		height: 40px;
		line-height: 40px;
		display: inline-block;
		padding: 0 20px;
		font-size: 14px;
		border-radius: 5px;
		text-decoration: none;
		border: none;
		text-align: center;
	}

	.admin_btn:hover {
		color: #fff;
		background-color: #222222;
		text-decoration: none;
	}
</style>
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
			<?php //include('sidebar.php'); 
			?>
			<!-- sidebar End -->
			<!-- contents Start -->
			<div class="dash_content_cover">
				<div class="dash_content_area">
				<?php include 'tabs-menu.php';?>


					<?php if (isset($id)) { ?>
						<?php if (isset($reviews)) { ?>
							<div class="form_heading">

							</div>
							<div class="">
								<div class="card shadow mb-4">
									<!-- card header start -->
									<div class="card-header py-3">
										<div class="c_header_title">
											<h6 class="m-0 font-weight-bold text-primary">Review List</h6>
										</div>
									</div>
									<!-- card header End -->
									<!-- card body start -->
									<div class="card-body">
										<?php if($this->session->flashdata('danger')){ ?>
											<div class="alert alert-danger mb-3 background-danger" role="alert">
											<?php echo $this->session->flashdata('danger'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<?php if($this->session->flashdata('success')){ ?>
											<div class="alert alert-success mb-3 background-success" role="alert">
											<?php echo $this->session->flashdata('success'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<div class="table-responsive">
											<table class="table dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th width="5%">SL</th>
														<th>Review</th>
														<th width="15%">Date</th>
														<th width="5%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $i = 1;
													foreach ($reviews as $review) { ?>
														<tr>
															<td><?= $i++; ?></td>
															<td><?php echo $review['review_details']; ?></td>
															<td><?php echo $this->Common_model->convert_date('d-m-y', $review['date']);; ?></td>
															<td class="action_btn">

																<a type="button" class="card_body a_icons" data-toggle="modal" data-target="#exampleModal<?php echo $review['id']; ?>">
																	<i class="fa fa-reply"></i>
																</a>

																<!-- Modal -->
																<div class="modal fade" id="exampleModal<?php echo $review['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog" role="document">
																		<form action="<?=base_url()?>freelancer/submit_review" method="POST" enctype="multipart/form-data">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exampleModalLabel">Complete</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">
																					<div class="form_group pb-1">
																						<label class="form_label">Link:</label><br>
																						<a href="<?php echo $review['link_url']; ?>"><strong><?php echo $review['link_url']; ?></strong></a>
																						
																						<!-- <div class="input_group">
																							<input type="text" class="form-control" value="" >
																						</div> -->
																					</div>
																					<div class="form_group pb-1">
																						<label class="form_label">Review:</label><br>
																						<label class="form_label"><strong><?php echo $review['review_details']; ?></strong></label>
																				
																					</div>
																					<div class="form_group pb-1">
																						<label class="form_label">Reviewer Name</label>
																						<div class="input_group">
																							<input type="text" class="form-control" name="reviewer_name" required >
																						</div>
																					</div>
																					<div class="form_group pb-1">
																						<label class="form_label">Screenshot</label>
																						<div class="input_group">
																							<input type="file" class="form-control" name="screenshot" required >
																						</div>
																					</div>
																					<input type="hidden" name="link_id" value="<?php echo $review['link_id'] ?>">
																					<input type="hidden" name="gig_id" value="<?php echo $review['gig_id'] ?>">
																					<input type="hidden" name="gig_cat_id" value="<?php echo $review['gig_cat_id'] ?>">
																					<input type="hidden" name="buyer_id" value="<?php echo $review['buyer_id'] ?>">
																					<input type="hidden" name="review_id" value="<?php echo $review['id'] ?>">
																					<input type="hidden" name="id" value="<?php echo $id ?>">
																				</div>
																				<div class="modal-footer">
																					<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
																					<button type="submit" class="admin_btn">Complete</button>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
															</td>
														</tr>
														
													<?php
												break;
												} ?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- card body End -->
								</div>
							</div>
						<?php } else { ?>
							<div class="no_review_msg">no review content yet</div>
						<?php } ?>
					<?php } ?>
				</div>
				<!-- contents End -->
			</div>
		</div>
	</div>
	<!-- Login Section End -->
	<div class="clearfix"></div>