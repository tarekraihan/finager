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
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtBankName",$row->id).'>'.$row->bank_name.'</option>';
        }
        return $option;
    }

    function select_card_type()
    {
        $sql="SELECT * FROM `card_card_type`";
        $query=$this->db->query($sql);
        $option="<option value=''>-- Select One --</option>";
        foreach($query->result() as $row)
        {
            $option.='<option value="'.$row->id.'" '.set_select("txtCardType",$row->id).'>'.$row->card_type_name.'</option>';
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
            $option.='<option value="'.$row->id.'" '.set_select("txtCardName",$row->id).'>'.$row->card_name.'</option>';
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

    function Select_Single_Employee_Info($admin_id)
    {
        $query="SELECT a.`admin_user_id`,a.admin_first_name,a.admin_last_name,a.admin_email,a.admin_address,a.admin_phone,a.status,a.last_login,a.profile_picture,a.created,a.modified,b.role_name FROM admin_user AS a INNER JOIN admin_user_role AS b ON a.admin_role=b.role_id WHERE a.admin_user_id=$admin_id";
        $result=mysql_query($query);
        $row=mysql_fetch_array($result);
        if($row['status'] == 1){
            $status= "Active";
        }else{
            $status= "Inactive";
        }

        $feedback='<div class="col-md-2">
                <div class="left-div">
                    <img style="width:70%; height: auto; margin-left: 5%;" src="'.base_url().'resource/images/admin/'.$row['profile_picture'].'" alt="'.$row['admin_first_name'].'" />
                </div>
            </div>
            <div class="col-md-10">
                <div class="right-div">
                    <div class="heading-div">Personal Info</div>
                    <p>Name : '.$row['admin_first_name'].' '.$row['admin_last_name'] .'</p>
                    <p>Email Address : '.$row['admin_email'].'</p>
                    <p>Phone : '.$row['admin_phone'].'</p>
                    <p>User Role : '.$row['role_name'].'</p>
                    <p>Status : '.$status.'</p>
                    <p>Last Login: '.$row['last_login'].'</p>
                    <p>Created : '.$row['created'].'</p>
                    <p>Modified : '.$row['modified'].'</p>
                </div>
            </div>';
        return $feedback;
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
					<td class="center"><img src="'. base_url().'resource/card/credit_card/'.$row->card_image_name.'" style="height:auto; width:80px;"/></td>
					<td class="center">'.$row->card_name.'</td>
					 <td class="center">'.$row->bank_name.'</td>
					 <td class="center">'.$row->card_issuer_name.'</td>
					 <td class="center">'.$row->card_type_name.'</td>
					 <td class="center">'.$row->cc_card_type.'</td>
					 <td class="center">'.$row->first_name.' '.$row->last_name. '</td>';

                $result.='</td>
                    <td><a href="'. base_url().'card/edit_card_info?id='.$row->id.'" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?card_id='. $row->id.'" onclick="return confirm(\'Are you really want to delete this item\')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
					</tr>';
                $sl++;
            }
        }
        return $result;
    }



	
}