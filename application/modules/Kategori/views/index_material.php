<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3" data-toggle="modal" data-target="#modalAddMaterial">Tambah Kategori Material</button>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Kategori Jasa</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php  $controller = "Kategori"; $table = "KategoriMaterial"; foreach ($material_kategori as $p) :?>
                  <tr>
                      <td><?= $p->nama_kategori; ?></td>
                      <td><?= $p->nama_jasa; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#modalEditMaterial<?= $p->id_kategori_material ?>">Edit</button>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="delete_double('<?= $p->id_kategori_material ?>', '<?= $controller ?>', '<?= $table ?>');">Delete</a>
                        </div>
                      </td>
                  </tr>
                    <div class="modal fade" id="modalEditMaterial<?= $p->id_kategori_material ?>" tabindex="-1" role="dialog" aria-labelledby="modalAddJasaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="<?= base_url('Kategori/updateKategoriMaterial/' . $p->id_kategori_material); ?>" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAddJasaLabel">Ubah Kategori Material</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="material" class="col-form-label">Kategori Material:</label>
                                            <input type="text" class="form-control" id="material" name="material" value="<?= $p->nama_kategori; ?>" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Kategori Jasa:</label>
                                          <select class="form-control" id="exampleFormControlSelect1" name="jasa" required>
                                          <?php foreach($jasa_kategori as $d) : 
                                            if ($d->id_kategori_jasa == $p->id_kategori_jasa) { ?>
                                              <option value="<?= $p->id_kategori_jasa ?>" selected> <?= $d->nama_kategori; ?></option>
                                            <?php } else { ?>
                                            <option value="<?= $d->id_kategori_jasa ?>"> <?= $d->nama_kategori; ?></option>
                                            <?php } endforeach; ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalAddMaterial" tabindex="-1" role="dialog" aria-labelledby="modalAddMaterialLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= base_url('Kategori/saveKategoriMaterial'); ?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddMaterialLabel">Tambah Kategori Material</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="material" class="col-form-label">Kategori Material:</label>
                    <input type="text" class="form-control" id="material" name="material" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kategori Jasa:</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jasa" required>
                  <?php foreach($jasa_kategori as $p) : ?>
                    <option value="<?= $p->id_kategori_jasa ?>"> <?= $p->nama_kategori; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form> 
  </div>
</div>