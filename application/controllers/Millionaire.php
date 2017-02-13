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
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|required');
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
                    'maturity_amount_id' => $this->input->post('txtMaturityAmount'),
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
            $this->form_validation->set_rules('txtMaturityAmount', 'Maturity Amount', 'trim|required');
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
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'maturity_amount_id' => $this->input->post('txtMaturityAmount'),
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
            $maturity_amount_id = $this->input->post('maturity_amount_id');
//            echo $maturity_amount_id;
//            echo $is_non_bank;
            if($is_non_bank == 1){
                $result =  $this->Select_model->get_all_millionaire_draft_info($non_bank_id,$i_am,$is_non_bank,$maturity_amount_id);
            }else{

                $result =  $this->Select_model->get_all_millionaire_draft_info($bank_id,$i_am,$is_non_bank,$maturity_amount_id);
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

    public function ajax_get_tenure(){
        $selected_amount = $this->input->post('selected_amount');
        $response = $this->Select_model->select_millionaire_tenure_by_amount($selected_amount);
        $tenure ='';

        $active = array();
        foreach($response->result_array() as $row){
            array_push($active,$row['tenure_id']) ;
        }

        for ($x = 1; $x <= 20; $x++) {
            $active_class ='checkDisable';
            $input_disable ='disabled';
            if (in_array($x, $active)){
                $active_class ='';
                $input_disable ='';

            }
            $tenure.= '<li>
                        <section title="">
                            <!-- .squaredOne -->
                            <div class="squaredOne">
                                <input type="checkbox" value="'.$x.'" id="check'.$x.'" name="check" '.$input_disable.'/>
                                <label for="check'.$x.'" class="'.$active_class.'">'.$x.'</label>
                            </div>
                            <!-- end .squaredOne -->
                        </section>
                    </li>';
        }

        echo $tenure;
    }



    public function ajax_get_millionaire(){
        $millionaire = $this->Front_end_select_model->select_millionaire_info();
        $million = '';
        foreach($millionaire->result() as $row){
            //print_r($row);die;
            $bank = "";
            if($row->is_non_bank == 1){
                $bank = $row->non_bank_name;
            }else{
                $bank = $row->bank_name;
            }

            if($row->is_non_bank == 1){
                $bank_logo = $row->non_bank_logo;
            }else{
                $bank_logo = $row->bank_logo;
            }


            $query_amount = 1000000;

            $million .= '
					<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'.base_url().'en/education_loan_details/'.$row->id.'"><img title="click here to details" class="img-responsive" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
								<p class="text-center">'.$bank.'</p>
								<p class="text-center">
									<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
								</p>
								<p class="rating text-center">Rated By 5 Person</p>
							</div>

							<div class="col-sm-10 col-xs-10">
								<div class="row">
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Initial Deposit</h5>
											<p>&#2547; '.$row->initial_deposit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Monthly Installment</h5>
											<p>'.$row->monthly_deposit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>No fo Installment</h5>
											<p>'.$row->no_of_installment.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Total Principal Amount</h5>
											<p>&#2547; '.$row->total_principal_amount.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Accrued Interest</h5>
											<p>'.$row->total_principal_amount.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Maturity Amount</h5>
											<p>'.$row->maturity_amount.'</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a href="javascript:void(0)" id="hideDetailsButton"  data-millionaire_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Available Offer</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/application.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a id="hideDetailsButton2" href="#"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="hideDetailsDiv" class="hideMe">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#Eligibility" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDocuments" aria-controls="messages" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#TermsConditions" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features">
											<h4>Features</h4>
											<ul>
												<li>Pre-mature full Encashment Facility</li>
												<li>Auto Renewal Option with Interest</li>
												<li>Loan Against Fixed Deposit Facility</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="Eligibility">
											<h4>Eligibility</h4>
											<ul>
												<li>FDS Account can be opened both for Individual and Corporate bodies</li>
												<li>Only Resident Bangladeshi National is allowed to open Personal FDS Account.</li>
												<li>Joint account can be opened.</li>
												<li>Minor account can be opened under the supervision of his / her / their guardian.</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDocuments">
											<h4>Required Documents</h4>
											<ul>
												<li>Salary Certificate/Letter of Introduction.</li>
												<li>Application form (payment structure & schedule must be reflected).</li>
												<li>CV/Biodata.</li>
												<li>Latest one-year personal bank statement.</li>
												<li>Latest tax clearance certificate.</li>
												<li>Photocopy of passport/driving license/national id of applicant(s) and guarantor(s) .</li>
												<li>2 copy recent passport size photographs of applicant(s) and guarantor(s).</li>
												<li>NOC from spouse if co-applicant is anybody other than spouse.</li>
												<li>Letter of introduction.</li>
												<li>Copy of latest utility bill.</li>
												<li>Personal net worth statements of applicant(s) and guarantor(s).</li>
												<li>Personal guarantee of spouse/parents/any person accepted to bank.</li>
												<li>Evidence of another income source.</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions">
											<h4>Terms & Conditions</h4>
											<ol type="1">
												<li>The facility shall be made available for the customer from the date of Banks approval of this application until such time is stipulated in any letter and this facility shall be continuing on until the adjustment of the dues of the Bank with interest and other charges.</li>
												<li>The Bank reserves the right to withdraw the credit facility and demand repayment if there has been any default in repayment of the loan.</li>
												<li>The Bank shall not be obliged to make the credit facility available until it has received formal written acknowledgement from you accepting the credit facility on the basis of outline and subject to the terms and conditions specified in the banking arrangement letter.</li>
												<li>The acceptance of the terms and conditions of the banking arrangement letter by the customer constitutes a legal and binding obligation and is enforceable in accordance with the terms of the Banking arrangement letter.</li>
												<li>By use of the credit facility provided by the bank, the customer accepts the conditions enumerated in the banking arrangement letter and authorizes the bank to appoint agents to collect funds payable to the bank, as the Bank may consider necessary. In the due discharge of their duty, information regarding borrowers credit facility will be supplied to the agent. All charges payable to such agents, to collect amounts owed to the bank, are liable to be at borrowers cost and risk, in addition to all other costs, charges and expenses incurred by the bank to recover outstanding dues/money.</li>
												<li>The bank is authorized to open and maintain account(s) for the purpose of administering and recording payments by the customer in respect of the facility.</li>
												<li>The loan shall be utilized for the specified purpose for which it has been sanctioned. Payment shall be made directly by the bank to the vendor or to the customer, as determined by the Bank, depending upon the purpose of the loan.</li>
												<li>All payments in respect of the facility shall be made by the customer on or before the due dates and the customer hereby irrevocably authorizes the Bank to debit any of the customers account(s) with the Bank with all amounts. Owing in respect of the facility including interest and charges and expenses (together the indebtedness) at such time as the same shall become or be due and, payable and transfer such sum to the loan account for adjustment but in any case, the customer shall always remain liable and agree(s) to make payment in full of all such sums to the Bank.</li>
												<li>The customer unconditionally undertakes to repay the loan as per terms and conditions of the Banking Arrangement Letter.</li>
												<li>The customer undertakes to deposit his/her salary/wages/honorarium payable by his/her employer to the designated account maintained with the Bank.</li>
												<li>The Bank is authorized to enforce all or any of the securities executed as well as kept by the customer in favor of the Bank and recover the loan amount with interest and other charges accrued in the loan account.</li>

											</ol>
										</div>
										<div role="tabpanel" class="tab-pane" id="Review">
											<h4>Review</h4>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview">
											<h4>User Review</h4>
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->

						<div id="hideDetailsDiv2" class="row hideMe">
							 <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe-->

						</div>
					</div>';
        }

        echo $million;
    }


}