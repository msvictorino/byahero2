<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
    }

    public function getUsers(){
        $this->load->library("pagination");
        $search = $this->input->get("search");
        $columns = array(
            "first_name" => $search, 
            "last_name" => $search,
            "email" => $search,
        );
        
        $response['test'] = $user = $this->user->fetch_like("users", $columns, $search, "created_at"); 

        $totalUsers = 0;
        if($search != ""){
            
            $user = $this->user->fetch_like("users", $columns, $search, "created_at");
            if($user)
                $totalUsers = count($this->user->fetch_like("users", $columns, $search, "created_at")); 
        }
        else
            $totalUsers = count($this->user->fetch("users"));
         
        $config = array();
        $config["base_url"] = "";
        $config["total_rows"] = $totalUsers;
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination justify-content-center">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li class="page-item"><a class="page-link" href="#">';
        $config["first_tag_close"] = '</a></li>';
        $config["last_tag_open"] = '<li class="page-item">';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li class="page-item">';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = '<li class="page-item">';
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='page-item active'><a class='page-link' href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li class='page-item'>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $response["page"] = $page;
        $start = ($page - 1) * $config["per_page"]; 

        // check if there is a searching 
        if($search != ""){ 
            $users = $this->user->fetchPagination("users", $columns, $search, "created_at", $config["per_page"], $start);
        }
        else
            $users = $this->user->fetchPagination("users", NULL, NULL, "created_at", $config["per_page"], $start);

        // initialize to check if there are data 
        $response["success"] = false;
        $response["users"] = $users;
        
        if($users){
            if(count($users) > 0){
                $html = '<table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>UUID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
                $ctr = 1;
                foreach($users as $u){
                    $html .= '<tr>
                                <td>'. $ctr++ .'</td>
                                <td>'. $u->uuid .'</td>
                                <td>'. $u->username .'</td>
                                <td>'. $u->role . '</td>
                                <td>'. $u->first_name . ' ' . $u->last_name .'</td>
                                <td>'. $u->email .'</td>
                                <td>'. $u->contact_no .'</td>
                                <td>'. $u->created_at .'</td>
                                <td> <a class="btn btn-info btn-sm" href="'. base_url() . 'admin/user/' . $u->uuid . '" data-uuid="'. $u->uuid .'"><i class="fa fa-eye"></i></a></td>
                            </tr>';
                }

                $response["success"] = TRUE;
                $response["userTable"] = $html;
                $response["pagination_link"] = $this->pagination->create_links();
            }
        }
        else{
            $html = '<div class="alert alert-dark" role="alert">
                        No Available Data
                    </div>';
            $response["empty_message"] = $html;
        }


        echo json_encode($response);
        

    }

    public function updateUser(){
        $this->validate("first_name","First Name", "required|strip_tags|trim|xss_clean");
        $this->validate("last_name","First Name", "required|strip_tags|trim|xss_clean");
        $this->validate("email","Email Address", "required|strip_tags|trim|xss_clean");
        $this->validate("username","Username", "required|strip_tags|trim|xss_clean");

        if( hash_equals($this->session->csrf, $this->_post('csrf')) ){
            if($this->form_validation->run()){
                $data = array(
                    "first_name" => $this->_post("first_name"),
                    "last_name" => $this->_post("last_name"),
                    "email" => $this->_post("email"),
                    "username" => $this->_post("username"),
                    "birthday" => $this->_post("birthday"),
                    "marital_status" => $this->_post("marital_status"),
                    "gender" => $this->_post("gender"),
                    "contact_no" => $this->_post("contact_no"),
                    "tel_no" => $this->_post("tel_no"),
                    "address" => $this->_post("address"),
                    "city" => $this->_post("city"),
                    "zip" => $this->_post("zip"),
                );
                $where = array(
                    "id" => $this->_post("user_id"),
                );
                $this->admin->update("users", $data, $where);
                $response["message"] = "Successfully Updated";
                $response["success"] = TRUE;
            }
            else{
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                    $response['success'] = false;
                    $response['errormsg'] = false;
                }
                $response["message"] = "Please check your fields again!";
            }
        }
        else{

            $response['message'] = "Error Occured, Please try again!";
            $response['success'] = false;
            
        }

        echo json_encode($response);
        // $data 
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