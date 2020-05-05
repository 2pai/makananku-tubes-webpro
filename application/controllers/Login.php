<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		 $this->load->model('TheModel');
	}
	
	public function index()
	{
		$this->load->view('login'); #delete this if not needed, it's just placeholder to prevent error
	}
	
	public function login(){
		$data = [
			'nomor_pasien' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		if ($this->input->post('username') == "admin" && $this->input->post('password') == "admin") {
			redirect('Admin/');
		} else if($this->TheModel->login($data)){
			session_start();

			$user = $this->TheModel->get_profile($data['nomor_pasien']);
			$this->session->nomor_pasien = $data['nomor_pasien'];
			$this->session->username = $user['nama_pasien'];
			redirect('Main/');
		} else {
			$this->load->view('login',['error_message' => 'Gagal Login']);
		}

	}
	public function logout(){
        $this->session->username = null;
        session_destroy();
        redirect('/Login');
	} 
}
?>