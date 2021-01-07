
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
    <div class="col-6 offset-6">
      <a class="btn btn-success text-white" href="<?= base_url('Beranda/checkout') ?>">Checkout</a>
    </div>
  </div>
</div>
