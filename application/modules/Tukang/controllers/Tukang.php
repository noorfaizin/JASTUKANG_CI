<?php
  class Tukang extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Tukang');
    }

    public function index()
    {
      $data['judul'] = "Tukang Dashboard";
      $tukang['tukang'] = $this->M_Tukang->getAllTukang();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index', $tukang);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function AddTukang()
    {
      $data['judul'] = "Tambah Tukang";
      $tukang['kategori'] = $this->M_Tukang->getKategori();
      $tukang['kecamatan'] = $this->M_Tukang->getKemacatan();
      $tukang['jasa'] = $this->M_Tukang->getJasa();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('add', $tukang);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editTukang($id_tukang)
    {
      $data['judul'] = "Ubah Tukang";
      $tukang['id_tukang'] = $id_tukang;
      $tukang['kecamatan'] = $this->M_Tukang->getKemacatan();
      $get_data = $this->M_Tukang->getTukangById($id_tukang);
      if($get_data->num_rows() > 0){
        $row = $get_data->row_array();
        $data['id_kelurahan'] = $row['id_lokasi'];
      }
      $this->session->set_flashdata('edit', '<script type="text/javascript">get_tukang_edit();</script>');
      // $tukang['tukang'] = $this->M_Tukang->getTukangById($id_tukang);
      $tukang['jasa'] = $this->M_Tukang->getJasa();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit', $tukang);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function get_data_edit()
    {
      $id_tukang = $this->input->post('id_tukang',TRUE);
      $data = $this->M_Tukang->getTukangById($id_tukang)->result();
      echo json_encode($data);
    }

    function getKelurahan($id){
      $data = $this->M_Tukang->getKelurahan($id)->result();
      echo json_encode($data);
    }




    public function saveTukang()
    {
      $this->form_validation->set_rules('hp', 'Nomor Handphone', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('no_identitas', 'Nomor Identitas', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('nama', 'Nama Tukang', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kelurahan', 'Alamat ', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Tukang'));
      } else {
        if(!empty($_FILES['file_ktp']['name'])){
          $this->M_Tukang->saveTukang();
        } else {
          $this->session->set_flashdata('sukses','Foto KTP Tidak Terlampir');
          redirect(base_url('Tukang'));
        }
      }
    }

    public function updateTukang($id)
    {
      $this->form_validation->set_rules('harga', 'Harga Tukang', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('keterangan_satuan', 'Keterangan Satuan Tukang', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('satuan', 'Satuan Tukang', 'trim|required', 
        array('required' => '%s harus dipilih'));
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Tukang', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('vendor', 'Vendor', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Tukang', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Tukang', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Tukang'));
      } else {
        $data= [ 
          'harga_tukang' => $this->input->post('harga', TRUE),
          'keterangan_satuan' => $this->input->post('keterangan_satuan', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE),
          'id_vendor' => $this->input->post('vendor', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'nama_tukang' => $this->input->post('nama', TRUE)
        ];

        $nama =  $this->input->post('nama', TRUE);
        $this->session->set_flashdata('sukses','Data berhasil diubah');
        $this->M_Tukang->updateTukang($data, $nama, $id);
        // redirect(base_url('Tukang'));
      }
    }

    public function deleteTukang($id)
    {
      $this->M_Tukang->deleteTukang($id);
      redirect('Tukang');
    }
  }