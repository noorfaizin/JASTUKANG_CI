<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Material</h1>
    <a href="<?= base_url();?>Material/addmaterial" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Material</a>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Gambar</th>
                <th>Material</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Vendor</th>
                <th>Kategori</th>
                <th>Kemampuan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($material as $p) : $table = "Material"; ?>
                  <tr>
                      <td>
                        <img src="<?= base_url('assets/images/material/' . $p->path); ?>" alt="" width="100px">
                      </td>
                      <td><?= $p->nama_material; ?></td>
                      <td>Rp. <?= number_format($p->harga_material,0,",",".");?></td>
                      <td><?= $p->keterangan_satuan. " " .$p->satuan; ?></td>
                      <td><?= $p->nama_vendor; ?></td>
                      <td><?= $p->nama_kategori; ?></td>
                      <td><?= $p->kemampuan; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <a type="button" class="btn btn-info margin-5 text-white" href="<?= base_url('Material/editMaterial/') . $p->id_material; ?>" disabled>Lihat</a>
                            <a type="button" class="btn btn-success margin-5 text-white" href="<?= base_url('Material/editMaterial/') . $p->id_material; ?>">Edit</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="hapus('<?= $p->id_material ?>', '<?= $table ?>');">Delete</a>
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

