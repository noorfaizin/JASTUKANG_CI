<?php

class M_Admin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('date');
    $this->tgl = "%Y-%m-%d %h:%i:%s ";
  }

  public function penarikanDana()
  { 
    $id_transaksi = $this->input->post('transaksi');
    $path    = 'assets/images/transaksi/penarikan_dana/'; 

    $this->db->select_max('id_saldo');
    $query = $this->db->get('saldo')->result_array();
    $no_transaksi = $query['0']['id_saldo'];
    $no_transaksi++;
    $nameFile = $id_transaksi . "_" . $no_transaksi;

    $config['upload_path'] = $path; 
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $config['file_name'] = $nameFile;
    
    $this->load->library('upload', $config); 
    $this->upload->initialize($config); 
    if ($this->upload->do_upload('files')) {

      $dataBuktiTF = $this->upload->data();
      $addData = [
        'wd_path' => $dataBuktiTF['file_name'],
        'keluar' => $this->input->post('jumlah'),
        'datetime' => mdate($this->tgl),
        'id_transaksi' => $id_transaksi
      ];         
      $this->db->insert('saldo', $addData);

      $pesan = "Berhasil";
      $method = "Penarikan Dana";
      $tema = "success";
    } else {
      $pesan = "Gagal";
      $method = "Penarikan Dana";
      $tema = "error";
    }
    $this->get_flashdata($pesan, $method, $tema);
  }
  public function getTransaksi()
  {
    $this->db->select('id_tr_material');
    return $this->db->get('transaksi_material')->result();
  }
  public function getSaldo()
  {
    $this->db->order_by('datetime','desc');
    $this->db->from('saldo');
    return $this->db->get('')->result();
  }

  public function getMethodPembayaran()
  {
    $this->db->order_by("status_aktif", "desc");
    return $this->db->get('metode_pembayaran')->result();
  }

  public function getMethodPembayaranBy($id_rekening)
  {
    $this->db->where('id_rekening', $id_rekening);
    return $this->db->get('metode_pembayaran')->result();
  }

  public function saveMethodPembayaran()
  {
    $this->db->select_max('id_rekening');
    $query = $this->db->get('metode_pembayaran')->result_array();
    $no_rekening =  substr($query['0']['id_rekening'], 3,4);
    $no_rekening++;
    $getNumber = strlen((string)$no_rekening);
    if ($getNumber == 1 || $getNumber == 2) {
      $final = str_pad("$no_rekening",2, '0', STR_PAD_LEFT);
      $id_rekening = "NR_". $final;
    } else {
      $id_rekening ="NR_01";
    }

    $data= [ 
      'id_rekening' => $id_rekening,
      'nama_rekening' => $this->input->post('nama', TRUE),
      'no_rekening' => $this->input->post('nomor', TRUE),
      'kacab' => $this->input->post('kacab', TRUE),
      'status_aktif' => '0'
    ];

    $this->db->insert('metode_pembayaran', $data);
    
    $pesan = "Berhasil Ditambahkan";
    $method = "Metode Pembayaran";
    $tema = "success";
    $this->get_flashdata($pesan, $method, $tema);
  }

  public function updateMethodPembayaran($id_rekening)
  {
    $data= [ 
      'nama_rekening' => $this->input->post('nama', TRUE),
      'no_rekening' => $this->input->post('nomor', TRUE),
      'kacab' => $this->input->post('kacab', TRUE),
    ];

    $this->db->where('id_rekening', $id_rekening);
    $this->db->update('metode_pembayaran', $data);
    
    $pesan = "Berhasil Mengubah";
    $method = "Metode Pembayaran";
    $tema = "success";
    $this->get_flashdata($pesan, $method, $tema);
  }

  public function nonaktifkanmetodepembayaran($id_rekening)
  {
    $this->db->select('status_aktif');
    $this->db->where('id_rekening', $id_rekening);
    $query = $this->db->get('metode_pembayaran')->result_array();

    if ($query['0']['status_aktif'] == "0") {
      $data = [
        'status_aktif' => '1'
      ];
    } else {
      $data = [
        'status_aktif' => '0'
      ];
    }
    $this->db->where('id_rekening', $id_rekening);
    $this->db->update('metode_pembayaran', $data);

    $pesan = "Berhasil Menonaktifkan";
    $method = "Metode Pembayaran";
    $tema = "success";
    $this->get_flashdata($pesan, $method, $tema);
  }

  private function get_flashdata($pesan, $jasa, $tema)    
  {
    $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
  }
}