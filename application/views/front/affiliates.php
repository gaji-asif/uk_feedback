<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>Create ticket</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>"><i class="fa fa-home"></i>Home</a></li>
						<li>Create ticket</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Affiliates wrapper Start -->
<div class="sc_wrapper affiliate_page_wrapper bg_gray pad_top_bottom_60">
	<div class="container">
		<div class="row h_center">
			<!-- product image start -->
			<div class="col-lg-8 col-sm-12 col-12">
				<div class="affiliate_divs">
					<div class="af_heading">
						<h4>Affiliate Program</h4>
						<p>Tell people about <strong>Gigs</strong> and earn unlimited free <strong>money</strong></p>
					</div>
					<div class="af_offer_section">
						<h5>Here's What You Get</h5>
						<div class="af_offer_box">
							<h4><span class="off">3% off</span> Money</h4>
							<p>when you referral buy a offer or <span class="earn_text">earn $100</span></p>
							<div class="referral_text"><span class="off_money_txt">3% off Money</span> for every referral</div>
						</div>
					</div>
					<div class="af_link_section">
						<h5>Get Your Affiliate link</h5>
						<div class="af_link_box">
							<div class="af_heading">
								<h4>Affiliate Link</h4>
								<p>copy and send the following URL to your friends and earn points when they sign up  buy from us.</p>
							</div>
							<?php 
							$str=substr($this->session->userdata('username'), 0, strrpos($this->session->userdata('username'), ' '));
							$signup = 'signup?user_id='.$this->session->userdata('userid');
							?>
							<div class="input_box">
								<input type="text" class="affl_input" id="copy_af_input" value="<?php echo base_url().$signup?>" name="affiliate_link">
								<span class="copy_btn" onclick="copyfunction()">Copy</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Affiliates wrapper End -->