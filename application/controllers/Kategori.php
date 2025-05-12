<?php

class Kategori extends CI_Controller{

  public function merek($kode_tipe){
    $data['mobil']= $this->db->query("SELECT * FROM mobil WHERE kode_tipe ='$kode_tipe'")->result();
    $data['tipe']= $this->db->query("SELECT * FROM mobil where kode_tipe='$kode_tipe'")->row();
    $this->load->view('templates_customer/header');
    $this->load->view('kategori/list', $data);
    $this->load->view('templates_customer/footer');
  }
}