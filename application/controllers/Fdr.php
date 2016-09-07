<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : FDR Module                        *
 * Script : back end  controller              *
 * Start Date : 07-09-2016                    *
 * Last Update : 08-09-2016                   *
 **********************************************/

class Fdr extends CI_Controller {
    public function i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required|is_unique[fdr_i_want.i_want]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/i_want');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'i_want' => $this->input->post('txtIWant'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_want';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'fdr/i_want/success');
                } else {
                    redirect(base_url().'fdr/i_want/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_i_want($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -I Want";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_i_want');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'i_want' => htmlentities($this->input->post('txtIWant')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_i_want';
                $this->Common_model->where = array('id' => $this->input->post('txtIWantId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_i_want/success');
                } else {
                    redirect(base_url().'fdr/edit_i_want/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtDepositType', 'Deposit Type', 'trim|required|is_unique[deposit_type.deposit_name]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/deposit_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'deposit_name' => $this->input->post('txtDepositType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'deposit_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'fdr/deposit_type/success');
                } else {
                    redirect(base_url().'fdr/deposit_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function edit_deposit_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtDepositType', 'Deposit Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/fdr/edit_deposit_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'deposit_name' => htmlentities($this->input->post('txtDepositType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'deposit_type';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'fdr/edit_deposit_type/success');
                } else {
                    redirect(base_url().'fdr/edit_deposit_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

}