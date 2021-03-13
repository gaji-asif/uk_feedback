<!-- Begin Page Content -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<style>
  .container {
    max-width: 1170px;
    margin: auto;
  }

  img {
    max-width: 100%;
  }

  .inbox_people {
    background: #f8f8f8 none repeat scroll 0 0;
    float: left;
    overflow: hidden;
    width: 40%;
    border-right: 1px solid #c4c4c4;
  }

  .inbox_msg {
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
  }

  .top_spac {
    margin: 20px 0 0;
  }

  .recent_heading {
    float: left;
    width: 40%;
  }

  .srch_bar {
    display: inline-block;
    text-align: right;
    width: 60%;
    padding:
  }

  .headind_srch {
    padding: 10px 29px 10px 20px;
    overflow: hidden;
    border-bottom: 1px solid #c4c4c4;
  }

  .recent_heading h4 {
    color: #05728f;
    font-size: 21px;
    margin: auto;
  }

  .srch_bar input {
    border: 1px solid #cdcdcd;
    border-width: 0 0 1px 0;
    width: 80%;
    padding: 2px 0 4px 6px;
    background: none;
  }

  .srch_bar .input-group-addon button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    padding: 0;
    color: #707070;
    font-size: 18px;
  }

  .srch_bar .input-group-addon {
    margin: 0 0 0 -27px;
  }

  .chat_ib h5 {
    font-size: 15px;
    color: #464646;
    margin: 0 0 8px 0;
  }

  .chat_ib h5 span {
    font-size: 13px;
    float: right;
  }

  .chat_ib p {
    font-size: 14px;
    color: #989898;
    margin: auto
  }

  .chat_img {
    float: left;
    width: 11%;
  }

  .chat_ib {
    float: left;
    padding: 0 0 0 15px;
    width: 88%;
  }

  .chat_people {
    overflow: hidden;
    clear: both;
  }

  .chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
  }

  .inbox_chat {
    height: 550px;
    overflow-y: scroll;
  }

  .active_chat {
    background: #ebebeb;
  }

  .incoming_msg_img {
    display: inline-block;
    width: 6%;
  }

  .received_msg {
    display: inline-block;
    padding: 0 0 0 10px;
    vertical-align: top;
    width: 92%;
  }

  .received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 60%;
  }

  .time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
  }

  .received_withd_msg {
    width: 100%;
  }

  .mesgs {
    float: left;
    padding: 30px 15px 0 25px;
    width: 100%;
  }

  .sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0;
    color: #fff;
    padding: 5px 10px 5px 12px;
    width: 100%;
  }

  .outgoing_msg {
    overflow: hidden;
    margin: 26px 0 26px;
  }

  .sent_msg {
    float: right;
    width: 46%;
  }

  .input_msg_write input {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #4c4c4c;
    font-size: 15px;
    min-height: 48px;
    width: 100%;
  }

  .type_msg {
    border-top: 1px solid #c4c4c4;
    position: relative;
  }

  .msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    right: 0;
    top: 11px;
    width: 33px;
  }

  .messaging {
    padding: 0 0 50px 0;
  }

  .msg_history {
    height: 516px;
    overflow-y: auto;
  }
</style>
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
    <div class="container">
      <div class="card-body">
        <div class="accordion_content">
          <div class="panel_body">
            <div class="add_order_row check_box">
              <div class="messaging">
                <div class="inbox_msg">

                  <div class="mesgs">
                    <div class="msg_history">

                      <!-- <div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Hi,I Am Admin.Fell free to ask anything</p>
                            <span class="time_date"> 11:01 AM | Today</span>
                          </div>
                        </div>
                      </div> -->
                      <?php if (isset($message)) {
                        foreach ($message as $row) {
                          if ($row['type'] == 1) {
                      ?>
                            <div class="incoming_msg">
                              <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                              </div>
                              <div class="received_msg">
                                <div class="received_withd_msg">
                                  <p><?php echo $row['message'] ?></p>
                                  <!-- <span class="time_date"> 11:01 AM | Today</span> -->
                                </div>
                              </div>
                            </div>

                          <?php } else {
                          ?>

                            <div class="outgoing_msg">
                              <div class="sent_msg">
                                <p><?php echo $row['message'] ?></p>
                                <!-- <span class="time_date"> 11:01 AM | Today</span> -->
                              </div>
                            </div>

                      <?php }
                        }
                      }
                      ?>
                    </div>


                    <input type="hidden" name="" id="url" value="<?php base_url() ?>admin/chat">
                    <input type="hidden" name="" id="user_id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="" id="username" value="<?php echo $username; ?>">
                    <input type="hidden" name="" id="gig_id" value="<?php echo $gig_id; ?>">
                    <input type="hidden" name="" id="gigs_title" value="<?php echo $gigs_title; ?>">


                    <div class="type_msg">
                      <div class="input_msg_write">
                        <input type="text" class="write_msg" placeholder="Type a message" />
                        <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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