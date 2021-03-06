<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freelancer extends CI_Controller {

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
	public function dashboard($id='')
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $data['user_id'] = $this->session->userdata('userid');;
	    $this->load->view('header',$data);
	    $userdetail=$this->Common_model->fetch_userdetail_by_id($this->session->userdata('userid'));
	    $usercountry=$userdetail->country;
		if(!empty($id))
		{
			$data['id'] = $id;
			$array = array('cat_id' => $id);
			$data['category'] = $this->Common_model->fetch_single_row($array, 'categories');
			$links = $this->Common_model->fetch_cat_wise_links_with_gig($id);
		
			$data['links'] = [];
	
			foreach($links as $row1)
			{
				$array3=array('link_id'=>$row1['id'] ,'gig_id'=>$row1['gig_id'] ,'buyer_id'=>$row1['buyer_id'] ,'gig_cat_id'=>$row1['gig_cat_id']);
				$reviews = $this->Common_model->fetch_multiple_row_bywhere($array3,'buyer_links_reviews','id','ASC');

				$flag = 1;
			
				foreach($reviews as $reveiew)
				{
					if($flag == 1)
					{
						$array1 = ['review_id' => $reveiew->id,'gig_cat_id' => $id,'freelancer_id'=>$this->session->userdata('userid')];
						$complete_review = $this->Common_model->fetch_single_row($array1, 'completed_reviews');
						if(!empty($complete_review)){
						
							$row1['done'] = 1;
							$flag = 0;
							break;
						}
						else
						{
							$row1['done'] = 0;
						}
					}
				}
			
				 array_push($data['links'],$row1);
			}
		//  $this->Common_model->print_r2($data['links']);
		// 	exit;
		}
		// $this->Common_model->print_r2($data['links']);
		// exit;
	    $this->load->view('freelancer/dashboard',$data);
		$this->load->view('footer');
	}
	public function show_reviews($id,$gig_cat_id)
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
		$data['id'] = $gig_cat_id;
		$data['reviews'] = $this->Common_model->getReviewsByLink($id);
		// $this->Common_model->print_r2($data['reviews']);
		// exit;
		$this->load->view('freelancer/show-reviews',$data);
		$this->load->view('footer');
	}
	
	public function submit_review()
	{
		
		if($_POST){
			$data1['review_id'] = $this->input->post('review_id');
			$array=array('id'=>$data1['review_id']);
			$reveiew =$this->Common_model->fetch_single_row($array,'buyer_links_reviews');
		
			if($reveiew->reveiw_status == 1)
			{
				$id = $this->input->post('id');
				$data1['link_id'] = $this->input->post('link_id');
				$data1['gig_id'] = $this->input->post('gig_id');
				$data1['buyer_id'] = $this->input->post('buyer_id');
				$data1['gig_cat_id'] = $this->input->post('gig_cat_id');
				$data1['reviewer_name'] = $this->input->post('reviewer_name');
				$data1['review_id'] = $this->input->post('review_id');
				$data1['freelancer_id'] = $this->session->userdata('userid');
				$data1['created_date'] = date('Y-m-d');;
				if($_FILES['screenshot']['name']!=""){
					$target1 = "uploads/review_screenshot/".time()."_".basename($_FILES['screenshot']['name']);
					move_uploaded_file($_FILES['screenshot']['tmp_name'], $target1);
					$data1['screenshot']= $target1;
				}else{
					$data1['screenshot']="";   
				}
				$insert = $this->Common_model->insert_detail($data1, 'completed_reviews');
				
				$data2['reveiw_status'] = 0;
				$where=array('id'=>$data1['review_id']);
				$this->Common_model->update_detail('buyer_links_reviews',$data2,$where); 

				$array3=array('link_id'=>$data1['link_id'] ,'gig_id'=>$data1['gig_id'] ,'buyer_id'=>$data1['buyer_id'] ,'gig_cat_id'=>$data1['gig_cat_id']);
				$all_reviews = $this->Common_model->fetch_multiple_row_bywhere($array3,'buyer_links_reviews','id','ASC');

				$array4=array('link_id'=>$data1['link_id'] ,'gig_id'=>$data1['gig_id'] ,'buyer_id'=>$data1['buyer_id'] ,'gig_cat_id'=>$data1['gig_cat_id'],'reveiw_status'=>0);
				$complete_reviews = $this->Common_model->fetch_multiple_row_bywhere($array4,'buyer_links_reviews','id','ASC');

				
				if(count($all_reviews) == count($complete_reviews))
				{
					$data4['link_status'] = 0;
					$where=array('id'=>$data1['link_id']);
					$this->Common_model->update_detail('buyer_links',$data4,$where); 
				}
				if($insert){
				    $this->session->set_flashdata('successs','Complete Review successfully.');
					return redirect('freelancer/dashboard/'.$data1['gig_cat_id']);
				}else{
				   $this->session->set_flashdata('error','Something went wrong.');
				}
			}
			$this->session->set_flashdata('danger','This Review already Completed.');
			return redirect('freelancer/dashboard/'.$data1['gig_cat_id']);
   
           
        }
	}
	
	public function dashboard_demo()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $userdetail=$this->Common_model->fetch_userdetail_by_id($this->session->userdata('userid'));
	    $usercountry=$userdetail->country;
	    
	    
	   
	    $array2=array('review_status'=>0,'cat_id'=>2);
	    $data['app']=$this->Common_model->fetch_multiple_row_bywheree($array2,'buyer_review_content','id','RANDOM',1);
	    $array3=array('review_status'=>0,'cat_id'=>3);
	    $data['facebook']=$this->Common_model->fetch_multiple_row_bywheree($array3,'buyer_review_content','id','RANDOM',1);
	    $array4=array('review_status'=>0,'cat_id'=>4);
	    $data['trust']=$this->Common_model->fetch_multiple_row_bywheree($array4,'buyer_review_content','id','RANDOM',1);
	    $array5=array('review_status'=>0,'cat_id'=>5);
	    $data['yelp']=$this->Common_model->fetch_multiple_row_bywheree($array5,'buyer_review_content','id','RANDOM',1);
	    $array6=array('review_status'=>0,'cat_id'=>6);
	    $data['trip']=$this->Common_model->fetch_multiple_row_bywheree($array6,'buyer_review_content','id','RANDOM',1);
	    $array7=array('review_status'=>0,'cat_id'=>7);
	    $data['yell']=$this->Common_model->fetch_multiple_row_bywheree($array7,'buyer_review_content','id','RANDOM',1);
	    $this->load->view('freelancer/dashboard_demo',$data);
		$this->load->view('footer');
	}

	public function profile(){
	    //echo '<br>DATA ONE<br><pre>';print_r($_POST);exit;
	     if($_POST){
            $data1['name'] = $this->input->post('lname');
            //$data1['email'] = $this->input->post('email');
            //echo '<pre>';print_r($_FILES);exit;
            $data1['country'] = $this->input->post('country');
            $data1['gender'] = $this->input->post('gender');
            if($_FILES['profile_pic']['name']!=""){
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
                redirect('freelancer/my-profile');
            }else{
               $this->session->set_flashdata('error','Something went wrong.');
            }
        }
	}
	
	public function myProfile()
    {
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    //echo '<br>DATA ONE<br><pre>';print_r($_POST);exit;
	    $this->load->view('header',$data);
	    
	   // echo '<br>DATA<br><pre>';print_r($_POST);exit;
	    
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
	                redirect('freelancer/my-profile');
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	            }
        }
	    $array=array('user_id'=>$this->session->userdata('userid'));
	    $data['p']=$this->Common_model->fetch_single_row($array,'users');
	    $this->load->view('freelancer/profile',$data);
		$this->load->view('footer');
	}
	
	public function myReferrals()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->db->where('referral_code',$this->session->userdata('userid'));
        $query=$this->db->get('users');
        $data['all_referalls'] = $query->result();

	    $this->load->view('header',$data);
	    $this->load->view('freelancer/myReferrals',$data);
		$this->load->view('footer');
	}	
	
	public function myPayments()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    $array=array('user_id'=>$this->session->userdata('userid'));

	    $data['payment']=$this->Common_model->payment_with_link_join($this->session->userdata('userid'));
	
		$user = $this->Common_model->fetch_single_row($array, 'users');
	
		$data['totalAmount'] = $user->wallet;

	    $this->load->view('freelancer/myPayments',$data);
		$this->load->view('footer');
	}	
	
	public function withdrawal()
	{
	    $data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    if($_POST){
	         
                $data1['user_id'] = $this->session->userdata('userid');
                $data1['user_type'] = 1;
                $data1['withdrawal_amount'] = $this->input->post('withdrawal_amount');
             
                $data1['available_amount'] = $this->input->post('available_amount');
                $data1['payment_email'] = $this->input->post('paypal_email');
                $data1['user_name'] = $this->input->post('paypal_name');

                $data1['date'] = date('Y-m-d');
                $data1['created_date']=date('Y-m-d H:i:s');
                $insert = $this->Common_model->insert_detail($data1,'payment_request');
	            if($insert){
	               $this->session->set_flashdata('success','sucessfully inserted');
	               
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	            }
	     }
	    $this->load->view('freelancer/withdrawal',$data);
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
	
	public function submitReview()
	{
	  
	     if($_POST){
	         
                
                $data1['reviewer_name'] = $this->input->post('reviewer_name');
                $data1['freelancer_id'] = $this->input->post('freelancer_id');
                 $data1['review_status'] = 1;
                 if($_FILES['screenshot']['name']!=""){
                $target1 = "uploads/review_screenshot/".basename($_FILES['screenshot']['name']);
                move_uploaded_file($_FILES['screenshot']['tmp_name'], $target1);
                $data1['screenshot']=basename($_FILES['screenshot']['name']);
                }else{
                 $data1['screenshot']="";   
                }
                $id = $this->input->post('id');

                 
                $data1['review_date'] = date('Y-m-d');
                //   $data1['active'] = 1;
                $data1['review_datetime']=date('Y-m-d H:i:s');
                $where=array('id'=>$id);
                $insert = $this->Common_model->update_detail('buyer_review_content',$data1,$where);
	            if($insert){
	               $data2['insertdate_time']=date('Y-m-d H:i:s');
	               $currentDate = strtotime($data2['insertdate_time']);

	               $data2['user_id']=$this->input->post('freelancer_id');
	               $data2['type']=$this->input->post('review_type');
	               $futureDate=$currentDate+(60*10);
	               $data2['endtime'] = date("Y-m-d H:i:s", $futureDate);


	               $insert = $this->Common_model->insert_detail($data2,'submitDetails');

	                $this->session->set_flashdata('success','review content updated');
	               
	                    redirect('freelancer/dashboard');
	                
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	                redirect('freelancer/dashboard');
	            }
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
	                redirect('freelancer/change-password');
	               
	                
	               }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	               }
               }else{
                  	 $this->session->set_flashdata('pwderror','updated successfully.');
	                 redirect('freelancer/change-password');
 
               }
          }
	    $this->load->view('freelancer/changePassword',$data);
		$this->load->view('footer');
	}

	public function withdraw_money(){
		$data['title'] = '';
	    $data['description'] = '';
	    $data['keyword'] = '';
	    $this->load->view('header',$data);
	    if($_POST){
	         
                $data1['freelancer_id'] = $this->session->userdata('userid');
                $data1['available_amount'] = $this->input->post('available_amount');             
                $data1['request_amount'] = $this->input->post('request_amount');
                $data1['paypal_email'] = $this->input->post('paypal_email');
                // $data1['user_type'] = 1;
                $data1['date'] = date('Y-m-d');
              
                $insert = $this->Common_model->insert_detail($data1,'withdrawn_requests');
	            if($insert){
	               $this->session->set_flashdata('success','sucessfully inserted');
	               
	                
	            }else{
	               $this->session->set_flashdata('error','Something went wrong.');
	               
	            }
	     }
	    return redirect('freelancer/my-payments');
		// $this->load->view('footer');
	}
}
