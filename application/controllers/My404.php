<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : exception  controller             *
 * Start Date : 12-03-2016                    *
 * Last Update : 29-03-2016                   *
 **********************************************/

class My404 extends CI_Controller
{
    public function index(){
        $this->load->view('front_end/404');
    }

}