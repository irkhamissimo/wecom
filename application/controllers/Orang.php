<?php

class Orang extends CI_Controller
{
	public function nyasar()
	{
		$data['heading'] = '404 Not Found';
		$data['message'] = 'Halaman yang Anda cari tidak ditemukan.';
		$this->load->view('errors/html/error_404', $data);
	}
}
