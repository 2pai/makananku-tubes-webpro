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
        $this->load->view('Admin/makanan');
        $this->load->view('Admin/footer');
    }
    public function pesanan()
    {
        $data = [
            'listPesanan' => $this->AdminM->listPesanan()
        ];
        $this->load->view('Admin/head');
        $this->load->view('Admin/pesanan',$data);
        $this->load->view('Admin/footer');
    }
    public function editpesanan($id)
    {
        $data = [
            'pasien' => $this->AdminM->listPesananPasien($id),
            'listMakanan' => $this->AdminM->listMakanan()
        ];
        $this->load->view('Admin/head');
        $this->load->view('Admin/editpesanan',$data);
        $this->load->view('Admin/footer');
    }
    public function editpesananP($id){
        $this->AdminM->updatePesanan($id,$this->input->post('id_makanan'));
        redirect('Admin/pesanan');
    }
    public function deletePesanan($id)
    {
        $this->AdminM->deletePesanan($id);
        redirect('Admin/pesanan');
    }
}
?>