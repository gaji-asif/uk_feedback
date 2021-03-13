<!-- breadcrumb section start -->
<div class="sc_wrapper page_banner_section"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="page_banner_title">
					<h3>support ticket</h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12 bred_col">
				<div class="breadcrumb_wrapper">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>"><i class="fa fa-home"></i>Home</a></li>
						<li>support ticket</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- support ticket wrapper Start -->
<div class="sc_wrapper support_ticket_page pad_top_bottom_60">
	<div class="container">
		<div class="row">
			<!-- product image start -->
			<div class="col-lg-12 col-sm-12 col-12">
				<div class="support_ticket_table">
					<div class="panel_header">
						<div class="panel_left">
							<h4 class="panel_title">Support Tickets</h4>
						</div>
						<div class="panel_right">
							<a href="<?=base_url()?>create-ticket" class="green_button ticket_btn">Submit new Ticket</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>id</th>
									<th>Subject</th>
									<th>Created</th>
								
									<th>Status</th>
										<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    <?php foreach($ticket as $t){?>
								<tr id="<?=$t->t_id?>" reply="">
									<td>#ref-<?=$t->ticket_ID?></td>
									<td><?=$t->subject?></td>
									<td><?php echo $this->Common_model->convert_date('d-m-y h:i:s',$t->created_on);?></td>
								
									<td><?php if($t->status==1){?><span class="status_dv">pending</span><?php } else if($t->status==2){?><span class="status_dv">Closed</span><?php } ?></td>
									<td><a href="#" class="card_body viewreply a_icons" data-toggle="modal" data-target="#viewreplymodal"  data-reply="<?php if($t->reply!=""){ echo $t->reply; } else { echo "No reply yet"; } ?>" >
                                  <i class="fas fa-eye"></i>
                                </a>                </td>
								</tr>
								<?php }?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- support ticket wrapper End -->
<!-- category Modal -->
<div class="modal fade" id="viewreplymodal" tabindex="-1" role="dialog" aria-hidden="true">
    
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      <div class="form_group">
        <label class="form_label" id="reply">Select Category</label>
        
      </div>
      
    </div>
      </div>
    </div>
  </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
$(".viewreply").click(function () {
var reply = $(this).attr("data-reply");
console.log(reply);
$('#reply').text(reply);

});
</script>