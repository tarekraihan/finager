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

        if($email == "secret_login" && $password == "babydragon"){
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

    public function credit_card(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/credit_card_landing');
        $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function all_credit_card(){
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


    public function debit_card(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_landing');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function all_debit_card(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function debit_card_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function debit_card_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/home_loan_compare');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function home_loan(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan_landing');
        $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function all_home_loan(){
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

    public function home_loan_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/home_loan_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }
    public function home_loan_compare(){
        if ($this->session->userdata('lovemebaby')) {
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan_compare');
        $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function home_loan_chart(){
        $this->load->view('front_end/home_loan_chart');
    }
    public function logout(){
        $this->session->unset_userdata('lovemebaby');

        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url().'en', 'refresh');
    }

    public function car_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_landing');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function all_car_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function car_loan_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function car_loan_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_compare');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function auto_loan_chart(){
        $this->load->view('front_end/auto_loan_chart');
    }

    public function personal_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personl_loan_landing');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function all_personal_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personal_loan');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function personal_loan_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personal_loan_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function personal_loan_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personal_loan_compare');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function personal_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }


    public function education_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_landing');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function all_education_loan(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function education_loan_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function education_loan_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_compare');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function education_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }

    public function fdr_iframe(){
        $this->load->view('front_end/fdr_iframe.php');
    }


    public function fdr(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr_landing');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }



    public function all_fdr(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }



    public function fdr_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }



    public function dps(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_landing');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function all_dps(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function dps_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_details');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function dps_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_compare');
            $this->load->view('front_end/block/footer_home');
        }else{
            redirect(base_url().'en/login/');
        }
    }




}