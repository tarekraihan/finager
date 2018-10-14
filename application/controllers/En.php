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

   function getBrowserName(){
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
    }

    public function login(){
            if($this->session->userdata('lovemebaby')){
                redirect(base_url());
            }else{
                $email = htmlentities($this->input->post('txtEmail'));
                $password = htmlentities($this->input->post('txtPassword'));

                if($email == "sujat" && $password == "007"){
                    $data['lovemebaby'] = "lovemebaby";
                    $this->session->set_userdata($data);
                    redirect(base_url());
                }else{
                    $this->load->view('front_end/login');
                }

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

            $data['title'] ="Finager.com – Your Financial Manager for Cards, Loans and Investments";
//            $data['description'] ="Finager.com help them to take financial decisions in their everyday life."; changed : 08/07/2018
            $data['description'] ="At Finager.com we provide complete financial solution to you for any kind of problem related to cards, loans and investment.";
            $data['keywords'] ="Loan, home Loan,Personal Loan, Bank, Investment, Credit Card, Debit Card, FDR, DPS, Auto Loan, Education Loan,Get Credit Card,  Bangladesh";

            /*Get user ip address*/
            $ip_address=$_SERVER['REMOTE_ADDR'];
            /*Get user ip address details with geoplugin.net*/
            $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
            $response = unserialize(@file_get_contents($geopluginURL));

            if(isset($response['geoplugin_latitude'])){
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
                    $this->load->view('front_end/block/header',$data);
                    $this->load->view('front_end/block/right_menu');
                    $this->load->view('front_end/block/vertical_menu');
                    $this->load->view('front_end/index');
                    $this->load->view('front_end/block/footer');
                }
            }else{
                $this->load->view('front_end/block/header',$data);
                $this->load->view('front_end/block/right_menu');
                $this->load->view('front_end/block/vertical_menu');
                $this->load->view('front_end/index');
                $this->load->view('front_end/block/footer');
            }


    }

    public function credit_card(){

        $data['title'] ="Credit Card – A way to solve your financial problem | Finager.com";
        $data['description'] ="At Finager.com we provide you the information about the best Credit Cards with Benefits which is suitable for you. You can also compare the best card and choose which fulfill your needs.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('credit_card_landing', 'credit_card_landing', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/credit_card_landing');
        $this->load->view('front_end/block/footer');

    }

    public function all_credit_card(){
        $data['title'] ="Choose your best credit card @ Finager.com";
        $data['description'] ="At Finager.com we provide you the information about the best Credit Cards with Benefits which is suitable for you. You can also compare the best card and choose which fulfill your needs.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('card', 'card', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card');
        $this->load->view('front_end/block/footer');

    }

    public function card_details($url){

        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between best credit cards @ Finager.com";
            $data['description'] ="At Finager.com we provide you the information about the best Credit Cards with Benefits which is suitable for you. You can also compare the best card and choose which fulfill your needs.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('card_card_informations',array('slug'=>$compare[0]));
            $data['card1'] = $query1->row_array();
            $query2 = $this->db->get_where('card_card_informations',array('slug'=>$compare[1]));
            $data['card2'] = $query2->row_array();

            $this->load->driver('cache');
            $this->cache->file->save('card_compare', 'card_compare', 100);
            $this->load->view('front_end/block/header',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/card_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Find information about credit card @ Finager.com";
            $data['description'] ="At Finager.com we provide you the information about the best Credit Cards with Benefits which is suitable for you. You can also compare the best card and choose which fulfill your needs.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $query = $this->db->get_where('card_card_informations',array('slug'=>$url));
            $data['card_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('card_details', 'card_details', 100);
            $this->load->view('front_end/block/header',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/card_details');
            $this->load->view('front_end/block/footer');
        }

    }


    public function debit_card(){
        $data['title'] ="Debit Card – A convenient way to live life moneyless | Finager.com";
        $data['description'] ="At Finager.com we provide you the information about all the Debit Cards with Benefits which is suitable for you. You can also compare between the best cards and choose which fulfill your needs.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('debit_card_landing', 'debit_card_landing', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/debit_card_landing');
        $this->load->view('front_end/block/footer');

    }

    public function all_debit_card(){
        $data['title'] ="Choose debit card suitable for you @ Finager.com";
        $data['description'] ="At Finager.com we provide you the information about all the Debit Cards with Benefits which is suitable for you. You can also compare between the best cards and choose which fulfill your needs.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('debit_card', 'debit_card', 100);
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/debit_card');
        $this->load->view('front_end/block/footer');

    }


    public function debit_card_details($url){

        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between available debit card @ Finager.com";
            $data['description'] ="At Finager.com we provide you the information about all the Debit Cards with Benefits which is suitable for you. You can also compare between the best cards and choose which fulfill your needs.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('debit_card_info',array('slug'=>$compare[0]));
            $data['card1'] = $query1->row_array();
            $query2 = $this->db->get_where('debit_card_info',array('slug'=>$compare[1]));
            $data['card2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('debit_card_compare', 'debit_card_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Choose debit card suitable for you @ Finager.com";
            $data['description'] ="At Finager.com we provide you the information about all the Debit Cards with Benefits which is suitable for you. You can also compare between the best cards and choose which fulfill your needs.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $query = $this->db->get_where('debit_card_info',array('slug'=>$url));
            $data['card_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('debit_card_details', 'debit_card_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/debit_card_details');
            $this->load->view('front_end/block/footer');
        }
    }

    public function home_loan(){
        $data['title'] ="Home Loan – A way to build your own home | Finager.com";
        $data['description'] ="At Finager.com you can compare home loans offered by all the banks and non-banking financial institutes to choose which is better for you with low interest rates, processing fees and Finager.com also helps you to process your documents.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('home_loan_landing', 'home_loan_landing', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan_landing');
        $this->load->view('front_end/block/footer');

    }

    public function all_home_loan(){
        $data['title'] ="Choose home loan suitable for you @ Finager.com";
        $data['description'] ="At Finager.com you can compare home loans offered by all the banks and non-banking financial institutes to choose which is better for you with low interest rates, processing fees and Finager.com also helps you to process your documents.";
        $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
        $this->load->driver('cache');
        $this->cache->file->save('home_loan', 'home_loan', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/home_loan');
        $this->load->view('front_end/block/footer');

    }

    public function home_loan_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all home loans offers @ Finager.com";
            $data['description'] ="At Finager.com you can compare home loans offered by all the banks and non-banking financial institutes to choose which is better for you with low interest rates, processing fees and Finager.com also helps you to process your documents.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $amount = explode("-",$url);
            $data['amount'] = ( $amount[0] ) ? $amount[0] : 60000;
            $data['month'] = ( $amount[1] ) ? $amount[1] : 12;
            $url = array_slice($amount,2, count($amount)-1, true);
            $url = implode('-',$url);
            //echo $url;die;
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('home_loan_info',array('slug'=>$compare[0]));
            $data['loan1'] = $query1->row_array();
            $query2 = $this->db->get_where('home_loan_info',array('slug'=>$compare[1]));
            $data['loan2'] = $query2->row_array();

            $this->load->driver('cache');
            $this->cache->file->save('home_loan_compare', 'home_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/home_loan_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Find information about Home Loan @ Finager.com";
            $data['description'] ="At Finager.com you can compare home loans offered by all the banks and non-banking financial institutes to choose which is better for you with low interest rates, processing fees and Finager.com also helps you to process your documents.";
            $data['keywords'] ="Credit Card, Card,Get Credit Card, Credit Card in Bangladesh";
            $query = $this->db->get_where('home_loan_info',array('slug'=>$url));
            $data['home_loan_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('home_loan_details', 'home_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/home_loan_details');
            $this->load->view('front_end/block/footer');
        }
    }


    public function home_loan_chart(){
        $this->load->view('front_end/home_loan_chart');
    }



    public function car_loan(){
        
        $data['title'] ="Auto Loan – A financial help for purchasing your own car | Finager.com";
        $data['description'] ="At Finager.com you can compare all the car loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
        $data['keywords'] ="Finager, Finager.com, Car Loan, Auto Loan, Best Car Loan, Low Interest Rate,Vehicle Loan, Low EMI Car Loan, information about car loan, information about the best auto loan, popular auto loan.";

        $this->load->driver('cache');
        $this->cache->file->save('auto_loan_landing', 'auto_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/auto_loan_landing');
        $this->load->view('front_end/block/footer');
    }

    public function all_car_loan(){
        $data['title'] ="Choose auto loan suitable for you @ Finager.com";
        $data['description'] ="At Finager.com you can compare all the car loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
        $data['keywords'] ="Sonali Bank Ltd., Janata Bank Ltd., Agrani Bank Ltd., Rupali Bank Ltd., Bangladesh Krishi Bank, Bangladesh Development Bank Limited., Basic Bank Limited, AB Bank Limited, Bangladesh Commerce Bank Limited, Bank Asia Limited, Bengal Bank Limited, BRAC Bank Limited, City Bank Limited, Dhaka Bank Limited, Dutch-Bangla Bank Limited, Eastern Bank Limited, IFIC Bank Limited, Jamuna Bank Limited, Meghna Bank Limited, Mercantile Bank Limited, Midland Bank, Modhumoti Bank Limited, Mutual Trust Bank Limited, National Bank Limited, National Credit & Commerce Bank Limited, NRB Bank Limited, NRB Commercial Bank Limited, One Bank Limited, Premier Bank Limited, Prime Bank Limited, Pubali Bank Limited, South Bangla Agriculture & Commerce Bank Limited, Southeast Bank Limited, Standard Bank Limited, The Farmers Bank Limited, Trust Bank Limited, United Commercial Bank Limited, Uttara Bank Limited, Shimanto Bank Ltd, Islami Somaz Bank Limited, Al-Arafah Islami Bank Limited, EXIM Bank Limited, First Security Islami Bank Limited, ICB Islamic Bank Limited, Islami Bank Bangladesh Limited, Shahjalal Islami Bank Limited, Social Islami Bank Limited, Union Bank Limited, Bank Al-Falah Limited, Citibank N.A, Commercial Bank of Ceylon PLC, Habib Bank Limited, National Bank of Pakistan, Standard Chartered Bank, State Bank of India, Punjab National Bank, Woori Bank, HSBC .";

        $this->load->driver('cache');
        $this->cache->file->save('auto_loan', 'auto_loan', 100);
        $this->load->view('front_end/block/header_home_loan');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/auto_loan');
        $this->load->view('front_end/block/footer');

    }

//    public function car_loan_details(){
//        $data['title'] ="Find information about– Auto Loan @ Finager.com";
//        $data['description'] ="At Finager.com you can compare all the car loans offered by banks and non-banking financial institutes to choose which is better for you.You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
//        $data['keywords'] ="Sonali Bank Ltd., Janata Bank Ltd., Agrani Bank Ltd., Rupali Bank Ltd., Bangladesh Krishi Bank, Bangladesh Development Bank Limited., Basic Bank Limited, AB Bank Limited, Bangladesh Commerce Bank Limited, Bank Asia Limited, Bengal Bank Limited, BRAC Bank Limited, City Bank Limited, Dhaka Bank Limited, Dutch-Bangla Bank Limited, Eastern Bank Limited, IFIC Bank Limited, Jamuna Bank Limited, Meghna Bank Limited, Mercantile Bank Limited, Midland Bank, Modhumoti Bank Limited, Mutual Trust Bank Limited, National Bank Limited, National Credit & Commerce Bank Limited, NRB Bank Limited, NRB Commercial Bank Limited, One Bank Limited, Premier Bank Limited, Prime Bank Limited, Pubali Bank Limited, South Bangla Agriculture & Commerce Bank Limited, Southeast Bank Limited, Standard Bank Limited, The Farmers Bank Limited, Trust Bank Limited, United Commercial Bank Limited, Uttara Bank Limited, Shimanto Bank Ltd, Islami Somaz Bank Limited, Al-Arafah Islami Bank Limited, EXIM Bank Limited, First Security Islami Bank Limited, ICB Islamic Bank Limited, Islami Bank Bangladesh Limited, Shahjalal Islami Bank Limited, Social Islami Bank Limited, Union Bank Limited, Bank Al-Falah Limited, Citibank N.A, Commercial Bank of Ceylon PLC, Habib Bank Limited, National Bank of Pakistan, Standard Chartered Bank, State Bank of India, Punjab National Bank, Woori Bank, HSBC .";
//
//        $this->load->driver('cache');
//        $this->cache->file->save('auto_loan_details', 'auto_loan_details', 100);
//        $this->load->view('front_end/block/header_home_loan',$data);
//        $this->load->view('front_end/block/right_menu');
//        $this->load->view('front_end/block/vertical_menu');
//        $this->load->view('front_end/auto_loan_details');
//        $this->load->view('front_end/block/footer');
//    }


    public function car_loan_compare($url){

        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all auto loans offers @ Finager.com";
            $data['description'] ="At Finager.com you can compare all the car loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
            $data['keywords'] ="Sonali Bank Ltd., Janata Bank Ltd., Agrani Bank Ltd., Rupali Bank Ltd., Bangladesh Krishi Bank, Bangladesh Development Bank Limited., Basic Bank Limited, AB Bank Limited, Bangladesh Commerce Bank Limited, Bank Asia Limited, Bengal Bank Limited, BRAC Bank Limited, City Bank Limited, Dhaka Bank Limited, Dutch-Bangla Bank Limited, Eastern Bank Limited, IFIC Bank Limited, Jamuna Bank Limited, Meghna Bank Limited, Mercantile Bank Limited, Midland Bank, Modhumoti Bank Limited, Mutual Trust Bank Limited, National Bank Limited, National Credit & Commerce Bank Limited, NRB Bank Limited, NRB Commercial Bank Limited, One Bank Limited, Premier Bank Limited, Prime Bank Limited, Pubali Bank Limited, South Bangla Agriculture & Commerce Bank Limited, Southeast Bank Limited, Standard Bank Limited, The Farmers Bank Limited, Trust Bank Limited, United Commercial Bank Limited, Uttara Bank Limited, Shimanto Bank Ltd, Islami Somaz Bank Limited, Al-Arafah Islami Bank Limited, EXIM Bank Limited, First Security Islami Bank Limited, ICB Islamic Bank Limited, Islami Bank Bangladesh Limited, Shahjalal Islami Bank Limited, Social Islami Bank Limited, Union Bank Limited, Bank Al-Falah Limited, Citibank N.A, Commercial Bank of Ceylon PLC, Habib Bank Limited, National Bank of Pakistan, Standard Chartered Bank, State Bank of India, Punjab National Bank, Woori Bank, HSBC .";
    
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('auto_loan_info',array('slug'=>$compare[0]));
            $data['loan1'] = $query1->row_array();
            $query2 = $this->db->get_where('auto_loan_info',array('slug'=>$compare[1]));
            $data['loan2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('auto_loan_compare', 'auto_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Find information about auto loan @ Finager.com";
            $data['description'] ="At Finager.com you can compare all the car loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
            $data['keywords'] ="Sonali Bank Ltd., Janata Bank Ltd., Agrani Bank Ltd., Rupali Bank Ltd., Bangladesh Krishi Bank, Bangladesh Development Bank Limited., Basic Bank Limited, AB Bank Limited, Bangladesh Commerce Bank Limited, Bank Asia Limited, Bengal Bank Limited, BRAC Bank Limited, City Bank Limited, Dhaka Bank Limited, Dutch-Bangla Bank Limited, Eastern Bank Limited, IFIC Bank Limited, Jamuna Bank Limited, Meghna Bank Limited, Mercantile Bank Limited, Midland Bank, Modhumoti Bank Limited, Mutual Trust Bank Limited, National Bank Limited, National Credit & Commerce Bank Limited, NRB Bank Limited, NRB Commercial Bank Limited, One Bank Limited, Premier Bank Limited, Prime Bank Limited, Pubali Bank Limited, South Bangla Agriculture & Commerce Bank Limited, Southeast Bank Limited, Standard Bank Limited, The Farmers Bank Limited, Trust Bank Limited, United Commercial Bank Limited, Uttara Bank Limited, Shimanto Bank Ltd, Islami Somaz Bank Limited, Al-Arafah Islami Bank Limited, EXIM Bank Limited, First Security Islami Bank Limited, ICB Islamic Bank Limited, Islami Bank Bangladesh Limited, Shahjalal Islami Bank Limited, Social Islami Bank Limited, Union Bank Limited, Bank Al-Falah Limited, Citibank N.A, Commercial Bank of Ceylon PLC, Habib Bank Limited, National Bank of Pakistan, Standard Chartered Bank, State Bank of India, Punjab National Bank, Woori Bank, HSBC .";
    
            $query = $this->db->get_where('auto_loan_info',array('slug'=>$url));
            $data['loan_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('auto_loan_details', 'auto_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/auto_loan_details');
            $this->load->view('front_end/block/footer');
        }
    }


    public function auto_loan_chart(){
        $this->load->view('front_end/auto_loan_chart');
    }

    public function personal_loan(){
        $data['title'] ="Personal Loan – A helping hand for your financial need | Finager.com";
        $data['description'] ="At Finager.com you can compare all kind of personal loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan_landing', 'personal_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan_landing');
        $this->load->view('front_end/block/footer');
    }


    public function all_personal_loan(){
        $data['title'] ="Choose personal loans suitable for you @ Finager.com";
        $data['description'] ="At Finager.com you can compare all kind of personal loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('personal_loan', 'personal_loan', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/personal_loan');
        $this->load->view('front_end/block/footer');

    }

    public function personal_loan_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all personal loan @ Finager.com";
            $data['description'] ="At Finager.com you can compare all kind of personal loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('personal_loan_info',array('slug'=>$compare[0]));
            $data['loan1'] = $query1->row_array();
            $query2 = $this->db->get_where('personal_loan_info',array('slug'=>$compare[1]));
            $data['loan2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('personal_loan_details', 'personal_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personal_loan_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about all personal loans @ Finager.com";
            $data['description'] ="At Finager.com you can compare all kind of personal loans offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, processing fees and other benefits. Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('personal_loan_info',array('slug'=>$url));
            $data['personal_loan_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('personal_loan_compare', 'personal_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/personal_loan_details');
            $this->load->view('front_end/block/footer');
        }
    }


    public function personal_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }


    public function education_loan(){
        $data['title'] ="Education Loan – A financial help to complete your higher education | Finager.com";
        $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('education_loan_landing', 'education_loan_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/education_loan_landing');
        $this->load->view('front_end/block/footer');
    }


    public function all_education_loan(){
        $data['title'] ="Choose educational loans available for you @ Finager.com";
        $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('education_loan', 'education_loan', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/education_loan');
        $this->load->view('front_end/block/footer');

    }

//    public function education_loan_details(){
//        $data['title'] ="Choose educational loans available for you @ Finager.com";
//        $this->load->driver('cache');
//        $this->cache->file->save('education_loan_details', 'education_loan_details', 100);
//        $this->load->view('front_end/block/header_home_loan',$data);
//        $this->load->view('front_end/block/right_menu');
//        $this->load->view('front_end/block/vertical_menu');
//        $this->load->view('front_end/education_loan_details');
//        $this->load->view('front_end/block/footer');
//    }


    public function education_loan_compare($url){
        $data['title'] ="Compare between all education loan @ Finager.com";
        $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        if(strpos( $url, '-vs-' ) == true){
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('education_loan_info',array('slug'=>$compare[0]));
            $data['loan1'] = $query1->row_array();
            $query2 = $this->db->get_where('education_loan_info',array('slug'=>$compare[1]));
            $data['loan2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('education_loan_compare', 'education_loan_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about all education loans @ Finager.com";
            $query = $this->db->get_where('education_loan_info',array('slug'=>$url));
            $data['education_loan_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('education_loan_details', 'education_loan_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/education_loan_details');
            $this->load->view('front_end/block/footer');
        }

    }

    public function education_loan_chart(){
        $this->load->view('front_end/personal_loan_chart.php');
    }

    public function fdr_iframe(){
        $this->load->view('front_end/fdr_iframe.php');
    }


    public function fdr_account(){
        $data['title'] ="FDR – A scheme to invest your money for a fixed interest | Finager.com";
        $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('fdr_landing', 'fdr_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr_landing');
        $this->load->view('front_end/block/footer');

    }



    public function all_fdr(){
        $data['title'] ="Choose your best investment scheme as FDR @ Finager.com";
        $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('fdr', 'fdr', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/fdr');
        $this->load->view('front_end/block/footer');

    }


    public function fdr_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all FDR schemes @ Finager.com";
            $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('fdr_info',array('slug'=>$compare[0]));
            $data['fdr1'] = $query1->row_array();
            $query2 = $this->db->get_where('fdr_info',array('slug'=>$compare[1]));
            $data['fdr2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('fdr_compare', 'fdr_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about all FDR schemes @ Finager.com";
            $data['description'] ="At Finager.com you can compare investment opportunities like fixed deposit, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('fdr_info',array('slug'=>$url));
            $data['fdr_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('fdr_details', 'fdr_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/fdr_details');
            $this->load->view('front_end/block/footer');
        }
    }

    public function dps_account(){
        $data['title'] ="DPS – An investment scheme for future savings| Finager.com";
        $data['description'] ="At Finager.com you can compare all monthly small amount deposit scheme opportunities, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('dps_landing', 'dps_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/dps_landing');
        $this->load->view('front_end/block/footer');

    }


    public function all_dps(){
        $data['title'] ="Choose DPS suitable for you @ Finager.com";
        $data['description'] ="At Finager.com you can compare all monthly small amount deposit scheme opportunities, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('dps', 'dps', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/dps');
        $this->load->view('front_end/block/footer');

    }

    public function dps_compare($url){

        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all available DPS schemes @ Finager.com";
            $data['description'] ="At Finager.com you can compare all monthly small amount deposit scheme opportunities, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $dps_amount = explode("-tk",$compare[1]);
            $query1 = $this->db->get_where('dps_info',array('slug'=>$compare[0]));
            $data['dps1'] = $query1->row_array();
            $query2 = $this->db->get_where('dps_info',array('slug'=>$dps_amount[0]));
            $data['dps2'] = $query2->row_array();
            $data['dps_amount'] = $dps_amount[1];
            $this->load->driver('cache');
            $this->cache->file->save('dps_compare', 'dps_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about all DPS schemes @ Finager.com";
            $data['description'] ="At Finager.com you can compare all monthly small amount deposit scheme opportunities, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $dps_data = explode("-tk",$url);
            $query = $this->db->get_where('dps_info',array('slug'=>$dps_data[0]));
            $data['dps_details'] = $query->row_array();
            $data['dps_amount'] = $dps_data[1];
            $this->load->driver('cache');
            $this->cache->file->save('dps_details', 'dps_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/dps_details');
            $this->load->view('front_end/block/footer');
        }
    }


    public function millionaire(){
        $data['title'] ="Millionaire Scheme – An investment scheme to become a millionaire | Finager.com";
        $data['description'] ="At Finager.com you can compare all investment schemes to become a millionaire, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('millionaire_landing', 'millionaire_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/millionaire_landing');
        $this->load->view('front_end/block/footer');
    }



    public function all_millionaire(){
        $data['title'] ="Choose your best credit card @ Finager.com";
        $data['description'] ="At Finager.com you can compare all investment schemes to become a millionaire, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('millionaire', 'millionaire', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/millionaire');
        $this->load->view('front_end/block/footer');

    }

    public function millionaire_compare($url){

        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between best credit cards @ Finager.com";
            $data['description'] ="At Finager.com you can compare all investment schemes to become a millionaire, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('millionaire_info',array('slug'=>$compare[0]));
            $data['millionaire1'] = $query1->row_array();
            $query2 = $this->db->get_where('millionaire_info',array('slug'=>$compare[1]));
            $data['millionaire2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('millionaire_compare', 'millionaire_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about credit card @ Finager.com";
            $data['description'] ="At Finager.com you can compare all investment schemes to become a millionaire, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('millionaire_info',array('slug'=>$url));
            $data['millionaire_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('millionaire_details', 'millionaire_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/millionaire_details');
            $this->load->view('front_end/block/footer');
        }

    }



    public function money_maximizer(){
        $data['title'] ="Money Maximizer – An easy way to maximize your investment | Finager.com";
        $data['description'] ="At Finager.com you can compare all money maximization schemes to maximize your wealth; offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer_landing', 'money_maximizer_landing', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/money_maximizer_landing');
        $this->load->view('front_end/block/footer');

    }


    public function all_money_maximizer(){
        $data['title'] ="Choose from all money maximization scheme available @ Finager.com";
        $data['description'] ="At Finager.com you can compare all money maximization schemes to maximize your wealth; offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('money_maximizer', 'money_maximizer', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/money_maximizer');
        $this->load->view('front_end/block/footer');
    }

    public function money_maximizer_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="– Compare between all available money maximizer scheme @ Finager.com";
            $data['description'] ="At Finager.com you can compare all money maximization schemes to maximize your wealth; offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('money_maxi_info',array('slug'=>$compare[0]));
            $data['money_maximizer1'] = $query1->row_array();
            $query2 = $this->db->get_where('money_maxi_info',array('slug'=>$compare[1]));
            $data['money_maximizer2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('money_maximizer_compare', 'money_maximizer_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about all money maximizer scheme @ Finager.com";
            $data['description'] ="At Finager.com you can compare all money maximization schemes to maximize your wealth; offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return period and other benefits. Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('money_maxi_info',array('slug'=>$url));
            $data['money_maximizer_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('money_maximizer_details', 'money_maximizer_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/money_maximizer_details');
            $this->load->view('front_end/block/footer');
        }
    }




    public function monthly_benefit(){
        $data['title'] ="Monthly Benefit Scheme – An investment scheme for regular monthly income | Finager.com";
        $data['description'] ="At Finager.com you can compare all deposit scheme opportunities which provide monthly interest, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $this->load->driver('cache');
            $this->cache->file->save('monthly_benefit_landing', 'monthly_benefit_landing', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/header_home_loan');
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/monthly_benefit_landing');
            $this->load->view('front_end/block/footer');

    }


    public function all_monthly_benefit(){
        $data['title'] ="Choose from all monthly benefit scheme offers @ Finager.com";
        $data['description'] ="At Finager.com you can compare all deposit scheme opportunities which provide monthly interest, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('monthly_benefit', 'monthly_benefit', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/monthly_benefit');
        $this->load->view('front_end/block/footer');

    }
//
//    public function monthly_benefit_details(){
//        $data['title'] ="Find information about all money maximizer scheme @ Finager.com";
//            $this->load->driver('cache');
//            $this->cache->file->save('monthly_benefit_details', 'monthly_benefit_details', 100);
//            $this->load->view('front_end/block/header_home_loan');
//            $this->load->view('front_end/block/right_menu');
//            $this->load->view('front_end/block/vertical_menu');
//            $this->load->view('front_end/monthly_benefit_details');
//            $this->load->view('front_end/block/footer');
//    }

    public function monthly_benefit_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all monthly benefit scheme @ Finager.com";
            $data['description'] ="At Finager.com you can compare all deposit scheme opportunities which provide monthly interest, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('monthly_benefit_info',array('slug'=>$compare[0]));
            $data['monthly_benefit1'] = $query1->row_array();
            $query2 = $this->db->get_where('monthly_benefit_info',array('slug'=>$compare[1]));
            $data['monthly_benefit2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('monthly_benefit_details', 'monthly_benefit_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/monthly_benefit_compare');
            $this->load->view('front_end/block/footer');

        }else{
            $data['title'] ="Find information about monthly benefit scheme @ Finager.com";
            $data['description'] ="At Finager.com you can compare all deposit scheme opportunities which provide monthly interest, offered by banks and non-banking financial institutes to choose which is better for you. You can compare them between interest rates, return after maturity and other benefits. Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('monthly_benefit_info',array('slug'=>$url));
            $data['monthly_benefit_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('monthly_benefit_compare', 'monthly_benefit_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/monthly_benefit_details');
            $this->load->view('front_end/block/footer');
        }
    }


    public function current_account(){
        $data['title'] ="Choose from all Current account offered by banks@ Finager.com";
        $data['description'] ="At Finager.com we provide all current accounts information with other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
            $this->load->driver('cache');
            $this->cache->file->save('current_account', 'current_account', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/current_account');
            $this->load->view('front_end/block/footer');

    }

    public function current_account_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all current accounts offered by banks @ Finager.com";
            $data['description'] ="At Finager.com we provide all current accounts information with other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('current_account_info',array('slug'=>$compare[0]));
            $data['current_account1'] = $query1->row_array();
            $query2 = $this->db->get_where('current_account_info',array('slug'=>$compare[1]));
            $data['current_account2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('current_account_details', 'current_account_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/current_account_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Find information about Current accounts @ Finager.com";
            $data['description'] ="At Finager.com we provide all current accounts information with other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('current_account_info',array('slug'=>$url));
            $data['current_account_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('current_account_compare', 'current_account_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/current_account_details');
            $this->load->view('front_end/block/footer');
        }
    }

    public function savings_account(){
        $data['title'] ="Choose from all savings account offered by banks@ Finager.com";
        $data['description'] ="At Finager.com we provide all savings account information with their interest rate and other benefits to help you to choose the best offer, offered by banks and non-banking financial institutes.Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('savings_account', 'savings_account', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/savings_account');
        $this->load->view('front_end/block/footer');

    }


    public function saving_account_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] ="Compare between all saving accounts offered by banks @ Finager.com";
            $data['description'] ="At Finager.com we provide all savings account information with their interest rate and other benefits to help you to choose the best offer, offered by banks and non-banking financial institutes.Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('saving_account_info',array('slug'=>$compare[0]));
            $data['saving_account1'] = $query1->row_array();
            $query2 = $this->db->get_where('saving_account_info',array('slug'=>$compare[1]));
            $data['saving_account2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('saving_account_compare', 'saving_account_compare', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/saving_account_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] ="Find information about savings accounts @ Finager.com";
            $data['description'] ="At Finager.com we provide all savings account information with their interest rate and other benefits to help you to choose the best offer, offered by banks and non-banking financial institutes.Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('saving_account_info',array('slug'=>$url));
            $data['saving_account_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('saving_account_details', 'saving_account_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/saving_account_details');
            $this->load->view('front_end/block/footer');
        }
    }

    public function bank_details($url){

        $query = $this->db->get_where('card_bank',array('slug'=>$url));
        $data['institution_info'] = $query->row_array();
        $data['title'] = $data['institution_info']['bank_name'].' | Finager.com';
        $data['home_loan'] = $this->Front_end_select_model->select_all_home_loan_by_bank_non_bank_id($data['institution_info']['id'],0);
        $data['personal_loan'] = $this->Front_end_select_model->select_all_personal_loan_by_bank_non_bank_id($data['institution_info']['id'],0);
        $data['auto_loan'] = $this->Front_end_select_model->select_all_auto_loan_by_bank_non_bank_id($data['institution_info']['id'],0);
        $data['education_loan'] = $this->Front_end_select_model->select_all_education_loan_by_bank_non_bank_id($data['institution_info']['id'],0);
        $data['fdrs'] = $this->Front_end_select_model->select_all_fdr_by_bank_non_bank_id($data['institution_info']['id'],0);
        $data['all_dps'] = $this->Front_end_select_model->Select_dps_info_by_id($data['institution_info']['id'],0);
        $data['millionaires'] = $this->Front_end_select_model->Select_all_millionaire_info_by_id($data['institution_info']['id'],0);
        $data['money_maximizers'] = $this->Front_end_select_model->Select_all_money_maximizer_info_by_id($data['institution_info']['id'],0);
        $data['monthly_benefits'] = $this->Front_end_select_model->Select_all_monthly_benefit_info_by_id($data['institution_info']['id'],0);
        $data['credit_cards'] = $this->Front_end_select_model->Select_all_credit_card_info_by_id($data['institution_info']['id'],0);
        $data['debit_cards'] = $this->Front_end_select_model->select_all_debit_card_info($data['institution_info']['id'],0);
        $data['saving_accounts'] = $this->Front_end_select_model->select_all_savings_account_info($data['institution_info']['id'],0);
        $data['current_accounts'] = $this->Front_end_select_model->select_all_current_account_info($data['institution_info']['id'],0);
        $data['snds'] = $this->Front_end_select_model->select_all_snd_info($data['institution_info']['id'],0);
        $data['event_histories'] = $this->Front_end_select_model->select_institution_event_history($data['institution_info']['id'],0);
        $data['event_histories2'] = $this->Front_end_select_model->select_institution_event_history2($data['institution_info']['id'],0);

        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/bank_details',$data);
        $this->load->view('front_end/block/footer');

    }

    public function bank_details_landing(){
        $data['title'] = 'Finager.com - All banks information in one place';
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/bank_details_landing');
        $this->load->view('front_end/block/footer');

    }

    public function export_import(){
        $data['title'] = 'Export Import | Finager.com';
        $this->load->driver('cache');
        $this->cache->file->save('export_import', 'export_import', 1000);
        $this->load->view('front_end/block/header_home_loan',$data);
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
        $data['title'] = 'Privacy Policy | Finager.com';
        $data['description'] ="We, the members of Finager.com defines all the policies taken by us to use your provided information to help you solving your financial problems.";
        $this->load->driver('cache');
        $this->cache->file->save('PrivacyPolicy', 'PrivacyPolicy', 1000);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/PrivacyPolicy');
        $this->load->view('front_end/block/footer');
    }
	
	public function terms_condition(){
        $data['title'] = 'Terns and Conditions | Finager.com';
        $this->load->driver('cache');
        $this->cache->file->save('terms_condition', 'terms_condition', 1000);
        $this->load->view('front_end/block/header_home_loan',$data);
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


    public function ajax_send_comparison(){
        $ip_address=$_SERVER['REMOTE_ADDR'];
        $email = $this->input->post('email');
        $url = $this->input->post('url');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == FALSE) {
            $html = '<div class="alert alert-danger">';
            $html .= validation_errors();
            $html .= '</div>';
            echo $html;
        } else {
            $this->Common_model->data = array(
                'email_address' => htmlentities($email),
                'url' => $url,
                'ip_address' => $ip_address,
                'created' => date('Y-m-d h:i:s')
            );
            $this->Common_model->table_name = "send_comparison_url";
            $result = $this->Common_model->insert();


            if ($result) {
                $this->load->library('email');

                $this->email->from('info@finager.com', 'Finager.com');
                $this->email->to($email);

                $this->email->subject('Finager Product Comparison');
                $this->email->message($url);
                if ($this->email->send())
                {
                    $html = '<div class="alert alert-success text-center" role="alert"><strong> Thank You!</strong> Your requested comparison url send.</div>'; echo $html;
                } else {
                    $html = '<div class="alert alert-danger text-center">';
                    $html .= 'Something going wrong. Please try again!';
                    $html .= '</div>';
                    echo $html;
                }
            }

        }
    }

    public function snd_account(){
        $data['title'] = 'Choose from all snd account offered by banks@ Finager.com';
        $data['description'] ="At Finager.com we provide all snd accounts information with interest rates and other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
        $this->load->driver('cache');
        $this->cache->file->save('snd_compare', 'snd_compare', 100);
        $this->load->view('front_end/block/header_home_loan',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/snd');
        $this->load->view('front_end/block/footer');

    }

    public function snd_compare($url){
        if(strpos( $url, '-vs-' ) == true){
            $data['title'] = 'Compare between all snd accounts offered by banks @ Finager.com';
            $data['description'] ="At Finager.com we provide all snd accounts information with interest rates and other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
            $compare = explode("-vs-",$url);
            $query1 = $this->db->get_where('snd_info',array('slug'=>$compare[0]));
            $data['snd_account1'] = $query1->row_array();
            $query2 = $this->db->get_where('snd_info',array('slug'=>$compare[1]));
            $data['snd_account2'] = $query2->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('snd_details', 'snd_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/snd_compare');
            $this->load->view('front_end/block/footer');
        }else{
            $data['title'] = 'Find information about snd accounts @ Finager.com';
            $data['description'] ="At Finager.com we provide all snd accounts information with interest rates and other benefits information to help you to choose the best offer, offered by banks.Finager.com also helps you to process your documents.";
            $query = $this->db->get_where('snd_info',array('slug'=>$url));
            $data['snd_account_details'] = $query->row_array();
            $this->load->driver('cache');
            $this->cache->file->save('snd_details', 'snd_details', 100);
            $this->load->view('front_end/block/header_home_loan',$data);
            $this->load->view('front_end/block/right_menu');
            $this->load->view('front_end/block/vertical_menu');
            $this->load->view('front_end/snd_details');
            $this->load->view('front_end/block/footer');
        }
    }

    public function about_us(){
        $data['title'] = 'About Us | Finager.com';
        $data['description'] ="We, the members of Finager.com offers all real time information to you for your help in choosing cards, loans and investments.";
        $this->load->driver('cache');
        $this->cache->file->save('about_us', 'about_us', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/about_us');
        $this->load->view('front_end/block/footer');

    }

    public function currency_details(){
        $data['title'] = 'Currency Details | Finager.com';
        $data['description'] ="We, the members of Finager.com offers all real time information to you for your help in choosing cards, loans and investments.";
        $this->load->driver('cache');
        $this->cache->file->save('currency_details', 'currency_details', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/currency_details');
        $this->load->view('front_end/block/footer');

    }
    
     public function loan_calculator(){
        $data['title'] = 'Loan Calculator | Finager.com';
        $this->load->driver('cache');
        $this->cache->file->save('loan_calculator', 'loan_calculator', 100);
        $this->load->view('front_end/block/header',$data);
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/loan_calculator');
        $this->load->view('front_end/block/footer');

    }


}