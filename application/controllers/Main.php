<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
    {
        $this->username = $this->session->username;
        $data['username'] = $this->username;
        $this->load->view('Dashboard/head');
        $this->load->view('Dashboard/main', $data);
        $this->load->view('Dashboard/footer');
        # code...
    }

    public function pesanMakanan(){
        $data = [
            'listMakanan' => $this->AdminM->listMakanan()
        ];
        $this->load->view('Dashboard/head');
        $this->load->view('Dashboard/pesanmakanan',$data);
        $this->load->view('Dashboard/footer');
        # code...
    }
    
    public function pesanMakananP(){
        $data = [
            'nomor_pasien' => 1,
            'nomor_makanan' => $this->input->post('id_makanan'),
            'tanggal' => $this->input->post('tanggal'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->AdminM->inputPesanan($data);
        redirect('Main/pesanMakanan');

    }
    
    public function lihatMakanan()
    {
        $this->load->view('Dashboard/head');
        $this->load->view('Dashboard/lihatmakanan');
        $this->load->view('Dashboard/footer');    
    }
}