<div class="bg-light">
<div class="row col-md-12 mx-auto" style="margin-top:70px"></div>

<div class="col-md-11 mx-auto mt-4">
    <h3 class="m-0 text-dark mx-auto text-center font-weight-bold">Testimonial</h3>
</div>

<!-- TESTIMONIAL -->
<div class="col-md-10 mx-auto bg-white p-3 mt-4 rounded">
	<div class="testimoni">
        <table class="table bordered">
            <tbody>
                <tr>
                    <td class="row ulasan">
                        <div class="col-md-1">
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon.png') ?>" style="width:50px">
                        </div>
                        <div class="col-md-9">
                            <h6 class="text-warning m-0 font-weight-bold nama-pengulas">Nama Customer <br>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                            </h6>
                            <small>"Komentar customer"</small>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="row ulasan">
                        <div class="col-md-1">
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon.png') ?>" style="width:50px">
                        </div>
                        <div class="col-md-9">
                            <h6 class="text-warning m-0 font-weight-bold nama-pengulas">Nama Customer <br>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                            </h6>
                            <small>"Komentar customer"</small>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="row ulasan">
                        <div class="col-md-1">
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon.png') ?>" style="width:50px">
                        </div>
                        <div class="col-md-9">
                            <h6 class="text-warning m-0 font-weight-bold nama-pengulas">Nama Customer <br>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                            </h6>
                            <small>"Komentar customer"</small>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="row ulasan">
                        <div class="col-md-1">
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon.png') ?>" style="width:50px">
                        </div>
                        <div class="col-md-9">
                            <h6 class="text-warning m-0 font-weight-bold nama-pengulas">Nama Customer <br>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                                <i class="fas fa-star text-dark-50"></i>
                            </h6>
                            <small>"Komentar customer"</small>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
	<div class="row mx-auto p-3 mt-3 rounded shadow">
		<div class="col-md-9">
			<h3 class="text-dark m-0 text-center">Tulis komentar anda disini</h3>
		</div>
		<div class="col-md-3">
			<a href="#" class="btn btn-md btn-success mx-auto d-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pen"></i> Tulis Komentar</a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-warning">
        <h5 class="modal-title font-weight-bold mx-auto text-white" id="exampleModalLabel">JasTukang</h5>
      </div>
      <div class="modal-body">
        Untuk komentar, anda harus masuk terlebih dahulu
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('user/login')?>" class="btn btn-warning">Masuk</a>
      </div>
    </div>
  </div>
</div>