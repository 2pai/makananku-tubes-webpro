<?php 
class PasienModel extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function getAllPasien()
    {
        $query = $this->db->get('pasien');  
        return $query->result_array();  
    }

    public function getDataPasien($id){
        return $this->db->get_where('pasien', ['nomor_pasien' => $id])->row_array();
    }

    public function cekNamaPasien($namaPasien){

        $this->db->where('nama_pasien', $namaPasien);
        $check =  $this->db->count_all_results('pasien'); 

        if($check > 0) return true; 
        else return false;
    }

    public function registPasien(){
    
        /* Defined Data */
        $data = [
            'nama_pasien'   => $this->input->post('nama_pasien', true),
            'password'      => $this->input->post('password', true),
            'umur'          => $this->input->post('umur', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'penyakit'      => $this->input->post('penyakit', true),
            'alergi'        => $this->input->post('alergi', true),
            'kamar'         => $this->input->post('kamar', true),
        ];

       /* Inserting Data */
       return $this->db->insert('pasien', $data);
    }

    public function updatePasien(){
        $data = [
            'nama_pasien'   => $this->input->post('nama_pasienu', true),
            'password'      => $this->input->post('passwordu', true),
            'umur'          => $this->input->post('umuru', true),
            'jenis_kelamin' => $this->input->post('jenis_kelaminu', true),
            'penyakit'      => $this->input->post('penyakitu', true),
            'alergi'        => $this->input->post('alergiu', true),
            'kamar'         => $this->input->post('kamaru', true),
        ];

        try{
            $this->db->where('nomor_pasien', $this->input->post('nomor_pasien'))->update('pasien', $data);
            return [
                'success' => true,
                'message' => "Pasien Successfully Updated."
            ];
        }catch(Exception $err){
            return [
                'success' => false,
                'message' => 'Pasien Update Failed : ' . $err
            ];
        }
    }

    public function deletePasien($id){
        try {
            $this->db->where('nomor_pasien', $this->input->post('nomor_pasien'))->delete('pasien');
            return [
                'success' => true,
                'message' => 'Pasien Sucessfully Deleted.'
            ];
        } catch (Exception $err) {
            return [
                'success' => false,
                'message' => 'Pasien Delete Failed : ' . $err
            ];
        }
    }
}
?>