<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Tukang</h1>
    <a href="<?= base_url(); ?>Tukang" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Daftar Tukang</a>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= base_url() ?>Tukang/updateTukang/" enctype="multipart/form-data" autocomplete="off">
              <div class="form-group">
                <label for="namaTukangForm">Nama Tukang</label>
                <input type="hidden" class="form-control" name="id_tukang" value="<?php echo $id_tukang?>" required>
                <input type="hidden" class="form-control" name="kelurahan" required>
                <input type="text" class="form-control" id="namaTukangForm" placeholder="Nama Lengkap" name="nama" required>
              </div>
              <div class="form-group">
                <label for="hpTukangForm">Nomor Handphone</label>
                <input type="text" class="form-control" id="hpTukangForm" placeholder="Nomor Handphone" name="hp" required>
              </div>
              <div class="form-group row">
                <div class="col-4">
                  <label for="tanggalForm">Tanggal Lahir</label>
                  <input type="text" class="form-control tanggal" id="tanggalForm" name="tgl_lahir" required>
                </div>
                <div class="col-4 mt-1">
                  <label for="profilTukang">Foto Profil Tukang</label>
                  <input type="file" class="form-control-file" id="profilTukang" name="files">
                </div>
                <div class="col-4">
                  <label for="jasaKategori">Spesialis</label>
                  <select class="form-control jasa" name="jasa">
                    <option value="">No Selected</option>
                    <?php foreach($jasa as $row):?>
                    <option value="<?php echo $row->id_jasa;?>"><?php echo $row->nama_jasa;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col-6">
                    <label for="exampleFormControlSelect1">Kecamatan</label>
                        <select class="form-control kecamatanTukang" name="kecamatanTukang" required>
                            <option value="">No Selected</option>
                            <?php foreach($kecamatan as $row):?>
                              <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->kecamatan;?></option>
                            <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="exampleFormControlSelect1">Kelurahan</label>
                        <select class="form-control kelurahanEdit" name="kelurahanEdit" id="kelurahan" required>
                            <option value="">No Selected</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                <label for="alamatForm">Alamat Lengkap</label>
                <textarea class="form-control" id="alamatForm" rows="2" name="alamat"></textarea>
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

