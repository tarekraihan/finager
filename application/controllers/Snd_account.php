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
        snd_i_am_list+snd_i_want_interest_list+bank_id_list+snd_amount;
        $snd_bank_ids = (!empty( $this->input->post('snd_bank_ids'))) ? $this->input->post('snd_bank_ids') : '';
        $snd_i_want_interest = (!empty($this->input->post('snd_i_want_interest'))) ? $this->input->post('snd_i_want_interest') : '';
        $snd_amount = (!empty($this->input->post('snd_amount'))) ? $this->input->post('snd_amount') : '';
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
            $WHERE[] = '(snd_info.interest_paid LIKE '.$snd_i_want_interest.')';
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
        $res = $this->Front_end_select_model->select_snd_account_info($query);

//-----------Pagination start-----------------
        $config['base_url'] = base_url() . "en/savings_account/";
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

        $savings_account =  $this->Front_end_select_model->select_savings_account_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $account = '';

        if($savings_account->num_rows() > 0){
            foreach($savings_account->result() as $row){
//                print_r($row);die;
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

                $interest = '';
                if(is_numeric($row->interest_rate)){
                    $interest = $row->interest_rate.' %';
                }else{
                    $interest = $row->interest_rate;
                }
                $min_balance = ($row->min_balance_for_interest != '') ? $row->min_balance_for_interest : 'N/A';

                $account .= '
					<div class="full-card">
                    <div class="row card_right_bar">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'.base_url().'en/savings_account_details/'.$row->id.'"><img title="Free Web tutorials" class="img-responsive" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
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
                                        <h5>A/C Opening Balance</h5>
                                        <p>BDT '.number_format($row->opening_balance).'</p>

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
                                        <h5>Minimum Balance for Interest</h5>
                                        <p>BDT '.number_format($min_balance).' Per Month</p>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="caccount_text">
                                        <h5>Interest Paid</h5>
                                        <p>'.$row->interest_paid.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row saving-account">
                                <div class="col-sm-4 col-xs-4">
                                    <span class="more_info_icon"><a href="javascript:void(0)" class="add-to-compare" data-account_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <span class="more_info_icon"><a href="javascript:void(0)"   class="more_info" data-account_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
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
                                    <li role="presentation"><a href="#Features'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#Requirement'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Requirement</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
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
                                    <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                                        <div class="col-sm-12">
                                            <div class="debit_card_tab">
                                                <h4>Fees & Charges</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->fees_and_charges.'
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="Requirement'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Requirements</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>'.$row->requirements.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Review</h4>
                                            <div class="prosConsHr"></div><br/>
                                           <p>'.$row->review.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Terms & Conditions</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>'.$row->terms_and_conditions.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>User Review</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>Coming Soon...</p>
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




}