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



//    Front End query--------------------------------

    public function ajax_get_dps(){

        $dps_user = $this->input->post('dps_user');
        $dps_tenure = $this->input->post('dps_tenure');

        $WHERE = array(); $query = '';
        if(!empty($dps_user)) {
            $WHERE[] = 'dps_info.i_am_id = '.dps_user;
        }
/*
        if(!empty(dps_tenure)) {
            $WHERE[] = 'fdr_info.tenure_id = '.$fdr_tenure;
        }*/

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $dps_deposit = $this->Front_end_select_model->select_dps_loan_info($query);

//                        print_r($dps_deposit->result()); die;

        $dps = '';
        foreach($dps_deposit->result() as $row) {

            $bank = "";
            if ($row->is_non_bank == 1) {
                $bank = $row->non_bank_name;
            } else {
                $bank = $row->bank_name;
            }
            $bank_logo = "";
            if ($row->is_non_bank == 1) {
                $bank_logo = $row->non_bank_logo;
            } else {
                $bank_logo = $row->bank_logo;
            }

            $query_amount = 1000;
            $tenure = 3 * 12;

            $interest_rate = $row->interest_rate;

            $cal_interest = round(($interest_rate / 100) / $tenure, 4);

            $emi = $query_amount * $cal_interest * pow((1 + $cal_interest), $tenure) / pow((1 + $cal_interest), ($tenure - 1));
            $total_payable = $emi * $tenure;

            $dps .= '<div class="row fdr_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'. base_url().'en/dps_details/'.$row->id.'"><img title="Free Web tutorials" class="img-responsive fdr_bank_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
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
                                        <p>&#2547; '.$query_amount.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Number of Installment</h5>
                                        <p> '.$tenure.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Maturity Amount</h5>
                                        <p>&#2547; '.$total_payable.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text3">
                                        <h5>Accrued Interest</h5>
                                        <p>&#2547; 5799</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Loan Facility</h5>
                                        <p>'.$row->loan_facility.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row more_availabe">
                                <div class="col-md-2"><a role="button"  class="more_info" href="javascript:void(0)" data-toggle="collapse" data-dps_id="'.$row->id.'"></i> More Info</a></div>
                                <div class="col-md-4"><a class="availableOffer"  href="javascript:void(0)"  data-available_offer="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true" ></i> Available Offer</a></div>
                                <div class="col-md-4"><a id="hideDetailsButton2"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/btnDpsApply.png" alt="DPS Application" /></a></div>
                                <div class="col-md-2"><a id="hideDetailsButton2" href="javascript:void(0)"><img class="pull-right" src="'.base_url().'resource/front_end/images/btnDpsCom.png" alt="DPS Application" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- More Info Tab content start -->
                     <div class="collapse" id="moreInfo'.$row->id.'">
                         <div class="col-md-12">
                               <section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="#Features'.$row->id.'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="FeesCharges" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
                                    <li role="presentation"><a href="#RequiredDoc'.$row->id.'" aria-controls="RequiredDoc" role="tab" data-toggle="tab">Required Doc</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="UserReview" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
                                        <h4>Features:</h4>
                                        '.$row->available_feature.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                                        <h4>Fees & Charges:</h4>
                                        '.$row->fees_and_charges.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <h4>Terms & Conditions:</h4>
                                        '.$row->terms_and_conditions.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane fdr_terms" id="Eligibility'.$row->id.'">
                                        <h4>Eligibility:</h4>
                                        '.$row->eligibility.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="RequiredDoc'.$row->id.'">
                                        <h4>Required Documents</h4>
                                        '.$row->required_document.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <h4>Review</h4>
                                        '.$row->review.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
                                        <h4>User Review</h4>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- More Info Tab content end -->
                    <div class="collapse" id="availableOffer'.$row->id.'">
                        <div class="col-md-12">
                            <p><b>Available Deposits (BDT):</b> 500, 1000, 1500, 2000, 2500, 3000, 4000, 5000, 8000, 10000.</p>
                            <p><b>Available Terms:</b> 2, 3, 4, 5, 6, 7, 8, 10.</p>
                            <p><b>Interest Rate:8%</b></p>
                        </div>
                        '.$row->available_benefit.'
                    </div>';
            }
            echo $dps;
        }




}