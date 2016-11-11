<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

    public function add($msg=""){

        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Insert !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }else if($msg == 'error_image'){
                $data['feedback'] = '<div class=" text-center alert alert-danger">Please select minimum one Image !!</div>';
            }
//            print_r($this->input->post()); die;
//            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDistrict', 'District', 'trim|required');
            $this->form_validation->set_rules('txtThana', 'Thana', 'trim|required');
            $this->form_validation->set_rules('txtTypeId', 'Type', 'trim|required');
            $this->form_validation->set_rules('txtContactNo', 'Contact No', 'trim|required');
            $this->form_validation->set_rules('txtAddress', 'Address', 'trim|required');
            $this->form_validation->set_rules('txtLatitude', 'Latitude', 'trim');
            $this->form_validation->set_rules('txtLongitude', 'Longitude', 'trim');
            $this->form_validation->set_rules('txtContactNo', 'Contact No', 'trim');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Map Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/map/add');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $is_non_bank = $this->input->post('is_non_bank');
                $non_bank = 0;
                if($is_non_bank == 1){
                    $non_bank =1;
                }
                $status=1;
//                if(empty($this->input->post('txtLatitude')) || empty($this->input->post('txtLongitude'))){
//                    $status = 0;
//                }
                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'is_non_bank' => $non_bank,
                    'non_bank_id' => $this->input->post('txtNonBankName'),
                    'district_id' => $this->input->post('txtDistrict'),
                    'thana_id' => $this->input->post('txtThana'),
                    'type_id' => $this->input->post('txtTypeId'),
                    'address' => $this->input->post('txtAddress'),
                    'latitude' => $this->input->post('txtLatitude'),
                    'longitude' => $this->input->post('txtLongitude'),
                    'contact_no' => $this->input->post('txtContactNo'),
                    'status' => $status,
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'map_informations';
                $map_info_id = $this->Common_model->insert();
                $result = array();
                if(count($_FILES['images']['size']) != 0) {
                    $files = $_FILES;

                    $cpt = count($_FILES['images']['name']);
                    $map_info_id =$map_info_id;


                    for($i=0; $i<$cpt; $i++)
                    {
                        $_FILES['images']['name']= $files['images']['name'][$i];
                        $_FILES['images']['type']= $files['images']['type'][$i];
                        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
                        $_FILES['images']['error']= $files['images']['error'][$i];
                        $_FILES['images']['size']= $files['images']['size'][$i];

                        $upload_result=$this->do_upload('./resource/map_images/','images');
                        /*echo "<pre>";
                        echo count($_FILES['images']['size'])."<br/>";
                        print_r($upload_result);
                        echo '</pre>';
                        die;*/

                        $this->Common_model->data = array('map_info_id' => $map_info_id, 'image_name' => $upload_result['file_name'],'created' => $date ,
                            'created_by'=>$this->session->userdata('admin_user_id'));
                        $this->Common_model->table_name = 'map_images';
                        $result[] = $this->Common_model->insert();
                    }


                }else {
                    redirect(base_url().'map/add/error_image');
                }


                if ($result) {
                    redirect(base_url().'map/add/success');
                } else {
                    redirect(base_url().'map/add/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



    public function get_thana(){
        $id = $this->input->post('id');
        $response = $this->Select_model->select_thana($id);
        echo $response;
    }


    public function do_upload($path, $field = '')
    {
        $date = date('Ymdhisu');
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4096';
        $config['file_name'] = $date;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }

    public function map_info_list(){
        $data['title'] = "Map Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/map/map_info_list');
        $this->load->view('admin/block/footer');
    }


}