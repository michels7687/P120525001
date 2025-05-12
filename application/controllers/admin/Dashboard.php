<?php

class Dashboard extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Rental_model');
    
    if(empty($this->session->userdata('username'))){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda belum login!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('auth/login');
    }
    elseif($this->session->userdata('role_id') != '1'){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda tidak punya akses ke halaman ini!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('customer/dashboard');
    }
  }

  public function index(){
    $mobil     = $this->db->query("SELECT * FROM mobil");
    $customer  = $this->db->query("SELECT * FROM customer WHERE role_id='2'");
    $transaksi = $this->db->query("SELECT * FROM transaksi");
    $laporan   = $this->db->query("SELECT * FROM transaksi WHERE status_rental='Selesai'");
    $hasil    =  $this->db->query("SELECT COUNT(mobil.kode_tipe) AS data, kode_tipe  FROM transaksi JOIN mobil ON transaksi.id_mobil = mobil.id_mobil GROUP BY kode_tipe");
    $data['mobil']      = $mobil->num_rows();
    $data['customer']   = $customer->num_rows();
    $data['transaksi']  = $transaksi->num_rows();
    $data['laporan']    = $laporan->num_rows();
    $data['hasil']      = $hasil->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }


}