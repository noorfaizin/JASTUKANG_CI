<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-10 mx-auto bg-white p-3 mt-4 mb-3 rounded">
    <h6 class="m-0 text-dark">Detail Produk</h6>
</div>
<div class="row col-md-10 mx-auto p-0">
    <div class="col-md-5 mb-3">
        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
            <ol class="carousel-indicators-image">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" style="width:70px;"class="active">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="First slide">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" style="width:70px;">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="First slide">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" style="width:70px;">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="First slide">
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>" alt="Third slide">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7 mx-auto bg-white p-3">
        <h5 class="badge badge-warning">Kategori Produk</h5>
        <h4 class="font-weight-bold text-dark">Title Produk</h4>
        <hr>
        <!-- HARGA PRODUK -->
        <div class="row col-md-12 mt-3">
            <div class="col-md-2">
                <h6>Harga</h6>
            </div>
            <div class="col-md-9">
                <h4 class="text-danger">Rp. 50000</h4>
            </div>
        </div>
        <!-- QTY -->
        <div class="row col-md-12 mt-3">
            <div class="col-md-2">
                <h6>Jumlah</h6>
            </div>
            <div class="col-md-9">
                <a href="#" class="btn btn-sm btn-warning text-dark font-weight-bold">-</a>
                <input type="text" class="jml-produk" placeholder="1">
                <a href="#" class="btn btn-sm btn-warning text-dark font-weight-bold">+</a>
            </div>
        </div>
        <hr>
        <!-- ACTION -->
        <div class="col-md-12 mt-3">
            
            <a href="#" class="btn btn-md btn-outline-warning text-dark" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-money-bill-alt"></i> Beli Sekarang</a>
            </a>
            <a href="<?= base_url('cart'); ?>" class="btn btn-md btn-warning text-dark">
                <i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</a>
        </div>
        <!-- DESC -->
        <div class="col-md-12 mt-3">
            <div class="col-md">
                <small class="text-secondary font-italic">Deskripsi :</small>
            </div>
            <div class="col-md ml-2">
                <h6 class="text-dark font-weight-light">Deskripsi produk</h6>
            </div>
        </div>
    </div>
</div>

<div class="col-md-10 mx-auto bg-white p-3 mt-4 mb-3 rounded">
    <!-- PRODUK TERKAIT -->
    <div class="col-md-12 text-center mt-3">
        <h3 class="font-weight-bold text-dark">Produk Terkait</h3>
    </div>
    <div class="row ">
        <!-- Perulangan Produk -->
        <div class="col-list-4 p-0">
            <div id="myProduct" class="recent-car-list">
                <div class="col-lg text-dark justify-content-center p-0">
                <a href="<?= base_url('produk/detail')?>">
                    <div class="card m-0">
                        <div  class="card-header text-center m-0 bg-white">
                            <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
                        </div>
                        <div class="card-body p-0">
                            <div class="col-md p-2 mb-2">
                                <small class="text-danger">Rp. 25000 ,-</small>
                                <h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
                                <span class="badge badge-secondary font-weight-light">Kategori</span>
                            </div>
                            <a href="<?= base_url('cart'); ?>" class="btn btn-sm btn-warning d-block"><i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</a>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <!-- Perulangan Produk -->
        <div class="col-list-4 p-0">
            <div id="myProduct" class="recent-car-list">
                <div class="col-lg text-dark justify-content-center p-0">
                <a href="<?= base_url('produk/detail')?>">
                    <div class="card m-0">
                        <div  class="card-header text-center m-0 bg-white">
                            <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
                        </div>
                        <div class="card-body p-0">
                            <div class="col-md p-2 mb-2">
                                <small class="text-danger">Rp. 25000 ,-</small>
                                <h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
                                <span class="badge badge-secondary font-weight-light">Kategori</span>
                            </div>
                            <a href="<?= base_url('cart'); ?>" class="btn btn-sm btn-warning d-block"><i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</a>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <!-- Perulangan Produk -->
        <div class="col-list-4 p-0">
            <div id="myProduct" class="recent-car-list">
                <div class="col-lg text-dark justify-content-center p-0">
                <a href="<?= base_url('produk/detail')?>">
                    <div class="card m-0">
                        <div  class="card-header text-center m-0 bg-white">
                            <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
                        </div>
                        <div class="card-body p-0">
                            <div class="col-md p-2 mb-2">
                                <small class="text-danger">Rp. 25000 ,-</small>
                                <h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
                                <span class="badge badge-secondary font-weight-light">Kategori</span>
                            </div>
                            <a href="<?= base_url('cart'); ?>" class="btn btn-sm btn-warning d-block"><i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</a>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <!-- Perulangan Produk -->
        <div class="col-list-4 p-0">
            <div id="myProduct" class="recent-car-list">
                <div class="col-lg text-dark justify-content-center p-0">
                <a href="<?= base_url('produk/detail')?>">
                    <div class="card m-0">
                        <div  class="card-header text-center m-0 bg-white">
                            <img src="<?= base_url('assets/images/icon.png') ?>" class="card-img-top rounded" alt="image">
                        </div>
                        <div class="card-body p-0">
                            <div class="col-md p-2 mb-2">
                                <small class="text-danger">Rp. 25000 ,-</small>
                                <h6 class="text-dark m-0">Cat Altex <small class="font-weight-light font-italic text-success">(1 Kilo)</small></h6>
                                <span class="badge badge-secondary font-weight-light">Kategori</span>
                            </div>
                            <a href="<?= base_url('cart'); ?>" class="btn btn-sm btn-warning d-block"><i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</a>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HUBUNGI KAMI -->
<div class="row mt-5 mb-5">
  <div class="row col-md-8 mx-auto">
    <div class="col-md-9 tanya-cepat text-dark">Tanya cepat untuk proyek yang akan anda berikan kepada kami</div>
    <div class="col-md-3">
      <a href="#" class="btn-hub btn text-dark btn-md btn-warning shadow-sm ml-auto">
        <i class="fas fa-phone text-dark-50"></i> Hubungi Kami</a>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-warning">
        <h5 class="modal-title font-weight-bold mx-auto text-white" id="exampleModalLabel">JasTukang</h5>
      </div>
      <div class="modal-body">
        <h6 class="text-center text-dark">Sertakan bukti transfer untuk melanjutkan</h6>
        <div class="col-md-12 mt-3">
            <div class="custom-file mb-3">
                <input type="file" multiple name="image_name[]" class="custom-file-input" id="gallery-photo-add" required>
                <label class="custom-file-label" for="validatedCustomFile">Bukti Transfer</label>
                <div class="gallery" ></div>
            </div>
        </div>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        <a href="<?= base_url('#')?>" class="btn btn-warning">Transaksi</a>
      </div>
    </div>
  </div>
</div>