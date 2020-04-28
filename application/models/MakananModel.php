<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MakananModel extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	public function get_all(){
		return $this->db->get('makanan')->result();
	}
	public function get_makanan($id_makanan){
		$this->db->where('id_makanan', $id_makanan);
		return $this->db->get('makanan')->row();
	}
	public function input_makanan(){
		$data = array(
			'nama_makanan' => $this->input->post('nama_makanan'),
			'foto' => $this->input->post('foto'),
			'nilai_gizi' => $this->input->post('nilai_gizi'),
			'komposisi' => $this->input->post('komposisi'),
			'deskripsi' => $this->input->post('deskripsi'),
			'ketersediaan' => $this->input->post('ketersediaan'),
		);
		$this->db->insert('makanan', $data);
	}
	public function edit_makanan($id_makanan){
		$data = array(
			'nama_makanan' => $this->input->post('nama_makanan'),
			'foto' => $this->input->post('foto'),
			'nilai_gizi' => $this->input->post('nilai_gizi'),
			'komposisi' => $this->input->post('komposisi'),
			'deskripsi' => $this->input->post('deskripsi'),
			'ketersediaan' => $this->input->post('ketersediaan'),
		);
		$this->db->where('id_makanan', $id_makanan);
		$this->db->update('makanan', $data);
	}
	public function delete_makanan($id_makanan){
		$this->db->where('id_makanan', $id_makanan);
		return $this->db->delete('makanan');
	}
}
?>