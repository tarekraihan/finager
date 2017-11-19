<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Common Module                     *
 * Script : back end  controller              *
 * Start Date : 30-09-2016                    *
 * Last Update : 30-09-2016                   *
 **********************************************/

class General extends CI_Controller {
    public function __construct() {
        parent:: __construct();
    }

    function non_bank($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message"  class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtNonBank', 'Non Bank Name ', 'trim|required|is_unique[general_non_bank.non_bank_name]');

//            $this->form_validation->set_rules('file', 'Bank Logo ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Add Non Bank";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/non_bank');
                $this->load->view('admin/block/footer');
            }else{
                $upload_result = $this->do_upload('./resource/common_images/bank_logo', 'file');
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'non_bank_name' => $this->input->post('txtNonBank'),
                    'bank_logo'=>htmlentities($upload_result['file_name']),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'general_non_bank';
                $result = $this->Common_model->insert();
                if ($result) {
                    redirect(base_url().'general/non_bank/success');
                } else {
                    redirect(base_url().'general/non_bank/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function do_upload($path, $field = '')
    {
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = '1';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }

    public function dbbackup($msg)
    {

        // --- Generate database backup--
        $this->load->dbutil();

        $prefs = array(
            'format'      => 'zip',
            'filename'    => 'finager_db_backup.sql'
        );

        $backup =& $this->dbutil->backup($prefs);

        $db_name = 'finager_db_backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'db_backup/'.$db_name;

        $this->load->helper('file');

        if(write_file($save, $backup)){
            redirect(base_url().'general/db_backup/success');
        }

//        To download write file
//        $this->load->helper('download');
//        force_download($db_name, $backup);



    }

    function db_backup($msg='')
    {
        if ($msg == 'success') {
            $data['feedback'] = '<div id="message"  class="text-center alert alert-success">Database backed up Successfully !!</div>';
        } else if ($msg == 'error') {
            $data['feedback'] = '<div id="message"  class=" text-center alert alert-danger">Problem to Insert !!</div>';
        }

        $data['title'] = "Finager:DB Backup";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/db_backup');
        $this->load->view('admin/block/footer');

    }

    function subscriptions(){
        $data['title'] = "Finager:Subscriptions";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/subscriptions');
        $this->load->view('admin/block/footer');

    }

    function visitor_info(){
        $data['title'] = "Finager:Visitor Info";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/website_visitor_info');
        $this->load->view('admin/block/footer');

    }

    function visitor_map(){

        $result = $this->Select_model->select_visitor_info();

        $this->load->library('googlemaps');

        $config['center'] = "52.355518, -1.174320";
//        echo $config['center'];die;
        //$config['zoom'] = 'auto';
        $config['map_height'] = '600px';
        $config['zoom'] = '2';
        $this->googlemaps->initialize($config);

        $marker = array();
        foreach($result->result() as $row){
            $marker['position'] = "$row->latitude, $row->longitude";
            $marker['infowindow_content'] = $row->country.'( '.$row->ip_address.' )';
            //$marker['animation'] = 'DROP';
            $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=F|D1131A|000000';
            $this->googlemaps->add_marker($marker);
        }


        $data['map'] = $this->googlemaps->create_map();


        $data['title'] = "Finager:Visitor Info";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/website_visitor_map');
        $this->load->view('admin/block/footer');

    }

    function go_maintenance(){
        if ($this->session->userdata('email_address') && $this->session->userdata('admin_role') == 'admin') {

            $this->form_validation->set_rules('go_maintenance', 'Go Maintenance', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Go Maintenance";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/go_maintenance');
                $this->load->view('admin/block/footer');
            }else{

                $offline_count = $this->Select_model->get_offline_count();
                /*Get user ip address*/
                $ip_address=$_SERVER['REMOTE_ADDR'];
                /*Get user ip address details with geoplugin.net*/
                $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
                $response = unserialize(@file_get_contents($geopluginURL));
                $browser_name = getBrowserName();

                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'go_offline_count' => intval( $offline_count->go_offline_count + 1 ),
                    'end_time' => date('Y-m-d h:i:s',strtotime($this->input->post('go_maintenance'))),
                    'reason' => $this->input->post('reason'),
                    'active_offline_by' => $this->session->userdata('admin_user_id') ,
                    'go_offline_ip' => $ip_address ,
                    'go_offline_lat' => $response['geoplugin_latitude'] ,
                    'go_offline_lon' => $response['geoplugin_longitude'],
                    'go_offline_browser' => $browser_name ,
                    'go_offline_datetime' => $date

                );
                $this->Common_model->table_name = 'active_website';
                $result = $this->Common_model->insert();

                if ($result) {
                    $data['success_message'] = '<div id="message" class="text-center alert alert-success">Successfully Save !! <a href="'.base_url().'" target="_blank"> Finager </a> </span> !!</div></div>';
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

    function go_live(){
        if ($this->session->userdata('email_address')) {

            $this->form_validation->set_rules('go_live', 'Go Live', 'trim|required');

//            $this->form_validation->set_rules('file', 'Bank Logo ', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Go Live";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/go_live');
                $this->load->view('admin/block/footer');
            }else{
                /*Get user ip address*/
                $ip_address=$_SERVER['REMOTE_ADDR'];
//                $ip_address='122.144.10.98';
                /*Get user ip address details with geoplugin.net*/
                $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
                $response = unserialize(@file_get_contents($geopluginURL));
                $browser_name = getBrowserName();

                $date = date('Y-m-d h:i:s');

                $this->Common_model->data = array(
                    'end_time' => date('Y-m-d h:i:s',strtotime($this->input->post('go_live'))),
                    'go_live_by' => $this->session->userdata('admin_user_id') ,
                    'go_live_ip' => $ip_address ,
                    'go_live_lat' => $response['geoplugin_latitude'] ,
                    'go_live_lon' => $response['geoplugin_longitude'],
                    'go_live_browser' => $browser_name ,
                    'go_live_date_time' => $date

                );
                $this->Common_model->where = array('id' => $this->input->post('last_maintenance_break_id'));
                $this->Common_model->table_name = 'active_website';
                $result = $this->Common_model->update();

                if ($result) {
                    $data['success_message'] = '<div id="message" class="text-center alert alert-success">Successfully Live !! Please Check <span><a href="'.base_url().'" target="_blank"> Finager </a> </span> !!</div>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                } else {
                    $data['error_message'] = '<div id="message" class=" text-center alert alert-danger">Something going wrong !!</div>';
                    $this->session->set_userdata($data);
                    redirect(current_url());
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }
    }

    public function update_bank_non_bank_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $is_non_bank =$this->input->post('is_non_bank');
            if($is_non_bank == 1){
                $this->form_validation->set_rules('txtNonBankName', ' Non Bank Name', 'trim|required');
            }else{
                $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
            }

            $not_available_call_center = $this->input->post('not_available_call_center');
            if($not_available_call_center == 1){
                $this->form_validation->set_rules('txtCallCenterNo', ' Call Center no', 'trim');
            }else{
                $this->form_validation->set_rules('txtCallCenterNo', ' Call Center no', 'trim|required');
            }

            $this->form_validation->set_rules('txtKnownAs', ' Known As', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('txtSwiftCode', ' Swift Code', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('txtStockCode', ' Stock Code', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('txtCategory', ' Category', 'trim|required');
            $this->form_validation->set_rules('txtBankTypeOrigin', ' Bank Type Origin', 'trim|required');
            $this->form_validation->set_rules('txtPhoneNo', ' Phone No', 'trim|required|max_length[225]');
            $this->form_validation->set_rules('txtFaxNo', ' Fax No', 'trim|required');
            $this->form_validation->set_rules('txtEmailAddress', ' Email Address', 'trim|required|valid_email|max_length[225]');
            $this->form_validation->set_rules('txtWebAddress', ' Web Address', 'trim|required|valid_url|max_length[225]');
            $this->form_validation->set_rules('txtHeadOfficeAddress', ' Head Office Address', 'trim|required|max_length[225]');
            $this->form_validation->set_rules('txtBasicInformation', ' Basic Information', 'trim|required');
            $this->form_validation->set_rules('txtRoutingNo', ' Routing No', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Bank / Non bank info";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/update_bank_non_bank_information');
                $this->load->view('admin/block/footer');
            }else{

                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'known_as' =>htmlentities($this->input->post('txtKnownAs')),
                    'swift_code' =>htmlentities($this->input->post('txtSwiftCode')),
                    'stock_code' =>htmlentities($this->input->post('txtStockCode')),
                    'category' =>htmlentities($this->input->post('txtCategory')),
                    'bank_type_and_origin' =>htmlentities($this->input->post('txtBankTypeOrigin')),
                    'phone_no' =>htmlentities($this->input->post('txtPhoneNo')),
                    'alternate_phone_no' =>htmlentities($this->input->post('txtAlternatePhoneNo')),
                    'fax_no' =>htmlentities($this->input->post('txtFaxNo')),
                    'email_address' =>$this->input->post('txtEmailAddress'),
                    'web_address' =>$this->input->post('txtWebAddress'),
                    'head_office_address' =>htmlentities($this->input->post('txtHeadOfficeAddress')),
                    'basic_information'=>$this->input->post('txtBasicInformation'),
                    'not_available_call_center'=> ($not_available_call_center) ? $not_available_call_center : 0,
                    'call_center'=> ($this->input->post('txtCallCenterNo')) ? $this->input->post('txtCallCenterNo') : '',
                    'routing_no'=>$this->input->post('txtRoutingNo'),
                    'other_services'=>$this->input->post('txtOtherServices'),
                    'schedule_of_charges'=>$this->input->post('txtScheduleOfCharges'),
                    'interest_rate'=>$this->input->post('txtInterestRate'),
                    'routing_no_list'=>$this->input->post('txtRoutingNoList'),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );

                if($is_non_bank == 1){
                    $this->Common_model->table_name = 'general_non_bank';
                    $this->Common_model->where = array('id' => $this->input->post('txtNonBankName'));
                }else{
                    $this->Common_model->table_name = 'card_bank';
                    $this->Common_model->where = array('id' => $this->input->post('txtBankName'));
                }
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'general/update_bank_non_bank_info/success');
                } else {
                    redirect(base_url().'general/update_bank_non_bank_info/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }

    }

    public function bank_list(){
        $data['title'] = "Finager:Bank List";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/bank_list');
        $this->load->view('admin/block/footer');

    }
    public function non_bank_list(){
        $data['title'] = "Finager:Bank List";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/non_bank_list');
        $this->load->view('admin/block/footer');

    }



    public function add_branch_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $is_non_bank =$this->input->post('is_non_bank');
            $bank_id = '';
            $non_bank_id = '';
            if($is_non_bank == 1){
                $this->form_validation->set_rules('txtNonBankName', ' Non Bank Name', 'trim|required');
                $non_bank_id = $this->input->post('txtNonBankName');
            }else{
                $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
                $bank_id = $this->input->post('txtBankName');
            }

            $this->form_validation->set_rules('txtBranchName', ' Branch Name', 'trim|required|max_length[250]');
            $this->form_validation->set_rules('txtBranchAddress', ' Branch Address', 'trim|required|max_length[255]');
            $this->form_validation->set_rules('txtPhoneNo', ' Phone No', 'trim|required|max_length[200]');
            $this->form_validation->set_rules('txtFaxNo', ' Fax No', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('txtEmailAddress', ' Email Address', 'trim|required|valid_email|max_length[225]');
            $this->form_validation->set_rules('txtDateOfOpening', ' Date of opening', 'trim');
            $this->form_validation->set_rules('show_as', ' Show As', 'trim');
            $this->form_validation->set_rules('txtRoutingNo', ' Routing No', 'trim|required|max_length[50]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Bank / Non bank Branch info";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/add_branch_information');
                $this->load->view('admin/block/footer');
            }else{

                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $bank_id,
                    'is_non_bank' => $is_non_bank,
                    'non_bank_id' =>$non_bank_id,
                    'branch_name' =>htmlentities($this->input->post('txtBranchName')),
                    'branch_address' =>htmlentities($this->input->post('txtBranchAddress')),
                    'phone_no' =>htmlentities($this->input->post('txtPhoneNo')),
                    'fax_no' =>htmlentities($this->input->post('txtFaxNo')),
                    'email_address' =>$this->input->post('txtEmailAddress'),
                    'date_of_opening' => date('Y-m-d', strtotime($this->input->post('txtDateOfOpening'))),
                    'show_as_popular_branch' =>(trim($this->input->post('show_as')) == 'popular branch') ? 1 : 0,
                    'show_as_new_branch'=> (trim($this->input->post('show_as')) == 'new branch') ? 1 : 0,
                    'show_as_closed_branch'=>(trim($this->input->post('show_as')) == 'closed branch') ? 1 : 0,
                    'routing_no'=>$this->input->post('txtRoutingNo'),
                    'created' => $date ,
                    'modified' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'general_institution_branch_info';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'general/add_branch_info/success');
                } else {
                    redirect(base_url().'general/add_branch_info/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }

    }


    public function institution_branch_info_list(){
        $data['title'] = "Finager:Bank List";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/general/institution_branch_info_list');
        $this->load->view('admin/block/footer');

    }



    public function add_event_history($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $is_non_bank =$this->input->post('is_non_bank');
            $bank_id = '';
            $non_bank_id = '';
            if($is_non_bank == 1){
                $this->form_validation->set_rules('txtNonBankName', ' Non Bank Name', 'trim|required');
                $non_bank_id = $this->input->post('txtNonBankName');
            }else{
                $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
                $bank_id = $this->input->post('txtBankName');
            }

            $this->form_validation->set_rules('txtEventDate', 'Event Date', 'trim|required|max_length[250]');
            $this->form_validation->set_rules('txtEventTitle', 'Event Title', 'trim|required|max_length[255]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Event History";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/add_event_history');
                $this->load->view('admin/block/footer');
            }else{

                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $bank_id,
                    'is_non_bank' => $is_non_bank,
                    'non_bank_id' =>$non_bank_id,
                    'is_history' => ($this->input->post('is_history')) ? 1 : 0,
                    'event_date' =>htmlentities($this->input->post('txtEventDate')),
                    'event_title' =>htmlentities($this->input->post('txtEventTitle')),
                    'created' => $date ,
                    'modified' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'institution_event_history';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'general/add_event_history/success');
                } else {
                    redirect(base_url().'general/add_event_history/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }

    }


    public function edit_event_history($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $is_non_bank =$this->input->post('is_non_bank');
            $bank_id = '';
            $non_bank_id = '';
            if($is_non_bank == 1){
                $this->form_validation->set_rules('txtNonBankName', ' Non Bank Name', 'trim|required');
                $non_bank_id = $this->input->post('txtNonBankName');
            }else{
                $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
                $bank_id = $this->input->post('txtBankName');
            }

            $this->form_validation->set_rules('txtEventDate', 'Event Date', 'trim|required|max_length[250]');
            $this->form_validation->set_rules('txtEventTitle', 'Event Title', 'trim|required|max_length[255]');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Event History";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/general/edit_event_history');
                $this->load->view('admin/block/footer');
            }else{

                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'bank_id' => $bank_id,
                    'is_non_bank' => $is_non_bank,
                    'non_bank_id' =>$non_bank_id,
                    'is_history' => ($this->input->post('is_history')) ? 1 : 0,
                    'event_date' =>htmlentities($this->input->post('txtEventDate')),
                    'event_title' =>htmlentities($this->input->post('txtEventTitle')),
                    'modified' => $date ,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->where = array('id' => $this->input->post('event_id'));
                $this->Common_model->table_name = 'institution_event_history';

                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'general/add_event_history/success');
                } else {
                    redirect(base_url().'general/add_event_history/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }

    }

}