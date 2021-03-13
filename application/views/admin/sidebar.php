
  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard');?>">
			<div class="sidebar-brand-icon">
			 <!--  <img src="<?= base_url('assets/img/favicon.png');?>" class="img-fluid"> -->
			</div>
			<div class="sidebar-brand-text mx-1"><img src="<?= base_url('assets/img/admin_logo.png');?>" class="img-fluid"></div>
		</a>
		<!-- Divider -->
		<hr class="sidebar-divider my-0">
		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?= base_url('admin/dashboard');?>">
			  <i class="fas fa-fw fa-tachometer-alt"></i>
			  <span>Dashboard</span>
			</a>
		</li>
		 
		<!--<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/company-who-we-are');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Company who we are</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/linkedin-link');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Add LinkedIn Link</span>
			</a>
		</li> -->
		<!-- <li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/facebook-link');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Add Facebook Link</span>
			</a>
		</li> -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#package_collapse" aria-expanded="true" aria-controls="package_collapse">
			  <i class="fas fa-user"></i>
			  <span>Users</span>
			</a>
			<div id="package_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/buyer-list');?>">Buyers</a>
				<a class="collapse-item" href="<?= base_url('admin/freelancer-list');?>">Freelancer</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/manage_category');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Gigs Category</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gigs_collapse" aria-expanded="true" aria-controls="gigs_collapse">
			  <i class="fas fa-file-image"></i>
			  <span>Gigs</span>
			</a>
			<div id="gigs_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				
				<a class="collapse-item" href="<?= base_url('admin/create-gigs');?>">Create Gigs</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-gigs');?>">Manage Gigs</a>
			  </div>
			</div>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/payment-request');?>">
			  <i class="far fa-file-alt"></i>
			  <span>freelancer payment</span>
			</a>
		</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/supportTicket');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Message</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/Rejectedreview');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Rejected Review</span>
			</a>
		</li>
		<!--<li class="nav-item">-->
		<!--	<a class="nav-link" href="#">-->
		<!--	  <i class="far fa-file-alt"></i>-->
		<!--	  <span>Message</span>-->
		<!--	</a>-->
		<!--</li>-->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment_collapse" aria-expanded="true" aria-controls="payment_collapse">
			  <i class="fas fa-file-image"></i>
			  <span>Payment gateway</span>
			</a>
			<div id="payment_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				
				<a class="collapse-item" href="<?= base_url('admin/paypalSettings');?>">Paypal</a>
				<a class="collapse-item" href="#">Coinbase</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/notifications');?>">
			  <i class="far fa-file-alt"></i>
			  <span>Notification</span>
			</a>
		</li>
	
		<!--<li class="nav-item">-->
		<!--	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#new_collapse" aria-expanded="true" aria-controls="new_collapse">-->
		<!--	  <i class="fa fa-image"></i>-->
		<!--	  <span>News</span>-->
		<!--	</a>-->
		<!--	<div id="new_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">-->
		<!--	  <div class="bg-white py-2 collapse-inner rounded">-->
		<!--		<a class="collapse-item" href="<?= base_url('admin/add-news');?>">Add News</a>-->
		<!--		<a class="collapse-item" href="<?= base_url('admin/manage-news');?>">Manage News</a>-->
		<!--	  </div>-->
		<!--	</div>-->
		<!--</li>-->
		<!-- <li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#new_collapse" aria-expanded="true" aria-controls="new_collapse">
			  <i class="fa fa-image"></i>
			  <span>Product</span>
			</a>
			<div id="new_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/add-affiliate');?>">Add Product</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-affiliate');?>">Manage Product</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brands_collapse" aria-expanded="true" aria-controls="brands_collapse">
			  <i class="fa fa-tag"></i>
			  <span>Popular Brands</span>
			</a>
			<div id="brands_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/add-popular-brand');?>">Add Popular Brands</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-brand');?>">Manage Popular Brands</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#case_study" aria-expanded="true" aria-controls="case_study">
			  <i class="fa fa-search-plus"></i>
			  <span>Case Study</span>
			</a>
			<div id="case_study" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/add-case-study');?>">Add Case Study</a>
				<a class="collapse-item" href="<?= base_url('admin/case-study-category');?>">Add category</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-case-study');?>">Manage Case Study</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#portfolio_collapse" aria-expanded="true" aria-controls="portfolio_collapse">
			  <i class="far fa-images"></i>
			  <span>Portfolio</span>
			</a>
			<div id="portfolio_collapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/add-portfolio');?>">Add Portfolio</a>
				<a class="collapse-item" href="<?= base_url('admin/add-portfolio-category');?>">Add category</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-portfolio');?>">Manage portfolio</a>
			  </div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#testimonial_menu" aria-expanded="true" aria-controls="testimonial_menu">
			  <i class="fa fa-quote-left"></i>
			  <span>Testimonial</span>
			</a>
			<div id="testimonial_menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/add-testimonial');?>">Add Testimonial</a>
				<a class="collapse-item" href="<?= base_url('admin/manage-testimonial');?>">Manage Testimonial</a>
			  </div>
			</div>
		</li> -->
       <!-- Nav Item - Tables -->
		<!-- <li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/contact-enquiry');?>">
			  <i class="fas fa-phone-alt"></i>
			  <span>Contact Enquiry</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/career-enquiry');?>">
			  <i class="fas fa-user-cog"></i>
			  <span>Career Enquiry</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/package-enquiry');?>">
			  <i class="fas fa-dollar-sign"></i>
			  <span>Packages Enquiry</span>
			</a>
		</li> -->
		<!--<li class="nav-item">-->
		<!--	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">-->
		<!--	  <i class="fas fa-fw fa-folder"></i>-->
		<!--	  <span>Pages</span>-->
		<!--	</a>-->
		<!--	<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">-->
		<!--	  <div class="bg-white py-2 collapse-inner rounded">-->
		<!--		<h6 class="collapse-header">Login Screens:</h6>-->
		<!--		<a class="collapse-item" href="login.html">Login</a>-->
		<!--		<a class="collapse-item" href="register.html">Register</a>-->
		<!--		<a class="collapse-item" href="forgot-password.html">Forgot Password</a>-->
		<!--	  </div>-->
		<!--	</div>-->
		<!--</li>-->
		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           <!-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>-->
              <!-- Dropdown - Messages -->
             <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>-->
            <!-- Nav Item - Alerts -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
            <!--  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
            <!--    <i class="fas fa-bell fa-fw"></i>-->
                <!-- Counter - Alerts -->
            <!--    <span class="badge badge-danger badge-counter">3+</span>-->
            <!--  </a>-->
              <!-- Dropdown - Alerts -->
            <!--  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">-->
            <!--    <h6 class="dropdown-header">-->
            <!--      Alerts Center-->
            <!--    </h6>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="mr-3">-->
            <!--        <div class="icon-circle bg-primary">-->
            <!--          <i class="fas fa-file-alt text-white"></i>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="small text-gray-500">December 12, 2019</div>-->
            <!--        <span class="font-weight-bold">A new monthly report is ready to download!</span>-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="mr-3">-->
            <!--        <div class="icon-circle bg-success">-->
            <!--          <i class="fas fa-donate text-white"></i>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="small text-gray-500">December 7, 2019</div>-->
            <!--        $290.29 has been deposited into your account!-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="mr-3">-->
            <!--        <div class="icon-circle bg-warning">-->
            <!--          <i class="fas fa-exclamation-triangle text-white"></i>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="small text-gray-500">December 2, 2019</div>-->
            <!--        Spending Alert: We've noticed unusually high spending for your account.-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
            <!--  </div>-->
            <!--</li>-->
            <!-- Nav Item - Messages -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
            <!--  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
            <!--    <i class="fas fa-envelope fa-fw"></i>-->
                <!-- Counter - Messages -->
            <!--    <span class="badge badge-danger badge-counter">7</span>-->
            <!--  </a>-->
              <!-- Dropdown - Messages -->
            <!--  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">-->
            <!--    <h6 class="dropdown-header">-->
            <!--      Message Center-->
            <!--    </h6>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="dropdown-list-image mr-3">-->
            <!--        <img class="rounded-circle" src="assets/img/user_thumb.jpg" alt="">-->
            <!--        <div class="status-indicator bg-success"></div>-->
            <!--      </div>-->
            <!--      <div class="font-weight-bold">-->
            <!--        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>-->
            <!--        <div class="small text-gray-500">Emily Fowler · 58m</div>-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="dropdown-list-image mr-3">-->
            <!--        <img class="rounded-circle" src="assets/img/user_thumb2.jpg" alt="">-->
            <!--        <div class="status-indicator"></div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>-->
            <!--        <div class="small text-gray-500">Jae Chun · 1d</div>-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="dropdown-list-image mr-3">-->
            <!--        <img class="rounded-circle" src="assets/img/user_thumb.jpg" alt="">-->
            <!--        <div class="status-indicator bg-warning"></div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>-->
            <!--        <div class="small text-gray-500">Morgan Alvarez · 2d</div>-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item d-flex align-items-center" href="#">-->
            <!--      <div class="dropdown-list-image mr-3">-->
            <!--        <img class="rounded-circle" src="assets/img/user_thumb2.jpg" alt="">-->
            <!--        <div class="status-indicator bg-success"></div>-->
            <!--      </div>-->
            <!--      <div>-->
            <!--        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>-->
            <!--        <div class="small text-gray-500">Chicken the Dog · 2w</div>-->
            <!--      </div>-->
            <!--    </a>-->
            <!--    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>-->
            <!--  </div>-->
            <!--</li>-->
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name');?></span>
                <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/favicon.png');?>"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!--<a class="dropdown-item" href="<?= base_url('admin/my-profile');?>">-->
                <!--  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Profile-->
                <!--</a>-->
                <!--<a class="dropdown-item" href="<?= base_url('admin/change-password');?>">-->
                <!--  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Change Password-->
                <!--</a>-->
                <!--<a class="dropdown-item" href="#">-->
                <!--  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Activity Log-->
                <!--</a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->