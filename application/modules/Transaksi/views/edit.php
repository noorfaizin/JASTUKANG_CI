<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Material</h1>
    <a href="<?= base_url(); ?>Material" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Material</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <?php foreach ($material as $mt) : ?>
              <form method="POST" action="<?= base_url() ?>Material/updateMaterial/<?= $mt->id_material ?>" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                  <label for="namaMaterialForm">Nama Material</label>
                  <input type="text" class="form-control" id="namaMaterialForm" placeholder="Nama Material" name="nama" value="<?= $mt->nama_material ?>">
                </div>
                <div class="form-group">
                  <label for="hargaMaterialForm">Harga Material</label>
                  <input type="text" class="form-control" id="hargaMaterialForm" placeholder="Harga Material" name="harga" value="<?= $mt->harga_material ?>">
                </div>
                <div class="form-group row">
                  <div class="col-6">
                    <label for="keteranganSatuan">Berat / Panjang</label>
                    <input type="text" class="form-control" id="keteranganSatuan" name="keterangan_satuan" value="<?= $mt->keterangan_satuan ?>">
                  </div>
                  <div class="col-6">
                    <label for="selectSatuan">Satuan</label>
                    <select class="form-control" id="selectSatuan" name="satuan">
                      <option>Pilih Satuan</option>
                      <?php if ($mt->satuan == "Gram") { ?>
                        <option value="Gram" selected>Gram</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Centimeter">Centimeter</option>
                        <option value="Meter">Meter</option>
                      <?php } else if ($mt->satuan=="Kilogram") { ?>
                        <option value="Gram">Gram</option>
                        <option value="Kilogram" selected>Kilogram</option>
                        <option value="Centimeter">Centimeter</option>
                        <option value="Meter">Meter</option>
                      <?php } else if ($mt->satuan=="Centimeter") { ?>
                        <option value="Gram">Gram</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Centimeter" selected>Centimeter</option>
                        <option value="Meter">Meter</option>
                      <?php } else if ($mt->satuan=="Meter") { ?>
                        <option value="Gram">Gram</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Centimeter">Centimeter</option>
                        <option value="Meter" selected>Meter</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-6">
                    <label for="selectKategori">Kategori</label>
                    <select class="form-control" id="selectKategori" name="kategori">
                    <option>Pilih Kategori</option>
                      <?php foreach($kategori as $kt) : 
                        if ($kt->id_kategori_material == $mt->id_kategori) { ?>
                          <option value="<?= $kt->id_kategori_material ?>" selected><?= $kt->nama_kategori ?></option>
                        <?php } else { ?>
                          <option value="<?= $kt->id_kategori_material ?>"><?= $kt->nama_kategori ?></option>
                        <?php } ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="selectVendor">Vendor</label>
                    <select class="form-control" id="selectVendor" name="vendor">
                    <option>Pilih Vendor</option>
                    <?php foreach($vendor as $vd) : 
                        if ($kt->id_kategori_material == $mt->id_vendor) { ?>
                          <option value="<?= $vd->id_vendor ?>" selected><?= $vd->nama_vendor ?></option>
                        <?php } else { ?>
                          <option value="<?= $vd->id_vendor ?>"><?= $vd->nama_vendor ?></option>
                        <?php } ?>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-6">
                    <label for="kemampuanForm">Kemampuan</label>
                    <input type="text" class="form-control" id="kemampuanForm" placeholder="1 Liter = 10 Meter" name="kemampuan" value="<?= $mt->kemampuan ?>">
                  </div>
                  <div class="col-6 mt-1">
                    <label for="fileGambar">Gambar Material</label>
                    <input type="file" class="form-control-file" id="fileGambar" name="files[]" multiple>
                  </div>
                </div>
                <div class="form-group">
                  <label for="deskripsiForm">Deskripsi Material</label>
                  <textarea class="form-control" id="deskripsiForm" rows="3" name="deskripsi"><?= $mt->detail ?></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
              </form>
            <?php endforeach; ?>
          </div>
      </div>
    </div>
  </div>
</div>

