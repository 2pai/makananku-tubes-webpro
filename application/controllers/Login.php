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
		#call login() function (the one that's in the model) and check the result
		$data = [
			'nomor_pasien' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		#if true set session and fill it with the inputted username and redirect to '/profile'
		if($this->TheModel->login($data)){
			session_start();
			//$this->session->set_userdata('username',$data['nama_pasien']);
			$user = $this->TheModel->get_profile($data['nomor_pasien']);
			$this->session->username = $user['nama_pasien'];
			redirect('Main/');
		} else {
			$this->load->view('login',['error_message' => 'Gagal Login']);
		}
		#if not true show error message
		 #delete this if not needed, it's just placeholder to prevent error
	}
	public function logout(){
        $this->session->username = null;
        session_destroy();
        redirect('/Login');
	} 
}
?>