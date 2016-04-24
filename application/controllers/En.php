<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En extends CI_Controller {
    public function index(){
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/index');
        $this->load->view('front_end/block/footer');
    }

    public function card(){
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card');
        $this->load->view('front_end/block/footer');
    }

    public function card_details(){
        $this->load->view('front_end/block/header');
        $this->load->view('front_end/block/right_menu');
        $this->load->view('front_end/block/vertical_menu');
        $this->load->view('front_end/card_details');
        $this->load->view('front_end/block/footer');
    }
}