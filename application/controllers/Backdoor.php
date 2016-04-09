<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backdoor extends CI_Controller {

    public function index()
    {
        if(!$this->session->userdata('email_address')){

            $this->load->view('admin/login');
        }
    }

    public function dashboard()
    {
        if ($this->session->userdata('email_address')) {
            $data['title'] = "Finager - Dashboard";
            $this->load->view('admin/block/header',$data);
            $this->load->view('admin/block/left_nav');
            //$this->load->view('admin/test');
            $this->load->view('admin/block/footer');
        }else {
            redirect('backdoor');
        }
    }

    public function admin_role($msg=''){
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtAdminRole', 'Admin Role', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "User - Admin Role";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/admin_user_role');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('admin_role' => $this->input->post('txtAdminRole'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'tbl_admin_user_role';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'backdoor/admin_role/success');
                } else {
                    redirect(base_url().'backdoor/admin_role/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_admin_role($msg='')
    {
        if ($this->session->userdata('email_address')) {

            if ($msg == 'success') {
                $data['feedback'] = '<div class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtAdminRole', 'Admin Role ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_admin_user_role');
                $this->load->view('admin/block/footer');
            }else{
//                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('admin_role' => htmlentities($this->input->post('txtAdminRole')),  'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'tbl_admin_user_role';
                $this->Common_model->where = array('id' => $this->input->post('txtAdminRoleId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'backdoor/edit_admin_role/success');
                } else {
                    redirect(base_url().'backdoor/edit_admin_role/error');
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }



    public function admin_login(){
        $email = htmlentities($this->input->post('txtEmail'));
        $password = trim($this->input->post('txtPassword'));

        $check = $this->Select_model->check_admin_user($email,$password);
        if($check == true){

            $check_active=$this->Select_model->check_admin_user_status($email,$password);
            if($check_active == true){
                $result=$this->Select_model->select_admin_user($email,$password);
                //print_r($result);
                if ($result->num_rows() > 0)
                {

                    foreach ($result->result() as $row)
                    {
                        $data['admin_role'] = $row->admin_role;
                        $data['admin_user_id'] = $row->id;
                        $data['first_name'] = $row->first_name;
                        $data['last_name'] = $row->last_name;
                        $data['email_address'] = $row->email_address;
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
    }

    public function logout() {
        $this->session->unset_userdata('admin_role');
        $this->session->unset_userdata('admin_user_id');
        $this->session->unset_userdata('admin_first_name');
        $this->session->unset_userdata('admin_last_name');
        $this->session->unset_userdata('admin_email');
        $this->session->unset_userdata('profile_picture');
        $this->session->unset_userdata('password');

        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url().'backdoor', 'refresh');
    }




}
