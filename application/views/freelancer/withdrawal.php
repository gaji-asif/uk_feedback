<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>withdrawal</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>"><i class="fa fa-home"></i>Home</a></li>
						<li>withdrawal</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- withdraw section End -->
<div class="sc_wrapper withdraw_page_wrap pad_top_bottom_50"> 
	<div class="container">
		<div class="withdraw_form_container">
			<div class="withdraw_form_dv">
				<div class="wt_wallet_dv">
					<i class="fas fa-wallet"></i>
					<p><?=$this->Common_model->fetch_wallet_by_id($this->session->userdata('userid'))?> USD</p>
				</div>
				<div class="withdraw_heading">
				  <h3>Withdraw your Money</h3>
				</div>
				<?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success" role="alert">
                        <strong>Success!</strong>your request for withdrawal successfully submitted
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>
				<form action="<?=base_url()?>freelancer/withdrawal" method="POST" name="withdrawal">
				    <div class="form_group">
					  <input type="email" placeholder="Enter your registered paypal email" name="paypal_email">

					</div>
					<div class="form_group">
					  <input type="text" placeholder="Enter your registered paypal name" name="paypal_name">

					</div>  
					<div class="form_group">
					  <input type="text" placeholder="Enter Amount" name="withdrawal_amount">
					  <input type="hidden" placeholder="Enter Amount" name="available_amount" value="<?=$this->Common_model->fetch_wallet_by_id($this->session->userdata('userid'))?>">

					</div>
					


					<div class="form_group">
					  <input type="submit" value="Request" class="green_button pay_request">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- withdraw Section End -->