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
                $this->load->view('admin/education/edit_loan_information');
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
                $this->Common_model->where = array('id' => $this->input->post('txtEducationLoanId'));
                $this->Common_model->update();

                $result=false;
                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtEducationLoanId"),$table='education_loan_info_vs_expenses_considered',$id_field='loan_info_id');
                foreach($this->input->post('txtExpensesConsidered[]') as $expenses_considered){
                    $this->Common_model->data = array(
                        'loan_info_id'=>$this->input->post("txtEducationLoanId"),
                        'expenses_considered_id'=> $expenses_considered
                    );
                    $this->Common_model->table_name = 'education_loan_info_vs_expenses_considered';
                    if($this->Common_model->insert()){
                        $result = true;
                    }
//                    $result = $this->Common_model->insert();
                }

                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtEducationLoanId"),$table='education_loan_info_vs_loan_purpose',$id_field='loan_info_id');

                foreach($this->input->post('txtLoanPurpose[]') as $purpose){
                    $this->Common_model->data = array(
                        'loan_info_id'=>$this->input->post("txtEducationLoanId"),
                        'loan_purpose_id'=> $purpose
                    );
                    $this->Common_model->table_name = 'education_loan_info_vs_loan_purpose';
                    if($this->Common_model->insert()){
                        $result = true;
                    }
                }

                if ($result) {
                    redirect(base_url().'education_loan/edit_loan_info/success');
                } else {
                    redirect(base_url().'education_loan /edit_loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


}