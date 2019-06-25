<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        
    }

    //About Us DISPLAY
    public function index(){
        if(!($this->session->is_logged_in && $this->session->is_booking)){
            redirect("/login");
        }
        //$this->debug($_SESSION);
        $data["curr_path"] = $this->uri->segment(1);
        
        $data["tour"] = $this->user->fetch("tours", array("id" => $this->session->tour_id))[0];
        $data["package"] = $this->user->fetch("packages", array("id"=>$this->session->package_id))[0];
        $data["package_pax"] = $this->user->fetch("packages_pax", array("id"=>$this->session->pax_id))[0];
        $travel_date = $this->session->year . '-' . ($this->session->month > 9 ? $this->session->month : "0" . $this->session->month) . '-' . ($this->session->day > 9 ? $this->session->day : "0" . $this->session->day);
        $data["travel_date"] = date("Y-m-d", strtotime($travel_date));
        $data["user"] = $this->session->user;
        // $this->debug($data);
        $this->load->view('frontend/includes/header', $data);   
        $this->load->view('frontend/pages/booking');
        $this->load->view('frontend/includes/footer');
    }

    public function saveBooking(){
        if(!($this->session->is_logged_in && $this->session->is_booking)){
            redirect("/login");
        }
        $pax = $this->user->fetch("packages_pax", array("id" => $this->session->pax_id))[0];
        $data = array(
            "tours_id" => $this->session->tour_id,
            "packages_id" => $this->session->package_id,
            "packages_pax_id" => $this->session->pax_id,
            "user_id" => $this->session->user->id,
            "amount" => $pax->amount,
            "pax" => $pax->pax,
            'travel_date' => $this->session->year . '-' . ($this->session->month > 9 ? $this->session->month : "0" . $this->session->month) . '-' . ($this->session->day > 9 ? $this->session->day : "0" . $this->session->day),
        );

        $response = array("success" => FALSE, "message" => "An error occurred.");
        if($this->user->insert("transactions", $data)){
            $unset_data = array(
                "tour_id" ,
                "package_id"  ,
                "pax_id" ,
                "day" ,
                "month"  ,
                "year" ,
                "is_booking" ,
                "prev_url", 
            );
            $this->session->unset_userdata($unset_data);
            $response["message"] = "Booked Successfully! Please proceed with the payment";
            $response["success"] = TRUE;
        }

        echo json_encode($response);
    }

    public function uploadPayment(){
          
        $config['upload_path'] = './uploads/payments/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 15000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $config['file_name'] = "byahero-payment-". date("Y-m-d"). '_' . time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        $response['error_upload'] = FALSE;
        $response['success'] = FALSE;
        if (!$this->upload->do_upload('imgInp')) {
            $response['error'] = strip_tags($this->upload->display_errors());
            $response['error_upload'] = TRUE;
            $response['success'] = FALSE;
        } 
        else{
            
            $image = $this->upload->data('file_name');
            $data['upload_path'] = $image;
            $response["data"] = $data; 
            $this->user->update('transactions', $data, array('id' => 1));
            $response['success'] = TRUE;
            $response['message'] = "Payment Uploaded";  
        }


        echo json_encode($response);
        

    }


    public function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}