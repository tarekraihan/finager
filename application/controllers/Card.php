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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBank', 'Bank Name ', 'trim|required');

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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
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
                $result = $this->common_model->insert();

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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardType', 'Card Type', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_type_name' => $this->input->post('txtCardType'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardType', 'Card Type ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Card Limit";
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardUser', 'Card User', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('card_user' => $this->input->post('txtCardUser'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCardUser', 'Card User ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Card Limit";
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCreditCardType', 'Credit Card Type', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Card Limit";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('cc_card_type' => $this->input->post('txtCreditCardType'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtCreditCardType', 'Credit Card Type ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Edit Card Limit";
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
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
                $this->Common_model->data = array('reward_name' => $this->input->post('txtCardReward'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
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
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/card_fees_charges');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'card_id' => $this->input->post('txtCardName'),
                    'basic_card_annual_fee' => $this->input->post('txtCardAnnualFee'),
                    'basic_card_annual_fee_plus' => $this->input->post('txtCardAnnualFeePlus'),
                    'supplementary_card_annual_fee' => $this->input->post('txtSupplementaryFee'),
                    'purchase_fee' => $this->input->post('txtPurchaseFee'),
                    'balance_transfer_fee' => $this->input->post('txtBalanceTransferFee'),
                    'cash_advance_fee_own_atm' => $this->input->post('txtCashAdvanceFeeOwnATM'),
                    'cash_advance_fee_other_atm' => $this->input->post('txtCashAdvanceFeeOtherATM'),
                    'cash_advance_fee_other_atm_plus' => $this->input->post('txtCashAdvanceFeeOtherATMPlus'),
                    'cash_advance_fee_international_usd' => $this->input->post('txtCashAdvanceFeeInternationalUSD'),
                    'cash_advance_fee_international_percentage' => $this->input->post('txtCashAdvanceFeeInternationalPercentage'),
                    'cash_advance_fee_international_remarks' => $this->input->post('txtCashAdvanceFeeInternationalRemarks'),
                    'late_payment_fee_bdt' => $this->input->post('txtLatePaymentFeeBDT'),
                    'late_payment_fee_usd' => $this->input->post('txtLatePaymentFeeUSD'),
                    'card_replacement_fee' => $this->input->post('txtReplacementFee'),
                    'pin_replacement_fee' => $this->input->post('txtPinReplacementFee'),
                    'over_limit_charge_bdt' => $this->input->post('txtOverLimitChargeBDT'),
                    'over_limit_charge_usd' => $this->input->post('txtOverLimitChargeUSD'),
                    'transaction_alert_service' => $this->input->post('txtTransactionAlertService'),
                    'transaction_alert_service_plus' => $this->input->post('txtTransactionAlertServicePlus'),
                    'credit_assurance_program_fee' => $this->input->post('txtCreditAssuranceProgramFee'),
                    'credit_assurance_program_fee_remarks' => $this->input->post('txtCreditAssuranceProgramFeeRemarks'),
                    'monthly_e_statement_fee' => $this->input->post('txtMonthlyEStatementFee'),
                    'check_book_fee' => $this->input->post('txtChequeBookFee'),
                    'minimum_payment_bdt' => $this->input->post('txtMinimumPaymentBDT'),
                    'minimum_payment_usd' => $this->input->post('txtMinimumPaymentUSD'),
                    'minimum_payment_percentage' => $this->input->post('txtMinimumPaymentPercentage'),
                    'minimum_payment_remarks' => $this->input->post('txtMinimumPaymentRemarks'),
                    'cheque_return_fee' => $this->input->post('txtChequeReturnFee'),
                    'duplicate_statement' => $this->input->post('txtDuplicateStatement'),
                    'card_cheque_processing_fee' => $this->input->post('txtCardChequeProcessingFee'),
                    'card_cheque_issuing_fee' => $this->input->post('txtCardCheckIssuingFee'),
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
        $data['title'] = "Card-Income Range";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/card_info_list');
        $this->load->view('admin/block/footer');
    }

    public function card_info($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
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
            $this->form_validation->set_rules('txtYearOfExperienceSalaried', 'Year Of Experience Salaried', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceBusiness', 'Year Of Experience Business', 'trim|required');
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
                    'cc_type_id'=>$this->input->post('txtCardType'),
                    'card_category'=>$this->input->post('txtCreditCardType'),
                    'card_name'=>$this->input->post('txtCardName'),
                    'card_image_name'=>$upload_result['file_name'],
                    //`card_image_url`,
                    'card_user_id'=>$card_user,
                    'income_range_min_business'=>$this->input->post('txtIncomeRangeMinBusiness'),
                    'income_range_min_salaried'=>$this->input->post('txtIncomeRangeMinSalaried'),
                    'income_range_max_business'=>$this->input->post('txtIncomeRangeMaxBusiness'),
                    'income_range_max_salaried'=>$this->input->post('txtIncomeRangeMaxSalaried'),
                    'credit_limit_min_business'=>$this->input->post('txtCreditLimitMinBusiness'),
                    'credit_limit_min_salaried'=>$this->input->post('txtCreditLimitMinSalaried'),
                    'credit_limit_max_business'=>$this->input->post('txtCreditLimitMaxBusiness'),
                    'credit_limit_max_salaried'=>$this->input->post('txtCreditLimitMaxSalaried'),
                    'age_limit_min'=>$this->input->post('txtUserAgeMin'),
                    'age_limit_max'=>$this->input->post('txtUserAgeMax'),
                    'experience_salaried'=>$this->input->post('txtYearOfExperienceSalaried'),
                    'experience_business'=> $this->input->post('txtYearOfExperienceBusiness'),
                    'cc_issuer_id'=>$this->input->post('txtCardIssuer'),
                    'card_benifit_id'=>$card_benifit,
                    'interest_free_period_min'=>$this->input->post('txtInterestFreePeriodMin'),
                    'interest_free_pefiod_max'=>$this->input->post('txtInterestFreePeriodMax'),
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
                    'purchase_interest_rate_monthly'=>$this->input->post('txtPurchaseInterestRateMonthly'),
                    'balance_transfer_rate'=>$this->input->post('txtBalanceTransferRate'),
                    'balance_transfer_rate_monthly'=>$this->input->post('txtBalanceTransferRateMonthly'),
                    'cash_advance_interest_rate_yearly'=>$this->input->post('txtCashAdvanceRateYearly'),
                    'cash_advance_interest_rate'=>$this->input->post('txtCashAdvanceInterestRateMonthly'),
                    'cash_advance_limit'=>$this->input->post('txtCashAdvanceLimit'),
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
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
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



}