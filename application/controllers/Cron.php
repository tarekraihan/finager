<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Auto Loan                         *
 * Script : front end  controller             *
 * Start Date : 23-07-2016                    *
 * Last Update : 23-07-2016                   *
 **********************************************/

class Cron extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
    }

    public function delete_old_currency_rate(){
        $delete = $this->Delete_model->Delete_Old_Exchange_Rates();
        if($delete){
            echo "Delete Successfully.";
        }else{
            echo "Problem To Delete!";
        }
    } 


}