<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : front end  controller             *
 * Start Date : 12-03-2016                    *
 * Last Update : 29-03-2016                   *
 **********************************************/

class Home_Loan extends CI_Controller {

    public function loan_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLoanType', 'Loan Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_type');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'loan_type' => $this->input->post('txtLoanType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'loan_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/loan_type/success');
                } else {
                    redirect(base_url().'home_loan/loan_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_loan_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtLoanType', 'Loan Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_loan_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'loan_type' => htmlentities($this->input->post('txtLoanType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'loan_type';
                $this->Common_model->where = array('id' => $this->input->post('txtLoanTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_loan_type/success');
                } else {
                    redirect(base_url().'home_loan/edit_loan_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


    public function home_loan_applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtHomeLoanApplicantType', 'Applicant Type ', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/home_loan_applicant');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_applicant_type' => $this->input->post('txtHomeLoanApplicantType'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_applicant_type';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/home_loan_applicant_type/success');
                } else {
                    redirect(base_url().'home_loan/home_loan_applicant_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



}