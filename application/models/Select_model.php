<?php

class Select_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_admin_user($email,$password){
        $this->db->select('*');
        $this->db->from('tbl_admin_user');
        $array = array('email_address' => $email,'password' => md5($password));
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        }else{

            return false;
        }
    }

    public function check_admin_user_status($email,$password){
        $this->db->select('*');
        $this->db->from('tbl_admin_user');
        $array = array('email_address' => $email,'password' => md5($password),'status' => 1);
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        }else{

            return false;
        }
    }


    public function select_admin_user($email,$password)
    {
        $password = md5($password);
        $sql ="SELECT tbl_admin_user.*,tbl_admin_user_role.admin_role FROM tbl_admin_user LEFT JOIN tbl_admin_user_role ON tbl_admin_user.admin_role_id = tbl_admin_user_role.id WHERE tbl_admin_user.email_address ='$email' AND tbl_admin_user.password = '$password' AND tbl_admin_user.status = 1";
        //echo $sql; die;
        $query=$this->db->query($sql);
    
        return $query;
    }

    public function select_all_admin_user(){
        $sql = "SELECT tbl_admin_user.*,tbl_admin_user_role.admin_role FROM tbl_admin_user LEFT JOIN tbl_admin_user_role ON tbl_admin_user.admin_role_id = tbl_admin_user_role.id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_all_admin_user_access(){
        $sql = "SELECT tbl_admin_user.id as user_id, tbl_admin_user.first_name as user_first_name,tbl_admin_user.last_name as user_last_name, tbl_admin_user.email_address, finager_modules.module_name FROM `tbl_admin_user` LEFT JOIN admin_user_vs_modules ON admin_user_vs_modules.user_id = tbl_admin_user.id LEFT JOIN finager_modules ON finager_modules.id = admin_user_vs_modules.module_id ORDER BY tbl_admin_user.id ASC";
        $query = $this->db->query($sql);
        return $query;
    }

    public function  Select_Single_Row($id,$table,$id_field)
    {
        if(empty($id)){
            redirect('my404');
        }
        $sql="SELECT * FROM `$table` WHERE `$id_field`=$id";
        $query=$this->db->query($sql);
        $row = $query->row_array();
        return $row;
    }

    function select_all($table=null,$order=null)
    {
        if($order == null){
            $order = 'DESC';
        }
        $sql="SELECT * FROM $table ORDER BY id $order";
        $query=$this->db->query($sql);
        return $query;

    }
    function get_offline_count()
    {
        $sql="SELECT * FROM active_website ORDER BY id DESC LIMIT 1";
        $query=$this->db->query($sql);

        return $query->row();

    }
    function select_maturity_tenure()
    {
        $sql="SELECT * FROM millionaire_tenure ORDER BY CAST(tenure as SIGNED INTEGER) ASC";
        $query=$this->db->query($sql);
        return $query;

    }


    function select_admin_role()
    {
        $sql="SELECT * FROM `tbl_admin_user_role`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtAdminUserRole",$row->id).'>'.$row->admin_role.'</option>';
        }
        return $option;
    }


    function select_admin_users()
    {
        $sql="SELECT * FROM `tbl_admin_user`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtAdminUser",$row->id).'>'.$row->email_address.'</option>';
        }
        return $option;
    }


    function select_bank()
    {
        $sql="SELECT * FROM `card_bank`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtBankName",$row->id).'>'.$row->bank_name.'</option>';
        }
        return $option;
    }
    function select_district()
    {
        $sql="SELECT * FROM `district`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtDistrict",$row->id).'>'.$row->district.'</option>';
        }
        return $option;
    }
    function select_non_bank()
    {
        $sql="SELECT * FROM `general_non_bank`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtNonBankName",$row->id).'>'.$row->non_bank_name.'</option>';
        }
        return $option;
    }
    function loan_type()
    {
        $sql="SELECT * FROM `loan_type`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLoanType",$row->id).'>'.$row->loan_type.'</option>';
        }
        return $option;
    }

    function deposit_type()
    {
        $sql="SELECT * FROM `deposit_type`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtDepositType",$row->id).'>'.$row->deposit_name.'</option>';
        }
        return $option;
    }

    function select_card_type()
    {
        $sql="SELECT * FROM `card_card_type`";
        $query=$this->db->query($sql);
        $option=">";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCardType",$row->id).'>'.$row->card_type_name.'</option>';
        }
        return $option;
    }

    function home_loan_feature()
    {
        $sql="SELECT * FROM `home_loan_features`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtHomeLoanFeature[]",$row->id).'>'.$row->home_loan_feature.'</option>';
        }
        return $option;
    }

    function auto_loan_feature()
    {
        $sql="SELECT * FROM `auto_features`";
        $query=$this->db->query($sql);
        $option="";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtAutoLoanFeature[]",$row->id).'>'.$row->auto_feature.'</option>';
        }
        return $option;
    }

    function home_loan_applicant_type()
    {
        $sql="SELECT * FROM `home_loan_applicant_type`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtApplicantType[]",$row->id).'>'.$row->home_loan_applicant_type.'</option>';
        }
        return $option;
    }

    function auto_loan_applicant_type()
    {
        $sql="SELECT * FROM `auto_applicant`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtApplicantType[]",$row->id).'>'.$row->applicant.'</option>';
        }
        return $option;
    }


    function select_credit_card_type()
    {
        $sql="SELECT * FROM `card_credit_card_type`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCreditCardType",$row->id).'>'.$row->cc_card_type.'</option>';
        }
        return $option;
    }

    function select_card_name($id)
    {
        $sql="SELECT `id`,`card_name` FROM `card_card_informations` WHERE `bank_id`=$id";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'">'.$row->card_name.'</option>';
        }
        return $option;
    }


    function select_thana($id)
    {
        $sql="SELECT `id`,`thana` FROM `thana` WHERE `district_id`=$id";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'">'.$row->thana.'</option>';
        }
        return $option;
    }


    function select_card_issuer()
    {
        $sql="SELECT * FROM `card_card_issuer`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCardIssuer",$row->id).'>'.$row->card_issuer_name.'</option>';
        }
        return $option;
    }


    function select_deposit_type()
    {
        $sql="SELECT * FROM `deposit_type`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtDepositType",$row->id).'>'.$row->deposit_name.'</option>';
        }
        return $option;
    }

    function select_fdr_i_am()
    {
        $sql="SELECT * FROM `fdr_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIAm",$row->id).'>'.$row->i_am.'</option>';
        }
        return $option;
    }
    function select_money_maximizer_your_benefit()
    {
        $sql="SELECT * FROM `money_maxi_choose_your_benefit`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtYourBenefit",$row->id).'>'.$row->your_benefit.' Times</option>';
        }
        return $option;
    }

    function select_millionaire_i_am()
    {
        $sql="SELECT * FROM `millionaire_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIAm",$row->id).'>'.$row->i_am.'</option>';
        }
        return $option;
    }

    function select_fdr_i_want()
    {
        $sql="SELECT * FROM `fdr_i_want`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIWant",$row->id).'>'.$row->i_want.'</option>';
        }
        return $option;
    }

    function select_current_account_i_am()
    {
        $sql="SELECT * FROM `current_account_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIAm",$row->id).'>'.$row->i_am.'</option>';
        }
        return $option;
    }

    function select_snd_account_i_am()
    {
        $sql="SELECT * FROM `snd_account_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIAm",$row->id).'>'.$row->i_am.'</option>';
        }
        return $option;
    }

    function select_snd_deposit_amount()
    {
        $sql="SELECT * FROM `snd_deposit_amount_range`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtDepositAmount",$row->id).'>'.$row->deposit_amount_range.'</option>';
        }
        return $option;
    }

    function select_fdr_tenure()
    {
        $sql="SELECT * FROM `fdr_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtTenure",$row->id).'>'.$row->tenure.'</option>';
        }
        return $option;
    }

    function select_dps_tenure()
    {
        $sql="SELECT * FROM `dps_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtTenure",$row->id).'>'.$row->tenure.' Year</option>';
        }
        return $option;
    }


    function select_millionaire_tenure()
    {
        $sql="SELECT * FROM `millionaire_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtTenure",$row->id).'>'.$row->tenure.' Year</option>';
        }
        return $option;
    }

    function select_millionaire_maturity_amount()
    {
        $sql="SELECT * FROM `millionaire_maturity_amount`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtMaturityAmount",$row->id).'> Tk. '.$row->maturity_amount.'</option>';
        }
        return $option;
    }


    function card_card_user()
    {
        $sql="SELECT * FROM `card_card_user`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIm[]",$row->id).'>'.$row->card_user.'</option>';

        }
        return $option;
    }

    function looking_for()
    {
        $sql="SELECT * FROM `home_loan_looking_for`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLookingFor[]",$row->id).'>'.$row->home_loan_looking_for.'</option>';

        }
        return $option;
    }

    function select_education_loan_purpose()
    {
        $sql="SELECT * FROM `education_loan_purpose`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLoanPurpose[]",$row->id).'>'.$row->loan_purpose.'</option>';

        }
        return $option;
    }

    function select_min_education_loan_tenure()
    {
        $sql="SELECT * FROM `education_loan_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtMinEducationLoanTenure",$row->id).'>'.$row->tenure.' Year</option>';

        }
        return $option;
    }

    function select_max_education_loan_tenure()
    {
        $sql="SELECT * FROM `education_loan_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtMaxEducationLoanTenure",$row->id).'>'.$row->tenure.' Year</option>';

        }
        return $option;
    }

    function education_loan_expenses_considered()
    {
        $sql="SELECT * FROM `education_expenses_considered`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtExpensesConsidered[]",$row->id).'>'.$row->expenses_considered.'</option>';

        }
        return $option;
    }


    function personal_loan_looking_for()
    {
        $sql="SELECT * FROM `personal_loan_looking_for`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLookingFor[]",$row->id).'>'.$row->personal_loan_looking_for.'</option>';

        }
        return $option;
    }

    function home_loan_user_list()
    {
        $sql="SELECT * FROM `home_loan_user`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtHomeLoanUser[]",$row->id).'>'.$row->home_loan_user.'</option>';

        }
        return $option;
    }

    function module_list()
    {
        $sql="SELECT * FROM `finager_modules`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtModule[]",$row->id).'>'.$row->module_name.'</option>';

        }
        return $option;
    }

    function auto_loan_looking_for()
    {
        $sql="SELECT * FROM `auto_i_want`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLookingFor[]",$row->id).'>'.$row->i_want.'</option>';

        }
        return $option;
    }


    function home_loan_user()
    {
        $sql="SELECT * FROM `home_loan_user`";
        $query=$this->db->query($sql);
        return $query;
    }

    function select_finager_all_modules()
    {
        $sql="SELECT * FROM `finager_modules`";
        $query=$this->db->query($sql);
        return $query;
    }

    function auto_loan_all_user()
    {
        $sql="SELECT * FROM `auto_i_am`";
        $query=$this->db->query($sql);
        return $query;
    }

    function personal_loan_all_user()
    {
        $sql="SELECT * FROM `personal_loan_i_am`";
        $query=$this->db->query($sql);
        return $query;
    }


    function auto_loan_user()
    {
        $sql="SELECT * FROM `auto_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtAutoLoanUser[]",$row->id).'>'.$row->i_am.'</option>';

        }
        return $option;
    }


    function personal_loan_user()
    {
        $sql="SELECT * FROM `personal_loan_i_am`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtPersonalLoanUser[]",$row->id).'>'.$row->i_am.'</option>';

        }
        return $option;
    }


    function card_benefit()
    {
        $sql="SELECT * FROM `card_reward`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCardBenefit[]",$row->id).'>'.$row->reward_name.'</option>';
        }
        return $option;
    }
    function debit_card_choose_account()
    {
        $sql="SELECT * FROM `debit_card_choose_account`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtChooseAccount",$row->id).'>'.$row->account_name.'</option>';
        }
        return $option;
    }


    function debit_card_looking_for()
    {
        $sql="SELECT * FROM `debit_card_looking_for`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtLookingFor",$row->id).'>'.$row->looking_for.'</option>';
        }
        return $option;
    }


    function debit_card_i_want()
    {
        $sql="SELECT * FROM `debit_card_i_want`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtIWant",$row->id).'>'.$row->i_want.'</option>';
        }
        return $option;
    }

    function debit_card_issuer()
    {
        $sql="SELECT * FROM `debit_card_issuer`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCardIssuer",$row->id).'>'.$row->card_issuer_name.'</option>';
        }
        return $option;
    }

    function select_monthly_benefit_tenure()
    {
        $sql="SELECT * FROM `monthly_benefit_tenure`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtTenure",$row->id).'>'.$row->tenure.' Year</option>';
        }
        return $option;
    }

    public function Select_Sub_Project()
    {
        $sql="SELECT a.id,a.sub_project_name,a.project_id,a.created,b.project_name FROM sub_project AS a INNER JOIN project AS b ON a.project_id=b.id ORDER BY a.project_id DESC";
        $query=$this->db->query($sql);
        return $query;

    }


    public function select_card_info_list()//To show Card Info list
    {
        $sql="SELECT card_card_informations.id,card_card_informations.card_image_name,card_card_informations.card_name, card_bank.bank_name, card_card_informations.modified,card_card_issuer.card_issuer_name, card_card_type.card_type_name,card_credit_card_type.cc_card_type, admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `card_card_informations` INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= card_card_informations.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= card_card_informations.modified_by";
        $query=$this->db->query($sql);
        $result="";
        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center">'.$row->id.'</td>
					<td class="center"><img src="'. base_url().'resource/card/credit_card/'.$row->card_image_name.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->card_name.'</td>
					 <td class="center">'.$row->bank_name.'</td>
					 <td class="center">'.$row->card_issuer_name.'</td>
					 <td class="center">'.$row->card_type_name.'</td>
					 <td class="center">'.$row->cc_card_type.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'en/card_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'. base_url().'card/edit_card_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?fees_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_debit_card_info_list()//To show Card Info list
    {
        $sql="SELECT debit_card_info.id,debit_card_info.bank_id,debit_card_info.annual_fee,debit_card_info.card_name,debit_card_info.modified,card_bank.bank_name,card_bank.bank_logo,debit_card_choose_account.account_name,debit_card_issuer.card_issuer_name,debit_card_i_want.i_want,debit_card_looking_for.`looking_for`,admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `debit_card_info`Inner Join card_bank ON card_bank.id=debit_card_info.bank_id INNER JOIN debit_card_choose_account ON debit_card_choose_account.id = debit_card_info.choose_account_id INNER JOIN debit_card_issuer ON debit_card_issuer.id = debit_card_info.card_issuer_id INNER JOIN debit_card_i_want ON debit_card_i_want.id = debit_card_info.i_want_id INNER JOIN debit_card_looking_for ON debit_card_looking_for.id = debit_card_info.looking_for_id LEFT JOIN tbl_admin_user admin1 ON admin1.id= debit_card_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= debit_card_info.modified_by ORDER BY debit_card_info.id ASC ";
        $query=$this->db->query($sql);
        $result="";
        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><a href="'. base_url().'debit_card/edit_card_info?id='.$row->id.'" class="edit">'.$row->id.'</a></td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->card_name.'</td>
					 <td class="center">'.$row->bank_name.'</td>
					 <td class="center">'.$row->account_name.'</td>
					 <td class="center">'.$row->card_issuer_name.'</td>
					 <td class="center">'.$row->i_want.'</td>
					 <td class="center">'.$row->looking_for.'</td>
					 <td class="center">'.$row->annual_fee.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'en/debit_card_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'. base_url().'debit_card/edit_card_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?card_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_card_fees_charges_list()//To show Card card_fees_charges_list
    {
        $sql="SELECT card_bank.bank_name, card_card_informations.card_name, card_credit_card_type.cc_card_type,card_fees_charges.id, card_fees_charges.basic_card_annual_fee,card_fees_charges.supplementary_card_annual_fee, card_fees_charges.late_payment_fee,card_fees_charges.card_replacement_fee FROM card_card_informations INNER JOIN `card_fees_charges`ON card_card_informations.id=card_fees_charges.card_id INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id";
        $query=$this->db->query($sql);
        $result="";
        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center">'.$row->bank_name.'</td>
					 <td class="center">'.$row->card_name.'</td>
					 <td class="center">'.$row->cc_card_type.'</td>
					 <td class="center"> '.$row->basic_card_annual_fee.'</td>
					 <td class="center"> '.$row->supplementary_card_annual_fee.'</td>
					 <td class="center"> '.$row->late_payment_fee.'</td>
					 <td class="center"> '.$row->card_replacement_fee.'</td>';

                $result.='</td>
                    <td><a href="'. base_url().'card/edit_fees_charges/'.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?card_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_home_loan_information()//To show Home loan list
    {
        $sql="SELECT home_loan_info.id,home_loan_info.is_non_bank, home_loan_info.home_loan_name,home_loan_info.min_loan_amount,home_loan_info.max_loan_amount,home_loan_info.interest_rate_average,home_loan_info.is_fixed,home_loan_info.interest_rate_fixed,home_loan_info.modified,card_bank.bank_name,card_bank.bank_logo , general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name ,home_loan_looking_for.home_loan_looking_for FROM `home_loan_info` LEFT JOIN card_bank ON card_bank.id=home_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= home_loan_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= home_loan_info.modified_by INNER JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id ORDER BY home_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {

            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->home_loan_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center">'.$row->home_loan_looking_for.'</td>
					 <td class="center"> BDT '. number_format($row->min_loan_amount).' - '.number_format($row->max_loan_amount).'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';
                $result.='</td>
                    <td><a href="'.base_url().'en/home_loan_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'home_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_auto_loan_information()//To show Home loan list
    {
        $sql="SELECT auto_loan_info.id,auto_loan_info.is_non_bank,auto_loan_info.auto_loan_name,auto_loan_info.modified,auto_loan_info.min_loan_amount,auto_loan_info.max_loan_amount,auto_loan_info.interest_rate_average,auto_loan_info.is_fixed,auto_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name ,auto_i_want.i_want FROM `auto_loan_info`  LEFT JOIN card_bank ON card_bank.id=auto_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id LEFT JOIN tbl_admin_user admin1 ON admin1.id= auto_loan_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= auto_loan_info.modified_by INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id ORDER BY auto_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->auto_loan_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center">'.$row->i_want.'</td>
					 <td class="center"> BDT '.$row->min_loan_amount.' - '.$row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';
                $result.='</td>
                    <td><a href="'.base_url().'en/car_loan_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'auto_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_personal_loan_information()//To show Home loan list
    {
        $sql="SELECT personal_loan_info.id,personal_loan_info.is_non_bank,personal_loan_info.personal_loan_name,personal_loan_info.min_loan_amount,personal_loan_info.modified,personal_loan_info.max_loan_amount,personal_loan_info.interest_rate_average,personal_loan_info.is_fixed,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo,personal_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `personal_loan_info`  LEFT JOIN card_bank ON card_bank.id=personal_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id LEFT JOIN tbl_admin_user admin1 ON admin1.id= personal_loan_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= personal_loan_info.modified_by  ORDER BY personal_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td lang="bn">'. $row->id.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->personal_loan_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> BDT '.$row->min_loan_amount.' - '. $row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'en/personal_loan_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'personal_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_maximizer_deposit_information()//To show Home loan list
    {
        $sql="SELECT money_maxi_info.id,money_maxi_info.modified ,money_maxi_info.is_non_bank,money_maxi_info.deposit_name,money_maxi_info.credit_facility,money_maxi_choose_your_benefit.your_benefit,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo,card_bank.bank_name,card_bank.bank_logo , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `money_maxi_info`  LEFT JOIN card_bank ON card_bank.id=money_maxi_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = money_maxi_info.non_bank_id   LEFT JOIN tbl_admin_user admin1 ON admin1.id= money_maxi_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= money_maxi_info.modified_by  INNER JOIN money_maxi_choose_your_benefit ON money_maxi_choose_your_benefit.id =money_maxi_info.choose_your_benefit_id ORDER BY money_maxi_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->deposit_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> '.$row->your_benefit.' Times</td>
					 <td class="center"> '.$row->credit_facility.' %</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'money_maximizer/edit_deposit_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?deposit_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_fdr_draft_info()//To show FDR Common Info list
    {
        $sql="SELECT fdr_info_draft.id,fdr_info_draft.eligibility,fdr_info_draft.is_non_bank,deposit_type.deposit_name,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `fdr_info_draft` LEFT JOIN card_bank ON card_bank.id=fdr_info_draft.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=fdr_info_draft.non_bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=fdr_info_draft.created_by INNER JOIN deposit_type ON deposit_type.id= fdr_info_draft.deposit_type_id ORDER BY fdr_info_draft.id ASC";
        $query=$this->db->query($sql);

        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="center">'.$bank.'</td>
					<td class="center">'.$row->deposit_name.'</td>
					 <td class="center"> '.$row->eligibility.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'fdr/edit_draft_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_dps_draft_info()//To show FDR Common Info list
    {
        $sql="SELECT dps_info_draft.id,dps_info_draft.eligibility,dps_info_draft.is_non_bank,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `dps_info_draft` LEFT JOIN card_bank ON card_bank.id=dps_info_draft.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=dps_info_draft.non_bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=dps_info_draft.created_by ORDER BY dps_info_draft.id ASC";
        $query=$this->db->query($sql);

        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> '.$row->eligibility.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'dps/edit_draft_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_millionaire_draft_info()//To show FDR Common Info list
    {
        $sql="SELECT millionaire_info_draft.id,millionaire_info_draft.eligibility,millionaire_info_draft.is_non_bank,card_bank.bank_name,card_bank.bank_logo,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `millionaire_info_draft` LEFT JOIN card_bank ON card_bank.id=millionaire_info_draft.bank_id LEFT JOIN general_non_bank ON general_non_bank.id=millionaire_info_draft.non_bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=millionaire_info_draft.created_by ORDER BY millionaire_info_draft.id ASC";
        $query=$this->db->query($sql);

        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank != 0){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank != 0){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> '.$row->eligibility.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'millionaire/edit_draft_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }



    public function select_monthly_benefit_info()//To show FDR Common Info list
    {
        $sql="SELECT monthly_benefit_info.*,card_bank.bank_name,card_bank.bank_logo,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `monthly_benefit_info` INNER JOIN card_bank ON card_bank.id=monthly_benefit_info.bank_id LEFT JOIN tbl_admin_user admin1 ON admin1.id= monthly_benefit_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= monthly_benefit_info.modified_by  ORDER BY monthly_benefit_info.id ASC";
        $query=$this->db->query($sql);

        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="center">'.$row->deposit_name.'</td>
					 <td class="center"> '.$row->bank_name.'</td>
					 <td class="center"> '.$row->loan_facility.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'monthly_benefit/edit_deposit_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?deposit_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_fees_charges($fees_id){
        $sql="SELECT * FROM `card_fees_charges`  WHERE id=$fees_id";

        $query = $this->db->query($sql);

        return $query;
    }


    public function select_card_image($id){
        $sql="SELECT card_image_name FROM `card_card_informations`  WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_card_benefit(){
        $sql="SELECT * FROM `card_reward`";
        $query=$this->db->query($sql);
        return $query->result_array();

    }

    public function get_home_loan_user_home_loan_info($id){
        if(!empty($id)) {
            $sql = "SELECT home_loan_user_id FROM `home_loan_user_home_loan_info` WHERE home_loan_info_id = $id";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_admin_user_modules($id){
        if(!empty($id)) {
            $sql = "SELECT module_id FROM `admin_user_vs_modules` WHERE user_id= $id";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

    }



    public function get_card_info_card_user($id){
        if(!empty($id)) {
            $sql = "SELECT card_user_id FROM `card_info_card_user` WHERE card_info_id= $id";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_card_info_card_rewards($id){
        if(!empty($id)) {
            $sql = "SELECT card_reward_id FROM `card_info_card_reward` WHERE card_info_id= '$id'";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_auto_loan_info_vs_i_am($id){
        if(!empty($id)){

            $sql="SELECT i_am_id FROM `auto_loan_info_vs_i_am` WHERE auto_loan_info_id = $id";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

    }
    public function get_personal_loan_info_vs_i_am($id){
        if(!empty($id)){

            $sql="SELECT personal_loan_i_am_id FROM `personal_loan_info_vs_i_am` WHERE personal_loan_info_id = $id";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_education_loan_info_vs_expenses_considered($id){
        if(!empty($id)){

            $sql="SELECT expenses_considered_id FROM `education_loan_info_vs_expenses_considered` WHERE loan_info_id = $id";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_education_loan_info_vs_loan_purpose($id){
        if(!empty($id)){

            $sql="SELECT loan_purpose_id FROM `education_loan_info_vs_loan_purpose` WHERE loan_info_id = $id";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

    }

    public function get_all_fdr_draft_info($bank_id,$deposit_type,$i_am,$is_non_bank){
        $where ='';
        if($is_non_bank == 1){
            $where = 'non_bank_id='.$bank_id.' AND deposit_type_id='.$deposit_type.' AND i_am_id = '.$i_am;
        }else{
            $where = 'bank_id='.$bank_id.' AND deposit_type_id='.$deposit_type.' AND i_am_id = '.$i_am;
        }
        $sql = "SELECT `id`, `bank_id`,non_bank_id, `deposit_type_id`, `available_feature`, `eligibility`, `required_document`, `terms_and_conditions`, `review`, `created_by`, `modified_by`, `created`, `modified` FROM `fdr_info_draft` WHERE $where";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_product_list($table_name){
        $sql = "SELECT `id`,`slug` FROM $table_name";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function get_all_dps_draft_info($bank_id,$i_am,$is_non_bank){
        $where ='';
        if($is_non_bank == 1){
            $where = 'non_bank_id='.$bank_id.' AND i_am_id = '.$i_am;
        }else{
            $where = 'bank_id='.$bank_id.' AND i_am_id = '.$i_am;
        }
        $sql = "SELECT `id`, `bank_id`,non_bank_id, `available_feature`, `eligibility`, `required_document`, `terms_and_conditions`,`available_benefit`, `fees_and_charges`, `review`, `created_by`, `modified_by`, `created`, `modified` FROM `dps_info_draft` WHERE $where";
        $query=$this->db->query($sql);
        return $query->row();
    }

    public function get_all_millionaire_draft_info($bank_id,$i_am,$is_non_bank,$maturity_amount_id){
        $where ='';
        if($is_non_bank == 1){
            $where = 'non_bank_id='.$bank_id.' AND i_am_id = '.$i_am.' AND maturity_amount_id='.$maturity_amount_id;
        }else{
            $where = 'bank_id='.$bank_id.' AND i_am_id = '.$i_am .' AND maturity_amount_id='.$maturity_amount_id;
        }
        $sql = "SELECT `id`, `bank_id`,non_bank_id,`maturity_amount_id`, `available_feature`, `eligibility`, `required_document`, `terms_and_conditions`,`available_benefit`, `fees_and_charges`, `review`, `created_by`, `modified_by`, `created`, `modified` FROM `millionaire_info_draft` WHERE $where";
//        echo $maturity_amount_id;
        $query=$this->db->query($sql);
        return $query->row();
    }

    public function get_fdr_info(){
        $sql = "SELECT fdr_info.id,fdr_info.`no_limit_min_amount`,fdr_info.`min_amount`,fdr_info.`no_limit_max_amount`,fdr_info.`max_amount`,fdr_info.`interest_rate`,fdr_info.`loan_facility`,fdr_info.`modified`,fdr_i_am.i_am,fdr_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, fdr_info.is_non_bank, admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `fdr_info` INNER JOIN fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id INNER JOIN fdr_tenure ON fdr_tenure.id = fdr_info.tenure_id LEFT JOIN card_bank ON card_bank.id = fdr_info.bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= fdr_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= fdr_info.modified_by  LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id ORDER BY fdr_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {

                $max_amount ='';
                if($row->no_limit_max_amount != 1){
                    $max_amount = $row->max_amount;
                }else{
                    $max_amount = 'Unlimited';
                }
                $min_amount ='';
                if($row->no_limit_min_amount != 1){
                    $min_amount = $row->min_amount;
                }else{
                    $min_amount = 0;
                }
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $loan_facility = ($row->loan_facility != 0) ? $row->loan_facility.' % ' : 'N/A';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center">'. $row->id.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->tenure.'</td>
					 <td class="text-center"> '.$min_amount.'</td>
					 <td class="text-center"> '.$max_amount.'</td>
					 <td class="text-center"> '.$row->interest_rate.'%</td>
					 <td class="text-center"> '.$loan_facility.'</td>
					 <td class="text-center"> '.$row->i_am.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'en/fdr_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'fdr/fdr_edit_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_dps_info(){
        $sql = "SELECT dps_info.id,dps_info.`loan_facility`,dps_info.`eligibility`,fdr_i_am.i_am,dps_tenure.id as tenure_id,dps_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, dps_info.is_non_bank,  dps_info.modified,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `dps_info` INNER JOIN fdr_i_am ON fdr_i_am.id = dps_info.i_am_id INNER JOIN dps_tenure ON dps_tenure.id = dps_info.tenure_id LEFT JOIN card_bank ON card_bank.id = dps_info.bank_id   LEFT JOIN tbl_admin_user admin1 ON admin1.id= dps_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= dps_info.modified_by LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id ORDER BY dps_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $year =( $row->tenure ==1) ?'Year' : 'Years';

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center">'. $row->id.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->tenure.' '.$year.'</td>
					 <td class="text-center"> '.$row->loan_facility.'%</td>
					 <td> '.$row->eligibility.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';
                $result.='</td>
                    <td><a href="'.base_url().'en/dps_details/'.$row->id.'/1000" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'dps/edit_dps_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?info_id='. $row->id.'&tenure_id='.$row->tenure_id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_millionaire_info(){
        $sql = "SELECT millionaire_info.id,millionaire_info.`loan_facility`,millionaire_info.`eligibility`,millionaire_i_am.i_am,millionaire_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, millionaire_info.is_non_bank,  millionaire_info.modified,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `millionaire_info` INNER JOIN millionaire_i_am ON millionaire_i_am.id = millionaire_info.i_am_id INNER JOIN millionaire_tenure ON millionaire_tenure.id = millionaire_info.tenure_id LEFT JOIN card_bank ON card_bank.id = millionaire_info.bank_id   LEFT JOIN tbl_admin_user admin1 ON admin1.id= millionaire_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= millionaire_info.modified_by  LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id ORDER BY millionaire_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $year =( $row->tenure ==1) ?'Year' : 'Years';

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->tenure.' '.$year.'</td>
					 <td class="text-center"> '.$row->loan_facility.'%</td>
					 <td> '.$row->eligibility.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'en/millionaire_details/'.$row->id.'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="'.base_url().'millionaire/edit_millionaire_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?info_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_current_account_info(){
        $sql = "SELECT current_account_info.id,current_account_info.`opening_balance`,current_account_info.`total_branch`,current_account_info.`overdraft_facility`,current_account_info.`modified`,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, current_account_info.is_non_bank,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `current_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id = current_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id = current_account_info.bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= current_account_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= current_account_info.modified_by  LEFT JOIN general_non_bank ON general_non_bank.id = current_account_info.non_bank_id ORDER BY current_account_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                //$year =( $row->tenure ==1) ?'Year' : 'Years';

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->opening_balance.'</td>
					 <td class="text-center"> '.$row->total_branch.'</td>
					 <td> '.$row->overdraft_facility.'</td>
					 <td> '.$row->i_am.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';
                $result.='</td>
                    <td><a href="'.base_url().'current_account/edit_account_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?account_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_saving_account_info(){
        $sql = "SELECT saving_account_info.id,saving_account_info.`opening_balance`,saving_account_info.`interest_rate`,saving_account_info.`min_balance_for_interest`,saving_account_info.`modified`,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, saving_account_info.is_non_bank,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `saving_account_info` INNER JOIN current_account_i_am ON current_account_i_am.id = saving_account_info.i_am_id LEFT JOIN card_bank ON card_bank.id = saving_account_info.bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= saving_account_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= saving_account_info.modified_by  LEFT JOIN general_non_bank ON general_non_bank.id = saving_account_info.non_bank_id ORDER BY saving_account_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                //$year =( $row->tenure ==1) ?'Year' : 'Years';

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->opening_balance.'</td>
					 <td class="text-center"> '.$row->interest_rate.'</td>
					 <td> '.$row->min_balance_for_interest.'</td>
					 <td> '.$row->i_am.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'saving_account/edit_account_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?account_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function get_snd_account_info(){
        $sql = "SELECT snd_info.id,snd_info.`opening_balance`,snd_info.`interest_rate`,snd_info.`notice_day`,snd_info.`interest_paid`,snd_info.`modified`,current_account_i_am.i_am,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, snd_info.is_non_bank,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM `snd_info` INNER JOIN current_account_i_am ON current_account_i_am.id = snd_info.i_am_id LEFT JOIN card_bank ON card_bank.id = snd_info.bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= snd_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= snd_info.modified_by  LEFT JOIN general_non_bank ON general_non_bank.id = snd_info.non_bank_id ORDER BY snd_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                //$year =( $row->tenure ==1) ?'Year' : 'Years';

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->opening_balance.'</td>
					 <td class="text-center"> '.$row->interest_rate.'</td>
					 <td> '.$row->notice_day.'</td>
					 <td> '.$row->i_am.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'snd_account/edit_account_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?account_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    function Select_dps_info_by_id($id){
        if(!empty($id)){

           $sql="SELECT `id` as dps_id, `dps_name`, `bank_id`, `is_non_bank`, `non_bank_id`, `is_islami_sharia`, `interest_rate`, `tenure_id` , `loan_facility`, `i_am_id`, `available_feature`, `terms_and_conditions`, `eligibility`, `required_document`, `available_benefit`, `fees_and_charges`, `review`, `minimum_amount`, `maximum_amount` FROM `dps_info` WHERE id = $id";
            $query=$this->db->query($sql);
            $dps = $query->row_array();
            $tenure_id = $dps['tenure_id'];

            $sql2="SELECT *  FROM dps_maturity_amount WHERE dps_info_id = $id AND dps_tenure_id = $tenure_id";
            $query2=$this->db->query($sql2);
            $dps_maturity =  $query2->row_array();
            return array_merge($dps,$dps_maturity);
        }

    }


    function Select_monthly_benefit_info_by_id($id){
        if(!empty($id)){
            $sql="SELECT * FROM monthly_benefit_info WHERE monthly_benefit_info.id = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }

    }


    function Select_money_maximizer_info_by_id($id){
        if(!empty($id)){
            $sql="SELECT *  FROM money_maxi_info WHERE money_maxi_info.id = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }

    }

    function Select_debit_card_info_by_id($id){
        if(!empty($id)){
            $sql="SELECT *  FROM debit_card_info WHERE debit_card_info.id = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }

    }

    function Select_millionaire_tenure_by_id($id){
        if(!empty($id)){
            $sql="SELECT `maturity_amount` FROM `millionaire_maturity_amount` WHERE id = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }

    function Select_bank_info_by_id($id){
        if(!empty($id)){
            $sql="SELECT * FROM `card_bank` WHERE `id`  = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }

    function Select_card_features_by_id($id){
        if(!empty($id)){
            $sql="SELECT * FROM `card_reward` WHERE `id` = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }
    function Select_card_card_type_by_id($id){
        if(!empty($id)){
            $sql="SELECT * FROM `card_card_type` WHERE `id`  = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }

    function Select_card_card_issuer_by_id($id){
        if(!empty($id)){
            $sql="SELECT * FROM `card_card_issuer` WHERE `id` =  = $id";
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }

    function Select_range($table_name, $filed_name,$start,$limit){

    }


    function Select_map_info(){
        $sql ="SELECT map_informations.*,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name  FROM `map_informations` INNER JOIN card_bank ON card_bank.id = map_informations.bank_id  INNER JOIN tbl_admin_user ON tbl_admin_user.id=map_informations.created_by LEFT JOIN general_non_bank ON general_non_bank.id = map_informations.non_bank_id ORDER BY map_informations.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }


                $type ='';
                if($row->type_id == 1){
                    $type = "ATM";
                }else if ($row->type_id == 2){
                    $type = "Branch Office";
                }else{
                    $type = "Head Office";
                }

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$type.'</td>
					 <td class="text-center"> '.$row->latitude.'</td>
					 <td> '.$row->longitude.'</td>
					 <td class="text-center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'map/edit?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?info_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;

    }


    public function select_education_loan_information()//To Show Education loan list
    {
        $sql="SELECT education_loan_info.id,education_loan_info.is_non_bank, education_loan_info.loan_name,education_loan_info.min_loan_amount,education_loan_info.max_loan_amount,education_loan_info.`avg_interest`,education_loan_info.is_fixed,education_loan_info.`fixed_interest`,card_bank.bank_name,card_bank.bank_logo , general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo,  education_loan_info.modified,  admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name  FROM education_loan_info LEFT JOIN card_bank ON card_bank.id=education_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = education_loan_info.non_bank_id  LEFT JOIN tbl_admin_user admin1 ON admin1.id= education_loan_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= education_loan_info.modified_by  ORDER BY education_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }

                $interest =($row->is_fixed =='0')? $row->avg_interest.' % (Avg)' : $row->fixed_interest.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->loan_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> BDT '.$row->min_loan_amount.' - '.$row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'education_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_millionaire_tenure_by_amount($query){
        $sql="SELECT millionaire_tenure.id,millionaire_tenure.tenure FROM millionaire_tenure WHERE millionaire_tenure.id IN (SELECT Distinct tenure_id as tenure FROM `millionaire_info` $query )";
//        echo $sql;
        $query=$this->db->query($sql);
        return $query;
    }


    public function select_subscriptions_information(){

        $sql="SELECT * FROM `subscriptions`";
        $query=$this->db->query($sql);
        $result="";
        if($query->num_rows() > 0){
            $sl=1;
            foreach($query->result() as $row){
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"> '.$row->email_address.'</td>
					<td class="center"> '.$row->ip_address.'</td>
					<td class="center"> '.date('Y-m-d H:i:s',strtotime($row->created)).'</td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_all_modules(){

        $sql="SELECT finager_modules.*,tbl_admin_user.first_name,tbl_admin_user.last_name FROM `finager_modules` INNER JOIN tbl_admin_user ON tbl_admin_user.id=finager_modules.created_by";
        $query=$this->db->query($sql);
        $result="";
        if($query->num_rows() > 0){
            $sl=1;
            foreach($query->result() as $row){
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"> '.$row->module_name.'</td>
					<td class="center"> '.$row->first_name.' '.$row->last_name.'</td>
					<td class="center"> '.date('Y-m-d h:i:s a',strtotime($row->created)).'</td>';
                $result.='</td>
                    <td><a href="'.base_url().'backdoor/edit_module?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?module_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_visitor_information()//To show Home loan list
    {
        $sql="SELECT * FROM `visitor_counter` GROUP BY ip_address ORDER BY id DESC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {

            $sl=1;
            foreach($query->result() as $row)
            {
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"> '.$row->page_name.'</td>
					<td class="center"> '.$row->event_name.'</td>
					<td class="center"> '.$row->ip_address.'</td>
					<td class="center"> '.$row->browser_name.'</td>
					<td class="center"> <img src="'. base_url().'resource/admin/img/blank.gif" class="flag flag-'.strtolower ($row->country_code).'" alt="'.$row->country.'"> '.$row->country.'</td>
					<td class="center"> '.$row->region.'</td>
					<td class="center"> '.$row->city.'</td>
					<td class="center"> '.$row->latitude.'</td>
					<td class="center"> '.$row->longitude.'</td>
					<td class="center"> '.$row->currency_code.'</td>
					<td class="center"> '.$row->currency_symbol.'</td>
					<td class="center"> '.date('Y-m-d H:i:s',strtotime($row->created)).'</td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_visitor_info()//To show Home loan list
    {
        $sql = "SELECT * FROM `visitor_counter` GROUP BY ip_address ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query;
    }


    public function select_all_bank_list()
    {
        $sql = "SELECT card_bank.* , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `card_bank` LEFT JOIN tbl_admin_user admin1 ON admin1.id= card_bank.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= card_bank.modified_by ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_all_non_bank_list()
    {
        $sql = "SELECT general_non_bank.* , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name FROM `general_non_bank` LEFT JOIN tbl_admin_user admin1 ON admin1.id= general_non_bank.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= general_non_bank.modified_by ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function select_all_institution_branch_info_list()
    {
        $sql = "SELECT general_institution_branch_info.* , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name, general_non_bank.bank_logo as non_bank_logo,card_bank.bank_logo as bank_logo,general_non_bank.non_bank_name,card_bank.bank_name FROM `general_institution_branch_info` LEFT JOIN tbl_admin_user admin1 ON admin1.id= general_institution_branch_info.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= general_institution_branch_info.modified_by LEFT JOIN card_bank ON card_bank.id = general_institution_branch_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = general_institution_branch_info.non_bank_id";
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



    public function Select_bank_non_bank_event_info_by_id($id)
    {
        $sql = "SELECT * FROM institution_event_history WHERE id = $id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }



    public function Select_Exchange_Rate()
    {
        $sql = "SELECT COUNT(day(daily_exchange_rate.date_of_exchange_rate)) as number_of_rows, daily_exchange_rate.central_bank_buy_rate, daily_exchange_rate.central_bank_sell_rate, daily_exchange_rate.date_of_exchange_rate, CONCAT(admin1.first_name ,' ' ,admin1.last_name) as uploaded_by, daily_exchange_rate.created_on FROM `daily_exchange_rate` LEFT JOIN tbl_admin_user admin1 ON admin1.id= daily_exchange_rate.created_by GROUP BY daily_exchange_rate.date_of_exchange_rate ORDER BY daily_exchange_rate.date_of_exchange_rate DESC";
        $query = $this->db->query($sql);
        return $query;
    }

    public function Select_Central_Bank_Exchange_Rate()
    {
        $sql = "SELECT DAYNAME(date_of_exchange_rate) AS day_name , date_of_exchange_rate, day(date_of_exchange_rate) AS day FROM `daily_exchange_rate` ORDER BY date_of_exchange_rate DESC LIMIT 1";
        $query = $this->db->query($sql);
        $result = $query->row();

        $from_date = date("Y-m-d", strtotime($result->date_of_exchange_rate));
        $to_date =  date("Y-m-d", strtotime("-1 day", strtotime($result->date_of_exchange_rate)));
      
        $sql1 = "SELECT holiday_date from bank_holiday";
        $query1 = $this->db->query($sql1);
        
        $holidays = [];
        foreach($query1->result_array() as $row ){
            array_push($holidays,date("Y-m-d", strtotime($row['holiday_date'])));
        }

        foreach($holidays as $holiday){
            if($holiday === $to_date){
                $to_date = date("Y-m-d", strtotime("-1 day", strtotime($to_date)));
            }
        }
        if(date('l', strtotime($to_date)) == "Saturday")
        {
            $to_date = date("Y-m-d", strtotime("-2 days", strtotime($to_date)));
        }else if (date('l', strtotime($to_date)) == "Friday"){
            $to_date = date("Y-m-d", strtotime("-1 days", strtotime($to_date)));
        }
        
        foreach($holidays as $holiday){
            if($holiday === $to_date){
                $to_date = date("Y-m-d", strtotime("-1 day", strtotime($to_date)));
            }
        }
       
        $sql2 = "SELECT currency_name,central_bank_buy_rate,central_bank_sell_rate, date_of_exchange_rate FROM `daily_exchange_rate_history` WHERE date_of_exchange_rate BETWEEN '$to_date' AND '$from_date' GROUP BY currency_name,date_of_exchange_rate ORDER BY date_of_exchange_rate DESC";
        $query2 = $this->db->query($sql2);
        $result2 = array();
        foreach($query2->result() as $row){
            $result2[$row->currency_name][] = $row;
        }
        return $result2;
    }

    public function currency_rate()
    {
        $sql = "SELECT DISTINCT(currency_name), central_bank_buy_rate, central_bank_sell_rate, date_of_exchange_rate FROM `daily_exchange_rate` ORDER BY date_of_exchange_rate DESC LIMIT 0,9";
        $query = $this->db->query($sql);
        $result = array();
        foreach($query->result() as $row){
            $result[$row->currency_name] = $row;
        }
        return $result;                                                                                                                                                                                                          
    }

    public function select_all_institution_event_list()
    {
        $sql = "SELECT institution_event_history.* , admin1.first_name as created_first_name,admin1.last_name as created_last_name ,admin2.first_name as modified_first_name,admin2.last_name as modified_last_name, general_non_bank.bank_logo as non_bank_logo,card_bank.bank_logo as bank_logo,general_non_bank.non_bank_name,card_bank.bank_name FROM `institution_event_history` LEFT JOIN tbl_admin_user admin1 ON admin1.id= institution_event_history.created_by LEFT JOIN tbl_admin_user admin2 ON admin2.id= institution_event_history.modified_by LEFT JOIN card_bank ON card_bank.id = institution_event_history.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = institution_event_history.non_bank_id";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0){
            $sl=1;
            foreach($query->result() as $row){
                $bank = "";
                if($row->is_non_bank == 1){
                    $bank = $row->non_bank_name;
                }else{
                    $bank = $row->bank_name;
                }
                $bank_logo = "";
                if($row->is_non_bank == 1){
                    $bank_logo = $row->non_bank_logo;
                }else{
                    $bank_logo = $row->bank_logo;
                }
                $event_type = 'Event';
                if($row->is_history == 1){
                    $event_type = 'History';
                }

                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="center">'.$bank.'</td>
					 <td class="center">'.$row->event_date.'</td>
					 <td class="center">'.$event_type.'</td>
					 <td class="center">'.$row->event_title.'</td>
					 <td class="center">'.$row->created_first_name.' '.$row->created_last_name. '</td>
					 <td class="center">'.$row->modified_first_name.' '.$row->modified_last_name. '</td>
					 <td class="center">'.date("j F Y",strtotime($row->modified)).'</td>';
                $result.='</td>
                    <td> <a href="'.base_url().'general/edit_event_history?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?event_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    
    public function axios_select_exchange_rate_for_list_view()//To Show exchange rate list
    {
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
      
        $sql2 = "SELECT daily_exchange_rate_history.*,(daily_exchange_rate_history.bank_buy_rate * 1000) as bank_buy_rate_amount,(daily_exchange_rate_history.bank_sell_rate * 1000) as bank_sell_rate_amount,card_bank.bank_name ,(daily_exchange_rate_history.central_bank_buy_rate * 1000) as central_bank_buy_rate_amount,(daily_exchange_rate_history.central_bank_sell_rate * 1000) as central_bank_sell_rate_amount,card_bank.bank_name ,card_bank.bank_logo FROM `daily_exchange_rate_history` LEFT JOIN card_bank ON card_bank.id = daily_exchange_rate_history.bank_id WHERE date_of_exchange_rate = '$date' AND currency_name ='USD'";
        $query2 = $this->db->query($sql2);
        
        if($query2){
            $result2 = array();
            foreach($query2->result() as $row){
                $result2[] = $row;
            }
            return json_encode($result2);
        }else{
            $result2 = array( "process"=>false);
            return json_encode( $result2);
        }
        
    }

    public function select_all_delete_items(){
        $sql = "SELECT delete_logs.*, tbl_admin_user.first_name, tbl_admin_user.last_name FROM delete_logs LEFT JOIN tbl_admin_user ON tbl_admin_user.id = delete_logs.deleted_by ORDER BY delete_logs.id DESC";
        $query = $this->db->query($sql);
        return $query;
    }


}