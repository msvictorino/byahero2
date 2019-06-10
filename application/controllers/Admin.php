<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('AdminModel'); 
    }


    //LOG-IN DISPLAY
    public function login(){
        $this->load->view('backend/includes/header');
        $this->load->view('backend/includes/navbar');
        $this->load->view('backend/login/login');
        $this->load->view('backend/includes/footer');
    }

    
}

?>