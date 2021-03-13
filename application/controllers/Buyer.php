<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

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
	public function dashboard()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $array1=array('user_id'=>$this->session->userdata('userid'));
	    $data['mygigs']=$this->Common_model->fetch_multiple_row_bywheree($array1,'buyer_gigs','id','DESC',1);

	    $this->load->view('buyer/dashboard',$data);
		$this->load->view('footer');
	}
	
	public function myProfile()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    if($_POST){
	         
                $data1['name'] = $this->input->post('name');
                $data1['email'] = $this->input->post('email');
                $data1['country'] = $this->input->post('country');
                $data1['gender'] = $this->input->post('gender');
                 if($_FILES['cover_img']['name']!=""){
                $target1 = "uploads/user/".basename($_FILES['profile_pic']['name']);
                move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target1);
                $data1['profile_pic']=basename($_FILES['profile_pic']['name']);
                }else{
                 $data1['profile_pic']="";   
                }
                $where=array('user_id'=>$this->session->userdata('userid'));
                $update=$this->Common_model->update_detail('users',$data1,$where); 
                if($update){
	              
	                $this->session->set_flashdata('success','updated successfully.');
	                redirect('buyer/my-profile');
	               
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	            }

          }
	    $array=array('user_id'=>$this->session->userdata('userid'));
	    $data['p']=$this->Common_model->fetch_single_row($array,'users');
	    $this->load->view('freelancer/profile',$data);
		$this->load->view('footer');
	}
	
		public function myGigs()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $array1=array('user_id'=>$this->session->userdata('userid'));
	    $data['mygigs']=$this->Common_model->fetch_multiple_row_bywheree($array1,'buyer_gigs','id','DESC');

	    $this->load->view('buyer/myGigs',$data);
		$this->load->view('footer');
	}
	
		public function myReferrals()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $this->load->view('buyer/myReferrals',$data);
		$this->load->view('footer');
	}
		public function myPayments()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	     $array=array('user_id'=>$this->session->userdata('userid'));
	    $data['payment']=$this->Common_model->fetch_multiple_row_bywhere($array,'buyer_gigs','id','DESC');

	    $this->load->view('buyer/myPayments',$data);
		$this->load->view('footer');
	}		
	
		public function updateReviewContent()
	{
	  
	     if($_POST){
	         
                $data1['review_link'] = $this->input->post('review_link');
                 $bg_id = $this->input->post('bg_id');
                $country= $this->input->post('country');
                 if($country!=0){
                   $country2 = implode(', ', $country);
                 }else{
                     $country2 =$country;
                 }
                  $data1['country'] = $country2;
                // $data1['register_date'] = date('Y-m-d');
                //   $data1['active'] = 1;
                // $data1['created_on']=date('Y-m-d H:i:s');
                $where=array('id'=>$bg_id);
                $insert = $this->Common_model->update_detail('buyer_gigs',$data1,$where);
	            if($insert){
	                
	                 $content = $this->input->post('content');
	                  $rc_id = $this->input->post('rc_id');
	                 
                
                 
                 foreach($content as $index=> $cnt){
                           if($cnt!=""){
                            $data2['link']=$data1['review_link'];
                            $data2['content'] = $content[$index];
                            $data2['country'] = $country2;
                            $where2=array('id'=>$rc_id[$index]);
                            $insert1=$this->Common_model->update_detail('buyer_review_content',$data2,$where2);   
                           }
                       }
	                	
	                $this->session->set_flashdata('success','review content updated');
	               
	                    redirect('buyer/dashboard');
	                
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	                redirect('buyer/dashboard');
	            }
	     }
	
	}
	
		public function approveReview($id)
	{
	    
        $data['payment_status'] = 1;
        $data['payment_givenby'] = 2;
        

        $where=array('id'=>$id);
        $update=$this->Common_model->update_detail('buyer_review_content',$data,$where); 
        if($update){
            $array=array('id'=>$id);
            $review=$this->Common_model->fetch_single_row($array,'buyer_review_content');
            $freelancer_id=$review->freelancer_id;
            $review_amt=$review->review_amount;
            $wallet=$this->Common_model->fetch_wallet_by_id($freelancer_id);
            $data2['wallet']=$wallet+$review_amt;
            $where2=array('user_id'=>$freelancer_id);
            $this->Common_model->update_detail('users',$data2,$where2);
            
             $data3['user_id'] =$freelancer_id;
             $data3['amount'] = $review_amt;
             $data3['wallet_status']=1;
             $data3['created_at']=date('Y-m-d H:i:s');
            $insert = $this->Common_model->insert_detail($data3,'wallet_history');

           	$this->session->set_flashdata('success_review','Review updated successfully.');
	                redirect('buyer/dashboard');
        }else{
         	     $this->session->set_flashdata('error','try again.');
	           redirect('buyer/dashboard');
   
        }

	    
	}
	
		public function disapproveReview($id)
	{
	    
        $data['payment_status'] = 2;


        $where=array('id'=>$id);
        $update=$this->Common_model->update_detail('buyer_review_content',$data,$where); 
        if($update){
            // $array=array('id'=>$id);
            // $review=$this->Common_model->fetch_single_row($array,'buyer_review_content');
            // $freelancer_id=$review->freelancer_id;
            //     $userdetail=$this->Common_model->fetch_single_row($array,'users');
            // $name=$userdetail->name;

            //  $data3['title'] ="review disappoved by buyer";
            //  $data3['body'] = "review given by freelancer disapproved by buyer ".$name;
            //  $data3['user_id']=0;
            //  $data3['date']=date('Y-m-d');
            //  $data3['created_on']=date('Y-m-d H:i:s');
            // $insert = $this->Common_model->insert_detail($data3,'wallet_history');

           	$this->session->set_flashdata('review_disapprove','Review updated successfully.');
	                redirect('buyer/dashboard');
        }else{
         	     $this->session->set_flashdata('error','try again.');
	           redirect('buyer/dashboard');
   
        }

	    
	}
	
	
		public function changePassword()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    if($_POST){
	         
                $oldpass = md5($this->input->post('old_password'));
                //$newpass = $this->input->post('newpass');
                //$confirmpass = $this->input->post('confirmpass');
                $array=array('user_id'=>$this->session->userdata('userid'));
                $userDetail=$this->Common_model->fetch_single_row($array,'users');
                if($userDetail->password==$oldpass){
                   $data1['password']=md5($this->input->post('new_password'));
                  $where=array('user_id'=>$this->session->userdata('userid'));
                  $update=$this->Common_model->update_detail('users',$data1,$where); 
                   if($update){
	              
	                $this->session->set_flashdata('success','updated successfully.');
	                redirect('buyer/change-password');
	               
	                
	               }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	               }
               }else{
                  	 $this->session->set_flashdata('pwderror','updated successfully.');
	                 redirect('buyer/change-password');
 
               }
          }
	    $this->load->view('buyer/changePassword',$data);
		$this->load->view('footer');
	}
}
