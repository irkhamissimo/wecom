<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		// Set validation rules for all required fields
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('hp', 'Nomor Handphone', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

		if ($this->form_validation->run() == FALSE) {
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
				// Add other fields here
			];
			// Process the registration...
		}
	}
}
