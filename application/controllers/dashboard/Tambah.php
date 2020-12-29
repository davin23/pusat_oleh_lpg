<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('dashboard/login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('dashboard/tambah');
	}
}
