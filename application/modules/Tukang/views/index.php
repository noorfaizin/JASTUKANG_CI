<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tukang</h1>
    <a href="<?= base_url();?>Tukang/addTukang" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Tukang</a>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Foto Profil</th>
                <th>Nama</th>
                <th>Nomor Handphone</th>
                <th>Spesialisasi</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tukang as $p) : $table = "Tukang"; ?>
                  <tr>
                      <td>
                        <img src="<?= base_url('assets/images/tukang/profil/' . $p->gambar); ?>" alt="" width="100px">
                      </td>
                      <td><?= $p->nama_tukang; ?></td>                      <td><?= $p->hp_tukang; ?></td>
                      <td><?= $p->nama_jasa; ?></td>
                      <td><?= $p->alamat_tukang .", ". $p->kelurahan .", ". $p->kecamatan ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <!-- <a type="button" class="btn btn-info margin-5 text-white" href="<?= base_url('Tukang/editTukang/') . $p->id_tukang; ?>" disabled>Lihat</a> -->
                            <a type="button" class="btn btn-success margin-5 text-white" href="<?= base_url('Tukang/editTukang/') . $p->id_tukang; ?>">Edit</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="hapus('<?= $p->id_tukang ?>', '<?= $table ?>');">Delete</a>
                        </div>
                      </td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

