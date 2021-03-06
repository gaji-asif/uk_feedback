
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
                      <th>Id</th>
                     
                      <th>Name</th>
                      <th>Email</th>
                      <!--<th>phone</th>-->
                      <th>Country</th>
                      
                      <th>Date</th>
                       <th>Status</th>
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i=1;
                        foreach($freelancer as $b){ ?>
                    <tr id="<?php echo $b->user_id?>" status="<?php echo $b->status?>">
                      <td><?= $i++;?></td>
                      
					 <td><?= $b->name;?></td>
					 <td><?= $b->email;?></td>
					  <!--<td><?= $b->phone;?></td>-->
					  <td><?php echo $this->Common_model->fetch_country_by_code($b->country)?></td>
					  <td><?= $b->register_date;?></td>
					  	<td><?php echo $this->Common_model->fetch_user_status($b->status)?></td>
					<td class="action_btn">
					     <a class="a_icons hideuser" href="#" data-toggle="modal" data-target="#Hidemodal"><i class="fas fa-check"></i></a>
					
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
            <span aria-hidden="true">??</span>
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
$(".hideuser").click(function () {
var id = $(this).parents("tr").attr("id");
var ustatus = $(this).parents("tr").attr("status");
var usertype=2;
$('#uid').val(id);
$('#userstatus').val(ustatus);
$('#usertype').val(usertype);
});
</script>

        