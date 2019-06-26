<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
    }

    //About Us DISPLAY
    public function index(){
        $data["curr_path"] = $this->uri->segment(1);
        $data["user"] = $this->session->user;
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

    //Testimonials DISPLAY
    public function testimonials(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/testimonials/testimonials');
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
        $curr_path = $this->uri->segment(1); 
        $data["curr_path"] = $this->uri->segment(1);
        $region = $this->input->get("region");
        $destination = $this->input->get("destination"); 
        if($region != "" && $region != NULL){
            $regions = $this->user->fetch("locations", array("region" => $region));
            
            if($destination != "" && $destination != NULL){

                $destination = $this->user->fetch("locations", array("region" => $region, "name" => $destination)); 
                if($destination){ 
                    $dest = $destination[0]; 
                    $tours = $this->user->fetch("tours", array("location_id" => $dest->id));
                    $packages = $this->user->fetch("packages");
                    $data["tours"] = $tours;
                    $data["packages"] = $packages;
                    if($tours){
                        $prev_url["prev_url"] = $_SERVER['REQUEST_URI'];
                        $this->session->set_userdata($prev_url);
                        $this->load->view('frontend/includes/header', $data);
                        $this->load->view('frontend/pages/package/package');
                        $this->load->view('frontend/includes/footer'); 
                    }
                    else{
                        $this->noTours($data);
                    }
                }
                else{
                    $this->noPackage($data);
                }
            }
            else{
                if($regions){
                    $data["regions"] = $regions;
                    $this->load->view('frontend/includes/header', $data);
                    $this->load->view('frontend/pages/package/destination');
                    $this->load->view('frontend/includes/footer');
                }
                else{
                    $this->noPackage($data);
                }
            } 
        }
        else{
                $this->load->view('frontend/includes/header', $data);
                $this->load->view('frontend/pages/package/region');
                $this->load->view('frontend/includes/footer');
        } 
    }
 
    //Contact Us DISPLAY
    public function contact(){
        $data["curr_path"] = $this->uri->segment(1);
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/contact');
        $this->load->view('frontend/includes/footer');
    }

    //Profile Display
    public function profile(){
        if($this->session->is_logged_in){
            $checkData = array("uuid" => $this->session->uuid);
            if(!($this->user->fetch("users", $checkData)))
                $this->logout(); 
            else         
                $this->session->set_userdata("csrf", NULL);
        }
        else{
            redirect("/");
        }  
        $data["curr_path"] = $this->uri->segment(1);
        $user = $this->session->user;
        $transactions = $this->user->fetchTransactionTour(array("user_id" => $user->id));
        $paymentTransactions = $this->user->fetchTransactionTourPayment(array("user_id" => $user->id));
        // $this->debug($transactions);
        // $transactions = $this->user->fetch("transactions", array("user_id" => $this->session->user->id ));
        // $tours = array();
        // foreach ($transactions as $t) {
        //     $tour = $this->user->fetch("tours")
        // }
        $data["transactions"] = $transactions;
        $data["paymentTransactions"] = $paymentTransactions;
        $data["user"] = $user;

        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/profile/index');
        $this->load->view('frontend/includes/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("/");
    }

    public function noPackage($data){ 
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/package/no-package');
        $this->load->view('frontend/includes/footer');
    }

    public function noTours($data){ 
        $this->load->view('frontend/includes/header', $data);
        $this->load->view('frontend/pages/package/no-tours');
        $this->load->view('frontend/includes/footer');
    }


    public function savePackage(){
        $response = array("success" => TRUE, "message" => "Redirecting to Booking Page"); 
        $data = array(
            "tour_id" => $this->_post("tour_id"),
            "package_id" => $this->_post("package"),
            "pax_id" => $this->_post("pax"),
            "day" => $this->_post("day"),
            "month" => $this->_post("month"),
            "year" => $this->_post("year"),
            "is_booking" => TRUE, 
        );
        $response["data"] = $data;
        $this->session->set_userdata($data);
        echo json_encode($response);
    }

    
    public function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    
    public function createAudit(){
        // $data = array(
        //     "user_type" =>
        // );
        // $this->user->insert("audits", $data);
    }

    public function createCSRF(){
        return bin2hex(random_bytes(32));
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