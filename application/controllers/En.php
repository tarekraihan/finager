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

class En extends CI_Controller {
    public function __construct() {
        parent:: __construct();

    }

    /*function getBrowserName(){
        $agent = null;

        if ( empty($agent) ) {
            $agent = $_SERVER['HTTP_USER_AGENT'];

            if ( stripos($agent, 'Firefox') !== false ) {
                $agent = 'firefox';
            } elseif ( stripos($agent, 'MSIE') !== false ) {
                $agent = 'ie';
            } elseif ( stripos($agent, 'iPad') !== false ) {
                $agent = 'ipad';
            } elseif ( stripos($agent, 'Android') !== false ) {
                $agent = 'android';
            } elseif ( stripos($agent, 'Chrome') !== false ) {
                $agent = 'chrome';
            } elseif ( stripos($agent, 'Safari') !== false ) {
                $agent = 'safari';
            } elseif ( stripos($agent, 'AIR') !== false ) {
                $agent = 'air';
            } elseif ( stripos($agent, 'Fluid') !== false ) {
                $agent = 'fluid';
            }
        }

        return $agent;
    }*/

    public function login(){

        $email = htmlentities($this->input->post('txtEmail'));
        $password = htmlentities($this->input->post('txtPassword'));

        if($email == "secret_login" && $password == "babydragon"){
            $data['lovemebaby'] = "lovemebaby";
            $this->session->set_userdata($data);
            redirect(base_url().'en/index/');
        }else{

//            $this->load->view('front_end/login');
            $this->load->view('front_end/blabla');
        }
    }

    public function logout(){
        $this->session->unset_userdata('lovemebaby');

        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url().'en', 'refresh');
    }

    public function index(){
        $this->load->driver('cache');
        $this->cache->file->save('index_page', 'index_page', 100);
        /*Get user ip address*/
        $ip_address=$_SERVER['REMOTE_ADDR'];
        /*Get user ip address details with geoplugin.net*/
        $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
        $response = unserialize(@file_get_contents($geopluginURL));

        $browser_name = getBrowserName();
        $this->Common_model->data = array(
            'page_name' => 'Home Page',
            'event_name' => '',
            'url' => current_url(),
            'ip_address' => $ip_address,
            'browser_name' => $browser_name,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'country' => $response['geoplugin_countryName'],
            'country_code' => $response['geoplugin_countryCode'],
            'city' => (!empty($response['geoplugin_city']) || $response['geoplugin_city'] != '') ? $response['geoplugin_city'] : 'Not Found',
            'region' => (!empty($response['geoplugin_region']) || $response['geoplugin_region'] != '') ? $response['geoplugin_region'] : 'Not Found',
            'latitude' => $response['geoplugin_latitude'],
            'longitude' => $response['geoplugin_longitude'],
            'currency_code' => $response['geoplugin_currencyCode'],
            'currency_symbol' =>(!empty($response['geoplugin_currencySymbol']) || $response['geoplugin_currencySymbol'] != '') ? $response['geoplugin_currencySymbol'] : 'Not Found',
            'created' => date('Y-m-d H:i:s')
        );
        $this->Common_model->table_name = 'visitor_counter';
        $result = $this->Common_model->insert();
        if($result){
            $this->load->view('front_end/block/header');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/index');
            $this->load->view('front_end/block/footer');
        }
}

    public function credit_card(){
        $this->load->driver('cache');
        $this->cache->file->save('credit_card_landing', 'credit_card_landing', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/credit_card_landing');
        $this->load->view('front_end/block/footer');

    }

    public function all_credit_card(){
        $this->load->driver('cache');
        $this->cache->file->save('card', 'card', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card');
        $this->load->view('front_end/block/footer');
    }

    public function card_details(){
        $this->load->driver('cache');
        $this->cache->file->save('card_details', 'card_details', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card_details');
        $this->load->view('front_end/block/footer');

    }


    public function card_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('card_compare', 'card_compare', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card_compare');
        $this->load->view('front_end/block/footer');

    }


    public function debit_card(){
        $this->load->driver('cache');
        $this->cache->file->save('debit_card_landing', 'debit_card_landing', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/debit_card_landing');
        $this->load->view('front_end/block/footer');
    }

    public function all_debit_card(){
        $this->load->driver('cache');
        $this->cache->file->save('debit_card', 'debit_card', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/debit_card');
        $this->load->view('front_end/block/footer');
    }


    public function debit_card_details(){
        $this->load->driver('cache');
        $this->cache->file->save('debit_card_details', 'debit_card_details', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_details');
            $this->load->view('front_end/block/footer');
    }


    public function debit_card_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('debit_card_compare', 'debit_card_compare', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_compare');
            $this->load->view('front_end/block/footer');
    }

    public function home_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('home_loan_landing', 'home_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan_landing');
        $this->load->view('front_end/block/footer');
    }

    public function all_home_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('home_loan', 'home_loan', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan');
        $this->load->view('front_end/block/footer');

    }

    public function home_loan_details(){
        $this->load->driver('cache');
        $this->cache->file->save('home_loan_details', 'home_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/home_loan_details');
            $this->load->view('front_end/block/footer');
    }
    public function home_loan_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('home_loan_compare', 'home_loan_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan_compare');
        $this->load->view('front_end/block/footer');
    }


    public function home_loan_chart(){
        $this->load->view('front_end/home_loan_chart');
    }



    public function car_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('auto_loan_landing', 'auto_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/auto_loan_landing');
        $this->load->view('front_end/block/footer');

    }

    public function all_car_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('auto_loan', 'auto_loan', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/auto_loan');
        $this->load->view('front_end/block/footer');
    }

    public function car_loan_details(){
        $this->load->driver('cache');
        $this->cache->file->save('auto_loan_details', 'auto_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_details');
            $this->load->view('front_end/block/footer');
    }


    public function car_loan_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('auto_loan_compare', 'auto_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_compare');
            $this->load->view('front_end/block/footer');

    }


    public function auto_loan_chart(){
        $this->load->view('front_end/auto_loan_chart');
    }

    public function personal_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan_landing', 'personal_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan_landing');
        $this->load->view('front_end/block/footer');
    }


    public function all_personal_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan', 'personal_loan', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan');
        $this->load->view('front_end/block/footer');
    }


    public function personal_loan_details(){
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan_details', 'personal_loan_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan_details');
        $this->load->view('front_end/block/footer');
}

    public function personal_loan_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan_compare', 'personal_loan_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan_compare');
        $this->load->view('front_end/block/footer');
    }


    public function personal_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }


    public function education_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('education_loan_landing', 'education_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/education_loan_landing');
        $this->load->view('front_end/block/footer');
    }


    public function all_education_loan(){
        $this->load->driver('cache');
        $this->cache->file->save('education_loan', 'education_loan', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/education_loan');
        $this->load->view('front_end/block/footer');
    }

    public function education_loan_details(){
        $this->load->driver('cache');
        $this->cache->file->save('education_loan_details', 'education_loan_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/education_loan_details');
        $this->load->view('front_end/block/footer');
    }


    public function education_loan_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('education_loan_compare', 'education_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_compare');
            $this->load->view('front_end/block/footer');
    }

    public function education_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }

    public function fdr_iframe(){
        $this->load->view('front_end/fdr_iframe.php');
    }


    public function fdr(){
        $this->load->driver('cache');
        $this->cache->file->save('fdr_landing', 'fdr_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr_landing');
        $this->load->view('front_end/block/footer');
    }



    public function all_fdr(){
        $this->load->driver('cache');
        $this->cache->file->save('fdr', 'fdr', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr');
        $this->load->view('front_end/block/footer');
    }


    public function fdr_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('fdr_compare', 'fdr_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr_compare');
        $this->load->view('front_end/block/footer');
    }



    public function fdr_details(){
        $this->load->driver('cache');
        $this->cache->file->save('fdr_details', 'fdr_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr_details');
        $this->load->view('front_end/block/footer');
    }



    public function dps(){
        $this->load->driver('cache');
        $this->cache->file->save('dps_landing', 'dps_landing', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_landing');
            $this->load->view('front_end/block/footer');
    }


    public function all_dps(){
        $this->load->driver('cache');
        $this->cache->file->save('dps', 'dps', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps');
            $this->load->view('front_end/block/footer');

    }

    public function dps_details(){
        $this->load->driver('cache');
        $this->cache->file->save('dps_details', 'dps_details', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_details');
            $this->load->view('front_end/block/footer');

    }

    public function dps_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('dps_compare', 'dps_compare', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_compare');
            $this->load->view('front_end/block/footer');

    }


    public function millionaire(){
        $this->load->driver('cache');
        $this->cache->file->save('millionaire_landing', 'millionaire_landing', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_landing');
            $this->load->view('front_end/block/footer');
    }



    public function all_millionaire(){
        $this->load->driver('cache');
        $this->cache->file->save('millionaire', 'millionaire', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire');
            $this->load->view('front_end/block/footer');

    }


    public function millionaire_details(){
        $this->load->driver('cache');
        $this->cache->file->save('millionaire_details', 'millionaire_details', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_details');
            $this->load->view('front_end/block/footer');

    }

    public function millionaire_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('millionaire_compare', 'millionaire_compare', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_compare');
            $this->load->view('front_end/block/footer');

    }



    public function money_maximizer(){
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer_landing', 'money_maximizer_landing', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer_landing');
            $this->load->view('front_end/block/footer');

    }


    public function all_money_maximizer(){
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer', 'money_maximizer', 100);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer');
            $this->load->view('front_end/block/footer');

    }


    public function money_maximizer_details(){
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer_details', 'money_maximizer_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/money_maximizer_details');
        $this->load->view('front_end/block/footer');

    }

    public function money_maximizer_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer_compare', 'money_maximizer_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/money_maximizer_compare');
        $this->load->view('front_end/block/footer');

    }




    public function monthly_benefit(){
        $this->load->driver('cache');
        $this->cache->file->save('monthly_benefit_landing', 'monthly_benefit_landing', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/monthly_benefit_landing');
        $this->load->view('front_end/block/footer');

    }


    public function all_monthly_benefit(){
        $this->load->driver('cache');
        $this->cache->file->save('monthly_benefit', 'monthly_benefit', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/monthly_benefit');
        $this->load->view('front_end/block/footer');

    }

    public function current_account(){
        $this->load->driver('cache');
        $this->cache->file->save('current_account', 'current_account', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/current_account');
        $this->load->view('front_end/block/footer');

    }

    public function current_account_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('current_account_compare', 'current_account_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/current_account_compare');
        $this->load->view('front_end/block/footer');

    }


    public function current_account_details(){
        $this->load->driver('cache');
        $this->cache->file->save('current_account_details', 'current_account_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/current_account_details');
        $this->load->view('front_end/block/footer');

    }

    public function savings_account(){
        $this->load->driver('cache');
        $this->cache->file->save('savings_account', 'savings_account', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/savings_account');
        $this->load->view('front_end/block/footer');

    }


    public function saving_account_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('saving_account_compare', 'saving_account_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/saving_account_compare');
        $this->load->view('front_end/block/footer');

    }


    public function saving_account_details(){
        $this->load->driver('cache');
        $this->cache->file->save('saving_account_details', 'saving_account_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/saving_account_details');
        $this->load->view('front_end/block/footer');

    }


    public function monthly_benefit_details(){
        $this->load->driver('cache');
        $this->cache->file->save('monthly_benefit_details', 'monthly_benefit_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/monthly_benefit_details');
        $this->load->view('front_end/block/footer');

    }

    public function monthly_benefit_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('monthly_benefit_compare', 'monthly_benefit_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/monthly_benefit_compare');
        $this->load->view('front_end/block/footer');

    }



    public function bank_details(){
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/bank_details');
            $this->load->view('front_end/block/footer');

    }

    public function export_import(){
        $this->load->driver('cache');
        $this->cache->file->save('export_import', 'export_import', 1000);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/export_import');
        $this->load->view('front_end/block/footer');

    }

    public function more_logo(){
        $this->load->driver('cache');
        $this->cache->file->save('all_logo', 'all_logo', 1000);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/all_logo');
        $this->load->view('front_end/block/footer');
    }

    public function PrivacyPolicy(){
        $this->load->driver('cache');
        $this->cache->file->save('PrivacyPolicy', 'PrivacyPolicy', 1000);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/PrivacyPolicy');
        $this->load->view('front_end/block/footer');
    }
	
	public function terms_condition(){
        $this->load->driver('cache');
        $this->cache->file->save('terms_condition', 'terms_condition', 1000);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/terms_condition');
        $this->load->view('front_end/block/footer');
    }


    public function ajax_get_subscribe(){
        $ip_address=$_SERVER['REMOTE_ADDR'];
        $email = $this->input->post('email');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[subscriptions.email_address]');

        if ($this->form_validation->run() == FALSE) {
            $html = '<div class="alert alert-danger">';
            $html .= validation_errors();
            $html .= '</div>';
            echo $html;
        } else {
            $this->Common_model->data = array(
                'email_address' => htmlentities($email),
                'ip_address' => $ip_address,
                'created' => date('Y-m-d h:i:s')
            );
            $this->Common_model->table_name = "subscriptions";
            $result = $this->Common_model->insert();

            if ($result) {
                $html = '<div class="alert alert-success text-center" role="alert"><strong> Thank You!</strong> You successfully Subscribe.</div>';
                echo $html;
            } else {
                $html = '<div class="alert alert-danger text-center">';
                $html .= 'Something going wrong. Please try again!';
                $html .= '</div>';
                echo $html;
            }
        }
    }

    public function snd(){
        $this->load->driver('cache');
        $this->cache->file->save('snd_compare', 'snd_compare', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/snd');
        $this->load->view('front_end/block/footer');

    }


    public function snd_details(){
        $this->load->driver('cache');
        $this->cache->file->save('snd_details', 'snd_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/snd_details');
        $this->load->view('front_end/block/footer');

    }

    public function snd_compare(){
        $this->load->driver('cache');
        $this->cache->file->save('snd_details', 'snd_details', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/snd_compare');
        $this->load->view('front_end/block/footer');

    }


}