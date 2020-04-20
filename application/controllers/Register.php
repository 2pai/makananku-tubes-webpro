<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('register'); #delete this if not needed, it's just placeholder to prevent error
	}
	
	public function register() {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $repassword = $this->input->post('re-password');
           
            if ($this->TheModel->check_username($username)) {
                $this->load->view('register', ['error_message' => 'Username already exist']);
            }
            if ($password != $repassword) {
                $this->TheModel->view('register', ['error_message' => 'Password and Re Enter Password ain\'t same']);
            }
            $cfg = [
                'upload_path' => './assets/uploads/',
                'allowed_types' => 'jpg|png|gif|svg'
            ];
            $this->upload->initialize($cfg);
            if (!$this->upload->do_upload('uploadImage')) {
                die($this->upload->display_errors());
                $this->load->view('register', ['error_message' => 'The filetype you are attempting to upload is not allowed']);
            }
            
            if (!$this->TheModel->insert_new_profle(['username' => $username, 'password' => $password, 'profile_pic' => $this->upload->data()['file_name']])) {
            	$this->load->view('register', ['error_message' => 'Register gagal']);
            }
            
            $this->session->set_userdata('username', $username);
            redirect('/profile');
	}
}
?>