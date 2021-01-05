<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-10 mx-auto bg-white p-3 mt-4 rounded">
    <h6 class="m-0 text-dark">Detail Jasa</h6>
</div>
<div class="row col-md-10 mx-auto bg-white p-3 mt-3 rounded">
    <div class="col-md-5">
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
    
    <div class="col-md-7">
        <h5 class="badge badge-warning mt-4">Kategori Jasa</h5>
        <h4 class="font-weight-bold text-dark">Title Jasa</h4>
        <hr>
        <div class="form-group">
            <input type="text" class="form-control" id="uraian-jasa" name="uraian-jasa" placeholder="/meter">
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Sematkan foto</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Deskripsi pemesanan..." name="desc-pemesanan"></textarea>
        </div>
        <hr>
        
        <small class="font-weight-light font-italic">Kecamatan :</small>
        <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>- Kecamatan -</option>
            <option>Kecamatan 1</option>
            <option>Kecamatan 2</option>
            <option>Kecamatan 3</option>
            <option>Kecamatan 4</option>
          </select>
        </div>
        <small class="font-weight-light font-italic">Kelurahan :</small>
        <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>- Kelurahan -</option>
            <option>Kelurahan 1</option>
            <option>Kelurahan 2</option>
            <option>Kelurahan 3</option>
            <option>Kelurahan 4</option>
          </select>
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Deskripsi alamat..." name="desc-alamat"></textarea>
        </div>
        <a href="#" class=" btn text-dark btn-md btn-warning shadow-sm mb-3">Lanjutkan</a>
        
    </div>


    
    <div class="col-md-12 mt-3 mb-3">
        <span class="font-weight-bold font-italic text-gray">"</span>
            <small class="font-italic text-gray">
                Deskripsi Jasa
            </small>
        <span class="font-weight-bold font-italic text-gray">"</span>
        <hr>
        <div class="row">
            <div class="col-md-7">
                <div class="row col-md-12">
                    <div class="font-weight-light font-italic text-danger" style="font-size:12px">Harga :</div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-3 col-sm-3">
                        <h5 class="badge badge-success font-weight-light">Borongan</h5>
                        <h6>Rp. 20000 ,-</h6>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h5 class="badge badge-success font-weight-light">Harian</h5>
                        <h6>Rp. 100000 ,-</h6>
                    </div>
                    <div class="col-md-12">
                        <small class="font-italic text-gray">
                            <li>Harga borongan adalah harga per meter, dari jasa yang dipilih.</li>
                            <li>Harga harian adalah harga per hari, dari jasa yang dipilih.</li>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row col-md-12 mt-3 mt-md-0">
                    <div class="font-weight-light font-italic text-danger" style="font-size:12px">Kemampuan Tukang :</div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4 class="font-weight-light text-success">10 Meter /hari</h4>
                    </div>
                    <div class="col-md-12">
                        <small class="font-italic text-gray">
                            <li>Kemampuan per tukang</li>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jasa Terkait -->
<div class="row col-md-10 mx-auto mt-4">
    <div class="col-md-7 bg-white rounded p-3">
        <h6 class="font-italic text-danger">Jasa Terkait</h6>
        <ul class="m-0 p-0">
            <li class="d-block">
                <a href="#" class="d-block p-2">Jasa Cat</a>
            </li>
            <li class="d-block">
                <a href="#" class="d-block p-2">Jasa Listrik</a>
            </li>
            <li class="d-block">
                <a href="#" class="d-block p-2">Jasa Atap</a>
            </li>
            <li class="d-block">
                <a href="#" class="d-block p-2">Jasa Kramik</a>
            </li>
        </ul>
    </div>
    <div class="row col-md-5 mx-auto pt-3">
        <div class="col-2">
            <img class="d-block w-100" src="<?= base_url('assets/images/icon.png') ?>">
        </div>
        <div class="col-10">
            <h5>Tanya cepat untuk proyek yang akan anda berikan kepada kami</h5>
            <a href="#" class="btn text-dark btn-md btn-warning shadow-sm ml-auto">
                <i class="fas fa-phone text-dark-50"></i> Hubungi Kami</a>
        </div>
    </div>
</div>