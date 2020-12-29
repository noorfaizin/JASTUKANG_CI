<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Vendor</h1>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= base_url() ?>Vendor/saveVendor" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label class="form-label">Nama Vendor</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="telepon" rows="1" required>
              </div>
              <div class="form-group mb-3">
                <div class="row">
                  <div class="col-6">
                    <label for="exampleFormControlSelect1">Kecamatan</label>
                        <select class="form-control kecamatan" name="kecamatan" required>
                            <option value="">No Selected</option>
                            <?php foreach($kecamatan as $row):?>
                            <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->kecamatan;?></option>
                            <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="exampleFormControlSelect1">Kelurahan</label>
                        <select class="form-control kelurahan" name="kelurahan" id="kelurahan" required>
                            <option value="">No Selected</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mb-3">
                <label class="form-label">Detail Alamat</label>
                <textarea class="form-control" rows="3" name="detail" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
          </div>
      </div>
    </div>
  </div>

