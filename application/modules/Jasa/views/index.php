<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Jasa</h1>
    <a href="<?= base_url();?>Jasa/addJasa" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Jasa</a>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Jasa</th>
                <th>Kemampuan</th>
                <th>Kategori</th>
                <th>Detail</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($jasa as $p) : $table = "Jasa"; ?>
                  <tr>
                      <td><?= $p->nama_jasa; ?></td>
                      <td><?php echo $p->kemampuan . " ". $p->satuan ." / ". $p->waktu?> Hari</td>
                      <td><?= $p->nama_kategori; ?></td>
                      <td><?= $p->detail; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <!-- <a type="button" class="btn btn-info margin-5 text-white" href="<?= base_url('Jasa/editJasa/') . $p->id_jasa; ?>" disable>Lihat</a> -->
                            <a type="button" class="btn btn-success margin-5 text-white" href="<?= base_url('Jasa/editJasa/') . $p->id_jasa; ?>">Edit</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="hapus('<?= $p->id_jasa ?>', '<?= $table ?>');">Delete</a>
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

