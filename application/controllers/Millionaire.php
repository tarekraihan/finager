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
    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }

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
        $millionaire_bank_ids = $this->input->post('millionaire_bank_ids');
        $WHERE = array(); $query = '';
        if(!empty($selected_amount)) {
            $WHERE[] = '( millionaire_info.maturity_amount_id = ('.$selected_amount.'))';
        }
        if(!empty($millionaire_bank_ids)) {
            if(strstr($millionaire_bank_ids,',')) {
                $data8 = explode(',',$millionaire_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "millionaire_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(millionaire_info.bank_id = '.$millionaire_bank_ids.')';
            }
            $WHERE[] = '(millionaire_info.is_non_bank = 0)';
        }
        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }

//        echo $query;
        $response = $this->Select_model->select_millionaire_tenure_by_amount($query);
        $tenure ='';

        $data = array();
        foreach($response->result_array() as $row){
            $a = array(
                $row['id'] => $row['tenure']
            );
            array_push($data,$a);
        }

        for ($x = 1; $x <= 20; $x++) {
            $active_class ='checkDisable';
            $input_disable ='disabled';
            $value = 0;

            foreach($data as $row_o){
                if(in_array($x,$row_o)){
                    $active_class ='';
                    $input_disable ='';
                    $value = array_search($x,$row_o);
                }
            }

            $val = $x;
            if($value != 0){
                $val = $value;
            }
            $tenure.= '<li>
                        <section title="">
                            <!-- .squaredOne -->
                            <div class="squaredOne">
                                <input type="checkbox" value="'.$val.'" id="check'.$x.'" name="millionaire_tenure" '.$input_disable.'/>
                                <label for="check'.$x.'" class="'.$active_class.'">'.$x.'</label>
                            </div>
                            <!-- end .squaredOne -->
                        </section>
                    </li>';
        }

        echo $tenure;
    }

    public function ajax_get_millionaire(){

        $millionaire_tenure = $this->input->post('millionaire_tenure');
        $millionaire_user = $this->input->post('millionaire_user');
        $maturity_amount = $this->input->post('maturity_amount');
        $millionaire_bank_ids = $this->input->post('millionaire_bank_ids');



        $WHERE = array(); $query = '';
        if(!empty($millionaire_tenure)) {
            $WHERE[] = '( millionaire_info.tenure_id in ('.$millionaire_tenure.'))';
        }


        if(!empty($millionaire_user)) {
            $WHERE[] = '(millionaire_info.i_am_id = '.$millionaire_user.')';
        }

        if(!empty($maturity_amount)) {
            $WHERE[] = '(millionaire_info.maturity_amount_id = '.$maturity_amount.')';
        }
        if(!empty($millionaire_bank_ids)) {
            if(strstr($millionaire_bank_ids,',')) {
                $data8 = explode(',',$millionaire_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "millionaire_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(millionaire_info.bank_id = '.$millionaire_bank_ids.')';
            }
        }
/*
        $sql[] = implode(' AND ',$WHERE);

        if(!empty($millionaire_bank_ids)) {
            if(strstr($millionaire_bank_ids,',')) {
                $data8 = explode(',',$millionaire_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "millionaire_info.bank_id = $bank_id";
                }
                $sql[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $sql[] = '(millionaire_info.bank_id = '.$millionaire_bank_ids.')';
            }
        }*/

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }

        $res = $this->Front_end_select_model->select_millionaire_info($query);


//-----------Pagination start-----------------

        $config['base_url'] = base_url() . "en/all_millionaire/";
        $config['total_rows'] = $res->num_rows();
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
//        $choice = $config["total_rows"] / $config["per_page"];
//        $config["num_links"] = floor($choice);
        $config["num_links"] = 5;
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

        $millionaire =  $this->Front_end_select_model->select_millionaire_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();


        $million = '';
        if($millionaire->num_rows() > 0){
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


            $initial_deposit  = ($row->initial_deposit) ? 'BDT.'.$row->initial_deposit : 'N/A';

            $million .= '
					<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'.base_url().'en/millionaire_details/'.$row->id.'"><img title="click here to details" class="img-responsive selected_card" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
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
											<p>'.$initial_deposit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Monthly Installment</h5>
											<p>BDT.'.number_format( $row->monthly_deposit ).'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>No fo Installment</h5>
											<p>'.$row->no_of_installment .'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Total Principal Amount</h5>
											<p>BDT.'.number_format( $row->total_principal_amount ).'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Accrued Interest</h5>
											<p>BDT.'.number_format( $row->accured_interest ).'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Maturity Amount</h5>
											<p>BDT.'.number_format( $row->maturity_amount ).'</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a href="javascript:void(0)" id="hideDetailsButton"  class="more_info" data-millionaire_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" class="availableOffer" role="button" data-toggle="collapse" data-offer="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true"></i> Available Offer</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/application.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a href="javascript:void(0)" class="add-to-compare" data-millionaire_id="'.$row->id.'"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="collapse" id="moreInfo'.$row->id.'">
                             <div class="col-md-12">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#FeesAndCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees and charges</a></li>
										<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="RequiredDocuments" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#AvailableBenefit'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Available Benefit</a></li>
										<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
											<h4>Features</h4>
											'.$row->available_feature.'
										</div>
										<div role="tabpanel" class="tab-pane" id="FeesAndCharges'.$row->id.'">
											<h4>Fees and Charges</h4>
											'.$row->fees_and_charges.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
											<h4>Eligibility</h4>
											'.$row->eligibility.'
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
											<h4>Required Documents</h4>
											'.$row->required_document.'
										</div>
										<div role="tabpanel" class="tab-pane" id="AvailableBenefit'.$row->id.'">
											<h4>Available Benefit</h4>
											'.$row->available_benefit.'
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions'.$row->id.'">
											<h4>Terms & Conditions</h4>
											'.$row->terms_and_conditions.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<h4>User Review</h4>

										</div>
										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<h4>Review</h4>
											'.$row->review.'
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->

						<div class="collapse" id="availableOfferSchedule'.$row->id.'">
                               <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe-->

                           </div>
					</div>';
        }
            $million .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
            $million .=  '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }

        echo $million;
    }

    public function ajax_compare_millionaire_image(){
        $id = $this->input->post('millionaire_id');
        $result = $this->Front_end_select_model->select_millionaire_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-millionaire_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('millionaire_id1');
        $id2 = $this->input->post('millionaire_id2');

        $newdata = array(
            'first_millionaire_id'  => $id1,
            'second_millionaire_id'  => $id2
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_millionaire_quick_link(){
        $millionaire_maturity_amount = (!empty($this->input->post('millionaire_maturity_amount'))) ? $this->input->post('millionaire_maturity_amount') : '';
        $millionaire_i_am = (!empty($this->input->post('millionaire_i_am'))) ? $this->input->post('millionaire_i_am') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

        $array_items = array('millionaire_maturity_amount', 'millionaire_i_am');
        $this->session->unset_userdata($array_items);

        if( $millionaire_maturity_amount != ''){
            $newdata['millionaire_maturity_amount'] = $millionaire_maturity_amount;
        }

        if( $millionaire_i_am != ''){
            $newdata['millionaire_i_am'] = $millionaire_i_am;
        }
        if($data == 'all'){
            $newdata['all']= '';
        }

        $this->session->set_userdata($newdata);
        echo 'success';
    }


    public function ajax_millionaire_caching(){
        $millionaire_i_am = $this->input->post('millionaire_i_am');
        $millionaire_i_am_label = $this->input->post('millionaire_i_am_label');
        $millionaire_tenure = $this->input->post('millionaire_tenure');
        $millionaire_maturity_amount = $this->input->post('millionaire_maturity_amount');
        $millionaire_maturity_amount_label = $this->input->post('millionaire_maturity_amount_label');
        $millionaire_bank_ids = $this->input->post('millionaire_bank_ids');

        $millionaire_tenure_array = array();
        if(!empty($millionaire_tenure)) {
            if(strstr($millionaire_tenure,',')) {
                $data1 = explode(',',$millionaire_tenure);

                foreach( $data1 as $tenure_id ) {
                    $millionaire_tenure_array[] =  $tenure_id;
                }

            } else {
                $millionaire_tenure_array[] = $millionaire_tenure;
            }
        }

        $bank_id_array = array();
        if(!empty($millionaire_bank_ids)) {
            if(strstr($millionaire_bank_ids,',')) {
                $data8 = explode(',',$millionaire_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $millionaire_bank_ids;
            }
        }



        $array_items = array('millionaire_i_am', 'millionaire_i_am_label','millionaire_tenure','millionaire_maturity_amount','millionaire_maturity_amount_label','millionaire_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'millionaire_i_am'  => $millionaire_i_am,
            'millionaire_i_am_label' => $millionaire_i_am_label,
            'millionaire_tenure' => $millionaire_tenure_array,
            'millionaire_maturity_amount' => $millionaire_maturity_amount,
            'millionaire_maturity_amount_label' => $millionaire_maturity_amount_label,
            'millionaire_bank_ids' => $bank_id_array,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }


}