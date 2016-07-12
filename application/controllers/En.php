<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : front end  controller             *
 * Start Date : 12-03-2016                    *
 * Last Update : 29-03-2016                   *
 **********************************************/

class En extends CI_Controller {

    public function login(){

        $email = htmlentities($this->input->post('txtEmail'));
        $password = htmlentities($this->input->post('txtPassword'));

        if($email == "imvirgin" && $password == "MeToo"){
            $data['lovemebaby'] = "lovemebaby";
            $this->session->set_userdata($data);
            redirect(base_url().'en/index/');
        }else{

            $this->load->view('front_end/login');
        }
    }

    public function index(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/index');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function card(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card');
        $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function card_details(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card_details');
        $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function card_compare(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card_compare');
        $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }
    public function home_loan(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan');
        $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function logout(){
        $this->session->unset_userdata('lovemebaby');

        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url().'en', 'refresh');
    }

}