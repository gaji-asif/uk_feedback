<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

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
			$this->load->model('Common_model');
			$this->load->helper('front_helper');
		
			// load model
		
			$this->controller_method = &get_instance();
		}
	public function index()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	     $array1=array('status'=>1,'is_deleted'=>0,'type'=>1);
	    $data['featuredgigs']=$this->Common_model->fetch_multiple_row_bywhere($array1,'gigs','g_id','RANDOM',4);
	    $array=array('status'=>1,'is_deleted'=>0);
	     $data['gigs']=$this->Common_model->fetch_multiple_row_bywhere($array,'gigs','g_id','DESC',20);
	   
		$this->load->view('front/index',$data);
		$this->load->view('footer');
	}
	
	public function GigsDetail($id)
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $array=array('g_id'=>$id);
	    $data['gigs']=$this->Common_model->fetch_single_row($array,'gigs');
	     $data['gimg']=$this->Common_model->fetch_multiple_row_bywheree($array,'gigs_img','id','DESC');
	     $data['addons']=$this->Common_model->fetch_multiple_row_bywheree($array,'gigs_addons','id','DESC');
	      $data['review']=$this->Common_model->fetch_multiple_row_bywheree($array,'review','id','DESC');
		$this->load->view('front/gigsDetail',$data);
		$this->load->view('footer');
	}
	
		public function login()
	{
	    
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	     if($_POST){
              
                $email = $this->input->post('email');
                $password = $this->input->post('password');
               
                $data2['check_login'] = $this->Common_model->userLogin($email,$password);
                if($data2['check_login']!=false){
                 
	                $this->session->set_userdata(array("username"=>$data2['check_login']->name,"userid"=>$data2['check_login']->user_id,"useremail"=>$data2['check_login']->email,"user_type"=>$data2['check_login']->user_type));
	              
	                $this->session->set_flashdata('success','Login successfully.');
	                if($data2['check_login']->user_type==1){
	                redirect('freelancer/dashboard');
	                }else{
	                    redirect('buyer/dashboard');
	                }
	                
	            }else{
	                $this->session->set_flashdata('error','invalid credentials');
	               
	            }
	     }
		$this->load->view('front/login',$data);
		$this->load->view('footer');
	}
	
		public function register()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	     if($_POST){
	         
                $data1['name'] = $this->input->post('fname').' '.$this->input->post('lname');
                $data1['email'] = $this->input->post('email');
                $data1['password'] = md5($this->input->post('password'));
             
                $data1['country'] = $this->input->post('country');
                $data1['gender'] = $this->input->post('gender');
                $data1['user_type'] = $this->input->post('user_type');
                
                $data1['register_date'] = date('Y-m-d');
                  $data1['active'] = 1;
                $data1['created_on']=date('Y-m-d H:i:s');
                $insert = $this->Common_model->insert_detail($data1,'users');
	            if($insert){
	                	$str=substr($this->input->post('fname'), 0, strrpos($this->input->post('fname'), ' '));
	                 $data2['referral_code'] =$str.$insert;	
	                 
	                 $this->session->set_userdata(array("username"=>$data1['name'],"userid"=>$insert,"useremail"=>$data1['email'],"user_type"=>$data1['user_type'])); 
	              
	                $this->session->set_flashdata('success','Registered successfully.');
	               if($data1['user_type']==1){
	                redirect('freelancer/dashboard');
	                }else{
	                    redirect('buyer/dashboard');
	                }
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	            }
	     }
		$this->load->view('front/register',$data);
		$this->load->view('footer');
	}
	
	public function check_email()
    {
    $email 	=  $this->input->post('email');	
    $re=$this->Common_model->check_email($email);
    echo $re;
       
      }	
	
		public function aboutus()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/aboutus',$data);
		$this->load->view('footer');
	}
	
		public function affiliates()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/affiliates',$data);
		$this->load->view('footer');
	}
	
		public function getMoney()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/getMoney',$data);
		$this->load->view('footer');
	}
	
		public function createTickets()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	     if($_POST){
                 $ticket=$this->Common_model->fetch_multiple_row('tickets','t_id','DESC',1);
                 if($ticket->num_rows()>0){
                   $res = $ticket->result();
                   foreach($res as $resu){
             
                    $data1['ticket_ID'] = $resu->ticket_ID + 1;
                   }
                 }else{
                     $cur_date = date('d').date('m').date('y');
                      
                      $data1['ticket_ID'] =$cur_date."0001"; 
                 }
                $data1['subject'] = $this->input->post('subject');
                $data1['user_id'] = $this->session->userdata('userid');
                $data1['description'] = $this->input->post('description');
                $data1['created_date'] = date('Y-m-d');
                $data1['created_on']=date('Y-m-d H:i:s');
             
                $insert = $this->Common_model->insert_detail($data1,'tickets');
	            if($insert){
	              
	               $this->session->set_flashdata('success','added successfully.');
	                redirect('create-ticket');
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	            }
	     }
		$this->load->view('front/createTickets',$data);
		$this->load->view('footer');
	}
	
	
		public function supportTicket()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $array1=array('user_id'=>$this->session->userdata('userid'));
	    $data1['ticket']=$this->Common_model->fetch_multiple_row_bywhere($array1,'tickets','t_id','DESC');
		$this->load->view('front/supportTicket',$data1);
		$this->load->view('footer');
	}
	
	
		public function termsCondition()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/tac',$data);
		$this->load->view('footer');
	}
		public function privacyPolicy()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/privacyPolicy',$data);
		$this->load->view('footer');
	}
	
		public function howitWorks()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$this->load->view('front/howItWorks',$data);
		$this->load->view('footer');
	}
	
	public function logout(){
		//removing session 
		$this->session->sess_destroy(); 
		redirect('front'); 
	}
	
	
		public function review()
	{
	   
        $data1['review'] = $this->input->post('message');
        $data1['email'] = $this->input->post('email');
        $data1['name'] = $this->input->post('name');
        $data1['given_by'] = $this->input->post('user_id');
        $data1['g_id'] = $this->input->post('gig_id');
        
        $data1['date'] = date('Y-m-d');
        $data1['created_on']=date('Y-m-d H:i:s');
        $insert = $this->Common_model->insert_detail($data1,'review');
        if($insert){
        
        $this->session->set_flashdata('success','successfully saved.');
        redirect('front/GigsDetail/'.$data1['g_id']);
        
        }else{
        $this->session->set_flashdata('error','Something went wrong.');
           redirect('front/GigsDetail/'.$data1['g_id']);
        }
	}
	
	
	/* CANCEL PAYMENT */
	public function cancel()
	{
	    echo '<BR> cancel REQUEST <BR><pre>';print_r($_REQUEST);
	    $data1 = array('message' => 'Have you cancel the pryment process.');
	    redirect('front/thankyou/'.$data1['g_id']);
	}
	
	/* CANCEL PAYMENT */
	public function return()
	{
	    echo '<BR> Return REQUEST <BR><pre>';print_r($_REQUEST);
	    $data1 = array('message' => 'Thank you for pryment process.');
	    redirect('front/thankyou/'.$data1['g_id']);
	}
	
	
	/* CANCEL PAYMENT */
	public function notify()
	{
	    echo '<BR> Notify REQUEST <BR><pre>';print_r($_REQUEST);
	    $data1 = array('message' => 'Thank you for pryment process.');
	    redirect('front/thankyou/'.$data1['g_id']);
	}
	
	
}
