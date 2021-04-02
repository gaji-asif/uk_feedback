<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <!-- card header start -->
    <div class="card-header py-3">
      <div class="c_header_title">
        <h6 class="m-0 font-weight-bold text-primary">Work Streams</h6>
      </div>
      <!-- <div class="c_header_right">
					<a href="<?= base_url('admin/add-blog'); ?>" class="admin_btn"><i class="fas fa-file-image"></i>Add Blog</a>
				</div> -->
    </div>
    <!-- card header End -->
    <!-- card body start -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#Sn</th>

              <th>GIg Title</th>
              <th>Username</th>
              <th>Created</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
          <?php

            $i = 1;
            // $buyerMessages = $buyerMessage->result();

            foreach ($links as $t) {

            ?>
              <tr id="<?  echo $i ?>">

                <td>
                  <?php echo $i ?>
                </td>
                <td>
                  <?php echo $t['title'] ?>
                </td>
                <td>
                  <?php echo $t['name'] ?>
                </td>

                <td><?php echo $this->Common_model->convert_date('d-m-y', $t['date']); ?></td>
                <td>
                  <?php  if($t['approve_status']==1) { ?>
                    <span class='badge badge-success'>Approved</span>
                  <?php  }else{ ?>
                    <span class='badge badge-danger'>Not Approve</span>
                  <?php  } ?>
                </td>
                <td class="action_btn">
                  <a href="<?php echo base_url(); ?>admin/view_work_stream/<?php echo $t['gig_id'] ?>/<?php echo $t['buyer_id'] ?>" class="card_body  a_icons"><i class="fa fa-eye" ></i></a>
                  <a href="<?php echo base_url(); ?>admin/approve_work_stream/<?php echo $t['gig_id'] ?>/<?php echo $t['buyer_id'] ?>" class="card_body  a_icons"><i class="fa fa-check"></i></a>
                </td>
              </tr>
            <?php $i++;
            } ?>
           

          </tbody>
        </table>
      </div>
    </div>
    <!-- card body End -->
  </div>
</div>
<!-- /.container-fluid -->
