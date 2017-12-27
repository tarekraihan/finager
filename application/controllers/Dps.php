<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : DPS                               *
 * Script : front end  controller             *
 * Start Date : 23-10-2016                    *
 * Last Update : 23-10-2016                   *
 **********************************************/

class Dps extends CI_Controller
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
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[dps_tenure.tenure]|numeric');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/dps_tenure');
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
                $this->Common_model->table_name = 'dps_tenure';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'dps/tenure/success');
                } else {
                    redirect(base_url().'dps/tenure/error');
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
                $this->load->view('admin/dps/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => htmlentities($this->input->post('txtTenure')),
                    'no_of_installment' => $installment,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'dps/tenure/success');
                } else {
                    redirect(base_url().'dps/edit_tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function monthly_installment($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtMonthlyInstallment', 'Monthly Installment', 'trim|required|is_unique[dps_monthly_installment.monthly_installment]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Monthly Installment";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/monthly_installment');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'monthly_installment' => $this->input->post('txtMonthlyInstallment'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_monthly_installment';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'dps/monthly_installment/success');
                } else {
                    redirect(base_url().'dps/monthly_installment/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_monthly_installment($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtMonthlyInstallment', 'Monthly Installment', 'trim|required|numeric');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit Monthly Installment";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/edit_monthly_installment');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'monthly_installment' => htmlentities($this->input->post('txtMonthlyInstallment')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_monthly_installment';
                $this->Common_model->where = array('id' => $this->input->post('txtMonthlyInstallmentId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'dps/monthly_installment/success');
                } else {
                    redirect(base_url().'dps/edit_monthly_installment/error');
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
                $this->load->view('admin/dps/draft_info');
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
                $this->Common_model->table_name = 'dps_info_draft';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'dps/draft_info/success');
                } else {
                    redirect(base_url().'dps/draft_info/error');
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
        $this->load->view('admin/dps/draft_list');
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
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Draft Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/edit_draft_info');
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

                $this->Common_model->table_name = 'dps_info_draft';
                $this->Common_model->where = array('id' => $this->input->post('txtDraftId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'dps/edit_draft_info/success');
                } else {
                    redirect(base_url().'dps/edit_draft_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_draft_dps_info(){
        if ($this->session->userdata('email_address')) {
            $bank_id =$this->input->post('bank_id');
            $non_bank_id =$this->input->post('non_bank_id');
            $is_non_bank =$this->input->post('is_non_bank');
            $i_am =$this->input->post('i_am');
            if($is_non_bank == 1){
                $result =  $this->Select_model->get_all_dps_draft_info($non_bank_id,$i_am,$is_non_bank);
            }else{

                $result =  $this->Select_model->get_all_dps_draft_info($bank_id,$i_am,$is_non_bank);
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
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim|required|min_length[3]');


            $this->form_validation->set_rules('two_hundred_maturity', 'two_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_hundred_interest', 'two_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_hundred_maturity', 'three_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_hundred_interest', 'three_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_hundred_maturity', 'four_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_hundred_interest', 'four_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_hundred_maturity', 'five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_hundred_interest', 'five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_maturity', 'one_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_interest', 'one_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_five_hundred_maturity', 'one_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_five_hundred_interest', 'one_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_maturity', 'two_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_interest', 'two_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_five_hundred_maturity', 'two_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_five_hundred_interest', 'two_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_maturity', 'three_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_interest', 'three_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_five_hundred_maturity', 'three_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_five_hundred_interest', 'three_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_maturity', 'four_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_interest', 'four_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_five_hundred_maturity', 'four_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_five_hunderd_interest', 'four_thousand_five_hunderd_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_maturity', 'five_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_interest', 'five_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_five_hundred_maturity', 'five_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_five_hundred_interest', 'five_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_maturity', 'six_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_interest', 'six_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_five_hundred_maturity', 'six_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_five_hundred_interest', 'six_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_maturity', 'seven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_interest', 'seven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_five_hundred_maturity', 'seven_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_five_hundred_interest', 'seven_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('eight_thousand_maturity', 'eight_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eight_thousand_interest', 'eight_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('nine_thousand_maturity', 'nine_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('nine_thousand_interest', 'nine_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('ten_thousand_maturity', 'ten_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('ten_thousand_interest', 'ten_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('eleven_thousand_maturity', 'eleven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eleven_thousand_interest', 'eleven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twelve_thousand_maturity', 'twelve_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twelve_thousand_interest', 'twelve_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('thirteen_thousadn_maturity', 'thirteen_thousadn_maturity', 'trim|numeric');
            $this->form_validation->set_rules('thirteen_thousand_interest', 'thirteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('fourteen_thousand_maturity', 'fourteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('fourteen_thousand_interest', 'fourteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('fifteen_thousand_maturity', 'fifteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('fifteen_thousand_interest', 'fifteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('sixteen_thousand_maturity', 'sixteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('sixteen_thousand_interest', 'sixteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('seventeen_thousand_maturity', 'seventeen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seventeen_thousand_interest', 'seventeen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('eighteen_thousand_maturity', 'eighteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eighteen_thousand_interest', 'eighteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('nineteen_thousand_maturity', 'nineteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('nineteen_thousand_interest', 'nineteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_thousand_maturity', 'twenty_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_thousand_interest', 'twenty_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_one_thousand_maturity', 'twenty_one_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_one_thousand_interest', 'twenty_one_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_two_thousand_maturity', 'twenty_two_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_two_thousand_interest', 'twenty_two_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_three_thousand_maturity', 'twenty_three_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_three_thousand_interest', 'twenty_three_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_four_thousand_maturity', 'twenty_four_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_four_thousand_interest', 'twenty_four_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_five_thousand_maturity', 'twenty_five_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_five_thousand_interest', 'twenty_five_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_six_thousand_maturity', 'twenty_six_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_six_thousand_interest', 'twenty_six_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_seven_thousand_maturity', 'twenty_seven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_seven_thousand_interest', 'twenty_seven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_eight_thousand_maturity', 'twenty_eight_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_eight_thousand_interest', 'twenty_eight_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_nine_thousand_maturity', 'twenty_nine_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_nine_thousand_interest', 'twenty_nine_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('thirty_thousand_maturity', 'thirty_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('thirty_thousand_interest', 'thirty_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_lac_maturity', 'one_lac_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_lac_interest', 'one_lac_interest', 'trim|numeric');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Add Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/dps_info');
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
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'interest_rate' => htmlentities($this->input->post('txtInterestRate')),
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id'),
                    'minimum_amount'=>$this->input->post('txtMinimumAmount'),
                    'maximum_amount'=>$this->input->post('txtMaximumAmount')
                );
                $this->Common_model->table_name = 'dps_info';
                $res = $this->Common_model->insert();
                if($res){
                    $installment = ($this->input->post('txtTenure') * 12);

                    $this->Common_model->data = array(
                        'dps_info_id' => $res,
                        'dps_tenure_id' => $this->input->post('txtTenure'),
                        'two_hundred_maturity' => htmlentities($this->input->post('two_hundred_maturity')),
                        'two_hundred_interest' => ($this->input->post('two_hundred_maturity') != '') ? ($this->input->post('two_hundred_maturity') - ($this->input->post('two_hundred_interest') * $installment )) : '',
                        'three_hundred_maturity' => htmlentities($this->input->post('three_hundred_maturity')),
                        'three_hundred_interest' => ($this->input->post('three_hundred_maturity') != '') ? ($this->input->post('three_hundred_maturity') - ($this->input->post('three_hundred_interest') * $installment )) : '',
                        'four_hundred_maturity' => htmlentities($this->input->post('four_hundred_maturity')),
                        'four_hundred_interest' => ($this->input->post('four_hundred_maturity') != '') ? ($this->input->post('four_hundred_maturity') - ($this->input->post('four_hundred_interest') * $installment )) : '',
                        'five_hundred_maturity' => htmlentities($this->input->post('five_hundred_maturity')),
                        'five_hundred_interest' => ($this->input->post('five_hundred_maturity') != '') ? ($this->input->post('five_hundred_maturity') - ($this->input->post('five_hundred_interest') * $installment )) : '',
                        'one_thousand_maturity' => htmlentities($this->input->post('one_thousand_maturity')),
                        'one_thousand_interest' => ($this->input->post('one_thousand_maturity') != '') ? ($this->input->post('one_thousand_maturity') - ($this->input->post('one_thousand_interest') * $installment )) : '',
                        'one_thousand_five_hundred_maturity' => htmlentities($this->input->post('one_thousand_five_hundred_maturity')),
                        'one_thousand_five_hundred_interest' => ($this->input->post('one_thousand_five_hundred_maturity') != '') ? ($this->input->post('one_thousand_five_hundred_maturity') - ($this->input->post('one_thousand_five_hundred_interest') * $installment )) : '',
                        'two_thousand_maturity' => htmlentities($this->input->post('two_thousand_maturity')),
                        'two_thousand_interest' => ($this->input->post('two_thousand_maturity') != '') ? ($this->input->post('two_thousand_maturity') - ($this->input->post('two_thousand_interest') * $installment )) : '',
                        'two_thousand_five_hundred_maturity' => htmlentities($this->input->post('two_thousand_five_hundred_maturity')),
                        'two_thousand_five_hundred_interest' => ($this->input->post('two_thousand_five_hundred_maturity') != '') ? ($this->input->post('two_thousand_five_hundred_maturity') - ($this->input->post('two_thousand_five_hundred_interest') * $installment )) : '',
                        'three_thousand_maturity' => htmlentities($this->input->post('three_thousand_maturity')),
                        'three_thousand_interest' => ($this->input->post('three_thousand_maturity') != '') ? ($this->input->post('three_thousand_maturity') - ($this->input->post('three_thousand_interest') * $installment )) : '',
                        'three_thousand_five_hundred_maturity' => htmlentities($this->input->post('three_thousand_five_hundred_maturity')),
                        'three_thousand_five_hundred_interest' => ($this->input->post('three_thousand_five_hundred_maturity') != '') ? ($this->input->post('three_thousand_five_hundred_maturity') - ($this->input->post('three_thousand_five_hundred_interest') * $installment )) : '',
                        'four_thousand_maturity' => htmlentities($this->input->post('four_thousand_maturity')),
                        'four_thousand_interest' => ($this->input->post('four_thousand_maturity') != '') ? ($this->input->post('four_thousand_maturity') - ($this->input->post('four_thousand_interest') * $installment )) : '',
                        'four_thousand_five_hundred_maturity' => htmlentities($this->input->post('four_thousand_five_hundred_maturity')),
                        'four_thousand_five_hunderd_interest' => ($this->input->post('four_thousand_five_hundred_maturity') != '') ? ($this->input->post('four_thousand_five_hundred_maturity') - ($this->input->post('four_thousand_five_hunderd_interest') * $installment )) : '',
                        'five_thousand_maturity' => htmlentities($this->input->post('five_thousand_maturity')),
                        'five_thousand_interest' => ($this->input->post('five_thousand_maturity') != '') ? ($this->input->post('five_thousand_maturity') - ($this->input->post('five_thousand_interest') * $installment )) : '',
                        'five_thousand_five_hundred_maturity' => htmlentities($this->input->post('five_thousand_five_hundred_maturity')),
                        'five_thousand_five_hundred_interest' => ($this->input->post('five_thousand_five_hundred_maturity') != '') ? ($this->input->post('five_thousand_five_hundred_maturity') - ($this->input->post('five_thousand_five_hundred_interest') * $installment )) : '',
                        'six_thousand_maturity' => htmlentities($this->input->post('six_thousand_maturity')),
                        'six_thousand_interest' => ($this->input->post('six_thousand_maturity') != '') ? ($this->input->post('six_thousand_maturity') - ($this->input->post('six_thousand_interest') * $installment )) : '',
                        'six_thousand_five_hundred_maturity' => htmlentities($this->input->post('six_thousand_five_hundred_maturity')),
                        'six_thousand_five_hundred_interest' => ($this->input->post('six_thousand_five_hundred_maturity') != '') ? ($this->input->post('six_thousand_five_hundred_maturity') - ($this->input->post('six_thousand_five_hundred_interest') * $installment )) : '',
                        'seven_thousand_maturity' => htmlentities($this->input->post('seven_thousand_maturity')),
                        'seven_thousand_interest' => ($this->input->post('seven_thousand_maturity') != '') ? ($this->input->post('seven_thousand_maturity') - ($this->input->post('seven_thousand_interest') * $installment )) : '',
                        'seven_thousand_five_hundred_maturity' => htmlentities($this->input->post('seven_thousand_five_hundred_maturity')),
                        'seven_thousand_five_hundred_interest' => ($this->input->post('seven_thousand_five_hundred_maturity') != '') ? ($this->input->post('seven_thousand_five_hundred_maturity') - ($this->input->post('seven_thousand_five_hundred_interest') * $installment )) : '',
                        'eight_thousand_maturity' => htmlentities($this->input->post('eight_thousand_maturity')),
                        'eight_thousand_interest' => ($this->input->post('eight_thousand_maturity') != '') ? ($this->input->post('eight_thousand_maturity') - ($this->input->post('eight_thousand_interest') * $installment )) : '',
                        'nine_thousand_maturity' => htmlentities($this->input->post('nine_thousand_maturity')),
                        'nine_thousand_interest' =>  ($this->input->post('nine_thousand_maturity') != '') ? ($this->input->post('nine_thousand_maturity') - ($this->input->post('nine_thousand_interest') * $installment )) : '',
                        'ten_thousand_maturity' => htmlentities($this->input->post('ten_thousand_maturity')),
                        'ten_thousand_interest' => ($this->input->post('ten_thousand_maturity') != '') ? ($this->input->post('ten_thousand_maturity') - ($this->input->post('ten_thousand_interest') * $installment )) : '',
                        'eleven_thousand_maturity' => htmlentities($this->input->post('eleven_thousand_maturity')),
                        'eleven_thousand_interest' => ($this->input->post('eleven_thousand_maturity') != '') ? ($this->input->post('eleven_thousand_maturity') - ($this->input->post('eleven_thousand_interest') * $installment )) : '',
                        'twelve_thousand_maturity' => htmlentities($this->input->post('twelve_thousand_maturity')),
                        'twelve_thousand_interest' => ($this->input->post('twelve_thousand_maturity') != '') ? ($this->input->post('twelve_thousand_maturity') - ($this->input->post('twelve_thousand_interest') * $installment )) : '',
                        'thirteen_thousadn_maturity' => htmlentities($this->input->post('thirteen_thousadn_maturity')),
                        'thirteen_thousand_interest' => ($this->input->post('thirteen_thousadn_maturity') != '') ? ($this->input->post('thirteen_thousadn_maturity') - ($this->input->post('thirteen_thousand_interest') * $installment )) : '',
                        'fourteen_thousand_maturity' => htmlentities($this->input->post('fourteen_thousand_maturity')),
                        'fourteen_thousand_interest' => ($this->input->post('fourteen_thousand_maturity') != '') ? ($this->input->post('fourteen_thousand_maturity') - ($this->input->post('fourteen_thousand_interest') * $installment )) : '',
                        'fifteen_thousand_maturity' => htmlentities($this->input->post('fifteen_thousand_maturity')),
                        'fifteen_thousand_interest' => ($this->input->post('fifteen_thousand_maturity') != '') ? ($this->input->post('fifteen_thousand_maturity') - ($this->input->post('fifteen_thousand_interest') * $installment )) : '',
                        'sixteen_thousand_maturity' => htmlentities($this->input->post('sixteen_thousand_maturity')),
                        'sixteen_thousand_interest' => ($this->input->post('sixteen_thousand_maturity') != '') ? ($this->input->post('sixteen_thousand_maturity') - ($this->input->post('sixteen_thousand_interest') * $installment )) : '',
                        'seventeen_thousand_maturity' => htmlentities($this->input->post('seventeen_thousand_maturity')),
                        'seventeen_thousand_interest' =>  ($this->input->post('seventeen_thousand_maturity') != '') ? ($this->input->post('seventeen_thousand_maturity') - ($this->input->post('seventeen_thousand_interest') * $installment )) : '',
                        'eighteen_thousand_maturity' => htmlentities($this->input->post('eighteen_thousand_maturity')),
                        'eighteen_thousand_interest' =>  ($this->input->post('eighteen_thousand_maturity') != '') ? ($this->input->post('eighteen_thousand_maturity') - ($this->input->post('eighteen_thousand_interest') * $installment )) : '',
                        'nineteen_thousand_maturity' => htmlentities($this->input->post('nineteen_thousand_maturity')),
                        'nineteen_thousand_interest' => ($this->input->post('nineteen_thousand_maturity') != '') ? ($this->input->post('nineteen_thousand_maturity') - ($this->input->post('nineteen_thousand_interest') * $installment )) : '',
                        'twenty_thousand_maturity' => htmlentities($this->input->post('twenty_thousand_maturity')),
                        'twenty_thousand_interest' => ($this->input->post('twenty_thousand_maturity') != '') ? ($this->input->post('twenty_thousand_maturity') - ($this->input->post('twenty_thousand_interest') * $installment )) : '',
                        'twenty_one_thousand_maturity' => htmlentities($this->input->post('twenty_one_thousand_maturity')),
                        'twenty_one_thousand_interest' => ($this->input->post('twenty_one_thousand_maturity') != '') ? ($this->input->post('twenty_one_thousand_maturity') - ($this->input->post('twenty_one_thousand_interest') * $installment )) : '',
                        'twenty_two_thousand_maturity' => htmlentities($this->input->post('twenty_two_thousand_maturity')),
                        'twenty_two_thousand_interest' => ($this->input->post('twenty_two_thousand_maturity') != '') ? ($this->input->post('twenty_two_thousand_maturity') - ($this->input->post('twenty_two_thousand_interest') * $installment )) : '',
                        'twenty_three_thousand_maturity' => htmlentities($this->input->post('twenty_three_thousand_maturity')),
                        'twenty_three_thousand_interest' => ($this->input->post('twenty_three_thousand_maturity') != '') ? ($this->input->post('twenty_three_thousand_maturity') - ($this->input->post('twenty_three_thousand_interest') * $installment )) : '',
                        'twenty_four_thousand_maturity' => htmlentities($this->input->post('twenty_four_thousand_maturity')),
                        'twenty_four_thousand_interest' => ($this->input->post('twenty_four_thousand_maturity') != '') ? ($this->input->post('twenty_four_thousand_maturity') - ($this->input->post('twenty_four_thousand_interest') * $installment )) : '',
                        'twenty_five_thousand_maturity' => htmlentities($this->input->post('twenty_five_thousand_maturity')),
                        'twenty_five_thousand_interest' => ($this->input->post('twenty_five_thousand_maturity') != '') ? ($this->input->post('twenty_five_thousand_maturity') - ($this->input->post('twenty_five_thousand_interest') * $installment )) : '',
                        'twenty_six_thousand_maturity' => htmlentities($this->input->post('twenty_six_thousand_maturity')),
                        'twenty_six_thousand_interest' =>  ($this->input->post('twenty_six_thousand_maturity') != '') ? ($this->input->post('twenty_six_thousand_maturity') - ($this->input->post('twenty_six_thousand_interest') * $installment )) : '',
                        'twenty_seven_thousand_maturity' => htmlentities($this->input->post('twenty_seven_thousand_maturity')),
                        'twenty_seven_thousand_interest' =>  ($this->input->post('twenty_seven_thousand_maturity') != '') ? ($this->input->post('twenty_seven_thousand_maturity') - ($this->input->post('twenty_seven_thousand_interest') * $installment )) : '',
                        'twenty_eight_thousand_maturity' => htmlentities($this->input->post('twenty_eight_thousand_maturity')),
                        'twenty_eight_thousand_interest' =>($this->input->post('twenty_eight_thousand_maturity') != '') ? ($this->input->post('twenty_eight_thousand_maturity') - ($this->input->post('twenty_eight_thousand_interest') * $installment )) : '',
                        'twenty_nine_thousand_maturity' => htmlentities($this->input->post('twenty_nine_thousand_maturity')),
                        'twenty_nine_thousand_interest' => ($this->input->post('twenty_nine_thousand_maturity') != '') ? ($this->input->post('twenty_nine_thousand_maturity') - ($this->input->post('twenty_nine_thousand_interest') * $installment )) : '',
                        'thirty_thousand_maturity' => htmlentities($this->input->post('thirty_thousand_maturity')),
                        'thirty_thousand_interest' => ($this->input->post('thirty_thousand_maturity') != '') ? ($this->input->post('thirty_thousand_maturity') - ($this->input->post('thirty_thousand_interest') * $installment )) : '',
                        'one_lac_maturity' => htmlentities($this->input->post('one_lac_maturity')),
                        'one_lac_interest' =>($this->input->post('one_lac_maturity') != '') ? ($this->input->post('one_lac_maturity') - ($this->input->post('one_lac_interest') * $installment )) : '',
                        'created' => $date ,
                        'created_by'=>$this->session->userdata('admin_user_id')
                    );
//                    print_r($this->Common_model->data);die;
                    $this->Common_model->table_name = 'dps_maturity_amount';
                    $result = $this->Common_model->insert();
                    if ($result) {
                        $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Updated !!</div>';
                        $this->session->set_userdata($data);
                        redirect(base_url().'dps/add_info/');
                    } else {
                        redirect(base_url().'dps/add_info/error');
                    }
                }else {
                    redirect(base_url().'dps/add_info/error');
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_list($msg=''){
        if ($msg == 'success') {
            $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
        }
        $data['title'] = "Draft Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/dps/deposit_list');
        $this->load->view('admin/block/footer');
    }

    function edit_dps_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtDpsName', 'DPS Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim|required|min_length[3]');

            $this->form_validation->set_rules('two_hundred_maturity', 'two_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_hundred_interest', 'two_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_hundred_maturity', 'three_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_hundred_interest', 'three_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_hundred_maturity', 'four_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_hundred_interest', 'four_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_hundred_maturity', 'five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_hundred_interest', 'five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_maturity', 'one_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_interest', 'one_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_five_hundred_maturity', 'one_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_thousand_five_hundred_interest', 'one_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_maturity', 'two_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_interest', 'two_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_five_hundred_maturity', 'two_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('two_thousand_five_hundred_interest', 'two_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_maturity', 'three_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_interest', 'three_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_five_hundred_maturity', 'three_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('three_thousand_five_hundred_interest', 'three_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_maturity', 'four_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_interest', 'four_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_five_hundred_maturity', 'four_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('four_thousand_five_hunderd_interest', 'four_thousand_five_hunderd_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_maturity', 'five_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_interest', 'five_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_five_hundred_maturity', 'five_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('five_thousand_five_hundred_interest', 'five_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_maturity', 'six_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_interest', 'six_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_five_hundred_maturity', 'six_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('six_thousand_five_hundred_interest', 'six_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_maturity', 'seven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_interest', 'seven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_five_hundred_maturity', 'seven_thousand_five_hundred_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seven_thousand_five_hundred_interest', 'seven_thousand_five_hundred_interest', 'trim|numeric');
            $this->form_validation->set_rules('eight_thousand_maturity', 'eight_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eight_thousand_interest', 'eight_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('nine_thousand_maturity', 'nine_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('nine_thousand_interest', 'nine_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('ten_thousand_maturity', 'ten_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('ten_thousand_interest', 'ten_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('eleven_thousand_maturity', 'eleven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eleven_thousand_interest', 'eleven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twelve_thousand_maturity', 'twelve_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twelve_thousand_interest', 'twelve_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('thirteen_thousadn_maturity', 'thirteen_thousadn_maturity', 'trim|numeric');
            $this->form_validation->set_rules('thirteen_thousand_interest', 'thirteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('fourteen_thousand_maturity', 'fourteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('fourteen_thousand_interest', 'fourteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('fifteen_thousand_maturity', 'fifteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('fifteen_thousand_interest', 'fifteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('sixteen_thousand_maturity', 'sixteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('sixteen_thousand_interest', 'sixteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('seventeen_thousand_maturity', 'seventeen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('seventeen_thousand_interest', 'seventeen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('eighteen_thousand_maturity', 'eighteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('eighteen_thousand_interest', 'eighteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('nineteen_thousand_maturity', 'nineteen_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('nineteen_thousand_interest', 'nineteen_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_thousand_maturity', 'twenty_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_thousand_interest', 'twenty_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_one_thousand_maturity', 'twenty_one_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_one_thousand_interest', 'twenty_one_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_two_thousand_maturity', 'twenty_two_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_two_thousand_interest', 'twenty_two_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_three_thousand_maturity', 'twenty_three_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_three_thousand_interest', 'twenty_three_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_four_thousand_maturity', 'twenty_four_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_four_thousand_interest', 'twenty_four_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_five_thousand_maturity', 'twenty_five_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_five_thousand_interest', 'twenty_five_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_six_thousand_maturity', 'twenty_six_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_six_thousand_interest', 'twenty_six_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_seven_thousand_maturity', 'twenty_seven_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_seven_thousand_interest', 'twenty_seven_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_eight_thousand_maturity', 'twenty_eight_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_eight_thousand_interest', 'twenty_eight_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('twenty_nine_thousand_maturity', 'twenty_nine_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('twenty_nine_thousand_interest', 'twenty_nine_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('thirty_thousand_maturity', 'thirty_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('thirty_thousand_interest', 'thirty_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('fifty_thousand_maturity', 'fifty_thousand_maturity', 'trim|numeric');
            $this->form_validation->set_rules('fifty_thousand_interest', 'fifty_thousand_interest', 'trim|numeric');
            $this->form_validation->set_rules('one_lac_maturity', 'one_lac_maturity', 'trim|numeric');
            $this->form_validation->set_rules('one_lac_interest', 'one_lac_interest', 'trim|numeric');


            if ($this->form_validation->run() == FALSE) {
//                echo validation_errors('<div class="error">', '</div>');die;
                $data['title'] = "Finager - Edit Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/edit_dps_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $is_non_bank =$this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }

                $this->Common_model->data = array(
                    'dps_name' => $this->input->post('txtDpsName'),
                    'bank_id' => $this->input->post('txtBankName'),
                    'i_am_id' => $this->input->post('txtIAm'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'interest_rate' => htmlentities($this->input->post('txtInterestRate')),
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'review' => $this->input->post('txtReview'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id'),
                    'minimum_amount'=>$this->input->post('txtMinimumAmount'),
                    'maximum_amount'=>$this->input->post('txtMaximumAmount')
                );
                $this->Common_model->table_name = 'dps_info';
                $this->Common_model->where = array('id' => $this->input->post('txtInfoId'));
                $res = $this->Common_model->update();
                if($res){
                    $installment = ($this->input->post('txtTenure') * 12);
                    $this->Common_model->data = array();
                    $this->Common_model->data = array(
//                        'dps_info_id' => $this->input->post('txtInfoId'),
//                        'dps_tenure_id' => $this->input->post('txtTenure'),
                        'two_hundred_maturity' => htmlentities($this->input->post('two_hundred_maturity')),
                        'two_hundred_interest' => ($this->input->post('two_hundred_maturity') != '') ? ($this->input->post('two_hundred_maturity') - ($this->input->post('two_hundred_interest') * $installment )) : '',
                        'three_hundred_maturity' => htmlentities($this->input->post('three_hundred_maturity')),
                        'three_hundred_interest' => ($this->input->post('three_hundred_maturity') != '') ? ($this->input->post('three_hundred_maturity') - ($this->input->post('three_hundred_interest') * $installment )) : '',
                        'four_hundred_maturity' => htmlentities($this->input->post('four_hundred_maturity')),
                        'four_hundred_interest' => ($this->input->post('four_hundred_maturity') != '') ? ($this->input->post('four_hundred_maturity') - ($this->input->post('four_hundred_interest') * $installment )) : '',
                        'five_hundred_maturity' => htmlentities($this->input->post('five_hundred_maturity')),
                        'five_hundred_interest' => ($this->input->post('five_hundred_maturity') != '') ? ($this->input->post('five_hundred_maturity') - ($this->input->post('five_hundred_interest') * $installment )) : '',
                        'one_thousand_maturity' => htmlentities($this->input->post('one_thousand_maturity')),
                        'one_thousand_interest' => ($this->input->post('one_thousand_maturity') != '') ? ($this->input->post('one_thousand_maturity') - ($this->input->post('one_thousand_interest') * $installment )) : '',
                        'one_thousand_five_hundred_maturity' => htmlentities($this->input->post('one_thousand_five_hundred_maturity')),
                        'one_thousand_five_hundred_interest' => ($this->input->post('one_thousand_five_hundred_maturity') != '') ? ($this->input->post('one_thousand_five_hundred_maturity') - ($this->input->post('one_thousand_five_hundred_interest') * $installment )) : '',
                        'two_thousand_maturity' => htmlentities($this->input->post('two_thousand_maturity')),
                        'two_thousand_interest' => ($this->input->post('two_thousand_maturity') != '') ? ($this->input->post('two_thousand_maturity') - ($this->input->post('two_thousand_interest') * $installment )) : '',
                        'two_thousand_five_hundred_maturity' => htmlentities($this->input->post('two_thousand_five_hundred_maturity')),
                        'two_thousand_five_hundred_interest' => ($this->input->post('two_thousand_five_hundred_maturity') != '') ? ($this->input->post('two_thousand_five_hundred_maturity') - ($this->input->post('two_thousand_five_hundred_interest') * $installment )) : '',
                        'three_thousand_maturity' => htmlentities($this->input->post('three_thousand_maturity')),
                        'three_thousand_interest' => ($this->input->post('three_thousand_maturity') != '') ? ($this->input->post('three_thousand_maturity') - ($this->input->post('three_thousand_interest') * $installment )) : '',
                        'three_thousand_five_hundred_maturity' => htmlentities($this->input->post('three_thousand_five_hundred_maturity')),
                        'three_thousand_five_hundred_interest' => ($this->input->post('three_thousand_five_hundred_maturity') != '') ? ($this->input->post('three_thousand_five_hundred_maturity') - ($this->input->post('three_thousand_five_hundred_interest') * $installment )) : '',
                        'four_thousand_maturity' => htmlentities($this->input->post('four_thousand_maturity')),
                        'four_thousand_interest' => ($this->input->post('four_thousand_maturity') != '') ? ($this->input->post('four_thousand_maturity') - ($this->input->post('four_thousand_interest') * $installment )) : '',
                        'four_thousand_five_hundred_maturity' => htmlentities($this->input->post('four_thousand_five_hundred_maturity')),
                        'four_thousand_five_hunderd_interest' => ($this->input->post('four_thousand_five_hundred_maturity') != '') ? ($this->input->post('four_thousand_five_hundred_maturity') - ($this->input->post('four_thousand_five_hunderd_interest') * $installment )) : '',
                        'five_thousand_maturity' => htmlentities($this->input->post('five_thousand_maturity')),
                        'five_thousand_interest' => ($this->input->post('five_thousand_maturity') != '') ? ($this->input->post('five_thousand_maturity') - ($this->input->post('five_thousand_interest') * $installment )) : '',
                        'five_thousand_five_hundred_maturity' => htmlentities($this->input->post('five_thousand_five_hundred_maturity')),
                        'five_thousand_five_hundred_interest' => ($this->input->post('five_thousand_five_hundred_maturity') != '') ? ($this->input->post('five_thousand_five_hundred_maturity') - ($this->input->post('five_thousand_five_hundred_interest') * $installment )) : '',
                        'six_thousand_maturity' => htmlentities($this->input->post('six_thousand_maturity')),
                        'six_thousand_interest' => ($this->input->post('six_thousand_maturity') != '') ? ($this->input->post('six_thousand_maturity') - ($this->input->post('six_thousand_interest') * $installment )) : '',
                        'six_thousand_five_hundred_maturity' => htmlentities($this->input->post('six_thousand_five_hundred_maturity')),
                        'six_thousand_five_hundred_interest' => ($this->input->post('six_thousand_five_hundred_maturity') != '') ? ($this->input->post('six_thousand_five_hundred_maturity') - ($this->input->post('six_thousand_five_hundred_interest') * $installment )) : '',
                        'seven_thousand_maturity' => htmlentities($this->input->post('seven_thousand_maturity')),
                        'seven_thousand_interest' => ($this->input->post('seven_thousand_maturity') != '') ? ($this->input->post('seven_thousand_maturity') - ($this->input->post('seven_thousand_interest') * $installment )) : '',
                        'seven_thousand_five_hundred_maturity' => htmlentities($this->input->post('seven_thousand_five_hundred_maturity')),
                        'seven_thousand_five_hundred_interest' => ($this->input->post('seven_thousand_five_hundred_maturity') != '') ? ($this->input->post('seven_thousand_five_hundred_maturity') - ($this->input->post('seven_thousand_five_hundred_interest') * $installment )) : '',
                        'eight_thousand_maturity' => htmlentities($this->input->post('eight_thousand_maturity')),
                        'eight_thousand_interest' => ($this->input->post('eight_thousand_maturity') != '') ? ($this->input->post('eight_thousand_maturity') - ($this->input->post('eight_thousand_interest') * $installment )) : '',
                        'nine_thousand_maturity' => htmlentities($this->input->post('nine_thousand_maturity')),
                        'nine_thousand_interest' =>  ($this->input->post('nine_thousand_maturity') != '') ? ($this->input->post('nine_thousand_maturity') - ($this->input->post('nine_thousand_interest') * $installment )) : '',
                        'ten_thousand_maturity' => htmlentities($this->input->post('ten_thousand_maturity')),
                        'ten_thousand_interest' => ($this->input->post('ten_thousand_maturity') != '') ? ($this->input->post('ten_thousand_maturity') - ($this->input->post('ten_thousand_interest') * $installment )) : '',
                        'eleven_thousand_maturity' => htmlentities($this->input->post('eleven_thousand_maturity')),
                        'eleven_thousand_interest' => ($this->input->post('eleven_thousand_maturity') != '') ? ($this->input->post('eleven_thousand_maturity') - ($this->input->post('eleven_thousand_interest') * $installment )) : '',
                        'twelve_thousand_maturity' => htmlentities($this->input->post('twelve_thousand_maturity')),
                        'twelve_thousand_interest' => ($this->input->post('twelve_thousand_maturity') != '') ? ($this->input->post('twelve_thousand_maturity') - ($this->input->post('twelve_thousand_interest') * $installment )) : '',
                        'thirteen_thousadn_maturity' => htmlentities($this->input->post('thirteen_thousadn_maturity')),
                        'thirteen_thousand_interest' => ($this->input->post('thirteen_thousadn_maturity') != '') ? ($this->input->post('thirteen_thousadn_maturity') - ($this->input->post('thirteen_thousand_interest') * $installment )) : '',
                        'fourteen_thousand_maturity' => htmlentities($this->input->post('fourteen_thousand_maturity')),
                        'fourteen_thousand_interest' => ($this->input->post('fourteen_thousand_maturity') != '') ? ($this->input->post('fourteen_thousand_maturity') - ($this->input->post('fourteen_thousand_interest') * $installment )) : '',
                        'fifteen_thousand_maturity' => htmlentities($this->input->post('fifteen_thousand_maturity')),
                        'fifteen_thousand_interest' => ($this->input->post('fifteen_thousand_maturity') != '') ? ($this->input->post('fifteen_thousand_maturity') - ($this->input->post('fifteen_thousand_interest') * $installment )) : '',
                        'sixteen_thousand_maturity' => htmlentities($this->input->post('sixteen_thousand_maturity')),
                        'sixteen_thousand_interest' => ($this->input->post('sixteen_thousand_maturity') != '') ? ($this->input->post('sixteen_thousand_maturity') - ($this->input->post('sixteen_thousand_interest') * $installment )) : '',
                        'seventeen_thousand_maturity' => htmlentities($this->input->post('seventeen_thousand_maturity')),
                        'seventeen_thousand_interest' =>  ($this->input->post('seventeen_thousand_maturity') != '') ? ($this->input->post('seventeen_thousand_maturity') - ($this->input->post('seventeen_thousand_interest') * $installment )) : '',
                        'eighteen_thousand_maturity' => htmlentities($this->input->post('eighteen_thousand_maturity')),
                        'eighteen_thousand_interest' =>  ($this->input->post('eighteen_thousand_maturity') != '') ? ($this->input->post('eighteen_thousand_maturity') - ($this->input->post('eighteen_thousand_interest') * $installment )) : '',
                        'nineteen_thousand_maturity' => htmlentities($this->input->post('nineteen_thousand_maturity')),
                        'nineteen_thousand_interest' => ($this->input->post('nineteen_thousand_maturity') != '') ? ($this->input->post('nineteen_thousand_maturity') - ($this->input->post('nineteen_thousand_interest') * $installment )) : '',
                        'twenty_thousand_maturity' => htmlentities($this->input->post('twenty_thousand_maturity')),
                        'twenty_thousand_interest' => ($this->input->post('twenty_thousand_maturity') != '') ? ($this->input->post('twenty_thousand_maturity') - ($this->input->post('twenty_thousand_interest') * $installment )) : '',
                        'twenty_one_thousand_maturity' => htmlentities($this->input->post('twenty_one_thousand_maturity')),
                        'twenty_one_thousand_interest' => ($this->input->post('twenty_one_thousand_maturity') != '') ? ($this->input->post('twenty_one_thousand_maturity') - ($this->input->post('twenty_one_thousand_interest') * $installment )) : '',
                        'twenty_two_thousand_maturity' => htmlentities($this->input->post('twenty_two_thousand_maturity')),
                        'twenty_two_thousand_interest' => ($this->input->post('twenty_two_thousand_maturity') != '') ? ($this->input->post('twenty_two_thousand_maturity') - ($this->input->post('twenty_two_thousand_interest') * $installment )) : '',
                        'twenty_three_thousand_maturity' => htmlentities($this->input->post('twenty_three_thousand_maturity')),
                        'twenty_three_thousand_interest' => ($this->input->post('twenty_three_thousand_maturity') != '') ? ($this->input->post('twenty_three_thousand_maturity') - ($this->input->post('twenty_three_thousand_interest') * $installment )) : '',
                        'twenty_four_thousand_maturity' => htmlentities($this->input->post('twenty_four_thousand_maturity')),
                        'twenty_four_thousand_interest' => ($this->input->post('twenty_four_thousand_maturity') != '') ? ($this->input->post('twenty_four_thousand_maturity') - ($this->input->post('twenty_four_thousand_interest') * $installment )) : '',
                        'twenty_five_thousand_maturity' => htmlentities($this->input->post('twenty_five_thousand_maturity')),
                        'twenty_five_thousand_interest' => ($this->input->post('twenty_five_thousand_maturity') != '') ? ($this->input->post('twenty_five_thousand_maturity') - ($this->input->post('twenty_five_thousand_interest') * $installment )) : '',
                        'twenty_six_thousand_maturity' => htmlentities($this->input->post('twenty_six_thousand_maturity')),
                        'twenty_six_thousand_interest' =>  ($this->input->post('twenty_six_thousand_maturity') != '') ? ($this->input->post('twenty_six_thousand_maturity') - ($this->input->post('twenty_six_thousand_interest') * $installment )) : '',
                        'twenty_seven_thousand_maturity' => htmlentities($this->input->post('twenty_seven_thousand_maturity')),
                        'twenty_seven_thousand_interest' =>  ($this->input->post('twenty_seven_thousand_maturity') != '') ? ($this->input->post('twenty_seven_thousand_maturity') - ($this->input->post('twenty_seven_thousand_interest') * $installment )) : '',
                        'twenty_eight_thousand_maturity' => htmlentities($this->input->post('twenty_eight_thousand_maturity')),
                        'twenty_eight_thousand_interest' =>($this->input->post('twenty_eight_thousand_maturity') != '') ? ($this->input->post('twenty_eight_thousand_maturity') - ($this->input->post('twenty_eight_thousand_interest') * $installment )) : '',
                        'twenty_nine_thousand_maturity' => htmlentities($this->input->post('twenty_nine_thousand_maturity')),
                        'twenty_nine_thousand_interest' => ($this->input->post('twenty_nine_thousand_maturity') != '') ? ($this->input->post('twenty_nine_thousand_maturity') - ($this->input->post('twenty_nine_thousand_interest') * $installment )) : '',
                        'thirty_thousand_maturity' => htmlentities($this->input->post('thirty_thousand_maturity')),
                        'thirty_thousand_interest' => ($this->input->post('thirty_thousand_maturity') != '') ? ($this->input->post('thirty_thousand_maturity') - ($this->input->post('thirty_thousand_interest') * $installment )) : '',
                        'fifty_thousand_maturity' => htmlentities($this->input->post('fifty_thousand_maturity')),
                        'fifty_thousand_interest' => ($this->input->post('fifty_thousand_maturity') != '') ? ($this->input->post('fifty_thousand_maturity') - ($this->input->post('fifty_thousand_interest') * $installment )) : '',
                        'one_lac_maturity' => htmlentities($this->input->post('one_lac_maturity')),
                        'one_lac_interest' =>($this->input->post('one_lac_maturity') != '') ? ($this->input->post('one_lac_maturity') - ($this->input->post('one_lac_interest') * $installment )) : '',
                        'modified' => $date ,
                        'modified_by'=>$this->session->userdata('admin_user_id')
                    );
//                    echo $this->input->post('txtMaturityId');
//                    pr($this->Common_model->data);die;
                    $this->Common_model->table_name = 'dps_maturity_amount';
                    $this->Common_model->where = array('id' => $this->input->post('txtMaturityId'));
                    $result = $this->Common_model->update();
                    if ($result) {
                        $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Updated !!</div>';
                        $this->session->set_userdata($data);
                        redirect(base_url().'dps/deposit_list');
                    } else {
                        redirect(uri_string());
                    }
                }else {
                    redirect(uri_string());
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



//    Front End query--------------------------------

    public function ajax_get_dps(){

        $dps_user = $this->input->post('dps_user');
        $dps_tenure = $this->input->post('dps_tenure');
        $deposited_amount = (int) $this->input->post('deposited_amount');
        $dps_bank_ids = $this->input->post('dps_bank_ids');



        $WHERE = array(); $query = '';
        if(!empty($dps_user)) {
            $WHERE[] = 'dps_info.i_am_id = '.$dps_user;
        }

        if(!empty($dps_tenure)) {
            $WHERE[] = 'dps_info.tenure_id = '.$dps_tenure;
        }

        if(!empty($dps_bank_ids)) {
            if(strstr($dps_bank_ids,',')) {
                $data8 = explode(',',$dps_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "dps_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(dps_info.bank_id = '.$dps_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $array_map = array(
            '200' => array('two_hundred_maturity','two_hundred_interest','dps_info_id'),
            '300' => array('three_hundred_maturity','three_hundred_interest','dps_info_id'),
            '400' => array('four_hundred_maturity','four_hundred_interest','dps_info_id'),
            '500' => array('five_hundred_maturity','five_hundred_interest','dps_info_id'),
            '1000' => array('one_thousand_maturity','one_thousand_interest','dps_info_id'),
            '1500' => array('one_thousand_five_hundred_maturity','one_thousand_five_hundred_interest','dps_info_id'),
            '2000' => array('two_thousand_maturity','two_thousand_interest','dps_info_id'),
            '2500' => array('two_thousand_five_hundred_maturity','two_thousand_five_hundred_interest','dps_info_id'),
            '3000' => array('three_thousand_maturity','three_thousand_interest','dps_info_id'),
            '3500' => array('three_thousand_five_hundred_maturity','three_thousand_five_hundred_interest','dps_info_id'),
            '4000' => array('four_thousand_maturity','four_thousand_interest','dps_info_id'),
            '4500' => array('four_thousand_five_hundred_maturity','four_thousand_five_hunderd_interest','dps_info_id'),
            '5000' => array('five_thousand_maturity','five_thousand_interest','dps_info_id'),
            '5500' => array('five_thousand_five_hundred_maturity','five_thousand_five_hundred_interest','dps_info_id'),
            '6000' => array('six_thousand_maturity','six_thousand_interest','dps_info_id'),
            '6500' => array('six_thousand_five_hundred_maturity','six_thousand_five_hundred_interest','dps_info_id'),
            '7000' => array('seven_thousand_maturity','seven_thousand_interest','dps_info_id'),
            '7500' => array('seven_thousand_five_hundred_maturity','seven_thousand_five_hundred_interest','dps_info_id'),
            '8000' => array('eight_thousand_maturity','eight_thousand_interest','dps_info_id'),
            '9000' => array('nine_thousand_maturity','nine_thousand_interest','dps_info_id'),
            '10000' => array('ten_thousand_maturity','ten_thousand_interest','dps_info_id'),
            '11000' => array('eleven_thousand_maturity','eleven_thousand_interest','dps_info_id'),
            '12000' => array('twelve_thousand_maturity','twelve_thousand_interest','dps_info_id'),
            '13000' => array('thirteen_thousadn_maturity','thirteen_thousand_interest','dps_info_id'),
            '14000' => array('fourteen_thousand_maturity','fourteen_thousand_interest','dps_info_id'),
            '15000' => array('fifteen_thousand_maturity','fifteen_thousand_interest','dps_info_id'),
            '16000' => array('sixteen_thousand_maturity','sixteen_thousand_interest','dps_info_id'),
            '17000' => array('seventeen_thousand_maturity','seventeen_thousand_interest','dps_info_id'),
            '18000' => array('eighteen_thousand_maturity','eighteen_thousand_interest','dps_info_id'),
            '19000' => array('nineteen_thousand_maturity','nineteen_thousand_interest','dps_info_id'),
            '20000' => array('twenty_thousand_maturity','twenty_thousand_interest','dps_info_id'),
            '21000' => array('twenty_one_thousand_maturity','twenty_one_thousand_interest','dps_info_id'),
            '22000' => array('twenty_two_thousand_maturity','twenty_two_thousand_interest','dps_info_id'),
            '23000' => array('twenty_three_thousand_maturity','twenty_three_thousand_interest','dps_info_id'),
            '24000' => array('twenty_four_thousand_maturity','twenty_four_thousand_interest','dps_info_id'),
            '25000' => array('twenty_five_thousand_maturity','twenty_five_thousand_interest','dps_info_id'),
            '26000' => array('twenty_six_thousand_maturity','twenty_six_thousand_interest','dps_info_id'),
            '27000' => array('twenty_seven_thousand_maturity','twenty_seven_thousand_interest','dps_info_id'),
            '28000' => array('twenty_eight_thousand_maturity','twenty_eight_thousand_interest','dps_info_id'),
            '29000' => array('twenty_nine_thousand_maturity','twenty_nine_thousand_interest','dps_info_id'),
            '30000' => array('thirty_thousand_maturity','thirty_thousand_interest','dps_info_id'),
            '50000' => array('fifty_thousand_maturity','fifty_thousand_interest','dps_info_id'),
            '100000' => array('one_lac_maturity','one_lac_interest','dps_info_id'),
        );

        $s = array();
        if (array_key_exists($deposited_amount, $array_map)) {
            $s =  $array_map[$deposited_amount];
        }

        if(count($s) > 0){
            $res1  = $this->Front_end_select_model->select_dps_loan_info_id( $s[0],$s[1],$s[2],$query);
            if(!is_object($res1)){
                echo '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';exit;
            }else{

                $total_dps = array();
                foreach($res1->result_array() as $row){
                    array_push($total_dps,$row);
                }

                $result = array();
                foreach($total_dps as $k=>$v){
                    $data = array();
                    foreach($v as $kk => $vv){
                        //pr($v[]);
                        if(!empty( $v['maturity'])){
                            $data[$v['dps_info_id']] = $v;
                        }
                    }
                    array_push($result,$data);
                }

                $dps_search_id = array();
                foreach($result as $k =>$v){
                    foreach($v as $kk => $vv){
                        if(!empty($vv)){
                            if(! in_array($kk,$dps_search_id)){
                                $dps_search_id[] = $kk;
                            }
                        }
                    }
                }
                $dps_search_id = array_unique($dps_search_id);

//-----------Pagination start-----------------

                $config['base_url'] = base_url() . "en/all_home_loan/";
                $config['total_rows'] = count($dps_search_id);
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

                $res2 =  $this->Front_end_select_model->select_dps_loan_info_id( $s[0],$s[1],$s[2],$query);
                $data['pagination'] = $this->pagination->create_links();

                $dps1 = array();
                foreach($res2->result_array() as $row){
                    array_push($dps1,$row);
                }


                $result = array();
                foreach($dps1 as $k=>$v){
                    $data1 = array();
                    foreach($v as $kk => $vv){
                        if(!empty( $v['maturity'])){
                            $data1[$v['dps_info_id']] = $v;
                        }
                    }
                    array_push($result,$data1);
                }


                $dps_search_id1 = array();
                foreach($result as $k =>$v){
                    foreach($v as $kk => $vv){
                        if(!empty($vv)){
                            if(! in_array($kk,$dps_search_id1)){
                                $dps_search_id1[] = $kk;
                            }
                        }
                    }
                }


//            $page = 10;
                $deposit_result = array();
                $start = $page; $end = $page + $config["per_page"]; $count = 0;

                $dps_search_id1 = array_unique($dps_search_id1);
                foreach($dps_search_id1 as $v){
                    if($count >= $start && $count < $end){
                        $res  = $this->Front_end_select_model->select_dps_by_id($v);
                        $dps_result  = $res->row();
                        $array = (array) $dps_result;

                        foreach($result as $key=>$val){
                            foreach($val as $k=>$v){
                                if((int)$array['id'] == (int) $k){
                                    $deposit_result[] = array_merge($array,$v);
                                }
                            }
                        }

                    }
                    $count++;
                }

                $dps = '';
                foreach($deposit_result as $row) {
                    $bank = "";
                    if ($row['is_non_bank'] == 1) {
                        $bank = $row['non_bank_name'];
                    } else {
                        $bank = $row['bank_name'];
                    }
                    $bank_logo = "";
                    if ($row['is_non_bank'] == 1) {
                        $bank_logo = $row['non_bank_logo'];
                    } else {
                        $bank_logo = $row['bank_logo'];
                    }

                    $loan_facility = ($row["loan_facility"] == 'N/A') ? 'N/A': $row["loan_facility"].'%';
                    $dps .= '<div class="full-card">
<div class="row fdr_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'. base_url().'en/dps_details/'.$row["id"].'/'.$deposited_amount.'"><img title="Click For Details" class="img-responsive dps_bank_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
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
                                        <h5>Installment Amount</h5>
                                        <p>BDT '.number_format($deposited_amount ).'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Number of Installment</h5>
                                        <p> '.$row["no_of_installment"].'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Maturity Amount</h5>
                                        <p>BDT '.number_format( (int) $row["maturity"]).'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text3">
                                        <h5>Accrued Interest</h5>
                                        <p>BDT '.number_format( (int) $row["interest"] ).'</p>
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
                                <div class="col-md-2"><a role="button"  class="more_info" href="javascript:void(0)" data-toggle="collapse" data-dps_id="'.$row["id"].'"><i class="fa fa-info-circle" aria-hidden="true" ></i> More Info</a></div>
                                <div class="col-md-4"><a class="availableOffer"  href="javascript:void(0)"  data-available_offer="'.$row["id"].'"><i class="fa fa-info-circle" aria-hidden="true" ></i> Available Offer</a></div>
                                <div class="col-md-4"><a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg" id="hideDetailsButton2"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/btnDpsApply.png" alt="DPS Application" /></a></div>
                                <div class="col-md-2"><a id="hideDetailsButton2" href="javascript:void(0)" class="add-to-compare" data-dps_id="'.$row["id"].'"><img class="pull-right" src="'.base_url().'resource/front_end/images/btnDpsCom.png" alt="DPS Add to compare" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- More Info Tab content start -->
                     <div class="collapse" id="moreInfo'.$row["id"].'">
                         <div class="col-md-12">
                               <section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="#Features'.$row["id"].'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesCharges'.$row["id"].'" aria-controls="FeesCharges" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row["id"].'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Eligibility'.$row["id"].'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
                                    <li role="presentation"><a href="#RequiredDoc'.$row["id"].'" aria-controls="RequiredDoc" role="tab" data-toggle="tab">Required Doc</a></li>
                                    <li role="presentation"><a href="#Review'.$row["id"].'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview'.$row["id"].'" aria-controls="UserReview" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features'.$row["id"].'">
                                        <h4>Features:</h4>
                                        '.$row["available_feature"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row["id"].'">
                                        <h4>Fees & Charges:</h4>
                                        '.$row["fees_and_charges"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row["id"].'">
                                        <h4>Terms & Conditions:</h4>
                                        '.$row["terms_and_conditions"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane fdr_terms" id="Eligibility'.$row["id"].'">
                                        <h4>Eligibility:</h4>
                                        '.$row["eligibility"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="RequiredDoc'.$row["id"].'">
                                        <h4>Required Documents</h4>
                                        '.$row["required_document"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row["id"].'">
                                        <h4>Review</h4>
                                        '.$row["review"].'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="UserReview'.$row["id"].'">
                                        <h4>User Review</h4>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- More Info Tab content end -->
                    <div class="collapse" id="availableOffer'.$row["id"].'">
                        <div class="col-md-12">
                            <p><b>Available Deposits (BDT):</b> 500, 1000, 1500, 2000, 2500, 3000, 4000, 5000, 8000, 10000.</p>
                            <p><b>Available Terms:</b> 2, 3, 4, 5, 6, 7, 8, 10.</p>
                            <p><b>Interest Rate:'.$row['interest_rate'].'%</b></p>
                        </div>
                        '.$row["available_benefit"].'
                    </div></div>';
                }
                $dps .= '<div class="col-md-12">'.$data['pagination'].'</div>';
                echo $dps;
            }

        }else{
            echo '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';exit;
        }


    }

    public function ajax_count_selected_row(){

        $dps_user = $this->input->post('dps_user');
        $dps_tenure = $this->input->post('dps_tenure');
        $deposited_amount = (int) $this->input->post('deposited_amount');
        $dps_bank_ids = $this->input->post('dps_bank_ids');

        $WHERE = array(); $query = '';
        if(!empty($dps_user)) {
            $WHERE[] = 'dps_info.i_am_id = '.$dps_user;
        }

        if(!empty($dps_tenure)) {
            $WHERE[] = 'dps_info.tenure_id = '.$dps_tenure;
        }

        if(!empty($dps_bank_ids)) {
            if(strstr($dps_bank_ids,',')) {
                $data8 = explode(',',$dps_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "dps_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(dps_info.bank_id = '.$dps_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $array_map = array(
            '200' => array('two_hundred_maturity','two_hundred_interest','dps_info_id'),
            '300' => array('three_hundred_maturity','three_hundred_interest','dps_info_id'),
            '400' => array('four_hundred_maturity','four_hundred_interest','dps_info_id'),
            '500' => array('five_hundred_maturity','five_hundred_interest','dps_info_id'),
            '1000' => array('one_thousand_maturity','one_thousand_interest','dps_info_id'),
            '1500' => array('one_thousand_five_hundred_maturity','one_thousand_five_hundred_interest','dps_info_id'),
            '2000' => array('two_thousand_maturity','two_thousand_interest','dps_info_id'),
            '2500' => array('two_thousand_five_hundred_maturity','two_thousand_five_hundred_interest','dps_info_id'),
            '3000' => array('three_thousand_maturity','three_thousand_interest','dps_info_id'),
            '3500' => array('three_thousand_five_hundred_maturity','three_thousand_five_hundred_interest','dps_info_id'),
            '4000' => array('four_thousand_maturity','four_thousand_interest','dps_info_id'),
            '4500' => array('four_thousand_five_hundred_maturity','four_thousand_five_hunderd_interest','dps_info_id'),
            '5000' => array('five_thousand_maturity','five_thousand_interest','dps_info_id'),
            '5500' => array('five_thousand_five_hundred_maturity','five_thousand_five_hundred_interest','dps_info_id'),
            '6000' => array('six_thousand_maturity','six_thousand_interest','dps_info_id'),
            '6500' => array('six_thousand_five_hundred_maturity','six_thousand_five_hundred_interest','dps_info_id'),
            '7000' => array('seven_thousand_maturity','seven_thousand_interest','dps_info_id'),
            '7500' => array('seven_thousand_five_hundred_maturity','seven_thousand_five_hundred_interest','dps_info_id'),
            '8000' => array('eight_thousand_maturity','eight_thousand_interest','dps_info_id'),
            '9000' => array('nine_thousand_maturity','nine_thousand_interest','dps_info_id'),
            '10000' => array('ten_thousand_maturity','ten_thousand_interest','dps_info_id'),
            '11000' => array('eleven_thousand_maturity','eleven_thousand_interest','dps_info_id'),
            '12000' => array('twelve_thousand_maturity','twelve_thousand_interest','dps_info_id'),
            '13000' => array('thirteen_thousadn_maturity','thirteen_thousand_interest','dps_info_id'),
            '14000' => array('fourteen_thousand_maturity','fourteen_thousand_interest','dps_info_id'),
            '15000' => array('fifteen_thousand_maturity','fifteen_thousand_interest','dps_info_id'),
            '16000' => array('sixteen_thousand_maturity','sixteen_thousand_interest','dps_info_id'),
            '17000' => array('seventeen_thousand_maturity','seventeen_thousand_interest','dps_info_id'),
            '18000' => array('eighteen_thousand_maturity','eighteen_thousand_interest','dps_info_id'),
            '19000' => array('nineteen_thousand_maturity','nineteen_thousand_interest','dps_info_id'),
            '20000' => array('twenty_thousand_maturity','twenty_thousand_interest','dps_info_id'),
            '21000' => array('twenty_one_thousand_maturity','twenty_one_thousand_interest','dps_info_id'),
            '22000' => array('twenty_two_thousand_maturity','twenty_two_thousand_interest','dps_info_id'),
            '23000' => array('twenty_three_thousand_maturity','twenty_three_thousand_interest','dps_info_id'),
            '24000' => array('twenty_four_thousand_maturity','twenty_four_thousand_interest','dps_info_id'),
            '25000' => array('twenty_five_thousand_maturity','twenty_five_thousand_interest','dps_info_id'),
            '26000' => array('twenty_six_thousand_maturity','twenty_six_thousand_interest','dps_info_id'),
            '27000' => array('twenty_seven_thousand_maturity','twenty_seven_thousand_interest','dps_info_id'),
            '28000' => array('twenty_eight_thousand_maturity','twenty_eight_thousand_interest','dps_info_id'),
            '29000' => array('twenty_nine_thousand_maturity','twenty_nine_thousand_interest','dps_info_id'),
            '30000' => array('thirty_thousand_maturity','thirty_thousand_interest','dps_info_id'),
            '50000' => array('fifty_thousand_maturity','fifty_thousand_interest','dps_info_id'),
            '100000' => array('one_lac_maturity','one_lac_interest','dps_info_id'),
        );

        $s = array();
        if (array_key_exists($deposited_amount, $array_map)) {
            $s =  $array_map[$deposited_amount];
        }
        if(count($s) > 0) {
            $res1 = $this->Front_end_select_model->select_dps_loan_info_id($s[0], $s[1], $s[2], $query);
            if(!is_object($res1)){
                $selected_row = 0;
            }else{
                $selected_row = $res1->num_rows();
            }

        }else{
            $selected_row = 0;
        }


//        $this->Common_model->table_name = 'dps_info';
//        $total_row = $this->Common_model->count_all();
        $query1 ='';
        $res2 = $this->Front_end_select_model->select_dps_loan_info_id($s[0], $s[1], $s[2], $query1);
        if(!is_object($res2)){
            $total_row = 0;
        }else{
            $total_row = $res2->num_rows();
        }


        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;


    }

    public function ajax_compare_dps_image(){
        $id = $this->input->post('dps_id');
        $result = $this->Front_end_select_model->select_dps_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-dps_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $this->session->unset_userdata('dps');
        $id1 = $this->input->post('dps_id1');
        $id2 = $this->input->post('dps_id2');
        //$dps_tenure = $this->input->post('dps_tenure');
        $deposit_amount = $this->input->post('deposit_amount');

        $newdata['dps'] = array(
            'first_dps_id'  => $id1,
            'second_dps_id'  => $id2,
            'deposit_amount' => $deposit_amount
        );
        $this->session->set_userdata($newdata['dps']);
        echo 'success';
    }

    public function ajax_dps_quick_link(){
        $dps_tenure = (!empty($this->input->post('dps_tenure'))) ? $this->input->post('dps_tenure') : '';
        $dps_i_am = (!empty($this->input->post('dps_i_am'))) ? $this->input->post('dps_i_am') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

        $array_items = array('dps_i_am', 'dps_i_am_label','dps_tenure','dps_tenure_label','dps_bank_ids');
        $this->session->unset_userdata($array_items);

        if( $dps_tenure != ''){
            $newdata['dps_tenure'] = $dps_tenure;
        }

        if( $dps_i_am != ''){
            $newdata['dps_i_am'] = $dps_i_am;
        }
        if($data == 'all'){
            $newdata['all']= '';
        }

        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_dps_caching(){
        $dps_i_am= $this->input->post('dps_i_am');
        $dps_i_am_label = $this->input->post('dps_i_am_label');
        $dps_tenure = $this->input->post('dps_tenure');
        $dps_tenure_label = $this->input->post('dps_tenure_label');
        $dps_bank_ids = $this->input->post('dps_bank_ids');

        $bank_id_array = array();
        if(!empty($dps_bank_ids)) {
            if(strstr($dps_bank_ids,',')) {
                $data8 = explode(',',$dps_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $dps_bank_ids;
            }
        }


        $array_items = array('dps_i_am', 'dps_i_am_label','dps_tenure','dps_tenure_label','dps_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'dps_i_am'  => $dps_i_am,
            'dps_i_am_label' => $dps_i_am_label,
            'dps_tenure' => $dps_tenure,
            'dps_tenure_label' => $dps_tenure_label,
            'dps_bank_ids' => $bank_id_array,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='dps'){
            $array_items = array('dps_i_am', 'dps_i_am_label','dps_tenure','dps_tenure_label','dps_bank_ids');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';
    }

    public function unset_dps_tenure_session(){
        $session = $this->input->post('dps_tenure');
        if($session){
            $this->session->unset_userdata('dps_tenure');
            $this->session->unset_userdata('dps_tenure_label');
            echo 'success';
        }
    }

    public function unset_dps_i_am_session(){
        $session = $this->input->post('dps_i_am');
        if($session){
            $this->session->unset_userdata('dps_i_am');
            $this->session->unset_userdata('dps_i_am_label');
            echo 'success';
        }

    }

    public function unset_dps_bank_id_session(){
        $id = $this->input->post('dps_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['bank_name'];
            $bank = array_values($_SESSION['dps_bank_ids']);

            if(($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['dps_bank_ids'][$key]);
            }
        }
        echo 'success';
    }


}