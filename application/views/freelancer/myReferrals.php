<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>My Referral</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
						<li>My Referral</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Referral section start -->
<div class="sc_wrapper f_referral_page_section bg_gray pad_top_60 pad_bottom_30"> 
	<div class="container">
		<div class="row">
			<?php if(count($all_referalls)>0){
				foreach($all_referalls as $all_referall){
				?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12 refs_cols">
				<div class="referral_box_items">
					<div class="img_box"><span class="icons"><i class="fas fa-gift"></i><span></div>
					<div class="contents">
						<h4><?php echo $all_referall->name;?></h4>
						<p><?php echo $all_referall->email;?></p>
						<p>Phone: <?php echo $all_referall->phone;?></p>
						<div class="info_txt countrys"><i class="fas fa-globe"></i><?php echo $all_referall->country;?></div>
					</div>
				</div>
			</div>
		<?php }  }else{ ?>

			<div class="col-lg-12 refs_cols">
				<div class="referral_box_items" style="padding-top: 15px;">
					You have No referrels
				</div>
			</div>
		<?php } ?>
			
		</div>
		<!-- pagination start -->
       <!--  <div class="pagination_wrap">
        	<ul>
        		<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
        		<li><a href="#">1</a></li>
        		<li><a href="#">2</a></li>
        		<li><a href="#">3</a></li>
        		<li><a href="#">4</a></li>
        		<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
        	</ul>
        </div> -->
        <!-- pagination end -->
	</div>
</div>
<!-- Referral section End -->