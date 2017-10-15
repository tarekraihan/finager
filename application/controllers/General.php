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

    public function add_bank_info($msg=''){
        if ($this->session->userdata('email_address')) {
            if ($msg == 'success') {
                $data['feedback'] = '<div id="message" class="text-center alert alert-success">Successfully Save !!</div>';
            } else if ($msg == 'error') {
                $data['feedback'] = '<div id="message" class=" text-center alert alert-danger">Problem to Insert !!</div>';
            }

            $this->form_validation->set_rules('txtBankName', ' Bank Name', 'trim|required');
            $this->form_validation->set_rules('txtCardName', ' Card Name', 'trim|required');
            $this->form_validation->set_rules('txtCardType', ' Card Type', 'trim|required');
            $this->form_validation->set_rules('txtCreditCardType', ' Credit Card Category', 'trim|required');
            $this->form_validation->set_rules('txtCardIssuer', ' Card Issuer', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinBusiness', '  Income Range MinBusiness', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxBusiness', 'Income Range Max Business', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMinSalaried', 'Income Range Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIncomeRangeMaxSalaried', 'Income Range Max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtIm[]', ' I am', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMin', ' User Age Min', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtUserAgeMax', 'User Age Max', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxBusiness', 'Credit Limit Max Business', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMinSalaried', 'Credit Limit Min Salaried', 'trim|required');
            $this->form_validation->set_rules('txtCreditLimitMaxSalaried', 'Credit Limit max Salaried', 'trim|required');
            $this->form_validation->set_rules('txtSupplementary', 'Supplementary', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceSalaried', 'Experience Salaried', 'trim|required');
            $this->form_validation->set_rules('txtYearOfExperienceBusiness', 'Experience Business', 'trim|required');
            $this->form_validation->set_rules('txtCardBenefit[]', 'Card Rewards ', 'trim|required');
            $this->form_validation->set_rules('txtBenefit', 'Card Benefit ', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMin', 'Interest Free Period Min', 'trim|required');
            $this->form_validation->set_rules('txtInterestFreePeriodMax', 'Interest Free Period Max', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceRateYearly', 'Cash Advance Interest Rate Yearly', 'trim|required');                //Cash Withdraw same as cash advance rate yearly
            $this->form_validation->set_rules('txtAnnualFee', 'Annual Fee', 'trim|required');
            $this->form_validation->set_rules('txtAnnualFeeVat', 'Annual Fee Vat', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRate', 'Purchase Interest Rate', 'trim|required');
            $this->form_validation->set_rules('txtPurchaseInterestRateMonthly', 'Purchase Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRate', 'Balance Transfer Rate', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferRateMonthly', 'Balance Transfer Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceInterestRateMonthly', 'Cash Advance Interest Rate Monthly', 'trim|required');
            $this->form_validation->set_rules('txtCashAdvanceLimit', 'Cash Advance Limit', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleStart', 'Billing Cycle Start', 'trim|required');
            $this->form_validation->set_rules('txtBillingCycleEnd', 'Billing Cycle End', 'trim|required');
            $this->form_validation->set_rules('txtBalanceTransferLimit', 'Balance Transfer limit', 'trim|required');
            $this->form_validation->set_rules('txtEligibility', 'Eligibility', 'trim|required');
            $this->form_validation->set_rules('txtCardSummary', 'Card Summary', 'trim|required');
            $this->form_validation->set_rules('txtPros', 'Pros', 'trim|required');
            $this->form_validation->set_rules('txtCons', 'Cons', 'trim|required');
            $this->form_validation->set_rules('txtReview', 'Review', 'trim|required');

            if ($this->form_validation->run() == FALSE){
                $data['title'] = "Card-Income Range";
                $this->load->view('admin/block/header',$data);
                $this->load->view('admin/block/left_nav');
                $this->load->view('admin/credit_card/card_info');
                $this->load->view('admin/block/footer');
            }else{
                $upload_result = $this->do_upload('./resource/card/credit_card', 'file');
                $date = date('Y-m-d h:i:s');
                if($this->input->post('isActive') == 'active'){
                    $status = 1;
                }else{
                    $status =0;
                }
                if($this->input->post('txtFeaturedProduct') == 'featured'){
                    $featured = 1;
                }else{
                    $featured =0;
                }
                //------ Convert array into a variable
                $card_user ="";
                foreach($this->input->post('txtIm[]') as $user){
                    $card_user .= $user.',';
                }
                $card_user =substr($card_user,0,-1);//remove last comma
                $card_benifit ="";
                foreach($this->input->post('txtCardBenefit[]') as $benifit){
                    $card_benifit .= $benifit.',';
                }

                $card_benifit =substr($card_benifit,0,-1);

                $this->Common_model->data = array(

                    'bank_id' =>$this->input->post('txtBankName'),

                    'card_type_id'=> htmlentities($this->input->post('txtCardType')),

                    'cc_type_id'=>htmlentities($this->input->post('txtCreditCardType')),

                    'card_name'=>htmlentities($this->input->post('txtCardName')),

                    'card_image_name'=>htmlentities($upload_result['file_name']),

                    //`card_image_url`,

                    'card_user_id'=>$card_user,

                    'income_range_min_business'=>htmlentities($this->input->post('txtIncomeRangeMinBusiness')),

                    'income_range_min_salaried'=>htmlentities($this->input->post('txtIncomeRangeMinSalaried')),

                    'income_range_max_business'=>htmlentities($this->input->post('txtIncomeRangeMaxBusiness')),

                    'income_range_max_salaried'=>htmlentities($this->input->post('txtIncomeRangeMaxSalaried')),

                    'credit_limit_min_business'=>htmlentities($this->input->post('txtCreditLimitMinBusiness')),

                    'credit_limit_min_salaried'=>htmlentities($this->input->post('txtCreditLimitMinSalaried')),

                    'credit_limit_max_business'=>htmlentities($this->input->post('txtCreditLimitMaxBusiness')),

                    'credit_limit_max_salaried'=>htmlentities($this->input->post('txtCreditLimitMaxSalaried')),

                    'age_limit_min'=>htmlentities($this->input->post('txtUserAgeMin')),

                    'age_limit_max'=>htmlentities($this->input->post('txtUserAgeMax')),

                    'experience_salaried'=>htmlentities($this->input->post('txtYearOfExperienceSalaried')),

                    'experience_business'=> htmlentities($this->input->post('txtYearOfExperienceBusiness')),

                    'cc_issuer_id'=> htmlentities($this->input->post('txtCardIssuer')),

                    'card_benifit_id'=>$card_benifit,

                    'benifit_details'=>$this->input->post('txtBenefit'),

                    'interest_free_period_min'=> htmlentities($this->input->post('txtInterestFreePeriodMin')),

                    'interest_free_pefiod_max'=> htmlentities($this->input->post('txtInterestFreePeriodMax')),

                    'card_summary'=>$this->input->post('txtCardSummary'),

                    'pros'=>$this->input->post('txtPros'),

                    'cons'=>$this->input->post('txtCons'),

                    'review'=>$this->input->post('txtReview'),

                    'annual_fee'=>$this->input->post('txtAnnualFee'),

                    'annual_fee_vat'=>$this->input->post('txtAnnualFeeVat'),

                    'supplimentary'=>$this->input->post('txtSupplementary'),

                    'billing_cycle_start'=>$this->input->post('txtBillingCycleStart'),

                    'billing_cycle_end'=>$this->input->post('txtBillingCycleEnd'),

                    'eligibility'=>$this->input->post('txtEligibility'),

                    'purchase_interest_rate'=>$this->input->post('txtPurchaseInterestRate'),

                    'purchase_interest_rate_monthly'=> htmlentities($this->input->post('txtPurchaseInterestRateMonthly')),
                    'balance_transfer_rate'=> htmlentities($this->input->post('txtBalanceTransferRate')),
                    'balance_transfer_limit'=> htmlentities($this->input->post('txtBalanceTransferLimit')),
                    'balance_transfer_rate_monthly'=> htmlentities($this->input->post('txtBalanceTransferRateMonthly')),
                    'cash_advance_interest_rate_yearly'=> htmlentities($this->input->post('txtCashAdvanceRateYearly')),
                    'cash_advance_interest_rate'=> htmlentities($this->input->post('txtCashAdvanceInterestRateMonthly')),
                    'cash_advance_limit'=> htmlentities($this->input->post('txtCashAdvanceLimit')),
                    'featured'=> $featured,
                    'status'=> $status,
                    'created' => $date ,
                    'created_by'=>$this->session->userdata('admin_user_id')
                );

                $this->Common_model->table_name = 'card_card_informations';
                $last_insert_id = $this->Common_model->insert();
                foreach($this->input->post('txtIm[]') as $user){
                    $this->Common_model->data = array(
                        'card_info_id'=>$last_insert_id,
                        'card_user_id'=> $user,
                        'created' => $date
                    );
                    $this->Common_model->table_name = 'card_info_card_user';
                    $this->Common_model->insert();
                }
                $result='';
                foreach($this->input->post('txtCardBenefit[]') as $benefit){
                    $this->Common_model->data = array(
                        'card_info_id'=>$last_insert_id,
                        'card_reward_id'=> $benefit,
                        'created' => $date ,
                    );
                    $this->Common_model->table_name = 'card_info_card_reward';
                    $result = $this->Common_model->insert();
                }

                if ($result) {
                    redirect(base_url().'card/card_info/success');
                } else {
                    redirect(base_url().'card/card_info/error');
                }
            }
        }else {
            $this->session->set_flashdata('error_message', '1');
            redirect(base_url().'backdoor/dashboard');
        }

    }

}