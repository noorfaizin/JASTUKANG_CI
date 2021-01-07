<?php
  class Material extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Material');
    }

    public function index()
    {
      $data['judul'] = "Material Dashboard";
      $material['material'] = $this->M_Material->getAllMaterial();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index', $material);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function AddMaterial()
    {
      $data['judul'] = "Tambah Material";
      $material['kategori'] = $this->M_Material->getKategori();
      $material['vendor'] = $this->M_Material->getVendor();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('add', $material);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editMaterial($id_material)
    {
      $data['judul'] = "Ubah Material";
      $material['kategori'] = $this->M_Material->getKategori();
      $material['material'] = $this->M_Material->getMaterialById($id_material);
      $material['vendor'] = $this->M_Material->getVendor();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit', $material);
      $this->load->view('Dashboard/Template_backend/footer');
    }





    public function savematerial()
    {
      $this->form_validation->set_rules('harga', 'Harga Material', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('keterangan_satuan', 'Keterangan Satuan Material', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('satuan', 'Satuan Material', 'trim|required', 
        array('required' => '%s harus dipilih'));
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Material', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('vendor', 'Vendor', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Material', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Material', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Material'));
      } else {
        if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){
          $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
          $data= [ 
            'harga_material' => $this->input->post('harga', TRUE),
            'keterangan_satuan' => $this->input->post('keterangan_satuan', TRUE),
            'satuan' => $this->input->post('satuan', TRUE),
            'kemampuan' => $this->input->post('kemampuan', TRUE),
            'id_kategori' => $this->input->post('kategori', TRUE),
            'id_vendor' => $this->input->post('vendor', TRUE),
            'detail' => $this->input->post('deskripsi', TRUE),
            'nama_material' => $this->input->post('nama', TRUE)
          ];
          $nama =  $this->input->post('nama', TRUE);
          $this->M_Material->saveMaterial($data, $nama);
        } else {
          $this->session->set_flashdata('sukses','Gambar material tidak ada');
        }

      }
    }

    public function updateMaterial($id)
    {
      $this->form_validation->set_rules('harga', 'Harga Material', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('keterangan_satuan', 'Keterangan Satuan Material', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('satuan', 'Satuan Material', 'trim|required', 
        array('required' => '%s harus dipilih'));
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Material', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('vendor', 'Vendor', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Material', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Material', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Material'));
      } else {
        $data= [ 
          'harga_material' => $this->input->post('harga', TRUE),
          'keterangan_satuan' => $this->input->post('keterangan_satuan', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE),
          'id_vendor' => $this->input->post('vendor', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'nama_material' => $this->input->post('nama', TRUE)
        ];

        $nama =  $this->input->post('nama', TRUE);
        $this->session->set_flashdata('sukses','Data berhasil diubah');
        $this->M_Material->updateMaterial($data, $nama, $id);
        // redirect(base_url('Material'));
      }
    }

    public function deleteMaterial($id)
    {
      $this->M_Material->deleteMaterial($id);
      redirect('Material');
    }
  }