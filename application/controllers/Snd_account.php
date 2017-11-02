<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Auto Loan                         *
 * Script : front end  controller             *
 * Start Date : 23-07-2016                    *
 * Last Update : 23-07-2016                   *
 **********************************************/

class Snd_account extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }

    public function i_am($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIAm', 'I am', 'trim|required|is_unique[snd_account_i_am.i_am]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_account_i_am';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'snd_account/i_am/success');
                } else {
                    redirect(base_url().'snd_account/i_am/error');
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
                $this->load->view('admin/snd/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_account_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_i_am/success');
                } else {
                    redirect(base_url().'snd_account/edit_i_am/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required|is_unique[snd_deposit_amount_range.deposit_amount_range]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Amount";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/deposit_amount_range');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'deposit_amount_range' => $this->input->post('txtDepositAmount'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_deposit_amount_range';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'snd_account/deposit_amount/success');
                } else {
                    redirect(base_url().'snd_account/deposit_amount/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_deposit_amount($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/edit_deposit_amount');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'deposit_amount_range' => htmlentities($this->input->post('txtDepositAmount')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_deposit_amount_range';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositAmountId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_deposit_amount/success');
                } else {
                    redirect(base_url().'snd_account/edit_deposit_amount/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtSndAccountName', 'SND Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtNoticeDay', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/snd_info');
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
                    'snd_name' => $this->input->post('txtSndAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'notice_day' => $this->input->post('txtNoticeDay'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'deposit_amount_id' => $this->input->post('txtDepositAmount'),
                    'available_offer' => $this->input->post('txtAvailableOffer'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'snd_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'snd_account/account_info/success');
                } else {
                    redirect(base_url().'snd_account/account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function account_list(){
        $data['title'] = "Account Information list";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/snd/snd_account_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }


            $this->form_validation->set_rules('txtSndAccountName', 'SND Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtNoticeDay', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/snd/edit_snd_info');
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
                    'snd_name' => $this->input->post('txtSndAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'notice_day' => $this->input->post('txtNoticeDay'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'deposit_amount_id' => $this->input->post('txtDepositAmount'),
                    'available_offer' => $this->input->post('txtAvailableOffer'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'snd_info';
                $this->Common_model->where = array('id' => $this->input->post('txtSNDAccountId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'snd_account/edit_account_info/success');
                } else {
                    redirect(base_url().'snd_account/edit_account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_snd_account(){
        $snd_bank_ids = (!empty( $this->input->post('snd_bank_ids'))) ? $this->input->post('snd_bank_ids') : '';
        $snd_i_want_interest = (!empty($this->input->post('snd_i_want_interest'))) ? $this->input->post('snd_i_want_interest') : '';
        $snd_amount = (!empty($this->input->post('snd_amount'))) ? (float)$this->input->post('snd_amount') : 100000;
        $snd_i_am = (!empty($this->input->post('snd_i_am'))) ? (float)$this->input->post('snd_i_am') :'';
        $snd_tenure = 0;
        if($snd_i_want_interest == 'Monthly'){
            $snd_tenure = 1;
        }else if($snd_i_want_interest == 'Quarterly'){
            $snd_tenure = 3;
        }else if($snd_i_want_interest == 'Half Yearly'){
            $snd_tenure = 6;
        }else{
            $snd_tenure = 12;
        }

        $WHERE = array(); $query = '';

        if(!empty($snd_bank_ids)) {
            if(strstr($snd_bank_ids,',')) {
                $data1 = explode(',',$snd_bank_ids);
                $bank_id_array = array();
                foreach( $data1 as $bank_id ) {
                    $bank_id_array[] = "snd_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(snd_info.bank_id = '.$snd_bank_ids.')';
            }
        }


        if(!empty($snd_i_want_interest)) {
            $WHERE[] = '(snd_info.interest_paid LIKE "'.$snd_i_want_interest.'")';
        }
        if(!empty($snd_i_am)) {
            $WHERE[] = '(snd_info.i_am_id = '.$snd_i_am.')';
        }

        if(!empty($snd_amount)) {
            if($snd_amount > 100000 && $snd_amount < 10000000){
                $WHERE[] = ' snd_info.deposit_amount_id = 2 ';
            }else if($snd_amount >= 10000000 && $snd_amount < 250000000 ){
                $WHERE[] = ' snd_info.deposit_amount_id = 3 ';
            }else if($snd_amount >= 250000000 && $snd_amount < 500000000 ){
                $WHERE[] = ' snd_info.deposit_amount_id = 4 ';
            }else if($snd_amount >= 500000000 && $snd_amount < 1000000000 ){
                $WHERE[] = ' snd_info.deposit_amount_id = 5 ';
            }else if( $snd_amount >= 1000000000 ){
                $WHERE[] = ' snd_info.deposit_amount_id = 6 ';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }
        $res = $this->Front_end_select_model->select_snd_info($query);

//-----------Pagination start-----------------
        $config['base_url'] = base_url() . "en/snd/";
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

        $snd =  $this->Front_end_select_model->select_snd_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $account = '';

        if($snd->num_rows() > 0){
            foreach($snd->result() as $row){
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
                $interest_amount = 0;
                $interest = '';
                if(is_numeric($row->interest_rate)){
                    $interest_amount = ((float)$snd_amount * (float)$row->interest_rate * (float)$snd_tenure ) / (12 * 100);
                    $interest = $row->interest_rate.' %';
                }else{
                    $interest = $row->interest_rate;
                }

                $maturity_amount = (float)$snd_amount + (float) $interest_amount;

                $account .= '
					<div class="full-card">
                    <div class="row card_right_bar">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'.base_url().'en/snd_details/'.$row->id.'"><img title="Click Here for Details" class="img-responsive" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
                            <img class="btnCardApply img-responsive" src="'.base_url().'resource/front_end/images/BtnCard_apply.png" />
                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                        </div>
                        <div class="col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="caccount_text">
                                        <h5>Deposited Amount</h5>
                                        <p>BDT '.number_format($snd_amount).'</p>

                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="caccount_text text-center">
                                        <h5>Interest Rate</h5>
                                        <p>'.$interest.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="caccount_text">
                                        <h5>Maturity Amount</h5>
                                        <p>BDT '.number_format($maturity_amount).'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="caccount_text">
                                        <h5>Notice Day</h5>
                                        <p>'.$row->notice_day.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row saving-account">
                                <div class="col-sm-4 col-xs-4">
                                    <span class="more_info_icon"><a href="javascript:void(0)" class="add-to-compare"  data-snd_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <span class="more_info_icon"><a href="javascript:void(0)" id="more_info'.$row->id.'" class="more_info" data-snd_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text1">
                                        <img class="img-responsive" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- More Info Tab content start -->
                    <div class="more_info_tab collapse" id="moreInfo'.$row->id.'">
                         <div class="col-md-12">
								<section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="#AvailableOffer'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Available Offer</a></li>
                                    <li role="presentation"><a href="#Features'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesAndCharges'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Fees and Charges</a></li>
                                    <li role="presentation"><a href="#Requirements'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Requirements</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="AvailableOffer'.$row->id.'">
                                        <div class="col-sm-12">
                                            <div class="debit_card_tab">
                                                <h4>Available Offer</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->available_offer.'
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Features'.$row->id.'">
                                        <div class="col-sm-12">
                                            <div class="debit_card_tab">
                                                <h4>Features</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->features.'
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="FeesAndCharges'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Fees and Charges</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>'.$row->fees_and_charges.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Requirements'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Requirements</h4>
                                            <div class="prosConsHr"></div><br/>
                                           <p>'.$row->requirements.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Terms & Conditions</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>'.$row->terms_and_conditions.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Review</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>'.$row->review.'</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- More Info Tab content end -->
                </div>';
            }
            $account .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
            $account .= '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }
        echo $account;
    }

    public function ajax_compare_snd_image(){
        $id = $this->input->post('snd_id');
        $result = $this->Front_end_select_model->select_snd_image($id);
        $row= $result->row();
        $bank_logo ='';
        if($row->is_non_bank == 1){
            $bank_logo = $row->non_bank_logo;
        }else{
            $bank_logo = $row->bank_logo;
        }
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" data-snd_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;
    }

    public function ajax_snd_caching(){

        $snd_amount = $this->input->post('snd_amount');
        $snd_i_am = $this->input->post('snd_i_am');
        $snd_i_want_interest = $this->input->post('snd_i_want_interest');

        $snd_i_am_label = $this->input->post('snd_i_am_label');
        $snd_i_want_interest_label = $this->input->post('snd_i_want_interest_label');

        $snd_bank_ids = $this->input->post('snd_bank_ids');

        $bank_id_array = array();
        if(!empty($snd_bank_ids)) {
            if(strstr($snd_bank_ids,',')) {
                $data1 = explode(',',$snd_bank_ids);

                foreach( $data1 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $snd_bank_ids;
            }
        }


        $array_items = array('snd_amount', 'snd_i_am', 'snd_i_want_interest','snd_i_am_label','snd_i_want_interest_label','snd_i_want_interest_label','auto_loan_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'snd_amount'  => $snd_amount,
            'snd_i_am'  => $snd_i_am,
            'snd_i_want_interest'  => $snd_i_want_interest,
            'snd_i_am_label' => $snd_i_am_label,
            'snd_i_want_interest_label' => $snd_i_want_interest_label,
            'snd_bank_ids' => $bank_id_array,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_count_selected_row(){

        $snd_bank_ids = (!empty( $this->input->post('snd_bank_ids'))) ? $this->input->post('snd_bank_ids') : '';
        $snd_i_want_interest = (!empty($this->input->post('snd_i_want_interest'))) ? $this->input->post('snd_i_want_interest') : '';
        $snd_amount = (!empty($this->input->post('snd_amount'))) ? (float)$this->input->post('snd_amount') : 100000;
        $snd_i_am = (!empty($this->input->post('snd_i_am'))) ? (float)$this->input->post('snd_i_am') :'';
        $snd_tenure = 0;
        if($snd_i_want_interest == 'Monthly'){
            $snd_tenure = 1;
        }else if($snd_i_want_interest == 'Quarterly'){
            $snd_tenure = 3;
        }else if($snd_i_want_interest == 'Half Yearly'){
            $snd_tenure = 6;
        }else{
            $snd_tenure = 12;
        }

        $WHERE = array(); $query = '';

        if(!empty($snd_bank_ids)) {
            if(strstr($snd_bank_ids,',')) {
                $data1 = explode(',',$snd_bank_ids);
                $bank_id_array = array();
                foreach( $data1 as $bank_id ) {
                    $bank_id_array[] = "snd_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(snd_info.bank_id = '.$snd_bank_ids.')';
            }
        }


        if(!empty($snd_i_want_interest)) {
            $WHERE[] = '(snd_info.interest_paid LIKE "'.$snd_i_want_interest.'")';
        }
        if(!empty($snd_i_am)) {
            $WHERE[] = '(snd_info.i_am_id = '.$snd_i_am.')';
        }


        $query = implode(' AND ',$WHERE);

        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_snd_info($query);
        $selected_row = $res->num_rows();

        $this->Common_model->table_name = 'snd_info';
        $total_row = $this->Common_model->count_all();

        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='snd'){
            $array_items = array('snd_amount', 'snd_i_am', 'snd_i_want_interest','snd_i_am_label','snd_i_want_interest_label','snd_i_want_interest_label','auto_loan_bank_ids');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';

    }

    public function unset_snd_i_am_session(){
        $session = $this->input->post('snd_i_am');
        if($session){
            $this->session->unset_userdata('snd_i_am');
            $this->session->unset_userdata('snd_i_am_label');
            echo 'success';
        }

    }
    public function unset_snd_i_want_interest_session(){
        $session = $this->input->post('snd_i_want_interest');
        if($session){
            $this->session->unset_userdata('snd_i_want_interest');
            $this->session->unset_userdata('snd_i_want_interest_label');
            echo 'success';
        }

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('snd_id1');
        $id2 = $this->input->post('snd_id2');
        $snd_amount = $this->input->post('snd_amount');
        $snd_i_want_interest = (!empty($this->input->post('snd_i_want_interest'))) ? $this->input->post('snd_i_want_interest') : 'Monthly';

        $newdata = array(
            'first_snd'  => $id1,
            'second_snd'  => $id2,
            'snd_amount' => $snd_amount,
            'snd_i_want_interest' => $snd_i_want_interest
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }


}