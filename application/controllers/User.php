<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('Password');

		// Add custom validation rule for date
		$this->form_validation->set_rules('valid_date', 'Valid Date', function ($str) {
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
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[karyawan.email]|valid_email');
		$this->form_validation->set_rules('dob', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nomor_telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('nomor_hp', 'Nomor Handphone', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
		// $this->form_validation->set_rules('valid_date', 'Valid Date', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {

			// simpan ke database
			$dataRegistrasi = [
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'email' => $this->input->post('email'),
				'dob' => $this->input->post('dob'),
				'alamat' => $this->input->post('alamat'),
				'nomor_telepon' => $this->input->post('nomor_telepon'),
				'nomor_hp' => $this->input->post('nomor_hp'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'password' => $this->password->hash($this->input->post('password')),
				'id_departemen' => 1,
				'id_posisi' => 1,
				'mulai_kerja' => date('Y-m-d'),
				'dibuat' => date('Y-m-d H:i:s'),
				'diganti' => date('Y-m-d H:i:s'),
				'status' => 'Interview',
			];

			$this->User_model->create($dataRegistrasi);
			$dataPesan = ['pesan' => 'Akun Anda berhasil dibuat'];
			$this->session->set_flashdata($dataPesan);
			redirect('login');
		}
	}

	public function login()
	{
		$data['title'] = "Login";

		$this->load->view('template/header', $data);
		$this->load->view('login', $data);
		$this->load->view('template/footer', $data);
	}

	public function prosesLogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$passwordHash = $user->password ?? false;

			$user = $this->User_model->login($email);
			if ($this->password->verify($password, $passwordHash)) {
				echo 'Login berhasil';
			} else {
				echo 'Login gagal';
			}
		}
	}
}
