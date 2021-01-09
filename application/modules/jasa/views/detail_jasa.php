<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-10 mx-auto bg-white p-3 mt-4 rounded">
    <h6 class="m-0 text-dark">Detail Jasa</h6>
</div>
<?php if (!empty($jasa)){ ?>
<div class="row col-md-10 mx-auto bg-white p-3 mt-3 rounded">
    <?php foreach ($jasa as $row){ ?>
      <div class="col-md-5">
          <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
              <ol class="carousel-indicators-image">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" style="width:70px;" class="active">
                      <img class="d-block w-100" src="<?= base_url('assets/images/jasa/'). $row->gambar; ?>" alt="<?php echo $row->gambar; ?>">
                  </li>
                  <?php $i = 1; ?>
                  <?php if (!empty($gambar)): ?>
                    <?php foreach ($gambar as $img): ?>
                      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i++ ?>" style="width:70px;">
                          <img class="d-block w-100" src="<?= base_url('assets/images/jasa/galery/').$img->path ?>" alt="<?php echo $img->nama_gambar ?>e">
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active" style="height:400px;">
                      <img class="d-block w-100" src="<?= base_url('assets/images/jasa/') . $row->gambar; ?>" alt="<?php echo $row->gambar ?>">
                  </div>
                  <?php if (!empty($gambar)): ?>
                    <?php foreach ($gambar as $img): ?>
                      <div class="carousel-item" style="height:400px;">
                          <img class="d-block w-100" src="<?= base_url('assets/images/jasa/galery/') . $img->path ?>" alt="<?php echo $img->nama_gambar ?>" >
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>
      </div>

        <div class="col-md-7">
            <h5 class="badge badge-warning mt-4"><?php echo $row->kat .' ' . $row->sub; ?></h5>
            <h4 class="font-weight-bold text-dark"><?php echo $row->nama_jasa; ?></h4>
            <hr>
            <div class="form-group">
                <small class="font-weight-light font-italic">Ukuran :</small>
                <?php if ($row->satuan == 1){?>
                    <input type="text" class="form-control w-25" id="uraian-jasa" name="titik" placeholder="Titik">
                <?php }else if ($row->satuan == 2){ ?>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control mb-2" id="uraian-jasa" name="panjang" placeholder="Panjang">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="uraian-jasa" name="lebar" placeholder="Lebar">
                        </div>
                    </div>
                <?php }else if($row->satuan == 3){ ?>
                    <input type="text" class="form-control" id="uraian-jasa" name="panjang" placeholder="Panjang">
                    <input type="text" class="form-control" id="uraian-jasa" name="lebar" placeholder="Lebar">
                    <input type="text" class="form-control" id="uraian-jasa" name="tinggi" placeholder="Tinggi">
                <?php } ?>
            </div>
            <hr>
            <div class="custom-file mb-3">
                <input type="file" multiple name="image_name[]" class="custom-file-input" id="gallery-photo-add" required>
                <label class="custom-file-label" for="validatedCustomFile">Sematkan foto</label>
                <div class="gallery" ></div>
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Deskripsi pemesanan..." name="desc-pemesanan"></textarea>
            </div>
            <hr>

            <small class="font-weight-light font-italic">Kecamatan :</small>
            <div class="form-group">
                <select class="form-control" id="kec" name="kec">
                <option>- Kecamatan -</option>
                    <?php foreach ($kecamatan as $kec): ?>
                        <option value="<?php echo $kec->id_lokasi; ?>"><?php echo $kec->kecamatan; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- <small class="font-weight-light font-italic">Kelurahan :</small>
            <div class="form-group">
                <select id="kel" name="kel" class="form-control">
                    <option>- Kelurahan -</option>
                </select>
            </div> -->
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Deskripsi alamat..." name="desc-alamat"></textarea>
            </div>
            <a href="#" class="btn text-dark btn-md btn-warning shadow-sm mb-3" data-toggle="modal" data-target="#exampleModal">Lanjutkan <i class="fas fa-arrow-alt-circle-right"></i></a>

        </div>



        <div class="col-md-12 mt-3 mb-3">
            <p class="font-weight-light font-italic text-gray" style="text-indent:50px;text-align: justify">
                <span class="font-weight-bold font-italic text-dark">"</span>
                    <?php 
                        if(!$row->deskripsi){
                            echo 'Tidak ada deskripsi';
                        }else{
                            echo $row->deskripsi;
                        }
                    ?>
                <span class="font-weight-bold font-italic text-dark">"</span>
            </p>
            <hr>
            <div class="row">
                <div class="col-md-7">
                    <div class="row col-md-12">
                        <div class="font-weight-light font-italic text-danger" style="font-size:12px">Harga :</div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-3 col-sm-3">
                            <h5 class="badge badge-success font-weight-light">Borongan</h5>
                            <h6>Rp. <?php echo number_format($row->harga_borongan); ?> ,-</h6>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h5 class="badge badge-success font-weight-light">Harian</h5>
                            <h6>Rp. <?php echo number_format($row->harga_harian); ?> ,-</h6>
                        </div>
                        <div class="col-md-12">
                            <small class="font-italic text-gray">
                                <li>Harga belum termasuk bahan bangunan.</li>
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
    <?php } ?>
    </div>
  <?php }else{ ?>
    <div class="row col-md-10 mx-auto bg-white p-3 mt-3 rounded">
      <h3>Jasa Tidak Ditemukan</h3>
    </div>
  <?php } ?>
<!-- Jasa Terkait -->
<div class="row col-md-10 mx-auto mt-4">
    <div class="col-md-7 bg-white rounded p-3">
        <h6 class="font-italic text-danger">Jasa <?= $row->kat ?> Terkait !!</h6>
        <ul class="m-0 p-0">
        <?php foreach ($kategori as $row): ?>
            <li class="d-block">
                <a href="<?php echo base_url() . 'jasa/' . $row['id_kategori_jasa']. '/' . $row['id_sub_kategori_jasa'] ?>" class="d-block p-2"><?php echo $row['nama_sub_kategori_jasa'] ?></a>
            </li>
        <?php endforeach; ?>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-warning">
        <h5 class="modal-title font-weight-bold mx-auto text-white" id="exampleModalLabel">JasTukang</h5>
      </div>
      <div class="modal-body">
        <h6 class="text-center text-dark">Lanjutkan untuk bertransaksi</h6>
        <div class="col-md-12 mt-3">
            <small class="font-italic">Estimasi harga :</small><br>
            <link rel="stylesheet" href="<?= base_url('assets/scss/_radiobutton.scss')?>">
                <section>
                <div>
                <input type="radio" id="control_01" name="select" value="1" checked>
                    <label for="control_01">
                        <h2>Harian</h2>
                        <table class="text-left">
                            <tr>
                                <td>Ukuran</td>
                                <td>:</td>
                                <td>P x L</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Rp. 100000 ,-</td>
                            </tr>
                        </table>
                    </label>
                </div>
                <div>
                <input type="radio" id="control_02" name="select" value="2">
                    <label for="control_02">
                        <h2>Borongan</h2>
                        <table class="text-left">
                            <tr>
                                <td>Ukuran</td>
                                <td>:</td>
                                <td>P x L</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Rp. 20000 ,-</td>
                            </tr>
                        </table>
                    </label>
                </div>
                </section>
            <br>
        </div>
        <div class="col-md-12">
            <small class="font-italic">Hari yang ditentukan :</small><br>
            <div class="input-group">
                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div><br>
        <div class="col-md-12">
            <small class="font-italic">Hari selesai dikerjakan :</small><br>
            <div class="input-group">
                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        <a href="<?= base_url('user/transaksi_jasa')?>" class="btn btn-warning">Transaksi</a>
      </div>
    </div>
  </div>
</div>