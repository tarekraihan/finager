<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Auto Loan                         *
 * Script : front end  controller             *
 * Start Date : 20-11-2018                    *
 * Last Update : 27-11-2018                   *
 **********************************************/

class Currency_rate extends CI_Controller
{

    public function __construct() {
        parent:: __construct();
    }

    public function ajax_get_currency_rate(){

        $amount = $this->input->post('amount');
        $currency = $this->input->post('currency');
       
        $WHERE = array(); $query = '';

        if(!empty($currency)) {
            $WHERE[] = "daily_exchange_rate.currency_name = '".$currency."'";
        }
        $currency_bank_ids = $this->input->post('currency_bank_ids');
        if(!empty($currency_bank_ids)) {
            if(strstr($currency_bank_ids,',')) {
                $data8 = explode(',',$currency_bank_ids);
                $bank_id_array = array();
                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] = "daily_exchange_rate.bank_id = $bank_id";
                }
                $WHERE[] = '('.implode(' OR ',$bank_id_array).')';
            } else {
                $WHERE[] = '(daily_exchange_rate.bank_id = '.$currency_bank_ids.')';
            }
        }

        $query = implode(' AND ',$WHERE);
        if(!empty($query)) {$query = ' AND '.$query ;}
        $query .= ' ORDER BY daily_exchange_rate.bank_sell_rate ASC , daily_exchange_rate.bank_buy_rate ASC';
        //echo $query;
        $res = $this->Front_end_select_model->axios_select_exchange_rate_for_list_view($query, $amount );
      
        echo json_encode($res);
    }

    
    public function ajax_currency_rate_caching(){

        $amount = $this->input->post('amount');
        $currency = $this->input->post('currency');
        $currency_label = $this->input->post('currency');

        $currency_i_want = $this->input->post('currency_i_want');
        $currency_i_want_label = $this->input->post('currency_i_want');

        $currency_bank_ids = $this->input->post('currency_bank_ids');

        $bank_id_array = array();
        if(!empty($currency_bank_ids)) {
            if(strstr($currency_bank_ids,',')) {
                $data8 = explode(',',$currency_bank_ids);

                foreach( $data8 as $bank_id ) {
                    $bank_id_array[] =  $bank_id;
                }

            } else {
                $bank_id_array[] = $currency_bank_ids;
            }
        }


        $array_items = array('currency_amount', 'currency', 'currency_label','currency_i_want','currency_i_want_label','currency_bank_ids');
        $this->session->unset_userdata($array_items);
        $data = array(
            'currency_amount'  => $amount,
            'currency'  => $currency,
            'currency_label'  => $currency_label,
            'currency_i_want' => $currency_i_want,
            'currency_i_want_label' => $currency_i_want_label,
            'currency_bank_ids' => $bank_id_array,
        );

        $this->session->set_userdata($data);
        echo json_encode($data);
    }

    public function ajax_clear_session(){
        $session = $this->input->post('session');
        if($session =='currency'){
            $array_items = array('currency_amount', 'currency', 'currency_label','currency_i_want','currency_i_want_label','currency_bank_ids');
            $this->session->unset_userdata($array_items);
        }
        echo 'success';

    }


    public function unset_currency_bank_id_session(){
        $id = $this->input->post('currency_bank_id');
        $row = $this->Select_model->Select_bank_info_by_id($id);
        if($row){
            $session = $row['id'].'='.$row['bank_name'];
            $bank = array_values($_SESSION['currency_bank_ids']);

            if(($key = array_search($session, $bank)) !== false) {
                unset($_SESSION['currency_bank_ids'][$key]);
            }
        }
        echo 'success';
    }

}