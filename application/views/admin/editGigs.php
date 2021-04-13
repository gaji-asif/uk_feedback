<div class="container-fluid">
	  <div class="card shadow mb-4">
		<!-- card header start -->
		<div class="card-header py-3">
			<div class="c_header_title">
			  <h6 class="m-0 font-weight-bold text-primary">Edit Gigs</h6>
			</div>
		</div>
		<!-- card header End -->
		<!-- card body start -->
		<div class="card-body">
			<div class="admin_forms create_gig_form">
				<div class="ad_form_heading">
					<h5>update a Gigs</h5>
				</div>
			  <form method="POST" action="<?=base_url()?>admin/editGigs/<?=$g->g_id?>" enctype="multipart/form-data" name="editgigsform">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Title</label>
							<div class="input_group">
								<input type="text" placeholder="Enter Title" class="form-control" name="title" value="<?=$g->title?>">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Is featured</label>
							<div class="input_group">
								<select class="form-control" name="type" id="type">
								 
								    <option value="1" <?php if($g->type==1){ echo "selected"; } ?>>Yes</option>
								      <option value="0" <?php if($g->type==0){ echo "selected"; } ?> checked>No</option>
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
								<input type="text" placeholder="Enter Price" class="form-control" name="price" value="<?=$g->price?>">
							</div>
						</div>
					</div>
				    <div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Freelancer Price</label>
							<div class="input_group">
								<input type="text" placeholder="Enter Freelancer Price" class="form-control" name="freelancer_price" value="<?=$g->freelancer_price?>">
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

            <option value="<?php echo $mcat->cat_id ?>" <?php if($g->category_id==$mcat->cat_id){ echo "selected"; } ?>><?php echo $mcat->cat_name ?></option>
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
					<!--			    <?php if($g->subcat_id==0){?>-->
					<!--			  <option value="">Select Sub Category</option>-->
					<!--			  	<?php } else {?>-->
     <!--                          <option value="<?php echo $g->subcat_id ?>"><?php echo $this->Common_model->fetch_categoryname_by_id($g->subcat_id) ?></option>-->
					<!--			<?php } ?>-->
								 
					<!--			</select>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Delivery Days</label>
							<div class="input_group">
								<input type="text" placeholder="Delivery days" class="form-control" name="delivery_days" value="<?=$g->delivery_days?>">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form_group">
							<label class="form_label">Number of Reviews</label>
							<div class="input_group">
							<input type="number" placeholder="Enter Number of review you want" class="form-control" name="no_of_reviews" value="<?=$g->no_of_reviews?>">
							</div>
						</div>
					</div>
					<div class="col-md-12 col-12">
						<div class="form_group">
							<label class="form_label">Add Tags</label>
							<div class="input_group">
								<textarea class="form-control" placeholder="Add Tags" name="tags"><?=$g->tags?></textarea>
							</div>
						</div>
					</div>
					
				</div>
				<div class="form_group">
					<label class="form_label">Offer details</label>
					<div class="input_group">
						<textarea class="form-control" placeholder="Offer Details" name="details"><?=$g->details?></textarea>
					</div>
				</div>
					<input type="hidden" placeholder="Add Tags" class="form-control" name="old_img" value="<?=$g->cover_img?>">
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
										<input type="file" class="file_upload_input" name="gigs_img[]" multiple id="gallery-photo-add">
									</label>
								</div>
							</div>
							<div class="gigs_edit_gallery gigs_gallery">
							<?php
						if($gimg->num_rows()>0){ 
						 $gimgs=$gimg->result();
						foreach ($gimgs as $im){?>
							<div class="banner_cols">
								<div class="banner_item">
									<div class="banner_img">
										<img src="<?=base_url()?>uploads/Gigs/<?=$im->img?>">
										<div class="bnr_overlay">
											<div class="overlay_buttons">
												<a href="<?=base_url()?>admin/deleteGigsimg/<?=$im->id.'/'.$g->g_id?>" class="icons"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						 <?php } }?>
							</div>
							
						</div>
					</div>
				</div>
				<div class="ad_form_heading">
					<h5>Extra Service Add ons</h5>
				</div>
			<?php
				if($addons->num_rows()>0){
				  $i=1;
				  $addon=$addons->result();
				  foreach ($addon as $add){?>
				  <div class="addons_form">
					<div class="addons_form_row">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="form_group">
									<div class="input_group">
										<input type="text" placeholder="Enter Title" class="form-control" name="old_title[]" value="<?=$add->title?>">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-12">
								<div class="form_group">
									<div class="input_group">
										<input type="text" placeholder="Enter Price" class="form-control" name="old_price[]" value="<?=$add->price?>">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-12">
								<div class="form_group">
									<div class="input_group">
									
										<input type="text" placeholder="Delivery days" class="form-control" name="old_days[]" value="<?=$add->days?>">
									   
									</div>
								</div>
							</div>
						</div>
						<a href="<?=base_url()?>admin/removeaddons/<?=$add->id.'/'.$g->g_id?>" class="row_btns del_btns"><i class="fas fa-trash"></i></a>
					</div>
				</div>
					<?php } }?>
					<div class="ad_form_heading">
					<h5>Add more</h5>
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
									
										<input type="text" placeholder="Delivery days" class="form-control" name="days[]">
										
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