<?php

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
    $this->load->view('tampilanSaya', $data);
    $this->load->view('template/footer', $data);
  }

  public function aku_kamu($anak = "")
  {
    $data['title'] = "Ini halaman aku kamu";
    $data['namaOrang'] = "Sukri";

    $this->load->view('template/header', $data);
    $this->load->view('test', $data);
    $this->load->view('template/footer', $data);
  }
}
