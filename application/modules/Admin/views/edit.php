<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Jasa</h1>
    <a href="<?= base_url(); ?>Jasa" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Jasa</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <?php foreach ($jasa as $js) : ?>
              <form method="POST" action="<?= base_url() ?>Jasa/updateJasa/<?= $js->id_jasa ?>" autocomplete="off">
                <div class="form-group">
                  <label for="namaJasaForm">Nama Jasa</label>
                  <input type="text" class="form-control" id="namaJasaForm" placeholder="Nama Jasa" name="nama" value="<?= $js->nama_jasa ?>">
                </div>
                <div class="form-group row">
                  <div class="col-3">
                    <label for="kemampuanForm">Kemampuan</label>
                    <input type="text" class="form-control" id="kemampuanForm" placeholder="1 Liter = 10 Meter" name="kemampuan" value="<?= $js->kemampuan ?>">
                  </div>
                  <div class="col-2">
                    <label for="selectSatuan">Satuan</label>
                    <select class="form-control" id="selectSatuan" name="satuan">
                      <option>Pilih Satuan</option>
                      <?php if ($js->satuan == "Item") { ?>
                      <option value="Item" selected>Item</option>
                      <option value="Meter">Meter</option>
                      <option value="Titik">Titik</option>
                      <?php } else if ($js->satuan=="Meter") { ?>
                      <option value="Item">Item</option>
                      <option value="Meter" selected>Meter</option>
                      <option value="Titik">Titik</option>
                      <?php } else if ($js->satuan=="Titik") { ?>
                      <option value="Item">Item</option>
                      <option value="Meter">Meter</option>
                      <option value="Titik" selected>Titik</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-2">
                    <label for="hariForm">Hari</label>
                    <input type="text" class="form-control" id="hariForm" placeholder="Waktu Pengerjaan" name="waktu" value="<?= $js->waktu; ?>">
                  </div>
                  <div class="col-5">
                    <label for="selectKategori">Kategori</label>
                    <select class="form-control" id="selectKategori" name="kategori">
                    <option>Pilih Kategori</option>
                      <?php foreach($kategori as $kt) : 
                        if ($kt->id_kategori_jasa == $js->id_kategori) { ?>
                          <option value="<?= $kt->id_kategori_jasa ?>" selected><?= $kt->nama_kategori ?></option>
                        <?php } else { ?>
                          <option value="<?= $kt->id_kategori_jasa ?>"><?= $kt->nama_kategori ?></option>
                        <?php } ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="deskripsiForm">Deskripsi Jasa</label>
                  <textarea class="form-control" id="deskripsiForm" rows="3" name="deskripsi"><?= $js->detail ?></textarea>
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

