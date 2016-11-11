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
        $sql ="SELECT * FROM tbl_admin_user LEFT JOIN tbl_admin_user_role ON tbl_admin_user.admin_role_id = tbl_admin_user_role.id WHERE tbl_admin_user.email_address ='$email' AND tbl_admin_user.password = '$password' AND tbl_admin_user.status=1";
        //echo $sql; die;
        $query=$this->db->query($sql);
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

    public function Select_Sub_Project()
    {
        $sql="SELECT a.id,a.sub_project_name,a.project_id,a.created,b.project_name FROM sub_project AS a INNER JOIN project AS b ON a.project_id=b.id ORDER BY a.project_id DESC";
        $query=$this->db->query($sql);
        return $query;

    }


    public function select_card_info_list()//To show Card Info list
    {
        $sql="SELECT card_card_informations.id,card_card_informations.card_image_name,card_card_informations.card_name, card_bank.bank_name,card_card_issuer.card_issuer_name, card_card_type.card_type_name,card_credit_card_type.cc_card_type, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `card_card_informations` INNER JOIN card_bank ON card_bank.id=card_card_informations.bank_id INNER JOIN card_card_issuer ON card_card_issuer.id=card_card_informations.cc_issuer_id INNER JOIN card_card_type ON card_card_type.id=card_card_informations.card_type_id INNER JOIN card_credit_card_type ON card_credit_card_type.id=card_card_informations.cc_type_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=card_card_informations.created_by";
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
					 <td class="center">'.$row->first_name.' '.$row->last_name. '</td>';

                $result.='</td>
                    <td><a href="'. base_url().'card/edit_card_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?fees_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
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
					 <td class="center"> BDT '.$row->basic_card_annual_fee.'</td>
					 <td class="center"> BDT '.$row->supplementary_card_annual_fee.'</td>
					 <td class="center"> BDT '.$row->late_payment_fee.'</td>
					 <td class="center"> BDT '.$row->card_replacement_fee.'</td>';

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
        $sql="SELECT home_loan_info.id,home_loan_info.is_non_bank, home_loan_info.home_loan_name,home_loan_info.min_loan_amount,home_loan_info.max_loan_amount,home_loan_info.interest_rate_average,home_loan_info.is_fixed,home_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo , general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name,home_loan_looking_for.home_loan_looking_for FROM `home_loan_info` LEFT JOIN card_bank ON card_bank.id=home_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = home_loan_info.non_bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=home_loan_info.created_by INNER JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id ORDER BY home_loan_info.id ASC";
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
					 <td class="center"> BDT '.$row->min_loan_amount.' - '.$row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'home_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }


    public function select_auto_loan_information()//To show Home loan list
    {
        $sql="SELECT auto_loan_info.id,auto_loan_info.is_non_bank,auto_loan_info.auto_loan_name,auto_loan_info.min_loan_amount,auto_loan_info.max_loan_amount,auto_loan_info.interest_rate_average,auto_loan_info.is_fixed,auto_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo, tbl_admin_user.first_name,tbl_admin_user.last_name,auto_i_want.i_want FROM `auto_loan_info`  LEFT JOIN card_bank ON card_bank.id=auto_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = auto_loan_info.non_bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=auto_loan_info.created_by INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id ORDER BY auto_loan_info.id ASC";
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
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'auto_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function select_personal_loan_information()//To show Home loan list
    {
        $sql="SELECT personal_loan_info.id,personal_loan_info.is_non_bank,personal_loan_info.personal_loan_name,personal_loan_info.min_loan_amount,personal_loan_info.max_loan_amount,personal_loan_info.interest_rate_average,personal_loan_info.is_fixed,general_non_bank.non_bank_name,general_non_bank.bank_logo AS non_bank_logo,personal_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo , tbl_admin_user.first_name,tbl_admin_user.last_name FROM `personal_loan_info`  LEFT JOIN card_bank ON card_bank.id=personal_loan_info.bank_id LEFT JOIN general_non_bank ON general_non_bank.id = personal_loan_info.non_bank_id  INNER JOIN tbl_admin_user ON tbl_admin_user.id=personal_loan_info.created_by  ORDER BY personal_loan_info.id ASC";
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
					<td class="center">'.$row->personal_loan_name.'</td>
					 <td class="center">'.$bank.'</td>
					 <td class="center"> BDT '.$row->min_loan_amount.' - '.$row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'personal_loan/edit_loan_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

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
        $sql = "SELECT fdr_info.id,fdr_info.`no_limit_min_amount`,fdr_info.`min_amount`,fdr_info.`no_limit_max_amount`,fdr_info.`max_amount`,fdr_info.`interest_rate`,fdr_i_am.i_am,fdr_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, fdr_info.is_non_bank, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `fdr_info` INNER JOIN fdr_i_am ON fdr_i_am.id = fdr_info.i_am_id INNER JOIN fdr_tenure ON fdr_tenure.id = fdr_info.tenure_id LEFT JOIN card_bank ON card_bank.id = fdr_info.bank_id  INNER JOIN tbl_admin_user ON tbl_admin_user.id=fdr_info.created_by LEFT JOIN general_non_bank ON general_non_bank.id = fdr_info.non_bank_id ORDER BY fdr_info.id ASC";
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
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="text-center"><img src="'. base_url().'resource/common_images/bank_logo/'.$bank_logo.'" style="height:auto; width:80px;"/></td>
					 <td class="text-center">'.$bank.'</td>
					 <td class="text-center"> '.$row->tenure.'</td>
					 <td class="text-center"> '.$min_amount.'</td>
					 <td class="text-center"> '.$max_amount.'</td>
					 <td class="text-center"> '.$row->interest_rate.'%</td>
					 <td class="text-center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'fdr/fdr_edit_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_dps_info(){
        $sql = "SELECT dps_info.id,dps_info.`loan_facility`,dps_info.`eligibility`,fdr_i_am.i_am,dps_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, dps_info.is_non_bank, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `dps_info` INNER JOIN fdr_i_am ON fdr_i_am.id = dps_info.i_am_id INNER JOIN dps_tenure ON dps_tenure.id = dps_info.tenure_id LEFT JOIN card_bank ON card_bank.id = dps_info.bank_id  INNER JOIN tbl_admin_user ON tbl_admin_user.id=dps_info.created_by LEFT JOIN general_non_bank ON general_non_bank.id = dps_info.non_bank_id ORDER BY dps_info.id ASC";
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
					 <td class="text-center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'dps/edit_dps_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?draft_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    public function get_millionaire_info(){
        $sql = "SELECT millionaire_info.id,millionaire_info.`loan_facility`,millionaire_info.`eligibility`,millionaire_i_am.i_am,millionaire_tenure.tenure,card_bank.bank_name,card_bank.bank_logo ,general_non_bank.non_bank_name, general_non_bank.bank_logo AS non_bank_logo, millionaire_info.is_non_bank, tbl_admin_user.first_name,tbl_admin_user.last_name FROM `millionaire_info` INNER JOIN millionaire_i_am ON millionaire_i_am.id = millionaire_info.i_am_id INNER JOIN millionaire_tenure ON millionaire_tenure.id = millionaire_info.tenure_id LEFT JOIN card_bank ON card_bank.id = millionaire_info.bank_id  INNER JOIN tbl_admin_user ON tbl_admin_user.id=millionaire_info.created_by LEFT JOIN general_non_bank ON general_non_bank.id = millionaire_info.non_bank_id ORDER BY millionaire_info.id ASC";
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
					 <td class="text-center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="'.base_url().'millionaire/edit_millionaire_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?info_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

					</tr>';
                $sl++;
            }
        }
        return $result;
    }

    function Select_dps_info_by_id($id){
        if(!empty($id)){
            $sql="SELECT *  FROM `dps_info`INNER JOIN dps_maturity_amount ON  dps_maturity_amount.dps_info_id = dps_info.id WHERE dps_info.id = $id";
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


}