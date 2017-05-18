<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Eduction Loan                     *
 * Script : back end  controller              *
 * Start Date : 30-08-2016                    *
 * Last Update : 18-04-2017                   *
 **********************************************/

class Education_Loan extends CI_Controller {

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



    public function loan_info(){// updated-18-04-2017-by-tarek
        if ($this->session->userdata('email_address')) {
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtLoanName', ' Loan Name ', 'trim|required');
            $this->form_validation->set_rules('txtExpensesConsidered[]', ' Expenses Considered', 'trim|required');
            $this->form_validation->set_rules('txtLoanPurpose[]', 'Loan Purpose ', 'trim|required');
            $this->form_validation->set_rules('txtGracePeriod', 'Grace Period ', 'trim|required');
            $this->form_validation->set_rules('txtMinEducationLoanTenure', 'Min Education Loan Tenure ', 'trim|required');
            $this->form_validation->set_rules('txtMaxEducationLoanTenure', 'Max Education Loan Tenure ', 'trim|required');
            $this->form_validation->set_rules('txtMinimumLoanAmount', ' Minimum Loan Amount', 'trim|required|numeric');
            $this->form_validation->set_rules('txtMaximumLonAmount', 'Maximum Lon Amount', 'trim|required|numeric');
            $this->form_validation->set_rules('txtDownPayment', 'Down Payment ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Loan Short Description ', 'trim|required');
            $this->form_validation->set_rules('txtLoanAgainstFDR', 'Loan Against FDR ', 'trim|required');
            $this->form_validation->set_rules('txtProcessingFee', 'Processing Fee ', 'trim|required');
            $this->form_validation->set_rules('txtEarlySettlementFee', 'Early Settlement Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPartialPaymentFee', 'Partial Payment Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPenaltyCharge', 'Penalty Charge ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtFeature', 'Feature ', 'trim|required');
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
                    'feature' => $this->input->post('txtFeature'),
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

                if($result){
                    $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Save !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'education_loan/loan_list/');
                }else{
                    $data['error_message'] = '<div id="message" class=" text-center alert alert-danger">Problem to Save !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'education_loan/loan_list/');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function loan_list(){// updated-18-04-2017-by-tarek
        $data['title'] = "Loan Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/education/loan_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_loan_info(){// updated-18-04-2017-by-tarek
        if ($this->session->userdata('email_address')) {
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
            $this->form_validation->set_rules('txtDownPayment', 'Down Payment ', 'trim|required');
            $this->form_validation->set_rules('txtLoanShortDescription', 'Loan Short Description ', 'trim|required');
            $this->form_validation->set_rules('txtLoanAgainstFDR', 'Loan Against FDR ', 'trim|required');
            $this->form_validation->set_rules('txtProcessingFee', 'Processing Fee ', 'trim|required');
            $this->form_validation->set_rules('txtEarlySettlementFee', 'Early Settlement Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPartialPaymentFee', 'Partial Payment Fee ', 'trim|required');
            $this->form_validation->set_rules('txtPenaltyCharge', 'Penalty Charge ', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility ', 'trim|required');
            $this->form_validation->set_rules('txtFeature', 'Feature ', 'trim|required');
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
                    'feature' => $this->input->post('txtFeature'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                print_r($this->Common_model->data);
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
                    }else{
                        $result = false;
                    }
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
                    }else{
                        $result = false;
                    }
                }

                if($result){
                    $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Updated !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'education_loan/loan_list/');
                }else{
                    $data['error_message'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'education_loan/loan_list/');
                }

            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_education_loan(){

        $principal_amount = floatval ( ($this->input->post('principal_amount')) ? $this->input->post('principal_amount') : '50000' );

        if($principal_amount > 40000000 || $principal_amount < 50000){
            $principal_amount = 50000;
        }

        $year_limit = floatval ( ( $this->input->post('year_limit') > 1 ) ?  $this->input->post('year_limit') : 1 );

        if($year_limit > 5 || $year_limit < 1){
            $year_limit = 1;
        }
        $WHERE = array(); $query = '';
        if(!empty($principal_amount)) {
            $WHERE[] = 'CAST( education_loan_info.min_loan_amount as SIGNED INTEGER ) <= '.$principal_amount;
        }

        if(!empty($principal_amount)) {
            $WHERE[] = 'CAST( education_loan_info.max_loan_amount as SIGNED INTEGER ) >= '.$principal_amount;
        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_education_loan_info( $query );

        //-----------Pagination start-----------------

        $config['base_url'] = base_url() . "en/all_education_loan/";
        $config['total_rows'] = $res->num_rows();
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

        $education_loan =  $this->Front_end_select_model->select_education_loan_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();
        //        print_r($result->result()); die;
        //-------------Pagination End-------------------
        $education = '';
        foreach($education_loan->result() as $row){


            $bank = "";
            if($row->is_non_bank == 1){
                $bank = $row->non_bank_name;
            }else{
                $bank = $row->bank_name;
            }
            $bank_logo = "";
            if($row->is_non_bank == 1){
                $bank_logo = $row->non_bank_logo;
            }else{
                $bank_logo = $row->bank_logo;
            }



            $is_fixed =$row->is_fixed;
            $show_interest ='';
            if($is_fixed == 1){
                $show_interest .='<p>Fixed '.$row->fixed_interest.'%</p>';
            }else{
                $show_interest .='<p>Avg '.$row->avg_interest.'% <br/>min '.$row->min_interest.'%,<br> max '.$row->max_interest.'%</p>';
            }

            $yearly_interest = floatval( ($row->is_fixed =='0')? $row->avg_interest : $row->fixed_interest ) ;
            if($yearly_interest =='' || $yearly_interest < 1){
                $yearly_interest = floatval( '12');
            }
            $monthly_interest = ($yearly_interest / 12 /100);

            $emi = round($principal_amount * $monthly_interest * ((pow( ( 1 + $monthly_interest ) , ($year_limit * 12) )) / (pow( ( 1 + $monthly_interest ) , ($year_limit *12) ) -1 )));

            $total_payable = round( $emi * $year_limit *12 );

            $result1 = $this->Front_end_select_model->select_education_loan_expenses_considered($row->id);
            $expense_consider ='';
            foreach($result1->result() as $row1){
                $expense_consider .= "<li>".$row1->expenses_considered."</li>";
            }

            $education .= '<div class="full-card">
						<div class="row home_loan_right_bar no-margin-lr2">
							<div class="col-sm-3 col-xs-3">
								<a href="'.base_url().'en/education_loan_details/'.$row->id.'"><img title="click here to details" class="img-responsive" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
							</div>
							<div class="col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-sm-2 col-xs-2 no-padding w20">
										<div class="card_text2">
											<h5>Selected Amount </h5>
											<p> Tk. '.number_format($principal_amount).'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 no-padding w20">
										<div class="card_text2">
											<h5>Interest Rate</h5>
											<p>'.$show_interest.'</p>
										</div>
									</div>
									<div class="col-sm-1 col-xs-1 no-padding w20">
										<div class="card_text2">
											<h5>EMI</h5>
											<p>Tk. '.number_format( $emi ).'</p>
										</div>
									</div>
									<div class="col-sm-5 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Total Payable Amount</h5>
											<p>Tk.'.number_format($total_payable).'<br/><span class="tPaybleAmount">based on Tk. '.number_format($principal_amount).'</span></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 home_loan_button">
								<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><img class="btnCardApply img-responsive" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" /></a>
								<span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" id="more_info'.$row->id.'" href="javascript:void(0)" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
                                <span class="more_info_icon Hloan_more_icon"><a id="" href="javascript:void(0)" class="add-to-compare" data-loan_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
                                <span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>

							</div>
							<div class="collapse" id="moreInfo'.$row->id.'">
								<div class="col-md-12">
									<section id="tab">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
											<li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
											<li role="presentation"><a href="#ExpensesConsidered'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Expenses Considered</a></li>
											<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Eligibility</a></li>
											<li role="presentation"><a href="#Requirement'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Requirement</a></li>
											<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
											<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
											<li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User reviews</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											 <div role="tabpanel" class="tab-pane  active" id="Features'.$row->id.'">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Features</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															'.$row->feature.'
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Fees & Charges</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															<table class="table table-striped table-bordered">
																<tbody>
																  <tr>
																	<td>Processing Fee</td>
																	<td>'.$row->processing_fee.'</td>
																  </tr>
																  <tr>
																	<td>Early Settlement Fee</td>
																	<td>'.$row->early_settlement_fee.'</td>
																  </tr>
																  <tr>
																	<td>Partial Payment Fee</td>
																	<td>'.$row->partial_payment_fee.'</td>
																  </tr>
																  <tr>
																	<td>Penalty Charge</td>
																	<td>'.$row->penalty_charge.'</td>
																  </tr>

																</tbody>
															</table>
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="ExpensesConsidered'.$row->id.'">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Expenses Considered</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
                                                            '.$expense_consider.'
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
												<div class="card_details_pronsCons">
													<h4>Eligibility for Applying</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														'.$row->eligibility.'
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="Requirement'.$row->id.'">
												<div class="col-sm-12">
													<div class="tab_body">
														<h4>Requirement</h4>
														<hr/>
														'.$row->requirement.'
													</div>
												</div>

											</div>
											<div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
											    <div class="col-sm-12">
													<div class="tab_body">
														<h4>Terms and Conditions</h4>
														<hr/>
														'.$row->terms_and_conditions.'
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											    <div class="col-sm-12">
													<div class="tab_body">
														<h4>Review</h4>
														<hr/>
														'.$row->review.'
													</div>
												</div>

											</div>
											<div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">
											    <div class="col-sm-12">
													<div class="tab_body">
														<h4>User Review</h4>
														<hr/>
                                                        <p>Coming Soon</p>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>

							<div class="collapse" id="rePaymentSchedule'.$row->id.'">
							</div>
						</div>
					</div>';
        }

        $education .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        echo $education;
    }


    public function ajax_compare_education_loan_image(){
        $id = $this->input->post('loan_id');
        $result = $this->Front_end_select_model->select_education_loan_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-loan_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('loan_id1');
        $id2 = $this->input->post('loan_id2');
        $principal_amount = $this->input->post('principal_amount');
        $year_limit = $this->input->post('year_limit');

        $newdata = array(
            'first_education_loan'  => $id1,
            'second_education_loan'  => $id2,
            'principal_amount' => $principal_amount,
            'year_limit' => $year_limit
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }


}