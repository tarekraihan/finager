<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller
{
    /**********************************************
     * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : FINAGER.COM                      *
     * Script : Card  controller                  *
     * Start Date : 07-03-2016                    *
     * Last Update : 07-03-2016                   *
     **********************************************/


   /* public function age_limit($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtAgeLimit', 'Age Limit ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Age Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/age_limit');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('age_limit' => $this->input->post('txtAgeLimit'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_age_limit';
                $result = $this->common_model->insert();

                if ($result) {
                    redirect(base_url().'card/age_limit/success');
                } else {
                    redirect(base_url().'card/age_limit/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/

/*    public function edit_age_limit($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtAgeLimit', 'Age Limit ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Age Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_age_limit');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('age_limit' => htmlentities($this->input->post('txtAgeLimit')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_age_limit';
                $this->common_model->where = array('id' => $this->input->post('txtAgeLimitId'));
                $result = $this->common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_age_limit/success');
                } else {
                    redirect(base_url().'card/edit_age_limit/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/


    public function bank($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBank', 'Bank Name ', 'trim|required|is_unique[card_bank.bank_name]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Add Bank";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/bank');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('bank_name' => $this->input->post('txtBank'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_bank';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/bank/success');
                } else {
                    redirect(base_url().'card/bank/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_bank($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtBank', 'Bank Name ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Bank Name";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_bank');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('bank_name' => htmlentities($this->input->post('txtBank')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_bank';
                $this->Common_model->where = array('id' => $this->input->post('txtBankId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_bank/success');
                } else {
                    redirect(base_url().'card/edit_bank/error');
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
                $this->load->view('admin/card_issuer');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_issuer_name' => $this->input->post('txtCardIssuer'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_issuer';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_issuer/success');
                } else {
                    redirect(base_url().'card/card_issuer/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_issuer($msg='')
    {
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
                $this->load->view('admin/edit_card_issuer');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_issuer_name' => htmlentities($this->input->post('txtCardIssuer')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_issuer';
                $this->Common_model->where = array('id' => $this->input->post('txtCardIssuerId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_issuer/success');
                } else {
                    redirect(base_url().'card/edit_card_issuer/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    /*public function card_limit($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardLimit', 'Card Limit', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_limit');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('card_limit' => $this->input->post('txtCardLimit'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_card_limit';
                $result = $this->common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_limit/success');
                } else {
                    redirect(base_url().'card/card_limit/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_limit($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardLimit', 'Card Limit ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Card Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_limit');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('card_limit' => htmlentities($this->input->post('txtCardLimit')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_card_limit';
                $this->common_model->where = array('id' => $this->input->post('txtCardLimitId'));
                $result = $this->common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_limit/success');
                } else {
                    redirect(base_url().'card/edit_card_limit/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/


    public function card_type($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardType', 'Card Type', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card Type";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_type_name' =>  htmlentities($this->input->post('txtCardType')), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_type/success');
                } else {
                    redirect(base_url().'card/card_type/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_type($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardType', 'Card Type ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Card Type";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_type');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_type_name' => htmlentities($this->input->post('txtCardType')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_type';
                $this->Common_model->where = array('id' => $this->input->post('txtCardTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_type/success');
                } else {
                    redirect(base_url().'card/edit_card_type/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    public function card_user($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardUser', 'Card User', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card User";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_user' =>  htmlentities($this->input->post('txtCardUser')), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_user';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_user/success');
                } else {
                    redirect(base_url().'card/card_user/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_user($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardUser', 'Card User ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Card User";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_user');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_user' => htmlentities($this->input->post('txtCardUser')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_card_user';
                $this->Common_model->where = array('id' => $this->input->post('txtCardUserId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_user/success');
                } else {
                    redirect(base_url().'card/edit_card_user/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }



    public function credit_card_type($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCreditCardType', 'Credit Card Type', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Credit Card Type";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('cc_card_type' =>  htmlentities($this->input->post('txtCreditCardType')), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_credit_card_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/credit_card_type/success');
                } else {
                    redirect(base_url().'card/credit_card_type/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_credit_card_type($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCreditCardType', 'Credit Card Type ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Credit Card Type";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_credit_card_type');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('cc_card_type' => htmlentities($this->input->post('txtCreditCardType')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_credit_card_type';
                $this->Common_model->where = array('id' => $this->input->post('txtCreditCardTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_credit_card_type/success');
                } else {
                    redirect(base_url().'card/edit_credit_card_type/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    /*public function card_income_range($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtIncomeRange', 'Income Range', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_income_range');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('income_range' => $this->input->post('txtIncomeRange'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_income_range';
                $result = $this->common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_income_range/success');
                } else {
                    redirect(base_url().'card/card_income_range/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_income_range($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtIncomeRange', 'Income Range ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_income_range');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('income_range' => htmlentities($this->input->post('txtIncomeRange')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_income_range';
                $this->common_model->where = array('id' => $this->input->post('txtIncomeRangeId'));
                $result = $this->common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_income_range/success');
                } else {
                    redirect(base_url().'card/edit_card_income_range/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/




   /* public function card_interest_free_period($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtInterestFreePeriod', 'Interest Free Period', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_interest_free_period');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('interest_free_period' => $this->input->post('txtInterestFreePeriod'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_interest_free_period';
                $result = $this->common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_interest_free_period/success');
                } else {
                    redirect(base_url().'card/card_interest_free_period/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_interest_free_period($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtInterestFreePeriod', 'Interest Free Period ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_interest_free_period');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('interest_free_period' => htmlentities($this->input->post('txtInterestFreePeriod')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_interest_free_period';
                $this->common_model->where = array('id' => $this->input->post('txtInterestFreePeriodId'));
                $result = $this->common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_interest_free_period/success');
                } else {
                    redirect(base_url().'card/edit_card_interest_free_period/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/


    public function do_upload($path, $field = '')
    {
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4096';
        $config['file_name'] = '1';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }
    public function card_reward($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardReward', 'Card Reward', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card Reward";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_reward');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('reward_name' => htmlentities($this->input->post('txtCardReward')), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_reward';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_reward/success');
                } else {
                    redirect(base_url().'card/card_reward/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_reward($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardReward', 'Card Reward ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Card Reward";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_reward');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('reward_name' => htmlentities($this->input->post('txtCardReward')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_reward';
                $this->Common_model->where = array('id' => $this->input->post('txtCardRewardId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_reward/success');
                } else {
                    redirect(base_url().'card/edit_card_reward/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }



    public function card_fees_charges($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtCardName', 'Card Name', 'trim|required');
            $this->form_validation->set_rules('txtCardAnnualFee', 'Card Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardAnnualFeePlus', 'Card Annual Fee Plus', 'trim');
            $this->form_validation->set_rules('txtSupplementaryFee', ' Supplementary Fee', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseFee', 'Purchase Fee', 'trim');
            $this->form_validation->set_rules('txtBalanceTransferFee', 'Balance Transfer Fee', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOwnATM', 'Cash Advance Fee Own ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOtherATM', 'Cash Advance Fee Other ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOtherATMPlus', 'Cash Advance Fee Other ATM Plus', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeInternationalUSD', 'Cash Advance Fee International USD', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeInternationalPercentage', 'Cash Advance Fee International Percentage', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeInternationalRemarks', 'Cash Advance Fee International Remarks', 'trim|required');
            $this->form_validation->set_rules('txtLatePaymentFeeBDT', 'Late Payment Fee BDT', 'trim|required');
            $this->form_validation->set_rules('txtLatePaymentFeeUSD', 'Late Payment Fee USD', 'trim|required');
            $this->form_validation->set_rules('txtReplacementFee', 'Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtPinReplacementFee', 'Pin Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtOverLimitChargeBDT', 'Over Limit Charge BDT', 'trim|required');
            $this->form_validation->set_rules('txtOverLimitChargeUSD', 'Over Limit Charge USD', 'trim|required');
            $this->form_validation->set_rules('txtTransactionAlertService', 'Transaction Alert Service', 'trim|required');
            $this->form_validation->set_rules('txtTransactionAlertServicePlus', 'Transaction Alert Service Plus', 'trim|required');
            $this->form_validation->set_rules('txtCreditAssuranceProgramFee', 'Credit Assurance Program Fee', 'trim|required');
            $this->form_validation->set_rules('txtCreditAssuranceProgramFeeRemarks', 'Credit Assurance Program Fee Remarks', 'trim|required');
            $this->form_validation->set_rules('txtMonthlyEStatementFee', 'Monthly E-Statement Fee', 'trim|required');
            $this->form_validation->set_rules('txtChequeBookFee', 'Cheque Book Fee', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPaymentBDT', 'Minimum Payment BDT', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPaymentUSD', 'Minimum Payment USD', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPaymentPercentage', 'Minimum Payment Percentage', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPaymentRemarks', 'Minimum Payment Remarks', 'trim|required');
            $this->form_validation->set_rules('txtChequeReturnFee', 'Cheque Return Fee', 'trim|required');
            $this->form_validation->set_rules('txtDuplicateStatement', 'Duplicate Statement', 'trim|required');
            $this->form_validation->set_rules('txtCardChequeProcessingFee', 'Card Cheque Processing Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardCheckIssuingFee', 'Card Check Issuing Fee', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card Charges Fees";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_fees_charges');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'card_id' => htmlentities($this->input->post('txtCardName')),
                    'basic_card_annual_fee' => htmlentities($this->input->post('txtCardAnnualFee')),
                    'basic_card_annual_fee_plus' => htmlentities($this->input->post('txtCardAnnualFeePlus')),
                    'supplementary_card_annual_fee' => htmlentities($this->input->post('txtSupplementaryFee')),
                    'purchase_fee' => htmlentities($this->input->post('txtPurchaseFee')),
                    'balance_transfer_fee' => htmlentities($this->input->post('txtBalanceTransferFee')),
                    'cash_advance_fee_own_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOwnATM')),
                    'cash_advance_fee_other_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOtherATM')),
                    'cash_advance_fee_other_atm_plus' => htmlentities($this->input->post('txtCashAdvanceFeeOtherATMPlus')),
                    'cash_advance_fee_international_usd' => htmlentities($this->input->post('txtCashAdvanceFeeInternationalUSD')),
                    'cash_advance_fee_international_percentage' => htmlentities($this->input->post('txtCashAdvanceFeeInternationalPercentage')),
                    'cash_advance_fee_international_remarks' => htmlentities($this->input->post('txtCashAdvanceFeeInternationalRemarks')),
                    'late_payment_fee_bdt' => htmlentities($this->input->post('txtLatePaymentFeeBDT')),
                    'late_payment_fee_usd' => htmlentities($this->input->post('txtLatePaymentFeeUSD')),
                    'card_replacement_fee' => htmlentities($this->input->post('txtReplacementFee')),
                    'pin_replacement_fee' => htmlentities($this->input->post('txtPinReplacementFee')),
                    'over_limit_charge_bdt' => htmlentities($this->input->post('txtOverLimitChargeBDT')),
                    'over_limit_charge_usd' => htmlentities($this->input->post('txtOverLimitChargeUSD')),
                    'transaction_alert_service' => htmlentities($this->input->post('txtTransactionAlertService')),
                    'transaction_alert_service_plus' => htmlentities($this->input->post('txtTransactionAlertServicePlus')),
                    'credit_assurance_program_fee' => htmlentities($this->input->post('txtCreditAssuranceProgramFee')),
                    'credit_assurance_program_fee_remarks' => htmlentities($this->input->post('txtCreditAssuranceProgramFeeRemarks')),
                    'monthly_e_statement_fee' => htmlentities($this->input->post('txtMonthlyEStatementFee')),
                    'check_book_fee' => htmlentities($this->input->post('txtChequeBookFee')),
                    'minimum_payment_bdt' => htmlentities($this->input->post('txtMinimumPaymentBDT')),
                    'minimum_payment_usd' => htmlentities($this->input->post('txtMinimumPaymentUSD')),
                    'minimum_payment_percentage' => htmlentities($this->input->post('txtMinimumPaymentPercentage')),
                    'minimum_payment_remarks' => htmlentities($this->input->post('txtMinimumPaymentRemarks')),
                    'cheque_return_fee' => htmlentities($this->input->post('txtChequeReturnFee')),
                    'duplicate_statement' => htmlentities($this->input->post('txtDuplicateStatement')),
                    'card_cheque_processing_fee' => htmlentities($this->input->post('txtCardChequeProcessingFee')),
                    'card_cheque_issuing_fee' => htmlentities($this->input->post('txtCardCheckIssuingFee')),
                    'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id')
                );


                $this->Common_model->table_name = 'card_fees_charges';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_fees_charges/success');
                } else {
                    redirect(base_url().'card/card_fees_charges/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    /*public function edit_card_year_of_experience($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtYearOfExperience', 'Year of Experience ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_year_of_experience');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->common_model->data = array('year_of_experience' => htmlentities($this->input->post('txtYearOfExperience')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->common_model->table_name = 'card_year_of_experience';
                $this->common_model->where = array('id' => $this->input->post('txtYearOfExperienceId'));
                $result = $this->common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_year_of_experience/success');
                } else {
                    redirect(base_url().'card/edit_card_year_of_experience/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }*/

    public function card_info_list(){
        $data['title'] = "Card Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/card_info_list');
        $this->load->view('admin/block/footer');
    }

    public function card_info($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtCardName', ' Card Name', 'trim|required');
            $this->form_validation->set_rules('txtCardType', ' Card Type', 'trim|required');
            $this->form_validation->set_rules('txtCardCategory', ' Credit Card Category', 'trim|required');
            $this->form_validation->set_rules('txtCardIssuer', ' Card Issuer', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinBusiness', '  Income Range MinBusiness', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxBusiness', 'Income Range Max Business', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinSalaried', 'Income Range Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxSalaried', 'Income Range Max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIm[]', ' I am', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMin', ' User Age Min', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxBusiness', 'Credit Limit Max Business', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMinSalaried', 'Credit Limit Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxSalaried', 'Credit Limit max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtSupplementary', 'Supplementary', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceSalaried', 'Year Of Experience Salaried', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceBusiness', 'Year Of Experience Business', 'trim|required');
            $this->form_validation->set_rules('txtCardBenefit[]', 'Card Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtBenefit', 'Card Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMin', 'Interest Free Period Min', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMax', 'Interest Free Period Max', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceRateYearly', 'Cash Advance Interest Rate Yearly', 'trim|required');//Cash Withdraw same as cash advance rate yearly
            $this->form_validation->set_rules('txtAnnualFee', 'Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtAnnualFeeVat', 'Annual Fee Vat', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRate', 'Purchase Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRateMonthly', 'Purchase Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRate', 'Balance Transfer Rate', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRateMonthly', 'Balance Transfer Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceInterestRateMonthly', 'Cash Advance Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceLimit', 'Cash Advance Limit', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleStart', 'Billing Cycle Start', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleEnd', 'Billing Cycle End', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtCardSummary', 'Card Summary', 'trim|required');
            $this->form_validation->set_rules('txtPros', 'Pros', 'trim|required');
            $this->form_validation->set_rules('txtCons', 'Cons', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_info');
                $this->load->view('admin/block/footer');
            }else{

                $upload_result = $this->do_upload('./resource/card/credit_card', 'file');

                $date = date('Y-m-d h:i:s');

                if($this->input->post('isActive') == 'active'){
                    $status = 1;
                }else{
                    $status =0;
                }

                if($this->input->post('txtFeaturedProduct') == 'featured'){
                    $featured = 1;
                }else{
                    $featured =0;
                }

                //------ Convert array into a variable
                $card_user ="";
                foreach($this->input->post('txtIm[]') as $user){
                    $card_user .= $user.',';
                }
                $card_user =substr($card_user,0,-1);//remove last comma
                $card_benifit ="";
                foreach($this->input->post('txtCardBenefit[]') as $benifit){
                    $card_benifit .= $benifit.',';
                }
                $card_benifit =substr($card_benifit,0,-1);
                $this->Common_model->data = array(
                    'bank_id' =>$this->input->post('txtBankName'),
                    'cc_type_id'=> htmlentities($this->input->post('txtCardType')),
                    'card_category'=>htmlentities($this->input->post('txtCreditCardType')),
                    'card_name'=>htmlentities($this->input->post('txtCardName')),
                    'card_image_name'=>htmlentities($upload_result['file_name']),
                    //`card_image_url`,
                    'card_user_id'=>$card_user,
                    'income_range_min_business'=>htmlentities($this->input->post('txtIncomeRangeMinBusiness')),
                    'income_range_min_salaried'=>htmlentities($this->input->post('txtIncomeRangeMinSalaried')),
                    'income_range_max_business'=>htmlentities($this->input->post('txtIncomeRangeMaxBusiness')),
                    'income_range_max_salaried'=>htmlentities($this->input->post('txtIncomeRangeMaxSalaried')),
                    'credit_limit_min_business'=>htmlentities($this->input->post('txtCreditLimitMinBusiness')),
                    'credit_limit_min_salaried'=>htmlentities($this->input->post('txtCreditLimitMinSalaried')),
                    'credit_limit_max_business'=>htmlentities($this->input->post('txtCreditLimitMaxBusiness')),
                    'credit_limit_max_salaried'=>htmlentities($this->input->post('txtCreditLimitMaxSalaried')),
                    'age_limit_min'=>htmlentities($this->input->post('txtUserAgeMin')),
                    'age_limit_max'=>htmlentities($this->input->post('txtUserAgeMax')),
                    'experience_salaried'=>htmlentities($this->input->post('txtYearOfExperienceSalaried')),
                    'experience_business'=> htmlentities($this->input->post('txtYearOfExperienceBusiness')),
                    'cc_issuer_id'=> htmlentities($this->input->post('txtCardIssuer')),
                    'card_benifit_id'=>$card_benifit,
                    'benefit_details'=>htmlentities($this->input->post('txtBenefit')),
                    'interest_free_period_min'=> htmlentities($this->input->post('txtInterestFreePeriodMin')),
                    'interest_free_pefiod_max'=> htmlentities($this->input->post('txtInterestFreePeriodMax')),
                    'card_summary'=>$this->input->post('txtCardSummary'),
                    'pros'=>$this->input->post('txtPros'),
                    'cons'=>$this->input->post('txtCons'),
                    'review'=>$this->input->post('txtReview'),
                    'annual_fee'=>$this->input->post('txtAnnualFee'),
                    'annual_fee_vat'=>$this->input->post('txtAnnualFeeVat'),
                    'supplimentary'=>$this->input->post('txtSupplementary'),
                    'billing_cycle_start'=>$this->input->post('txtBillingCycleStart'),
                    'billing_cycle_end'=>$this->input->post('txtBillingCycleEnd'),
                    'eligibility'=>$this->input->post('txtEligibility'),
                    'purchase_interest_rate'=>$this->input->post('txtPurchaseInterestRate'),
                    'purchase_interest_rate_monthly'=> htmlentities($this->input->post('txtPurchaseInterestRateMonthly')),
                    'balance_transfer_rate'=> htmlentities($this->input->post('txtBalanceTransferRate')),
                    'balance_transfer_rate_monthly'=> htmlentities($this->input->post('txtBalanceTransferRateMonthly')),
                    'cash_advance_interest_rate_yearly'=> htmlentities($this->input->post('txtCashAdvanceRateYearly')),
                    'cash_advance_interest_rate'=> htmlentities($this->input->post('txtCashAdvanceInterestRateMonthly')),
                    'cash_advance_limit'=> htmlentities($this->input->post('txtCashAdvanceLimit')),
                    'featured'=> $featured,
                    'status'=> $status,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'card_card_informations';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'card/card_info/success');
                } else {
                    redirect(base_url().'card/card_info/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_card_info($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtCardName', ' Card Name', 'trim|required');
            $this->form_validation->set_rules('txtCardType', ' Card Type', 'trim|required');
            $this->form_validation->set_rules('txtCreditCardType', ' Credit Card Type', 'trim|required');
            $this->form_validation->set_rules('txtCardIssuer', ' Card Issuer', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinBusiness', '  Income Range MinBusiness', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxBusiness', 'Income Range Max Business', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinSalaried', 'Income Range Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxSalaried', 'Income Range Max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIm[]', ' I am', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMin', ' User Age Min', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxBusiness', 'Credit Limit Max Business', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMinSalaried', 'Credit Limit Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxSalaried', 'Credit Limit max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtSupplementary', 'Supplementary', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceMin', 'Year Of Experience Min', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceMax', 'Year Of Experience Max', 'trim|required');
            $this->form_validation->set_rules('txtCardBenefit[]', 'Card Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMin', 'Interest Free Period Min', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMax', 'Interest Free Period Max', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceRateYearly', 'Cash Advance Interest Rate Yearly', 'trim|required');//Cash Withdraw same as cash advance rate yearly
            $this->form_validation->set_rules('txtAnnualFee', 'Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtAnnualFeeVat', 'Annual Fee Vat', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRate', 'Purchase Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRateMonthly', 'Purchase Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRate', 'Balance Transfer Rate', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRateMonthly', 'Balance Transfer Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceInterestRateMonthly', 'Cash Advance Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceLimit', 'Cash Advance Limit', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleStart', 'Billing Cycle Start', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleEnd', 'Billing Cycle End', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtCardSummary', 'Card Summary', 'trim|required');
            $this->form_validation->set_rules('txtPros', 'Pros', 'trim|required');
            $this->form_validation->set_rules('txtCons', 'Cons', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');


            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_card_info');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('year_of_experience' => htmlentities($this->input->post('txtYearOfExperience')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'card_year_of_experience';
                $this->Common_model->where = array('id' => $this->input->post('txtYearOfExperienceId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'card/edit_card_info/success');
                } else {
                    redirect(base_url().'card/edit_card_info/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function get_card_name(){

        $id = $this->input->post('id');
       // echo $id;die;
        $response = $this->Select_model->select_card_name($id);
        echo $response;
    }

    public function get_credit_card(){
        //return    $_POST['data'];


                $card = $this->Front_end_select_model->select_card_info();
                $credit_card='';
                foreach($card->result() as $row){

                    $length = strlen($row->card_summary);
                    $summary='';
                    if($length > 250){
                        $rest = substr($row->card_summary, 0,250);
                        $summary = $rest.'<a href="'.base_url().'en/card_details">read more..</a>';
                    }else{
                        $summary = $row->card_summary;
                    }
                    $credit_card .='<div class="full-card" >
                    <div class="row card_right_bar no-margin-lr">
                        <div class="col-sm-3 col-xs-3">

                            <img class="img-responsive" src="'.base_url().'resource/card/credit_card/'.$row->card_image_name.'" />
                            <img class="btnCardApply img-responsive" src="'.base_url().'resource/front_end/images/BtnCard_apply.png" />
                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                            <span class="more_info_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
                            <span class="more_info_icon"><button class="displayText"  data-card_id="<?php echo $row->id;?>"><i class="fa fa-info-circle"></i> More info</button></span>
                        </div>

                        <div class="col-sm-9 col-xs-9">
                            <div class="row">
                                <div class="col-sm-9 col-xs-9">
                                    <div class="card_text1">
                                        <b>'.$row->bank_name.' '.$row->card_name.'</b>
                                        <p class="card_description">
                                            '.$summary.'
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-3">
                                    <div class="card_text1 card_btn_apllication">
                                        <img class="img-responsive" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2 col-xs-2 w20">
                                    <div class="card_text2">
                                        <h5>Purchase Interest Rate</h5>
                                        <p>'.$row->purchase_interest_rate.'%,<br> Monthly '.$row->purchase_interest_rate_monthly.'%</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 w20">
                                    <div class="card_text2">
                                        <h5>Balance Transfer Interest Rate</h5>
                                        <p>'.$row->balance_transfer_rate.'%,<br> Monthly '.$row->balance_transfer_rate_monthly.'%</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 w20">
                                    <div class="card_text2">
                                        <h5>Cash Advance Interest Rate</h5>
                                        <p>'.$row->cash_advance_interest_rate_yearly.'%,<br> Monthly '.$row->cash_advance_interest_rate.' %</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 w20">
                                    <div class="card_text2">
                                        <h5>Cash Advance Limit</h5>
                                        <p>'.$row->cash_advance_limit.'%</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-1 w20">
                                    <div class="card_text2">
                                        <h5>Annual Fee</h5>
                                        <p>BDT '.$row->annual_fee.'% +'.$row->annual_fee_vat.'</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <!-- More Info Tab content start -->
                    <div class="col-sm-12 card_more_info">
                    <div id="toggleText'.$row->id.'" style="display: none">
                    <section id="tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#ProsCons" aria-controls="home" role="tab" data-toggle="tab">Pros & cons</a></li>
                        <li role="presentation"><a href="#Review" aria-controls="profile" role="tab" data-toggle="tab">Review</a></li>
                        <li role="presentation"><a href="#UserReviews" aria-controls="messages" role="tab" data-toggle="tab">User reviews</a></li>
                        <li role="presentation"><a href="#Basics" aria-controls="settings" role="tab" data-toggle="tab">Basics</a></li>
                        <li role="presentation"><a href="#FeesCharges" aria-controls="settings" role="tab" data-toggle="tab">Fees & Charges </a></li>
                        <li role="presentation"><a href="#Rates" aria-controls="settings" role="tab" data-toggle="tab">Rates</a></li>
                        <li role="presentation"><a href="#Benefits" aria-controls="settings" role="tab" data-toggle="tab">Benefits</a></li>
                        <li role="presentation"><a href="#Eligibility" aria-controls="settings" role="tab" data-toggle="tab">Eligibility</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="ProsCons">
                            <h3>Pros & cons</h3>
                            <div class="col-sm-6">
                                <div class="tab_body">
                                    <h4>Whats good?</h4>
                                    <hr/>
                                    '.$row->pros.'
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tab_body">
                                    <h4>Whats not so good?</h4>
                                    <hr/>
                                    <ul>
                                        <li>	Monthly fee 10 taka+vat for sms service & transaction alert.</li>
                                        <li>	0.35 paisa for every 100/= taka will be deducted for insurance program.</li>
                                        <li>	Out of 18    transactions, there must be 10 POS transaction to get waiver on annual fee.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pull-right">
                                <img src="'. base_url().'esource/front_end/images/card_btn_apllication.png" />
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Review">
                            <h3>Our review of the NAB Low Rate Card</h3>
                            <div class="col-sm-12">
                                <div class="tab_body">
                                    <h4>Review</h4>
                                    <hr/>
                                    '.$row->review.'
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="UserReviews">
                            1914 translation by H. Rackham<br/>
                            "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Basics">
                            <section id="card_details_basic">
                                <div class="card_details_pronsCons">
                                    <h4>Basics</h4>
                                    <div class="prosConsHr"></div>
                                    <div class="prosCons_body">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>Minimum Income</td>
                                                <td>BDT '. $row->income_range_min_salaried.' and '.$row->income_range_min_business.' (both salaried & self-employed)</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Age</td>

                                                <td>'.$row->age_limit_min.' Years</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Credit</td>
                                                <td>'.$row->credit_limit_min_salaried.'</td>
                                            </tr>
                                            <tr>
                                                <td>Maximum Credit</td>
                                                <td>'.$row->credit_limit_max_salaried.'</td>
                                            </tr>
                                            <tr>
                                                <td>Year of Experience on Earning</td>
                                                <td>Latest '.$row->experience_salaried.' months’ bank statement for salaried person Latest '.$row->experience_business.'ear bank statement for business person</td>
                                            </tr>
                                            <tr>
                                                <td>Maximum Interest Free Days</td>
                                                <td>'.$row->interest_free_pefiod_max.'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Use</td>
                                                <td>'.$row->cc_card_type.'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Issuer</td>
                                                <td>'.$row->card_issuer_name.'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Type</td>
                                                <td>'.$row->card_type_name.'</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="FeesCharges">
                            <section id="card_details_FeesCharges">
                                <div class="card_details_pronsCons">
                                    <h4>Fees & Charges</h4>
                                    <div class="prosConsHr"></div><br/>
                                    <div class="prosCons_body2">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>Basic Card Annual Fee</td>
                                                <td>BDT '.$row->basic_card_annual_fee.' + '.$row->basic_card_annual_fee_plus.'</td>
                                            </tr>
                                            <tr>
                                                <td>Supplementary Card Annual Fee</td>
                                                <td>'.$row->supplementary_card_annual_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Purchase Fee</td>
                                                <td>'.$row->purchase_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Balance Transfer Fee</td>
                                                <td>'.$row->balance_transfer_fee.' %</td>
                                            </tr>
                                            <tr>
                                                <td>Cash Advance Fee
                                                    <ul>
                                                        <li>From own ATM</li>
                                                        <li>From other bank ATM</li>
                                                        <li>International</li>
                                                    </ul>
                                                </td>
                                                <td><br/>
                                                    <ul>
                                                        <li>'.$row->cash_advance_fee_own_atm.' %</li>
                                                        <li>'.$row->cash_advance_fee_other_atm.'% + '.$row->cash_advance_fee_other_atm_plus.'</li>
                                                        <li>USD '.$row->cash_advance_fee_international_usd.' or '.$row->cash_advance_fee_international_percentage.'% '. $row->cash_advance_fee_international_remarks.'</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Late Payment Fee</td>
                                                <td>BDT '.$row->late_payment_fee_bdt.'or USD '.$row->late_payment_fee_usd.'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Replacement Fee</td>
                                                <td>BDT '. $row->card_replacement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Pin Replacement Fee</td>
                                                <td>BDT '.$row->pin_replacement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Over limit Charge</td>
                                                <td>BDT '.$row->over_limit_charge_bdt.'r USD '. $row->over_limit_charge_usd.'</td>
                                            </tr>
                                            <tr>
                                                <td>Transaction Alert Service</td>
                                                <td>BDT '.$row->transaction_alert_service.' + '. $row->transaction_alert_service_plus.'</td>
                                            </tr>
                                            <tr>
                                                <td>Credit Assurance Program Fee</td>
                                                <td>'.$row->credit_assurance_program_fee.' '. $row->credit_assurance_program_fee_remarks.'/td>
                                            </tr>
                                            <tr>
                                                <td>Monthly E-Statement Fee</td>
                                                <td>BDT '.$row->monthly_e_statement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Cheque Book Fee</td>
                                                <td>'.$row->check_book_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Payment</td>
                                                <td>BDT '.$row->minimum_payment_bdt.'or USD '.$row->minimum_payment_usd.' or '.$row->minimum_payment_percentage.' '.$row->minimum_payment_remarks.'</td>
                                            </tr>
                                            <tr>
                                                <td>Cheque Return Fee</td>
                                                <td>'.$row->cheque_return_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Duplicate Statement</td>
                                                <td><?php echo $row->duplicate_statement;?></td>
                                            </tr>
                                            <tr>
                                                <td>Card Cheque Processing Fee</td>
                                                <td>'.$row->card_cheque_processing_fee.'%</td>
                                            </tr>
                                            <tr>
                                                <td>Card Cheque Issuing Fee</td>
                                                <td>'.$row->card_cheque_issuing_fee.'</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </section>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="Rates">...</div>
                        <div role="tabpanel" class="tab-pane" id="Benefits">...</div>
                        <div role="tabpanel" class="tab-pane" id="Eligibility">
                           '.$row->eligibility.'
                        </div>
                    </div>
                    </section>
                    </div>
                    </div>
                    <!-- More Info Tab content end -->
                    </div>

               ';
                }
        return $credit_card;

    }



}