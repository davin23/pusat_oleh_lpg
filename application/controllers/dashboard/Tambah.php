<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('dashboard/login');
        }	
		$this->load->model('m_data');
		$this->load->helper('form','url');
	}
	public function index()
	{
		$this->load->view('dashboard/tambah');
	}

	public function tambah_toko(){
		$nama= $this->input->post('nama');
		$alamat= $this->input->post('alamat');
		$jadwal= $this->input->post('jadwal');
		$website= $this->input->post('website');
		$kontak= $this->input->post('kontak');
		$metode= $this->input->post('metode');
		$jenis= $this->input->post('jenis');
		$lat= $this->input->post('lat');
		$long= $this->input->post('long');
		$file = $_FILES['gambar']['name'];
		$deskripsi = $this->input->post('deskripsi');

		if($file == ''){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dimasukkan, anda Belum mamasukkan foto </div>');
            redirect('dashboard/dashboard');
		}else{
			$config['upload_path'] = '././assets/img';
			$config['allowed_types'] = 'jpg|gif|png|jpeg';
			$config['max_size'] = 10000;

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo 'upload gagal';
				die;
			}else{
				$file = $this->upload->data('file_name');
			}
			$data = array(
				'nmtoko'=>$nama,
				'alamat' => $alamat,
				'jadwal' => $jadwal,
				'web' => $website,
				'jenis' => $jenis,
				'cp' => $kontak,
				'bayar' => $jenis,
				'lat' => $lat,
				'long'=> $long,
				'pic' => $file,
				'deskripsi' => $deskripsi

			);
			$this->m_data->tambah($data,'table1');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Menambahkan Toko '.$nama.' </div>');
            redirect('dashboard/dashboard');

		}
	}
}
