<!-- breadcrumb section start -->
<style>
	.tabs_menu>li {
		margin-right: 10px;
	}

	.btn-style-active {
		background-color: var(--primary_color);
		color: #fff;
	}

	.btn-style:hover {
		color: white;
	}

	.btn-style {
		background-color: var(--black_color);
		color: #fff;
	}

	.form_heading {
		padding: 8px 0px 8px 0px;
	}
	.action_btn .a_icons {
		display: inline-block;
		width: 25px;
		height: 25px;
		line-height: 23px;
		border: 1px solid #999;
		color: #999;
		border-radius: 3px;
		text-align: center;
		text-decoration: none;
		font-size: 13px;
	}
	.action_btn .a_icons:hover{
		border-color: #f5a91f;
		background-color: #f5a91f;
		color: #ffffff;
	}
</style>


<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>Offers</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>"><i class="fa fa-home"></i>Home</a></li>
						<li> Offers</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- About wrapper Start -->
<div class="sc_wrapper about_page_wrapper pad_top_bottom_60">
	<div class="container">
		<div class="row">
			<!-- product image start -->
			<?php include 'tabs-menu.php';?>
		</div>
	</div>
</div>

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
<!-- About wrapper End -->