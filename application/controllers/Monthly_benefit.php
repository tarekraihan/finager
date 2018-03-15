<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Monthly Benefit                   *
 * Script : back end  controller              *
 * Start Date : 18-06-2017                    *
 * Last Update : 19-06-2017                   *
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
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
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

        $monthly_tenure = $this->input->post('monthly_tenure');
        $monthly_benefit_bank_ids = $this->input->post('monthly_benefit_bank_ids');
        $monthly_amount = (floatval($this->input->post('deposit_amount') > 100000 ) ? $this->input->post('deposit_amount') : 100000 );
        $WHERE = array(); $query = '';
        if(!empty($monthly_tenure)) {
            $WHERE[] = '( monthly_benefit_info.tenure_id = '.$monthly_tenure.')';
        }

        if(!empty($monthly_amount)) {
            $WHERE[] = '( monthly_benefit_info.min_amount <= '.$monthly_amount.')';
        }
        if(!empty($monthly_amount)) {
            $WHERE[] = '( monthly_benefit_info.max_amount >= '.$monthly_amount.')';
        }

        if(!empty($monthly_benefit_bank_ids)) {
            if(strstr($monthly_benefit_bank_ids,',')) {
                $data8 = explode(',',$monthly_benefit_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "monthly_benefit_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(monthly_benefit_info.bank_id = '.$monthly_benefit_bank_ids.')';
            }
        }


        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }
//        pr($query);die;

        $res = $this->Front_end_select_model->select_monthly_benefit($query);
//        pr($res);die;
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

        $result =  $this->Front_end_select_model->select_monthly_benefit_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $monthly_benefit = '';

        //pr($money_monthly_benefit->result());die;
        if($result->num_rows() > 0){
            foreach($result->result() as $row){
//                print_r($row);die;

                $tenure = ($row->tenure == '0.5') ? '6 Months' : $row->tenure.' Years';
                $loan_facility = (strtoupper($row->loan_facility) != 'N/A') ? $row->loan_facility.' %' :'N/A';

                $benefit =  $monthly_amount * $row->benefit_rate;
                /*$url = $row->bank_name.' '.$row->no_of_month.'-month-monthly-benefit';
                $slug = str_replace("/"," ",$url);
                $slug = url_title($slug,'dash',TRUE);

                $this->Common_model->data = array(
                    'slug' => $slug
                );

                $this->Common_model->where = array('id' => $row->id);
                $this->Common_model->table_name = 'monthly_benefit_info';
                $this->Common_model->update();*/

                $monthly_benefit .= '
					 <div class="full-card">
                    <div class="row fdr_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href="'.base_url().'compare-monthly-benefit/'.$row->slug.'.html"><img title="Bank Logo" class="img-responsive fdr_bank_logo" src="'.base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" /></a>
                            <p class="text-center">'.$row->bank_name.'</p>
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
                                        <p>BDT '.number_format($monthly_amount).'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="card_text3">
                                        <h5>Tenure</h5>
                                        <p>'.$tenure.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text3">
                                        <h5>Benefit Amount</h5>
                                        <p>BDT '.number_format( $benefit ).'</p>
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
                                        <p>'.$loan_facility.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row more_availabe">
                                <div class="col-md-2"><a href="javascript:void(0)" class="more_info"  id="more_info'.$row->id.'" data-monthly_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
                                <div class="col-md-2"><a href="javascript:void(0)" class="add-to-compare" data-monthly_id="'.$row->id.'"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="Monthly Benefit Comparison" /></a></div>
                                <div class="col-md-4"><a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><div class="loan_btn_apllication pull-right">Favorite </div></a></div>
                            </div>
                        </div>
                    </div>


                    <!-- More Info Tab content start -->
                    <div class="more_info_tab collapse" id="moreInfo'.$row->id.'">
                         <div class="col-md-12">
								<section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
                                    <li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Required Documents</a></li>
                                    <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
                                        <h4>Features</h4>
                                        '.$row->features.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
                                        <h4>Eligibility</h4>
                                        '.$row->eligibility.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
                                        <h4>Required Documents</h4>
                                        '.$row->requirement.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions'.$row->id.'">
                                        <h4>Terms & Conditions</h4>
                                         '.$row->terms_and_conditions.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <h4>Review</h4>
                                        '.$row->review.'
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
                                        <h4>User Review</h4>
                                        '.$row->review.'
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


    public function ajax_count_selected_row(){
        $monthly_tenure = $this->input->post('monthly_tenure');
        $monthly_benefit_bank_ids = $this->input->post('monthly_benefit_bank_ids');
        $monthly_amount = (floatval($this->input->post('deposit_amount') > 50000 ) ? $this->input->post('deposit_amount') : 50000 );
        $WHERE = array(); $query = '';
        if(!empty($monthly_tenure)) {
            $WHERE[] = '( monthly_benefit_info.tenure_id = '.$monthly_tenure.')';
        }
//
//        if(!empty($monthly_amount)) {
//            $WHERE[] = '( monthly_benefit_info.deposit_amount >= '.$monthly_amount.')';
//        }

        if(!empty($monthly_benefit_bank_ids)) {
            if(strstr($monthly_benefit_bank_ids,',')) {
                $data8 = explode(',',$monthly_benefit_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "monthly_benefit_info.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(monthly_benefit_info.bank_id = '.$monthly_benefit_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {$query = 'WHERE '.$query;}
        $res = $this->Front_end_select_model->select_monthly_benefit($query);
        $selected_row = $res->num_rows();

        $this->Common_model->table_name = 'monthly_benefit_info';
        $total_row = $this->Common_model->count_all();

        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;

    }


    public function ajax_compare_monthly_image(){
        $id = $this->input->post('monthly_id');
        $result = $this->Front_end_select_model->select_monthly_benefit_image($id);
        $row= $result->row();

        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" data-monthly_url='.$row->slug.' data-monthly_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_compare_page(){
        $id1 = $this->input->post('monthly_id1');
        $id2 = $this->input->post('monthly_id2');
        $deposit_amount = $this->input->post('monthly_amount');

        $newdata = array(
            'first_monthly_id'  => $id1,
            'second_monthly_id'  => $id2,
            'monthly_deposit_amount'  => $deposit_amount
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }

    public function ajax_monthly_benefit_quick_link(){
        $monthly_benefit_tenure = (!empty($this->input->post('monthly_benefit_tenure'))) ? $this->input->post('monthly_benefit_tenure') : '';
        $monthly_benefit_deposit_amount = (!empty($this->input->post('monthly_benefit_deposit_amount'))) ? $this->input->post('monthly_benefit_deposit_amount') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

        $array_items = array('monthly_benefit_tenure', 'monthly_benefit_tenure', 'monthly_benefit_tenure_label', 'monthly_benefit_bank_ids');
        $this->session->unset_userdata($array_items);
        if( $monthly_benefit_tenure != ''){
            $newdata['monthly_benefit_tenure'] = $monthly_benefit_tenure;
        }

        if( $monthly_benefit_deposit_amount != ''){
            $newdata['monthly_benefit_deposit_amount'] = $monthly_benefit_deposit_amount;
        }
        if($data == 'all'){
            $newdata['all']= '';
        }


        $this->session->set_userdata($newdata);
        echo 'success';
    }



    public function ajax_monthly_benefit_caching(){

        $monthly_benefit_deposit_amount = floatval ( ($this->input->post('monthly_benefit_deposit_amount')) ? $this->input->post('monthly_benefit_deposit_amount') : '50000' );
        $monthly_benefit_tenure = $this->input->post('monthly_benefit_tenure');
        $monthly_benefit_bank_ids = $this->input->post('monthly_benefit_bank_ids');
        $monthly_benefit_tenure_label = $this->input->post('monthly_benefit_tenure_label');

        $bank_id_array = array();
        if(!empty($monthly_benefit_bank_ids)) {
            if(strstr($monthly_benefit_bank_ids,',')) {
                $data3 = explode(',',$monthly_benefit_bank_ids);

                foreach( $data3 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $monthly_benefit_bank_ids;
            }
        }

        $array_items = array('monthly_benefit_tenure', 'monthly_benefit_deposit_amount', 'monthly_benefit_tenure_label', 'monthly_benefit_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'monthly_benefit_tenure'  => $monthly_benefit_tenure,
            'monthly_benefit_deposit_amount'  => $monthly_benefit_deposit_amount,
            'monthly_benefit_tenure_label' => $monthly_benefit_tenure_label,
            'monthly_benefit_bank_ids' => $bank_id_array
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='monthly_benefit'){
            $array_items = array('monthly_benefit_tenure', 'monthly_benefit_tenure', 'monthly_benefit_tenure_label', 'monthly_benefit_bank_ids','monthly_benefit_deposit_amount');
            $this->session->unset_userdata($array_items);
//            $this->session->sess_destroy();
//            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
//            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';
    }

    public function unset_monthly_benefit_tenure_session(){
        $session = $this->input->post('monthly_benefit_tenure');
        if($session){
            $this->session->unset_userdata('monthly_benefit_tenure');
            $this->session->unset_userdata('monthly_benefit_tenure_label');
            echo 'success';
        }

    }


    public function unset_monthly_benefit_bank_id_session(){
        $id = $this->input->post('monthly_benefit_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row) {
            $session = $row['id'] . '=' . $row['bank_name'];
            $bank = array_values($_SESSION['monthly_benefit_bank_ids']);
            if (($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['monthly_benefit_bank_ids'][$key]);
            }
        }
    }

}