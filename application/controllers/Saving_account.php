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

class Saving_account extends CI_Controller
{

    public function account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtSavingAccountName', 'Saving Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtMinAmountInterest', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/saving_account/account_info');
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
                    'saving_account_name' => $this->input->post('txtSavingAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'min_balance_for_interest' => $this->input->post('txtMinAmountInterest'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'saving_account_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'saving_account/account_info/success');
                } else {
                    redirect(base_url().'saving_account/account_info/error');
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
        $this->load->view('admin/saving_account/saving_account_list');
        $this->load->view('admin/block/footer');
    }


    public function edit_account_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtSavingAccountName', 'Saving Account Name', 'trim');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
            $this->form_validation->set_rules('txtOpeningBalance', 'Opening Balance', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtMinAmountInterest', 'Min Amount for Interest', 'trim|required');
            $this->form_validation->set_rules('txtInterestPaid', 'Interest Paid', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', ' Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirement', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees and Charges', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Account Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/saving_account/edit_account_info');
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
                    'saving_account_name' => $this->input->post('txtSavingAccountName'),
                    'opening_balance' => $this->input->post('txtOpeningBalance'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'min_balance_for_interest' => $this->input->post('txtMinAmountInterest'),
                    'interest_paid' => $this->input->post('txtInterestPaid'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'requirements' => $this->input->post('txtRequirement'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'saving_account_info';
                $this->Common_model->where = array('id' => $this->input->post('txtSavingAccountInfoId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'saving_account/edit_account_info/success');
                } else {
                    redirect(base_url().'saving_account/edit_account_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function ajax_get_savings_account(){


        $res = $this->Front_end_select_model->select_savings_account_info();
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

        $savings_account =  $this->Front_end_select_model->select_savings_account_info($config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        $account = '';

        if($savings_account->num_rows() > 0){
            foreach($savings_account->result() as $row){
                print_r($row);die;
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
                                <div class="col-sm-3 col-xs-3">
                                    <div class="caccount_text">
                                        <h5>A/C Opening Balance</h5>
                                        <p>BDT. '.number_format($row->opening_balance).'</p>

                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                    <div class="caccount_text">
                                        <h5>Interest Rate</h5>
                                        <p>'.$interest.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="caccount_text">
                                        <h5>Minimum Balance for Interest</h5>
                                        <p>BDT. '.number_format($min_balance).' Per Month</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="caccount_text">
                                        <h5>Interest Paid</h5>
                                        <p>'.$row->interest_paid.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row current-account">
                                <div class="col-sm-4 col-xs-4">
                                    <span class="more_info_icon"><a href="javascript:void(0)" class="add-to-compare" data-account_id="'.$row->id.'"><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <span class="more_info_icon"><a href="javascript:void(0)"   class="more_info" data-monthly_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
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
                                    <li role="presentation"><a href="#FeesCharge'.$row->id.'s" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
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
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Product Name</td>
                                                            <td>Bank Asia Savings Account</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Single/Joint Name</td>
                                                            <td>Joint Name Applicable</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Minimum Balance for Interest</td>
                                                            <td>BDT 20000 Per Month</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total ATM</td>
                                                            <td>276</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Branch</td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ATM Withdrawal Limit</td>
                                                            <td>BDT 50000 Per Day</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Interest Paid</td>
                                                            <td>Monthly</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Withdrawal Limit Amount</td>
                                                            <td>Maximum 200000 Per Week</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Withdrawal Limit Per Week</td>
                                                            <td>Not More than 2 Times. If an Accountholder Withdraws more than 2 Times in a Week, then he/she will not Get Interest for the Month.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Additional Features</td>
                                                            <td>
                                                                i)	Debit Card<br>
                                                                ii)	Check Book Facility<br>
                                                                iii)	Internet Banking Facilities<br>
                                                                iv)	Free Insurance Benefit <br>
                                                                v)	Safe deposit locker facility<br>
                                                                vi)	Personal Loan Facility <br>
                                                                vii) Educational Loan Facility<br>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hotline Number</td>
                                                            <td>16221</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
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
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Account Maintenance Fee</td>
                                                            <td>BDT 500 Yearly</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Closing of Account</td>
                                                            <td>BDT 400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cheque Book Fee</td>
                                                            <td>BDT 200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Debit Card Annual Fee</td>
                                                            <td>BDT 400 + VAT</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="Requirement'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Eligibility</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <div class="prosCons_body2 trbodywidth">
                                                <ul>
                                                    <li>Bangladeshi National</li>
                                                    <li>Minimum 18 Years of Age</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="debit_card_tab">
                                            <h4>Required Documents</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>Coming Soon...</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Review</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>Coming Soon...</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                        <div class="debit_card_tab">
                                            <h4>Terms & Conditions</h4>
                                            <div class="prosConsHr"></div><br/>
                                            <p>Coming Soon...</p>
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