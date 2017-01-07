<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Auto Loan                         *
 * Script : front end  controller             *
 * Start Date : 23-07-2016                    *
 * Last Update : 23-07-2016                   *
 **********************************************/

class Snd_account extends CI_Controller
{
    public function i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'I am', 'trim|required|is_unique[snd_account_i_am.i_am]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_account_i_am';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'snd_account/i_am/success');
                } else {
                    redirect(base_url().'snd_account/i_am/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_account_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_i_am/success');
                } else {
                    redirect(base_url().'snd_account/edit_i_am/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required|is_unique[snd_deposit_amount_range.deposit_amount_range]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Amount";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/deposit_amount_range');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'deposit_amount_range' => $this->input->post('txtDepositAmount'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_deposit_amount_range';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'snd_account/deposit_amount/success');
                } else {
                    redirect(base_url().'snd_account/deposit_amount/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_deposit_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/edit_deposit_amount');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'deposit_amount_range' => htmlentities($this->input->post('txtDepositAmount')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_deposit_amount_range';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositAmountId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_deposit_amount/success');
                } else {
                    redirect(base_url().'snd_account/edit_deposit_amount/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtSndAccountName', 'SND Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtNoticeDay', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/snd_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'snd_name' => $this->input->post('txtSndAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'notice_day' => $this->input->post('txtNoticeDay'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'deposit_amount_id' => $this->input->post('txtDepositAmount'),
                    'available_offer' => $this->input->post('txtAvailableOffer'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'snd_account/account_info/success');
                } else {
                    redirect(base_url().'snd_account/account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function account_list(){
        $data['title'] = "Account Information list";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/snd/snd_account_list');
        $this->load->view('admin/block/footer');
    }


    public function edit_account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }


            $this->form_validation->set_rules('txtSndAccountName', 'SND Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtNoticeDay', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/edit_snd_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'snd_name' => $this->input->post('txtSndAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'notice_day' => $this->input->post('txtNoticeDay'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'deposit_amount_id' => $this->input->post('txtDepositAmount'),
                    'available_offer' => $this->input->post('txtAvailableOffer'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'snd_info';
                $this->Common_model->where = array('id' => $this->input->post('txtSNDAccountId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_account_info/success');
                } else {
                    redirect(base_url().'snd_account/edit_account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



}