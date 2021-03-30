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
    	border-bottom: 1px solid  var(--gray_bg);
	}
	.card{
		border: 1px solid  #ffffff;
	}
	.danger-buttons{
		margin-top: 75px;
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
						<a class="nav-link active" href="#">Work Stream</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
							<div class="card-title">Add Link</div>
								<?php if($this->session->flashdata('success')){ ?>
 									<div class="alert alert-success mb-3 background-success" role="alert">
									 <?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<?php } ?>
								<form  method="POST" action="<?=base_url()?>front/addLink" enctype="multipart/form-data" name="addLinkForm">
									<div class="form-group">
										<label for="exampleInputEmail1">Link</label>
										<input type="text" name="add_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Link" required>
									</div>
									<input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
							<div class="card-title">Add Review</div>
							<?php if($this->session->flashdata('success2')){ ?>
 									<div class="alert alert-success mb-3 background-success" role="alert">
									 <?php echo $this->session->flashdata('success2'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<?php } ?>
								<form  method="POST" action="<?=base_url()?>front/addReview" enctype="multipart/form-data" name="addReviewForm">
								<input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">
									<div class="form-group">
										<label for="exampleInput">Link</label>
										<select class="js-example-basic-single custom-select" id="exampleInput" name="link" required>
											<option ></option>
											<?php  
											if(isset($links) && !empty($links)){
												foreach($links as $link){ ?>
												<option value="<?php echo $link->id ?>"><?php echo $link->link_url ?></option>
												<?php  }
											} ?>
										
										</select>
									</div>
							

									<div class="increment">
										<div class="form-group">
											<label for="exampleInputEmail1">Review</label>
											<textarea class="form-control" name="rating[]" aria-label="With textarea" rows="5" required></textarea>
										</div>       
                                        <div class="float-right">
                                            <button class="btn btn-success ml-1 mb-1" type="button"><i class="fa fa-plus"></i></button>
                                        </div>                                              
                                    </div>
                                

									<div class="clone d-none">
										<div class="hide new" style="padding-top:30px">
											<div class="form-group">
												<label for="exampleInputEmail1">Review</label>
												<textarea class="form-control" name="rating[]" rows="5" aria-label="With textarea"></textarea>
											</div>		
											<div class="float-right">
												<button class="btn btn-danger ml-1 mb-1" type="button"><i class="fa fa-times"></i></button>
											</div>
										</div>
									</div>
									
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
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
        $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
 
      $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".new").remove();
      });
  
    });
</script>
<!-- offer Detail wrapper End -->