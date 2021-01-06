<div class="container">
  <?php foreach($cart as $dp) : ?>
    <div class="card o-hidden border-0 shadow-lg my-5 pt-5  ">
      <div class="card-body p-0 row">
        <div class="col-xl-6 p-5">
          <img src="<?= base_url('assets/images/material/') .  $dp->path; ?>" alt="">
        </div>
        <div class="col-xl-6 p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4"><?= $dp->nama_material; ?></h1>
          </div>
          <form class="user" action="<?= base_url('Beranda/atc/') . $dp->id_material; ?>" method="post">
            <div class="form-group">
              <div class=" mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" name="qty" placeholder="qty" required>
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-block">
            Tambahkan
            </button>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
        <div class="card-body">
          <form class="user" method="POST" action="<?= base_url() ?>Beranda/co" autocomplete="off">
            <div class="form-group">
              <label for="namaPenerimaForm">Nama Penerima</label>
              <input type="text" class="form-control" id="namaPenerimaForm" placeholder="Nama Penerima" name="nama" required>
            </div>
            <div class="form-group">
              <label for="nomorPenerimaForm">Nomor Penerima</label>
              <input type="text" class="form-control" id="nomorPenerimaForm" placeholder="Nomor Penerima" name="nomor" required>
            </div>
            <div class="form-group">
              <label for="nomorPenerimaForm">Alamat Penerima</label>
              <input type="text" class="form-control" id="nomorPenerimaForm" placeholder="Alamat Penerima" name="alamat" required>
            </div>
            <div class="form-group">
              <label for="selectKecamatan">Kecamatan</label>
              <select class="form-control" id="selectKecamatan" name="kecamatan">
                <option>Pilih Kecamatan</option>
                <?php foreach($kecamatan as $kt) : ?>
                  <option value="<?= $kt->kecamatan ?>"><?= $kt->kecamatan ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="selectMetodePembayaran">Metode Pembayaran</label>
              <select class="form-control" id="selectMetodePembayaran" name="metode_pembayaran">
                <option>Pilih Metode Pembayaran</option>
                <?php foreach($metode_pembayaran as $kt) : ?>
                  <option value="<?= $kt->id_rekening ?>"><?= $kt->nama_rekening ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary float-right">Checkout</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
