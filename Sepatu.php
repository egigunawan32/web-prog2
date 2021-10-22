<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sepatu extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sepatu_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama pembeli',
		'required', [
			'required' => 'Nama pembeli harus di isi'
		]);
		$this->form_validation->set_rules('nhp', 'Nomor HP',
		'required', [
			'required' => 'Nomor HP harus diisi'
		]);
		if($this->form_validation->run() != true) {
		$data['merk'] = ['Nike', 'Addidas', 'Kickers', 'Eiger', 'bucherri'];
		$data['ukuran'] = ['33','34','35','36','37','38','39','40','41','42','43','44'];
		$this->load->view('sepatu/s_input', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nhp' => $this->input->post('nhp'),
				'merk' => $this->input->post('merk'),
				'ukuran' => $this->input->post('ukuran'),
				'harga' =>$this->sepatu_model->proses($this->input->post
				('merk'))
			];

			$this->load->view('septu/s_output', $data);
		}
	} 
}