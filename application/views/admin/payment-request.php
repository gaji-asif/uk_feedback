
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
			<!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Gigs</h6>
				</div>
				<!-- <div class="c_header_right">
					<a href="<?= base_url('admin/add-blog');?>" class="admin_btn"><i class="fas fa-file-image"></i>Add Blog</a>
				</div> -->
            </div>
			<!-- card header End -->
			<!-- card body start -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>payment email</th>
                      <th>available balance</th>
                      <th>withdrawal amount</th>
                      <th>payment by</th>
                      <th>Status</th>

                      <th>Date</th>
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i=1;
                        foreach($request as $r){ 
                        if($r->payment_by==1){
                            $payment="paypal";
                        }else{
                           $payment="coinbase";

                        }
                        if($r->status==0){
                            $status="pending";
                        }else{
                           $status="completed";

                        }
                        ?>
                    <tr id="<?= $r->id;?>" table_name="gigs" status="<?=$r->status?>" withdrawal="<?=$r->withdrawal_amount?>" userid="<?=$r->user_id;?>">
                      <td><?= $i++;?></td>
                      <td><?= $r->payment_email;?></td>
					 <td><?= $r->available_amount;?></td>
					 <td><?= $r->withdrawal_amount;?></td>
           			 <td><?= $payment;?></td>
           			 <td><?= $status;?></td>

					  <td><?php echo $this->Common_model->convert_date('d-m-Y',$r->created_date); ?></td>
					  
					
                      <td class="action_btn">
					   
					    <a class="a_icons changestatus" href="#" data-toggle="modal" data-target="#Changestatus"><i class="fas fa-edit"></i></a>
					      
						<a class="a_icons delete_data" href="#" data-toggle="modal" data-target="#Deletedata"><i class="fas fa-trash"></i></a>
						<!-- <a class="a_icons blog_delete" id='del_<?= $b->id ?>' data-id='<?= $b->id ?>'><i class="fas fa-trash"></i></a> -->
					   </td>
                    </tr>
					<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
			<!-- card body End -->
          </div>
        </div>
        <!-- /.container-fluid -->
       <div class="modal fade" id="Changestatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/changePaymentStatus');?>" >
            <input type="hidden" name="id" value="" id="uid">
<input type="hidden" name="withdrawal_amount" value="" id="withdrawal_amount">

                    <input type="hidden" name="userid" value="" id="userid">
    
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User status</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            
        <div class="form_group">
        <label class="form_label">Select status</label>
        <div class="input_group">
          <select class="form-control" name="status" id="userstatus">
            <option value="0">pending</option>
            <option value="1">completed</option>

          </select>
        </div>
       </div>  
            
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Yes</button>
        </div>
      </div>
      </form>
    </div>
  </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
$(".changestatus").click(function () {
var id = $(this).parents("tr").attr("id");
var ustatus = $(this).parents("tr").attr("status");
var withdrawal = $(this).parents("tr").attr("withdrawal");
var userid = $(this).parents("tr").attr("userid");

$('#uid').val(id);
$('#userstatus').val(ustatus);
$('#withdrawal_amount').val(withdrawal);
$('#userid').val(userid);

});
</script>
