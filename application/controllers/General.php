<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : FDR Module                        *
 * Script : back end  controller              *
 * Start Date : 30-09-2016                    *
 * Last Update : 30-09-2016                   *
 **********************************************/

class General extends CI_Controller {
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

}