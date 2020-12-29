<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Vendor</h1>
    <a href="<?= base_url(); ?>Vendor/addVendor" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">Tambah Vendor</a>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Aksi</th>
                <!-- <th>Detail</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($vendor as $p) : ?>
                  <tr>
                      <td><?= $p->nama_vendor; ?></td>
                      <td><?= $p->no_hp; ?></td>
                      <td><?= $p->alamat_vendor; ?></td>
                      <td><?= $p->kelurahan; ?></td>
                      <td><?= $p->kecamatan; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <a type="button" class="btn btn-success margin-5 text-white" href="<?= base_url('Vendor/editVendor/') . $p->id_vendor; ?>">Edit</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="hapusVendor(<?= $p->id_vendor ?>);">Delete</a>
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

