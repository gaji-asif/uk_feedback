<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <!-- card header start -->
    <div class="card-header py-3">
      <div class="c_header_title">
        <h6 class="m-0 font-weight-bold text-primary">Buyer Messages</h6>
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


              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            <?php

            $i = 1;
            // $buyerMessages = $buyerMessage->result();

            foreach ($buyerMessage as $t) {

            ?>
              <tr id="<?  echo $i ?>">

                <td>
                  <?php echo $i ?>
                </td>
                <td>
                  <?php echo $t['gigs_title'] ?>
                </td>
                <td>
                  <?php echo $t['username'] ?>
                </td>

                <td><?php echo $this->Common_model->convert_date('d-m-y h:i:s', $t['created_at']); ?></td>
                <td class="action_btn">

                  <a href="<?php echo base_url(); ?>admin/get_chat/<?php echo $t['gig_id'] ?>/<?php echo $t['user_id'] ?>/<?php echo $t['username'] ?>/<?php echo $t['gigs_title'] ?>" class="card_body  a_icons"><i class="fa fa-reply"></i></a>
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
  $(".reply_ticket").click(function() {
    var id = $(this).parents("tr").attr("id");

    $('#t_id').val(id);

  });
</script>