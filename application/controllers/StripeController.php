<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freelancer extends CI_Controller {

    public function __construct()
	{
		//call CodeIgniter's default Constructor
		// parent::__construct();
		//load database libray manually
		// date_default_timezone_set('Asia/Kolkata');
		// 	$this->load->database();
		// 	$this->load->library("form_validation");
		// 	$this->load->library('email');
		// 	$this->load->library('toastr');
		// 	$this->load->model('Common_model');
		// 	$this->load->helper('front_helper');
            parent::__construct();
            $this->load->library("session");
            $this->load->helper('url');
		
			// load model
		
			$this->controller_method = &get_instance();
	}
    public function index()
    {
        $this->load->view('my_stripe');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripePost()
    {
        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        \Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
            
        $this->session->set_flashdata('success', 'Payment made successfully.');
             
        redirect('/my-stripe', 'refresh');
    }


}
