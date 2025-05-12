<?php

class Rental_model extends CI_Model
{

	function data($number, $offset)
	{
		return $query = $this->db->get('mobil')->result();
	}
	// ==========================pagination========================
	function jumlah_data()
	{
		return $this->db->get('mobil')->num_rows();
	}
	// ==========================pagination========================


	function data_cus($number, $offset)
	{

		return $query = $this->db->get('customer')->result();
	}
	// ==========================pagination========================
	function jumlah_data_cus()
	{
		return $this->db->get('customer')->num_rows();
	}
	// ==========================pagination========================

	function data_tran($number, $offset)
	{
		return $query =   $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer")->result();
	}
	// ==========================pagination========================
	function jumlah_data_tran()
	{
		return $this->db->get('transaksi')->num_rows();
	}
	// ==========================pagination========================

	//pencarian==========================//=======================

	public function search($keyword)
	{
		if (!$keyword) {
			return null;
		}
		$this->db->like('mobil', $keyword);
		$this->db->or_like('kode_tipe', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function get_where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function ambil_id_mobil($id)
	{
		$hasil = $this->db->where('id_mobil', $id)->get('mobil');

		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}
	public function merek_kategori($merek)
	{
		$this->db->where_in('merek', $merek);
		return $this->db->get('mobil');
	}

	// public function get_all_data_kategori($merek){
	//   $this->db->select('*');
	//   $this->db->from('mobil');
	//   $this->db->where('merek',$merek);
	//   return $this->db->get()->result();
	// }
	// return $this->db->get('mobil')->result();

	// // public function merek_kategori($merek)
	// // {
	// //   $this->db->select('*');
	// //   $this->db->from('mobil');
	// //   $this->db->where('merek',$merek);

	// //   $merek = $this->db->get();

	// //   if ($merek->num_rows() > 0) {
	// //     $merek = $merek->result();
	// //   }

	// //   return $merek->result();
	// // }



	public function cek_login($username, $password)
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username', $username)
			->where('password', md5($password))
			->limit(1)
			->get('customer');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function update_password($where, $data, $table)
	{
		// var_dump($where);
		// die;
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi', array('id_rental' => $id));
		return $query->row_array();
	}
	public function get_all_tipe()
	{
		$this->db->select('*');
		$this->db->from('tipe');
		$this->db->order_by('kode_tipe', 'asc');
		return $this->db->get()->result();
	}

	public function get_product_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->like('kode_tipe', $keyword);
		$this->db->or_like('merek', $keyword);
		$this->db->or_like('warna', $keyword);
		$this->db->or_like('tahun', $keyword);
		return $this->db->get()->result();
	}

	public function get_product_keyword_cus($keyword)
	{
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->like('nama', $keyword);
		$this->db->or_like('no_ktp', $keyword);
		$this->db->or_like('username', $keyword);

		return $this->db->get()->result();
	}
}
