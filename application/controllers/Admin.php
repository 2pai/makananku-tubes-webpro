<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PasienModel');
        $this->load->model('MakananModel');
        $this->load->library('Form_validation');
    }

    public function index()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/main');
        $this->load->view('Admin/footer');
    }
    public function pasien()
    {
        $data['pasien'] = $this->PasienModel->getAllPasien();
        $this->load->view('Admin/head');
        $this->load->view('Admin/pasien');
        $this->load->view('Admin/footer');
    }
    public function makanan()
    {
        $data['makanan'] = $this->MakananModel->get_all();
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

    public function addPasien()
    {
            $this->PasienModel->registPasien();
            redirect('Admin/pasien');
    }

    public function hapusPasien($id)
    {
        $this->PasienModel->deletePasien($id);
        redirect('Admin/pasien');
    }

    public function updatePasien($id)
    {
        $data['pasien'] = $this->PasienModel->getDataPasien($id);
        $this->PasienModel->updatePasien();
        redirect('Admin/pasien');
    }

    public function tambah_makanan(){
        $cek = $this->MakananModel->input_makanan($data);
        if ($cek) $this->session->set_flashdata('info', 'Makanan berhasil ditambahkan');
        else $this->session->set_flashdata('info', 'Makanan gagal ditambahkan');
        $this->load->view('Admin/head');
        $this->load->view('Admin/makanan');
        $this->load->view('Admin/footer');
    }
    public function ubah_makanan($id_makanan){
        $cek = $this->MakananModel->edit_makanan($id_makanan, $data);
        if ($cek) $this->session->set_flashdata('info', 'Makanan berhasil diedit');
        else $this->session->set_flashdata('info', 'Makanan gagal diedit');
        $this->load->view('Admin/head');
        $this->load->view('Admin/makanan');
        $this->load->view('Admin/footer');
    }
    public function hapus_makanan($id_makanan){
        $cek = $this->MakananModel->delete_makanan($id_makanan);
        if ($cek) $this->session->set_flashdata('info', 'Makanan berhasil dihapus');
        else $this->session->set_flashdata('info', 'Makanan gagal dihapus');
        $this->load->view('Admin/head');
        $this->load->view('Admin/makanan');
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