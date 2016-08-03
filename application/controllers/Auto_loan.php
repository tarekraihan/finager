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
            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtLoanName', ' Loan Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', ' Short Description', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor[]', ' Looking For ', 'trim|required');
            $this->form_validation->set_rules('txtAutoLoanUser[]', ' Loan User ', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', 'Min Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Max Loan Amount ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateAverage', 'Interest Rate Average ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateMin', 'Interest Rate Min ', 'trim|required');
            $this->form_validation->set_rules('txtInterestRateMax', 'Interest Rate Max ', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required', 'trim|required');
            $this->form_validation->set_rules('txtFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/auto_loan/loan_information_new');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'auto_loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'loan_short_description' => htmlentities($this->input->post('txtLoanShortDescription')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
                    'interest_rate_min' => htmlentities($this->input->post('txtInterestRateMin')),
                    'interest_rate_max' => htmlentities($this->input->post('txtInterestRateMax')),
                    'interest_rate_average' => htmlentities($this->input->post('txtInterestRateMax')),
                    'security_required' => htmlentities($this->input->post('txtSecurityRequired')),
                    'fees_and_charges' => htmlentities($this->input->post('txtFeesAndCharges')),
                    'features' => htmlentities($this->input->post('txtFeatures')),
                    'eligibility_for_applying' => htmlentities($this->input->post('txtEligibility')),
                    'required_document' => htmlentities($this->input->post('txtRequiredDocument')),

                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'auto_loan_info';
//              $last_insert_id = $this->Common_model->insert();
                $result = $this->Common_model->insert();
/*
                foreach($this->input->post('txtLookingFor[]') as $lookingFor){
                    $this->Common_model->data = array(
                        'auto_loan_info_id'=>$last_insert_id,
                        'i_want_id'=> $lookingFor
                    );
                    $this->Common_model->table_name = 'auto_loan_info_vs_i_want';
                    $this->Common_model->insert();
                }


                $result='';
                foreach($this->input->post('txtAutoLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'auto_loan_info_id'=>$last_insert_id,
                        'i_am_id'=> $user
                    );
                    $this->Common_model->table_name = 'auto_loan_info_vs_i_am';
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

}