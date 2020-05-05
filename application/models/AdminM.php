<?php 
class AdminM extends CI_Model{

    public function listPesanan()
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->join('pasien', 'pesanan.nomor_pasien = pasien.nomor_pasien');
        $this->db->join('makanan', 'pesanan.nomor_makanan = makanan.id_makanan');
        return $this->db->get()->result_array();
    }
    public function listMakanan()
    {
        return $this->db->get('makanan')->result_array();
    }
    public function listPasien()
    {
        return $this->db->get('pasien')->result_array();
    }
    public function listPesananPasien($id)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->join('pasien', 'pesanan.nomor_pasien = pasien.nomor_pasien');
        $this->db->join('makanan', 'pesanan.nomor_makanan = makanan.id_makanan');
        $this->db->where('pasien.nomor_pasien',$id);
        return $this->db->get()->row_array();
    }
    public function updatePesanan($id,$id_makanan)
    {
        $this->db->set('nomor_makanan', $id_makanan);
        $this->db->where('id_pesanan', $id);
        $this->db->update('pesanan'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }
    public function deletePesanan($id)
    {
        $this->db->where('id_pesanan', $id);
        $this->db->delete('pesanan');
    }
    public function inputPesanan($data)
    {
        $this->db->insert('pesanan',$data);
    }
}?>