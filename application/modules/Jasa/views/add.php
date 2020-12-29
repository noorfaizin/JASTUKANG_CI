<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Jasa</h1>
    <a href="<?= base_url(); ?>Jasa" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Jasa</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= base_url() ?>Jasa/saveJasa" autocomplete="off">
              <div class="form-group">
                <label for="namaJasaForm">Nama Jasa</label>
                <input type="text" class="form-control" id="namaJasaForm" placeholder="Nama Jasa" name="nama">
              </div>
              <div class="form-group row">
                <div class="col-3">
                  <label for="kemampuanJasa">Kemampuan /meter</label>
                  <input type="text" class="form-control" id="kemampuanJasa" placeholder="Kemampuan Jasa" name="kemampuan">
                </div>
                <div class="col-2">
                  <label for="selectSatuan">Satuan</label>
                  <select class="form-control" id="selectSatuan" name="satuan">
                    <option>Pilih Satuan</option>
                    <option value="Item">Item</option>
                    <option value="Meter">Meter</option>
                    <option value="Titik">Titik</option>
                  </select>
                </div>
                <div class="col-2">
                  <label for="hariForm">Hari</label>
                  <input type="text" class="form-control" id="hariForm" placeholder="Waktu Pengerjaan" name="waktu">
                </div>
                <div class="col-5">
                  <label for="selectKategori">Kategori</label>
                  <select class="form-control" id="selectKategori" name="kategori">
                    <option>Pilih Kategori</option>
                    <?php foreach($kategori as $kt) : ?>
                    <option value="<?= $kt->id_kategori_jasa ?>"><?= $kt->nama_kategori ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="deskripsiForm">Deskripsi Jasa</label>
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

