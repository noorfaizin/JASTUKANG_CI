<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pelanggan</h1>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
                <!-- <th>Detail</th> -->
              </tr>
            </thead>
            <tbody>
              <?php $id = 0; foreach ($pelanggan as $p) : $id++; ?>
                  <tr>
                      <td><?= $id; ?></td>
                      <td><?= $p->nama_depan .' ' . $p->nama_belakang; ?></td>
                      <td><?= $p->no_hp; ?></td>
                      <td><?= $p->email; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">
                            <button type="button" class="btn btn-danger margin-5 text-white" data-toggle="modal" data-target="#nonaktifkanPengguna<?= $p->id_user ?>">Nonaktifkan</button>
                        </div>
                      </td>
                  </tr>
                  <div class="modal fade" id="nonaktifkanPengguna<?= $p->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="modalAddJasaLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <form action="<?= base_url('User/nonaktifkanPengguna/' . $p->id_user); ?>" method="POST">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalAddJasaLabel">Nonaktifkan Pelanggan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="alasan" class="col-form-label">Alasan:</label>
                                          <input type="text" class="form-control" id="alasan" name="alasan" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Nonaktifkan</button>
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
