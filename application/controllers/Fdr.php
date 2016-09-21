<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : FDR Module                        *
 * Script : back end  controller              *
 * Start Date : 07-09-2016                    *
 * Last Update : 08-09-2016                   *
 **********************************************/

class Fdr extends CI_Controller {
    public function i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required|is_unique[fdr_i_want.i_want]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/i_want');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_want' => $this->input->post('txtIWant'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_want';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'fdr/i_want/success');
                } else {
                    redirect(base_url().'fdr/i_want/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_i_want');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_want' => htmlentities($this->input->post('txtIWant')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_want';
                $this->Common_model->where = array('id' => $this->input->post('txtIWantId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_i_want/success');
                } else {
                    redirect(base_url().'fdr/edit_i_want/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtDepositType', 'Deposit Type', 'trim|required|is_unique[deposit_type.deposit_name]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/deposit_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'deposit_name' => $this->input->post('txtDepositType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'deposit_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'fdr/deposit_type/success');
                } else {
                    redirect(base_url().'fdr/deposit_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_deposit_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtDepositType', 'Deposit Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_deposit_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'deposit_name' => htmlentities($this->input->post('txtDepositType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'deposit_type';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_deposit_type/success');
                } else {
                    redirect(base_url().'fdr/edit_deposit_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[fdr_tenure.tenure]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/tenure');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'tenure' => $this->input->post('txtTenure'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_tenure';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'fdr/tenure/success');
                } else {
                    redirect(base_url().'fdr/tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'tenure' => htmlentities($this->input->post('txtTenure')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_tenure/success');
                } else {
                    redirect(base_url().'fdr/edit_tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'I am', 'trim|required|is_unique[fdr_i_am.i_am]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_am';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'fdr/i_am/success');
                } else {
                    redirect(base_url().'fdr/i_am/error');
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
                $this->load->view('admin/fdr/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_i_am/success');
                } else {
                    redirect(base_url().'fdr/edit_i_am/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function draft_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/draft_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_info_draft';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'fdr/draft_info/success');
                } else {
                    redirect(base_url().'fdr/draft_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_draft_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_draft_info');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'fdr_info_draft';
                $this->Common_model->where = array('id' => $this->input->post('txtDraftId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'fdr/edit_draft_info/success');
                } else {
                    redirect(base_url().'fdr/edit_draft_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function draft_list(){
        $data['title'] = "Draft Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/fdr/draft_list');
        $this->load->view('admin/block/footer');
    }

    public function fdr_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/fdr_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_info_draft';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'fdr/fdr_info/success');
                } else {
                    redirect(base_url().'fdr/fdr_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_draft_fdr_info(){
        if ($this->session->userdata('email_address')) {


        }else{
            redirect(base_url().'backdoor');
        }

    }
}