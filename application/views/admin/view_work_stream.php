<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <!-- card header start -->
    <div class="card-header py-3">
      <div class="c_header_title">
        <h6 class="m-0 font-weight-bold text-primary">View Work Streams</h6>
      </div>
      <!-- <div class="c_header_right">
					<a href="<?= base_url('admin/add-blog'); ?>" class="admin_btn"><i class="fas fa-file-image"></i>Add Blog</a>
				</div> -->
    </div>
    <!-- card header End -->
    <!-- card body start -->
    <div class="row">
	
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
      

      
      <div class="card-title">View Reviews (Gig Name : <?php echo $gig->title ?> & User Name : <?php echo $user->name ?>)</div>
      <?php if($this->session->flashdata('success')){ ?>
           <div class="alert alert-success mb-3 background-success" role="alert">
           <?php echo $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php } ?>
        <form  method="POST" action="<?=base_url()?>admin/editReview" enctype="multipart/form-data" name="editReviewForm">
        <input type="hidden" name="gig_id" value="<?php echo $gig_id; ?>">
        <input type="hidden" name="buyer_id" value="<?php echo $user->user_id; ?>">
        
            <?php foreach($links as $key=>$link){ ?>  
              <input type="hidden" name="link[<?php echo $key ?>][0][0]" value="<?php echo $link['link_id'] ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" name="link[<?php echo $key ?>][0][1]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Link" value="<?php echo $link['link_url'] ?>" required>
              </div>
              
              <?php foreach($link['reviews'] as $key2=>$row){ ?>
                <input type="hidden" name="link[<?php echo $key ?>][1][<?php echo $key2 ?>][0]" value="<?php echo $row->id ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Review</label>
                  <textarea class="form-control" name="link[<?php echo $key ?>][1][<?php echo $key2 ?>][1]" aria-label="With textarea" rows="5" required><?php echo $row->review_details ?></textarea>
                </div>       
              <?php } ?>                                        
            <?php } ?>                                        
                           
          
          <div class="text-right">
            <a href="<?php echo base_url(); ?>admin/work_stream/"><button type="button" class="btn btn-success">Back</button></a> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
    <!-- card body End -->
  </div>
</div>
<!-- /.container-fluid -->
