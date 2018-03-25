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

    public function __construct() {
        parent:: __construct();
        $this->load->library("pagination");
    }


    public function bank($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBank', 'Bank Name ', 'trim|required|is_unique[card_bank.bank_name]');

//            $this->form_validation->set_rules('file', 'Bank Logo ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Add Bank";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/bank');
                $this->load->view('admin/block/footer');
            }else{
                $upload_result = $this->do_upload('./resource/common_images/bank_logo', 'file');
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_name' => $this->input->post('txtBank'),
                    'bank_logo'=>htmlentities($upload_result['file_name']),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
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
                $this->load->view('admin/credit_card/edit_bank');
                $this->load->view('admin/block/footer');
            }else{
                $upload_result = $this->do_upload('./resource/common_images/bank_logo', 'file');
                if(htmlentities($upload_result['file_name']) != "&lt;"){
                    $this->Common_model->data = array(
                        'bank_name' => htmlentities($this->input->post('txtBank')),
                        'modified_by'=>$this->session->userdata('admin_user_id'),
                        'bank_logo'=>htmlentities($upload_result['file_name'])
                    );

                }else{
                    $this->Common_model->data = array(
                        'bank_name' => htmlentities($this->input->post('txtBank')),
                        'modified_by'=>$this->session->userdata('admin_user_id')
                    );
                }

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
                $this->load->view('admin/credit_card/card_issuer');
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
                $this->load->view('admin/credit_card/edit_card_issuer');
                $this->load->view('admin/block/footer');
            }else{
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
                $this->load->view('admin/credit_card/card_type');
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
                $this->load->view('admin/credit_card/edit_card_type');
                $this->load->view('admin/block/footer');
            }else{
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
                $this->load->view('admin/credit_card/card_user');
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
                $this->load->view('admin/credit_card/edit_card_user');
                $this->load->view('admin/block/footer');
            }else{

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
                $this->load->view('admin/credit_card/credit_card_type');
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
                $this->load->view('admin/credit_card/edit_credit_card_type');
                $this->load->view('admin/block/footer');
            }else{
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
                $this->load->view('admin/credit_card/card_reward');
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
                $this->load->view('admin/credit_card/edit_card_reward');
                $this->load->view('admin/block/footer');
            }else{
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
            $this->form_validation->set_rules('txtCardName', 'Card Name', 'trim|required|is_unique[card_fees_charges.card_id]');
            $this->form_validation->set_rules('txtCardAnnualFee', 'Card Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtSupplementaryFee', ' Supplementary Fee', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseFee', 'Purchase Fee', 'trim');
            $this->form_validation->set_rules('txtBalanceTransferFee', 'Balance Transfer Fee', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOwnATM', 'Cash Advance Fee Own ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOtherATM', 'Cash Advance Fee Other ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeInternational', 'Cash Advance Fee International ', 'trim|required');
            $this->form_validation->set_rules('txtLatePaymentFee', 'Late Payment Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardReplacementFee', 'Card Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtPinReplacementFee', 'Pin Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtOverLimitCharge', 'Over Limit Charge', 'trim|required');
            $this->form_validation->set_rules('txtTransactionAlertService', 'Transaction Alert Service', 'trim|required');
            $this->form_validation->set_rules('txtCreditAssuranceProgramFee', 'Credit Assurance Program Fee', 'trim|required');
            $this->form_validation->set_rules('txtMonthlyEStatementFee', 'Monthly E-Statement Fee', 'trim|required');
            $this->form_validation->set_rules('txtChequeBookFee', 'Cheque Book Fee', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPayment', 'Minimum Payment', 'trim|required');
            $this->form_validation->set_rules('txtChequeReturnFee', 'Cheque Return Fee', 'trim|required');
            $this->form_validation->set_rules('txtDuplicateStatement', 'Duplicate Statement', 'trim|required');
            $this->form_validation->set_rules('txtCardChequeProcessingFee', 'Card Cheque Processing Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardCheckIssuingFee', 'Card Check Issuing Fee', 'trim|required');
            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card Charges Fees";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/card_fees_charges');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'card_id' => htmlentities($this->input->post('txtCardName')),
                    'basic_card_annual_fee' => htmlentities($this->input->post('txtCardAnnualFee')),
                    'supplementary_card_annual_fee' => htmlentities($this->input->post('txtSupplementaryFee')),
                    'purchase_fee' => htmlentities($this->input->post('txtPurchaseFee')),
                    'balance_transfer_fee' => htmlentities($this->input->post('txtBalanceTransferFee')),
                    'cash_advance_fee_own_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOwnATM')),
                    'cash_advance_fee_other_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOtherATM')),
                    'cash_advance_fee_international' => htmlentities($this->input->post('txtCashAdvanceFeeInternational')),
                    'late_payment_fee' => htmlentities($this->input->post('txtLatePaymentFee')),
                    'card_replacement_fee' => htmlentities($this->input->post('txtCardReplacementFee')),
                    'pin_replacement_fee' => htmlentities($this->input->post('txtPinReplacementFee')),
                    'over_limit_charge' => htmlentities($this->input->post('txtOverLimitCharge')),
                    'transaction_alert_service' => htmlentities($this->input->post('txtTransactionAlertService')),
                    'credit_assurance_program_fee' => htmlentities($this->input->post('txtCreditAssuranceProgramFee')),
                    'monthly_e_statement_fee' => htmlentities($this->input->post('txtMonthlyEStatementFee')),
                    'check_book_fee' => htmlentities($this->input->post('txtChequeBookFee')),
                    'minimum_payment' => htmlentities($this->input->post('txtMinimumPayment')),
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

    public function edit_fees_charges($msg=''){
        if ($this->session->userdata('email_address')) {
           if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtCardAnnualFee', 'Card Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtSupplementaryFee', ' Supplementary Fee', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseFee', 'Purchase Fee', 'trim');
            $this->form_validation->set_rules('txtBalanceTransferFee', 'Balance Transfer Fee', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOwnATM', 'Cash Advance Fee Own ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeOtherATM', 'Cash Advance Fee Other ATM', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceFeeInternational', 'Cash Advance Fee International ', 'trim|required');
            $this->form_validation->set_rules('txtLatePaymentFee', 'Late Payment Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardReplacementFee', 'Card Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtPinReplacementFee', 'Pin Replacement Fee', 'trim|required');
            $this->form_validation->set_rules('txtOverLimitCharge', 'Over Limit Charge', 'trim|required');
            $this->form_validation->set_rules('txtTransactionAlertService', 'Transaction Alert Service', 'trim|required');
            $this->form_validation->set_rules('txtCreditAssuranceProgramFee', 'Credit Assurance Program Fee', 'trim|required');
            $this->form_validation->set_rules('txtMonthlyEStatementFee', 'Monthly E-Statement Fee', 'trim|required');
            $this->form_validation->set_rules('txtChequeBookFee', 'Cheque Book Fee', 'trim|required');
            $this->form_validation->set_rules('txtMinimumPayment', 'Minimum Payment', 'trim|required');
            $this->form_validation->set_rules('txtChequeReturnFee', 'Cheque Return Fee', 'trim|required');
            $this->form_validation->set_rules('txtDuplicateStatement', 'Duplicate Statement', 'trim|required');
            $this->form_validation->set_rules('txtCardChequeProcessingFee', 'Card Cheque Processing Fee', 'trim|required');
            $this->form_validation->set_rules('txtCardCheckIssuingFee', 'Card Check Issuing Fee', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card Charges Fees";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/edit_fees_charges');
                $this->load->view('admin/block/footer');

            }else{
                $this->Common_model->data = array(
                    'basic_card_annual_fee' => htmlentities($this->input->post('txtCardAnnualFee')),
                    'supplementary_card_annual_fee' => htmlentities($this->input->post('txtSupplementaryFee')),
                    'purchase_fee' => htmlentities($this->input->post('txtPurchaseFee')),
                    'balance_transfer_fee' => htmlentities($this->input->post('txtBalanceTransferFee')),
                    'cash_advance_fee_own_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOwnATM')),
                    'cash_advance_fee_other_atm' => htmlentities($this->input->post('txtCashAdvanceFeeOtherATM')),
                    'cash_advance_fee_international' => htmlentities($this->input->post('txtCashAdvanceFeeInternational')),
                    'late_payment_fee' => htmlentities($this->input->post('txtLatePaymentFee')),
                    'card_replacement_fee' => htmlentities($this->input->post('txtCardReplacementFee')),
                    'pin_replacement_fee' => htmlentities($this->input->post('txtPinReplacementFee')),
                    'over_limit_charge' => htmlentities($this->input->post('txtOverLimitCharge')),
                    'transaction_alert_service' => htmlentities($this->input->post('txtTransactionAlertService')),
                    'credit_assurance_program_fee' => htmlentities($this->input->post('txtCreditAssuranceProgramFee')),
                    'monthly_e_statement_fee' => htmlentities($this->input->post('txtMonthlyEStatementFee')),
                    'check_book_fee' => htmlentities($this->input->post('txtChequeBookFee')),
                    'minimum_payment' => htmlentities($this->input->post('txtMinimumPayment')),
                    'cheque_return_fee' => htmlentities($this->input->post('txtChequeReturnFee')),
                    'duplicate_statement' => htmlentities($this->input->post('txtDuplicateStatement')),
                    'card_cheque_processing_fee' => htmlentities($this->input->post('txtCardChequeProcessingFee')),
                    'card_cheque_issuing_fee' => htmlentities($this->input->post('txtCardCheckIssuingFee')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'card_fees_charges';
                $this->Common_model->where = array('id'=>$this->input->post('txtFeesChargesId'));
                $result = $this->Common_model->update();
                if ($result) {
                    redirect(base_url().'card/edit_fees_charges/success');
                } else {
                    redirect(base_url().'card/edit_fees_charges/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function card_info_list(){
        $data['title'] = "Card Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/credit_card/card_info_list');
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
            $this->form_validation->set_rules('txtCreditCardType', ' Credit Card Category', 'trim|required');
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
            $this->form_validation->set_rules('txtYearOfExperienceSalaried', 'Experience Salaried', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceBusiness', 'Experience Business', 'trim|required');
            $this->form_validation->set_rules('txtCardBenefit[]', 'Card Rewards ', 'trim|required');
            $this->form_validation->set_rules('txtBenefit', 'Card Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMin', 'Interest Free Period Min', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMax', 'Interest Free Period Max', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceRateYearly', 'Cash Advance Interest Rate Yearly', 'trim|required');                //Cash Withdraw same as cash advance rate yearly
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
            $this->form_validation->set_rules('txtBalanceTransferLimit', 'Balance Transfer limit', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtCardSummary', 'Card Summary', 'trim|required');
            $this->form_validation->set_rules('txtPros', 'Pros', 'trim|required');
            $this->form_validation->set_rules('txtCons', 'Cons', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/card_info');
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

                    'card_type_id'=> htmlentities($this->input->post('txtCardType')),

                    'cc_type_id'=>htmlentities($this->input->post('txtCreditCardType')),

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

                    'benifit_details'=>$this->input->post('txtBenefit'),

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

                    'balance_transfer_limit'=> htmlentities($this->input->post('txtBalanceTransferLimit')),

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

                $last_insert_id = $this->Common_model->insert();



                foreach($this->input->post('txtIm[]') as $user){

                    $this->Common_model->data = array(

                        'card_info_id'=>$last_insert_id,

                        'card_user_id'=> $user,

                        'created' => $date

                    );

                    $this->Common_model->table_name = 'card_info_card_user';

                    $this->Common_model->insert();

                }



                $result='';

                foreach($this->input->post('txtCardBenefit[]') as $benefit){

                    $this->Common_model->data = array(

                        'card_info_id'=>$last_insert_id,

                        'card_reward_id'=> $benefit,

                        'created' => $date ,

                    );

                    $this->Common_model->table_name = 'card_info_card_reward';

                    $result = $this->Common_model->insert();

                }

                //echo $result;



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

    public function edit_card_info($msg=''){
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
            $this->form_validation->set_rules('txtSupplementary', 'Supplementary Card', 'trim|required');
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
            $this->form_validation->set_rules('txtBalanceTransferLimit', 'Balance Transfer Limit', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRateMonthly', 'Balance Transfer Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceInterestRateMonthly', 'Cash Advance Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceLimit', 'Cash Advance Limit', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleStart', 'Billing Cycle Start', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleEnd', 'Billing Cycle End', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtCardSummary', 'Card Summary', 'trim|required');
            $this->form_validation->set_rules('txtBenefit', 'Benefit', 'trim|required');
            $this->form_validation->set_rules('txtPros', 'Pros', 'trim|required');
            $this->form_validation->set_rules('txtCons', 'Cons', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');


            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/edit_card_info');
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
                /*foreach($this->input->post('txtIm[]') as $user){
                    $card_user .= $user.',';
                }
                $card_user =substr($card_user,0,-1);//remove last comma*/
                $card_benifit ="";
               /* foreach($this->input->post('txtCardBenefit[]') as $benifit){
                    $card_benifit .= $benifit.',';
                }
                $card_benifit =substr($card_benifit,0,-1);*/

                if(htmlentities($upload_result['file_name']) != "&lt;"){
                    $this->Common_model->data = array(
                        'bank_id' =>$this->input->post('txtBankName'),
                        'card_type_id'=> htmlentities($this->input->post('txtCardType')),
                        'cc_type_id'=>htmlentities($this->input->post('txtCreditCardType')),
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
                        'benifit_details'=>$this->input->post('txtBenefit'),
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
                        'balance_transfer_limit'=> htmlentities($this->input->post('txtBalanceTransferLimit')),
                        'balance_transfer_rate_monthly'=> htmlentities($this->input->post('txtBalanceTransferRateMonthly')),
                        'cash_advance_interest_rate_yearly'=> htmlentities($this->input->post('txtCashAdvanceRateYearly')),
                        'cash_advance_interest_rate'=> htmlentities($this->input->post('txtCashAdvanceInterestRateMonthly')),
                        'cash_advance_limit'=> htmlentities($this->input->post('txtCashAdvanceLimit')),
                        'featured'=> $featured,
                        'status'=> $status,
                        'modified_by'=>$this->session->userdata('admin_user_id')
                    );
                }else{
                    $this->Common_model->data = array(
                        'bank_id' =>$this->input->post('txtBankName'),
                        'card_type_id'=> htmlentities($this->input->post('txtCardType')),
                        'cc_type_id'=>htmlentities($this->input->post('txtCreditCardType')),
                        'card_name'=>htmlentities($this->input->post('txtCardName')),
//                        'card_image_name'=>htmlentities($upload_result['file_name']),
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
                        'benifit_details'=>$this->input->post('txtBenefit'),
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
                        'balance_transfer_limit'=> htmlentities($this->input->post('txtBalanceTransferLimit')),
                        'balance_transfer_rate_monthly'=> htmlentities($this->input->post('txtBalanceTransferRateMonthly')),
                        'cash_advance_interest_rate_yearly'=> htmlentities($this->input->post('txtCashAdvanceRateYearly')),
                        'cash_advance_interest_rate'=> htmlentities($this->input->post('txtCashAdvanceInterestRateMonthly')),
                        'cash_advance_limit'=> htmlentities($this->input->post('txtCashAdvanceLimit')),
                        'featured'=> $featured,
                        'status'=> $status,
                        'modified_by'=>$this->session->userdata('admin_user_id')
                    );
                }
                $this->Common_model->table_name = 'card_card_informations';
                $this->Common_model->where = array('id' => $this->input->post('txtCardId'));
                $last_insert_id = $this->Common_model->update();
                // delete row from card_info_card_user
                $id=$this->input->post('txtCardId');
                $table='card_info_card_user';
                $id_field='card_info_id';
                $this->Delete_model->Delete_All_Row($id,$table,$id_field);
//                die;
                foreach($this->input->post('txtIm[]') as $user){
                    $this->Common_model->data = array(
                        'card_info_id'=>$this->input->post('txtCardId'),
                        'card_user_id'=> $user,
                        'created' => $date
                    );
                    $this->Common_model->table_name = 'card_info_card_user';
                    $this->Common_model->insert();
                }
                // delete row from card_info_card_reward
                $id=$this->input->post('txtCardId');
                $table='card_info_card_reward';
                $id_field='card_info_id';
                $this->Delete_model->Delete_All_Row($id,$table,$id_field);
                $result='';
                foreach($this->input->post('txtCardBenefit[]') as $benefit){
                    $this->Common_model->data = array(
                        'card_info_id'=>$this->input->post('txtCardId'),
                        'card_reward_id'=> $benefit,
                        'created' => $date ,
                    );
                    $this->Common_model->table_name = 'card_info_card_reward';
                    $result = $this->Common_model->insert();
                }
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
        $response = $this->Select_model->select_card_name($id);
        echo $response;
    }

    public function ajax_get_credit_card(){
        $card_user = (!empty($this->input->post('card_user'))) ? $this->input->post('card_user') : '';
        $income_range = (!empty($this->input->post('income_range'))) ? $this->input->post('income_range') : '';
        $credit_limit = (!empty($this->input->post('credit_limit'))) ? $this->input->post('credit_limit') : '';
        $feature_benefits = (!empty($this->input->post('feature_benefits'))) ? $this->input->post('feature_benefits') : '';
        $credit_card_type = (!empty($this->input->post('credit_card_type'))) ? $this->input->post('credit_card_type') : '';
        $max_interest_free_period = (!empty($this->input->post('max_interest_free_period'))) ? $this->input->post('max_interest_free_period') : '';
        $card_type = (!empty($this->input->post('card_type'))) ? $this->input->post('card_type') : '';
        $card_issuer = (!empty($this->input->post('card_issuer'))) ? $this->input->post('card_issuer') : '';
        $credit_card_bank_ids = (!empty( $this->input->post('credit_card_bank_ids'))) ? $this->input->post('credit_card_bank_ids') : '';

        $WHERE = array(); $query = '';
        if(!empty($card_user)) {
            if(strstr($card_user,',')) {
                $data1 = explode(',',$card_user);
                $card_user_array = array();
                foreach($data1 as $c_user) {
                    $card_user_array[] = "card_info_card_user.card_user_id = $c_user";
                }
                $WHERE[] = '('.implode(' OR ',$card_user_array).')';
            } else {
                $WHERE[] = '(card_info_card_user.card_user_id = '.$card_user.')';
            }
        }
        if(!empty($income_range)) {
            $data2 = explode('-',$income_range);
            if($card_user == '4'){ // check business person or salaried person
                $WHERE[] = "(card_card_informations.income_range_min_business >= $data2[0] AND card_card_informations.income_range_max_business <= $data2[1])";
            }else{
                $WHERE[] = "(card_card_informations.income_range_min_salaried >= $data2[0] AND card_card_informations.income_range_max_salaried <= $data2[1])";
            }
        }
        if(!empty($credit_limit)) {
            $data3 = explode('-',$credit_limit);
            if($card_user == '4'){ //check business person or salaried person
                $WHERE[] = "(card_card_informations.credit_limit_min_business >= $data3[0] AND card_card_informations.credit_limit_max_business <= $data3[1])";
            }else{
                $WHERE[] = "(card_card_informations.credit_limit_min_salaried >= $data3[0] AND card_card_informations.credit_limit_max_salaried <= $data3[1])";
            }
        }

        if(!empty($feature_benefits)) {
            if(strstr($feature_benefits,',')) {
                $data4 = explode(',',$feature_benefits);
                $feature_benefits_array = array();
                foreach($data4 as $c_benefits) {
                    $feature_benefits_array[] = "card_info_card_reward.card_reward_id = $c_benefits";
                }
                $WHERE[] = '('.implode(' OR ',$feature_benefits_array).')';
            } else {
                $WHERE[] = '(card_info_card_reward.card_reward_id = '.$feature_benefits.')';
            }
        }

        if(!empty($credit_card_type)) {
            $WHERE[] = '(card_card_informations.cc_type_id = '.$credit_card_type.')';
        }
        if(!empty($max_interest_free_period)) {
            if($max_interest_free_period == '46'){
                $WHERE[] = "(card_card_informations.interest_free_pefiod_max < 45)";
            }else{
                $data5 = explode('-',$max_interest_free_period);
                $WHERE[] = "(card_card_informations.interest_free_period_min >= $data5[0] OR card_card_informations.interest_free_pefiod_max <= $data5[1])";
            }

        }
        if(!empty($card_type)) {
            if(strstr($card_type,',')) {
                $data6 = explode(',',$card_type);
                $card_type_array = array();
                foreach($data6 as $c_type) {
                    $card_type_array[] = "card_card_informations.card_type_id = $c_type";
                }
                $WHERE[] = '('.implode(' OR ',$card_type_array).')';
            } else {
                $WHERE[] = '(card_card_informations.card_type_id = '.$card_type.')';
            }
        }
        if(!empty($card_issuer)) {
            if(strstr($card_issuer,',')) {
                $data7 = explode(',',$card_issuer);
                $card_issuer_array = array();
                foreach($data7 as $c_issuer) {
                    $card_issuer_array[] = "card_card_informations.cc_issuer_id = $c_issuer";
                }
                $WHERE[] = '('.implode(' OR ',$card_issuer_array).')';
            } else {
                $WHERE[] = '(card_card_informations.cc_issuer_id = '.$card_issuer.')';
            }
        }


        if(!empty($credit_card_bank_ids)) {
            if(strstr($credit_card_bank_ids,',')) {
                $data8 = explode(',',$credit_card_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "card_card_informations.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(card_card_informations.bank_id = '.$credit_card_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {$query = 'WHERE '.$query;}
        $res = $this->Front_end_select_model->select_card_info($query);
        //-----------Pagination start-----------------

        $config['base_url'] = base_url() . "all_credit_card/";
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

        $result =  $this->Front_end_select_model->select_credit_card_info_pagination($query,$config["per_page"],$page);
        $data['pagination'] = $this->pagination->create_links();
        //-------------Pagination End-------------------



        $credit_card='';

        if($result->num_rows() > 0){
            foreach($result->result() as $row){
//                    print_r($row);die;
                $length = strlen($row->card_summary);
                $summary='';
                if($length > 250){
                    $rest = substr($row->card_summary, 0,250);
                    $summary = $rest.' <a href="'.base_url().'compare-credit-cards/'. $row->slug.'.html"> read more..</a>';
                }else{
                    $summary = $row->card_summary;
                }
                $card_image='';
                if($row->card_image_name == '&lt;'){
                    $card_image = ' <a href="'.base_url().'compare-credit-cards/'. $row->slug.'.html"><img class="img-responsive selected_card" src="'.base_url().'resource/front_end/images/demo_card.png" alt="Demo Card" /></a>';
                }else{
                    $card_image ='<a href="'.base_url().'compare-credit-cards/'. $row->slug.'.html"><img class="img-responsive selected_card" src="'.base_url().'resource/card/credit_card/'.$row->card_image_name.'" alt="Card Image" /></a>';
                }
/*
                $url = $row->bank_name.' '.$row->card_name;
                $slug = url_title($url,'dash',TRUE);
                $slug = str_replace("/","-",$slug);
                $this->Common_model->data = array(
                        'slug' => $slug
                    );
                $this->Common_model->where = array('id' => $row->id);
                $this->Common_model->table_name = 'card_card_informations';
                $this->Common_model->update();*/

                $credit_card .='<div class="full-card" >
                    <div class="row card_right_bar no-margin-lr">
                        <div class="col-sm-3 col-xs-12">
                            '.$card_image.'

                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                            <span class="more_info_icon">
                                <a id="" href="javascript:void(0);" class="add-to-compare" data-card_id="'.$row->id.'" ><i class="fa fa-plus-circle"></i> Add to comparison</a>
                            </span><br/>
                            <span class="more_info_icon"><a id="card_more_info" class="displayText" style="cursor:pointer"  data-card_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
                        </div>
                        <div class="col-sm-9 col-xs-12">
                            <div class="row">
                                <div class="col-sm-9 col-xs-12">
                                    <div class="card_text1">
                                        <b>'.$row->bank_name.' '.$row->card_name.'</b>
                                        <p class="card_description">
                                            '.$summary.'
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="card_text1">
                                        <a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg"><div class="card_btn_apllication">Favorite </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-6 w20">
                                    <div class="card_text2">
                                        <h5>Purchase Interest Rate</h5>
                                        <p>'.$row->purchase_interest_rate.',<br> Monthly '.$row->purchase_interest_rate_monthly.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-6 w20">
                                    <div class="card_text2">
                                        <h5>Balance Transfer Interest Rate</h5>
                                        <p>'.$row->balance_transfer_rate.',<br> Monthly '.$row->balance_transfer_rate_monthly.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-6 w20">
                                    <div class="card_text2">
                                        <h5>Cash Advance Interest Rate</h5>
                                        <p>'.$row->cash_advance_interest_rate_yearly.',<br> Monthly '.$row->cash_advance_interest_rate.' </p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-6 w20">
                                    <div class="card_text2">
                                        <h5>Cash Advance Limit</h5>
                                        <p>'.$row->cash_advance_limit.'</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-6 w20">
                                    <div class="card_text2">
                                        <h5>Annual Fee</h5>
                                        <p>'.$row->annual_fee.' + '.$row->annual_fee_vat.'</p>
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
                        <li role="presentation" class="active"><a href="#ProsCons'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Pros & cons</a></li>
                        <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Review</a></li>
                        <li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">User reviews</a></li>
                        <li role="presentation"><a href="#Basics'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Basics</a></li>
                        <li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Fees & Charges </a></li>
                        <li role="presentation"><a href="#Rates'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Rates</a></li>
                        <li role="presentation"><a href="#Benefits'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Benefits</a></li>
                        <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Eligibility</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="ProsCons'.$row->id.'">
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
                                     '.$row->cons.'
                                </div>
                            </div>
                            <div class="pull-right">
                                <img src="'. base_url().'resource/front_end/images/card_btn_application.png" alt="application_image" /><br/><br/>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
                            <h3>Our review of the NAB Low Rate Card</h3>
                            <div class="col-sm-12">
                                <div class="tab_body">
                                    <h4>Review</h4>
                                    <hr/>
                                    '.$row->review.'
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">
                            1914 translation by H. Rackham<br/>
                            "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Basics'.$row->id.'">
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
                                                <td>Latest '.$row->experience_salaried.' month\'s bank statement for salaried person Latest '.$row->experience_business.' year bank statement for business person</td>
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
                        <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                            <section id="card_details_FeesCharges">
                                <div class="card_details_pronsCons">
                                    <h4>Fees & Charges</h4>
                                    <div class="prosConsHr"></div><br/>
                                    <div class="prosCons_body2">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>Basic Card Annual Fee</td>
                                                <td>'.$row->basic_card_annual_fee.'</td>
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
                                                <td>'.$row->balance_transfer_fee.'</td>
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
                                                        <li>'.$row->cash_advance_fee_own_atm.'</li>
                                                        <li>'.$row->cash_advance_fee_other_atm.'</li>
                                                        <li>'.$row->cash_advance_fee_international.'</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Late Payment Fee</td>
                                                <td>'.$row->late_payment_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Replacement Fee</td>
                                                <td>'. $row->card_replacement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Pin Replacement Fee</td>
                                                <td>'.$row->pin_replacement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Over limit Charge</td>
                                                <td>'.$row->over_limit_charge.'</td>
                                            </tr>
                                            <tr>
                                                <td>Transaction Alert Service</td>
                                                <td>'.$row->transaction_alert_service.'</td>
                                            </tr>
                                            <tr>
                                                <td>Credit Assurance Program Fee</td>
                                                <td>'.$row->credit_assurance_program_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Monthly E-Statement Fee</td>
                                                <td>'.$row->monthly_e_statement_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Cheque Book Fee</td>
                                                <td>'.$row->check_book_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Payment</td>
                                                <td>'.$row->minimum_payment.'</td>
                                            </tr>
                                            <tr>
                                                <td>Cheque Return Fee</td>
                                                <td>'.$row->cheque_return_fee.'</td>
                                            </tr>
                                            <tr>
                                                <td>Duplicate Statement</td>
                                                <td>'. $row->duplicate_statement .'</td>
                                            </tr>
                                            <tr>
                                                <td>Card Cheque Processing Fee</td>
                                                <td>'.$row->card_cheque_processing_fee.'</td>
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
                        <div role="tabpanel" class="tab-pane" id="Rates'.$row->id.'">...</div>
                        <div role="tabpanel" class="tab-pane" id="Benefits'.$row->id.'">
                            <h4>Benefits</h4>
                        '.$row->benifit_details.'
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
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
            $credit_card .= '<div class="col-md-12">'.$data['pagination'].'</div>';
        }else{
            $credit_card .=  '<br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>';
        }
        echo $credit_card;
    }

    public function ajax_count_selected_row(){
        $card_user = (!empty($this->input->post('card_user'))) ? $this->input->post('card_user') : '';
        $income_range = (!empty($this->input->post('income_range'))) ? $this->input->post('income_range') : '';
        $credit_limit = (!empty($this->input->post('credit_limit'))) ? $this->input->post('credit_limit') : '';
        $feature_benefits = (!empty($this->input->post('feature_benefits'))) ? $this->input->post('feature_benefits') : '';
        $credit_card_type = (!empty($this->input->post('credit_card_type'))) ? $this->input->post('credit_card_type') : '';
        $max_interest_free_period = (!empty($this->input->post('max_interest_free_period'))) ? $this->input->post('max_interest_free_period') : '';
        $card_type = (!empty($this->input->post('card_type'))) ? $this->input->post('card_type') : '';
        $card_issuer = (!empty($this->input->post('card_issuer'))) ? $this->input->post('card_issuer') : '';
        $credit_card_bank_ids = (!empty( $this->input->post('credit_card_bank_ids'))) ? $this->input->post('credit_card_bank_ids') : '';

        $WHERE = array(); $query = '';
        if(!empty($card_user)) {
            if(strstr($card_user,',')) {
                $data1 = explode(',',$card_user);
                $card_user_array = array();
                foreach($data1 as $c_user) {
                    $card_user_array[] = "card_info_card_user.card_user_id = $c_user";
                }
                $WHERE[] = '('.implode(' OR ',$card_user_array).')';
            } else {
                $WHERE[] = '(card_info_card_user.card_user_id = '.$card_user.')';
            }
        }
        if(!empty($income_range)) {
            $data2 = explode('-',$income_range);
            if($card_user == '4'){ // check business person or salaried person
                $WHERE[] = "(card_card_informations.income_range_min_business >= $data2[0] AND card_card_informations.income_range_max_business <= $data2[1])";
            }else{
                $WHERE[] = "(card_card_informations.income_range_min_salaried >= $data2[0] AND card_card_informations.income_range_max_salaried <= $data2[1])";
            }
        }
        if(!empty($credit_limit)) {
            $data3 = explode('-',$credit_limit);
            if($card_user == '4'){ //check business person or salaried person
                $WHERE[] = "(card_card_informations.credit_limit_min_business >= $data3[0] AND card_card_informations.credit_limit_max_business <= $data3[1])";
            }else{
                $WHERE[] = "(card_card_informations.credit_limit_min_salaried >= $data3[0] AND card_card_informations.credit_limit_max_salaried <= $data3[1])";
            }
        }

        if(!empty($feature_benefits)) {
            if(strstr($feature_benefits,',')) {
                $data4 = explode(',',$feature_benefits);
                $feature_benefits_array = array();
                foreach($data4 as $c_benefits) {
                    $feature_benefits_array[] = "card_info_card_reward.card_reward_id = $c_benefits";
                }
                $WHERE[] = '('.implode(' OR ',$feature_benefits_array).')';
            } else {
                $WHERE[] = '(card_info_card_reward.card_reward_id = '.$feature_benefits.')';
            }
        }

        if(!empty($credit_card_type)) {
            $WHERE[] = '(card_card_informations.cc_type_id = '.$credit_card_type.')';
        }
        if(!empty($max_interest_free_period)) {
            if($max_interest_free_period == '46'){
                $WHERE[] = "(card_card_informations.interest_free_pefiod_max < 45)";
            }else{
                $data5 = explode('-',$max_interest_free_period);
                $WHERE[] = "(card_card_informations.interest_free_period_min >= $data5[0] OR card_card_informations.interest_free_pefiod_max <= $data5[1])";
            }

        }
        if(!empty($card_type)) {
            if(strstr($card_type,',')) {
                $data6 = explode(',',$card_type);
                $card_type_array = array();
                foreach($data6 as $c_type) {
                    $card_type_array[] = "card_card_informations.card_type_id = $c_type";
                }
                $WHERE[] = '('.implode(' OR ',$card_type_array).')';
            } else {
                $WHERE[] = '(card_card_informations.card_type_id = '.$card_type.')';
            }
        }
        if(!empty($card_issuer)) {
            if(strstr($card_issuer,',')) {
                $data7 = explode(',',$card_issuer);
                $card_issuer_array = array();
                foreach($data7 as $c_issuer) {
                    $card_issuer_array[] = "card_card_informations.cc_issuer_id = $c_issuer";
                }
                $WHERE[] = '('.implode(' OR ',$card_issuer_array).')';
            } else {
                $WHERE[] = '(card_card_informations.cc_issuer_id = '.$card_issuer.')';
            }
        }


        if(!empty($credit_card_bank_ids)) {
            if(strstr($credit_card_bank_ids,',')) {
                $data8 = explode(',',$credit_card_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "card_card_informations.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(card_card_informations.bank_id = '.$credit_card_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {$query = 'WHERE '.$query;}
        $res = $this->Front_end_select_model->select_card_info($query);
        $selected_row = $res->num_rows();

        $this->Common_model->table_name = 'card_card_informations';
        $total_row = $this->Common_model->count_all();

        $response = $selected_row.' of '.$total_row.' results filtered by:';
        echo $response;

    }

    public function select_credit_card_user(){
        $sql= "SELECT id , card_user_id From card_card_informations";
        $query=$this->db->query($sql);
        return $query;
    }

    public function card_fees_charges_list(){
        $data['title'] = "Card Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/credit_card/card_fees_charges_list');
        $this->load->view('admin/block/footer');
    }

    public function ajax_compare_card_image(){
        $id = $this->input->post('card_id');
        $result = $this->Front_end_select_model->select_card_image($id);
        $row= $result->row();
        $html ='';
        if(isset($row)){
            $html .='<img src="'. base_url().'resource/card/credit_card/'.$row->card_image_name.'" data-card_id='.$row->id.' data-card_url='.$row->slug.' class="img-responsive compare_delay "/>
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

    public function ajax_delete_card1_compare_session(){
        $this->session->unset_userdata('first_card');
        echo 'success';
    }

    public function ajax_delete_card2_compare_session(){
        $this->session->unset_userdata('second_card');
        echo 'success';
    }

    public function ajax_credit_card_quick_link(){
        $credit_card_features_benefits = (!empty($this->input->post('credit_card_features_benefits'))) ? $this->input->post('credit_card_features_benefits') : '';
        $card_types = (!empty($this->input->post('card_type'))) ? $this->input->post('card_type') : '';
        $data = (!empty($this->input->post('data'))) ? $this->input->post('data') : '';

        $card_types_array = array();
        if(!empty($card_types)) {
            if(strstr($card_types,',')) {
                $data3 = explode(',',$card_types);
                foreach( $data3 as $type ) {
                    $card_types_array[] =  $type;
                }
            } else {
                $card_types_array[] = $card_types;
            }
        }

        $feature_benefits_array = array();
        if(!empty($credit_card_features_benefits)) {
            if(strstr($credit_card_features_benefits,',')) {
                $data2 = explode(',',$credit_card_features_benefits);
                foreach( $data2 as $feature ) {
                    $feature_benefits_array[] =  $feature;
                }
            } else {
                $feature_benefits_array[] = $credit_card_features_benefits;
            }
        }

        if($data == 'all'){
            $newdata['all']= '';
        }

        $array_items = array( 'credit_card_i_am', 'credit_card_principal_amount','credit_card_i_am_label','credit_card_income_range','credit_card_income_range_label','credit_card_want_credit_limit','credit_card_type','card_types','credit_card_want_credit_limit_label','card_issuers','credit_card_features_benefits','credit_card_bank_ids','credit_card_maximum_interest_free_period','credit_card_maximum_interest_free_period_label','credit_card_type_label');
        $this->session->unset_userdata($array_items);

        $session_array = array(
            'card_types' => $card_types_array,
            'credit_card_features_benefits' => $feature_benefits_array
        );

        $this->session->set_userdata($session_array);
        echo 'success';
    }

    public function ajax_credit_card_caching(){
        $credit_card_i_am = $this->input->post('credit_card_i_am');
        $credit_card_i_am_label = $this->input->post('credit_card_i_am_label');
        $credit_card_income_range = $this->input->post('credit_card_income_range');
        $credit_card_income_range_label = $this->input->post('credit_card_income_range_label');
        $credit_card_want_credit_limit = $this->input->post('credit_card_want_credit_limit');
        $credit_card_want_credit_limit_label = $this->input->post('credit_card_want_credit_limit_label');
        $credit_card_type = $this->input->post('credit_card_type');
        $credit_card_type_label = $this->input->post('credit_card_type_label');
        $card_types = $this->input->post('card_type');
        $card_issuers = $this->input->post('card_issuers');
        $credit_card_features_benefits = $this->input->post('credit_card_features_benefits');
        $credit_card_bank_ids = $this->input->post('credit_card_bank_ids');
        $credit_card_maximum_interest_free_period = $this->input->post('credit_card_maximum_interest_free_period');
        $credit_card_maximum_interest_free_period_label = $this->input->post('credit_card_maximum_interest_free_period_label');

        $card_types_array = array();
        if(!empty($card_types)) {
            if(strstr($card_types,',')) {
                $data3 = explode(',',$card_types);

                foreach( $data3 as $type ) {
                    $card_types_array[] =  $type;
                }

            } else {
                $card_types_array[] = $card_types;
            }
        }


        $card_issuers_array = array();
        if(!empty($card_issuers)) {
            if(strstr($card_issuers,',')) {
                $data4 = explode(',',$card_issuers);

                foreach( $data4 as $issuer ) {
                    $card_issuers_array[] =  $issuer;
                }

            } else {
                $card_issuers_array[] = $card_issuers;
            }
        }

        $feature_benefits_array = array();
        if(!empty($credit_card_features_benefits)) {
            if(strstr($credit_card_features_benefits,',')) {
                $data2 = explode(',',$credit_card_features_benefits);

                foreach( $data2 as $feature ) {
                    $feature_benefits_array[] =  $feature;
                }

            } else {
                $feature_benefits_array[] = $credit_card_features_benefits;
            }
        }


        $bank_id_array = array();
        if(!empty($credit_card_bank_ids)) {
            if(strstr($credit_card_bank_ids,',')) {
                $data8 = explode(',',$credit_card_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $credit_card_bank_ids;
            }
        }

        $credit_card_principal_amount = floatval ( ($this->input->post('credit_card_principal_amount')) ? $this->input->post('credit_card_principal_amount') : '200000' );

        $array_items = array( 'credit_card_i_am', 'credit_card_principal_amount','credit_card_i_am_label','credit_card_income_range','credit_card_income_range_label','credit_card_want_credit_limit','credit_card_type','card_types','credit_card_want_credit_limit_label','card_issuers','credit_card_features_benefits','credit_card_bank_ids','credit_card_maximum_interest_free_period','credit_card_maximum_interest_free_period_label','credit_card_type_label');
        $this->session->unset_userdata($array_items);
        $data = array(
            'credit_card_i_am'  => $credit_card_i_am,
            'credit_card_principal_amount'  => $credit_card_principal_amount,
            'credit_card_i_am_label' => $credit_card_i_am_label,
            'credit_card_income_range' => $credit_card_income_range,
            'credit_card_income_range_label' => $credit_card_income_range_label,
            'credit_card_want_credit_limit' => $credit_card_want_credit_limit,
            'credit_card_type' => $credit_card_type,
            'credit_card_want_credit_limit_label' => $credit_card_want_credit_limit_label,
            'credit_card_type_label' => $credit_card_type_label,
            'card_types' => $card_types_array,
            'card_issuers' => $card_issuers_array,
            'credit_card_features_benefits' => $feature_benefits_array,
            'credit_card_bank_ids' => $bank_id_array,
            'credit_card_maximum_interest_free_period' => $credit_card_maximum_interest_free_period,
            'credit_card_maximum_interest_free_period_label' => $credit_card_maximum_interest_free_period_label,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='credit_card'){
            $array_items = array( 'credit_card_i_am', 'credit_card_principal_amount','credit_card_i_am_label','credit_card_income_range','credit_card_income_range_label','credit_card_want_credit_limit','credit_card_type','card_types','credit_card_want_credit_limit_label','card_issuers','credit_card_features_benefits','credit_card_bank_ids','credit_card_maximum_interest_free_period','credit_card_maximum_interest_free_period_label','credit_card_type_label');
            $this->session->unset_userdata($array_items);
//            $this->session->sess_destroy();
//            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
//            $this->output->set_header("Pragma: no-cache");
        }
        echo 'success';
    }


    public function unset_credit_card_i_am_session(){
        $session = $this->input->post('credit_card_i_am');
        if($session){
            $this->session->unset_userdata('credit_card_i_am');
            $this->session->unset_userdata('credit_card_i_am_label');
            echo 'success';
        }
    }


    public function unset_credit_card_income_range_session(){
        $session = $this->input->post('credit_card_income_range');
        if($session){
            $this->session->unset_userdata('credit_card_income_range');
            $this->session->unset_userdata('credit_card_income_range_label');
            echo 'success';
        }
    }
    public function unset_credit_card_want_credit_limit_session(){
        $session = $this->input->post('credit_card_want_credit_limit');
        if($session){
            $this->session->unset_userdata('credit_card_want_credit_limit');
            $this->session->unset_userdata('credit_card_want_credit_limit_label');
            echo 'success';
        }
    }
    public function unset_credit_card_type_session(){
        $session = $this->input->post('credit_card_type');
        if($session){
            $this->session->unset_userdata('credit_card_type');
            $this->session->unset_userdata('credit_card_type_label');
            echo 'success';
        }
    }
    public function unset_credit_card_maximum_interest_free_period_session(){
        $session = $this->input->post('credit_card_maximum_interest_free_period');
        if($session){
            $this->session->unset_userdata('credit_card_maximum_interest_free_period');
            $this->session->unset_userdata('credit_card_maximum_interest_free_period_label');
            echo 'success';
        }
    }

    public function unset_credit_card_bank_id_session(){
        $id = $this->input->post('credit_card_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['bank_name'];
            $bank = array_values($_SESSION['credit_card_bank_ids']);

            if(($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['credit_card_bank_ids'][$key]);
            }
        }
    }
    public function unset_credit_card_feature_benefit_id_session(){
        $id = $this->input->post('credit_card_feature_benefit_id');
        $row = $this->Select_model->Select_card_features_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['reward_name'];
            $reward = array_values($_SESSION['credit_card_features_benefits']);

            if(($key = array_search($session, $reward)) !== false) {
                unset($_SESSION['credit_card_features_benefits'][$key]);
            }
        }
    }

    public function unset_card_types_session(){
        $id = $this->input->post('card_type_id');
        $row = $this->Select_model->Select_card_card_type_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['card_type_name'];
            $type = array_values($_SESSION['card_types']);

            if(($key = array_search($session, $type)) !== false) {
                unset($_SESSION['card_types'][$key]);
            }
        }
    }

    public function unset_card_issuer_session(){
        $id = $this->input->post('card_type_id');
        $row = $this->Select_model->Select_card_card_issuer_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['card_issuer_name'];
            $type = array_values($_SESSION['card_issuers']);

            if(($key = array_search($session, $type)) !== false) {
                unset($_SESSION['card_issuers'][$key]);
            }
        }
    }



}