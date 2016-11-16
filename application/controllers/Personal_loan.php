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

class Personal_Loan extends CI_Controller {

    public function i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'i am ', 'trim|required|is_unique[home_loan_applicant_type.home_loan_applicant_type]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/personal_loan/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'personal_loan_i_am';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'personal_loan/i_am/success');
                } else {
                    redirect(base_url().'personal_loan/i_am/error');
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
                $this->load->view('admin/personal_loan/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'personal_loan_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'personal_loan/edit_i_am/success');
                } else {
                    redirect(base_url().'personal_loan/edit_i_am/error');
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
            $this->form_validation->set_rules('txtLookingFor', ' Looking For', 'trim|required|is_unique[personal_loan_looking_for.personal_loan_looking_for]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/personal_loan/looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'personal_loan_looking_for' => $this->input->post('txtLookingFor'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'personal_loan_looking_for';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'personal_loan/looking_for/success');
                } else {
                    redirect(base_url().'personal_loan/looking_for/error');
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
                $this->load->view('admin/personal_loan/edit_looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'personal_loan_looking_for' => htmlentities($this->input->post('txtLookingFor')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'personal_loan_looking_for';
                $this->Common_model->where = array('id' => $this->input->post('txtLookingForId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'personal_loan/edit_looking_for/success');
                } else {
                    redirect(base_url().'personal_loan/edit_looking_for/error');
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
                $this->load->view('admin/personal_loan/loan_information');
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
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'personal_loan_info';
                $last_insert_id = $this->Common_model->insert();

                $result='';
                foreach($this->input->post('txtPersonalLoanUser[]') as $user){
                    $this->Common_model->data = array(
                        'personal_loan_info_id'=>$last_insert_id,
                        'personal_loan_i_am_id'=> $user
                    );
                    $this->Common_model->table_name = 'personal_loan_info_vs_i_am';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'personal_loan/loan_info/success');
                } else {
                    redirect(base_url().'personal_loan/loan_info/error');
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
        $this->load->view('admin/personal_loan/loan_list');
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


    public function ajax_get_personal_loan(){

        $personal_i_want = $this->input->post('personal_i_want');
        $personal_user = $this->input->post('personal_user');

        $WHERE = array(); $query = '';
        if(!empty($personal_user)) {
            $WHERE[] = 'personal_loan_info_vs_i_am.personal_loan_i_am_id = '.$personal_user;
        }

        if(!empty($personal_i_want)) {

            $WHERE[] = 'personal_loan_info.personal_loan_looking_for_id = '.$personal_i_want;

        }

        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

                $personal_loan = $this->Front_end_select_model->select_personal_loan_info($query);

//						print_r($personal_loan->result());die;
                $personal = '';
                foreach($personal_loan->result() as $row){

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
                        $show_interest .='<h5>Interest (Fixed Rate)</h5>
                                    <p>Fixed '.$row->interest_rate_fixed.'%</p>';
                    }else{
                        $show_interest .='<h5>Interest (Avg Rate)</h5>
                                        <p>Avg '.$row->interest_rate_average.'% <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>';
                    }

                    $query_amount = 1000000;


                    $tenure = 3 * 12;

                    $interest_rate = 0;
                    if($is_fixed == 1){
                        $interest_rate = $row->interest_rate_fixed;
                    }else{
                        $interest_rate = $row->interest_rate_average;
                    }
                    $cal_interest = round(($interest_rate / 100) / $tenure,4);

                    $emi = $query_amount * $cal_interest * pow(( 1+ $cal_interest),$tenure) /pow((1 + $cal_interest),($tenure-1));
                    $total_payable = $emi * $tenure;


                    $personal .='<div class="row home_loan_right_bar no-margin-lr2">
                    <div class="col-sm-3 col-xs-3">
                        <a href="'.base_url().'en/personal_loan_details"><img title="click here to details" class="img-responsive home_loan_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
                        <small class="home_loan_bank_name"><a  href="">'.$bank.'</a></small>
                    </div>
                    <div class="col-sm-9 col-xs-9">
                        <div class="row">
                            <div class="col-sm-2 col-xs-2 w20">
                                <div class="card_text2">
                                    <h5>Amount </h5>
                                    <p>Tk.'.$query_amount.'.00</p>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-2 w20">
                                <div class="card_text2">
                                    '.$show_interest.'
                                </div>
                            </div>
                            <div class="col-sm-1 col-xs-1 w20">
                                <div class="card_text2">
                                    <h5>EMI</h5>
                                    <p>'.$emi.'</p>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-2 w20">
                                <div class="card_text2">
                                    <h5>Total Payable Amount</h5>
                                    <p>'.$total_payable.'<br/><span class="tPaybleAmount">based on '.$query_amount.'</span></p>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-1 w20">
                                <div class="card_text2">
                                    <h5>Down Payment (Min)</h5>
                                    <p>BDT 1300 + VAT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 home_loan_button">
                        <img class="btnCardApply img-responsive button pull-right" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />
                        <span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
                        <span class="more_info_icon Hloan_more_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
                        <span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
                    </div>
                    <div class="collapse" id="moreInfo'.$row->id.'">
                        <div class="col-md-12">
                            <section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="FeesCharges" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
                                    <li role="presentation"><a href="#Requirement'.$row->id.'" aria-controls="Requirement" role="tab" data-toggle="tab">Requirement</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="UserReviews" role="tab" data-toggle="tab">User reviews</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
                                        <section id="card_details_FeesCharges">
                                            <div class="card_details_pronsCons">
                                                <h4>Fees & Charges</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->fees_and_charges.'
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                                        <section id="card_details_FeesCharges">
                                            <div class="card_details_pronsCons">
                                                <h4>Features</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->features.'
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
                                        <div class="card_details_pronsCons">
                                            <h4>Eligibility for Applying</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <div class="prosCons_body2">
                                                '.$row->eligibility_for_applying.'
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Requirement'.$row->id.'">

                                        <div class="card_details_pronsCons">
                                            <h4>Security Required</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <div class="prosCons_body2">
                                                '.$row->security_required.'
                                            </div>
                                        </div>
                                        <div class="card_details_pronsCons">
                                            <h4>Required Documents</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <div class="prosCons_body2">
                                                '.$row->required_document.'
                                            </div>
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                    <div class="card_details_pronsCons">
                                            <h4>Terms and Condition</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <div class="prosCons_body2">
                                                '.$row->terms_and_conditions.'
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">...</div>
                                    <div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">...</div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="collapse" id="rePaymentSchedule'.$row->id.'">

                    </div>
                </div>';

                }
           echo $personal;

    }

}