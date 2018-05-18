<?php
class Login extends CI_Controller{

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if( $this->form_validation->run() == false) {
			
			$this->load->view('public/admin_login');
		} else {
		
		}
	}
}