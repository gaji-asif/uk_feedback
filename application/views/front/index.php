<!-- Slider section Start -->
<div class="sc_wrapper main_slider_section">
	<div class="home_slider_container">
		<div class="home_slider owl-carousel owl-theme">
			<div class="item">
				<div class="slide_item">
					<div class="img_box"><img src="<?=base_url()?>assets/front/images/slider/slide_1.jpg" alt="Slides" class="img-fluid"></div>
				</div>
			</div>
			<div class="item">
				<div class="slide_item">
					<div class="img_box"><img src="<?=base_url()?>assets/front/images/slider/slide_2.jpg" alt="Slides" class="img-fluid"></div>
				</div>
			</div>
			<div class="item">
				<div class="slide_item">
					<div class="img_box"><img src="<?=base_url()?>assets/front/images/slider/slide_3.jpg" alt="Slides" class="img-fluid"></div>
				</div>
			</div>
			<div class="item">
				<div class="slide_item">
					<div class="img_box"><img src="<?=base_url()?>assets/front/images/slider/slide_4.jpg" alt="Slides" class="img-fluid"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Slider section End -->
<!-- offer section Start -->
<div class="sc_wrapper offers_section_wrap bg_gray pad_top_bottom_60">
	<div class="container">
		<div class="heading_section">
			<h3 class="heading">Our offers</h3>
		</div>
		<div class="row">
		    <?php 
		    foreach($featuredgigs as $gigss){?>
			<div class="col-lg-3 col-sm-6 col-12 offer_colms">
				<div class="offer_items">
					<a href="<?=base_url()?>front/gigsDetail/<?=$gigss->g_id?>" class="offer_lnks">
						<div class="img_box">
							<img src="<?=base_url()?>uploads/Gigs/<?=$gigss->cover_img?>" alt="Offer" class="img-fluid">
						</div>
						<div class="content_box">
							<h5 class="offer_title"><?=limit_text($gigss->title, 11);?></h5>
							<div class="ofr_amount">
							  <span class="price">$<?=$gigss->price?></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php }?>
		    <?php 
		    foreach($gigs as $gig){?>
			<div class="col-lg-3 col-sm-6 col-12 offer_colms">
				<div class="offer_items">
					<a href="<?=base_url()?>front/gigsDetail/<?=$gig->g_id?>" class="offer_lnks">
						<div class="img_box">
							<img src="<?=base_url()?>uploads/Gigs/<?=$gig->cover_img?>" alt="Offer" class="img-fluid">
						</div>
						<div class="content_box">
							<h5 class="offer_title"><?=limit_text($gig->title, 11);?></h5>
							<div class="ofr_amount">
							  <span class="price">$<?=$gig->price?></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php }?>
			
			
			
		</div>
	</div>
</div>
<!-- offer section End -->