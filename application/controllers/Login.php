<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        if($this->session->is_logged_in){
            $checkData = array("uuid" => $this->session->uuid);
            if(!($this->user->fetch("users", $checkData)))
                $this->logout();
            else
                redirect("/"); 
        }
    }
 
    public function index(){
        $data["curr_path"] = $this->uri->segment(1); 
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/login');
        $this->load->view('frontend/includes/footer');
    }

    public function do_login(){

        $this->validate('email','Email Address', 'required|strip_tags|trim|xss_clean');
        $this->validate('password','Password', 'required|strip_tags|trim|xss_clean');
        $response = array("success" => FALSE, "message" => "There was an error, please try again!");
        if($this->form_validation->run()) {

            $data = array(
                "email" => $this->_post("email"),
                // "password" => sha1($this->_post("password")), 
            );
            $user = $this->user->fetch("users", $data);
            if(count($user) > 0 ){
                $user = $user[0];
                if(password_verify($this->_post("password"), $user->password)){
                    $sess_data = array("is_logged_in" => TRUE, "uuid" => $user->uuid);
                    $this->session->set_userdata($sess_data);
                    $response["message"] = "Successfully Login";
                    $response["success"] = TRUE;
                    $response["errormsg"] = FALSE;
                }
                else{
                    $response['message'] = 'Invalid Account';
                    $response['errormsg'] = true;
                    $response['success'] = false;
                } 

            }
            else{
                $response['message'] = 'Invalid Account';
                $response['errormsg'] = true;
                $response['success'] = false;

            }
        }
        else{
            foreach ($_POST as $key => $value) {
                $response['messages'][$key] = form_error($key);
                $response['success'] = false;
                $response['errormsg'] = false;
            }
        }
        echo json_encode($response);

    }

    public function logout(){
        $this->session->sess_destroy();
    }

    public function createAudit(){
        // $data = array(
        //     "user_type" =>
        // );
        // $this->user->insert("audits", $data);
    }

	// custom method for post
	public function _post($value){ 
        return is_array($this->input->post($value,true)) ? $this->input->post($value,true) : strip_tags($this->input->post($value,true));
	}

	// costum method for $this->form_validation->set_rules();
    public function validate($param1,$param2,$param3) {
        return $this->form_validation->set_rules($param1,$param2,$param3);
    } 

    
}

?>