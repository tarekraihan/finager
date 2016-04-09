<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    /**********************************************
     * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : TSTJAPAN.CO.JP                   *
     * Script : Login Validation controler        *
     * Start Date : 10-11-2015                    *
     * Last Update : 10-11-2015                   *
     **********************************************/

    /*public function admin_login(){

        $email = htmlentities($this->input->post('txtEmail'));
        $password = htmlentities($this->input->post('txtPassword'));

        $check = $this->select_model->check_admin_user($email,$password);
        if($check == true){
            $check_active=$this->select_model->check_admin_user_status($email,$password);
            if($check_active == true){
                $query=$this->select_model->select_admin_user($email,$password);
                if ($query->num_rows() > 0)
                {

                    foreach ($query->result() as $row)
                    {
                        echo $row->first_name;
                        $data['admin_role'] = $row->admin_role;
                        $data['admin_user_id'] = $row->id;
                        $data['admin_first_name'] = $row->first_name;
                        $data['admin_last_name'] = $row->last_name;
                        $data['admin_email'] = $row->admin_email;
                        $data['password'] = $row->password;
                        $data['profile_picture'] = $row->profile_picture;
                        $this->session->set_userdata($data);
                        echo 'success';
                    }
                }
            }else{
                $this->session->set_flashdata('error_message', '2');
                echo 'error';
            }
        }else{
            $this->session->set_flashdata('error_message', '3');
            echo 'error';
        }

    }*/
}