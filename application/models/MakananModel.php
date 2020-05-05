<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MakananModel extends CI_Model{
	function __construct() {
		parent::__construct();
	}

	public function get_all(){
		$query = $this->db->get('makanan');
		return $query->result_array();
	}
	
	public function get_makanan($id_makanan){
		return $this->db->get_where('makanan', ['id_makanan' => $id_makanan])->row_array();
	}
	public function input_makanan(){
		$data = array(
			'nama_makanan' 	=> $this->input->post('nama_makanan'),
			'foto' 			=> $this->input->post('foto'),
			'nilai_gizi' 	=> $this->input->post('nilai_gizi'),
			'komposisi' 	=> $this->input->post('komposisi'),
			'deskripsi' 	=> $this->input->post('deskripsi'),
			'ketersediaan' 	=> $this->input->post('ketersediaan'),
		);
		$this->db->insert('makanan', $data);
	}
	public function edit_makanan(){
		$data = array(
			'nama_makanan' 	=> $this->input->post('nama_makananu'),
			'foto' 			=> $this->input->post('foto'),
			'nilai_gizi' 	=> $this->input->post('nilai_giziu'),
			'komposisi' 	=> $this->input->post('komposisiu'),
			'deskripsi' 	=> $this->input->post('deskripsiu'),
			'ketersediaan' 	=> $this->input->post('ketersediaanu'),
		);
		try{
            $this->db->where('id_makanan', $this->input->post('id_makananu'))->update('makanan', $data);
            return [
                'success' => true,
                'message' => "Makanan Successfully Updated."
            ];
        }catch(Exception $err){
            return [
                'success' => false,
                'message' => 'Makanan Update Failed : ' . $err
            ];
        }
	}
	public function delete_makanan($id_makanan){
		try {
            $this->db->delete('makanan',['id_makanan' => $id_makanan]);
            return [
                'success' => true,
                'message' => 'Makanan Sucessfully Deleted.'
            ];
        } catch (Exception $err) {
            return [
                'success' => false,
                'message' => 'Makanan Delete Failed : ' . $err
            ];
        }
	}
}
?>
