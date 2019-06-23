
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
    }
 
    public function index(){
        $data["curr_path"] = $this->uri->segment(1); 
        $data["csrf"] = $csrf = bin2hex(rand(32, 999999));
        $this->session->set_userdata('csrf', $csrf); 
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/register');
        $this->load->view('frontend/includes/footer');
    }

    public function do_register(){
        
        $this->validate('first_name','First Name', 'required|strip_tags|trim|xss_clean');
        $this->validate('last_name','Last Name', 'required|strip_tags|trim|xss_clean');
        $this->validate('username','Username', 'required|strip_tags|trim|xss_clean|is_unique[users.username]');
        $this->validate('email','Email Address', 'required|strip_tags|trim|xss_clean|valid_email|is_unique[users.email]');
        $this->validate('password','Password', 'required|strip_tags|trim|xss_clean|min_length[6]');
        $this->validate('rpassword','Confirm Password', 'required|strip_tags|trim|xss_clean|min_length[6]|matches[password]');
        $this->validate('birthday','Birthday', 'required|strip_tags|trim|xss_clean');
        $this->validate('marital_status','Marital Status', 'required|strip_tags|trim|xss_clean');
        $this->validate('gender','Gender', 'required|strip_tags|trim|xss_clean');
        $this->validate('contact_no','Contact Number', 'required|strip_tags|trim|xss_clean');
        $this->validate('address','Address', 'required|strip_tags|trim|xss_clean');
        
        $response = array("success" => FALSE, "message" => "There was an error, please try again!");

        if( $this->form_validation->run() ){
            $data = array(
                "first_name" => $this->_post("first_name"),
                "last_name" => $this->_post("last_name"),
                "email" => $this->_post("email"),
                "password" => password_hash( $this->_post("password"), PASSWORD_DEFAULT),
                "birthday" => $this->_post("birthday"),
                "marital_status" => $this->_post("marital_status"),
                "gender" => $this->_post("gender"),
                "contact_no" => $this->_post("contact_no"),
                "tel_no" => $this->_post("tel_no"),
                "address" => $this->_post("address"),
                "city" => $this->_post("city"),
                "province" => $this->_post("province"),
                "zip" => $this->_post("zip"),
                "uuid" => $this->get_uuid(),
            );
                $response["message"] = "Successfully Registered";
                $response["success"] = TRUE;
            // exit();
            if($this->user->insert("users", $data)){
                $response["message"] = "Successfully Registered";
                $response["success"] = TRUE;
                $response["errormsg"] = FALSE;
                if($this->session->is_booking){
                    $response["is_booking"] = TRUE;
                }
                $user_id = $this->db->insert_id();
                $user = $this->user->fetch("users", array("id" => $user_id))[0];
                $sess_data = array("is_logged_in" => TRUE, "uuid" => $data["uuid"], "role" => "user", "user" => $user);
                $this->session->set_userdata($sess_data);
                    
            }
            else{
                
                $response['message'] = 'Failed Registration';
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
            $response["message"] = "Please check all your fields";
        } 

        echo json_encode($response);
        
    }

    function get_uuid(){
        $uuid = $this->gen_uuid();
        $checkUuid = false;
        $uuidList = $this->user->fetch("users", array("uuid" => $uuid) );
        if($uuidList){
            if(count($uuidList) > 0){
                while(!$checkUuid){
                    $uuid = $this->gen_uuid();
                    $newList = $this->user->fetch("users", array("uuid" => $uuid));
                    if(count($newList) > 0)
                        $checkUuid = false;
                    else{
                        $checkUuid = true;
                        break;
                    }
                }
            }
        }
        return $uuid;
    }

    function gen_uuid() {
        
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
    
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
    
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
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