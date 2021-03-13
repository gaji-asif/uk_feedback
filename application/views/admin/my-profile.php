
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
			<!-- card body start -->
			<form method="post" action="<?= base_url('admin/my-profile');?>" enctype="multipart/form-data" name="my_profile">
            <div class="card-body">
              <div class="admin_forms portfolio_form">
				
					<div class="form_group">
						<label class="form_label">Full Name</label>
						<div class="input_group">
							<input type="text" placeholder="Enter Full Name" value="<?= $data->name;?>" name="name" class="form-control" />
							<input type="hidden" placeholder="Enter Full Name" value="<?= $data->id;?>" name="id" class="form-control" />
						</div>
					</div>
					<div class="form_group">
						<label class="form_label">Email</label>
						<div class="input_group">
							<input type="text" placeholder="Enter Full Name" value="<?= $data->email_id;?>" readonly class="form-control" />
						</div>
					</div>
					<div class="form_group">
						<label class="form_label">Mobile No</label>
						<div class="input_group">
							<input type="text" placeholder="Enter Mobile No" value="<?= $data->mobile;?>" name="mobile" class="form-control" />
						</div>
					</div>
					<div class="form_group btn_group">
						<input type="submit" value="Save Profile" class="admin_btn">
						<a href="" class="admin_btn">Cancel</a>
					</div>
				
			  </div>
            </div>
            </form>
			<!-- card body End -->
          </div>
        </div>
        <!-- /.container-fluid -->
