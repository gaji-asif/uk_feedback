
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
			<!-- card header start -->
            <div class="card-header py-3">
				<div class="c_header_title">
				  <h6 class="m-0 font-weight-bold text-primary">Notifications List</h6>
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
                     
                      <th>Title</th>
                      <th>Body</th>
                        <th>Date & time</th>
                      
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i=1;
                       $notification=$notification->result();
                        foreach($notification as $n){ ?>
                    <tr id="<?php echo $n->id?>">
                      <td><?= $i++;?></td>
                      
					 <td><?= $n->title;?></td>
					 <td><?= $n->body;?></td>
					
					<td><?php echo $this->Common_model->convert_date('d-m-Y h:i:sa',$n->created_on)?></td>
                      <td class="action_btn">
					    <!--<a href="<?=base_url()?>admin/viewNotification/<?=$n->id?>" class="a_icons"><i class="fas fa-eye"></i></a>-->
					    <!--  <a href="<?=base_url()?>admin/editNotification/<?=$n->id?>" class="a_icons"><i class="fas fa-edit"></i></a>-->
						<a class="a_icons delete_data" href="#" data-toggle="modal" data-target="#Deletedataa"><i class="fas fa-trash"></i></a>
					
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
         <div class="modal fade" id="Hidemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/changeUserStatus');?>" >
            <input type="hidden" name="user_id" value="" id="uid">
             <input type="hidden" name="usertype" value="" id="usertype">
            
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
             <option value="1">Approved</option>
               <option value="2">Block</option>
               <option value="3">Hide</option>
          
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
$(".delete_data").click(function () {
var id = $(this).parents("tr").attr("id");

$('#noti_id').val(id);

});
</script>
