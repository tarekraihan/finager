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

class Money_maximizer extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }

    public function your_benefits($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required|is_unique[money_maxi_choose_your_benefit.your_benefit]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Your Benefit";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/add_your_benefit');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'your_benefit' => $this->input->post('txtYourBenefit'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_choose_your_benefit';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'money_maximizer/your_benefits/success');
                } else {
                    redirect(base_url().'money_maximizer/your_benefits/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_your_benefits($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit your benefits";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/edit_your_benefit');
                $this->load->view('admin/block/footer');
            }else{

                $this->Common_model->data = array(
                    'your_benefit' => $this->input->post('txtYourBenefit'),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_choose_your_benefit';
                $this->Common_model->where = array('id' => $this->input->post('txtYourBenefitId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'money_maximizer/edit_your_benefits/success');
                } else {
                    redirect(base_url().'money_maximizer/edit_your_benefits/error');
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

            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Credit Facility', 'trim|required');
            $this->form_validation->set_rules('txtDurationOfBenefit', 'Duration Of Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/deposit_info');
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
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'choose_your_benefit_id' => $this->input->post('txtYourBenefit'),
                    'credit_facility' => $this->input->post('txtLoanFacility'),
                    'duration_of_benefit' => $this->input->post('txtDurationOfBenefit'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'money_maxi_info';
                $result= $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'money_maximizer/add_deposit_info/success');
                } else {
                    redirect(base_url().'money_maximizer/add_deposit_info/error');
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
        $this->load->view('admin/money_maximizer/deposit_list');
        $this->load->view('admin/block/footer');
    }

    public function edit_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtYourBenefit', 'Your Benefit', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Credit Facility', 'trim|required');
            $this->form_validation->set_rules('txtDurationOfBenefit', 'Duration Of Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/money_maximizer/edit_deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

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
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'choose_your_benefit_id' => $this->input->post('txtYourBenefit'),
                    'credit_facility' => $this->input->post('txtLoanFacility'),
                    'duration_of_benefit' => $this->input->post('txtDurationOfBenefit'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );


                $this->Common_model->table_name = 'money_maxi_info';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositId'));
                $result =$this->Common_model->update();


                if ($result) {
                    redirect(base_url().'money_maximizer/edit_deposit_info/success');
                } else {
                    redirect(base_url().'money_maximizer /edit_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function ajax_get_money_maximizer(){

        $maximizer_tenure = $this->input->post('maximizer_tenure');
        $maximizer_amount = (floatval($this->input->post('deposit_amount') > 50000 ) ? $this->input->post('deposit_amount') : 100000 );
        $WHERE = array(); $query = '';
        if(!empty($maximizer_tenure)) {
            $WHERE[] = '( money_maxi_info.choose_your_benefit_id = '.$maximizer_tenure.')';
        }
        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {
            $query = 'WHERE '.$query;
        }
//        print_r($query);die;

        $res = $this->Front_end_select_model->select_money_maximizer_info($query);
//-----------Pagination start-----------------
        $config['base_url'] = base_url() . "en/all_money_maximizer/";
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

        $money_maximizer =  $this->Front_end_select_model->select_maximizer_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $maximizer = '';

        if($money_maximizer->num_rows() > 0){
            foreach($money_maximizer->result() as $row){
                //print_r($row);die;
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

                $benefit_amount  = $maximizer_amount * $row->your_benefit;

                $maximizer .= '
					<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'.base_url().'en/money_maximizer_details/'.$row->id.'"><img title="click here to details" class="img-responsive selected_card" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
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
                                            <h5>Deposited Amount</h5>
                                            <p>&#2547; '.number_format( $maximizer_amount ).'</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <div class="card_text3">
                                            <h5>Duration of Benefit</h5>
                                            <p>'.$row->your_benefit.' Times</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <div class="card_text3">
                                            <h5>Benefit Amount</h5>
                                            <p>&#2547; '.number_format( $benefit_amount ).'</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <div class="card_text3">
                                            <h5>Credit Facility</h5>
                                            <p>'.$row->credit_facility.' %</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row more_availabe">
                                    <div class="col-md-2"><a href="javascript:void(0)"   class="more_info" data-maximizer_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
                                    <div class="col-md-4"><a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"  href="javascript:void(0)"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/application.png" alt="Money Maximizer Application" /></a></div>
                                    <div class="col-md-2"><a href="javascript:void(0)" class="add-to-compare" data-millionaire_id="'.$row->id.'"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="Money Maximizer Comparison" /></a></div>
                                </div>
                            </div>
						</div>


						<!-- More Info Tab content start -->
						<div class="collapse" id="moreInfo'.$row->id.'">
                             <div class="col-md-12">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
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

										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<h4>User Review</h4>

										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->

					</div>';
            }
            $maximizer .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
            $maximizer .= '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }



        echo $maximizer;
    }



}