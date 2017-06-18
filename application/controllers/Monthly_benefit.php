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

class Monthly_benefit extends CI_Controller {

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
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[monthly_benefit_tenure.no_of_month]|numeric');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/tenure');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $year = ( ($this->input->post('txtTenure') / 12));
                $this->Common_model->data = array(
                    'no_of_month' => $this->input->post('txtTenure'),
                    'tenure' => $year,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_tenure';
                $result = $this->Common_model->insert();


                if ($result) {
                    redirect(base_url().'monthly_benefit/tenure/success');
                } else {
                    redirect(base_url().'monthly_benefit/tenure/error');
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
                $this->load->view('admin/monthly_benefit/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $year = ( ($this->input->post('txtTenure') / 12));
                $this->Common_model->data = array(
                    'no_of_month' => $this->input->post('txtTenure'),
                    'tenure' => $year,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'monthly_benefit/edit_tenure/success');
                } else {
                    redirect(base_url().'monthly_benefit/edit_tenure/error');
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

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount ', 'trim|required');
            $this->form_validation->set_rules('txtBenefitAmount', 'Benefit Amount', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $benefit_rate = ($this->input->post('txtBenefitAmount') / $this->input->post('txtDepositAmount') );

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'deposit_amount' => htmlentities($this->input->post('txtDepositAmount')),
                    'benefit_amount' => htmlentities($this->input->post('txtBenefitAmount')),
                    'benefit_rate' => $benefit_rate,
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'min_amount' => htmlentities($this->input->post('txtMinimumAmount')),
                    'max_amount' => htmlentities($this->input->post('txtMaximumAmount')),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_info';
                $result= $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'monthly_benefit/add_deposit_info/success');
                } else {
                    redirect(base_url().'monthly_benefit/add_deposit_info/error');
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
        $this->load->view('admin/monthly_benefit/deposit_list');
        $this->load->view('admin/block/footer');
    }



    public function edit_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount ', 'trim|required');
            $this->form_validation->set_rules('txtBenefitAmount', 'Benefit Amount', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/edit_deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                 $date = date('Y-m-d h:i:s');
                $benefit_rate = ($this->input->post('txtBenefitAmount') / $this->input->post('txtDepositAmount') );

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'deposit_amount' => htmlentities($this->input->post('txtDepositAmount')),
                    'benefit_amount' => htmlentities($this->input->post('txtBenefitAmount')),
                    'benefit_rate' => $benefit_rate,
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'min_amount' => htmlentities($this->input->post('txtMinimumAmount')),
                    'max_amount' => htmlentities($this->input->post('txtMaximumAmount')),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'monthly_benefit_info';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositId'));
                $result = $this->Common_model->update();


                if ($result) {
                    redirect(base_url().'monthly_benefit/edit_deposit_info/success');
                } else {
                    redirect(base_url().'monthly_benefit/edit_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function ajax_get_monthly_benefit(){

        $maximizer_tenure = $this->input->post('monthly_tenure');
        $maximizer_amount = (floatval($this->input->post('deposit_amount') > 50000 ) ? $this->input->post('deposit_amount') : 50000 );
        $WHERE = array(); $query = '';
        if(!empty($maximizer_tenure)) {
            $WHERE[] = '( monthly_benefit_info.tenure_id = '.$maximizer_tenure.')';
        }

        if(!empty($maximizer_amount)) {
            $WHERE[] = '( monthly_benefit_info.deposit_amount >= '.$maximizer_amount.')';
        }
        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }
        //print_r($query);die;

        $res = $this->Front_end_select_model->select_money_benefit($query);
//-----------Pagination start-----------------
        $config['base_url'] = base_url() . "en/all_monthly_benefit/";
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

        $money_maximizer =  $this->Front_end_select_model->select_money_benefit_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $monthly_benefit = '';

        //pr($money_maximizer->result());die;
        if($money_maximizer->num_rows() > 0){
            foreach($money_maximizer->result() as $row){
                //print_r($row);die;
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }


                //$credit_facility = ($row->credit_facility != 'N/A') ? $row->credit_facility.' %' :'N/A';
                //$benefit_amount  = $maximizer_amount * $row->your_benefit;

                $monthly_benefit .= '
					 <div class="full-card">
                    <div class="row fdr_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href=""><img title="Free Web tutorials" class="img-responsive fdr_bank_logo" src="'.base_url().'resource/front_end/images/brac-bank-logo.png" /></a>
                            <p class="text-center">Brac Bank</p>
                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                        </div>

                        <div class="col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text3">
                                        <h5>Deposited Amount</h5>
                                        <p>&#2547; 100000</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Tenure</h5>
                                        <p>1 Year</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text3">
                                        <h5>Benefit Amount</h5>
                                        <p>&#2547; 650</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Preiod</h5>
                                        <p>Monthly</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Loan Facility</h5>
                                        <p>80%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row more_availabe">
                                <div class="col-md-2"><a id="hideDetailsButton" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
                                <div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="'. base_url().'resource/front_end/images/application.png" alt="FDR Application" /></a></div>
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
                                            <li>The facility shall be made available for the customer from the date of Bank\'s approval of this application until such time is stipulated in any letter and this facility shall be continuing on until the adjustment of the dues of the Bank with interest and other charges.</li>
                                            <li>The Bank reserves the right to withdraw the credit facility and demand repayment if there has been any default in repayment of the loan.</li>
                                            <li>The Bank shall not be obliged to make the credit facility available until it has received formal written acknowledgement from you accepting the credit facility on the basis of outline and subject to the terms and conditions specified in the banking arrangement letter.</li>
                                            <li>The acceptance of the terms and conditions of the banking arrangement letter by the customer constitutes a legal and binding obligation and is enforceable in accordance with the terms of the Banking arrangement letter.</li>
                                            <li>By use of the credit facility provided by the bank, the customer accepts the conditions enumerated in the banking arrangement letter and authorizes the bank to appoint agents to collect funds payable to the bank, as the Bank may consider necessary. In the due discharge of their duty, information regarding borrower\'s credit facility will be supplied to the agent. All charges payable to such agents, to collect amounts owed to the bank, are liable to be at borrower\'s cost and risk, in addition to all other costs, charges and expenses incurred by the bank to recover outstanding dues/money.</li>
                                            <li>The bank is authorized to open and maintain account(s) for the purpose of administering and recording payments by the customer in respect of the facility.</li>
                                            <li>The loan shall be utilized for the specified purpose for which it has been sanctioned. Payment shall be made directly by the bank to the vendor or to the customer, as determined by the Bank, depending upon the purpose of the loan.</li>
                                            <li>All payments in respect of the facility shall be made by the customer on or before the due dates and the customer hereby irrevocably authorizes the Bank to debit any of the customer\'s account(s) with the Bank with all amounts. Owing in respect of the facility including interest and charges and expenses (together the indebtedness) at such time as the same shall become or be due and, payable and transfer such sum to the loan account for adjustment but in any case, the customer shall always remain liable and agree(s) to make payment in full of all such sums to the Bank.</li>
                                            <li>The customer unconditionally undertakes to repay the loan as per terms and conditions of the Banking Arrangement Letter.</li>
                                            <li>The customer undertakes to deposit his/her salary/wages/honorarium payable by his/her employer to the designated account maintained with the Bank.</li>
                                            <li>The Bank is authorized to enforce all or any of the securities executed as well as kept by the customer in favor of the Bank and recover the loan amount with interest and other charges accrued in the loan account.</li>
                                            <li>The customer irrevocably authorizes the Bank to enforce the securities art\'s absolute discretion in the event the loan account becomes irregular and shall apply any proceeds recovered towards adjustment of outstanding loan liabilities along with all legal fees.</li>
                                            <li>Where the facility is made available for purchase of consumer item(s) including Home loan customer unconditionally and irrevocably undertakes to deliver possession of the consumer items including the Home loan purchased b1 the loan amount without any question whatever to the bank as and when demanded by the bank. The customer further authorizes the bank irrevocably, to sell the mortgage items and apply the proceeds towards adjustment of the dues. For any unadjusted sum, the customer undertakes to repay the same with interest and other charges.</li>
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
                </div>';
            }
            $monthly_benefit .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
            $monthly_benefit .= '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }



        echo $monthly_benefit;
    }



}