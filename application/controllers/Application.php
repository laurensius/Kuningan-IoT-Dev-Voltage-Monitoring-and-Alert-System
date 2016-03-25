<?php
/*
 * Developed by : Laurensius Dede Suhardiman (Kuningan Iot Dev)
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('application/landingpage');
    }
    
    public function monitoring(){
        $this->load->view('monitoring');
    }
    
    public function reporting(){
        $this->load->view('reporting');
    }
}

/*
 *End of controller/Application.php 
 */