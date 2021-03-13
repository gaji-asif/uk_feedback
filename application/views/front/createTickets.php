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
<!-- Create ticket wrapper Start -->
<div class="sc_wrapper create_ticket_page bg_gray pad_top_bottom_60">
   
	<div class="container">
	     
		<div class="row h_center">
		    <?php if($this->session->flashdata('success')){?>
		    <div class="alert alert-success">
  <strong>Success!</strong> Your ticket successfully generated.
</div><?php } ?>
			<!-- product image start -->
			<div class="col-lg-10 col-sm-12 col-12">
				<div class="create_ticket_form_wrap">
					<div class="site_common_form white_box">
						<h4 class="heading">Submit a Ticket</h4>
						<p>We recommend You to check <a href="#">Frequently Asked Question</a> section before submitting a support Ticket, as your question may have already been answered.</p>
						<div class="panel_header">
							<div class="panel_left"></div>
							<div class="panel_right">
								<a href="<?=base_url()?>create-ticket" class="green_button ticket_btn">Back to Tickets</a>
							</div>
						</div>
						<div class="create_ticket_form">
							<form action="<?=base_url()?>front/createTickets" method="POST" name="ticketform">
								<div class="form_group">
									<div class="label_dv"><label class="form_label">Subject</label></div>
									<div class="input_group">
									<input type="text" name="subject" placeholder="Enter Your Subject">
									</div>
								</div>
								<div class="form_group">
									<div class="label_dv">
									  <label class="form_label">Description</label>
										<p>Please enter the details of your request in <span>English Only</span>. a member of our support staff will respond as soon as possible.</p>
									</div>
									<div class="input_group">
										<textarea name="description" placeholder="Description"></textarea>
									</div>
								</div>
								<div class="form_group">
									<div class="label_dv"></div>
									<div class="input_group">
										<input type="submit" class="green_button ticket_submit" value="submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Create ticket wrapper End -->