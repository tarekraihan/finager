<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Home Loan                         *
 * Script : back end  controller              *
 * Start Date : 12-03-2016                    *
 * Last Update : 08-08-2016                   *
 **********************************************/

class Home_Loan extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }


    public function loan_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLoanType', 'Loan Type', 'trim|required|is_unique[loan_type.loan_type]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'loan_type' => $this->input->post('txtLoanType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'loan_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/loan_type/success');
                } else {
                    redirect(base_url().'home_loan/loan_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_loan_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtLoanType', 'Loan Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_loan_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'loan_type' => htmlentities($this->input->post('txtLoanType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'loan_type';
                $this->Common_model->where = array('id' => $this->input->post('txtLoanTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_loan_type/success');
                } else {
                    redirect(base_url().'home_loan/edit_loan_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtHomeLoanApplicantType', 'Applicant Type ', 'trim|required|is_unique[home_loan_applicant_type.home_loan_applicant_type]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/home_loan_applicant');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_applicant_type' => $this->input->post('txtHomeLoanApplicantType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_applicant_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/applicant_type/success');
                } else {
                    redirect(base_url().'home_loan/applicant_type/error');
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
            $this->form_validation->set_rules('txtHomeLoanApplicantType', 'Applicant Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_applicant_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_applicant_type' => htmlentities($this->input->post('txtHomeLoanApplicantType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_applicant_type';
                $this->Common_model->where = array('id' => $this->input->post('txtHomeLoanApplicantTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_applicant_type/success');
                } else {
                    redirect(base_url().'home_loan/edit_applicant_type/error');
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
            $this->form_validation->set_rules('txtFeature', ' Feature ', 'trim|required|is_unique[home_loan_features.home_loan_feature]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Feature";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_feature');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_feature' => $this->input->post('txtFeature'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_features';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/feature/success');
                } else {
                    redirect(base_url().'home_loan/feature/error');
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
                $this->load->view('admin/home_loan/edit_feature');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_feature' => htmlentities($this->input->post('txtFeature')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_features';
                $this->Common_model->where = array('id' => $this->input->post('txtFeatureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_feature/success');
                } else {
                    redirect(base_url().'home_loan/edit_feature/error');
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
            $this->form_validation->set_rules('txtLookingFor', ' Looking For ', 'trim|required|is_unique[home_loan_looking_for.home_loan_looking_for]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_looking_for' => $this->input->post('txtLookingFor'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_looking_for';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'home_loan/looking_for/success');
                } else {
                    redirect(base_url().'home_loan/looking_for/error');
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
                $this->load->view('admin/home_loan/edit_looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_looking_for' => htmlentities($this->input->post('txtLookingFor')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_looking_for';
                $this->Common_model->where = array('id' => $this->input->post('txtLookingForId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_looking_for/success');
                } else {
                    redirect(base_url().'home_loan/edit_looking_for/error');
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
            $this->form_validation->set_rules('txtUser', ' Loan User ', 'trim|required|is_unique[home_loan_user.home_loan_user]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Home Loan User";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_user' => $this->input->post('txtUser'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_user';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'home_loan/user/success');
                } else {
                    redirect(base_url().'home_loan/user/error');
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
                $this->load->view('admin/home_loan/edit_loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_user' => htmlentities($this->input->post('txtUser')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_user';
                $this->Common_model->where = array('id' => $this->input->post('txtUserId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_user/success');
                } else {
                    redirect(base_url().'home_loan/edit_user/error');
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
//            $this->form_validation->set_rules('txtApplicantType[]', ' Looking For ', 'trim|required');
//            $this->form_validation->set_rules('txtLookingFor[]', ' Looking For ', 'trim|required');
            $this->form_validation->set_rules('txtHomeLoanUser[]', ' Loan User ', 'trim|required');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Short Description', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtFeatures', 'Features ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtDownPayment', 'down payment ', 'trim');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms and Conditions', 'required|trim');

//            echo validation_errors('<div class="error">', '</div>');// die;

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_information');
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
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'home_loan_looking_for_id' => $this->input->post('txtLookingFor'),
                    'home_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
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
                $this->Common_model->table_name = 'home_loan_info';
                $last_insert_id = $this->Common_model->insert();
/*
                foreach($this->input->post('txtLookingFor[]') as $lookingFor){
                    $this->Common_model->data = array(
                        'home_loan_info_id'=>$last_insert_id,
                        'home_loan_looking_for_id'=> $lookingFor
                    );
                    $this->Common_model->table_name = 'home_loan_looking_for_home_loan_info';
                    $this->Common_model->insert();
                }
*/



                $result='';
                foreach($this->input->post('txtHomeLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'home_loan_info_id'=>$last_insert_id,
                        'home_loan_user_id'=> $user
                    );
                    $this->Common_model->table_name = 'home_loan_user_home_loan_info';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'home_loan/loan_info/success');
                } else {
                    redirect(base_url().'home_loan/loan_info/error');
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
        $this->load->view('admin/home_loan/loan_list');
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
//            $this->form_validation->set_rules('txtApplicantType[]', ' Looking For ', 'trim|required');
//            $this->form_validation->set_rules('txtLookingFor[]', ' Looking For ', 'trim|required');
            $this->form_validation->set_rules('txtHomeLoanUser[]', ' Loan User ', 'trim|required');
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
                $this->load->view('admin/home_loan/edit_loan_information');
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
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'home_loan_looking_for_id' => $this->input->post('txtLookingFor'),
                    'home_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
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
               /* $this->Common_model->table_name = 'home_loan_info';
                $last_insert_id = $this->Common_model->insert();*/

                $this->Common_model->table_name = 'home_loan_info';
                $this->Common_model->where = array('id' => $this->input->post('txtHomeLoanId'));
                $this->Common_model->update();

/*
                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtHomeLoanId"),$table='home_loan_applicant_type_home_loan_info',$id_field='home_loan_info_id');

                foreach($this->input->post('txtApplicantType[]') as $applicant){
                    $this->Common_model->data = array(
                        'home_loan_info_id'=>$this->input->post('txtHomeLoanId'),
                        'home_loan_applicant_type_id'=> $applicant
                    );
                    $this->Common_model->table_name = 'home_loan_applicant_type_home_loan_info';
                    $this->Common_model->insert();
                }*/

                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtHomeLoanId"),$table='home_loan_user_home_loan_info',$id_field='home_loan_info_id');
                $result='';
                foreach($this->input->post('txtHomeLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'home_loan_info_id'=>$this->input->post('txtHomeLoanId'),
                        'home_loan_user_id'=> $user
                    );
                    $this->Common_model->table_name = 'home_loan_user_home_loan_info';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'home_loan/edit_loan_info/success');
                } else {
                    redirect(base_url().'home_loan/edit_loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function ajax_compare_card_image()
    {
        $card_user = $this->input->post('card_id');
        $response = $this->Select_model->select_card_image($card_user);
        echo $response;

    }

    public function ajax_home_loan_interest_variable(){
        $this->load->view('admin/home_loan/home_loan_interest_variable');
    }


//    Front End query--------------------------------

     public function ajax_get_home_loan(){

        $home_i_want = $this->input->post('home_i_want');
        $home_user = $this->input->post('home_user');
        $home_bank_ids = $this->input->post('home_bank_ids');
         $home_principal_amount = floatval ( ($this->input->post('home_principal_amount')) ? $this->input->post('home_principal_amount') : '200000' );

         if($home_principal_amount > 40000000 || $home_principal_amount < 200000){
             $home_principal_amount = 200000;
         }

         $home_month_limit = floatval ( ($this->input->post('home_month_limit') > 1) ? $this->input->post('home_month_limit') : 1 );

        if($home_month_limit > 25 || $home_month_limit < 1){
            $home_month_limit = 1;
        }

        $WHERE = array(); $query = '';
        if(!empty($home_principal_amount)) {
            $WHERE[] = 'CAST( home_loan_info.min_loan_amount as SIGNED INTEGER ) <= '.$home_principal_amount;
        }

        if(!empty($home_principal_amount)) {
            $WHERE[] = 'CAST( home_loan_info.max_loan_amount as SIGNED INTEGER ) >= '.$home_principal_amount;
        }

        if(!empty($home_user)) {
            $WHERE[] = 'home_loan_user_home_loan_info.home_loan_user_id = '.$home_user;
        }

        if(!empty($home_i_want)) {

            $WHERE[] = 'home_loan_info.home_loan_looking_for_id = '.$home_i_want;

        }
        if(!empty($home_bank_ids)) {
             if(strstr($home_bank_ids,',')) {
                 $data8 = explode(',',$home_bank_ids);
                 $bank_id_array = array();
                 foreach( $data8 as $bank_id ) {
                     $bank_id_array[] = "home_loan_info.bank_id = $bank_id";
                 }
                 $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
             } else {
                 $WHERE[] = '(home_loan_info.bank_id = '.$home_bank_ids.')';
             }
         }


        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_home_loan_info($query);

        //-----------Pagination start-----------------

        $config['base_url'] = base_url() . "en/all_home_loan/";
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

        $home_loan =  $this->Front_end_select_model->select_home_loan_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();
//        print_r($result->result()); die;
        //-------------Pagination End-------------------

        $home = '';
        if($home_loan->num_rows() > 0){
         foreach($home_loan->result() as $row){
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

             $yearly_interest = floatval( ($row->is_fixed =='0')? $row->interest_rate_average : $row->interest_rate_fixed ) ;
             if($yearly_interest =='' || $yearly_interest < 1){
                 $yearly_interest = floatval( '12');
             }
             $monthly_interest = ($yearly_interest / 12 /100);
             $downpayment_percentage = $row->downpayment;
             $downpayment_amount = round( ($home_principal_amount * $downpayment_percentage)/ 100 );

             $emi = $home_principal_amount * $monthly_interest * ((pow( ( 1 + $monthly_interest ) , ($home_month_limit * 12 ) )) / (pow( ( 1 + $monthly_interest ) , ($home_month_limit * 12 ) ) -1 ));

             $total_payable = round( $emi * $home_month_limit * 12 );

            $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg),' : $row->interest_rate_fixed.' % (Fixed)';
            $interest_min_max =($row->is_fixed =='0')? $row->interest_rate_min.'% (Min), <br> '.$row->interest_rate_max.'% (Max)</p>' : '';
			
            $home .='<div class="full-card">
                       <div class="row home_loan_right_bar no-margin-lr2">
                           <div class="col-sm-3 col-xs-3">
                               <a href="'.base_url().'en/home_loan_details/'.$row->id.'"><img title="Click Here To Show details" class="img-responsive selected_card" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
                               <small class="home_loan_bank_name"><a  href="">'.$bank.'</a></small>
                               <small class="home_loan_bank_name">'.$row->home_loan_looking_for.'</small>
                           </div>
                           <div class="col-sm-9 col-xs-9">
                               <div class="row">
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Amount</h5>
                                           <p>BDT '.number_format( $home_principal_amount ).'</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Interest Rate</h5>
                                           <p>'.$interest.'<br/>
                                           '.$interest_min_max.'
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>EMI</h5>
                                           <p>BDT '. number_format( $emi ) . '</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Payable Amount</h5>
                                           <p> BDT '.number_format( $total_payable) .'<br/><span class="tPaybleAmount">based on BDT '.number_format( $home_principal_amount ).'</span></p>
                                       </div>
                                   </div>
                                   <!--div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Down Payment</h5>
                                           <p>BDT '. number_format( $downpayment_amount ).'</p>
                                       </div>
                                   </div-->
                               </div>
                           </div>
                           <div class="col-sm-12 col-xs-12 home_loan_button">

                               <span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" data-toggle="collapse"  id="more_info'.$row->id.'"  data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
                               <span class="more_info_icon Hloan_more_icon"><a id="" href="javascript:void(0)" class="add-to-compare" data-home_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
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
            $home .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
        $home .=  '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }
        echo $home;
    }

    public function ajax_compare_home_loan_image(){
        $id = $this->input->post('home_id');
        $result = $this->Front_end_select_model->select_home_loan_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-home_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('home_id1');
        $id2 = $this->input->post('home_id2');
        $principal_amount = floatval ( ($this->input->post('principal_amount')) ? $this->input->post('principal_amount') : '500000' );
        $month_limit = floatval ( ($this->input->post('month_limit') > 5) ? $this->input->post('month_limit') : 6 );

        $newdata = array(
            'first_home_loan'  => $id1,
            'second_home_loan'  => $id2,
            'principal_amount'  => $principal_amount,
            'month_limit'  => $month_limit
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_home_loan_quick_link(){
        $i_want = (!empty($this->input->post('home_i_want'))) ? $this->input->post('home_i_want') : '';
        $i_am = (!empty($this->input->post('home_i_am'))) ? $this->input->post('home_i_am') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

//        $array_items = array('home_i_want', 'home_i_am', 'home_principal_amount');
        $array_items = array('home_i_want', 'home_i_am', 'home_principal_amount','home_i_want_label','home_i_am_label','home_bank_ids');
        $this->session->unset_userdata($array_items);
        if( $i_want != ''){
            $newdata['home_i_want'] = $i_want;
        }

        if( $i_am != ''){
            $newdata['home_i_am'] = $i_am;
        }
        if($data == 'all'){
            $newdata['all']= '';
        }

        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_home_loan_caching(){

        $home_i_want = $this->input->post('home_i_want');
        $home_user = $this->input->post('home_user');
        $home_bank_ids = $this->input->post('home_bank_ids');

        $bank_id_array = array();
        if(!empty($home_bank_ids)) {
            if(strstr($home_bank_ids,',')) {
                $data8 = explode(',',$home_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $home_bank_ids;
            }
        }

        $home_principal_amount = floatval ( ($this->input->post('home_principal_amount')) ? $this->input->post('home_principal_amount') : '200000' );

        $array_items = array('home_i_want', 'home_i_am', 'home_principal_amount','home_i_want_label','home_i_am_label','home_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'home_i_want'  => $home_i_want,
            'home_i_am'  => $home_user,
            'home_principal_amount'  => $home_principal_amount,
            'home_i_want_label' => $this->input->post('home_i_want_label'),
            'home_i_am_label' => $this->input->post('home_i_am_label'),
            'home_bank_ids' => $bank_id_array
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='home_loan'){
            $array_items = array('home_i_want', 'home_i_am', 'home_principal_amount','home_i_want_label','home_i_am_label','home_bank_ids');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';
    }

    public function unset_home_loan_i_want_session(){
        $session = $this->input->post('home_loan_i_want');
        if($session){
            $this->session->unset_userdata('home_i_want');
            echo 'success';
        }

    }

    public function unset_home_loan_i_am_session(){
        $session = $this->input->post('home_loan_i_am');
        if($session){
            $this->session->unset_userdata('home_i_am');
            echo 'success';
        }
    }

    public function unset_home_loan_bank_id_session(){
        $id = $this->input->post('home_loan_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row) {
            $session = $row['id'] . '=' . $row['bank_name'];
            $bank = array_values($_SESSION['home_bank_ids']);
            if (($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['home_bank_ids'][$key]);
            }
        }
    }


}