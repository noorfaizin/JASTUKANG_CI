<div class="bg-light">
<div class="col-md-12 p-0 m-0" style="">
  <div id="carouselExampleIndicators" class="carousel slide carousel-jasa" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url('assets/images/jasa/cat.jpg') ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/images/jasa/listrik.jpg') ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/images/jasa/atap.jpg') ?>" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/images/jasa/keramik.jpg') ?>" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="row col-md-11 mx-auto mt-4 p-0">
  <?php if (!empty($jasa)){ ?>
  <?php foreach ($jasa as $row): ?>
      <div class="col-md-8">
        <div class="col-md-12 bg-white p-3 mb-3">
          <?php if (!empty ($row->sub)){ ?>
            <h4 class="m-0 text-dark"><?php echo $row->sub; ?></h4>
          <?php }else{ ?>
            <h4 class="m-0 text-dark">All Jasa</h4>
          <?php } ?>
        </div>
        <div class="col-list-3 p-0" style="border-radius:15px">
          <div id="myProduct" class="recent-car-list">
            <div class="col-lg text-dark justify-content-center p-0">
              <a href="<?= base_url() ?>jasa/detailjasa/<?php echo $row->id_jasa ?>">
                <div class="card m-0 shadow" style="border-radius:15px">
                  <div  class="card-header text-center m-0">
                    <img src="<?= base_url() ?>/assets/images/<?php //echo $row->gambar ?>icon.png" class="card-img-top rounded" alt="image">
                  </div>

                  <div class="card-body p-0" style="margin-bottom:-10px;">
                    <div class="col-md-12 bg-dark p-2">
                        <h5 class="text-white m-0"><?php echo $row->nama_jasa; ?></h5>
                    </div>
                    <div class="col-md-12 p-2 pb-4">
                      <div class="font-weight-light font-italic text-dark" style="font-size:20px">Harga :</div>
                      <div class="col-md-12">
                        <h5 class="badge badge-success font-weight-light mr-1">Borongan</h5>
                        <medium>
                          Rp. <?php echo number_format($row->harga_borongan) ?> ,-/
                          <?php if ($row->satuan == 1){ ?>
                            titik
                          <?php }else if ($row->satuan == 2){ ?>
                            m2
                          <?php }else if ($row->satuan == 3){ ?>
                            m3
                          <?php } ?>
                        </medium>
                      </div>
                      <div class="col-lg-12">
                        <h5 class="badge badge-success font-weight-light mr-1">Harian</h5><medium>Rp. <?php echo number_format($row->harga_harian) ?> ,-/ hari</medium>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
    <?php endforeach; ?>
      <?php } else { ?>
        <div class="col-md-8">
          <div class="col-md-12 bg-white p-3 mb-3">
              <h4 class="m-0 text-dark">Jasa Tidak DiTemukan</h4>
          </div>
      <?php } ?>
      </div>
  <div class="col-md-4">
    <div class="accordion desc-jasa" id="accordionExample">
      <h4 class="m-0 text-dark">Kategori</h4>
      <?php foreach ($kategori as $row): ?>
        <div class="card">
          <div class="bg-warning p-1 card-header" id="">
            <h2 class="mb-0">
              <button class="text-white btn btn-link btn-block text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                <?php echo $row['nama_kategori'] ?>
              </button>
            </h2>
          </div>
          <div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
            <div class="card-body bg-white">
              <?php foreach ($row['jasa_sub_kategori'] as $sub): ?>
                <li> <a href="<?php echo base_url() . 'jasa/' . $row['id_kategori_jasa']. '/' . $sub['id_sub_kategori_jasa'] ?>"><?php echo $sub['nama_sub_kategori_jasa'] ?></a> </li>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- HUBUNGI KAMI -->
<div class="row mt-4">
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
