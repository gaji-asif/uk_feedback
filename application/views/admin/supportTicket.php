
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
			<!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Buyer List</h6>
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
                     	<th>id</th>
                     	
                     	<th>Email</th>
						<th>Message Title</th>
						<th>Details</th>
						<th>Name</th>
						<th>Created</th>
								
								
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  	<tbody>
							    <?php 
							    
					                $i=1;
								    $tickett=$ticket->result();
								   
							     foreach($tickett as $t){
							         $array=array('user_id'=>$t->user_id);
							     $userDetails=$this->Common_model->fetch_single_row($array,'users');
							     if($userDetails==""){
							         $email="";
							         $name="";
							     }else{
							         $email=$userDetails->email;
						            $name=$userDetails->name;

							     }
							     
							     ?>
								<tr id="<?=$t->t_id?>">
								    	<td>#ref-<?=$t->ticket_ID?></td>
								    	<td><?=$email?></td>
								
									<td><?=$t->subject?></td>
										<td><?=$t->description?></td>
										<td><?=$name?></td>
									<td><?php echo $this->Common_model->convert_date('d-m-y h:i:s',$t->created_on);?></td>
								
								
									<td class="action_btn">
					             <?php if($t->status==1){?>
                                  
					          <a href="#" class="card_body reply_ticket a_icons" data-toggle="modal" data-target="#reply_ticket_modal"><i class="fa fa-reply"></i>
          
                              </a><?php } else if($t->status==2){?><span class="status_dv">Closed</span><?php } ?>
               
                                        <!--<a onclick="return confirm('Are you sure you want to delete this ?');" class="a_icons delete_pack" href=""><i class="fas fa-trash"></i></a>-->
                                        <!--<a class="a_icons blog_delete" id='del_<?= $t->t_id ?>' data-id='<?= $t->t_id ?>'><i class="fas fa-trash"></i></a> -->
				                    </td>
								</tr>
								<?php }?>
								
							</tbody>
                </table>
              </div>
            </div>
			<!-- card body End -->
          </div>
        </div>
        <!-- /.container-fluid -->
        
        <!-- category Modal -->
<div class="modal fade" id="reply_ticket_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="POST" action="<?php echo base_url(); ?>admin/ticketReply" name="ticketreplyform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      
      <div class="form_group">
        <label class="form_label">Ticket Reply</label>
        <div class="input_group">
             <input type="hidden" name="t_id" class="form-control" value="" id="t_id">
           <textarea class="form-control" placeholder="Offer Details" name="reply"></textarea>
				
          
        </div>
      </div>
      <div class="form_group">
        <label class="form_label">Ticket status</label>
        <div class="input_group">
             <select class="form-control" name="status">
              <option value="1" checked>Pending</option>
            <option value="2">Closed</option>
          
          </select>
				
          
        </div>
      </div>
      <div class="form_group btn_group">
        <button type="submit" class="admin_btn">Add Category</button>
      </div>
    </div>
      </div>
    </div>
  </div>
  </form>
</div>
<!-- category Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script>
$(".reply_ticket").click(function () {
var id = $(this).parents("tr").attr("id");

$('#t_id').val(id);

});
</script>
      