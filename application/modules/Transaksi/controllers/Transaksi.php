<?php
  class Transaksi extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Transaksi');
    }

    public function material()
    {
      $data['judul'] = "Dashboard Transaksi Material";
      $transaksiMaterial['material'] = $this->M_Transaksi->getAllTransaksiMaterial();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('material/index', $transaksiMaterial);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function getTransaksiMember()
    {
      $data['judul'] = "Dashboard Transaksi Material";
      $transaksiMaterial['material'] = $this->M_Transaksi->getTransaksiMaterialByMember();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('material/memberMaterial', $transaksiMaterial);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function AddTransaksi()
    {
      $data['judul'] = "Tambah Transaksi";
      $transaksi['kategori'] = $this->M_Transaksi->getKategori();
      $transaksi['vendor'] = $this->M_Transaksi->getVendor();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('add', $transaksi);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editTransaksi($id_transaksi)
    {
      $data['judul'] = "Ubah Transaksi";
      $transaksi['kategori'] = $this->M_Transaksi->getKategori();
      $transaksi['transaksi'] = $this->M_Transaksi->getTransaksiById($id_transaksi);
      $transaksi['vendor'] = $this->M_Transaksi->getVendor();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit', $transaksi);
      $this->load->view('Dashboard/Template_backend/footer');
    }




    public function konfirmasiSudahTerkirim($id_transaksi, $pesan)
    {
      $this->M_Transaksi->konfirmasiPengiriman($id_transaksi, $pesan);
      if ($pesan==1 || $pesan=2) {
        redirect('Transaksi/material');
      } else {
        redirect('Transaksi/getTransaksiMember');
      }
      
    }

    public function saveBuktiTransaksi()
    {
      $this->form_validation->set_rules('asal_rekening', 'Asal Rekening', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('total_bayar', 'Total Bayar', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('nama_pengirim', 'Nama Pengirim', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('asal_bank', 'Asal Bank ', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('id_transaksi', 'ID Transaksi ', 'trim|required', 
        array('required' => '%s harus diisi'));
    
      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Tukang'));
      } else {
        if(!empty($_FILES['files']['name'])){
          $this->M_Transaksi->saveBuktiTransaksi();
        } else {
          $this->session->set_flashdata('sukses','Bukti tidak terlampir');
          // redirect(base_url('Tukang'));
        }
      }
    }

    public function konfirmasiMaterial($id_transaksi, $id, $total_harga)
    {
      if ($id == '1') {
        $this->db->set('status', '2');
        $this->db->where('id_tr_material', $id_transaksi);
        $this->db->update('transaksi_material');
        $this->M_Transaksi->addSaldo('1',$id_transaksi);
      } else if ($id == '2') {
        // $this->db->set('status', '2');
      }
      redirect('Transaksi/material');
    }

    public function getPemesananMaterialBy($id_transaksi)
    {
      $data = $this->M_Transaksi->getPemesananMaterialBy($id_transaksi);
      echo json_encode($data);
    }

    public function cekPembayaran($id_transaksi)
    {
      $data = $this->M_Transaksi->getPembayaranBy($id_transaksi);
      echo json_encode($data);
    }

    public function deleteTransaksi($id)
    {
      $this->M_Transaksi->deleteTransaksi($id);
      redirect('Transaksi');
    }


  }