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
        $search_word = htmlentities($this->input->post('search_word'));

        $result = $this->Front_end_select_model->get_search_index($search_word);
        $response='';
        if($search_word){
            foreach($result->result() as $row){
                $response .= '<div class="col-md-4">
                                    <div class="no_filte_div">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <a href="'.$row->url.'"><span>'.$row->search_title.'</span></a>
                                    </div>
                                </div>';
            }
        }else{
            $response = '<div class="col-md-12">
                                    <div class="no_filte_div">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <span>Sorry No Result Found</span>
                                    </div>
                                </div>';
        }

        echo $response;
    }


}