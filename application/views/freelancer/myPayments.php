<!-- breadcrumb section start -->
<style>
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

	.action_btn .a_icons:hover {
		border-color: #f5a91f;
		background-color: #f5a91f;
		color: #ffffff;
	}

	.admin_btn {
		color: white;
		background-color: #f5a91f;
		height: 40px;
		line-height: 40px;
		display: inline-block;
		padding: 0 20px;
		font-size: 14px;
		border-radius: 5px;
		text-decoration: none;
		border: none;
		text-align: center;
	}

	.admin_btn:hover {
		color: #fff;
		background-color: #222222;
		text-decoration: none;
	}
</style>
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
						<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
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
		<div class="">
			<a type="button" class="admin_btn text-white mb-2" data-toggle="modal" data-target="#exampleModal">Withdraw</a>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<form method="POST" action="<?= base_url() ?>freelancer/withdraw_money" enctype="multipart/form-data" name="withdraw_money">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Withdraw Amount</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
								<div class="form-group">
									<label for="exampleInputEmail1">Withdraw Amount</label>
									<input type="number" name="request_amount" class="form-control" id="exampleInputEmail1" min='0.1' step="0.1" max="<?php if(isset($totalAmount)) echo $totalAmount; ?>" placeholder="Enter Withdraw Amount">
								</div>
							<input type="hidden" name="available_amount" value="<?php if(isset($totalAmount)) echo $totalAmount; ?>">

							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							<button type="submit" class="admin_btn">Yes</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="fr_mypayments_table">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>S.No.</th>
							<th>Link</th>
							<th>Balance</th>
							<th>Date</th>
							<!-- <th>status</th> -->
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;
						foreach ($payment as $p) { ?>

							<tr>
								<td><?= $i++ ?></td>
								<td><?= $p['link_url'] ?></td>
								<td>$ <?= $p['price'] ?></td>
								<td><?php echo $this->Common_model->convert_date('d-m-Y', $p['date']); ?></td>

							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- My Payment Section End -->