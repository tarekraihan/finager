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
            $this->form_validation->set_rules('txtFeesAndCharges', 'fees and charges', 'trim|required');
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
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');


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
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
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
                        redirect(base_url().'dps/add_info/success');
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

    public function deposit_list(){
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

            $this->form_validation->set_rules('txtDpsName', 'DPS Name', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');
            $this->form_validation->set_rules('txtAvailableBenefit', 'Available Benefit', 'trim|required');


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
                $data['title'] = "Finager - Add Info";
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
                    'available_benefit' => $this->input->post('txtAvailableBenefit'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_info';
                $this->Common_model->where = array('id' => $this->input->post('txtInfoId'));
                $res = $this->Common_model->update();
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
                        'fifty_thousand_maturity' => htmlentities($this->input->post('fifty_thousand_maturity')),
                        'fifty_thousand_interest' => ($this->input->post('fifty_thousand_maturity') != '') ? ($this->input->post('fifty_thousand_maturity') - ($this->input->post('fifty_thousand_interest') * $installment )) : '',
                        'one_lac_maturity' => htmlentities($this->input->post('one_lac_maturity')),
                        'one_lac_interest' =>($this->input->post('one_lac_maturity') != '') ? ($this->input->post('one_lac_maturity') - ($this->input->post('one_lac_interest') * $installment )) : '',
                        'created' => $date ,
                        'created_by'=>$this->session->userdata('admin_user_id')
                    );

                    $this->Common_model->table_name = 'dps_maturity_amount';
                    $this->Common_model->where = array('dps_info_id' => $this->input->post('txtInfoId'));
                    $result = $this->Common_model->update();
                    if ($result) {
                        redirect(base_url().'dps/edit_dps_info/success');
                    } else {
                        redirect(base_url().'dps/edit_dps_info/error');
                    }
                }else {
                    redirect(base_url().'dps/edit_dps_info/error');
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



}