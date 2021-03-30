<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
		//load database libray manually
		date_default_timezone_set('Asia/Kolkata');
		$this->load->database();
		$this->load->library("form_validation");
		$this->load->library('email');
		$this->load->library('toastr');
		// load model
		$this->load->model('Admin_Model');
		$this->load->model('Common_model');
		$this->controller_method = &get_instance();

		//$this->load->helper(array(‘image_helper’));
		ini_set('display_errors', 1);
	}



	public function index()
	{
		if ($this->session->userdata('user_id')) {
			redirect('admin/dashboard');
		} else {
			if ($_POST) {
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$data['check_login'] = $this->Admin_Model->adminLogin($email, $pass);
			// $data['check_login'] = $this->Admin_Model->adminLogin('admin@gmail.com', '123456');
			if ($data['check_login'] != false) {
				$this->session->set_flashdata('success', 'Succefully login.');
				$this->session->set_userdata(array("name" => $data['check_login']->name, "user_id" => $data['check_login']->id));
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Credential.');
			}
			}
			$this->load->view('admin/login');
		}
	}

	/* Show dashboard after user logged in */

	public function dashboard()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Dashboard | Admin Panel';
			$this->load->view('admin/header', $data);
			$wheree = "id!=''";
			$wherefreelancer = "user_type='1'";
			$wherebuyer = "user_type='2'";
			$wheregigs = "status='1'";
			$wherecat = "status='1'";
			$freelancer = $this->Admin_Model->getAllRecordsByWhere('users', 'DESC', $wherefreelancer, 'user_id');
			$data['freelancer'] = count($freelancer);
			$buyer = $this->Admin_Model->getAllRecordsByWhere('users', 'DESC', $wherebuyer, 'user_id');
			$data['buyer'] = count($buyer);
			$gigs = $this->Admin_Model->getAllRecordsByWhere('gigs', 'DESC', $wheregigs, 'g_id');
			$data['gigs'] = count($gigs);
			$category = $this->Admin_Model->getAllRecordsByWhere('categories', 'DESC', $wherecat, 'cat_id');
			$data['category'] = count($category);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/index', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please Login');
			redirect('admin');
		}
	}


	public function changeUserStatus()
	{


		$data['status'] = $this->input->post('status');
		$user_id = $this->input->post('user_id');
		$usertype = $this->input->post('usertype');


		$where = array('user_id' => $user_id);
		$update = $this->Common_model->update_detail('users', $data, $where);
		if ($update) {
			$this->session->set_flashdata('success', 'category updated successfully');
			if ($usertype == 2) {
				redirect('admin/buyer-list');
			} else {
				redirect('admin/freelancer-list');
			}
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
		}
		redirect('admin/manage_category');
	}

	public function changePaymentStatus()
	{


		$data['status'] = 1;
		$id = $this->input->post('id');
		$withdrawal = $this->input->post('withdrawal_amount');
		$userid = $this->input->post('userid');

		$wallet = $this->Common_model->fetch_wallet_by_id($userid);
		$data['available_amount'] = $wallet - $withdrawal;

		$where = array('id' => $id);
		$update = $this->Common_model->update_detail('payment_request', $data, $where);
		if ($update) {
			$data1['wallet'] = $wallet - $withdrawal;
			$where1 = array('user_id' => $userid);
			$this->Common_model->update_detail('users', $data1, $where1);
			$title = "payment request completed";
			$body = "Your payment request completed.$" . $withdrawal . " successfully added in your paypal account";


			$this->addNotification($title, $body, $userid);

			$this->session->set_flashdata('success', 'status changed successfully');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
		}
		redirect('admin/payment-request');
	}

	public function rejectedReview()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Rejected Review | Admin Panel';
			$wheree = "payment_status=2";
			$data['reviews'] = $this->Admin_Model->getAllRecordsByWhere('buyer_review_content', 'DESC', $wheree, 'id');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/rejectedReview', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function addNotification($title, $body, $userid)
	{
		$data1['title'] = $title;
		$data1['body'] = $body;
		$data1['date'] = date('Y-m-d');
		$data1['created_on'] = date('Y-m-d H:i:s');
		$data1['user_id'] = $userid;


		$this->Common_model->insert_detail($data1, 'notifications');
	}

	/* logout function */

	public function logout()
	{
		//removing session 
		$this->session->sess_destroy();
		redirect('admin');
	}

	/* show package list */

	public function buyer_list()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Buyer | Admin Panel';
			$wheree = "user_type=2";
			$data['buyers'] = $this->Admin_Model->getAllRecordsByWhere('users', 'DESC', $wheree, 'user_id');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/buyer_list', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function manage_category()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Category | Admin Panel';
			$array = array('level' => 1, 'is_deleted' => 0);
			$data['main_category'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'categories', 'cat_id', 'ASC');
			$array1 = array('level' => 2, 'is_deleted' => 0);
			$data['sub_category'] = $this->Common_model->fetch_multiple_row_bywhere($array1, 'categories', 'cat_id', 'ASC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/gigs_category', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function add_category()
	{

		$data['cat_name'] = $this->input->post('cat_name');
		$data['parent_id'] = $this->input->post('parent_id');

		$data['level'] = $this->input->post('level');

		$data['cat_image'] = "";

		$insert = $this->Common_model->insert_detail($data, 'categories');
		if ($insert) {
			$this->session->set_flashdata('success', 'category added successfully.');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}

		redirect('admin/manage_category');
	}

	public function edit_main_category()
	{


		$data['cat_name'] = $this->input->post('cat_name');
		$cat_id = $this->input->post('cat_id');


		$where = array('cat_id' => $cat_id);
		$update = $this->Common_model->update_detail('categories', $data, $where);
		if ($update) {
			$this->session->set_flashdata('success', 'category updated successfully');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
		}
		redirect('admin/manage_category');
	}

	public function edit_sub_category()
	{
		$data['parent_id'] = $this->input->post('parent_id');
		$data['cat_name'] = $this->input->post('cat_name');
		$cat_id = $this->input->post('cat_id');
		$where = array('cat_id' => $cat_id);
		$update = $this->Common_model->update_detail('categories', $data, $where);
		if ($update) {
			$this->session->set_flashdata('success', 'sub category updated successfully');
		} else {
			$this->session->set_flashdata('error_msg', 'Something went wrong');
		}
		redirect('admin/manage_category');
	}
	public function freelancer_list()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Freelancers | Admin Panel';
			$wheree = "user_type=1";
			$data['freelancer'] = $this->Admin_Model->getAllRecordsByWhere('users', 'DESC', $wheree, 'user_id');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/freelancer_list', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function deletecat()
	{
		$cat_id = $this->input->post('cat_id');
		$data['is_deleted'] = 1;
		$where = array('cat_id' => $cat_id);
		$delete = $this->Common_model->update_detail('categories', $data, $where);
		if ($delete) {
			$this->session->set_flashdata('success', 'Category deleted successfully.');
			redirect('admin/manage_category');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/manage_category');
		}
	}

	public function deletedetail()
	{
		$id = $this->input->post('detail_id');
		$data['is_deleted'] = 1;
		$where = array('g_id' => $id);
		$delete = $this->Common_model->update_detail('gigs', $data, $where);
		if ($delete) {
			$this->session->set_flashdata('success', 'gigs deleted successfully.');
			redirect('admin/manage_gigs');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/manage_gigs');
		}
	}


	public function deleteNotification()
	{
		$id = $this->input->post('detail_id');
		$delete = $this->Common_model->delete_detail('notifications', $id, 'id');
		if ($delete) {
			$this->session->set_flashdata('success', 'notification deleted successfully.');
			redirect('admin/notifications');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/notifications');
		}
	}

	public function manage_gigs()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$array = array('is_deleted' => 0);
			$data['gigs'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'gigs', 'g_id', 'DESC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_gigs', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function supportTicket()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$data1['ticket'] = $this->Common_model->fetch_multiple_row('tickets', 't_id', 'DESC');
			$this->load->view('admin/supportTicket', $data1);

			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function ticketReply()
	{
		$status = $this->input->post('status');
		$reply = $this->input->post('reply');
		$updated_at = date('Y-m-d H:i:s');
		$t_id = $this->input->post('t_id');
		$where_up = "t_id=" . $t_id;
		$insert_ary = array("status" => $status, "reply" => $reply, "updated_at" => $updated_at);
		$insert_cat = $this->Admin_Model->updateRecordByWhere('tickets', $insert_ary, $where_up);
		if ($insert_cat == true) {
			$this->session->set_flashdata('success', 'reply successfully sent');
			redirect('admin/supportTicket');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/supportTicket');
		}
	}

	public function create_gigs()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$array = array('level' => 1, 'is_deleted' => 0);
			$data['main_category'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'categories', 'cat_id', 'ASC');
			if ($_POST) {

				$data1['title'] = $this->input->post('title');
				$data1['price'] = $this->input->post('price');
				$data1['category_id'] = $this->input->post('category_id');
				// $data1['subcat_id'] = $this->input->post('subcat_id');
				$data1['delivery_days'] = $this->input->post('delivery_days');
				$data1['no_of_reviews'] = $this->input->post('no_of_reviews');
				$data1['details'] = $this->input->post('details');
				$data1['tags'] = $this->input->post('tags');
				$data1['created_date'] = date('Y-m-d');
				$data1['created_on'] = date('Y-m-d H:i:s');
				$data1['type'] = $this->input->post('type');

				if ($_FILES['cover_img']['name'] != "") {
					$target1 = "uploads/Gigs/" . basename($_FILES['cover_img']['name']);
					move_uploaded_file($_FILES['cover_img']['tmp_name'], $target1);
					$data1['cover_img'] = basename($_FILES['cover_img']['name']);
				} else {
					$data1['cover_img'] = "";
				}

				$insert = $this->Common_model->insert_detail($data1, 'gigs');
				if ($insert) {
					$titlee = $this->input->post('titlee');
					$pricee = $this->input->post('pricee');
					$days = $this->input->post('days');
					if (sizeof($titlee) != 0) {
						foreach ($titlee as $index => $t1) {
							if ($t1 != "") {
								$data2['g_id'] = $insert;
								$data2['title'] = $titlee[$index];
								$data2['price'] = $pricee[$index];
								$data2['days'] = $days[$index];
								$data2['created_on'] = date('Y-m-d H:i:s');
								$insert1 = $this->Common_model->insert_detail($data2, 'gigs_addons');
							}
						}
					}



					foreach ($_FILES['gigs_img']['name'] as $key => $val) {

						$filename1 = $_FILES['gigs_img']['name'][$key];

						move_uploaded_file($_FILES["gigs_img"]["tmp_name"][$key], "./uploads/Gigs/" . $filename1);
						$data5['img'] = $_FILES['gigs_img']['name'][$key];
						$data5['g_id'] = $insert;

						$this->Common_model->insert_detail($data5, 'gigs_img');
					}



					$this->session->set_flashdata('success', 'Gigs added successfully.');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/create_gigs', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function removeaddons()
	{
		$id = $this->uri->segment(3);

		$g_id = $this->uri->segment(4);

		$delete = $this->Admin_Model->deleteByNoImageId("gigs_addons", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'deleted successfully.');
			redirect('admin/editGigs/' . $g_id);
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/editGigs/' . $g_id);
		}
	}

	public function deleteGigsimg($id)
	{
		$id = $this->uri->segment(3);

		$g_id = $this->uri->segment(4);

		$delete = $this->Admin_Model->deleteByNoImageId("gigs_img", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Gigs img delete successfully.');
			redirect('admin/editGigs/' . $g_id);
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			redirect('admin/editGigs/' . $g_id);
		}
	}

	public function editGigs($g_id)
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$array = array('level' => 1, 'is_deleted' => 0);
			$data['main_category'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'categories', 'cat_id', 'ASC');
			$array3 = array('g_id' => $g_id);
			$data['g'] = $this->Common_model->fetch_single_row($array3, 'gigs');
			$data['addons'] = $this->Common_model->fetch_multiple_row_bywheree($array3, 'gigs_addons', 'id', 'ASC');
			$data['gimg'] = $this->Common_model->fetch_multiple_row_bywheree($array3, 'gigs_img', 'id', 'ASC');
			if ($_POST) {

				$data1['title'] = $this->input->post('title');
				$data1['type'] = $this->input->post('type');
				$data1['price'] = $this->input->post('price');
				$data1['category_id'] = $this->input->post('category_id');
				// $data1['subcat_id'] = $this->input->post('subcat_id');
				$data1['delivery_days'] = $this->input->post('delivery_days');
				$data1['details'] = $this->input->post('details');
				$data1['tags'] = $this->input->post('tags');
				$data1['no_of_reviews'] = $this->input->post('no_of_reviews');
				$data1['created_date'] = date('Y-m-d');
				$data1['created_on'] = date('Y-m-d H:i:s');
				$old_img = $this->input->post('old_img');
				if ($_FILES['cover_img']['name'] != "") {
					$target1 = "uploads/Gigs/" . basename($_FILES['cover_img']['name']);
					move_uploaded_file($_FILES['cover_img']['tmp_name'], $target1);
					$data1['cover_img'] = basename($_FILES['cover_img']['name']);
				} else {
					$data1['cover_img'] = $old_img;
				}
				$where = "g_id=" . $g_id;
				$insert = $this->Common_model->update_detail('gigs', $data1, $where);
				if ($insert) {
					$titlee = $this->input->post('titlee');
					$pricee = $this->input->post('pricee');
					$days = $this->input->post('days');

					if (sizeof($titlee) != 0) {

						foreach ($titlee as $index => $t1) {
							if ($t1 != "") {
								$data2['g_id'] = $g_id;
								$data2['title'] = $titlee[$index];
								$data2['price'] = $pricee[$index];
								$data2['days'] = $days[$index];
								$data2['created_on'] = date('Y-m-d H:i:s');
								$insert1 = $this->Common_model->insert_detail($data2, 'gigs_addons');
							}
						}
					}




					foreach ($_FILES['gigs_img']['name'] as $key => $val) {
						if ($_FILES['gigs_img']['name'][$key] != "") {
							$filename1 = $_FILES['gigs_img']['name'][$key];

							move_uploaded_file($_FILES["gigs_img"]["tmp_name"][$key], "./uploads/Gigs/" . $filename1);
							$data5['img'] = $_FILES['gigs_img']['name'][$key];
							$data5['g_id'] = $g_id;

							$this->Common_model->insert_detail($data5, 'gigs_img');
						}
					}



					$this->session->set_flashdata('success', 'Gigs updated successfully.');
					redirect('admin/editGigs/' . $g_id);
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
					redirect('admin/editGigs/' . $g_id);
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/editGigs', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function gigsDetails($id)
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$array = array('g_id' => $id);
			$data['gigs'] = $this->Common_model->fetch_single_row($array, 'gigs');
			$data['gimg'] = $this->Common_model->fetch_multiple_row_bywheree($array, 'gigs_img', 'id', 'DESC');
			$data['addons'] = $this->Common_model->fetch_multiple_row_bywheree($array, 'gigs_addons', 'id', 'DESC');
			$this->load->view('admin/gigsDetails', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function notifications()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Notifications | Admin Panel';
			$array1 = array('user_id' => 0);
			$data['notification'] = $this->Common_model->fetch_multiple_row_bywheree($array1, 'notifications', 'id', 'DESC');

			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/notifications', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function fetch_sub_cat()
	{
		$subcat = $this->input->post('main_cat');
		$array1 = array('level' => 2, 'parent_id' => $subcat, 'is_deleted' => 0);
		$detail = $this->Common_model->fetch_multiple_row_bywhere($array1, 'categories', 'cat_id', 'ASC');
		echo json_encode($detail);
	}
	public function addGigsCategory()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs Category | Admin Panel';
			$this->load->view('admin/header', $data);
			$array = array('level' => 1);
			$data['main_category'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'categories', 'cat_id');
			$array1 = array('level' => 2);
			$data['sub_category'] = $this->Common_model->fetch_multiple_row_bywhere($array1, 'categories', 'cat_id');
			$array2 = array('level' => 3);

			if ($_POST) {

				$name = $this->input->post('category');
				$insert_ary = array("category_name" => $name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('categories', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'category added successfully.');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/gigs-category', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function packageEnquiryView()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Packages Enquiry | Admin Panel';
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getpackages($id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/package_enquiry_view', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function paymentRequest()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Payment Request | Admin Panel';
			$array = array('user_type' => 1);
			$data['request'] = $this->Common_model->fetch_multiple_row_bywhere($array, 'payment_request', 'id', 'DESC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/payment-request', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* customer management */

	public function customerManagement()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Customer Management | Admin Panel';
			$data['contact_us'] = $this->Admin_Model->getAllRecords("contact_us", 'DESC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/customer_management', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}




	/* add blog */

	public function addBlog()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Blog | Admin Panel';
			$this->load->view('admin/header', $data);
			$result['blog_cat'] = $this->Admin_Model->getAllRecords('blog_category', 'DESC');
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/blogs/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$blog_name = $this->input->post('blog_name');
				$category_name = $this->input->post('category_name');
				$desc = $this->input->post('desc');
				$insert_ary = array("blog_name" => $blog_name, "description" => $desc, "image" => $picture, "category_id" => $category_name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('blogs', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Blog added successfully.');
					redirect('admin/manage-blog');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_blog', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* add blog category */

	public function addBlogCategory()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Blog Category | Admin Panel';
			$result['blog_cat'] = $this->Admin_Model->getAllRecords('blog_category', 'DESC');
			$this->load->view('admin/header', $data);
			if ($_POST) {
				$name = $this->input->post('category');
				$insert_ary = array("category_name" => $name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('blog_category', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Blog category added successfully.');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/blog-category', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show blog list */

	public function manageBlogs()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Blog | Admin Panel';
			$data['blogs'] = $this->Admin_Model->getAllRecords("blogs", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_blog', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	/* show blog list */

	public function manageBrands()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Brand | Admin Panel';
			$data['brand'] = $this->Admin_Model->getAllRecords("brands", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_popular_brands', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function addBrands()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Brand | Admin Panel';
			$this->load->view('admin/header', $data);
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/brands/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$desc = $this->input->post('desc');
				$insert_ary = array("description" => $desc, "image" => $picture, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('brands', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Brand added successfully.');
					redirect('admin/manage-brand');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_popular_brands');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function deleteClientLogo()
	{
		$id = $this->input->get('id');
		$get_img_name = $this->Admin_Model->getRecordById("client_logo", 'id', $id);
		$img = $get_img_name->logo;
		$delete = $this->Admin_Model->deleteById("client_logo", $img, $id);
		if ($delete == true) {
			echo 1;
		} else {
			echo 0;
		}
	}




	public function addTestimonial()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Testimonial | Admin Panel';
			$this->load->view('admin/header', $data);
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/testimonial/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$client_name = $this->input->post('client_name');
				$designation = $this->input->post('designation');
				$desc = $this->input->post('desc');
				$insert_ary = array("client_name" => $client_name, "description" => $desc, "image" => $picture, "designation" => $designation, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('testimonial', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Testimonial added successfully.');
					redirect('admin/manage-testimonial');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_testimonial');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function manageTestimonial()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Testimonial | Admin Panel';
			$result['data'] = $this->Admin_Model->getAllRecords('testimonial', 'desc');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_testimonial', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function viewTestimonial()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Testimonial | Admin Panel';
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('testimonial', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_testimonial', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function editTestimonial()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Testimonial | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('testimonial', 'id', $id);
			if ($_POST) {

				$client_name = $this->input->post('client_name');
				$designation = $this->input->post('designation');
				$desc = $this->input->post('desc');
				$idd = $this->input->post('id');
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/testimonial/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("client_name" => $client_name, "description" => $desc, "image" => $picture, "designation" => $designation);
				} else {
					$insert_ary = array("client_name" => $client_name, "description" => $desc, "designation" => $designation);
				}


				$where_up = "id=" . $idd;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('testimonial', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Testimonial update successfully.');
					redirect('admin/manage-testimonial');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_testimonial', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function viewBlogs()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Blogs | Admin Panel';
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getRecordById('blogs', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_blog', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* edit blog category */

	public function editBlogCategory()
	{

		if ($_POST) {
			$name = $this->input->post('cat');
			$id = $this->input->post('id');
			$where_up = "id=" . $id;
			$insert_ary = array("category_name" => $name);
			$insert_cat = $this->Admin_Model->updateRecordByWhere('blog_category', $insert_ary, $where_up);
			if ($insert_cat == true) {
				$this->session->set_flashdata('success', 'Blog category update successfully.');
				echo 1;
			} else {
				$this->session->set_flashdata('error', 'Something went wrong.');
				echo 0;
			}
		}
	}


	public function editBlog()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Blog | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['blog_cat'] = $this->Admin_Model->getAllRecords('blog_category', 'DESC');
			$result['blogs'] = $this->Admin_Model->getRecordById('blogs', 'id', $id);
			if ($_POST) {
				$blog_name = $this->input->post('blog_name');
				$category_name = $this->input->post('category_name');
				$desc = $this->input->post('desc');
				$id_up = $this->input->post('id');

				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/blogs/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("blog_name" => $blog_name, "description" => $desc, "image" => $picture, "category_id" => $category_name);
				} else {
					$insert_ary = array("blog_name" => $blog_name, "description" => $desc, "category_id" => $category_name);
				}

				$where_up = "id=" . $id_up;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('blogs', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Blog update successfully.');
					redirect('admin/manage-blog');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_blog', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function paypalSettings()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Package | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$id = 1;

			$result['s'] = $this->Admin_Model->getRecordById('payment_settings', 'id', $id);
			if ($_POST) {
				$paypalemail = $this->input->post('paypalemail');
				$security_key = $this->input->post('security_key');
				$code = $this->input->post('code');

				$idd = $this->input->post('id');
				$where_up = "id=" . $idd;
				$insert_ary = array("email" => $paypalemail, "security_key" => $security_key, "code" => $code);
				$insert_cat = $this->Admin_Model->updateRecordByWhere('payment_settings', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'settings update successfully.');
					redirect('admin/paypalSettings');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/paypalSettings', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	/* add blog */

	public function addCaseStudy()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Case Study | Admin Panel';
			$this->load->view('admin/header', $data);
			$result['case_cat'] = $this->Admin_Model->getAllRecords('case_study_category', 'DESC');
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/case_study/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$project = $this->input->post('project');
				$category_name = $this->input->post('category_name');
				$desc = $this->input->post('desc');
				$insert_ary = array("project" => $project, "description" => $desc, "image" => $picture, "category_id" => $category_name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('case_study', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Case study added successfully.');
					redirect('admin/manage-case-study');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_casestudy', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* add blog category */

	public function addCaseStudyCategory()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Case Study Category | Admin Panel';
			$result['case_cat'] = $this->Admin_Model->getAllRecords('case_study_category', 'DESC');
			$this->load->view('admin/header', $data);

			$this->load->view('admin/sidebar');
			$this->load->view('admin/case-category', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function addCaseCategory()
	{
		if ($_POST) {
			$name = $this->input->post('category');
			$insert_ary = array("category_name" => $name, "created_date" => date('Y-m-d H:i:s'));
			$insert_cat = $this->Admin_Model->insertCommon('case_study_category', $insert_ary);
			if ($insert_cat) {
				$this->session->set_flashdata('success', 'Case study category added successfully.');
				redirect('admin/case-study-category');
			} else {
				$this->session->set_flashdata('error', 'Something went wrong.');
				redirect('admin/case-study-category');
			}
		}
	}

	/* show blog list */

	public function manageCaseStudy()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Case Study | Admin Panel';
			$data['case_study'] = $this->Admin_Model->getAllRecords("case_study", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_casestudy', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show blog list */

	public function managePackages()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Package | Admin Panel';
			$data['package'] = $this->Admin_Model->getAllRecords("packages", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_package', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show blog list */

	public function addPackages()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Package | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			if ($_POST) {
				$plan = $this->input->post('plan');
				$type = $this->input->post('type');
				$amt = $this->input->post('amt');
				$time = $this->input->post('time');
				$insert_ary = array("plan" => $plan, "type" => $type, "amt" => $amt, "time" => $time, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('packages', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Package added successfully.');
					redirect('admin/manage-package');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/add_package');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function editPackages()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Package | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getRecordById('packages', 'id', $id);
			if ($_POST) {
				$plan = $this->input->post('plan');
				$type = $this->input->post('type');
				$amt = $this->input->post('amt');
				$time = $this->input->post('time');
				$idd = $this->input->post('id');
				$where_up = "id=" . $idd;
				$insert_ary = array("plan" => $plan, "type" => $type, "amt" => $amt, "time" => $time);
				$insert_cat = $this->Admin_Model->updateRecordByWhere('packages', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Package update successfully.');
					redirect('admin/manage-package');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/edit_package', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	/* show blog list */

	public function managePortfolio()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Package | Admin Panel';
			$data['portfolio'] = $this->Admin_Model->getAllRecords("portfolio", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_portfolio', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* add portfolio */

	public function addPortfolio()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Portfolio | Admin Panel';
			$this->load->view('admin/header', $data);
			$result['portfolio_category'] = $this->Admin_Model->getAllRecords('portfolio_category', 'DESC');

			if ($_POST) {


				if ($this->input->post('port_typename') == "ppt") {
					//$userfile = $_FILES['userfile']['name'];

					$files = $_FILES;
					$count = count($_FILES['userfile']['name']);
					$user_id = $this->input->post('user_id');
					for ($i = 0; $i < $count; $i++) {
						$_FILES['userfile']['name'] = time() . $files['userfile']['name'][$i];
						$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
						$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
						$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
						$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
						$config['upload_path'] = './uploads/portfolio/ppt/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '0';
						$config['remove_spaces'] = true;
						$config['overwrite'] = false;
						$config['max_width'] = '';
						$config['max_height'] = '';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload();

						$fileName = $_FILES['userfile']['name'];
						$getfilename =  str_replace(' ', '_', $fileName);
						$images[] = $fileName;
					}
					$names = implode(',', $images);
					$picture = 'null';
					$pdfimg = 'null';
				} elseif ($this->input->post('port_typename') == "image") {

					$files = $_FILES;
					$count = count($_FILES['userfile']['name']);
					$user_id = $this->input->post('user_id');
					for ($i = 0; $i < $count; $i++) {
						$_FILES['userfile']['name'] = time() . $files['userfile']['name'][$i];
						$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
						$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
						$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
						$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
						$config['upload_path'] = './uploads/portfolio/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '0';
						$config['remove_spaces'] = true;
						$config['overwrite'] = false;
						$config['max_width'] = '';
						$config['max_height'] = '';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload();

						$fileName = $_FILES['userfile']['name'];
						$getfilename =  str_replace(' ', '_', $fileName);

						$images[] = $getfilename;
					}
					$picture = implode(',', $images);
					$names = 'null';
					$pdfimg = 'null';
				} elseif ($this->input->post('port_typename') == "pdf") {

					$user_id = $this->input->post('user_id');


					$config['upload_path'] = './uploads/portfolio/pdf/';
					$config['allowed_types'] = 'jpg|png|jpeg|gif|pdf';
					$config['max_size'] = '10000';
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload', $config);

					if ($this->upload->do_upload('pdf_file')) {
						$picData  =	$this->upload->data();
						$fileName = $picData['file_name'];
						$pdf_file = "uploads/portfolio/pdf/" . $fileName;
						$image = new imagick();
						$image->setResolution(80, 80);
						$image->readImage($pdf_file);
						$image->setImageFormat('jpg');

						// Set all other properties

						$pages = $image->getNumberImages();


						if ($pages) {
							foreach ($image as $index => $pdf_image) {
								$uniquesavename = uniqid(rand());
								$im = $pdf_image->writeImage('uploads/portfolio/pdf/' . $index . $uniquesavename . 'image_file.jpg');
								$images[] = $index . $uniquesavename . 'image_file.jpg';
							}
							$pdfimg = implode(',', $images);
							$picture = 'null';
							$names = 'null';
						} else {
							$pdfimg = '';
						}
					} else {
						$error = array('error' =>  $this->upload->display_errors());
						print_r($error);
					}
				}
				/* 
			
			
	    /* neha work  */


				$project = $this->input->post('project');
				$ptype = $this->input->post('port_typename');
				$category_name = $this->input->post('category_name');
				$insert_ary = array("project" => $project, "image" => $picture, "pdf" => $pdfimg, "ppt" => $names, "port_type" => $ptype, "category_id" => $category_name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('portfolio', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Portfolio added successfully.');
					redirect('admin/manage-portfolio');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_portfolio', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* add blog category */

	public function addPortfolioCategory()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Portfolio Category | Admin Panel';
			$result['portfolio_cat'] = $this->Admin_Model->getAllRecords('portfolio_category', 'DESC');
			$this->load->view('admin/header', $data);
			if ($_POST) {
				$name = $this->input->post('category');
				$insert_ary = array("category_name" => $name, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('portfolio_category', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Portfolio category added successfully.');
					redirect('admin/add-portfolio-category');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/portfolio-category', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* add news */

	public function addNews()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add News | Admin Panel';
			$this->load->view('admin/header', $data);
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/news/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$title = $this->input->post('title');
				$desc = $this->input->post('desc');
				$link = $this->input->post('link');
				$insert_ary = array("title" => $title, "description" => $desc, "image" => $picture, "link" => $link, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('news', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'News added successfully.');
					redirect('admin/manage-news');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_news');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show news list */

	public function manageNews()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage News | Admin Panel';
			$data['news'] = $this->Admin_Model->getAllRecords("news", 'DESC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_news', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show blog list */

	public function contactEnquiry()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Contact Enquiry | Admin Panel';
			$data['contact'] = $this->Admin_Model->getAllRecords("contact_enquiry", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/contact_enquiry', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show blog list */

	public function careerEnquiry()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Career Enquiry | Admin Panel';
			$data['contact'] = $this->Admin_Model->getAllRecords("career_enquiry", 'DESC');
			$data['Eobj'] = $this->Admin_Model;
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/career_enquiry', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function viewBrand()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Brands | Admin Panel';
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('brands', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_brands', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function editBrand()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Brand | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('brands', 'id', $id);
			if ($_POST) {
				$desc = $this->input->post('desc');
				$idd = $this->input->post('id');
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/brands/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$insert_ary = array("description" => $desc, "image" => $picture);
					}
				} else {
					$insert_ary = array("description" => $desc);
				}
				$where_up = "id=" . $idd;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('brands', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Brand update successfully.');
					redirect('admin/manage-brand');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_brand', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}


	public function viewNews()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View News | Admin Panel';
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('news', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_news', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* edit news */

	public function editNews()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit News | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('news', 'id', $id);
			if ($_POST) {
				$title = $this->input->post('title');
				$desc = $this->input->post('desc');
				$link = $this->input->post('link');
				$idd = $this->input->post('id');
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/news/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("title" => $title, "description" => $desc, "image" => $picture, "link" => $link);
				} else {
					$insert_ary = array("title" => $title, "description" => $desc, "link" => $link);
				}

				$where_up = "id=" . $idd;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('news', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'News update successfully.');
					redirect('admin/manage-news');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_news', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function forgetPassword()
	{
		if ($_POST) {
			$email = $this->input->post('email');
			$check = $this->Admin_Model->userForgetPassword($email);
			if ($check == false) {
				$this->session->set_flashdata('error', 'Your mail is not registered with us');
			} else {
				$url = base_url() . 'admin/reset-password/' . $check[0] . '/' . $check[1];
				$link = $url;
				$message = '';
				$message .= 'A password reset has been requested for this email account';
				"\r\n";
				$message .= 'Please click: ' . $link;
				$subject = 'Forget Password';
				$from_email = 'contact@infocrest.in';
				$to_email = $email;
				//Load email library

				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from($from_email);
				$this->email->to($to_email);
				$this->email->subject($subject);
				$this->email->message($message);

				//Send mail
				if ($this->email->send()) {

					$this->session->set_flashdata('success', 'A password reset has been requested for this email account');
					redirect('admin');
				}
			}
		}
		$this->load->view('admin/forgot-password');
	}

	/* reset password function */

	public function resetPassword()
	{
		$token = $this->uri->segment(3);
		$id = base64_decode($this->uri->segment(4));
		$check = $this->Admin_Model->checkToken($token, $id);
		if ($check == false) {
			$this->session->set_flashdata('error', 'Invalid Token');
			//$data['page_title'] = 'Reset Password';
			$this->load->view('admin/reset_password');
			return;
		}


		if ($_POST) {
			$new_password = $this->input->post('new_password');
			$reset = $this->Admin_Model->userResetPassword($token, $new_password);
			if ($reset == false) {
				$this->session->set_flashdata('error', 'Old Password Dosent Match');
				return;
			} else {
				$this->session->set_flashdata('success', 'Your Password Update Successfully');
				redirect('admin');
			}
		} else {
			$this->load->view('admin/reset_password');
		}
	}

	/* edit case category */

	public function editCaseStudyCategory()
	{
		if ($_POST) {
			$name = $this->input->post('cat');
			$id = $this->input->post('id');
			$insert_ary = array("category_name" => $name);
			$where = "id=" . $id;
			$insert_cat = $this->Admin_Model->updateRecordByWhere('case_study_category', $insert_ary, $where);
			if ($insert_cat == true) {
				$this->session->set_flashdata('success', 'Case study category update successfully.');
				echo 1;
			} else {
				echo 0;
			}
		}
	}

	public function editCaseStudy()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Case Study | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('case_study', 'id', $id);
			$result['case_cat'] = $this->Admin_Model->getAllRecords('case_study_category', 'DESC');
			if ($_POST) {
				$project = $this->input->post('project');
				$category_name = $this->input->post('category_name');
				$desc = $this->input->post('desc');
				$idd = $this->input->post('id');
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/case_study/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("project" => $project, "description" => $desc, "image" => $picture, "category_id" => $category_name);
				} else {
					$insert_ary = array("project" => $project, "description" => $desc, "category_id" => $category_name);
				}

				$where_up = "id=" . $idd;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('case_study', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Case study update successfully.');
					redirect('admin/manage-case-study');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_casestudy', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function viewCaseStudy()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Case Study | Admin Panel';
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getRecordById('case_study', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_casestudy', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	public function careerEnquiryView()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Career Enquiry | Admin Panel';
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getRecordById('career_enquiry', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/career_view', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	public function contactEnquiryView()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Contact Enquiry | Admin Panel';
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getconactId($id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/contact_view', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	public function editPortfolio()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Portfolio | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['Eobj'] = $this->Admin_Model;
			$result['data'] = $this->Admin_Model->getRecordById('portfolio', 'id', $id);
			$result['portfolio_category'] = $this->Admin_Model->getAllRecords('portfolio_category', 'DESC');
			if ($_POST) {
				$project = $this->input->post('project');
				$category_name = $this->input->post('category_name');
				$idd = $this->input->post('id');
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/portfolio/';
					$config['allowed_types'] = 'jpg|jpeg|png|pdf|ppt|pptx';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("project" => $project, "image" => $picture, "category_id" => $category_name);
				} else {
					$insert_ary = array("project" => $project, "category_id" => $category_name);
				}

				$where_up = "id=" . $idd;

				$insert_cat = $this->Admin_Model->updateRecordByWhere('portfolio', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Portfolio update successfully.');
					redirect('admin/manage-portfolio');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_portfolio', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	public function editPortfolioCategory()
	{

		$name = $this->input->post('cat');
		$id = $this->input->post('id');
		$insert_ary = array("category_name" => $name);
		$where = "id=" . $id;
		$insert_cat = $this->Admin_Model->updateRecordByWhere('portfolio_category', $insert_ary, $where);
		if ($insert_cat == true) {
			$this->session->set_flashdata('success', 'Portfolio category update successfully.');
			echo 1;
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
			echo 0;
		}
	}
	public function deleteBlog()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("blogs", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("blogs", "blogs", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Blog delete successfully.');
			redirect('admin/manage-blog');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteCaseStudy()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("case_study", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("case_study", "case_study", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Case study delete successfully.');
			redirect('admin/manage-case-study');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}
	public function deleteNews()
	{
		$id = $this->input->post('id');
		$get_img_name = $this->Admin_Model->getRecordById("news", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("news", "news", $img, $id);
		if ($delete == true) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function deleteAffiliate()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("affiliate", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("affiliate", "affiliate", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Product delete successfully.');
			redirect('admin/manage-affiliate');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteBrands()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("brands", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("brands", "brands", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Brand delete successfully.');
			redirect('admin/manage-brand');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deletePortfolio()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("portfolio", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("portfolio", "portfolio", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Portfolio delete successfully.');
			redirect('admin/manage-portfolio');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteTestimonial()
	{
		$id = $this->uri->segment(3);
		$get_img_name = $this->Admin_Model->getRecordById("testimonial", 'id', $id);
		if ($get_img_name->image != '') {
			$img = $get_img_name->image;
		} else {
			$img = 0;
		}

		$delete = $this->Admin_Model->deleteByImageId("testimonial", "testimonial", $img, $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Testimonial delete successfully.');
			redirect('admin/manage-testimonial');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deletePackage()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("packages", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Package delete successfully.');
			redirect('admin/manage-package');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deletePackageEnquiry()
	{
		$id = $this->input->post('id');

		$delete = $this->Admin_Model->deleteByNoImageId("package_enquiry", $id);
		if ($delete == true) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function deleteCareerEnquiry()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("career_enquiry", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Enquiry delete successfully.');
			redirect('admin/career-enquiry');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteContactEnquiry()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("contact_enquiry", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Contact Enquiry delete successfully.');
			redirect('admin/contact-enquiry');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deletePortfolioCat()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("portfolio_category", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Portfolio category delete successfully.');
			redirect('admin/add-portfolio-category');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteBlogCat()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("blog_category", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Blog category delete successfully.');
			redirect('admin/blog-category');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}

	public function deleteCaseCat()
	{
		$id = $this->uri->segment(3);

		$delete = $this->Admin_Model->deleteByNoImageId("case_study_category", $id);
		if ($delete) {
			$this->session->set_flashdata('success', 'Case study category delete successfully.');
			redirect('admin/case-study-category');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong.');
		}
	}
	/* add news */

	public function addAffiliate()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Affliate | Admin Panel';
			$this->load->view('admin/header', $data);
			if ($_POST) {
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/affiliate/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$title = $this->input->post('title');
				$desc = $this->input->post('desc');
				$link = $this->input->post('link');
				$type = $this->input->post('p_type');
				$view = $this->input->post('view');
				$rating = $this->input->post('rating');
				$price = $this->input->post('price');
				if ($this->input->post('ref')) {
					$ref = 1;
				} else {
					$ref = 0;
				}
				$insert_ary = array("referral_code" => $ref, "title" => $title, "description" => $desc, "image" => $picture, "link" => $link, "rating" => $rating, "view" => $view, "type" => $type, "price" => $price, "created_date" => date('Y-m-d H:i:s'));
				$insert_cat = $this->Admin_Model->insertCommon('affiliate', $insert_ary);
				if ($insert_cat) {
					$this->session->set_flashdata('success', 'Affiliate added successfully.');
					redirect('admin/manage-affiliate');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/add_affiliate');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* show affliates list */

	public function manageAffiliate()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Manage Affiliates | Admin Panel';
			$data['aff'] = $this->Admin_Model->getAllRecords("affiliate", 'DESC');
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manage_affliate', $data);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function viewAffiliate()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'View Affiliate | Admin Panel';
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('affiliate', 'id', $id);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/view_affiliate', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	/* edit news */

	public function editAffiliate()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Edit Affiliate | Admin Panel';
			$this->load->view('admin/header', $data);
			$id = $this->uri->segment(3);
			$result['data'] = $this->Admin_Model->getRecordById('affiliate', 'id', $id);
			if ($_POST) {
				$title = $this->input->post('title');
				$desc = $this->input->post('desc');
				$link = $this->input->post('link');
				$idd = $this->input->post('id');
				$type = $this->input->post('p_type');
				$view = $this->input->post('view');
				$rating = $this->input->post('rating');
				$price = $this->input->post('price');
				if ($this->input->post('ref')) {
					$ref = 1;
				} else {
					$ref = 0;
				}
				//Check whether user upload picture
				if (!empty($_FILES['upload']['name'])) {
					$config['upload_path'] = 'uploads/affiliate/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['upload']['name'];

					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('upload')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
					$insert_ary = array("referral_code" => $ref, "title" => $title, "description" => $desc, "image" => $picture, "link" => $link, "type" => $type, "view" => $view, "rating" => $rating, "price" => $price);
				} else {
					$insert_ary = array("referral_code" => $ref, "title" => $title, "description" => $desc, "link" => $link, "type" => $type, "view" => $view, "rating" => $rating, "price" => $price);
				}

				$where_up = "id=" . $idd;
				$insert_cat = $this->Admin_Model->updateRecordByWhere('affiliate', $insert_ary, $where_up);
				if ($insert_cat == true) {
					$this->session->set_flashdata('success', 'Product update successfully.');
					redirect('admin/manage-affiliate');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/edit_affiliate', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function myProfile()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'My Profile | Admin Panel';
			$result['data'] = $this->Admin_Model->getRecordById('admin', 'id', $this->session->userdata('user_id'));
			$this->load->view('admin/header', $data);
			if ($_POST) {
				$name = $this->input->post('name');
				$mobile = $this->input->post('mobile');
				$id = $this->input->post('id');
				$up_array = array("name" => $name, "mobile" => $mobile);
				$where = "id=" . $id;
				$up = $this->Admin_Model->updateRecordByWhere('admin', $up_array, $where);
				if ($up == true) {
					$this->session->set_flashdata('success', 'Profile updated successfully.');
					redirect('admin/my-profile');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
					redirect('admin/my-profile');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/my-profile', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function changePassword()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Change Password | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			if ($_POST) {
				$old = $this->input->post('old_password');
				$new = $this->input->post('new_password');
				$pass = md5($old);
				$where = 'id=' . $this->session->userdata('user_id') . ' AND password="' . $pass . '"';
				$check_old = $this->Admin_Model->getAllRecordsByWhere('admin', 'ASC', $where);
				if (empty($check_old)) {
					$this->session->set_flashdata('warning', 'Old password does not match.');
					redirect('admin/change-password');
				} else {
					$up_array = array("password" => md5($new));
					$where_up = "id=" . $this->session->userdata('user_id');
					$up = $this->Admin_Model->updateRecordByWhere('admin', $up_array, $where_up);
					if ($up == true) {
						$this->session->set_flashdata('success', 'Password changed successfully.');
						redirect('admin/change-password');
					} else {
						$this->session->set_flashdata('error', 'Something went wrong.');
						redirect('admin/change-password');
					}
				}
			}
			$this->load->view('admin/change-password');
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function linkedInLink()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add LinkedIn Link | Admin Panel';
			$result['data'] = $this->Admin_Model->getRecordById('linkedin_link', 'id', 1);
			$this->load->view('admin/header', $data);
			if ($_POST) {
				$name = $this->input->post('link');
				$id = 1;
				$date = date('Y-m-d H:i:s');
				$up_array = array("link" => $name, "created_date" => $date);
				$where = "id=" . $id;
				$up = $this->Admin_Model->updateRecordByWhere('linkedin_link', $up_array, $where);
				if ($up == true) {
					$this->session->set_flashdata('success', 'LinkedIn link updated successfully.');
					redirect('admin/linkedin-link');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
					redirect('admin/linkedin-link');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/linkedin-link', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function facebookLink()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Add Facebook Link | Admin Panel';
			$result['data'] = $this->Admin_Model->getRecordById('facebook_link', 'id', 1);
			$this->load->view('admin/header', $data);
			if ($_POST) {
				$name = $this->input->post('link');
				$id = 1;
				$date = date('Y-m-d H:i:s');
				$up_array = array("link" => $name, "created_date" => $date);
				$where = "id=" . $id;
				$up = $this->Admin_Model->updateRecordByWhere('facebook_link', $up_array, $where);
				if ($up == true) {
					$this->session->set_flashdata('success', 'Facebook link updated successfully.');
					redirect('admin/facebook-link');
				} else {
					$this->session->set_flashdata('error', 'Something went wrong.');
					redirect('admin/facebook-link');
				}
			}
			$this->load->view('admin/sidebar');
			$this->load->view('admin/facebook', $result);
			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}

	public function exportCareerCSV()
	{
		$file_name = 'career_details_file_' . date('Ymd') . '.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv;");

		// get data 
		$career_data = $this->Admin_Model->career_data_csv();

		// file creation 
		$file = fopen('php://output', 'w');

		$header = array("Name", "Email", "Mobile", "Age", "Skill", "Type", "Message", "Contact Date");
		fputcsv($file, $header);
		foreach ($career_data->result_array() as $key => $value) {
			fputcsv($file, $value);
		}
		fclose($file);
		exit;
	}

	public function exportContactCSV()
	{
		$file_name = 'contact_details_file_' . date('Ymd') . '.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv;");

		// get data 
		$career_data = $this->Admin_Model->contact_data_csv();

		// file creation 
		$file = fopen('php://output', 'w');

		$header = array("Title", "First Name", "Last Name", "Email", "Mobile", "Company", "Country", "Service", "Organization", "Description", "Contact Date");
		fputcsv($file, $header);
		foreach ($career_data->result_array() as $key => $value) {
			fputcsv($file, $value);
		}
		fclose($file);
		exit;
	}

	public function exportProductCSV()
	{
		$file_name = 'product_details_file_' . date('Ymd') . '.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv;");

		// get data 
		$career_data = $this->Admin_Model->product_data_csv();

		// file creation 
		$file = fopen('php://output', 'w');

		$header = array("Link", "Title", "Description", "Price", "Rating", "Type", "Created Date");
		fputcsv($file, $header);
		foreach ($career_data->result_array() as $key => $value) {
			fputcsv($file, $value);
		}
		fclose($file);
		exit;
	}

	public function exportPackageCSV()
	{
		$file_name = 'package_details_file_' . date('Ymd') . '.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv;");

		// get data 
		$career_data = $this->Admin_Model->package_data_csv();

		// file creation 
		$file = fopen('php://output', 'w');

		$header = array("Name", "Email", "Mobile", "Type", "Feature", "Created Date");
		fputcsv($file, $header);
		foreach ($career_data->result_array() as $key => $value) {
			fputcsv($file, $value);
		}
		fclose($file);
		exit;
	}

	public function fetchcat()
	{

		$id = $this->input->post('cat_id');
		$port = $this->input->post('port_type');

		if ($port == "image_tab") {
			$portt = "image";
		} elseif ($port == "pdf_tab") {
			$portt = "pdf";
		} else {
			$portt = "ppt";
		}

		if ($id == 0) {
			$array = array('port_type' => $portt);
			$portfolio = $this->Admin_Model->getAllRecordsByWherearray('portfolio', 'DESC', $array);
		} else {
			$array = array('category_id' => $id, 'port_type' => $portt);
			$portfolio = $this->Admin_Model->getAllRecordsByWherearray('portfolio', 'DESC', $array);
		}

		echo json_encode($portfolio);
	}

	public function buyer_messages()
	{
		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$data1['buyerMessage'] = $this->Common_model->fetch_getMessageGruopBy();
			$this->load->view('admin/buyerMessages', $data1);

			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		}
	}
	public function get_chat($gig_id, $user_id, $username, $gigs_title)
	{
		$data1['gig_id'] = $gig_id;
		$data1['user_id'] = $user_id;
		$data1['gigs_title'] = $gigs_title;
		$data1['username'] = $username;



		if ($this->session->userdata('user_id')) {
			$data['title'] = 'Gigs | Admin Panel';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar');
			$data1['message'] = $this->Common_model->fetch_getMessage($data1);
			$this->load->view('admin/buyerMessagesReply', $data1);

			$this->load->view('admin/footer');
		} else {
			$this->session->set_flashdata('error', 'Please login.');
			redirect('admin');
		};
	}

	public function chat()
	{
		$data1['user_id'] =  $this->input->post('user_id');
		$data1['gig_id'] =  $this->input->post('gig_id');
		$data1['message'] =  $this->input->post('message');
		$data1['unique_id'] = $data1['user_id'] . '_' . $data1['gig_id'];
		$data1['username'] = str_replace("%20", " ", $this->input->post('username'));
		$data1['gigs_title'] = str_replace("%20", " ", $this->input->post('gigs_title'));
		$data1['type'] = 0;


		$data1['created_at'] = date('Y-m-d');
		$insert = $this->Common_model->insert_detail($data1, 'messages');
	}
}
