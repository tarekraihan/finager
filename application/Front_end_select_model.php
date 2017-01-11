<?php

class Front_end_select_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function select_card_info($query){


        $sql="SELECT DISTINCT card_card_informations.*,card_bank.bank_name,card_card_type.card_type_name,card_credit_card_type.cc_card_type,card_card_issuer.card_issuer_name, card_fees_charges.`card_id`, card_fees_charges.`basic_card_annual_fee`, card_fees_charges.`supplementary_card_annual_fee`, card_fees_charges.`purchase_fee`, card_fees_charges.`balance_transfer_fee`, card_fees_charges.`cash_advance_fee_own_atm`, card_fees_charges.`cash_advance_fee_other_atm`, card_fees_charges.`cash_advance_fee_international`, card_fees_charges.`late_payment_fee`, card_fees_charges.`card_replacement_fee`, card_fees_charges.`pin_replacement_fee`, card_fees_charges.`over_limit_charge`, card_fees_charges.`transaction_alert_service`, card_fees_charges.`credit_assurance_program_fee`, card_fees_charges.`monthly_e_statement_fee`, card_fees_charges.`check_book_fee`, card_fees_charges.`minimum_payment`, card_fees_charges.`cheque_return_fee`, card_fees_charges.`duplicate_statement`, card_fees_charges.`card_cheque_processing_fee`, card_fees_charges.`card_cheque_issuing_fee`
FROM card_card_informations INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN
 card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id
INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id LEFT JOIN
card_fees_charges ON card_fees_charges.card_id = card_card_informations.id INNER JOIN card_info_card_user ON card_info_card_user.card_info_id=card_card_informations.id INNER JOIN card_info_card_reward ON
 card_info_card_reward.card_info_id=card_card_informations.id $query";

//        echo $sql; die;
        $query = $this->db->query($sql);

        return $query;
    }

    function select_all($table=null)
    {
        $sql="SELECT * FROM $table ";
        $query=$this->db->query($sql);
        return $query;
    }

    public function select_card_details($id){
        $sql="SELECT DISTINCT card_card_informations.*,card_bank.bank_name,card_card_type.card_type_name,card_credit_card_type.cc_card_type,card_card_issuer.card_issuer_name,card_fees_charges.`card_id`, card_fees_charges.`basic_card_annual_fee`, card_fees_charges.`supplementary_card_annual_fee`, card_fees_charges.`purchase_fee`, card_fees_charges.`balance_transfer_fee`, card_fees_charges.`cash_advance_fee_own_atm`, card_fees_charges.`cash_advance_fee_other_atm`, card_fees_charges.`cash_advance_fee_international`, card_fees_charges.`late_payment_fee`, card_fees_charges.`card_replacement_fee`, card_fees_charges.`pin_replacement_fee`, card_fees_charges.`over_limit_charge`, card_fees_charges.`transaction_alert_service`, card_fees_charges.`credit_assurance_program_fee`, card_fees_charges.`monthly_e_statement_fee`, card_fees_charges.`check_book_fee`, card_fees_charges.`minimum_payment`, card_fees_charges.`cheque_return_fee`, card_fees_charges.`duplicate_statement`, card_fees_charges.`card_cheque_processing_fee`, card_fees_charges.`card_cheque_issuing_fee`
FROM card_card_informations INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN
 card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id
INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id LEFT JOIN
card_fees_charges ON card_fees_charges.card_id = card_card_informations.id INNER JOIN card_info_card_user ON card_info_card_user.card_info_id=card_card_informations.id INNER JOIN card_info_card_reward ON
 card_info_card_reward.card_info_id=card_card_informations.id WHERE card_card_informations.id=$id";
        $query = $this->db->query($sql);

        return $query;

    }


    public function select_card_image($id){
        $sql="SELECT id,card_image_name FROM `card_card_informations`  WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_home_loan_info(){
        $sql = "SELECT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo FROM `home_loan_info` inner join card_bank on card_bank.id=home_loan_info.bank_id ";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_compare_image_info(){
        $sql = "SELECT debit_card_info.id,card_bank.bank_name,card_bank.bank_logo FROM debit_card_info inner join card_bank on card_bank.id=debit_card_info.bank_id WHERE debit_card_info.id=2";
        $query = $this->db->query($sql);
        return $query;
    }
}