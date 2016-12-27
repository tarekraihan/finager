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

class Current_account extends CI_Controller
{
    public function i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'I am', 'trim|required|is_unique[current_account_i_am.i_am]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_i_am';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'current_account/i_am/success');
                } else {
                    redirect(base_url().'current_account/i_am/error');
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
                $this->load->view('admin/current_account/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'current_account/edit_i_am/success');
                } else {
                    redirect(base_url().'current_account/edit_i_am/error');
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

            $this->form_validation->set_rules('txtCurrentAccountName', 'Current Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtTotalBranch', 'Total Branch', 'trim|required');
            $this->form_validation->set_rules('txtFundTransfer', 'Fund Transfer', 'trim|required');
            $this->form_validation->set_rules('txtOverdraftFacility', 'Overdraft Facility', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtPrivileges', 'Privileges', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/account_info');
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
                    'current_account_name' => $this->input->post('txtCurrentAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'total_branch' => $this->input->post('txtTotalBranch'),
                    'fund_transfer' => $this->input->post('txtFundTransfer'),
                    'overdraft_facility' => $this->input->post('txtOverdraftFacility'),
                    'privilege' => $this->input->post('txtPrivileges'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'current_account/account_info/success');
                } else {
                    redirect(base_url().'current_account/account_info/error');
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
        $this->load->view('admin/current_account/current_account_list');
        $this->load->view('admin/block/footer');
    }


    public function edit_account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCurrentAccountName', 'Current Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtTotalBranch', 'Total Branch', 'trim|required');
            $this->form_validation->set_rules('txtFundTransfer', 'Fund Transfer', 'trim|required');
            $this->form_validation->set_rules('txtOverdraftFacility', 'Overdraft Facility', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtPrivileges', 'Privileges', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/edit_account_info');
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
                    'current_account_name' => $this->input->post('txtCurrentAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'total_branch' => $this->input->post('txtTotalBranch'),
                    'fund_transfer' => $this->input->post('txtFundTransfer'),
                    'overdraft_facility' => $this->input->post('txtOverdraftFacility'),
                    'privilege' => $this->input->post('txtPrivileges'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_info';
                $result = $this->Common_model->update();

                $this->Common_model->where = array('dps_info_id' => $this->input->post('txtInfoId'));
                if ($result) {
                    redirect(base_url().'current_account/edit_account_info/success');
                } else {
                    redirect(base_url().'current_account/edit_account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



}