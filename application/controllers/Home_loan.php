<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : front end  controller             *
 * Start Date : 12-03-2016                    *
 * Last Update : 06-05-2016                   *
 **********************************************/

class Home_Loan extends CI_Controller {

    public function loan_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLoanType', 'Loan Type', 'trim|required|is_unique[loan_type.loan_type]');
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


    public function applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtHomeLoanApplicantType', 'Applicant Type ', 'trim|required|is_unique[home_loan_applicant_type.home_loan_applicant_type]');


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
                    redirect(base_url().'home_loan/applicant_type/success');
                } else {
                    redirect(base_url().'home_loan/applicant_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_applicant_type($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtHomeLoanApplicantType', 'Applicant Type', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Applicant Type";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_applicant_type');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_applicant_type' => htmlentities($this->input->post('txtHomeLoanApplicantType')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_applicant_type';
                $this->Common_model->where = array('id' => $this->input->post('txtHomeLoanApplicantTypeId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_applicant_type/success');
                } else {
                    redirect(base_url().'home_loan/edit_applicant_type/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function feature($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtFeature', ' Feature ', 'trim|required|is_unique[home_loan_features.home_loan_feature]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Feature";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_feature');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_feature' => $this->input->post('txtFeature'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_features';
                $result = $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'home_loan/feature/success');
                } else {
                    redirect(base_url().'home_loan/feature/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_feature($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtFeature', 'Feature', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Feature";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_feature');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_feature' => htmlentities($this->input->post('txtFeature')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_features';
                $this->Common_model->where = array('id' => $this->input->post('txtFeatureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_feature/success');
                } else {
                    redirect(base_url().'home_loan/edit_feature/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function looking_for($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtLookingFor', ' Looking For ', 'trim|required|is_unique[home_loan_looking_for.home_loan_looking_for]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_looking_for' => $this->input->post('txtLookingFor'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_looking_for';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'home_loan/looking_for/success');
                } else {
                    redirect(base_url().'home_loan/looking_for/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_looking_for($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtLookingFor', 'Looking For', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit Looking For";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_looking_for');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_looking_for' => htmlentities($this->input->post('txtLookingFor')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_looking_for';
                $this->Common_model->where = array('id' => $this->input->post('txtLookingForId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_looking_for/success');
                } else {
                    redirect(base_url().'home_loan/edit_looking_for/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function user($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtUser', ' Loan User ', 'trim|required|is_unique[home_loan_user.home_loan_user]');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Home Loan User";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_user' => $this->input->post('txtUser'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_user';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'home_loan/user/success');
                } else {
                    redirect(base_url().'home_loan/user/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function edit_user($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Update !!</div>';
            }
            $this->form_validation->set_rules('txtUser', 'Loan User', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager -Edit User";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/edit_loan_user');
                $this->load->view('admin/block/footer');
            }else{
                $this->Common_model->data = array(
                    'home_loan_user' => htmlentities($this->input->post('txtUser')),
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_user';
                $this->Common_model->where = array('id' => $this->input->post('txtUserId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'home_loan/edit_user/success');
                } else {
                    redirect(base_url().'home_loan/edit_user/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function loan_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtBankName', ' Bank Name ', 'trim|required');
            $this->form_validation->set_rules('txtLoanType', ' Loan Type ', 'trim|required');
            $this->form_validation->set_rules('txtMinIncomeSalaried', 'Min Income Salaried ', 'trim');


            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Loan Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/home_loan/loan_information');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $this->Common_model->data = array(
                    'home_loan_user' => $this->input->post('txtUser'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'home_loan_user';
                $result = $this->Common_model->insert();
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'home_loan/loan_info/success');
                } else {
                    redirect(base_url().'home_loan/loan_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

}