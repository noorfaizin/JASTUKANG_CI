<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Metode Pembayaran</h1>
    <a href="<?= base_url(); ?>Admin/methodPembayaran" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Metode Pembayaran</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= base_url() ?>Admin/saveMethodPembayaran" autocomplete="off">
              <div class="form-group">
                <label for="namaRekeningForm">Nama Rekening</label>
                <input type="text" class="form-control" id="namaRekeningForm" placeholder="Nama Rekening" name="nama" required>
              </div>
              <div class="form-group">
                <label for="nomorRekeningForm">Nomor Rekening</label>
                <input type="text" class="form-control" id="nomorRekeningForm" placeholder="Nomor Rekening" name="nomor" required>
              </div>
              <div class="form-group">
                <label for="kantorCabangForm">Kantor Cabang</label>
                <input type="text" class="form-control" id="kantorCabangForm" placeholder="Kantor Cabang" name="kacab" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

