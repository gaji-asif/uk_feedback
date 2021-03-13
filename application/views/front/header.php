<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
<title>gigs</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="MobileOptimized" content="320" />
<!--srart theme style -->
<link href="<?=base_url()?>assets/front/css/main.css" rel="stylesheet" type="text/css" />
<!-- end theme style -->
<!-- favicon icon -->
<link rel="shortcut icon" type="image/icon" href="<?=base_url()?>assets/front/images/favicon.png">
<!-- favicon icon -->
<style>
    .error{
        color:red;
    }
</style>
</head>
<!-- END HEAD -->
<!--body start-->
<body>
<!--  loader start -->
<!-- Header Start -->
<header class="main_header">
	<!-- Top header Start -->
	<?php   if($this->session->userdata('userid')==""){?>
	<div class="top_header">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-5 col-6">
					<div class="header_left">
						<span class="nav_toggle"><i></i><i></i><i></i></span>
						<div class="header_logo">
							<a href="<?=base_url()?>">
								<img src="<?=base_url()?>assets/front/images/logo.png" alt="Logo" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 desktop_view">
					<div class="header_center header_search_bar">
						<div class="search_bar_input">
							<form>
							  <input type="text" class="search_input" placeholder="Type to Search..">
							  <button type="submit" class="search_btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-7 col-6">
					<div class="header_right hdr_buttons">
						<span class="h_search_icon icon"><i class="fa fa-search"></i></span>
						<a href="<?=base_url()?>login" class="hdr_button green_button"><i class="fas fa-user-lock"></i><span class="text">Login</span></a>
						<a href="<?=base_url()?>signup" class="hdr_button black_button"><i class="fas fa-sign-in-alt"></i><span class="text">Signup</span></a>
					</div>
				</div>
			</div>
			<!-- Mobile search bar -->
			<div class="mobile_searchbar">
				<div class="search_bar_dv">
					<div class="search_bar_input">
						<form>
						  <input type="text" class="search_input" placeholder="Type to Search..">
						  <button type="submit" class="search_btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- Mobile search bar -->
		</div>
	</div>
	<!-- Top header End -->
	<?php } else{ ?>
	<!-- after login header Start -->
	<div class="top_header after_login_header">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-5 col-6">
					<div class="header_left">
						<span class="nav_toggle"><i></i><i></i><i></i></span>
						<div class="header_logo">
							<a href="<?=base_url()?>">
								<img src="<?=base_url()?>assets/front/images/logo.png" alt="Logo" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 desktop_view">
					<div class="header_center header_search_bar">
						<div class="search_bar_input">
							<form>
							  <input type="text" class="search_input" placeholder="Type to Search..">
							  <button type="submit" class="search_btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-7 col-6">
					<div class="header_right">
						<span class="h_search_icon icon"><i class="fa fa-search"></i></span>
					    <div class="userdropdown">
					       <div class="dropdown_menus">
					           <div class="usr_img"><img src="<?=base_url()?>assets/front/images/avatar/avatar_img.jpg" alt="User" class="img-fluid" /></div>
								<div class="usr_name">
									 <div class="user_name">Hello <?=$this->session->userdata('username')?><i class="fas fa-chevron-down"></i></div>
									 <span class="user_amount">0.00 USD</span>
								</div>
				           </div>
				        	<ul class="userdropdown_list">
				        	    <li><a href="#">my gigs</a></li>
				        	    <li><a href="#">profile</a></li>
				        	    <li><a href="<?=base_url()?>front/logout">Logout</a></li>
				        	</ul>
					    </div>
						<a href="#" class="withdraw_btn"><i class="fas fa-money-check-alt"></i><span class="txt">Withdraw</span></a>
					</div>
				</div>
			</div>
			<!-- Mobile search bar -->
			<div class="mobile_searchbar">
				<div class="search_bar_dv">
					<div class="search_bar_input">
						<form>
						  <input type="text" class="search_input" placeholder="Type to Search..">
						  <button type="submit" class="search_btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- Mobile search bar -->
		</div>
	</div>
	<?php } ?>
	<!-- after login header End -->
	<!-- Navigatoin header Start -->
	<div class="navigation_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12 navigation_menu_wrap">
					<div class="navigation_menu">
						<ul>
							<li><a href="<?=base_url()?>">Home</a></li>
							<?php   if($this->session->userdata('userid')){?>
							<li><a href="#">Account</a>
								<ul class="sub_menu">
									<li><a href="#">Edit Profile</a></li>
									<li><a href="#">My Payments</a></li>
									<li><a href="#">My Referrals</a></li>
									<li><a href="#">My Ads</a></li>
									<li><a href="<?=base_url()?>front/logout">Logout</a></li>
								</ul>
							</li>
							<?php } ?>
							<li><a href="#">Buy</a>
								<ul class="sub_menu">
									<li><a href="#">Buy Offer</a></li>
									<li><a href="#">My Ads</a></li>
								</ul>
							</li>
							<li><a href="#">Support</a>
								<ul class="sub_menu">
									<li><a href="#">FAqs</a></li>
                    	          <?php   if($this->session->userdata('userid')){?>
                    	       	<li><a href="<?=base_url()?>create-ticket">Create New Tickets</a></li>
	                                <li><a href="<?=base_url()?>support-ticket">Support Tickets</a></li>
	                                <?php } else {?>
	                                   <li><a href="<?=base_url()?>login">Support Tickets</a></li>
	                                   	<li><a href="<?=base_url()?>login">Create New Tickets</a></li>
	                                   <?php } ?>
								
									<li><a href="#">About PRO</a></li>
								</ul>
							</li>
						<?php	 if($this->session->userdata('userid')){?>
							<li><a href="<?=base_url()?>affiliates">Become an Affiliate</a></li>
							<?php } ?>
							<li><a href="#">Settings</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Navigatoin header End -->
</header>
<!-- Header End -->