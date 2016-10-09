<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

    public function add($msg=""){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Update !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }
//            print_r($this->input->post()); die;
            $this->form_validation->set_rules('txtBankName', 'Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtDepositType', 'Deposit type', 'trim|required');
            $this->form_validation->set_rules('txtIAm', 'I Am', 'trim|required');
//            $this->form_validation->set_rules('txtIWant', 'I Want', 'trim|required');
            $this->form_validation->set_rules('txtTenure', 'Tenure', 'trim|required');
            $this->form_validation->set_rules('txtInterestRate', 'Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtAvailableFeatures', 'Available Features', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtRequiredDocument', 'Required Document', 'trim|required');
            $this->form_validation->set_rules('txtTermsAndConditions', 'TermsAndConditions', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Finager - FDR Info";
                $this->load->view('admin/block/header', $data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/map/add');
                $this->load->view('admin/block/footer');
            }else{
                $date = date('Y-m-d h:i:s');
                $min_limit = $this->input->post('is_minimum_amount_no_limit');
                $max_limit = $this->input->post('is_maximum_amount_no_limit');

                $this->Common_model->data = array(
                    'bank_id' => $this->input->post('txtBankName'),
                    'deposit_type_id' => $this->input->post('txtDepositType'),
                    'i_am_id' => $this->input->post('txtIAm'),
//                    'i_want_id' => $this->input->post('txtIWant'),
                    'tenure_id' => $this->input->post('txtTenure'),
                    'no_limit_max_amount' => $max_limit,
                    'max_amount' => $this->input->post('txtMaximumDepositAmount'),
                    'no_limit_min_amount' => $min_limit,
                    'min_amount' => $this->input->post('txtMinimumDepositAmount'),
                    'interest_rate' => $this->input->post('txtInterestRate'),
                    'available_feature' => $this->input->post('txtAvailableFeatures'),
                    'eligibility' => $this->input->post('txtEligibility'),
                    'required_document' => $this->input->post('txtRequiredDocument'),
                    'terms_and_conditions' => $this->input->post('txtTermsAndConditions'),
                    'review' => $this->input->post('txtReview'),
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );
                $this->Common_model->table_name = 'fdr_info';
                $result = $this->Common_model->insert();
//                print_r($this->Common_model->data);die;
//                echo $result; die;
                if ($result) {
                    redirect(base_url().'fdr/fdr_edit_info/success');
                } else {
                    redirect(base_url().'fdr/fdr_edit_info/error');
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
        $this->load->library('upload');
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4096';
        $config['file_name'] = '1';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($field)) {
            return $this->upload->display_errors();
        } else {
            return $this->upload->data();
        }
    }

}