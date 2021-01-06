<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Member Transaksi Material</h1>
  </div>
  
  <div class="row">
    <div class="col-12 card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Transaksi</th>
                <th>Tanggal Pemesanan</th>
                <th>Status</th>
                <th>Total Harga</th>
                <th>Metode Pembayaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($material as $p) : $table = "Material"; ?>
                  <tr>
                      <td><?= $p->id_tr_material; ?></td>
                      <td><?= $p->tgl_pemesanan; ?></td>
                      <td>
                        <?php 
                          if ($p->status == 0) {
                            echo "Menunggu Pembayaran";
                          } else if ($p->status == 1) {
                            echo "Menunggu Verifikasi";
                          } else if ($p->status == 2) {
                            echo "Sedang Diproses";
                          } else if ($p->status == 3) {
                            echo "Sedang Dikirim";
                          } else if ($p->status == 4) {
                            echo "Konfirmasi Penerimaan";
                          } else if ($p->status == 5) {
                            echo "Selesai";
                          }
                        ?>
                      </td>
                      <td>Rp. <?= number_format($p->total_harga,0,",",".");?></td>
                      <td><?= $p->nama_rekening; echo " " .$p->no_rekening; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">                           
                          <?php  if ($p->status == 0) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-success" onclick="showModalBukti('<?= $p->id_tr_material ?>');">Verifikasi Pembayaran</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 2);">Detail Pesanan</a>
                          <?php } else if ($p->status == '1') { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 2);">Detail Pesanan</a>
                          <?php } else if ($p->status == 2) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 2);">Detail Pesanan</a>
                          <?php } else if ($p->status == 3 || $p->status == 4) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 2);">Detail Pesanan</a>
                            <a href="javascript:void(0);" type="button" class="btn btn-success" onclick="konfirmasiPengiriman('<?= $p->id_tr_material ?>', 3);">Konfirmasi Penerimaan</a>
                          <?php } else if ($p->status == 5) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 2);">Detail Pesanan</a>
                          <?php } ?>
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


  <!-- Logout Modal-->
  <div class="modal fade" id="modalTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('User/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Logout Modal-->
  <div class="modal fade" id="unggahBuktiBayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="POST" action="<?= base_url() ?>Transaksi/saveBuktiTransaksi" autocomplete="off"  enctype="multipart/form-data" >
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Unggah Bukti Pembayaran</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="inputText">Nama pengirim di Rekening Bank</label>
              <input type="text" class="form-control" id="inputText" placeholder="Nama pengirim di Rekening Bank" name="nama_pengirim">
              <input type="hidden" class="form-control" id="inputText" name="id_transaksi">
            </div>
            <div class="form-group">
              <label for="inputText">Transfer dari Bank</label>
              <input type="text" class="form-control" id="inputText" placeholder="Transfer dari Bank" name="asal_bank">
            </div>
            <div class="form-group">
              <label for="inputText">Masukkan No. Rekening Anda</label>
              <input type="text" class="form-control" id="inputText" placeholder="Nomor Rekening" name="asal_rekening">
            </div>
            <div class="form-group">
              <label for="inputText">Jumlah Ditransfer (Rp )</label>
              <input type="text" class="form-control" id="inputText" placeholder="Jumlah Ditransfer" name="total_bayar">
            </div>
            <div class="form-group">
              <label>Bukti Transfer</label>
              <input type="file" class="form-control-file" name="files">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary float-right">Kirimkan</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- MODAL HUBUNGI VENDOR -->
<div class="modal fade bd-example-modal-xl" id="modalHubungiVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pembayaran</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody id="bodyModalPesanan">
            </tbody>
          </table>
        </div>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
