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

class Current_account extends CI_Controller
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
            $this->form_validation->set_rules('txtIAm', 'I am', 'trim|required|is_unique[current_account_i_am.i_am]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Am";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/i_am');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_am' => $this->input->post('txtIAm'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_i_am';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'current_account/i_am/success');
                } else {
                    redirect(base_url().'current_account/i_am/error');
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
                $this->load->view('admin/current_account/edit_i_am');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_am' => htmlentities($this->input->post('txtIAm')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_i_am';
                $this->Common_model->where = array('id' => $this->input->post('txtIAmId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'current_account/edit_i_am/success');
                } else {
                    redirect(base_url().'current_account/edit_i_am/error');
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

            $this->form_validation->set_rules('txtCurrentAccountName', 'Current Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtTotalBranch', 'Total Branch', 'trim|required');
            $this->form_validation->set_rules('txtFundTransfer', 'Fund Transfer', 'trim|required');
            $this->form_validation->set_rules('txtOverdraftFacility', 'Overdraft Facility', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtPrivileges', 'Privileges', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/account_info');
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
                    'current_account_name' => $this->input->post('txtCurrentAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'total_branch' => $this->input->post('txtTotalBranch'),
                    'fund_transfer' => $this->input->post('txtFundTransfer'),
                    'overdraft_facility' => $this->input->post('txtOverdraftFacility'),
                    'privilege' => $this->input->post('txtPrivileges'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'current_account/account_info/success');
                } else {
                    redirect(base_url().'current_account/account_info/error');
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
        $this->load->view('admin/current_account/current_account_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCurrentAccountName', 'Current Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtTotalBranch', 'Total Branch', 'trim|required');
            $this->form_validation->set_rules('txtFundTransfer', 'Fund Transfer', 'trim|required');
            $this->form_validation->set_rules('txtOverdraftFacility', 'Overdraft Facility', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtPrivileges', 'Privileges', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/current_account/edit_account_info');
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
                    'current_account_name' => $this->input->post('txtCurrentAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'total_branch' => $this->input->post('txtTotalBranch'),
                    'fund_transfer' => $this->input->post('txtFundTransfer'),
                    'overdraft_facility' => $this->input->post('txtOverdraftFacility'),
                    'privilege' => $this->input->post('txtPrivileges'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'current_account_info';
                $this->Common_model->where = array('id' => $this->input->post('txtCurrentAccountId'));
                $result = $this->Common_model->update();


                if ($result) {
                    redirect(base_url().'current_account/edit_account_info/success');
                } else {
                    redirect(base_url().'current_account/edit_account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function ajax_get_current_account(){

        $current_account_i_am = $this->input->post('current_account_i_am');
        $current_account_bank_ids = $this->input->post('current_account_bank_ids');

        $WHERE = array(); $query = '';
        if(!empty($current_account_i_am)) {
            $WHERE[] = '( current_account_info.i_am_id = '.$current_account_i_am.')';
        }

            if(!empty($current_account_bank_ids)) {
            if(strstr($current_account_bank_ids,',')) {
                $data8 = explode(',',$current_account_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "current_account_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(current_account_info.bank_id = '.$current_account_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }
//        print_r($query);die;

        $res = $this->Front_end_select_model->select_current_account_info($query);
//-----------Pagination start-----------------
        $config['base_url'] = base_url() . "en/current_account/";
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

        $current_account =  $this->Front_end_select_model->select_current_account_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $account = '';

        if($current_account->num_rows() > 0){
            foreach($current_account->result() as $row){
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo='';
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $url = $bank.'-current-account-for-'.$row->i_am;
                $slug = str_replace("/"," ",$url);
                $slug = url_title($slug,'dash',TRUE);

                $this->Common_model->data = array(
                    'slug' => $slug
                );
                $this->Common_model->where = array('id' => $row->id);
                $this->Common_model->table_name = 'current_account_info';
                $this->Common_model->update();


                $account .= '
					<div class="full-card">
                    <div class="row card_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'.base_url().'compare-current-account/'.$row->slug.'.html"><img title="click here to details" class="img-responsive current_account_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
								<p class="text-center">'.$bank.'</p>
                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                        </div>

                        <div class="col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-sm-3 col-xs-3 no-padding">
                                    <div class="caccount_text">
                                        <h5>Opening Balance</h5>
                                        <p>'.$row->i_am.' : BDT '.number_format($row->opening_balance).'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3 no-padding">
                                    <div class="caccount_text">
                                        <h5>Total Branch</h5>
                                        <p>'.$row->total_branch.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3 no-padding">
                                    <div class="caccount_text">
                                        <h5>Fund Transfer</h5>
                                        <p>'.$row->fund_transfer.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 no-padding">
                                    <div class="caccount_text">
                                        <h5>Overdraft Facility</h5>
                                        <p>'.$row->overdraft_facility.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row current-account">
                                <div class="col-sm-4 col-xs-4">
                                    <span class="more_info_icon"><a href="javascript:void(0)" class="add-to-compare" data-account_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <span class="more_info_icon"><a href="javascript:void(0)" class="more_info"  id="more_info'.$row->id.'" data-account_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
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
                                    <li role="presentation" class="active"><a href="#Privileges'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Privileges</a></li>
                                    <li role="presentation"><a href="#Features'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#Requirement'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Requirement</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Privileges'.$row->id.'">
                                        <div class="col-sm-12">
                                            <div class="debit_card_tab">
                                                <h4>Privileges</h4>
                                                <div class="prosConsHr"></div><br/>
                                                <div class="prosCons_body2 trbodywidth">
                                                    '.$row->privilege.'
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
                                            <p> '.$row->requirements.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Review</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p> '.$row->review.'</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Terms & Conditions</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p> '.$row->terms_and_conditions.'</p>
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

    public function ajax_count_selected_row(){

        $current_account_i_am = $this->input->post('current_account_i_am');
        $current_account_bank_ids = $this->input->post('current_account_bank_ids');

        $WHERE = array(); $query = '';
        if(!empty($current_account_i_am)) {
            $WHERE[] = '( current_account_info.i_am_id = '.$current_account_i_am.')';
        }

            if(!empty($current_account_bank_ids)) {
            if(strstr($current_account_bank_ids,',')) {
                $data8 = explode(',',$current_account_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "current_account_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(current_account_info.bank_id = '.$current_account_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }

        $res = $this->Front_end_select_model->select_current_account_info($query);
        $selected_row = $res->num_rows();

        $this->Common_model->table_name = 'current_account_info';
        $total_row = $this->Common_model->count_all();

        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;
    }

    public function ajax_compare_current_account_image(){
        $id = $this->input->post('account_id');
        $model_name = "current_account_info";//table name
        $result = $this->Front_end_select_model->select_compare_image($id,$model_name);

        $row= $result->row();

        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" data-account_id='.$row->id.' data-account_slug='.$row->slug.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('account_id1');
        $id2 = $this->input->post('account_id2');
        $newdata = array(
            'first_account_id'  => $id1,
            'second_account_id'  => $id2
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_current_account_caching(){

        $current_account_i_am = $this->input->post('current_account_i_am');
        $current_account_bank_ids = $this->input->post('current_account_bank_ids');
        $current_account_i_am_label = $this->input->post('current_account_i_am_label');

        $bank_id_array = array();
        if(!empty($current_account_bank_ids)) {
            if(strstr($current_account_bank_ids,',')) {
                $data3 = explode(',',$current_account_bank_ids);

                foreach( $data3 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $current_account_bank_ids;
            }
        }

        $array_items = array('current_account_i_am', 'current_account_i_am_label', 'current_account_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'current_account_i_am'  => $current_account_i_am,
            'current_account_i_am_label' => $current_account_i_am_label,
            'current_account_bank_ids' => $bank_id_array
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='current_account'){
            $array_items = array('current_account_i_am', 'current_account_i_am_label', 'current_account_bank_ids');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';
    }

    public function unset_current_account_i_am_session(){
        $session = $this->input->post('current_account_i_am');
        if($session){
            $this->session->unset_userdata('current_account_i_am');
            $this->session->unset_userdata('current_account_i_am_label');
            echo 'success';
        }

    }

    public function unset_current_account_bank_id_session(){
        $id = $this->input->post('current_account_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row) {
            $session = $row['id'] . '=' . $row['bank_name'];
            $bank = array_values($_SESSION['current_account_bank_ids']);
            if (($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['current_account_bank_ids'][$key]);
            }
        }
    }


}