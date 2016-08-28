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
       /* $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtHomeLoanUser[]",$row->id).'>'.$row->home_loan_user.'</option>';

        }*/
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
        $sql="SELECT home_loan_info.id,home_loan_info.home_loan_name,home_loan_info.min_loan_amount,home_loan_info.max_loan_amount,home_loan_info.interest_rate_average,home_loan_info.is_fixed,home_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo , tbl_admin_user.first_name,tbl_admin_user.last_name,home_loan_looking_for.home_loan_looking_for FROM `home_loan_info` INNER JOIN card_bank ON card_bank.id=home_loan_info.bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=home_loan_info.created_by INNER JOIN home_loan_looking_for ON home_loan_looking_for.id=home_loan_info.home_loan_looking_for_id ORDER BY home_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->home_loan_name.'</td>
					 <td class="center">'.$row->bank_name.'</td>
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
        $sql="SELECT auto_loan_info.id,auto_loan_info.auto_loan_name,auto_loan_info.min_loan_amount,auto_loan_info.max_loan_amount,auto_loan_info.interest_rate_average,auto_loan_info.is_fixed,auto_loan_info.interest_rate_fixed,card_bank.bank_name,card_bank.bank_logo , tbl_admin_user.first_name,tbl_admin_user.last_name,auto_i_want.i_want FROM `auto_loan_info` INNER JOIN card_bank ON card_bank.id=auto_loan_info.bank_id INNER JOIN tbl_admin_user ON tbl_admin_user.id=auto_loan_info.created_by INNER JOIN auto_i_want ON auto_i_want.id=auto_loan_info.auto_loan_looking_for_id ORDER BY auto_loan_info.id ASC";
        $query=$this->db->query($sql);
        $result="";

        if($query->num_rows() > 0)
        {
            $sl=1;
            foreach($query->result() as $row)
            {
                $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
                $result.='<tr>
					<td lang="bn">'. $sl.'</td>
					<td class="center"><img src="'. base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->auto_loan_name.'</td>
					 <td class="center">'.$row->bank_name.'</td>
					 <td class="center">'.$row->i_want.'</td>
					 <td class="center"> BDT '.$row->min_loan_amount.' - '.$row->max_loan_amount.'</td>
					 <td class="center"> '.$interest.'</td>
					 <td class="center"> '.$row->first_name.' '.$row->last_name.'</td>';

                $result.='</td>
                    <td><a href="#" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?loan_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

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
        $sql="SELECT home_loan_user_id FROM `home_loan_user_home_loan_info` WHERE home_loan_info_id = $id";
        $query=$this->db->query($sql);
        return $query->result_array();

    }


}