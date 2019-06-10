<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
    }
 
    public function index(){
        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/includes/navbar');
        $this->load->view('frontend/login/login');
        $this->load->view('frontend/includes/footer');
    }

    
}

?>