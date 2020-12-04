<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	public function index()
	{
		$toko = $this->m_data->tampil_data();
		$data['toko'] = $toko;
		$this->load->view('list',$data);
	}
}
