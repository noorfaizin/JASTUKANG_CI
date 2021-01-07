<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Metode Pembayaran</h1>
    <a href="<?= base_url();?>Admin/addMPembayaran" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Metode Pembayaran</a>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Status</th>
                <th>ID Rekening</th>
                <th>Nama Rekening</th>
                <th>Nomor Rekening</th>
                <th>Kantor Cabang</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($mpembayaran as $p) : $controller = "Admin/nonaktifkanmetode_pembayaran"; ?>
                  <tr>
                      <td>
                        <?php 
                          if ($p->status_aktif == 0) {
                            echo "Aktif";
                          } else {
                            echo "Nonaktif";
                          } 
                        ?>
                      </td>
                      <td><?= $p->id_rekening; ?></td>
                      <td><?= $p->nama_rekening; ?></td>
                      <td><?= $p->no_rekening; ?></td>
                      <td><?= $p->kacab; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <a type="button" class="btn btn-success margin-5 text-white" href="<?= base_url('Admin/editMPembayaran/') . $p->id_rekening; ?>">Edit</a>
                        <?php 
                          if ($p->status_aktif == 0) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="nonaktifkan('<?= $p->id_rekening ?>', '<?= $controller ?>');">Nonaktifkan</a>
                        <?php  } else { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="aktifkan('<?= $p->id_rekening ?>', '<?= $controller ?>');">Aktifkan</a>
                        <?php  } ?>
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

