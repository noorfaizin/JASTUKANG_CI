<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-11 mx-auto mt-4">
    <h3 class="m-0 text-dark mx-auto text-center font-weight-bold">Jasa Tukang</h3>
</div>

<div class="row col-md-10 mx-auto mt-4 p-0">
    <!-- Jasa Renovasi -->
    <?php foreach ($kategori as $row): ?>
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
                      <h5 class="text-white m-0"><?php echo $row['nama_kategori']; ?></h5>
                  </div>
                  <div class="col-md-12 p-2">
                    <ul class="text-dark">
                      <?php foreach ($row['jasa_sub_kategori'] as $sub): ?>
                        <li><?php echo $sub['nama_sub_kategori_jasa'] ?> </li>
                      <?php endforeach; ?>
                      <!-- <li>Jasa Listrik</li>
                      <li>Jasa Atap</li>
                      <li>Jasa Keramik</li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- jasa Instalasi -->
    <!-- <div class="col-list-3 p-0" style="border-radius:15px">
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
    </div> -->
    <!-- Jasa Pembangunan -->
    <!-- <div class="col-list-3 p-0" style="border-radius:15px">
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
</div> -->

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
      </div>
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
