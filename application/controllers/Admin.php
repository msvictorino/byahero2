<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('AdminModel'); 
    }
   
    //About Us DISPLAY
    public function index(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/index');
        $this->load->view('backend/includes/footer');
    }


    
}

?>