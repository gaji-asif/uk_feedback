<!-- breadcrumb section start -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
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
</style>
<style type="text/css">
	.panel-title {
		display: inline;
		font-weight: bold;
	}

	.display-table {
		display: table;
	}

	.display-tr {
		display: table-row;
	}

	.display-td {
		display: table-cell;
		vertical-align: middle;
		width: 61%;
	}

	.hide {
		display: none;
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
						<li>Offer Detail</li>
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
			<div class="col-lg-8 col-sm-12 col-12">
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success mb-3 background-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ?>
				<?php if (!empty($_SESSION['userid']) && $_SESSION['userid'] != '') { ?>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" href="#">Offer Details</a>
						</li>
						<?php if (!empty($new_gigs) && isset($new_gigs)) { ?>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url() ?>front/WorkStram/<?php echo $gig_id; ?>">Work Stream</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url() ?>front/viewWorkStram/<?php echo $gig_id; ?>">View Work Stream</a>
							</li>
						<?php } ?>

					</ul>
				<?php } ?>
				<div class="offer_detail_cover">
					<div class="offer_item_detail white_box m_b_30">

						<div class="title">
							<h3><?= $gigs->title ?></h3>
						</div>
						<!-- Image slider  -->
						<?php if ($gimg->num_rows() > 0) { ?>
							<div class="offer_img_slider owl-carousel owl-theme">
								<?php
								$gimgs = $gimg->result();
								foreach ($gimgs as $im) { ?>
									<div class="item">
										<div class="image_box">
											<img src="<?= base_url() ?>uploads/Gigs/<?= $im->img ?>" alt="About" class="img-fluid">
										</div>
									</div>
								<?php } ?>
							</div>
							<!-- Image slider -->
						<?php } else { ?>
							<!-- single image -->
							<div class="offer_single_images">
								<div class="image_box">
									<img src="<?= base_url() ?>uploads/Gigs/<?= $gigs->cover_img ?>" alt="About" class="img-fluid">
								</div>
							</div>
							<!-- single image -->
						<?php } ?>
						<div class="content_box">
							<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->

							<!--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>-->
							<!--<h5>Why To Choose us</h5>-->
							<!--<ul>-->
							<!--	<li>Lorem Ipsum is simply dummy text</li>-->
							<!--	<li>Contrary to popular belief</li>-->
							<!--	<li>Lorem Ipsum is simply dummy text</li>-->
							<!--	<li>Lorem Ipsum is simply dummy text</li>-->
							<!--	<li>Contrary to popular belief</li>-->
							<!--</ul>-->
							<?= $gigs->details ?>
						</div>
					</div>
					<input type="hidden" id="total_price" value="<?= $gigs->price ?>" name="total_price">
					<?php if ($addons->num_rows() > 0) { ?>
						<div class="accordion_panel">
							<div class="accordion_heading">
								<h5><i class="fas fa-plus"></i> Order Additional</h5>
								<span class="ac_icons"><i class="fas fa-chevron-down"></i></span>
							</div>
							<div class="accordion_content">
								<div class="panel_body">
									<div class="add_order_row check_box">
										<?php
										$addon = $addons->result();
										foreach ($addon as $add) { ?>
											<label>
												<input type="checkbox" value="<?= $add->id ?>" name="addons[]" class="addons" data-price="<?= $add->price ?>" data-total="<?= $gigs->price ?>">

												<span class="c_box"></span>
												<div class="c_text">
													<div class="o_details">
														<div class="left_title">
															<h6><?= $add->title ?></h6>
															<p class="days">(+<?= $add->days ?> Days)</p>
														</div>
														<div class="amounts"><?= $add->price ?> USD</div>
													</div>
												</div>
											</label>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if (!empty($_SESSION['userid']) && $_SESSION['userid'] != '') { ?>
						<div class="accordion_panel">
							<div class="accordion_heading">
								<h5><i class="fas fa-plus"></i> Chat with Admin</h5>
								<span class="ac_icons"><i class="fas fa-chevron-down"></i></span>
							</div>

							<div class="accordion_content">
								<div class="panel_body">
									<div class="add_order_row check_box">
										<div class="messaging">
											<div class="inbox_msg">

												<div class="mesgs">
													<div class="msg_history">

														<div class="incoming_msg">
															<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
															<div class="received_msg">
																<div class="received_withd_msg">
																	<p>Hi,I am Admin.Fell free to ask anything</p>
																	<!-- <span class="time_date"> 11:01 AM | Today</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($message)) {
															foreach ($message as $row) {
																if ($row['type'] == 0) {
														?>
																	<div class="incoming_msg">
																		<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
																		<div class="received_msg">
																			<div class="received_withd_msg">
																				<p><?php echo $row['message'] ?></p>
																				<!-- <span class="time_date"> 11:01 AM | Today</span> -->
																			</div>
																		</div>
																	</div>

																<?php } else {
																?>
																	<div class="outgoing_msg">
																		<div class="sent_msg">
																			<p><?php echo $row['message'] ?></p>
																			<!-- <span class="time_date"> 11:01 AM | Today</span> -->
																		</div>
																	</div>
														<?php }
															}
														}
														?>
													</div>


													<input type="hidden" name="" id="url" value="<?= base_url() ?>front/chat">
													<input type="hidden" name="" id="user_id" value="<?php echo $user_id; ?>">
													<input type="hidden" name="" id="username" value="<?php echo $username; ?>">
													<input type="hidden" name="" id="gig_id" value="<?php echo $gig_id; ?>">
													<input type="hidden" name="" id="gigs_title" value="<?php echo $gigs->title; ?>">
													<div class="type_msg">
														<div class="input_msg_write">
															<input type="text" class="write_msg" placeholder="Type a message" />
															<button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					<?php } ?>
				</div>
			</div>

			<!-- offer Detail column -->
			<!-- offer sidebar column -->
			<div class="col-lg-4 col-sm-12 col-12">
				<div class="offer_sidebar">
					<div class="sidebar_widget text-center">

						<a href="#" class="buy_button green_button">
							<i class="fas fa-cart-arrow-down"></i>
							Total Price
							<span class="amount"><span id="total_amt"><?= $gigs->price ?></span> USD</span>
						</a>

						<?php if (!empty($_SESSION['userid']) && $_SESSION['userid'] != '') { ?>
							<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type='hidden' name='userid' value='<?= $_SESSION['userid'] ?>'>
								<input type='hidden' name='username' value='<?= $_SESSION['username'] ?>'>
								<input type='hidden' name='useremail' value='<?= $_SESSION['useremail'] ?>'>
								<input type='hidden' name='user_type' value='<?= $_SESSION['user_type'] ?>'>
								<input type='hidden' name='business' value='sanjeevvishwakarmaster@gmail.com'>
								<input type='hidden' name='item_name' value='I will create a stunning and proficient facebook page within 2 hours'>
								<input type='hidden' name='item_number' value='ITM1001'>
								<input type='hidden' name='amount' id="paypal_price" value='<?= $gigs->price ?>'>
								<input type='hidden' name='no_shipping' value='1'>
								<input type='hidden' name='currency_code' value='USD'>
								<input type='hidden' name='notify_url' value='http://ameygraphics.com/Gigs/front/notify'>
								<input type='hidden' name='cancel_return' value='http://ameygraphics.com/Gigs/front/cancel'>
								<input type='hidden' name='return' value='http://ameygraphics.com/Gigs/front/return'>
								<input type="hidden" name="cmd" value="_xclick">
								<input type="submit" name="pay_now" id="pay_now" Value="Pay With Paypal" class="buy_button black_button" style="margin-top:10px;">
							</form>





							<button type="button" name="coinbase" id="coinbase" data-toggle="modal" data-target="#myModal" class="buy_button black_button" style="margin-top:10px;">Pay With Card</button>


						<?php } else { ?>
							<input type="button" name="login" id="login" onclick="window.location='<?php echo base_url(); ?>/login'" Value="Login Now" class="buy_button black_button">
						<?php } ?>
					</div>
					<?php if ($gigs->assigned_to != 0) { ?>
						<!-- Freelancer Widget start -->
						<div class="sidebar_widget freelancer_widget">
							<div class="w_title text-center">
								<h5>Freelanced To</h5>
							</div>
							<div class="freelancer_profile">
								<div class="img_box">
									<img src="<?= base_url() ?>assets/front/images/avatar/avatar_img.jpg" alt="User Image" class="img-fluid">
								</div>
								<div class="content_box">
									<h4 class="titles">Music Rocker</h4>
									<div class="titles2">Completed Jobs: <span>100</span></div>
									<div class="titles3">100%<span>Reputation</span></div>
									<div class="rating_div"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ratings">5.0</span></div>
									<div class="review_div">100<span class="reviews"> Viewers</span></div>
									<div class="descriptions">
										<p>buy once's do not worry money back if you did not receive anything, but i sure you receive what you order for</p>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<!-- Freelancer Widget end -->
					<!-- widget end -->
					<div class="sidebar_widget">
						<div class="w_title">
							<h5>Reviews</h5>
						</div>
						<div class="comment_box_wrap">
							<ul class="comment_list">
								<?php
								$revieww = $review->result();
								foreach ($revieww as $r) { ?>
									<li>
										<div class="comment_div">
											<div class="cmt_header">
												<span class="avatar"><img src="<?= base_url() ?>assets/front/images/avatar/avatar_img.jpg" /></span>
												<div class="title">
													<h5><?= $r->name ?></h5>
													<span class="dates"><?php echo $this->Common_model->convert_date('d-m-Y', $r->date); ?></span>
												</div>
											</div>
											<div class="cmt_body">
												<p><?= $r->review ?></p>
											</div>
										</div>
									</li>
								<?php } ?>

							</ul>
						</div>
					</div>
					<!-- widget end -->
					<?php if ($this->session->flashdata('success')) { ?>
						<div class="alert alert-success">
							<strong>Success!</strong> Your review successfully saved.
						</div>
					<?php } ?>
					<!-- widget end -->
					<?php
					/*
					    if($this->session->userdata('userid')){
					       $uid = $this->session->userdata('userid');
					?>
					<div class="sidebar_widget">
						<div class="w_title"><h5>Feedback</h5></div>
						<div class="review_form_wrap">
							<div class="review_form">
								<form action="<?=base_url()?>front/review" method="POST" name="comment_form">
									<div class="form_group width_100">
										<label class="input_label">Name</label>
										<input type="text" name="name" class="input" placeholder="Enter Name" value="<?=$this->session->userdata('username')?>" readonly id="name">
											<input type="hidden" name="user_id" class="input" placeholder="Enter Name" value="<?=$uid?>" id="user_id">
											<input type="hidden" name="gig_id" class="input" placeholder="Enter Name" value="<?=$gigs->g_id?>" id="gig_id">
									</div>
									<div class="form_group width_100">
										<label class="input_label">Email</label>
										<input type="email" name="email" class="input" placeholder="Enter Email" value="<?=$this->session->userdata('useremail')?>" readonly id="email">
									</div>
									<div class="form_group width_100">
										<label class="input_label">Your Message</label>
										<textarea name="message" class="input" placeholder="Enter Your Message" id="msg"></textarea>
									</div>
									<div class="button_group width_100">
										<input type="submit" class="review_button green_button" name="submit" id="reviewsubmit">
									</div>
								</form>
								
								
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div class="feedback_msg_box"><p>please <a href="<?=base_url()?>login">login</a> or <a href="<?=base_url()?>signup">signup</a> with us for feedback</p></div>
					<?php }*/ ?>
					<!-- widget end -->
				</div>
			</div>
			<!-- offer sidebar column -->
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<!-- <div class="text-right m-2">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div> -->

			<div class="modal-body">
				<div class="panel-heading display-table">
					<div class="row display-tr">
						<h3 class="panel-title display-td">Payment Details</h3>
						<div class="display-td">
							<img class="img-responsive pull-right" src="<?= base_url() ?>assets/stripe.png">
						</div>
					</div>
				</div>
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success text-center">

						<p><?php echo $this->session->flashdata('success'); ?></p>
					</div>
				<?php } ?>
				<form role="form" action="<?= base_url() ?>front/stripePost" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">

					<input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">
					<input type='hidden' name='amount' id="stripe_price" value='<?= $gigs->price ?>'>
					<div class=''>
						<div class='col-xs-12 form-group required'>
							<label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
						</div>
					</div>

					<div class=''>
						<div class='col-xs-12 form-group  required'>
							<label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' type='text'>
						</div>
					</div>

					<div class='form-row row'>
						<div class='col-xs-12 col-md-4 form-group cvc required'>
							<label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
						</div>
						<div class='col-xs-12 col-md-4 form-group expiration required'>
							<label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
						</div>
						<div class='col-xs-12 col-md-4 form-group expiration required'>
							<label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
						</div>
					</div>

					<div class='form-row row'>
						<div class='col-md-12 error form-group hide'>
							<div class='alert-danger alert'>Please correct the errors and try
								again.</div>
						</div>
					</div>

					<div class="row ">
						<div class="col-lg-12">
							<div class="text-center">
								<button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($<span id="stripe_price_submit"><?= $gigs->price ?></span>)</button>
							</div>
						</div>
					</div>

				</form>


			</div>

		</div>
	</div>
</div>
<!-- <script>
	function goCoinbase(uid, gigid) {
		// window.location.href = 'https://www.coinbase.com/oauth/authorize?client_id=c3a138e8c1f60537e8f1d458e649d340af6879651fb75f03db2a79e718f629be&redirect_uri=https%3A%2F%2Fameygraphics.com%2FGigs%2Fcallback&response_type=code&scope=wallet%3Auser%3Aread&uid=' + uid + '&gigid=' + gigid;
		window.location.href = 'https://www.coinbase.com/oauth/authorize?client_id=e0da755b6e1acf3cb54e397f30bf9cb1fed7b891c1f5622d6ca4633d5be1e93a&redirect_uri=https%3A%2F%2Fwww.localhost%2Fuk_feedback%2F&response_type=code&scope=wallet%3Auser%3Aread&uid=' + uid + '&gigid=' + gigid;
	}
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
	$(function() {
		var $form = $(".require-validation");
		$('form.require-validation').bind('submit', function(e) {
			var $form = $(".require-validation"),
				inputSelector = ['input[type=email]', 'input[type=password]',
					'input[type=text]', 'input[type=file]',
					'textarea'
				].join(', '),
				$inputs = $form.find('.required').find(inputSelector),
				$errorMessage = $form.find('div.error'),
				valid = true;
			$errorMessage.addClass('hide');

			$('.has-error').removeClass('has-error');
			$inputs.each(function(i, el) {
				var $input = $(el);
				if ($input.val() === '') {
					$input.parent().addClass('has-error');
					$errorMessage.removeClass('hide');
					e.preventDefault();
				}
			});

			if (!$form.data('cc-on-file')) {
				e.preventDefault();
				Stripe.setPublishableKey($form.data('stripe-publishable-key'));
				Stripe.createToken({
					number: $('.card-number').val(),
					cvc: $('.card-cvc').val(),
					exp_month: $('.card-expiry-month').val(),
					exp_year: $('.card-expiry-year').val()
				}, stripeResponseHandler);
			}

		});

		function stripeResponseHandler(status, response) {
			if (response.error) {
				$('.error')
					.removeClass('hide')
					.find('.alert')
					.text(response.error.message);
			} else {
				var token = response['id'];
				$form.find('input[type=text]').empty();
				$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
				$form.get(0).submit();
			}
		}

	});
</script>
<!-- offer Detail wrapper End -->