<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : admin  controller                 *
 * Start Date : 29-02-2016                    *
 * Last Update : 29-02-2016                   *
 **********************************************/

class Backdoor extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
        if(!$this->session->userdata('email_address')){
            $this->load->view('admin/login');
        }else{
            $this->dashboard();
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
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
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

    public function create_admin_user(){
        if ($this->session->userdata('email_address') && $this->session->userdata('admin_role') == 'admin') {

            $this->form_validation->set_rules('txtEmailAddress', 'Email Address', 'trim|required|is_unique[tbl_admin_user.email_address]');
            $this->form_validation->set_rules('txtAdminUserRole', 'Admin Role', 'trim|required');
            $this->form_validation->set_rules('txtPassword', 'Password', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('txtConfirmPassword', 'Confirm Password', 'matches[txtPassword]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "User - Admin User";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/add_admin_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'email_address' => $this->input->post('txtEmailAddress'),
                    'admin_role_id' => $this->input->post('txtAdminUserRole'),
                    'password' => md5($this->input->post('txtPassword')),
                    'actual_password' => $this->input->post('txtPassword'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'tbl_admin_user';
                $result = $this->Common_model->insert();

                if ($result) {
                    $data['success_message'] = '<div id="message" class="text-center alert alert-success">Successfully Created !! <a href="'.base_url().'" target="_blank"> Finager </a> </span> !!</div></div>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function search_index(){
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('txtTitle', 'Title', 'trim|required');
            $this->form_validation->set_rules('txtTagWords', 'Title', 'trim|required');
            $this->form_validation->set_rules('txtUrl', 'Title', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "User - Admin Role";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/search/search_index');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'search_title' => $this->input->post('txtTitle'),
                    'tag_words' => $this->input->post('txtTagWords'),
                    'url' => $this->input->post('txtUrl'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'search_index';
                $result = $this->Common_model->insert();

                if($result){
                    $data['success_message'] = '<div id="message" class=" text-center alert alert-success">Successfully Save !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'backdoor/search_index/');
                }else{
                    $data['error_message'] = '<div id="message" class=" text-center alert alert-danger">Problem to Save !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'backdoor/search_index/');
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
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }

            $this->form_validation->set_rules('txtAdminRole', 'Admin Role ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Admin Role";
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
                        $data['admin_first_login'] = $row->first_login;
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
