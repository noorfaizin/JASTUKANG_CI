<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi Material <span id="noTransaksi"><?= $id_transaksi ?></span></h1>
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
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="tabel_daftar">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- MODAL KONFIRMASI PEMBAYARAN -->
<div class="modal fade" id="modalUlasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Judul</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="berikan_ulasan">
          <form action="" method="post" id="saveUlasan">
            <div class="form-group">
              <label for="selectNilai">Nilai</label>
              <select class="form-control" id="selectNilai" name="nilai" required>
                <option value="">Berapa Nilai</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ulasanForm">Ulasan</label>
              <input type="text" class="form-control" id="ulasanForm" placeholder="Ulasan" name="ulasan" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </div>
          </form>
        </div>
        <div id="lihat_ulasan">
        
        </div>
      </div>
    </div>
  </div>
</div>
