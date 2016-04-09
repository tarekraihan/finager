<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My404 extends CI_Controller
{
    public function index(){
        echo "<h1>404</h1><p>sorry the page not found !</p><p><a href='".base_url()."backdoor/dashboard'>Back to Dashboard</a> </p>";
    }

}