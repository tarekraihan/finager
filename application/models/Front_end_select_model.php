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
        $sql="SELECT id,card_image_name,slug FROM `card_card_informations`  WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_home_loan_image($id){
        $sql="SELECT home_loan_info.id,home_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo, home_loan_info.slug FROM `home_loan_info`  LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id  WHERE home_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }



    public function select_millionaire_image($id){
        $sql="SELECT millionaire_info.id,millionaire_info.slug,millionaire_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `millionaire_info`  LEFT JOIN card_bank on card_bank.id=millionaire_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id  WHERE millionaire_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_monthly_benefit_image($id){
        $sql="SELECT monthly_benefit_info.id,monthly_benefit_info.slug,card_bank.bank_logo FROM `monthly_benefit_info`  LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id WHERE monthly_benefit_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_saving_account_image($id){
        $sql="SELECT saving_account_info.id,saving_account_info.slug,saving_account_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo  FROM `saving_account_info`  LEFT JOIN card_bank on card_bank.id=saving_account_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id WHERE saving_account_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_snd_image($id){
        $sql="SELECT snd_info.id,snd_info.slug,snd_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo  FROM `snd_info`  LEFT JOIN card_bank on card_bank.id=snd_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id WHERE snd_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_money_maximizer_image($id){
        $sql="SELECT money_maxi_info.id,money_maxi_info.slug,money_maxi_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `money_maxi_info`  LEFT JOIN card_bank on card_bank.id=money_maxi_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id  WHERE money_maxi_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_personal_loan_image($id){
        $sql="SELECT personal_loan_info.id,personal_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `personal_loan_info`  LEFT JOIN card_bank on card_bank.id=personal_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id  WHERE personal_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_auto_loan_image($id){
        $sql="SELECT auto_loan_info.id,auto_loan_info.slug,auto_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `auto_loan_info`  LEFT JOIN card_bank on card_bank.id=auto_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id  WHERE auto_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_dps_image($id){
        $sql="SELECT dps_info.id,dps_info.slug,dps_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `dps_info`  LEFT JOIN card_bank on card_bank.id=dps_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id  WHERE dps_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_fdr_image($id){
        $sql="SELECT fdr_info.id,fdr_info.slug,fdr_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `fdr_info`  LEFT JOIN card_bank on card_bank.id=fdr_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id  WHERE fdr_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_education_loan_image($id){
        $sql="SELECT education_loan_info.id,education_loan_info.slug,education_loan_info.is_non_bank,card_bank.bank_logo, general_non_bank.bank_logo AS non_bank_logo   FROM `education_loan_info`  LEFT JOIN card_bank on card_bank.id=education_loan_info.bank_id  LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id  WHERE education_loan_info.id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_compare_image($id,$model_name){
        $sql="SELECT $model_name.id,$model_name.slug,card_bank.bank_logo FROM $model_name  LEFT JOIN card_bank on card_bank.id=$model_name.bank_id WHERE $model_name.id=$id";
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

        $sql = "SELECT DISTINCT home_loan_info.*,card_bank.bank_name,card_bank.bank_logo,card_bank.slug as bank_url,home_loan_looking_for.home_loan_looking_for, general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `home_loan_info` LEFT JOIN card_bank on card_bank.id=home_loan_info.bank_id LEFT JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id INNER JOIN home_loan_user_home_loan_info ON home_loan_user_home_loan_info.home_loan_info_id = home_loan_info.id $query $link";

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




    function select_dps_loan_info_details($field1,$field2,$field3,$id){

        $sql1 = "Select $field1 AS maturity, $field2 AS interest,$field3 From dps_maturity_amount WHERE dps_info_id IN ( $id )";
        $query = $this->db->query($sql1);
        return $query;
    }

    function select_dps_by_id($id){
        $sql = "SELECT dps_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,fdr_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo,dps_tenure.tenure,dps_tenure.no_of_installment FROM dps_info  LEFT JOIN card_bank on card_bank.id=dps_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id INNER JOIN fdr_i_am ON fdr_i_am.id = dps_info.i_am_id INNER JOIN dps_tenure ON dps_tenure.id = dps_info.tenure_id WHERE dps_info.id = $id";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_dps_loan_info_id($field1,$field2,$field3,$where){
        $sql = "Select id FROM dps_info $where";
        $ids = $this->db->query($sql);
        $id = array();
        foreach($ids->result() as $row){
            array_push($id,$row->id);
        }
        if(count($id) > 0 ){
            $id = implode(",",$id);
            $sql1 = "Select $field1 AS maturity, $field2 AS interest,$field3 From dps_maturity_amount WHERE dps_info_id IN ( $id )";
            $query = $this->db->query($sql1);
            return $query;
        }else{
            return 'empty';
        }

    }

    function select_dps_id($where,$limit=null, $offset = null){
        $link = 'ORDER BY dps_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "Select id FROM dps_info $where $link";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_dps_loan_info_id_pagination($field1,$field2,$field3,$where,$limit=null,$offset=null){
        $link = 'ORDER BY dps_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "Select id FROM dps_info $where $link";
        $ids = $this->db->query($sql);
        $id = array();
        foreach($ids->result() as $row){
            array_push($id,$row->id);
        }

        $id = implode(",",$id);
        $sql1 = "Select $field1 AS maturity, $field2 AS interest,$field3 From dps_maturity_amount WHERE dps_info_id IN ( $id )";
//        echo $sql1;
        $query = $this->db->query($sql1);
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


    public function select_savings_account_info($param){
        $sql="SELECT saving_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `saving_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id=saving_account_info.i_am_id  LEFT JOIN card_bank on card_bank.id=saving_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id $param";
        $query = $this->db->query($sql);
        return $query;
    }

    function select_savings_account_info_pagination($param,$limit=null,$offset=null){
        $link = 'ORDER BY saving_account_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT saving_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `saving_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id=saving_account_info.i_am_id  LEFT JOIN card_bank on card_bank.id=saving_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id $param $link";
//        echo $sql;die;
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_savings_account_info_details($id){
        $sql="SELECT saving_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `saving_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id=saving_account_info.i_am_id  LEFT JOIN card_bank on card_bank.id=saving_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id WHERE saving_account_info.id=$id";

        $query = $this->db->query($sql);
        return $query;
    }

    function select_education_loan_expenses_considered($loan_id){
        $sql = "SELECT education_expenses_considered.id,education_expenses_considered.expenses_considered FROM `education_loan_info_vs_expenses_considered` INNER JOIN education_expenses_considered ON education_expenses_considered.id=education_loan_info_vs_expenses_considered.expenses_considered_id INNER JOIN education_loan_info ON education_loan_info.id= education_loan_info_vs_expenses_considered.loan_info_id WHERE education_loan_info.id = $loan_id ORDER BY education_expenses_considered.id DESC";
        $query = $this->db->query($sql);

        return $query;
    }

    function select_current_account_info($where){
        $sql = "SELECT current_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo as non_bank_logo FROM current_account_info INNER JOIN current_account_i_am ON current_account_i_am.id=current_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id=current_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=current_account_info.non_bank_id $where";
        $query = $this->db->query($sql);
        return $query;
    }
    function select_current_account_info_pagination($where,$limit=null,$offset=null){
        $link = 'ORDER BY current_account_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT current_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo as non_bank_logo FROM current_account_info INNER JOIN current_account_i_am ON current_account_i_am.id=current_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id=current_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=current_account_info.non_bank_id $where $link";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_current_account_info_details($id){
        $sql = "SELECT current_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo as non_bank_logo FROM current_account_info INNER JOIN current_account_i_am ON current_account_i_am.id=current_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id=current_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=current_account_info.non_bank_id WHERE current_account_info.id = '$id'";
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

    function select_monthly_benefit_details($id){
        $sql = "SELECT monthly_benefit_info.*, monthly_benefit_tenure.no_of_month, monthly_benefit_tenure.tenure,card_bank.bank_name,card_bank.bank_logo FROM monthly_benefit_info INNER JOIN monthly_benefit_tenure ON monthly_benefit_tenure.id = monthly_benefit_info.tenure_id LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id WHERE monthly_benefit_info.id = '$id'";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_monthly_benefit($query){
        $sql = "SELECT monthly_benefit_info.*, monthly_benefit_tenure.no_of_month, monthly_benefit_tenure.tenure,card_bank.bank_name,card_bank.bank_logo FROM monthly_benefit_info INNER JOIN monthly_benefit_tenure ON monthly_benefit_tenure.id = monthly_benefit_info.tenure_id LEFT JOIN card_bank on card_bank.id=monthly_benefit_info.bank_id $query";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_monthly_benefit_pagination($query,$limit=null,$offset=null){

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

    function select_bank_info($limit,$offset){
        $sql ="SELECT `id`,`bank_name`, `bank_logo` FROM `card_bank` ORDER BY `bank_name` ASC LIMIT $offset,$limit";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_snd_info($param){
        $sql="SELECT snd_info.*,snd_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `snd_info` INNER JOIN snd_account_i_am ON snd_account_i_am.id=snd_info.i_am_id  LEFT JOIN card_bank on card_bank.id=snd_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id $param";
        $query = $this->db->query($sql);
        return $query;
    }
    function select_snd_info_pagination($param,$limit=null,$offset=null){
        $link = 'ORDER BY snd_info.id ASC LIMIT ' . $offset . ', ' . $limit;
        $sql = "SELECT snd_info.*,snd_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo  FROM `snd_info` INNER JOIN snd_account_i_am ON snd_account_i_am.id=snd_info.i_am_id  LEFT JOIN card_bank on card_bank.id=snd_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id $param $link";
//        echo $sql;die;
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_snd_details($id){
        $sql="SELECT DISTINCT snd_info.*,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,snd_account_i_am.i_am, general_non_bank.bank_logo AS non_bank_logo FROM snd_info LEFT JOIN card_bank on card_bank.id=snd_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id Left join snd_account_i_am ON snd_account_i_am.id = snd_info.i_am_id WHERE snd_info.id = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function Select_bank_non_bank_info_by_id($id,$non_bank)
    {
        if($non_bank == 1){
            $table_name = 'general_non_bank';
        }else{
            $table_name = 'card_bank';
        }
        $sql = "SELECT * FROM $table_name WHERE id = $id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }


    public function select_all_home_loan_by_bank_non_bank_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id';
            $where = "home_loan_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=home_loan_info.bank_id';
            $where = "home_loan_info.bank_id={$id}";
        }
        $sql="SELECT home_loan_info.*,home_loan_looking_for.home_loan_looking_for, {$column} FROM `home_loan_info` LEFT JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id {$join} WHERE {$where}";

        $query = $this->db->query($sql);

        return $query;

    }
    public function select_all_personal_loan_by_bank_non_bank_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id';
            $where = "personal_loan_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=personal_loan_info.bank_id';
            $where = "personal_loan_info.bank_id={$id}";
        }
        $sql="SELECT personal_loan_info.*,personal_loan_looking_for.personal_loan_looking_for, {$column} FROM `personal_loan_info` LEFT JOIN personal_loan_looking_for ON personal_loan_looking_for.id=personal_loan_info.personal_loan_looking_for_id {$join} WHERE {$where}";

        $query = $this->db->query($sql);

        return $query;

    }
    public function select_all_auto_loan_by_bank_non_bank_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id';
            $where = "auto_loan_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=auto_loan_info.bank_id';
            $where = "auto_loan_info.bank_id={$id}";
        }
        $sql="SELECT auto_loan_info.*,auto_i_want.i_want, {$column} FROM `auto_loan_info` LEFT JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id {$join} WHERE {$where}";

        $query = $this->db->query($sql);

        return $query;

    }
    public function select_all_education_loan_by_bank_non_bank_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id';
            $where = "education_loan_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=education_loan_info.bank_id';
            $where = "education_loan_info.bank_id={$id}";
        }

        $sql="SELECT education_loan_info.* , tenure1.tenure as min_tenure,tenure2.tenure as max_tenure , {$column} FROM `education_loan_info`  LEFT JOIN education_loan_tenure tenure1 ON tenure1.id= education_loan_info.min_term LEFT JOIN education_loan_tenure tenure2 ON tenure2.id= education_loan_info.max_term  {$join} WHERE {$where}";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_all_fdr_by_bank_non_bank_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id';
            $where = "fdr_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id = fdr_info.bank_id';
            $where = "fdr_info.bank_id={$id}";
        }

        $sql="SELECT fdr_info.* , fdr_tenure.tenure , {$column} FROM `fdr_info`  LEFT JOIN fdr_tenure ON fdr_tenure.id= fdr_info.tenure_id  {$join} WHERE {$where}";
        $query = $this->db->query($sql);
        return $query;
    }


    function Select_dps_info_by_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id';
            $where = "dps_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=dps_info.bank_id';
            $where = "dps_info.bank_id={$id}";
        }
        if(!empty($id)){
            $sql="SELECT `dps_info`.*,dps_tenure.tenure, {$column} FROM `dps_info` LEFT JOIN dps_tenure ON dps_tenure.id= dps_info.tenure_id  {$join} WHERE {$where}";
            $query = $this->db->query($sql);
            return $query;
        }

    }

    function Select_all_millionaire_info_by_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id';
            $where = "millionaire_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=millionaire_info.bank_id';
            $where = "millionaire_info.bank_id={$id}";
        }
        if(!empty($id)){
            $sql="SELECT `millionaire_info`.*,millionaire_maturity_amount.maturity_amount,millionaire_tenure.tenure, {$column} FROM `millionaire_info` LEFT JOIN millionaire_tenure ON millionaire_tenure.id = millionaire_info.tenure_id LEFT JOIN millionaire_maturity_amount ON millionaire_maturity_amount.id = millionaire_info.maturity_amount_id  {$join} WHERE  {$where}";
            $query = $this->db->query($sql);
            return $query;
        }

    }


    function Select_all_money_maximizer_info_by_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id';
            $where = "money_maxi_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=money_maxi_info.bank_id';
            $where = "money_maxi_info.bank_id={$id}";
        }
        if(!empty($id)){
            $sql="SELECT `money_maxi_info`.*,money_maxi_choose_your_benefit.your_benefit, {$column} FROM `money_maxi_info` LEFT JOIN money_maxi_choose_your_benefit ON money_maxi_choose_your_benefit.id = money_maxi_info.choose_your_benefit_id {$join} WHERE  {$where}";
            $query = $this->db->query($sql);
            return $query;
        }

    }

    function Select_all_monthly_benefit_info_by_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = monthly_benefit_info.non_bank_id';
            $where = "monthly_benefit_info.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=monthly_benefit_info.bank_id';
            $where = "monthly_benefit_info.bank_id={$id}";
        }
        if(!empty($id)){
            $sql="SELECT `monthly_benefit_info`.*,monthly_benefit_tenure.tenure, {$column} FROM `monthly_benefit_info` LEFT JOIN monthly_benefit_tenure ON monthly_benefit_tenure.id = monthly_benefit_info.tenure_id {$join} WHERE  {$where}";
            $query = $this->db->query($sql);
            return $query;
        }

    }

    public function Select_all_credit_card_info_by_id($id,$non_bank){
        if($non_bank == 1){
            $column = 'general_non_bank.non_bank_name, general_non_bank.bank_logo';
            $join = 'LEFT JOIN general_non_bank ON general_non_bank.id = card_card_informations.non_bank_id';
            $where = "card_card_informations.non_bank_id={$id}";
        }else{
            $column = 'card_bank.bank_name,card_bank.bank_logo';
            $join = 'LEFT join card_bank on card_bank.id=card_card_informations.bank_id';
            $where = "card_card_informations.bank_id={$id}";
        }
        $sql="SELECT DISTINCT card_card_informations.*,card_bank.bank_name,card_card_type.card_type_name,card_credit_card_type.cc_card_type,card_card_issuer.card_issuer_name, card_fees_charges.`card_id`, card_fees_charges.`basic_card_annual_fee`, card_fees_charges.`supplementary_card_annual_fee`, card_fees_charges.`purchase_fee`, card_fees_charges.`balance_transfer_fee`, card_fees_charges.`cash_advance_fee_own_atm`, card_fees_charges.`cash_advance_fee_other_atm`, card_fees_charges.`cash_advance_fee_international`, card_fees_charges.`late_payment_fee`, card_fees_charges.`card_replacement_fee`, card_fees_charges.`pin_replacement_fee`, card_fees_charges.`over_limit_charge`, card_fees_charges.`transaction_alert_service`, card_fees_charges.`credit_assurance_program_fee`, card_fees_charges.`monthly_e_statement_fee`, card_fees_charges.`check_book_fee`, card_fees_charges.`minimum_payment`, card_fees_charges.`cheque_return_fee`, card_fees_charges.`duplicate_statement`, card_fees_charges.`card_cheque_processing_fee`, card_fees_charges.`card_cheque_issuing_fee`
FROM card_card_informations INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN
 card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id
INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id LEFT JOIN
card_fees_charges ON card_fees_charges.card_id = card_card_informations.id INNER JOIN card_info_card_user ON card_info_card_user.card_info_id=card_card_informations.id INNER JOIN card_info_card_reward ON
 card_info_card_reward.card_info_id=card_card_informations.id WHERE $where";

        $query = $this->db->query($sql);
        return $query;
    }


    public function select_all_debit_card_info($id,$non_bank){
        $where = "debit_card_info.bank_id={$id}";
        $sql="SELECT debit_card_info.*,card_bank.bank_name,card_bank.bank_logo,debit_card_looking_for.looking_for,debit_card_choose_account.account_name,debit_card_issuer.card_issuer_name,debit_card_i_want.i_want,debit_card_looking_for.looking_for FROM debit_card_info  INNER JOIN card_bank ON card_bank.id=debit_card_info.bank_id INNER JOIN debit_card_choose_account ON debit_card_choose_account.id=debit_card_info.choose_account_id INNER JOIN debit_card_issuer ON debit_card_issuer.id=debit_card_info.card_issuer_id INNER JOIN debit_card_i_want ON debit_card_i_want.id=debit_card_info.i_want_id INNER JOIN debit_card_looking_for ON debit_card_looking_for.id=debit_card_info.looking_for_id WHERE $where";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_all_savings_account_info($id,$non_bank){
        $where = "saving_account_info.bank_id={$id}";
        $sql="SELECT saving_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `saving_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id=saving_account_info.i_am_id  LEFT JOIN card_bank on card_bank.id=saving_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id WHERE $where";
        $query = $this->db->query($sql);
        return $query;
    }


    function select_all_current_account_info($id,$non_bank){
        $where = "current_account_info.bank_id={$id}";
        $sql = "SELECT current_account_info.*,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo as non_bank_logo FROM current_account_info INNER JOIN current_account_i_am ON current_account_i_am.id=current_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id=current_account_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=current_account_info.non_bank_id WHERE $where";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_all_snd_info($id,$non_bank){
        $where = "snd_info.bank_id={$id}";
        $sql="SELECT snd_info.*,snd_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo FROM `snd_info` INNER JOIN snd_account_i_am ON snd_account_i_am.id=snd_info.i_am_id  LEFT JOIN card_bank on card_bank.id=snd_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id WHERE $where";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_institution_event_history($id,$non_bank){
        $where = "bank_id={$id}";
        $sql="SELECT * FROM `institution_event_history` WHERE $where ORDER BY id DESC LIMIT 0,10";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_institution_event_history2($id,$non_bank){
        $where = "bank_id={$id}";
        $sql="SELECT * FROM `institution_event_history` WHERE $where ORDER BY id DESC LIMIT 10,1000";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_blog_post_by_product_category($category_name,$offset){

        $sql="SELECT DISTINCT(blog_posts.ID) as post_id,blog_posts.* FROM `blog_posts` INNER JOIN blog_term_relationships ON blog_term_relationships.object_id = blog_posts.ID INNER JOIN blog_term_taxonomy ON blog_term_taxonomy.term_taxonomy_id = blog_term_relationships.term_taxonomy_id INNER JOIN blog_terms ON blog_terms.term_id = blog_term_taxonomy.term_id WHERE  blog_posts.post_status='publish' AND blog_terms.name ='{$category_name}' ORDER BY blog_posts.post_date DESC LIMIT {$offset},1";
        $query = $this->db->query($sql);
        return  $query->row();
    }

    public function select_blog_post_image_url_by_post_id($post_id){

        //$sql="SELECT concat((select option_value from blog_options where option_name ='siteurl' limit 1),'/wp-content/uploads/',childmeta.meta_value) as image_url FROM blog_postmeta childmeta INNER JOIN blog_postmeta parentmeta ON (childmeta.post_id=parentmeta.meta_value) WHERE parentmeta.meta_key='_thumbnail_id' and childmeta.meta_key = '_wp_attached_file' AND parentmeta.post_id = {$post_id}";
        $sql="SELECT blog_posts.guid as image_url FROM blog_posts LEFT JOIN blog_postmeta ON blog_posts.ID = blog_postmeta.meta_value WHERE blog_postmeta.post_id= {$post_id} AND blog_postmeta.meta_key='_thumbnail_id'";
        $query = $this->db->query($sql);
        return  $query->row();
    }

    
    public function axios_select_exchange_rate_for_list_view($query_string,$amount)//To Show exchange rate list
    {
        $amoun = $amount ? $amount : 1000;
       
        $sql = "SELECT DAYNAME(date_of_exchange_rate) AS day_name , date_of_exchange_rate, day(date_of_exchange_rate) AS day FROM `daily_exchange_rate_history` ORDER BY date_of_exchange_rate DESC LIMIT 1";
        $query = $this->db->query($sql);
        $result = $query->row();
        
        $date = date("Y-m-d", strtotime($result->date_of_exchange_rate));
       

        $sql1 = "SELECT holiday_date from bank_holiday";
        $query1 = $this->db->query($sql1);
        
        $holidays = [];
        foreach($query1->result_array() as $row ){
            array_push($holidays,date("Y-m-d", strtotime($row['holiday_date'])));
        }

        if(in_array($date, $holidays)){
            $date = date("Y-m-d", strtotime("-1 day", strtotime($date)));
        }


        if(date('l', strtotime($date)) == "Sunday")
        {
            $date = date("Y-m-d", strtotime($date));
        }else if(date('l', strtotime($date)) == "Saturday")
        {
            $date = date("Y-m-d", strtotime("-2 days", strtotime($date)));
        }else if (date('l', strtotime($date)) == "Friday"){
            $date = date("Y-m-d", strtotime("-1 days", strtotime($date)));
        }
        if(in_array($date, $holidays)){
            $date = date("Y-m-d", strtotime("-1 day", strtotime($date)));
        }
        
        $sql2 = "SELECT daily_exchange_rate.*,(daily_exchange_rate.bank_buy_rate * $amoun) as bank_buy_rate_amount,(daily_exchange_rate.bank_sell_rate * $amoun) as bank_sell_rate_amount,card_bank.bank_name ,(daily_exchange_rate.central_bank_buy_rate * $amoun) as central_bank_buy_rate_amount,(daily_exchange_rate.central_bank_sell_rate * $amoun) as central_bank_sell_rate_amount,card_bank.bank_name ,card_bank.bank_logo FROM `daily_exchange_rate` LEFT JOIN card_bank ON card_bank.id = daily_exchange_rate.bank_id WHERE date_of_exchange_rate = '$date' ".$query_string ;

        $query2 = $this->db->query($sql2);
        $result2 = array();
        foreach($query2->result() as $row){
            $result2[] = $row;
        }
        return $result2;
    }


}