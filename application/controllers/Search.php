<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Script : admin  controller                 *
 * Start Date : 29-02-2016                    *
 * Last Update : 29-02-2016                   *
 **********************************************/

class Search extends CI_Controller
{
    function ajax_get_search(){
        $search_word = $this->input->get('search_word');
        echo $search_word;
    }


}