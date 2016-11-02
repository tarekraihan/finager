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

class Education_Loan extends CI_Controller {

    public function tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|numeric|is_unique[education_loan_tenure.tenure]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/tenure');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => $this->input->post('txtTenure'),
                    'no_of_installment' => $installment,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_loan_tenure';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'education_loan/tenure/success');
                } else {
                    redirect(base_url().'education_loan/tenure/error');
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
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|numeric');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => $this->input->post('txtTenure'),
                    'no_of_installment' => $installment,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_loan_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'education_loan/edit_tenure/success');
                } else {
                    redirect(base_url().'education_loan/edit_tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function expenses_considered($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtExpensesConsidered', ' Expenses Considered', 'trim|required|is_unique[education_expenses_considered.expenses_considered]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Expenses Considered";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/expenses_considered');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'expenses_considered' => $this->input->post('txtExpensesConsidered'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_expenses_considered';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'education_loan/expenses_considered/success');
                } else {
                    redirect(base_url().'education_loan/expenses_considered/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_expenses_considered($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtExpensesConsidered', 'Expenses Considered', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Expenses Considered";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/edit_expenses_considered');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'expenses_considered' => htmlentities($this->input->post('txtExpensesConsidered')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_expenses_considered';
                $this->Common_model->where = array('id' => $this->input->post('txtExpensesConsideredId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'education_loan/edit_expenses_considered/success');
                } else {
                    redirect(base_url().'education_loan/edit_expenses_considered/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



    public function purpose($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLoanPurpose', 'Loan Purpose', 'trim|required|is_unique[education_expenses_considered.expenses_considered]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -purpose";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/purpose');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'loan_purpose' => $this->input->post('txtLoanPurpose'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_loan_purpose';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'education_loan/purpose/success');
                } else {
                    redirect(base_url().'education_loan/purpose/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_purpose($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtLoanPurpose', 'Loan Purpose', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Purpose";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/edit_purpose');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'loan_purpose' => htmlentities($this->input->post('txtLoanPurpose')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_loan_purpose';
                $this->Common_model->where = array('id' => $this->input->post('txtLoanPurposeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'education_loan/edit_purpose/success');
                } else {
                    redirect(base_url().'education_loan/edit_purpose/error');
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
            $this->form_validation->set_rules('txtExpensesConsidered[]', ' Expenses Considered', 'trim|required');
            $this->form_validation->set_rules('txtLoanPurpose[]', 'Loan Purpose ', 'trim|required');
            $this->form_validation->set_rules('txtGracePeriod', 'Grace Period ', 'trim|required');
            $this->form_validation->set_rules('txtMinEducationLoanTenure', 'Min Education Loan Tenure ', 'trim|required');
            $this->form_validation->set_rules('txtMaxEducationLoanTenure', 'Max Education Loan Tenure ', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', ' Minimum Loan Amount', 'trim|required|numeric');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Maximum Lon Amount', 'trim|required|numeric');
            $this->form_validation->set_rules('txtDownPayment', 'Down Payment ', 'trim|required|numeric');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Loan Short Description ', 'trim|required');
            $this->form_validation->set_rules('txtLoanAgainstFDR', 'Loan Against FDR ', 'trim|required');
            $this->form_validation->set_rules('txtProcessingFee', 'Processing Fee ', 'trim|required');
            $this->form_validation->set_rules('txtEarlySettlementFee', 'Early Settlement Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPartialPaymentFee', 'Partial Payment Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPenaltyCharge', 'Penalty Charge ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirements', 'trim|required');

            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms and Conditions', 'required|trim');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/education/loan_information');
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
                    'loan_name' => htmlentities($this->input->post('txtLoanName')),
                    'grace_period' => htmlentities($this->input->post('txtGracePeriod')),
                    'min_loan_amount' => htmlentities($this->input->post('txtMinimumLoanAmount')),
                    'max_loan_amount' => htmlentities($this->input->post('txtMaximumLonAmount')),
                    'short_description' => htmlentities($this->input->post('txtLoanShortDescription')),


                    'min_term' => $this->input->post('txtMinEducationLoanTenure'),
                    'max_term' => $this->input->post('txtMaxEducationLoanTenure'),
                    'loan_against_fdr' => htmlentities($this->input->post('txtLoanAgainstFDR')),
                    'down_payment' => $this->input->post('txtDownPayment'),
                    'processing_fee' => htmlentities($this->input->post('txtProcessingFee')),
                    'early_settlement_fee' => htmlentities($this->input->post('txtEarlySettlementFee')),
                    'partial_payment_fee' => htmlentities($this->input->post('txtPartialPaymentFee')),
                    'penalty_charge' => htmlentities($this->input->post('txtPenaltyCharge')),
                    'is_fixed' => $fixed,
                    'fixed_interest' => htmlentities($this->input->post('txtInterestRateFixed')),
                    'min_interest' => htmlentities($this->input->post('txtInterestRateMin')),
                    'max_interest' => htmlentities($this->input->post('txtInterestRateMax')),
                    'avg_interest' => htmlentities($this->input->post('txtInterestRateAverage')),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'education_loan_info';
                $loan_info_id = $this->Common_model->insert();

                $result='';
                if($loan_info_id){

                    foreach($this->input->post('txtExpensesConsidered[]') as $purpose){
                        $this->Common_model->data = array(
                            'loan_info_id'=>$loan_info_id,
                            'loan_purpose_id'=> $purpose
                        );
                        $this->Common_model->table_name = 'education_loan_info_vs_loan_purpose';
                        $result = $this->Common_model->insert();
                    }


                    foreach($this->input->post('txtExpensesConsidered[]') as $expense){
                        $this->Common_model->data = array(
                            'loan_info_id'=>$loan_info_id,
                            'expenses_considered_id'=> $expense
                        );
                        $this->Common_model->table_name = 'education_loan_info_vs_expenses_considered';
                        $result = $this->Common_model->insert();
                    }

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
            $this->form_validation->set_rules('txtPersonalLoanUser[]', ' I Am', 'trim|required');
            $this->form_validation->set_rules('txtSecurityRequired', 'Security Required ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Short Description', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtFeatures', 'Features ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
//            $this->form_validation->set_rules('txtDownPayment', 'down payment ', 'trim');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms and Conditions', 'required|trim');

//            echo validation_errors('<div class="error">', '</div>');// die;

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/personal_loan/edit_loan_information');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $is_fixed =$this->input->post('is_fixed');
                $fixed = 0;
                if($is_fixed == 'fixed'){
                    $fixed =1;
                }
                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == '1'){
                    $non_bank =1;
                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'loan_type_id' => $this->input->post('txtLoanType'),
                    'personal_loan_looking_for_id' => $this->input->post('txtLookingFor'),
                    'personal_loan_name' => htmlentities($this->input->post('txtLoanName')),
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
//                    'downpayment' => $this->input->post('txtDownPayment'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                /*$this->Common_model->table_name = 'personal_loan_info';
                $last_insert_id = $this->Common_model->insert();*/

                $this->Common_model->table_name = 'personal_loan_info';
                $this->Common_model->where = array('id' => $this->input->post('txtPersonalLoanId'));
                $this->Common_model->update();


                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtPersonalLoanId"),$table='personal_loan_info_vs_i_am',$id_field='personal_loan_info_id');


                $result='';
                foreach($this->input->post('txtPersonalLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'personal_loan_info_id'=>$this->input->post("txtPersonalLoanId"),
                        'personal_loan_i_am_id'=> $user
                    );
                    $this->Common_model->table_name = 'personal_loan_info_vs_i_am';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'personal_loan/edit_loan_info/success');
                } else {
                    redirect(base_url().'personal_loan/edit_loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


}