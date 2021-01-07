<?php
  class Vendor extends CI_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Vendor');
      $this->load->library(array('form_validation')); 
    }

    public function index()
    {
      $data['judul'] = "Vendor Dashboard";
      $data['vendor'] = $this->M_Vendor->getVendor();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function AddVendor()
    {
      $data['judul'] = "Tambah Vendor";
      $data['kecamatan'] = $this->M_Vendor->getKemacatan();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('add');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editVendor($id)
    {
      $data['judul'] = "Edit Vendor";
      $data['vendor_id'] = $id;
      $data['kecamatan'] = $this->M_Vendor->getKemacatan();
      $get_data = $this->M_Vendor->getVendorBy($id);
      if($get_data->num_rows() > 0){
        $row = $get_data->row_array();
        $data['id_kelurahan'] = $row['id_lokasi'];
      }
      $this->session->set_flashdata('edit', '<script type="text/javascript">get_data_edit();</script>');
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function deleteVendor($id_vendor)
    {
      $this->M_Vendor->deleteVendor($id_vendor);
      redirect('Vendor');
    }
    
    public function get_data_edit()
    {
      $id_vendor = $this->input->post('id_vendor',TRUE);
      $data = $this->M_Vendor->getVendorBy($id_vendor)->result();
      echo json_encode($data);
    }

    function getKelurahan($id){
      $data = $this->M_Vendor->getKelurahan($id)->result();
      echo json_encode($data);
    }

    public function saveVendor()
    {
      $this->form_validation->set_rules('nama', 'Nama Vendor', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('detail', 'Alamat', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kelurahan', 'Lokasi', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules(
        'telepon', 'Nomor Telepon', 
        'trim|required|integer', 
        array(
          'required' => '%s harus dipilih', 
          'integer' => '%s harus berupa angka'
        )
      );

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Vendor'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_vendor' => $this->input->post('nama', TRUE),
          'alamat_vendor' => $this->input->post('detail', TRUE),
          'no_hp' => $this->input->post('telepon', TRUE),
          'id_lokasi' => $this->input->post('kelurahan', TRUE)
        ];
        $this->M_Vendor->saveVendor($data);
        redirect(base_url('vendor'));
      }
    }

    public function updateVendor()
    {
      $this->form_validation->set_rules('nama', 'Nama Vendor', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('id_vendor', 'ID Vendor', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('detail', 'Alamat', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kelurahanEdit', 'Lokasi', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules(
        'telepon', 'Nomor Telepon', 
        'trim|required|integer', 
        array(
          'required' => '%s harus dipilih', 
          'integer' => '%s harus berupa angka'
        )
      );

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Vendor'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_vendor' => $this->input->post('nama', TRUE),
          'alamat_vendor' => $this->input->post('detail', TRUE),
          'no_hp' => $this->input->post('telepon', TRUE),
          'id_lokasi' => $this->input->post('kelurahanEdit', TRUE)
        ];
        $id_vendor = $this->input->post('id_vendor', TRUE);
        $this->M_Vendor->updateVendor($data, $id_vendor);
        redirect(base_url('vendor'));
      }
    }
  }