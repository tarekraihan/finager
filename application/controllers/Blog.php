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

class Blog extends CI_Controller
{

    public function index(){
        $this->load->view('blog/block/header');
		$this->load->view('front_end/block/vertical_menu');
		$this->load->view('blog/index');
		$this->load->view('blog/block/footer');
    }

    public function credit_card1(){
        $this->load->view('blog/card/credit_card1');
    }

    public function credit_card2(){
        $this->load->view('blog/card/credit_card2');
    }

    public function credit_card4(){
        $this->load->view('blog/card/credit_card5');
    }

    public function credit_card6(){
        $this->load->view('blog/card/credit_card6');
    }

    public function dps1(){
        $this->load->view('blog/investment/dps1');
    }

    public function dps2(){
        $this->load->view('blog/investment/dps2');
    }

    public function dps3(){
        $this->load->view('blog/investment/dps3');
    }

    public function dps4(){
        $this->load->view('blog/investment/dps4');
    }

    public function lakhpati1(){
        $this->load->view('blog/investment/lakhpati1');
    }

    public function lakhpati2(){
        $this->load->view('blog/investment/lakhpati2');
    }

    public function fdr1(){
        $this->load->view('blog/investment/fdr1');
    }

    public function fdr2(){
        $this->load->view('blog/investment/fdr2');
    }

    public function fdr3(){
        $this->load->view('blog/investment/fdr3');
    }
    public function fdr4(){
        $this->load->view('blog/investment/fdr4');
    }

    public function car_loan1(){
        $this->load->view('blog/loan/car_loan1');
    }

    public function car_loan2(){
        $this->load->view('blog/loan/car_loan2');
    }

    public function car_loan3(){
        $this->load->view('blog/loan/car_loan3');
    }

    public function car_loan4(){
        $this->load->view('blog/loan/car_loan4');
    }

    public function home_loan1(){
        $this->load->view('blog/loan/home_loan1');
    }

    public function home_loan2(){
        $this->load->view('blog/loan/home_loan2');
    }

    public function home_loan3(){
        $this->load->view('blog/loan/home_loan3');
    }

    public function home_loan4(){
        $this->load->view('blog/loan/home_loan4');
    }
    public function personal_loan1(){
        $this->load->view('blog/loan/personal_loan1');
    }
    public function personal_loan2(){
        $this->load->view('blog/loan/personal_loan2');
    }
    public function personal_loan3(){
        $this->load->view('blog/loan/personal_loan3');
    }
    public function personal_loan4(){
        $this->load->view('blog/loan/personal_loan4');
    }


    public function student_loan1(){
        $this->load->view('blog/loan/student_loan1');
    }

    public function student_loan2(){
        $this->load->view('blog/loan/student_loan2');
    }

    public function student_loan3(){
        $this->load->view('blog/loan/student_loan3');
    }
    public function student_loan4(){
        $this->load->view('blog/loan/student_loan4');
    }
	
	
	public function debit_card1(){
        $this->load->view('blog/card/debit_card1');
    }

    public function debit_card2(){
        $this->load->view('blog/card/debit_card2');
    }

    public function debit_card3(){
        $this->load->view('blog/card/debit_card3');
    }
    public function debit_card4(){
        $this->load->view('blog/card/debit_card4');
    }



}