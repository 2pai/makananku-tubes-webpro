<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/main');
        $this->load->view('Admin/footer');
    }
    public function pasien()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/pasien');
        $this->load->view('Admin/footer');
    }
    public function makanan()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/main');
        $this->load->view('Admin/footer');
    }
    public function manageAdmin()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/main');
        $this->load->view('Admin/footer');
    }
}
?>