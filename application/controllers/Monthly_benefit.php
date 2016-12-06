<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Personal Loan                     *
 * Script : back end  controller              *
 * Start Date : 30-08-2016                    *
 * Last Update : 01-08-2016                   *
 **********************************************/

class Monthly_benefit extends CI_Controller {

    public function tenure($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required|is_unique[monthly_benefit_tenure.no_of_month]|numeric');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Tenure";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/tenure');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $year = ( ($this->input->post('txtTenure') / 12));
                $this->Common_model->data = array(
                    'no_of_month' => $this->input->post('txtTenure'),
                    'tenure' => $year,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_tenure';
                $result = $this->Common_model->insert();


                if ($result) {
                    redirect(base_url().'monthly_benefit/tenure/success');
                } else {
                    redirect(base_url().'monthly_benefit/tenure/error');
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
                $this->load->view('admin/monthly_benefit/edit_tenure');
                $this->load->view('admin/block/footer');
            }else{
                $year = ( ($this->input->post('txtTenure') / 12));
                $this->Common_model->data = array(
                    'no_of_month' => $this->input->post('txtTenure'),
                    'tenure' => $year,
                    'modified_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_tenure';
                $this->Common_model->where = array('id' => $this->input->post('txtTenureId'));
                $result = $this->Common_model->update();

                if ($result) {
                    redirect(base_url().'monthly_benefit/edit_tenure/success');
                } else {
                    redirect(base_url().'monthly_benefit/edit_tenure/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }



    public function add_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount ', 'trim|required');
            $this->form_validation->set_rules('txtBenefitAmount', 'Benefit Amount', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $benefit_rate = ($this->input->post('txtBenefitAmount') / $this->input->post('txtDepositAmount') );

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'deposit_amount' => htmlentities($this->input->post('txtDepositAmount')),
                    'benefit_amount' => htmlentities($this->input->post('txtBenefitAmount')),
                    'benefit_rate' => $benefit_rate,
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'min_amount' => htmlentities($this->input->post('txtMinimumAmount')),
                    'max_amount' => htmlentities($this->input->post('txtMaximumAmount')),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'monthly_benefit_info';
                $result= $this->Common_model->insert();

                if ($result) {
                    redirect(base_url().'monthly_benefit/add_deposit_info/success');
                } else {
                    redirect(base_url().'monthly_benefit/add_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }

    public function deposit_list(){
        $data['title'] = "Loan Information";
        $this->load->view('admin/block/header',$data);
        $this->load->view('admin/block/left_nav');
        $this->load->view('admin/monthly_benefit/deposit_list');
        $this->load->view('admin/block/footer');
    }



    public function edit_deposit_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Updated !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtDepositName', 'Deposit Name', 'trim|required');
            $this->form_validation->set_rules('txtLoanFacility', 'Loan Facility', 'trim|required');
            $this->form_validation->set_rules('txtDepositAmount', 'Deposit Amount ', 'trim|required');
            $this->form_validation->set_rules('txtBenefitAmount', 'Benefit Amount', 'trim|required');
            $this->form_validation->set_rules('txtMinimumAmount', 'Minimum Amount', 'trim');
            $this->form_validation->set_rules('txtMaximumAmount', 'Maximum Amount', 'trim');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Features', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Requirement', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'Terms And Conditions', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - Deposit Information";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/monthly_benefit/edit_deposit_info');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $benefit_rate = ($this->input->post('txtBenefitAmount') / $this->input->post('txtDepositAmount') );

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'deposit_amount' => htmlentities($this->input->post('txtDepositAmount')),
                    'benefit_amount' => htmlentities($this->input->post('txtBenefitAmount')),
                    'benefit_rate' => $benefit_rate,
                    'loan_facility' => htmlentities($this->input->post('txtLoanFacility')),
                    'deposit_name' => htmlentities($this->input->post('txtDepositName')),
                    'min_amount' => htmlentities($this->input->post('txtMinimumAmount')),
                    'max_amount' => htmlentities($this->input->post('txtMaximumAmount')),
                    'features' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'requirement' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'monthly_benefit_info';
                $this->Common_model->where = array('id' => $this->input->post('txtDepositId'));
                $result = $this->Common_model->update();


                if ($result) {
                    redirect(base_url().'monthly_benefit/edit_deposit_info/success');
                } else {
                    redirect(base_url().'monthly_benefit/edit_deposit_info/error');
                }
            }
        }else {
            redirect(base_url().'backdoor');
        }
    }


}