<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>my payments</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>"><i class="fa fa-home"></i>Home</a></li>
						<li>my payments</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- My Payment section End -->
<div class="sc_wrapper my_payments_page pad_top_bottom_50 bg_gray"> 
	<div class="container">
		<div class="fr_mypayments_table">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>S.No.</th>
							<th>amount</th>
							<th>Gigs</th>
							<th>Date</th>
							
						</tr>
					</thead>
					<tbody>
					    <?php $i=1;
                        foreach($payment as $p){ 
                       $array=array('g_id'=>$p->gigs_id);
	                   $gig=$this->Common_model->fetch_single_row($array,'gigs');

                        ?>

						<tr>
							<td><?=$i++?></td>
							<td>$<?=$p->amount?></td>
							<td><?=$gig->title?></td>
							<td><?php echo $this->Common_model->convert_date('d-m-Y',$p->date); ?></td>
							<td class="action_td">
								<span class="action_txt complete_btn">Completed</span>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- My Payment Section End -->