<div class="container-fluid">
	  <div class="card shadow mb-4">
		<!-- card header start -->
		<div class="card-header py-3">
			<div class="c_header_title">
			  <h6 class="m-0 font-weight-bold text-primary">Paypal settings</h6>
			</div>
		</div>
		<!-- card header End -->
		<!-- card body start -->
		<div class="card-body">
			<div class="admin_forms create_gig_form">
				<div class="ad_form_heading">
					<h5>Edit paypal settings</h5>
				</div>
			  <form method="POST" action="<?=base_url()?>admin/paypalSettings" name="paypalsettingform">
			<div class="row">
				<div class="form_group">
					<label class="form_label">Email</label>
					<div class="input_group">
							<input type="email" placeholder="Enter email" class="form-control" name="paypalemail" value="<?=$s->email?>">
							<input type="hidden" class="form-control" name="id" value="<?=$s->id?>">
					</div>
				</div>
				<div class="form_group">
					<label class="form_label">security key</label>
					<div class="input_group">
							<input type="text" placeholder="Enter security key" class="form-control" name="security_key" value="<?=$s->security_key?>">
					</div>
				</div>
				<div class="form_group">
					<label class="form_label">security Code</label>
					<div class="input_group">
							<input type="text" placeholder="Enter security key" class="form-control" name="code" value="<?=$s->code?>">
					</div>
				</div>
				
				
				</div>
				<div class="form_group">
					<input type="submit" value="Update settings" class="gigs_post_btn admin_btn">
				</div>
			  </form>
			</div>
		</div>
		<!-- card body End -->
	  </div>
</div>
