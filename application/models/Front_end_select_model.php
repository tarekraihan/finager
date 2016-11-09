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


    public function select_home_loan_details($id){
        $sql="SELECT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,home_loan_looking_for.home_loan_looking_for FROM `home_loan_info` inner join card_bank on card_bank.id=home_loan_info.bank_id INNER JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id WHERE home_loan_info.id=$id";
        $query = $this->db->query($sql);

        return $query;

    }


    public function select_card_image($id){
        $sql="SELECT id,card_image_name FROM `card_card_informations`  WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_home_loan_info(){
        $sql = "SELECT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,home_loan_looking_for.home_loan_looking_for, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `home_loan_info` LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id INNER JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id  LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_auto_loan_info(){
        $sql = "SELECT auto_loan_info.*,card_bank.bank_name,card_bank.bank_logo,auto_i_want.i_want,loan_type.loan_type FROM `auto_loan_info` inner join card_bank on card_bank.id=auto_loan_info.bank_id INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = auto_loan_info.loan_type_id";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_personal_loan_info(){
        $sql = "SELECT personal_loan_info.*,card_bank.bank_name,card_bank.bank_logo,personal_loan_looking_for.personal_loan_looking_for,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `personal_loan_info` LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id INNER JOIN personal_loan_looking_for ON personal_loan_looking_for.id = personal_loan_info.personal_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = personal_loan_info.loan_type_id LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_education_loan_info(){
        $sql = "SELECT education_loan_info.*,card_bank.bank_name,card_bank.bank_logo,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `education_loan_info` LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id INNER JOIN loan_type ON loan_type.id = education_loan_info.loan_type_id LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id";
        $query = $this->db->query($sql);

        return $query;
    }


    function select_dps_loan_info(){
        $sql = "SELECT dps_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo FROM `dps_info` LEFT JOIN card_bank on card_bank.id=dps_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id Left join fdr_i_am ON fdr_i_am.id = dps_info.i_am_id";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_fdr_loan_info(){
        $sql = "SELECT fdr_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo FROM `fdr_info` LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id Left join fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id";
        $query = $this->db->query($sql);

        return $query;
    }

}