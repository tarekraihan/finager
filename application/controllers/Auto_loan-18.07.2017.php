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

class Auto_loan extends CI_Controller
{

    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }

    public function applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtAutoLoanApplicant', 'Applicant Type ', 'trim|required|is_unique[auto_applicant.applicant]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/auto_loan_applicant');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'applicant' => $this->input->post('txtAutoLoanApplicant'),
                    'remarks' => $this->input->post('txtRemarks'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_applicant';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'auto_loan/applicant_type/success');
                } else {
                    redirect(base_url().'auto_loan/applicant_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function edit_applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtAutoLoanApplicant', 'Applicant Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/edit_applicant_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'applicant' => htmlentities($this->input->post('txtAutoLoanApplicant')),
                    'remarks' => htmlentities($this->input->post('txtRemarks')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_applicant';
                $this->Common_model->where = array('id' => $this->input->post('txtAutoLoanApplicantId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'auto_loan/edit_applicant_type/success');
                } else {
                    redirect(base_url().'auto_loan/edit_applicant_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function feature($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtFeature', ' Feature ', 'trim|required|is_unique[auto_features.auto_feature]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Feature";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/loan_feature');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'auto_feature' => $this->input->post('txtFeature'),
                    'remarks' => $this->input->post('txtRemarks'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_features';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'auto_loan/feature/success');
                } else {
                    redirect(base_url().'auto_loan/feature/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_feature($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtFeature', 'Feature', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Feature";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/edit_feature');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'auto_feature' => $this->input->post('txtFeature'),
                    'remarks' => $this->input->post('txtRemarks'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_features';
                $this->Common_model->where = array('id' => $this->input->post('txtFeatureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'auto_loan/edit_feature/success');
                } else {
                    redirect(base_url().'auto_loan/edit_feature/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function looking_for($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLookingFor', ' Looking For ', 'trim|required|is_unique[auto_i_want.i_want]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_want' => htmlentities($this->input->post('txtLookingFor')),
                    'remarks' => htmlentities($this->input->post('txtRemarks')),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_i_want';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'auto_loan/looking_for/success');
                } else {
                    redirect(base_url().'auto_loan/looking_for/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_looking_for($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtLookingFor', 'Looking For', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/edit_looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_want' => htmlentities($this->input->post('txtLookingFor')),
                    'remarks' => htmlentities($this->input->post('txtRemarks')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_i_want';
                $this->Common_model->where = array('id' => $this->input->post('txtLookingForId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'auto_loan/edit_looking_for/success');
                } else {
                    redirect(base_url().'auto_loan/edit_looking_for/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function user($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtUser', ' Loan User ', 'trim|required|is_unique[auto_i_am.i_am]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan User";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtUser'),
                    'remarks' => $this->input->post('txtRemarks'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_i_am';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'auto_loan/user/success');
                } else {
                    redirect(base_url().'auto_loan/user/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_user($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtUser', 'Loan User', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit User";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/edit_loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtUser')),
                    'remarks' => htmlentities($this->input->post('txtRemarks')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtUserId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'auto_loan/edit_user/success');
                } else {
                    redirect(base_url().'auto_loan/edit_user/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function loan_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtLoanName', ' Loan Name ', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor', ' Looking for', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', 'Min Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Max Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtAutoLoanUser[]', ' Loan User ', 'trim|required');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Short Description', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtFeatures', 'Features ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtDownPayment', 'down payment ', 'trim');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms and Conditions', 'required|trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/loan_information');
                $this->load->view('admin/block/footer');
            }else{

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
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'auto_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
                    'auto_loan_looking_for_id' => $this->input->post('txtLookingFor'),
                    'loan_short_description' => $this->input->post('txtLoanShortDescription'),
                    'interest_rate_min' => htmlentities($this->input->post('txtInterestRateMin')),
                    'interest_rate_max' => htmlentities($this->input->post('txtInterestRateMax')),
                    'interest_rate_average' => htmlentities($this->input->post('txtInterestRateAverage')),
                    'interest_rate_fixed' => htmlentities($this->input->post('txtInterestRateFixed')),
                    'security_required' => $this->input->post('txtSecurityRequired'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'features' => $this->input->post('txtFeatures'),
                    'eligibility_for_applying' => $this->input->post('txtEligibility'),
                    'review' => $this->input->post('txtReview'),
                    'is_fixed' => $fixed,
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'downpayment' => $this->input->post('txtDownPayment'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_loan_info';
              $last_insert_id = $this->Common_model->insert();
//                $result = $this->Common_model->insert();
/*
                foreach($this->input->post('txtLookingFor[]') as $lookingFor){
                    $this->Common_model->data = array(
                        'auto_loan_info_id'=>$last_insert_id,
                        'i_want_id'=> $lookingFor
                    );
                    $this->Common_model->table_name = 'auto_loan_info_vs_i_want';
                    $this->Common_model->insert();
                }
*/
                $result='';
                foreach($this->input->post('txtAutoLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'auto_loan_info_id'=>$last_insert_id,
                        'i_am_id'=> $user
                    );
                    $this->Common_model->table_name = 'auto_loan_info_vs_i_am';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'auto_loan/loan_info/success');
                } else {
                    redirect(base_url().'auto_loan/loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function loan_list(){
        $data['title'] = "Loan Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/auto_loan/loan_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_loan_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtLoanName', ' Loan Name ', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor', ' Looking for', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', 'Min Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Max Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtAutoLoanUser[]', ' Loan User ', 'trim|required');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Short Description', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtFeatures', 'Features ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtDownPayment', 'down payment ', 'trim');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms and Conditions', 'required|trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/edit_loan_info');
                $this->load->view('admin/block/footer');
            }else{

                $is_fixed =$this->input->post('is_fixed');
                $fixed = 0;
                if($is_fixed == 'fixed'){
                    $fixed =1;
                }
                $is_non_bank = $this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }
//                print_r($this->input->post());die;
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
//                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'auto_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
                    'auto_loan_looking_for_id' => $this->input->post('txtLookingFor'),
                    'loan_short_description' => $this->input->post('txtLoanShortDescription'),
                    'interest_rate_min' => htmlentities($this->input->post('txtInterestRateMin')),
                    'interest_rate_max' => htmlentities($this->input->post('txtInterestRateMax')),
                    'interest_rate_average' => htmlentities($this->input->post('txtInterestRateAverage')),
                    'interest_rate_fixed' => htmlentities($this->input->post('txtInterestRateFixed')),
                    'security_required' => $this->input->post('txtSecurityRequired'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'features' => $this->input->post('txtFeatures'),
                    'eligibility_for_applying' => $this->input->post('txtEligibility'),
                    'review' => $this->input->post('txtReview'),
                    'is_fixed' => $fixed,
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'downpayment' => $this->input->post('txtDownPayment'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                /*$this->Common_model->table_name = 'auto_loan_info';
                $last_insert_id = $this->Common_model->insert();*/

                $this->Common_model->table_name = 'auto_loan_info';
                $this->Common_model->where = array('id' => $this->input->post('txtAutoLoanId'));
                $this->Common_model->update();

                $result='';
                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtAutoLoanId"),$table='auto_loan_info_vs_i_am',$id_field='auto_loan_info_id');
                $result='';
                foreach($this->input->post('txtAutoLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'auto_loan_info_id'=>$this->input->post('txtAutoLoanId'),
                        'i_am_id'=> $user
                    );
                    $this->Common_model->table_name = 'auto_loan_info_vs_i_am';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'auto_loan/edit_loan_info/success');
                } else {
                    redirect(base_url().'auto_loan/edit_loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function loan_info_backed_by_tarek_03_07_2016($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtLoanName', ' Loan Name ', 'trim|required');
            $this->form_validation->set_rules('txtApplicantType[]', ' Applicant Type ', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor[]', ' Looking For ', 'trim|required');
            $this->form_validation->set_rules('txtHomeLoanUser[]', ' Loan User ', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', 'Min Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Max Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateAverage', 'Interest Rate Average ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateMin', 'Interest Rate Min ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateMax', 'Interest Rate Max ', 'trim|required');
            $this->form_validation->set_rules('txtMinIncomeSalaried', 'Min Income Salaried ', 'trim');
            $this->form_validation->set_rules('txtMinIncomeProfessional', 'Min Income Professional ', 'trim');
            $this->form_validation->set_rules('txtMinIncomeBusinessmen', 'Min income businessmen ', 'trim');
            $this->form_validation->set_rules('txtMinIncomeLandlord', 'Min income landlord ', 'trim');
            $this->form_validation->set_rules('txtMinIncomeNrb', 'Min Income NRB', 'trim');
            $this->form_validation->set_rules('txtDownPaymentNewCar', 'new car down payment ', 'trim');
            $this->form_validation->set_rules('txtDownPaymentOldCar', 'old car down payment ', 'trim');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required ', 'trim|required');
            $this->form_validation->set_rules('txtRePaymentType', 'Repayment Type ', 'trim|required');
            $this->form_validation->set_rules('txtRePaymentOption', 'Repayment Option ', 'trim|required');
            $this->form_validation->set_rules('txtProcessingFee', 'Processing Fee', 'trim|required');
            $this->form_validation->set_rules('txtEarlySettlementFee', 'Early Settlement Fee', 'trim|required');
            $this->form_validation->set_rules('txtPenaltyCharge', 'Partial Payment Fee', 'trim|required');
            $this->form_validation->set_rules('txtLoanReschedulingCharge', 'Loan Rescheduling Charge', 'trim|required');
            $this->form_validation->set_rules('txtMinimumTerm', 'Minimum Term', 'trim|required');
            $this->form_validation->set_rules('txtMaximumTerm', 'Maximum Term', 'trim|required');
            $this->form_validation->set_rules('txtAvailableOfEarlySettlement', 'Availability Of Early Settlement', 'trim|required');
            $this->form_validation->set_rules('txtAvailableOfPartialSettlement', 'Availability Of Partial Payment', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAge', 'Minimum Age', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtAutoLoanFeature[]', 'Auto loan feature', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/loan_information');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'auto_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
                    'min_income_salaried' => htmlentities($this->input->post('txtMinIncomeSalaried')),
                    'min_income_businessman' => htmlentities($this->input->post('txtMinIncomeBusinessmen')),
                    'min_income_professional' => htmlentities($this->input->post('txtMinIncomeProfessional')),
                    'min_income_landlord' => htmlentities($this->input->post('txtMinIncomeLandlord')),
                    'min_income_nrb' => htmlentities($this->input->post('txtMinIncomeNrb')),
                    'interest_rate_min' => htmlentities($this->input->post('txtInterestRateMin')),
                    'interest_rate_max' => htmlentities($this->input->post('txtInterestRateMax')),
                    'interest_rate_average' => htmlentities($this->input->post('txtInterestRateMax')),
                    'downpayment_new_car' => htmlentities($this->input->post('txtDownPaymentNewCar')),
                    'downpayment_old_car' => htmlentities($this->input->post('txtDownPaymentOldCar')),
                    'security_required' => htmlentities($this->input->post('txtSecurityRequired')),
                    'repayment_type' => htmlentities($this->input->post('txtRePaymentType')),
                    'repayment_option' => htmlentities($this->input->post('txtRePaymentOption')),
                    'processing_fee' => htmlentities($this->input->post('txtProcessingFee')),
                    'early_settlement_fee' => htmlentities($this->input->post('txtEarlySettlementFee')),
                    'penalty_charge' => htmlentities($this->input->post('txtPenaltyCharge')),
                    'loan_rescheduliling_charge' => htmlentities($this->input->post('txtLoanReschedulingCharge')),
                    'minimum_term' => htmlentities($this->input->post('txtMinimumTerm')),
                    'maximum_term' => htmlentities($this->input->post('txtMaximumTerm')),
                    'availability_of_early_settlement' => $this->input->post('txtAvailableOfEarlySettlement'),
                    'availablity_of_partial_settlement' => $this->input->post('txtAvailableOfPartialSettlement'),
                    'minimum_age' => htmlentities($this->input->post('txtMinimumAge')),
                    'required_document' => htmlentities($this->input->post('txtRequiredDocument')),

                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_loan_info';
//                $last_insert_id = $this->Common_model->insert();
                $result = $this->Common_model->insert();
                /*
                                foreach($this->input->post('txtLookingFor[]') as $lookingFor){
                                    $this->Common_model->data = array(
                                        'home_loan_info_id'=>$last_insert_id,
                                        'home_loan_looking_for_id'=> $lookingFor
                                    );
                                    $this->Common_model->table_name = 'home_loan_looking_for_home_loan_info';
                                    $this->Common_model->insert();
                                }

                                foreach($this->input->post('txtApplicantType[]') as $applicant){
                                    $this->Common_model->data = array(
                                        'home_loan_info_id'=>$last_insert_id,
                                        'home_loan_applicant_type_id'=> $applicant
                                    );
                                    $this->Common_model->table_name = 'home_loan_applicant_type_home_loan_info';
                                    $this->Common_model->insert();
                                }

                                foreach($this->input->post('txtHomeLoanFeature[]') as $feature){
                                    $this->Common_model->data = array(
                                        'home_loan_info_id'=>$last_insert_id,
                                        'home_loan_feature_id'=> $feature
                                    );
                                    $this->Common_model->table_name = 'home_loan_feature_home_loan_info';
                                    $this->Common_model->insert();
                                }


                                $result='';
                                foreach($this->input->post('txtHomeLoanUser[]') as $user){
                                    $this->Common_model->data = array(
                                        'home_loan_info_id'=>$last_insert_id,
                                        'home_loan_user_id'=> $user
                                    );
                                    $this->Common_model->table_name = 'home_loan_user_home_loan_info';
                                    $result = $this->Common_model->insert();
                                }*/

                if ($result) {
                    redirect(base_url().'auto_loan/loan_info/success');
                } else {
                    redirect(base_url().'auto_loan/loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_auto_loan(){

        $auto_i_want = $this->input->post('auto_i_want');
        $auto_user = $this->input->post('auto_user');


        $principal_amount = floatval ( ($this->input->post('principal_amount') > 100000 ) ? $this->input->post('principal_amount') : '100000' );
        $month_limit = floatval ( ( $this->input->post('month_limit') > 12 ) ?  $this->input->post('month_limit') : 12 );


        if($principal_amount > 4000000 || $principal_amount < 100000){
            $principal_amount = 100000;
        }

        if($month_limit > 72 || $month_limit < 12){
            $month_limit = 12;
        }

        $WHERE = array(); $query = '';
        if(!empty($auto_user)) {
            $WHERE[] = 'auto_loan_info_vs_i_am.i_am_id = '.$auto_user;
        }

        if(!empty($auto_i_want)) {

            $WHERE[] = 'auto_loan_info.auto_loan_looking_for_id = '.$auto_i_want;

        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_auto_loan_info($query);


        //-----------Pagination start-----------------

        $config['base_url'] = base_url() . "en/all_car_loan/";
        $config['total_rows'] = $res->num_rows();
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
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

        $auto_loan =  $this->Front_end_select_model->select_auto_loan_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();
        //        print_r($result->result()); die;
        //-------------Pagination End-------------------

        $auto = '';
        foreach($auto_loan->result() as $row){


            $bank = "";
            if($row->is_non_bank == 1){
                $bank = $row->non_bank_name;
            }else{
                $bank = $row->bank_name;
            }
            $bank_logo = "";
            if($row->is_non_bank == 1){
                $bank_logo = $row->non_bank_logo;
            }else{
                $bank_logo = $row->bank_logo;
            }


            $is_fixed =$row->is_fixed;
            $show_interest ='';
            if($is_fixed == 1){
                $show_interest .='<h5>Interest (Fixed Rate)</h5><p>Fixed '.$row->interest_rate_fixed.'%</p>';
            }else{
                $show_interest .='<h5>Interest (Avg Rate)</h5><p>Avg '.$row->interest_rate_average.'% <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>';
            }

            $yearly_interest = floatval( ($row->is_fixed =='0')? $row->interest_rate_average : $row->interest_rate_fixed ) ;
            if($yearly_interest =='' || $yearly_interest < 6){
                $yearly_interest = floatval( '6');
            }
            $monthly_interest = ($yearly_interest /100/12);

            $emi = $principal_amount * $monthly_interest * ((pow( ( 1 + $monthly_interest ) , ( $month_limit ) )) / (pow( ( 1 + $monthly_interest ) , ( $month_limit ) ) -1 ));

            $downpayment_percentage = ( $row->downpayment == 'N/A' ) ? 0 : $row->downpayment;
            $downpayment_amount = round( ($principal_amount * $downpayment_percentage)/ 100 );

            $total_payable = round( $emi * $month_limit );


            /*

                        $yearly_interest = floatval( ($row->is_fixed =='0')? $row->interest_rate_average : $row->interest_rate_fixed ) ;
                        if($yearly_interest =='' || $yearly_interest < 1){
                            $yearly_interest = floatval( '12');
                        }
                        $monthly_interest = ($yearly_interest / 12 /100);
                        $downpayment_percentage = ( $row->downpayment == 'N/A' ) ? 0 : $row->downpayment;
                        $downpayment_amount = round( ($principal_amount * $downpayment_percentage)/ 100 );

                        $emi = $principal_amount * $monthly_interest * ((pow( ( 1 + $monthly_interest ) , $month_limit )) / (pow( ( 1 + $monthly_interest ) , $month_limit ) -1 ));

                        $total_payable = round( $emi * $month_limit );*/
            $auto .='<div class="full-card">
           <div class="row home_loan_right_bar no-margin-lr2">
               <div class="col-sm-3 col-xs-3">
                   <a href="'.base_url().'en/car_loan_details/'.$row->id.'"><img title="Click Here To Show details" class="img-responsive auto_loan_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
                   <small class="home_loan_bank_name"><a  href="javascript:void(0)">'.$bank.'</a></small>
                   <small class="home_loan_bank_name">'.$row->i_want.'</small>
               </div>
               <div class="col-sm-9 col-xs-9">
                   <div class="row">
                       <div class="col-sm-2 col-xs-2 w20">
                           <div class="card_text2">
                               <h5>Amount</h5>
                               <p>BDT. '.number_format( $principal_amount ).'</p>
                           </div>
                       </div>
                       <div class="col-sm-4 col-xs-4">
                           <div class="card_text2">
                            '.$show_interest.'
                           </div>
                       </div>
                       <div class="col-sm-2 col-xs-2 w20">
                           <div class="card_text2">
                               <h5>EMI</h5>
                               <p>BDT. '.number_format( $emi ).'</p>
                           </div>
                       </div>
                       <div class="col-sm-2 col-xs-2 w20">
                           <div class="card_text2">
                               <h5>Payable Amount</h5>
                               <p>BDT. '.number_format( $total_payable ).'<br/><span class="tPaybleAmount">based on BDT. '.number_format( $principal_amount ).'</span></p>
                           </div>
                       </div>
                       <!--div class="col-sm-2 col-xs-2 w20">
                           <div class="card_text2">
                               <h5>Down Payment</h5>
                               <p>BDT. '. number_format( $downpayment_amount ).'</p>
                           </div>
                       </div-->
                   </div>
               </div>
               <div class="col-sm-12 col-xs-12 home_loan_button">

                   <span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" href="javascript:void(0)" data-toggle="collapse" id="more_info'.$row->id.'" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
                   <span class="more_info_icon Hloan_more_icon"><a id="" href="javascript:void(0)" class="add-to-compare" data-loan_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
                   <span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
                   <a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><img class="btnCardApply img-responsive pull-right" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" /></a>
               </div>
               <div class="collapse" id="moreInfo'.$row->id.'">
                 <div class="col-md-12">
                       <section id="tab">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs" role="tablist">
                               <li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Features</a></li>
                               <li role="presentation" ><a href="#FeesCharges'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Fees & Charges</a></li>
                               <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Eligibility</a></li>
                               <li role="presentation"><a href="#Security'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Security</a></li>
                               <li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Required Doc</a></li>
                               <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                               <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                               <li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User reviews</a></li>
                           </ul>

                           <!-- Tab panes -->
                           <div class="tab-content">
                               <div role="tabpanel" class="tab-pane  active" id="Features'.$row->id.'">
                                       <section id="card_details_FeesCharges">
                                           <div class="card_details_pronsCons">
                                               <h4>Features</h4>
                                               <div class="prosConsHr"></div><br/>
                                               <div class="prosCons_body2 trbodywidth">
                                               '.$row->features.'
                                           </div>
                                       </div>
                                   </section>
                               </div>
                               <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                                   <section id="card_details_FeesCharges">
                                       <div class="card_details_pronsCons">
                                           <h4>Fees & Charges</h4>
                                           <div class="prosConsHr"></div><br/>
                                           <div class="prosCons_body2 trbodywidth">
                                               '.$row->fees_and_charges.'
                                           </div>
                                       </div>
                                   </section>
                               </div>

                               <div role="tabpanel" class="tab-pane" id="Security'.$row->id.'">
                                   <section id="card_details_FeesCharges">
                                       <div class="card_details_pronsCons">
                                           <h4>Security Required</h4>
                                           <div class="prosConsHr"></div><br/>
                                           <div class="prosCons_body2 trbodywidth">
                                           '.$row->security_required.'</div>
                                        </div>
                                   </section>
                               </div>

                               <div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
                                   <div class="card_details_pronsCons">
                                       <h4>Eligibility</h4>
                                       <div class="prosConsHr"></div><br/>
                                       <div class="prosCons_body2">
                                           <h4>Minimum Income:</h4>
                                           '.$row->eligibility_for_applying.'
                                       </div>
                                   </div>
                               </div>
                               <div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
                                  <section id="card_details_FeesCharges">
                                       <div class="card_details_pronsCons">
                                           <h4>Required Documents</h4>
                                           <div class="prosConsHr"></div><br/>
                                           <div class="prosCons_body2 trbodywidth">
                                           '.$row->required_document.'</div>
                                        </div>
                                  </section>
                               </div>
                               <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <h4>Terms and Conditions</h4>
                                        <div class="prosConsHr"></div><br/>
                                        <div class="prosCons_body2">
                                           '.$row->terms_and_conditions.'
                                        </div>
                               </div>
                               <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">'.$row->review.'</div>
                               <div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">...</div>
                           </div>
                       </section>
                   </div>
                </div>
               <div class="collapse" id="rePaymentSchedule'.$row->id.'">
                   <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe-->

               </div>
           </div>
       </div>';

        }
        $auto .= '<div class="col-md-12">'.$data['pagination'].'</div>';
     echo $auto;


    }


    public function ajax_compare_auto_loan_image(){
        $id = $this->input->post('loan_id');
        $result = $this->Front_end_select_model->select_auto_loan_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-loan_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('loan_id1');
        $id2 = $this->input->post('loan_id2');
        $principal_amount = $this->input->post('principal_amount');
        $year_limit = $this->input->post('year_limit');

        $newdata = array(
            'first_auto_loan'  => $id1,
            'second_auto_loan'  => $id2,
            'principal_amount' => $principal_amount,
            'year_limit' => $year_limit
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }


}