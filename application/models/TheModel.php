<?php 
class TheModel extends CI_Model{
	
	public function check_username($username){
		//check if username (from param) already exist in db or not, return true / false
		$data = $this->db->get_where('pasien',['username' => $username])->num_rows();
		if($data == 0){
			return false;
		}else{
			return true; 
		}
	}
	
	public function login($data) {
		//check if data (consist of username and password) exist/found in db, return true / false
		$result = $this->db->get_where('pasien',['nomor_pasien' => $username])->num_rows();
		if($result == 1){
			return true;
		}else{
			return false;
		}
	}
	
	public function insert_new_profle($data){
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		$this->db->insert('profile',$data);
	}
	
	public function get_profile($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		$result = $this->db->get_where('pasien',['username'=> $username]);
		if($result->num_rows() == 0){
			return false;
		}else{
			return $result->row_array();
		}
	}
}
?>