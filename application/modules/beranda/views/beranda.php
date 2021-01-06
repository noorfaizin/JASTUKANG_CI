<div class="bg-light">
<div class="pb-5 pt-5 col-md-12" style="width:100%;background-size:cover;background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),url(<?= base_url('assets/images/home.jpg') ?>) repeat-x;">
  <div class="col-md-5 mx-auto mt-5">
    <h1 class="text-white title-home">Temukan Jasa Tukang <br> untuk kebutuhan anda</h1>
  </div>
  <!-- TEMUKAN JASA -->
  <div class="col-md-6 mt-3 mx-auto bg-white rounded shadow temukan-jasa" style="padding:10px 20px">
    <div class="row" style="margin-bottom:-10px">
      <div class="col-md-4">
<<<<<<< HEAD
        <form class="form-group" action="<?php echo base_url(); ?>jasa" method="post">
          <!-- KATEGORI JASA -->
            <div class="form-group">
              <label class="text-dark" for="exampleFormControlSelect1">Kategori Jasa :</label>
              <select class="form-control" id="kategori" name="kategori">
                <option>- Kategori Jasa -</option>
                <?php foreach ($kategori as $row): ?>
                  <option value="<?php echo $row->id_kategori_jasa; ?>"><?php echo $row->nama_kategori ?></option>
                <?php endforeach; ?>
              </select>
            </div>

          </div>
          <div class="col-md-5">
          <!-- PILIH JASA -->
            <div class="form-group">
              <label class="text-dark" for="exampleFormControlSelect1">Pilih Jasa :</label>
              <select class="form-control" id="subKat" name="subKat">
                <option>- Pilih Jasa -</option>
              </select>
            </div>

          </div>
          <div class="col-md-3 mb-3">
            <button type="submit" class="btn btn-sm btn-outline-warning shadow-sm mt-0 mt-lg-4">
              <i class="fas fa-search text-warning-50"></i> Temukan Jasa</button>
          </div>
        </form>
=======
      <!-- KATEGORI JASA -->
        <div class="form-group">
          <label class="text-dark" for="exampleFormControlSelect1">Kategori Jasa :</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>- Kategori Jasa -</option>
            <option>Renovasi</option>
            <option>Instalasi</option>
            <option>Pembangunan</option>
          </select>
        </div>

      </div>
      <div class="col-md-5">
      <!-- PILIH JASA -->
        <div class="form-group">
          <label class="text-dark" for="exampleFormControlSelect1">Pilih Jasa :</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>- Pilih Jasa -</option>
            <option>Cat</option>
            <option>Listrik</option>
            <option>Atap</option>
            <option>Keramik</option>
            <option>Gambar Arsitektur</option>
            <option>Las</option>
            <option>Kamar Mandi</option>
            <option>Kamar</option>
            <option>Wallpaper</option>
            <option>Dapur</option>
            <option>Plafon</option>
            <option>Taman</option>
          </select>
        </div>

      </div>
      <div class="col-md-3 mb-3">
        <a href="<?= base_url('jasa') ?>" class="btn btn-sm btn-outline-warning shadow-sm mt-0 mt-lg-4">
          <i class="fas fa-search text-warning-50"></i> Temukan Jasa</a>
      </div>
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
    </div>
  </div>

</div>
<!-- KATEGORI -->
<div class="row col-md-10 mt-5 mx-auto">
  <div class="col-md-6">
    <h6 class="text-dark">Promo</h6>
    <div class="col-md-12 bg-white mt-1 border rounded p-1">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo1.jpg') ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo2.jpg') ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo3.jpg') ?>" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <h6 class="text-dark kategori-terpopuler">Jasa Terpopuler</h6>
    <div class="col-md-12 bg-white mt-1 border rounded p-1"> a</div>
  </div>

  <!-- IKLAN DISINI -->
  <div class="col-md-12">
    <div class="col-md-12 bg-white mt-3 border rounded p-1">
      <img src="<?= base_url('assets/images/iklan.gif') ?>" style="width:100%">
    </div>
  </div>
</div>


<!-- content4 -->
<div class="col-md-10 mx-auto mt-5">
  <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs bg-light rounded" id="custom-tabs-three-tab" role="tablist">
        <li class="nav-item mx-auto w-25">
          <a class="nav-link active p-2 w-100 text-center" id="custom-tabs-three-renovasi-tab" data-toggle="pill" href="#custom-tabs-three-renovasi" role="tab" aria-controls="custom-tabs-three-renovasi" aria-selected="true">Jasa Renovasi</a>
        </li>
        <li class="nav-item mx-auto w-25">
          <a class="nav-link p-2 w-100 text-center" id="custom-tabs-three-instalasi-tab" data-toggle="pill" href="#custom-tabs-three-instalasi" role="tab" aria-controls="custom-tabs-three-instalasi" aria-selected="false">Jasa Instalasi</a>
        </li>
        <li class="nav-item mx-auto w-25">
          <a class="nav-link p-2 w-100 text-center" id="custom-tabs-three-pembangunan-tab" data-toggle="pill" href="#custom-tabs-three-pembangunan" role="tab" aria-controls="custom-tabs-three-pembangunan" aria-selected="false">Jasa Pembangunan</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-three-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-three-renovasi" role="tabpanel" aria-labelledby="custom-tabs-three-renovasi-tab">
<<<<<<< HEAD
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
        </div>
        <div class="tab-pane fade" id="custom-tabs-three-instalasi" role="tabpanel" aria-labelledby="custom-tabs-three-instalasi-tab">
            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
        </div>
        <div class="tab-pane fade" id="custom-tabs-three-pembangunan" role="tabpanel" aria-labelledby="custom-tabs-three-pembangunan-tab">
            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
=======
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur. 
        </div>
        <div class="tab-pane fade" id="custom-tabs-three-instalasi" role="tabpanel" aria-labelledby="custom-tabs-three-instalasi-tab">
            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
        </div>
        <div class="tab-pane fade" id="custom-tabs-three-pembangunan" role="tabpanel" aria-labelledby="custom-tabs-three-pembangunan-tab">
            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>


<!-- JASA YG KAMI TAWARKAN -->
<div class="row bg-white mt-5 shadow">
  <div class="row col-md-10 mx-auto p-3 mb-3">
    <div class="col-md-6">
      <div id="carouselJasa" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselJasa" data-slide-to="0" class="active"></li>
          <li data-target="#carouselJasa" data-slide-to="1"></li>
          <li data-target="#carouselJasa" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo1.jpg') ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo2.jpg') ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/images/promo/promo3.jpg') ?>" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="text-dark text-tawaran">JASA APA SAJA YANG KAMI TAWARKAN ?</div>
<<<<<<< HEAD
      <?php foreach ($kategori as $row): ?>
        <h6><?php echo $row->nama_kategori; ?></h6>
      <?php endforeach; ?>
      <div class="col-md-12">
        <a href="<?= base_url('jasa/daftarjasa') ?>" class="ml-3 btn text-dark btn-sm btn-warning shadow-sm ml-auto">
=======
      <h6>- Tukang Bangunan</h6>
      <h6>- Tukang Listrik</h6>
      <h6>- Tukang Kebun</h6>
      <h6>- Tukang Kayu</h6>
      <h6>- Tukang Las</h6>
      <h6>- Arsitek</h6>
      <div class="col-md-12">
        <a href="<?= base_url('jasa') ?>" class="ml-3 btn text-dark btn-sm btn-warning shadow-sm ml-auto">
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
          <i class="fas fa-clipboard-list text-dark-50"></i> Daftar Harga</a>
      </div>
    </div>
  </div>
</div>

<!-- MENGAPA MEMILIH JASTUKANG -->
<div class="row bg-white shadow m-0" style="width:100%;background-size:cover;background:url(<?= base_url('assets/images/sketch.png') ?>) repeat-x;">
  <div class="row col-md-10 mx-auto p-3">
    <div class="text-dark mengapa-memilih">MENGAPA MEMILIH JAS<b>TUKANG</b></div>
    <div class="row col-md-11 mx-auto mt-2">
      <div class="col-md-4">
        <img class="d-block img-alasan" src="<?= base_url('assets/images/alasan/koper.png') ?>">
        <p class="p-0 text-dark">Tukang bangunan yang ahli di bidangnya</p>
      </div>
      <div class="col-md-4">
        <img class="d-block img-alasan" src="<?= base_url('assets/images/alasan/stop.png') ?>">
        <p class="p-0 text-dark">Tukang bangunan profesional dan bertanggung jawab</p>
      </div>
      <div class="col-md-4">
        <img class="d-block img-alasan" src="<?= base_url('assets/images/alasan/like.png') ?>">
        <p class="p-0 text-dark">Tukang bangunan berpengalaman dari jawa yang berkualitas</p>
      </div>
    </div>
  </div>
</div>

<!-- HUBUNGI KAMI -->
<div class="row mt-3">
  <div class="row col-md-8 mx-auto">
    <div class="col-md-9 tanya-cepat text-dark">Tanya cepat untuk proyek yang akan anda berikan kepada kami</div>
    <div class="col-md-3">
      <a href="#" class="btn-hub btn text-dark btn-md btn-warning shadow-sm ml-auto">
        <i class="fas fa-phone text-dark-50"></i> Hubungi Kami</a>
    </div>
  </div>
</div>

<!-- PENDAFTARAN TUKANG -->
<div class="row mt-4">
  <!-- PC -->
  <div class="row col-md-10 mx-auto penyedia-pc">
    <img class="img-penyedia" src="<?= base_url('assets/images/daftar-tukang.png') ?>" style="width:100%">
    <div class="col-md-6 text-penyedia">
      <div class="title-penyedia">MENJADI PENYEDIA JASA</div>
      <div class="isi-penyedia">Kami akan menghubungkan Anda dengan customer sehingga Anda dapat meningkatkan kinerja bisnis Anda.</div>
      <a href="#" class="btn btn-md btn-dark shadow-sm ml-auto">Daftarkan Sekarang</a>
    </div>
  </div>
  <!-- RESP -->
  <div class="row col-md-10 mx-auto penyedia-resp">
    <div class="row col-md-12 mx-auto">
      <div class="col-md-3">
        <img class="img-penyedia-resp mt-3" src="<?= base_url('assets/images/daftar-tukang-resp.png') ?>">
      </div>
      <div class="col-md-6 text-penyedia-resp">
        <div class="title-penyedia-resp">MENJADI PENYEDIA JASA</div>
        <div class="isi-penyedia-resp">Kami akan menghubungkan Anda dengan customer sehingga Anda dapat meningkatkan kinerja bisnis Anda.</div>
        <a href="#" class="btn btn-md btn-dark shadow-sm ml-auto">Daftarkan Sekarang</a>
      </div>
    </div>
  </div>
</div>
<<<<<<< HEAD
=======





>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
