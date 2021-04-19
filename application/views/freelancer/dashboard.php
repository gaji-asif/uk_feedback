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
	.action_btn .a_icons:hover{
		border-color: #f5a91f;
		background-color: #f5a91f;
		color: #ffffff;
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
			<div class="dash_content_cover pb-5">
				<div class="dash_content_area">
				<?php include 'tabs-menu.php';?>
				<?php if($this->session->flashdata('successs')){ ?>
											<div class="alert alert-success mb-3 background-success" role="alert">
											<?php echo $this->session->flashdata('success'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>

					<?php if (isset($id)) { ?>
						<?php if (isset($links)) { ?>
							<div class="form_heading">
								<h4><?php echo $category->cat_name ?></h4>
							</div>
							<div class="">
								<div class="card shadow mb-4">
									<!-- card header start -->
									<div class="card-header py-3">
										<div class="c_header_title">
											<h6 class="m-0 font-weight-bold text-primary">Review Link List</h6>
										</div>
									</div>
									<!-- card header End -->
									<!-- card body start -->
									<div class="card-body">
										<div class="table-responsive">
											<table class="table dataTable" width="100%" cellspacing="0">
												<thead>
													<tr>
														<th>SL</th>
														<th>Link</th>
														<th>Review Price</th>
														<th width="12%" >Date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $i = 1;
													foreach ($links as $link) { 
													
														if($link['done'] == 0){
											
														?>
														<tr>
															<td><?= $i++; ?></td>
														
															<td><?php echo $link['link_url']; ?></td>
															<td>$<?php echo $link['freelancer_price']; ?></td>
															<td><?php echo $this->Common_model->convert_date('d-m-y', $link['date']);; ?></td>
															<td class="action_btn">
																<a href="<?php echo base_url(); ?>freelancer/show_reviews/<?php echo $link['id'] ?>/<?php echo $link['gig_cat_id'] ?>" class="card_body  a_icons"><i class="fa fa-eye"></i></a>
															</td>
														</tr>
													<?php } }?>
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