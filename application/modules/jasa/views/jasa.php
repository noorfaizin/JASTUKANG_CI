<div class="bg-light">
<<<<<<< HEAD
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
  <?php foreach ($jasa as $row): ?>
    <?php if (!empty($row)){ ?>
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
      <?php } else { ?>
        <div class="col-md-8">
          <div class="col-md-12 bg-white p-3 mb-3">
              <h4 class="m-0 text-dark">Jasa Tidak DiTemukan</h4>
          </div>
      <?php } ?>
      </div>
  <?php endforeach; ?>
  <div class="col-md-4">
    <div class="accordion desc-jasa" id="accordionExample">
      <div class="card">
        <div class="bg-warning p-1 card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="text-white btn btn-link btn-block text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Jasa Cat
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body bg-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
            terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="bg-warning p-1 card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="text-white btn btn-link btn-block text-left font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Jasa Listrik
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body bg-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
            terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
            labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="bg-warning p-1 card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="text-white btn btn-link btn-block text-left font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Jasa Atap
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body bg-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="bg-warning p-1 card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="text-white btn btn-link btn-block text-left font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Jas Keramik
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body bg-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
=======
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-11 mx-auto mt-4">
    <h3 class="m-0 text-dark mx-auto text-center font-weight-bold">Jasa Tukang</h3>
</div>

<div class="row col-md-10 mx-auto mt-4 p-0">
    <!-- Jasa Renovasi -->
    <div class="col-list-3 p-0" style="border-radius:15px">
      <div id="myProduct" class="recent-car-list">
        <div class="col-lg text-dark justify-content-center p-0">
          <a href="<?= base_url('jasa/renovasi') ?>">
            <div class="card m-0 shadow" style="border-radius:15px">
              <div  class="card-header text-center m-0">
                <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
              </div>
                  
              <div class="card-body p-0" style="margin-bottom:-10px;">
                <div class="col-md-12 bg-dark p-2">
                    <h5 class="text-white m-0">Jasa Renovasi</h5>
                </div>
                <div class="col-md-12 p-2">
                  <ul class="text-dark">
                    <li>Jasa Cat</li>
                    <li>Jasa Listrik</li>
                    <li>Jasa Atap</li>
                    <li>Jasa Keramik</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- jasa Instalasi -->
    <div class="col-list-3 p-0" style="border-radius:15px">
      <div id="myProduct" class="recent-car-list">
        <div class="col-lg text-dark justify-content-center p-0">
          <a href="<?= base_url('jasa/instalasi') ?>">
            <div class="card m-0 shadow" style="border-radius:15px">
              <div  class="card-header text-center m-0">
                <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
              </div>
                  
              <div class="card-body p-0" style="margin-bottom:-10px;">
                <div class="col-md-12 bg-dark p-2">
                    <h5 class="text-white m-0">Jasa Instalasi</h5>
                </div>
                <div class="col-md-12 p-2">
                  <ul class="text-dark">
                    <li>Jasa Cat</li>
                    <li>Jasa Listrik</li>
                    <li>Jasa Atap</li>
                    <li>Jasa Keramik</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- Jasa Pembangunan -->
    <div class="col-list-3 p-0" style="border-radius:15px">
      <div id="myProduct" class="recent-car-list">
        <div class="col-lg text-dark justify-content-center p-0">
          <a href="<?= base_url('jasa/pembangunan') ?>">
            <div class="card m-0 shadow" style="border-radius:15px">
              <div  class="card-header text-center m-0">
                <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
              </div>
                  
              <div class="card-body p-0" style="margin-bottom:-10px;">
                <div class="col-md-12 bg-dark p-2">
                    <h5 class="text-white m-0">Jasa Pembangunan</h5>
                </div>
                <div class="col-md-12 p-2">
                  <ul class="text-dark">
                    <li>Jasa Cat</li>
                    <li>Jasa Listrik</li>
                    <li>Jasa Atap</li>
                    <li>Jasa Keramik</li>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
</div>

<!-- DAFTAR JASA -->
<div class="col-md-12 mx-auto  mt-5 mb-5 p-3">
  <h3 class="text-dark text-center font-weight-bold mt-2 ">DAFTAR HARGA</h3>
  <div class="row col-md-11 mt-4 mx-auto mb-3 ">
    <div class="col-md-4 mx-auto">
      <div class="card shadow rounded">
        <div class="card-body bg-warning rounded">
            <h5 class="card-title m-b-0 text-white m-0">Jasa Renovasi</h5>
        </div>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">Jasa</th>
                <th scope="col">Borongan</th>
                <th scope="col">Harian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Chrome</td>
                <td>8850</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td>1200</td>
            </tr>
            <tr>
                <td>Internet Explorer</td>
                <td>1540</td>
            </tr>
            <tr>
                <td>Opera</td>
                <td>1230</td>
            </tr>
            <tr>
                <td>Safari</td>
                <td>1590</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-4 mx-auto">
      <div class="card shadow rounded">
        <div class="card-body bg-warning rounded">
            <h5 class="card-title m-b-0 text-white m-0">Jasa Instalasi</h5>
        </div>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">Jasa</th>
                <th scope="col">Borongan</th>
                <th scope="col">Harian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Chrome</td>
                <td>8850</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td>1200</td>
            </tr>
            <tr>
                <td>Internet Explorer</td>
                <td>1540</td>
            </tr>
            <tr>
                <td>Opera</td>
                <td>1230</td>
            </tr>
            <tr>
                <td>Safari</td>
                <td>1590</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-4 mx-auto">
      <div class="card shadow rounded">
        <div class="card-body bg-warning rounded">
            <h5 class="card-title m-b-0 text-white m-0">Jasa Pembangunan</h5>
        </div>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">Jasa</th>
                <th scope="col">Borongan</th>
                <th scope="col">Harian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Chrome</td>
                <td>8850</td>
            </tr>
            <tr>
                <td>Firefox</td>
                <td>1200</td>
            </tr>
            <tr>
                <td>Internet Explorer</td>
                <td>1540</td>
            </tr>
            <tr>
                <td>Opera</td>
                <td>1230</td>
            </tr>
            <tr>
                <td>Safari</td>
                <td>1590</td>
            </tr>
          </tbody>
        </table>
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
      </div>
    </div>
  </div>
</div>

<<<<<<< HEAD
=======

>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
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
<<<<<<< HEAD
=======

>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
