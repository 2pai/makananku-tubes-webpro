<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
    {
        $this->load->view('Dashboard/head');
        $this->load->view('Dashboard/main');
        $this->load->view('Dashboard/footer');
        # code...
    }
    public function pesanMakanan(){
        $this->load->view('Dashboard/head');
        $this->load->view('Dashboard/pesanmakanan');
        $this->load->view('Dashboard/footer');
        # code...
    }
}