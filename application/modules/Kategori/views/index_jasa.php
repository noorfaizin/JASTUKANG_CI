<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Jasa</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3" data-toggle="modal" data-target="#modalAddJasa">Tambah Kategori Jasa</button>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $controller = "Kategori"; $table = "KategoriJasa"; foreach ($jasa_kategori as $p) :?>
                  <tr>
                      <td><?= $p->nama_kategori; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#modalEditJasa<?= $p->id_kategori_jasa ?>">Edit</button>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="delete_double('<?= $p->id_kategori_jasa ?>', '<?= $controller ?>', '<?= $table ?>');">Delete</a>
                        </div>
                      </td>
                  </tr>
                    <div class="modal fade" id="modalEditJasa<?= $p->id_kategori_jasa ?>" tabindex="-1" role="dialog" aria-labelledby="modalAddJasaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="<?= base_url('Kategori/updateKategoriJasa/' . $p->id_kategori_jasa); ?>" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAddJasaLabel">Ubah Kategori Jasa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="jasa" class="col-form-label">Jasa:</label>
                                            <input type="text" class="form-control" id="jasa" name="jasa" value="<?= $p->nama_kategori ?>">
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

<div class="modal fade" id="modalAddJasa" tabindex="-1" role="dialog" aria-labelledby="modalAddJasaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= base_url('Kategori/saveKategoriJasa'); ?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddJasaLabel">Tambah Kategori Jasa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jasa" class="col-form-label">Jasa:</label>
                    <input type="text" class="form-control" id="jasa" name="jasa">
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