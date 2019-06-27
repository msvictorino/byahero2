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
        $config["per_page"] = 10;
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

    public function createLocation(){
        $config['upload_path'] = './uploads/locations/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 15000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $config['file_name'] = "byahero-locations-". date("Y-m-d"). '_' . time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->validate("name","Name", "required|strip_tags|trim|xss_clean");
        $this->validate("region","Region", "required|strip_tags|trim|xss_clean");
        
        // echo json_encode($_POST);
        // exit();
        $response['error_upload'] = FALSE;
        $response['success'] = FALSE;
        if($this->form_validation->run()){
            if (!$this->upload->do_upload('imgInp')) {
                $response['error'] = strip_tags($this->upload->display_errors());
                $response['error_upload'] = TRUE;
                $response['success'] = FALSE;
            } 
            else{
                
                $image = $this->upload->data('file_name');
                $data = array(
                    "name" => $this->_post("name"),
                    "region" => $this->_post("region"),
                    "description" => $this->_post("description"),
                    "upload_path" => $image,
                );
                $response["data"] = $data;
                if($this->admin->insert("locations", $data)){

                    $response['success'] = TRUE;
                    $response['message'] = "Location Created";  
                } 
                else {
                    
                    $response['success'] = FALSE;
                    $response['message'] = "An error occurred.";   
                }
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

    public function createTour(){
        $config['upload_path'] = './uploads/tours/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 15000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $config['file_name'] = "byahero-tours-". date("Y-m-d"). '_' . time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->validate("name","Name", "required|strip_tags|trim|xss_clean");
        $this->validate("region","Region", "required|strip_tags|trim|xss_clean");
        $this->validate("location","Location", "required|strip_tags|trim|xss_clean");
        $this->validate("pax","Total Pax", "required|strip_tags|trim|xss_clean");
        $this->validate("price","Price", "required|strip_tags|trim|xss_clean");
         
        $response['error_upload'] = FALSE;
        $response['success'] = FALSE;
        if($this->form_validation->run()){
            if (!$this->upload->do_upload('imgInp')) {
                $response['error'] = strip_tags($this->upload->display_errors());
                $response['error_upload'] = TRUE;
                $response['success'] = FALSE;
            } 
            else{
                
                $image = $this->upload->data('file_name');
                $data = array(
                    "name" => $this->_post("name"),
                    "location_id" => $this->_post("location"),
                    "description" => $this->_post("description"),
                    "pax" => $this->_post("pax"),
                    "price" => $this->_post("price"),
                    "upload_path" => $image,
                );
                $response["data"] = $data;
                if($this->admin->insert("tours", $data)){

                    $response['success'] = TRUE;
                    $response['message'] = "Tour Created";  
                } 
                else {
                    
                    $response['success'] = FALSE;
                    $response['message'] = "An error occurred.";   
                }
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

    public function getLocationByRegion(){
        $region = $this->_post('region');
        $data = array("region" => $region);
        $locations = $this->admin->fetch("locations", $data);
        $response = array("success" => FALSE);
        if($locations){
            if(sizeof($locations) > 0){
                $html = '';
                foreach($locations as $l){
                    $html .= '<option value="'. $l->id .'">' . $l->name . '</option>';
                }
                $response['html'] = $html;
                $response['success'] = TRUE;
            }
        }

        echo json_encode($response);
        
    }

    public function getTours(){
        $this->load->library("pagination");
        $search = $this->input->get("search");
        $columns = array(
            "name" => $search, 
            "description" => $search, 
        );
        
        $response['test'] = $user = $this->user->fetch_like("tours", $columns, $search, "created_at"); 

        $totalUsers = 0;
        if($search != ""){
            
            $user = $this->user->fetch_like("tours", $columns, $search, "created_at");
            if($user)
                $totalUsers = count($this->user->fetch_like("tours", $columns, $search, "created_at")); 
        }
        else
            $totalUsers = count($this->user->fetch("tours"));
         
        $config = array();
        $config["base_url"] = "";
        $config["total_rows"] = $totalUsers;
        $config["per_page"] = 10;
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
            $users = $this->admin->fetchPaginationTourLocation("tours", $columns, $search, "created_at", $config["per_page"], $start);
        }
        else
            $users = $this->admin->fetchPaginationTourLocation("tours", NULL, NULL, "created_at", $config["per_page"], $start);

        // initialize to check if there are data 
        $response["success"] = false;
        $response["users"] = $users;
        
        if($users){
            if(count($users) > 0){
                $html = '<table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Location</th>
                        <th>Name</th>
                        <th>Pax</th>
                        <th>Price</th> 
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
                $ctr = 1;
                foreach($users as $u){
                    $html .= '<tr>
                                <td>'. $ctr++ .'</td>
                                <td class="text-capitalize">'. $u->location_name .'</td>
                                <td>'. $u->name .'</td>
                                <td>'. $u->pax .'</td>
                                <td>'. $u->price . '</td> 
                                <td>'. $u->created_at .'</td>
                                <td> 
                                    <a class="btn btn-info btn-sm" href="'. base_url() . 'admin/tours"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm btn-add-package" href="#" data-toggle="modal" data-target="#add-package-modal" data-id="'. $u->id.'"><i class="fa fa-plus"></i></a>
                                </td>
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

    // Package Module
    
    public function getPackages(){
        $this->load->library("pagination");
        $search = $this->input->get("search");
        $columns = array(
            "name" => $search, 
            "description" => $search, 
        );
        
        $response['test'] = $user = $this->user->fetch_like("packages", $columns, $search, "created_at"); 

        $totalUsers = 0;
        if($search != ""){
            
            $user = $this->user->fetch_like("packages", $columns, $search, "created_at");
            if($user)
                $totalUsers = count($this->user->fetch_like("packages", $columns, $search, "created_at")); 
        }
        else
            $totalUsers = count($this->user->fetch("packages"));
         
        $config = array();
        $config["base_url"] = "";
        $config["total_rows"] = $totalUsers;
        $config["per_page"] = 10;
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
        $columns = array(
            "packages.name" => $search, 
            "packages.description" => $search, 
        );
        if($search != ""){ 
            $users = $this->admin->fetchPaginationPackageTour("packages", $columns, $search, "created_at", $config["per_page"], $start);
        }
        else
            $users = $this->admin->fetchPaginationPackageTour("packages", NULL, NULL, "created_at", $config["per_page"], $start);

        // initialize to check if there are data 
        $response["success"] = false;
        $response["users"] = $users;
        
        if($users){
            if(count($users) > 0){
                $html = '<table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Package Name</th>
                        <th>Tour Name</th>
                        <th>Location Name</th> 
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
                $ctr = 1;
                foreach($users as $u){
                    $html .= '<tr>
                                <td>'. $ctr++ .'</td>
                                <td class="text-capitalize">'. $u->name .'</td>
                                <td class="text-capitalize">'. $u->tour_name .'</td>
                                <td class="text-capitalize">'. $u->location_name .'</td> 
                                <td>'. $u->created_at .'</td>
                                <td> 
                                    <a class="btn btn-info btn-sm" href="'. base_url() . 'admin/tours"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm btn-add-package-pax" href="#" data-toggle="modal" data-target="#add-package-pax-modal" data-id="'. $u->id.'"><i class="fa fa-plus"></i></a>
                                </td>
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

    public function createPackage(){
        
        $this->validate("name","Name", "required|strip_tags|trim|xss_clean");
        $this->validate("description","Iterenary", "required|strip_tags|trim|xss_clean");
        $response = array("success" => TRUE, "message" => "");
        if($this->form_validation->run()){
            $data = array(
                "name" => $this->_post("name"),
                "description" => $this->_post("description"),
                "tour_id" => $this->_post("tour_id"),
            );
            $paxes = $this->_post("pax");
            $amounts = $this->_post("amount");
            $pax_data = array();
            if($this->admin->insert("packages", $data)){
                
                $response['success'] = TRUE;
                $response['message'] = "Package Created"; 
                $package_id = $this->db->insert_id();
                if(is_array($paxes)){
                    if(sizeof($paxes) > 0){

                        for($i = 0; $i < sizeof($paxes); $i++){
                            $pax_data[] = array(
                                "pax" => $paxes[$i],
                                "amount" => $amounts[$i],
                                "package_id" => $package_id,
                            );
                        }

                        if($this->admin->insert_batch('packages_pax', $pax_data)){
                            
                            $response['success'] = TRUE;
                            $response['message'] = "Package Created"; 
                        }
                        else{
                            $response['success'] = TRUE;
                            $response['message'] = "An Error Occurred"; 
                        }
                    }
                }
            }
            else{
                $response['success'] = TRUE;
                $response['message'] = "An Error Occurred"; 
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

    public function createPackagePax(){
         
        $response = array("success" => TRUE, "message" => "");
        $paxes = $this->_post("pax");
        $amounts = $this->_post("amount");
        $package_id = $this->_post("package_id");
        $pax_data = array();
        $required = false;
        if(is_array($paxes) && is_array($amounts)){
            if(sizeof($paxes) > 0 && sizeof($amounts) > 0){

                for($i = 0; $i < sizeof($paxes); $i++){
                    $pax_data[] = array(
                        "pax" => $paxes[$i],
                        "amount" => $amounts[$i],
                        "package_id" => $package_id,
                    );
                    if( !($amounts[$i] != "" && $amounts[$i] > 0) )
                        $required = true;
                }
                if(!$required){
                    if($this->admin->insert_batch('packages_pax', $pax_data)){
                        $response['success'] = TRUE;
                        $response['message'] = "Package Pax Created"; 
                    }
                    else{
                        $response['success'] = TRUE;
                        $response['message'] = "An Error Occurred"; 
                    }
                }
                else{
                    $response['success'] = FALSE;
                    $response['message'] = "The fields must not be empty"; 
                }
            }
        }
        else{
            $response['success'] = FALSE;
            $response['message'] = "There are no data"; 
        }

        echo json_encode($response);
    }

    public function getPackagesPax(){
        
        $package_id = $this->_post('package_id');
        $data = array("package_id" => $package_id);
        $packages_pax = $this->admin->fetch("packages_pax", $data);
        $response = array("success" => FALSE);
        if($packages_pax){
            if(sizeof($packages_pax) > 0){
                $html = '';
                foreach($packages_pax as $l){
                    $html .= '<p>' . $l->pax .' PAX - P' . $l->amount .' = P' . ($l->amount * $l->pax) .'</p>' ;
                }
                $response['html'] = $html;
                $response['success'] = TRUE;
            }
        }

        echo json_encode($response);
    }

    // End Package 


    // Testimonials Modules
    
    public function getTestimonials(){
        $this->load->library("pagination");
        $search = $this->input->get("search");
        $columns = array(
            "first_name" => $search, 
            "last_name" => $search, 
            "email" => $search, 
            "contact" => $search, 
        );
        
        $response['test'] = $user = $this->user->fetch_like("testimonials", $columns, $search, "created_at"); 

        $totalUsers = 0;
        if($search != ""){
            
            $user = $this->user->fetch_like("testimonials", $columns, $search, "created_at");
            if($user)
                $totalUsers = count($this->user->fetch_like("testimonials", $columns, $search, "created_at")); 
        }
        else
            $totalUsers = count($this->user->fetch("testimonials"));
         
        $config = array();
        $config["base_url"] = "";
        $config["total_rows"] = $totalUsers;
        $config["per_page"] = 10;
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
            $users = $this->admin->fetchPagination("testimonials", $columns, $search, "created_at", $config["per_page"], $start);
        }
        else
            $users = $this->admin->fetchPagination("testimonials", NULL, NULL, "created_at", $config["per_page"], $start);

        // initialize to check if there are data 
        $response["success"] = false;
        $response["users"] = $users;
        
        if($users){
            if(count($users) > 0){
                $html = '<table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th> 
                        <th>Rate</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
                $ctr = 1;
                foreach($users as $u){
                    $html .= '<tr>
                                <td>'. $ctr++ .'</td>
                                <td class="text-capitalize">'. $u->first_name . ' '. $u->last_name .'</td>
                                <td class="text-capitalize">'. $u->email .'</td>
                                <td class="text-capitalize">'. $u->contact .'</td>
                                <td>';
                                    for($i = 0; $i < $u->rate; $i++) $html .= '<i class="fa fa-star"></i>'; 
                                    $html .= 
                                '</td>
                                <td>'. $u->created_at .'</td>
                                <td>'. ($u->status == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Not Active</span>') .'</td>
                                <td>  
                                    <button class="btn btn-info btn-sm btn-update-test-status" href="#"  data-id="'. $u->id.'">' . ($u->status == 1 ? 'Deactivate' : 'Activate') . '</button>
                                    <a class="btn btn-info btn-sm btn-view-rate" href="#" data-toggle="modal" data-target="#view-testimonial-modal" data-id="'. $u->id.'"><i class="fa fa-eye"></i></a>
                                </td>
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

    public function getTestimonialById(){
        $testimonial = $this->admin->fetch("testimonials", array("id" => $this->_post("test_id")));
        $response = array("success" => FALSE);
        if($testimonial){
            if(sizeof($testimonial) > 0){
                $testimonial = $testimonial[0];
                $response["success"] = TRUE;
                $response["data"] = $testimonial;
            } 
        }
        echo json_encode($response);
    }

    public function updateTestimonialStatus(){
        $where_data = array("id" => $this->_post("test_id"));
        $testimonial = $this->admin->fetch("testimonials", $where_data );
        if($testimonial){
            if(sizeof($testimonial) > 0){
                $testimonial = $testimonial[0];
                $update_status_data = array("status" => ($testimonial->status > 0 ? 0 : 1));
                $this->admin->update("testimonials", $update_status_data,$where_data);
                $response["success"] = TRUE;
                $response["message"] = "Update Status Successful";
                $response["data"] = $testimonial;
            } 
        }
        if(!$response["success"])
            $response["message"] = "An errorr occurred";

        echo json_encode($response);
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