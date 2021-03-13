<div class="container-fluid">
          <!-- Page Heading -->
          <!-- card start -->
          <div class="card shadow mb-4">
			<!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Gigs Details</h6>
				</div>
            </div>
			<!-- card header End -->
			<!-- card body start -->
            <div class="card-body p-0 view_page_card">
				<div class="view_page_wrap">
					<div class="left_thumb">
						<img src="<?=base_url()?>assets/img/user_thumb_big.jpg" alt="User Image" class="img-fluid">
					</div>
					<div class="right_contents">
						<div class="right_contents_inr">
							<!-- row Start -->
							<div class="row">
								<div class="col-xl-7 col-12">
									<div class="customer_details">
										<h5><?=$gigs->title?></h5>
										<div class="view_page_table">
										<table class="table">
											<tbody><tr><th>Price</th><td><?=$gigs->price?> USD</td></tr>
											<tr><th>Category</th><td><?php echo $this->Admin_Model->fetch_categoryname_by_id($gigs->category_id); ?></td></tr>
											<tr><th>Days</th><td><?=$gigs->delivery_days?> Day</td></tr>
											</tbody>
										</table>
										</div>
										<h4>Description</h4>
										<p><?=$gigs->details?></p>
									</div>
								</div>
								<div class="col-xl-5 col-12">
								    <?php if($gigs->assigned_to!=0){?>
									<div class="freelancer_profile_div">
										<h3 class="titles text-primary">Freelanced To</h3>
										<div class="freelancer_profile">
											<div class="img_box">
												<img src="<?=base_url()?>assets/img/user_thumb_big.jpg" alt="User Image" class="img-fluid">
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
								</div>
						    </div>
							<!-- row end -->
						</div>
					</div>
				</div>
            </div>
			<!-- card body End -->
          </div>
		  <!-- card End -->
		  <!-- card start --> 
		  <?php  if($gimg->num_rows()>0){ ?>
		  <div class="card shadow mb-4">
		  <!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Multiple Image Gallery</h6>
				</div>
            </div>
			<!-- card header End -->
			  <div class="card-body">
				  <div class="banner_wrapper gigs_gallery_view">
				        <?php
						 $gimgs=$gimg->result();
						foreach ($gimgs as $im){?>
					<div class="banner_cols">
						<div class="banner_item">
							<div class="banner_img">
							  <img src="<?=base_url()?>uploads/Gigs/<?=$im->img?>" alt="User Image" class="img-fluid">
							</div>
						</div>
					</div>
					
					<?php } ?>
				  </div>
			  </div>
		  </div>
		  <?php } ?>
		  <!-- card End -->
		   <!-- card start --> 
		  	<?php  if($addons->num_rows()>0){ ?>
		  <div class="card shadow mb-4">
		  <!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Extra Service Add ons</h6>
				</div>
            </div>
			<!-- card header End -->
			<div class="card-body gig_addons_table">
				<div class="table-responsive">
                <table class="table dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Days</th>
                    </tr>
                  </thead>
					<tbody>
					     <?php
					                $i=1;
								    $addon=$addons->result();
								    foreach ($addon as $add){?>
						<tr>
						  <td>1</td>
						  <td><?=$add->title?></td>
						  <td><?=$add->price?> USD</td>
						  <td><?=$add->days?> Days</td>
						</tr>
						<?php } ?>
					</tbody>
                </table>
              </div>
			</div>
		  </div>
		  <?php } ?>
		  <!-- card End -->
        </div>