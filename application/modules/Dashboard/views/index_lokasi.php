<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lokasi</h1>
    <a href="<?= $GLOBALS['path']?>/dashboard/addLokasi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Lokasi</a>
  </div>
  
  <div class="row">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Aksi</th>
                <!-- <th>Detail</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($order as $p) : ?>
                  <tr>
                      <td><?= $p->id_order; ?></td>
                      <td><?= $p->penyewa; ?></td>
                      <td><?= $p->nama_vendor; ?></td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

