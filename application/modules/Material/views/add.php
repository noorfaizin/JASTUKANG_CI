<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Material</h1>
    <a href="<?= base_url(); ?>Material" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Material</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= base_url() ?>Material/savematerial" enctype="multipart/form-data" autocomplete="off">
              <div class="form-group">
                <label for="namaMaterialForm">Nama Material</label>
                <input type="text" class="form-control" id="namaMaterialForm" placeholder="Nama Material" name="nama">
              </div>
              <div class="form-group">
                <label for="hargaMaterialForm">Harga Material</label>
                <input type="text" class="form-control" id="hargaMaterialForm" placeholder="Harga Material" name="harga">
              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="keteranganSatuan">Berat / Panjang</label>
                  <input type="text" class="form-control" id="keteranganSatuan" name="keterangan_satuan">
                </div>
                <div class="col-6">
                  <label for="selectSatuan">Satuan</label>
                  <select class="form-control" id="selectSatuan" name="satuan">
                    <option>Pilih Satuan</option>
                    <option value="Gram">Gram</option>
                    <option value="Kilogram">Kilogram</option>
                    <option value="Centimeter">Centimeter</option>
                    <option value="Meter">Meter</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="selectKategori">Kategori</label>
                  <select class="form-control" id="selectKategori" name="kategori">
                  <option>Pilih Kategori</option>
                  <?php foreach($kategori as $kt) : ?>
                  <option value="<?= $kt->id_kategori_material ?>"><?= $kt->nama_kategori ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-6">
                  <label for="selectVendor">Vendor</label>
                  <select class="form-control" id="selectVendor" name="vendor">
                  <option>Pilih Vendor</option>
                  <?php foreach($vendor as $vd) : ?>
                  <option value="<?= $vd->id_vendor ?>"><?= $vd->nama_vendor ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="kemampuanForm">Kemampuan</label>
                  <input type="text" class="form-control" id="kemampuanForm" placeholder="1 Liter = 10 Meter" name="kemampuan">
                </div>
                <div class="col-6 mt-1">
                  <label for="fileGambar">Gambar Material</label>
                  <input type="file" class="form-control-file" id="fileGambar" name="files[]" multiple>
                </div>
              </div>
              <div class="form-group">
                <label for="deskripsiForm">Deskripsi Material</label>
                <textarea class="form-control" id="deskripsiForm" rows="3" name="deskripsi"></textarea>
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

