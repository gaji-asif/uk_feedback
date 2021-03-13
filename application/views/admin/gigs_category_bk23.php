 <!-- Begin Page Content -->
<div class="container-fluid">     
    <!-- page heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Category</h1>
      </div>
      <!-- page heading -->
      <!-- row start -->
      <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="category_card shadow">
            <a href="#" class="card_body" data-toggle="modal" data-target="#category_modal">
              <span class="c_icon"><i class="fas fa-tags"></i></span>
              <div class="cate_text"><h5>Add category</h5></div>
            </a>
          </div>
        </div>
        <!--<div class="col-xl-6 col-md-6 mb-4">-->
        <!--  <div class="category_card shadow">-->
        <!--    <a href="#" class="card_body" data-toggle="modal" data-target="#sub_category_modal">-->
        <!--      <span class="c_icon"><i class="fas fa-tags"></i></span>-->
        <!--      <div class="cate_text"><h5>Add sub category</h5></div>-->
        <!--    </a>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
      <!-- row end -->
      <!-- card Start -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>S.No.</th>
                <th>id</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
              $i=1;
              foreach ($main_category as $m) {?>
              <tr id="<?php echo $m->cat_id; ?>" name="<?php echo $m->cat_name; ?>"> 
                <td style="width:10%;"><?php echo $i++; ?></td>
                <td style="width:10%;"><?php echo $m->cat_id; ?></td>
               <!--  <td style="width:20%;"><img src="<?php echo base_url(); ?>uploads/category/<?php echo $m->cat_image; ?>" style="height:60px; text-align: center;"></td> -->
                <td><?php echo $m->cat_name; ?></td>
                <td class="action_btn">
                   <a href="#" class="card_body edit_main_category a_icons" data-toggle="modal" data-target="#edit_category_modal">
              <i class="fas fa-edit"></i>
            </a>
                <a class="a_icons deletecat" href="#" data-toggle="modal" data-target="#DeletecatModal"><i class="fas fa-trash"></i></a>
                 </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card Start -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                  <th>S.No.</th>
                <th>id</th>
                <th>Sub Category</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
               <?php
              $i=1;
              foreach ($sub_category as $s) {?>
              <tr sid="<?php echo $s->cat_id; ?>" sparent_id="<?php echo $s->parent_id; ?>" sname="<?php echo $s->cat_name; ?>">
                <td><?php echo $i++; ?></td>
                <td style="width:10%;"><?php echo $s->cat_id; ?></td>
                <td><?php echo $s->cat_name; ?></td>
                <td><?php echo $this->Admin_Model->fetch_categoryname_by_id($s->parent_id); ?></td>
                <td class="action_btn">
                       <a href="#" class="card_body edit_sub_category a_icons" data-toggle="modal" data-target="#edit_sub_category_modal">
              <i class="fas fa-edit"></i>
            </a>                
             <a class="a_icons deletesubcat" href="#" data-toggle="modal" data-target="#DeletesubcatModal"><i class="fas fa-trash"></i></a>
                 </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- card end -->
</div>
        <!-- /.container-fluid -->
      <!-- category Modal -->
<form method="POST" action="<?php echo base_url(); ?>admin/add_category" name="addcatform">
<div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      <div class="form_group">
        <label class="form_label">Enter Category</label>
        <div class="input_group">
            <input type="hidden" name="parent_id" class="form-control" value="0">
            <input type="hidden" name="level" class="form-control" value="1">
          <input type="text" name="cat_name" class="form-control" placeholder="Enter Category Name">
        </div>
      </div>
      <div class="form_group btn_group">
        <button type="submit" class="admin_btn">Add Category</button>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- category Modal -->
<!-- Edit Modal -->
<form method="POST" action="<?php echo base_url(); ?>admin/edit_main_category" enctype="multipart/form-data" name="editcatform">
<div class="modal fade" id="edit_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      <div class="form_group">
        <label class="form_label">Enter Category</label>
        <div class="input_group">
            <input type="hidden" name="cat_id" class="form-control" value="" id="main_cat_id">
          <input type="text" name="cat_name" class="form-control" value="" placeholder="Enter Category Name" id="main_cat_name">
        </div>
      </div>
      <div class="form_group btn_group">
        <button type="submit" class="admin_btn">Update Category</button>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- edit Modal -->
<!-- category Modal -->
<div class="modal fade" id="sub_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="POST" action="<?php echo base_url(); ?>admin/add_category" name="subcatform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Gigs Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      <div class="form_group">
        <label class="form_label">Select Category</label>
        <div class="input_group">
          <select class="form-control" name="parent_id">
              <?php foreach ($main_category as $mcat) {?>
            <option value="<?php echo $mcat->cat_id ?>"><?php echo $mcat->cat_name ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form_group">
        <label class="form_label">Sub Category</label>
        <div class="input_group">
             <input type="hidden" name="level" class="form-control" value="2">
          <input type="text" name="cat_name" class="form-control" placeholder="enter sub category">
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
<!-- category Modal -->
<div class="modal fade" id="edit_sub_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="POST" action="<?php echo base_url(); ?>admin/edit_sub_category" name="subcateditform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
    <div class="admin_forms category_form">
      <div class="form_group">
        <label class="form_label">Select Category</label>
        <div class="input_group">
          <select class="form-control" name="parent_id" id="sub_parent_id">
              <?php foreach ($main_category as $mcat) {?>
            <option value="<?php echo $mcat->cat_id ?>"><?php echo $mcat->cat_name ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form_group">
        <label class="form_label">Sub Category</label>
        <div class="input_group">
             <input type="hidden" name="cat_id" class="form-control" id="sub_cat_id">
          <input type="text" name="cat_name" class="form-control" placeholder="enter sub category" id="sub_cat_name">
        </div>
      </div>
      <div class="form_group btn_group">
        <button type="submit" class="admin_btn">Edit Sub Category</button>
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
$(".edit_main_category").click(function () {
var id = $(this).parents("tr").attr("id");
var name = $(this).parents("tr").attr("name");
$('#main_cat_id').val(id);
$('#main_cat_name').val(name);
});
$(".edit_sub_category").click(function () {
var sid = $(this).parents("tr").attr("sid");
var sname = $(this).parents("tr").attr("sname");
var sparent_id = $(this).parents("tr").attr("sparent_id");
$('#sub_cat_id').val(sid);
$('#sub_cat_name').val(sname);
$('#sub_parent_id').val(sparent_id);
console.log(sid);
});
$(".deletecat").click(function () {
var id = $(this).parents("tr").attr("id");

$('#c_id').val(id);

});

$(".deletesubcat").click(function () {
var sid = $(this).parents("tr").attr("sid");

$('#subcatt_id').val(sid);

});
$('.file_upload_button input[type="file"]').change(function(e){
    var fileName = e.target.files[0].name;
    $(this).parents(".file_upload_button").next(".filepath").text(fileName);
  });
</script>