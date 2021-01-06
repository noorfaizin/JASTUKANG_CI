<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Saldo</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3" data-toggle="modal" data-target="#modalPenarikan">Penarikan Dana</button>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Tanggal</th>
                <th>Bukti WD</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor = '1';  foreach ($saldo as $p) : ?>
                  <tr>
                      <td> <?= $nomor;  $nomor++;?> </td>
                      <td>
                        <?php 
                          if ($p->id_pembayaran) {
                            echo $p->id_pembayaran;
                          } else {
                            echo "-";
                          }
                        ?>
                      </td>
                      <td>
                        <?php 
                          if ($p->id_transaksi) {
                            echo $p->id_transaksi;
                          } else {
                            echo "-";
                          }
                        ?>
                      </td>
                      <td>Rp. <?= number_format($p->masuk,0,",",".");?></td>
                      <td>Rp. <?= number_format($p->keluar,0,",",".");?></td>
                      <td><?= $p->datetime; ?></td>
                      <td>
                        <?php 
                          if ($p->wd_path) { ?>
                            <img src="<?= base_url('assets/images/transaksi/penarikan_dana/' . $p->wd_path); ?>" alt="" width="100px">
                          <?php } else {
                            echo "-";
                          }
                        ?>
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


<div class="modal fade" id="modalPenarikan" tabindex="-1" role="dialog" aria-labelledby="modalPenarikanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= base_url('Admin/penarikanDana'); ?>" method="POST" enctype="multipart/form-data" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPenarikanLabel">Penarikan Dana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jumlah" class="col-form-label">Jumlah :</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Transaksi</label>
                    <select class="form-control" name="transaksi" id="transaksi" required>
                        <option value="">No Selected</option>
                        <?php foreach($id_transaksi as $it) : ?>
                          <option value="<?= $it->id_tr_material ?>"><?= $it->id_tr_material ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="buktiTransfer">Bukti Transfer</label>
                  <input type="file" class="form-control-file" id="buktiTransfer" name="files" required>
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