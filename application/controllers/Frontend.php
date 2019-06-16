<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
    }

    //About Us DISPLAY
    public function index(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header2', $data);
        $this->load->view('frontend/includes/navbar2');
        $this->load->view('frontend/index');
        $this->load->view('frontend/includes/footer2');
    }

    //About Us DISPLAY
    public function about(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/about');
        $this->load->view('frontend/includes/footer');
    }

    //Travel Promo DISPLAY
    public function promo(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/promo');
        $this->load->view('frontend/includes/footer');
    }
 
    //Travel Packages DISPLAY
    public function package(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/package');
        $this->load->view('frontend/includes/footer');
    }
 
    //Contact Us DISPLAY
    public function contact(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/contact');
        $this->load->view('frontend/includes/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("/");
    }


    
}

?>