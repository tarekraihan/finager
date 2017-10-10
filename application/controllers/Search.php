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

class Search extends CI_Controller{

    function ajax_get_search()
    {

        $search_word = htmlentities($this->input->post('search_word'));
        if (!empty(strlen($search_word))) {
            $result = $this->Front_end_select_model->get_search_index($search_word);
            $response = '';

//            pr($result->result());
            if (!empty($result->result())) {
                foreach ($result->result() as $row) {
                    $response .= '<div class="col-md-4">
                                    <div class="no_filte_div">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <a href="' . $row->url . '"><span>' . $row->search_title . '</span></a>
                                    </div>
                                </div>';
                }
            } else {
                $response .= '<div class="col-md-12">
                                    <div class="no_filte_div">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <span>Sorry No Result Found</span>
                                    </div>
                                </div>';
            }

            echo $response;
        } else {
            echo ' <div class="col-md-4">
                    <a href="'.base_url().'en/debit_card">
                       <div class="no_filte_div">
                          <i class="fa fa-credit-card" aria-hidden="true"></i>
                          <span>Debit Card</span>
                       </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="'.base_url().'en/home_loan">
                       <div class="no_filte_div">
                          <i class="fa fa-home" aria-hidden="true"></i>
                          <span>Home Loan</span>
                       </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="'.base_url().'en/personal_loan">
                       <div class="no_filte_div">
                          <i class="fa fa-male" aria-hidden="true"></i>
                          <span>Personal Loan</span>
                       </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="'.base_url().'en/car_loan">
                       <div class="no_filte_div">
                          <i class="fa fa-car" aria-hidden="true"></i>
                          <span>Auto Loan</span>
                       </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="'.base_url().'en/education_loan">
                       <div class="no_filte_div">
                          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                          <span>Education Loan</span>
                       </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="'.base_url().'en/fdr">
                       <div class="no_filte_div">
                          <i class="fa fa-archive" aria-hidden="true"></i>
                          <span>FDR</span>
                       </div>
                    </a>
                </div>';
        }
    }
}