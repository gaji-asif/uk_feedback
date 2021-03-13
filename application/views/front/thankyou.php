<!-- Login section End -->
<div class="sc_wrapper sc_login_sign_section pad_top_bottom_40"> 
	<div class="container">
		<div class="row h_center">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="login_form_cover shadow_box">
					<div class="form_heading">
						<h1 class="heading">Login to Gigs</h1>
					</div>
					<?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger" role="alert">
                        <strong>failed!</strong> Invalid Credentials
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>    
					<div class="login_form">
						<h1>Thank you for buy gig.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Section End -->
<div class="clearfix"></div>