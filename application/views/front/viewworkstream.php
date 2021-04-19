<!-- breadcrumb section start -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<style>
	.container {
		max-width: 1170px;
		margin: auto;
	}

	img {
		max-width: 100%;
	}

	.inbox_people {
		background: #f8f8f8 none repeat scroll 0 0;
		float: left;
		overflow: hidden;
		width: 40%;
		border-right: 1px solid #c4c4c4;
	}

	.inbox_msg {
		border: 1px solid #c4c4c4;
		clear: both;
		overflow: hidden;
	}

	.top_spac {
		margin: 20px 0 0;
	}

	.recent_heading {
		float: left;
		width: 40%;
	}

	.srch_bar {
		display: inline-block;
		text-align: right;
		width: 60%;
		padding:
	}

	.headind_srch {
		padding: 10px 29px 10px 20px;
		overflow: hidden;
		border-bottom: 1px solid #c4c4c4;
	}

	.recent_heading h4 {
		color: #05728f;
		font-size: 21px;
		margin: auto;
	}

	.srch_bar input {
		border: 1px solid #cdcdcd;
		border-width: 0 0 1px 0;
		width: 80%;
		padding: 2px 0 4px 6px;
		background: none;
	}

	.srch_bar .input-group-addon button {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		padding: 0;
		color: #707070;
		font-size: 18px;
	}

	.srch_bar .input-group-addon {
		margin: 0 0 0 -27px;
	}

	.chat_ib h5 {
		font-size: 15px;
		color: #464646;
		margin: 0 0 8px 0;
	}

	.chat_ib h5 span {
		font-size: 13px;
		float: right;
	}

	.chat_ib p {
		font-size: 14px;
		color: #989898;
		margin: auto
	}

	.chat_img {
		float: left;
		width: 11%;
	}

	.chat_ib {
		float: left;
		padding: 0 0 0 15px;
		width: 88%;
	}

	.chat_people {
		overflow: hidden;
		clear: both;
	}

	.chat_list {
		border-bottom: 1px solid #c4c4c4;
		margin: 0;
		padding: 18px 16px 10px;
	}

	.inbox_chat {
		height: 550px;
		overflow-y: scroll;
	}

	.active_chat {
		background: #ebebeb;
	}

	.incoming_msg_img {
		display: inline-block;
		width: 6%;
	}

	.received_msg {
		display: inline-block;
		padding: 0 0 0 10px;
		vertical-align: top;
		width: 92%;
	}

	.received_withd_msg p {
		background: #ebebeb none repeat scroll 0 0;
		border-radius: 3px;
		color: #646464;
		font-size: 14px;
		margin: 0;
		padding: 5px 10px 5px 12px;
		width: 60%;
	}

	.time_date {
		color: #747474;
		display: block;
		font-size: 12px;
		margin: 8px 0 0;
	}

	.received_withd_msg {
		width: 100%;
	}

	.mesgs {
		float: left;
		padding: 30px 15px 0 25px;
		width: 100%;
	}

	.sent_msg p {
		background: #05728f none repeat scroll 0 0;
		border-radius: 3px;
		font-size: 14px;
		margin: 0;
		color: #fff;
		padding: 5px 10px 5px 12px;
		width: 100%;
	}

	.outgoing_msg {
		overflow: hidden;
		margin: 26px 0 26px;
	}

	.sent_msg {
		float: right;
		width: 46%;
	}

	.input_msg_write input {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		color: #4c4c4c;
		font-size: 15px;
		min-height: 48px;
		width: 100%;
	}

	.type_msg {
		border-top: 1px solid #c4c4c4;
		position: relative;
	}

	.msg_send_btn {
		background: #05728f none repeat scroll 0 0;
		border: medium none;
		border-radius: 50%;
		color: #fff;
		cursor: pointer;
		font-size: 17px;
		height: 33px;
		position: absolute;
		right: 0;
		top: 11px;
		width: 33px;
	}

	.messaging {
		padding: 0 0 50px 0;
	}

	.msg_history {
		height: 516px;
		overflow-y: auto;
	}

	.nav-tabs {
		border-bottom: 1px solid var(--gray_bg);
	}

	.card {
		border: 1px solid #ffffff;
	}

	.danger-buttons {
		margin-top: 75px;
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
	.custom_btn{
		margin-top: 31px;
		margin-left: -21px;
		padding: 0px 11px;
	}
</style>
<div class="sc_wrapper page_banner_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>Offer Detail</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
						<li>Work Stream</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- offer Detail wrapper Start -->
<div class="sc_wrapper offer_detail_page bg_gray pad_top_bottom_60">
	<div class="container">
		<div class="row">
			<!-- offer Detail column -->
			<div class="col-lg-12 col-sm-12 col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link " href="<?= base_url() ?>front/gigsDetail/<?php echo $gig_id; ?>">Offer Details</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>front/WorkStram/<?php echo $gig_id; ?>">Work Stream</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?= base_url() ?>front/viewWorkStram/<?php echo $gig_id; ?>">View Work Stream</a>
					</li>

				</ul>
				<div class="row">

					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">


								<?php if (!empty($links)) { ?>
									<div class="card-title">View Reviews</div>
									<?php if ($this->session->flashdata('success')) { ?>
										<div class="alert alert-success mb-3 background-success" role="alert">
											<?php echo $this->session->flashdata('success'); ?>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php } ?>
									<form method="POST" action="<?= base_url() ?>front/editReview" enctype="multipart/form-data" name="editReviewForm">
										<input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">

										<?php foreach ($links as $key => $link) { ?>
											<input type="hidden" name="link[<?php echo $key ?>][0][0]" value="<?php echo $link['link_id'] ?>">
											<div class="form-group">
												<label for="exampleInputEmail1">Link</label>
												<input type="text" name="link[<?php echo $key ?>][0][1]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Link" value="<?php echo $link['link_url'] ?>" required>
											</div>

											<?php if(isset($link['reviews'])){?>
												<?php foreach ($link['reviews'] as $key2 => $row) { ?>
													<?php if ($this->session->flashdata('success-'.$row['completed_reviews_id'])) { ?>
														<div class="alert alert-success mb-3 background-success" role="alert">
															<?php echo $this->session->flashdata('success-'.$row['completed_reviews_id']); ?>
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
													<?php } ?>
													<div class="row">
														<div class="col-lg-8">
															<input type="hidden" name="link[<?php echo $key ?>][1][<?php echo $key2 ?>][0]" value="<?php echo $row['id'] ?>">
															<div class="form-group">
																<label for="exampleInputEmail1">Reviewer</label>
																<textarea class="form-control" name="link[<?php echo $key ?>][1][<?php echo $key2 ?>][1]" aria-label="With textarea" rows="5" required><?php echo $row['review_details'] ?></textarea>
															</div>
														</div>
														<div class="col-lg-4">
														<div class="row">
															<div class="col-lg-10 col-sm-10">
																<?php if (isset($row['reviewer_name'])) { ?>
																	<div class="form-group">
																		<label for="exampleInputEmail1">Reviewer Name</label>
																		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['reviewer_name'];  ?>">
																	</div>
																<?php } ?>
															</div>
															<?php if (isset($row['review_approve_status']) && $row['review_approve_status'] == 0) { ?>
																<div class="col-lg-2 col-sm-2">
																<label class="input_label">Status</label>
																		<div class="usr_status_radion">
																			<label>
																				<a href="#" class="" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
																				<span class="text"><i class="fas fa-check"></i></span></a>
																			</label>
																		</div>
																	<!-- <a type="button" class="admin_btn custom_btn" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>"><i class="fa fa-check"></i></a> -->
																</div>
															<?php } if(isset($row['review_approve_status']) && $row['review_approve_status'] == 1){?>
																<div class="col-lg-2 col-sm-2">
																	<a type="button" class="admin_btn custom_btn" style="padding:0px 6px;;" disabled>Approved</a>
																</div>
															<?php } ?>
														</div>
														
															<?php if (isset($row['screenshot']) ) { ?>
																<img src="<?= base_url() ?><?php echo $row['screenshot']; ?>" alt="">
															<?php } ?>
															

															<!-- Modal -->
															<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog" role="document">
																
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Approve Review</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<p>Do You want to approve this review?</p>
																			</div>
																			<div class="modal-footer">
																				<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
																				<a href="<?= base_url() ?>front/approve_review/<?php echo $row['completed_reviews_id']; ?>/<?php echo $gig_id; ?>/<?php echo $row['link_id']; ?>/<?php echo $row['freelancer_id']; ?>"><button type="button" class="admin_btn">Yes</button></a>
																			</div>
																		</div>
																</div>
															</div>
														</div>

													</div>
													<hr>
												<?php } ?>
											<?php } ?>
										<?php } ?>


										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
							</div>
						<?php } else { ?>
							<div class="alert alert-danger mb-3 background-danger" role="alert">
								Please add a review first.
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>

			<!-- offer Detail column -->
			<!-- offer sidebar column -->

			<!-- offer sidebar column -->
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2({
			placeholder: "Select a Link",
			allowClear: true
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-success").click(function() {
			var html = $(".clone").html();
			$(".increment").appendTo(html);
		});

		$("body").on("click", ".btn-danger", function() {
			$(this).parents(".new").remove();
		});

	});
</script>
<!-- offer Detail wrapper End -->