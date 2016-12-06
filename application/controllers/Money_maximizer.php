<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Personal Loan                     *
 * Script : back end  controller              *
 * Start Date : 30-08-2016                    *
 * Last Update : 01-08-2016                   *
 **********************************************/

class Money_maximizer extends CI_Controller {

    public function your_benefits($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required|is_unique[money_maxi_choose_your_benefit.your_benefit]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Your Benefit";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/add_your_benefit');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'your_benefit' => $this->input->post('txtYourBenefit'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_choose_your_benefit';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'money_maximizer/your_benefits/success');
                } else {
                    redirect(base_url().'money_maximizer/your_benefits/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_your_benefits($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit your benefits";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/edit_your_benefit');
                $this->load->view('admin/block/footer');
            }else{

                $this->Common_model->data = array(
                    'your_benefit' => $this->input->post('txtYourBenefit'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_choose_your_benefit';
                $this->Common_model->where = array('id' => $this->input->post('txtYourBenefitId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'money_maximizer/edit_your_benefits/success');
                } else {
                    redirect(base_url().'money_maximizer/edit_your_benefits/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function add_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Credit Facility', 'trim|required');
            $this->form_validation->set_rules('txtDurationOfBenefit', 'Duration Of Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $is_fixed =$this->input->post('is_fixed');
                $fixed = 0;
                if($is_fixed == 'fixed'){
                    $fixed =1;
                }
                $is_non_bank =$this->input->post('is_non_bank');
//                echo $is_non_bank; die;
                $non_bank = 0;
                if($is_non_bank == '1'){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'choose_your_benefit_id' => $this->input->post('txtYourBenefit'),
                    'credit_facility' => $this->input->post('txtLoanFacility'),
                    'duration_of_benefit' => $this->input->post('txtDurationOfBenefit'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_info';
                $result= $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'money_maximizer/add_deposit_info/success');
                } else {
                    redirect(base_url().'money_maximizer/add_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_list(){
        $data['title'] = "Loan Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/money_maximizer/deposit_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Credit Facility', 'trim|required');
            $this->form_validation->set_rules('txtDurationOfBenefit', 'Duration Of Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/edit_deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $is_non_bank =$this->input->post('is_non_bank');
//                echo $is_non_bank; die;
                $non_bank = 0;
                if($is_non_bank == '1'){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'choose_your_benefit_id' => $this->input->post('txtYourBenefit'),
                    'credit_facility' => $this->input->post('txtLoanFacility'),
                    'duration_of_benefit' => $this->input->post('txtDurationOfBenefit'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );


                $this->Common_model->table_name = 'money_maxi_info';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositId'));
                $result =$this->Common_model->update();


                if ($result) {
                    redirect(base_url().'money_maximizer/edit_deposit_info/success');
                } else {
                    redirect(base_url().'money_maximizer /edit_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


}