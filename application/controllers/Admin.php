<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->is_logged_in && $this->session->role == "admin"){
            $checkData = array("uuid" => $this->session->uuid);
            if(!($this->user->fetch("users", $checkData)))
                $this->logout(); 
            else         
                $this->session->set_userdata("csrf", NULL);
        }
        else{
            redirect("/");
        } 
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

    public function user(){
        $data["curr_path"] = $this->uri->segment(2);
        $data["users"] = $this->user->fetch("users");
        $data['uuid'] = $uuid = $this->uri->segment(3);
        $csrf = $this->session->csrf;
        if (!$this->session->has_userdata('csrf') || empty($this->session->csrf)) {
            $csrf = bin2hex(random_bytes(32));
            $this->session->set_userdata('csrf', $csrf); 
        } 
        $is_uuid = FALSE; 
        if($uuid != ""){ 
            $user = $this->user->fetch("users", array('uuid' => $uuid));   
            if($user){
                if(count($user) > 0)
                    $is_uuid = TRUE; 
                else 
                    print_r("tyst"); 
            }
            else
                show_404();
        }  
        if($is_uuid){ 
            $user = $user[0];
            $data["user"] = $user;
            $data["csrf"] = $csrf;
            $this->load->view('backend/includes/header', $data);
            $this->load->view('backend/modules/user/user');
            $this->load->view('backend/includes/footer');
        }
        else{
            $this->load->view('backend/includes/header', $data);
            $this->load->view('backend/modules/user/index');
            $this->load->view('backend/includes/footer');
        }
        // print_r($data);
    }

    public function createCSRF(){
        
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect("/");
    }

    public function packages(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/package');
        $this->load->view('backend/includes/footer');
    }

    public function tours(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/list_tours');
        $this->load->view('backend/includes/footer');
    }

    public function locations(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/list_locations');
        $this->load->view('backend/includes/footer');
    }

    public function location_create(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/location_create');
        $this->load->view('backend/includes/footer');
    }

    public function tour_create(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/create_tour');
        $this->load->view('backend/includes/footer');
    }

    public function package_create(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/create_packages');
        $this->load->view('backend/includes/footer');
    }

    public function package_create_price(){
        // echo password_hash("secret", PASSWORD_DEFAULT);
#        $2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm
        // echo password_verify("secret", "$2y$10$3u6fX1hjLRtI/Nzhaj82BOA2A0ZQSQz9yMa0XGPrD3h0o5qKAwhLm");
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('backend/includes/header', $data);
        $this->load->view('backend/modules/package/create_packages2');
        $this->load->view('backend/includes/footer');
    }


    
}

?>