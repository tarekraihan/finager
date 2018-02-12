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
    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }


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

   /* public function do_upload($path, $field = '')
    {
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4096';
        $config['file_name'] = '1';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }*/

    public function draft_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/draft_info');
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
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'i_am_id' => $this->input->post('txtIAm'),
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
//            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_draft_info');
                $this->load->view('admin/block/footer');
            }else{

                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'i_am_id' => $this->input->post('txtIAm'),
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
//            print_r($this->input->post()); die;
            $this->form_validation->set_rules('txtProductName', 'Product Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - FDR Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/fdr_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $min_limit = $this->input->post('is_minimum_amount_no_limit');
                $max_limit = $this->input->post('is_maximum_amount_no_limit');

                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'product_name' => $this->input->post('txtProductName'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'no_limit_max_amount' => $max_limit,
                    'max_amount' => $this->input->post('txtMaximumDepositAmount'),
                    'no_limit_min_amount' => $min_limit,
                    'min_amount' => $this->input->post('txtMinimumDepositAmount'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'loan_facility' => $this->input->post('txtLoanFacility'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Save !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'fdr/fdr_info_list');
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
            $bank_id =$this->input->post('bank_id');
            $non_bank_id =$this->input->post('non_bank_id');
            $is_non_bank =$this->input->post('is_non_bank');
            $deposit_type =$this->input->post('deposit_type');
            $i_am =$this->input->post('i_am');
            if($is_non_bank == 1){
                $result =  $this->Select_model->get_all_fdr_draft_info($non_bank_id,$deposit_type,$i_am,$is_non_bank);
            }else{

                $result =  $this->Select_model->get_all_fdr_draft_info($bank_id,$deposit_type,$i_am,$is_non_bank);
            }
            $result = (array)$result;
            if($result){
                $data['process'] = true;
                $result = array_merge( $data, $result);
            }
            echo json_encode($result);
        }else{
            redirect(base_url().'backdoor');
        }

    }

    public function fdr_info_list(){
        $data['title'] = "FDR List Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/fdr/fdr_info_list');
        $this->load->view('admin/block/footer');
    }


    public function fdr_edit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtProductName', 'Product', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit FDR Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/fdr_edit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $min_limit = $this->input->post('is_minimum_amount_no_limit');
                $max_limit = $this->input->post('is_maximum_amount_no_limit');

                $is_non_bank =$this->input->post('is_non_bank');
//                echo $is_non_bank; die;
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'product_name' => $this->input->post('txtProductName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'no_limit_max_amount' => $max_limit,
                    'max_amount' => $this->input->post('txtMaximumDepositAmount'),
                    'no_limit_min_amount' => $min_limit,
                    'min_amount' => $this->input->post('txtMinimumDepositAmount'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'loan_facility' => $this->input->post('txtLoanFacility'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'fdr_info';
                $this->Common_model->where = array('id' => $this->input->post('txtFdrInfoId'));
                $result = $this->Common_model->update();

                if ($result) {
                    $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Updated !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'fdr/fdr_info_list');
                } else {
                    redirect(base_url().'fdr/fdr_edit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


//    Front End query--------------------------------

    public function ajax_get_fdr(){


        $fdr_user = $this->input->post('fdr_user');
        $fdr_tenure = $this->input->post('fdr_tenure');
        $principal_amount = floatval ( ($this->input->post('principal_amount')) ? $this->input->post('principal_amount') : '5000' );
        $fdr_bank_ids = $this->input->post('fdr_bank_ids');

        $WHERE = array(); $query = '';
        if(!empty($fdr_user)) {
            $WHERE[] = 'fdr_info.i_am_id = '.$fdr_user;
        }

        if(!empty($fdr_tenure)) {
            $WHERE[] = 'fdr_info.tenure_id = '.$fdr_tenure;
        }
        if(!empty($fdr_bank_ids)) {
            if(strstr($fdr_bank_ids,',')) {
                $data8 = explode(',',$fdr_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "fdr_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(fdr_info.bank_id = '.$fdr_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_fdr_loan_info($query);

//        echo  $res->num_rows(); die;

        //-----------Pagination start-----------------

        $config['base_url'] = base_url() . "en/all_fdr/";
        $config['total_rows'] = $res->num_rows();
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 4;
        $config['use_page_numbers'] = TRUE;

        //Link customization
        $config['full_tag_open'] = '<ul id="pagination" class="pagination pagination-centered">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3)-1)*$config['per_page'] : 0;

        $fdr_deposit =  $this->Front_end_select_model->select_fdr_loan_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

//        echo  $fdr_deposit->num_rows(); die;
        //        print_r($result->result()); die;
        //-------------Pagination End-------------------

//        $no_row = $fdr_deposit->num_rows();


        $fdr = '';
        foreach($fdr_deposit->result() as $row) {

            $bank = "";
            if ($row->is_non_bank == 1) {
                $bank = $row->non_bank_name;
            } else {
                $bank = $row->bank_name;
            }
            $bank_logo = "";
            if ($row->is_non_bank == 1) {
                $bank_logo = $row->non_bank_logo;
            } else {
                $bank_logo = $row->bank_logo;
            }


            $yearly_interest = floatval( $row->interest_rate ) ;
            $interest = ($yearly_interest / 100);
            $tenure = floatval($row->installment);
            $no_of_times = 12;
            $payment = ($principal_amount * pow(1 + $interest /$no_of_times,($no_of_times*($tenure/12))));
            $loan_facility = (!empty($row->loan_facility)) ? $row->loan_facility.'%' : 'N/A';

           /*$url = $bank.' '.$row->i_am.' '.$row->tenure.'-fdr';
            $slug = str_replace("/"," ",$url);
            $slug = url_title($slug,'dash',TRUE);

            $this->Common_model->data = array(
                'slug' => $slug
            );
            $this->Common_model->where = array('id' => $row->id);
            $this->Common_model->table_name = 'fdr_info';
            $this->Common_model->update();*/

            $fdr .= '<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'. base_url() .'compare-fdrs/'.$row->slug.'.html"><img title="'.$bank.'" class="img-responsive fdr_bank_logo" src="'. base_url() .'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
								<p class="text-center">'.$bank.'</p>
								<p class="text-center">
									<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
								</p>
								<p class="rating text-center">Rated By 5 Person</p>
							</div>

							<div class="col-sm-10 col-xs-10">
								<div class="row">
									<div class="col-sm-3 col-xs-3">
										<div class="card_text3">
											<h5>Deposited Amount</h5>
											<p>BDT '.number_format( $principal_amount ).'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Tenure</h5>
											<p>'. $row->tenure .'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Interest Rate</h5>
											<p>'.$yearly_interest.'%</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3">
										<div class="card_text3">
											<h5>Maturity Amount</h5>
											<p>BDT '. number_format( $payment ) .'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Loan Facility</h5>
											<p>'.$loan_facility.'</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a class="more_info" id="more_info'.$row->id.'" href="javascript:void(0)" data-toggle="collapse" data-fdr_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true" ></i> More Info</a></div>
									<div class="col-md-4"><a class="availableOffer" href="javascript:void(0)" data-toggle="collapse" data-available_offer="'.$row->id.'"><i class="fa fa-info-circle " aria-hidden="true" role="button" ></i> Available Offer</a></div>
									<div class="col-md-4"><a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/application.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a id="" href="javascript:void(0)" class="add-to-compare" data-fdr_id="'.$row->id.'"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="moreInfo'.$row->id.'" class="collapse">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="RequiredDocuments" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="UserReview" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
											<h4>Features</h4>
											'.$row->available_feature.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
											<h4>Eligibility</h4>
											'.$row->eligibility.'
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
											<h4>Required Documents</h4>
											'.$row->required_document.'
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions'.$row->id.'">
											<h4>Terms & Conditions</h4>
											'.$row->terms_and_conditions.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<h4>Review</h4>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
											<h4>User Review</h4>
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->

						<div id="availableOffer'.$row->id.'" class="collapse">
						    <h4>Available Offer</h4>


						</div>
                    </div>';
        }
        $fdr .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        echo $fdr;
    }


    public function ajax_count_selected_row(){


        $fdr_user = $this->input->post('fdr_user');
        $fdr_tenure = $this->input->post('fdr_tenure');
        $principal_amount = floatval ( ($this->input->post('principal_amount')) ? $this->input->post('principal_amount') : '5000' );
        $fdr_bank_ids = $this->input->post('fdr_bank_ids');

        $WHERE = array(); $query = '';
        if(!empty($fdr_user)) {
            $WHERE[] = 'fdr_info.i_am_id = '.$fdr_user;
        }

        if(!empty($fdr_tenure)) {
            $WHERE[] = 'fdr_info.tenure_id = '.$fdr_tenure;
        }
        if(!empty($fdr_bank_ids)) {
            if(strstr($fdr_bank_ids,',')) {
                $data8 = explode(',',$fdr_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "fdr_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(fdr_info.bank_id = '.$fdr_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_fdr_loan_info($query);
        $selected_row = $res->num_rows();
        $this->Common_model->table_name = 'fdr_info';
        $total_row = $this->Common_model->count_all();

        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;
    }


    public function ajax_compare_fdr_image(){
        $id = $this->input->post('fdr_id');
        $result = $this->Front_end_select_model->select_fdr_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'"  data-fdr_url='.$row->slug.' data-fdr_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }


    public function ajax_go_compare_page(){
        $id1 = $this->input->post('fdr_id1');
        $id2 = $this->input->post('fdr_id2');
        $amount = $this->input->post('fdr_deposit_amount');

        $newdata = array(
            'first_fdr'  => $id1,
            'second_fdr'  => $id2,
            'fdr_deposit_amount'  => $amount
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_fdr_quick_link(){
        $fdr_tenure = (!empty($this->input->post('fdr_tenure'))) ? $this->input->post('fdr_tenure') : '';
        $fdr_i_am = (!empty($this->input->post('fdr_i_am'))) ? $this->input->post('fdr_i_am') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

        $array_items = array('fdr_i_am', 'fdr_i_am_label', 'fdr_deposit_amount','fdr_deposit_amount_label','fdr_tenure','fdr_tenure_label','fdr_bank_ids');
        $this->session->unset_userdata($array_items);

        if( $fdr_tenure != ''){
            $newdata['fdr_tenure'] = $fdr_tenure;
        }

        if( $fdr_i_am != ''){
            $newdata['fdr_i_am'] = $fdr_i_am;
        }
        if($data == 'all'){
            $newdata['all']= '';
        }

        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_fdr_caching(){
        $fdr_i_am= $this->input->post('fdr_i_am');
        $fdr_i_am_label = $this->input->post('fdr_i_am_label');
        $fdr_deposit_amount = $this->input->post('fdr_deposit_amount');
        $fdr_deposit_amount_label = $this->input->post('fdr_deposit_amount_label');
        $fdr_tenure = $this->input->post('fdr_tenure');
        $fdr_tenure_label = $this->input->post('fdr_tenure_label');
        $fdr_bank_ids = $this->input->post('fdr_bank_ids');

        $bank_id_array = array();
        if(!empty($fdr_bank_ids)) {
            if(strstr($fdr_bank_ids,',')) {
                $data8 = explode(',',$fdr_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $fdr_bank_ids;
            }
        }


        $array_items = array('fdr_i_am', 'fdr_i_am_label', 'fdr_deposit_amount','fdr_deposit_amount_label','fdr_tenure','fdr_tenure_label','fdr_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'fdr_i_am'  => $fdr_i_am,
            'fdr_i_am_label' => $fdr_i_am_label,
            'fdr_deposit_amount' => $fdr_deposit_amount,
            'fdr_deposit_amount_label' => $fdr_deposit_amount_label,
            'fdr_tenure' => $fdr_tenure,
            'fdr_tenure_label' => $fdr_tenure_label,
            'fdr_bank_ids' => $bank_id_array,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='fdr'){
            $array_items = array('fdr_i_am', 'fdr_i_am_label', 'fdr_deposit_amount','fdr_deposit_amount_label','fdr_tenure','fdr_tenure_label','fdr_bank_ids');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';

    }
    public function unset_fdr_tenure_session(){
        $session = $this->input->post('fdr_tenure');
        if($session){
            $this->session->unset_userdata('fdr_tenure');
            $this->session->unset_userdata('fdr_tenure_label');
            echo 'success';
        }

    }

    public function unset_fdr_i_am_session(){
        $session = $this->input->post('fdr_i_am');
        if($session){
            $this->session->unset_userdata('fdr_i_am');
            $this->session->unset_userdata('fdr_i_am_label');
            echo 'success';
        }

    }
    public function unset_fdr_deposit_amount_session(){
        $session = $this->input->post('deposit_amount');
        if($session){
            $this->session->unset_userdata('fdr_deposit_amount');
            $this->session->unset_userdata('fdr_deposit_amount_label');
            echo 'success';
        }

    }
    public function unset_fdr_bank_id_session(){
        $id = $this->input->post('fdr_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['bank_name'];
            $bank = array_values($_SESSION['fdr_bank_ids']);

            if(($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['fdr_bank_ids'][$key]);
            }
        }
        echo 'success';
    }




}