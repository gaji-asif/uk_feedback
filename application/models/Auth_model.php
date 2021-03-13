<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public $client_service = "M2mart";
    public $auth_key = "M2mart741852";

    public function __construct() {
        parent::__construct();
       
    }

    public function check_auth_client() {

        $client_service = $this->input->get_request_header('Client-Service', true);
        $auth_key = $this->input->get_request_header('Auth-Key', true);
        if ($client_service == $this->client_service && $auth_key == $this->auth_key) {
            return true;
        } else {
            return json_output(201, array('status' => 201, 'message' => 'Unauthorized.'));
        }
    }
}