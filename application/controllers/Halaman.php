<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$data['title'] = "Ini title yang dinamis";
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
			->row();
		$this->load->view('template/header', $data);
		$this->load->view('halamanSaya', $data);
		$this->load->view('template/footer', $data);
	}

	public function aku_kamu($anak = "")
	{
		$data['title'] = "Ini title aku kamu";
		$data['namaOrang'] = "Haidar";
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
			->row();
		$this->load->view('template/header', $data);
		$this->load->view('tes', $data);
		$this->load->view('template/footer', $data);
	}
}
