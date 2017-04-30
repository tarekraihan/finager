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

//            $this->load->view('front_end/login');
            $this->load->view('front_end/blabla');
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
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function debit_card_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_compare');
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
        $this->load->view('front_end/home_loan_landing');
        $this->load->view('front_end/block/footer');
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
        $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
        $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/personal_loan_landing');
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function fdr_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr_compare');
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
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
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function millionaire(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_landing');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }



    public function all_millionaire(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function millionaire_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_details');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function millionaire_compare(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_compare');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }



    public function money_maximizer(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer_landing');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function all_money_maximizer(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function bank_details(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/bank_details');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function more_logo(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/all_logo');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }

    public function PrivacyPolicy(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/PrivacyPolicy');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }
	
	public function terms_condition(){
        if ($this->session->userdata('lovemebaby')) {
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/terms_condition');
            $this->load->view('front_end/block/footer');
        }else{
            redirect(base_url().'en/login/');
        }
    }


    public function ajax_get_subscribe()
    {
        $email = $this->input->post('email');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[subscriptions.email_address]');

        if ($this->form_validation->run() == FALSE) {
            $html = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
            $html .= validation_errors();
            $html .= '</div>';
            echo $html;
        } else {
            $this->Common_model->data = array(
                'email_address' => htmlentities($email),
                'ip_address' => $this->input->ip_address(),
                'created' => date('Y-m-d h:i:s')
            );
            $this->Common_model->table_name = "subscriptions";
            $result = $this->Common_model->insert();

            if ($result) {
                $html = '<div class="alert alert-success" role="alert"><strong> Thank You!</strong> You successfully Subscribe.</div>';
                echo $html;
            } else {
                $html = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
                $html .= 'Something going wrong. Please try again!';
                $html .= '</div>';
                echo $html;
            }

        }
    }

}