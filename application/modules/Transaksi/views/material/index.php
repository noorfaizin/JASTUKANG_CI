<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi Material</h1>
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
              <?php foreach ($material as $p) : ?>
                  <tr>
                      <td><?= $p->id_tr_material; ?></td>
                      <td><?= $p->tgl_pemesanan; ?></td>
                      <td>
                        <?php 
                          if ($p->status == '0') {
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
                            echo "Selesai | Menunggu ulasan";
                          } else if ($p->status == 6) {
                            echo "Selesai | Telah diberi ulasan";
                          }
                        ?>
                      </td>
                      <td>Rp. <?= number_format($p->total_harga,0,",",".");?></td>
                      <td><?= $p->nama_rekening; echo " " .$p->no_rekening; ?></td>
                      <td>
                        <div class="btn-group d-flex justify-content-center">       
                          <a href="javascript:void(0);" type="button" class="btn btn-info" onclick="hubungiVendor('<?= $p->id_tr_material ?>', 1);">Detail Pesanan</a>                    
                          <?php  if ($p->status == '0') { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-info">Verifikasi Pembayaran</a>
                          <?php } else if ($p->status == '1') { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="showModalVerifP('<?= $p->id_tr_material ?>');">Verifikasi Pembayaran</a>
                          <?php } else if ($p->status == 2) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-success" onclick="konfirmasiPengiriman('<?= $p->id_tr_material ?>', 1);">Sudah Dikirim</a>
                          <?php } else if ($p->status == 3) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-success" onclick="konfirmasiPengiriman('<?= $p->id_tr_material ?>', 2);">Sudah Terkirim</a>
                          <?php } else if ($p->status == 4) { ?>
                          <?php } else if ($p->status == 5) { ?>
                          <?php } else if ($p->status == 6) { ?>
                            <a href="javascript:void(0);" type="button" class="btn btn-success" onclick="ulasanTransaksiMaterial('<?= $p->id_tr_material ?>', 2);">Lihat Ulasan</a>
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



<!-- MODAL KONFIRMASI PEMBAYARAN -->
<div class="modal fade" id="modalTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pembayaran</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xl-7 col-md-5">
            <img src="<?= base_url('assets/images/transaksi/TRM_01.png') ?>" alt="" width="100%" id="buktiTF">
            <a href="<?= base_url('assets/images/transaksi/TRM_01.png') ?>" id="lihatGambar">Lihat Gambar</a>
          </div>
          <div class="col-5 row">
            <div class="col-12">
              <h5 for="tujuanBank">Tujuan Bank</h5>
              <h6 id="tujuanBank">1</h6>
            </div>
            <div class="col-12">
              <h5 for="rekeningTujuan">Tujuan Rekening</h5>
              <h6 id="rekeningTujuan">1</h6>
            </div>
            <div class="col-12">
              <h5 for="nominalBayar">Nominal Bayar</h5>
              <h6 id="nominalBayar">1</h6>
            </div>
          </div>
          <div class="col-12 mt-3">
              <h5>Nama Pengirim</h5>
              <h6 id="namaPengirim">1</h6>
            </div>
            <div class="col-12">
              <h5>Asal Bank</h5>
              <h6 id="asalBank">1</h6>
            </div>
            <div class="col-12">
              <h5>Asal Rekening</h5>
              <h6 id="asalRekening">1</h6>
            </div>
            <div class="col-12">
              <h5>Total Transfer</h5>
              <h6 id="totalBayar">1</h6>
            </div>
            <div class="col-12">
              <h5>Waktu Bayar</h5>
              <h6 id="waktuBayar">1</h6>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger" id="btnBatal">Tidak Sesuai</a>
        <a class="btn btn-primary" id="btnKonfirmasi">Konfirmasi</a>
      </div>
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
                <th>Vendor</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
              </tr>
            </thead>
            <tbody id="bodyModalPesanan">
            </tbody>
          </table>
        </div>

        <h5 class="mt-2">Detail Pemesan</h5>
        <div class="table-responsive mb-2">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
              </tr>
            </thead>
            <tbody id="bodyModalPemesan">
            </tbody>
          </table>
        </div>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
