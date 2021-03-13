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
						<li>payments</li>
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
							<th>Withdraw</th>
							<th>Balance</th>
							<th>Date</th>
							<th>status</th>
						</tr>
					</thead>
					<tbody>
				        <?php $i=1;
                        foreach($payment as $p){ ?>

						<tr>
							<td><?=$i++?></td>
							<td>$<?=$p->withdrawal_amount?></td>
							<td>$<?=$p->available_amount?></td>
							<td><?php echo $this->Common_model->convert_date('d-m-Y',$p->date); ?></td>
							<td class="action_td">
							    <?php if($p->status==0){?>
								<span class="action_txt request_btn">requested</span>
								<?php } else { ?>
								<span class="action_txt complete_btn">Completed</span>
								<?php } ?>

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