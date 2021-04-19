<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>My Gigs</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
						<li>My Gigs</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Buyer gig section start -->
<div class="sc_wrapper buyer_mygigs_page bg_gray pad_top_60 pad_bottom_30"> 
	<div class="container">
		<div class="row">
               	<?php  if($mygigs->num_rows()>0){
                                $mygigs=$mygigs->result();
                                foreach ($mygigs as $mg){
                                $array1=array('g_id'=>$mg->gigs_id);
                                $gig=$this->Common_model->fetch_single_row($array1,'gigs');

                                ?>			
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 buyer_gigs_col">
				<div class="buyer_gigs_item">
					<div class="img_box"><img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" class="img-fluid"></div>
					<div class="contents">
						<div class="contents_txt">
						
							<a href="<?=base_url()?>front/gigsDetail/<?=$gig->g_id?>"><h4><?=$gig->title?></h4></a>
							<div class="prices"><span class="spn_1">price</span><span class="spn_2">$<?=$mg->amount?></span></div>
							<div class="date_time"><i class="fas fa-clock"></i><?=$this->Common_model->convert_date('d-m-Y h:i:a',$mg->created_on);?></div>
							<div class="info_txt status"><span class="span_1">status</span><span class="span_2"><?php if($mg->status==1){ echo "completed"; } else { echo "running"; } ?></span></div>
							<div class="info_txt payment"><span class="span_1">Payment By</span><span class="span_2"><?php if($mg->payment_by==1){ echo "Paypal"; } else { echo "coinbase"; } ?></span></div>
						</div>
					</div>
				</div>
			</div>
			<?php } } ?>
			<!--<div class="col-lg-6 col-md-12 col-sm-12 col-12 buyer_gigs_col">-->
			<!--	<div class="buyer_gigs_item">-->
			<!--		<div class="img_box"><img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" class="img-fluid"></div>-->
			<!--		<div class="contents">-->
			<!--			<div class="contents_txt">-->
			<!--				<h4>Gigs Title Here</h4>-->
			<!--				<div class="prices"><span class="spn_1">price</span><span class="spn_2">$1000</span></div>-->
			<!--				<div class="date_time"><i class="fas fa-clock"></i>11-11-2020 2:30PM</div>-->
			<!--				<div class="info_txt status"><span class="span_1">status</span><span class="span_2">running</span></div>-->
			<!--				<div class="info_txt payment"><span class="span_1">Payment By</span><span class="span_2">Paypal</span></div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
		</div>
		<!-- pagination start -->
        <div class="pagination_wrap">
        	<ul>
        		<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
        		<li><a href="#">1</a></li>
        		<li><a href="#">2</a></li>
        		<li><a href="#">3</a></li>
        		<li><a href="#">4</a></li>
        		<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
        	</ul>
        </div>
        <!-- pagination end -->
	</div>
</div>
<!-- Buyer gig section End -->