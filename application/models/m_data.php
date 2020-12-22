<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
        return $this->db->get('table1')->result();
	}
	function only_makanan(){
		$this->db->like('jenis', 'makanan');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_minuman(){
		$this->db->like('jenis', 'minuman');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_suvenir(){
		$this->db->like('jenis', 'suvenir');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_pakaian(){
		$this->db->like('jenis', 'pakaian');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_cash(){
		$this->db->like('bayar', 'cash');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_online(){
		$this->db->where_not_in('bayar', "cash");
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
}

