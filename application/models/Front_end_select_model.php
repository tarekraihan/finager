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

    public function select_credit_card_info_pagination($query,$limit=null,$offset=null){

            $link = 'ORDER BY card_card_informations.id ASC LIMIT '.$offset.', '.$limit;

        $sql="SELECT DISTINCT card_card_informations.*,card_bank.bank_name,card_card_type.card_type_name,card_credit_card_type.cc_card_type,card_card_issuer.card_issuer_name, card_fees_charges.`card_id`, card_fees_charges.`basic_card_annual_fee`, card_fees_charges.`supplementary_card_annual_fee`, card_fees_charges.`purchase_fee`, card_fees_charges.`balance_transfer_fee`, card_fees_charges.`cash_advance_fee_own_atm`, card_fees_charges.`cash_advance_fee_other_atm`, card_fees_charges.`cash_advance_fee_international`, card_fees_charges.`late_payment_fee`, card_fees_charges.`card_replacement_fee`, card_fees_charges.`pin_replacement_fee`, card_fees_charges.`over_limit_charge`, card_fees_charges.`transaction_alert_service`, card_fees_charges.`credit_assurance_program_fee`, card_fees_charges.`monthly_e_statement_fee`, card_fees_charges.`check_book_fee`, card_fees_charges.`minimum_payment`, card_fees_charges.`cheque_return_fee`, card_fees_charges.`duplicate_statement`, card_fees_charges.`card_cheque_processing_fee`, card_fees_charges.`card_cheque_issuing_fee`
FROM card_card_informations INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN
 card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id
INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id LEFT JOIN
card_fees_charges ON card_fees_charges.card_id = card_card_informations.id INNER JOIN card_info_card_user ON card_info_card_user.card_info_id=card_card_informations.id INNER JOIN card_info_card_reward ON
 card_info_card_reward.card_info_id=card_card_informations.id $query $link";

//        echo $sql; die;
        $query = $this->db->query($sql);

        return $query;
    }
    public function select_debit_card_info($query){

        $sql="SELECT debit_card_info.*,card_bank.bank_name,card_bank.bank_logo,debit_card_looking_for.looking_for,debit_card_choose_account.account_name,debit_card_issuer.card_issuer_name,debit_card_i_want.i_want,debit_card_looking_for.looking_for FROM debit_card_info  INNER JOIN card_bank ON card_bank.id=debit_card_info.bank_id INNER JOIN debit_card_choose_account ON debit_card_choose_account.id=debit_card_info.choose_account_id INNER JOIN debit_card_issuer ON debit_card_issuer.id=debit_card_info.card_issuer_id INNER JOIN debit_card_i_want ON debit_card_i_want.id=debit_card_info.i_want_id INNER JOIN debit_card_looking_for ON debit_card_looking_for.id=debit_card_info.looking_for_id $query";

//        echo $sql; die;
        $query = $this->db->query($sql);

        return $query;
    }


    public function select_debit_card_info_pagination($query,$limit=null,$offset=null){

            $link = 'ORDER BY debit_card_info.id ASC LIMIT ' . $offset . ', ' . $limit;

        $sql="SELECT debit_card_info.*,card_bank.bank_name,card_bank.bank_logo,debit_card_looking_for.looking_for,debit_card_choose_account.account_name,debit_card_issuer.card_issuer_name,debit_card_i_want.i_want,debit_card_looking_for.looking_for FROM debit_card_info  INNER JOIN card_bank ON card_bank.id=debit_card_info.bank_id INNER JOIN debit_card_choose_account ON debit_card_choose_account.id=debit_card_info.choose_account_id INNER JOIN debit_card_issuer ON debit_card_issuer.id=debit_card_info.card_issuer_id INNER JOIN debit_card_i_want ON debit_card_i_want.id=debit_card_info.i_want_id INNER JOIN debit_card_looking_for ON debit_card_looking_for.id=debit_card_info.looking_for_id $query $link";

//        echo $sql; die;
        $query = $this->db->query($sql);

        return $query;
    }



    public function select_debit_card_details($id){
        $sql="SELECT debit_card_info.*,card_bank.bank_name,card_bank.bank_logo,debit_card_looking_for.looking_for,debit_card_choose_account.account_name,debit_card_issuer.card_issuer_name,debit_card_i_want.i_want,debit_card_looking_for.looking_for FROM debit_card_info  INNER JOIN card_bank ON card_bank.id=debit_card_info.bank_id INNER JOIN debit_card_choose_account ON debit_card_choose_account.id=debit_card_info.choose_account_id INNER JOIN debit_card_issuer ON debit_card_issuer.id=debit_card_info.card_issuer_id INNER JOIN debit_card_i_want ON debit_card_i_want.id=debit_card_info.i_want_id INNER JOIN debit_card_looking_for ON debit_card_looking_for.id=debit_card_info.looking_for_id WHERE debit_card_info.id=$id";
        //echo $sql; die;
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
        $sql="SELECT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,home_loan_looking_for.home_loan_looking_for,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `home_loan_info` LEFT join card_bank on card_bank.id=home_loan_info.bank_id LEFT JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id WHERE home_loan_info.id=$id";

        $query = $this->db->query($sql);

        return $query;

    }

    public function select_personal_loan_details($id){
        $sql="SELECT personal_loan_info.*,card_bank.bank_name,card_bank.bank_logo,personal_loan_looking_for.personal_loan_looking_for,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `personal_loan_info` LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id INNER JOIN personal_loan_looking_for ON personal_loan_looking_for.id=personal_loan_info.personal_loan_looking_for_id  LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id  WHERE personal_loan_info.id=$id";

        $query = $this->db->query($sql);
        return $query;
    }
    public function select_millionaire_info($query){
        $sql="SELECT millionaire_info.*,card_bank.bank_name,card_bank.bank_logo,millionaire_i_am.i_am,millionaire_maturity_amount.maturity_amount,millionaire_tenure.tenure,millionaire_tenure.no_of_installment,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM millionaire_info  LEFT JOIN card_bank ON card_bank.id=millionaire_info.bank_id INNER JOIN millionaire_i_am ON millionaire_i_am.id=millionaire_info.i_am_id INNER JOIN millionaire_maturity_amount ON millionaire_maturity_amount.id=millionaire_info.maturity_amount_id INNER JOIN millionaire_tenure ON millionaire_tenure.id=millionaire_info.tenure_id LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id $query";

//        print_r($sql) ;die;
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_millionaire_info_pagination($query,$limit=null,$offset=null ){
        $link = 'ORDER BY millionaire_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql="SELECT millionaire_info.*,card_bank.bank_name,card_bank.bank_logo,millionaire_i_am.i_am,millionaire_maturity_amount.maturity_amount,millionaire_tenure.tenure,millionaire_tenure.no_of_installment,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM millionaire_info  LEFT JOIN card_bank ON card_bank.id=millionaire_info.bank_id INNER JOIN millionaire_i_am ON millionaire_i_am.id=millionaire_info.i_am_id INNER JOIN millionaire_maturity_amount ON millionaire_maturity_amount.id=millionaire_info.maturity_amount_id INNER JOIN millionaire_tenure ON millionaire_tenure.id=millionaire_info.tenure_id LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id $query $link";

        $query = $this->db->query($sql);
        return $query;
    }

    public function select_millionaire_info_details($id){
        $sql="SELECT millionaire_info.*,card_bank.bank_name,card_bank.bank_logo,millionaire_i_am.i_am,millionaire_maturity_amount.maturity_amount,millionaire_tenure.tenure,millionaire_tenure.no_of_installment,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM millionaire_info  LEFT JOIN card_bank ON card_bank.id=millionaire_info.bank_id INNER JOIN millionaire_i_am ON millionaire_i_am.id=millionaire_info.i_am_id INNER JOIN millionaire_maturity_amount ON millionaire_maturity_amount.id=millionaire_info.maturity_amount_id INNER JOIN millionaire_tenure ON millionaire_tenure.id=millionaire_info.tenure_id LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id WHERE millionaire_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_money_maximizer_info_details($id){
        $sql = "SELECT money_maxi_info.*, money_maxi_choose_your_benefit.your_benefit,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name , general_non_bank.bank_logo AS non_bank_logo FROM money_maxi_info INNER JOIN money_maxi_choose_your_benefit ON money_maxi_choose_your_benefit.id = money_maxi_info.choose_your_benefit_id LEFT JOIN card_bank on card_bank.id=money_maxi_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id WHERE money_maxi_info.id = '$id'";
        $query = $this->db->query($sql);
        return $query;

    }

    public function select_auto_loan_details($id){
        $sql="SELECT auto_loan_info.*,card_bank.bank_name,card_bank.bank_logo,auto_i_want.i_want AS auto_loan_looking_for,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `auto_loan_info` LEFT JOIN card_bank on card_bank.id=auto_loan_info.bank_id INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id  LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id  WHERE auto_loan_info.id=$id";

        $query = $this->db->query($sql);
        return $query;
    }


    public function select_education_loan_details($id){
        $sql="SELECT education_loan_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `education_loan_info` LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id  WHERE education_loan_info.id=$id";

        $query = $this->db->query($sql);
        return $query;
    }


    public function select_card_image($id){
        $sql="SELECT id,card_image_name FROM `card_card_informations`  WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_home_loan_image($id){
        $sql="SELECT home_loan_info.id,home_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `home_loan_info`  LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id  WHERE home_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }



    public function select_millionaire_image($id){
        $sql="SELECT millionaire_info.id,millionaire_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `millionaire_info`  LEFT JOIN card_bank on card_bank.id=millionaire_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id  WHERE millionaire_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_monthly_benefit_image($id){
        $sql="SELECT monthly_benefit_info.id,card_bank.bank_logo FROM `monthly_benefit_info`  LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id WHERE monthly_benefit_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_money_maximizer_image($id){
        $sql="SELECT money_maxi_info.id,money_maxi_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `money_maxi_info`  LEFT JOIN card_bank on card_bank.id=money_maxi_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id  WHERE money_maxi_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_personal_loan_image($id){
        $sql="SELECT personal_loan_info.id,personal_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `personal_loan_info`  LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id  WHERE personal_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_auto_loan_image($id){
        $sql="SELECT auto_loan_info.id,auto_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `auto_loan_info`  LEFT JOIN card_bank on card_bank.id=auto_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id  WHERE auto_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_fdr_image($id){
        $sql="SELECT fdr_info.id,fdr_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `fdr_info`  LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id  WHERE fdr_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_education_loan_image($id){
        $sql="SELECT education_loan_info.id,education_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `education_loan_info`  LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id  WHERE education_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_compare_image($id,$model_name){
        $sql="SELECT $model_name.id,card_bank.bank_logo FROM $model_name  LEFT JOIN card_bank on card_bank.id=$model_name.bank_id WHERE $model_name.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_home_loan_info($query){
        $sql = "SELECT DISTINCT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,home_loan_looking_for.home_loan_looking_for, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `home_loan_info` LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id LEFT JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id INNER JOIN home_loan_user_home_loan_info ON home_loan_user_home_loan_info.home_loan_info_id = home_loan_info.id $query";

//        echo $sql;
        $query = $this->db->query($sql);
        return $query;
    }



    function select_home_loan_info_pagination($query,$limit=null,$offset=null){
        $link = 'ORDER BY home_loan_info.id ASC LIMIT ' . $offset . ', ' . $limit;

        $sql = "SELECT DISTINCT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,home_loan_looking_for.home_loan_looking_for, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `home_loan_info` LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id LEFT JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id INNER JOIN home_loan_user_home_loan_info ON home_loan_user_home_loan_info.home_loan_info_id = home_loan_info.id $query $link";

        $query = $this->db->query($sql);
        ///echo $sql;
        return $query;
    }




    function select_education_loan_info( $query ){
        $sql = "SELECT DISTINCT education_loan_info.*,card_bank.bank_name,card_bank.bank_logo,education_loan_tenure.tenure, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `education_loan_info` LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id LEFT JOIN education_loan_tenure ON education_loan_tenure.id=education_loan_info.min_term LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id $query ORDER BY education_loan_info.id ASC";
//        echo $sql;die;

        $query = $this->db->query($sql);
        return $query;
    }

    function select_education_loan_info_pagination( $query,$limit=null,$offset=null ){
        $link = 'ORDER BY education_loan_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT DISTINCT education_loan_info.*,card_bank.bank_name,card_bank.bank_logo,education_loan_tenure.tenure, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `education_loan_info` LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id LEFT JOIN education_loan_tenure ON education_loan_tenure.id=education_loan_info.min_term LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id $query $link";

        $query = $this->db->query($sql);
        return $query;
    }

    function select_auto_loan_info($query){
        $sql = "SELECT DISTINCT auto_loan_info.*,card_bank.bank_name,card_bank.bank_logo,auto_i_want.i_want,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM auto_loan_info LEFT join card_bank on card_bank.id=auto_loan_info.bank_id INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = auto_loan_info.loan_type_id INNER JOIN auto_loan_info_vs_i_am ON auto_loan_info_vs_i_am.auto_loan_info_id =auto_loan_info.id LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id $query ORDER BY `auto_loan_info`.`id` ASC ";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_auto_loan_info_pagination( $query ,$limit=null,$offset=null){
        $link = 'ORDER BY auto_loan_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT DISTINCT auto_loan_info.*,card_bank.bank_name,card_bank.bank_logo,auto_i_want.i_want,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM auto_loan_info LEFT join card_bank on card_bank.id=auto_loan_info.bank_id INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = auto_loan_info.loan_type_id INNER JOIN auto_loan_info_vs_i_am ON auto_loan_info_vs_i_am.auto_loan_info_id =auto_loan_info.id LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id $query $link ";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_personal_loan_info($query){
        $sql = "SELECT DISTINCT personal_loan_info.*,card_bank.bank_name,card_bank.bank_logo,personal_loan_looking_for.personal_loan_looking_for,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `personal_loan_info` LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id INNER JOIN personal_loan_looking_for ON personal_loan_looking_for.id = personal_loan_info.personal_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = personal_loan_info.loan_type_id LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id INNER JOIN personal_loan_info_vs_i_am ON personal_loan_info_vs_i_am.personal_loan_info_id = personal_loan_info.id $query";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_personal_loan_info_pagination($query,$limit=null,$offset=null){
        $link = 'ORDER BY personal_loan_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT DISTINCT personal_loan_info.*,card_bank.bank_name,card_bank.bank_logo,personal_loan_looking_for.personal_loan_looking_for,loan_type.loan_type,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `personal_loan_info` LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id INNER JOIN personal_loan_looking_for ON personal_loan_looking_for.id = personal_loan_info.personal_loan_looking_for_id INNER JOIN loan_type ON loan_type.id = personal_loan_info.loan_type_id LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id INNER JOIN personal_loan_info_vs_i_am ON personal_loan_info_vs_i_am.personal_loan_info_id = personal_loan_info.id $query $link";
        $query = $this->db->query($sql);

        return $query;
    }




    function select_dps_loan_info($query){
        $sql = "SELECT DISTINCT dps_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo,dps_tenure.tenure,dps_tenure.no_of_installment FROM `dps_info` LEFT JOIN card_bank on card_bank.id=dps_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id INNER JOIN fdr_i_am ON fdr_i_am.id = dps_info.i_am_id INNER JOIN dps_tenure ON dps_tenure.id = dps_info.tenure_id $query";
        $query = $this->db->query($sql);

        return $query;
    }



    function select_dps_loan_info_pagination($query,$limit=null,$offset=null){
        $link = 'ORDER BY dps_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT DISTINCT dps_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo,dps_tenure.tenure,dps_tenure.no_of_installment FROM `dps_info` LEFT JOIN card_bank on card_bank.id=dps_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id INNER JOIN fdr_i_am ON fdr_i_am.id = dps_info.i_am_id INNER JOIN dps_tenure ON dps_tenure.id = dps_info.tenure_id $query $link";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_fdr_loan_info($query){
        $sql = "SELECT DISTINCT fdr_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo FROM `fdr_info` LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id Left join fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id $query ORDER BY fdr_info.id ASC";
        $query = $this->db->query($sql);

        return $query;
    }
    function select_fdr_loan_info_pagination($query,$limit=null,$offset=null){

        $link = 'ORDER BY fdr_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT DISTINCT fdr_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo , fdr_tenure.tenure, fdr_tenure.installment FROM `fdr_info` LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id Left join fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id INNER JOIN  fdr_tenure ON fdr_tenure.id = fdr_info.tenure_id $query $link";
        $query = $this->db->query($sql);

        return $query;
    }


    public function select_fdr_details($id){
        $sql="SELECT DISTINCT fdr_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo,fdr_tenure.tenure,fdr_tenure.installment FROM `fdr_info` LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id Left join fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id INNER JOIN fdr_tenure ON fdr_tenure.id = fdr_info.tenure_id WHERE fdr_info.id=$id";

        $query = $this->db->query($sql);
        return $query;
    }

    function select_education_loan_expenses_considered($loan_id){
        $sql = "SELECT education_expenses_considered.id,education_expenses_considered.expenses_considered FROM `education_loan_info_vs_expenses_considered` INNER JOIN education_expenses_considered ON education_expenses_considered.id=education_loan_info_vs_expenses_considered.expenses_considered_id INNER JOIN education_loan_info ON education_loan_info.id= education_loan_info_vs_expenses_considered.loan_info_id WHERE education_loan_info.id = $loan_id ORDER BY education_expenses_considered.id DESC";
        $query = $this->db->query($sql);

        return $query;
    }




    function select_money_maximizer_info($query){
        $sql = "SELECT money_maxi_info.*, money_maxi_choose_your_benefit.your_benefit,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name , general_non_bank.bank_logo AS non_bank_logo FROM money_maxi_info INNER JOIN money_maxi_choose_your_benefit ON money_maxi_choose_your_benefit.id = money_maxi_info.choose_your_benefit_id LEFT JOIN card_bank on card_bank.id=money_maxi_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id $query";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_maximizer_info_pagination($query,$limit=null,$offset=null){

        $link = 'ORDER BY money_maxi_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT money_maxi_info.*, money_maxi_choose_your_benefit.your_benefit,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name , general_non_bank.bank_logo AS non_bank_logo FROM money_maxi_info INNER JOIN money_maxi_choose_your_benefit ON money_maxi_choose_your_benefit.id = money_maxi_info.choose_your_benefit_id LEFT JOIN card_bank on card_bank.id=money_maxi_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id $query $link";
        $query = $this->db->query($sql);

        return $query;
    }


    function select_money_benefit($query){
        $sql = "SELECT monthly_benefit_info.*, monthly_benefit_tenure.no_of_month, monthly_benefit_tenure.tenure,card_bank.bank_name,card_bank.bank_logo FROM monthly_benefit_info INNER JOIN monthly_benefit_tenure ON monthly_benefit_tenure.id = monthly_benefit_info.tenure_id LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id $query";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_money_benefit_pagination($query,$limit=null,$offset=null){

        $link = 'ORDER BY monthly_benefit_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT monthly_benefit_info.*, monthly_benefit_tenure.no_of_month, monthly_benefit_tenure.tenure,card_bank.bank_name,card_bank.bank_logo FROM monthly_benefit_info INNER JOIN monthly_benefit_tenure ON monthly_benefit_tenure.id = monthly_benefit_info.tenure_id LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id $query $link";
        $query = $this->db->query($sql);

        return $query;
    }


    function get_search_index($search_word=null){
        $sql = "SELECT * FROM `search_index` WHERE `tag_words` LIKE '%".$search_word."%'";
        $query = $this->db->query($sql);
        return $query;
    }

    function website_under_maintenance(){
        $sql = "SELECT * FROM active_website ORDER BY id DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query;
    }

}