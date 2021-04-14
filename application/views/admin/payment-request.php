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
              <th>Id</th>
              <th>Freelancer Name</th>
              <th>available balance</th>
              <th>withdrawal amount</th>
              <!-- <th>payment by</th> -->
              <th>Status</th>

              <th>Date</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($request as $r) {

              if ($r['status'] == 0) {
                $status ="<span class='badge badge-warning'>pending</span>";
              } else {
                $status ="<span class='badge badge-success'>completed</span>";

                // $status = "completed";
              }
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td>$ <?php echo  $r['available_amount']; ?></td>
                <td>$ <?php echo $r['request_amount']; ?></td>
                <td><?= $status; ?></td>

                <td><?php echo $this->Common_model->convert_date('d-m-Y', $r['date']); ?></td>
                <td class="action_btn">

                  <a class="a_icons changestatus" href="#" data-toggle="modal" data-target="#Changestatus<?php echo  $r['id']; ?>"><i class="fas fa-edit"></i></a>
                  <div class="modal fade" id="Changestatus<?php echo  $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <form method="post" action="<?= base_url('admin/changePaymentStatus'); ?>">
                        <input type="hidden" name="id" value="" id="uid">
                        <input type="hidden" name="withdrawal_amount" value="" id="withdrawal_amount">
                        
                        <input type="hidden" name="freelancer_id" value="<?php echo $r['freelancer_id']; ?>" id="userid">
                        <input type="hidden" name="request_id" value="<?php echo $r['id']; ?>" id="userids">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Payment Status</h5>
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
                  <a class="a_icons delete_data" href="#" data-toggle="modal" data-target="#Deletedata<?php echo  $r['id']; ?>"><i class="fas fa-trash"></i></a>
                  <div class="modal fade" id="Deletedata<?php echo  $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <p>Do you want to delete this payment request?</p>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a href="<?= base_url() ?>admin/delete_payment_request/<?php echo $r['id']; ?>"><button class="btn btn-primary" type="submit">Yes</button></a>
                            
                          </div>
                        </div>
                    </div>
                  </div>
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
  $(".changestatus").click(function() {
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