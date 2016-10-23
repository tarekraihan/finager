<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : DPS                               *
 * Script : front end  controller             *
 * Start Date : 23-10-2016                    *
 * Last Update : 23-10-2016                   *
 **********************************************/

class Dps extends CI_Controller
{
    public function tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[dps_tenure.tenure]|numeric');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/dps_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => $this->input->post('txtTenure'),
                    'no_of_installment' => $installment,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_tenure';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'dps/tenure/success');
                } else {
                    redirect(base_url().'dps/tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|numeric');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $installment = (12 * ($this->input->post('txtTenure')));
                $this->Common_model->data = array(
                    'tenure' => htmlentities($this->input->post('txtTenure')),
                    'no_of_installment' => $installment,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'dps/tenure/success');
                } else {
                    redirect(base_url().'dps/edit_tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function monthly_installment($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtMonthlyInstallment', 'Monthly Installment', 'trim|required|is_unique[dps_monthly_installment.monthly_installment]');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Monthly Installment";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/monthly_installment');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'monthly_installment' => $this->input->post('txtMonthlyInstallment'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_monthly_installment';
                $result = $this->Common_model->insert();
//                print_r($this->data);

//                echo $result; die;
                if ($result) {
                    redirect(base_url().'dps/monthly_installment/success');
                } else {
                    redirect(base_url().'dps/monthly_installment/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_monthly_installment($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtMonthlyInstallment', 'Monthly Installment', 'trim|required|numeric');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Edit Monthly Installment";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/dps/edit_monthly_installment');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'monthly_installment' => htmlentities($this->input->post('txtMonthlyInstallment')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'dps_monthly_installment';
                $this->Common_model->where = array('id' => $this->input->post('txtMonthlyInstallmentId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'dps/monthly_installment/success');
                } else {
                    redirect(base_url().'dps/edit_monthly_installment/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    function add_info($msg=''){


        if ($result) {
            redirect(base_url().'dps/monthly_installment/success');
        } else {
            redirect(base_url().'dps/edit_monthly_installment/error');
        }
    }

}