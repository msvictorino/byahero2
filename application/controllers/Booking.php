<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        if(!($this->session->is_logged_in && $this->session->is_booking)){
            redirect("/login");
        }
    }

    //About Us DISPLAY
    public function index(){
        //$this->debug($_SESSION);
        $data["curr_path"] = $this->uri->segment(1);
        
        $data["tour"] = $this->user->fetch("tours", array("id" => $this->session->tour_id))[0];
        $data["package"] = $this->user->fetch("packages", array("id"=>$this->session->package_id))[0];
        $data["package_pax"] = $this->user->fetch("packages_pax", array("id"=>$this->session->pax_id))[0];
        $travel_date = $this->session->year . '-' . ($this->session->month > 9 ? $this->session->month : "0" . $this->session->month) . '-' . ($this->session->day > 9 ? $this->session->day : "0" . $this->session->day);
        $data["travel_date"] = date("Y-m-d", strtotime($travel_date));
        $this->debug($data);
        $this->load->view('frontend/includes/header', $data);   
        $this->load->view('frontend/pages/booking');
        $this->load->view('frontend/includes/footer');
    }

    public function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}