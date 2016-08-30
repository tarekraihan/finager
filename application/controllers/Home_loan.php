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
            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
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
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
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
            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
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
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
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


                $this->Delete_model->Delete_All_Row($id='$this->input->post("txtHomeLoanId")',$table='home_loan_applicant_type_home_loan_info',$id_field='home_loan_info_id');

                foreach($this->input->post('txtApplicantType[]') as $applicant){
                    $this->Common_model->data = array(
                        'home_loan_info_id'=>$this->input->post('txtHomeLoanId'),
                        'home_loan_applicant_type_id'=> $applicant
                    );
                    $this->Common_model->table_name = 'home_loan_applicant_type_home_loan_info';
                    $this->Common_model->insert();
                }

                $this->Delete_model->Delete_All_Row($id='$this->input->post("txtHomeLoanId")',$table='home_loan_user_home_loan_info',$id_field='home_loan_info_id');
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

    public function ajax_get_credit_card(){


        $home_loan = $this->Front_end_select_model->select_home_loan_info();

//        $credit_card='';
        foreach($home_loan->result() as $row){
                   print_r($row);die;

        }
//        echo $credit_card;
    }


}