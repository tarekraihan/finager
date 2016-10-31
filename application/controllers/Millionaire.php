<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Millioner Billioner               *
 * Script : front end  controller             *
 * Start Date : 30-10-2016                    *
 * Last Update : 30-10-2016                   *
 **********************************************/

class Millionaire extends CI_Controller
{
    public function tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[millionaire_tenure.tenure]|numeric');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/millionaire_tenure');
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
                $this->Common_model->table_name = 'millionaire_tenure';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'millionaire/tenure/success');
                } else {
                    redirect(base_url().'millionaire/tenure/error');
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
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => htmlentities($this->input->post('txtTenure')),
                    'no_of_installment' => $installment,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'millionaire/tenure/success');
                } else {
                    redirect(base_url().'millionaire/edit_tenure/error');
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
            $this->form_validation->set_rules('txtIAm', 'i am ', 'trim|required|is_unique[millionaire_i_am.i_am]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_i_am';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'millionaire/i_am/success');
                } else {
                    redirect(base_url().'millionaire/i_am/error');
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
                $this->load->view('admin/millionaire/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'millionaire/edit_i_am/success');
                } else {
                    redirect(base_url().'millionaire/edit_i_am/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function maturity_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|required|numeric|is_unique[millionaire_maturity_amount.maturity_amount]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Maturity Amount";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/maturity_amount');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'maturity_amount' => $this->input->post('txtMaturityAmount'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_maturity_amount';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'millionaire/maturity_amount/success');
                } else {
                    redirect(base_url().'millionaire/maturity_amount/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_maturity_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|required|numeric');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit Monthly Installment";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/edit_maturity_amount');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'maturity_amount' => $this->input->post('txtMaturityAmount'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_maturity_amount';
                $this->Common_model->where = array('id' => $this->input->post('txtMaturityAmountId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'millionaire/edit_maturity_amount/success');
                } else {
                    redirect(base_url().'millionaire/edit_maturity_amount/error');
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
//            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
//            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'fees and charges', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/draft_info');
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
                    'i_am_id' => $this->input->post('txtIAm'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_info_draft';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'millionaire/draft_info/success');
                } else {
                    redirect(base_url().'millionaire/draft_info/error');
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
        $this->load->view('admin/millionaire/draft_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_draft_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
//            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'fees and charges', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/edit_draft_info');
                $this->load->view('admin/block/footer');
            }else{

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
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'millionaire_info_draft';
                $this->Common_model->where = array('id' => $this->input->post('txtDraftId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'millionaire/edit_draft_info/success');
                } else {
                    redirect(base_url().'millionaire/edit_draft_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_draft_millionaire_info(){
        if ($this->session->userdata('email_address')) {
            $bank_id =$this->input->post('bank_id');
            $non_bank_id =$this->input->post('non_bank_id');
            $is_non_bank =$this->input->post('is_non_bank');
            $i_am =$this->input->post('i_am');
            if($is_non_bank == 1){
                $result =  $this->Select_model->get_all_millionaire_draft_info($non_bank_id,$i_am,$is_non_bank);
            }else{

                $result =  $this->Select_model->get_all_millionaire_draft_info($bank_id,$i_am,$is_non_bank);
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

    function add_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|numeric');
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|numeric|required');
            $this->form_validation->set_rules('txtInitialDeposit', 'Initial Deposit', 'trim|numeric');
            $this->form_validation->set_rules('txtMonthlyDeposit', 'Monthly Deposit', 'trim|numeric|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|numeric');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees And Charges', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Add Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/millionaire_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }

                $maturity = $this->Select_model->Select_millionaire_tenure_by_id($this->input->post('txtMaturityAmount'));

                $tenure = ($this->input->post('txtTenure')) ? $this->input->post('txtTenure') : 0;
                $monthly_deposit = ($this->input->post('txtMonthlyDeposit')) ? $this->input->post('txtMonthlyDeposit') : 0;
                $initial_deposit =($this->input->post('txtInitialDeposit')) ? $this->input->post('txtInitialDeposit') : 0;

                $total_principal_amount = ($monthly_deposit * $tenure * 12) + $initial_deposit;
                $accured_interest = $maturity['maturity_amount'] - $total_principal_amount;

                $this->Common_model->data = array(
                    'i_am_id' => $this->input->post('txtIAm'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'millionaire_info_name' => htmlentities($this->input->post('txtDepositName')),
                    'interest_rate' => htmlentities($this->input->post('txtInterestRate')),
                    'initial_deposit' => $initial_deposit,
                    'monthly_deposit' => htmlentities($this->input->post('txtMonthlyDeposit')),
                    'total_principal_amount' => $total_principal_amount,
                    'accured_interest' => $accured_interest,
                    'maturity_amount_id' => $this->input->post('txtMaturityAmount'),
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'millionaire/add_info/success');
                } else {
                    redirect(base_url().'millionaire/add_info/error');
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_list(){
        $data['title'] = "Millionaire Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/millionaire/deposit_list');
        $this->load->view('admin/block/footer');
    }

    function edit_millionaire_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }


            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|numeric');
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|numeric|required');
            $this->form_validation->set_rules('txtInitialDeposit', 'Initial Deposit', 'trim|numeric');
            $this->form_validation->set_rules('txtMonthlyDeposit', 'Monthly Deposit', 'trim|numeric|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|numeric');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees And Charges', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Millionaire Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/millionaire/edit_millionaire_info');
                $this->load->view('admin/block/footer');
            }else{
                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }

                $maturity = $this->Select_model->Select_millionaire_tenure_by_id($this->input->post('txtMaturityAmount'));

                $tenure = ($this->input->post('txtTenure')) ? $this->input->post('txtTenure') : 0;
                $monthly_deposit = ($this->input->post('txtMonthlyDeposit')) ? $this->input->post('txtMonthlyDeposit') : 0;
                $initial_deposit =($this->input->post('txtInitialDeposit')) ? $this->input->post('txtInitialDeposit') : 0;

                $total_principal_amount = ($monthly_deposit * $tenure * 12) + $initial_deposit;
                $accured_interest = $maturity['maturity_amount'] - $total_principal_amount;

                $this->Common_model->data = array(
                    'i_am_id' => $this->input->post('txtIAm'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'millionaire_info_name' => htmlentities($this->input->post('txtDepositName')),
                    'interest_rate' => htmlentities($this->input->post('txtInterestRate')),
                    'initial_deposit' => $initial_deposit,
                    'monthly_deposit' => htmlentities($this->input->post('txtMonthlyDeposit')),
                    'total_principal_amount' => $total_principal_amount,
                    'accured_interest' => $accured_interest,
                    'maturity_amount_id' => $this->input->post('txtMaturityAmount'),
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'millionaire_info';
                $this->Common_model->where = array('id' => $this->input->post('txtMillionaireId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'millionaire/edit_millionaire_info/success');
                } else {
                    redirect(base_url().'millionaire/edit_millionaire_info/error');
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



}