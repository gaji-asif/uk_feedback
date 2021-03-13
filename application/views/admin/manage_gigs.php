
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
                      <th>Title</th>
                      <th>Price</th>
                      <th>Days</th>
                      <th>Category</th>
                      <th>Date</th>
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i=1;
                        foreach($gigs as $g){ ?>
                    <tr id="<?= $g->g_id;?>" table_name="gigs">
                      <td><?= $i++;?></td>
                      <td><?= $g->title;?></td>
					 <td><?= $g->price;?></td>
					 <td><?= $g->delivery_days;?></td>
           <td><?php echo $this->Admin_Model->fetch_categoryname_by_id($g->category_id); ?></td>
					  <td><?php echo $this->Common_model->convert_date('d-m-Y',$g->created_date); ?></td>
					  
					
                      <td class="action_btn">
					   
					    <a href="<?=base_url()?>admin/gigsDetails/<?=$g->g_id?>" class="a_icons"><i class="fas fa-eye"></i></a>
					      <a href="<?=base_url()?>admin/editGigs/<?=$g->g_id?>" class="a_icons"><i class="fas fa-edit"></i></a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
$(".delete_data").click(function () {
var id = $(this).parents("tr").attr("id");
var table_name = $(this).parents("tr").attr("table_name");

$('#detail_id').val(id);
$('#table_name').val(table_name);
});
</script>

