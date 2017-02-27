<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Debit_card extends CI_Controller

{

    /**********************************************
     * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : FINAGER.COM                      *
     * Script : Debit Cared controller            *
     * Start Date : 03-11-2016                    *
     * Last Update : 03-11-2016                   *
     **********************************************/

    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }

    public function add_choose_account($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtAccountType', 'Choose Account', 'trim|required');
            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Debit Card : Choose Account";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/add_choose_account');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('account_name' => $this->input->post('txtAccountType'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'debit_card_choose_account';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'debit_card/add_choose_account/success');
                } else {
                    redirect(base_url().'debit_card/add_choose_account/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_choose_account($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtAccountType', 'Choose Account', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Debit Card";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/edit_choose_account');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array('account_name' => htmlentities($this->input->post('txtAccountType')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'debit_card_choose_account';
                $this->Common_model->where = array('id' => $this->input->post('txtAccountTypeId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'debit_card/edit_choose_account/success');
                } else {
                    redirect(base_url().'debit_card/edit_choose_account/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function card_issuer($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtCardIssuer', 'Card Issuer', 'trim|required');
            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Add Issuer";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/card_issuer');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_issuer_name' => $this->input->post('txtCardIssuer'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'debit_card_issuer';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'debit_card/card_issuer/success');
                } else {
                    redirect(base_url().'debit_card/card_issuer/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_issuer($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtCardIssuer', 'Card Issuer ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Issuer";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/edit_card_issuer');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array('card_issuer_name' => htmlentities($this->input->post('txtCardIssuer')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'debit_card_issuer';
                $this->Common_model->where = array('id' => $this->input->post('txtCardIssuerId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'debit_card/edit_card_issuer/success');
                } else {
                    redirect(base_url().'debit_card/edit_card_issuer/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    public function i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required|is_unique[debit_card_i_want.i_want]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/i_want');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_want' => $this->input->post('txtIWant'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'debit_card_i_want';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'debit_card/i_want/success');
                } else {
                    redirect(base_url().'debit_card/i_want/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/edit_i_want');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_want' => htmlentities($this->input->post('txtIWant')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'debit_card_i_want';
                $this->Common_model->where = array('id' => $this->input->post('txtIWantId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'debit_card/edit_i_want/success');
                } else {
                    redirect(base_url().'debit_card/edit_i_want/error');
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
            $this->form_validation->set_rules('txtLookingFor', ' Looking For ', 'trim|required|is_unique[debit_card_looking_for.looking_for]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'looking_for' => $this->input->post('txtLookingFor'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'debit_card_looking_for';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'debit_card/looking_for/success');
                } else {
                    redirect(base_url().'debit_card/looking_for/error');
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
                $this->load->view('admin/debit_card/edit_looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'looking_for' => htmlentities($this->input->post('txtLookingFor')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'debit_card_looking_for';
                $this->Common_model->where = array('id' => $this->input->post('txtLookingForId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'debit_card/edit_looking_for/success');
                } else {
                    redirect(base_url().'debit_card/edit_looking_for/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function do_upload($path, $field = '')
    {
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = '1';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }


    public function card_info_list(){
        $data['title'] = "Card Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/debit_card/card_info_list');
        $this->load->view('admin/block/footer');
    }


    public function add_card_info($msg=""){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtChooseAccount', 'Choose Account', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor', 'Looking For', 'trim|required');
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');
            $this->form_validation->set_rules('txtCardIssuer', 'Card Issuer', 'trim|required');
            $this->form_validation->set_rules('txtCardName', 'Card Name', 'trim|required');
            $this->form_validation->set_rules('txtAnnualFee', 'Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtDailyWithdrawalLimit', 'Daily Withdrawal Limit', 'trim|required');
            $this->form_validation->set_rules('txtNoOfWithdrawal', 'No Of Withdrawal', 'trim|required');
            $this->form_validation->set_rules('txtPerTransactionLimit', 'Per Transaction Limit', 'trim|required');
            $this->form_validation->set_rules('txtOwnAtmCharge', 'Own Atm Charge', 'trim|required');
            $this->form_validation->set_rules('txtOtherAtmCharge', 'Other Atm Charge', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirements', 'Requirements', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees And Charges', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Card Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/add_card_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'choose_account_id' => $this->input->post('txtChooseAccount'),
                    'looking_for_id' => $this->input->post('txtLookingFor'),
                    'i_want_id' => $this->input->post('txtIWant'),
                    'card_issuer_id' => $this->input->post('txtCardIssuer'),
                    'card_name' => $this->input->post('txtCardName'),
                    'annual_fee' => $this->input->post('txtAnnualFee'),
                    'daily_withdrawal_limit' => $this->input->post('txtDailyWithdrawalLimit'),
                    'no_of_withdrawal' => $this->input->post('txtNoOfWithdrawal'),
                    'per_transaction_limit' => $this->input->post('txtPerTransactionLimit'),
                    'atm_charge_own' => $this->input->post('txtOwnAtmCharge'),
                    'atm_charge_other' => $this->input->post('txtOtherAtmCharge'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'requirement' => $this->input->post('txtRequirements'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'debit_card_info';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'debit_card/add_card_info/success');
                } else {
                    redirect(base_url().'debit_card/add_card_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function edit_card_info($msg=""){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtChooseAccount', 'Choose Account', 'trim|required');
            $this->form_validation->set_rules('txtLookingFor', 'Looking For', 'trim|required');
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');
            $this->form_validation->set_rules('txtCardIssuer', 'Card Issuer', 'trim|required');
            $this->form_validation->set_rules('txtCardName', 'Card Name', 'trim|required');
            $this->form_validation->set_rules('txtAnnualFee', 'Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtDailyWithdrawalLimit', 'Daily Withdrawal Limit', 'trim|required');
            $this->form_validation->set_rules('txtNoOfWithdrawal', 'No Of Withdrawal', 'trim|required');
            $this->form_validation->set_rules('txtPerTransactionLimit', 'Per Transaction Limit', 'trim|required');
            $this->form_validation->set_rules('txtOwnAtmCharge', 'Own Atm Charge', 'trim|required');
            $this->form_validation->set_rules('txtOtherAtmCharge', 'Other Atm Charge', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequirements', 'Requirements', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');
            $this->form_validation->set_rules('txtFeesAndCharges', 'Fees And Charges', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Card Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/debit_card/edit_card_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'choose_account_id' => $this->input->post('txtChooseAccount'),
                    'looking_for_id' => $this->input->post('txtLookingFor'),
                    'i_want_id' => $this->input->post('txtIWant'),
                    'card_issuer_id' => $this->input->post('txtCardIssuer'),
                    'card_name' => $this->input->post('txtCardName'),
                    'annual_fee' => $this->input->post('txtAnnualFee'),
                    'daily_withdrawal_limit' => $this->input->post('txtDailyWithdrawalLimit'),
                    'no_of_withdrawal' => $this->input->post('txtNoOfWithdrawal'),
                    'per_transaction_limit' => $this->input->post('txtPerTransactionLimit'),
                    'atm_charge_own' => $this->input->post('txtOwnAtmCharge'),
                    'atm_charge_other' => $this->input->post('txtOtherAtmCharge'),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'requirement' => $this->input->post('txtRequirements'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'fees_and_charges' => $this->input->post('txtFeesAndCharges'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'debit_card_info';
                $this->Common_model->where = array('id' => $this->input->post('txtCardInfoId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'debit_card/add_card_info/success');
                } else {
                    redirect(base_url().'debit_card/add_card_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



    public function ajax_debit_card_info(){
        $choose_account = $this->input->post('choose_account');
        $looking_for = $this->input->post('looking_for');
        $card_issuer = $this->input->post('card_issuer');
        $i_want = $this->input->post('i_want');

        $WHERE = array(); $query = '';
        if(!empty($choose_account)) {
            if(strstr($choose_account,',')) {
                $data1 = explode(',',$choose_account);
                $choose_account_array = array();
                foreach($data1 as $c_user) {
                    $choose_account_array[] = "debit_card_info.choose_account_id = $c_user";
                }
                $WHERE[] = '('.implode(' OR ',$choose_account_array).')';
            } else {
                $WHERE[] = '(debit_card_info.choose_account_id = '.$choose_account.')';
            }
        }

        if(!empty($looking_for)) {
            if(strstr($looking_for,',')) {
                $data2 = explode(',',$looking_for);
                $looking_for_array = array();
                foreach($data2 as $c_type) {
                    $looking_for_array[] = "debit_card_info.looking_for_id = $c_type";
                }
                $WHERE[] = '('.implode(' OR ',$looking_for_array).')';
            } else {
                $WHERE[] = '(debit_card_info.looking_for_id = '.$looking_for.')';
            }
        }

        if(!empty($card_issuer)) {
            if(strstr($card_issuer,',')) {
                $data3 = explode(',',$card_issuer);
                $card_issuer_array = array();
                foreach($data3 as $c_type) {
                    $card_issuer_array[] = "debit_card_info.card_issuer_id = $c_type";
                }
                $WHERE[] = '('.implode(' OR ',$card_issuer_array).')';
            } else {
                $WHERE[] = '(debit_card_info.card_issuer_id = '.$card_issuer.')';
            }
        }

        if(!empty($i_want)) {
            if(strstr($i_want,',')) {
                $data4 = explode(',',$i_want);
                $i_want_array = array();
                foreach($data4 as $c_type) {
                    $i_want_array[] = "debit_card_info.i_want_id = $c_type";
                }
                $WHERE[] = '('.implode(' OR ',$i_want_array).')';
            } else {
                $WHERE[] = '(debit_card_info.i_want_id = '.$i_want.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {$query = 'WHERE '.$query;}

        $res = $this->Front_end_select_model->select_debit_card_info($query);

        //-----------Pagination start-----------------

        //$config['base_url'] = base_url() . "en/all_debit_card/";
        $config['base_url'] = '';
        $config['total_rows'] = $res->num_rows();
        $config['per_page'] = 10;
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

        $result =  $this->Front_end_select_model->select_debit_card_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();

        //-------------Pagination End-------------------


        $debit_card ='';
        foreach($result->result() as $row) {
            $debit_card .= '<div class="full-card">

						<div class="row card_right_bar no-margin-lr">
							<div class="col-sm-3 col-xs-3">
								<a href="'.base_url().'en/debit_card_details/'.$row->id.'" ><img title="Click here to details" class="img-responsive selected_card" src="' . base_url() . 'resource/common_images/bank_logo/'.$row->bank_logo.'" /></a>
								<img class="btnCardApply img-responsive" src="' . base_url() . 'resource/front_end/images/BtnCard_apply.png" />

								<p class="text-center">
									<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
								</p>
								<p class="rating text-center">Rated By 5 Person</p>

								<span class="more_info_icon"><a id="" href="javascript:void(0);" class="add-to-compare" data-card_id="'.$row->id.'" ><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
								<span class="more_info_icon"><a role="button" id="more_info'.$row->id.'" class="more_info" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
							</div>

							<div class="col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-sm-9 col-xs-9">
										<div class="card_text1">
											<b>'.$row->card_name.'</b>
											<p class="card_description">Dual Currency Visa Classic Card of Brac Bank Ltd. is a valid both in Bangladesh & outside the country. It has waiver on annual fee from the second year if 18 transactions (including 10 POS transaction) is done in a physical year.</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3">
										<div class="card_text1 card_btn_apllication">
											<img class="img-responsive" src="' . base_url() . 'resource/front_end/images/card_btn_apllication.png" />
										</div>
                                        <div>

                                            <div class="card_text2">
                                                <h5>Annual Fee</h5>
                                                <p>'.$row->annual_fee.'</p>
                                            </div>

                                        </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-2 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Daily Withdrawal Limit</h5>
											<p> '.$row->daily_withdrawal_limit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Number of Withdrawal</h5>
											<p>'.$row->no_of_withdrawal.'</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3 w20 no-padding">
										<div class="card_text2">
											<h5>ATM Charge</h5>
											<p>Own ATM: '.$row->atm_charge_own.'<br> Others ATM:<br> '.$row->atm_charge_other.'</p>
										</div>
									</div>
									<div class="col-sm-1 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Per Transaction Limit</h5>
											<p>'.$row->per_transaction_limit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-1 w20 no-padding">
										<div class="card_text2">
											<h5>Account Required</h5>
											<p>'.$row->account_name.'</p>
										</div>
									</div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="moreInfo'.$row->id.'" class="collapse">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
										<li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Required Documents</a></li>
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
												<br/>
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
												<br/>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
											<div class="debit_card_tab">
												<h4>Requirement</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->requirement.'
												</div>
												<br/>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
											<div class="debit_card_tab">
												<h4>Terms and Condition</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->terms_and_conditions.'
												</div>
												<br/>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<div class="debit_card_tab">
												<h4>Review</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->review.'
												</div>
												<br/>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
										    <p>Coming Soon</p>
										    <br/>
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->
					</div>';

        }
        $debit_card .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        echo $debit_card;
    }

    public function ajax_compare_card_image(){
        $id = $this->input->post('card_id');
        $model_name = "debit_card_info";
        $result = $this->Front_end_select_model->select_compare_image($id,$model_name);

        $row= $result->row();

        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" data-card_id='.$row->id.' class="img-responsive compare_delay "/>
                     <img class="compare-cross-btn" src="'.base_url().'resource/front_end/images/dialog_close.png"/>';
        }
        echo $html;

    }

    public function ajax_go_card_compare_page(){
        $id1 = $this->input->post('card_id1');
        $id2 = $this->input->post('card_id2');

        $newdata = array(
            'first_card'  => $id1,
            'second_card'  => $id2
        );
        $this->session->set_userdata($newdata);
        echo 'success';
    }


}