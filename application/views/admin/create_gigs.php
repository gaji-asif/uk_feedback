<div class="container-fluid">
	  <div class="card shadow mb-4">
		<!-- card header start -->
		<div class="card-header py-3">
			<div class="c_header_title">
			  <h6 class="m-0 font-weight-bold text-primary">Create Gigs</h6>
			</div>
		</div>
		<!-- card header End -->
		<!-- card body start -->
		<div class="card-body">
			<div class="admin_forms create_gig_form">
				<div class="ad_form_heading">
					<h5>Post a Gigs</h5>
				</div>
			  <form method="POST" action="<?=base_url()?>admin/create_gigs" enctype="multipart/form-data" name="gigsform">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Title</label>
							<div class="input_group">
								<input type="text" placeholder="Enter Title" class="form-control" name="title">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Is featured</label>
							<div class="input_group">
								<select class="form-control" name="type" id="type">
								  <option value="">Select type</option>
								    <option value="1">Yes</option>
								      <option value="0" checked>No</option>
								      </select>
							</div>
						</div>
					</div>
					 
				</div>
				<div class="row">
				    <div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Price</label>
							<div class="input_group">
								<input type="text" placeholder="Enter Price" class="form-control" name="price">
							</div>
						</div>
					</div>
				    <div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Freelancer Price</label>
							<div class="input_group">
								<input type="text" placeholder="Enter Freelancer Price" class="form-control" name="freelancer_price">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Category</label>
							<div class="input_group">
								<select class="form-control" name="category_id" id="main_cat">
								  <option value="">Select Category</option>
								   <?php foreach ($main_category as $mcat) {?>

            <option value="<?php echo $mcat->cat_id ?>"><?php echo $mcat->cat_name ?></option>
            <?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!--<div class="col-md-6 col-12">-->
					<!--	<div class="form_group">-->
					<!--		<label class="form_label">sub category</label>-->
					<!--		<div class="input_group">-->
					<!--			<select class="form-control" name="subcat_id" id="sub_cat">-->
					<!--			  <option value="">Select Sub Category</option>-->
								 
					<!--			</select>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Delivery Days</label>
							<div class="input_group">
							<input type="text" placeholder="Enter Price" class="form-control" name="delivery_days">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Number of Reviews</label>
							<div class="input_group">
							<input type="number" placeholder="Enter Number of review you want" class="form-control" name="no_of_reviews">
							</div>
						</div>
					</div>
					<div class="col-md-12 col-12">
						<div class="form_group">
							<label class="form_label">Add Tags</label>
							<div class="input_group">
								<textarea class="form-control" placeholder="Add Tags" name="tags"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="form_group">
					<label class="form_label">Offer details</label>
					<div class="input_group">
						<textarea class="form-control" placeholder="Offer Details" name="details"></textarea>
					</div>
				</div>
				<div class="form_group">
					<label class="form_label">Upload Cover image</label>
					<div class="input_group">
						<input type="file" class="form-control" name="cover_img">
					</div>
				</div>
				<div class="form_group">
					<label class="form_label">multiple image</label>
					<div class="input_group">
						<div class="multiple_img_row">
							<div class="m_img_colm">
								<div class="m_img_box">
									<label class="file_upload_button">
										<i class="fas fa-upload"></i> Browse Image
										<input type="file" class="file_upload_input" name="gigs_img[]"  multiple="multiple" id="gallery-photo-add">
									</label>
								</div>
							</div>
							<div class="gigs_gallery">
							
							</div>
							
						</div>
					</div>
				</div>
				<div class="ad_form_heading">
					<h5>Extra Service Add ons</h5>
				</div>
				<div class="addons_form_wrap">
					<div class="addons_form_row">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="form_group">
									<div class="input_group">
										<input type="text" placeholder="Enter Title" class="form-control" name="titlee[]">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-12">
								<div class="form_group">
									<div class="input_group">
										<input type="text" placeholder="Enter Price" class="form-control" name="pricee[]">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-12">
								<div class="form_group">
									<div class="input_group">
									    	<input type="text" placeholder="Enter days" class="form-control" name="days[]">
										
									</div>
								</div>
							</div>
						</div>
						<span class="row_btns add_on_btn"><i class="fas fa-plus"></i></span>
					</div>
				</div>
				<div class="form_group">
					<input type="submit" value="Post Gigs" class="gigs_post_btn admin_btn">
				</div>
			  </form>
			</div>
		</div>
		<!-- card body End -->
	  </div>
</div>
<script>
CKEDITOR.replace( 'details' );

</script>