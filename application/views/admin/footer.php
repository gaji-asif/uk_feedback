      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/logout');?>" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Logout</button>
        </div>
      </div>
      </form>
    </div>
  </div>
 <!-- excel Modal -->
<div class="modal fade" id="excel_upload_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Excel File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	<div class="modal-body">
		<div class="admin_forms category_form">
			<div class="form_group">
				<div class="input_group text-center">
					<div class="file_upload_div">
						<label class="file_upload_button">
							<input type="file" name="banner_files">
							<i class="fas fa-file-excel"></i><span class="text">Browse File</span>
						</label>
						<span class="filepath"></span>
					</div>
				</div>
			</div>
			<div class="form_group btn_group text-center">
				<button type="button" class="admin_btn">Update Excel</button>
				<button type="button" class="admin_btn">Submit</button>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="DeletecatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/deletecat');?>" >
        	<input type="hidden" name="cat_id" id="c_id">
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">you want to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Yes" below if you want to delete this data.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">yes</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
  <div class="modal fade" id="DeletesubcatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/deletecat');?>" >
        	<input type="hidden" name="cat_id" id="subcatt_id">
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">you want to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Yes" below if you want to delete this data.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">yes</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
  
  <div class="modal fade" id="Deletedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/deletedetail');?>" >
        <input type="hidden" name="detail_id" id="detail_id">
       
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">you want to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Yes" below if you want to delete this data.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">yes</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
  
  <div class="modal fade" id="Deletedataa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('admin/deleteNotification');?>" >
        <input type="hidden" name="detail_id" id="noti_id">
      
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">you want to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Yes" below if you want to delete this data.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">yes</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- Logout Modal-->
 
<!-- excel Modal -->
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('assets/js/sb-admin-2.min.js');?>"></script>
  <!-- Page level plugins -->
  <script src="<?=base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <!-- Jquery ui js-->
  <script src="<?=base_url('assets/vendor/jquery_ui/jquery-ui.min.js');?>"></script>
  <!-- Page level custom scripts -->
  <script src="<?=base_url('assets/js/demo/datatables-demo.js');?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
   <script type="text/javascript" src="<?=base_url()?>assets/js/validation.js"></script>
    <!-- PDf Convertor js -->
	<script src="<?= base_url('assets/js/pdf.js');?>"></script>
	<script src="<?= base_url('assets/js/pdf.worker.js');?>"></script>
	<!-- PDf Convertor js -->
    <script src="<?= base_url('assets/js/custom.js');?>"></script>
    <script>
		if($('#editor').length > 0){
		CKEDITOR.replace( 'editor' );
		}
    var url= "<?= base_url();?>";
    <?php if($this->session->flashdata('success')){ ?>

    toastr.success("<?php echo $this->session->flashdata('success'); ?>");

    <?php }else if($this->session->flashdata('error')){  ?>
    
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    
    <?php }else if($this->session->flashdata('warning')){  ?>
    
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    
    <?php }else if($this->session->flashdata('info')){  ?>
    
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    
    <?php } ?>
    
	$('.file_upload_button input[type="file"]').change(function(e){
		var fileName = e.target.files[0].name;
		$(this).parents(".file_upload_button").next(".filepath").text(fileName);
	});
	
	// $('body').bind('contextmenu', function(e){
		// return false;
	// }); 
		//portfolio tabs Menu
		$('.port_tabs .tab_lnk').on('click', function(){
		var tab_data = $(this).attr("data-tab");
		$('.port_tabs .tab_lnk').removeClass("active");
		$(this).addClass("active");	
		$(".p_tab_content").removeClass("active");
		$("#"+tab_data).addClass("active");
	});
	
	//drag drop list
	
  </script>
  <script>



</script>
<script>
	//add ons field on click
	var ad = 1;
	$('.add_on_btn').on('click', function(){
		ad++;
		var html = '<div class="addons_form_row" id="add_row'+ad+'">\
						<div class="row">\
							<div class="col-md-6 col-12">\
								<div class="form_group">\
									<div class="input_group">\
										<input type="text" placeholder="Enter Title" class="form-control" name="titlee[]">\
									</div>\
								</div>\
							</div>\
							<div class="col-md-3 col-12">\
								<div class="form_group">\
									<div class="input_group">\
										<input type="text" placeholder="Enter Price" class="form-control" name="pricee[]">\
									</div>\
								</div>\
							</div>\
							<div class="col-md-3 col-12">\
								<div class="form_group">\
									<div class="input_group">\
										<input type="text" placeholder="Enter Price" class="form-control" name="days[]">\
									</div>\
								</div>\
							</div>\
						</div>\
						<span class="row_btns remove_row_btn" id="btn'+ad+'"><i class="fas fa-minus"></i></span>\
					</div>';
		$('.addons_form_wrap').append(html);
	});
	//remove field
	$(document).on('click', '.remove_row_btn', function(){
		//var button_id = $(this).attr("id");
		var remove_prnt = $(this).parents(".addons_form_row");
		$(remove_prnt).remove();
	});
	$('#main_cat').change(function(){
  $('#sub_cat').val();

  var main_cat = $(this).val();
 
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_sub_cat",
    method:"POST",
    data:{main_cat:main_cat},
    success:function(response)
    {
        var html = '';
        
        
        //console.log(response);
      var res = JSON.parse(response);
        $.each(res,function(index,data){
           
            html += '<option value="'+data.cat_id+'">'+data.cat_name+'</option>';
          });
        
      $('#sub_cat').html(html);
      
    }
   });
  
 });
 
 $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gigs_gallery');
    });
});
	</script>
</body>
</html>