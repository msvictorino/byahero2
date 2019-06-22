<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        if(!($this->session->is_logged_in && $this->session->is_booking)){
            redirect("/register");
        }
    }

    //About Us DISPLAY
    public function index(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);   
        $this->load->view('frontend/pages/booking');
        $this->load->view('frontend/includes/footer');
    }

}