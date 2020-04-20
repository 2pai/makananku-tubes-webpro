<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		#check if a session that contains username data exist and call get_profile() with that session's value as the param and then load the view profile and send the get_profile() result there
		if ($this->session->has_userdata('username')) {
            $this->load->view('profile', $this->TheModel->get_profile($this->session->username));
        } else {
            redirect('login');
        }
		#if such session doesn't exist redirect to '/login'
		// $this->load->view('profile'); #delete this if not needed, it's just placeholder to prevent error
	}
	
	public function logout(){
		$this->session->sess_destroy();
		#remove session and redirect to '/login'
		redirect('/login'); #delete this if not needed, it's just placeholder to prevent error
	}
}
?>