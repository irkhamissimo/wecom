<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
		// Add custom validation rule for date
		$this->form_validation->set_rules('valid_date', 'Valid Date', function($str) {
			return (bool)strtotime($str);
		});
	}

	public function register()
	{
		$data['title'] = "Register";

		$this->load->view('template/header', $data);
		$this->load->view('register', $data);
		$this->load->view('template/footer', $data);
	}

	public function prosesRegister()
	{
		if ($this->form_validation->run('register') == FALSE) {
			$data['title'] = "Register";
			$this->load->view('template/header', $data);
			$this->load->view('register', $data);
			$this->load->view('template/footer', $data);
		} else {
			$data = [
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'hp' => $this->input->post('hp'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin')
			];
			// Process the registration...
		}
	}
}
