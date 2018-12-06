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
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 

class Backdoor extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
        if(!$this->session->userdata('admin_role')){
            $this->load->view('admin/login');
        }else{
            $this->dashboard();
        }
    }

    public function dashboard()
    {
        if ($this->session->userdata('admin_role')) {
            $data['title'] = "Finager - Dashboard";
            $this->load->view('admin/block/header',$data);
            $this->load->view('admin/block/left_nav');
            $this->load->view('admin/dashboard');
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


    public function add_module(){
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('txtModuleName', 'Module Name', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Add Module";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/add_module');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('module_name' => $this->input->post('txtModuleName'), 'created' => $date , 'created_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'finager_modules';
                $result = $this->Common_model->insert();

                if ( $result ) {
                    $data['success_message'] = '<span id="message" class="text-center alert alert-success line-block">Successfully Created !! !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Insert !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_module(){
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('txtModuleName', 'Module Name', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Module";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_module');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array('module_name' => $this->input->post('txtModuleName'), 'modified' => $date , 'modified_by'=>$this->session->userdata('admin_user_id'));
                $this->Common_model->table_name = 'finager_modules';
                $this->Common_model->where = array('id'=>$this->input->post('txtModuleId'));
                $result = $this->Common_model->update();

                if ( $result ) {
                    $data['success_message'] = '<span id="message" class="text-center alert alert-success line-block">Successfully Updated !! !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Update !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    public function create_admin_user(){
        if ($this->session->userdata('email_address') && $this->session->userdata('admin_role') == 'super admin') {

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
                    'status' => 1,
                    'admin_first_login' => 1,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'tbl_admin_user';
                $result = $this->Common_model->insert();

                if ( $result ) {
                    $data['success_message'] = '<span id="message" class="text-center alert alert-success line-block">Successfully Created !! !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Insert !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_admin_user(){
        if ($this->session->userdata('email_address') && $this->session->userdata('admin_role') == 'super admin') {

            $this->form_validation->set_rules('txtEmailAddress', 'Email Address', 'trim|required');
            $this->form_validation->set_rules('txtAdminUserRole', 'Admin Role', 'trim|required');
            $this->form_validation->set_rules('txtPassword', 'Password', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('txtConfirmPassword', 'Confirm Password', 'matches[txtPassword]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Admin User";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_admin_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'email_address' => $this->input->post('txtEmailAddress'),
                    'admin_role_id' => $this->input->post('txtAdminUserRole'),
                    'password' => md5($this->input->post('txtPassword')),
                    'actual_password' => $this->input->post('txtPassword'),
                    'status' => $this->input->post('txtStatus'),
                    'admin_first_login' => 1,
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'tbl_admin_user';
                $this->Common_model->where = array('id' => $this->input->post('txtUserId'));
                $result = $this->Common_model->update();

                if ( $result ) {
                    $data['success_message'] = '<span id="message" class="text-center alert alert-success line-block">Successfully Updated !! !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Insert !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    public function ajax_update_admin_user_info(){

//        echo $this->input->post('txtConfirmPassword');die;
        $first_name = $this->input->post('txtFirstName');
        $last_name = $this->input->post('txtLastName');
        $mobile = $this->input->post('txtPhoneNo');
        $password = $this->input->post('txtPassword');

        $this->form_validation->set_rules('txtFirstName','First Name','trim|required');
        $this->form_validation->set_rules('txtLastName','Last Name','trim|required');
        $this->form_validation->set_rules('txtPhoneNo','Mobile No','trim|required|min_length[10]|max_length[14]');
        $this->form_validation->set_rules('txtPassword','Password','trim|required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('txtConfirmPassword','Confirm Password','matches[txtPassword]');

        if ($this->form_validation->run() == FALSE) {
            $html  =    '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
            $html .=    validation_errors();
            $html .=    '</div>';
            echo $html;
        } else {
            $this->Common_model->data = array(
                'first_name'=> htmlentities($first_name),
                'last_name'=> htmlentities($last_name),
                'phone_no'=> htmlentities($mobile),
                'password'=> md5( $password ),
                'actual_password'=> htmlentities($password ),
                'admin_first_login' => 0,
                'modified_by' => $this->session->userdata('admin_user_id'),
                'modified' => date('Y-m-d h:i:s')
            );


            $this->Common_model->table_name = "tbl_admin_user";
            $this->Common_model->where = array('id' => $this->session->userdata('admin_user_id'));
            $result = $this->Common_model->update();


            $data['admin_first_login'] = 0;
            $data['first_name'] = $first_name;
            $data['last_name'] = $last_name;
            $data['password'] = md5($password);
            $this->session->set_userdata($data);


            if($result){
                $html  =    '<div class="alert alert-success" role="alert"><strong> Thank You!</strong> You successfully update your information</a> </div>';
                echo $html;
            }else{
                $html  =    '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
                $html .=    'Something going wrong. Please try again!';
                $html .=    '</div>';
                echo $html;
            }

        }
    }

    public function admin_user_list(){
        if ($this->session->userdata('email_address')) {
            $data['title'] = "Finager - Admin List";
            $this->load->view('admin/block/header',$data);
            $this->load->view('admin/block/left_nav');
            $this->load->view('admin/admin_user_list');
            $this->load->view('admin/block/footer');
        }else {
            redirect('backdoor');
        }
    }
    public function user_access(){
        if ($this->session->userdata('email_address')) {
            $data['title'] = "Finager - Admin List";
            $this->load->view('admin/block/header',$data);
            $this->load->view('admin/block/left_nav');
            $this->load->view('admin/user_access');
            $this->load->view('admin/block/footer');
        }else {
            redirect('backdoor');
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
    public function access_control()
    {
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('txtAdminUser', 'Admin User', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Admin Role";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/access_control');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtAdminUser"),$table='admin_user_vs_modules',$id_field='user_id');
                $result='';
                foreach($this->input->post('txtModule[]') as $module){
                    $this->Common_model->data = array(
                        'user_id'=>$this->input->post('txtAdminUser'),
                        'module_id'=> $module,
                        'assigned_by'=> $this->session->userdata('admin_user_id'),
                        'assigned_date'=> $date
                    );
                    $this->Common_model->table_name = 'admin_user_vs_modules';
                    $result = $this->Common_model->insert();
                }

                if ( $result ) {
                    $data['success_message'] = '<div id="message" class="text-center alert alert-success line-block">Successfully Assigned !! !!</div>';
                    $this->session->set_userdata($data);
                    redirect(base_url().'backdoor/user_access');
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Insert !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function edit_access_control(){
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('txtAdminUser', 'Admin User', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Edit Admin Role";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/edit_access_control');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Delete_model->Delete_All_Row($id=$this->input->post("txtAdminUser"),$table='admin_user_vs_modules',$id_field='user_id');
                $result='';
                foreach($this->input->post('txtModule[]') as $module){
                    $this->Common_model->data = array(
                        'user_id'=>$this->input->post('txtAdminUser'),
                        'module_id'=> $module,
                        'assigned_by'=> $this->session->userdata('admin_user_id'),
                        'assigned_date'=> $date
                    );
                    $this->Common_model->table_name = 'admin_user_vs_modules';
                    $result = $this->Common_model->insert();
                }

                if ( $result ) {
                    $data['success_message'] = '<span id="message" class="text-center alert alert-success line-block">Successfully Updated !! !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<span id="message" class=" text-center alert alert-danger">Problem to Insert !!</span>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }

        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }
/*
    public function ajax_get_all_modules(){
        $user_id = $this->input->post('user_id');
        $result1=$this->Select_model->select_finager_all_modules();
        $module_id =$this->Select_model->get_admin_user_modules($user_id);
        $modules = array();
        foreach($module_id as $k){
            foreach($k as $v){
                array_push($modules,$v);
            }
        }
        $options ='';
        foreach($result1->result() as $row1){

            foreach($modules as $module){
                if($module == $row1->id){
                    $options .='<option value="'.$row1->id.'" selected="select">'.$row1->module_name.'</option>';
                }else{
                    $options .= '<option value="'.$row1->id.'">'.$row1->module_name.'</option>';
                }
            }
        }
        echo $options;
    }*/


    public function admin_login(){
        $email = htmlentities($this->input->post('txtEmail'));
        $password = trim($this->input->post('txtPassword'));

        $check = $this->Select_model->check_admin_user($email,$password);
       
        if($check === true){

            $check_active=$this->Select_model->check_admin_user_status($email,$password);
         
            if($check_active === true){
                $result=$this->Select_model->select_admin_user($email,$password);
                
                if ($result->num_rows() > 0)
                {
                    $row = $result->row();
                    $data = [
                        'admin_role' => $row->admin_role,
                        'admin_user_id' => $row->id,
                        'first_name' => $row->first_name,
                        'last_name' => $row->last_name,
                        'email_address' => $row->email_address,
                        'phone_no' => $row->phone_no,
                        'password' => $row->password,
                        'profile_picture' => $row->profile_picture,
                        'admin_first_login' => $row->admin_first_login
                    ];
                    //$_SESSION = $data;
                    $this->session->set_userdata($data);

                    // $response = [
                    //     "process" => true,
                    //     "message" => "Successfully Login",
                    //     "session" => json_encode($_SESSION)
                    // ];
                    // echo json_encode($response);
                    echo 'success';
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
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $this->session->unset_userdata('email_address');
        $this->session->unset_userdata('phone_no');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('profile_picture');
        $this->session->unset_userdata('admin_first_login');

        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url().'backdoor', 'refresh');
    }

    public function valid_date($date)
    {
        $current_year = date("Y");
        $exchange_date =  explode(".", $date);
        if($exchange_date[0] <= 0 || 31 < $exchange_date[0] || strlen( $exchange_date[0]) > 2 ){
            $this->form_validation->set_message('valid_date', 'The Exchange Date is not in valid format (Ex: dd.mm.YYYY)');
            return false;
        }else if($exchange_date[1] <= 0 || 12 < $exchange_date[1] || strlen( $exchange_date[1]) > 2 ){
                $this->form_validation->set_message('valid_date', 'The Exchange Date is not in valid format (Ex: dd.mm.YYYY)');
                return false;
        }else if($exchange_date[2] <= 2015 || strlen( $exchange_date[2]) !== 4 ){
            $this->form_validation->set_message('valid_date', 'The Exchange Date is not in valid format (Ex: dd.mm.YYYY)');
            return false;
        }else if( $current_year < $exchange_date[2]){
            $this->form_validation->set_message('valid_date', 'The Exchange Date year is not allowed over '.$current_year);
            return false;
        }else{
            return true;
        }
    }
    

    public function upload_currency_rate($msg=""){
        
        if ($this->session->userdata('email_address')) {
            if($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-error">'.$this->session->flashdata('error_message').'!</div>';
            }

            $this->form_validation->set_rules('exchange_date', 'Exchange Date', 'trim|required|callback_valid_date');


            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Exchange Rate";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/currency_exchange/upload_exchange_rate');
                $this->load->view('admin/block/footer');
            }else{
                $upload_result = $this->do_upload('./upload_file', 'file');
                $data = [];
                $error = false;
                $result = false;
                
                $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
                if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
                
                    $arr_file = explode('.', $_FILES['file']['name']);
                    $extension = end($arr_file);
                
                    if('csv' == $extension) {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                    }else if('xls' == $extension) {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                    }else {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                    }
                
                    $spreadsheet = $reader->load('./upload_file/'.$upload_result['file_name']);

                    $rowIterator = $spreadsheet->getActiveSheet()->getRowIterator();
                    foreach($rowIterator as $row){
                        $cellIterator = $row->getCellIterator();
                        foreach ($cellIterator as $cell) {
                            $data[$row->getRowIndex()][$cell->getColumn()] = $cell->getCalculatedValue();
                        }
                    }

                    if($data[1]["A"] !=="BankName" || $data[1]["B"] !=="BankId" || $data[1]["C"] !=="Currency" || $data[1]["D"] !=="BuyRate" || $data[1]["E"] !=="SellRate" || $data[1]["F"] !=="BbBuyRate"  || $data[1]["G"] !=="BbSellRate"){
                        $this->session->set_flashdata('error_message', 'Invalid Data Format');
                        $error = true;
                    }else{
                        foreach($data as $row){
                            if($row['A'] !=='BankName'){
                                $date = date('Y-m-d h:i:s');
                                $this->Common_model->data = array(
                                    'bank_id' => (int) $row['B'],
                                    'currency_name'=> (string) $row['C'],
                                    'bank_buy_rate'=> (float) $row['D'],
                                    'bank_sell_rate'=> (float) $row['E'],
                                    'central_bank_buy_rate'=> (float) $row['F'],
                                    'central_bank_sell_rate'=> (float) $row['G'],
                                    'date_of_exchange_rate'=> date('Y-m-d', strtotime($this->input->post('exchange_date'))),
                                    'created_on' => $date ,
                                    'created_by'=>$this->session->userdata('admin_user_id')
                                );
                                $this->Common_model->table_name = 'daily_exchange_rate';
                                $result = $this->Common_model->insert();
                                $this->Common_model->table_name = 'daily_exchange_rate_history';
                                 $this->Common_model->insert();
                            }
                        }
                    }
    
                }else{
                    $this->session->set_flashdata('error_message', 'Invalid File Format');
                    $error = true;
                }
               
                if ($result) {
                    redirect(base_url().'backdoor/upload_currency_rate/success');
                } else {
                    redirect(base_url().'backdoor/upload_currency_rate/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    
    public function delete_currency_rate($msg=""){
        
        if ($this->session->userdata('email_address')) {
            if($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-warning">Delete Successfully !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-error">'.$this->session->flashdata('error_message').'!</div>';
            }
            $this->form_validation->set_rules('exchange_date', 'Exchange Date', 'trim|required');
            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Exchange Rate";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/currency_exchange/delete_currency_rate');
                $this->load->view('admin/block/footer');
            }else{
                
                $exchange_date =  date('Y-m-d', strtotime($this->input->post('exchange_date')));
                $result = $this->Delete_model->Delete_All_Exchange_Rate_By_Date($exchange_date);
               
                if ($result) {
                    redirect(base_url().'backdoor/delete_currency_rate/success');
                } else {
                    redirect(base_url().'backdoor/delete_currency_rate/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }


    public function do_upload($path, $field = '',$file_name='')
    {
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xlsx|csv|xls';
        $config['max_size'] = '2048';
        $config['file_name'] = $file_name ? $file_name : '1';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }


}
